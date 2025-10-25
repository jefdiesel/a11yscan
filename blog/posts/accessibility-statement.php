<?php
/**
 * @title accessiuility statement
 * @description Learn more about accessiuility statement and web accessibility best practices.
 * @date 2024-10-25
 * @category fundamentals
 * @author A11yscan Team
 * @featured false
 */

$pageTitle = 'Accessibility Statement | A11yscan';
$pageDescription = 'A11yscan accessibility statement detailing our commitment to WCAG 2.1 Level AAA compliance.';
$currentPage = 'accessibility-statement';

$pageContent = <<<'HTML'
<section class="hero">
    <h1>Accessibility Statement</h1>
    <p>A11yscan is committed to ensuring digital accessibility for all users.</p>
</section>

<section>
    <h2>Our Commitment</h2>
    <p>A11yscan is dedicated to providing an accessible website that complies with the Web Content Accessibility Guidelines (WCAG) 2.1 Level AAA standards. We believe accessibility is not just a legal requirement but a fundamental principle of inclusive design. We are committed to ensuring that everyone, regardless of ability, can access and use our website effectively.</p>
</section>

<section>
    <h2>Conformance Status</h2>
    <p>This website conforms to WCAG 2.1 Level AAA standards. We have implemented comprehensive accessibility features across all pages and functionality, including:</p>
    <ul style="list-style: disc; padding-left: 1.5rem; margin-bottom: 1rem;">
        <li style="margin-bottom: 0.75rem;">Semantic HTML structure for proper content hierarchy</li>
        <li style="margin-bottom: 0.75rem;">7:1 color contrast ratios exceeding AAA requirements</li>
        <li style="margin-bottom: 0.75rem;">Full keyboard navigation support with visible focus indicators</li>
        <li style="margin-bottom: 0.75rem;">Descriptive alt text for all images</li>
        <li style="margin-bottom: 0.75rem;">ARIA labels and landmarks for screen reader support</li>
        <li style="margin-bottom: 0.75rem;">Mobile and responsive design for all devices</li>
        <li style="margin-bottom: 0.75rem;">Skip links to bypass repetitive content</li>
        <li style="margin-bottom: 0.75rem;">Accessible form controls with clear error messages</li>
        <li style="margin-bottom: 0.75rem;">Reduced motion support for users with vestibular disorders</li>
    </ul>
</section>

<section>
    <h2>Accessibility Features</h2>
    
    <h3>Keyboard Navigation</h3>
    <p>All interactive elements are fully accessible via keyboard. You can navigate through links, buttons, and form fields using the Tab key. Press Shift+Tab to move backwards. All functionality available via mouse is also available via keyboard.</p>
    
    <h3>Screen Reader Support</h3>
    <p>This website is designed to work with screen readers including NVDA, JAWS, and VoiceOver. We use semantic HTML and ARIA labels to ensure screen reader users receive accurate information about page structure and functionality.</p>
    
    <h3>Color Contrast</h3>
    <p>All text and interactive elements maintain at minimum 7:1 color contrast ratios, exceeding WCAG Level AAA requirements. This ensures readability for users with low vision and color blindness.</p>
    
    <h3>Resizable Text</h3>
    <p>You can increase text size up to 200% using your browser's zoom function without losing functionality or readability. All content remains accessible at larger sizes.</p>
    
    <h3>Focus Indicators</h3>
    <p>All interactive elements display clear, visible focus indicators when navigating with the keyboard. These indicators provide users with clear visual feedback about which element currently has focus.</p>
    
    <h3>Skip Links</h3>
    <p>This website includes skip links that allow keyboard users to bypass repetitive navigation and jump directly to main content. Press Tab immediately after loading the page to access skip links.</p>
</section>

<section>
    <h2>Tested with Assistive Technology</h2>
    <p>This website has been tested for accessibility using:</p>
    <ul style="list-style: disc; padding-left: 1.5rem; margin-bottom: 1rem;">
        <li style="margin-bottom: 0.75rem;">NVDA (free screen reader for Windows)</li>
        <li style="margin-bottom: 0.75rem;">VoiceOver (built-in screen reader for macOS and iOS)</li>
        <li style="margin-bottom: 0.75rem;">Keyboard-only navigation</li>
        <li style="margin-bottom: 0.75rem;">axe DevTools accessibility auditing</li>
        <li style="margin-bottom: 0.75rem;">WAVE accessibility evaluation tool</li>
        <li style="margin-bottom: 0.75rem;">Chrome DevTools Lighthouse accessibility audit</li>
    </ul>
</section>

<section>
    <h2>Known Limitations</h2>
    <p>While we strive for complete accessibility, we acknowledge these potential limitations:</p>
    <ul style="list-style: disc; padding-left: 1.5rem; margin-bottom: 1rem;">
        <li style="margin-bottom: 0.75rem;"><strong>Third-party content:</strong> External embedded content (maps, videos) may have accessibility limitations beyond our control. We provide text alternatives and descriptions where possible.</li>
        <li style="margin-bottom: 0.75rem;"><strong>PDF documents:</strong> While we tag PDFs for accessibility, older documents may have limited screen reader support.</li>
        <li style="margin-bottom: 0.75rem;"><strong>User-generated content:</strong> Content submitted by users may not meet accessibility standards until reviewed and remediated.</li>
    </ul>
</section>

<section>
    <h2>Accessibility Standards and Regulations</h2>
    <p>This website aims to comply with the following standards and regulations:</p>
    <ul style="list-style: disc; padding-left: 1.5rem; margin-bottom: 1rem;">
        <li style="margin-bottom: 0.75rem;"><strong>WCAG 2.1 Level AAA:</strong> The highest conformance level of the Web Content Accessibility Guidelines published by the W3C.</li>
        <li style="margin-bottom: 0.75rem;"><strong>Americans with Disabilities Act (ADA):</strong> Ensuring equal access to digital services for people with disabilities.</li>
        <li style="margin-bottom: 0.75rem;"><strong>Section 508:</strong> Accessibility requirements for federal government information technology.</li>
        <li style="margin-bottom: 0.75rem;"><strong>European Accessibility Act:</strong> Requirements for digital accessibility across the European Union.</li>
    </ul>
</section>

<section>
    <h2>Ongoing Commitment</h2>
    <p>Accessibility is not a one-time project for A11yscan. We maintain our accessibility commitments through:</p>
    <ul style="list-style: disc; padding-left: 1.5rem; margin-bottom: 1rem;">
        <li style="margin-bottom: 0.75rem;">Continuous monitoring and testing of website accessibility</li>
        <li style="margin-bottom: 0.75rem;">Regular accessibility audits by qualified professionals</li>
        <li style="margin-bottom: 0.75rem;">Incorporation of accessibility best practices in all development</li>
        <li style="margin-bottom: 0.75rem;">Staff training on accessibility principles and implementation</li>
        <li style="margin-bottom: 0.75rem;">Responsive remediation of accessibility issues as they're identified</li>
    </ul>
</section>

<section>
    <h2>Provide Feedback</h2>
    <p>We welcome feedback about the accessibility of this website. If you encounter any accessibility barriers or have suggestions for improvement, please contact us:</p>
    <p><strong>Email:</strong> <a href="mailto:accessibility@a11yscan.xyz">accessibility@a11yscan.xyz</a></p>
    <p><strong>Web Form:</strong> Submit accessibility feedback through our contact form</p>
    <p>We will respond to accessibility inquiries as promptly as possible and make reasonable efforts to resolve any identified issues.</p>
</section>

<section>
    <h2>Accessibility Resources</h2>
    <p>For more information about web accessibility, visit these helpful resources:</p>
    <ul style="list-style: disc; padding-left: 1.5rem; margin-bottom: 1rem;">
        <li style="margin-bottom: 0.75rem;"><a href="https://www.w3.org/TR/WCAG21/">WCAG 2.1 Guidelines (W3C)</a></li>
        <li style="margin-bottom: 0.75rem;"><a href="https://www.ada.gov/">Americans with Disabilities Act</a></li>
        <li style="margin-bottom: 0.75rem;"><a href="https://webaim.org/">WebAIM - Web Accessibility In Mind</a></li>
        <li style="margin-bottom: 0.75rem;"><a href="https://www.a11yproject.com/">The A11y Project</a></li>
        <li style="margin-bottom: 0.75rem;"><a href="https://www.nvaccess.org/">NVDA Screen Reader</a></li>
    </ul>
</section>

<section>
    <h2>Last Updated</h2>
    <p>This accessibility statement was last updated on October 23, 2025. We update this statement regularly as we implement new accessibility features and improvements.</p>
</section>

<section style="margin-top: 3rem;">
    <div class="highlight">
        <h2 style="margin-top: 0;">Questions About Accessibility?</h2>
        <p>Contact us at <a href="mailto:accessibility@a11yscan.xyz">accessibility@a11yscan.xyz</a> with any questions or concerns.</p>
    </div>
</section>
HTML;

include 'template.php';
?>
