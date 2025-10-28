<?php
$pageTitle = 'The 10-Point WCAG Pre-Launch Checklist - A11yscan Blog';
$pageDescription = 'Essential accessibility checklist before launching your website. 10 critical WCAG 2.1 requirements to verify keyboard access, contrast, structure, and more.';
$currentPage = 'blog';

$pageContent = <<<'HTML'
<article class="blog-post">
    <!-- CORRECT: Header INSIDE first section with inline styles -->
    <section id="intro">
        <time datetime="2025-01-22" style="font-size: 0.9rem; color: var(--text-secondary); font-weight: 500; display: block; margin-bottom: 0.5rem;">January 22, 2025</time>
        <h1 style="font-size: 2.5rem; font-weight: 700; line-height: 1.2; margin-bottom: 2rem;">The 10-Point WCAG Pre-Launch Checklist</h1>
        
        <h2>Essential Accessibility Verification Before Going Live</h2>
        <p>Launching a website without proper accessibility testing is like shipping a product without quality assurance. You're exposing yourself to poor user experience, legal risk, and excluding millions of potential users. This checklist covers the 10 critical WCAG 2.1 requirements you must verify before launch.</p>
        <p>Whether you're rebuilding a site or launching something new, use this checklist to ensure your website works for everyone—including the 1 in 4 adults with disabilities.</p>
    </section>

    <!-- LEGAL DISCLAIMER (right after first section) -->
    <section style="margin-top: 2rem; padding-top: 1.5rem; border-top: 2px solid var(--border);">
        <div style="background: var(--bg-tertiary); padding: 1.5rem; border-radius: 4px; border-left: 4px solid var(--accent-primary);">
            <h3 style="margin-top: 0; font-size: 1.1rem;">Legal Disclaimer</h3>
            <p style="font-size: 0.95rem; margin-bottom: 0;"><strong>A11yscan is not a law firm and does not provide legal advice.</strong> We operate under best practices based on WCAG Guidelines, ADA requirements, and applicable jurisdictions. Courts don't always agree on terms and expectations for web accessibility, and legal standards can vary by jurisdiction. However, an accessible website works better for all users regardless of legal requirements. For specific legal guidance, consult with a qualified attorney specializing in accessibility law.</p>
        </div>
    </section>

    <section id="point-1">
        <h2>1. Heading Hierarchy Is Logical (H1 → H2 → H3)</h2>
        <p>Screen reader users navigate your page using headings. A broken hierarchy confuses them and makes your content impossible to navigate.</p>
        
        <h3>What to Check</h3>
        <ul>
            <li><strong>One H1 per page</strong> — It should be the main page title, not a logo</li>
            <li><strong>No skipped levels</strong> — Never jump from H1 to H3 (always H2 in between)</li>
            <li><strong>H2 for main sections</strong> — Major content areas use H2</li>
            <li><strong>H3 for subsections</strong> — Nested content uses H3</li>
        </ul>
        
        <h3>How to Test</h3>
        <p>Open browser DevTools (F12), inspect the page source, and search for all heading tags. Use the WebAIM headings plugin for automated checking. Better yet: print your headings and read them—do they tell a coherent story?</p>
    </section>

    <section id="point-2">
        <h2>2. Color Contrast Meets 7:1 Ratio (AAA Standard)</h2>
        <p>Low contrast text is invisible to people with low vision. A 7:1 contrast ratio ensures your content is readable for everyone, not just people with perfect eyesight.</p>
        
        <h3>What to Check</h3>
        <ul>
            <li><strong>Body text on background</strong> — Minimum 7:1 ratio</li>
            <li><strong>Links and buttons</strong> — All interactive text must meet 7:1</li>
            <li><strong>Borders and dividers</strong> — Sufficient contrast for visual separation</li>
            <li><strong>Hover/focus states</strong> — Interactive elements remain readable when focused</li>
        </ul>
        
        <h3>How to Test</h3>
        <p>Use the WebAIM Contrast Checker (webaim.org/resources/contrastchecker/) or your browser's built-in accessibility audit. Enter your text color and background color. If the ratio is below 7:1, adjust your colors. Test all color combinations—don't assume if one link works, all links work.</p>
    </section>

    <section id="point-3">
        <h2>3. All Interactive Elements Are Keyboard Accessible</h2>
        <p>Not everyone uses a mouse. Keyboard users (and voice control users) navigate via Tab, Enter, and arrow keys. Every button, link, and form field must be reachable without a mouse.</p>
        
        <h3>What to Check</h3>
        <ul>
            <li><strong>Tab navigation works</strong> — Tab through every page section in order</li>
            <li><strong>All buttons are tabbable</strong> — Press Tab, then Enter to activate</li>
            <li><strong>Form fields are accessible</strong> — Tab to inputs, type text, submit form</li>
            <li><strong>No keyboard traps</strong> — You can always Tab out of an element</li>
            <li><strong>Dropdown menus work with keyboard</strong> — Arrow keys navigate options</li>
        </ul>
        
        <h3>How to Test</h3>
        <p>Put your mouse away. Close the touchpad. Navigate your entire site using only Tab, Shift+Tab, Enter, Space, and arrow keys. If you get stuck, you've found a keyboard trap. Fix it before launch.</p>
    </section>

    <section id="point-4">
        <h2>4. Focus Indicators Are Visible (3px Outline)</h2>
        <p>When you Tab to an interactive element, there must be a visible indicator showing which element is focused. This is essential for keyboard navigation.</p>
        
        <h3>What to Check</h3>
        <ul>
            <li><strong>Every button has focus outline</strong> — 3px minimum, visible and distinct</li>
            <li><strong>All links have focus outline</strong> — Not removed by CSS</li>
            <li><strong>Form fields show focus</strong> — Border color change or outline</li>
            <li><strong>Outline isn't hidden</strong> — No <code>outline: none</code> without replacement</li>
        </ul>
        
        <h3>How to Test</h3>
        <p>Tab through your page. When you reach a button or link, a clear outline or border should appear. Common mistake: designers remove the default focus outline but don't replace it with anything. Result: keyboard users are blind. Don't do this.</p>
    </section>

    <section id="point-5">
        <h2>5. All Images Have Descriptive Alt Text</h2>
        <p>Screen reader users can't see images. They depend on alt text to understand what the image shows. Generic alt text like "image" or "photo" is useless.</p>
        
        <h3>What to Check</h3>
        <ul>
            <li><strong>Decorative images</strong> — Use <code>alt=""</code> (empty alt text)</li>
            <li><strong>Informative images</strong> — Describe the content (not just "image")</li>
            <li><strong>Charts and graphs</strong> — Include key data in alt text or nearby text</li>
            <li><strong>Icons with meaning</strong> — Describe what the icon represents</li>
            <li><strong>Icons that are decoration</strong> — Use <code>alt=""</code> to hide from screen readers</li>
        </ul>
        
        <h3>How to Test</h3>
        <p>Disable images in your browser (right-click → inspect → toggle image visibility). Does the page still make sense? Run your page through WAVE (wave.webaim.org) to find missing alt text. Use a screen reader to verify alt text is read properly.</p>
    </section>

    <section id="point-6">
        <h2>6. Form Labels Are Properly Associated</h2>
        <p>Every form field must have a label. Screen reader users rely on labels to understand what to type in an input field. A label that isn't properly connected is as useful as having no label at all.</p>
        
        <h3>What to Check</h3>
        <ul>
            <li><strong>Every input has a label</strong> — Even if it seems obvious</li>
            <li><strong>Label is connected via <code>for</code> attribute</strong> — <code>&lt;label for="email"&gt;</code> matches <code>&lt;input id="email"&gt;</code></li>
            <li><strong>No placeholder-only labels</strong> — Placeholders disappear when typing; labels stay visible</li>
            <li><strong>Error messages are clear</strong> — Users know exactly what's wrong</li>
        </ul>
        
        <h3>How to Test</h3>
        <p>Use a screen reader to navigate your forms. You should hear the label name before each input field. If you don't, the label isn't properly connected. Fix the HTML—don't rely on visual proximity.</p>
    </section>

    <section id="point-7">
        <h2>7. Page Text Can Be Resized to 200% Without Breakage</h2>
        <p>Many users enlarge text to read it. Your page must remain functional and readable when text is zoomed to 200%.</p>
        
        <h3>What to Check</h3>
        <ul>
            <li><strong>No horizontal scrolling</strong> — Text reflows to fit the screen</li>
            <li><strong>Content remains readable</strong> — No overlapping text or missing elements</li>
            <li><strong>Buttons and links remain clickable</strong> — Minimum 44×44 CSS pixels</li>
            <li><strong>Form fields are still usable</strong> — Labels and inputs remain connected</li>
        </ul>
        
        <h3>How to Test</h3>
        <p>Press Ctrl++ (Windows) or Cmd++ (Mac) to zoom to 200%. Scroll through your page. If content overflows horizontally or overlaps, fix your responsive design. Use <code>max-width</code> constraints wisely. Never use fixed-width layouts.</p>
    </section>

    <section id="point-8">
        <h2>8. Motion and Animation Don't Auto-Play</h2>
        <p>Auto-playing animations, videos, and sounds distract users and trigger seizures in people with photosensitive epilepsy. Never auto-play anything.</p>
        
        <h3>What to Check</h3>
        <ul>
            <li><strong>No auto-playing videos</strong> — User must click to play</li>
            <li><strong>No auto-playing animations</strong> — Must be triggered by user</li>
            <li><strong>No auto-playing audio</strong> — Sound must be user-controlled</li>
            <li><strong>No flashing content</strong> — Nothing flashes more than 3 times per second</li>
            <li><strong>Respect <code>prefers-reduced-motion</code></strong> — Users can opt out of animations</li>
        </ul>
        
        <h3>How to Test</h3>
        <p>Load your page. Does anything move, flash, or make sound without your permission? It shouldn't. Check your CSS and JavaScript for animations. Use browser DevTools to test <code>prefers-reduced-motion</code> media query.</p>
    </section>

    <section id="point-9">
        <h2>9. Page Language Is Declared and Content Structure Is Semantic</h2>
        <p>Screen readers need to know what language your page is in. They also need semantic HTML to understand your content structure—this isn't about style, it's about meaning.</p>
        
        <h3>What to Check</h3>
        <ul>
            <li><strong>HTML lang attribute set</strong> — <code>&lt;html lang="en"&gt;</code> for English</li>
            <li><strong>Navigation uses <code>&lt;nav&gt;</code></strong> — Not just styled links</li>
            <li><strong>Main content in <code>&lt;main&gt;</code></strong> — Not generic <code>&lt;div&gt;</code></li>
            <li><strong>List items in <code>&lt;ul&gt;</code> or <code>&lt;ol&gt;</code></strong> — Never nested <code>&lt;div&gt;</code> with <code>display: list-item</code></li>
            <li><strong>Buttons are <code>&lt;button&gt;</code></strong> — Not styled <code>&lt;div&gt;</code> with <code>onclick</code></li>
        </ul>
        
        <h3>How to Test</h3>
        <p>Open your HTML source. Search for semantic elements: <code>&lt;nav&gt;</code>, <code>&lt;main&gt;</code>, <code>&lt;article&gt;</code>, <code>&lt;section&gt;</code>, <code>&lt;button&gt;</code>. If you see <code>&lt;div class="nav"&gt;</code> or <code>&lt;div onclick="..."&gt;</code>, refactor to semantic HTML. Use HTML validator (validator.w3.org) to find semantic errors.</p>
    </section>

    <section id="point-10">
        <h2>10. Skip Link Allows Users to Jump to Main Content</h2>
        <p>Keyboard users shouldn't have to Tab through your entire header and navigation to reach your main content. A "Skip to Main Content" link lets them jump directly there.</p>
        
        <h3>What to Check</h3>
        <ul>
            <li><strong>Skip link exists</strong> — Link to main content</li>
            <li><strong>Skip link is first focusable element</strong> — Becomes visible when Tab is pressed</li>
            <li><strong>Skip link actually works</strong> — Focus moves to main content when clicked</li>
            <li><strong>Main content is focusable</strong> — <code>&lt;main&gt;</code> or target element has <code>tabindex="-1"</code></li>
        </ul>
        
        <h3>How to Test</h3>
        <p>Press Tab once. The skip link should appear. Press Enter. Focus should move to your main content. Without this, keyboard users waste time tabbing through navigation every time they visit a new page.</p>
    </section>

    <section id="quick-audit">
        <h2>Quick Audit Before Launch</h2>
        <p>Before you deploy your website, run through this final checklist:</p>
        
        <ul>
            <li>☐ Run Lighthouse accessibility audit (90+ score)</li>
            <li>☐ Check with WAVE browser extension (0 errors)</li>
            <li>☐ Test keyboard navigation (Tab through entire site)</li>
            <li>☐ Test with screen reader (NVDA or VoiceOver)</li>
            <li>☐ Check color contrast on all text (WebAIM Contrast Checker)</li>
            <li>☐ Zoom to 200% (no horizontal scrolling, content reflows)</li>
            <li>☐ Verify focus indicators visible (3px outline minimum)</li>
            <li>☐ Test form fields and error messages</li>
            <li>☐ Validate HTML (validator.w3.org)</li>
            <li>☐ Test on mobile devices (44×44 touch targets)</li>
        </ul>
    </section>

    <section id="takeaways">
        <h2>Key Takeaways</h2>
        <ul>
            <li>Logical heading hierarchy tells the story of your page</li>
            <li>7:1 color contrast benefits everyone, not just people with low vision</li>
            <li>Keyboard accessibility is foundational—mouse is optional</li>
            <li>Alt text describes images for screen reader users</li>
            <li>Semantic HTML tells assistive technology what your content means</li>
            <li>Accessible websites work better for all users</li>
            <li>Testing before launch saves money and protects users</li>
        </ul>
    </section>

    <section id="resources">
        <h2>Resources</h2>
        <ul>
            <li><a href="https://www.w3.org/TR/WCAG21/">WCAG 2.1 Official Guidelines</a> — Complete standards reference</li>
            <li><a href="https://webaim.org/resources/contrastchecker/">WebAIM Contrast Checker</a> — Test color contrast ratios</li>
            <li><a href="https://wave.webaim.org/">WAVE Web Accessibility Evaluation Tool</a> — Browser extension for automated checks</li>
            <li><a href="https://www.nvaccess.org/">NVDA Screen Reader</a> — Free screen reader for testing</li>
            <li><a href="https://validator.w3.org/">HTML Validator</a> — Check for semantic HTML errors</li>
            <li><a href="https://developers.google.com/web/tools/lighthouse">Lighthouse Accessibility Audit</a> — Built into Chrome DevTools</li>
        </ul>
    </section>
</article>

<section style="margin-top: 3rem;">
    <div class="highlight">
        <h2 style="margin-top: 0;">Test Your WCAG Compliance</h2>
        <p>Use our free scan to verify your site meets these 10 critical accessibility requirements.</p>
        <button class="btn btn-primary" onclick="openPricingForm('free-scan', 'WCAG Pre-Launch Verification')">Run Free Scan</button>
    </div>
</section>
HTML;

include __DIR__ . '/../../template.php';
?>
