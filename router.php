<?php
/**
 * Router for CloudHost Pro Development Server
 * This file handles URL routing and serves the appropriate content
 */

// Get the requested URI
$uri = $_SERVER['REQUEST_URI'];

// Remove query string if present
$uri = parse_url($uri, PHP_URL_PATH);

// Remove leading slash
$uri = ltrim($uri, '/');

// Default to index.php if no URI specified
if (empty($uri)) {
    $uri = 'index.php';
}

// Define allowed file extensions
$allowedExtensions = ['php', 'html', 'css', 'js', 'png', 'jpg', 'jpeg', 'gif', 'svg', 'ico', 'woff', 'woff2', 'ttf', 'eot'];

// Get file extension
$extension = pathinfo($uri, PATHINFO_EXTENSION);

// If no extension, assume it's a PHP file
if (empty($extension)) {
    $uri .= '.php';
    $extension = 'php';
}

// Check if file exists
$filePath = __DIR__ . '/' . $uri;

if (file_exists($filePath) && is_file($filePath)) {
    // Check if it's an allowed file type
    if (in_array(strtolower($extension), $allowedExtensions)) {
        // Set proper content type headers
        $contentTypes = [
            'css' => 'text/css',
            'js' => 'application/javascript',
            'png' => 'image/png',
            'jpg' => 'image/jpeg',
            'jpeg' => 'image/jpeg',
            'gif' => 'image/gif',
            'svg' => 'image/svg+xml',
            'ico' => 'image/x-icon',
            'woff' => 'font/woff',
            'woff2' => 'font/woff2',
            'ttf' => 'font/ttf',
            'eot' => 'application/vnd.ms-fontobject'
        ];
        
        if (isset($contentTypes[$extension])) {
            header('Content-Type: ' . $contentTypes[$extension]);
        }
        
        // Serve the file
        return false; // Let PHP handle the file
    }
}

// If file doesn't exist or is not allowed, serve index.php
if (file_exists(__DIR__ . '/index.php')) {
    include __DIR__ . '/index.php';
} else {
    // Fallback error page
    http_response_code(404);
    echo '<!DOCTYPE html>
    <html>
    <head>
        <title>404 - Page Not Found</title>
        <style>
            body { font-family: Arial, sans-serif; text-align: center; padding: 50px; }
            h1 { color: #333; }
            .error { color: #666; margin: 20px 0; }
            .back { color: #007bff; text-decoration: none; }
        </style>
    </head>
    <body>
        <h1>404 - Page Not Found</h1>
        <div class="error">The requested page could not be found.</div>
        <a href="/" class="back">← Back to Homepage</a>
    </body>
    </html>';
}
?>
