<?php
$pageTitle = 'A11yscan | WCAG Compliance & Accessibility Audits';
$pageDescription = 'Free accessibility scanning and expert WCAG compliance analysis. Identify and fix accessibility violations on your website.';

$pageContent = <<<'HTML'
<!-- HERO SECTION -->
<section class="hero">
    <h1>Accessibility Auditing Made Simple</h1>
    <p>Identify WCAG compliance gaps and accessibility violations with a free scan. Get expert analysis and actionable recommendations.</p>
    <a href="#pricing" class="btn btn-primary">Start Free Scan</a>
</section>

<!-- WHY ACCESSIBILITY MATTERS -->
<section>
    <h2>Why Accessibility Matters</h2>
    <p>Web accessibility isn't just ethical—it's increasingly a legal requirement. Organizations face significant liability under the ADA and Section 508 for websites that exclude people with disabilities.</p>
    
    <div class="grid">
        <div class="card">
            <strong style="color: var(--accent-primary); display: block; margin-bottom: 0.5rem;">4,000+</strong>
            <p style="margin: 0;">Web accessibility lawsuits filed in 2024 alone across the US</p>
        </div>
        <div class="card">
            <strong style="color: var(--accent-primary); display: block; margin-bottom: 0.5rem;">$50K–$250K</strong>
            <p style="margin: 0;">Average settlement per plaintiff in accessibility cases</p>
        </div>
        <div class="card">
            <strong style="color: var(--accent-primary); display: block; margin-bottom: 0.5rem;">1 Billion+</strong>
            <p style="margin: 0;">People globally have disabilities that affect web use</p>
        </div>
    </div>
</section>

<!-- HOW IT WORKS -->
<section>
    <h2>How It Works</h2>
    <div class="grid">
        <div class="card">
            <h3>1. Scan</h3>
            <p>Enter your website URL and let our automated WCAG scanner identify violations across your entire site.</p>
        </div>
        <div class="card">
            <h3>2. Review</h3>
            <p>Get a detailed report of all accessibility issues, categorized by severity and WCAG conformance level.</p>
        </div>
        <div class="card">
            <h3>3. Fix</h3>
            <p>Receive actionable recommendations and expert guidance to remediate violations and achieve compliance.</p>
        </div>
    </div>
</section>

<!-- PRICING SECTION -->
<section id="pricing">
    <h2>Simple, Transparent Pricing</h2>
    
    <div class="grid">
        <!-- Free Plan -->
        <div class="card">
            <h3>Free Scan</h3>
            <span class="stat">$0</span>
            <p>Perfect for getting started</p>
            <ul style="list-style: none; margin: 1rem 0;">
                <li style="margin-bottom: 0.75rem;">✓ Automated WCAG scan</li>
                <li style="margin-bottom: 0.75rem;">✓ Violation summary</li>
                <li style="margin-bottom: 0.75rem;">✓ Email report</li>
                <li style="margin-bottom: 0.75rem;">✗ Detailed recommendations</li>
                <li style="margin-bottom: 0.75rem;">✗ Expert consultation</li>
            </ul>
            <a href="#" class="btn btn-secondary" style="width: 100%; margin-top: 1rem;">Get Started</a>
        </div>
        
        <!-- Partial Audit -->
        <div class="card">
            <h3>Partial Audit</h3>
            <span class="stat">$499</span>
            <p>10-page detailed analysis</p>
            <ul style="list-style: none; margin: 1rem 0;">
                <li style="margin-bottom: 0.75rem;">✓ 10-page manual audit</li>
                <li style="margin-bottom: 0.75rem;">✓ WCAG AA compliance</li>
                <li style="margin-bottom: 0.75rem;">✓ Remediation roadmap</li>
                <li style="margin-bottom: 0.75rem;">✓ 2 expert consultations</li>
                <li style="margin-bottom: 0.75rem;">✗ Full site coverage</li>
            </ul>
            <a href="#" class="btn btn-primary" style="width: 100%; margin-top: 1rem;">Learn More</a>
        </div>
        
        <!-- Full Audit -->
        <div class="card">
            <h3>Full Site Audit</h3>
            <span class="stat">$1,999</span>
            <p>Complete compliance analysis</p>
            <ul style="list-style: none; margin: 1rem 0;">
                <li style="margin-bottom: 0.75rem;">✓ Unlimited page audit</li>
                <li style="margin-bottom: 0.75rem;">✓ WCAG AAA compliance</li>
                <li style="margin-bottom: 0.75rem;">✓ Full remediation plan</li>
                <li style="margin-bottom: 0.75rem;">✓ Unlimited consultations</li>
                <li style="margin-bottom: 0.75rem;">✓ Legal risk assessment</li>
            </ul>
            <a href="#" class="btn btn-primary" style="width: 100%; margin-top: 1rem;">Get Full Audit</a>
        </div>
    </div>
</section>

<!-- FEATURES -->
<section>
    <h2>What We Test</h2>
    <p>Our audits cover all critical WCAG 2.1 Level AA criteria and many AAA requirements:</p>
    
    <div class="grid">
        <div class="card">
            <h3>Contrast & Color</h3>
            <p>Verify text, UI components, and graphics meet AAA contrast ratios (7:1) for maximum readability.</p>
        </div>
        <div class="card">
            <h3>Keyboard Navigation</h3>
            <p>Ensure all functionality is accessible via keyboard. Test focus management and skip links.</p>
        </div>
        <div class="card">
            <h3>Screen Readers</h3>
            <p>Validate ARIA labels, alt text, semantic HTML, and proper heading hierarchy.</p>
        </div>
        <div class="card">
            <h3>Forms & Input</h3>
            <p>Check form labels, error messages, validation, and autocomplete attributes.</p>
        </div>
        <div class="card">
            <h3>Media & Images</h3>
            <p>Verify alt text quality, captions for video, and transcripts for audio content.</p>
        </div>
        <div class="card">
            <h3>Mobile & Responsive</h3>
            <p>Test touch targets, zoom functionality, and orientation handling on all devices.</p>
        </div>
    </div>
</section>

<!-- CTA SECTION -->
<section>
    <div class="highlight">
        <h2 style="margin-top: 0;">Ready to Make Your Site Accessible?</h2>
        <p style="margin-bottom: 1.5rem;">Start with a free scan. No credit card required. Results in minutes.</p>
        <a href="#" class="btn btn-primary">Start Your Free Scan</a>
    </div>
</section>
HTML;

include 'template-wcag-v2.php';
?>
