<?php
$pageTitle = 'Blog | A11yscan';
$pageDescription = 'Web accessibility tips, WCAG guidelines, and accessibility best practices';
$currentPage = 'blog';

$pageContent = <<<'HTML'
<section class="hero">
    <h1>Accessibility & WCAG Insights</h1>
    <p>Articles, tips, and best practices for building accessible websites.</p>
</section>

<section>
    <div class="grid">
        <article class="card blog-card">
            <time datetime="2025-10-23" class="blog-date">Oct 23, 2025</time>
            <h2 style="font-size: 1.3rem; margin-top: 0.5rem;">Understanding WCAG 2.1 Levels: A vs AA vs AAA</h2>
            <p>Learn the differences between WCAG conformance levels and which one your organization should target for compliance.</p>
            <a href="wcag-2-1-levels-guide.php" class="btn btn-primary" style="margin-top: 1rem;">Read More</a>
        </article>

        <article class="card blog-card">
            <time datetime="2025-10-20" class="blog-date">Oct 20, 2025</time>
            <h2 style="font-size: 1.3rem; margin-top: 0.5rem;">Color Contrast: The Foundation of Visual Accessibility</h2>
            <p>Discover why color contrast matters, how to calculate it, and tools to ensure your design meets WCAG standards.</p>
            <a href="color-contrast-guide.php" class="btn btn-primary" style="margin-top: 1rem;">Read More</a>
        </article>

        <article class="card blog-card">
            <time datetime="2025-10-17" class="blog-date">Oct 17, 2025</time>
            <h2 style="font-size: 1.3rem; margin-top: 0.5rem;">Keyboard Navigation: Making Your Site Usable Without a Mouse</h2>
            <p>Why keyboard accessibility matters, common pitfalls, and how to audit your site for keyboard-only users.</p>
            <a href="keyboard-navigation-guide.php" class="btn btn-primary" style="margin-top: 1rem;">Read More</a>
        </article>

        <article class="card blog-card">
            <time datetime="2025-10-14" class="blog-date">Oct 14, 2025</time>
            <h2 style="font-size: 1.3rem; margin-top: 0.5rem;">Alt Text That Actually Works: Writing for Screen Readers</h2>
            <p>Learn how to write descriptive alt text that improves SEO and accessibility for visually impaired users.</p>
            <a href="alt-text-guide.php" class="btn btn-primary" style="margin-top: 1rem;">Read More</a>
        </article>

        <article class="card blog-card">
            <time datetime="2025-10-11" class="blog-date">Oct 11, 2025</time>
            <h2 style="font-size: 1.3rem; margin-top: 0.5rem;">The ADA & Your Website: Legal Requirements in 2025</h2>
            <p>What you need to know about accessibility lawsuits, Section 508, and staying compliant in your jurisdiction.</p>
            <a href="ada-legal-requirements.php" class="btn btn-primary" style="margin-top: 1rem;">Read More</a>
        </article>

        <article class="card blog-card">
            <time datetime="2025-10-08" class="blog-date">Oct 8, 2025</time>
            <h2 style="font-size: 1.3rem; margin-top: 0.5rem;">ARIA Labels & Semantic HTML: Building for Screen Readers</h2>
            <p>Understanding the difference between ARIA and semantic HTML, and when to use each for maximum accessibility.</p>
            <a href="aria-semantic-html-guide.php" class="btn btn-primary" style="margin-top: 1rem;">Read More</a>
        </article>
    </div>
</section>

<section>
    <div class="highlight">
        <h2 style="margin-top: 0;">Stay Updated</h2>
        <p>Get accessibility insights and WCAG tips delivered to your inbox.</p>
        <form style="display: flex; gap: 0.5rem; margin-top: 1rem;">
            <input type="email" placeholder="Your email" style="flex: 1; padding: 0.85rem; border: 2px solid var(--border); border-radius: 6px; font-size: 1rem;" required/>
            <button type="submit" class="btn btn-primary">Subscribe</button>
        </form>
    </div>
</section>

<style>
.blog-date {
    font-size: 0.85rem;
    color: var(--text-secondary);
    font-weight: 500;
}

.blog-card h2 {
    border-bottom: none;
    padding-bottom: 0;
}
</style>
HTML;

include 'template.php';
?>
