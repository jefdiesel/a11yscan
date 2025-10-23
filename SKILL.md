# A11yscan Web Design Skill Guide

## Overview

This skill guide covers building and maintaining the A11yscan website with a focus on WCAG 2.1 Level AAA compliance, modern minimalist design principles, and accessible content creation.

---

## Table of Contents

1. [WCAG 2.1 Compliance Requirements](#wcag-21-compliance-requirements)
2. [Design System & Color Palette](#design-system--color-palette)
3. [Template System](#template-system)
4. [Blog Content Strategy](#blog-content-strategy)
5. [Accessibility Best Practices](#accessibility-best-practices)
6. [File Structure](#file-structure)

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
- **Size**: 50x50px in header
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

---

## Template System

### Architecture

A11yscan uses a master template system for easy page creation:

1. **template.php** - Master layout (header, footer, navigation, styles)
2. **index.php** - Homepage (includes template)
3. **blog.php** - Blog listing (includes template)
4. Custom pages follow the same pattern

### How to Create a New Page

```php
<?php
$pageTitle = 'Page Title | A11yscan';
$pageDescription = 'Page meta description for SEO';
$currentPage = 'pagename'; // Used for active nav highlight

$pageContent = <<<'HTML'
<section class="hero">
    <h1>Page Heading</h1>
    <p>Introduction text</p>
</section>

<section>
    <h2>Content Section</h2>
    <p>Your content here</p>
</section>
HTML;

include 'template.php';
?>
```

### Template Structure

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta tags, title, description -->
    <!-- All CSS (inlined in template.php) -->
</head>
<body>
    <!-- Skip link -->
    <header>
        <!-- Logo + Navigation -->
    </header>
    
    <main id="main">
        <!-- $pageContent inserted here -->
    </main>
    
    <footer>
        <!-- Footer sections -->
    </footer>
    
    <!-- Minimal JavaScript (smooth scroll, etc) -->
</body>
</html>
```

### Navigation

Auto-highlights current page based on `$currentPage` variable:
```php
$currentPage = 'index'; // Highlights "Home" nav link
$currentPage = 'blog';  // Highlights "Blog" nav link
```

### CSS Classes Available

**Layout**
- `.hero` - Hero section with centered text
- `.grid` - Responsive grid (auto-fit, minmax 300px)
- `.card` - Content card with hover effects
- `.highlight` - Highlighted callout box

**Typography**
- `.btn`, `.btn-primary`, `.btn-secondary` - Button styles
- `.stat` - Large number display (2.5rem, accent color)

**Responsive**
- Breakpoints: 768px, 480px
- Mobile-first approach
- All elements scale appropriately

---

## Blog Content Strategy

### Blog Page Structure

The blog uses a card-based grid layout showcasing recent articles:

**File**: `blog.php`

```
Hero Section (Title + Description)
    ↓
Grid of Article Cards (6 articles shown)
    ├─ Article Card (date, title, excerpt, read more)
    ├─ Article Card
    ├─ Article Card
    └─ ...
    ↓
Newsletter Signup CTA
```

### Article Card Format

```php
<article class="card blog-card">
    <time datetime="2025-10-23" class="blog-date">Oct 23, 2025</time>
    <h2>Article Title</h2>
    <p>Brief excerpt or description</p>
    <a href="#" class="btn btn-primary">Read More</a>
</article>
```

### Article Topics & Content

Core topics aligned with A11yscan's mission:

#### 1. **WCAG Guidelines & Compliance**
- "Understanding WCAG 2.1 Levels: A vs AA vs AAA"
- "WCAG 2.1 AA: Summary and Checklist for Website Owners"
- "The ADA & Your Website: Legal Requirements in 2025"

**Content includes:**
- Clear explanations of conformance levels
- Actionable checklists
- Legal compliance information
- Business impact (lawsuits, settlements)

#### 2. **Design & Accessibility**
- "Color Contrast: The Foundation of Visual Accessibility"
- "Typography for Accessibility: Font Size, Line Height, Spacing"
- "Dark Mode & Light Mode: Designing for Both"

**Content includes:**
- Contrast ratio explanations (4.5:1, 7:1)
- Visual examples
- Tools and resources
- Best practices

#### 3. **Development & Implementation**
- "Keyboard Navigation: Making Your Site Usable Without a Mouse"
- "Alt Text That Actually Works: Writing for Screen Readers"
- "ARIA Labels & Semantic HTML: Building for Screen Readers"

**Content includes:**
- Code examples
- Common mistakes
- Testing strategies
- Developer tools

#### 4. **Legal & Business**
- "Web Accessibility Lawsuits: What You Need to Know"
- "Accessibility as a Business Case: ROI & Risk Mitigation"
- "Section 508 vs ADA vs WCAG: What's Required?"

**Content includes:**
- Real case studies
- Settlement amounts
- ROI calculations
- Compliance requirements by jurisdiction

#### 5. **User Stories & Accessibility**
- "Building for Low Vision Users: Design Considerations"
- "Motor Impairment & Accessibility: Beyond Keyboard Navigation"
- "Cognitive Accessibility: Simplifying Complex Content"

**Content includes:**
- User personas
- Real-world challenges
- Design solutions
- Empathy-building narratives

### Blog Post Template

**File**: Create new PHP file (e.g., `blog-post-01.php`)

```php
<?php
$pageTitle = 'Article Title | A11yscan Blog';
$pageDescription = 'Short description for meta tag';
$currentPage = 'blog';

$pageContent = <<<'HTML'
<article class="blog-post">
    <header class="post-header">
        <time datetime="2025-10-23">October 23, 2025</time>
        <h1>Article Title</h1>
        <p class="lead">Lead paragraph - key takeaway or summary</p>
    </header>

    <section>
        <h2>Section One</h2>
        <p>Content...</p>
    </section>

    <section>
        <h2>Section Two</h2>
        <p>Content...</p>
        
        <div class="highlight">
            <strong>Pro Tip:</strong> Important takeaway
        </div>
    </section>

    <section>
        <h2>Key Takeaways</h2>
        <ul>
            <li>Point 1</li>
            <li>Point 2</li>
            <li>Point 3</li>
        </ul>
    </section>

    <section>
        <h2>Resources</h2>
        <ul>
            <li><a href="#">Resource 1</a></li>
            <li><a href="#">Resource 2</a></li>
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

### Content Guidelines

**Tone**
- Professional but accessible
- Avoid jargon (explain terms on first use)
- Empathetic to both users with disabilities and business owners
- Solution-oriented (not just problems)

**Structure**
- Clear headlines (H2/H3 hierarchy)
- Short paragraphs (2-3 sentences max)
- Bulleted lists for key points
- Code examples with syntax highlighting
- Callout boxes for important information

**Length**
- Short-form: 400-600 words
- Medium: 800-1200 words
- Long-form: 1500+ words with sections
- Aim for 5-10 minute read

**SEO Optimization**
- Use keywords naturally in title, H2s, first paragraph
- Internal links to related articles
- Meta descriptions (155-160 characters)
- Alt text for all images

**Accessibility in Blog Posts**
- Descriptive headings (not "Click Here")
- Sufficient color contrast in code blocks
- Readable font size and line-height
- Skip links in code samples
- Transcripts for embedded media

---

## Accessibility Best Practices

### For Developers

1. **Semantic HTML First**
   ```html
   <!-- ✅ Good -->
   <button>Click me</button>
   <nav>Navigation</nav>
   <main>Content</main>
   
   <!-- ❌ Avoid -->
   <div onclick="...">Click me</div>
   <div class="nav">Navigation</div>
   ```

2. **ARIA Labels (when needed)**
   ```html
   <!-- For icon-only buttons -->
   <button aria-label="Close menu">✕</button>
   
   <!-- For screen readers -->
   <div aria-hidden="true">Decorative element</div>
   ```

3. **Form Accessibility**
   ```html
   <!-- ✅ Good -->
   <label for="email">Email</label>
   <input id="email" type="email" required/>
   
   <!-- Error messages -->
   <input aria-invalid="true" aria-describedby="error"/>
   <span id="error">Email is required</span>
   ```

4. **Focus Management**
   ```css
   /* Always provide visible focus indicators */
   *:focus {
       outline: 3px solid #2563eb;
       outline-offset: 2px;
   }
   ```

5. **Image Accessibility**
   ```html
   <!-- Descriptive alt text -->
   <img src="logo.svg" alt="A11yscan handshake logo"/>
   
   <!-- Decorative images -->
   <img src="decoration.png" alt="" aria-hidden="true"/>
   ```

### For Designers

1. **Color Contrast**
   - Use tools: WebAIM Contrast Checker, Color Contrast Analyzer
   - Test all color combinations
   - Minimum 4.5:1 (AA), aim for 7:1 (AAA)
   - Avoid red/green combinations for colorblind users

2. **Typography**
   - Minimum 16px for body text
   - Line-height minimum 1.6
   - Letter-spacing for readability
   - Avoid all-caps for long text

3. **Interactive Elements**
   - Buttons/links minimum 44x44px
   - Clear, visible focus states
   - Sufficient spacing between targets
   - Consistent interaction patterns

4. **Visual Hierarchy**
   - Use size, color, weight strategically
   - Don't rely on color alone
   - Sufficient whitespace
   - Clear information grouping

5. **Animation**
   - Respect `prefers-reduced-motion`
   - No auto-playing media
   - No flashing content
   - Purpose-driven animations

### For Content Writers

1. **Clear Language**
   - Short sentences (15-20 words)
   - Simple vocabulary
   - Define technical terms
   - Active voice preferred

2. **Structure**
   - Descriptive headings
   - One idea per paragraph
   - Bulleted lists for complexity
   - Consistent terminology

3. **Links**
   - Descriptive link text ("Read more about WCAG" not "Click here")
   - Unique link text across page
   - Links in new tab? Use title: `title="Opens in new tab"`

4. **Lists**
   - Use semantic list elements
   - Proper nesting
   - Clear item relationships

### Testing Checklist

- [ ] Keyboard navigation works (Tab, Shift+Tab, Enter, Space)
- [ ] All images have alt text
- [ ] Focus indicators visible
- [ ] Color contrast 7:1+ (AAA)
- [ ] Heading hierarchy correct (H1 → H2 → H3)
- [ ] Form labels associated with inputs
- [ ] Links have descriptive text
- [ ] No keyboard traps
- [ ] Buttons 44x44px minimum
- [ ] Mobile responsive (320px, 768px, 1200px+)
- [ ] Screen reader tested (NVDA, JAWS, VoiceOver)
- [ ] Reduced motion respected
- [ ] Page title relevant and descriptive

### Tools

**Design & Color**
- WebAIM Contrast Checker (contrast ratios)
- Color Contrast Analyzer (desktop tool)
- Accessible Palette (WCAG AAA color system)

**Development**
- axe DevTools (browser extension)
- WAVE (accessibility evaluator)
- Lighthouse (Chrome DevTools)
- W3C Markup Validator

**Testing**
- NVDA (free screen reader, Windows)
- JAWS (commercial screen reader)
- VoiceOver (macOS/iOS native)
- Keyboard-only navigation
- Mobile accessibility testing

---

## File Structure

```
a11yscan/
├── template.php          # Master template
├── index.php             # Homepage
├── blog.php              # Blog listing page
├── logo.svg              # Handshake logo
├── style.css             # (Optional: external CSS)
└── README.md             # Project documentation
```

### Deployment Checklist

- [ ] All files in same directory
- [ ] logo.svg accessible from template.php
- [ ] No console errors
- [ ] Links working (internal and external)
- [ ] Forms functional
- [ ] Mobile responsive tested
- [ ] Accessibility audit passed (Lighthouse 90+)
- [ ] Page load time < 3 seconds
- [ ] SSL/HTTPS enabled
- [ ] Sitemap.xml created
- [ ] robots.txt configured

---

## Quick Start Guide

### 1. Create a New Blog Post

```bash
# Create blog-post-XX.php
cp blog.php blog-post-01.php
```

Edit the file:
```php
<?php
$pageTitle = 'Your Article Title | A11yscan Blog';
$pageDescription = 'Meta description (155-160 chars)';
$currentPage = 'blog';

$pageContent = <<<'HTML'
<!-- Your article content here -->
HTML;

include 'template.php';
?>
```

### 2. Add to Blog Listing

Edit `blog.php` and add new card:
```php
<article class="card blog-card">
    <time datetime="2025-10-23" class="blog-date">Oct 23, 2025</time>
    <h2 style="font-size: 1.3rem; margin-top: 0.5rem;">Article Title</h2>
    <p>Excerpt text</p>
    <a href="blog-post-01.php" class="btn btn-primary" style="margin-top: 1rem;">Read More</a>
</article>
```

### 3. Create a New Page

```php
<?php
$pageTitle = 'Page Name | A11yscan';
$pageDescription = 'Description';
$currentPage = 'pagename';

$pageContent = <<<'HTML'
<section class="hero">
    <h1>Your Content</h1>
</section>
HTML;

include 'template.php';
?>
```

### 4. Test for Accessibility

1. Run Lighthouse audit (Chrome DevTools)
2. Test keyboard navigation (Tab through entire page)
3. Check contrast ratios (WebAIM Contrast Checker)
4. Test with screen reader (NVDA/VoiceOver)
5. Verify mobile responsiveness

---

## Legal & Compliance

### Why Accessibility Matters

- **Legal**: ADA compliance, WCAG 2.1 AA/AAA standards, Section 508
- **Business**: 4,000+ lawsuits filed in 2024; $50K-$250K average settlement
- **Ethical**: ~1 billion people have disabilities globally
- **User Experience**: Accessible design benefits everyone

### References

- [WCAG 2.1 Guidelines](https://www.w3.org/TR/WCAG21/)
- [Americans with Disabilities Act (ADA)](https://www.ada.gov/)
- [Section 508 (Rehabilitation Act)](https://www.access-board.gov/ict/)
- [WebAIM](https://webaim.org/)
- [The A11Y Project](https://www.a11yproject.com/)

---

## Troubleshooting

### Logo Not Showing
- Verify `logo.svg` is in same directory as `template.php`
- Check file permissions
- Ensure SVG viewBox is correct

### Navigation Not Highlighting
- Check `$currentPage` value matches nav href
- Example: `$currentPage = 'index'` highlights "Home"

### Focus Indicator Not Visible
- CSS may be overridden elsewhere
- Check browser dev tools for conflicting styles
- Ensure outline has sufficient contrast

### Mobile Layout Broken
- Check viewport meta tag present
- Test at 320px, 768px, 1200px widths
- Use DevTools device emulation

### WCAG Audit Failing
- Run Lighthouse in Chrome DevTools
- Check contrast ratios for all text
- Verify heading hierarchy
- Test keyboard navigation
- Check image alt text
- Ensure 44x44px minimum click targets

---

## Version History

- **v1.0** (Oct 2025): Initial A11yscan website launch
  - WCAG 2.1 Level AAA compliant
  - Master template system
  - Blog infrastructure
  - Responsive design
  - All accessibility features implemented

---

## Support & Updates

For questions, issues, or updates to this skill guide, refer to:
- WCAG 2.1 official documentation
- A11yscan project documentation
- WebAIM and accessibility community resources

**Last Updated**: October 23, 2025
