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
- **Heading Structure**: Logical heading hierarchy (h1 → h2 → h3)

### Operable
- **Keyboard Navigation**: All interactive elements accessible via keyboard
- **Focus Indicators**: 3px solid outline with 2px offset (visible on all elements)
- **Skip Links**: "Skip to main content" link at page top
- **Touch Targets**: Minimum 44×44px for all interactive elements

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

**Cards**
```css
.card {
    background: var(--bg-primary);
    border: 1px solid var(--border);
    border-radius: 8px;
    padding: 2rem;
    transition: all 0.3s;
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

### Template Features

**Navigation**
- Sticky header with active page highlighting
- "Get Scan" CTA button
- Mobile-responsive (collapses at 768px)

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

### Blog Post Structure

Every blog post should follow this structure:

1. **Post Header** (time + h1)
2. **Introduction Section** (context + preview)
3. **3-5 Main Content Sections** (h2 headings with subsections)
4. **Legal Disclaimer** (mandatory)
5. **Customized CTA** (topic-specific)

### Example Blog Post Structure

```php
<?php
$pageTitle = 'Blog Post Title - A11yscan';
$pageDescription = 'SEO-optimized description under 160 characters';
$currentPage = 'blog';

$pageContent = <<<'HTML'
<article class="blog-post">
    <header class="post-header">
        <time datetime="2025-01-15">January 15, 2025</time>
        <h1>Main Blog Post Title</h1>
    </header>

    <section id="introduction">
        <p>Opening paragraph that hooks the reader and establishes context.</p>
        <p>Second paragraph that previews what the article covers.</p>
    </section>

    <section id="section-name">
        <h2>Main Section Heading</h2>
        <p>Section content with proper paragraph spacing.</p>
        
        <h3>Subsection Heading</h3>
        <p>Subsection content.</p>
    </section>

    <!-- More sections... -->

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

**Every blog post MUST include this disclaimer at the bottom, before the CTA:**

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
   - ❌ "The ADA requires WCAG 2.1 AA compliance"
   - ✅ "WCAG 2.1 Level AA is widely recognized as a benchmark for accessibility"
   
   - ❌ "You will be sued if you don't comply"
   - ✅ "Inaccessible websites face increased litigation risk"
   
   - ❌ "In the case of Smith v. Company (2024)..."
   - ✅ "Recent litigation trends show..."

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
4. Include template: `include 'template.php';`

### Creating a New Blog Post

1. Create file: `blog-post-title.php`
2. Use blog post structure template
3. Include **mandatory legal disclaimer**
4. Add **customized CTA** based on topic
5. Set `$currentPage = 'blog'`
6. Add link to post in `blog.php`

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
├── index.php              # Homepage
├── blog.php               # Blog listing page
├── blog-post-name.php     # Individual blog posts
├── accessibility-statement.php
├── template.php           # Master template
├── pricing-modal.php      # Pricing form modal
├── logo.svg               # Site logo
└── README.md             # Project documentation
```

### Key Files

**template.php**
- Master template with all CSS
- Navigation and footer
- Skip link implementation
- Pricing modal integration

**pricing-modal.php**
- Overlay pricing form
- Email integration
- Service tier selection
- Pre-filled subject lines from CTA buttons

**blog.php**
- Grid of blog post cards
- Clickable cards with keyboard support
- Dates and descriptions

---

**Last Updated**: October 24, 2025
