<?php
/**
 * TEALSMILE TECHNOLOGIES — Contact Enquiry API
 * POST /api/submit-enquiry.php
 * Saves lead into wp_tscustomerleads
 */

declare(strict_types=1);

header('Content-Type: application/json; charset=utf-8');
header('X-Content-Type-Options: nosniff');

// Allow same-origin browser requests; tighten CORS if needed for production domains
if (isset($_SERVER['HTTP_ORIGIN'])) {
    $origin = $_SERVER['HTTP_ORIGIN'];
    $allowed = [
        'https://tealsmile.com',
        'https://www.tealsmile.com',
        'http://localhost',
        'http://127.0.0.1',
    ];
    foreach ($allowed as $ok) {
        if (stripos($origin, $ok) === 0) {
            header('Access-Control-Allow-Origin: ' . $origin);
            header('Vary: Origin');
            break;
        }
    }
}

header('Access-Control-Allow-Methods: POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type, Accept');

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(204);
    exit;
}

function ts_json(int $code, bool $success, string $message, array $extra = []): void
{
    http_response_code($code);
    echo json_encode(array_merge([
        'success' => $success,
        'message' => $message,
    ], $extra), JSON_UNESCAPED_UNICODE);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    ts_json(405, false, 'Method not allowed. Please submit the form using POST.');
}

// Accept JSON or classic form-encoded bodies
$raw = file_get_contents('php://input');
$data = [];

$contentType = $_SERVER['CONTENT_TYPE'] ?? $_SERVER['HTTP_CONTENT_TYPE'] ?? '';
if (stripos($contentType, 'application/json') !== false && $raw !== false && $raw !== '') {
    $decoded = json_decode($raw, true);
    if (!is_array($decoded)) {
        ts_json(400, false, 'Invalid JSON payload.');
    }
    $data = $decoded;
} else {
    $data = $_POST;
}

$name    = trim((string) ($data['name'] ?? ''));
$company = trim((string) ($data['company'] ?? ''));
$email   = trim((string) ($data['email'] ?? ''));
$phone   = trim((string) ($data['phone'] ?? ''));
$message = trim((string) ($data['message'] ?? ''));

$errors = [];

if ($name === '' || mb_strlen($name) < 2) {
    $errors['name'] = 'Please enter your full name.';
} elseif (mb_strlen($name) > 100) {
    $errors['name'] = 'Name must be 100 characters or fewer.';
}

if ($company !== '' && mb_strlen($company) > 100) {
    $errors['company'] = 'Company must be 100 characters or fewer.';
}

if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = 'Please enter a valid email address.';
} elseif (mb_strlen($email) > 150) {
    $errors['email'] = 'Email must be 150 characters or fewer.';
}

$phoneDigits = preg_replace('/\D+/', '', $phone) ?? '';
if ($phone === '' || strlen($phoneDigits) < 10) {
    $errors['phone'] = 'Please enter a valid phone number.';
} elseif (mb_strlen($phone) > 20) {
    $errors['phone'] = 'Phone must be 20 characters or fewer.';
}

if ($message === '' || mb_strlen($message) < 10) {
    $errors['message'] = 'Please enter a message (at least 10 characters).';
} elseif (mb_strlen($message) > 300) {
    $errors['message'] = 'Message must be 300 characters or fewer.';
}

if ($errors !== []) {
    ts_json(422, false, 'Please correct the highlighted fields and try again.', [
        'errors' => $errors,
    ]);
}

require_once __DIR__ . '/db.php';

try {
    $pdo = ts_db();

    // Ensure table exists (safe if already created)
    $pdo->exec("CREATE TABLE IF NOT EXISTS wp_tscustomerleads (
        id INT UNSIGNED NOT NULL AUTO_INCREMENT,
        name VARCHAR(150) NOT NULL,
        company VARCHAR(150) DEFAULT NULL,
        email VARCHAR(190) NOT NULL,
        phone VARCHAR(30) NOT NULL,
        message TEXT NOT NULL,
        source VARCHAR(100) DEFAULT 'website_contact_form',
        ip_address VARCHAR(45) DEFAULT NULL,
        user_agent VARCHAR(255) DEFAULT NULL,
        status VARCHAR(30) NOT NULL DEFAULT 'new',
        created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
        updated_at TIMESTAMP NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
        PRIMARY KEY (id),
        KEY idx_email (email),
        KEY idx_status (status),
        KEY idx_created_at (created_at)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci");

    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'] ?? $_SERVER['REMOTE_ADDR'] ?? null;
    if (is_string($ip) && str_contains($ip, ',')) {
        $ip = trim(explode(',', $ip)[0]);
    }
    $ua = isset($_SERVER['HTTP_USER_AGENT']) ? substr((string) $_SERVER['HTTP_USER_AGENT'], 0, 255) : null;

    $stmt = $pdo->prepare(
        'INSERT INTO wp_tscustomerleads
            (name, company, email, phone, message, source, ip_address, user_agent, status)
         VALUES
            (:name, :company, :email, :phone, :message, :source, :ip_address, :user_agent, :status)'
    );

    $stmt->execute([
        ':name'       => $name,
        ':company'    => $company !== '' ? $company : null,
        ':email'      => $email,
        ':phone'      => $phone,
        ':message'    => $message,
        ':source'     => 'website_contact_form',
        ':ip_address' => is_string($ip) ? substr($ip, 0, 45) : null,
        ':user_agent' => $ua,
        ':status'     => 'new',
    ]);

    $leadId = (int) $pdo->lastInsertId();

    ts_json(201, true, 'Thank you! Your enquiry has been submitted successfully. Our team will contact you shortly.', [
        'lead_id' => $leadId,
    ]);
} catch (Throwable $e) {
    error_log('TEALSMILE enquiry API error: ' . $e->getMessage());
    ts_json(500, false, 'Sorry, we could not save your enquiry right now. Please try again or call us at 9920777048.');
}
