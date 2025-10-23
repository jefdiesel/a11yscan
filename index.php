<?php
$pageTitle = 'WCAG Exposure | Know Your Accessibility Risk Before You Get Sued';
$pageDescription = 'Free WCAG scanning reveals accessibility violations on your website. Understand your ADA/NYCHRL liability. Get expert accessibility audits and expert witness testimony.';

$pageContent = <<<'HTML'
<!-- HERO SECTION -->
<section class="hero">
    <h1>WCAG Exposure</h1>
    <p>Know Your Accessibility Risk Before You Get Sued</p>
    <div class="hero-subtext">
        <strong>94% of websites have WCAG violations.</strong><br>
        77% of accessibility lawsuits target companies under $25M revenue.<br>
        Settlements average $75K-$250K per plaintiff.
    </div>
</section>

<!-- PROBLEM SECTION -->
<section class="section">
    <div class="section-title">
        <h2>Your Website May Be Discriminating</h2>
        <p>Most companies don't know they have WCAG violations until they're served with a lawsuit. We help you find them first.</p>
        
        <div class="highlight-box">
            <strong>What we scan for:</strong>
            <ul style="margin-left: 1.5rem; margin-top: 0.75rem;">
                <li>❌ Color contrast failures (visual barriers)</li>
                <li>❌ Keyboard navigation traps</li>
                <li>❌ Missing alternative text on images</li>
                <li>❌ Form accessibility failures</li>
                <li>❌ Video captioning gaps</li>
                <li>❌ Semantic HTML violations</li>
                <li>❌ Focus management issues</li>
            </ul>
        </div>
        
        <p><strong>Legal exposure:</strong> These violations create liability under ADA Title III and NYCHRL. Companies are paying millions to settle.</p>
    </div>
</section>

<!-- STATS SECTION -->
<section class="section" style="background: #f0f4f9;">
    <div class="section-title">
        <h2>The Numbers</h2>
        <div class="stats-container">
            <div class="stat-box">
                <div class="stat-number">94%</div>
                <div class="stat-label">of websites fail basic WCAG compliance</div>
            </div>
            <div class="stat-box">
                <div class="stat-number">13%</div>
                <div class="stat-label">year-over-year increase in accessibility lawsuits</div>
            </div>
            <div class="stat-box">
                <div class="stat-number">$250K</div>
                <div class="stat-label">average settlement amount</div>
            </div>
            <div class="stat-box">
                <div class="stat-number">4%</div>
                <div class="stat-label">of websites are WCAG 2.1 AA compliant</div>
            </div>
        </div>
    </div>
</section>

<!-- PRICING SECTION -->
<section class="section" id="pricing">
    <div class="section-title">
        <h2>Choose Your Scan Size</h2>
        <p>Get started with our accessibility assessment or go deep with a comprehensive audit.</p>
        
        <div class="pricing-container">
            <!-- FREE TIER -->
            <div class="pricing-card">
                <div class="pricing-badge">Popular</div>
                <div class="pricing-title">Free Scan</div>
                <div class="pricing-price">$0</div>
                <div class="pricing-description">
                    Homepage only. Perfect for quick risk check.
                </div>
                <ul class="pricing-features">
                    <li>Single page scan</li>
                    <li>Violation summary</li>
                    <li>Risk assessment</li>
                    <li>Estimated remediation cost</li>
                    <li>PDF report via email</li>
                    <li>24-hour turnaround</li>
                </ul>
                <a href="#scan-form" class="btn btn-primary" style="margin-top: auto;">Get Free Scan</a>
            </div>
            
            <!-- PARTIAL TIER -->
            <div class="pricing-card">
                <div class="pricing-badge">Best Value</div>
                <div class="pricing-title">Partial Scan</div>
                <div class="pricing-price">$500</div>
                <div class="pricing-description">
                    50 pages. Identify site-wide patterns and barriers.
                </div>
                <ul class="pricing-features">
                    <li>Up to 50 critical pages</li>
                    <li>Page-by-page breakdown</li>
                    <li>Pattern analysis</li>
                    <li>Cost estimate</li>
                    <li>30-min email consultation</li>
                    <li>3-5 business day turnaround</li>
                </ul>
                <button class="btn btn-primary" style="margin-top: auto;" onclick="document.getElementById('contact-form').querySelector('input[name=service]').value='partial'; document.getElementById('contact-form').scrollIntoView({behavior: 'smooth'});">Book Now</button>
            </div>
            
            <!-- FULL AUDIT TIER (FEATURED) -->
            <div class="pricing-card featured">
                <div class="pricing-badge">Most Popular</div>
                <div class="pricing-title">Full Site Audit</div>
                <div class="pricing-price">$3,500+</div>
                <div class="pricing-description">
                    Unlimited pages. Complete remediation roadmap.
                </div>
                <ul class="pricing-features">
                    <li>Unlimited pages (up to 1000)</li>
                    <li>Comprehensive violation audit</li>
                    <li>Site-wide pattern analysis</li>
                    <li>Priority remediation roadmap</li>
                    <li>1.5-hour strategy call</li>
                    <li>60-day revision access</li>
                </ul>
                <button class="btn btn-secondary" style="margin-top: auto;" onclick="document.getElementById('contact-form').querySelector('input[name=service]').value='full'; document.getElementById('contact-form').scrollIntoView({behavior: 'smooth'});">Book Consultation</button>
            </div>
            
            <!-- EXPERT TIER -->
            <div class="pricing-card">
                <div class="pricing-badge">Legal Support</div>
                <div class="pricing-title">Expert Testimony</div>
                <div class="pricing-price">$400-800/hr</div>
                <div class="pricing-description">
                    Accessibility expert witness services for litigation.
                </div>
                <ul class="pricing-features">
                    <li>Affidavit preparation</li>
                    <li>Deposition support</li>
                    <li>Court testimony</li>
                    <li>Report writing</li>
                    <li>Evidence documentation</li>
                    <li>Methodology validation</li>
                </ul>
                <a href="mailto:legal@wcagexposure.com" class="btn btn-primary" style="margin-top: auto;">Contact for Consultation</a>
            </div>
        </div>
    </div>
</section>

<!-- SCAN FORM SECTION -->
<section class="section" id="scan-form">
    <div class="section-title">
        <h2>Get Your Free WCAG Scan</h2>
        <p>Submit your URL below. We'll scan your site and email you a detailed report within 24 hours.</p>
        
        <div class="form-container">
            <form id="contact-form" method="POST" action="contact-handler.php" novalidate>
                <div class="form-group">
                    <label for="service">Service Type <span class="required">*</span></label>
                    <select id="service" name="service" required>
                        <option value="">-- Select Service --</option>
                        <option value="free">Free Scan (Homepage)</option>
                        <option value="partial">Partial Scan ($500)</option>
                        <option value="full">Full Site Audit ($3,500+)</option>
                        <option value="expert">Expert Testimony Inquiry</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="website-url">Website URL <span class="required">*</span></label>
                    <input type="url" id="website-url" name="website_url" placeholder="https://example.com" required>
                    <div class="form-note">Include https:// or http://</div>
                </div>
                
                <div class="form-group">
                    <label for="company-name">Company Name</label>
                    <input type="text" id="company-name" name="company_name" placeholder="Your Company">
                </div>
                
                <div class="form-group">
                    <label for="name">Your Name <span class="required">*</span></label>
                    <input type="text" id="name" name="name" required>
                </div>
                
                <div class="form-group">
                    <label for="email">Email Address <span class="required">*</span></label>
                    <input type="email" id="email" name="email" required>
                    <div class="form-note">We'll send your report here</div>
                </div>
                
                <div class="form-group">
                    <label for="industry">Industry</label>
                    <select id="industry" name="industry">
                        <option value="">-- Select --</option>
                        <option value="ecommerce">E-commerce</option>
                        <option value="saas">SaaS / Software</option>
                        <option value="healthcare">Healthcare</option>
                        <option value="finance">Finance / Insurance</option>
                        <option value="education">Education</option>
                        <option value="government">Government</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="concern">What are you most concerned about? <span class="required">*</span></label>
                    <select id="concern" name="concern" required>
                        <option value="">-- Select --</option>
                        <option value="legal_risk">Legal risk / litigation exposure</option>
                        <option value="remediation">Remediation costs</option>
                        <option value="compliance_deadline">Compliance deadline</option>
                        <option value="already_sued">Already been sued</option>
                        <option value="unknown">Not sure</option>
                    </select>
                </div>
                
                <button type="submit" class="btn btn-primary" style="width: 100%; margin-top: 1rem;">Submit for Scan</button>
                
                <div class="form-note" style="margin-top: 1rem; text-align: center;">
                    No credit card required. Results typically delivered within 24 hours.
                </div>
            </form>
        </div>
    </div>
</section>

<!-- FAQ SECTION -->
<section class="section">
    <div class="section-title">
        <h2>Frequently Asked Questions</h2>
        
        <div class="faq-container">
            <div class="faq-item">
                <button class="faq-question" aria-expanded="false">
                    <span>Is a scan legally defensible?</span>
                    <span class="faq-toggle">▼</span>
                </button>
                <div class="faq-answer">
                    <p>Yes. We use axe-core (industry standard accessibility engine) plus manual analysis. Our methodology is admissible in court as expert testimony. We document everything for legal defensibility.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <button class="faq-question" aria-expanded="false">
                    <span>What's the difference between automation and manual review?</span>
                    <span class="faq-toggle">▼</span>
                </button>
                <div class="faq-answer">
                    <p>Automated tools catch about 50% of accessibility issues (things like color contrast, missing alt text). Manual review catches the other 50%: keyboard traps, semantic violations, ARIA implementation problems, and structural barriers that break assistive technology. We combine both for comprehensive coverage.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <button class="faq-question" aria-expanded="false">
                    <span>How accurate are your cost estimates?</span>
                    <span class="faq-toggle">▼</span>
                </button>
                <div class="faq-answer">
                    <p>Very accurate. We base remediation cost estimates on industry standard rates ($100-200/hour for accessibility work). Timeline estimates account for complexity and development capacity. Our estimates are used as evidence in litigation and settlements.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <button class="faq-question" aria-expanded="false">
                    <span>How is this different from free tools like WAVE or Axe?</span>
                    <span class="faq-toggle">▼</span>
                </button>
                <div class="faq-answer">
                    <p>Free tools show you violations. We show you LIABILITY. We quantify cost, timeline, and legal risk in business terms. We also catch issues automated tools miss. More importantly, we provide expert-level analysis that's defensible in court and useful for litigation strategy.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <button class="faq-question" aria-expanded="false">
                    <span>Do you work with law firms and plaintiffs?</span>
                    <span class="faq-toggle">▼</span>
                </button>
                <div class="faq-answer">
                    <p>Yes. Email legal@wcagexposure.com for confidential consultation. We provide expert testimony, evidence documentation, strategic analysis, and litigation support for accessibility cases.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <button class="faq-question" aria-expanded="false">
                    <span>Is this applicable to my industry?</span>
                    <span class="faq-toggle">▼</span>
                </button>
                <div class="faq-answer">
                    <p>If you have a website, yes. Special considerations apply to healthcare (HIPAA + WCAG), government (Section 508), finance (FINRA + WCAG), and education (Section 504 + WCAG). These industries face heightened scrutiny and larger settlements.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <button class="faq-question" aria-expanded="false">
                    <span>What happens after I submit a form?</span>
                    <span class="faq-toggle">▼</span>
                </button>
                <div class="faq-answer">
                    <p>We scan your website using industry-standard tools and manual analysis. Within 24 hours, you'll receive a PDF report showing: total violations found, critical barriers identified, which disabilities are most impacted, estimated remediation costs, and your risk level. You can then decide if you want a deeper audit or consultation.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA SECTION -->
<section class="section" style="background: linear-gradient(135deg, #0052cc 0%, #003a99 100%); color: white; text-align: center;">
    <div class="section-title">
        <h2 style="color: white; border-bottom-color: #ff6600;">Ready to Know Your Exposure?</h2>
        <p style="color: rgba(255,255,255,0.9); font-size: 1.1rem;">Start with a free scan. No credit card required. Get your risk assessment within 24 hours.</p>
        <a href="#scan-form" class="btn btn-secondary" style="margin-top: 1.5rem;">Get Free Scan</a>
    </div>
</section>
HTML;

include 'template-wcag.php';
?>
test
