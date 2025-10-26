<?php
$pageTitle = 'Platform Liability: When Third Parties Create Accessibility Barriers | A11yscan Blog';
$pageDescription = 'Understand third-party accessibility liability. Learn when platforms, tools, and vendors share responsibility for accessibility barriers and what 2025 litigation reveals.';
$currentPage = 'blog';

$pageContent = <<<'HTML'
<article class="blog-post">
    <section id="intro">
        <time datetime="2025-10-22" style="font-size: 0.9rem; color: var(--text-secondary); font-weight: 500; display: block; margin-bottom: 0.5rem;">October 22, 2025</time>
        <h1 style="font-size: 2.5rem; font-weight: 700; line-height: 1.2; margin-bottom: 2rem;">Platform Liability: When Third Parties Create Accessibility Barriers</h1>
        
        <h2>The Third-Party Accessibility Problem</h2>
        <p>Modern websites depend on third-party tools, platforms, and services. But responsibility for accessibility barriers created by these third parties remains legally ambiguous. Emerging 2024-2025 litigation clarifies that website owners cannot entirely escape responsibility for third-party accessibility failures, while third-party providers increasingly face direct liability for creating barriers.</p>
        <p>Website accessibility increasingly depends on third parties: content management systems, analytics platforms, advertising networks, chat widgets, map services, and payment processors. Each third-party tool creates potential accessibility barriers independent of the website owner's efforts.</p>
        <p>This reality creates legal ambiguity. When accessibility barriers result from third-party code, who bears responsibility? Historically, website owners argued that third parties bear responsibility. Plaintiffs countered that website owners remain responsible because they chose to implement inaccessible tools. Emerging litigation is resolving this question—usually not in website owners' favor.</p>
    </section>

    <!-- LEGAL DISCLAIMER -->
    <section style="margin-top: 2rem; padding-top: 1.5rem; border-top: 2px solid var(--border);">
        <div style="background: var(--bg-tertiary); padding: 1.5rem; border-radius: 4px; border-left: 4px solid var(--accent-primary);">
            <h2 style="margin-top: 0; font-size: 1.1rem;">Legal Disclaimer</h2>
            <p style="font-size: 0.95rem; margin-bottom: 0;"><strong>A11yscan is not a law firm and does not provide legal advice.</strong> We operate under best practices based on WCAG Guidelines, ADA requirements, and applicable jurisdictions. Courts don't always agree on terms and expectations for web accessibility, and legal standards can vary by jurisdiction. However, an accessible website works better for all users regardless of legal requirements. For specific legal guidance, consult with a qualified attorney specializing in accessibility law.</p>
        </div>
    </section>

    <section id="website-owner">
        <h2>Website Owner Responsibility for Third-Party Barriers</h2>
        
        <h3>The Primary Principle: Responsibility Cannot Be Delegated</h3>
        <p>Courts have established a clear principle: website owners cannot escape accessibility responsibility by delegating implementation to third parties. This principle derives from broader ADA jurisprudence regarding contractor and subcontractor liability.</p>
        <p>If a store hires a contractor to make the building accessible and the contractor fails, the store remains liable to customers with disabilities. Similarly, if a website owner implements inaccessible third-party tools, the website owner remains liable to users with disabilities. Responsibility for contractor failure cannot be entirely shifted to the contractor.</p>

        <h3>Due Diligence Requirements</h3>
        <p>While website owners cannot escape responsibility entirely, courts recognize a distinction between websites using inaccessible tools without knowledge and websites knowingly implementing inaccessible tools. Website owners have a duty to exercise reasonable due diligence when selecting tools and platforms.</p>
        <p>This duty includes evaluating tools for accessibility before implementation, monitoring accessibility of implemented tools, requiring vendors to maintain accessibility in contracts, and remediating accessibility issues in third-party implementations when possible.</p>

        <h3>Practical Implications</h3>
        <p>Website owners implementing third-party tools should require vendors to provide VPAT (Voluntary Product Accessibility Template) or equivalent accessibility documentation, test third-party implementations for accessibility before going live, include accessibility requirements in vendor contracts, maintain records of accessibility evaluation and vendor selection decisions, monitor third-party tools for accessibility as they're updated, and remediate or replace inaccessible tools promptly upon discovery of barriers.</p>

        <h3>Limitations of Due Diligence Defense</h3>
        <p>Importantly, due diligence doesn't eliminate website owner liability; it merely provides a mitigation factor. Even with reasonable vendor evaluation, website owners remain liable for resulting accessibility barriers. Due diligence helps establish good faith effort, potentially reducing damages in litigation, but doesn't prevent liability.</p>
    </section>

    <section id="third-party-liability">
        <h2>Third-Party Provider Liability</h2>
        
        <h3>Emerging Direct Liability</h3>
        <p>Simultaneously with establishing website owner responsibility, courts are recognizing direct liability for platform and tool providers that create accessibility barriers. Tool vendors can no longer claim they bear no responsibility because users must ensure their sites are accessible.</p>
        <p>This legal development reflects practical reality: users often lack expertise to make tools accessible. When accessibility barriers result from tool design, vendors should bear responsibility for fixing them.</p>

        <h3>Examples of Third-Party Liability</h3>
        <p><strong>Content Management Systems (CMS):</strong> CMS providers have direct responsibility for ensuring the systems they sell can create accessible content. Inaccessible WYSIWYG editors, template limitations that prevent accessible content creation, and default settings that produce inaccessible HTML can expose CMS providers to liability.</p>
        <p><strong>Website Builders:</strong> Website builder platforms (Wix, Squarespace, WordPress.com) bear responsibility for ensuring their platforms enable accessible website creation. Inaccessible templates or features can trigger liability for platform providers.</p>
        <p><strong>Analytics Tools:</strong> Analytics code that interferes with screen reader functionality or creates accessibility barriers can expose analytics providers to liability.</p>
        <p><strong>Advertising Networks:</strong> Ad networks distributing ads with accessibility barriers can face liability for barriers created by advertiser content.</p>

        <h3>Chat and Messaging Widgets</h3>
        <p>Inaccessible chat widgets represent a significant liability source. Many third-party chat platforms remain inaccessible despite user requests for accessibility improvements. Litigation will likely target both widget providers and websites implementing inaccessible widgets.</p>
    </section>

    <section id="litigation">
        <h2>2024 Third-Party Accessibility Litigation</h2>
        
        <h3>CMS Provider Disputes</h3>
        <p>Several 2024 cases alleged that content management system limitations prevented accessible content creation. In one case, a website owner's CMS couldn't accommodate alt text in certain page layouts, forcing inaccessible content publication. Both the website owner and CMS provider faced claims, though liability allocation remained disputed.</p>

        <h3>Accessibility Overlay Litigation</h3>
        <p>Multiple 2024 lawsuits targeted accessibility overlay providers directly, alleging that overlays don't genuinely remediate accessibility barriers and misrepresent accessibility compliance. Courts are increasingly skeptical of overlay claims.</p>
        <p>Several settlements required companies to discontinue overlay use and implement genuine accessibility remediation. This represents significant liability for overlay providers because widespread overlay adoption created numerous potential targets.</p>

        <h3>Analytics Tool Disputes</h3>
        <p>At least one significant case alleged that analytics code created screen reader barriers. The analytics provider's code interfered with page functionality for screen reader users. The case settled with the analytics provider modifying code to eliminate screen reader conflicts.</p>

        <h3>Payment Processor Accessibility</h3>
        <p>Several cases targeted payment processing platforms for creating accessibility barriers during checkout. Both the retailers and payment processors faced liability, creating mutual incentive for accessibility improvement.</p>
    </section>

    <section id="contracts">
        <h2>Contract and Indemnity Issues</h2>
        
        <h3>Vendor Responsibility Clauses</h3>
        <p>Many vendor contracts include indemnity clauses attempting to shift liability for vendor failures to the website owner. Courts increasingly scrutinize and potentially void such clauses when they attempt to shift accessibility liability.</p>
        <p>The ADA's public policy nature means courts may find indemnity clauses unenforceable if they would allow vendors to escape accessibility responsibility. Website owners should resist vendor attempts to entirely shift accessibility liability through contractual provisions.</p>

        <h3>Service Level Agreements</h3>
        <p>Forward-thinking vendor contracts increasingly include accessibility service level agreements requiring vendors to maintain WCAG conformance levels and respond to accessibility issues within defined timeframes. These provisions clarify vendor responsibility and create enforcement mechanisms.</p>

        <h3>Right to Audit and Remediate</h3>
        <p>Website owners should negotiate contract provisions allowing audits of vendor accessibility and rights to remediate or replace vendors if accessibility issues aren't resolved promptly.</p>
    </section>

    <section id="platforms">
        <h2>Platform-Specific Accessibility Challenges</h2>
        
        <h3>E-Commerce Platforms</h3>
        <p>E-commerce platforms (Shopify, BigCommerce, WooCommerce) bear responsibility for enabling accessible product pages, shopping carts, and checkout processes. While merchants can create inaccessible content, platforms must provide accessible functionality layers.</p>

        <h3>Learning Management Systems</h3>
        <p>LMS providers (Canvas, Blackboard, Moodle) bear responsibility for accessible course management functionality. Instructors can create inaccessible course content, but platforms must enable accessible content presentation.</p>

        <h3>Social Media Platforms</h3>
        <p>Social media platforms bear responsibility for accessible posting tools, content feeds, messaging, and notification systems. While users create content, platforms must make user-generated content presentation accessible or provide alternative access mechanisms.</p>

        <h3>Video Hosting Platforms</h3>
        <p>Video hosting platforms (YouTube, Vimeo) bear responsibility for accessible player functionality, caption support, and accessibility feature discoverability. While content creators provide video content, platforms must enable accessible consumption.</p>
    </section>

    <section id="international">
        <h2>International Third-Party Liability</h2>
        
        <h3>Global Platform Responsibility</h3>
        <p>Large platforms serving international users must comply with multiple accessibility standards across jurisdictions. A platform accessible under U.S. standards might violate European or Canadian requirements, creating global liability exposure.</p>

        <h3>Platform Consolidation Implications</h3>
        <p>Major platforms (Google, Meta, Amazon) serving global users face responsibility for accessibility across multiple legal regimes. This creates pressure for convergence toward highest-standard compliance (essentially Level AAA in most contexts).</p>
    </section>

    <section id="strategy">
        <h2>Strategic Implications for Website Owners</h2>
        
        <h3>Vendor Evaluation Process</h3>
        <p>Organizations implementing third-party tools should establish formal vendor evaluation processes: request VPAT documentation and review accessibility claims, test tools with actual screen readers and assistive technology, review vendor accessibility roadmap and track record, negotiate contract accessibility requirements, and plan for ongoing monitoring and remediation.</p>

        <h3>Accessibility in RFP Requirements</h3>
        <p>Organizations should include accessibility requirements in requests for proposals (RFPs) to vendors. Clear accessibility expectations during vendor selection process increase likelihood of compliant tools.</p>

        <h3>Avoiding Accessibility Overlays</h3>
        <p>Given emerging litigation targeting overlays, organizations should avoid overlay products. Overlays don't constitute genuine accessibility remediation and increasingly expose both vendors and implementing organizations to litigation.</p>

        <h3>Building Accessibility into Development Processes</h3>
        <p>Rather than relying on third-party tools to provide accessibility, organizations should build accessibility into their own development processes. In-house accessibility testing and development practices provide more control than dependency on vendor accessibility claims.</p>
    </section>

    <section id="future">
        <h2>The Future of Platform Accountability</h2>
        
        <h3>Anticipated Developments</h3>
        <p>2025 will likely see direct lawsuits against platform and tool vendors, not just implementing websites, platform liability for user-generated content accessibility with requirements to provide accessible alternatives, stricter contract requirements regarding vendor accessibility responsibility, third-party liability insurance emerging to cover platform accessibility risks, and industry standards development around platform accessibility testing and certification.</p>

        <h3>Vendor Response Patterns</h3>
        <p>Smart vendors will increasingly invest in accessibility because liability exposure creates business risk. Early accessibility adoption becomes a competitive advantage, attracting customers concerned about accessibility liability.</p>
    </section>

    <section id="takeaways">
        <h2>Key Takeaways</h2>
        <ul>
            <li>Website owners cannot escape accessibility responsibility by delegating to third parties, but due diligence provides mitigation factors.</li>
            <li>Third-party tool providers increasingly face direct liability for accessibility barriers they create.</li>
            <li>Vendor contracts should include accessibility requirements and indemnity clauses should resist shifting all accessibility liability to website owners.</li>
            <li>Accessibility overlays provide false compliance and expose both vendors and implementing organizations to litigation.</li>
            <li>E-commerce, LMS, social media, and video hosting platforms bear specific responsibility for enabling accessible functionality.</li>
            <li>Organizations should conduct formal accessibility evaluation before implementing third-party tools.</li>
            <li>Building in-house accessibility capability reduces dependency on vendor accessibility claims.</li>
        </ul>
    </section>

    <section id="resources">
        <h2>Resources</h2>
        <ul>
            <li><a href="https://www.vpat.acm.org/">VPAT Documentation Standard</a></li>
            <li><a href="https://www.ada.gov/">Americans with Disabilities Act</a></li>
            <li><a href="https://www.w3.org/TR/WCAG21/">WCAG 2.1 Guidelines</a></li>
            <li><a href="https://www.ssbbartgroup.com/">SSBB Digital Accessibility Law Blog</a></li>
            <li><a href="https://www.lflegal.com/">Lainey Feingold's Digital Accessibility Law</a></li>
        </ul>
    </section>

    <!-- LEGAL DISCLAIMER (mandatory) -->
    
</article>

<section style="margin-top: 3rem;">
    <div class="highlight">
        <h2 style="margin-top: 0;">Audit Your Third-Party Tools</h2>
        <p>Identify accessibility barriers created by third-party integrations. Get a comprehensive assessment of vendor liability and remediation strategies.</p>
        <button class="btn btn-primary" onclick="openPricingForm('deep-audit', 'Third-Party Platform Liability Audit')">Assess Vendor Risk</button>
    </div>
</section>
HTML;

include __DIR__ . '/../../template.php';
?>
