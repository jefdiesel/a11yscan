# A11yscan Web Design Skill Guide

## Overview

This skill guide covers building and maintaining the A11yscan website with a focus on WCAG 2.1 Level AAA compliance, modern minimalist design principles, and accessible content creation.

---

## Table of Contents

1. [WCAG 2.1 Compliance Requirements](#wcag-21-compliance-requirements)
2. [Design System & Color Palette](#design-system--color-palette)
3. [Template System](#template-system)
4. [Blog Content Strategy](#blog-content-strategy)
5. [Legal Accuracy & Disclaimer Requirements](#legal-accuracy--disclaimer-requirements)
6. [Blog Post CTA Customization](#blog-post-cta-customization)
7. [Quick Start Guide](#quick-start-guide)
8. [Accessibility Best Practices](#accessibility-best-practices)
9. [File Structure](#file-structure)

---

## WCAG 2.1 Compliance Requirements

All A11yscan pages must meet WCAG 2.1 Level AAA standards. Key requirements:

### Perceivable
- **Color Contrast**: 7:1 for normal text, 4.5:1 for large text (Level AAA)
- **Text Resize**: Support up to 200% zoom without loss of functionality
- **Alternative Text**: All images must have descriptive alt text
- **Heading Structure**: Logical heading hierarchy (h1 â†’ h2 â†’ h3)

### Operable
- **Keyboard Navigation**: All interactive elements accessible via keyboard
- **Focus Indicators**: 3px solid outline with 2px offset (visible on all elements)
- **Skip Links**: "Skip to main content" link at page top
- **Touch Targets**: Minimum 44Ã—44px for all interactive elements

### Understandable
- **Language Declaration**: `lang="en"` on html element
- **Clear Labels**: Descriptive form labels and button text
- **Error Prevention**: Clear validation messages
- **Consistent Navigation**: Identical navigation across all pages

### Robust
- **Semantic HTML**: Proper use of semantic elements
- **ARIA Labels**: Only when necessary (prefer native HTML)
- **Valid Markup**: No HTML validation errors

---

## Design System & Color Palette

### Color Variables
```css
:root {
    --text-primary: #0a0e27;     /* 15.89:1 contrast on white */
    --text-secondary: #2d3142;   /* 11.63:1 contrast on white */
    --bg-primary: #ffffff;
    --bg-secondary: #f8f9fb;
    --bg-tertiary: #f0f2f7;
    --accent-primary: #2563eb;   /* 4.68:1 on white (AAA large text) */
    --accent-dark: #1e40af;
    --accent-light: #3b82f6;
    --border: #d1d5db;
    --footer-text: #ffffff;
}
```

### Typography
- **Font Stack**: `-apple-system, BlinkMacSystemFont, 'Segoe UI', 'Helvetica Neue', sans-serif`
- **Base Size**: 16px (1rem)
- **Line Height**: 1.6 (body), 1.2 (headings)
- **Weights**: 500 (normal), 600 (semi-bold), 700 (bold), 800 (extra-bold)

### Component Styling

**Buttons**
```css
.btn {
    padding: 0.85rem 1.75rem;
    border-radius: 6px;
    font-size: 1rem;
    font-weight: 600;
    min-height: 44px;
    transition: all 0.2s;
}

.btn-primary {
    background: var(--accent-primary);
    color: white;
}

.btn-primary:hover {
    background: var(--accent-dark);
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(37, 99, 235, 0.3);
}

.btn-primary:focus {
    outline: 3px solid var(--accent-primary);
    outline-offset: 2px;
}
```

**Cards with Aligned Buttons (Flexbox)**
```css
.card {
    background: var(--bg-primary);
    border: 1px solid var(--border);
    border-radius: 8px;
    padding: 2rem;
    transition: all 0.3s;
    display: flex;
    flex-direction: column;
}

.card p {
    flex-grow: 1;
}

.card a,
.card button {
    margin-top: auto;
}

.card:hover {
    border-color: var(--accent-primary);
    box-shadow: 0 4px 20px rgba(37, 99, 235, 0.1);
    transform: translateY(-2px);
}
```

**Highlights**
```css
.highlight {
    background: var(--bg-secondary);
    border-left: 4px solid var(--accent-primary);
    padding: 2rem;
    border-radius: 4px;
}
```

---

## Template System

The `template.php` file serves as the master template for all pages. It includes:

1. **HTML5 Semantic Structure**
2. **Complete CSS (embedded)**
3. **Accessible Navigation**
4. **Skip Link Implementation**
5. **Footer with site links**
6. **Pricing Modal Integration**

### Usage in Page Files

**From root directory (`index.php`):**
```php
<?php
$pageTitle = 'Page Title';
$pageDescription = 'Meta description for SEO';
$currentPage = 'pagename'; // For active nav highlighting

$pageContent = <<<'HTML'
<div class="hero">
    <h1>Page Heading</h1>
    <p>Page description</p>
</div>

<section>
    <h2>Section Title</h2>
    <p>Section content</p>
</section>
HTML;

include 'template.php';
?>
```

**From `/blog/` directory (`blog/index.php`):**
```php
<?php
$pageTitle = 'Page Title';
$pageDescription = 'Meta description for SEO';
$currentPage = 'pagename'; // For active nav highlighting

$pageContent = <<<'HTML'
<div class="hero">
    <h1>Page Heading</h1>
    <p>Page description</p>
</div>

<section>
    <h2>Section Title</h2>
    <p>Section content</p>
</section>
HTML;

include '../template.php';  // Go up one level to root
?>
```

**From `/blog/posts/` directory (`blog/posts/post-name.php`):**
```php
<?php
$pageTitle = 'Page Title';
$pageDescription = 'Meta description for SEO';
$currentPage = 'pagename'; // For active nav highlighting

$pageContent = <<<'HTML'
<article class="blog-post">
    <section id="intro">
        <h1>Page Heading</h1>
        <p>Page content</p>
    </section>
</article>
HTML;

include __DIR__ . '/../../template.php';  // Go up two levels to root
?>
```

### Template Features

**Navigation**
- Sticky header with active page highlighting
- "Get Scan" CTA button
- Mobile-responsive (collapses at 768px)
- All links use absolute URLs: `https://a11yscan.xyz/`

**Skip Link**
- Positioned absolutely, hidden until focused
- Jumps to `#main-content` div
- Keyboard accessible

**Footer**
- Four-column grid (responsive)
- Links to all services and legal pages
- Contact information
- Copyright notice

---

## Blog Content Strategy

### Blog Listing Page (`blog/index.php`)

The blog listing page displays article cards organized by topic category. Each card must have:

1. **Article metadata** (`id`, `datetime`)
2. **Date display** (readable format)
3. **Article title** (h3 heading)
4. **Excerpt/description** (1-2 sentences)
5. **Custom CTA button** (topic-specific, NOT generic "Read More")

### Blog Card Structure

```php
<article class="card blog-card" tabindex="0" id="article-unique-id">
    <time datetime="2025-10-24" class="blog-date">Oct 24, 2025</time>
    <h3 style="font-size: 1.3rem; margin-top: 0.5rem;">Article Title</h3>
    <p>Brief excerpt or description of what the article covers.</p>
    <a href="https://a11yscan.xyz/blog/posts/article-filename.php" class="btn btn-primary" style="margin-top: 1rem;">Custom CTA Button Text â†’</a>
</article>
```

### Blog Card Button Text Guidelines

**NEVER use generic "Read More" buttons.** Each button must be:
- **Action-oriented**: Start with a verb (View, Learn, Get, Check, See, Try, Master, etc.)
- **Topic-specific**: Reference what the article covers
- **Value-driven**: Tell users what they'll get
- **Concise**: 2-5 words maximum
- **Includes arrow**: End with ` â†’` for visual direction

**Examples of Good Button Text:**
- `Learn Your Rights â†’` (for user rights article)
- `View 2024 Data â†’` (for lawsuit trends)
- `Get Screen Reader Guide â†’` (for blind users design)
- `Test Your Contrast â†’` (for color contrast guide)
- `Check Your Risk â†’` (for liability/risk articles)
- `Master WCAG Levels â†’` (for WCAG compliance)
- `Find An Attorney â†’` (for legal support)
- `Fix Mobile Issues â†’` (for mobile accessibility)

**Examples of Bad Button Text:**
- âŒ `Read More` (generic, no value)
- âŒ `Click Here` (not descriptive)
- âŒ `Learn More About This Topic` (too long)
- âŒ `Article` (not actionable)

### Customizing Button Text by Topic Category

**Litigation & Legal Risk:**
- Focus on risk assessment, data, legal protection, and action
- Examples: 
  - `View 2024 Data â†’`
  - `See 2025 Trends â†’`
  - `Check Your Risk â†’`
  - `Get Defense Guide â†’`
  - `Assess Your Risk â†’`
  - `Learn Your Rights â†’`
  - `Find An Attorney â†’`
  - `Check Your State â†’`
  - `Understand The Gap â†’`
  - `Review Settlements â†’`

**User Accessibility Personas:**
- Focus on solutions, understanding user needs, and implementation
- Examples: 
  - `Get Screen Reader Guide â†’`
  - `View Visual Solutions â†’`
  - `See Audio Solutions â†’`
  - `Learn Keyboard Access â†’`
  - `Get Clarity Tips â†’`
  - `View ND Patterns â†’` (neurodivergent)

**Fundamentals & Best Practices:**
- Focus on skill-building, testing, and practical implementation
- Examples: 
  - `Master WCAG Levels â†’`
  - `Test Your Contrast â†’`
  - `Write Better Alt Text â†’`
  - `Fix Mobile Issues â†’`
  - `Learn ADA Rules â†’`
  - `Try Navigation Tips â†’`
  - `See HTML Examples â†’`
  - `Boost Your SEO â†’`
  - `Calculate Your Costs â†’`
  - `Get Response Guide â†’`

### How to Update Blog Card Buttons

When adding a new article to `blog/index.php`:

1. **Write the article excerpt** (1-2 sentences describing what readers will learn)
2. **Craft custom button text** based on the article topic:
   - Identify the main takeaway or action
   - Use an action verb that matches the content
   - Keep it 2-5 words
   - Add the arrow: ` â†’`
3. **Match the tone to the category**:
   - Legal = risk/protection focused
   - Personas = solution focused
   - Fundamentals = skill/implementation focused

**Example workflow:**

Article: "Color Contrast: The Foundation of Visual Accessibility"
- Excerpt: "Discover why color contrast matters, how to calculate it, and tools to ensure your design meets WCAG standards."
- Button text: `Test Your Contrast â†’`
- Reasoning: The article teaches testing, so "Test" is the action verb

Article: "2024 Accessibility Lawsuit Trends: What the Data Shows"
- Excerpt: "Analysis of 4,000+ digital accessibility lawsuits filed in 2024, settlement amounts, defendant profiles, and what this means for your organization."
- Button text: `View 2024 Data â†’`
- Reasoning: The article presents data, so "View" + year specificity works

### Blog Post Structure (Individual Posts)

⚠️ **CRITICAL: Header Positioning Rule**

Every blog post must follow this exact structure:

1. **Article wrapper** with `class="blog-post"`
2. **First section** with `id="intro"` containing:
   - `<time>` element with date (with inline styles)
   - `<h1>` with title (with inline styles)
   - `<h2>` with introduction heading
   - Introduction content
3. **Additional sections** (id, h2 headings, content)
4. **Legal Disclaimer section** (mandatory)
5. **Customized CTA section** (mandatory)

**IMPORTANT: Header (date + title) MUST be INSIDE the first section, NOT in a separate `<header>` element.**

### Why Header Positioning Matters

Using a separate `<header class="post-header">` element **breaks the layout**:
- Template CSS for `.post-header` causes positioning conflicts
- Header becomes disconnected from scrolling content
- Screen reader users lose semantic structure
- Keyboard navigation becomes confusing
- Header may appear "stuck" or misaligned

### ✅ CORRECT Blog Post Structure

```php
<?php
$pageTitle = 'Blog Post Title - A11yscan';
$pageDescription = 'SEO-optimized description under 160 characters';
$currentPage = 'blog';

$pageContent = <<<'HTML'
<article class="blog-post">
    <!-- CORRECT: Header INSIDE first section with inline styles -->
    <section id="intro">
        <time datetime="2025-01-15" style="font-size: 0.9rem; color: var(--text-secondary); font-weight: 500; display: block; margin-bottom: 0.5rem;">January 15, 2025</time>
        <h1 style="font-size: 2.5rem; font-weight: 700; line-height: 1.2; margin-bottom: 2rem;">Main Blog Post Title</h1>
        
        <h2>Introduction</h2>
        <p>Opening paragraph that hooks the reader and establishes context.</p>
        <p>Second paragraph that previews what the article covers.</p>
    </section>

    <section id="section-name">
        <h2>Main Section Heading</h2>
        <p>Section content with proper paragraph spacing.</p>
        
        <h3>Subsection Heading</h3>
        <p>Subsection content.</p>
    </section>

    <section id="another-section">
        <h2>Another Section</h2>
        <p>More content here.</p>
    </section>

    <!-- More sections as needed... -->

    <!-- LEGAL DISCLAIMER (mandatory) -->
    <section style="margin-top: 3rem; padding-top: 2rem; border-top: 2px solid var(--border);">
        <div style="background: var(--bg-tertiary); padding: 1.5rem; border-radius: 4px; border-left: 4px solid var(--accent-primary);">
            <h3 style="margin-top: 0; font-size: 1.1rem;">Legal Disclaimer</h3>
            <p style="font-size: 0.95rem; margin-bottom: 0;"><strong>A11yscan is not a law firm and does not provide legal advice.</strong> We operate under best practices based on WCAG Guidelines, ADA requirements, and applicable jurisdictions. Courts don't always agree on terms and expectations for web accessibility, and legal standards can vary by jurisdiction. However, an accessible website works better for all users regardless of legal requirements. For specific legal guidance, consult with a qualified attorney specializing in accessibility law.</p>
        </div>
    </section>

    <!-- CUSTOMIZED CTA (mandatory) -->
    <section style="margin-top: 3rem;">
        <div class="highlight">
            <h2 style="margin-top: 0;">Topic-Specific CTA Heading</h2>
            <p>Action-oriented subtext related to the post topic.</p>
            <button class="btn btn-primary" onclick="openPricingForm('service-tier', 'Email Subject')">Action Button Text</button>
        </div>
    </section>
</article>
HTML;

include 'template.php';
?>
```

### ❌ INCORRECT Blog Post Structure (DO NOT USE)

```php
<!-- WRONG: Separate <header> element outside sections -->
<article class="blog-post">
    <header class="post-header">
        <time datetime="2025-01-15">January 15, 2025</time>
        <h1>Main Blog Post Title</h1>
    </header>

    <section id="intro">
        <p>Content here...</p>
    </section>
</article>
```

**Problems with separate header:**
- ❌ CSS `.post-header` class conflicts with template
- ❌ Header disconnected from section structure
- ❌ Breaks semantic HTML hierarchy
- ❌ Screen readers announce elements out of order
- ❌ Positioning issues on scroll
- ❌ Keyboard navigation becomes unclear

### Blog Post Header Inline Styles Reference

Use these exact styles for date and h1 elements:

**For `<time>` element:**
```html
<time datetime="2025-01-15" style="font-size: 0.9rem; color: var(--text-secondary); font-weight: 500; display: block; margin-bottom: 0.5rem;">January 15, 2025</time>
```

**For `<h1>` element:**
```html
<h1 style="font-size: 2.5rem; font-weight: 700; line-height: 1.2; margin-bottom: 2rem;">Article Title</h1>
```

These styles ensure:
- Proper sizing and spacing
- Correct color contrast
- Alignment with first section content
- Smooth scrolling behavior

### Blog Post Section Structure Rules

Each section must have:
1. **Unique `id` attribute** - For keyboard navigation and anchor links
2. **`<h2>` heading** - Section title (NOT `<h1>` or `<h3>`)
3. **Content paragraphs** - Can include `<h3>` subheadings
4. **Semantic markup** - Use `<ul>`, `<ol>`, `<p>` appropriately

**Example section:**
```php
<section id="main-content">
    <h2>Section Heading</h2>
    
    <p>First paragraph of content.</p>
    
    <h3>Subsection</h3>
    <p>More content under subsection.</p>
    
    <ul>
        <li>List item 1</li>
        <li>List item 2</li>
    </ul>
</section>
```

### Keyboard Navigation with Sections

The template automatically makes blog post sections keyboard-tabbable:
- Each `<section id="...">` is focusable via Tab key
- Blue outline appears when focused
- Smooth scroll positions section at top
- Header scrolls naturally with content (not sticky)

**This is why sections need:**
- ✅ `id` attribute for focus management
- ✅ `<h2>` heading for screen readers
- ✅ Content inside section (not separate)

**This is why separate headers fail:**
- ❌ Disconnects date/title from section flow
- ❌ Breaks keyboard navigation
- ❌ Confuses screen reader users
- ❌ Creates CSS positioning conflicts

### Content Guidelines

**Headings**
- h1: Post title only (one per page)
- h2: Main sections
- h3: Subsections
- Never skip heading levels

**Paragraphs**
- Keep paragraphs focused (3-5 sentences)
- Use short sentences for readability
- Break up long content with headings

**Links**
- Use descriptive link text (not "click here")
- Open external links in same tab (accessibility best practice)
- Ensure 3px focus outline
- Use absolute URLs: `https://a11yscan.xyz/blog/posts/filename.php`

**Lists**
- Use semantic `<ul>` or `<ol>` tags
- Style is handled by template CSS
- Keep list items concise

---

## Legal Accuracy & Disclaimer Requirements

**CRITICAL: No fabricated legal content allowed**

### Prohibited Content

**NEVER make up or fabricate:**
- WCAG guidelines, success criteria, or specific rule numbers
- Court cases, lawsuit names, or legal precedents
- Case law, settlements, or verdict amounts
- Specific companies involved in accessibility lawsuits (unless verified)
- Legal contacts, firms, or attorney information
- Exact legal standards or requirements
- Specific compliance deadlines or mandates

### What You CAN Include

**Accurate, general statements:**
- General discussion of ADA Title III applicability to websites
- Broad trends in accessibility litigation (e.g., "lawsuits have increased")
- Reference to WCAG 2.1 as widely-accepted guidelines without claiming legal requirement
- General accessibility best practices
- User experience benefits of accessibility
- Technical implementation guidance

### Mandatory Blog Post Disclaimer

**Every blog post MUST include this disclaimer at the TOP, right after the first section (before main content):**

```php
<section style="margin-top: 3rem; padding-top: 2rem; border-top: 2px solid var(--border);">
    <div style="background: var(--bg-tertiary); padding: 1.5rem; border-radius: 4px; border-left: 4px solid var(--accent-primary);">
        <h3 style="margin-top: 0; font-size: 1.1rem;">Legal Disclaimer</h3>
        <p style="font-size: 0.95rem; margin-bottom: 0;"><strong>A11yscan is not a law firm and does not provide legal advice.</strong> We operate under best practices based on WCAG Guidelines, ADA requirements, and applicable jurisdictions. Courts don't always agree on terms and expectations for web accessibility, and legal standards can vary by jurisdiction. However, an accessible website works better for all users regardless of legal requirements. For specific legal guidance, consult with a qualified attorney specializing in accessibility law.</p>
    </div>
</section>
```

### Writing Guidelines for Legal Topics

**When discussing legal matters:**

1. **Use qualifying language:**
   - "Generally recognized..."
   - "Many courts have found..."
   - "Industry best practices suggest..."
   - "WCAG guidelines recommend..."
   - "Commonly accepted standards..."

2. **Avoid absolute statements:**
   - âŒ "The ADA requires WCAG 2.1 AA compliance"
   - âœ… "WCAG 2.1 Level AA is widely recognized as a benchmark for accessibility"
   
   - âŒ "You will be sued if you don't comply"
   - âœ… "Inaccessible websites face increased litigation risk"
   
   - âŒ "In the case of Smith v. Company (2024)..."
   - âœ… "Recent litigation trends show..."

3. **Focus on practical benefits:**
   - Emphasize user experience improvements
   - Highlight business benefits (larger audience, better SEO)
   - Discuss technical implementations
   - Reference specific WCAG success criteria only when accurate

4. **When uncertain:**
   - Don't make up specifics
   - Use general trends instead
   - Link to official WCAG documentation when available
   - Recommend consulting legal professionals

### Tone and Approach

**Balance accessibility advocacy with legal caution:**
- Be informative without being prescriptive about legal obligations
- Focus on the "why" (better UX) more than the "must" (legal requirements)
- Acknowledge legal complexity while promoting accessibility
- Emphasize that accessibility benefits everyone, regardless of compliance status

---

## Blog Post CTA Customization

**Every blog post must include a customized CTA** that matches the blog topic. The CTA heading, subtext, button text, and form subject should all relate directly to what the post covers.

### CTA Structure

Each blog post CTA includes:
1. **Topic-specific heading** - References what was discussed in the post
2. **Action-oriented subtext** - Clear next step
3. **Custom button text** - Action verb + topic (e.g., "Scan My Alt Text", "Check Keyboard Access")
4. **Form subject parameter** - Pre-fills the service concern in the email

### CTA Template

```php
<section style="margin-top: 3rem;">
    <div class="highlight">
        <h2 style="margin-top: 0;">[Topic-Specific Heading]</h2>
        <p>[Action-oriented subtext related to the post topic]</p>
        <button class="btn btn-primary" onclick="openPricingForm('[service-tier]', '[subject]')">[Button Text]</button>
    </div>
</section>
```

### CTA Examples

**Alt Text Post:**
```php
<button class="btn btn-primary" onclick="openPricingForm('free-scan', 'Alt Text Audit')">Scan My Alt Text</button>
```

**Keyboard Navigation Post:**
```php
<button class="btn btn-primary" onclick="openPricingForm('free-scan', 'Keyboard Navigation Audit')">Check Keyboard Access</button>
```

**Litigation Risk Post:**
```php
<button class="btn btn-primary" onclick="openPricingForm('deep-audit', 'Litigation Risk Assessment')">Assess My Risk</button>
```

**WCAG Compliance Post:**
```php
<button class="btn btn-primary" onclick="openPricingForm('partial-audit', 'WCAG Compliance Check')">Get Audit Report</button>
```

### CTA Best Practices

**Button Text Should:**
- Start with action verb: Scan, Check, Audit, Assess, Review, Test
- Be specific to the post topic (never generic "Start Free Scan")
- Use first-person: "My", "Your"
- Keep under 5 words
- Match the appropriate service tier

**Service Tier Selection:**
- **Free Scan**: For foundational topics (alt text, contrast, keyboard, forms, mobile)
- **Partial Audit**: For compliance topics (WCAG, ADA, personas, deeper analysis)
- **Deep Audit**: For enterprise/risk topics (litigation, lawsuit data, risk assessment)

**Match the CTA to the blog topic as applicable** - The CTA and button text should always connect directly to what the post discusses.

---

## Quick Start Guide

### Creating a New Page

1. Create new PHP file (e.g., `new-page.php`)
2. Set page variables:
   ```php
   <?php
   $pageTitle = 'Page Title - A11yscan';
   $pageDescription = 'SEO description';
   $currentPage = 'pagename';
   ```
3. Define content in `$pageContent` heredoc
4. Include template: `include 'template.php';` (or `../template.php` for subdirectories)

### Creating a New Blog Post

1. Create file in `/blog/posts/`: `post-filename.php`
2. Use blog post structure template
3. Include **mandatory legal disclaimer**
4. Add **customized CTA** based on topic
5. Set `$currentPage = 'blog'`
6. Use `include __DIR__ . '/../../template.php';`
7. Add card to `blog/index.php` with:
   - Custom button text (NOT "Read More")
   - Absolute URL: `https://a11yscan.xyz/blog/posts/filename.php`
   - Compelling excerpt

### Testing Accessibility

**Keyboard Navigation**
- Tab through all interactive elements
- Verify visible focus indicators
- Test skip link functionality

**Screen Reader**
- Run through page with NVDA/JAWS
- Verify heading hierarchy
- Check alt text descriptions

**Color Contrast**
- Use browser dev tools or contrast checker
- Verify 7:1 ratio for normal text
- Verify 4.5:1 for large text

**Zoom Testing**
- Test at 200% zoom
- Verify no horizontal scrolling
- Check text reflow

---

## Accessibility Best Practices

### Focus Management
- All interactive elements must be keyboard accessible
- Focus indicators: 3px solid outline with 2px offset
- Logical tab order (top to bottom, left to right)
- Skip links for main content areas

### Semantic HTML
```html
<!-- Good -->
<button onclick="submitForm()">Submit</button>
<nav><a href="page.php">Link</a></nav>

<!-- Bad -->
<div onclick="submitForm()">Submit</div>
<div><a href="page.php">Link</a></div>
```

### ARIA (Use Sparingly)
- Use native HTML elements first
- Add ARIA only when necessary
- Common uses:
  - `role="banner"` on header
  - `role="navigation"` on nav
  - `role="contentinfo"` on footer
  - `aria-label` for nav landmarks

### Images
```html
<!-- Decorative -->
<img src="decoration.svg" alt="" />

<!-- Informative -->
<img src="chart.png" alt="Bar chart showing 73% increase in accessibility lawsuits" />

<!-- Logo -->
<img src="logo.svg" alt="A11yscan logo" />
```

### Forms
```html
<label for="email">Email Address</label>
<input type="email" id="email" name="email" required aria-required="true">
```

---

## File Structure

```
/
â”œâ”€â”€ index.php              # Homepage
â”œâ”€â”€ template.php           # Master template (all pages include this)
â”œâ”€â”€ contact-handler.php    # Form handler
â”œâ”€â”€ logo.svg               # Site logo
â”œâ”€â”€ sitemap.xml            # XML sitemap
â”œâ”€â”€ robots.txt             # Search engine rules
â”œâ”€â”€ blog/
â”‚   â”œâ”€â”€ index.php          # Blog listing
â”‚   â””â”€â”€ posts/
â”‚       â”œâ”€â”€ post-name-1.php
â”‚       â”œâ”€â”€ post-name-2.php
â”‚       â””â”€â”€ ... (individual blog posts)
â”œâ”€â”€ accessibility-statement.php
â””â”€â”€ README.md             # Project documentation
```

### Key Files

**template.php** (root)
- Master template with all CSS and JavaScript
- Navigation with absolute URLs
- Pricing modal
- Skip link implementation
- Footer

**blog/index.php**
- Blog listing page with card grid
- Includes `../template.php`
- Blog cards use flexbox for button alignment
- Each card has custom button text (never "Read More")

**blog/posts/*.php**
- Individual blog posts
- Include `__DIR__ . '/../../template.php'`
- Must have legal disclaimer
- Must have customized CTA

---

**Last Updated**: October 26, 2025
