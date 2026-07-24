<?php
/**
 * TEALSMILE TECHNOLOGIES — Corporate Website
 * Premium digital marketing, software & automation partner in Mumbai
 */
$siteName    = 'TEALSMILE TECHNOLOGIES';
$tagline     = 'Innovation • Automation • Digital Solutions';
$siteUrl     = 'https://tealsmile.com/';
$pageTitle   = 'Digital Marketing Agency in Mumbai | Google Ads, SEO & Software | TEALSMILE';
$metaDesc    = 'TEALSMILE TECHNOLOGIES is a digital marketing agency in Mumbai offering Google Ads, Meta Ads, SEO, Local SEO, Google Business Profile optimization, website development and business automation for clients in Mumbai, Navi Mumbai, Thane, Palghar and all over the world.';
$phone       = '9920777048';
$phoneLink   = 'tel:+919920777048';
$whatsapp    = 'https://wa.me/919920777048';
$email       = 'tealsmiletech@gmail.com';
$address     = 'Shop No. 12, Shoppers Point, Mahim Road, In front of National College, Palghar West, Maharashtra 401404';
$year        = date('Y');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= htmlspecialchars($pageTitle) ?></title>
  <meta name="description" content="<?= htmlspecialchars($metaDesc) ?>">
  <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
  <meta name="author" content="TEALSMILE TECHNOLOGIES">
  <meta name="geo.region" content="IN-MH">
  <meta name="geo.placename" content="Palghar, Mumbai, Maharashtra">
  <meta name="language" content="English">
  <link rel="canonical" href="<?= htmlspecialchars($siteUrl) ?>">

  <!-- Open Graph -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?= htmlspecialchars($siteUrl) ?>">
  <meta property="og:title" content="<?= htmlspecialchars($pageTitle) ?>">
  <meta property="og:description" content="<?= htmlspecialchars($metaDesc) ?>">
  <meta property="og:site_name" content="<?= htmlspecialchars($siteName) ?>">
  <meta property="og:locale" content="en_IN">
  <meta property="og:image" content="<?= htmlspecialchars($siteUrl) ?>assets/images/hero-illustration.svg">

  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?= htmlspecialchars($pageTitle) ?>">
  <meta name="twitter:description" content="<?= htmlspecialchars($metaDesc) ?>">
  <meta name="twitter:image" content="<?= htmlspecialchars($siteUrl) ?>assets/images/hero-illustration.svg">

  <link rel="icon" type="image/jpeg" href="assets/images/logo.jpg">
  <link rel="apple-touch-icon" href="assets/images/logo.jpg">
  <link rel="sitemap" type="application/xml" title="Sitemap" href="<?= htmlspecialchars($siteUrl) ?>sitemap.xml">

  <!-- Preconnect & Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">
  <!-- Site Styles -->
  <link rel="stylesheet" href="assets/css/style.css">

  <!-- Schema.org JSON-LD -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@graph": [
      {
        "@type": "Organization",
        "@id": "<?= $siteUrl ?>#organization",
        "name": "TEALSMILE TECHNOLOGIES",
        "url": "<?= $siteUrl ?>",
        "logo": "<?= $siteUrl ?>assets/images/logo.jpg",
        "email": "<?= $email ?>",
        "telephone": "+91<?= $phone ?>",
        "sameAs": [],
        "address": {
          "@type": "PostalAddress",
          "streetAddress": "Shop No. 12, Shoppers Point, Mahim Road, In front of National College",
          "addressLocality": "Palghar West",
          "addressRegion": "Maharashtra",
          "postalCode": "401404",
          "addressCountry": "IN"
        }
      },
      {
        "@type": "LocalBusiness",
        "@id": "<?= $siteUrl ?>#localbusiness",
        "name": "TEALSMILE TECHNOLOGIES",
        "image": "<?= $siteUrl ?>assets/images/logo.jpg",
        "url": "<?= $siteUrl ?>",
        "telephone": "+91<?= $phone ?>",
        "email": "<?= $email ?>",
        "priceRange": "$$",
        "address": {
          "@type": "PostalAddress",
          "streetAddress": "Shop No. 12, Shoppers Point, Mahim Road",
          "addressLocality": "Palghar",
          "addressRegion": "Maharashtra",
          "postalCode": "401404",
          "addressCountry": "IN"
        },
        "geo": {
          "@type": "GeoCoordinates",
          "latitude": "19.6967",
          "longitude": "72.7699"
        },
        "areaServed": [
          { "@type": "City", "name": "Mumbai" },
          { "@type": "City", "name": "Navi Mumbai" },
          { "@type": "City", "name": "Thane" },
          { "@type": "City", "name": "Palghar" },
          { "@type": "State", "name": "Maharashtra" },
          { "@type": "Country", "name": "Worldwide" }
        ],
        "openingHoursSpecification": {
          "@type": "OpeningHoursSpecification",
          "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],
          "opens": "10:00",
          "closes": "19:00"
        }
      },
      {
        "@type": "ProfessionalService",
        "@id": "<?= $siteUrl ?>#service",
        "name": "TEALSMILE TECHNOLOGIES",
        "description": "Digital marketing agency in Mumbai offering Google Ads, Meta Ads, SEO, Local SEO, website development and business automation.",
        "provider": { "@id": "<?= $siteUrl ?>#organization" },
        "areaServed": "Mumbai, Navi Mumbai, Thane, Palghar, Maharashtra and Worldwide",
        "serviceType": [
          "Digital Marketing",
          "Google Ads Management",
          "SEO Services",
          "Local SEO",
          "Website Development",
          "Software Development",
          "Business Automation"
        ]
      },
      {
        "@type": "WebSite",
        "@id": "<?= $siteUrl ?>#website",
        "url": "<?= $siteUrl ?>",
        "name": "TEALSMILE TECHNOLOGIES",
        "description": "<?= htmlspecialchars($metaDesc) ?>",
        "publisher": { "@id": "<?= $siteUrl ?>#organization" },
        "inLanguage": "en-IN"
      },
      {
        "@type": "BreadcrumbList",
        "@id": "<?= $siteUrl ?>#breadcrumb",
        "itemListElement": [
          { "@type": "ListItem", "position": 1, "name": "Home", "item": "<?= $siteUrl ?>" },
          { "@type": "ListItem", "position": 2, "name": "Services", "item": "<?= $siteUrl ?>#services" },
          { "@type": "ListItem", "position": 3, "name": "Contact", "item": "<?= $siteUrl ?>#contact" }
        ]
      },
      {
        "@type": "FAQPage",
        "@id": "<?= $siteUrl ?>#faq",
        "mainEntity": [
          {
            "@type": "Question",
            "name": "What is the best digital marketing agency in Mumbai?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "The best digital marketing agency in Mumbai combines proven Google Ads expertise, SEO and Local SEO capability, transparent reporting and measurable lead generation. TEALSMILE TECHNOLOGIES partners with businesses in Mumbai and all over the world to deliver performance marketing and technology solutions that grow revenue."
            }
          },
          {
            "@type": "Question",
            "name": "How much do Google Ads services cost in Mumbai?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Google Ads management fees typically depend on campaign complexity, monthly ad spend and goals. TEALSMILE offers flexible Google Ads packages for startups and enterprises in Mumbai and globally, with clear media budgets and performance-focused management."
            }
          },
          {
            "@type": "Question",
            "name": "How can Local SEO help my business get more calls?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Local SEO improves how you appear in Google Maps and local search results, helping nearby customers find and call you. Optimizing your Google Business Profile, citations and location pages increases mobile calls and customer enquiries from Mumbai and surrounding areas—and wherever your business operates."
            }
          },
          {
            "@type": "Question",
            "name": "How do I rank my Google Business Profile higher?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Improve Google Business Profile ranking with complete NAP details, relevant categories, high-quality photos, consistent citations, review management and location-based SEO. Our Google Business Profile experts help businesses appear in Google Maps and rank higher in local search."
            }
          },
          {
            "@type": "Question",
            "name": "Can I get a professional website in one day?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Yes. Our Website in One Day service delivers a clean, mobile-responsive, conversion-focused website quickly—ideal for businesses that need to launch fast while maintaining a professional brand presence."
            }
          },
          {
            "@type": "Question",
            "name": "What industries does TEALSMILE TECHNOLOGIES work with?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "We serve resorts, hotels, clinics, hospitals, colleges, educational institutes, spa & wellness, healthcare, retail, professional services, SMEs and enterprises all over the world."
            }
          },
          {
            "@type": "Question",
            "name": "Do you offer Meta Ads and Facebook Ads management?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Yes. We provide Meta Ads management including Facebook Ads and Instagram Ads for lead generation, brand awareness and performance marketing campaigns for clients in Mumbai and globally."
            }
          },
          {
            "@type": "Question",
            "name": "What software development services do you provide?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "We build custom software, CRM & ERP solutions, API integrations, workflow automation, AI-powered business automation and reporting dashboards tailored to your operations."
            }
          },
          {
            "@type": "Question",
            "name": "How does Google Maps ranking help generate more enquiries?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Higher Google Maps ranking increases visibility when customers search for nearby services, driving more profile views, direction requests, calls and website visits—especially on mobile."
            }
          },
          {
            "@type": "Question",
            "name": "Is TEALSMILE a website development company in Mumbai?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Yes. We are a website development and website design company based in Mumbai, delivering responsive websites, landing pages and PHP-based business sites for clients all over the world."
            }
          },
          {
            "@type": "Question",
            "name": "What is Google Business Profile optimization?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Google Business Profile optimization is the process of refining your listing—categories, services, photos, posts, reviews and attributes—so you appear more often in local search and Google Maps, generating more calls and customer enquiries."
            }
          },
          {
            "@type": "Question",
            "name": "Do you help with business automation and marketing automation?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Yes. As a business automation and marketing automation company, we connect CRMs, APIs and workflows so leads, follow-ups and reporting run smoothly with less manual work for businesses worldwide."
            }
          }
        ]
      }
    ]
  }
  </script>
</head>
<body id="top">

  <!-- Skip link -->
  <a class="skip-link" href="#main-content">Skip to main content</a>

  <!-- ========== HEADER ========== -->
  <header class="site-header" id="header">
    <nav class="navbar navbar-expand-lg navbar-light" aria-label="Main navigation">
      <div class="container">
        <a class="navbar-brand" href="#top" aria-label="TEALSMILE TECHNOLOGIES Home">
          <img src="assets/images/logo.jpg" alt="TEALSMILE TECHNOLOGIES logo" width="180" height="48" class="brand-logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav"
          aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mainNav">
          <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-1">
            <li class="nav-item"><a class="nav-link active" href="#home">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
            <li class="nav-item"><a class="nav-link" href="#industries">Industries</a></li>
            <li class="nav-item"><a class="nav-link" href="#why-us">Why Us</a></li>
            <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
            <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
            <li class="nav-item ms-lg-2">
              <a class="btn btn-primary btn-cta" href="#contact">Let's Talk</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <main id="main-content">

    <!-- ========== HERO ========== -->
    <section class="hero-section" id="home" aria-labelledby="hero-heading">
      <div class="hero-bg" aria-hidden="true"></div>
      <div class="container">
        <div class="row align-items-center hero-row">
          <div class="col-lg-6 hero-content fade-up">
            <p class="brand-eyebrow">TEALSMILE TECHNOLOGIES</p>
            <h1 id="hero-heading">
              Digital Marketing, Google Ads &amp; Software Solutions That Drive Business Growth
            </h1>
            <p class="hero-sub">
              Your trusted digital marketing &amp; technology partner in Mumbai. We help businesses grow worldwide through Digital Marketing, Google Ads, Meta Ads, Local SEO, Website Development, Business Automation and Custom Software Solutions—serving clients across Mumbai, Navi Mumbai, Thane, Palghar and all over the world.
            </p>
            <div class="hero-actions">
              <a href="#contact" class="btn btn-primary btn-lg">Get Free Consultation</a>
              <a href="<?= $phoneLink ?>" class="btn btn-outline-primary btn-lg">Call Now</a>
              <a href="#services" class="btn btn-link-teal">Our Services <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a>
            </div>
          </div>
          <div class="col-lg-6 hero-visual fade-up" data-delay="150">
            <img src="assets/images/hero-illustration.svg" alt="Illustration of digital marketing analytics, cloud automation and software growth dashboards" width="640" height="520" class="img-fluid hero-img" loading="eager">
          </div>
        </div>
      </div>
    </section>

    <!-- ========== TRUST STRIP ========== -->
    <section class="trust-strip" aria-label="Service highlights">
      <div class="container">
        <ul class="trust-list">
          <li><i class="fa-solid fa-bullseye" aria-hidden="true"></i> Google Ads Expert in Mumbai</li>
          <li><i class="fa-solid fa-location-dot" aria-hidden="true"></i> Local SEO &amp; Maps Ranking</li>
          <li><i class="fa-solid fa-code" aria-hidden="true"></i> Website &amp; Software Development</li>
          <li><i class="fa-solid fa-robot" aria-hidden="true"></i> Business Automation</li>
        </ul>
      </div>
    </section>

    <!-- ========== ABOUT ========== -->
    <section class="section about-section" id="about" aria-labelledby="about-heading">
      <div class="container">
        <div class="row align-items-center g-5">
          <div class="col-lg-5 fade-up">
            <img src="assets/images/about-illustration.svg" alt="About TEALSMILE TECHNOLOGIES — technology and digital collaboration" width="520" height="420" class="img-fluid about-img" loading="lazy">
          </div>
          <div class="col-lg-7 fade-up" data-delay="100">
            <span class="section-label">Who We Are</span>
            <h2 id="about-heading">A Technology-Driven Partner for Growth Worldwide</h2>
            <p>
              TEALSMILE TECHNOLOGIES is a technology-driven company helping businesses accelerate growth through digital marketing, software development, automation and innovative technology solutions. Our expertise spans Google Ads, Meta Ads, SEO, Local SEO, website development, business automation and custom software solutions that improve efficiency and maximize ROI.
            </p>
            <p>
              As a digital marketing agency in Mumbai and a software development company with a global outlook, we combine performance marketing with practical engineering—so campaigns, websites and systems work together to generate more customer enquiries for clients all over the world.
            </p>
            <div class="row g-4 mt-2 mv-grid">
              <div class="col-md-6">
                <div class="mv-block">
                  <h3><i class="fa-solid fa-bullseye" aria-hidden="true"></i> Mission</h3>
                  <p>Empower businesses with measurable digital marketing and intelligent technology that drives leads, efficiency and sustainable growth.</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="mv-block">
                  <h3><i class="fa-solid fa-eye" aria-hidden="true"></i> Vision</h3>
                  <p>To enable business owners with the right digital tools, become their trusted digital partner, and help them grow their business with confidence.</p>
                </div>
              </div>
            </div>
            <div class="values-row mt-4">
              <span class="value-chip"><i class="fa-solid fa-lightbulb" aria-hidden="true"></i> Innovation</span>
              <span class="value-chip"><i class="fa-solid fa-handshake" aria-hidden="true"></i> Integrity</span>
              <span class="value-chip"><i class="fa-solid fa-gem" aria-hidden="true"></i> Quality</span>
              <span class="value-chip"><i class="fa-solid fa-heart" aria-hidden="true"></i> Customer Success</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ========== SERVICES ========== -->
    <section class="section section-alt" id="services" aria-labelledby="services-heading">
      <div class="container">
        <div class="section-header text-center fade-up">
          <span class="section-label">Our Services</span>
          <h2 id="services-heading">Digital Marketing, SEO &amp; Technology Solutions</h2>
          <p class="section-lead">
            From Google Ads management and Local SEO services to website development in Mumbai and AI-powered business automation—everything you need to grow online.
          </p>
        </div>
        <div class="row g-4 services-grid">
          <?php
          $services = [
            ['fa-solid fa-chart-line', 'Digital Marketing', 'Full-funnel digital marketing in Mumbai designed to attract, convert and retain customers with measurable ROI across search, social and web.'],
            ['fa-brands fa-google', 'Google Ads Management', 'Campaign strategy, keyword research and conversion tracking from a Google Ads expert in Mumbai focused on qualified leads—not vanity clicks.'],
            ['fa-brands fa-meta', 'Meta Ads Management', 'Facebook Ads and Instagram Ads campaigns engineered by Meta Ads experts for awareness, retargeting and high-intent lead generation.'],
            ['fa-solid fa-magnifying-glass', 'SEO Services', 'Technical SEO, on-page optimization and content strategy from an SEO company in Mumbai that builds lasting organic visibility.'],
            ['fa-solid fa-map-location-dot', 'Local SEO', 'Local SEO services that help you rank higher in local search across Mumbai, Navi Mumbai, Thane, Palghar and any city worldwide with citation and location strategy.'],
            ['fa-solid fa-store', 'Google Business Profile Optimization', 'Google Business Profile optimization and management to improve listing quality, posts, categories and conversion actions.'],
            ['fa-solid fa-map', 'Google Maps Ranking', 'Appear in Google Maps and improve Google Maps ranking so nearby customers discover you first and call your business.'],
            ['fa-solid fa-laptop-code', 'Website Development', 'Responsive website development in Mumbai—fast, secure PHP sites built for Core Web Vitals, SEO and conversions.'],
            ['fa-solid fa-palette', 'Website Design', 'Clean, premium website design from a website design company in Mumbai that reflects your brand and guides visitors to enquire.'],
            ['fa-solid fa-bolt', 'Website in One Day', 'Get a website in one day—a professional, mobile-ready site launched quickly so you can start generating enquiries without delay.'],
            ['fa-solid fa-file-lines', 'Landing Pages', 'High-converting landing page design focused on Conversion Rate Optimization for ads traffic and campaign-specific offers.'],
            ['fa-solid fa-rocket', 'Performance Marketing', 'Performance marketing agency approach—budget, creative and targeting aligned to CPA, ROAS and pipeline goals.'],
            ['fa-solid fa-gears', 'Software Development', 'Business software development tailored to your workflows—from portals and tools to scalable custom applications.'],
            ['fa-solid fa-cubes', 'Custom Software Development', 'Bespoke systems engineered by a software development company that understands SME and enterprise requirements.'],
            ['fa-solid fa-robot', 'Business Automation', 'Business automation company solutions that remove repetitive work with smart workflows and reliable integrations.'],
            ['fa-solid fa-building', 'CRM & ERP Solutions', 'CRM development and ERP development to centralize customers, inventory, sales and operations in one connected system.'],
            ['fa-solid fa-plug', 'API Integration', 'API integration services that connect your stack—payments, CRMs, marketing tools and cloud platforms—securely.'],
            ['fa-solid fa-link', 'Software Integration', 'Software integration that unifies legacy and modern systems so data flows cleanly across your organization.'],
            ['fa-solid fa-cloud', 'Cloud Solutions', 'Practical cloud solutions for hosting, scalability and secure access—supporting digital transformation initiatives.'],
            ['fa-solid fa-brain', 'AI Powered Business Solutions', 'AI powered business automation that assists with insights, lead routing, content workflows and smarter operations.'],
            ['fa-solid fa-diagram-project', 'Workflow Automation', 'Workflow automation that standardizes approvals, follow-ups and handoffs—so teams move faster with fewer errors.'],
            ['fa-solid fa-chart-pie', 'Reporting Dashboards', 'Business intelligence dashboards and analytics that turn campaign and operational data into clear decisions.'],
          ];
          foreach ($services as $i => $s): ?>
          <div class="col-sm-6 col-lg-4 col-xl-3 fade-up" data-delay="<?= ($i % 4) * 60 ?>">
            <article class="service-card">
              <div class="service-icon" aria-hidden="true"><i class="<?= $s[0] ?>"></i></div>
              <h3><?= htmlspecialchars($s[1]) ?></h3>
              <p><?= htmlspecialchars($s[2]) ?></p>
            </article>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <!-- ========== LOCAL SEO FOCUS ========== -->
    <section class="section local-seo-section" id="local-seo" aria-labelledby="local-seo-heading">
      <div class="container">
        <div class="row g-5 align-items-center">
          <div class="col-lg-6 fade-up">
            <span class="section-label">Local SEO &amp; Google Business Profile</span>
            <h2 id="local-seo-heading">Get More Calls from Google Maps &amp; Local Search</h2>
            <p>
              If customers search on mobile, your Google Business Profile is often the first door to your business. We help you increase mobile calls from your Google Business Profile, generate more customer enquiries and appear in Google Maps—whether you serve customers in Mumbai, Navi Mumbai, Thane, Palghar or anywhere in the world.
            </p>
            <ul class="check-list">
              <li>Google Business Profile Ranking &amp; Optimization</li>
              <li>Google Maps SEO &amp; Local Search Visibility</li>
              <li>Google Review Management</li>
              <li>Business Citation Management</li>
              <li>Location-based SEO Strategy</li>
              <li>Boost Local Visibility &amp; Increase Business Enquiries</li>
            </ul>
            <div class="hero-actions mt-4">
              <a href="#contact" class="btn btn-primary">Get More Calls</a>
              <a href="#contact" class="btn btn-outline-primary">Boost Local Visibility</a>
            </div>
          </div>
          <div class="col-lg-6 fade-up" data-delay="120">
            <div class="local-highlight-panel">
              <div class="local-item">
                <i class="fa-solid fa-phone-volume" aria-hidden="true"></i>
                <div>
                  <h3>Get More Calls</h3>
                  <p>Optimize profile actions so nearby customers tap Call when they need you.</p>
                </div>
              </div>
              <div class="local-item">
                <i class="fa-solid fa-comments" aria-hidden="true"></i>
                <div>
                  <h3>Increase Business Enquiries</h3>
                  <p>Turn Maps views into messages, direction requests and website visits.</p>
                </div>
              </div>
              <div class="local-item">
                <i class="fa-solid fa-ranking-star" aria-hidden="true"></i>
                <div>
                  <h3>Improve Google Maps Ranking</h3>
                  <p>Strengthen relevance, proximity signals and engagement to rank higher in local search.</p>
                </div>
              </div>
              <div class="local-item">
                <i class="fa-solid fa-chart-simple" aria-hidden="true"></i>
                <div>
                  <h3>Grow Your Business Online</h3>
                  <p>Combine Local SEO with Google Ads and Meta Ads for consistent pipeline growth.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ========== INDUSTRIES ========== -->
    <section class="section section-alt" id="industries" aria-labelledby="industries-heading">
      <div class="container">
        <div class="section-header text-center fade-up">
          <span class="section-label">Industries We Serve</span>
          <h2 id="industries-heading">Built for Businesses That Need Digital Growth</h2>
          <p class="section-lead">We partner with organizations across hospitality, healthcare, education, retail and professional services all over the world.</p>
        </div>
        <div class="row g-3 industries-grid fade-up">
          <?php
          $industries = [
            ['fa-solid fa-umbrella-beach', 'Resorts'],
            ['fa-solid fa-hotel', 'Hotels'],
            ['fa-solid fa-stethoscope', 'Clinics'],
            ['fa-solid fa-hospital', 'Hospitals'],
            ['fa-solid fa-graduation-cap', 'Colleges'],
            ['fa-solid fa-school', 'Educational Institutes'],
            ['fa-solid fa-spa', 'Spa & Wellness'],
            ['fa-solid fa-heart-pulse', 'Healthcare'],
            ['fa-solid fa-bag-shopping', 'Retail'],
            ['fa-solid fa-briefcase', 'Professional Services'],
            ['fa-solid fa-store', 'SMEs'],
            ['fa-solid fa-building-columns', 'Enterprises'],
          ];
          foreach ($industries as $ind): ?>
          <div class="col-6 col-md-4 col-lg-3">
            <div class="industry-item">
              <i class="<?= $ind[0] ?>" aria-hidden="true"></i>
              <span><?= htmlspecialchars($ind[1]) ?></span>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <!-- ========== WHY US ========== -->
    <section class="section" id="why-us" aria-labelledby="why-heading">
      <div class="container">
        <div class="section-header text-center fade-up">
          <span class="section-label">Why Choose Us</span>
          <h2 id="why-heading">Expertise That Converts Attention Into Growth</h2>
          <p class="section-lead">A performance marketing agency mindset backed by software engineers and automation specialists.</p>
        </div>
        <div class="row g-4">
          <?php
          $why = [
            ['fa-brands fa-google', 'Google Ads Experts', 'Structured campaigns, landing pages and tracking that protect budget and scale winners.'],
            ['fa-solid fa-gauge-high', 'Performance Marketing Specialists', 'Every rupee is accountable—creative, audience and offer aligned to business outcomes.'],
            ['fa-solid fa-magnifying-glass-chart', 'SEO & Local SEO Experts', 'Organic growth through technical SEO, content and Local SEO strategy that compounds.'],
            ['fa-solid fa-store', 'Google Business Profile Specialists', 'Profile optimization, review management and Maps ranking support from experienced specialists.'],
            ['fa-solid fa-code', 'Experienced Software Developers', 'Clean PHP and modern web engineering for sites, CRMs and custom business software.'],
            ['fa-solid fa-gears', 'Automation Experts', 'Marketing automation and workflow automation that reduce manual follow-up and leakage.'],
            ['fa-solid fa-microchip', 'Modern Technologies', 'Cloud-ready stacks, API-first integrations and AI-assisted processes where they add value.'],
            ['fa-solid fa-bullseye', 'Business Focused Solutions', 'We design around your KPIs—calls, leads, bookings and operational efficiency.'],
            ['fa-solid fa-comments', 'Transparent Communication', 'Clear reporting, honest recommendations and collaborative planning every step of the way.'],
            ['fa-solid fa-headset', 'Reliable Support', 'Responsive support so campaigns and systems stay healthy after launch.'],
          ];
          foreach ($why as $i => $w): ?>
          <div class="col-md-6 col-lg-4 fade-up" data-delay="<?= ($i % 3) * 70 ?>">
            <div class="why-card">
              <div class="why-icon" aria-hidden="true"><i class="<?= $w[0] ?>"></i></div>
              <h3><?= htmlspecialchars($w[1]) ?></h3>
              <p><?= htmlspecialchars($w[2]) ?></p>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <!-- ========== PROCESS ========== -->
    <section class="section section-alt" id="process" aria-labelledby="process-heading">
      <div class="container">
        <div class="section-header text-center fade-up">
          <span class="section-label">Our Process</span>
          <h2 id="process-heading">From Insight to Measurable Growth</h2>
          <p class="section-lead">A clear four-step engagement model—whether you need Google Ads, Local SEO or custom software.</p>
        </div>
        <div class="process-timeline fade-up">
          <?php
          $steps = [
            ['01', 'fa-solid fa-compass', 'Discover', 'We audit your market, competitors, Google Business Profile, website and funnel to uncover growth opportunities.'],
            ['02', 'fa-solid fa-chess', 'Strategize', 'We define channel mix, keyword themes, creative angles, tech scope and KPIs tailored to your industry.'],
            ['03', 'fa-solid fa-hammer', 'Build', 'We launch campaigns, optimize listings, ship websites or automate workflows with quality and speed.'],
            ['04', 'fa-solid fa-seedling', 'Grow', 'We iterate with data—improving ROAS, Maps ranking, conversions and system reliability over time.'],
          ];
          foreach ($steps as $step): ?>
          <div class="process-step">
            <div class="process-num"><?= $step[0] ?></div>
            <div class="process-icon" aria-hidden="true"><i class="<?= $step[1] ?>"></i></div>
            <h3><?= htmlspecialchars($step[2]) ?></h3>
            <p><?= htmlspecialchars($step[3]) ?></p>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <!-- ========== STATISTICS ========== -->
    <section class="section stats-section" id="stats" aria-labelledby="stats-heading">
      <div class="container">
        <div class="section-header text-center fade-up">
          <span class="section-label">Impact</span>
          <h2 id="stats-heading">Numbers That Reflect Commitment</h2>
        </div>
        <div class="row g-4 text-center stats-row">
          <?php
          $stats = [
            ['120', '+', 'Projects Delivered'],
            ['85', '+', 'Satisfied Clients'],
            ['12', '+', 'Industries Served'],
            ['8', '+', 'Years of Experience'],
            ['200', '+', 'Campaigns Managed'],
            ['150', '+', 'Business Profiles Optimized'],
            ['90', '+', 'Websites Delivered'],
          ];
          foreach ($stats as $st): ?>
          <div class="col-6 col-md-4 col-xl">
            <div class="stat-item fade-up">
              <div class="stat-number">
                <span class="counter" data-target="<?= $st[0] ?>">0</span><span class="stat-suffix"><?= $st[1] ?></span>
              </div>
              <p><?= htmlspecialchars($st[2]) ?></p>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <!-- ========== CTA BANNER ========== -->
    <section class="cta-banner" id="grow" aria-labelledby="cta-heading">
      <div class="cta-pattern" aria-hidden="true"></div>
      <div class="container position-relative">
        <div class="cta-inner fade-up text-center">
          <h2 id="cta-heading">Ready to Grow Your Business?</h2>
          <p>Let's build smarter software and powerful digital marketing strategies together—Google Ads, Local SEO, websites and automation that drive real enquiries.</p>
          <div class="hero-actions justify-content-center">
            <a href="#contact" class="btn btn-light btn-lg">Get Free Consultation</a>
            <a href="<?= $phoneLink ?>" class="btn btn-outline-light btn-lg">Call Now</a>
          </div>
        </div>
      </div>
    </section>

    <!-- ========== FAQ ========== -->
    <section class="section" id="faqs" aria-labelledby="faq-heading">
      <div class="container">
        <div class="section-header text-center fade-up">
          <span class="section-label">FAQs</span>
          <h2 id="faq-heading">Answers to Common Questions</h2>
          <p class="section-lead">Straightforward guidance on digital marketing in Mumbai, Google Ads, Local SEO and website development.</p>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-10">
            <div class="accordion faq-accordion fade-up" id="faqAccordion">
              <?php
              $faqs = [
                ['What is the best digital marketing agency in Mumbai?', 'The best partner delivers measurable leads through Google Ads, Meta Ads, SEO and Local SEO—with transparent reporting. TEALSMILE TECHNOLOGIES combines performance marketing with software and automation so your funnel stays connected from click to conversion for clients in Mumbai and all over the world.'],
                ['How much do Google Ads services cost?', 'Costs depend on ad spend, competitiveness of keywords and campaign scope. As a Google Ads agency in Mumbai, we recommend a clear media budget plus management—so every campaign has room to learn and scale profitably for businesses worldwide.'],
                ['How can Local SEO help my business?', 'Local SEO improves visibility in Google Maps and the local pack, helping nearby customers find you. It increases calls, direction requests and walk-ins—especially for clinics, hotels, retail and professional services in Mumbai and beyond.'],
                ['How do I rank my Google Business Profile?', 'Complete your profile, choose accurate categories, add photos, manage reviews, build citations and align on-page Local SEO. Our Google Business Profile experts refine these signals to improve ranking and engagement.'],
                ['Can I get a professional website in one day?', 'Yes. Our Website in One Day / get website in one day offering launches a clean, responsive site quickly—ideal when you need a professional presence without a long build cycle.'],
                ['What industries do you work with?', 'Resorts, hotels, clinics, hospitals, colleges, educational institutes, spa & wellness, healthcare, retail, professional services, SMEs and enterprises all over the world.'],
                ['Do you offer Facebook Ads and Instagram Ads?', 'Yes. We are a Facebook Ads agency and Instagram Ads expert team delivering Meta Ads management for lead generation and brand growth globally.'],
                ['Is TEALSMILE a lead generation company?', 'Yes. We operate as a lead generation company through search ads, Meta Ads, Local SEO and conversion-optimized landing pages—focused on qualified enquiries, not empty traffic.'],
                ['What makes you a marketing automation company?', 'We connect forms, CRMs, WhatsApp workflows and reporting so leads are captured, routed and followed up automatically—reducing leakage between marketing and sales.'],
                ['Do you provide SEO services in Mumbai?', 'Yes. As an SEO company in Mumbai we deliver technical SEO, website speed optimization, content and Local SEO for businesses targeting Mumbai, Navi Mumbai, Thane and Palghar—and clients worldwide.'],
                ['Can you improve Google Maps ranking for my store or clinic?', 'Absolutely. Through Google Maps SEO, review management, citation consistency and profile optimization, we help you appear in Google Maps and improve local pack visibility.'],
                ['Do you build CRM and ERP systems?', 'Yes. We offer CRM development, ERP development, API integration services and software integration for teams that need custom operational systems anywhere in the world.'],
                ['How do I increase mobile calls from my Google Business Profile?', 'Optimize call buttons, hours, categories, photos and Q&A; encourage reviews; and run Local SEO plus local Google Ads. We focus on actions that increase mobile calls from your Google Business Profile.'],
                ['Are you a website development company in Mumbai?', 'Yes. We are a website development company in Mumbai and website design company delivering responsive PHP websites, landing pages and speed-optimized builds for clients all over the world.'],
              ];
              foreach ($faqs as $i => $faq):
                $collapseId = 'faq' . ($i + 1);
                $expanded = $i === 0 ? 'true' : 'false';
                $show = $i === 0 ? 'show' : '';
                $collapsed = $i === 0 ? '' : 'collapsed';
              ?>
              <div class="accordion-item">
                <h3 class="accordion-header" id="heading<?= $i + 1 ?>">
                  <button class="accordion-button <?= $collapsed ?>" type="button" data-bs-toggle="collapse"
                    data-bs-target="#<?= $collapseId ?>" aria-expanded="<?= $expanded ?>" aria-controls="<?= $collapseId ?>">
                    <?= htmlspecialchars($faq[0]) ?>
                  </button>
                </h3>
                <div id="<?= $collapseId ?>" class="accordion-collapse collapse <?= $show ?>" data-bs-parent="#faqAccordion">
                  <div class="accordion-body"><?= htmlspecialchars($faq[1]) ?></div>
                </div>
              </div>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ========== CONTACT ========== -->
    <section class="section section-alt" id="contact" aria-labelledby="contact-heading">
      <div class="container">
        <div class="section-header text-center fade-up">
          <span class="section-label">Contact</span>
          <h2 id="contact-heading">Let's Talk About Growing Your Business</h2>
          <p class="section-lead">Based in Palghar near Mumbai—serving clients across Navi Mumbai, Thane, Maharashtra and all over the world.</p>
        </div>
        <div class="row g-5">
          <div class="col-lg-5 fade-up">
            <div class="contact-info">
              <div class="contact-block">
                <h3><i class="fa-solid fa-location-dot" aria-hidden="true"></i> Address</h3>
                <address>
                  Shop No. 12,<br>
                  Shoppers Point,<br>
                  Mahim Road,<br>
                  In front of National College,<br>
                  Palghar West,<br>
                  Maharashtra 401404
                </address>
              </div>
              <div class="contact-block">
                <h3><i class="fa-solid fa-phone" aria-hidden="true"></i> Phone</h3>
                <p><a href="<?= $phoneLink ?>"><?= $phone ?></a></p>
              </div>
              <div class="contact-block">
                <h3><i class="fa-solid fa-envelope" aria-hidden="true"></i> Email</h3>
                <p><a href="mailto:<?= $email ?>"><?= $email ?></a></p>
              </div>
              <div class="map-placeholder" role="img" aria-label="Map location of TEALSMILE TECHNOLOGIES in Palghar West">
                <iframe
                  title="TEALSMILE TECHNOLOGIES location map"
                  src="https://maps.google.com/maps?q=Shoppers%20Point%20Mahim%20Road%20Palghar%20West&t=&z=15&ie=UTF8&iwloc=&output=embed"
                  loading="lazy"
                  referrerpolicy="no-referrer-when-downgrade"
                  allowfullscreen></iframe>
              </div>
            </div>
          </div>
          <div class="col-lg-7 fade-up" data-delay="100">
            <form class="contact-form" id="contactForm" novalidate aria-label="Contact form">
              <div class="row g-3">
                <div class="col-md-6">
                  <label for="name" class="form-label">Name <span class="req">*</span></label>
                  <input type="text" class="form-control" id="name" name="name" required autocomplete="name" maxlength="100" placeholder="Your full name">
                  <div class="invalid-feedback">Please enter your name (max 100 characters).</div>
                </div>
                <div class="col-md-6">
                  <label for="company" class="form-label">Company</label>
                  <input type="text" class="form-control" id="company" name="company" autocomplete="organization" maxlength="100" placeholder="Company name">
                </div>
                <div class="col-md-6">
                  <label for="email" class="form-label">Email <span class="req">*</span></label>
                  <input type="email" class="form-control" id="email" name="email" required autocomplete="email" maxlength="150" placeholder="you@company.com">
                  <div class="invalid-feedback">Please enter a valid email (max 150 characters).</div>
                </div>
                <div class="col-md-6">
                  <label for="phone" class="form-label">Phone <span class="req">*</span></label>
                  <input type="tel" class="form-control" id="phone" name="phone" required autocomplete="tel" maxlength="20" placeholder="10-digit mobile number" pattern="[0-9+\-\s]{10,20}">
                  <div class="invalid-feedback">Please enter a valid phone number (max 20 characters).</div>
                </div>
                <div class="col-12">
                  <label for="message" class="form-label">Message <span class="req">*</span></label>
                  <textarea class="form-control" id="message" name="message" rows="5" required maxlength="300" placeholder="Tell us about your goals—Google Ads, Local SEO, website or automation..."></textarea>
                  <div class="invalid-feedback">Please enter your message (max 300 characters).</div>
                </div>
                <div class="col-12">
                  <button type="submit" class="btn btn-primary btn-lg">Submit Enquiry</button>
                  <p class="form-note" id="formStatus" role="status" aria-live="polite"></p>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

  </main>

  <!-- ========== FOOTER ========== -->
  <footer class="site-footer" id="footer">
    <div class="container">
      <div class="row g-4 footer-top">
        <div class="col-lg-4">
          <img src="assets/images/logo.jpg" alt="TEALSMILE TECHNOLOGIES" width="160" height="42" class="footer-logo" loading="lazy">
          <p class="footer-tagline"><?= htmlspecialchars($tagline) ?></p>
          <p class="footer-about">Digital marketing agency in Mumbai delivering Google Ads, Meta Ads, SEO, Local SEO, website development and business automation for clients all over the world.</p>
        </div>
        <div class="col-6 col-lg-2">
          <h3>Quick Links</h3>
          <ul class="footer-links">
            <li><a href="#home">Home</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#industries">Industries</a></li>
            <li><a href="#why-us">Why Us</a></li>
            <li><a href="#faqs">FAQs</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div>
        <div class="col-6 col-lg-3">
          <h3>Services</h3>
          <ul class="footer-links">
            <li><a href="#services">Digital Marketing</a></li>
            <li><a href="#services">Google Ads Management</a></li>
            <li><a href="#local-seo">Local SEO Services</a></li>
            <li><a href="#services">Website Development</a></li>
            <li><a href="#services">Business Automation</a></li>
          </ul>
        </div>
        <div class="col-lg-3">
          <h3>Contact Details</h3>
          <ul class="footer-contact">
            <li><i class="fa-solid fa-phone" aria-hidden="true"></i> <a href="<?= $phoneLink ?>"><?= $phone ?></a></li>
            <li><i class="fa-solid fa-envelope" aria-hidden="true"></i> <a href="mailto:<?= $email ?>"><?= $email ?></a></li>
            <li><i class="fa-solid fa-location-dot" aria-hidden="true"></i> Palghar West, Maharashtra 401404</li>
          </ul>
        </div>
      </div>
      <div class="footer-bottom">
        <p>&copy; <?= $year ?> TEALSMILE TECHNOLOGIES. All Rights Reserved.</p>
      </div>
    </div>
  </footer>

  <!-- Floating Action Buttons -->
  <div class="fab-group" aria-label="Quick contact">
    <a href="<?= $phoneLink ?>" class="fab fab-call" aria-label="Call TEALSMILE TECHNOLOGIES">
      <i class="fa-solid fa-phone" aria-hidden="true"></i>
    </a>
    <a href="<?= $whatsapp ?>" class="fab fab-whatsapp" target="_blank" rel="noopener noreferrer" aria-label="Chat on WhatsApp">
      <i class="fa-brands fa-whatsapp" aria-hidden="true"></i>
    </a>
  </div>

  <!-- Back to top -->
  <button type="button" class="back-to-top" id="backToTop" aria-label="Back to top">
    <i class="fa-solid fa-chevron-up" aria-hidden="true"></i>
  </button>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" defer></script>
  <script src="assets/js/script.js" defer></script>
</body>
</html>
