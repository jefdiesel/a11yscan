<?php
$pageTitle = 'Blog | A11yscan - Accessibility Insights';
$pageDescription = 'Read expert articles on web accessibility, WCAG compliance, ADA lawsuits, and accessibility best practices.';
$currentPage = 'blog';
$pageContent = <<<'HTML'
<main>
    <section class="page-intro">
        <h1>Accessibility Insights</h1>
        <p>Deep dives into WCAG compliance, accessibility law, and accessible web design.</p>
    </section>
    
    <section class="blog-grid">
        <article class="card blog-card" tabindex="0" id="article-overlay-failures">
            <h3>Why WCAG Accessibility Overlays Fail</h3>
            <p class="meta">October 24, 2025</p>
            <p>Explore why accessibility overlay solutions often fail to meet WCAG compliance and can actually make websites harder to use for people with disabilities.</p>
            <a href="/blog/accessibility-overlays-fail.php" class="read-more">Read More →</a>
        </article>
        
        <article class="card blog-card" tabindex="0" id="article-silver-economy">
            <h3>The Silver Economy: Why Accessible Design Is a Market Imperative</h3>
            <p class="meta">October 24, 2025</p>
            <p>Discover how the 54+ demographic represents $7.6 trillion in spending power and why accessibility directly impacts your revenue.</p>
            <a href="/blog/silver-economy-accessibility.php" class="read-more">Read More →</a>
        </article>
        
        <article class="card blog-card" tabindex="0" id="article-ada-2025">
            <h3>ADA Website Lawsuits: 2025 Trends and What to Expect</h3>
            <p class="meta">October 24, 2025</p>
            <p>Latest data on ADA Title III litigation trends, settlement amounts, and the legal landscape for website accessibility in 2025.</p>
            <a href="/blog/ada-lawsuits-2025.php" class="read-more">Read More →</a>
        </article>
        
        <article class="card blog-card" tabindex="0" id="article-temp-disability">
            <h3>Temporary Disabilities & Accessibility: Broken Mice, Injured Arms, Lost Glasses</h3>
            <p class="meta">October 24, 2025</p>
            <p>Learn why temporary accessibility needs affect millions and why WCAG compliance matters for everyone experiencing a temporary barrier.</p>
            <a href="/blog/temp-disabilities-broken-mouse.php" class="read-more">Read More →</a>
        </article>
        
        <article class="card blog-card" tabindex="0" id="article-seo-wcag">
            <h3>SEO and WCAG: How Accessibility and Search Rankings Are Linked</h3>
            <p class="meta">October 24, 2025</p>
            <p>Discover why WCAG compliance and SEO aren't separate concerns—they're the same thing. Accessible sites rank better and convert better.</p>
            <a href="/blog/seo-wcag-linked.php" class="read-more">Read More →</a>
        </article>
        
        <article class="card blog-card" tabindex="0" id="article-div-soup">
            <h3>Div Soup: Why Pretty But Broken Websites Cost More Than You Think</h3>
            <p class="meta">October 24, 2025</p>
            <p>Why building websites with unsemantic divs instead of semantic HTML costs more, ranks worse, and excludes users. A cost analysis.</p>
            <a href="/blog/div-soup-cost-analysis.php" class="read-more">Read More →</a>
        </article>
    </section>
</main>
HTML;
include(dirname(__FILE__) . '/../template.php');
?>
