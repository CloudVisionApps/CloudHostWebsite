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
    <style>
        body {
            background-color: #121212;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-dark">
    <?php include 'header.php'; ?>

    <!-- Hero Section -->
    <section class="bg-gradient-to-br from-[#202020] to-[#06171e] text-center min-h-screen flex items-center justify-center relative overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-20 left-20 w-32 h-32 border border-white/20 rounded-full"></div>
            <div class="absolute top-40 right-32 w-24 h-24 border border-white/20 rounded-full"></div>
            <div class="absolute bottom-32 left-1/4 w-16 h-16 border border-white/20 rounded-full"></div>
        </div>
        
        <div class="container-dark relative z-10">
            <div class="animate-fade-in-up max-w-5xl mx-auto">
                <!-- Badge -->
                <div class="inline-flex items-center px-4 py-2 bg-white/10 backdrop-blur-sm border border-white/20 rounded-full text-white/80 text-sm font-medium mb-8">
                    <i class="fas fa-star text-yellow-400 mr-2"></i>
                    Доверено от над 10,000 бизнеса по света
                </div>
                
                <!-- Main Heading -->
                <h1 class="text-4xl md:text-5xl lg:text-7xl font-bold mb-6 text-white leading-tight tracking-tight">
                    Корпоративно<br>
                    <span class="bg-gradient-to-r from-[#1683ab] to-[#1e9975] bg-clip-text text-transparent">Cloud Хостинг</span>
                </h1>
                
                <!-- Subtitle -->
                <p class="text-lg md:text-xl lg:text-2xl mb-10 max-w-4xl mx-auto text-gray-300 leading-relaxed font-light">
                    <?php echo_config('seo.description'); ?>
                </p>
                
                <!-- Key Benefits -->
                <div class="flex flex-wrap justify-center gap-8 mb-12 text-sm text-gray-400">
                    <div class="flex items-center">
                        <i class="fas fa-check-circle text-[#1e9975] mr-2"></i>
                        <span>99.9% Гаранция за работа</span>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-check-circle text-[#1e9975] mr-2"></i>
                        <span>24/7 Експертна поддръжка</span>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-check-circle text-[#1e9975] mr-2"></i>
                        <span>Корпоративна сигурност</span>
                    </div>
                </div>
                
                <!-- CTA Buttons -->
                <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                    <a href="#plans" class="group bg-gradient-to-r from-[#1683ab] to-[#1e9975] hover:from-[#147a9a] hover:to-[#1a8a6a] text-white text-lg px-8 py-4 rounded-lg font-semibold shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 flex items-center">
                        Започнете днес
                        <i class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform duration-200"></i>
                    </a>
                    <a href="#features" class="group border-2 border-white/30 text-white hover:bg-white/10 hover:border-white/50 text-lg px-8 py-4 rounded-lg font-semibold transition-all duration-300 flex items-center">
                        <i class="fas fa-play mr-2"></i>
                        Гледайте демо
                    </a>
                </div>
                
                <!-- Trust Indicators -->
                <div class="mt-16 pt-8 border-t border-white/10">
                    <p class="text-sm text-gray-400 mb-4">Доверено от лидерите в индустрията</p>
                    <div class="flex justify-center items-center gap-8 opacity-60">
                        <div class="w-20 h-8 bg-white/20 rounded"></div>
                        <div class="w-20 h-8 bg-white/20 rounded"></div>
                        <div class="w-20 h-8 bg-white/20 rounded"></div>
                        <div class="w-20 h-8 bg-white/20 rounded"></div>
                    </div>
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

    <?php include 'footer.php'; ?>
</body>
</html>
