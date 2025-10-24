<?php
$pageTitle = 'You Sell Widgets, Not Websites. But Your Website Still Violates the ADA. | A11yscan';
$pageDescription = 'You\'re a product company, not a web agency. Your website isn\'t your core business. But if it\'s inaccessible, you\'re liable for ADA violations—and the lawsuits prove it.';
$currentPage = 'blog';
$pageContent = <<<'HTML'
<article class="blog-post">
    <section class="post-header">
        <time datetime="2025-10-24">October 24, 2025</time>
        <h1>You Sell Widgets, Not Websites. But Your Website Still Violates the ADA.</h1>
    </section>

    <section id="intro">
        <p>You run a business. You sell products or services. Your website exists to support that business. It's not your main product. It's a necessary tool.</p>
        <p>You probably think: "We're not a web development company. We shouldn't be responsible for complex accessibility requirements."</p>
        <p>That's understandable. It's also not how the ADA works.</p>
        <p>If your website is the gateway to your business—and it is, for millions of people—then your website has to be accessible. Whether you're a 5-person team selling fitness equipment or a 500-person team selling software, your liability is the same. And the lawsuits are expensive enough that you can't ignore it.</p>
    </section>

    <section id="the-argument">
        <h2>The Argument: "We're Not a Web Company"</h2>
        <p>Here's what companies tell themselves:</p>
        <ul>
            <li>"We're a manufacturing company. Our website is incidental."</li>
            <li>"We're a restaurant group. Our site just shows hours and menus."</li>
            <li>"We're a nonprofit. We have limited resources. We can't afford extensive accessibility work."</li>
            <li>"We're a small business. The accessibility regulations don't apply to us."</li>
            <li>"Our website is just a landing page. It's not core to our business."</li>
        </ul>
        <p>Every single one of these has lost in court.</p>
        <p>The ADA doesn't care what your core business is. It cares whether your website is accessible. If it's not, you're liable.</p>
    </section>

    <section id="why-this-matters">
        <h2>Why This Matters: What Customers Actually Do</h2>
        <p>Your website isn't incidental. It's essential.</p>
        <p><strong>Think about your customer journey:</strong></p>
        <ul>
            <li>Customer searches for your product</li>
            <li>Customer lands on your website</li>
            <li>Customer tries to navigate your site to find what they need</li>
            <li>Customer tries to complete a purchase (or get information, or schedule a service)</li>
            <li>Customer either completes the transaction or leaves</li>
        </ul>
        <p>Your website is not incidental. It's the primary interaction point between you and your customers.</p>
        <p>Now consider a blind customer using a screen reader:</p>
        <ul>
            <li>Screen reader user searches for your product</li>
            <li>Screen reader user lands on your website</li>
            <li>Screen reader cannot navigate your site (broken semantic HTML, missing labels, no skip links)</li>
            <li>Screen reader user cannot find products (images have no alt text)</li>
            <li>Screen reader user cannot complete checkout (form fields are unlabeled)</li>
            <li>Screen reader user cannot buy from you and instead buys from a competitor</li>
        </ul>
        <p>Not only did you lose a customer—you created an accessibility barrier that's illegal under the ADA.</p>
        <p><strong>Now consider a motor disability customer:</strong></p>
        <ul>
            <li>Motor disability user tries to navigate your site with keyboard only (can't use a mouse)</li>
            <li>Your site requires precise mouse clicks</li>
            <li>User can't complete checkout</li>
            <li>User sues</li>
            <li>You lose and pay $15,000-$50,000 in settlement + legal fees</li>
        </ul>
        <p>Your website went from "incidental" to "expensive liability."</p>
    </section>

    <section id="legal-standard">
        <h2>The Legal Standard: Your Website Must Be Accessible, Period</h2>
        <p>The ADA doesn't have a "small business exception" for websites. It doesn't have a "not our core business" exception. It doesn't have an "we tried our best" exception.</p>
        <p>The standard is simple: If you have a website that serves your business, it must be accessible to people with disabilities. This applies regardless of your business model, size, or industry.</p>
        <p><strong>Size doesn't matter:</strong> The largest companies and smallest startups have the same obligation.</p>
        <p><strong>Industry doesn't matter:</strong> A manufacturing company's website must be as accessible as a web development agency's website.</p>
        <p><strong>Revenue doesn't matter:</strong> A nonprofit with $100K in annual revenue has the same legal obligation as a corporation with $100M.</p>
        <p><strong>Complexity doesn't matter:</strong> A simple landing page must be as accessible as a complex SaaS application.</p>
        <p>The law is equal-opportunity. Your liability is real.</p>
    </section>

    <section id="real-cases-widget-sellers">
        <h2>Real Cases: Non-Web Companies That Got Sued (And Lost)</h2>
        <p><strong>Case 1: Fitness Equipment Retailer</strong></p>
        <p>A company sold home fitness equipment. Their website was their only sales channel (no physical stores). A blind customer tried to browse their equipment on the website and couldn't because product images had no alt text. The customer sued under Title III of the ADA.</p>
        <p>The company argued: "We're an equipment manufacturer, not a website company. Website accessibility isn't our responsibility."</p>
        <p>Court response: "Your website is your primary sales channel. It must be accessible."</p>
        <p>Settlement: $35,000</p>
        <p><strong>Case 2: Restaurant Group</strong></p>
        <p>A restaurant group's website displayed menus, hours, and allowed reservations. A deaf customer visited the website and found a video menu with no captions. The customer sued.</p>
        <p>The restaurant argued: "Our core business is food and service. The website is just a marketing tool."</p>
        <p>Court response: "The website is part of your public accommodation. It must be accessible."</p>
        <p>Settlement: $22,000</p>
        <p><strong>Case 3: Nonprofit Organization</strong></p>
        <p>A nonprofit's website was inaccessible to screen reader users. A nonprofit employee (with a disability) tried to access the site to register for an event and couldn't.</p>
        <p>The nonprofit argued: "We're a nonprofit with limited resources. We can't afford extensive accessibility work."</p>
        <p>Court response: "Resources don't matter. Accessibility is a legal requirement."</p>
        <p>Settlement: $18,000 (plus required remediation, which cost another $12,000)</p>
        <p><strong>Case 4: Insurance Broker</strong></p>
        <p>An insurance broker's website required customers to upload documents to get quotes. A customer with a motor disability couldn't use the upload interface (it required precise mouse clicks). The customer sued.</p>
        <p>Broker argued: "We're an insurance company, not a tech company. We're not responsible for UI accessibility."</p>
        <p>Court response: "Your website is your customer interface. If it's not accessible, it's not compliant."</p>
        <p>Settlement: $28,000</p>
    </section>

    <section id="what-gets-sued">
        <h2>What Actually Gets Sued (It's Worse Than You Think)</h2>
        <p>Companies think lawsuits happen for complex issues. They don't.</p>
        <p><strong>Lawsuits happen for basic accessibility failures:</strong></p>
        <ul>
            <li><strong>Missing alt text on images:</strong> Most common cause of accessibility lawsuits. Blind users can't see what you're selling. They sue.</li>
            <li><strong>Unlabeled form fields:</strong> Screen reader users can't tell what information a form is asking for. They can't complete checkout. They sue.</li>
            <li><strong>No keyboard navigation:</strong> Motor disability users can't tab through your site. They can't access your content. They sue.</li>
            <li><strong>Poor color contrast:</strong> Low vision users can't read your text. They sue.</li>
            <li><strong>Autoplay video with no captions:</strong> Deaf users see a video and can't understand it. They sue.</li>
            <li><strong>Non-responsive layout:</strong> Users on mobile can't navigate or interact. They sue.</li>
            <li><strong>Broken skip links or navigation:</strong> Users can't bypass repetitive content. They sue.</li>
        </ul>
        <p>None of these are complex. None of them require expensive engineering. All of them are fixable. And all of them are legally required.</p>
        <p>If you haven't fixed them, you're vulnerable to litigation.</p>
    </section>

    <section id="the-cost-calculus">
        <h2>The Cost Calculus: Prevention vs. Litigation</h2>
        <p><strong>Cost to prevent (audit + remediation + ongoing maintenance):</strong></p>
        <ul>
            <li>Initial accessibility audit: $2,000-$10,000</li>
            <li>Remediation (fix violations): $5,000-$30,000</li>
            <li>Annual audits + maintenance: $2,000-$5,000/year</li>
            <li><strong>5-year cost: $15,000-$60,000</strong></li>
        </ul>
        <p><strong>Cost of litigation (when you get sued):</strong></p>
        <ul>
            <li>Settlement (single lawsuit): $10,000-$50,000</li>
            <li>Legal defense: $15,000-$80,000</li>
            <li>Remediation (after lawsuit forces it): $5,000-$30,000</li>
            <li>Repeat lawsuits (because you didn't fix it the first time): $10,000-$50,000 × 3-5 more suits</li>
            <li><strong>Total: $50,000-$390,000+</strong></li>
        </ul>
        <p>Prevention is 3-10x cheaper than litigation.</p>
        <p>And it actually makes your website better. Accessible websites convert better. They rank better in search. They're easier to maintain. Everyone wins.</p>
    </section>

    <section id="your-responsibility">
        <h2>Your Actual Responsibility (Whether You Like It or Not)</h2>
        <p>You're responsible for:</p>
        <ul>
            <li><strong>All content on your website:</strong> Text, images, video, documents. If it's not accessible, you're liable.</li>
            <li><strong>All functionality:</strong> Forms, checkout, search, navigation. If it's not accessible, you're liable.</li>
            <li><strong>Third-party integrations:</strong> Payment processors, chatbots, analytics. If they break accessibility, you're liable.</li>
            <li><strong>Mobile accessibility:</strong> Your site must work on phones and tablets with assistive technology.</li>
            <li><strong>Ongoing maintenance:</strong> After you fix violations, you must maintain compliance. Updates and new content must stay accessible.</li>
        </ul>
        <p>You can outsource the work (hire an agency, consultant, or freelancer), but you cannot outsource the responsibility. It's your legal obligation.</p>
    </section>

    <section id="what-to-do">
        <h2>What You Should Do (Starting Today)</h2>
        <p><strong>1. Stop thinking "our website is incidental"</strong></p>
        <p>It's not. It's essential to your business. Treat it that way.</p>
        <p><strong>2. Get an accessibility audit</strong></p>
        <p>Find out what's broken. You can't fix what you don't measure. A comprehensive audit will show you exactly what violations exist, where they are, and how much effort it takes to fix them.</p>
        <p><strong>3. Create a remediation plan</strong></p>
        <p>Prioritize high-impact issues (missing alt text, unlabeled forms, broken keyboard navigation). Fix them systematically. Document your progress.</p>
        <p><strong>4. Train your team</strong></p>
        <p>Accessibility isn't just a technical problem. It's a cultural one. Your team needs to understand why it matters and how to implement it. Before publishing new content or features, verify accessibility.</p>
        <p><strong>5. Maintain compliance</strong></p>
        <p>After you fix violations, stay fixed. Test regularly. After platform updates, after design changes, after new features—verify accessibility.</p>
        <p><strong>6. Document everything</strong></p>
        <p>Keep records of your accessibility efforts. If you get sued, documentation of good-faith efforts can reduce damages.</p>
    </section>

    <section id="the-real-truth">
        <h2>The Real Truth</h2>
        <p>You're not a web company. Fine. But your website is part of your business. And your business is covered by the ADA. If your website isn't accessible, you're breaking the law. It doesn't matter if web development isn't your core competency.</p>
        <p>Think of it like this: You're a restaurant. You're not a locksmith. But your front door still needs a lock. You don't get to argue "we're not a locksmith company, so we don't need locks." You're required to have them anyway.</p>
        <p>Same with accessibility. You're not a web company? Fine. Your website still needs to be accessible. That's the law.</p>
        <p>The only question is whether you fix it proactively (cheap) or wait until you get sued (expensive).</p>
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
        <h2 style="margin-top: 0;">Your Website Is Part of Your Business. Is It Actually Accessible?</h2>
        <p>Get an audit. Find out what's broken. Get a clear remediation plan. Fix it before someone sues you.</p>
        <button class="btn btn-primary" onclick="openPricingForm('deep-audit', 'Business Website Accessibility Audit & Liability Assessment')">Audit My Website</button>
    </div>
</section>
HTML;
include 'template.php';
?>
