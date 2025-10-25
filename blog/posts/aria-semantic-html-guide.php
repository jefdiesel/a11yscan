<?php
$pageTitle = 'ARIA Labels & Semantic HTML: Building for Screen Readers | A11yscan Blog';
$pageDescription = 'Understand the difference between ARIA and semantic HTML. Learn when to use each for maximum screen reader accessibility and WCAG compliance.';
$currentPage = 'blog';

$pageContent = <<<'HTML'
<article class="blog-post">
    <section id="intro">
        <time datetime="2025-10-08" style="font-size: 0.9rem; color: var(--text-secondary); font-weight: 500; display: block; margin-bottom: 0.5rem;">October 8, 2025</time>
        <h1 style="font-size: 2.5rem; font-weight: 700; line-height: 1.2; margin-bottom: 2rem;">ARIA Labels & Semantic HTML: Building for Screen Readers</h1>
        
        <h2>Understanding Screen Reader Accessibility</h2>
        <p>Screen readers are software programs that read web content aloud to users. Approximately 2.2 billion people worldwide have visual impairments, and many rely on screen readers to access digital content. A screen reader's effectiveness depends entirely on how websites are coded.</p>
        <p>Screen readers interpret HTML markup and present it as structured information. A screen reader announces headings, navigates between form fields, identifies buttons, and announces interactive element states. The better your HTML markup describes your content structure and functionality, the better the screen reader experience.</p>
        <p>HTML includes semantic elements specifically designed to convey meaning. These elements communicate structure and function inherently. ARIA (Accessible Rich Internet Applications) provides additional markup for complex components that HTML doesn't adequately describe. Understanding when to use semantic HTML and when to supplement it with ARIA is the key to accessible development.</p>
    </section>

    <section id="semantic-html">
        <h2>Semantic HTML: The Foundation</h2>
        <p>Semantic HTML uses tags that inherently communicate meaning. A `&lt;button&gt;` element means "this is a button." A `&lt;nav&gt;` element means "this is navigation." A `&lt;h1&gt;` element means "this is a heading." Screen readers understand these meanings and present them appropriately.</p>

        <h3>Core Semantic Elements</h3>
        <p><strong>&lt;nav&gt;</strong> - Indicates primary navigation. Screen readers announce this, allowing users to skip navigation or navigate directly to it.</p>
        <p><strong>&lt;main&gt;</strong> - Identifies primary content. Used with skip links to help keyboard users navigate directly to content.</p>
        <p><strong>&lt;article&gt;</strong> - Indicates independent, self-contained content. Screen readers announce article boundaries.</p>
        <p><strong>&lt;section&gt;</strong> - Groups related content. Screen readers can navigate between sections.</p>
        <p><strong>&lt;aside&gt;</strong> - Indicates supplementary content. Screen readers announce this as secondary content.</p>
        <p><strong>&lt;header&gt; and &lt;footer&gt;</strong> - Indicate header and footer areas. Screen readers announce these structural landmarks.</p>
        <p><strong>&lt;h1&gt;–&lt;h6&gt;</strong> - Indicate heading hierarchy. Screen reader users navigate by headings and expect proper hierarchy.</p>
        <p><strong>&lt;button&gt;</strong> - Creates keyboard-accessible button. Includes automatic focus management and keyboard support.</p>
        <p><strong>&lt;a&gt;</strong> - Creates link. Keyboard-accessible and properly announced by screen readers.</p>
        <p><strong>&lt;label&gt;</strong> - Associates text with form input. Screen readers announce label content when input receives focus.</p>

        <h3>Why Semantic HTML Is Superior to ARIA</h3>
        <p>When a semantic element can accomplish your goal, use it instead of ARIA. A `&lt;button&gt;` element automatically provides keyboard support, focus management, and proper screen reader announcement. Creating a button with a div and ARIA requires recreating all this functionality.</p>
        <p>The principle is straightforward: semantic HTML first, ARIA second. Use semantic elements whenever possible, then use ARIA to supplement where necessary.</p>
    </section>

    <section id="aria-attributes">
        <h2>ARIA Attributes: When and How to Use Them</h2>
        <p>ARIA (Accessible Rich Internet Applications) provides attributes that supplement semantic HTML for complex components or situations where semantic HTML doesn't provide adequate information.</p>

        <h3>ARIA Landmarks</h3>
        <p>While semantic elements are preferred, ARIA role attributes can provide landmark information:</p>
        <p>&lt;nav role="navigation"&gt;...&lt;/nav&gt;<br/>
        &lt;main role="main"&gt;...&lt;/main&gt;<br/>
        &lt;div role="complementary"&gt;Sidebar&lt;/div&gt;</p>

        <h3>ARIA Labels and Descriptions</h3>
        <p><strong>aria-label</strong> provides a label for elements that don't have visible text labels. Icon-only buttons commonly use aria-label:</p>
        <p>&lt;button aria-label="Close menu"&gt;✕&lt;/button&gt;</p>

        <p><strong>aria-labelledby</strong> links an element to another element that labels it:</p>
        <p>&lt;h2 id="modal-title"&gt;Confirm Delete&lt;/h2&gt;<br/>
        &lt;div role="dialog" aria-labelledby="modal-title"&gt;...&lt;/div&gt;</p>

        <p><strong>aria-describedby</strong> links an element to descriptive content:</p>
        <p>&lt;input id="password" aria-describedby="pwd-hint"&gt;<br/>
        &lt;p id="pwd-hint"&gt;Password must be 8+ characters&lt;/p&gt;</p>

        <h3>ARIA States and Properties</h3>
        <p><strong>aria-hidden="true"</strong> hides elements from screen readers. Use this for decorative elements:</p>
        <p>&lt;img src="star.svg" alt="" aria-hidden="true"&gt;</p>

        <p><strong>aria-disabled="true"</strong> indicates disabled state:</p>
        <p>&lt;button aria-disabled="true"&gt;Submit&lt;/button&gt;</p>

        <p><strong>aria-checked</strong>, <strong>aria-selected</strong>, <strong>aria-pressed</strong> indicate component state:</p>
        <p>&lt;div role="checkbox" aria-checked="true"&gt;...&lt;/div&gt;</p>

        <p><strong>aria-expanded</strong> indicates whether a collapsible section is open:</p>
        <p>&lt;button aria-expanded="false" aria-controls="menu"&gt;Menu&lt;/button&gt;</p>

        <p><strong>aria-live</strong> announces dynamic content updates:</p>
        <p>&lt;div aria-live="polite"&gt;Item added to cart&lt;/div&gt;</p>
    </section>

    <section id="aria-roles">
        <h2>ARIA Roles: When You Need Them</h2>
        <p>ARIA roles assign semantic meaning to elements that lack semantic HTML equivalents. However, using semantic elements eliminates the need for most role attributes.</p>

        <h3>Appropriate Role Usage</h3>
        <p>Use ARIA roles only when semantic HTML doesn't provide the needed meaning. For example:</p>
        <p><strong>✅ Correct:</strong> `&lt;button&gt;Open Menu&lt;/button&gt;` (semantic element, no ARIA needed)</p>
        <p><strong>❌ Incorrect:</strong> `&lt;div role="button"&gt;Open Menu&lt;/div&gt;` (recreates button with ARIA and requires additional keyboard handling)</p>

        <p><strong>✅ Appropriate ARIA:</strong> `&lt;div role="dialog"&gt;...&lt;/div&gt;` (no semantic HTML element exists for dialogs)</p>

        <h3>Common ARIA Roles</h3>
        <p><strong>dialog</strong> - Indicates a modal dialog. Must manage focus and handle Escape to close.</p>
        <p><strong>alert</strong> - Announces important information immediately. Screen readers interrupt to announce alerts.</p>
        <p><strong>tab, tablist, tabpanel</strong> - Structures tab components with proper keyboard navigation.</p>
        <p><strong>menuitem, menu</strong> - Structures menu components with arrow key navigation.</p>
        <p><strong>slider</strong> - Indicates a range input. Arrow keys adjust value.</p>
    </section>

    <section id="mistakes">
        <h2>Common Mistakes and Anti-Patterns</h2>
        <p>Understanding what not to do helps ensure your markup is genuinely accessible.</p>

        <h3>Mistake 1: Recreating Native Elements with ARIA</h3>
        <p><strong>❌ Wrong:</strong> `&lt;div role="button" onclick="..."&gt;Click me&lt;/div&gt;`</p>
        <p>This requires manual implementation of keyboard support, focus management, and screen reader announcements.</p>
        <p><strong>✅ Right:</strong> `&lt;button&gt;Click me&lt;/button&gt;`</p>

        <h3>Mistake 2: Excessive ARIA</h3>
        <p><strong>❌ Wrong:</strong> Adding ARIA to elements that already have semantic meaning.</p>
        <p>&lt;h1 role="heading"&gt;Page Title&lt;/h1&gt;</p>
        <p>The `&lt;h1&gt;` element already indicates a heading. The role attribute is redundant.</p>

        <h3>Mistake 3: Forgetting Keyboard Support</h3>
        <p>Using ARIA to add screen reader support without ensuring keyboard support creates barriers for keyboard-only users. A custom button with aria-label still needs keyboard handlers.</p>
        <p>Use semantic `&lt;button&gt;` which handles this automatically.</p>

        <h3>Mistake 4: Incorrect Heading Hierarchy</h3>
        <p><strong>❌ Wrong:</strong> Jumping heading levels or using headings out of order.</p>
        <p>&lt;h1&gt;Page Title&lt;/h1&gt;<br/>
        &lt;h3&gt;Subsection&lt;/h3&gt; &lt;!-- Should be h2 --&gt;</p>

        <h3>Mistake 5: Using aria-label Incorrectly</h3>
        <p><strong>❌ Wrong:</strong> Using aria-label on text elements that already have visible text.</p>
        <p>&lt;h2 aria-label="Important Section"&gt;Important Section&lt;/h2&gt;</p>
        <p>The visible text serves as the label. aria-label isn't needed.</p>
    </section>

    <section id="implementation">
        <h2>Practical Implementation: Building an Accessible Form</h2>
        <p>Let's walk through building an accessible form with semantic HTML and appropriate ARIA:</p>

        <h3>Semantic HTML Approach</h3>
        <p>&lt;form&gt;<br/>
        &nbsp;&nbsp;&lt;label for="email"&gt;Email Address&lt;/label&gt;<br/>
        &nbsp;&nbsp;&lt;input id="email" type="email" required&gt;<br/>
        <br/>
        &nbsp;&nbsp;&lt;label for="message"&gt;Message&lt;/label&gt;<br/>
        &nbsp;&nbsp;&lt;textarea id="message"&gt;&lt;/textarea&gt;<br/>
        <br/>
        &nbsp;&nbsp;&lt;button type="submit"&gt;Send&lt;/button&gt;<br/>
        &lt;/form&gt;</p>

        <h3>Adding ARIA for Enhanced Support</h3>
        <p>&lt;form&gt;<br/>
        &nbsp;&nbsp;&lt;label for="email"&gt;Email Address&lt;/label&gt;<br/>
        &nbsp;&nbsp;&lt;input id="email" type="email" required aria-describedby="email-help"&gt;<br/>
        &nbsp;&nbsp;&lt;small id="email-help"&gt;We'll never share your email&lt;/small&gt;<br/>
        <br/>
        &nbsp;&nbsp;&lt;label for="message"&gt;Message&lt;/label&gt;<br/>
        &nbsp;&nbsp;&lt;textarea id="message" aria-describedby="msg-count"&gt;&lt;/textarea&gt;<br/>
        &nbsp;&nbsp;&lt;div id="msg-count" aria-live="polite"&gt;0 characters&lt;/div&gt;<br/>
        <br/>
        &nbsp;&nbsp;&lt;button type="submit"&gt;Send&lt;/button&gt;<br/>
        &lt;/form&gt;</p>

        <h3>Adding Error Handling</h3>
        <p>&lt;form&gt;<br/>
        &nbsp;&nbsp;&lt;label for="email"&gt;Email Address&lt;/label&gt;<br/>
        &nbsp;&nbsp;&lt;input id="email" type="email" required aria-invalid="false" aria-describedby="email-error"&gt;<br/>
        &nbsp;&nbsp;&lt;span id="email-error" role="alert"&gt;&lt;/span&gt;<br/>
        &lt;/form&gt;</p>

        <p>On validation error, set aria-invalid="true" and populate the error span with the error message. The role="alert" ensures screen readers announce the error immediately.</p>
    </section>

    <section id="testing">
        <h2>Testing Semantic HTML and ARIA</h2>
        <p>Verify your markup works with screen readers by testing with actual assistive technology.</p>

        <h3>Screen Reader Testing</h3>
        <p>Test with free screen readers like NVDA (Windows) or VoiceOver (macOS/iOS). Navigate your page and verify that all content is accessible and properly announced.</p>

        <h3>Automated Testing</h3>
        <p>Tools like axe DevTools identify ARIA misuse and incorrect semantic markup. However, automated tools can't verify that your ARIA implementation actually works with screen readers—human testing is essential.</p>

        <h3>Developer Tools Inspection</h3>
        <p>Modern browser developer tools display accessibility information. Right-click elements and select "Inspect" to see the accessibility tree, showing how assistive technology perceives your markup.</p>

        <h3>Manual Code Review</h3>
        <p>Review code to ensure semantic HTML is used when possible and ARIA supplements rather than replaces semantic meaning.</p>
    </section>

    <section id="takeaways">
        <h2>Key Takeaways</h2>
        <ul style="list-style: disc; padding-left: 1.5rem;">
            <li>Semantic HTML is the foundation of screen reader accessibility; use semantic elements whenever possible.</li>
            <li>ARIA supplements semantic HTML for complex components where semantic HTML doesn't provide adequate meaning.</li>
            <li>Never use ARIA to recreate native elements; use semantic HTML instead.</li>
            <li>ARIA labels should only be used when visible text labels aren't available or appropriate.</li>
            <li>Maintain proper heading hierarchy; screen reader users navigate using headings.</li>
            <li>Use aria-live for dynamic content that updates without page reload.</li>
            <li>Test your implementation with actual screen readers; automated tools identify issues but can't verify actual usability.</li>
            <li>Semantic HTML + ARIA + keyboard support = comprehensive screen reader accessibility.</li>
        </ul>
    </section>

    <section id="resources">
        <h2>Resources</h2>
        <ul style="list-style: disc; padding-left: 1.5rem;">
            <li><a href="https://www.w3.org/TR/wai-aria-1.2/">ARIA 1.2 Specification (W3C)</a></li>
            <li><a href="https://developer.mozilla.org/en-US/docs/Web/Accessibility/ARIA">ARIA Authoring Practices (MDN)</a></li>
            <li><a href="https://www.w3.org/WAI/ARIA/apg/">ARIA Authoring Practices Guide (W3C)</a></li>
            <li><a href="https://webaim.org/articles/aria/">Using ARIA (WebAIM)</a></li>
            <li><a href="https://html.spec.whatwg.org/multipage/">HTML Specification (WHATWG)</a></li>
        </ul>
    </section>
</article>

<section style="margin-top: 3rem; padding-top: 2rem; border-top: 2px solid var(--border);">
    <div style="background: var(--bg-tertiary); padding: 1.5rem; border-radius: 4px; border-left: 4px solid var(--accent-primary);">
        <h3 style="margin-top: 0; font-size: 1.1rem;">Best Practices Note</h3>
        <p style="font-size: 0.95rem; margin-bottom: 0;"><strong>ARIA and semantic HTML are covered in WCAG 2.1.</strong> This guide shares best practices based on widely-accepted web accessibility principles. For comprehensive information on ARIA and semantic markup requirements, consult the official WCAG 2.1 guidelines and W3C ARIA specifications.</p>
    </div>
</section>

<section style="margin-top: 3rem;">
    <div class="highlight">
        <h2 style="margin-top: 0;">Check Your Semantic Markup</h2>
        <p>Get a professional audit to identify ARIA misuse and missing semantic HTML, with expert recommendations for improvement.</p>
        <button class="btn btn-primary" onclick="openPricingForm('free-scan', 'Semantic HTML & ARIA Audit')">Audit My Markup</button>
    </div>
</section>
HTML;

include __DIR__ . '/../../template.php';
?>
