<?php
$pageTitle = 'a11y scan | Free Accessibility Audits & Expert Testimony';
$pageDescription = 'Free WCAG scanning and accessibility audits. Know your ADA/NYCHRL liability before you get sued. Expert witness testimony for accessibility litigation.';

$pageContent = <<<'HTML'
<!-- HERO SECTION - PROPER WHITE TEXT -->
<section class="hero">
    <h1>Your site has 2,847 violations.</h1>
    <p>You just don't know it yet.</p>
    <div class="hero-stats">
        <div class="stat"><strong>77%</strong> of accessibility lawsuits target companies like yours</div>
        <div class="stat"><strong>$75K-$250K</strong> average settlement per plaintiff</div>
    </div>
    <div style="margin-top: 2.5rem;">
        <a href="#scan-form" class="btn btn-secondary" style="color: white; font-weight: 600; padding: 1rem 2.5rem; font-size: 1.1rem;">Scan Your Site Free</a>
    </div>
</section>

<!-- QUICK NAVIGATION -->
<section class="section quick-nav-section">
    <div class="quick-nav-buttons">
        <button class="quick-nav-btn" onclick="document.getElementById('company-section').scrollIntoView({behavior: 'smooth'})">Company Owner</button>
        <button class="quick-nav-btn" onclick="document.getElementById('lawyer-section').scrollIntoView({behavior: 'smooth'})">Lawyer</button>
        <button class="quick-nav-btn secondary" onclick="document.getElementById('scan-form').scrollIntoView({behavior: 'smooth'})">Free Scan</button>
    </div>
</section>

<!-- SECTION 1: FOR COMPANY OWNERS -->
<section class="section" id="company-section">
    <div class="section-title">
        <h2>🏢 For Company Owners & Decision Makers</h2>
        <p style="font-size: 1.1rem; color: #666; margin-bottom: 1.5rem;">Your website may be discriminating against disabled users—and you could be liable for $50K-$250K per plaintiff, plus attorney fees.</p>
        
        <div class="highlight-box">
            <h3 style="margin-top: 0; color: var(--primary-blue);">The Problem</h3>
            <ul style="margin-left: 1.5rem; margin-top: 0.75rem;">
                <li><strong>94% of websites</strong> have WCAG violations</li>
                <li><strong>77% of lawsuits</strong> target companies under $25M revenue (you)</li>
                <li><strong>$75K-$250K average</strong> settlement per plaintiff</li>
                <li><strong>13% annual increase</strong> in accessibility litigation</li>
            </ul>
        </div>
        
        <h3>What Typically Triggers a Lawsuit</h3>
        <p>A disabled user tries to:</p>
        <ul style="margin-left: 1.5rem;">
            <li>Check out on your e-commerce site → keyboard navigation fails → can't complete purchase</li>
            <li>Apply for a job on your careers page → forms aren't accessible → can't submit application</li>
            <li>Access pricing/plans on SaaS platform → color contrast is unreadable → can't see information</li>
            <li>Watch product videos → no captions → can't access content</li>
        </ul>
        
        <p style="margin-top: 1.5rem;"><strong>Then:</strong> They scan your site with automated tools, find violations, and lawyer up.</p>
        
        <h3>What We Do</h3>
        <div class="success-box">
            <p><strong>We find the violations FIRST.</strong></p>
            <p>Before you get sued, before you get a demand letter—we scan your site, show you exactly what's wrong, and tell you what it will cost to fix.</p>
            <p>Then you can decide: fix it proactively, or wait for the lawsuit.</p>
        </div>
        
        <h3>Your Options</h3>
        <ol style="margin-left: 1.5rem;">
            <li><strong>Do nothing</strong> → Average payout: $150K-$250K per plaintiff (plus attorney fees, publicity)</li>
            <li><strong>Get sued, then fix</strong> → Costs more, damages reputation, discovery nightmare</li>
            <li><strong>Fix proactively</strong> → Shows good faith, prevents lawsuits, improves user experience for everyone</li>
        </ol>
        
        <p style="text-align: center; margin-top: 2rem;">
            <a href="#scan-form" class="btn btn-primary" style="color: white; font-weight: 600; padding: 1rem 2rem; font-size: 1.1rem;">Get Your Risk Assessment (Free)</a>
        </p>
    </div>
</section>

<!-- SECTION 2: FOR LAWYERS/PLAINTIFFS -->
<section class="section" id="lawyer-section" style="background: #f0f4f9;">
    <div class="section-title">
        <h2>⚖️ For Lawyers & Disability Rights Advocates</h2>
        <p style="font-size: 1.1rem; color: #666; margin-bottom: 1.5rem;">We provide expert-level accessibility documentation that's defensible in court.</p>
        
        <h3>What We Provide</h3>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 1.5rem; margin: 2rem 0;">
            <div style="background: white; padding: 1.5rem; border-radius: 4px; border-left: 4px solid var(--primary-blue);">
                <h4 style="margin-top: 0;">Systematic Site Documentation</h4>
                <p>Complete scan of 50-1000+ pages showing violation patterns that prove intent/negligence.</p>
            </div>
            
            <div style="background: white; padding: 1.5rem; border-radius: 4px; border-left: 4px solid var(--primary-blue);">
                <h4 style="margin-top: 0;">Evidence Packages</h4>
                <p>Screenshots, code examples, WCAG mapping—everything needed for demand letters and litigation.</p>
            </div>
            
            <div style="background: white; padding: 1.5rem; border-radius: 4px; border-left: 4px solid var(--primary-blue);">
                <h4 style="margin-top: 0;">Expert Testimony</h4>
                <p>Affidavits, depositions, court testimony with full methodology disclosure ($400-800/hr).</p>
            </div>
            
            <div style="background: white; padding: 1.5rem; border-radius: 4px; border-left: 4px solid var(--primary-blue);">
                <h4 style="margin-top: 0;">Strategic Targeting</h4>
                <p>Identify high-value defendants, platform operators, systematic violation patterns.</p>
            </div>
        </div>
        
        <h3>Our Approach</h3>
        <p>We use <strong>axe-core</strong> (industry standard) + <strong>manual accessibility analysis</strong> to catch what automated tools miss. Our methodology is court-defensible because:</p>
        <ul style="margin-left: 1.5rem;">
            <li>We use recognized industry standards (WCAG 2.1 AA)</li>
            <li>We document everything with screenshots and code examples</li>
            <li>We can explain each violation in plain language for judges/juries</li>
            <li>We have actual disability experience (not just technical knowledge)</li>
        </ul>
        
        <h3>Recent Work</h3>
        <div class="highlight-box">
            <p><strong>BentoBox Platform:</strong> 15,730 violations across 703 pages (90+ NYC restaurant sites). Systematic keyboard navigation failures. Demand letter in progress.</p>
            <p style="margin-top: 1rem;"><strong>Exhibea Shopify Agency:</strong> 26 client sites, 100% contract failures. Professional negligence case. Third-party liability strategy.</p>
            <p style="margin-top: 1rem;"><strong>E-Commerce Sites:</strong> Checkout barriers affecting disabled customers. Damages: $150K-$300K per plaintiff.</p>
        </div>
        
        <p style="text-align: center; margin-top: 2rem;">
            <a href="mailto:legal@a11yscan.xyz" class="btn btn-primary" style="color: white; font-weight: 600; padding: 1rem 2rem; font-size: 1.1rem;">Contact for Litigation Support</a>
        </p>
    </div>
</section>

<!-- SECTION 3: PRICING/SERVICES -->
<section class="section" id="pricing">
    <div class="section-title">
        <h2>Choose Your Service</h2>
        
        <div class="pricing-container">
            <!-- FREE TIER -->
            <div class="pricing-card">
                <div class="pricing-badge">Popular</div>
                <div class="pricing-title">Free Scan</div>
                <div class="pricing-price">$0</div>
                <div class="pricing-description">Homepage only. Quick risk check.</div>
                <ul class="pricing-features">
                    <li>Single page scan</li>
                    <li>Violation count & severity</li>
                    <li>Risk assessment (Low/Med/High/Critical)</li>
                    <li>Estimated remediation cost</li>
                    <li>PDF report via email</li>
                    <li>24-hour turnaround</li>
                </ul>
                <a href="#scan-form" class="btn btn-primary" style="margin-top: auto; display: block; text-align: center; color: white; width: 100%;">Get Free Scan</a>
            </div>
            
            <!-- PARTIAL TIER -->
            <div class="pricing-card">
                <div class="pricing-badge">Best Value</div>
                <div class="pricing-title">Partial Audit</div>
                <div class="pricing-price">$500</div>
                <div class="pricing-description">50 critical pages. Site-wide patterns.</div>
                <ul class="pricing-features">
                    <li>Up to 50 key pages</li>
                    <li>Page-by-page breakdown</li>
                    <li>Violation patterns identified</li>
                    <li>Remediation estimate</li>
                    <li>30-min email consultation</li>
                    <li>3-5 business days</li>
                </ul>
                <button class="btn btn-primary" style="margin-top: auto; width: 100%; display: block; color: white; font-weight: 600;" onclick="document.getElementById('scan-form').scrollIntoView({behavior: 'smooth'}); document.getElementById('contact-form').querySelector('select[name=service]').value='partial';">Book Now</button>
            </div>
            
            <!-- FULL AUDIT TIER (FEATURED) -->
            <div class="pricing-card featured">
                <div class="pricing-badge">Most Popular</div>
                <div class="pricing-title">Full Audit</div>
                <div class="pricing-price">$3,500+</div>
                <div class="pricing-description">Unlimited pages. Complete strategy.</div>
                <ul class="pricing-features">
                    <li>Unlimited pages (up to 1000)</li>
                    <li>Complete violation audit</li>
                    <li>Site-wide pattern analysis</li>
                    <li>Priority remediation roadmap</li>
                    <li>1.5-hour strategy call</li>
                    <li>60-day revision access</li>
                </ul>
                <button class="btn btn-secondary" style="margin-top: auto; width: 100%; display: block; color: white; font-weight: 600;" onclick="document.getElementById('scan-form').scrollIntoView({behavior: 'smooth'}); document.getElementById('contact-form').querySelector('select[name=service]').value='full';">Book Now</button>
            </div>
            
            <!-- EXPERT TIER -->
            <div class="pricing-card">
                <div class="pricing-badge">Legal</div>
                <div class="pricing-title">Expert Testimony</div>
                <div class="pricing-price">$400-800/hr</div>
                <div class="pricing-description">Court-ready accessibility analysis.</div>
                <ul class="pricing-features">
                    <li>Affidavit preparation</li>
                    <li>Deposition support</li>
                    <li>Court testimony</li>
                    <li>Evidence documentation</li>
                    <li>Methodology validation</li>
                    <li>Strategic consultation</li>
                </ul>
                <a href="mailto:legal@a11yscan.xyz" class="btn btn-primary" style="margin-top: auto; display: block; text-align: center; color: white; width: 100%;">Inquire</a>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 4: SCAN FORM -->
<section class="section" id="scan-form">
    <div class="section-title">
        <h2>Get Your Free WCAG Scan</h2>
        <p>Submit your URL. We'll scan it within 24 hours and email you a detailed risk assessment.</p>
        
        <div class="form-container">
            <form id="contact-form" method="POST" action="contact-handler.php" novalidate>
                <div class="form-group">
                    <label for="service">What are you interested in? <span class="required">*</span></label>
                    <select id="service" name="service" required>
                        <option value="">-- Select --</option>
                        <option value="free">Free Scan (Homepage)</option>
                        <option value="partial">Partial Audit ($500)</option>
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
                    <label for="email">Email <span class="required">*</span></label>
                    <input type="email" id="email" name="email" required>
                    <div class="form-note">We'll send your report here</div>
                </div>
                
                <div class="form-group">
                    <label for="industry">Your Industry</label>
                    <select id="industry" name="industry">
                        <option value="">-- Select --</option>
                        <option value="ecommerce">E-commerce</option>
                        <option value="saas">SaaS / Software</option>
                        <option value="healthcare">Healthcare</option>
                        <option value="finance">Finance / Insurance</option>
                        <option value="education">Education</option>
                        <option value="government">Government</option>
                        <option value="legal">Legal / Law Firm</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="concern">Primary Concern <span class="required">*</span></label>
                    <select id="concern" name="concern" required>
                        <option value="">-- Select --</option>
                        <option value="legal_risk">Legal risk / litigation exposure</option>
                        <option value="remediation">Remediation costs & timeline</option>
                        <option value="compliance_deadline">Compliance deadline (2026/2027)</option>
                        <option value="already_sued">Already been sued</option>
                        <option value="expert">Need expert for litigation</option>
                        <option value="unknown">Not sure</option>
                    </select>
                </div>
                
                <button type="submit" class="btn btn-primary" style="width: 100%; margin-top: 1rem; color: white; font-weight: 600; font-size: 1.05rem;">Submit for Scan</button>
                
                <div class="form-note" style="margin-top: 1rem; text-align: center;">
                    ✓ No credit card required &nbsp;|&nbsp; ✓ Results in 24 hours &nbsp;|&nbsp; ✓ No spam
                </div>
            </form>
        </div>
    </div>
</section>

<!-- SECTION 5: FAQ -->
<section class="section" style="background: #f0f4f9;">
    <div class="section-title">
        <h2>FAQs</h2>
        
        <div class="faq-container">
            <div class="faq-item">
                <button class="faq-question" aria-expanded="false">
                    <span>Is your scan legally defensible?</span>
                    <span class="faq-toggle">▼</span>
                </button>
                <div class="faq-answer">
                    <p>Yes. We use axe-core (industry standard) plus manual analysis. Our methodology is admissible as expert testimony in court. We document everything with screenshots and code examples so your lawyer can use it in litigation.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <button class="faq-question" aria-expanded="false">
                    <span>How are settlement amounts calculated?</span>
                    <span class="faq-toggle">▼</span>
                </button>
                <div class="faq-answer">
                    <p>Settlements typically include: (1) compensatory damages for the plaintiff ($50K-$150K), (2) attorney fees ($150K-$500K), (3) remediation costs ($10K-$50K), and sometimes (4) punitive damages if negligence is proven. Total range: $75K-$250K per plaintiff is common.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <button class="faq-question" aria-expanded="false">
                    <span>What's the difference between your scan and free tools?</span>
                    <span class="faq-toggle">▼</span>
                </button>
                <div class="faq-answer">
                    <p>Free tools (WAVE, Axe, etc) show violations. We show LIABILITY. We quantify: (1) business risk, (2) remediation cost, (3) timeline, (4) legal exposure. We also catch 50% more issues because we do manual review, not just automation. Most importantly, our analysis is defensible in court.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <button class="faq-question" aria-expanded="false">
                    <span>Do you work with law firms?</span>
                    <span class="faq-toggle">▼</span>
                </button>
                <div class="faq-answer">
                    <p>Yes. Email legal@a11yscan.xyz for confidential consultation. We provide: expert testimony, evidence packages, strategic site analysis, demand letter support, and litigation strategy. We can also work on contingency for strong cases.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <button class="faq-question" aria-expanded="false">
                    <span>How long until I get results?</span>
                    <span class="faq-toggle">▼</span>
                </button>
                <div class="faq-answer">
                    <p>Free scan: 24 hours. Partial audit ($500): 3-5 business days. Full audit ($3,500+): 5-10 business days. We prioritize based on urgency and complexity.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <button class="faq-question" aria-expanded="false">
                    <span>What if I'm already being sued?</span>
                    <span class="faq-toggle">▼</span>
                </button>
                <div class="faq-answer">
                    <p>Contact legal@a11yscan.xyz immediately. We can: document violations for settlement negotiation, provide expert testimony for defense, conduct discovery analysis, or help establish remediation timeline. Time is critical.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA SECTION -->
<section class="section" style="background: linear-gradient(135deg, var(--primary-blue) 0%, var(--primary-dark) 100%); color: white; text-align: center; padding: 3rem 1rem;">
    <div class="section-title">
        <h2 style="color: white; border-bottom-color: var(--accent-orange);">Know Your Risk Today</h2>
        <p style="color: rgba(255,255,255,0.9); font-size: 1.15rem; margin-bottom: 2rem;">Free WCAG scan. No credit card. Results in 24 hours.</p>
        <a href="#scan-form" class="btn btn-secondary" style="color: white; font-weight: 600; padding: 1rem 2rem; font-size: 1.1rem;">Get Your Free Scan</a>
    </div>
</section>
HTML;

include 'template-wcag.php';
?>
