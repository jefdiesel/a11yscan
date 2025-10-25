<?php
/**
 * PRICING FORM MODAL
 * pricing-modal.php
 * 
 * Clean pricing form modal for service requests
 */
?>

<!-- Pricing Modal HTML -->
<div id="pricing-modal" style="display: none; position: fixed; top: 0; left: 0; right: 0; bottom: 0; background: rgba(0,0,0,0.5); z-index: 10000; overflow-y: auto; padding: 2rem 1rem;">
    <div style="background: white; max-width: 600px; margin: 2rem auto; border-radius: 12px; padding: 2rem; box-shadow: 0 10px 40px rgba(0,0,0,0.3);">
        <button onclick="closePricingForm()" style="float: right; background: none; border: none; font-size: 2rem; cursor: pointer; padding: 0; color: #999; line-height: 1;">×</button>
        
        <h2 style="margin-top: 0; font-size: 1.8rem; font-weight: 700; color: var(--text-primary);">Request a WCAG Scan</h2>
        <p style="color: var(--text-secondary); margin-bottom: 1.5rem;">Get your website accessibility audit today</p>
        
        <form id="pricing-form" onsubmit="submitPricingForm(event)" style="margin-top: 1.5rem;">
            <!-- Website URL -->
            <div style="margin-bottom: 1.5rem;">
                <label for="form-website" style="display: block; font-weight: 600; margin-bottom: 0.5rem; color: var(--text-primary);">Website URL *</label>
                <input type="url" id="form-website" name="website_url" placeholder="https://example.com" required style="width: 100%; padding: 0.75rem; border: 2px solid var(--border); border-radius: 6px; font-size: 1rem; font-family: inherit; box-sizing: border-box;">
            </div>
            
            <!-- Company Name -->
            <div style="margin-bottom: 1.5rem;">
                <label for="form-company" style="display: block; font-weight: 600; margin-bottom: 0.5rem; color: var(--text-primary);">Company Name</label>
                <input type="text" id="form-company" name="company_name" placeholder="Your company" style="width: 100%; padding: 0.75rem; border: 2px solid var(--border); border-radius: 6px; font-size: 1rem; font-family: inherit; box-sizing: border-box;">
            </div>
            
            <!-- Your Name -->
            <div style="margin-bottom: 1.5rem;">
                <label for="form-name" style="display: block; font-weight: 600; margin-bottom: 0.5rem; color: var(--text-primary);">Your Name *</label>
                <input type="text" id="form-name" name="name" placeholder="Full name" required style="width: 100%; padding: 0.75rem; border: 2px solid var(--border); border-radius: 6px; font-size: 1rem; font-family: inherit; box-sizing: border-box;">
            </div>
            
            <!-- Email -->
            <div style="margin-bottom: 1.5rem;">
                <label for="form-email" style="display: block; font-weight: 600; margin-bottom: 0.5rem; color: var(--text-primary);">Email Address *</label>
                <input type="email" id="form-email" name="email" placeholder="you@company.com" required style="width: 100%; padding: 0.75rem; border: 2px solid var(--border); border-radius: 6px; font-size: 1rem; font-family: inherit; box-sizing: border-box;">
            </div>
            
            <!-- Industry -->
            <div style="margin-bottom: 1.5rem;">
                <label for="form-industry" style="display: block; font-weight: 600; margin-bottom: 0.5rem; color: var(--text-primary);">Industry</label>
                <select id="form-industry" name="industry" style="width: 100%; padding: 0.75rem; border: 2px solid var(--border); border-radius: 6px; font-size: 1rem; font-family: inherit; box-sizing: border-box;">
                    <option value="">Select industry...</option>
                    <option value="ecommerce">E-Commerce / Retail</option>
                    <option value="healthcare">Healthcare</option>
                    <option value="finance">Financial Services</option>
                    <option value="education">Education</option>
                    <option value="technology">Technology</option>
                    <option value="media">Media / Publishing</option>
                    <option value="government">Government</option>
                    <option value="nonprofit">Non-Profit</option>
                    <option value="other">Other</option>
                </select>
            </div>
            
            <!-- Service Type -->
            <div style="margin-bottom: 1.5rem;">
                <label for="form-service" style="display: block; font-weight: 600; margin-bottom: 0.5rem; color: var(--text-primary);">Service Type *</label>
                <select id="form-service" name="service" required style="width: 100%; padding: 0.75rem; border: 2px solid var(--border); border-radius: 6px; font-size: 1rem; font-family: inherit; box-sizing: border-box;">
                    <option value="">Select a service...</option>
                    <option value="free-scan">Free WCAG Scan</option>
                    <option value="partial-audit">Partial Accessibility Audit</option>
                    <option value="deep-audit">Full Accessibility Audit</option>
                </select>
            </div>
            
            <!-- Primary Concern -->
            <div style="margin-bottom: 1.5rem;">
                <label for="form-concern" style="display: block; font-weight: 600; margin-bottom: 0.5rem; color: var(--text-primary);">Primary Concern</label>
                <select id="form-concern" name="concern" style="width: 100%; padding: 0.75rem; border: 2px solid var(--border); border-radius: 6px; font-size: 1rem; font-family: inherit; box-sizing: border-box;">
                    <option value="">Select a concern...</option>
                    <option value="Color Contrast">Color Contrast Issues</option>
                    <option value="Keyboard Navigation">Keyboard Navigation</option>
                    <option value="Alt Text Missing">Missing Alt Text</option>
                    <option value="Screen Reader Compatibility">Screen Reader Compatibility</option>
                    <option value="Overlay Compliance">Overlay / Widget Issues</option>
                    <option value="Litigation Risk">Litigation Risk Assessment</option>
                    <option value="Senior Accessibility">Senior/Aging Population Accessibility</option>
                    <option value="General Compliance">General WCAG Compliance</option>
                    <option value="Other">Other</option>
                </select>
            </div>
            
            <!-- Form Errors -->
            <div id="form-errors" style="display: none; background: #fee; color: #c00; padding: 1rem; border-radius: 6px; margin-bottom: 1.5rem; border: 1px solid #fcc;"></div>
            
            <!-- Form Success -->
            <div id="form-success" style="display: none; background: #efe; color: #060; padding: 1rem; border-radius: 6px; margin-bottom: 1.5rem; border: 1px solid #cfc;"></div>
            
            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary" style="width: 100%; margin-bottom: 1rem; cursor: pointer;">Request Scan</button>
            
            <div style="text-align: center; font-size: 0.85rem; color: var(--text-secondary);">
                <p>We'll contact you within 1 business day to discuss your scan.</p>
            </div>
        </form>
    </div>
</div>

<!-- Modal Scripts -->
<script>
function openPricingForm() {
    document.getElementById('pricing-modal').style.display = 'block';
    document.getElementById('form-errors').style.display = 'none';
    document.getElementById('form-success').style.display = 'none';
    document.getElementById('pricing-form').reset();
    document.getElementById('form-website').focus();
}

function closePricingForm() {
    document.getElementById('pricing-modal').style.display = 'none';
}

// Close modal when clicking outside
document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('pricing-modal').addEventListener('click', function(e) {
        if (e.target === this) {
            closePricingForm();
        }
    });
});

// Close modal on Escape key
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        closePricingForm();
    }
});

function submitPricingForm(e) {
    e.preventDefault();
    
    const formData = new FormData(document.getElementById('pricing-form'));
    const errorsDiv = document.getElementById('form-errors');
    const successDiv = document.getElementById('form-success');
    
    errorsDiv.style.display = 'none';
    successDiv.style.display = 'none';
    
    fetch('contact-handler.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            successDiv.innerHTML = '<strong>Success!</strong> ' + data.message;
            successDiv.style.display = 'block';
            document.getElementById('pricing-form').reset();
            setTimeout(() => closePricingForm(), 2000);
        } else {
            const errorList = data.errors ? '<ul style="margin: 0; padding-left: 1rem;"><li>' + data.errors.join('</li><li>') + '</li></ul>' : data.message;
            errorsDiv.innerHTML = '<strong>Error:</strong> ' + errorList;
            errorsDiv.style.display = 'block';
        }
    })
    .catch(error => {
        errorsDiv.innerHTML = '<strong>Error:</strong> Failed to submit form. Please try again.';
        errorsDiv.style.display = 'block';
    });
}
</script>
