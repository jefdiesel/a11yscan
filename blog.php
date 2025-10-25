<?php
$pageTitle = 'A11yscan Blog - Web Accessibility, WCAG Compliance & Legal Risk';
$pageDescription = 'Expert articles on web accessibility, WCAG compliance, disability inclusion, and legal risk management. Learn accessibility best practices.';
$currentPage = 'blog';

$pageContent = <<<'HTML'
<section class="hero">
    <h1>Web Accessibility Blog</h1>
    <p>Expert insights on WCAG compliance, disability inclusion, and reducing legal risk</p>
</section>

<section>
    <h2>Latest Articles</h2>
    <div class="grid">
        <article class="card blog-card">
            <time datetime="2025-10-25" class="blog-date">Oct 25, 2025</time>
            <h2 style="font-size: 1.3rem; margin-top: 0.5rem;">The Unknown Corporate Risk: Your Website vs. Your Marketing Department</h2>
            <p>Why corporate legal departments thoroughly review marketing campaigns but overlook website accessibility entirely—exposing your organization to massive liability.</p>
            <a href="blog-post-corporate-legal-risk.php" class="btn btn-primary" style="margin-top: 1rem;">Read More</a>
        </article>

        <article class="card blog-card">
            <time datetime="2025-10-25" class="blog-date">Oct 25, 2025</time>
            <h2 style="font-size: 1.3rem; margin-top: 0.5rem;">E-Commerce Accessibility: One JavaScript Error, Thousands of Broken Products</h2>
            <p>How a single JavaScript template error can cascade through your entire product catalog, making thousands of pages inaccessible while your site looks perfect to sighted users.</p>
            <a href="blog-post-ecommerce-javascript-accessibility.php" class="btn btn-primary" style="margin-top: 1rem;">Read More</a>
        </article>
    </div>
</section>

<section>
    <h2>More Articles Coming Soon</h2>
    <div class="grid">
        <article class="card blog-card">
            <time datetime="2025-01-15" class="blog-date">Coming soon</time>
            <h2 style="font-size: 1.3rem; margin-top: 0.5rem;">Mobile Accessibility: Touch Targets, Keyboard Navigation & WCAG 2.2</h2>
            <p>WCAG 2.2 introduces stricter mobile requirements. Learn how to design for small screens, keyboard-only navigation, and touch-friendly interactions.</p>
            <a href="#" class="btn btn-secondary" style="margin-top: 1rem;">Coming Soon</a>
        </article>

        <article class="card blog-card">
            <time datetime="2025-01-20" class="blog-date">Coming soon</time>
            <h2 style="font-size: 1.3rem; margin-top: 0.5rem;">Video Accessibility: Captions, Transcripts & Audio Descriptions</h2>
            <p>Video is essential for engagement—but inaccessible video excludes millions. Master captions, transcripts, and audio descriptions for true accessibility.</p>
            <a href="#" class="btn btn-secondary" style="margin-top: 1rem;">Coming Soon</a>
        </article>

        <article class="card blog-card">
            <time datetime="2025-01-25" class="blog-date">Coming soon</time>
            <h2 style="font-size: 1.3rem; margin-top: 0.5rem;">Accessible Forms: Labels, Validation & Error Messages</h2>
            <p>Forms are broken for users with disabilities. Discover how to build forms with proper labels, keyboard navigation, and accessible error handling.</p>
            <a href="#" class="btn btn-secondary" style="margin-top: 1rem;">Coming Soon</a>
        </article>

        <article class="card blog-card">
            <time datetime="2025-02-01" class="blog-date">Coming soon</time>
            <h2 style="font-size: 1.3rem; margin-top: 0.5rem;">WCAG 2.2 vs 2.1: What's New & Why It Matters</h2>
            <p>WCAG 2.2 introduces 9 new success criteria. Learn what changed, how it affects your compliance obligations, and how to prepare for 2025.</p>
            <a href="#" class="btn btn-secondary" style="margin-top: 1rem;">Coming Soon</a>
        </article>

        <article class="card blog-card">
            <time datetime="2025-02-05" class="blog-date">Coming soon</time>
            <h2 style="font-size: 1.3rem; margin-top: 0.5rem;">European Accessibility Act Compliance: What You Need to Know</h2>
            <p>The EAA requires WCAG 2.1 AA compliance by June 2025. Understand the requirements, timelines, and what happens if you're not compliant.</p>
            <a href="#" class="btn btn-secondary" style="margin-top: 1rem;">Coming Soon</a>
        </article>

        <article class="card blog-card">
            <time datetime="2025-02-10" class="blog-date">Coming soon</time>
            <h2 style="font-size: 1.3rem; margin-top: 0.5rem;">Screen Readers 101: How Blind Users Navigate the Web</h2>
            <p>Understand how screen readers work and what makes content accessible or inaccessible. A practical guide for developers and designers.</p>
            <a href="#" class="btn btn-secondary" style="margin-top: 1rem;">Coming Soon</a>
        </article>
    </div>
</section>

<section>
    <div class="highlight">
        <h2 style="margin-top: 0;">Get a Free Accessibility Audit</h2>
        <p>Discover accessibility issues on your site and get expert recommendations for improvement.</p>
        <button class="btn btn-primary" onclick="openPricingForm('free-scan', 'Free WCAG Accessibility Scan')">Start Free Scan</button>
    </div>
</section>
HTML;

include 'template.php';
?>
