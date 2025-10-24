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
        <p>In October 2023, the Web Content Accessibility Guidelines (WCAG) 2.2 became an official W3C recommendation. For the first time in 5 years, the accessibility standards you need to meet have changed.</p>
        <p>If you've built your website to WCAG 2.1 standards, you might think you're fine. You're not fully prepared. WCAG 2.2 adds new requirements that could expose your site to litigation risk if not addressed.</p>
        <p>This guide breaks down what changed, what matters, and what you need to do right now.</p>
    </section>

    <section id="wcag-history">
        <h2>Brief History: Why WCAG Keeps Changing</h2>
        <p>Web accessibility standards evolve as technology changes and our understanding of disability improves.</p>
        <ul>
            <li><strong>WCAG 1.0 (1999):</strong> First official guidelines. Very desktop-focused. Outdated now.</li>
            <li><strong>WCAG 2.0 (2008):</strong> Major rewrite. Technology-neutral principles. Still used widely.</li>
            <li><strong>WCAG 2.1 (2018):</strong> Added mobile accessibility, low-vision design, cognitive considerations. This is what most companies target today.</li>
            <li><strong>WCAG 2.2 (2023):</strong> NEW. Focuses on target sizing, persistent user controls, and improved cognitive accessibility. This is becoming the legal standard.</li>
        </ul>
        <p><strong>Legal reality:</strong> The ADA doesn't specify which WCAG version you must follow. But courts have cited WCAG 2.1 Level AA as a reasonable standard. As WCAG 2.2 becomes more established, courts will expect it. Plaintiffs' lawyers will demand it.</p>
        <p>The question isn't "should we adopt WCAG 2.2?" It's "when should we start planning for it?"</p>
    </section>

    <section id="whats-new">
        <h2>What's New in WCAG 2.2: The 9 New Success Criteria</h2>
        <p>WCAG 2.2 adds 9 new success criteria (accessibility requirements). Here are the ones that will actually impact your website:</p>
        <p><strong>1. Target Size (Level AAA) - 2.5.8</strong></p>
        <ul>
            <li><strong>What it means:</strong> Clickable targets (buttons, links, form fields) must be at least 24×24 CSS pixels, with exceptions for inline links and targets next to other targets.</li>
            <li><strong>Why it matters:</strong> Affects users with motor disabilities, tremors, or anyone on a mobile device. This is the most impactful new requirement.</li>
            <li><strong>Your action:</strong> Audit your buttons and links. Many sites use 18-20px targets. You'll need to expand them to 24px or document exemptions.</li>
            <li><strong>Implementation difficulty:</strong> Medium. May require redesign of compact layouts.</li>
        </ul>
        <p><strong>2. Dragging (Level AAA) - 2.5.7</strong></p>
        <ul>
            <li><strong>What it means:</strong> If your site uses drag-and-drop interactions (reordering lists, moving files), provide keyboard-accessible alternatives.</li>
            <li><strong>Why it matters:</strong> Keyboard users and switch control users can't use drag-and-drop alone.</li>
            <li><strong>Your action:</strong> If you have drag-and-drop, add buttons or keyboard shortcuts (e.g., "Move Up," "Move Down").</li>
            <li><strong>Implementation difficulty:</strong> Low to Medium. Most modern frameworks support this.</li>
        </ul>
        <p><strong>3. Persistent Controls (Level A) - 2.4.13</strong></p>
        <ul>
            <li><strong>What it means:</strong> Navigation, search, and other persistent UI controls (that appear on multiple pages) must appear in the same relative order each time.</li>
            <li><strong>Why it matters:</strong> Users with cognitive disabilities rely on consistency. Randomized layouts are confusing.</li>
            <li><strong>Your action:</strong> Make sure your navigation, search box, and other repeated elements are in the same place on every page. No randomization.</li>
            <li><strong>Implementation difficulty:</strong> Very Low. Most sites already do this.</li>
        </ul>
        <p><strong>4. Focus Visible (Level AA) - 2.4.7 (Enhanced from 2.1)</strong></p>
        <ul>
            <li><strong>What it means:</strong> When keyboard users tab through your site, focus indicators must be visible (not hidden or too faint).</li>
            <li><strong>Why it matters:</strong> Keyboard users rely on seeing where they are on the page.</li>
            <li><strong>Your action:</strong> Check that your focus indicators are visible. Don't use `outline: none` without providing an alternative visual indicator.</li>
            <li><strong>Implementation difficulty:</strong> Very Low. Usually CSS only.</li>
        </ul>
        <p><strong>5. Focus Appearance (Level AAA) - 2.4.12</strong></p>
        <ul>
            <li><strong>What it means:</strong> Focus indicators must meet specific design criteria: 2px minimum thickness, sufficient contrast, etc.</li>
            <li><strong>Why it matters:</strong> This is a more rigorous version of "Focus Visible." The focus indicator itself must be well-designed.</li>
            <li><strong>Your action:</strong> Review your focus indicators. If they're thin, low-contrast lines, upgrade them to at least 2px thick with high contrast.</li>
            <li><strong>Implementation difficulty:</strong> Very Low to Low. CSS refinement.</li>
        </ul>
        <p><strong>6. Label in Name (Level A) - 2.5.3 (Strengthened from 2.1)</strong></p>
        <ul>
            <li><strong>What it means:</strong> If a button or link has a visual label (like "Submit"), the accessible name must match that label (or at least start with it).</li>
            <li><strong>Why it matters:</strong> Voice control users rely on saying the visible text to activate buttons. If the accessible name is different, voice control fails.</li>
            <li><strong><strong>Your action:</strong> Audit buttons/links. If you have visually hidden text that doesn't match the visible label, fix it.</li>
            <li><strong>Implementation difficulty:</strong> Low. Usually just updating alt text or aria-label.</li>
        </ul>
        <p><strong>Other New Criteria (Lower Impact):</strong></p>
        <ul>
            <li><strong>Accessible Authentication (Level AA) - 2.1.1 (Strengthened):</strong> Authentication mechanisms must not rely on cognitive function tests (e.g., CAPTCHA). Must have alternatives.</li>
            <li><strong>Redundant Entry (Level A) - 3.3.7:</strong> If users enter information previously provided, don't make them re-enter it.</li>
            <li><strong>Hidden with CSS (Level A) - 4.1.2 (Clarification):</strong> Content hidden with CSS should still have appropriate accessible names.</li>
        </ul>
    </section>

    <section id="impact-by-site-type">
        <h2>Impact by Site Type: What This Means for You</h2>
        <p><strong>E-Commerce Sites</strong></p>
        <ul>
            <li><strong>Most affected by:</strong> Target size (24×24 buttons), persistent checkout flow</li>
            <li><strong>Action required:</strong> Audit checkout buttons, review cart controls, ensure consistent checkout flow</li>
            <li><strong>Estimated effort:</strong> 20-40 hours</li>
        </ul>
        <p><strong>SaaS / Admin Dashboards</strong></p>
        <ul>
            <li><strong>Most affected by:</strong> Drag-and-drop alternatives, target size for data table controls, focus appearance</li>
            <li><strong>Action required:</strong> Add keyboard alternatives to drag-and-drop, audit button/icon sizes, verify focus indicators</li>
            <li><strong>Estimated effort:</strong> 40-80 hours</li>
        </ul>
        <p><strong>Content / Blog Sites</strong></p>
        <ul>
            <li><strong>Most affected by:</strong> Persistent navigation order, focus appearance</li>
            <li><strong>Action required:</strong> Ensure navigation is consistent across pages, audit focus indicators</li>
            <li><strong>Estimated effort:</strong> 5-15 hours</li>
        </ul>
        <p><strong>Government / Healthcare Sites</strong></p>
        <ul>
            <li><strong>Most affected by:</strong> ALL of the above. Government sites are high-priority litigation targets.</li>
            <li><strong>Action required:</strong> Complete WCAG 2.2 Level AA audit and remediation</li>
            <li><strong>Estimated effort:</strong> 100-200+ hours depending on site size</li>
        </ul>
    </section>

    <section id="compliance-timeline">
        <h2>When Do You Need to Comply?</h2>
        <p>This is where it gets complicated. There's no federal mandate YET requiring WCAG 2.2 immediately. But momentum is building.</p>
        <p><strong>What's already happened:</strong></p>
        <ul>
            <li>The U.S. Department of Justice (DOJ) has signaled WCAG 2.2 Level AA is the expected standard moving forward</li>
            <li>Accessibility lawsuits filed in 2024-2025 have begun citing WCAG 2.2</li>
            <li>Several states (California, New York) are reviewing standards updates</li>
            <li>Federal contractors and healthcare organizations are being pressured to adopt it</li>
        </ul>
        <p><strong>Realistic timeline:</strong></p>
        <ul>
            <li><strong>By 2026:</strong> Courts will likely expect WCAG 2.2 Level AA compliance, especially for large companies</li>
            <li><strong>By 2027:</strong> WCAG 2.2 Level AA will be the de facto standard cited in lawsuits</li>
            <li><strong>By 2028:</strong> Federal mandate likely (Section 508 update is in progress)</li>
        </ul>
        <p><strong>What this means for you:</strong></p>
        <ul>
            <li>If you file for WCAG 2.1 compliance today, you're preparing a defense that expires in 2-3 years</li>
            <li>New accessibility audit requests should target WCAG 2.2 Level AA</li>
            <li>Companies with settlement agreements may be asked to update to WCAG 2.2 within their remediation windows</li>
        </ul>
    </section>

    <section id="litigation-risk">
        <h2>WCAG 2.2 and Litigation Risk</h2>
        <p>Here's the real question: can you be sued for not meeting WCAG 2.2 right now?</p>
        <p><strong>Legally:</strong> Technically, no. There's no federal mandate yet. The ADA doesn't specify WCAG 2.2.</p>
        <p><strong>Practically:</strong> Yes. Plaintiffs' lawyers will argue WCAG 2.2 is the current best practice and your failure to meet it shows negligence. Courts are receptive to this argument.</p>
        <p><strong>What we've seen in 2024-2025:</strong></p>
        <ul>
            <li>Plaintiffs suing major companies are citing WCAG 2.2 requirements</li>
            <li>Accessibility experts testifying in court are recommending WCAG 2.2</li>
            <li>Judges are treating WCAG 2.2 as a reasonable standard</li>
        </ul>
        <p>Your risk calculation:</p>
        <ul>
            <li><strong>If you're WCAG 2.1 compliant today:</strong> You have a defensible position if sued (for now).</li>
            <li><strong>If you're not compliant with either:</strong> Your litigation exposure is high and growing.</li>
            <li><strong>If you're WCAG 2.2 compliant:</strong> You're ahead of most companies and have a strong legal position.</li>
        </ul>
    </section>

    <section id="wcag-21-still-relevant">
        <h2>Is WCAG 2.1 Dead? (No, But...)</h2>
        <p>You might worry: "We're WCAG 2.1 compliant. Are we in trouble?"</p>
        <p><strong>No, not yet.</strong></p>
        <p>WCAG 2.1 is still a valid, respected standard. Compliance with WCAG 2.1 Level AA is a strong legal defense today. Most accessible websites target WCAG 2.1.</p>
        <p><strong>But:</strong> Courts will increasingly cite WCAG 2.2 as the current standard. If you're sued, expect plaintiffs' lawyers to argue you should have met WCAG 2.2.</p>
        <p><strong>Strategic approach:</strong></p>
        <ul>
            <li>If your site is not yet compliant: Target WCAG 2.2 Level AA instead of 2.1</li>
            <li>If your site is WCAG 2.1 compliant: Plan a WCAG 2.2 upgrade over the next 2 years</li>
            <li>If you're starting a new site: Build for WCAG 2.2 from day one</li>
        </ul>
    </section>

    <section id="major-changes-summary">
        <h2>Quick Reference: Major Changes for Your Team</h2>
        <ul>
            <li><strong>Target sizes matter more:</strong> 24×24 CSS pixels minimum (was recommendations before)</li>
            <li><strong>Focus indicators must be visible:</strong> No hiding or low-contrast outlines</li>
            <li><strong>Drag-and-drop needs keyboard alternatives:</strong> Must support keyboard input</li>
            <li><strong>Consistent navigation:</strong> UI controls must appear in the same order on all pages</li>
            <li><strong>Voice control compatibility:</strong> Visible labels must match accessible names</li>
            <li><strong>Persistent authentication:</strong> No cognitive tests like CAPTCHAs without alternatives</li>
        </ul>
    </section>

    <section id="action-plan">
        <h2>Your WCAG 2.2 Action Plan (Next 6 Months)</h2>
        <p><strong>Month 1: Assessment</strong></p>
        <ul>
            <li>Run a WCAG 2.2 accessibility audit</li>
            <li>Document specific violations and remediation effort</li>
            <li>Identify high-priority issues (target size, focus visibility, drag-and-drop)</li>
        </ul>
        <p><strong>Months 2-3: Planning</strong></p>
        <ul>
            <li>Create a remediation roadmap</li>
            <li>Estimate effort and budget</li>
            <li>Decide: New build with WCAG 2.2 vs. retrofitting existing site</li>
        </ul>
        <p><strong>Months 4-5: Development</strong></p>
        <ul>
            <li>Fix high-priority issues (target size, focus appearance)</li>
            <li>Add keyboard alternatives for complex interactions</li>
            <li>Test thoroughly with assistive technology</li>
        </ul>
        <p><strong>Month 6: Verification</strong></p>
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
</article>

<section style="margin-top: 3rem;">
    <div class="highlight">
        <h2 style="margin-top: 0;">Is Your Site Ready for WCAG 2.2?</h2>
        <p>Find out which WCAG 2.2 requirements your site violates and what you need to fix. Get a detailed roadmap for compliance.</p>
        <button class="btn btn-primary" onclick="openPricingForm('deep-audit', 'WCAG 2.2 Compliance Audit & Remediation Plan')">Audit for WCAG 2.2</button>
    </div>
</section>
HTML;
include 'template.php';
?>
