<?php
/**
 * Database setup — creates wp_tscustomerleads if missing
 */
$host = '194.59.164.102';
$db   = 'u638574371_tealsmilegmb';
$user = 'u638574371_tealsmileadmin';
$pass = 'gmb#24$mileTeal25';

try {
    $pdo = new PDO(
        "mysql:host={$host};dbname={$db};charset=utf8mb4",
        $user,
        $pass,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_TIMEOUT => 15,
        ]
    );

    echo "CONNECTED OK\n";

    $sql = "CREATE TABLE IF NOT EXISTS wp_tscustomerleads (
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
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci";

    $pdo->exec($sql);
    echo "TABLE wp_tscustomerleads READY\n";

    $cols = $pdo->query('DESCRIBE wp_tscustomerleads')->fetchAll();
    foreach ($cols as $col) {
        echo $col['Field'] . ' | ' . $col['Type'] . "\n";
    }
} catch (Throwable $e) {
    fwrite(STDERR, 'ERROR: ' . $e->getMessage() . "\n");
    exit(1);
}
