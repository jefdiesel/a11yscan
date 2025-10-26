<?php
$pageTitle = 'European Accessibility Act (EAA): EU Digital Accessibility Requirements | A11yscan';
$pageDescription = 'Complete guide to the European Accessibility Act, WCAG 2.1 AA requirements, EN 301 549 standard, and June 28 2025 compliance deadline.';
$currentPage = 'blog';

$pageContent = <<<'HTML'
<article class="blog-post">
    <section id="intro">
        <time datetime="2025-10-26" style="font-size: 0.9rem; color: var(--text-secondary); font-weight: 500; display: block; margin-bottom: 0.5rem;">October 26, 2025</time>
        <h1 style="font-size: 2.5rem; font-weight: 700; line-height: 1.2; margin-bottom: 2rem;">European Accessibility Act (EAA): Understanding EU Digital Accessibility Requirements</h1>
        
        <h2>Introduction</h2>
        <p>The European Accessibility Act (EAA) represents the most comprehensive accessibility legislation in the world. Adopted in 2019 and enforced starting June 28, 2025, the EAA mandates that digital products and services sold or provided in the EU meet strict accessibility standards.</p>
        <p>Unlike voluntary guidelines, the EAA is legally binding across all 27 EU member states plus Norway, Iceland, and Liechtenstein. Organizations that fail to comply face significant fines and market restrictions.</p>
    </section>

    <!-- LEGAL DISCLAIMER -->
    <section style="margin-top: 2rem; padding-top: 1.5rem; border-top: 2px solid var(--border);">
        <div style="background: var(--bg-tertiary); padding: 1.5rem; border-radius: 4px; border-left: 4px solid var(--accent-primary);">
            <h3 style="margin-top: 0; font-size: 1.1rem;">Legal Disclaimer</h3>
            <p style="font-size: 0.95rem; margin-bottom: 0;"><strong>A11yscan is not a law firm and does not provide legal advice.</strong> We operate under best practices based on WCAG Guidelines, ADA requirements, and applicable jurisdictions. Courts don't always agree on terms and expectations for web accessibility, and legal standards can vary by jurisdiction. However, an accessible website works better for all users regardless of legal requirements. For specific legal guidance, consult with a qualified attorney specializing in accessibility law.</p>
        </div>
    </section>

    <section id="what-is-eaa">
        <h2>What is the European Accessibility Act?</h2>
        <p>The EAA is a directive that harmonizes accessibility requirements across Europe. It establishes mandatory accessibility standards for digital products and services, including websites and mobile applications.</p>
        
        <h3>Key Features</h3>
        <ul>
            <li>Applies to all EU member states and EEA countries</li>
            <li>Mandatory compliance date: June 28, 2025</li>
            <li>Covers both B2B and B2C digital products</li>
            <li>Includes websites, apps, and digital services</li>
            <li>Enforced at national level by member states</li>
        </ul>
        
        <p>Official information: <a href="https://ec.europa.eu/social/main.jsp?catId=1202">EU European Accessibility Act page</a></p>
    </section>

    <section id="technical-standards">
        <h2>Technical Standards: WCAG 2.1 AA + EN 301 549</h2>
        <p>The EAA mandates compliance with two related standards working together:</p>
        
        <h3>WCAG 2.1 Level AA</h3>
        <p>The Web Content Accessibility Guidelines Level AA requires:</p>
        <ul>
            <li>4.5:1 color contrast for normal text</li>
            <li>3:1 contrast for large text (18pt+)</li>
            <li>Keyboard accessible navigation</li>
            <li>Alt text for all images</li>
            <li>Captions and transcripts for multimedia</li>
            <li>Proper heading hierarchy and structure</li>
            <li>Form labels and error messages</li>
            <li>Page resizable to 200% without functionality loss</li>
        </ul>
        
        <h3>EN 301 549 Standard</h3>
        <p>The European standard EN 301 549 goes beyond WCAG 2.1 AA and adds requirements for:</p>
        <ul>
            <li>Document accessibility (PDF, Office files)</li>
            <li>Real-time communication accessibility</li>
            <li>Non-web applications and operating systems</li>
            <li>Mobile app accessibility (both iOS and Android)</li>
            <li>Electronic documentation</li>
        </ul>
        
        <p>Technical specifications: <a href="https://www.etsi.org/deliver/etsi_en/301500_301599/301549/03.02.01_60/en_301549v030201p.pdf">ETSI EN 301 549 Standard (PDF)</a></p>
    </section>

    <section id="scope-coverage">
        <h2>Scope and Coverage</h2>
        <p>The EAA applies to organizations of all sizes providing digital products or services in the EU market.</p>
        
        <h3>What's Covered</h3>
        <ul>
            <li>Websites and web applications</li>
            <li>Mobile applications (iOS, Android)</li>
            <li>Desktop software and operating systems</li>
            <li>e-Books and digital documents</li>
            <li>Video players and multimedia platforms</li>
            <li>Digital ticketing and payment systems</li>
            <li>Online shopping platforms</li>
            <li>Real-time communication tools (video conferencing, chat)</li>
        </ul>
        
        <h3>Limited Exemptions</h3>
        <p>The following are generally exempt:</p>
        <ul>
            <li>Websites and apps of public sector bodies (covered by different rules)</li>
            <li>Content from third parties not under service provider control</li>
            <li>Legacy systems (before market placement June 28, 2025)</li>
            <li>Significantly disproportionate burden (narrow interpretation)</li>
        </ul>
    </section>

    <section id="compliance-deadline">
        <h2>Compliance Timeline and Deadlines</h2>
        <p>The EAA enforcement date is June 28, 2025—which means organizations must ensure compliance now or face penalties.</p>
        
        <h3>Key Dates</h3>
        <ul>
            <li><strong>June 28, 2025:</strong> EAA enforcement begins</li>
            <li><strong>Before June 28:</strong> Organizations must audit and remediate</li>
            <li><strong>After June 28:</strong> Non-compliance results in enforcement action</li>
        </ul>
        
        <p>Each EU member state has designated national enforcement bodies. Learn which authority covers your country at <a href="https://ec.europa.eu/growth/tools-databases/nando/">NANDO Database</a>.</p>
    </section>

    <section id="enforcement-penalties">
        <h2>Enforcement and Penalties</h2>
        <p>The EAA is enforced at the national level, with each member state establishing penalties for non-compliance. Penalties vary but are generally substantial:</p>
        
        <h3>Typical Enforcement Actions</h3>
        <ul>
            <li>Administrative fines (€1,000 to €10,000+ depending on country)</li>
            <li>Mandatory remediation orders</li>
            <li>Market bans or product withdrawal</li>
            <li>Consumer compensation claims</li>
            <li>Reputational damage and loss of customers</li>
        </ul>
        
        <h3>National Enforcement Bodies</h3>
        <p>Major countries' enforcement authorities:</p>
        <ul>
            <li><strong>Germany:</strong> Federal Office for Information Security (BSI)</li>
            <li><strong>France:</strong> French Data Protection Authority (CNIL)</li>
            <li><strong>UK:</strong> Equality and Human Rights Commission (post-Brexit)</li>
            <li><strong>Italy:</strong> Ministry of Disability</li>
            <li><strong>Spain:</strong> Secretaría de Estado de Igualdad</li>
        </ul>
    </section>

    <section id="compliance-steps">
        <h2>Steps to Achieve EAA Compliance</h2>
        <p>Organizations should take immediate action to prepare for the June 28, 2025 deadline.</p>
        
        <h3>Phase 1: Assessment (Now)</h3>
        <ul>
            <li>Audit all digital products against WCAG 2.1 AA and EN 301 549</li>
            <li>Identify accessibility barriers by product</li>
            <li>Prioritize remediation efforts</li>
            <li>Engage accessibility consultants if needed</li>
        </ul>
        
        <h3>Phase 2: Remediation (By June 2025)</h3>
        <ul>
            <li>Fix identified accessibility barriers</li>
            <li>Update documentation and accessibility statements</li>
            <li>Train development and QA teams</li>
            <li>Establish accessibility governance</li>
        </ul>
        
        <h3>Phase 3: Verification (Before June 28)</h3>
        <ul>
            <li>Conduct final accessibility testing</li>
            <li>Generate compliance documentation</li>
            <li>Publish accessibility statements</li>
            <li>Establish complaint handling procedures</li>
        </ul>
        
        <p>EU guidance on implementation: <a href="https://ec.europa.eu/social/main.jsp?catId=1202">European Accessibility Act Implementation Guidance</a></p>
    </section>

    <section id="key-takeaways">
        <h2>Key Takeaways</h2>
        <ul>
            <li>The EAA applies to all digital products and services in EU markets</li>
            <li>Compliance is mandatory starting June 28, 2025</li>
            <li>WCAG 2.1 AA and EN 301 549 are the technical standards</li>
            <li>Non-compliance results in significant fines and enforcement action</li>
            <li>Organizations should begin audits and remediation immediately</li>
            <li>Accessibility compliance improves user experience for everyone</li>
        </ul>
    </section>

    <section id="resources">
        <h2>Resources</h2>
        <ul>
            <li><a href="https://ec.europa.eu/social/main.jsp?catId=1202">European Accessibility Act Official Page</a></li>
            <li><a href="https://www.etsi.org/deliver/etsi_en/301500_301599/301549/03.02.01_60/en_301549v030201p.pdf">EN 301 549 Technical Standard</a></li>
            <li><a href="https://www.w3.org/WAI/WCAG21/quickref/">WCAG 2.1 Quick Reference</a></li>
            <li><a href="https://ec.europa.eu/growth/tools-databases/nando/">NANDO - Enforcement Bodies Database</a></li>
            <li><a href="https://www.w3.org/WAI/">W3C Web Accessibility Initiative</a></li>
        </ul>
    </section>
</article>

<!-- LEGAL DISCLAIMER (mandatory) -->


<!-- CUSTOMIZED CTA -->
<section style="margin-top: 3rem;">
    <div class="highlight">
        <h2 style="margin-top: 0;">EAA Compliance Audit</h2>
        <p>Ensure your digital products meet June 28, 2025 deadline and EN 301 549 requirements.</p>
        <button class="btn btn-primary" onclick="openPricingForm('deep-audit', 'European Accessibility Act Compliance')">Get Audit Report</button>
    </div>
</section>
HTML;

include 'template.php';
?>
