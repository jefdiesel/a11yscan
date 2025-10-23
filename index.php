<?php
$pageTitle = 'A11yscan | WCAG Accessibility Audits';
$pageDescription = 'Free WCAG scanning and accessibility compliance analysis';
$currentPage = 'index';

$pageContent = <<<'HTML'
<section class="hero">
    <h1>Accessibility Auditing Made Simple</h1>
    <p>Identify WCAG compliance gaps with a free scan. Get expert analysis and actionable recommendations.</p>
    <a href="#pricing" class="btn btn-primary">Start Free Scan</a>
</section>

<section>
    <h2>Why Accessibility Matters</h2>
    <p>Web accessibility isn't just ethical—it's increasingly a legal requirement. Organizations face significant liability under the ADA and Section 508.</p>
    
    <div class="grid">
        <div class="card">
            <span class="stat">4,000+</span>
            <p>Accessibility lawsuits filed in 2024</p>
        </div>
        <div class="card">
            <span class="stat">$50K–$250K</span>
            <p>Average settlement per plaintiff</p>
        </div>
        <div class="card">
            <span class="stat">1B+</span>
            <p>People with disabilities globally</p>
        </div>
    </div>
</section>

<section>
    <h2>How It Works</h2>
    <div class="grid">
        <div class="card">
            <h3>1. Scan</h3>
            <p>Enter your website URL. Our WCAG scanner identifies violations across your entire site.</p>
        </div>
        <div class="card">
            <h3>2. Review</h3>
            <p>Get a detailed report categorized by severity and WCAG conformance level.</p>
        </div>
        <div class="card">
            <h3>3. Fix</h3>
            <p>Receive actionable recommendations and expert guidance to achieve compliance.</p>
        </div>
    </div>
</section>

<section id="pricing">
    <h2>Pricing</h2>
    
    <div class="grid">
        <div class="card">
            <h3>Free Scan</h3>
            <span class="stat">$0</span>
            <ul>
                <li>✓ Automated WCAG scan</li>
                <li>✓ Violation summary</li>
                <li>✓ Email report</li>
            </ul>
            <a href="#" class="btn btn-secondary" style="width: 100%; display: block; margin-top: 1rem;">Get Started</a>
        </div>
        
        <div class="card">
            <h3>Partial Audit</h3>
            <span class="stat">$499</span>
            <ul>
                <li>✓ 10-page manual audit</li>
                <li>✓ WCAG AA compliance</li>
                <li>✓ Remediation roadmap</li>
                <li>✓ 2 consultations</li>
            </ul>
            <a href="#" class="btn btn-primary" style="width: 100%; display: block; margin-top: 1rem;">Learn More</a>
        </div>
        
        <div class="card">
            <h3>Full Site Audit</h3>
            <span class="stat">$1,999</span>
            <ul>
                <li>✓ Unlimited pages</li>
                <li>✓ WCAG AAA compliance</li>
                <li>✓ Full remediation plan</li>
                <li>✓ Unlimited consultations</li>
            </ul>
            <a href="#" class="btn btn-primary" style="width: 100%; display: block; margin-top: 1rem;">Get Full Audit</a>
        </div>
    </div>
</section>

<section>
    <h2>What We Test</h2>
    
    <div class="grid">
        <div class="card">
            <h3>Contrast & Color</h3>
            <p>AAA contrast ratios for maximum readability.</p>
        </div>
        <div class="card">
            <h3>Keyboard Navigation</h3>
            <p>Full keyboard accessibility and focus management.</p>
        </div>
        <div class="card">
            <h3>Screen Readers</h3>
            <p>ARIA labels, alt text, and semantic HTML.</p>
        </div>
        <div class="card">
            <h3>Forms & Input</h3>
            <p>Labels, error messages, and validation.</p>
        </div>
        <div class="card">
            <h3>Media & Images</h3>
            <p>Alt text quality and video captions.</p>
        </div>
        <div class="card">
            <h3>Mobile & Responsive</h3>
            <p>Touch targets and zoom on all devices.</p>
        </div>
    </div>
</section>

<section>
    <div class="highlight">
        <h2 style="margin-top: 0;">Ready to Get Started?</h2>
        <p>Start with a free scan. No credit card required.</p>
        <a href="#" class="btn btn-primary">Start Free Scan</a>
    </div>
</section>
HTML;

include 'template.php';
?>
