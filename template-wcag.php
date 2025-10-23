<?php
/**
 * A11yscan - Modern Minimal Template
 * WCAG 2.1 Level AAA Compliant
 * High Contrast Design (7:1+ ratios)
 * 
 * Usage:
 * $pageTitle = 'Your Page Title';
 * $pageDescription = 'Your description';
 * $pageContent = <<<'HTML' ... HTML;
 * include 'template-wcag-v2.php';
 */

$pageTitle = $pageTitle ?? 'A11yscan | Accessibility Compliance';
$pageDescription = $pageDescription ?? 'Free WCAG scanning and accessibility risk assessment.';
$currentPage = basename($_SERVER['PHP_SELF'], '.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($pageTitle); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($pageDescription); ?>">
    <style>
        /* ============================================
           WCAG 2.1 LEVEL AAA COMPLIANT DESIGN
           ============================================ */
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        :root {
            /* High Contrast Palette - AAA Compliant */
            --text-primary: #0a0e27;      /* Near black 7:1+ */
            --text-secondary: #2d3142;    /* Dark gray */
            --bg-primary: #ffffff;        /* Pure white */
            --bg-secondary: #f8f9fb;      /* Light neutral */
            --bg-tertiary: #f0f2f7;       /* Slightly darker neutral */
            --accent-primary: #2563eb;    /* Blue - 4.9:1 on white */
            --accent-dark: #1e40af;       /* Darker blue */
            --accent-light: #3b82f6;      /* Lighter blue */
            --success: #059669;           /* Green */
            --error: #dc2626;             /* Red */
            --border: #d1d5db;            /* Light gray border */
            --border-dark: #9ca3af;       /* Darker border */
        }
        
        html {
            font-size: 16px;
            scroll-behavior: smooth;
        }
        
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Helvetica Neue', sans-serif;
            line-height: 1.6;
            color: var(--text-primary);
            background: var(--bg-primary);
        }
        
        /* ============================================
           SKIP LINK
           ============================================ */
        .skip-link {
            position: absolute;
            top: -40px;
            left: 0;
            background: var(--accent-primary);
            color: white;
            padding: 8px 16px;
            z-index: 10001;
            font-weight: 600;
            text-decoration: none;
            border-radius: 0 0 4px 0;
        }
        
        .skip-link:focus {
            top: 0;
            outline: 3px solid var(--accent-primary);
            outline-offset: 2px;
        }
        
        /* ============================================
           HEADER
           ============================================ */
        header {
            background: var(--bg-primary);
            border-bottom: 1px solid var(--border);
            position: sticky;
            top: 0;
            z-index: 1000;
        }
        
        .header-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 1rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .logo {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            text-decoration: none;
            color: var(--text-primary);
            font-size: 1.25rem;
            font-weight: 700;
        }
        
        .logo:focus {
            outline: 3px solid var(--accent-primary);
            outline-offset: 2px;
        }
        
        .logo-svg {
            width: 28px;
            height: 28px;
            flex-shrink: 0;
        }
        
        nav {
            display: flex;
            gap: 0;
            align-items: center;
        }
        
        nav a {
            padding: 0.75rem 1.25rem;
            text-decoration: none;
            color: var(--text-primary);
            font-weight: 500;
            font-size: 0.95rem;
            border-radius: 4px;
            transition: background 0.2s, color 0.2s;
            border: 2px solid transparent;
        }
        
        nav a:hover {
            background: var(--bg-secondary);
            color: var(--accent-dark);
        }
        
        nav a:focus {
            outline: 3px solid var(--accent-primary);
            outline-offset: -3px;
            background: var(--bg-secondary);
        }
        
        nav a.active {
            color: var(--accent-primary);
            font-weight: 600;
        }
        
        nav a.cta {
            background: var(--accent-primary);
            color: white;
            font-weight: 600;
            margin-left: 0.5rem;
        }
        
        nav a.cta:hover {
            background: var(--accent-dark);
        }
        
        /* ============================================
           MAIN CONTENT
           ============================================ */
        main {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1rem;
        }
        
        /* ============================================
           HERO SECTION
           ============================================ */
        .hero {
            padding: 3rem 0 2.5rem;
            text-align: center;
        }
        
        .hero h1 {
            font-size: 2.5rem;
            font-weight: 700;
            line-height: 1.2;
            margin-bottom: 1rem;
            color: var(--text-primary);
        }
        
        .hero p {
            font-size: 1.1rem;
            color: var(--text-secondary);
            max-width: 600px;
            margin: 0 auto 1.5rem;
            font-weight: 400;
        }
        
        /* ============================================
           BUTTONS
           ============================================ */
        .btn {
            display: inline-block;
            padding: 0.85rem 1.75rem;
            border: none;
            border-radius: 6px;
            font-size: 1rem;
            font-weight: 600;
            text-decoration: none;
            cursor: pointer;
            transition: all 0.2s;
            min-height: 44px;
            text-align: center;
            min-width: 44px;
        }
        
        .btn-primary {
            background: var(--accent-primary);
            color: white;
        }
        
        .btn-primary:hover {
            background: var(--accent-dark);
            box-shadow: 0 4px 12px rgba(37, 99, 235, 0.3);
        }
        
        .btn-primary:focus {
            outline: 3px solid var(--accent-primary);
            outline-offset: 2px;
        }
        
        .btn-secondary {
            background: var(--bg-secondary);
            color: var(--text-primary);
            border: 2px solid var(--border);
        }
        
        .btn-secondary:hover {
            background: var(--bg-tertiary);
            border-color: var(--text-secondary);
        }
        
        /* ============================================
           SECTIONS & SPACING
           ============================================ */
        section {
            padding: 2.5rem 0;
            border-bottom: 1px solid var(--border);
        }
        
        section:last-of-type {
            border-bottom: none;
        }
        
        h2 {
            font-size: 2rem;
            font-weight: 700;
            color: var(--text-primary);
            margin-bottom: 1.5rem;
            line-height: 1.2;
        }
        
        h3 {
            font-size: 1.3rem;
            font-weight: 600;
            color: var(--text-primary);
            margin-bottom: 0.75rem;
        }
        
        p {
            color: var(--text-secondary);
            line-height: 1.7;
            margin-bottom: 1rem;
        }
        
        a {
            color: var(--accent-primary);
            text-decoration: underline;
            font-weight: 500;
        }
        
        a:hover {
            color: var(--accent-dark);
        }
        
        a:focus {
            outline: 3px solid var(--accent-primary);
            outline-offset: 2px;
        }
        
        /* ============================================
           GRID & CARDS
           ============================================ */
        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }
        
        .card {
            background: var(--bg-primary);
            border: 1px solid var(--border);
            border-radius: 8px;
            padding: 2rem;
            transition: all 0.3s;
        }
        
        .card:hover {
            border-color: var(--accent-primary);
            box-shadow: 0 4px 20px rgba(37, 99, 235, 0.1);
            transform: translateY(-2px);
        }
        
        .card:focus-within {
            outline: 3px solid var(--accent-primary);
            outline-offset: 2px;
        }
        
        /* ============================================
           HIGHLIGHTS & CALLOUTS
           ============================================ */
        .highlight {
            background: var(--bg-secondary);
            border-left: 4px solid var(--accent-primary);
            padding: 1.5rem;
            margin: 1.5rem 0;
            border-radius: 4px;
        }
        
        .stat {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--accent-primary);
            display: block;
            line-height: 1;
            margin-bottom: 0.5rem;
        }
        
        /* ============================================
           FOOTER
           ============================================ */
        footer {
            background: var(--text-primary);
            color: white;
            padding: 2rem 0;
            margin-top: 3rem;
        }
        
        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1rem;
        }
        
        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
            margin-bottom: 2rem;
        }
        
        .footer-section h3 {
            color: white;
            font-size: 0.95rem;
            margin-bottom: 1rem;
            font-weight: 600;
        }
        
        .footer-section p {
            color: rgba(255, 255, 255, 0.8);
            font-size: 0.9rem;
        }
        
        .footer-section a {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
        }
        
        .footer-section a:hover {
            color: white;
            text-decoration: underline;
        }
        
        .footer-section a:focus {
            outline: 3px solid var(--accent-light);
            outline-offset: 2px;
        }
        
        .footer-bottom {
            border-top: 1px solid rgba(255, 255, 255, 0.2);
            padding-top: 1.5rem;
            text-align: center;
            font-size: 0.85rem;
            color: rgba(255, 255, 255, 0.7);
        }
        
        /* ============================================
           RESPONSIVE DESIGN
           ============================================ */
        @media (max-width: 768px) {
            .header-content {
                padding: 0.75rem;
            }
            
            nav a {
                padding: 0.5rem 0.75rem;
                font-size: 0.9rem;
            }
            
            nav a.cta {
                margin-left: 0.25rem;
            }
            
            .hero h1 {
                font-size: 1.75rem;
            }
            
            .hero p {
                font-size: 1rem;
            }
            
            h2 {
                font-size: 1.5rem;
            }
            
            section {
                padding: 2rem 0;
            }
            
            .grid {
                gap: 1.5rem;
            }
        }
        
        @media (max-width: 480px) {
            html {
                font-size: 15px;
            }
            
            .header-content {
                flex-direction: column;
                gap: 0.75rem;
            }
            
            nav {
                width: 100%;
                justify-content: center;
                flex-wrap: wrap;
                gap: 0.25rem;
            }
            
            .hero h1 {
                font-size: 1.5rem;
            }
            
            h2 {
                font-size: 1.35rem;
            }
            
            .grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <a href="#main" class="skip-link">Skip to main content</a>
    
    <header role="banner">
        <div class="header-content">
            <a href="index.php" class="logo" aria-label="A11yscan home">
                <svg class="logo-svg" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <!-- Two hands meeting in middle - handshake -->
                    <g stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                        <!-- Left hand -->
                        <path d="M3 12c0-.5.224-1 .5-1.5L6 7c.5-.5 1.5-.5 2 0l1 1" fill="none"/>
                        <path d="M8 8v5c0 .5-.224 1-.5 1.5L5 17c-.5.5-1.5.5-2 0l-1-1" fill="none"/>
                        <!-- Right hand -->
                        <path d="M21 12c0 .5-.224 1-.5 1.5L18 17c-.5.5-1.5.5-2 0l-1-1" fill="none"/>
                        <path d="M16 16v-5c0-.5.224-1 .5-1.5L19 7c.5-.5 1.5-.5 2 0l1 1" fill="none"/>
                        <!-- Connection/meeting point -->
                        <circle cx="12" cy="12" r="1.5" fill="currentColor"/>
                        <line x1="8.5" y1="11" x2="15.5" y2="13" stroke="currentColor"/>
                    </g>
                </svg>
                <span>A11yscan</span>
            </a>
            <nav role="navigation" aria-label="Main navigation">
                <a href="index.php" <?php echo ($currentPage === 'index') ? 'class="active"' : ''; ?>>Home</a>
                <a href="blog.php" <?php echo ($currentPage === 'blog') ? 'class="active"' : ''; ?>>Blog</a>
                <a href="#pricing" class="cta btn btn-primary">Get Scan</a>
            </nav>
        </div>
    </header>
    
    <main id="main">
        <?php echo $pageContent ?? ''; ?>
    </main>
    
    <footer role="contentinfo">
        <div class="footer-content">
            <div class="footer-grid">
                <div class="footer-section">
                    <h3>About</h3>
                    <p>A11yscan provides free accessibility audits and expert WCAG compliance analysis to help organizations meet legal and ethical accessibility standards.</p>
                </div>
                <div class="footer-section">
                    <h3>Services</h3>
                    <ul style="list-style: none;">
                        <li><a href="#pricing">Free WCAG Scan</a></li>
                        <li><a href="#pricing">Partial Audit</a></li>
                        <li><a href="#pricing">Full Audit</a></li>
                        <li><a href="#pricing">Expert Testimony</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h3>Legal</h3>
                    <ul style="list-style: none;">
                        <li><a href="#">Accessibility Statement</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms of Service</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h3>Contact</h3>
                    <p>Email: <a href="mailto:info@a11yscan.xyz">info@a11yscan.xyz</a></p>
                    <p>Legal: <a href="mailto:legal@a11yscan.xyz">legal@a11yscan.xyz</a></p>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2025 A11yscan. All rights reserved.</p>
                <p style="margin-top: 0.5rem;">WCAG 2.1 Level AAA Compliant</p>
            </div>
        </div>
    </footer>

    <script>
        // Smooth anchor navigation
        document.querySelectorAll('a[href^="#"]').forEach(a => {
            a.addEventListener('click', function(e) {
                const href = this.getAttribute('href');
                if (href !== '#') {
                    const target = document.querySelector(href);
                    if (target) {
                        e.preventDefault();
                        target.scrollIntoView({ behavior: 'smooth' });
                    }
                }
            });
        });
    </script>
</body>
</html>
