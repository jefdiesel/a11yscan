# A11yscan Web Design Skill Guide

## Overview

This skill guide covers building and maintaining the A11yscan website with a focus on WCAG 2.1 Level AAA compliance, modern minimalist design principles, and accessible content creation.

---

## Table of Contents

1. [WCAG 2.1 Compliance Requirements](#wcag-21-compliance-requirements)
2. [Design System & Color Palette](#design-system--color-palette)
3. [Template System](#template-system)
4. [Blog Content Strategy](#blog-content-strategy)
5. [Blog Post CTA Customization](#blog-post-cta-customization)
6. [Quick Start Guide](#quick-start-guide)
7. [Accessibility Best Practices](#accessibility-best-practices)
8. [File Structure](#file-structure)

[Full SKILL.md content continues with all sections from the original document, plus the Blog Post CTA Customization section inserted after Blog Content Strategy]

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

**Last Updated**: October 24, 2025
