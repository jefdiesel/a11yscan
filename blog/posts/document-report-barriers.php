<?php
$pageTitle = 'How to Document and Report Web Accessibility Issues | A11yscan Blog';
$pageDescription = 'Step-by-step guide to documenting website accessibility barriers and effectively contacting website owners. Build your case with evidence.';
$currentPage = 'blog';

$pageContent = <<<'HTML'
<article class="blog-post">
    <header class="post-header">
        <time datetime="2025-01-22">January 22, 2025</time>
        <h1>How to Document and Report Web Accessibility Issues: A Plaintiff's Guide</h1>
    </header>

    <section id="introduction">
        <p>When you encounter a website that's inaccessible to you, you have options. But to exercise your rights effectively—whether you're seeking voluntary compliance or considering legal action—you need solid evidence. This guide walks you through documenting accessibility barriers professionally and contacting website owners with a clear, compelling case.</p>
        <p>Documentation serves multiple purposes: it helps website owners understand the problem, it creates a record if you need legal support, and it demonstrates that you gave the company an opportunity to fix the issue.</p>
    </section>

    <section id="what-to-document">
        <h2>What to Document</h2>
        
        <h3>1. The Barrier (What's Broken?)</h3>
        <p>Describe the specific accessibility problem in clear, technical language:</p>
        <ul>
            <li><strong>Images without alt text:</strong> "Image elements on the product page lack descriptive alt attributes"</li>
            <li><strong>Keyboard navigation issues:</strong> "Cannot navigate form fields using Tab key; form is mouse-dependent"</li>
            <li><strong>Color contrast problems:</strong> "Navigation menu text fails WCAG color contrast standards"</li>
            <li><strong>Missing labels:</strong> "Form fields lack associated labels"</li>
            <li><strong>Video captions:</strong> "Video lacks captions and transcripts"</li>
            <li><strong>Focus indicators:</strong> "Focus outlines are invisible when tabbing through buttons"</li>
            <li><strong>Heading hierarchy:</strong> "Page skips from H1 directly to H3, breaking document structure"</li>
        </ul>

        <h3>2. How It Affects You (Impact on Your Access)</h3>
        <p>Explain how this barrier prevents you from using the website:</p>
        <ul>
            <li>"I use a screen reader (JAWS/NVDA) and cannot understand product images because alt text is missing"</li>
            <li>"I use keyboard navigation due to motor disability and cannot access the checkout function"</li>
            <li>"I have low vision and use high contrast mode; text becomes unreadable at the current color ratios"</li>
            <li>"I am deaf and require captions to understand instructional videos"</li>
        </ul>

        <h3>3. Where It Occurs (Specific Location)</h3>
        <p>Be precise about where the barrier exists:</p>
        <ul>
            <li>Specific page URL</li>
            <li>Section of the page (header, product listing, checkout form)</li>
            <li>Which element(s) are affected</li>
            <li>Steps to reproduce the issue</li>
        </ul>

        <h3>4. When You Encountered It (Date and Time)</h3>
        <p>Document when you discovered the issue:</p>
        <ul>
            <li>Date and approximate time</li>
            <li>Browser and assistive technology used</li>
            <li>Operating system and version</li>
        </ul>

        <h3>5. Visual Evidence (Screenshots, Videos, etc.)</h3>
        <p>Capture evidence of the barrier:</p>
        <ul>
            <li><strong>Screenshots:</strong> Take screenshots showing the barrier (missing alt text in inspector, hidden focus indicators)</li>
            <li><strong>Screen reader recording:</strong> Record your screen using NVDA or JAWS showing how the barrier affects your access</li>
            <li><strong>Keyboard navigation video:</strong> Record attempting keyboard navigation to show where it fails</li>
            <li><strong>Contrast analysis:</strong> Use WebAIM contrast checker to document color ratios</li>
            <li><strong>Code inspection:</strong> Take screenshots of browser dev tools showing missing labels, alt text, etc.</li>
        </ul>
    </section>

    <section id="creating-documentation">
        <h2>Creating Your Documentation Package</h2>
        
        <h3>Option 1: Simple Email Report (Best for First Contact)</h3>
        <p>For initial contact with a website owner, keep it direct and professional:</p>
        
        <p><strong>Subject Line:</strong> "Website Accessibility Issue Report - [Website Name]"</p>
        
        <p><strong>Body:</strong></p>
        <p style="background: var(--bg-secondary); padding: 1rem; border-radius: 4px; font-family: monospace; font-size: 0.95rem;">
Hello [Website Owner/Accessibility Contact],<br/><br/>

I am writing to report accessibility barriers on your website that prevent me from accessing your services. As a person with [disability type], I use [assistive technology] to access websites.<br/><br/>

<strong>Issue 1: Missing Image Descriptions</strong><br/>
Location: Product listing page (www.example.com/products)<br/>
Problem: Product images lack alt text descriptions<br/>
Impact: Using a screen reader, I cannot understand what products are being displayed<br/>
Standard: WCAG 2.1 1.1.1 (Text Alternatives)<br/><br/>

<strong>Issue 2: [Add additional issues if multiple]</strong><br/>
[Follow same format]<br/><br/>

These barriers violate web accessibility standards that your organization should follow. I am requesting that you prioritize fixing these issues within [30 days].<br/><br/>

Please confirm receipt of this report and let me know your timeline for remediation.<br/><br/>

Thank you,<br/>
[Your Name]<br/>
[Contact Information]
        </p>

        <h3>Option 2: Detailed Documentation (For Advocacy or Legal Review)</h3>
        <p>If you're working with an advocacy organization or attorney, create a comprehensive report:</p>
        
        <p><strong>Include sections:</strong></p>
        <ul>
            <li>Your name and contact information</li>
            <li>Date of report</li>
            <li>Your disability and assistive technology used</li>
            <li>Website URL and name</li>
            <li>Screenshots and video recordings (labeled and dated)</li>
            <li>List of each barrier with WCAG reference</li>
            <li>How each barrier affects your access</li>
            <li>Timeline of when you first contacted the owner (if applicable)</li>
            <li>Copies of all correspondence</li>
        </ul>

        <h3>Using WCAG Standards in Your Documentation</h3>
        <p>Reference the specific WCAG 2.1 success criteria your case involves. This shows you're making a technical, standards-based claim:</p>
        <ul>
            <li><strong>1.1.1 Non-text Content (Level A):</strong> Images, icons, and graphics need alt text</li>
            <li><strong>1.4.3 Contrast (Minimum) (Level AA):</strong> Text must have 4.5:1 contrast ratio</li>
            <li><strong>1.4.11 Non-text Contrast (Level AA):</strong> UI components need 3:1 contrast</li>
            <li><strong>2.1.1 Keyboard (Level A):</strong> All functionality accessible via keyboard</li>
            <li><strong>2.1.2 No Keyboard Trap (Level A):</strong> Focus cannot be trapped using keyboard alone</li>
            <li><strong>2.4.7 Focus Visible (Level AA):</strong> Focus indicator must be visible</li>
            <li><strong>1.3.1 Info and Relationships (Level A):</strong> Form labels must be associated with inputs</li>
            <li><strong>1.2.1 Audio-only and Video-only (Level A):</strong> Videos need captions and transcripts</li>
        </ul>
    </section>

    <section id="contacting-owners">
        <h2>Contacting the Website Owner</h2>
        
        <h3>Step 1: Find the Right Contact</h3>
        <p>Look for accessibility or compliance contacts on the website:</p>
        <ul>
            <li>Accessibility statement or page (usually in footer)</li>
            <li>Contact form or customer service email</li>
            <li>Investor relations (for public companies)</li>
            <li>HR or legal department email</li>
            <li>WHOIS lookup for domain registrant (public information)</li>
        </ul>
        <p>If you cannot find contact information, start with general customer service. In your message, ask to be directed to the accessibility coordinator or legal compliance team.</p>

        <h3>Step 2: Send Professional Documentation</h3>
        <p>Use professional language and clear formatting:</p>
        <ul>
            <li>Subject line clearly states this is an accessibility issue</li>
            <li>Be specific about what's broken (not "your site is inaccessible")</li>
            <li>Explain how it affects you personally</li>
            <li>Reference applicable standards (WCAG, ADA)</li>
            <li>Include evidence (screenshots, videos, or links to specific pages)</li>
            <li>Request a specific timeline for response (e.g., 14 days)</li>
            <li>Remain professional and non-threatening</li>
        </ul>

        <h3>Step 3: Keep Records of All Correspondence</h3>
        <p>Save everything:</p>
        <ul>
            <li>Your original email and any attachments</li>
            <li>Their response (or lack thereof)</li>
            <li>Follow-up emails and dates sent</li>
            <li>Any explanation for why they cannot fix the issue</li>
            <li>Screenshots of emails (in case they're deleted)</li>
        </ul>

        <h3>Step 4: Follow Up if Needed</h3>
        <p>If you don't hear back within your stated timeframe:</p>
        <ul>
            <li>Send one follow-up email referencing your original report</li>
            <li>Ask if they received your accessibility report</li>
            <li>Reiterate that you're seeking voluntary compliance</li>
            <li>Keep this professional and documented</li>
        </ul>
    </section>

    <section id="next-steps">
        <h2>What Happens After You Report?</h2>
        
        <h3>Best Case: They Fix It</h3>
        <p>Many companies are responsive when properly informed. They may:</p>
        <ul>
            <li>Acknowledge the issue and commit to a fix</li>
            <li>Ask follow-up questions to better understand your concerns</li>
            <li>Provide a timeline for remediation</li>
            <li>Thank you for helping them improve their website</li>
        </ul>

        <h3>They Ignore You or Refuse</h3>
        <p>If they don't respond or refuse to remediate:</p>
        <ul>
            <li>Document all attempts to contact them</li>
            <li>Consider escalating to a state or federal complaint (if applicable)</li>
            <li>Consult with an accessibility attorney or advocacy organization</li>
            <li>Your documentation becomes crucial evidence if legal action is necessary</li>
        </ul>

        <h3>They Claim They Cannot Fix It</h3>
        <p>This rarely holds up legally, but they might claim:</p>
        <ul>
            <li>"It's too expensive" — Not a legal defense</li>
            <li>"We use a third-party platform" — Still their responsibility</li>
            <li>"We don't have technical staff" — Still their responsibility</li>
            <li>"Nobody else has complained" — Your complaint started the record</li>
        </ul>
        <p>Professional documentation helps refute these excuses.</p>
    </section>

    <section id="tools-resources">
        <h2>Tools for Documentation</h2>
        
        <h3>Automated Checking</h3>
        <ul>
            <li><strong>WAVE Browser Extension:</strong> Visual feedback about accessibility issues</li>
            <li><strong>axe DevTools:</strong> Browser extension with detailed reports</li>
            <li><strong>Lighthouse:</strong> Built into Chrome DevTools</li>
            <li><strong>WebAIM Contrast Checker:</strong> Check color contrast ratios</li>
        </ul>

        <h3>Manual Testing</h3>
        <ul>
            <li><strong>Keyboard Navigation:</strong> Try using Tab, Shift+Tab, Enter, and Space</li>
            <li><strong>Screen Reader Testing:</strong> NVDA (free, Windows), JAWS (commercial), VoiceOver (Mac)</li>
            <li><strong>Browser DevTools:</strong> Inspect HTML for missing labels, alt text, ARIA attributes</li>
            <li><strong>Zoom Testing:</strong> Test at 200% zoom to check responsiveness</li>
        </ul>

        <h3>Recording Evidence</h3>
        <ul>
            <li><strong>OBS Studio:</strong> Free screen recording software</li>
            <li><strong>Windows/Mac Built-in Tools:</strong> Screen recording features in OS</li>
            <li><strong>Screenshot Tools:</strong> Built-in tools for annotating images</li>
        </ul>
    </section>

    <!-- LEGAL DISCLAIMER (mandatory) -->
    <section style="margin-top: 3rem; padding-top: 2rem; border-top: 2px solid var(--border);">
        <div style="background: var(--bg-tertiary); padding: 1.5rem; border-radius: 4px; border-left: 4px solid var(--accent-primary);">
            <h3 style="margin-top: 0; font-size: 1.1rem;">Legal Disclaimer</h3>
            <p style="font-size: 0.95rem; margin-bottom: 0;"><strong>A11yscan is not a law firm and does not provide legal advice.</strong> This guide provides general information about documenting accessibility issues and communicating with website owners. The legal implications of accessibility violations vary by jurisdiction and circumstance. Before taking legal action or filing formal complaints, consult with a qualified attorney specializing in disability rights and web accessibility law.</p>
        </div>
    </section>

    <!-- CUSTOMIZED CTA -->
    <section style="margin-top: 3rem;">
        <div class="highlight">
            <h2 style="margin-top: 0;">Build Your Evidence Package</h2>
            <p>Professional documentation starts with a thorough accessibility audit. Get specific barriers identified with a free WCAG scan.</p>
            <button class="btn btn-primary" onclick="openPricingForm('free-scan', 'Build Accessibility Evidence')">Start Free Audit</button>
        </div>
    </section>
</article>
HTML;

include 'https://a11yscan.xyz/template.php';
?>
