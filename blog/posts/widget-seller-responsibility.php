<?php
$pageTitle = 'You Sell Products, Not Websites. But Your Website Still Needs to Be Accessible. | A11yscan';
$pageDescription = 'You\'re a product company, not a web agency. Your website isn\'t your core business. But if it\'s inaccessible, you may face legal challenges—here\'s what you need to know.';
$currentPage = 'blog';
$pageContent = <<<'HTML'
<article class="blog-post">
    <section class="post-header">
        <time datetime="2025-10-24">October 24, 2025</time>
        <h1>You Sell Products, Not Websites. But Your Website Still Needs to Be Accessible.</h1>
    </section>

    <!-- LEGAL DISCLAIMER -->
    <section style="margin-top: 2rem; padding-top: 1.5rem; border-top: 2px solid var(--border);">
        <div style="background: var(--bg-tertiary); padding: 1.5rem; border-radius: 4px; border-left: 4px solid var(--accent-primary);">
            <h3 style="margin-top: 0; font-size: 1.1rem;">Legal Disclaimer</h3>
            <p style="font-size: 0.95rem; margin-bottom: 0;"><strong>A11yscan is not a law firm and does not provide legal advice.</strong> We operate under best practices based on WCAG Guidelines, ADA requirements, and applicable jurisdictions. Courts don't always agree on terms and expectations for web accessibility, and legal standards can vary by jurisdiction. However, an accessible website works better for all users regardless of legal requirements. For specific legal guidance, consult with a qualified attorney specializing in accessibility law.</p>
        </div>
    </section>

    <section id="intro">
        <p>You run a business. You sell products or services. Your website exists to support that business. It's not your main product. It's a necessary tool.</p>
        <p>You probably think: "We're not a web development company. We shouldn't be responsible for complex accessibility requirements."</p>
        <p>That's understandable. However, accessibility standards generally apply to websites that serve as public accommodations, regardless of whether web development is your core business.</p>
        <p>If your website is the gateway to your business—and for many customers, it is—then your website's accessibility becomes an important consideration. Whether you're a small team selling fitness equipment or a larger organization selling software, understanding your website's accessibility is increasingly important.</p>
    </section>

    <section id="the-argument">
        <h2>The Common Perspective: "We're Not a Web Company"</h2>
        <p>Here's what many companies tell themselves:</p>
        <ul>
            <li>"We're a manufacturing company. Our website is incidental."</li>
            <li>"We're a restaurant group. Our site just shows hours and menus."</li>
            <li>"We're a nonprofit. We have limited resources. We can't afford extensive accessibility work."</li>
            <li>"We're a small business. The accessibility regulations don't apply to us."</li>
            <li>"Our website is just a landing page. It's not core to our business."</li>
        </ul>
        <p>These perspectives are common, but they may not align with current legal and business expectations around website accessibility.</p>
    </section>

    <section id="why-this-matters">
        <h2>Why This Matters: What Customers Actually Do</h2>
        <p>Your website isn't incidental. It's often essential to how customers interact with your business.</p>
        
        <h3>Think about your customer journey:</h3>
        <ul>
            <li>Customer searches for your product</li>
            <li>Customer lands on your website</li>
            <li>Customer tries to navigate your site to find what they need</li>
            <li>Customer tries to complete a purchase (or get information, or schedule a service)</li>
            <li>Customer either completes the transaction or leaves</li>
        </ul>
        <p>Your website is not incidental. It's often the primary interaction point between you and your customers.</p>
        
        <h3>Now consider a customer using a screen reader:</h3>
        <ul>
            <li>Screen reader user searches for your product</li>
            <li>Screen reader user lands on your website</li>
            <li>Screen reader cannot effectively navigate your site (broken semantic HTML, missing labels, no skip links)</li>
            <li>Screen reader user cannot find products (images have no alt text)</li>
            <li>Screen reader user cannot complete checkout (form fields are unlabeled)</li>
            <li>Screen reader user cannot buy from you and may go to a competitor</li>
        </ul>
        <p>Not only did you lose a potential customer—you also created an accessibility barrier.</p>
        
        <h3>Consider a customer with motor disabilities:</h3>
        <ul>
            <li>Motor disability user tries to navigate your site with keyboard only (can't use a mouse)</li>
            <li>Your site requires precise mouse clicks</li>
            <li>User can't complete their task</li>
            <li>User becomes frustrated and may leave</li>
        </ul>
        <p>Your website went from "incidental" to "barrier to business."</p>
    </section>

    <section id="legal-standard">
        <h2>The Accessibility Landscape: What Organizations Face</h2>
        <p>Website accessibility has become an increasingly important consideration for businesses of all sizes and industries.</p>
        <p><strong>General accessibility expectations:</strong> Websites that serve as public accommodations are generally expected to be accessible to people with disabilities. This expectation applies broadly across industries and business types.</p>
        <p><strong>Size considerations:</strong> While some may assume small businesses have different requirements, accessibility expectations often apply regardless of organization size.</p>
        <p><strong>Industry considerations:</strong> A manufacturing company's website faces similar accessibility expectations as a web development agency's website.</p>
        <p><strong>Revenue considerations:</strong> Both nonprofits and for-profit corporations typically face the same basic accessibility expectations.</p>
        <p><strong>Complexity considerations:</strong> A simple landing page and a complex SaaS application both need to meet accessibility standards.</p>
        <p>The landscape is evolving, and organizations across sectors are increasingly prioritizing website accessibility.</p>
    </section>

    <section id="real-world-patterns">
        <h2>Common Accessibility Challenges Across Industries</h2>
        <p>Organizations across many sectors have faced accessibility challenges related to their websites. While specific details vary, some common patterns have emerged:</p>
        
        <h3>E-commerce and Retail</h3>
        <p>Online retailers have faced challenges when customers with disabilities couldn't effectively browse products or complete purchases. Issues have included inaccessible product images, unlabeled form fields, and checkout processes that don't work with assistive technology.</p>
        
        <h3>Food Service</h3>
        <p>Restaurant and food service websites have encountered issues when customers couldn't access menus, make reservations, or order online using assistive technology. Problems have included video content without captions and inaccessible online ordering systems.</p>
        
        <h3>Nonprofit Organizations</h3>
        <p>Nonprofits have learned that limited resources don't exempt them from accessibility considerations. Challenges have included inaccessible event registration and donation systems.</p>
        
        <h3>Service Businesses</h3>
        <p>Service providers have faced accessibility challenges related to customer intake forms, document upload interfaces, and appointment scheduling systems that don't work with assistive technology.</p>
        
        <p>These patterns illustrate that accessibility is a cross-industry concern, not limited to technology companies.</p>
    </section>

    <section id="what-gets-challenged">
        <h2>Common Accessibility Issues</h2>
        <p>Accessibility challenges often arise from basic, fixable issues:</p>
        <ul>
            <li><strong>Missing alt text on images:</strong> A frequently cited accessibility issue. Customers using screen readers can't see what you're selling.</li>
            <li><strong>Unlabeled form fields:</strong> Screen reader users can't tell what information a form is asking for, making checkout difficult or impossible.</li>
            <li><strong>No keyboard navigation:</strong> Users with motor disabilities who can't use a mouse cannot access your content.</li>
            <li><strong>Poor color contrast:</strong> Low vision users struggle to read your text.</li>
            <li><strong>Video without captions:</strong> Deaf users see a video but can't understand it.</li>
            <li><strong>Non-responsive layout:</strong> Users on mobile devices can't navigate or interact effectively.</li>
            <li><strong>Broken skip links or navigation:</strong> Users can't efficiently navigate your content.</li>
        </ul>
        <p>None of these are highly complex. None require expensive engineering. All of them are fixable. And all of them represent barriers to users with disabilities.</p>
        <p>If you haven't addressed these issues, your website may present accessibility challenges to potential customers.</p>
    </section>

    <section id="the-cost-calculus">
        <h2>The Cost Consideration: Prevention vs. Remediation</h2>
        
        <h3>Proactive accessibility investment:</h3>
        <ul>
            <li>Initial accessibility audit: $2,000-$10,000</li>
            <li>Remediation (fix violations): $5,000-$30,000</li>
            <li>Annual audits + maintenance: $2,000-$5,000/year</li>
            <li><strong>5-year cost estimate: $15,000-$60,000</strong></li>
        </ul>
        
        <h3>Reactive approach costs:</h3>
        <ul>
            <li>Legal challenges can be expensive</li>
            <li>Remediation after a legal challenge often costs more than proactive fixes</li>
            <li>Reputation damage</li>
            <li>Lost customers during remediation</li>
            <li>Potential repeat challenges if issues aren't properly addressed</li>
            <li><strong>Total reactive costs can be significantly higher</strong></li>
        </ul>
        <p>Proactive accessibility investment is generally more cost-effective than reactive responses.</p>
        <p>Additionally, accessible websites often provide business benefits: they convert better, rank better in search engines, and are easier to maintain. Accessibility improvements benefit all users, not just those with disabilities.</p>
    </section>

    <section id="your-responsibility">
        <h2>What Organizations Typically Need to Address</h2>
        <p>Organizations are generally responsible for:</p>
        <ul>
            <li><strong>All content on their website:</strong> Text, images, video, documents. If it's not accessible, it may create barriers.</li>
            <li><strong>All functionality:</strong> Forms, checkout, search, navigation. If it's not accessible, users with disabilities may be excluded.</li>
            <li><strong>Third-party integrations:</strong> Payment processors, chatbots, analytics. If they create accessibility barriers, the host website may be responsible.</li>
            <li><strong>Mobile accessibility:</strong> Sites should work on phones and tablets with assistive technology.</li>
            <li><strong>Ongoing maintenance:</strong> After addressing accessibility issues, organizations should maintain compliance. Updates and new content should remain accessible.</li>
        </ul>
        <p>You can work with agencies, consultants, or freelancers to address accessibility (many organizations do), but the responsibility for maintaining an accessible website typically remains with the website owner.</p>
    </section>

    <section id="what-to-do">
        <h2>Recommended Actions</h2>
        
        <h3>1. Recognize your website's importance</h3>
        <p>Your website may be more central to your business than you realize. Many customers interact with your business primarily through your website.</p>
        
        <h3>2. Get an accessibility audit</h3>
        <p>Find out what accessibility issues exist. You can't fix what you don't measure. A comprehensive audit will show you exactly what barriers exist, where they are, and how much effort it takes to address them.</p>
        
        <h3>3. Create a remediation plan</h3>
        <p>Prioritize high-impact issues (missing alt text, unlabeled forms, broken keyboard navigation). Address them systematically. Document your progress.</p>
        
        <h3>4. Train your team</h3>
        <p>Accessibility isn't just a technical issue—it's a process issue. Your team needs to understand why it matters and how to implement it. Before publishing new content or features, check for accessibility.</p>
        
        <h3>5. Maintain compliance</h3>
        <p>After you address accessibility issues, stay vigilant. Test regularly. After platform updates, design changes, or new features—verify accessibility.</p>
        
        <h3>6. Document everything</h3>
        <p>Keep records of your accessibility efforts. Documentation of good-faith accessibility work can be valuable.</p>
    </section>

    <section id="the-perspective-shift">
        <h2>The Perspective Shift</h2>
        <p>You're not a web company. That's true. But your website is part of how you do business. And accessibility standards generally apply to websites that serve as public accommodations.</p>
        <p>Think of it like this: You're a restaurant. You're not a construction company. But your building still needs to meet building codes. You're not an architect, but you still need accessible entrances, restrooms, and pathways. You don't get to say "we're not a construction company, so we don't need to follow building codes."</p>
        <p>Similarly with web accessibility: You're not a web company. But your website still needs to be accessible. That's increasingly the expectation.</p>
        <p>The question is whether you address it proactively (more manageable and cost-effective) or wait until you face a challenge (typically more expensive and disruptive).</p>
    </section>

    <section id="resources">
        <h2>Resources</h2>
        <ul>
            <li><a href="https://www.ada.gov/">Americans with Disabilities Act (ADA.gov)</a></li>
            <li><a href="https://www.w3.org/TR/WCAG21/">WCAG 2.1 Guidelines</a></li>
            <li><a href="https://www.w3.org/WAI/">W3C Web Accessibility Initiative</a></li>
            <li><a href="https://webaim.org/">WebAIM</a></li>
        </ul>
    </section>

    <!-- LEGAL DISCLAIMER (mandatory) -->
    

    <!-- CUSTOMIZED CTA -->
    <section style="margin-top: 3rem;">
        <div class="highlight">
            <h2 style="margin-top: 0;">Is Your Website Accessible?</h2>
            <p>Get an audit. Find out what accessibility barriers exist. Get a clear remediation plan. Address issues proactively.</p>
            <button class="btn btn-primary" onclick="openPricingForm('deep-audit', 'Business Website Accessibility Audit')">Audit My Website</button>
        </div>
    </section>
</article>
HTML;
include __DIR__ . '/../../template.php';
?>
