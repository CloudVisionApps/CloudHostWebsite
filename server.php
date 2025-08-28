<?php
/**
 * Enhanced PHP Development Server for CloudHost Pro Website
 * 
 * Features:
 * - Custom port selection
 * - Network access (accessible from other devices)
 * - Better error handling
 * - File watching (basic)
 * - Status information
 */

// Configuration
$defaultPort = 8000;
$defaultHost = '0.0.0.0';
$projectName = 'CloudHost Pro';

// Get command line arguments
$port = $defaultPort;
$host = $defaultHost;

if (isset($argv[1])) {
    if (is_numeric($argv[1])) {
        $port = (int)$argv[1];
    } else {
        $host = $argv[1];
    }
}

if (isset($argv[2]) && is_numeric($argv[2])) {
    $port = (int)$argv[2];
}

// Validate port
if ($port < 1024 || $port > 65535) {
    echo "❌ Error: Port must be between 1024 and 65535\n";
    echo "Using default port $defaultPort\n";
    $port = $defaultPort;
}

// Get local IP address for network access
function getLocalIP() {
    $sock = socket_create(AF_INET, SOCK_DGRAM, SOL_UDP);
    socket_connect($sock, "8.8.8.8", 80);
    socket_getsockname($sock, $name);
    socket_close($sock);
    return $name;
}

$localIP = getLocalIP();

// Display server information
echo "🚀 Starting $projectName Development Server...\n";
echo "📍 Document Root: " . __DIR__ . "\n";
echo "🌐 Local Access: http://localhost:$port\n";
echo "📱 Network Access: http://$localIP:$port\n";
echo "🔒 Server Host: $host\n";
echo "⏹️  Press Ctrl+C to stop the server\n\n";

// Check if port is available
$socket = @socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
if (!@socket_bind($socket, $host, $port)) {
    echo "❌ Error: Port $port is already in use\n";
    echo "Try using a different port: php server.php 8001\n";
    exit(1);
}
socket_close($socket);

// Create a simple status file
$statusFile = __DIR__ . '/.server-status';
file_put_contents($statusFile, json_encode([
    'started' => date('Y-m-d H:i:s'),
    'port' => $port,
    'host' => $host,
    'local_ip' => $localIP,
    'document_root' => __DIR__
]));

// Function to clean up on exit
function cleanup() {
    global $statusFile;
    if (file_exists($statusFile)) {
        unlink($statusFile);
    }
    echo "\n🛑 Server stopped\n";
}

// Register cleanup function
register_shutdown_function('cleanup');

// Handle interrupt signal
if (function_exists('pcntl_signal')) {
    pcntl_signal(SIGINT, function() {
        cleanup();
        exit(0);
    });
}

echo "✅ Server starting...\n";
echo "📊 Status file created: .server-status\n\n";

// Start the server
$command = sprintf(
    'php -S %s:%d -t %s %s/router.php',
    $host,
    $port,
    escapeshellarg(__DIR__),
    escapeshellarg(__DIR__)
);

echo "Executing: $command\n\n";

// Execute the server command
passthru($command);
?>
