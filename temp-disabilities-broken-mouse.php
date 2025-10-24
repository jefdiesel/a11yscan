<?php
$pageTitle = 'Temporary Disabilities & Accessibility: Broken Mice, Injured Arms, Lost Glasses | A11yscan';
$pageDescription = 'Learn why temporary accessibility needs affect millions and why WCAG compliance matters for everyone experiencing a temporary barrier.';
$currentPage = 'blog';
$pageContent = <<<'HTML'
<article class="blog-post">
    <section class="post-header">
        <time datetime="2025-10-24">October 24, 2025</time>
        <h1>Temporary Disabilities & Accessibility: Broken Mice, Injured Arms, Lost Glasses</h1>
    </section>

    <section id="intro">
        <p>Accessibility isn't just for people with permanent disabilities. Every day, millions of people experience temporary barriers that make them rely on accessibility features just to use the web. A broken mouse. An arm in a sling. Lost glasses. A migraine. A noisy coffee shop. A hospital waiting room where you need to navigate with one hand while holding a prescription.</p>
        <p>These situations are more common than you might think—and they're temporary tests of your website's actual accessibility. If your site doesn't work for someone with a broken mouse, it's not fully accessible. Period.</p>
    </section>

    <section id="temp-disability-stats">
        <h2>The Scale of Temporary Accessibility Needs</h2>
        <p>Research suggests that at any given time, roughly 15-20% of the population is experiencing some form of temporary disability or situational limitation. This includes:</p>
        <ul>
            <li><strong>Musculoskeletal injuries:</strong> Broken arms, wrists, shoulders. Sports injuries, workplace accidents, car accidents. Average recovery time: 6-12 weeks.</li>
            <li><strong>Vision problems:</strong> Lost glasses, scratched contact lenses, dry eyes from screen time, post-surgery vision correction. Many people don't keep backup glasses.</li>
            <li><strong>Hearing disruptions:</strong> Working in loud environments, using devices in public, temporary hearing loss from infections.</li>
            <li><strong>Cognitive load:</strong> Exhaustion, medication side effects, sleep deprivation, stress, learning new systems.</li>
            <li><strong>Motor control barriers:</strong> Holding a baby while browsing, sitting in an awkward position at a doctor's office, using a phone with one hand while eating.</li>
        </ul>
        <p>These aren't edge cases. They're situations your actual users face regularly. And if your website fails for them, you're losing customers, goodwill, and trust.</p>
    </section>

    <section id="broken-mouse-example">
        <h2>The Broken Mouse Test: What Accessibility Actually Means</h2>
        <p>Here's a real scenario: Your mouse breaks. You're waiting for a replacement and need to order something online right now. Can you use most websites with just your keyboard?</p>
        <p>If the answer is "no," your site is failing an accessibility test that's happening to your users every single day. Someone spilled coffee on their mouse. Someone's USB port is broken. Someone's at an airport and their trackpad isn't working.</p>
        <p>A truly accessible website should support:</p>
        <ul>
            <li><strong>Full keyboard navigation:</strong> Tab through every interactive element without getting stuck.</li>
            <li><strong>Visible focus indicators:</strong> You need to see where you are on the page.</li>
            <li><strong>Logical tab order:</strong> The order makes sense. You're not jumping randomly around the page.</li>
            <li><strong>No keyboard traps:</strong> If you can tab into something, you can tab out of it.</li>
            <li><strong>Proper semantic HTML:</strong> Links are links, buttons are buttons. Screen reader users and keyboard-only users rely on this.</li>
        </ul>
        <p>Most "pretty" websites built with unsemantic divs and JavaScript click handlers fail this test catastrophically. You can't navigate them. You can't submit forms. You're stuck.</p>
    </section>

    <section id="one-handed-browsing">
        <h2>One-Handed Browsing: The Reality of Situational Limitations</h2>
        <p>You're on the train. You're standing, holding the handrail. You're checking your bank balance. One hand is spoken for. Can you use your phone with just your thumb or one index finger?</p>
        <p>You're at the grocery store. You're holding a list in one hand and pushing a cart with the other. You need to check prices on your phone. One hand.</p>
        <p>You're at a hospital. You've just had surgery and your dominant arm is in a sling. You need to fill out forms online. You have one functional hand.</p>
        <p>Mobile accessibility becomes essential in these situations. Your touch targets need to be large enough. Your buttons need proper spacing (minimum 44×44 pixels, ideally 48×48). Your forms need to be completable without requiring precise two-handed coordination.</p>
        <p>Users in these situations don't have a disability—they have a temporary need. But your website either meets that need or it doesn't. There's no middle ground.</p>
    </section>

    <section id="vision-barriers">
        <h2>When Vision Changes: Glasses, Screens, and Readability</h2>
        <p>You lose your glasses. You can still see, but small text is blurry. You zoom your browser to 200%. Does your website still work? Or does it break into a horizontal scrolling nightmare?</p>
        <p>You're reading at maximum brightness in sunlight. The contrast on your website makes text almost invisible. You leave.</p>
        <p>You've been staring at screens all day and your eyes are strained. You enable dark mode or use a blue light filter. Your website's colors become hard to distinguish. You get frustrated and go to a competitor.</p>
        <p>True accessibility means:</p>
        <ul>
            <li><strong>Minimum contrast ratio of 4.5:1 for normal text:</strong> This isn't a nice-to-have. It's WCAG AA standard.</li>
            <li><strong>Scalability to 200%:</strong> Browsers zoom, users zoom, and your site needs to adapt.</li>
            <li><strong>No reliance on color alone:</strong> If you use green to mean "valid" and red to mean "error," colorblind users miss the entire message.</li>
            <li><strong>Readable font sizes:</strong> 14px minimum for body text. Larger is better.</li>
            <li><strong>Adequate line spacing:</strong> 1.5x minimum. People with dyslexia and anyone reading on a small screen benefit from this.</li>
        </ul>
        <p>Someone with lost glasses will find your site eventually when they put their glasses back on. But users with situational vision barriers might not come back—they'll just go to your competitor whose site actually works.</p>
    </section>

    <section id="cognitive-load">
        <h2>Cognitive Load: When Everyone Needs Accessibility</h2>
        <p>Accessibility isn't just about disabilities. It's about cognitive load. Anyone can experience it.</p>
        <p>You're exhausted at the end of a long day. Your brain is fried. You're trying to book a flight but the website's navigation is confusing, there are too many options, and there are no clear instructions. You give up and book with a competitor.</p>
        <p>You're on a medication that causes brain fog. You need a website that's clear, simple, and doesn't require you to hold multiple pieces of information in your head at once.</p>
        <p>You're learning a new language and using your phone's translation app. The website is full of jargon and complex sentences. You bounce.</p>
        <p>WCAG compliance directly addresses cognitive load through:</p>
        <ul>
            <li><strong>Clear headings and structure:</strong> People can scan and find what they need.</li>
            <li><strong>Plain language:</strong> Short sentences, common words, clear explanations.</li>
            <li><strong>Consistent navigation:</strong> Things work the way users expect.</li>
            <li><strong>Error prevention and recovery:</strong> Forms tell you what went wrong and how to fix it.</li>
            <li><strong>Focus management:</strong> You always know where you are on the page.</li>
        </ul>
        <p>These aren't just for people with cognitive disabilities. They're for everyone having a bad day, in a stressful situation, or operating at reduced capacity.</p>
    </section>

    <section id="business-impact">
        <h2>The Business Case: Accessibility as Customer Retention</h2>
        <p>Here's what happens when you don't support keyboard navigation:</p>
        <ul>
            <li>Someone's mouse breaks. They try your site. They can't navigate it. They use a competitor.</li>
            <li>Someone is recovering from an injury. They need keyboard navigation. Your site doesn't support it. They use a competitor.</li>
            <li>Someone is on a slow connection. JavaScript loads slowly. Your mouse-dependent interactions don't work. They use a competitor.</li>
        </ul>
        <p>Here's what happens when you do support accessibility:</p>
        <ul>
            <li>Everyone can use your site, regardless of their situation.</li>
            <li>Your site works better on slow connections (simpler HTML and CSS).</li>
            <li>Your SEO improves (search engines reward semantic HTML).</li>
            <li>Your site is more maintainable (semantic HTML is easier to work with).</li>
            <li>You avoid ADA litigation risk.</li>
            <li>You reach a broader market (15-20% of the population experiences temporary accessibility needs at any given time).</li>
        </ul>
        <p>Accessibility isn't a feature. It's a prerequisite for being in business in 2025.</p>
    </section>

    <section id="getting-started">
        <h2>Getting Started: Test Your Accessibility</h2>
        <p>Want to know if your site actually works? Start with these tests:</p>
        <ul>
            <li><strong>Keyboard test:</strong> Put your mouse away and try to use your site with just your keyboard. Can you reach everything? Is it obvious where you are?</li>
            <li><strong>Zoom test:</strong> Zoom your browser to 200%. Does everything still work? Can you read it?</li>
            <li><strong>Contrast test:</strong> Use a contrast checker tool on your colors. Are they WCAG AA compliant?</li>
            <li><strong>One-handed test:</strong> Can you navigate on mobile with one hand?</li>
            <li><strong>Screen reader test:</strong> Turn on your device's screen reader and try to use your site. What's missing?</li>
        </ul>
        <p>These tests reveal the gap between "looks good" and "actually works." And they're tests your real users are conducting every day, sometimes without meaning to.</p>
    </section>

    <section style="margin-top: 3rem;">
        <div class="highlight">
            <h2 style="margin-top: 0;">Test Your Accessibility Today</h2>
            <p>Find out if your website actually works for everyone—including people with broken mice, injured arms, and temporary vision barriers. Get a free WCAG accessibility audit and discover what's blocking your users.</p>
            <button class="btn btn-primary" onclick="openPricingForm('free-scan', 'Temporary Disability Accessibility Audit')">Test My Keyboard Navigation</button>
        </div>
    </section>
</article>
HTML;
include(dirname(__FILE__) . '/../template.php');
?>
