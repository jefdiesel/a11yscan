<?php
$pageTitle = 'Temporary Disabilities & Accessibility: Broken Mice, Injured Arms, Lost Glasses | A11yscan';
$pageDescription = 'Learn why temporary accessibility needs—broken mouse, arm in a sling, lost glasses—affect millions and why WCAG matters for everyone.';
$currentPage = 'blog';
$pageContent = <<<'HTML'
<article class="blog-post">
    <section class="post-header">
        <time datetime="2025-10-24">October 24, 2025</time>
        <h1>Temporary Disabilities & Unexpected Accessibility Needs: Why Your Website Must Work When Life Gets Hard</h1>
    </section>
    
    <section id="intro">
        <p>Accessibility is often discussed as if it only matters to people with permanent disabilities. But the truth is far more immediate: most of us will experience a temporary accessibility barrier at some point. A broken mouse. An arm in a sling. Lost glasses. A fractured wrist. Temporary disabilities don't feel temporary when you're trying to work, shop, or access critical information right now.</p>
        
        <p>Microsoft's Inclusive Design framework categorizes this brilliantly: permanent disabilities (one arm), temporary disabilities (arm injury), and situational disabilities (new parent holding an infant). All three need the same accessible web. This isn't about charity—it's about designing for reality.</p>
    </section>
    
    <section id="reality-check">
        <h2>The Reality: How Many People Actually Face Temporary Barriers?</h2>
        
        <p>The CDC reports that over 70 million U.S. adults have a disability—more than 1 in 4 people. But temporary disabilities dwarf this number. Consider the scope: approximately 5–10% of adults experience repetitive strain injury (RSI) severe enough that mouse use becomes painful. In certain occupations like tech, data entry, and design, that number climbs to 40%. One injury—a broken wrist, a sports accident, carpal tunnel—and suddenly a person can't use a mouse at all.</p>
        
        <p>Add in people recovering from surgery, treating tendonitis, or managing temporary vision changes like cataracts or post-procedure recovery. Add the millions who've simply lost their glasses or broken their laptop trackpad. These aren't edge cases. These are mainstream experiences.</p>
        
        <p>Mobility impairments affect approximately 12.2% of the U.S. population. Common causes include arthritis, muscular dystrophy, cerebral palsy, and temporary injuries. But temporary arm injuries alone touch far more people each year—an estimated 2+ million emergency room visits for arm and wrist fractures annually in the U.S.</p>
    </section>
    
    <section id="broken-mouse">
        <h2>The Broken Mouse Scenario</h2>
        
        <p>A user's mouse stops working. This should be trivial to work around—just use the keyboard. But if your website requires hover states to reveal navigation, or if form controls only respond to click interactions, that user is stuck. They can't navigate. They can't submit the form. They can't buy your product. They leave.</p>
        
        <p>Better websites make keyboard navigation a first-class experience. Every interactive element is reachable by Tab. Every click action has a keyboard equivalent. This isn't a nice-to-have—it's WCAG 2.1 Level AA requirement (2.1.1: Keyboard). And it's trivially easy to test: just disconnect your mouse and try to use your own website.</p>
    </section>
    
    <section id="arm-in-sling">
        <h2>Arm in a Sling: The One-Hand Reality</h2>
        
        <p>Surgery. Car accident. Sports injury. Suddenly a person has full use of only one arm. Typing is fine. Mousing is impossible. Now that person needs a website designed for single-hand operation.</p>
        
        <p>What does this mean in practice? Buttons and links must have sufficient spacing (WCAG target size minimums). Double-click interactions become impossible—a single click must suffice. Keyboard navigation must work flawlessly because a mouse is unusable. Time-limited sessions become cruel: that person needs more time to complete forms or navigate carefully.</p>
        
        <p>Repetitive strain injury (RSI) doesn't require a visible injury—it's the chronic form of this problem. When mouse use causes pain, people don't add additional clicks. They stop using sites that force unnecessary interactions. They switch to competitors. They never come back.</p>
    </section>
    
    <section id="lost-glasses">
        <h2>Lost Glasses: Vision Barriers That Aren't Permanent</h2>
        
        <p>Millions of people wear glasses or contacts. Lose them temporarily—traveling, at the gym, during an eye exam—and vision changes dramatically. Text that was legible becomes blurry. Color-only coding becomes impossible to distinguish. Tiny UI elements vanish.</p>
        
        <p>Temporary vision barriers create the same needs as permanent vision disabilities: sufficient color contrast (WCAG 1.4.3: at least 4.5:1 for normal text), large enough text, and no information conveyed by color alone. A zoom feature (which most browsers provide) should make your site fully usable at 200% zoom—another WCAG requirement (1.4.4).</p>
        
        <p>The difference? Someone with permanent vision loss has already adapted their environment. Someone experiencing temporary vision loss hasn't. They're trying to use your site in an unfamiliar state. Your site needs to meet them where they are.</p>
    </section>
    
    <section id="why-it-matters">
        <h2>Why Temporary Disabilities Matter for Your Business</h2>
        
        <p>The business case is stark: 71% of disabled customers will abandon a site that isn't accessible. That includes people experiencing temporary barriers. An injury doesn't need to be permanent to cause someone to leave your site forever—they just need to encounter friction once.</p>
        
        <p>Conversely, accessible sites benefit everyone. Keyboard navigation helps power users. Zoom functionality helps anyone in bright sunlight trying to read a mobile screen. Clear language and good structure helps people learning the language. Fast load times help people on slow connections. Accessible design is better design.</p>
        
        <p>And legally? Temporary disability doesn't exempt you from ADA compliance. A website must be accessible to someone whether their disability is permanent, temporary, or situational. The requirement is the same: equal access.</p>
    </section>
    
    <section id="wcag-checklist">
        <h2>The Core WCAG Principles for Temporary Accessibility Needs</h2>
        
        <p><strong>Keyboard Navigation (WCAG 2.1.1):</strong> Every function must be operable via keyboard. No mouse-only interactions. Test this by using your site without touching your trackpad.</p>
        
        <p><strong>Color Contrast (WCAG 1.4.3):</strong> Text must contrast at least 4.5:1 against its background. This helps anyone whose vision is temporarily compromised, and it's not about dark mode—it's about readability.</p>
        
        <p><strong>Target Size (WCAG 2.5.5):</strong> Interactive elements should be at least 44x44 pixels. This matters when someone has limited motor control or is using one hand.</p>
        
        <p><strong>No Time Limits (WCAG 2.2.3):</strong> Don't force users to complete actions in a fixed time. People with temporary motor challenges need extra time. People on slow connections need extra time. Remove artificial urgency.</p>
        
        <p><strong>Zoom Functionality (WCAG 1.4.4):</strong> Your site must remain fully functional at 200% zoom. Test in your browser's zoom feature.</p>
    </section>
    
    <section id="implementation">
        <h2>What This Looks Like in Code</h2>
        
        <p>None of this requires special markup or complex frameworks. It's basic HTML done correctly. Semantic HTML (`<button>` instead of `<div onclick>`). Form labels that are actually connected to form fields. Links that look like links. Tab order that makes sense. Sufficient color contrast.</p>
        
        <p>Your developer probably knows how to build this. They might not know it's being measured against their work. Accessibility isn't a feature—it's a foundation.</p>
    </section>
    
    <section id="conclusion">
        <p>Temporary disabilities aren't rare or edge cases. They're moments most of us will face. Building accessible websites isn't about sympathy—it's about recognizing that your users' needs are temporary and varied. A broken mouse today. An arm in a sling tomorrow. Lost glasses next week. Your website should work for all of it.</p>
        
        <p>WCAG compliance ensures that temporary barriers don't become permanent reasons for users to leave.</p>
    </section>
    
    <section style="margin-top: 3rem;">
        <div class="highlight">
            <h2 style="margin-top: 0;">Is Your Site Ready for Real Users?</h2>
            <p>Test how your website works when a user can't use their mouse, can't see clearly, or has limited use of one hand.</p>
            <button class="btn btn-primary" onclick="openPricingForm('free-scan', 'Keyboard & Input Accessibility Audit')">Check My Keyboard Navigation</button>
        </div>
    </section>
</article>
HTML;
include(dirname(__FILE__) . '/../template.php');
?>
