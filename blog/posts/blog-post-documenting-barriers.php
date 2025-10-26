<?php
$pageTitle = 'How to Document Website Accessibility Barriers | A11yscan Blog';
$pageDescription = 'Learn how to properly document accessibility barriers when using assistive technology. Step-by-step guide for users experiencing inaccessible websites.';
$currentPage = 'blog';

$pageContent = <<<'HTML'
<article class="blog-post">
    <section id="intro">
        <time datetime="2025-10-25" style="font-size: 0.9rem; color: var(--text-secondary); font-weight: 500; display: block; margin-bottom: 0.5rem;">October 25, 2025</time>
        <h1 style="font-size: 2.5rem; font-weight: 700; line-height: 1.2; margin-bottom: 2rem;">How to Document Website Accessibility Barriers</h1>
        
        <h2>Why Documentation Matters</h2>
        <p>If you use assistive technology and encounter barriers on a website, proper documentation is essential. Whether you're seeking accommodations, filing a complaint, or pursuing legal action, detailed records of your experience provide concrete evidence of accessibility failures.</p>
        
        <p>This guide walks through the documentation process step-by-step, helping you create a clear record of barriers you've encountered and how they prevented you from accessing website content or services.</p>
    </section>

    <!-- LEGAL DISCLAIMER -->
    <section style="margin-top: 2rem; padding-top: 1.5rem; border-top: 2px solid var(--border);">
        <div style="background: var(--bg-tertiary); padding: 1.5rem; border-radius: 4px; border-left: 4px solid var(--accent-primary);">
            <h2 style="margin-top: 0; font-size: 1.1rem;">Legal Disclaimer</h2>
            <p style="font-size: 0.95rem; margin-bottom: 0;"><strong>A11yscan is not a law firm and does not provide legal advice.</strong> We operate under best practices based on WCAG Guidelines, ADA requirements, and applicable jurisdictions. Courts don't always agree on terms and expectations for web accessibility, and legal standards can vary by jurisdiction. However, an accessible website works better for all users regardless of legal requirements. For specific legal guidance, consult with a qualified attorney specializing in accessibility law.</p>
        </div>
    </section>

    <section id="before-you-start">
        <h2>Before You Start: Gather Your Information</h2>
        
        <p>Effective documentation begins with preparation. Before you attempt to use the website, have these tools ready:</p>
        
        <h3>Essential Documentation Tools</h3>
        <ul>
            <li><strong>Screen capture software:</strong> Built-in tools (Windows Snipping Tool, Mac Screenshot) or third-party options like Greenshot or ShareX</li>
            <li><strong>Screen recording software:</strong> OBS Studio, QuickTime (Mac), or built-in Windows Game Bar for video documentation</li>
            <li><strong>Note-taking application:</strong> Text editor, Word document, or note-taking app to record observations in real-time</li>
            <li><strong>Time tracking:</strong> Clock or timer to note when each attempt occurred</li>
        </ul>
        
        <h3>Information to Record</h3>
        <p>Create a document template with the following headers:</p>
        <ul>
            <li>Date and time of access attempt</li>
            <li>Complete URL of the page</li>
            <li>Browser name and version</li>
            <li>Operating system and version</li>
            <li>Assistive technology name and version</li>
            <li>Your specific disability or access need</li>
            <li>What you were trying to accomplish</li>
        </ul>
    </section>

    <section id="step-by-step-process">
        <h2>Step-by-Step Documentation Process</h2>
        
        <h3>Step 1: Record Your Setup</h3>
        <p>Begin your documentation by noting your complete technical setup. This establishes the environment in which barriers occurred.</p>
        
        <p><strong>Example documentation:</strong></p>
        <div class="highlight" style="margin: 1rem 0;">
            <p style="margin: 0; font-family: monospace; font-size: 0.9rem;">
                Date: October 25, 2025<br>
                Time: 2:15 PM EST<br>
                URL: https://example-store.com/checkout<br>
                Browser: Chrome 118.0.5993.89<br>
                OS: Windows 11 Pro<br>
                Screen Reader: JAWS 2024<br>
                User: Screen reader user (blind)
            </p>
        </div>
        
        <h3>Step 2: State Your Goal</h3>
        <p>Clearly describe what you intended to do on the website. Be specific about the task or transaction you needed to complete.</p>
        
        <p><strong>Examples:</strong></p>
        <ul>
            <li>"I attempted to purchase a product and complete the checkout process"</li>
            <li>"I tried to fill out the contact form to request customer support"</li>
            <li>"I needed to access my account settings to update my payment method"</li>
            <li>"I wanted to read the product description and reviews before making a purchase decision"</li>
        </ul>
        
        <h3>Step 3: Document Each Barrier with Screenshots</h3>
        <p>For each barrier you encounter, follow this documentation pattern:</p>
        
        <ol style="list-style: decimal; padding-left: 1.5rem;">
            <li><strong>Take a screenshot</strong> of the problematic element or page</li>
            <li><strong>Note the exact time</strong> you encountered the issue</li>
            <li><strong>Describe what you tried</strong> using your assistive technology</li>
            <li><strong>Record what happened</strong> (or didn't happen) as a result</li>
            <li><strong>Explain the impact</strong> on your ability to complete your task</li>
        </ol>
        
        <p><strong>Example barrier documentation:</strong></p>
        <div class="highlight" style="margin: 1rem 0;">
            <p style="margin: 0; font-size: 0.95rem;">
                <strong>Barrier 1: Unlabeled Form Field</strong><br>
                Time: 2:18 PM<br>
                Screenshot: checkout-form-001.png<br><br>
                
                <strong>Action Taken:</strong> I navigated to the checkout form using JAWS and Tab key. When I reached the first form field, JAWS announced "Edit, blank" with no label or description.<br><br>
                
                <strong>Result:</strong> I could not determine what information the form field required. I attempted to navigate to surrounding text using arrow keys, but found no associated label. I also checked using JAWS virtual cursor mode, but no descriptive text was associated with the field.<br><br>
                
                <strong>Impact:</strong> Without knowing what information to enter, I could not complete the form field or proceed with checkout. I was completely blocked from making a purchase.
            </p>
        </div>
        
        <h3>Step 4: Try Multiple Methods</h3>
        <p>Document your attempts using different navigation methods available in your assistive technology. This demonstrates you made reasonable efforts to access the content.</p>
        
        <p><strong>For screen reader users, try:</strong></p>
        <ul>
            <li>Tab key navigation through interactive elements</li>
            <li>Arrow key navigation through all content</li>
            <li>Heading navigation (H key or heading list)</li>
            <li>Form field navigation (F key or forms list)</li>
            <li>Link navigation (links list or K key)</li>
            <li>Landmark navigation (R key or landmarks list)</li>
        </ul>
        
        <p><strong>Example multi-method documentation:</strong></p>
        <div class="highlight" style="margin: 1rem 0;">
            <p style="margin: 0; font-size: 0.95rem;">
                <strong>Method 1 - Tab Navigation:</strong> Pressed Tab key repeatedly. Focus moved from "Shopping Cart" link directly to "Submit Order" button, skipping over all form fields. No way to access fields with Tab key.<br><br>
                
                <strong>Method 2 - Forms Mode:</strong> Pressed F key to navigate to next form field. JAWS announced "No forms found" despite visible form on screen.<br><br>
                
                <strong>Method 3 - Virtual Cursor:</strong> Used arrow keys to navigate through page content. Found form field text but pressing Enter did not activate or focus the field. No way to input data.<br><br>
                
                <strong>Method 4 - Touch Cursor:</strong> Used JAWS touch cursor to click on form field location. Mouse click appeared to register but field did not accept focus or keyboard input.
            </p>
        </div>
        
        <h3>Step 5: Document Alternative Attempts</h3>
        <p>If available, try accessing the same functionality through different paths or pages. This shows whether the barrier is isolated or systematic.</p>
        
        <ul>
            <li>Try different browsers (Chrome, Firefox, Edge, Safari)</li>
            <li>Test on different devices (desktop, mobile, tablet)</li>
            <li>Look for alternative pages offering the same function</li>
            <li>Check if a phone number or email alternative exists</li>
        </ul>
        
        <p>Document each alternative attempt with the same detail as your original attempt.</p>
        
        <h3>Step 6: Create a Narrative Summary</h3>
        <p>After documenting each individual barrier, write a narrative summary that tells the complete story of your experience. This should read as a chronological account.</p>
        
        <p><strong>Narrative template:</strong></p>
        <div class="highlight" style="margin: 1rem 0;">
            <p style="margin: 0; font-size: 0.95rem;">
                "On [date] at [time], I visited [URL] using [browser] and [assistive technology]. As a [description of disability], I rely on [assistive technology] to access websites.<br><br>
                
                My goal was to [state objective]. I first attempted to [describe action]. [Assistive technology] responded by [describe response]. This prevented me from [describe impact].<br><br>
                
                I then tried [second method]. However, [describe result and impact].<br><br>
                
                Next, I attempted [third method], but [describe result and impact].<br><br>
                
                After [number] failed attempts using multiple navigation methods, I was unable to [complete task]. This prevented me from [describe ultimate impact - purchase, access service, obtain information, etc.].<br><br>
                
                I also attempted to access the same functionality using [alternative browser/device] on [date/time], with the same results. The barriers persisted across multiple attempts and configurations."
            </p>
        </div>
    </section>

    <section id="what-to-document">
        <h2>Specific Barriers to Document</h2>
        
        <p>Different types of barriers require different documentation approaches. Here are common accessibility barriers and what to record for each:</p>
        
        <h3>Missing or Inadequate Alt Text</h3>
        <ul>
            <li>Screenshot showing the image on the page</li>
            <li>What your screen reader announced (e.g., "graphic" or filename)</li>
            <li>Why the image information was necessary to understand the content</li>
            <li>How the missing information prevented task completion</li>
        </ul>
        
        <h3>Keyboard Navigation Failures</h3>
        <ul>
            <li>List each element you could not reach via Tab key</li>
            <li>Note any keyboard traps (places focus got stuck)</li>
            <li>Document invisible focus indicators</li>
            <li>Record any functionality only available via mouse</li>
            <li>Test Enter and Space keys on buttons and links</li>
        </ul>
        
        <h3>Form Field Issues</h3>
        <ul>
            <li>Screenshot of the form</li>
            <li>What your assistive technology announced for each field</li>
            <li>Whether labels were present and associated</li>
            <li>How error messages were communicated (or not)</li>
            <li>Required fields that weren't marked</li>
        </ul>
        
        <h3>Color Contrast Problems</h3>
        <ul>
            <li>Screenshot of low-contrast text</li>
            <li>Description of your visual limitation</li>
            <li>What content you could not read</li>
            <li>Use contrast checker tool and record the ratio</li>
            <li>Impact on your ability to complete task</li>
        </ul>
        
        <h3>Video and Audio Content</h3>
        <ul>
            <li>Note if captions were available (and if accurate)</li>
            <li>Check for audio descriptions</li>
            <li>Test if player controls were keyboard accessible</li>
            <li>Document if transcript was provided</li>
            <li>Record what information you missed</li>
        </ul>
        
        <h3>Dynamic Content and Popups</h3>
        <ul>
            <li>Document if new content was announced to screen reader</li>
            <li>Note if modal dialogs trapped keyboard focus</li>
            <li>Check if you could close popups with keyboard</li>
            <li>Record if dynamic updates caused you to lose place</li>
        </ul>
    </section>

    <section id="organizing-evidence">
        <h2>Organizing Your Documentation</h2>
        
        <h3>File Naming Convention</h3>
        <p>Use a consistent naming system for all screenshots and recordings:</p>
        
        <ul>
            <li><code>YYYY-MM-DD_websitename_issue-description_001.png</code></li>
            <li>Example: <code>2025-10-25_examplestore_unlabeled-form_001.png</code></li>
            <li>Number sequentially if documenting multiple related barriers</li>
        </ul>
        
        <h3>Folder Structure</h3>
        <p>Organize your documentation in folders:</p>
        
        <div class="highlight" style="margin: 1rem 0; font-family: monospace; font-size: 0.9rem;">
            Website-Name-Accessibility-Documentation/<br>
            ├── Screenshots/<br>
            ├── Screen-Recordings/<br>
            ├── Narrative-Summary.docx<br>
            ├── Technical-Details.txt<br>
            └── Correspondence/<br>
            &nbsp;&nbsp;&nbsp;&nbsp;└── [any emails to the company]
        </div>
        
        <h3>Master Documentation File</h3>
        <p>Create a comprehensive document that includes:</p>
        
        <ol style="list-style: decimal; padding-left: 1.5rem;">
            <li>Your contact information and description of disability</li>
            <li>Complete technical environment details</li>
            <li>Chronological list of all access attempts with dates/times</li>
            <li>Individual barrier descriptions with references to screenshots</li>
            <li>Narrative summary of overall experience</li>
            <li>Impact statement (how barriers affected you)</li>
            <li>Any correspondence with the website owner</li>
        </ol>
    </section>

    <section id="communication-attempts">
        <h2>Documenting Communication Attempts</h2>
        
        <p>If you contact the website owner about accessibility barriers, document all communication:</p>
        
        <h3>Initial Contact</h3>
        <ul>
            <li>Date and time you sent the message</li>
            <li>Method of contact (email, phone, contact form)</li>
            <li>Copy of your message</li>
            <li>Clear description of barriers and their impact</li>
            <li>Request for accommodation or remediation</li>
        </ul>
        
        <h3>Follow-Up Documentation</h3>
        <ul>
            <li>Save all email responses (or note phone conversations)</li>
            <li>Record dates of any follow-up attempts</li>
            <li>Note any commitments made by the company</li>
            <li>Document if deadlines were missed</li>
            <li>Keep records of any refused accommodation requests</li>
        </ul>
        
        <h3>Test After Reported Issues</h3>
        <p>If the company claims to have fixed issues, test again and document:</p>
        
        <ul>
            <li>Date and time of retest</li>
            <li>Whether barriers were actually resolved</li>
            <li>Any new barriers that appeared</li>
            <li>Ongoing problems that persist</li>
        </ul>
    </section>

    <section id="best-practices">
        <h2>Documentation Best Practices</h2>
        
        <h3>Be Objective and Factual</h3>
        <ul>
            <li>Describe exactly what happened without emotional language</li>
            <li>Stick to observable facts and screen reader announcements</li>
            <li>Avoid assumptions about intent or negligence</li>
            <li>Let the facts speak for themselves</li>
        </ul>
        
        <h3>Be Thorough But Focused</h3>
        <ul>
            <li>Document every barrier you encounter</li>
            <li>Include enough detail to recreate the issue</li>
            <li>Stay focused on how barriers prevented access</li>
            <li>Connect each barrier to your inability to complete tasks</li>
        </ul>
        
        <h3>Be Consistent</h3>
        <ul>
            <li>Use the same documentation format for each barrier</li>
            <li>Maintain the same level of detail throughout</li>
            <li>Follow your file naming convention</li>
            <li>Update your master document after each attempt</li>
        </ul>
        
        <h3>Preserve Everything</h3>
        <ul>
            <li>Keep all screenshots, even if they seem redundant</li>
            <li>Save screen recordings in multiple formats</li>
            <li>Back up your documentation folder</li>
            <li>Don't delete early drafts of narratives</li>
            <li>Maintain a complete timeline</li>
        </ul>
    </section>

    <section id="impact-statement">
        <h2>Writing an Impact Statement</h2>
        
        <p>A crucial part of your documentation is explaining how accessibility barriers affected you personally. This goes beyond technical descriptions to describe real-world impact.</p>
        
        <h3>What to Include</h3>
        <ul>
            <li><strong>Lost opportunities:</strong> What you couldn't purchase, couldn't access, couldn't participate in</li>
            <li><strong>Additional burden:</strong> Extra time spent, need for sighted assistance, inability to act independently</li>
            <li><strong>Dignity concerns:</strong> Loss of privacy, need to share personal information with helpers</li>
            <li><strong>Frustration and emotional impact:</strong> How repeated barriers made you feel</li>
            <li><strong>Comparative experience:</strong> How non-disabled users can accomplish the same task easily</li>
        </ul>
        
        <p><strong>Example impact statement:</strong></p>
        <div class="highlight" style="margin: 1rem 0;">
            <p style="margin: 0; font-size: 0.95rem;">
                "As a blind screen reader user, I rely on websites to be properly coded for independence in online shopping. The unlabeled form fields on this checkout page made it impossible for me to complete my purchase independently.<br><br>
                
                I spent 45 minutes attempting different methods to access the form, but ultimately had to abandon my purchase. To obtain the product, I had to call a family member and ask them to complete the purchase on my behalf, which required sharing my payment information over the phone.<br><br>
                
                This experience was frustrating and degrading. A sighted user could complete this same checkout process in under two minutes. The inaccessible design prevented me from making an independent purchase and forced me to rely on assistance for a task I should be able to complete privately."
            </p>
        </div>
    </section>

    <section id="when-to-seek-help">
        <h2>When to Seek Professional Assistance</h2>
        
        <p>Proper documentation creates a strong foundation, but you may need additional help depending on your situation:</p>
        
        <h3>Consider Consulting an Attorney If:</h3>
        <ul>
            <li>The website owner refuses to address barriers after notification</li>
            <li>You've experienced significant harm or lost opportunities</li>
            <li>Barriers are widespread across the entire website</li>
            <li>The company is large or provides essential services</li>
            <li>You're interested in pursuing legal action</li>
        </ul>
        
        <h3>Disability Rights Organizations</h3>
        <p>Several organizations can provide guidance:</p>
        <ul>
            <li>National Federation of the Blind (NFB)</li>
            <li>American Council of the Blind (ACB)</li>
            <li>National Association of the Deaf (NAD)</li>
            <li>Disability Rights Education & Defense Fund (DREDF)</li>
            <li>State and local disability rights centers</li>
        </ul>
        
        <p>These organizations can help you understand your rights and may offer assistance with documentation or complaints.</p>
    </section>

    <section id="key-takeaways">
        <h2>Key Takeaways</h2>
        <ul>
            <li><strong>Document in real-time:</strong> Record barriers as you encounter them with dates, times, and URLs</li>
            <li><strong>Screenshot everything:</strong> Visual evidence strengthens your documentation significantly</li>
            <li><strong>Try multiple methods:</strong> Show you made reasonable efforts using various navigation approaches</li>
            <li><strong>Write narratives:</strong> Tell the complete story of your experience chronologically</li>
            <li><strong>Connect to impact:</strong> Explain how each barrier prevented you from completing your goal</li>
            <li><strong>Stay organized:</strong> Use consistent file naming and folder structures</li>
            <li><strong>Preserve communication:</strong> Keep records of all contact with the website owner</li>
            <li><strong>Be thorough but factual:</strong> Include detail without emotional language or assumptions</li>
        </ul>
    </section>

    <section id="resources">
        <h2>Resources</h2>
        <ul>
            <li><a href="https://www.ada.gov/resources/web-guidance/">ADA.gov Web Accessibility Guidance</a></li>
            <li><a href="https://www.w3.org/WAI/test-evaluate/">W3C Testing and Evaluating Web Accessibility</a></li>
            <li><a href="https://nfb.org/">National Federation of the Blind</a></li>
            <li><a href="https://www.acb.org/">American Council of the Blind</a></li>
            <li><a href="https://dredf.org/">Disability Rights Education & Defense Fund</a></li>
        </ul>
    </section>

    <!-- LEGAL DISCLAIMER (mandatory) -->
    

    <!-- CUSTOMIZED CTA -->
    <section style="margin-top: 3rem;">
        <div class="highlight">
            <h2 style="margin-top: 0;">Website Owners: Get Ahead of Barriers</h2>
            <p>Proactive accessibility auditing helps you identify and fix barriers before users encounter them. Get a comprehensive WCAG assessment of your website.</p>
            <button class="btn btn-primary" onclick="openPricingForm('deep-audit', 'Comprehensive Accessibility Audit')">Request Full Audit</button>
        </div>
    </section>
</article>
HTML;

include 'template.php';
?>
