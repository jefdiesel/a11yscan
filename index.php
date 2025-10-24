<?php
$pageTitle = 'A11yscan | WCAG Accessibility Audits';
$pageDescription = 'Free WCAG scanning and accessibility compliance analysis';
$currentPage = 'index';

$pageContent = <<<'HTML'
<section class="hero">
    <h1>Accessibility Auditing Made Simple</h1>
    <p>Identify WCAG compliance gaps with a free scan. Get expert analysis and actionable recommendations.</p>
    <button class="btn btn-primary" onclick="openPricingForm('free-scan')">Start Free Scan</button>
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
            <button class="btn btn-secondary" onclick="openPricingForm('free-scan')">Get Started</button>
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
            <button class="btn btn-primary" onclick="openPricingForm('partial-audit')">Learn More</button>
        </div>
        
        <div class="card">
            <h3>Deep Audit</h3>
            <span class="stat">$1,999</span>
            <ul>
                <li>✓ 1000-page machine audit</li>
                <li>✓ 10-page manual audit</li>
                <li>✓ WCAG AAA compliance</li>
                <li>✓ Remediation plan</li>
                <li>✓ 3 consultations</li>
            </ul>
            <button class="btn btn-primary" onclick="openPricingForm('deep-audit')">Get Full Audit</button>
        </div>
    </div>
    
    <!-- Pricing Form Modal -->
    <div id="pricingModal" style="display: none; position: fixed; top: 0; left: 0; right: 0; bottom: 0; background: rgba(0,0,0,0.5); z-index: 9999; align-items: center; justify-content: center;">
        <div style="background: white; padding: 2rem; border-radius: 8px; max-width: 500px; width: 90%; max-height: 90vh; overflow-y: auto;">
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1.5rem;">
                <h2 style="margin: 0; font-size: 1.5rem;">Request a Scan</h2>
                <button onclick="closePricingForm()" style="background: none; border: none; font-size: 1.5rem; cursor: pointer; color: var(--text-secondary);">✕</button>
            </div>
            
            <form id="pricingForm" style="display: flex; flex-direction: column; gap: 1rem;">
                <input type="hidden" id="serviceType" name="service" value="">
                
                <div>
                    <label for="companyName" style="display: block; font-weight: 600; margin-bottom: 0.5rem;">Company Name</label>
                    <input type="text" id="companyName" name="company_name" required style="width: 100%; padding: 0.75rem; border: 1px solid var(--border); border-radius: 4px; font-size: 1rem;">
                </div>
                
                <div>
                    <label for="websiteUrl" style="display: block; font-weight: 600; margin-bottom: 0.5rem;">Website URL</label>
                    <input type="url" id="websiteUrl" name="website_url" placeholder="https://example.com" required style="width: 100%; padding: 0.75rem; border: 1px solid var(--border); border-radius: 4px; font-size: 1rem;">
                </div>
                
                <div>
                    <label for="contactName" style="display: block; font-weight: 600; margin-bottom: 0.5rem;">Your Name</label>
                    <input type="text" id="contactName" name="name" required style="width: 100%; padding: 0.75rem; border: 1px solid var(--border); border-radius: 4px; font-size: 1rem;">
                </div>
                
                <div>
                    <label for="contactEmail" style="display: block; font-weight: 600; margin-bottom: 0.5rem;">Email Address</label>
                    <input type="email" id="contactEmail" name="email" required style="width: 100%; padding: 0.75rem; border: 1px solid var(--border); border-radius: 4px; font-size: 1rem;">
                </div>
                
                <div>
                    <label for="industry" style="display: block; font-weight: 600; margin-bottom: 0.5rem;">Industry (Optional)</label>
                    <input type="text" id="industry" name="industry" style="width: 100%; padding: 0.75rem; border: 1px solid var(--border); border-radius: 4px; font-size: 1rem;">
                </div>
                
                <div>
                    <label for="concern" style="display: block; font-weight: 600; margin-bottom: 0.5rem;">Primary Concern</label>
                    <select id="concern" name="concern" required style="width: 100%; padding: 0.75rem; border: 1px solid var(--border); border-radius: 4px; font-size: 1rem;">
                        <option value="">Select a concern...</option>
                        <option value="wcag-compliance">WCAG Compliance</option>
                        <option value="litigation-risk">Litigation Risk</option>
                        <option value="user-accessibility">User Accessibility</option>
                        <option value="legal-requirement">Legal Requirement</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                
                <div id="formMessage" style="display: none; padding: 1rem; border-radius: 4px; margin-top: 0.5rem;"></div>
                
                <button type="submit" class="btn btn-primary" style="width: 100%; margin-top: 1rem;">Submit Request</button>
            </form>
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
        <button class="btn btn-primary" onclick="openPricingForm('free-scan')">Start Free Scan</button>
    </div>
</section>

<script>
function openPricingForm(serviceType) {
    const serviceNames = {
        'free-scan': 'Free Scan',
        'partial-audit': 'Partial Audit',
        'deep-audit': 'Deep Audit'
    };
    
    document.getElementById('serviceType').value = serviceNames[serviceType] || serviceType;
    document.getElementById('pricingModal').style.display = 'flex';
    document.getElementById('pricingForm').reset();
    document.getElementById('formMessage').style.display = 'none';
    document.body.style.overflow = 'hidden';
}

function closePricingForm() {
    document.getElementById('pricingModal').style.display = 'none';
    document.body.style.overflow = 'auto';
}

// Close modal when clicking outside
document.getElementById('pricingModal')?.addEventListener('click', function(e) {
    if (e.target === this) {
        closePricingForm();
    }
});

// Handle form submission
document.getElementById('pricingForm')?.addEventListener('submit', async function(e) {
    e.preventDefault();
    
    const formData = new FormData(this);
    const messageDiv = document.getElementById('formMessage');
    const submitBtn = this.querySelector('button[type="submit"]');
    
    submitBtn.disabled = true;
    submitBtn.textContent = 'Submitting...';
    
    try {
        const response = await fetch('contact-handler.php', {
            method: 'POST',
            body: formData
        });
        
        const data = await response.json();
        
        if (data.success) {
            messageDiv.style.background = '#d4edda';
            messageDiv.style.color = '#155724';
            messageDiv.style.border = '1px solid #c3e6cb';
            messageDiv.textContent = data.message;
            messageDiv.style.display = 'block';
            this.reset();
            setTimeout(() => closePricingForm(), 2000);
        } else {
            messageDiv.style.background = '#f8d7da';
            messageDiv.style.color = '#721c24';
            messageDiv.style.border = '1px solid #f5c6cb';
            messageDiv.textContent = data.message || 'Error submitting form. Please try again.';
            messageDiv.style.display = 'block';
        }
    } catch (error) {
        messageDiv.style.background = '#f8d7da';
        messageDiv.style.color = '#721c24';
        messageDiv.style.border = '1px solid #f5c6cb';
        messageDiv.textContent = 'Error submitting form. Please try again.';
        messageDiv.style.display = 'block';
    } finally {
        submitBtn.disabled = false;
        submitBtn.textContent = 'Submit Request';
    }
});
</script>
HTML;

include 'template.php';
?>
