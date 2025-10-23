<?php
$pageTitle = 'Alt Text That Actually Works: Writing for Screen Readers | A11yscan Blog';
$pageDescription = 'Learn how to write effective alt text for images. Discover techniques for describing images accessibly while improving SEO and conveying information accurately.';
$currentPage = 'blog';

$pageContent = <<<'HTML'
<article class="blog-post">
    <header class="post-header">
        <time datetime="2025-10-14">October 14, 2025</time>
        <h1>Alt Text That Actually Works: Writing for Screen Readers</h1>
        <p class="lead">Alt text—alternative text for images—represents a fundamental accessibility requirement. Yet many websites include alt text that is either missing, unhelpful, or actively misleading. Learning to write effective alt text is essential for screen reader users, SEO performance, and ensuring your website provides genuine accessibility.</p>
    </header>

    <section>
        <h2>Why Alt Text Matters</h2>
        <p>Approximately 2.2 billion people worldwide have vision impairments, including over 43 million who are blind. Many of these individuals use screen readers—software that reads web content aloud—to access websites and other digital content. Screen readers can read text, but they cannot interpret images. Alt text provides the textual description that allows screen readers to convey image meaning to their users.</p>
        <p>For screen reader users, alt text isn't just helpful—it's essential. Without alt text, an image communicates nothing. A website full of meaningful images becomes useless. Alt text transforms images from inaccessible barriers into accessible components of the user experience.</p>
        <p>Beyond accessibility, alt text provides practical benefits: it appears when images fail to load, provides context when CSS is disabled, and improves search engine optimization by helping search engines understand image content. Proper alt text is genuinely useful for everyone.</p>
        <p>WCAG requires alt text for all images. This requirement is absolute—there are no exceptions for decorative images or images already described in adjacent text. The distinction between decorative and informative images determines what goes in the alt attribute, but every image requires consideration.</p>
    </section>

    <section>
        <h2>Understanding the Purpose of Alt Text</h2>
        <p>Effective alt text serves a specific purpose: to provide equivalent information to what a sighted person receives from the image. If you remove the image from the page but keep the alt text, would the page still make sense? Would someone understand everything the image was meant to convey?</p>
        <p>This principle prevents common alt text mistakes. Alt text is not a caption—captions appear on screen and supplement alt text. Alt text is not metadata—it should not include technical information about the image file. Alt text is not a space to keyword-stuff for SEO—search engines recognize and penalize this practice.</p>
        <p>Alt text should answer these questions: What is this image? Why is it here? What information does it convey? What would a sighted user understand from this image that someone using a screen reader should also understand?</p>
    </section>

    <section>
        <h2>Alt Text for Informative Images</h2>
        <p>Informative images—those that convey important information—require descriptive alt text that accurately describes the image content.</p>

        <h3>Photographs and Illustrations</h3>
        <p>When your page includes a photograph or illustration that conveys information, describe what you see and why it matters. For example:</p>
        <p><strong>Poor alt text:</strong> "Photo"</p>
        <p><strong>Better alt text:</strong> "A developer reviewing accessibility guidelines on a computer screen"</p>
        <p><strong>Best alt text (context dependent):</strong> "A developer reviewing WCAG 2.1 Level AAA accessibility guidelines on a computer screen in an office setting"</p>
        <p>The "best" version includes more detail, but length should be appropriate to context. A small thumbnail image doesn't need as much detail as a large featured image. Consider what information is important and what detail would be distracting for a screen reader user.</p>

        <h3>Charts and Graphs</h3>
        <p>Charts and graphs present particular challenges because they communicate information visually that must be conveyed through alt text. A simple bar chart showing sales trends cannot be adequately described in a single line.</p>
        <p><strong>Poor alt text:</strong> "Chart"</p>
        <p><strong>Better alt text:</strong> "Bar chart showing quarterly sales trends for 2024"</p>
        <p><strong>Best approach:</strong> Combined alt text and data table. Use alt text to describe the chart type, purpose, and overall trend, then provide a data table below the chart containing the actual numbers. This allows screen reader users to understand both the visual trend and the precise data.</p>
        <p>Example: "Bar chart showing quarterly sales increasing from Q1 2024 ($250K) to Q4 2024 ($450K). See the table below for detailed numbers."</p>

        <h3>Screenshots</h3>
        <p>Screenshots require alt text describing their content. Describe what's visible and why the screenshot is relevant to the surrounding text.</p>
        <p><strong>Context:</strong> "Here's where to find the accessibility settings in Windows:"</p>
        <p><strong>Alt text:</strong> "Windows Settings window showing Accessibility section open with Vision options expanded, highlighting 'High contrast' toggle switch"</p>

        <h3>Maps</h3>
        <p>Maps present information visually through geography and markers. Alt text should describe the geographic area, any marked locations, and the purpose of the map.</p>
        <p><strong>Poor alt text:</strong> "Map"</p>
        <p><strong>Better alt text:</strong> "Map of Western United States showing A11yscan office locations in Seattle, San Francisco, Denver, and Austin"</p>
        <p>For complex maps, combine alt text with a text description: "Map showing our five regional offices" followed by a bulleted list of office locations and details.</p>
    </section>

    <section>
        <h2>Alt Text for Functional Images</h2>
        <p>Functional images—images that are interactive or part of buttons—require different alt text approach.</p>

        <h3>Logo Images</h3>
        <p>Logo images within a link should include the company or site name as alt text.</p>
        <p><strong>HTML:</strong> &lt;a href="/"&gt;&lt;img src="logo.svg" alt="A11yscan home"&gt;&lt;/a&gt;</p>
        <p>This tells screen reader users what the logo is and indicates it's a link to the home page.</p>

        <h3>Button Images</h3>
        <p>Images used as buttons should describe the button's function, not the image appearance.</p>
        <p><strong>Poor alt text:</strong> "Magnifying glass icon"</p>
        <p><strong>Better alt text:</strong> "Search" (when used in a search button)</p>
        <p>The visual appearance of the icon is less important than understanding the button's function.</p>

        <h3>Social Media Icons</h3>
        <p>Social media follow buttons with icon images should describe the social platform.</p>
        <p><strong>HTML:</strong> &lt;a href="https://twitter.com/a11yscan"&gt;&lt;img src="twitter.svg" alt="Follow us on Twitter"&gt;&lt;/a&gt;</p>
    </section>

    <section>
        <h2>Decorative Images and the Empty Alt Attribute</h2>
        <p>Decorative images—images that serve no informative purpose—should use an empty alt attribute: alt=""</p>
        <p>This tells screen readers to skip the image entirely, which is appropriate for purely decorative elements. Do not omit the alt attribute entirely; screen readers will read the filename, creating noise for users.</p>

        <h3>Identifying Decorative Images</h3>
        <p>A decorative image is one where removing it wouldn't change the page's meaning or functionality. Examples include design flourishes, background pattern images, divider lines, and visual spacing elements.</p>
        <p>However, many images that appear "decorative" actually convey information. A photo illustrating a concept isn't merely decorative—it provides visual explanation. An icon next to text that's central to the message isn't decorative—it reinforces the message. When in doubt, include descriptive alt text rather than using an empty alt attribute.</p>

        <h3>The aria-hidden Attribute</h3>
        <p>For images included as part of other elements that are already described, you can use aria-hidden="true" to hide the image from screen readers if necessary. However, proper alt text is usually the better approach.</p>
        <p><strong>Example:</strong> &lt;img src="logo.svg" alt="" aria-hidden="true"&gt; is appropriate only if the logo is already described in adjacent text, such as within an h1 element.</p>
    </section>

    <section>
        <h2>Alt Text Length and Practical Guidelines</h2>
        <p>No official character limit exists for alt text, but practical guidelines help you write effectively.</p>

        <h3>Keep It Concise</h3>
        <p>Alt text should typically be 100-125 characters or fewer, roughly equivalent to a sentence. This allows screen reader users to quickly understand the image without excessive reading. However, for complex images, longer alt text is appropriate if necessary.</p>

        <h3>Avoid Redundancy</h3>
        <p>If the image caption or surrounding text already describes the image, don't repeat that description in alt text. Instead, use alt text to add information the surrounding text doesn't provide or write a shorter alt text that works alongside the caption.</p>

        <h3>Write Naturally</h3>
        <p>Write alt text as if describing the image to someone over the phone. Natural language is easier for screen reader users to understand than overly formal or keyword-stuffed descriptions.</p>

        <h3>Avoid Phrases Like "Image of" or "Picture of"</h3>
        <p>Screen readers already announce that they're reading an image. Prefacing alt text with "Image of" is redundant. Write directly: "A developer typing code" rather than "Image of a developer typing code."</p>

        <h3>For Complex Images, Consider Extended Descriptions</h3>
        <p>When an image is too complex to describe adequately in short alt text, provide both concise alt text and a longer description:</p>
        <p><strong>HTML approach:</strong></p>
        <p style="background: #f0f2f7; padding: 1rem; border-radius: 4px; font-family: 'Courier New', monospace; font-size: 0.9rem; overflow-x: auto;">
        &lt;img src="chart.png" alt="Sales chart 2024" longdesc="sales-details.html"&gt;<br/>
        <br/>
        Or:<br/>
        <br/>
        &lt;figure&gt;<br/>
        &nbsp;&nbsp;&lt;img src="chart.png" alt="Sales chart showing quarterly growth"&gt;<br/>
        &nbsp;&nbsp;&lt;figcaption&gt;Detailed chart analysis...&lt;/figcaption&gt;<br/>
        &lt;/figure&gt;
        </p>
    </section>

    <section>
        <h2>Common Alt Text Mistakes</h2>
        <p>Understanding what not to do helps ensure your alt text is genuinely accessible.</p>

        <h3>Mistake 1: Missing Alt Text</h3>
        <p>The most common error is omitting alt text entirely. Every image must have an alt attribute—even if the value is empty for decorative images.</p>

        <h3>Mistake 2: Unhelpful Generic Alt Text</h3>
        <p>Alt text like "Image," "Photo," "Picture," or "Graphic" provides no useful information. Even image filenames like "123456.jpg" are better replaced with meaningful descriptions.</p>

        <h3>Mistake 3: Over-Detailed Alt Text</h3>
        <p>While detail is good, excessive detail becomes burdensome for screen reader users. A photo of a person doesn't need to describe clothing in minute detail unless clothing is central to the image's purpose.</p>

        <h3>Mistake 4: SEO Keyword Stuffing</h3>
        <p>Filling alt text with keywords is both an accessibility and SEO failure. Search engines recognize and penalize keyword stuffing, and it makes alt text unhelpful for screen reader users.</p>

        <h3>Mistake 5: Ignoring Image Context</h3>
        <p>The same image requires different alt text in different contexts. An image of the A11yscan team might need alt text "A11yscan team members at a company offsite" in a team page but "A11yscan leadership team" in a different context. Alt text should relate to why the image is included.</p>

        <h3>Mistake 6: Using Alt Text Instead of Captions</h3>
        <p>While both serve different purposes, many developers use alt text where captions would be better. Use alt text for the image itself and captions for additional context that sighted users also should see.</p>
    </section>

    <section>
        <h2>Testing Alt Text Effectiveness</h2>
        <p>Verify that your alt text is genuinely useful by testing it with screen readers.</p>

        <h3>Screen Reader Testing</h3>
        <p>Use free screen readers like NVDA (Windows) or VoiceOver (macOS/iOS) to hear how alt text sounds. Your alt text should make sense when read aloud in the order it appears.</p>

        <h3>Image Disable Testing</h3>
        <p>In your browser's developer tools, disable images. Can you understand the page and find important information? If not, your alt text isn't adequately descriptive.</p>

        <h3>Browser Tools</h3>
        <p>Browser extensions like axe DevTools or WAVE highlight missing alt text and flag images with generic or unhelpful alt attributes.</p>
    </section>

    <section>
        <h2>Special Cases and Image Types</h2>
        <p>Certain image types present unique alt text challenges.</p>

        <h3>Infographics</h3>
        <p>Complex infographics require substantial alt text or accompanying text descriptions. Provide both: concise alt text describing the overall message, plus a detailed text breakdown of the infographic's content.</p>

        <h3>Animated GIFs</h3>
        <p>Alt text for animated GIFs should describe the animation and its purpose.</p>
        <p><strong>Example:</strong> "Animated diagram showing how keyboard navigation flows through a web page"</p>

        <h3>Svg Images</h3>
        <p>SVG images sometimes require both image-level alt attributes and internal ARIA labels. Test SVGs with screen readers to ensure all necessary information is conveyed.</p>

        <h3>Background Images</h3>
        <p>CSS background images cannot have alt text. If a background image conveys important information, use a standard &lt;img&gt; element instead or provide the information through other means like text.</p>
    </section>

    <section>
        <h2>Key Takeaways</h2>
        <ul>
            <li>Alt text is essential for screen reader users, providing the only way they can understand image content.</li>
            <li>Write alt text that answers: What is this image? Why is it here? What information does it convey?</li>
            <li>Keep alt text concise (typically 100-125 characters) but complete enough to be meaningful.</li>
            <li>For decorative images, use an empty alt attribute (alt="") to tell screen readers to skip them.</li>
            <li>Avoid generic alt text like "Image" or "Photo" and never use alt text for SEO keyword stuffing.</li>
            <li>Different contexts may require different alt text for the same image.</li>
            <li>For complex images, combine concise alt text with detailed descriptions or data tables.</li>
            <li>Test alt text with screen readers to ensure it actually works for your users.</li>
        </ul>
    </section>

    <section>
        <h2>Resources</h2>
        <ul>
            <li><a href="https://www.w3.org/TR/WCAG21/#text-alternatives">WCAG 2.1 Text Alternatives (W3C)</a></li>
            <li><a href="https://webaim.org/articles/alttext/">Alternative Text (WebAIM)</a></li>
            <li><a href="https://www.a11yproject.com/posts/alt-text/">Alt Text (A11y Project)</a></li>
            <li><a href="https://www.nvaccess.org/">NVDA Screen Reader (Free)</a></li>
            <li><a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/img">HTML img Element (MDN)</a></li>
        </ul>
    </section>
</article>

<section style="margin-top: 3rem;">
    <div class="highlight">
        <h2 style="margin-top: 0;">Ready to Audit Your Site?</h2>
        <p>Get a free WCAG scan to identify missing or ineffective alt text and get expert recommendations.</p>
        <a href="index.php#pricing" class="btn btn-primary">Start Free Scan</a>
    </div>
</section>

<style>
.blog-post {
    max-width: 800px;
    margin: 0 auto;
}

.post-header {
    margin-bottom: 2rem;
    padding-bottom: 2rem;
    border-bottom: 2px solid var(--border);
}

.blog-post time {
    font-size: 0.9rem;
    color: var(--text-secondary);
    font-weight: 500;
}

.blog-post h1 {
    font-size: 2.5rem;
    font-weight: 700;
    line-height: 1.2;
    margin: 1rem 0;
}

.blog-post h2 {
    font-size: 1.75rem;
    margin-top: 2rem;
    margin-bottom: 1rem;
}

.blog-post h3 {
    font-size: 1.2rem;
    margin-top: 1.5rem;
    margin-bottom: 0.75rem;
}

.blog-post p {
    line-height: 1.8;
}

.blog-post ul {
    list-style: disc;
    padding-left: 1.5rem;
    margin-bottom: 1rem;
}

.blog-post li {
    margin-bottom: 0.75rem;
    line-height: 1.8;
    color: var(--text-secondary);
}

.blog-post a {
    color: var(--accent-primary);
    text-decoration: underline;
}

.blog-post a:hover {
    color: var(--accent-dark);
}

.lead {
    font-size: 1.2rem;
    color: var(--text-secondary);
    line-height: 1.8;
}

@media (max-width: 768px) {
    .blog-post h1 {
        font-size: 1.75rem;
    }
    
    .blog-post h2 {
        font-size: 1.35rem;
    }
}
</style>
HTML;

include 'template.php';
?>
