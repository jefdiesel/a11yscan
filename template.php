<?php
/**
 * A11yscan Master Template
 * WCAG 2.1 Level AAA Compliant
 * 
 * Usage in page files:
 * $pageTitle = 'Page Title';
 * $pageDescription = 'Description';
 * $pageContent = <<<'HTML'
 *   ... your content ...
 * HTML;
 * include 'template.php';
 */

$pageTitle = $pageTitle ?? 'A11yscan';
$pageDescription = $pageDescription ?? 'Free WCAG accessibility auditing and compliance';
$currentPage = $currentPage ?? basename($_SERVER['PHP_SELF'], '.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($pageTitle); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($pageDescription); ?>">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        :root {
            --text-primary: #0a0e27;
            --text-secondary: #2d3142;
            --bg-primary: #ffffff;
            --bg-secondary: #f8f9fb;
            --bg-tertiary: #f0f2f7;
            --accent-primary: #2563eb;
            --accent-dark: #1e40af;
            --accent-light: #3b82f6;
            --border: #d1d5db;
            --footer-text: #f0f2f7;
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
        }
        
        .skip-link:focus {
            top: 0;
        }
        
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
            padding: 0.6rem 1rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .logo {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            text-decoration: none;
            color: var(--text-primary);
            font-size: 1.4rem;
            font-weight: 800;
            letter-spacing: -0.5px;
        }
        
        .logo-svg {
            width: 38px;
            height: 38px;
        }
        
        nav {
            display: flex;
            gap: 0;
            align-items: center;
        }
        
        nav a {
            padding: 0.5rem 1rem;
            text-decoration: none;
            color: var(--text-primary);
            font-weight: 500;
            font-size: 0.9rem;
            border-radius: 4px;
            transition: all 0.2s;
        }
        
        nav a:hover {
            background: var(--bg-secondary);
            color: var(--accent-dark);
        }
        
        nav a:focus {
            outline: 3px solid var(--accent-primary);
            outline-offset: -3px;
        }
        
        nav a.active {
            color: var(--accent-primary);
            font-weight: 600;
        }
        
        nav a.cta {
            background: var(--accent-primary);
            color: white;
            margin-left: 0.75rem;
            padding: 0.5rem 1rem;
            font-size: 0.9rem;
        }
        
        nav a.cta:hover {
            background: var(--accent-dark);
        }
        
        main {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1rem;
        }
        
        .hero {
            padding: 3rem 0 2.5rem;
            text-align: center;
        }
        
        .hero h1 {
            font-size: 2.5rem;
            font-weight: 700;
            line-height: 1.2;
            margin-bottom: 1rem;
        }
        
        .hero p {
            font-size: 1.1rem;
            color: var(--text-secondary);
            max-width: 600px;
            margin: 0 auto 1.5rem;
        }
        
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
        }
        
        .btn-primary {
            background: var(--accent-primary);
            color: white;
        }
        
        .btn-primary:hover {
            background: var(--accent-dark);
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
        }
        
        section {
            padding: 2.5rem 0;
            border-bottom: 1px solid var(--border);
        }
        
        section:last-of-type {
            border-bottom: none;
        }
        
        section h2 {
            scroll-margin-top: 0;
        }
        
        .post-header {
            margin-bottom: 0;
            padding-bottom: 0;
            border-bottom: none;
        }
        
        .post-header time {
            font-size: 0.9rem;
            color: var(--text-secondary);
            font-weight: 500;
            display: block;
            margin-bottom: 0.5rem;
        }
        
        .post-header h1 {
            font-size: 2.5rem;
            font-weight: 700;
            line-height: 1.2;
            margin-bottom: 2rem;
        }
        
        .blog-post section {
            scroll-margin-top: 100px;
        }
        
        .blog-post section:focus {
            outline: 3px solid var(--accent-primary);
            outline-offset: -3px;
        }
        
        h2 {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
        }
        
        h3 {
            font-size: 1.3rem;
            font-weight: 600;
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
        }
        
        a:hover {
            color: var(--accent-dark);
        }
        
        a:focus {
            outline: 3px solid var(--accent-primary);
            outline-offset: 2px;
        }
        
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
        
        .stat {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--accent-primary);
            display: block;
            margin-bottom: 0.5rem;
        }
        
        .highlight {
            background: var(--bg-secondary);
            border-left: 4px solid var(--accent-primary);
            padding: 2rem;
            border-radius: 4px;
        }
        
        ul {
            list-style: none;
        }
        
        li {
            margin-bottom: 0.75rem;
        }
        
        footer {
            background: var(--text-primary);
            color: var(--footer-text);
            padding: 2rem 1rem;
            margin-top: 3rem;
        }
        
        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
            margin-bottom: 2rem;
        }
        
        .footer-section h3 {
            color: var(--footer-text);
            font-size: 0.95rem;
            margin-bottom: 1rem;
            font-weight: 600;
        }
        
        .footer-section a {
            color: var(--footer-text);
            text-decoration: none;
        }
        
        .footer-section a:hover {
            color: white;
            text-decoration: underline;
        }
        
        .footer-section a:focus {
            outline: 3px solid var(--accent-primary);
            outline-offset: 2px;
        }
        
        .footer-section p {
            color: var(--footer-text);
            font-size: 0.95rem;
        }
        
        .footer-bottom {
            border-top: 1px solid rgba(240, 242, 247, 0.2);
            padding-top: 1.5rem;
            text-align: center;
            font-size: 0.85rem;
            color: rgba(240, 242, 247, 0.9);
        }
        
        @media (max-width: 768px) {
            .hero h1 {
                font-size: 1.75rem;
            }
            
            h2 {
                font-size: 1.5rem;
            }
            
            nav a {
                padding: 0.4rem 0.6rem;
                font-size: 0.85rem;
            }
            
            nav a.cta {
                margin-left: 0.5rem;
                padding: 0.4rem 0.75rem;
            }
            
            .logo {
                font-size: 1.25rem;
            }
            
            .logo-svg {
                width: 32px;
                height: 32px;
            }
        }
        
        @media (max-width: 480px) {
            .hero h1 {
                font-size: 1.5rem;
            }
            
            h2 {
                font-size: 1.35rem;
            }
            
            .grid {
                grid-template-columns: 1fr;
            }
            
            nav {
                flex-wrap: wrap;
            }
        }
    </style>
</head>
<body>
    <a href="#main" class="skip-link">Skip to main content</a>
    
    <header role="banner">
        <div class="header-content">
            <a href="index.php" class="logo">
                <img class="logo-svg" src="logo.svg" alt=""/>
                A11yscan
            </a>
            <nav role="navigation" aria-label="Main navigation">
                <a href="index.php" <?php echo ($currentPage === 'index') ? 'class="active"' : ''; ?>>Home</a>
                <a href="blog.php" <?php echo ($currentPage === 'blog') ? 'class="active"' : ''; ?>>Blog</a>
                <a href="#pricing" class="cta btn btn-primary">Get Scan</a>
            </nav>
        </div>
    </header>
    
    <main id="main">
        <?php echo $pageContent; ?>
    </main>
    
    <footer role="contentinfo">
        <div class="footer-content">
            <div class="footer-grid">
                <div class="footer-section">
                    <h3>About</h3>
                    <p>A11yscan provides free accessibility audits and expert WCAG compliance analysis.</p>
                </div>
                <div class="footer-section">
                    <h3>Services</h3>
                    <ul>
                        <li><a href="index.php#pricing">Free WCAG Scan</a></li>
                        <li><a href="index.php#pricing">Partial Audit</a></li>
                        <li><a href="index.php#pricing">Full Audit</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h3>Legal</h3>
                    <ul>
                        <li><a href="accessibility-statement.php">Accessibility Statement</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms of Service</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h3>Contact</h3>
                    <p>Email: <a href="mailto:info@a11yscan.xyz">info@a11yscan.xyz</a></p>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2025 A11yscan. All rights reserved. | WCAG 2.1 Level AAA Compliant</p>
            </div>
        </div>
    </footer>

    <script>
        // Make sections tabbable and focusable
        const sections = document.querySelectorAll('.blog-post section[id]');
        sections.forEach(section => {
            section.setAttribute('tabindex', '0');
        });
        
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
