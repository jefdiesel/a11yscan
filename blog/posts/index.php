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
    <h2 style="text-align: center; margin-bottom: 2rem;">Plaintiff & User Rights</h2>
    <div class="grid">
        <article class="card blog-card" tabindex="0" id="article-documenting-barriers">
            <time datetime="2025-10-25" class="blog-date">Oct 25, 2025</time>
            <h3 style="font-size: 1.3rem; margin-top: 0.5rem;">How to Document Website Accessibility Barriers</h3>
            <p>Learn how to properly document accessibility barriers when using assistive technology. Step-by-step guide for recording dates, URLs, screenshots, and creating narratives that demonstrate barriers preventing website access.</p>
            <a href="blog-post-documenting-barriers.php" class="btn btn-primary" style="margin-top: 1rem;">Read More</a>
        </article>

        <article class="card blog-card" tabindex="0" id="article-user-rights-accessibility">
            <time datetime="2025-10-24" class="blog-date">Oct 24, 2025</time>
            <h3 style="font-size: 1.3rem; margin-top: 0.5rem;">Understanding Your Rights as a User Requiring Web Accessibility Features</h3>
            <p>Learn your fundamental rights as a user requiring accessibility features. Understand what accommodations you deserve, how to request them, and what to do when websites fail to provide equal access.</p>
            <a href="understanding-user-rights-accessibility.php" class="btn btn-primary" style="margin-top: 1rem;">Read More</a>
        </article>

        <article class="card blog-card" tabindex="0" id="article-disability-rights">
            <time datetime="2025-01-20" class="blog-date">Jan 20, 2025</time>
            <h3 style="font-size: 1.3rem; margin-top: 0.5rem;">Your Rights as a Person with Disabilities: Understanding Web Accessibility Protections</h3>
            <p>Learn your legal rights under the ADA and state accessibility laws. Understand what protections apply depending on where you live and the type of website.</p>
            <a href="disability-rights-by-state.php" class="btn btn-primary" style="margin-top: 1rem;">Read More</a>
        </article>

        <article class="card blog-card" tabindex="0" id="article-finding-legal-support">
            <time datetime="2025-01-24" class="blog-date">Jan 24, 2025</time>
            <h3 style="font-size: 1.3rem; margin-top: 0.5rem;">Finding Legal Support for Your Web Accessibility Claim</h3>
            <p>Guide to finding qualified attorneys for accessibility cases. Learn what to look for, how to evaluate representation, and alternatives to litigation.</p>
            <a href="finding-legal-support.php" class="btn btn-primary" style="margin-top: 1rem;">Read More</a>
        </article>

        <article class="card blog-card" tabindex="0" id="article-serial-filers">
            <time datetime="2025-01-26" class="blog-date">Jan 26, 2025</time>
            <h3 style="font-size: 1.3rem; margin-top: 0.5rem;">Serial Filers and the ADA Enforcement Gap: Why Disabled Users Bear the Burden</h3>
            <p>Explore the accessibility enforcement gap and why serial filers highlight systemic failures in web accessibility enforcement.</p>
            <a href="serial-filers-enforcement-gap.php" class="btn btn-primary" style="margin-top: 1rem;">Read More</a>
        </article>
    </div>
</section>

<section>
    <h2 style="text-align: center; margin-bottom: 2rem;">Litigation & Legal Risk (Business Perspective)</h2>
    <div class="grid">

        <article class="card blog-card" tabindex="0" id="article-lawsuit-trends-2024">
            <time datetime="2025-10-25" class="blog-date">Oct 25, 2025</time>
            <h3 style="font-size: 1.3rem; margin-top: 0.5rem;">2024 Accessibility Lawsuit Trends: What the Data Shows</h3>
            <p>Analysis of 4,000+ digital accessibility lawsuits filed in 2024, settlement amounts, defendant profiles, and what this means for your organization.</p>
            <a href="2024-lawsuit-trends.php" class="btn btn-primary" style="margin-top: 1rem;">Read More</a>
        </article>

        <article class="card blog-card" tabindex="0" id="article-2024-settlements">
            <time datetime="2025-10-24" class="blog-date">Oct 24, 2025</time>
            <h3 style="font-size: 1.3rem; margin-top: 0.5rem;">Major 2024 Accessibility Settlements: Case Studies and Lessons</h3>
            <p>Deep dive into landmark accessibility settlements from 2024. Learn what companies were sued, why, settlement amounts, and critical lessons.</p>
            <a href="major-2024-settlements.php" class="btn btn-primary" style="margin-top: 1rem;">Read More</a>
        </article>

        <article class="card blog-card" tabindex="0" id="article-2025-predictions">
            <time datetime="2025-10-23" class="blog-date">Oct 23, 2025</time>
            <h3 style="font-size: 1.3rem; margin-top: 0.5rem;">2025 Accessibility Litigation Predictions: What to Expect</h3>
            <p>Expert predictions for 2025 web accessibility lawsuits. Emerging legal trends, likely litigation hotspots, and how to prepare.</p>
            <a href="2025-predictions.php" class="btn btn-primary" style="margin-top: 1rem;">Read More</a>
        </article>

        <article class="card blog-card" tabindex="0" id="article-platform-liability">
            <time datetime="2025-10-22" class="blog-date">Oct 22, 2025</time>
            <h3 style="font-size: 1.3rem; margin-top: 0.5rem;">Platform Liability: When Third Parties Create Accessibility Barriers</h3>
            <p>Understand third-party accessibility liability. Learn when platforms, tools, and vendors share responsibility for accessibility barriers.</p>
            <a href="platform-liability.php" class="btn btn-primary" style="margin-top: 1rem;">Read More</a>
        </article>

        <article class="card blog-card" tabindex="0" id="article-litigation-defense">
            <time datetime="2025-10-21" class="blog-date">Oct 21, 2025</time>
            <h3 style="font-size: 1.3rem; margin-top: 0.5rem;">Defending Against Accessibility Claims: Good Faith Strategies</h3>
            <p>Learn litigation defense strategies for accessibility claims. Understand good faith defense, documentation requirements, and damage mitigation.</p>
            <a href="litigation-defense-strategies.php" class="btn btn-primary" style="margin-top: 1rem;">Read More</a>
        </article>

        <article class="card blog-card" tabindex="0" id="article-risk-management">
            <time datetime="2025-10-20" class="blog-date">Oct 20, 2025</time>
            <h3 style="font-size: 1.3rem; margin-top: 0.5rem;">Accessibility as Enterprise Risk Management: 2024-2025 Analysis</h3>
            <p>Understand accessibility as critical enterprise risk. Learn how litigation trends impact business strategy, insurance, and shareholder value.</p>
            <a href="accessibility-risk-management.php" class="btn btn-primary" style="margin-top: 1rem;">Read More</a>
        </article>

        <article class="card blog-card" tabindex="0" id="article-ada-lawsuits-2025">
            <time datetime="2025-10-24" class="blog-date">Oct 24, 2025</time>
            <h3 style="font-size: 1.3rem; margin-top: 0.5rem;">ADA Website Lawsuits Surge 37% in 2025: Legal Risks, Trends, and Business Impact</h3>
            <p>4,000+ ADA lawsuits filed in 2024. 37% increase in first half of 2025. Geographic shifts, overlay widget traps, repeat litigation, and what businesses must do to reduce legal exposure.</p>
            <a href="ada-lawsuits-2025.php" class="btn btn-primary" style="margin-top: 1rem;">Read More</a>
        </article>
    </div>
</section>

<section>
    <h2 style="text-align: center; margin-bottom: 2rem;">Designing for User Accessibility Needs</h2>
    <div class="grid">
        <article class="card blog-card" tabindex="0" id="article-blind-users">
            <time datetime="2025-10-26" class="blog-date">Oct 26, 2025</time>
            <h3 style="font-size: 1.3rem; margin-top: 0.5rem;">Designing for Blind Users: Screen Reader Accessibility</h3>
            <p>Learn how to design websites accessible to blind users relying on screen readers. Understand semantic structure, alt text, and form accessibility.</p>
            <a href="designing-for-blind-users.php" class="btn btn-primary" style="margin-top: 1rem;">Read More</a>
        </article>

        <article class="card blog-card" tabindex="0" id="article-low-vision-users">
            <time datetime="2025-10-25" class="blog-date">Oct 25, 2025</time>
            <h3 style="font-size: 1.3rem; margin-top: 0.5rem;">Designing for Low Vision Users: Color Contrast and Zoom</h3>
            <p>Design for users with low vision: color contrast ratios, font sizing, zoom support, and color-blind friendly palettes.</p>
            <a href="designing-for-low-vision-users.php" class="btn btn-primary" style="margin-top: 1rem;">Read More</a>
        </article>

        <article class="card blog-card" tabindex="0" id="article-deaf-hoh-users">
            <time datetime="2025-10-24" class="blog-date">Oct 24, 2025</time>
            <h3 style="font-size: 1.3rem; margin-top: 0.5rem;">Designing for Deaf & Hard of Hearing Users: Captions and Transcripts</h3>
            <p>Accessibility for deaf and hard-of-hearing users: video captions, transcripts, sign language, and audio descriptions.</p>
            <a href="designing-for-deaf-users.php" class="btn btn-primary" style="margin-top: 1rem;">Read More</a>
        </article>

        <article class="card blog-card" tabindex="0" id="article-motor-disability-users">
            <time datetime="2025-10-23" class="blog-date">Oct 23, 2025</time>
            <h3 style="font-size: 1.3rem; margin-top: 0.5rem;">Designing for Motor Disability Users: Keyboard & Switch Access</h3>
            <p>Accessibility for users with motor disabilities: keyboard navigation, switch access, target size, and time-based interactions.</p>
            <a href="designing-for-motor-disability-users.php" class="btn btn-primary" style="margin-top: 1rem;">Read More</a>
        </article>

        <article class="card blog-card" tabindex="0" id="article-cognitive-disability-users">
            <time datetime="2025-10-22" class="blog-date">Oct 22, 2025</time>
            <h3 style="font-size: 1.3rem; margin-top: 0.5rem;">Designing for Cognitive Disability Users: Clarity and Simplicity</h3>
            <p>Designing for users with cognitive disabilities: simple language, clear structure, consistent navigation, and focus management.</p>
            <a href="designing-for-cognitive-disability-users.php" class="btn btn-primary" style="margin-top: 1rem;">Read More</a>
        </article>

        <article class="card blog-card" tabindex="0" id="article-neurodivergent-users">
            <time datetime="2025-10-21" class="blog-date">Oct 21, 2025</time>
            <h3 style="font-size: 1.3rem; margin-top: 0.5rem;">Designing for Neurodivergent Users: ADHD and Autism</h3>
            <p>Web accessibility for neurodivergent users: reducing distractions, providing focus support, clear structures, and customization options.</p>
            <a href="designing-for-neurodivergent-users.php" class="btn btn-primary" style="margin-top: 1rem;">Read More</a>
        </article>
    </div>
</section>

<section>
    <h2 style="text-align: center; margin-bottom: 2rem;">WCAG & Accessibility Fundamentals</h2>
    <div class="grid">
        <article class="card blog-card" tabindex="0" id="article-wcag-levels">
            <time datetime="2025-10-24" class="blog-date">Oct 24, 2025</time>
            <h3 style="font-size: 1.3rem; margin-top: 0.5rem;">WCAG 2.1 Levels: A, AA, and AAA Explained</h3>
            <p>Understand the difference between WCAG 2.1 Level A (minimum), AA (recommended), and AAA (enhanced) requirements.</p>
            <a href="wcag-levels-explained.php" class="btn btn-primary" style="margin-top: 1rem;">Read More</a>
        </article>

        <article class="card blog-card" tabindex="0" id="article-alt-text">
            <time datetime="2025-10-24" class="blog-date">Oct 24, 2025</time>
            <h3 style="font-size: 1.3rem; margin-top: 0.5rem;">Alt Text: Complete Guide to Image Descriptions</h3>
            <p>Master alt text for images: when to write it, what to include, and common mistakes that make alt text ineffective.</p>
            <a href="alt-text-complete-guide.php" class="btn btn-primary" style="margin-top: 1rem;">Read More</a>
        </article>

        <article class="card blog-card" tabindex="0" id="article-color-contrast">
            <time datetime="2025-10-24" class="blog-date">Oct 24, 2025</time>
            <h3 style="font-size: 1.3rem; margin-top: 0.5rem;">Color Contrast: From WCAG Requirements to Implementation</h3>
            <p>Color contrast ratios explained: 4.5:1 (AA), 7:1 (AAA), testing tools, and practical tips for maintaining accessible contrast.</p>
            <a href="color-contrast-guide.php" class="btn btn-primary" style="margin-top: 1rem;">Read More</a>
        </article>

        <article class="card blog-card" tabindex="0" id="article-keyboard-navigation">
            <time datetime="2025-10-24" class="blog-date">Oct 24, 2025</time>
            <h3 style="font-size: 1.3rem; margin-top: 0.5rem;">Keyboard Navigation: Tab Order, Focus, and Skip Links</h3>
            <p>Implement keyboard accessibility: proper tab order, visible focus indicators, skip links, and testing strategies.</p>
            <a href="keyboard-navigation-guide.php" class="btn btn-primary" style="margin-top: 1rem;">Read More</a>
        </article>

        <article class="card blog-card" tabindex="0" id="article-semantic-html">
            <time datetime="2025-10-24" class="blog-date">Oct 24, 2025</time>
            <h3 style="font-size: 1.3rem; margin-top: 0.5rem;">Semantic HTML: Building Accessible Web Pages</h3>
            <p>Use semantic HTML elements properly: heading hierarchy, landmark regions, navigation, and why divs are not buttons.</p>
            <a href="semantic-html-guide.php" class="btn btn-primary" style="margin-top: 1rem;">Read More</a>
        </article>

        <article class="card blog-card" tabindex="0" id="article-form-accessibility">
            <time datetime="2025-10-24" class="blog-date">Oct 24, 2025</time>
            <h3 style="font-size: 1.3rem; margin-top: 0.5rem;">Form Accessibility: Labels, Error Messages, and Validation</h3>
            <p>Accessible forms: proper label association, error messages, validation feedback, and required field indicators.</p>
            <a href="form-accessibility-guide.php" class="btn btn-primary" style="margin-top: 1rem;">Read More</a>
        </article>

        <article class="card blog-card" tabindex="0" id="article-silver-economy">
            <time datetime="2025-10-24" class="blog-date">Oct 24, 2025</time>
            <h3 style="font-size: 1.3rem; margin-top: 0.5rem;">The Silver Economy & Web Accessibility: Why Demographic Shifts Demand Better Website Design</h3>
            <p>61.2 million American seniors control $78 trillion in wealth. Explore why demographic shifts make accessibility—especially for aging eyes—a business imperative and legal requirement.</p>
            <a href="silver-economy-accessibility.php" class="btn btn-primary" style="margin-top: 1rem;">Read More</a>
        </article>

        <article class="card blog-card" tabindex="0" id="article-temp-disabilities">
            <time datetime="2025-10-24" class="blog-date">Oct 24, 2025</time>
            <h3 style="font-size: 1.3rem; margin-top: 0.5rem;">Temporary Disabilities & Accessibility: Broken Mice, Injured Arms, Lost Glasses</h3>
            <p>Learn why temporary accessibility needs affect millions and why WCAG compliance matters for everyone experiencing a temporary barrier.</p>
            <a href="temp-disabilities-broken-mouse.php" class="btn btn-primary" style="margin-top: 1rem;">Read More</a>
        </article>

        <article class="card blog-card" tabindex="0" id="article-seo-wcag-linked">
            <time datetime="2025-10-24" class="blog-date">Oct 24, 2025</time>
            <h3 style="font-size: 1.3rem; margin-top: 0.5rem;">SEO and WCAG: How Accessibility and Search Rankings Are Linked</h3>
            <p>Discover why WCAG compliance and SEO aren't separate concerns—they're the same thing. Accessible sites rank better and convert better.</p>
            <a href="seo-wcag-linked.php" class="btn btn-primary" style="margin-top: 1rem;">Read More</a>
        </article>

        <article class="card blog-card" tabindex="0" id="article-div-soup">
            <time datetime="2025-10-24" class="blog-date">Oct 24, 2025</time>
            <h3 style="font-size: 1.3rem; margin-top: 0.5rem;">Div Soup: Why Pretty But Broken Websites Cost More Than You Think</h3>
            <p>Why building websites with unsemantic divs instead of semantic HTML costs more, ranks worse, and excludes users. A cost analysis.</p>
            <a href="div-soup-cost-analysis.php" class="btn btn-primary" style="margin-top: 1rem;">Read More</a>
        </article>

        <article class="card blog-card" tabindex="0" id="article-accessibility-demand-letter">
            <time datetime="2025-10-24" class="blog-date">Oct 24, 2025</time>
            <h3 style="font-size: 1.3rem; margin-top: 0.5rem;">What to Do If You Receive an Accessibility Demand Letter</h3>
            <p>Step-by-step guide for handling accessibility violation notices. Learn what it means, your legal options, settlement expectations, and immediate actions to take.</p>
            <a href="accessibility-demand-letter.php" class="btn btn-primary" style="margin-top: 1rem;">Read More</a>
        </article>

        <article class="card blog-card" tabindex="0" id="article-wcag-2-2">
            <time datetime="2025-10-24" class="blog-date">Oct 24, 2025</time>
            <h3 style="font-size: 1.3rem; margin-top: 0.5rem;">WCAG 2.1 vs 2.2: What Changed and Why It Matters for Your Compliance</h3>
            <p>WCAG 2.2 introduces new requirements for target sizes, persistent authentication, and focus visibility. Learn what's new, what you need to do, and timeline implications.</p>
            <a href="wcag-2-2-changes.php" class="btn btn-primary" style="margin-top: 1rem;">Read More</a>
        </article>

        <article class="card blog-card" tabindex="0" id="article-mobile-accessibility">
            <time datetime="2025-10-24" class="blog-date">Oct 24, 2025</time>
            <h3 style="font-size: 1.3rem; margin-top: 0.5rem;">Mobile Accessibility: Why 40% of Your Users Can't Use Your Site on Mobile</h3>
            <p>Small screens, touch interfaces, and mobile assumptions create accessibility barriers. Learn why mobile accessibility matters and how to fix the most common issues.</p>
            <a href="mobile-accessibility.php" class="btn btn-primary" style="margin-top: 1rem;">Read More</a>
        </article>

        <article class="card blog-card" tabindex="0" id="article-platform-responsibility">
            <time datetime="2025-10-24" class="blog-date">Oct 24, 2025</time>
            <h3 style="font-size: 1.3rem; margin-top: 0.5rem;">You Used a Template. Your Site Is Still Broken. Your Liability Is Still Real.</h3>
            <p>You didn't build your site from scratch. You used Shopify, Squarespace, or WordPress. That doesn't matter. If your site is inaccessible, you're liable for ADA violations.</p>
            <a href="platform-responsibility-liability.php" class="btn btn-primary" style="margin-top: 1rem;">Read More</a>
        </article>

        <article class="card blog-card" tabindex="0" id="article-widget-seller-responsibility">
            <time datetime="2025-10-24" class="blog-date">Oct 24, 2025</time>
            <h3 style="font-size: 1.3rem; margin-top: 0.5rem;">You Sell Widgets, Not Websites. But Your Website Still Violates the ADA.</h3>
            <p>You're a product company, not a web agency. Your website is incidental to your business. Except it's not. If it's inaccessible, you're liable—and the courts prove it.</p>
            <a href="widget-seller-responsibility.php" class="btn btn-primary" style="margin-top: 1rem;">Read More</a>
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

.blog-card {
    cursor: pointer;
    transition: all 0.3s ease;
    display: flex;
    flex-direction: column;
}

.blog-card p {
    flex-grow: 1;
}

.blog-card a {
    margin-top: auto !important;
}

.blog-card:focus {
    outline: 3px solid var(--accent-primary);
    outline-offset: -3px;
    box-shadow: 0 0 0 4px rgba(37, 99, 235, 0.15);
}

.blog-card h3 {
    border-bottom: none;
    padding-bottom: 0;
    margin-bottom: 0.75rem;
}
</style>
HTML;

include 'template.php';
?>
