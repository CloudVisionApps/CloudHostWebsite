<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'config.php'; ?>
    <title><?php echo_config('seo.title'); ?></title>
    <meta name="description" content="<?php echo_config('seo.description'); ?>">
    <meta name="keywords" content="<?php echo_config('seo.keywords'); ?>">
    <meta name="author" content="<?php echo_config('seo.author'); ?>">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-gray-50">
    <?php include 'header.php'; ?>
    <?php include 'nav.php'; ?>

    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-blue-600 to-purple-700 text-white py-20">
        <div class="container mx-auto px-6 text-center">
            <h1 class="text-5xl font-bold mb-6">Cloud Hosting Made Simple</h1>
            <p class="text-xl mb-8 max-w-3xl mx-auto"><?php echo_config('seo.description'); ?></p>
            <div class="space-x-4">
                <a href="#plans" class="bg-white text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition duration-300">Get Started</a>
                <a href="#features" class="border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-blue-600 transition duration-300">Learn More</a>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold text-center text-gray-800 mb-16">Why Choose CloudHost Pro?</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="text-center p-6">
                    <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-rocket text-2xl text-blue-600"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Lightning Fast</h3>
                    <p class="text-gray-600">SSD-powered infrastructure with global CDN for optimal performance worldwide.</p>
                </div>
                <div class="text-center p-6">
                    <div class="bg-green-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-shield-alt text-2xl text-green-600"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Enterprise Security</h3>
                    <p class="text-gray-600">DDoS protection, SSL certificates, and daily backups included with every plan.</p>
                </div>
                <div class="text-center p-6">
                    <div class="bg-purple-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-headset text-2xl text-purple-600"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">24/7 Support</h3>
                    <p class="text-gray-600">Expert support team available around the clock to help you succeed.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Plans -->
    <section id="plans" class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold text-center text-gray-800 mb-16">Choose Your Plan</h2>
            <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">
                <!-- Starter Plan -->
                <div class="bg-white rounded-lg shadow-lg p-8 border-t-4 border-blue-500">
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Starter</h3>
                    <div class="text-4xl font-bold text-blue-600 mb-6">$9.99<span class="text-lg text-gray-500">/month</span></div>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-center"><i class="fas fa-check text-green-500 mr-3"></i>10 GB SSD Storage</li>
                        <li class="flex items-center"><i class="fas fa-check text-green-500 mr-3"></i>Unlimited Bandwidth</li>
                        <li class="flex items-center"><i class="fas fa-check text-green-500 mr-3"></i>5 Email Accounts</li>
                        <li class="flex items-center"><i class="fas fa-check text-green-500 mr-3"></i>Free SSL Certificate</li>
                        <li class="flex items-center"><i class="fas fa-check text-green-500 mr-3"></i>24/7 Support</li>
                    </ul>
                    <button class="w-full bg-blue-600 text-white py-3 rounded-lg font-semibold hover:bg-blue-700 transition duration-300">Get Started</button>
                </div>

                <!-- Professional Plan -->
                <div class="bg-white rounded-lg shadow-lg p-8 border-t-4 border-purple-500 transform scale-105">
                    <div class="bg-purple-500 text-white text-sm font-semibold px-3 py-1 rounded-full inline-block mb-4">Most Popular</div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Professional</h3>
                    <div class="text-4xl font-bold text-purple-600 mb-6">$19.99<span class="text-lg text-gray-500">/month</span></div>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-center"><i class="fas fa-check text-green-500 mr-3"></i>50 GB SSD Storage</li>
                        <li class="flex items-center"><i class="fas fa-check text-green-500 mr-3"></i>Unlimited Bandwidth</li>
                        <li class="flex items-center"><i class="fas fa-check text-green-500 mr-3"></i>25 Email Accounts</li>
                        <li class="flex items-center"><i class="fas fa-check text-green-500 mr-3"></i>Free SSL Certificate</li>
                        <li class="flex items-center"><i class="fas fa-check text-green-500 mr-3"></i>Daily Backups</li>
                        <li class="flex items-center"><i class="fas fa-check text-green-500 mr-3"></i>Priority Support</li>
                    </ul>
                    <button class="w-full bg-purple-600 text-white py-3 rounded-lg font-semibold hover:bg-purple-700 transition duration-300">Get Started</button>
                </div>

                <!-- Enterprise Plan -->
                <div class="bg-white rounded-lg shadow-lg p-8 border-t-4 border-green-500">
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Enterprise</h3>
                    <div class="text-4xl font-bold text-green-600 mb-6">$39.99<span class="text-lg text-gray-500">/month</span></div>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-center"><i class="fas fa-check text-green-500 mr-3"></i>200 GB SSD Storage</li>
                        <li class="flex items-center"><i class="fas fa-check text-green-500 mr-3"></i>Unlimited Bandwidth</li>
                        <li class="flex items-center"><i class="fas fa-check text-green-500 mr-3"></i>Unlimited Email Accounts</li>
                        <li class="flex items-center"><i class="fas fa-check text-green-500 mr-3"></i>Free SSL Certificate</li>
                        <li class="flex items-center"><i class="fas fa-check text-green-500 mr-3"></i>Hourly Backups</li>
                        <li class="flex items-center"><i class="fas fa-check text-green-500 mr-3"></i>DDoS Protection</li>
                        <li class="flex items-center"><i class="fas fa-check text-green-500 mr-3"></i>Dedicated IP</li>
                    </ul>
                    <button class="w-full bg-green-600 text-white py-3 rounded-lg font-semibold hover:bg-green-700 transition duration-300">Get Started</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-20 bg-blue-600 text-white">
        <div class="container mx-auto px-6">
            <div class="grid md:grid-cols-4 gap-8 text-center">
                <div>
                    <div class="text-4xl font-bold mb-2"><?php echo_config('features.uptime'); ?></div>
                    <div class="text-blue-100">Uptime Guarantee</div>
                </div>
                <div>
                    <div class="text-4xl font-bold mb-2"><?php echo_config('features.customers'); ?></div>
                    <div class="text-blue-100">Happy Customers</div>
                </div>
                <div>
                    <div class="text-4xl font-bold mb-2"><?php echo_config('features.support'); ?></div>
                    <div class="text-blue-100">Support Available</div>
                </div>
                <div>
                    <div class="text-4xl font-bold mb-2"><?php echo_config('features.experience'); ?></div>
                    <div class="text-blue-100">Years Experience</div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-4xl font-bold text-gray-800 mb-6">Ready to Get Started?</h2>
            <p class="text-xl text-gray-600 mb-8">Join thousands of satisfied customers who trust CloudHost Pro for their hosting needs.</p>
            <a href="#plans" class="bg-blue-600 text-white px-8 py-4 rounded-lg font-semibold text-lg hover:bg-blue-700 transition duration-300">Start Your Journey Today</a>
        </div>
    </section>

    <?php include 'footer.php'; ?>
</body>
</html>
