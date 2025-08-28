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
<body class="bg-dark">
    <?php include 'header.php'; ?>
    <?php include 'nav.php'; ?>

    <!-- Hero Section -->
    <section class="bg-dark text-center py-32">
        <div class="container-dark">
            <div class="animate-fade-in-up">
                <h1 class="text-5xl md:text-6xl font-bold mb-8 text-primary-green leading-tight">
                    Cloud Hosting<br>
                    <span class="text-gradient-dark">Made Simple</span>
                </h1>
                <p class="text-xl md:text-2xl mb-12 max-w-4xl mx-auto text-secondary leading-relaxed">
                    <?php echo_config('seo.description'); ?>
                </p>
                <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
                    <a href="#plans" class="btn-dark text-lg px-10 py-4">
                        Get Started Today
                    </a>
                    <a href="#features" class="btn-outline-dark text-lg px-10 py-4">
                        Learn More
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="section-dark bg-dark-surface">
        <div class="container-dark">
            <div class="text-center mb-20">
                <h2 class="text-4xl md:text-5xl font-bold text-primary-green mb-6">
                    Why Choose <span class="text-gradient-dark">CloudHost Pro</span>?
                </h2>
                <p class="text-xl text-secondary max-w-3xl mx-auto">
                    Experience the perfect blend of performance, security, and reliability that sets us apart from the competition.
                </p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-12">
                <div class="card-dark text-center p-8 hover-lift">
                    <div class="icon-dark">
                        <i class="fas fa-rocket text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-4 text-primary-green">Lightning Fast</h3>
                    <p class="text-secondary leading-relaxed">SSD-powered infrastructure with global CDN for optimal performance worldwide.</p>
                </div>
                
                <div class="card-dark text-center p-8 hover-lift">
                    <div class="icon-blue-dark">
                        <i class="fas fa-shield-alt text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-4 text-primary-blue">Enterprise Security</h3>
                    <p class="text-secondary leading-relaxed">DDoS protection, SSL certificates, and daily backups included with every plan.</p>
                </div>
                
                <div class="card-dark text-center p-8 hover-lift">
                    <div class="icon-dark">
                        <i class="fas fa-headset text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-4 text-primary-green">24/7 Support</h3>
                    <p class="text-secondary leading-relaxed">Expert support team available around the clock to help you succeed.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Plans -->
    <section id="plans" class="section-dark bg-dark">
        <div class="container-dark">
            <div class="text-center mb-20">
                <h2 class="text-4xl md:text-5xl font-bold text-primary-green mb-6">
                    Choose Your <span class="text-gradient-dark">Plan</span>
                </h2>
                <p class="text-xl text-secondary max-w-3xl mx-auto">
                    Select the perfect hosting solution that matches your business needs and budget.
                </p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">
                <!-- Starter Plan -->
                <div class="pricing-card-clean text-center p-8 hover-lift">
                    <div class="mb-6">
                        <h3 class="text-2xl font-bold text-primary mb-2">Starter</h3>
                        <div class="text-4xl font-bold text-primary mb-2">$9.99</div>
                        <div class="text-lg text-secondary">per month</div>
                    </div>
                    <ul class="space-y-3 mb-8 text-left">
                        <li class="flex items-center"><i class="fas fa-check text-accent-green mr-3"></i>10 GB SSD Storage</li>
                        <li class="flex items-center"><i class="fas fa-check text-accent-green mr-3"></i>Unlimited Bandwidth</li>
                        <li class="flex items-center"><i class="fas fa-check text-accent-green mr-3"></i>5 Email Accounts</li>
                        <li class="flex items-center"><i class="fas fa-check text-accent-green mr-3"></i>Free SSL Certificate</li>
                        <li class="flex items-center"><i class="fas fa-check text-accent-green mr-3"></i>24/7 Support</li>
                    </ul>
                    <button class="w-full btn-clean py-3">
                        Get Started
                    </button>
                </div>

                <!-- Professional Plan -->
                <div class="pricing-card-clean popular text-center p-8 hover-lift">
                    <div class="bg-primary text-white text-sm font-semibold px-4 py-2 rounded-full inline-block mb-4">
                        Most Popular
                    </div>
                    <div class="mb-6">
                        <h3 class="text-2xl font-bold text-primary mb-2">Professional</h3>
                        <div class="text-4xl font-bold text-primary mb-2">$19.99</div>
                        <div class="text-lg text-secondary">per month</div>
                    </div>
                    <ul class="space-y-3 mb-8 text-left">
                        <li class="flex items-center"><i class="fas fa-check text-accent-green mr-3"></i>50 GB SSD Storage</li>
                        <li class="flex items-center"><i class="fas fa-check text-accent-green mr-3"></i>Unlimited Bandwidth</li>
                        <li class="flex items-center"><i class="fas fa-check text-accent-green mr-3"></i>25 Email Accounts</li>
                        <li class="flex items-center"><i class="fas fa-check text-accent-green mr-3"></i>Free SSL Certificate</li>
                        <li class="flex items-center"><i class="fas fa-check text-accent-green mr-3"></i>Daily Backups</li>
                        <li class="flex items-center"><i class="fas fa-check text-accent-green mr-3"></i>Priority Support</li>
                    </ul>
                    <button class="w-full btn-clean py-3">
                        Get Started
                    </button>
                </div>

                <!-- Enterprise Plan -->
                <div class="pricing-card-clean text-center p-8 hover-lift">
                    <div class="mb-6">
                        <h3 class="text-2xl font-bold text-primary mb-2">Enterprise</h3>
                        <div class="text-4xl font-bold text-primary mb-2">$39.99</div>
                        <div class="text-lg text-secondary">per month</div>
                    </div>
                    <ul class="space-y-3 mb-8 text-left">
                        <li class="flex items-center"><i class="fas fa-check text-accent-green mr-3"></i>200 GB SSD Storage</li>
                        <li class="flex items-center"><i class="fas fa-check text-accent-green mr-3"></i>Unlimited Bandwidth</li>
                        <li class="flex items-center"><i class="fas fa-check text-accent-green mr-3"></i>Unlimited Email Accounts</li>
                        <li class="flex items-center"><i class="fas fa-check text-accent-green mr-3"></i>Free SSL Certificate</li>
                        <li class="flex items-center"><i class="fas fa-check text-accent-green mr-3"></i>Hourly Backups</li>
                        <li class="flex items-center"><i class="fas fa-check text-accent-green mr-3"></i>DDoS Protection</li>
                        <li class="flex items-center"><i class="flex items-center"><i class="fas fa-check text-accent-green mr-3"></i>Dedicated IP</li>
                    </ul>
                    <button class="w-full btn-clean py-3">
                        Get Started
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="section-clean bg-secondary-clean">
        <div class="container-clean">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-primary mb-6">
                    Trusted by <span class="text-gradient-clean">Thousands</span> Worldwide
                </h2>
            </div>
            
            <div class="grid md:grid-cols-4 gap-12 text-center">
                <div class="animate-fade-in-up" style="animation-delay: 0.1s;">
                    <div class="icon-clean mx-auto mb-6">
                        <i class="fas fa-chart-line text-2xl"></i>
                    </div>
                    <div class="text-4xl font-bold mb-3 text-primary"><?php echo_config('features.uptime'); ?></div>
                    <div class="text-lg text-secondary font-medium">Uptime Guarantee</div>
                </div>
                
                <div class="animate-fade-in-up" style="animation-delay: 0.2s;">
                    <div class="icon-clean mx-auto mb-6">
                        <i class="fas fa-users text-2xl"></i>
                    </div>
                    <div class="text-4xl font-bold mb-3 text-primary"><?php echo_config('features.customers'); ?></div>
                    <div class="text-lg text-secondary font-medium">Happy Customers</div>
                </div>
                
                <div class="animate-fade-in-up" style="animation-delay: 0.3s;">
                    <div class="icon-clean mx-auto mb-6">
                        <i class="fas fa-clock text-2xl"></i>
                    </div>
                    <div class="text-4xl font-bold mb-3 text-primary"><?php echo_config('features.support'); ?></div>
                    <div class="text-lg text-secondary font-medium">Support Available</div>
                </div>
                
                <div class="animate-fade-in-up" style="animation-delay: 0.4s;">
                    <div class="icon-clean mx-auto mb-6">
                        <i class="fas fa-trophy text-2xl"></i>
                    </div>
                    <div class="text-4xl font-bold mb-3 text-primary"><?php echo_config('features.experience'); ?></div>
                    <div class="text-lg text-secondary font-medium">Years Experience</div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="section-clean bg-clean">
        <div class="container-clean text-center">
            <div class="animate-fade-in-up">
                <h2 class="text-4xl md:text-5xl font-bold text-primary mb-8">
                    Ready to <span class="text-gradient-clean">Transform</span> Your Business?
                </h2>
                <p class="text-xl md:text-2xl text-secondary mb-12 max-w-4xl mx-auto leading-relaxed">
                    Join thousands of satisfied customers who trust CloudHost Pro for their hosting needs. 
                    Experience the difference that premium hosting makes.
                </p>
                <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
                    <a href="#plans" class="btn-clean text-xl px-12 py-5">
                        Start Your Journey Today
                    </a>
                    <a href="#contact" class="btn-outline-clean text-xl px-12 py-5">
                        Talk to an Expert
                    </a>
                </div>
            </div>
        </div>
    </section>

</body>
</html>
