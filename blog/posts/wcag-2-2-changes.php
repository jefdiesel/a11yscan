<?php
$pageTitle = 'WCAG 2.1 vs 2.2: What Changed and Why It Matters for Your Compliance | A11yscan';
$pageDescription = 'WCAG 2.2 introduces new accessibility requirements. Learn what changed from WCAG 2.1, what you need to do now, and timeline implications.';
$currentPage = 'blog';
$pageContent = <<<'HTML'
<article class="blog-post">
    <section class="post-header">
        <time datetime="2025-10-24">October 24, 2025</time>
        <h1>WCAG 2.1 vs 2.2: What Changed and Why It Matters for Your Compliance</h1>
    </section>

    <section id="intro">
        <p>In October 2023, the Web Content Accessibility Guidelines (WCAG) 2.2 became an official W3C recommendation. For the first time in 5 years, the accessibility standards have been updated with new requirements.</p>
        <p>If you've built your website to WCAG 2.1 standards, you have established a good accessibility foundation. However, WCAG 2.2 adds new requirements that organizations should consider addressing to maintain current accessibility best practices.</p>
        <p>This guide breaks down what changed, what matters, and what you need to consider for your accessibility strategy.</p>
    </section>

    <section id="wcag-history">
        <h2>Brief History: Why WCAG Keeps Evolving</h2>
        <p>Web accessibility standards evolve as technology changes and our understanding of disability improves.</p>
        <ul>
            <li><strong>WCAG 1.0 (1999):</strong> First official guidelines. Very desktop-focused. Outdated now.</li>
            <li><strong>WCAG 2.0 (2008):</strong> Major rewrite. Technology-neutral principles. Still used widely.</li>
            <li><strong>WCAG 2.1 (2018):</strong> Added mobile accessibility, low-vision design, cognitive considerations. This is what most companies target today.</li>
            <li><strong>WCAG 2.2 (2023):</strong> NEW. Focuses on target sizing, persistent user controls, and improved cognitive accessibility. This is emerging as a new standard.</li>
        </ul>
        <p><strong>Legal reality:</strong> The ADA doesn't specify which WCAG version organizations must follow. However, accessibility professionals and legal observers often reference WCAG 2.1 Level AA as a reasonable standard. As WCAG 2.2 becomes more established, it may increasingly be recognized as current best practice.</p>
        <p>The question isn't "must we adopt WCAG 2.2?" It's "when should we start planning for it?"</p>
    </section>

    <section id="whats-new">
        <h2>What's New in WCAG 2.2: The 9 New Success Criteria</h2>
        <p>WCAG 2.2 adds 9 new success criteria (accessibility requirements). Here are the ones that will likely impact your website:</p>
        
        <h3>1. Target Size (Level AAA) - 2.5.8</h3>
        <ul>
            <li><strong>What it means:</strong> Clickable targets (buttons, links, form fields) must be at least 24×24 CSS pixels, with exceptions for inline links and targets next to other targets.</li>
            <li><strong>Why it matters:</strong> Affects users with motor disabilities, tremors, or anyone on a mobile device. This is the most impactful new requirement.</li>
            <li><strong>Your action:</strong> Audit your buttons and links. Many sites use 18-20px targets. You'll need to expand them to 24px or document exemptions.</li>
            <li><strong>Implementation difficulty:</strong> Medium. May require redesign of compact layouts.</li>
        </ul>
        
        <h3>2. Dragging (Level AAA) - 2.5.7</h3>
        <ul>
            <li><strong>What it means:</strong> If your site uses drag-and-drop interactions (reordering lists, moving files), provide keyboard-accessible alternatives.</li>
            <li><strong>Why it matters:</strong> Keyboard users and switch control users can't use drag-and-drop alone.</li>
            <li><strong>Your action:</strong> If you have drag-and-drop, add buttons or keyboard shortcuts (e.g., "Move Up," "Move Down").</li>
            <li><strong>Implementation difficulty:</strong> Low to Medium. Most modern frameworks support this.</li>
        </ul>
        
        <h3>3. Consistent Help (Level A) - 3.2.6</h3>
        <ul>
            <li><strong>What it means:</strong> Navigation, search, and other persistent UI controls (that appear on multiple pages) must appear in the same relative order each time.</li>
            <li><strong>Why it matters:</strong> Users with cognitive disabilities rely on consistency. Randomized layouts are confusing.</li>
            <li><strong>Your action:</strong> Make sure your navigation, search box, and other repeated elements are in the same place on every page. No randomization.</li>
            <li><strong>Implementation difficulty:</strong> Very Low. Most sites already do this.</li>
        </ul>
        
        <h3>4. Focus Not Obscured (Level AA) - 2.4.11</h3>
        <ul>
            <li><strong>What it means:</strong> When keyboard users tab through your site, focus indicators must be visible (not hidden or covered by other elements).</li>
            <li><strong>Why it matters:</strong> Keyboard users rely on seeing where they are on the page.</li>
            <li><strong>Your action:</strong> Check that your focus indicators aren't hidden behind sticky headers or other elements. Don't use `outline: none` without providing an alternative visual indicator.</li>
            <li><strong>Implementation difficulty:</strong> Very Low. Usually CSS only.</li>
        </ul>
        
        <h3>5. Focus Appearance (Level AAA) - 2.4.13</h3>
        <ul>
            <li><strong>What it means:</strong> Focus indicators must meet specific design criteria: 2px minimum thickness, sufficient contrast, etc.</li>
            <li><strong>Why it matters:</strong> This is a more rigorous version of visible focus indicators. The focus indicator itself must be well-designed.</li>
            <li><strong>Your action:</strong> Review your focus indicators. If they're thin, low-contrast lines, upgrade them to at least 2px thick with high contrast.</li>
            <li><strong>Implementation difficulty:</strong> Very Low to Low. CSS refinement.</li>
        </ul>
        
        <h3>6. Accessible Authentication (Level AA) - 3.3.8</h3>
        <ul>
            <li><strong>What it means:</strong> Authentication mechanisms should not rely solely on cognitive function tests. Provide alternatives to CAPTCHAs or memory-based authentication.</li>
            <li><strong>Why it matters:</strong> Users with cognitive disabilities may struggle with traditional CAPTCHAs.</li>
            <li><strong>Your action:</strong> If you use CAPTCHAs, provide alternatives like email verification or authentication apps.</li>
            <li><strong>Implementation difficulty:</strong> Medium. Depends on current authentication approach.</li>
        </ul>
        
        <h3>Other New Criteria (Lower Impact):</h3>
        <ul>
            <li><strong>Redundant Entry (Level A) - 3.3.7:</strong> If users enter information previously provided, don't make them re-enter it.</li>
            <li><strong>Accessible Authentication (Minimum) (Level A) - 3.3.8:</strong> Basic authentication accessibility requirements.</li>
            <li><strong>Accessible Authentication (Enhanced) (Level AAA) - 3.3.9:</strong> Enhanced authentication accessibility requirements.</li>
        </ul>
    </section>

    <section id="impact-by-site-type">
        <h2>Impact by Site Type: What This Means for You</h2>
        
        <h3>E-Commerce Sites</h3>
        <ul>
            <li><strong>Most affected by:</strong> Target size (24×24 buttons), persistent checkout flow</li>
            <li><strong>Action required:</strong> Audit checkout buttons, review cart controls, ensure consistent checkout flow</li>
            <li><strong>Estimated effort:</strong> 20-40 hours</li>
        </ul>
        
        <h3>SaaS / Admin Dashboards</h3>
        <ul>
            <li><strong>Most affected by:</strong> Drag-and-drop alternatives, target size for data table controls, focus appearance</li>
            <li><strong>Action required:</strong> Add keyboard alternatives to drag-and-drop, audit button/icon sizes, verify focus indicators</li>
            <li><strong>Estimated effort:</strong> 40-80 hours</li>
        </ul>
        
        <h3>Content / Blog Sites</h3>
        <ul>
            <li><strong>Most affected by:</strong> Persistent navigation order, focus appearance</li>
            <li><strong>Action required:</strong> Ensure navigation is consistent across pages, audit focus indicators</li>
            <li><strong>Estimated effort:</strong> 5-15 hours</li>
        </ul>
        
        <h3>Government / Healthcare Sites</h3>
        <ul>
            <li><strong>Most affected by:</strong> ALL of the above. Government and healthcare sites often have higher accessibility expectations.</li>
            <li><strong>Action required:</strong> Complete WCAG 2.2 Level AA audit and remediation</li>
            <li><strong>Estimated effort:</strong> 100-200+ hours depending on site size</li>
        </ul>
    </section>

    <section id="compliance-timeline">
        <h2>When Should You Consider WCAG 2.2?</h2>
        <p>There's no immediate federal mandate requiring WCAG 2.2. However, momentum is building toward recognizing it as current best practice.</p>
        
        <h3>What's already happened:</h3>
        <ul>
            <li>Accessibility professionals increasingly reference WCAG 2.2 as the current standard</li>
            <li>Some accessibility audits and lawsuits have begun citing WCAG 2.2 criteria</li>
            <li>Several states are reviewing their accessibility standards</li>
            <li>Federal contractors and healthcare organizations are evaluating adoption timelines</li>
        </ul>
        
        <h3>Realistic timeline considerations:</h3>
        <ul>
            <li><strong>2025-2026:</strong> WCAG 2.2 Level AA may increasingly be recognized as current best practice</li>
            <li><strong>2026-2027:</strong> WCAG 2.2 Level AA may become commonly referenced in accessibility discussions</li>
            <li><strong>2027-2028:</strong> Federal standards updates may formalize WCAG 2.2 references</li>
        </ul>
        
        <h3>Strategic approach:</h3>
        <ul>
            <li>If your site is not yet compliant: Consider targeting WCAG 2.2 Level AA</li>
            <li>If your site is WCAG 2.1 compliant: Plan a WCAG 2.2 evaluation over the next 2 years</li>
            <li>If you're starting a new site: Consider building for WCAG 2.2 from day one</li>
        </ul>
    </section>

    <section id="wcag-21-still-relevant">
        <h2>Is WCAG 2.1 Still Valid?</h2>
        <p>You might wonder: "We're WCAG 2.1 compliant. Is that still acceptable?"</p>
        <p><strong>Yes, for now.</strong></p>
        <p>WCAG 2.1 is still a valid, respected standard. Compliance with WCAG 2.1 Level AA represents a solid accessibility foundation. Most accessible websites currently target WCAG 2.1.</p>
        <p><strong>However:</strong> As WCAG 2.2 becomes more established, accessibility professionals and organizations may increasingly reference it as current best practice.</p>
        
        <h3>Strategic approach:</h3>
        <ul>
            <li>If your site is not yet compliant: Consider targeting WCAG 2.2 Level AA instead of 2.1</li>
            <li>If your site is WCAG 2.1 compliant: Plan a WCAG 2.2 evaluation over the next 2 years</li>
            <li>If you're starting a new site: Consider building for WCAG 2.2 from day one</li>
        </ul>
    </section>

    <section id="major-changes-summary">
        <h2>Quick Reference: Major Changes for Your Team</h2>
        <ul>
            <li><strong>Target sizes matter more:</strong> 24×24 CSS pixels minimum (enhanced from previous recommendations)</li>
            <li><strong>Focus indicators must be visible:</strong> No hiding or low-contrast outlines</li>
            <li><strong>Drag-and-drop needs keyboard alternatives:</strong> Must support keyboard input</li>
            <li><strong>Consistent navigation:</strong> UI controls must appear in the same order on all pages</li>
            <li><strong>Authentication accessibility:</strong> Provide alternatives to cognitive tests like CAPTCHAs</li>
        </ul>
    </section>

    <section id="action-plan">
        <h2>Your WCAG 2.2 Evaluation Plan</h2>
        
        <h3>Month 1: Assessment</h3>
        <ul>
            <li>Run a WCAG 2.2 accessibility audit</li>
            <li>Document specific gaps and remediation effort</li>
            <li>Identify high-priority issues (target size, focus visibility, drag-and-drop)</li>
        </ul>
        
        <h3>Months 2-3: Planning</h3>
        <ul>
            <li>Create a remediation roadmap</li>
            <li>Estimate effort and budget</li>
            <li>Decide: New build with WCAG 2.2 vs. retrofitting existing site</li>
        </ul>
        
        <h3>Months 4-5: Development</h3>
        <ul>
            <li>Address high-priority issues (target size, focus appearance)</li>
            <li>Add keyboard alternatives for complex interactions</li>
            <li>Test thoroughly with assistive technology</li>
        </ul>
        
        <h3>Month 6: Verification</h3>
        <ul>
            <li>Get an independent WCAG 2.2 audit to verify compliance</li>
            <li>Document compliance efforts</li>
            <li>Update your accessibility statement</li>
        </ul>
    </section>

    <section id="resources">
        <h2>Resources</h2>
        <ul>
            <li><a href="https://www.w3.org/WAI/WCAG22/quickref/">WCAG 2.2 Quick Reference</a></li>
            <li><a href="https://www.w3.org/WAI/WCAG22/Understanding/">Understanding WCAG 2.2</a></li>
            <li><a href="https://www.w3.org/WAI/WCAG22/Techniques/">WCAG 2.2 Techniques</a></li>
            <li><a href="https://webaim.org/">WebAIM (accessibility learning resource)</a></li>
            <li><a href="https://www.a11yproject.com/">The A11y Project</a></li>
        </ul>
    </section>

    <!-- LEGAL DISCLAIMER (mandatory) -->
    <section style="margin-top: 3rem; padding-top: 2rem; border-top: 2px solid var(--border);">
        <div style="background: var(--bg-tertiary); padding: 1.5rem; border-radius: 4px; border-left: 4px solid var(--accent-primary);">
            <h3 style="margin-top: 0; font-size: 1.1rem;">Legal Disclaimer</h3>
            <p style="font-size: 0.95rem; margin-bottom: 0;"><strong>A11yscan is not a law firm and does not provide legal advice.</strong> We operate under best practices based on WCAG Guidelines, ADA requirements, and applicable jurisdictions. Courts don't always agree on terms and expectations for web accessibility, and legal standards can vary by jurisdiction. However, an accessible website works better for all users regardless of legal requirements. For specific legal guidance, consult with a qualified attorney specializing in accessibility law.</p>
        </div>
    </section>

    <!-- CUSTOMIZED CTA -->
    <section style="margin-top: 3rem;">
        <div class="highlight">
            <h2 style="margin-top: 0;">Is Your Site Ready for WCAG 2.2?</h2>
            <p>Find out which WCAG 2.2 requirements your site addresses and what you may want to consider updating. Get a detailed roadmap for enhanced accessibility.</p>
            <button class="btn btn-primary" onclick="openPricingForm('deep-audit', 'WCAG 2.2 Compliance Audit')">Audit for WCAG 2.2</button>
        </div>
    </section>
</article>
HTML;
include '../../template.php';
?>
