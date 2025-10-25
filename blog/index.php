<?php
$pageTitle = 'Accessibility Blog - A11yscan';
$pageDescription = 'Expert insights on web accessibility, WCAG compliance, and inclusive design practices.';
$currentPage = 'blog';

// Include blog generator
require_once 'includes/blog-generator.php';

// Generate blog listing
$generator = new BlogGenerator();
$blogHTML = $generator->generateBlogHTML();

$pageContent = <<<HTML
<div class="hero">
    <h1>Accessibility Insights</h1>
    <p>Expert guidance on web accessibility, WCAG compliance, and inclusive design</p>
</div>

{$blogHTML}

<section style="margin-top: 3rem;">
    <div class="highlight">
        <h2 style="margin-top: 0;">Stay Updated</h2>
        <p>Get accessibility insights delivered to your inbox monthly.</p>
        <form style="display: flex; gap: 1rem; max-width: 500px; margin: 1.5rem auto 0;">
            <input type="email" placeholder="Your email" style="flex: 1; padding: 0.85rem; border: 2px solid var(--border); border-radius: 6px; font-size: 1rem;" required>
            <button type="submit" class="btn btn-primary">Subscribe</button>
        </form>
    </div>
</section>
HTML;

include '../template.php';
?>
