<?php
/**
 * CONTACT FORM HANDLER
 * contact-handler.php
 * 
 * Processes form submissions and emails them
 * Replace YOUR_EMAIL below with your actual email address
 */

header('Content-Type: application/json');

// CONFIGURATION
$RECIPIENT_EMAIL = 'ap@a11yscan.xyz';
$SENDER_EMAIL = 'noreply@a11yscan.xyz';

// Sanitize and validate input
function sanitize($input) {
    return htmlspecialchars(stripslashes(trim($input)), ENT_QUOTES, 'UTF-8');
}

function validate_email($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

function validate_url($url) {
    return filter_var($url, FILTER_VALIDATE_URL);
}

// Get POST data
$service = sanitize($_POST['service'] ?? '');
$website_url = sanitize($_POST['website_url'] ?? '');
$company_name = sanitize($_POST['company_name'] ?? '');
$name = sanitize($_POST['name'] ?? '');
$email = sanitize($_POST['email'] ?? '');
$industry = sanitize($_POST['industry'] ?? '');
$concern = sanitize($_POST['concern'] ?? '');

// Validate required fields
$errors = [];

if (empty($service)) $errors[] = 'Service type is required';
if (empty($website_url)) {
    $errors[] = 'Website URL is required';
} elseif (!validate_url($website_url)) {
    $errors[] = 'Invalid website URL format';
}
if (empty($name)) $errors[] = 'Name is required';
if (empty($email)) {
    $errors[] = 'Email is required';
} elseif (!validate_email($email)) {
    $errors[] = 'Invalid email format';
}
if (empty($concern)) $errors[] = 'Concern selection is required';

// Return validation errors
if (!empty($errors)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'errors' => $errors]);
    exit;
}

// Build email content
$email_subject = "New Scan Request: $company_name - $service";

$email_body = <<<EOT
New WCAG Scan Request
====================

SERVICE TYPE: $service
WEBSITE URL: $website_url

SUBMITTER INFORMATION:
Name: $name
Email: $email
Company: $company_name
Industry: $industry

PRIMARY CONCERN: $concern

SUBMISSION TIME: {$_SERVER['REQUEST_TIME_FLOAT']}
IP ADDRESS: {$_SERVER['REMOTE_ADDR']}

---
This email was submitted via the WCAG Exposure contact form.
Reply directly to the submitter's email address.
EOT;

// Email headers
$headers = "From: $SENDER_EMAIL\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "X-Mailer: WCAG Exposure Contact Form\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

// Send email
$mail_sent = mail($RECIPIENT_EMAIL, $email_subject, $email_body, $headers);

if ($mail_sent) {
    // Send confirmation email to user
    $confirmation_subject = "Your WCAG Scan Request - Reference: " . uniqid();
    $confirmation_body = <<<EOT
Hi $name,

Thank you for submitting your WCAG scan request!

We received your submission for:
- Website: $website_url
- Service: $service
- Primary concern: $concern

NEXT STEPS:
We typically deliver free scan results within 24 hours.
For partial or full scans, we'll contact you within 1 business day to confirm the scope and timeline.

If you have any questions in the meantime, feel free to reply to this email or contact us at:
Email: info@wcagexposure.com

Best regards,
WCAG Exposure Team
EOT;

    $confirmation_headers = "From: $SENDER_EMAIL\r\n";
    $confirmation_headers .= "X-Mailer: WCAG Exposure Contact Form\r\n";
    $confirmation_headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
    
    mail($email, $confirmation_subject, $confirmation_body, $confirmation_headers);
    
    http_response_code(200);
    echo json_encode([
        'success' => true,
        'message' => 'Thank you! Your scan request has been submitted. Check your email for confirmation.',
        'reference' => uniqid()
    ]);
} else {
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'message' => 'Error submitting form. Please try again or contact support.'
    ]);
}

exit;
?>
