<?php
/**
 * Hidden URL - Secure File Access System
 * 
 * @author Mustafa Bayram
 * @version 2.0
 * @license MIT
 */

// Disable error reporting (for production)
error_reporting(0);
ini_set('display_errors', 0);

// Security headers
header('X-Content-Type-Options: nosniff');
header('X-Frame-Options: DENY');
header('X-XSS-Protection: 1; mode=block');

// Referer control (enable for production)
$allowed_domains = ['localhost:8000', 'yourdomain.com', 'www.yourdomain.com'];
$referer = $_SERVER['HTTP_REFERER'] ?? '';
$is_allowed = false;

foreach ($allowed_domains as $domain) {
    if (strpos($referer, $domain) !== false) {
        $is_allowed = true;
        break;
    }
}

// Disable referer control for test environment
// if (!$is_allowed) {
//     http_response_code(403);
//     die('Access denied');
// }

// File hashes and file types
$file_config = array(
    '05edd57091ad570303df856c652a7a174554a148' => array(
        'file' => 'sample.pdf',
        'type' => 'application/pdf',
        'size' => 433994
    ),
    // New files can be added here
);

// Get and validate hash parameter
$filehash = $_GET['h'] ?? '';

if (empty($filehash) || !isset($file_config[$filehash])) {
    http_response_code(404);
    die('File not found');
}

$config = $file_config[$filehash];
$filename = "documents/" . $config['file'];

// Check file existence
if (!file_exists($filename)) {
    http_response_code(404);
    die('File not found');
}

// Check file size
$actual_size = filesize($filename);
if ($actual_size !== $config['size']) {
    http_response_code(500);
    die('File corrupted');
}

// Set MIME type
header("Content-Type: " . $config['type']);
header("Content-Length: " . $actual_size);
header("Cache-Control: private, max-age=3600");
header("Content-Disposition: inline; filename=\"" . basename($config['file']) . "\"");

// Read and send file securely
$handle = fopen($filename, 'rb');
if ($handle === false) {
    http_response_code(500);
    die('Cannot read file');
}

// Read file in chunks (memory efficient)
while (!feof($handle)) {
    echo fread($handle, 8192); // 8KB chunks
    flush();
}

fclose($handle);
?>
