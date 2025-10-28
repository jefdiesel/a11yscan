<?php
$pageTitle = 'Accessibility Audits: What a Proper Audit Includes | A11yscan Blog';
$pageDescription = 'Learn what accessibility audits include, testing methodologies, tools, screen readers, and how to evaluate audit quality for WCAG compliance.';
$currentPage = 'blog';

$pageContent = <<<'HTML'
<article class="blog-post">
    <!-- Header INSIDE first section -->
    <section id="intro">
        <time datetime="2025-10-26" style="font-size: 0.9rem; color: var(--text-secondary); font-weight: 500; display: block; margin-bottom: 0.5rem;">October 26, 2025</time>
        <h1 style="font-size: 2.5rem; font-weight: 700; line-height: 1.2; margin-bottom: 2rem;">Accessibility Audits: What a Proper Audit Includes</h1>
        
        <h2>Why Audit Quality Matters</h2>
        <p>A "proper" accessibility audit is far more than running an automated tool and counting violations. Courts increasingly question the methodology of accessibility audits and dismiss weak ones.</p>
        <p>When you claim "we had it audited," that claim is only as strong as your audit methodology. A poorly conducted audit can hurt your legal defense more than having no audit at all.</p>
    </section>

    <!-- LEGAL DISCLAIMER -->
    <section style="margin-top: 2rem; padding-top: 1.5rem; border-top: 2px solid var(--border);">
        <div style="background: var(--bg-tertiary); padding: 1.5rem; border-radius: 4px; border-left: 4px solid var(--accent-primary);">
            <h2 style="margin-top: 0; font-size: 1.1rem;">Legal Disclaimer</h2>
            <p style="font-size: 0.95rem; margin-bottom: 0;"><strong>A11yscan is not a law firm and does not provide legal advice.</strong> We operate under best practices based on WCAG Guidelines, ADA requirements, and applicable jurisdictions. Courts don't always agree on terms and expectations for web accessibility, and legal standards can vary by jurisdiction. However, an accessible website works better for all users regardless of legal requirements. For specific legal guidance, consult with a qualified attorney specializing in accessibility law.</p>
        </div>
    </section>

    <section id="what-is-audit">
        <h2>What is an Accessibility Audit?</h2>
        <p>An accessibility audit is a systematic evaluation of your website against accessibility standards (typically WCAG 2.1). It includes:</p>
        <ul>
            <li>Automated scanning for technical violations</li>
            <li>Manual testing with real assistive technology</li>
            <li>User pathway testing (forms, checkout, etc.)</li>
            <li>Documentation of all findings</li>
            <li>Prioritization of issues by severity</li>
            <li>Remediation recommendations</li>
        </ul>

        <h3>Audit vs. Quick Scan</h3>
        <ul>
            <li><strong>Quick Scan:</strong> Automated tool only, identifies obvious violations, limited scope</li>
            <li><strong>Proper Audit:</strong> Automated + manual testing, comprehensive scope, real assistive technology, professional findings</li>
        </ul>

        <p>Many companies claim to do "audits" when they only run automated tools. That's not sufficient.</p>
    </section>

    <section id="audit-components">
        <h2>Components of a Proper Accessibility Audit</h2>

        <h3>1. Scope Definition</h3>
        <p>A proper audit clearly defines what will be tested:</p>
        <ul>
            <li>Which pages will be tested (and why)</li>
            <li>Which standards (WCAG 2.1 Level AA, Section 508, etc.)</li>
            <li>Testing timeframe and dates</li>
            <li>Target audience (all users, or specific personas)</li>
            <li>Browsers and devices tested</li>
        </ul>

        <h3>Example Scope Document</h3>
        <div style="background: var(--bg-secondary); border-radius: 4px; font-family: monospace; font-size: 0.9rem; overflow: auto; overflow-x: auto; padding: 1rem" role="region" aria-label="Code example for audit scope">
<pre>Audit Scope - Acme Corp Website
Standard: WCAG 2.1 Level AA
Pages Tested: 25 representative pages
  - Homepage
  - Main content pages (5 samples)
  - Contact form
  - Product pages (3 samples)
  - User account pages
  - Checkout flow
  - Footer content

Testing Methodology:
  - Automated scanning + manual testing
  - Screen reader testing (NVDA, JAWS)
  - Keyboard navigation
  - Browsers: Chrome, Firefox, Safari
  - Devices: Desktop, Tablet, Mobile
  
Testing Dates: October 1-15, 2025</pre>
        </div>

        <h3>2. Automated Testing</h3>
        <p>Use multiple automated tools to catch obvious violations:</p>
        <ul>
            <li><strong>axe DevTools:</strong> Most comprehensive, good for developers</li>
            <li><strong>WAVE:</strong> Visual feedback, good for designers</li>
            <li><strong>Lighthouse:</strong> Built-in to Chrome, quick overview</li>
            <li><strong>Deque's aXe-core:</strong> Underlying engine for many tools</li>
        </ul>

        <h3>Important: Automated Tools Miss 60-70% of Issues</h3>
        <ul>
            <li>Automated tools only catch coding errors</li>
            <li>They can't evaluate user experience</li>
            <li>They miss context and logic errors</li>
            <li>Manual testing is essential</li>
        </ul>

        <h3>What Automated Tools Can Catch</h3>
        <ul>
            <li>Missing alt text on images</li>
            <li>Color contrast violations</li>
            <li>Missing form labels</li>
            <li>Heading structure errors</li>
            <li>Missing ARIA attributes</li>
            <li>Keyboard trap detection (limited)</li>
        </ul>

        <h3>What Automated Tools Miss</h3>
        <ul>
            <li>Bad alt text (technically present, but meaningless)</li>
            <li>Logical tab order issues</li>
            <li>Screen reader usability problems</li>
            <li>User experience with screen readers</li>
            <li>Complex interaction patterns</li>
            <li>Context-dependent violations</li>
        </ul>
    </section>

    <section id="manual-testing">
        <h2>3. Manual Testing: The Critical Component</h2>
        <p>A proper audit includes extensive manual testing with real assistive technology.</p>

        <h3>Keyboard Testing</h3>
        <p>Test every interactive element with keyboard only:</p>
        <ul>
            <li>Tab through entire page(s)</li>
            <li>Verify focus order is logical</li>
            <li>Check for focus traps</li>
            <li>Verify focus indicators are visible</li>
            <li>Test form submission via keyboard</li>
            <li>Test modal dialogs</li>
        </ul>

        <h3>Screen Reader Testing</h3>
        <p>Test with at least 2-3 screen readers:</p>

        <h3>NVDA (Free, Windows)</h3>
        <ul>
            <li>Download at nvaccess.org</li>
            <li>Free and open-source</li>
            <li>Most common for initial testing</li>
            <li>Growing market share</li>
        </ul>

        <h3>JAWS (Commercial)</h3>
        <ul>
            <li>Industry standard for professionals with disabilities</li>
            <li>$90/year or $1,200+ one-time</li>
            <li>Should always include JAWS in testing</li>
            <li>Different behavior than NVDA</li>
        </ul>

        <h3>VoiceOver (Mac/iOS)</h3>
        <ul>
            <li>Built into Mac computers and iOS devices</li>
            <li>Free and widely used</li>
            <li>Different interaction model than Windows readers</li>
        </ul>

        <h3>Screen Reader Testing Includes</h3>
        <ul>
            <li>Page structure (headings, landmarks, sections)</li>
            <li>Navigation menus and links</li>
            <li>Form fields and error messages</li>
            <li>Image descriptions (alt text quality)</li>
            <li>Table structure and headers</li>
            <li>Dynamic content and updates</li>
            <li>Modal dialogs and focus traps</li>
            <li>Skip links functionality</li>
        </ul>

        <h3>Voice Control Testing</h3>
        <ul>
            <li>Dragon NaturallySpeaking (Windows)</li>
            <li>Voice Control (Mac)</li>
            <li>Built-in accessibility on mobile devices</li>
        </ul>

        <h3>Mobile Testing</h3>
        <ul>
            <li>VoiceOver on iPhone/iPad</li>
            <li>TalkBack on Android devices</li>
            <li>Responsive design verification</li>
            <li>Touch target size validation</li>
        </ul>
    </section>

    <section id="testing-process">
        <h2>4. Systematic Testing Process</h2>

        <h3>For Each Page Tested:</h3>
        <ol>
            <li>Run automated tools (axe, WAVE, Lighthouse)</li>
            <li>Manually inspect page structure</li>
            <li>Test with keyboard (Tab through entire page)</li>
            <li>Test with NVDA screen reader</li>
            <li>Test with JAWS screen reader</li>
            <li>Test with mobile screen reader (VoiceOver)</li>
            <li>Test color contrast for all text</li>
            <li>Test mobile responsiveness</li>
            <li>Document all findings</li>
        </ol>

        <h3>Example Testing Report</h3>
        <div style="background: var(--bg-secondary); border-radius: 4px; font-family: monospace; font-size: 0.9rem; overflow: auto; overflow-x: auto; padding: 1rem" role="region" aria-label="Code example for testing report">
<pre>Page: Homepage
Date: October 5, 2025
Tester: [Name]

Automated Testing Results:
- axe DevTools: 12 violations, 8 warnings
- WAVE: 10 errors, 15 warnings
- Lighthouse: 89/100 accessibility score

Manual Testing:
✓ Keyboard navigation: PASS
  - All buttons keyboard accessible
  - Focus order logical (top to bottom)
  - No focus traps
✓ Screen Reader (NVDA): PASS
  - Page structure clear
  - Links descriptive
  - Images have alt text
✗ Screen Reader (JAWS): FAIL
  - Hero image alt text not announced
  - Navigation menu structure unclear
✓ Mobile (VoiceOver): PASS
  - Touch targets sufficient size
  - Responsive layout accessible
✓ Color Contrast: PASS
  - All text meets 7:1 ratio

Findings:
[List of violations and recommendations]</pre>
        </div>
    </section>

    <section id="severity-levels">
        <h2>5. Issue Severity Classification</h2>
        <p>A proper audit prioritizes issues by severity:</p>

        <h3>Critical (Must Fix Immediately)</h3>
        <ul>
            <li>Makes entire page unusable for people with disabilities</li>
            <li>Prevents form submission</li>
            <li>Prevents access to critical content</li>
            <li>Focus traps or keyboard traps</li>
            <li>Missing form labels</li>
        </ul>

        <h3>High (Fix Within 2-4 Weeks)</h3>
        <ul>
            <li>Severely impacts usability</li>
            <li>Affects multiple pages</li>
            <li>Screen reader compatibility issues</li>
            <li>Heading structure errors</li>
            <li>Color contrast failures</li>
        </ul>

        <h3>Medium (Fix Within 1-2 Months)</h3>
        <ul>
            <li>Impacts specific user actions</li>
            <li>Works but is confusing</li>
            <li>Alt text could be better</li>
            <li>Minor keyboard accessibility issues</li>
        </ul>

        <h3>Low (Fix Within 3 Months)</h3>
        <ul>
            <li>Cosmetic or minor issues</li>
            <li>Affects edge cases</li>
            <li>Polish improvements</li>
        </ul>

        <h3>Informational</h3>
        <ul>
            <li>Best practices recommendations</li>
            <li>Performance optimizations</li>
            <li>Future enhancements</li>
        </ul>
    </section>

    <section id="wcag-coverage">
        <h2>6. WCAG Criterion Coverage</h2>
        <p>A proper audit systematically checks all relevant WCAG 2.1 criteria:</p>

        <h3>Level A Criteria (Must Meet)</h3>
        <ul>
            <li>1.1.1 Non-text Content</li>
            <li>1.3.1 Info and Relationships</li>
            <li>2.1.1 Keyboard</li>
            <li>2.1.2 No Keyboard Trap</li>
            <li>2.4.3 Focus Order</li>
            <li>3.2.1 On Focus</li>
            <li>4.1.2 Name, Role, Value</li>
        </ul>

        <h3>Level AA Criteria (Should Meet)</h3>
        <ul>
            <li>1.4.3 Contrast (Minimum)</li>
            <li>2.4.7 Focus Visible</li>
            <li>3.3.1 Error Identification</li>
            <li>3.3.3 Error Suggestion</li>
        </ul>

        <p>A proper audit documents compliance with each criterion.</p>
    </section>

    <section id="sample-size">
        <h2>7. Representative Sample Size</h2>
        <p>Testing page samples should be representative of your entire site:</p>

        <h3>Small Sites (1-25 pages)</h3>
        <ul>
            <li>Test ALL pages</li>
            <li>Or minimum 10 pages</li>
        </ul>

        <h3>Medium Sites (25-500 pages)</h3>
        <ul>
            <li>Test minimum 25-50 pages</li>
            <li>Representative of all content types</li>
            <li>All major workflows</li>
        </ul>

        <h3>Large Sites (500+ pages)</h3>
        <ul>
            <li>Test minimum 50-100 pages</li>
            <li>All templates tested</li>
            <li>Statistical sample if templates are consistent</li>
        </ul>

        <h3>E-Commerce Sites</h3>
        <ul>
            <li>Homepage</li>
            <li>Product listing pages</li>
            <li>Product detail pages</li>
            <li>Shopping cart</li>
            <li>Checkout flow (critical)</li>
            <li>Search results</li>
            <li>Filters and facets</li>
        </ul>
    </section>

    <section id="documentation">
        <h2>8. Comprehensive Documentation</h2>
        <p>A proper audit includes detailed documentation:</p>

        <h3>What Should Be Documented</h3>
        <ul>
            <li>Audit scope and objectives</li>
            <li>Audit dates and timeframe</li>
            <li>Testing methodology</li>
            <li>Tools used (versions)</li>
            <li>Standards targeted (WCAG 2.1 Level AA)</li>
            <li>Pages tested (with URLs)</li>
            <li>Screen readers and browsers tested</li>
            <li>Tester names and credentials</li>
            <li>Each WCAG criterion tested and status</li>
            <li>All violations found with:</li>
            <li>Location (page URL, element)</li>
            <li>Severity level</li>
            <li>WCAG criterion violated</li>
            <li>Description of the problem</li>
            <li>How to fix it</li>
            <li>Steps to reproduce</li>
            <li>Screenshots or examples (when applicable)</li>
        </ul>

        <h3>Example Finding Documentation</h3>
        <div style="background: var(--bg-secondary); border-radius: 4px; font-family: monospace; font-size: 0.9rem; overflow: auto; overflow-x: auto; padding: 1rem" role="region" aria-label="Code example for finding documentation">
<pre>Finding #47
Page: https://acme.com/products/widgets
Element: Image in hero section
Criterion: 1.1.1 Non-text Content (Level A)
Severity: CRITICAL
Status: Found October 5, 2025

Problem:
Hero section background image has no alt text. 
Image contains "Spring Sale: 50% Off" text that is 
important to understanding the page purpose.

How to Fix:
Add alt attribute to image or provide text alternative:
&lt;img src="spring-sale-banner.jpg" 
     alt="Spring Sale: 50% Off Widgets" /&gt;

Steps to Reproduce:
1. Visit https://acme.com/products/widgets
2. Use screen reader to read the hero section
3. Note that no text is announced
4. Inspect HTML to confirm no alt attribute

Screen Reader Testing:
- NVDA: NOT ANNOUNCED (FAIL)
- JAWS: NOT ANNOUNCED (FAIL)
- VoiceOver: NOT ANNOUNCED (FAIL)</pre>
        </div>
    </section>

    <section id="false-positives">
        <h2>9. Handling False Positives</h2>
        <p>Automated tools sometimes report violations that aren't actually problems. A proper audit distinguishes:</p>

        <h3>True Positive</h3>
        <p>Real violation that needs fixing</p>
        <div style="background: var(--bg-secondary); border-radius: 4px; font-family: monospace; font-size: 0.9rem; overflow: auto; overflow-x: auto; padding: 1rem" role="region" aria-label="Code example for true positive">
<pre>Form input without label = True Positive
Status: FIX REQUIRED</pre>
        </div>

        <h3>False Positive</h3>
        <p>Tool reports an issue, but it's actually compliant</p>
        <div style="background: var(--bg-secondary); border-radius: 4px; font-family: monospace; font-size: 0.9rem; overflow: auto; overflow-x: auto; padding: 1rem" role="region" aria-label="Code example for false positive">
<pre>axe reports low contrast on:
&lt;div style="color: #666; background: white"&gt;
  [Decorative design element]
&lt;/div&gt;

Manual Review: FALSE POSITIVE
Reason: Element is decorative (aria-hidden), not text
Status: NO ACTION NEEDED</pre>
        </div>

        <h3>Context-Dependent</h3>
        <p>Issue requires manual review to confirm</p>
        <div style="background: var(--bg-secondary); border-radius: 4px; font-family: monospace; font-size: 0.9rem; overflow: auto; overflow-x: auto; padding: 1rem" role="region" aria-label="Code example for context-dependent issue">
<pre>Tool detects form has no visible label, but CSS 
hides label off-screen for design reasons.
Status: REVIEW CONTEXT
Result: If visually hidden for design, add aria-label instead</pre>
        </div>
    </section>

    <section id="remediation-plan">
        <h2>10. Remediation Plan & Timeline</h2>
        <p>A proper audit includes a remediation roadmap:</p>

        <h3>Remediation Priority Matrix</h3>
        <div style="background: var(--bg-secondary); border-radius: 4px; font-family: monospace; font-size: 0.9rem; overflow: auto; overflow-x: auto; padding: 1rem" role="region" aria-label="Code example for remediation plan">
<pre>Critical Issues: 12 violations
Timeline: Fix within 2 weeks
Owner: Development lead
Examples:
  - Form labels missing (3 instances)
  - Keyboard trap in search (1 instance)
  - Focus order illogical (2 instances)
  - Color contrast failures (6 instances)

High Priority: 24 violations
Timeline: Fix within 4 weeks
Owner: Development team
Examples:
  - Bad alt text (12 instances)
  - Missing error messages (8 instances)
  - Heading structure (4 instances)

Medium Priority: 18 violations
Timeline: Fix within 8 weeks
Owner: Content team + Development

Low Priority: 5 violations
Timeline: Fix within 12 weeks
Owner: Backlog for future release</pre>
        </div>
    </section>

    <section id="takeaways">
        <h2>Key Takeaways</h2>
        <ul>
            <li>A proper audit = automated + manual testing</li>
            <li>Automated tools miss 60-70% of issues</li>
            <li>Manual testing with screen readers is mandatory</li>
            <li>Test with NVDA, JAWS, and VoiceOver</li>
            <li>Test keyboard navigation on every page</li>
            <li>Use representative sample of pages</li>
            <li>Document testing methodology clearly</li>
            <li>Classify issues by severity</li>
            <li>Check all WCAG 2.1 criteria</li>
            <li>Provide specific remediation recommendations</li>
            <li>Include remediation timeline</li>
            <li>Professional audits carry more legal weight</li>
        </ul>
    </section>

    <section id="resources">
        <h2>Resources</h2>
        <ul>
            <li><a href="https://www.w3.org/WAI/test-evaluate/">W3C Testing & Evaluation Guide</a></li>
            <li><a href="https://www.nvaccess.org/">NVDA Screen Reader (Free)</a></li>
            <li><a href="https://www.deque.com/axe/">axe DevTools</a></li>
            <li><a href="https://wave.webaim.org/">WAVE Web Accessibility Evaluation Tool</a></li>
            <li><a href="https://www.itic.org/vpat">VPAT: Conformance Reporting Template</a></li>
        </ul>
    </section>
</article>

<section style="margin-top: 3rem;">
    <div class="highlight">
        <h2 style="margin-top: 0;">Get a Professional Accessibility Audit</h2>
        <p>Comprehensive manual + automated testing with screen readers, conformance report, and remediation plan.</p>
        <button class="btn btn-primary" onclick="openPricingForm('partial-audit', 'Professional Accessibility Audit')">Get Full Audit →</button>
    </div>
</section>
HTML;

include __DIR__ . '/../../template.php';
?>
