<?php
$pageTitle = 'Focus Management & Tab Order: Fixing Keyboard Navigation | A11yscan Blog';
$pageDescription = 'Logical tab order, focus traps, and visible focus indicators. WCAG compliance guide for keyboard accessibility and litigation prevention.';
$currentPage = 'blog';

$pageContent = <<<'HTML'
<article class="blog-post">
    <!-- Header INSIDE first section -->
    <section id="intro">
        <time datetime="2025-10-26" style="font-size: 0.9rem; color: var(--text-secondary); font-weight: 500; display: block; margin-bottom: 0.5rem;">October 26, 2025</time>
        <h1 style="font-size: 2.5rem; font-weight: 700; line-height: 1.2; margin-bottom: 2rem;">Focus Management & Tab Order: The Foundation of Keyboard Accessibility</h1>
        
        <h2>Why This Matters</h2>
        <p>Millions of people use keyboards exclusively: people with motor disabilities, blind users with keyboard shortcuts, power users who prefer keyboards, and people on devices without mice.</p>
        <p>If your website doesn't support keyboard navigation—or worse, traps keyboard users—you're violating the ADA and excluding millions of users. Focus management is a foundational accessibility requirement with no workarounds.</p>
    </section>

    <!-- LEGAL DISCLAIMER -->
    <section style="margin-top: 2rem; padding-top: 1.5rem; border-top: 2px solid var(--border);">
        <div style="background: var(--bg-tertiary); padding: 1.5rem; border-radius: 4px; border-left: 4px solid var(--accent-primary);">
            <h3 style="margin-top: 0; font-size: 1.1rem;">Legal Disclaimer</h3>
            <p style="font-size: 0.95rem; margin-bottom: 0;"><strong>A11yscan is not a law firm and does not provide legal advice.</strong> We operate under best practices based on WCAG Guidelines, ADA requirements, and applicable jurisdictions. Courts don't always agree on terms and expectations for web accessibility, and legal standards can vary by jurisdiction. However, an accessible website works better for all users regardless of legal requirements. For specific legal guidance, consult with a qualified attorney specializing in accessibility law.</p>
        </div>
    </section>

    <section id="what-is-focus">
        <h2>What is Focus?</h2>
        <p>Focus indicates which element is currently active on the page. When you Tab through a page, the browser moves focus from one element to the next. When you press Enter on a button, that button has focus.</p>

        <h3>Focus vs. Selection</h3>
        <ul>
            <li><strong>Focus:</strong> Which element is ready to receive input (keyboard, screen reader, etc.)</li>
            <li><strong>Selection:</strong> Which text is highlighted (for copy/paste)</li>
        </ul>

        <h3>Visual Representation</h3>
        <p>Focus should always have a visible indicator—typically a colored outline or border. WCAG requires:</p>
        <ul>
            <li>Visible focus indicator (3px minimum outline)</li>
            <li>High contrast (4.5:1 ratio)</li>
            <li>Visible on all interactive elements</li>
            <li>No removal of default focus styles</li>
        </ul>
    </section>

    <section id="focus-order">
        <h2>Tab Order: The Logical Flow</h2>
        <p>Tab order determines the sequence in which focus moves through a page. By default, the browser follows source code order (top to bottom, left to right).</p>

        <h3>The Natural Tab Order (Correct)</h3>
        <p>In most cases, the natural source code order works perfectly:</p>
        <pre style="background: var(--bg-secondary); padding: 1rem; border-radius: 4px; overflow-x: auto; font-family: monospace; font-size: 0.9rem;">
&lt;!-- Source order = Tab order --&gt;
&lt;button&gt;First&lt;/button&gt;          &lt;!-- Tab 1 --&gt;
&lt;button&gt;Second&lt;/button&gt;         &lt;!-- Tab 2 --&gt;
&lt;button&gt;Third&lt;/button&gt;          &lt;!-- Tab 3 --&gt;
        </pre>

        <h3>When to Use tabindex (Rarely)</h3>
        <p>Only use <code>tabindex</code> when the visual layout doesn't match the logical flow:</p>
        <pre style="background: var(--bg-secondary); padding: 1rem; border-radius: 4px; overflow-x: auto; font-family: monospace; font-size: 0.9rem;">
&lt;!-- 3-column layout: left, center, right --&gt;
&lt;aside&gt;
  &lt;nav tabindex="0"&gt;...&lt;/nav&gt;  &lt;!-- Tab 1: Sidebar --&gt;
&lt;/aside&gt;

&lt;main&gt;
  &lt;button tabindex="0"&gt;...&lt;/button&gt; &lt;!-- Tab 2: Main content --&gt;
&lt;/main&gt;

&lt;article&gt;
  &lt;button tabindex="0"&gt;...&lt;/button&gt; &lt;!-- Tab 3: Secondary --&gt;
&lt;/article&gt;
        </pre>

        <h3>NEVER Use tabindex > 0 (Litigation Risk)</h3>
        <p>Setting <code>tabindex="1"</code>, <code>tabindex="2"</code>, etc. breaks the natural tab order and confuses keyboard users:</p>
        <pre style="background: var(--bg-secondary); padding: 1rem; border-radius: 4px; overflow-x: auto; font-family: monospace; font-size: 0.9rem;">
&lt;!-- DO NOT DO THIS --&gt;
&lt;button tabindex="3"&gt;First visible (but tabs last)&lt;/button&gt;
&lt;button tabindex="1"&gt;Third visible (but tabs first)&lt;/button&gt;
&lt;button tabindex="2"&gt;Second visible (but tabs second)&lt;/button&gt;

&lt;!-- Result: Tab order is 2, 3, 1 (confusing!) --&gt;
        </pre>

        <h3>Best Practice</h3>
        <ul>
            <li>✅ Use natural source code order (no <code>tabindex</code> needed)</li>
            <li>✅ Use <code>tabindex="0"</code> only to make static elements focusable</li>
            <li>❌ Never use <code>tabindex > 0</code></li>
            <li>❌ Never create a custom tab order</li>
        </ul>
    </section>

    <section id="focus-visible">
        <h2>Visible Focus Indicators</h2>
        <p>Every interactive element must have a clear, visible focus indicator. This is WCAG 2.1 Level AA requirement (2.4.7: Focus Visible).</p>

        <h3>The Right Way</h3>
        <pre style="background: var(--bg-secondary); padding: 1rem; border-radius: 4px; overflow-x: auto; font-family: monospace; font-size: 0.9rem;">
button, a, input {
  outline: 3px solid #2563eb;
  outline-offset: 2px;
}

/* For keyboard focus only (modern approach) */
button:focus-visible,
a:focus-visible,
input:focus-visible {
  outline: 3px solid #2563eb;
  outline-offset: 2px;
  background: rgba(37, 99, 235, 0.1);
}
        </pre>

        <h3>Contrast Requirements</h3>
        <ul>
            <li>Focus indicator: 3px solid color minimum</li>
            <li>Contrast ratio: 3:1 between focus indicator and background</li>
            <li>Visible on both light and dark backgrounds</li>
            <li>Should not be removed or hidden</li>
        </ul>

        <h3>The Wrong Way (Litigation Risk)</h3>
        <pre style="background: var(--bg-secondary); padding: 1rem; border-radius: 4px; overflow-x: auto; font-family: monospace; font-size: 0.9rem;">
/* DO NOT DO THIS */

/* Removing focus outline entirely */
button:focus {
  outline: none;
}

/* Weak focus indicator (fails contrast) */
button:focus {
  outline: 1px solid #ccc;
}

/* Focus indicator too small */
button:focus {
  outline: 1px solid #2563eb;
}

/* Invisible focus (same color as background) */
button:focus {
  outline: 3px solid white; /* on white background */
}
        </pre>
    </section>

    <section id="focus-traps">
        <h2>Focus Traps: Locking Users Out</h2>
        <p>A focus trap occurs when keyboard users cannot escape an element. This is a WCAG 2.1 Level A violation and immediate litigation risk.</p>

        <h3>Common Focus Trap Scenarios</h3>

        <h3>1. Modal Dialogs (Overlays)</h3>
        <p>When a modal opens, focus should trap inside the modal, preventing users from accidentally tabbing to background content. But when the modal closes, focus should return to the triggering element.</p>
        <pre style="background: var(--bg-secondary); padding: 1rem; border-radius: 4px; overflow-x: auto; font-family: monospace; font-size: 0.9rem;">
/* Trap focus inside modal */
const firstButton = modal.querySelector('button:first-of-type');
const lastButton = modal.querySelector('button:last-of-type');

modal.addEventListener('keydown', (e) => {
  if (e.key === 'Tab') {
    if (e.shiftKey && document.activeElement === firstButton) {
      e.preventDefault();
      lastButton.focus();
    } else if (!e.shiftKey && document.activeElement === lastButton) {
      e.preventDefault();
      firstButton.focus();
    }
  }
});
        </pre>

        <h3>2. Infinite Scroll (Never Trap)</h3>
        <p>If a page loads infinite content, keyboard users can get stuck tabbing through new content forever. Provide a way to stop tabbing or reach the footer:</p>
        <pre style="background: var(--bg-secondary); padding: 1rem; border-radius: 4px; overflow-x: auto; font-family: monospace; font-size: 0.9rem;">
&lt;!-- Good: Users can always reach the footer --&gt;
&lt;main id="infinite-content"&gt;...&lt;/main&gt;
&lt;footer&gt;...&lt;/footer&gt;  &lt;!-- Tab can reach here --&gt;

&lt;!-- Bad: Focus trapped in infinite loop --&gt;
&lt;main id="infinite-content"&gt;...&lt;/main&gt;
&lt;!-- No footer = no escape --&gt;
        </pre>

        <h3>3. Autocomplete Dropdowns</h3>
        <p>Search fields with autocomplete dropdowns can trap focus if not built properly:</p>
        <pre style="background: var(--bg-secondary); padding: 1rem; border-radius: 4px; overflow-x: auto; font-family: monospace; font-size: 0.9rem;">
/* Good: Press Escape to close, then Tab to next element */
dropdown.addEventListener('keydown', (e) => {
  if (e.key === 'Escape') {
    dropdown.hidden = true;
    searchInput.focus();
  }
});

/* Users can Tab past the dropdown */
        </pre>

        <h3>Testing for Focus Traps</h3>
        <ul>
            <li>Tab through the entire page</li>
            <li>Try pressing Escape to close modals</li>
            <li>Verify Tab eventually reaches the footer</li>
            <li>Check that Tab never gets stuck in a loop</li>
            <li>Ensure focus returns to triggering element after modal closes</li>
        </ul>
    </section>

    <section id="skip-links">
        <h2>Skip Links: Keyboard Shortcuts</h2>
        <p>Skip links allow keyboard users to jump over repetitive content (navigation, headers) and go directly to main content.</p>

        <h3>The Right Way</h3>
        <pre style="background: var(--bg-secondary); padding: 1rem; border-radius: 4px; overflow-x: auto; font-family: monospace; font-size: 0.9rem;">
&lt;!-- At top of page (before navigation) --&gt;
&lt;a href="#main-content" class="skip-link"&gt;
  Skip to main content
&lt;/a&gt;

&lt;header&gt;...&lt;/header&gt;
&lt;nav&gt;...&lt;/nav&gt;

&lt;main id="main-content"&gt;...&lt;/main&gt;

&lt;!-- CSS: Hide until focused --&gt;
.skip-link {
  position: absolute;
  top: -40px;
  left: 0;
  background: #2563eb;
  color: white;
  padding: 8px 16px;
}

.skip-link:focus {
  top: 0;
}
        </pre>

        <h3>Why Skip Links Matter</h3>
        <ul>
            <li>Keyboard users don't have to Tab 20+ times to reach content</li>
            <li>Screen reader users can jump directly to main content</li>
            <li>Saves time and reduces frustration</li>
            <li>WCAG 2.1 Level AAA requirement</li>
        </ul>
    </section>

    <section id="dynamic-content">
        <h2>Focus Management in Dynamic Content</h2>
        <p>When page content changes via JavaScript, focus must be managed properly.</p>

        <h3>Scenario 1: Page Update</h3>
        <p>When content loads (pagination, filtering), move focus to the new content:</p>
        <pre style="background: var(--bg-secondary); padding: 1rem; border-radius: 4px; overflow-x: auto; font-family: monospace; font-size: 0.9rem;">
// After content loads
const mainContent = document.getElementById('results');
mainContent.focus();
mainContent.scrollIntoView({ behavior: 'smooth', block: 'start' });

// Announce to screen readers
mainContent.setAttribute('role', 'status');
mainContent.textContent = 'Results loaded';
        </pre>

        <h3>Scenario 2: Form Validation Errors</h3>
        <p>When a form fails validation, move focus to the first error:</p>
        <pre style="background: var(--bg-secondary); padding: 1rem; border-radius: 4px; overflow-x: auto; font-family: monospace; font-size: 0.9rem;">
// Find first error
const firstError = form.querySelector('[aria-invalid="true"]');
if (firstError) {
  firstError.focus();
  firstError.scrollIntoView({ behavior: 'smooth', block: 'center' });
}
        </pre>

        <h3>Scenario 3: Search Results</h3>
        <p>After search, focus on results count or first result:</p>
        <pre style="background: var(--bg-secondary); padding: 1rem; border-radius: 4px; overflow-x: auto; font-family: monospace; font-size: 0.9rem;">
// After search completes
const resultsHeading = document.querySelector('.results-count');
resultsHeading.setAttribute('tabindex', '-1');
resultsHeading.focus();
        </pre>
    </section>

    <section id="testing">
        <h2>Testing Tab Order & Focus</h2>

        <h3>Keyboard Testing Steps</h3>
        <ol style="list-style: decimal; padding-left: 1.5rem;">
            <li>Click away from the page</li>
            <li>Press Tab to focus the first element</li>
            <li>Press Tab repeatedly through entire page</li>
            <li>Verify focus order matches visual layout (top to bottom, left to right)</li>
            <li>Press Shift+Tab to go backwards</li>
            <li>Verify focus indicators are clearly visible</li>
            <li>Check that Tab eventually reaches the footer</li>
            <li>Try opening/closing modals and verify focus trap works</li>
            <li>Press Escape on any modal to close it</li>
        </ol>

        <h3>Screen Reader Testing</h3>
        <ul>
            <li>NVDA (free, Windows)</li>
            <li>JAWS (commercial)</li>
            <li>VoiceOver (free, Mac/iOS)</li>
        </ul>

        <h3>Automated Tools</h3>
        <ul>
            <li>axe DevTools</li>
            <li>WAVE</li>
            <li>Lighthouse (Chrome DevTools)</li>
        </ul>

        <h3>Manual Checklist</h3>
        <ul>
            <li>☐ Tab order matches visual layout</li>
            <li>☐ All interactive elements are reachable via Tab</li>
            <li>☐ Focus indicators are visible (3px, high contrast)</li>
            <li>☐ No focus traps (except intentional modals)</li>
            <li>☐ Focus returns after modal closes</li>
            <li>☐ Skip link works and hides when not focused</li>
            <li>☐ Can Tab past infinite scroll to reach footer</li>
            <li>☐ No keyboard shortcuts conflict with browser/OS defaults</li>
            <li>☐ Focus follows updates to dynamic content</li>
        </ul>
    </section>

    <section id="takeaways">
        <h2>Key Takeaways</h2>
        <ul>
            <li>Focus indicates which element is currently active</li>
            <li>Tab order should follow natural source code order</li>
            <li>Never use <code>tabindex > 0</code>—it breaks keyboard navigation</li>
            <li>Focus indicators must be visible (3px outline, 3:1 contrast)</li>
            <li>Focus traps are WCAG violations—avoid them (except modals)</li>
            <li>Skip links reduce tab count to reach main content</li>
            <li>Dynamic content requires focus management via JavaScript</li>
            <li>Test with keyboard, screen reader, and developer tools</li>
            <li>Keyboard accessibility prevents lawsuits and improves UX</li>
        </ul>
    </section>

    <section id="resources">
        <h2>Resources</h2>
        <ul>
            <li><a href="https://www.w3.org/WAI/WCAG21/Understanding/focus-visible.html">WCAG 2.1: Focus Visible (2.4.7)</a></li>
            <li><a href="https://www.w3.org/WAI/WCAG21/Understanding/no-keyboard-trap.html">WCAG 2.1: No Keyboard Trap (2.1.2)</a></li>
            <li><a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Global_attributes/tabindex">MDN: tabindex attribute</a></li>
            <li><a href="https://www.a11yproject.com/posts/2013-01-02-keyboard-accessibility/">A11y Project: Keyboard Accessibility</a></li>
            <li><a href="https://www.nvaccess.org/">NVDA Screen Reader (Free)</a></li>
        </ul>
    </section>
</article>

<section style="margin-top: 3rem;">
    <div class="highlight">
        <h2 style="margin-top: 0;">Audit Your Keyboard Navigation</h2>
        <p>Free scan to verify focus order, tab traps, and keyboard accessibility compliance.</p>
        <button class="btn btn-primary" onclick="openPricingForm('free-scan', 'Keyboard Navigation Audit')">Check Keyboard Access →</button>
    </div>
</section>
HTML;

include __DIR__ . '/../../template.php';
?>
