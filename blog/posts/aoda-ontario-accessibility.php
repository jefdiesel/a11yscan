<?php
$pageTitle = 'AODA: Accessibility for Ontarians with Disabilities Act | A11yscan';
$pageDescription = 'Comprehensive guide to AODA web accessibility requirements, WCAG 2.0 AA standards, penalties, and compliance deadlines for Ontario businesses.';
$currentPage = 'blog';

$pageContent = <<<'HTML'
<article class="blog-post">
    <section id="intro">
        <time datetime="2025-10-26" style="font-size: 0.9rem; color: var(--text-secondary); font-weight: 500; display: block; margin-bottom: 0.5rem;">October 26, 2025</time>
        <h1 style="font-size: 2.5rem; font-weight: 700; line-height: 1.2; margin-bottom: 2rem;">AODA: Ontario's Web Accessibility Requirements and Compliance Guide</h1>
        
        <h2>Introduction</h2>
        <p>The Accessibility for Ontarians with Disabilities Act (AODA) is one of North America's first comprehensive accessibility laws. Passed in 2005 and progressively implemented since, the AODA requires all organizations serving the public in Ontario—including private businesses, non-profits, and government—to remove accessibility barriers and make digital content accessible.</p>
        <p>Unlike federal accessibility laws, the AODA is proactive and prescriptive, requiring ongoing accessibility improvements rather than only addressing complaints. Organizations can face penalties of up to $100,000 per day for non-compliance.</p>
    </section>

    <!-- LEGAL DISCLAIMER -->
    <section style="margin-top: 2rem; padding-top: 1.5rem; border-top: 2px solid var(--border);">
        <div style="background: var(--bg-tertiary); padding: 1.5rem; border-radius: 4px; border-left: 4px solid var(--accent-primary);">
            <h3 style="margin-top: 0; font-size: 1.1rem;">Legal Disclaimer</h3>
            <p style="font-size: 0.95rem; margin-bottom: 0;"><strong>A11yscan is not a law firm and does not provide legal advice.</strong> We operate under best practices based on WCAG Guidelines, ADA requirements, and applicable jurisdictions. Courts don't always agree on terms and expectations for web accessibility, and legal standards can vary by jurisdiction. However, an accessible website works better for all users regardless of legal requirements. For specific legal guidance, consult with a qualified attorney specializing in accessibility law.</p>
        </div>
    </section>

    <section id="what-is-aoda">
        <h2>What is AODA?</h2>
        <p>The Accessibility for Ontarians with Disabilities Act (AODA) is Ontario provincial legislation that mandates barrier removal in all sectors. It covers private businesses, non-profit organizations, public sector bodies, and public transportation systems.</p>
        
        <h3>Core Principle</h3>
        <p>The AODA requires organizations to treat accessibility as an ongoing responsibility, not a one-time project. All organizations must:</p>
        <ul>
            <li>Develop accessibility policies</li>
            <li>Create accessibility plans</li>
            <li>Report on progress annually</li>
            <li>Provide feedback mechanisms</li>
        </ul>
        
        <p>Official information: <a href="https://www.ontario.ca/laws/statute/05a11">Accessibility for Ontarians with Disabilities Act (Ontario e-Laws)</a></p>
    </section>

    <section id="technical-requirements">
        <h2>Technical Requirements: WCAG 2.0 Level AA</h2>
        <p>The AODA Information and Communication Standard requires web content meet WCAG 2.0 Level AA accessibility standards.</p>
        
        <h3>Current Requirements (as of 2025)</h3>
        <ul>
            <li>All new websites must be WCAG 2.0 AA compliant</li>
            <li>Existing websites must be remediated to WCAG 2.0 AA</li>
            <li>Web applications and digital tools must be accessible</li>
            <li>PDF documents must be tagged and accessible</li>
            <li>Video content must have captions and audio descriptions</li>
            <li>4.5:1 color contrast for text (minimum)</li>
            <li>Keyboard navigation throughout</li>
            <li>Screen reader compatibility</li>
        </ul>
        
        <h3>WCAG 2.0 AA Key Requirements</h3>
        <ul>
            <li>Perceivable: Content must be distinguishable from background</li>
            <li>Operable: All functionality keyboard accessible</li>
            <li>Understandable: Clear language and predictable navigation</li>
            <li>Robust: Compatible with assistive technologies</li>
        </ul>
        
        <p>Learn more: <a href="https://www.w3.org/WAI/WCAG20/quickref/">WCAG 2.0 Quick Reference</a></p>
    </section>

    <section id="scope-coverage">
        <h2>Scope and Coverage</h2>
        <p>The AODA applies broadly to organizations operating in Ontario that provide goods, services, or facilities to the public.</p>
        
        <h3>Who Must Comply</h3>
        <ul>
            <li>Private businesses (all sizes)</li>
            <li>Non-profit organizations</li>
            <li>Educational institutions</li>
            <li>Healthcare providers</li>
            <li>Government agencies</li>
            <li>Public transportation (Metrolinx, TTC, etc.)</li>
            <li>Any organization with 50+ employees</li>
        </ul>
        
        <h3>Limited Exemptions</h3>
        <ul>
            <li>Microenterprises (fewer than 50 employees) have extended timelines</li>
            <li>Some government services covered under different requirements</li>
            <li>Undue hardship provisions (rarely granted)</li>
        </ul>
        
        <p>Compliance requirements by organization size: <a href="https://www.ontario.ca/page/how-comply-aoda-information-and-communication-standard">Ontario AODA Compliance Guide</a></p>
    </section>

    <section id="compliance-timeline">
        <h2>Compliance Timeline and Deadlines</h2>
        <p>The AODA has progressive implementation deadlines that have largely passed, but ongoing compliance remains mandatory:</p>
        
        <h3>Completed Milestones</h3>
        <ul>
            <li><strong>January 1, 2012:</strong> All new websites must be WCAG 2.0 A compliant</li>
            <li><strong>January 1, 2014:</strong> All websites must be WCAG 2.0 AA compliant</li>
            <li><strong>January 1, 2015:</strong> Public websites fully accessible</li>
        </ul>
        
        <h3>Ongoing Requirements</h3>
        <ul>
            <li>All digital content must maintain WCAG 2.0 AA compliance</li>
            <li>New websites/content must be accessible from launch</li>
            <li>Accessibility statements required on websites</li>
            <li>Annual progress reporting mandatory</li>
            <li>Feedback mechanisms must be in place</li>
        </ul>
    </section>

    <section id="enforcement-penalties">
        <h2>Enforcement and Penalties</h2>
        <p>The AODA is enforced by the Ontario Human Rights Commission and the Accessibility Standards Development Council (now Service Ontario). Non-compliance carries significant penalties.</p>
        
        <h3>Potential Penalties</h3>
        <ul>
            <li>Daily fines up to $100,000 for individual violations</li>
            <li>Daily fines up to $100,000 for corporate violations</li>
            <li>Orders to remediate accessibility barriers</li>
            <li>Injunctions preventing business operations</li>
            <li>Public reporting of non-compliance</li>
        </ul>
        
        <h3>How Violations Are Enforced</h3>
        <ul>
            <li>Complaints filed with Ontario Human Rights Commission</li>
            <li>Ministry of Labour investigations</li>
            <li>Private civil lawsuits for damages</li>
            <li>Proactive compliance inspections (rare)</li>
        </ul>
        
        <p>Filing a complaint: <a href="https://www.ohrc.on.ca/">Ontario Human Rights Commission</a></p>
    </section>

    <section id="compliance-steps">
        <h2>Steps to Achieve AODA Compliance</h2>
        <p>Organizations operating in Ontario should implement a structured accessibility program:</p>
        
        <h3>Phase 1: Assessment</h3>
        <ul>
            <li>Audit all websites and digital content against WCAG 2.0 AA</li>
            <li>Identify accessibility barriers</li>
            <li>Assess organizational capacity</li>
            <li>Set realistic remediation timeline</li>
        </ul>
        
        <h3>Phase 2: Planning</h3>
        <ul>
            <li>Develop accessibility policy</li>
            <li>Create multi-year accessibility plan</li>
            <li>Allocate resources and budget</li>
            <li>Assign accessibility coordinator</li>
            <li>Publish accessibility statement</li>
        </ul>
        
        <h3>Phase 3: Remediation</h3>
        <ul>
            <li>Fix identified accessibility issues</li>
            <li>Train staff on accessibility</li>
            <li>Update procurement policies</li>
            <li>Establish feedback mechanisms</li>
        </ul>
        
        <h3>Phase 4: Ongoing Compliance</h3>
        <ul>
            <li>Maintain accessibility in new content</li>
            <li>Regular accessibility audits</li>
            <li>Respond to accessibility feedback</li>
            <li>Annual reporting and updates</li>
        </ul>
        
        <p>AODA implementation resources: <a href="https://www.ontario.ca/page/how-comply-aoda-information-and-communication-standard">Ontario AODA Standards</a></p>
    </section>

    <section id="key-takeaways">
        <h2>Key Takeaways</h2>
        <ul>
            <li>AODA applies to all organizations in Ontario serving the public</li>
            <li>WCAG 2.0 Level AA is the mandatory standard</li>
            <li>Compliance deadlines largely passed; ongoing compliance now required</li>
            <li>Penalties can reach $100,000 per day per violation</li>
            <li>Accessibility must be integrated into organizational planning</li>
            <li>Annual reporting and feedback mechanisms required</li>
            <li>Accessible websites serve all users better</li>
        </ul>
    </section>

    <section id="resources">
        <h2>Resources</h2>
        <ul>
            <li><a href="https://www.ontario.ca/laws/statute/05a11">AODA Legislation (Ontario e-Laws)</a></li>
            <li><a href="https://www.ontario.ca/page/how-comply-aoda-information-and-communication-standard">AODA Information and Communication Standards</a></li>
            <li><a href="https://www.w3.org/WAI/WCAG20/quickref/">WCAG 2.0 Quick Reference</a></li>
            <li><a href="https://www.ohrc.on.ca/">Ontario Human Rights Commission</a></li>
            <li><a href="https://www.ontario.ca/page/aoda-2025-goal">Ontario AODA 2025 Accessibility Goal</a></li>
        </ul>
    </section>
</article>

<!-- LEGAL DISCLAIMER (mandatory) -->


<!-- CUSTOMIZED CTA -->
<section style="margin-top: 3rem;">
    <div class="highlight">
        <h2 style="margin-top: 0;">AODA Compliance Check</h2>
        <p>Verify your Ontario organization meets WCAG 2.0 AA requirements and avoids penalties.</p>
        <button class="btn btn-primary" onclick="openPricingForm('partial-audit', 'AODA Accessibility Assessment')">Check Compliance</button>
    </div>
</section>
HTML;

include 'template.php';
?>
