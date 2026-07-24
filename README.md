# TEALSMILE TECHNOLOGIES — Corporate Website

Premium, SEO-optimized single-page corporate website for **TEALSMILE TECHNOLOGIES** — a digital marketing, software development and automation company serving Mumbai, Navi Mumbai, Thane, Palghar and Maharashtra.

**Live URL:** [https://tealsmile.com/](https://tealsmile.com/)

---

## Tech Stack

| Layer | Technology |
|-------|------------|
| Backend | PHP 8+ (static page bootstrap only) |
| Markup | HTML5 (semantic) |
| Styles | CSS3 + Bootstrap 5 |
| Scripts | Vanilla JavaScript |
| Icons | Font Awesome 6 |
| Fonts | Google Fonts — Poppins |
| Database | None (fully static) |

---

## Folder Structure

```
tealsmile/
├── index.php              # Main SPA page (SEO + content)
├── robots.txt             # Crawler directives
├── sitemap.xml            # XML sitemap
├── .htaccess              # Apache performance & security
├── README.md
└── assets/
    ├── css/
    │   └── style.css      # Custom corporate styles
    ├── js/
    │   └── script.js      # Nav, animations, form validation
    ├── images/
    │   ├── logo.svg
    │   ├── hero-illustration.svg
    │   ├── about-illustration.svg
    │   └── cta-pattern.svg
    ├── fonts/             # Optional self-hosted fonts
    └── icons/             # Optional custom icons
```

---

## Features

- Sticky responsive navbar with hamburger menu
- SEO-optimized hero, services, Local SEO, industries, FAQ and contact sections
- Schema.org JSON-LD (Organization, LocalBusiness, ProfessionalService, WebSite, FAQ, Breadcrumb)
- Open Graph & Twitter Card meta tags
- Animated counters and scroll fade-ins
- Client-side contact form validation (no backend)
- Floating Call & WhatsApp buttons
- Accessible markup (skip link, ARIA, focus states, alt text)
- Core Web Vitals–friendly (lazy images, deferred scripts, SVG visuals)

---

## Local Development

### Option A — PHP built-in server

```bash
php -S localhost:8000
```

Open [http://localhost:8000](http://localhost:8000)

### Option B — Apache / Nginx / XAMPP

Point the document root to this project folder and ensure PHP 8+ is enabled.

---

## Deployment

1. Upload all files to your web host document root.
2. Confirm `https://tealsmile.com/` resolves to `index.php`.
3. Submit `sitemap.xml` in [Google Search Console](https://search.google.com/search-console).
4. Uncomment the HTTPS redirect in `.htaccess` if using Apache.
5. Replace the logo SVG with your final brand mark when ready.
6. Optionally wire the contact form to Formspree, EmailJS or a PHP mailer.

---

## Contact (Business)

| | |
|---|---|
| **Phone** | 9920777048 |
| **Email** | tealsmiletech@gmail.com |
| **Address** | Shop No. 12, Shoppers Point, Mahim Road, In front of National College, Palghar West, Maharashtra 401404 |

---

## Contact Form API

Enquiry submissions are saved to MySQL table `wp_tscustomerleads`.

| Item | Value |
|------|-------|
| Endpoint | `POST /api/submit-enquiry.php` |
| Content-Type | `application/json` |
| Database | `u638574371_tealsmilegmb` |
| Table | `wp_tscustomerleads` |

**Request body**

```json
{
  "name": "Jane Doe",
  "company": "Acme",
  "email": "jane@example.com",
  "phone": "9920777048",
  "message": "I need Google Ads and Local SEO help."
}
```

**Success response** (`201`)

```json
{
  "success": true,
  "message": "Thank you! Your enquiry has been submitted successfully...",
  "lead_id": 12
}
```

Credentials live in `api/config.php` (blocked from direct web access via `api/.htaccess`).

---

## Customization Notes

- Brand colors live in CSS variables at the top of `assets/css/style.css`.
- Site meta, phone and address are set as PHP variables at the top of `index.php`.
- Services, FAQs and industries are PHP arrays for easy editing.
- Form currently validates on the client and shows a success message; add a mail endpoint when you need email delivery.

---

## License

© 2026 TEALSMILE TECHNOLOGIES. All Rights Reserved.
