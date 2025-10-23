<?php
/**
 * MASTER TEMPLATE - template-wcag.php
 * WCAG Exposure Assessment Platform
 * WCAG 2.1 Level AA Compliant
 * 
 * Usage in content pages:
 * $pageTitle = 'Your Page Title';
 * $pageDescription = 'Your description';
 * $pageContent = <<<'HTML' ... HTML;
 * include 'template-wcag.php';
 */

$pageTitle = $pageTitle ?? 'A11yscan | Accessibility Risk Assessment';
$pageDescription = $pageDescription ?? 'Free WCAG scanning and accessibility risk assessment. Expert testimony and litigation support.';
$currentPage = basename($_SERVER['PHP_SELF'], '.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($pageTitle); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($pageDescription); ?>">
    <meta name="keywords" content="WCAG, accessibility, ADA, scanning, expert witness, litigation">
    <style>
        /* ============================================
           WCAG 2.1 AA COMPLIANT STYLES
           ============================================ */
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        :root {
            --primary-blue: #0052cc;
            --primary-dark: #003a99;
            --accent-orange: #ff6600;
            --text-dark: #1a1a1a;
            --text-light: #ffffff;
            --bg-light: #f5f7fa;
            --bg-white: #ffffff;
            --border-color: #d0d7de;
            --success-green: #28a745;
            --warning-orange: #ffc107;
            --error-red: #dc3545;
        }
        
        html {
            font-size: 16px;
            scroll-behavior: smooth;
        }
        
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            line-height: 1.6;
            color: var(--text-dark);
            background-color: var(--bg-light);
        }
        
        /* ============================================
           WCAG: SKIP LINK (Critical for accessibility)
           ============================================ */
        .skip-to-main {
            position: fixed;
            top: 0;
            left: 0;
            background-color: var(--primary-blue);
            color: var(--text-light);
            padding: 0.75rem 1rem;
            text-decoration: none;
            z-index: 10001;
            transform: translateY(-100%);
            transition: transform 0.3s ease;
            border-radius: 0 0 4px 0;
            font-weight: 600;
            border: 2px solid var(--accent-orange);
        }
        
        .skip-to-main:focus {
            transform: translateY(0);
            outline: 3px solid var(--accent-orange);
            outline-offset: 2px;
        }
        
        /* ============================================
           HEADER & NAVIGATION
           ============================================ */
        header {
            background-color: var(--bg-white);
            padding: 0.75rem 0;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 4px rgba(0,0,0,0.08);
            border-bottom: 2px solid var(--primary-blue);
        }
        
        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 1rem;
        }
        
        .logo-wrapper {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            text-decoration: none;
            color: var(--primary-blue);
        }
        
        .logo-wrapper:focus {
            outline: 3px solid var(--accent-orange);
            outline-offset: 2px;
            border-radius: 2px;
        }
        
        .logo-svg {
            width: 32px;
            height: 32px;
            flex-shrink: 0;
        }
        
        .logo-text {
            font-size: 1.3rem;
            font-weight: 700;
            color: var(--primary-blue);
            white-space: nowrap;
        }
        
        .mobile-menu-toggle {
            display: none;
            background: none;
            border: none;
            color: var(--primary-blue);
            font-size: 1.5rem;
            cursor: pointer;
            padding: 0.5rem;
            min-height: 44px;
            min-width: 44px;
        }
        
        .mobile-menu-toggle:focus {
            outline: 3px solid var(--accent-orange);
            outline-offset: 2px;
        }
        
        .nav-menu {
            list-style: none;
            display: flex;
            gap: 0;
            margin: 0;
            padding: 0;
            align-items: center;
        }
        
        .nav-menu li {
            display: flex;
            align-items: center;
        }
        
        .nav-menu a {
            color: var(--text-dark);
            text-decoration: none;
            padding: 0.75rem 1rem;
            border-radius: 4px;
            transition: all 0.2s;
            display: inline-block;
            font-weight: 500;
            border: 2px solid transparent;
        }
        
        .nav-menu a:hover {
            background-color: rgba(0, 82, 204, 0.1);
            color: var(--primary-blue);
            text-decoration: underline;
        }
        
        .nav-menu a:focus {
            outline: 3px solid var(--accent-orange);
            outline-offset: -3px;
            background-color: rgba(0, 82, 204, 0.1);
            text-decoration: underline;
        }
        
        .nav-menu a.active {
            background-color: var(--primary-blue);
            color: #ffffff;
            text-decoration: none;
        }
        
        .nav-menu a.btn-primary {
            background-color: var(--primary-blue);
            color: var(--text-light);
            padding: 0.6rem 1.2rem;
            margin-left: 0.5rem;
            white-space: nowrap;
        }
        
        .nav-menu a.btn-primary:hover {
            background-color: var(--primary-dark);
            color: var(--text-light);
        }
        
        /* ============================================
           MAIN CONTENT
           ============================================ */
        main {
            max-width: 1200px;
            margin: 0 auto;
            background-color: var(--bg-white);
            min-height: calc(100vh - 350px);
        }
        
        .hero {
            background: linear-gradient(135deg, var(--primary-blue) 0%, var(--primary-dark) 100%);
            color: var(--text-light);
            padding: 2rem 1rem;
            text-align: center;
        }
        
        .hero h1 {
            font-size: 1.75rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
            line-height: 1.2;
            color: #ffffff;
        }
        
        .hero p {
            font-size: 0.95rem;
            color: #ffffff;
            margin-bottom: 0.25rem;
            font-weight: 400;
        }
        
        .hero-subtext {
            font-size: 0.9rem;
            color: #ffffff;
            margin-top: 0.75rem;
            font-weight: 400;
        }
        
        .hero-stats {
            margin-top: 1rem;
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
            font-size: 0.9rem;
            color: #ffffff;
        }
        
        .section {
            padding: 2rem 1rem;
            border-bottom: 1px solid var(--border-color);
        }
        
        .section:last-child {
            border-bottom: none;
        }
        
        .section-title {
            max-width: 1200px;
            margin: 0 auto;
        }
        
        h1 {
            font-size: 2rem;
            font-weight: 700;
            color: var(--primary-blue);
            margin-bottom: 0.75rem;
        }
        
        h2 {
            font-size: 1.75rem;
            font-weight: 700;
            color: var(--primary-blue);
            margin-top: 1.5rem;
            margin-bottom: 1rem;
            border-bottom: 3px solid var(--accent-orange);
            padding-bottom: 0.75rem;
        }
        
        h3 {
            font-size: 1.3rem;
            font-weight: 600;
            color: var(--primary-dark);
            margin-top: 1.25rem;
            margin-bottom: 0.75rem;
        }
        
        h4 {
            font-size: 1.1rem;
            font-weight: 600;
            color: var(--text-dark);
            margin-top: 1rem;
            margin-bottom: 0.5rem;
        }
        
        p {
            margin-bottom: 1rem;
            line-height: 1.7;
            max-width: 1200px;
            color: var(--text-dark);
        }
        
        a {
            color: var(--primary-blue);
            text-decoration: underline;
        }
        
        a:hover {
            color: var(--primary-dark);
            text-decoration: underline;
        }
        
        a:focus {
            outline: 3px solid var(--accent-orange);
            outline-offset: 2px;
            border-radius: 2px;
        }
        
        a:visited {
            color: #6600cc;
        }
        
        strong {
            font-weight: 600;
            color: var(--primary-dark);
        }
        
        /* ============================================
           PRICING SECTION
           ============================================ */
        .pricing-container {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 1.5rem;
        }
        
        .pricing-card {
            background: var(--bg-white);
            border: 2px solid var(--border-color);
            border-radius: 8px;
            padding: 2rem;
            transition: all 0.3s ease;
            display: flex;
            flex-direction: column;
            height: 100%;
        }
        
        .pricing-card:hover {
            border-color: var(--primary-blue);
            box-shadow: 0 8px 16px rgba(0,82,204,0.15);
            transform: translateY(-2px);
        }
        
        .pricing-card:focus-within {
            outline: 3px solid var(--accent-orange);
            outline-offset: 2px;
        }
        
        .pricing-card.featured {
            border-color: var(--accent-orange);
            border-width: 3px;
            transform: scale(1.05);
            box-shadow: 0 8px 24px rgba(255,102,0,0.2);
        }
        
        .pricing-badge {
            display: inline-block;
            background: var(--accent-orange);
            color: var(--text-light);
            padding: 0.4rem 0.8rem;
            border-radius: 4px;
            font-size: 0.8rem;
            font-weight: 600;
            margin-bottom: 1rem;
            width: fit-content;
        }
        
        .pricing-title {
            font-size: 1.3rem;
            font-weight: 700;
            color: var(--primary-blue);
            margin-bottom: 0.5rem;
        }
        
        .pricing-price {
            font-size: 2rem;
            font-weight: 700;
            color: var(--primary-dark);
            margin-bottom: 0.25rem;
        }
        
        .pricing-description {
            font-size: 0.9rem;
            color: #666;
            margin-bottom: 1.5rem;
            line-height: 1.5;
        }
        
        .pricing-features {
            list-style: none;
            margin-bottom: 1.5rem;
            flex-grow: 1;
        }
        
        .pricing-features li {
            padding: 0.5rem 0;
            padding-left: 1.75rem;
            position: relative;
            color: var(--text-dark);
            font-size: 0.95rem;
            line-height: 1.5;
        }
        
        .pricing-features li:before {
            content: "✓";
            position: absolute;
            left: 0;
            color: var(--success-green);
            font-weight: bold;
            font-size: 1.1rem;
        }
        
        .btn {
            display: inline-block;
            padding: 0.75rem 1.5rem;
            border: none;
            border-radius: 4px;
            font-size: 1rem;
            font-weight: 600;
            text-decoration: none;
            cursor: pointer;
            transition: all 0.3s ease;
            min-height: 44px;
            text-align: center;
        }
        
        .btn-primary {
            background-color: var(--primary-blue);
            color: #ffffff;
            font-weight: 600;
        }
        
        .btn-primary:hover {
            background-color: var(--primary-dark);
            color: #ffffff;
        }
        
        .btn-primary:focus {
            outline: 3px solid var(--accent-orange);
            outline-offset: 2px;
            color: #ffffff;
        }
        
        .btn-primary:visited {
            color: #ffffff;
        }
        
        .btn-secondary {
            background-color: var(--accent-orange);
            color: var(--text-light);
        }
        
        .btn-secondary:hover {
            background-color: #e55a00;
        }
        
        .btn-secondary:focus {
            outline: 3px solid var(--primary-blue);
            outline-offset: 2px;
        }
        
        /* ============================================
           FORM STYLES
           ============================================ */
        .form-container {
            max-width: 600px;
            margin: 2rem auto;
            background: var(--bg-light);
            padding: 2rem;
            border-radius: 8px;
            border: 1px solid var(--border-color);
        }
        
        .form-group {
            margin-bottom: 1.5rem;
        }
        
        label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 600;
            color: var(--text-dark);
        }
        
        label .required {
            color: var(--error-red);
            font-weight: 700;
        }
        
        input[type="text"],
        input[type="email"],
        input[type="url"],
        select,
        textarea {
            width: 100%;
            padding: 0.75rem;
            border: 2px solid var(--border-color);
            border-radius: 4px;
            font-size: 1rem;
            font-family: inherit;
            background-color: var(--text-light);
            color: var(--text-dark);
        }
        
        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="url"]:focus,
        select:focus,
        textarea:focus {
            outline: 3px solid var(--accent-orange);
            outline-offset: 2px;
            border-color: var(--primary-blue);
            box-shadow: 0 0 0 4px rgba(0, 82, 204, 0.1);
        }
        
        textarea {
            resize: vertical;
            min-height: 100px;
        }
        
        .form-note {
            font-size: 0.85rem;
            color: #666;
            margin-top: 0.25rem;
        }
        
        /* ============================================
           CONTENT BOXES
           ============================================ */
        .highlight-box {
            background: #e3f2fd;
            border-left: 4px solid var(--primary-blue);
            padding: 1.5rem;
            margin: 1.5rem 0;
            border-radius: 4px;
        }
        
        .warning-box {
            background: #fff3e0;
            border-left: 4px solid var(--warning-orange);
            padding: 1.5rem;
            margin: 1.5rem 0;
            border-radius: 4px;
        }
        
        .success-box {
            background: #e8f5e9;
            border-left: 4px solid var(--success-green);
            padding: 1.5rem;
            margin: 1.5rem 0;
            border-radius: 4px;
        }
        
        /* ============================================
           FAQ SECTION
           ============================================ */
        .faq-container {
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .faq-item {
            margin-bottom: 1.5rem;
            border: 1px solid var(--border-color);
            border-radius: 4px;
            overflow: hidden;
        }
        
        .faq-question {
            background: var(--bg-light);
            padding: 1rem;
            cursor: pointer;
            font-weight: 600;
            color: var(--primary-blue);
            display: flex;
            justify-content: space-between;
            align-items: center;
            user-select: none;
        }
        
        .faq-question:hover {
            background: #f0f4f9;
        }
        
        .faq-question:focus {
            outline: 3px solid var(--accent-orange);
            outline-offset: -3px;
        }
        
        .faq-toggle {
            font-size: 1.3rem;
            transition: transform 0.3s ease;
        }
        
        .faq-item.open .faq-toggle {
            transform: rotate(180deg);
        }
        
        .faq-answer {
            padding: 1.5rem;
            background: var(--text-light);
            display: none;
            line-height: 1.7;
            color: var(--text-dark);
        }
        
        .faq-item.open .faq-answer {
            display: block;
        }
        
        /* ============================================
           STATS SECTION
           ============================================ */
        .stats-container {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }
        
        .stat-box {
            text-align: center;
            padding: 1.5rem;
        }
        
        .stat-number {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--accent-orange);
            margin-bottom: 0.5rem;
        }
        
        .quick-nav-section {
            background: #f0f4f9;
            padding: 2rem 1rem;
        }
        
        .quick-nav-buttons {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            gap: 1rem;
            justify-content: center;
            flex-wrap: wrap;
            align-items: center;
        }
        
        .quick-nav-btn {
            padding: 0.75rem 1.5rem;
            border: none;
            border-radius: 4px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            min-height: 44px;
            background-color: var(--primary-blue);
            color: white;
            transition: all 0.3s ease;
            text-decoration: none;
        }
        
        .quick-nav-btn:hover {
            background-color: var(--primary-dark);
        }
        
        .quick-nav-btn:focus {
            outline: 3px solid var(--accent-orange);
            outline-offset: 2px;
        }
        
        .quick-nav-btn.secondary {
            background-color: var(--accent-orange);
        }
        
        .quick-nav-btn.secondary:hover {
            background-color: #e55a00;
        }
        
        /* ============================================
           FOOTER
           ============================================ */
        footer {
            background-color: var(--primary-dark);
            color: var(--text-light);
            padding: 2.5rem 1rem;
            margin-top: 3rem;
        }
        
        .footer-container {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
            margin-bottom: 2rem;
        }
        
        .footer-section h3 {
            color: var(--text-light);
            font-size: 1rem;
            margin-bottom: 1rem;
            font-weight: 600;
        }
        
        .footer-section ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }
        
        .footer-section li {
            margin-bottom: 0.75rem;
        }
        
        .footer-section a {
            color: rgba(255,255,255,0.85);
            text-decoration: none;
            transition: color 0.2s;
        }
        
        .footer-section a:hover {
            color: var(--accent-orange);
        }
        
        .footer-section a:focus {
            outline: 3px solid var(--accent-orange);
            outline-offset: 2px;
        }
        
        .footer-bottom {
            border-top: 1px solid rgba(255,255,255,0.1);
            padding-top: 1.5rem;
            text-align: center;
            font-size: 0.9rem;
            color: rgba(255,255,255,0.85);
        }
        
        /* ============================================
           RESPONSIVE DESIGN
           ============================================ */
        @media (max-width: 768px) {
            .mobile-menu-toggle {
                display: block;
            }
            
            .nav-menu {
                position: absolute;
                top: 100%;
                left: 0;
                right: 0;
                background: var(--bg-white);
                flex-direction: column;
                gap: 0;
                box-shadow: 0 4px 12px rgba(0,0,0,0.15);
                display: none;
                width: 100%;
                border-top: 2px solid var(--border-color);
            }
            
            .nav-menu.active {
                display: flex;
            }
            
            .nav-menu li {
                width: 100%;
            }
            
            .nav-menu a {
                padding: 1rem;
                border-bottom: 1px solid var(--border-color);
                display: block;
                width: 100%;
            }
            
            .nav-menu a.btn-primary {
                margin-left: 0;
            }
            
            .hero h1 {
                font-size: 1.5rem;
            }
            
            .hero p {
                font-size: 0.9rem;
            }
            
            h2 {
                font-size: 1.5rem;
            }
            
            .pricing-card.featured {
                transform: scale(1);
            }
            
            .section {
                padding: 1.5rem;
            }
            
            .stats-container {
                grid-template-columns: 1fr;
            }
        }
        
        @media (max-width: 480px) {
            body {
                font-size: 15px;
            }
            
            .hero {
                padding: 1.5rem 1rem;
            }
            
            .hero h1 {
                font-size: 1.3rem;
            }
            
            h1 {
                font-size: 1.5rem;
            }
            
            h2 {
                font-size: 1.25rem;
            }
            
            .pricing-price {
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <!-- SKIP LINK FOR ACCESSIBILITY -->
    <a href="#main-content" class="skip-to-main">Skip to main content</a>
    
    <!-- HEADER WITH NAVIGATION -->
    <header role="banner">
        <nav class="nav-container" role="navigation" aria-label="Main navigation">
            <a href="index.php" class="logo-wrapper">
                <svg class="logo-svg" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <!-- Left hand -->
                    <path d="M3 10C3 9 3.5 8 4.5 8C5.5 8 6 9 6 10V14C6 15 5.5 16 4.5 16C3.5 16 3 15 3 14V10Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
                    <!-- Left forearm -->
                    <path d="M6 12L11 8" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    
                    <!-- Right hand -->
                    <path d="M21 10C21 9 20.5 8 19.5 8C18.5 8 18 9 18 10V14C18 15 18.5 16 19.5 16C20.5 16 21 15 21 14V10Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
                    <!-- Right forearm -->
                    <path d="M18 12L13 8" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    
                    <!-- Connection point in center -->
                    <circle cx="12" cy="8" r="1.5" fill="currentColor"/>
                </svg>
                <span class="logo-text">A11yscan</span>
            </a>
            <button class="mobile-menu-toggle" aria-label="Toggle navigation menu" aria-expanded="false"
                    onclick="document.querySelector('.nav-menu').classList.toggle('active'); this.setAttribute('aria-expanded', this.getAttribute('aria-expanded') === 'false' ? 'true' : 'false')">☰</button>
            <ul class="nav-menu">
                <li><a href="index.php" <?php if($currentPage === 'index') echo 'class="active"'; ?>>Home</a></li>
                <li><a href="blog.php" <?php if($currentPage === 'blog') echo 'class="active"'; ?>>Blog</a></li>
                <li><a href="index.php#pricing" class="btn-primary">Get Scan</a></li>
            </ul>
        </nav>
    </header>
    
    <!-- MAIN CONTENT AREA -->
    <main id="main-content">
        <?php echo $pageContent ?? ''; ?>
    </main>
    
    <!-- FOOTER -->
    <footer role="contentinfo">
        <div class="footer-container">
            <section class="footer-section">
                <h3>About</h3>
                <p>A11yscan provides free accessibility audits, expert-level analysis, and litigation support for companies facing WCAG compliance risks.</p>
            </section>
            
            <section class="footer-section">
                <h3>Services</h3>
                <ul>
                    <li><a href="index.php#pricing">Free WCAG Scan</a></li>
                    <li><a href="index.php#pricing">Partial Site Audit</a></li>
                    <li><a href="index.php#pricing">Full Site Audit</a></li>
                    <li><a href="index.php#pricing">Expert Testimony</a></li>
                </ul>
            </section>
            
            <section class="footer-section">
                <h3>Legal</h3>
                <ul>
                    <li><a href="#">Accessibility Statement</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms of Service</a></li>
                </ul>
            </section>
            
            <section class="footer-section">
                <h3>Contact</h3>
                <p>Email: <a href="mailto:info@a11yscan.xyz">info@a11yscan.xyz</a></p>
                <p>For legal inquiries: <a href="mailto:legal@a11yscan.xyz">legal@a11yscan.xyz</a></p>
            </section>
        </div>
        
        <div class="footer-bottom">
            <p>&copy; 2025 A11yscan. All rights reserved.</p>
            <p style="margin-top: 0.5rem; font-size: 0.85rem;">WCAG 2.1 Level AA Compliant | <a href="#">Accessibility</a></p>
        </div>
    </footer>

    <script>
        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                const href = this.getAttribute('href');
                if (href !== '#' && document.querySelector(href)) {
                    e.preventDefault();
                    document.querySelector(href).scrollIntoView({ behavior: 'smooth' });
                }
            });
        });
        
        // FAQ accordion functionality
        document.querySelectorAll('.faq-question').forEach(question => {
            question.addEventListener('click', function() {
                const item = this.closest('.faq-item');
                item.classList.toggle('open');
                this.setAttribute('aria-expanded', item.classList.contains('open') ? 'true' : 'false');
            });
            
            question.addEventListener('keydown', function(e) {
                if (e.key === 'Enter' || e.key === ' ') {
                    e.preventDefault();
                    this.click();
                }
            });
        });
    </script>
</body>
</html>
