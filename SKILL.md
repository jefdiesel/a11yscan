# A11yscan Web Design Skill Guide

## Overview

This skill guide covers building and maintaining the A11yscan website with a focus on WCAG 2.1 Level AAA compliance, modern minimalist design principles, and accessible content creation.

---

## Table of Contents

1. [WCAG 2.1 Compliance Requirements](#wcag-21-compliance-requirements)
2. [Design System & Color Palette](#design-system--color-palette)
3. [Template System](#template-system)
4. [Blog Content Strategy](#blog-content-strategy)
5. [Quick Start Guide](#quick-start-guide)
6. [Accessibility Best Practices](#accessibility-best-practices)
7. [File Structure](#file-structure)

---

## WCAG 2.1 Compliance Requirements

### Conformance Levels

A11yscan targets **WCAG 2.1 Level AAA** compliance - the highest accessibility standard:

- **Level A**: Minimum accessibility
- **Level AA**: Recommended for all websites (4.5:1 contrast ratio for text)
- **Level AAA**: Enhanced accessibility (7:1 contrast ratio for text, stricter requirements)

### Key WCAG 2.1 AA/AAA Criteria Met

#### 1.1 Text Alternatives (Perceivable)
- All images have descriptive alt text
- SVG logos use `aria-hidden="true"` when decorative
- Form inputs have associated labels
- Complex graphics include text descriptions

#### 1.3 Adaptable Content (Perceivable)
- Semantic HTML structure (proper heading hierarchy: H1 > H2 > H3)
- Only one H1 per page
- Logical reading order in source code
- List elements for navigation (`<nav>`, `<ul>`, `<li>`)

#### 1.4 Distinguishable (Perceivable)
- **Text Contrast Ratio: 7:1 minimum** for normal text (AAA requirement)
  - Primary text (`#0a0e27`) on white background
  - All UI components meet or exceed 7:1 ratio
- **Large text (18pt+)**: 4.5:1 minimum
- No color used as sole means of conveying information
- Color-blind friendly palette (avoid red/green combinations)
- Readable font sizes (minimum 16px for body text)
- Adequate line-height (1.6+ for body, 1.2+ for headings)

#### 2.1 Keyboard Accessible (Operable)
- All interactive elements keyboard accessible via Tab key
- Logical tab order
- Focus indicators visible (3px solid outline)
- No keyboard traps
- Links and buttons work with Enter/Space keys
- Skip link provided: "Skip to main content"

#### 2.4 Navigable (Operable)
- Skip links to jump over repetitive content
- Clear page titles (`<title>` tag)
- Consistent navigation across all pages
- Focus indicators visible and distinct
- Breadcrumbs or clear navigation structure
- Link text is descriptive (not "click here")

#### 3.1 Readable (Understandable)
- Simple, clear language
- Short sentences and paragraphs
- Defined abbreviations on first use
- Consistent terminology
- Page purpose is clear

#### 4.1 Compatible (Robust)
- Valid HTML5 markup
- Proper ARIA labels where needed
- Form validation messages clear and accessible
- Error identification and suggestions provided

### Color Palette (AAA Compliant)

```
Primary text:     #0a0e27 (near black)
Secondary text:   #2d3142 (dark gray)
Background:       #ffffff (pure white)
Accent primary:   #2563eb (blue) - 4.9:1 on white
Accent dark:      #1e40af (darker blue)
Light background: #f8f9fb (almost white)
Borders:          #d1d5db (light gray)
```

**Contrast Ratios:**
- Primary text on white: 7:1+ (AAA)
- Accent blue on white: 4.9:1 (AA)
- Borders provide sufficient visual separation

### Minimum Touch Target Size

- All buttons and clickable elements: **44x44 CSS pixels minimum**
- Exceptions: text links within paragraphs, closely grouped controls with spacing

### Motion & Animation

- No auto-playing animations
- Reduced motion respected via `prefers-reduced-motion` media query
- Animations are subtle and serve a purpose
- No flashing content (no more than 3 flashes per second)

---

## Design System & Color Palette

### Principles

1. **Minimalist**: Only essential elements, generous whitespace
2. **High Contrast**: 7:1+ for all text
3. **Responsive**: Works on all devices
4. **Fast**: Optimized images, minimal code
5. **Semantic**: Proper HTML structure

### Logo

- **File**: `logo.svg` (Streamline handshake icon)
- **Size**: 38x38px in header
- **Color**: Uses `currentColor` for theming
- **Licensed**: Streamline (commercial-friendly)

### Typography

```css
Font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Helvetica Neue', sans-serif
```

- **H1**: 2.5rem, weight 700, line-height 1.2
- **H2**: 2rem, weight 700, line-height 1.2
- **H3**: 1.3rem, weight 600
- **Body**: 1rem, weight 400, line-height 1.7
- **Small**: 0.85rem, weight 400

### Spacing Scale

```
Base: 1rem (16px)
Multiples: 0.5rem, 1rem, 1.5rem, 2rem, 2.5rem, 3rem
```

### Button Styles

**Primary Button**
- Background: `var(--accent-primary)` (#2563eb)
- Color: white
- Padding: 0.85rem 1.75rem
- Min-height: 44px
- Border-radius: 6px
- Font-weight: 600

**Secondary Button**
- Background: `var(--bg-secondary)` (#f8f9fb)
- Color: text primary
- Border: 2px solid `var(--border)`
- Padding: 0.85rem 1.75rem
- Min-height: 44px

### Focus Indicators

- All interactive elements: 3px solid `var(--accent-primary)` outline
- Outline-offset: 2px (external) or -3px (internal)
- Always visible and distinct
- **Blog post sections**: Blue outline when focused via Tab

---

## Template System

### Architecture

A11yscan uses a master template system for easy page creation:

1. **template.php** - Master layout (header, footer, navigation, styles)
2. **index.php** - Homepage (includes template)
3. **blog.php** - Blog listing (includes template)
4. Custom pages follow the same pattern

### How It Works

Every page file sets configuration variables, then includes `template.php`:

```php
<?php
// Configuration
$pageTitle = 'Page Title | A11yscan';
$pageDescription = 'Meta description';
$currentPage = 'identifier';

// Content
$pageContent = <<<'HTML'
  <!-- Page HTML here -->
HTML;

// Include master template
include 'template.php';
?>
```

The template automatically handles:
- HTML structure and DOCTYPE
- Meta tags and SEO
- Header with navigation (auto-highlights current page)
- Footer
- All CSS styling (inlined)
- JavaScript for accessibility features

### CSS Classes Available

**Layout**
- `.hero` - Hero section with centered text
- `.grid` - Responsive grid (auto-fit, minmax 300px)
- `.card` - Content card with hover effects
- `.highlight` - Highlighted callout box
- `.blog-post` - Blog article wrapper

**Typography**
- `.btn`, `.btn-primary`, `.btn-secondary` - Button styles
- `.stat` - Large number display (2.5rem, accent color)
- `.blog-date` - Blog post date styling
- `.blog-card` - Blog listing card

**Responsive**
- Breakpoints: 768px, 480px
- Mobile-first approach
- All elements scale appropriately

---

## Blog Content Strategy

### Blog Page Structure

The blog uses a card-based grid layout organized by topic:

**File**: `blog.php`

```
Hero Section (Title + Description)
    ↓
Section: Litigation & Legal Risk (6 articles)
    ├─ Article Card
    └─ ...
Section: User Accessibility Personas (6 articles)
    ├─ Article Card
    └─ ...
Section: Fundamentals & Best Practices (6 articles)
    ├─ Article Card
    └─ ...
    ↓
Newsletter Signup CTA
```

### Article Card Format

```php
<article class="card blog-card">
    <time datetime="2025-10-23" class="blog-date">Oct 23, 2025</time>
    <h2 style="font-size: 1.3rem; margin-top: 0.5rem;">Article Title</h2>
    <p>Brief excerpt or description</p>
    <a href="blog-post-filename.php" class="btn btn-primary" style="margin-top: 1rem;">Read More</a>
</article>
```

### Core Content Categories

#### 1. **Legal & Litigation** (2024-2025 Focus)
- 2024 accessibility lawsuit trends and data
- Major settlements and case studies
- 2025 litigation predictions
- Platform liability issues
- Litigation defense strategies
- Accessibility as enterprise risk

#### 2. **User Accessibility Personas** (Design Focus)
- Blind users (screen readers)
- Low vision users (contrast, zoom)
- Deaf/hard-of-hearing users (captions)
- Motor disability users (keyboard, switches)
- Cognitive disability users (clarity, simplicity)
- Neurodivergent users (autism, ADHD)

#### 3. **WCAG & Fundamentals** (Evergreen)
- WCAG 2.1 levels explanation
- Color contrast principles
- Keyboard navigation
- Alt text best practices
- ADA legal requirements
- ARIA and semantic HTML

### Blog Post Structure (Template)

All blog posts share consistent structure. **Important: The header (date + title) must be inside the first section to ensure it scrolls properly:**

```php
<?php
$pageTitle = 'Article Title | A11yscan Blog';
$pageDescription = 'Brief description (155-160 chars)';
$currentPage = 'blog';

$pageContent = <<<'HTML'
<article class="blog-post">
    <!-- IMPORTANT: Header goes INSIDE first section to scroll with content -->
    <section id="intro">
        <time datetime="2025-10-23" style="font-size: 0.9rem; color: var(--text-secondary); font-weight: 500; display: block; margin-bottom: 0.5rem;">October 23, 2025</time>
        <h1 style="font-size: 2.5rem; font-weight: 700; line-height: 1.2; margin-bottom: 2rem;">Article Title</h1>
        
        <h2>Section Heading</h2>
        <p>Content</p>
    </section>

    <section id="section-two">
        <h2>Section Two Heading</h2>
        <p>Content</p>
    </section>

    <section id="takeaways">
        <h2>Key Takeaways</h2>
        <ul>
            <li>Point 1</li>
            <li>Point 2</li>
        </ul>
    </section>

    <section id="resources">
        <h2>Resources</h2>
        <ul>
            <li><a href="#">Resource 1</a></li>
        </ul>
    </section>
</article>

<section style="margin-top: 3rem;">
    <div class="highlight">
        <h2 style="margin-top: 0;">Ready to Audit?</h2>
        <p>Get a free WCAG scan.</p>
        <a href="index.php#pricing" class="btn btn-primary">Start Free Scan</a>
    </div>
</section>
HTML;

include 'template.php';
?>
```

### Critical Blog Post Rules

⚠️ **MUST DO:**
- Header (date + title) goes **INSIDE** first section `<section id="intro">`
- First section uses `<h2>` for section heading (not H1)
- Use inline styles for date and h1 as shown above
- Each section has unique `id` attribute
- Each section starts with `<h2>` heading

❌ **NEVER DO:**
- Don't put header in separate `<header>` element
- Don't put date/title outside sections
- Don't skip section IDs
- Don't start sections with H1 or H3

### Section-Based Navigation

Blog post sections are automatically keyboard-tabbable:

- **Tab key**: Navigate through sections (each section focusable)
- **Focus outline**: Blue outline appears on focused section
- **Section IDs required**: Each `<section>` must have `id="section-name"`
- **H2 headings required**: Each section must start with H2
- **Smooth scroll**: Automatic scroll positioning prevents header overlap
- **Content flows**: Date and title scroll naturally with all content

---

## Quick Start Guide

### 1. Create a New Blog Post

**Step 1: Create the file**
```bash
touch blog-post-accessibility-myths.php
```

**Step 2: Add template structure**
```php
<?php
$pageTitle = 'Article Title | A11yscan Blog';
$pageDescription = 'Meta description (155-160 characters)';
$currentPage = 'blog';

$pageContent = <<<'HTML'
<article class="blog-post">
    <!-- Header (date + title) MUST be inside first section -->
    <section id="intro">
        <time datetime="2025-10-23" style="font-size: 0.9rem; color: var(--text-secondary); font-weight: 500; display: block; margin-bottom: 0.5rem;">October 23, 2025</time>
        <h1 style="font-size: 2.5rem; font-weight: 700; line-height: 1.2; margin-bottom: 2rem;">Article Title</h1>
        
        <h2>Introduction</h2>
        <p>Your content here.</p>
    </section>

    <section id="main-section">
        <h2>Main Content</h2>
        <p>Content with keyboard-tabbable sections.</p>
    </section>

    <section id="takeaways">
        <h2>Key Takeaways</h2>
        <ul>
            <li>Point 1</li>
            <li>Point 2</li>
        </ul>
    </section>

    <section id="resources">
        <h2>Resources</h2>
        <ul>
            <li><a href="https://example.com">Resource 1</a></li>
        </ul>
    </section>
</article>

<section style="margin-top: 3rem;">
    <div class="highlight">
        <h2 style="margin-top: 0;">Ready to Audit Your Site?</h2>
        <p>Get a free WCAG scan and expert recommendations.</p>
        <a href="index.php#pricing" class="btn btn-primary">Start Free Scan</a>
    </div>
</section>
HTML;

include 'template.php';
?>
```

**Step 3: Add to blog.php**

Find the appropriate section in `blog.php` and add your article card:

```php
<article class="card blog-card">
    <time datetime="2025-10-23" class="blog-date">Oct 23, 2025</time>
    <h2 style="font-size: 1.3rem; margin-top: 0.5rem;">Article Title</h2>
    <p>Brief excerpt describing the article</p>
    <a href="blog-post-accessibility-myths.php" class="btn btn-primary" style="margin-top: 1rem;">Read More</a>
</article>
```

**Step 4: Update sitemap.xml**

Add entry with today's date:

```xml
<url>
    <loc>https://a11yscan.xyz/blog-post-accessibility-myths.php</loc>
    <lastmod>2025-10-23</lastmod>
    <changefreq>monthly</changefreq>
    <priority>0.8</priority>
</url>
```

---

### 2. Create a Regular Page (Non-Blog)

**Step 1: Create the file**
```bash
touch my-new-page.php
```

**Step 2: Add template structure**
```php
<?php
$pageTitle = 'Page Title | A11yscan';
$pageDescription = 'Meta description for this page';
$currentPage = 'my-new-page'; // Must match filename without .php

$pageContent = <<<'HTML'
<section class="hero">
    <h1>Page Heading</h1>
    <p>Hero/intro text</p>
</section>

<section>
    <h2>Content Section 1</h2>
    <p>Your content</p>
</section>

<section>
    <h2>Content Section 2</h2>
    <p>More content</p>
</section>

<section>
    <div class="highlight">
        <h2 style="margin-top: 0;">Call to Action</h2>
        <p>Optional CTA</p>
        <a href="#" class="btn btn-primary">Action</a>
    </div>
</section>
HTML;

include 'template.php';
?>
```

**Step 3: Update navigation (optional)**

To add page to header, edit `template.php` `<nav>` section:

```php
<nav role="navigation" aria-label="Main navigation">
    <a href="index.php" <?php echo ($currentPage === 'index') ? 'class="active"' : ''; ?>>Home</a>
    <a href="blog.php" <?php echo ($currentPage === 'blog') ? 'class="active"' : ''; ?>>Blog</a>
    <a href="my-new-page.php" <?php echo ($currentPage === 'my-new-page') ? 'class="active"' : ''; ?>>New Page</a>
    <a href="#pricing" class="cta btn btn-primary">Get Scan</a>
</nav>
```

---

### 3. Template Configuration Reference

#### Essential Template Variables

Every page file must set these BEFORE including template.php:

```php
<?php
// REQUIRED: Page title (browser tab + SEO)
// Format: "Page Title | A11yscan"
// Length: 50-60 characters
$pageTitle = 'Article Title | A11yscan Blog';

// REQUIRED: Meta description (search results + social)
// Length: 155-160 characters
// Content: Summarize page, include 1-2 keywords
$pageDescription = 'Description of page content for search engines and social media.';

// REQUIRED: Page identifier (for nav highlighting)
// Value: Filename without .php extension
// Examples: 'index', 'blog', 'my-new-page', 'accessibility-statement'
$currentPage = 'blog';

// REQUIRED: Page content (inserted into <main>)
// Use <<<'HTML' ... HTML; syntax
$pageContent = <<<'HTML'
<!-- Your HTML content -->
HTML;

// REQUIRED: Include template
include 'template.php';
?>
```

#### $pageTitle Format

```
✅ Correct Format: "Page Title | A11yscan"

Examples:
- "Designing for Blind Users | A11yscan Blog"
- "WCAG 2.1 Compliance Guide | A11yscan"
- "Free Accessibility Audit | A11yscan"
- "Accessibility Statement | A11yscan"

❌ Avoid:
- "A11yscan | Page Title" (reverse order)
- "Page" (too vague)
- No A11yscan branding
```

#### $pageDescription Format

```
Length: 155-160 characters (Google displays ~160 chars)
Structure: Main keyword + context + benefit/action
Unique: Every page different description

✅ Good Examples:

"Learn how to design websites accessible to blind users. 
Understand semantic HTML, alt text, and screen reader optimization."

"2024 accessibility lawsuit analysis: 4,000+ cases, trends, 
settlements, and what organizations need to know."

❌ Avoid:
- "This is a blog post" (too generic)
- "Read more about our services" (not descriptive)
- Keyword stuffing
```

#### $currentPage Values

Must match the filename (without .php extension):

```php
// Homepage (index.php)
$currentPage = 'index';

// Blog listing (blog.php)
$currentPage = 'blog';

// Regular pages
$currentPage = 'accessibility-statement';
$currentPage = 'about-us';
$currentPage = 'contact';

// Blog posts (usually)
$currentPage = 'blog'; // Or 'blog-post' if custom nav needed
```

---

### 4. Page Content Sections

#### Hero Section (Main Pages)

```php
<section class="hero">
    <h1>Main Heading</h1>
    <p>Subheading or intro paragraph</p>
</section>
```

**Features:**
- Centered text layout
- H1: 2.5rem desktop / 1.75rem mobile
- Max width 600px for readability
- 3rem top padding, 2.5rem bottom

#### Regular Content Sections

```php
<section>
    <h2>Section Heading</h2>
    <p>Paragraph content</p>
    
    <h3>Subsection Heading</h3>
    <p>More content</p>
</section>
```

**Rules:**
- Must use H2 (not H1 or H3)
- Proper heading hierarchy
- Blog sections auto-tabbable
- Smooth scroll margin for header

#### Responsive Grid (Cards)

```php
<div class="grid">
    <article class="card">
        <h3>Card Title</h3>
        <p>Card description</p>
        <a href="#" class="btn btn-primary">Action</a>
    </article>
    
    <article class="card">
        <h3>Another Card</h3>
        <p>Description</p>
        <a href="#" class="btn btn-primary">Action</a>
    </article>
</div>
```

**Grid Behavior:**
- Desktop: 3 columns (minmax 300px)
- Tablet: 2 columns
- Mobile: 1 column
- Auto-responsive, no breakpoint media queries needed
- Cards have hover effects

#### Highlight/Callout Box

```php
<div class="highlight">
    <h2 style="margin-top: 0;">Important Title</h2>
    <p>Highlighted content</p>
    <a href="#" class="btn btn-primary">CTA</a>
</div>
```

**Use Cases:**
- Important information
- Call-to-action sections
- Tips and warnings
- Feature highlights

---

### 5. Complete Examples

#### Example 1: Blog Post

**File**: `blog-post-color-contrast.php`

```php
<?php
$pageTitle = 'Color Contrast: Visual Accessibility | A11yscan Blog';
$pageDescription = 'Learn color contrast ratios, WCAG standards (4.5:1 AA, 7:1 AAA), and tools to ensure accessibility compliance.';
$currentPage = 'blog';

$pageContent = <<<'HTML'
<article class="blog-post">
    <!-- Header INSIDE first section -->
    <section id="intro">
        <time datetime="2025-10-20" style="font-size: 0.9rem; color: var(--text-secondary); font-weight: 500; display: block; margin-bottom: 0.5rem;">October 20, 2025</time>
        <h1 style="font-size: 2.5rem; font-weight: 700; line-height: 1.2; margin-bottom: 2rem;">Color Contrast: The Foundation of Visual Accessibility</h1>
        
        <h2>Why Color Contrast Matters</h2>
        <p>Color contrast is fundamental. Low contrast text is impossible to read for 253 million people with visual impairments.</p>
    </section>

    <section id="wcag-standards">
        <h2>WCAG 2.1 Standards</h2>
        
        <h3>Level AA (Minimum)</h3>
        <ul>
            <li>Normal text: 4.5:1</li>
            <li>Large text: 3:1</li>
        </ul>

        <h3>Level AAA (Recommended)</h3>
        <ul>
            <li>Normal text: 7:1</li>
            <li>Large text: 4.5:1</li>
        </ul>
    </section>

    <section id="how-to-test">
        <h2>How to Test Contrast</h2>
        <ol style="list-style: decimal; padding-left: 1.5rem;">
            <li>Visit webaim.org/resources/contrastchecker/</li>
            <li>Enter foreground color</li>
            <li>Enter background color</li>
            <li>Check ratio results</li>
        </ol>
    </section>

    <section id="takeaways">
        <h2>Key Takeaways</h2>
        <ul>
            <li>Contrast is brightness difference</li>
            <li>Use 7:1 for AAA (recommended)</li>
            <li>Test all color combinations</li>
            <li>Avoid red/green for colorblind users</li>
        </ul>
    </section>

    <section id="resources">
        <h2>Resources</h2>
        <ul>
            <li><a href="https://webaim.org/resources/contrastchecker/">WebAIM Contrast Checker</a></li>
            <li><a href="https://www.w3.org/TR/WCAG21/">WCAG 2.1</a></li>
        </ul>
    </section>
</article>

<section style="margin-top: 3rem;">
    <div class="highlight">
        <h2 style="margin-top: 0;">Audit Your Contrast</h2>
        <p>Free scan to verify WCAG compliance.</p>
        <a href="index.php#pricing" class="btn btn-primary">Start Scan</a>
    </div>
</section>
HTML;

include 'template.php';
?>
```

#### Example 2: Information Page

**File**: `accessibility-statement.php`

```php
<?php
$pageTitle = 'Accessibility Statement | A11yscan';
$pageDescription = 'A11yscan accessibility commitment and WCAG 2.1 Level AAA compliance. Report accessibility issues.';
$currentPage = 'accessibility-statement';

$pageContent = <<<'HTML'
<section class="hero">
    <h1>Accessibility Statement</h1>
    <p>Our commitment to inclusive design</p>
</section>

<section>
    <h2>Our Commitment</h2>
    <p>A11yscan is committed to web accessibility. We follow WCAG 2.1 Level AAA standards.</p>
</section>

<section>
    <h2>Accessibility Features</h2>
    <div class="grid">
        <article class="card">
            <h3>Keyboard Navigation</h3>
            <p>Full access via Tab, Enter, Space keys.</p>
        </article>
        
        <article class="card">
            <h3>Screen Readers</h3>
            <p>Compatible with NVDA, JAWS, VoiceOver.</p>
        </article>
        
        <article class="card">
            <h3>High Contrast</h3>
            <p>7:1 text contrast ratio (AAA).</p>
        </article>
    </div>
</section>

<section>
    <h2>Report Issues</h2>
    <p>Found a barrier? Email: <a href="mailto:accessibility@a11yscan.xyz">accessibility@a11yscan.xyz</a></p>
</section>
HTML;

include 'template.php';
?>
```

---

### 6. Testing Checklist

**Before Publishing:**

- [ ] Page title includes "| A11yscan"
- [ ] Meta description is 155-160 characters
- [ ] $currentPage matches filename (no .php)
- [ ] H1 appears once only
- [ ] H2/H3 hierarchy correct
- [ ] All images have alt text
- [ ] Links have descriptive text
- [ ] Color contrast 7:1+
- [ ] Tab navigation works
- [ ] Focus indicators visible
- [ ] No keyboard traps
- [ ] Buttons 44x44px minimum
- [ ] Responsive (320px, 768px, 1200px+)
- [ ] No console errors
- [ ] All links functional

**Browser Testing:**
```bash
# HTML validation
https://validator.w3.org/

# Accessibility audit
Chrome DevTools → Lighthouse → Accessibility (should be 90+)

# Contrast check
https://webaim.org/resources/contrastchecker/

# Screen reader
NVDA (free) or VoiceOver (Mac)
```

---

## Accessibility Best Practices

### Template Accessibility Features

The A11yscan template includes several accessibility features automatically:

**Skip Link**
- Visible when focused (appears at top of page)
- Allows keyboard users to skip header and navigation
- Links directly to main content
- Smooth focus management

**Keyboard Navigation**
- All interactive elements keyboard accessible via Tab
- Blog post sections tabbable (each section focusable)
- Logical tab order maintained
- Focus indicators always visible (blue outline)
- No keyboard traps

**Focus Management**
- Main element focusable when skip link activated
- Section focus outlines appear when tabbing through blog posts
- Focus outline-offset prevents covering content
- Smooth scroll positioning prevents header overlap

**Semantic Structure**
- Proper heading hierarchy (H1, H2, H3)
- Semantic HTML elements (`<main>`, `<nav>`, `<section>`)
- Skip link for navigation
- Article wrapper with blog-post class
- Time elements for date context

**Blog Post Specific**
- Header (date + title) scrolls with content (not sticky)
- Sections are keyboard-tabbable for navigation
- Each section needs unique ID and H2 heading
- Blue focus outline on focused sections
- Automatic scroll positioning for readability

### For Developers

1. **Semantic HTML First**
   ```html
   ✅ <button>Action</button>
   ✅ <nav>Navigation</nav>
   ✅ <h1>Main Heading</h1>
   
   ❌ <div onclick="...">Action</div>
   ❌ <div class="nav">Nav</div>
   ```

2. **Keyboard Accessibility**
   ```html
   ✅ All interactive elements keyboard-accessible
   ✅ Logical tab order
   ✅ Visible focus indicators
   
   ❌ Mouse-only interactions
   ❌ Hidden focus outlines
   ```

3. **ARIA (when needed)**
   ```html
   ✅ Icon buttons: <button aria-label="Close">✕</button>
   ✅ Hidden elements: <div aria-hidden="true">
   
   ❌ Using ARIA instead of semantic HTML
   ```

4. **Forms**
   ```html
   ✅ <label for="email">Email</label>
   ✅ <input id="email" type="email" required/>
   
   ❌ Inputs without labels
   ❌ Generic error messages
   ```

### For Designers

1. **Color Contrast**
   - Minimum 7:1 (AAA)
   - Use WebAIM Contrast Checker
   - Avoid red/green combinations
   - Test all text colors

2. **Typography**
   - Minimum 16px body text
   - Line-height 1.6+
   - Readable fonts (sans-serif)
   - Adequate letter spacing

3. **Interactive Elements**
   - 44x44px minimum size
   - Distinct focus states
   - Clear hover effects
   - Sufficient spacing

4. **Visual Hierarchy**
   - Size, weight, color strategically
   - Clear grouping
   - Generous whitespace
   - Don't use color alone

### For Content Writers

1. **Clear Language**
   - Short sentences (15-20 words)
   - Simple vocabulary
   - Define technical terms
   - Active voice

2. **Structure**
   - Descriptive headings
   - One idea per paragraph
   - Bulleted lists
   - Consistent terms

3. **Links**
   - Descriptive text
   - Unique per page
   - No "click here"

---

## File Structure

```
a11yscan/
├── template.php              # Master template (required)
├── index.php                 # Homepage
├── blog.php                  # Blog listing
├── blog-post-*.php           # Individual blog posts
├── accessibility-statement.php
├── logo.svg                  # Handshake logo
├── sitemap.xml               # XML sitemap
├── robots.txt                # Search engine rules
└── README.md                 # Project documentation
```

---

## References & Resources

### WCAG & Standards
- [WCAG 2.1 Official Guidelines](https://www.w3.org/TR/WCAG21/)
- [WebAIM](https://webaim.org/)
- [The A11y Project](https://www.a11yproject.com/)

### Tools
- [WebAIM Contrast Checker](https://webaim.org/resources/contrastchecker/)
- [axe DevTools](https://www.deque.com/axe/devtools/)
- [WAVE](https://wave.webaim.org/)
- [Lighthouse](https://developers.google.com/web/tools/lighthouse)

### Screen Readers
- [NVDA](https://www.nvaccess.org/) (free, Windows)
- [JAWS](https://www.freedomscientific.com/products/software/jaws/) (commercial)
- [VoiceOver](https://www.apple.com/accessibility/voiceover/) (Mac/iOS native)
- [TalkBack](https://support.google.com/accessibility/android/answer/6283677) (Android native)

---

**Last Updated**: October 23, 2025
