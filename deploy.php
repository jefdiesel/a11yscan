<?php
/**
 * GitHub Webhook Deploy Handler
 * Automatically pulls latest code when you push to GitHub
 */

$secret = '93df1d4034d680aadd8c577c9e429be21f0b95010236c67519ca87e2994d57c6';
$payload = file_get_contents('php://input');
$signature = hash_hmac('sha256', $payload, $secret);
$github_signature = $_SERVER['HTTP_X_HUB_SIGNATURE_256'] ?? '';

if (hash_equals('sha256=' . $signature, $github_signature)) {
    // Signature verified - safe to deploy
    shell_exec('cd /home/dh_62gw2k/a11yscan.xyz && git pull origin main 2>&1');
    file_put_contents('/home/dh_62gw2k/a11yscan.xyz/deploy.log', 
        "[" . date('Y-m-d H:i:s') . "] GitHub webhook deployed\n", 
        FILE_APPEND);
    http_response_code(200);
    echo "Deployed";
} else {
    // Invalid signature - reject
    http_response_code(403);
    echo "Unauthorized";
}
?>
