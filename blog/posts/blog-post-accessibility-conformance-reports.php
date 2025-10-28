<?php
$pageTitle = 'Accessibility Conformance Reports (ACRs): Legal Guide | A11yscan Blog';
$pageDescription = 'Understanding VPAT, ACRs, and conformance reports. What courts require, how to create reports, and legal implications for compliance.';
$currentPage = 'blog';

$pageContent = <<<'HTML'
<article class="blog-post">
    <!-- Header INSIDE first section -->
    <section id="intro">
        <time datetime="2025-10-26" style="font-size: 0.9rem; color: var(--text-secondary); font-weight: 500; display: block; margin-bottom: 0.5rem;">October 26, 2025</time>
        <h1 style="font-size: 2.5rem; font-weight: 700; line-height: 1.2; margin-bottom: 2rem;">Accessibility Conformance Reports (ACRs): Your Legal Documentation</h1>
        
        <h2>Why Conformance Reports Matter</h2>
        <p>Courts are increasingly requiring accessibility conformance reports. When you're sued for ADA violations, the defendant's lawyer will ask: "Do you have documentation of your accessibility efforts?" Without a conformance report, the answer is "No"—which implies negligence.</p>
        <p>A well-documented conformance report proves you took accessibility seriously, tested thoroughly, and documented your findings. This is critical for defense.</p>
    </section>

    <!-- LEGAL DISCLAIMER -->
    <section style="margin-top: 2rem; padding-top: 1.5rem; border-top: 2px solid var(--border);">
        <div style="background: var(--bg-tertiary); padding: 1.5rem; border-radius: 4px; border-left: 4px solid var(--accent-primary);">
            <h2 style="margin-top: 0; font-size: 1.1rem;">Legal Disclaimer</h2>
            <p style="font-size: 0.95rem; margin-bottom: 0;"><strong>A11yscan is not a law firm and does not provide legal advice.</strong> We operate under best practices based on WCAG Guidelines, ADA requirements, and applicable jurisdictions. Courts don't always agree on terms and expectations for web accessibility, and legal standards can vary by jurisdiction. However, an accessible website works better for all users regardless of legal requirements. For specific legal guidance, consult with a qualified attorney specializing in accessibility law.</p>
        </div>
    </section>

    <section id="what-is-acr">
        <h2>What is a Conformance Report?</h2>
        <p>An Accessibility Conformance Report (ACR) is a formal document that describes:</p>
        <ul>
            <li>What accessibility standards you're targeting (WCAG 2.1 Level AA, Section 508, ADA, etc.)</li>
            <li>Which success criteria your site meets</li>
            <li>Which success criteria have issues</li>
            <li>How those issues are being addressed</li>
            <li>When remediation will be complete</li>
            <li>How the report was created (audit methods, tools used, dates)</li>
        </ul>

        <h3>The Most Common Format: VPAT</h3>
        <p>The Voluntary Product Accessibility Template (VPAT) is the industry-standard ACR format. It's created by the IT Accessibility Testing Center and used by government agencies, enterprises, and courts.</p>

        <h3>Why Courts Care</h3>
        <ul>
            <li>Shows due diligence and good faith efforts</li>
            <li>Provides baseline for damages assessment</li>
            <li>Demonstrates testing methodology</li>
            <li>Shows timeline of remediation efforts</li>
            <li>Can reduce liability if remediation is documented</li>
        </ul>
    </section>

    <section id="vpat-basics">
        <h2>Understanding VPAT Structure</h2>
        <p>A VPAT typically includes:</p>

        <h3>1. Executive Summary</h3>
        <ul>
            <li>Product name and version</li>
            <li>Evaluation date</li>
            <li>Standards targeted (WCAG 2.1 Level AA, Section 508, etc.)</li>
            <li>Overall conformance statement</li>
        </ul>

        <h3>2. Detailed Audit Results</h3>
        <p>Each WCAG success criterion is listed with status:</p>
        <ul>
            <li><strong>Supports:</strong> Full compliance with no known issues</li>
            <li><strong>Partially Supports:</strong> Mostly compliant, but some minor issues</li>
            <li><strong>Does Not Support:</strong> Known failures or violations</li>
            <li><strong>Not Applicable:</strong> Criterion doesn't apply to this product</li>
        </ul>

        <h3>3. Remediation Plan</h3>
        <ul>
            <li>Issues identified</li>
            <li>Planned fixes</li>
            <li>Timeline for remediation</li>
            <li>Responsible parties</li>
        </ul>

        <h3>4. Methodology</h3>
        <ul>
            <li>Audit tools used (axe, WAVE, manual testing, etc.)</li>
            <li>Testing dates and timeframe</li>
            <li>Pages tested</li>
            <li>Screen readers tested with</li>
            <li>Testing environment details</li>
        </ul>
    </section>

    <section id="wcag-criteria">
        <h2>Understanding WCAG Success Criteria in VPATs</h2>
        <p>A VPAT lists all WCAG 2.1 success criteria. Here's how to read them:</p>

        <h3>Example Criterion: 1.1.1 Non-text Content (Level A)</h3>
        <div style="background: var(--bg-secondary); border-radius: 4px; font-family: monospace; font-size: 0.9rem; overflow: auto; overflow-x: auto; padding: 1rem" role="region" aria-label="Code example for Non-text Content criterion">
<pre>Criterion 1.1.1 Non-text Content (Level A)
Status: Supports
Remarks: All images have alt text. Decorative images have 
empty alt attributes. Icons have aria-labels.</pre>
        </div>

        <h3>Example Criterion: 2.4.3 Focus Order (Level A)</h3>
        <div style="background: var(--bg-secondary); border-radius: 4px; font-family: monospace; font-size: 0.9rem; overflow: auto; overflow-x: auto; padding: 1rem" role="region" aria-label="Code example for Focus Order criterion">
<pre>Criterion 2.4.3 Focus Order (Level A)
Status: Partially Supports
Remarks: Tab order is logical on most pages. Contact form 
has focus trap issue (Tab key gets stuck). Fix planned for 
Q4 2025.</pre>
        </div>

        <h3>Example Criterion: 2.1.2 No Keyboard Trap (Level A)</h3>
        <div style="background: var(--bg-secondary); border-radius: 4px; font-family: monospace; font-size: 0.9rem; overflow: auto; overflow-x: auto; padding: 1rem" role="region" aria-label="Code example for No Keyboard Trap criterion">
<pre>Criterion 2.1.2 No Keyboard Trap (Level A)
Status: Does Not Support
Remarks: Autocomplete dropdown can trap keyboard focus. 
Escape key does not close dropdown. Issue affects search 
functionality on all pages. Remediation timeline: 30 days.</pre>
        </div>

        <h3>Reading the Levels</h3>
        <ul>
            <li><strong>Level A:</strong> Foundational accessibility (must meet)</li>
            <li><strong>Level AA:</strong> Recommended for all websites</li>
            <li><strong>Level AAA:</strong> Enhanced accessibility (optional but preferred)</li>
        </ul>

        <p>If you claim WCAG 2.1 Level AA conformance, you must meet ALL Level A AND AA criteria. No "partial" compliance at AA level.</p>
    </section>

    <section id="creating-report">
        <h2>Creating Your Conformance Report</h2>

        <h3>Step 1: Determine Your Target Standard</h3>
        <p>Choose what you're going to comply with:</p>
        <ul>
            <li>WCAG 2.1 Level AA (industry standard)</li>
            <li>WCAG 2.1 Level AAA (more stringent)</li>
            <li>Section 508 (for government contracts)</li>
            <li>Multiple standards (increasingly common)</li>
        </ul>

        <h3>Step 2: Conduct a Thorough Audit</h3>
        <p>Use a combination of methods:</p>
        <ul>
            <li><strong>Automated tools:</strong> axe DevTools, WAVE, Lighthouse</li>
            <li><strong>Manual testing:</strong> Keyboard navigation, screen reader testing</li>
            <li><strong>Page selection:</strong> Test representative pages (homepage, forms, checkout, etc.)</li>
            <li><strong>Timeframe:</strong> Document the date range of testing</li>
        </ul>

        <h3>Step 3: Document Each Criterion</h3>
        <div style="background: var(--bg-secondary); border-radius: 4px; font-family: monospace; font-size: 0.9rem; overflow: auto; overflow-x: auto; padding: 1rem" role="region" aria-label="Code example for documenting WCAG criteria">
<pre>For each WCAG criterion:

Criterion: [1.1.1 Non-text Content]
Status: [Supports / Partially Supports / Does Not Support]
Testing Method: [Automated + Manual Inspection]
Remarks: [Detailed findings]
Remediation: [If applicable]
Timeline: [If applicable]</pre>
        </div>

        <h3>Step 4: Identify Non-Compliant Items</h3>
        <p>For each failure:</p>
        <ul>
            <li>Describe the issue in detail</li>
            <li>Explain how to reproduce it</li>
            <li>Reference the WCAG criterion it violates</li>
            <li>Provide a remediation plan</li>
            <li>Set a timeline for fixes</li>
        </ul>

        <h3>Step 5: Create Remediation Plan</h3>
        <div style="background: var(--bg-secondary); border-radius: 4px; font-family: monospace; font-size: 0.9rem; overflow: auto; overflow-x: auto; padding: 1rem" role="region" aria-label="Code example for remediation plan">
<pre>Issue: Form labels not properly associated with inputs
Criterion: 1.3.1 Info and Relationships (Level A)
Affected Pages: All pages with forms
Severity: High (impacts all users)
Remediation: Add proper label-for associations to all 
  form inputs
Timeline: 14 days from report date
Assigned To: Development team
Status: In Progress</pre>
        </div>

        <h3>Step 6: Get Professional Review</h3>
        <p>For high-stakes compliance, have an accessibility expert review your report:</p>
        <ul>
            <li>Ensures accuracy</li>
            <li>Increases credibility in legal proceedings</li>
            <li>Reduces liability</li>
            <li>Provides third-party validation</li>
        </ul>
    </section>

    <section id="legal-implications">
        <h2>Legal Implications of Conformance Reports</h2>

        <h3>In Litigation</h3>
        <p>When sued, the plaintiff's attorney will request:</p>
        <ul>
            <li>Any accessibility audits or conformance reports</li>
            <li>Testing methodologies used</li>
            <li>Timeline of known issues</li>
            <li>Remediation efforts documented</li>
        </ul>

        <h3>A Good Report Can Help Your Defense</h3>
        <ul>
            <li>Shows good faith accessibility efforts</li>
            <li>Demonstrates testing rigor</li>
            <li>Provides evidence of remediation timeline</li>
            <li>May reduce damages assessment</li>
            <li>Could support counterclaim of reasonable accommodation efforts</li>
        </ul>

        <h3>Lack of a Report Hurts Your Defense</h3>
        <ul>
            <li>Implies no accessibility effort</li>
            <li>Suggests negligence</li>
            <li>Can increase damages</li>
            <li>Shows you didn't test before launch</li>
            <li>Indicates ongoing violations not caught</li>
        </ul>

        <h3>Beware: Report Can Be Used Against You</h3>
        <p>A report that identifies known issues but doesn't fix them can be problematic:</p>
        <ul>
            <li>Shows you knew about the violations</li>
            <li>Demonstrates failure to remediate</li>
            <li>Can increase liability exposure</li>
            <li>May result in punitive damages</li>
        </ul>

        <p><strong>Best practice:</strong> Document issues, then fix them immediately. Update the report as fixes are completed.</p>
    </section>

    <section id="what-to-test">
        <h2>What Pages Should You Test?</h2>
        <p>You don't need to test every page—select representative samples:</p>

        <h3>Minimum Set (Small Site)</h3>
        <ul>
            <li>Homepage</li>
            <li>Contact form</li>
            <li>Login/registration</li>
            <li>Key conversion page</li>
        </ul>

        <h3>Comprehensive Set (Large Site)</h3>
        <ul>
            <li>Homepage</li>
            <li>Forms (contact, search, checkout)</li>
            <li>User account pages</li>
            <li>Content pages (blog posts, help docs)</li>
            <li>Product/service pages</li>
            <li>Footer and navigation</li>
        </ul>

        <h3>E-Commerce Specific</h3>
        <ul>
            <li>Homepage</li>
            <li>Product listing pages</li>
            <li>Product detail pages</li>
            <li>Shopping cart</li>
            <li>Checkout flow</li>
            <li>Order confirmation</li>
        </ul>

        <p>Document which pages you tested and why you selected them.</p>
    </section>

    <section id="tools-and-resources">
        <h2>Tools for Creating Reports</h2>

        <h3>Automated Testing Tools</h3>
        <ul>
            <li><strong>axe DevTools:</strong> Chrome/Firefox extension, generates detailed reports</li>
            <li><strong>WAVE:</strong> Browser extension, visual feedback on violations</li>
            <li><strong>Lighthouse:</strong> Built into Chrome DevTools, includes accessibility score</li>
            <li><strong>Deque's ATTEST:</strong> Paid platform for enterprise conformance reporting</li>
        </ul>

        <h3>Manual Testing Tools</h3>
        <ul>
            <li><strong>NVDA:</strong> Free screen reader for Windows</li>
            <li><strong>JAWS:</strong> Commercial screen reader</li>
            <li><strong>VoiceOver:</strong> Built into Mac/iOS</li>
        </ul>

        <h3>Report Templates</h3>
        <ul>
            <li><a href="https://www.itic.org/vpat">VPAT Template (Official)</a></li>
            <li><a href="https://www.w3.org/WAI/test-evaluate/">W3C Testing & Evaluation Resources</a></li>
            <li>Many accessibility firms offer custom report templates</li>
        </ul>
    </section>

    <section id="common-mistakes">
        <h2>Common Mistakes in Conformance Reports</h2>

        <h3>1. Over-Claiming Conformance</h3>
        <p>❌ Claiming full Level AA compliance when you haven't tested everything</p>
        <p>✅ Claim only what you've tested and verified</p>

        <h3>2. Vague Descriptions</h3>
        <p>❌ "Some images missing alt text"</p>
        <p>✅ "Homepage banner images lack descriptive alt text (5 instances found)"</p>

        <h3>3. No Remediation Plan</h3>
        <p>❌ Identifying issues without explaining how you'll fix them</p>
        <p>✅ Document specific fixes, responsible parties, and timelines</p>

        <h3>4. Testing Too Few Pages</h3>
        <p>❌ Only testing the homepage</p>
        <p>✅ Representative sample of all major content types</p>

        <h3>5. Outdated Reports</h3>
        <p>❌ Report from 2023, no updates for 2025</p>
        <p>✅ Annual reviews and updates as changes are made</p>

        <h3>6. No Methodology Documentation</h3>
        <p>❌ Report doesn't explain how it was created</p>
        <p>✅ Detail tools used, pages tested, testing dates, screen readers used</p>
    </section>

    <section id="takeaways">
        <h2>Key Takeaways</h2>
        <ul>
            <li>Conformance Reports (VPATs) are increasingly required in ADA litigation</li>
            <li>A good report demonstrates good faith accessibility efforts</li>
            <li>A report can reduce liability if you remediate identified issues</li>
            <li>Lack of a report implies negligence</li>
            <li>VPAT is the industry-standard ACR format</li>
            <li>Target WCAG 2.1 Level AA for most websites</li>
            <li>Test representative pages, not just the homepage</li>
            <li>Document methodology (tools, dates, screen readers used)</li>
            <li>Update reports annually and as fixes are completed</li>
            <li>Identify known issues and create remediation plans</li>
            <li>Professional review increases credibility</li>
            <li>Fixed issues should be documented as "resolved"</li>
        </ul>
    </section>

    <section id="resources">
        <h2>Resources</h2>
        <ul>
            <li><a href="https://www.itic.org/vpat">VPAT - Voluntary Product Accessibility Template</a></li>
            <li><a href="https://www.w3.org/TR/WCAG21/">WCAG 2.1 Official Guidelines</a></li>
            <li><a href="https://www.deque.com/">Deque - Accessibility Testing & Reporting</a></li>
            <li><a href="https://www.w3.org/WAI/test-evaluate/evaluation-tools/">W3C Evaluation Tools List</a></li>
            <li><a href="https://www.section508.gov/">Section 508 Government Accessibility Standards</a></li>
        </ul>
    </section>
</article>

<section style="margin-top: 3rem;">
    <div class="highlight">
        <h2 style="margin-top: 0;">Get a Professional Conformance Report</h2>
        <p>Expert accessibility audit with formal VPAT documentation for legal compliance and defense.</p>
        <button class="btn btn-primary" onclick="openPricingForm('deep-audit', 'Accessibility Conformance Report')">Get Audit Report →</button>
    </div>
</section>
HTML;

include __DIR__ . '/../../template.php';
?>
