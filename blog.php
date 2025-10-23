<?php
$pageTitle = 'Blog | WCAG Exposure - Accessibility & Litigation Insights';
$pageDescription = 'Articles on web accessibility, WCAG compliance, ADA litigation, settlement trends, and expert insights.';

$pageContent = <<<'HTML'
<section class="hero">
    <h1>Accessibility & WCAG Blog</h1>
    <p>Expert insights on web accessibility, compliance, litigation, and business strategy</p>
</section>

<section class="section">
    <div class="section-title">
        <h2>Featured Articles</h2>
        
        <div class="highlight-box">
            <strong>Coming Soon:</strong> Blog posts on:
            <ul style="margin-left: 1.5rem; margin-top: 0.75rem;">
                <li>WCAG Settlement Amounts: What Companies Are Actually Paying</li>
                <li>Your Accessibility Liability in 2026: New Compliance Deadlines</li>
                <li>Accessibility Lawsuits Are Up 13% YoY. Is Your Site Next?</li>
                <li>The Hidden Cost of Bad Accessibility: Traffic Loss + Legal Exposure</li>
                <li>What Your Accessibility Report Will Look Like (And Why It Matters)</li>
                <li>E-commerce Sites: WCAG Violations by Industry Benchmark</li>
                <li>SaaS Platforms: Common Accessibility Gaps & Litigation Risk</li>
                <li>The Difference Between Automated Scanning & Expert Analysis</li>
                <li>Building an Accessibility Case: Documentation & Evidence Strategy</li>
            </ul>
        </div>
        
        <h3 style="margin-top: 2rem;">In Progress</h3>
        <p>We're developing comprehensive articles on accessibility compliance, litigation strategy, and remediation best practices. Check back soon.</p>
        
        <div class="success-box">
            <strong>Subscribe for updates:</strong> Want to know when new articles are published? <a href="mailto:info@a11yscan.xyz">Email us</a> to be added to our mailing list.
        </div>
    </div>
</section>

<section class="section" style="background: #f0f4f9;">
    <div class="section-title">
        <h2>Popular Topics</h2>
        
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 1.5rem; margin: 2rem 0;">
            <div style="padding: 1.5rem; background: white; border-radius: 4px; border-left: 4px solid #0052cc;">
                <h3 style="margin-top: 0;">WCAG Compliance</h3>
                <p>Understand WCAG 2.1 Level AA requirements and how to audit for compliance.</p>
            </div>
            
            <div style="padding: 1.5rem; background: white; border-radius: 4px; border-left: 4px solid #ff6600;">
                <h3 style="margin-top: 0;">Legal & Litigation</h3>
                <p>Settlement amounts, legal strategy, and what you need to know about ADA Title III.</p>
            </div>
            
            <div style="padding: 1.5rem; background: white; border-radius: 4px; border-left: 4px solid #28a745;">
                <h3 style="margin-top: 0;">Business Impact</h3>
                <p>ROI of accessibility, traffic gains from WCAG compliance, competitive advantages.</p>
            </div>
            
            <div style="padding: 1.5rem; background: white; border-radius: 4px; border-left: 4px solid #6c757d;">
                <h3 style="margin-top: 0;">Industry-Specific</h3>
                <p>Accessibility requirements and risks by industry: healthcare, finance, SaaS, e-commerce.</p>
            </div>
        </div>
    </div>
</section>
HTML;

include 'template-wcag.php';
?>
