<?php
// Test page to verify all components are working
include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Page - CloudHost Pro</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-8">
    <div class="max-w-4xl mx-auto">
        <h1 class="text-3xl font-bold text-gray-800 mb-8">Test Page - Component Verification</h1>
        
        <div class="grid md:grid-cols-2 gap-8">
            <!-- Configuration Test -->
            <div class="bg-white p-6 rounded-lg shadow">
                <h2 class="text-xl font-semibold mb-4 text-blue-600">Configuration Test</h2>
                <div class="space-y-2 text-sm">
                    <p><strong>Company Name:</strong> <?php echo_config('company.name'); ?></p>
                    <p><strong>Phone:</strong> <?php echo_config('company.phone'); ?></p>
                    <p><strong>Email:</strong> <?php echo_config('company.email'); ?></p>
                    <p><strong>Uptime:</strong> <?php echo_config('features.uptime'); ?></p>
                    <p><strong>Customers:</strong> <?php echo_config('features.customers'); ?></p>
                </div>
            </div>

            <!-- Component Include Test -->
            <div class="bg-white p-6 rounded-lg shadow">
                <h2 class="text-xl font-semibold mb-4 text-green-600">Component Include Test</h2>
                <div class="space-y-2 text-sm">
                    <p><strong>Header:</strong> <?php echo file_exists('header.php') ? '✅ Found' : '❌ Missing'; ?></p>
                    <p><strong>Navigation:</strong> <?php echo file_exists('nav.php') ? '✅ Found' : '❌ Missing'; ?></p>
                    <p><strong>Footer:</strong> <?php echo file_exists('footer.php') ? '✅ Found' : '❌ Missing'; ?></p>
                    <p><strong>Styles:</strong> <?php echo file_exists('styles.css') ? '✅ Found' : '❌ Missing'; ?></p>
                    <p><strong>Config:</strong> <?php echo file_exists('config.php') ? '✅ Found' : '❌ Missing'; ?></p>
                </div>
            </div>
        </div>

        <!-- PHP Info -->
        <div class="bg-white p-6 rounded-lg shadow mt-8">
            <h2 class="text-xl font-semibold mb-4 text-purple-600">PHP Information</h2>
            <div class="space-y-2 text-sm">
                <p><strong>PHP Version:</strong> <?php echo phpversion(); ?></p>
                <p><strong>Server Software:</strong> <?php echo $_SERVER['SERVER_SOFTWARE'] ?? 'Unknown'; ?></p>
                <p><strong>Document Root:</strong> <?php echo $_SERVER['DOCUMENT_ROOT'] ?? 'Unknown'; ?></p>
                <p><strong>Current Directory:</strong> <?php echo getcwd(); ?></p>
            </div>
        </div>

        <!-- Quick Links -->
        <div class="bg-white p-6 rounded-lg shadow mt-8">
            <h2 class="text-xl font-semibold mb-4 text-orange-600">Quick Links</h2>
            <div class="space-x-4">
                <a href="index.php" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition duration-300">View Homepage</a>
                <a href="header.php" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 transition duration-300">View Header</a>
                <a href="nav.php" class="bg-purple-600 text-white px-4 py-2 rounded hover:bg-purple-700 transition duration-300">View Navigation</a>
                <a href="footer.php" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition duration-300">View Footer</a>
            </div>
        </div>
    </div>
</body>
</html>
