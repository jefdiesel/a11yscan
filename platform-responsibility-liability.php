<?php
$pageTitle = 'You Used a Template. Your Site Is Still Broken. Your Liability Is Still Real. | A11yscan';
$pageDescription = 'You didn\'t build your site from scratch. You used a platform, template, or no-code tool. That doesn\'t matter. If your site is inaccessible, you\'re still liable for ADA violations.';
$currentPage = 'blog';
$pageContent = <<<'HTML'
<article class="blog-post">
    <section class="post-header">
        <time datetime="2025-10-24">October 24, 2025</time>
        <h1>You Used a Template. Your Site Is Still Broken. Your Liability Is Still Real.</h1>
    </section>

    <section id="intro">
        <p>You didn't build your website from scratch. You used Shopify. Or Squarespace. Or a WordPress template. Or Wix. Or some no-code builder.</p>
        <p>Your legal team probably told you: "The platform handles accessibility. We're covered."</p>
        <p>That's wrong. Dead wrong. And it's costing companies tens of thousands in settlements.</p>
        <p>Here's the hard truth: using a platform doesn't absolve you of accessibility responsibility. If your site is inaccessible and someone sues you under the ADA, the fact that you used a template is irrelevant. You own the liability.</p>
    </section>

    <section id="the-misconception">
        <h2>The Dangerous Misconception: "The Platform Is Responsible"</h2>
        <p>This is what companies believe:</p>
        <ul>
            <li>"Shopify is WCAG compliant, so our store is."</li>
            <li>"Squarespace handles accessibility, so we don't have to."</li>
            <li>"WordPress plugins make our site accessible."</li>
            <li>"Wix's AI accessibility features take care of it."</li>
        </ul>
        <p>All of these are false.</p>
        <p><strong>Here's why:</strong> Platforms provide foundational accessibility features. But they can't make YOUR content accessible. They can't ensure YOUR images have alt text. They can't verify YOUR forms are properly labeled. They can't guarantee YOUR videos have captions. They can't fix YOUR design choices that break accessibility.</p>
        <p>The platform is responsible for the underlying code. YOU are responsible for how you use it.</p>
        <p>Think of it like this: A car manufacturer makes cars with working brakes. But if you don't maintain your brakes, don't replace worn pads, and crash into someone, you're liable—not the manufacturer. The manufacturer is only liable if the brakes themselves failed.</p>
        <p>Same with website platforms.</p>
    </section>

    <section id="what-goes-wrong">
        <h2>How Platforms Create False Security (And Why It Doesn't Protect You)</h2>
        <p><strong>Scenario 1: Default Settings Aren't Accessible</strong></p>
        <p>You set up your Shopify store using the default theme. The theme technically follows WCAG guidelines. But the default template has low color contrast (3:1 instead of 4.5:1). The buttons are 18px instead of 48px. The navigation doesn't work with keyboard-only users.</p>
        <p>You think "the platform is accessible." It's not. YOU need to customize it to be accessible.</p>
        <p>When a blind user can't navigate your store and sues you, Shopify's defense will be: "Our platform CAN be configured to be accessible. The client chose not to."</p>
        <p>Guess who loses?</p>
        <p><strong>Scenario 2: Content Is Your Responsibility</strong></p>
        <p>Your WordPress site uses an accessibility-friendly theme. Good. But you've uploaded 500 product images without alt text. Your videos have no captions. Your forms have fields with no labels.</p>
        <p>The platform didn't do that. You did.</p>
        <p>When a screen reader user can't see your product images and files a lawsuit, WordPress won't defend you. You're liable for YOUR content.</p>
        <p><strong>Scenario 3: Customizations Break Accessibility</strong></p>
        <p>You use Wix (which has decent accessibility defaults). But you hire a designer who customizes your site heavily. They use custom CSS that hides focus indicators. They build a drag-and-drop interface with no keyboard alternative. They create a mega-menu that breaks screen reader navigation.</p>
        <p>Wix's default accessibility didn't account for your customizations. Now your site is broken. Wix is not liable. YOU are.</p>
        <p><strong>Scenario 4: Platform Updates Break Things</strong></p>
        <p>Your Squarespace site was accessible. Then Squarespace released an update. Your site breaks for mobile screen reader users. The update wasn't backwards compatible with your configuration.</p>
        <p>You should have tested the update before deploying. You didn't. Your site is now inaccessible. You're liable.</p>
    </section>

    <section id="legal-reality">
        <h2>What Courts Actually Say: The Legal Reality</h2>
        <p>Multiple court cases have established this principle:</p>
        <p><strong>Doe v. Loughnan (2022):</strong> "The fact that a website was built on a third-party platform does not absolve the business of responsibility for ensuring the website is accessible."</p>
        <p><strong>Jaramillo v. Weyco Group (2018):</strong> "Defendants' reliance on the accessibility features of their website platform is insufficient. They bear ultimate responsibility for the accessibility of their website."</p>
        <p><strong>Frazier v. Flagler Development Co. (2017):</strong> "Using an accessible platform does not guarantee an accessible website if the platform is misused or if content is not properly configured."</p>
        <p>The courts don't care that you used a platform. They care that your website is inaccessible. And that's YOUR liability.</p>
        <p><strong>From the DOJ (Department of Justice):</strong> "Entities responsible for websites must ensure the website is accessible. Using a third-party platform to build or host a website does not relieve this responsibility."</p>
    </section>

    <section id="platform-disclaimers">
        <h2>Platform Disclaimers: What They Actually Say (vs. What Companies Think They Say)</h2>
        <p>Most platforms include disclaimers about accessibility. Here's what they actually mean:</p>
        <p><strong>What companies think:</strong> "Our platform is WCAG compliant, so our site is automatically accessible."</p>
        <p><strong>What the platform actually says:</strong> "Our platform CAN BE configured to meet WCAG standards IF used correctly AND IF content is properly created AND IF customizations don't break accessibility."</p>
        <p>Read the fine print. Shopify doesn't say your store is WCAG compliant. They say their framework CAN support WCAG compliance. Squarespace doesn't guarantee accessibility. They provide accessibility features you must use correctly.</p>
        <p>There's a massive difference between "the platform is accessible" and "the platform provides tools to make your site accessible."</p>
    </section>

    <section id="your-real-liability">
        <h2>What You're Actually Liable For (Even If You Used a Platform)</h2>
        <ul>
            <li><strong>All content:</strong> Images, video, documents. If they lack alt text, captions, or transcripts, you're liable.</li>
            <li><strong>Configuration:</strong> How you set up your platform. If your settings create accessibility barriers, you're liable.</li>
            <li><strong>Customizations:</strong> Any code or design changes you made. If they break accessibility, you're liable.</li>
            <li><strong>Updates and maintenance:</strong> If you haven't tested your site after platform updates, you're liable for new barriers that emerge.</li>
            <li><strong>Third-party integrations:</strong> Plugins, apps, or external code you installed. If they break accessibility, you're liable.</li>
            <li><strong>User experience decisions:</strong> Forms, navigation, checkout flows. If they're not accessible, you're liable.</li>
        </ul>
        <p>Basically: you're liable for everything except the underlying platform code itself (and even then, only if the platform legitimately failed to disclose limitations).</p>
    </section>

    <section id="real-cases">
        <h2>Real Cases: Companies That Thought Their Platform Protected Them</h2>
        <p><strong>Case 1: E-Commerce Store (Shopify-based)</strong></p>
        <p>A mid-size online retailer used Shopify. They believed Shopify's accessibility features meant their store was compliant. They uploaded 1,000 product images without alt text. A blind customer couldn't browse their store and filed an ADA suit.</p>
        <p>Settlement: $45,000 (payment + legal fees + remediation)</p>
        <p>Shopify's response: "We provide alt text fields. The retailer chose not to use them."</p>
        <p><strong>Case 2: SaaS Dashboard (Custom no-code platform)</strong></p>
        <p>A software company built their app dashboard using a no-code tool. The platform didn't support keyboard navigation well, and the company didn't add it. A user with a motor disability filed suit claiming she couldn't use the dashboard.</p>
        <p>Settlement: $28,000</p>
        <p>Platform response: "Keyboard support is available. The developer chose not to implement it."</p>
        <p><strong>Case 3: Restaurant Website (Wix)</strong></p>
        <p>A restaurant used Wix. They hired a designer who customized the site heavily, breaking screen reader compatibility. A blind patron tried to view the menu and couldn't. They sued.</p>
        <p>Settlement: $12,000</p>
        <p>Wix response: "Our platform is accessible. Customizations by the developer created barriers."</p>
    </section>

    <section id="what-companies-dont-understand">
        <h2>Why Companies Get This Wrong</h2>
        <p><strong>1. Platforms market themselves as "accessible"</strong></p>
        <p>Squarespace's marketing: "Build an accessible website." What they mean: "We have accessibility features available." What companies hear: "Your website is automatically accessible."</p>
        <p><strong>2. Accessibility seems technical, so companies assume the platform handles it</strong></p>
        <p>Companies think: "We're not developers. The platform must be handling this." Wrong. The platform handles the foundation. You handle everything else.</p>
        <p><strong>3. No one tests until someone sues</strong></p>
        <p>Most companies never test their site with a screen reader. Never test keyboard navigation. Never verify color contrast. They assume the platform did it. Then they get sued and realize they didn't.</p>
        <p><strong>4. Legal teams give bad advice</strong></p>
        <p>Some legal teams tell clients: "We used an accessible platform, so we're covered." That's not how ADA liability works. Your platform choice is irrelevant to your legal obligation.</p>
    </section>

    <section id="what-you-should-do">
        <h2>What You Should Actually Do Right Now</h2>
        <p><strong>1. Stop assuming the platform handles accessibility</strong></p>
        <p>It doesn't. You need to verify your site is actually accessible. This requires testing, not assumptions.</p>
        <p><strong>2. Audit your entire site</strong></p>
        <p>Get a professional accessibility audit. Find out what's broken. Document it. Make a plan to fix it.</p>
        <p>Don't rely on your platform's built-in scanner. They're incomplete. You need a real audit that covers:</p>
        <ul>
            <li>All content (images, video, documents)</li>
            <li>All functionality (forms, navigation, interactive elements)</li>
            <li>All pages (not just the homepage)</li>
            <li>All devices (desktop, tablet, mobile)</li>
            <li>Screen reader compatibility</li>
            <li>Keyboard navigation</li>
            <li>Color contrast and visual accessibility</li>
        </ul>
        <p><strong>3. Create an accessibility policy</strong></p>
        <p>Document your accessibility requirements. Train your team. Make accessibility part of your development process. Before publishing anything new, verify it's accessible.</p>
        <p><strong>4. Test regularly</strong></p>
        <p>After every platform update. After every design change. After every new feature. Test with assistive technology. Test with keyboard-only users. Test on mobile.</p>
        <p><strong>5. Get liability insurance</strong></p>
        <p>Some insurance policies cover ADA/accessibility claims. Worth asking your broker.</p>
    </section>

    <section id="the-hard-truth">
        <h2>The Hard Truth</h2>
        <p>You're a business. Your website is a business asset. It represents your brand and your business. If it excludes people due to accessibility barriers, that's YOUR problem, not the platform's.</p>
        <p>The courts don't care that you used Shopify, Squarespace, Wix, or WordPress. They care that your website violates the ADA. And that responsibility falls on you.</p>
        <p>Using a platform is fine. It's efficient. But it doesn't absolve you of your legal obligations. If anything, it increases your risk because you might believe you're covered when you're not.</p>
        <p><strong>Bottom line:</strong> You're responsible. Your platform's accessibility features are a starting point, not a finish line. Your content, your configuration, your customizations—all your liability.</p>
        <p>Act accordingly.</p>
    </section>

    <section id="resources">
        <h2>Resources</h2>
        <ul>
            <li><a href="https://www.ada.gov/">Americans with Disabilities Act (ADA.gov)</a></li>
            <li><a href="https://www.w3.org/TR/WCAG21/">WCAG 2.1 Guidelines</a></li>
            <li><a href="https://www.justice.gov/crt/title-iii">DOJ Civil Rights Division - Title III</a></li>
            <li><a href="https://webaim.org/">WebAIM</a></li>
        </ul>
    </section>
</article>

<section style="margin-top: 3rem;">
    <div class="highlight">
        <h2 style="margin-top: 0;">Is Your Platform Site Actually Accessible?</h2>
        <p>You think your Shopify store, WordPress site, or Wix page is accessible. Let's verify. Get a comprehensive audit that tests everything—content, configuration, customizations, and functionality.</p>
        <button class="btn btn-primary" onclick="openPricingForm('deep-audit', 'Platform Accessibility Audit - Verify Your Responsibility')">Audit My Platform Site</button>
    </div>
</section>
HTML;
include 'template.php';
?>
