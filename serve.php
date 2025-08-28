<?php
/**
 * Simple PHP Development Server for CloudHost Pro Website
 * Run this file to start a local development server
 * 
 * Usage: php serve.php [port]
 * Default port: 8005
 */

// Get port from command line argument or use default
$port = isset($argv[1]) ? (int)$argv[1] : 8005;

// Validate port
if ($port < 1024 || $port > 65535) {
    echo "Error: Port must be between 1024 and 65535\n";
    echo "Using default port 8005\n";
    $port = 8005;
}

// Set document root to current directory
$documentRoot = __DIR__;
$serverAddress = "0.0.0.0";

echo "🚀 Starting CloudHost Pro Development Server...\n";
echo "📍 Document Root: $documentRoot\n";
echo "🌐 Server Address: http://localhost:$port\n";
echo "📱 Network Access: http://$serverAddress:$port\n";
echo "⏹️  Press Ctrl+C to stop the server\n\n";

// Start the server
$command = sprintf(
    'php -S %s:%d -t %s %s/router.php',
    $serverAddress,
    $port,
    escapeshellarg($documentRoot),
    escapeshellarg(__DIR__)
);

echo "Starting server with command:\n$command\n\n";

// Execute the server command
passthru($command);
?>
