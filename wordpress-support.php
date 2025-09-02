<!DOCTYPE html>
<html lang="bg">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'config.php'; ?>
    <title><?php echo_config('seo.title'); ?> - WordPress Support</title>
    <meta name="description" content="Професионална поддръжка за WordPress уебсайт или WooCommerce магазин. Изберете най-подходящия план за вашите нужди.">
    <meta name="keywords" content="wordpress поддръжка, woocommerce поддръжка, wordpress услуги, wordpress оптимизация">
    <meta name="author" content="<?php echo_config('seo.author'); ?>">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #121212;
            font-family: 'Comfortaa', cursive;
        }
        
        /* Floating Cloud Animations */
        @keyframes float-slow {
            0%, 100% { transform: translateY(0px) translateX(0px); }
            25% { transform: translateY(-20px) translateX(10px); }
            50% { transform: translateY(-10px) translateX(-15px); }
            75% { transform: translateY(-15px) translateX(20px); }
        }
        
        @keyframes float-medium {
            0%, 100% { transform: translateY(0px) translateX(0px); }
            25% { transform: translateY(-15px) translateX(-20px); }
            50% { transform: translateY(-25px) translateX(10px); }
            75% { transform: translateY(-5px) translateX(-25px); }
        }
        
        @keyframes float-fast {
            0%, 100% { transform: translateY(0px) translateX(0px); }
            25% { transform: translateY(-30px) translateX(25px); }
            50% { transform: translateY(-20px) translateX(-30px); }
            75% { transform: translateY(-35px) translateX(15px); }
        }
        
        .animate-float-slow {
            animation: float-slow 8s ease-in-out infinite;
        }
        
        .animate-float-medium {
            animation: float-medium 6s ease-in-out infinite;
        }
        
        .animate-float-fast {
            animation: float-fast 4s ease-in-out infinite;
        }
        
        /* Gradient Animation */
        @keyframes gradient-x {
            0%, 100% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
        }
        
        .animate-gradient-x {
            background-size: 200% 200%;
            animation: gradient-x 3s ease infinite;
        }
        
        /* Enhanced Rotation Animations */
        @keyframes rotate-slow {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        
        @keyframes rotate-reverse {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(-360deg); }
        }
        
        .animate-rotate-slow {
            animation: rotate-slow 20s linear infinite;
        }
        
        .animate-rotate-reverse {
            animation: rotate-reverse 25s linear infinite;
        }
        
        /* Scale and Glow Animations */
        @keyframes scale-glow {
            0%, 100% { transform: scale(1); opacity: 0.3; }
            50% { transform: scale(1.1); opacity: 0.6; }
        }
        
        .animate-scale-glow {
            animation: scale-glow 4s ease-in-out infinite;
        }
        
        /* Floating Particles */
        @keyframes float-particle {
            0%, 100% { transform: translateY(0px) translateX(0px) scale(1); }
            25% { transform: translateY(-15px) translateX(10px) scale(1.2); }
            50% { transform: translateY(-25px) translateX(-5px) scale(0.8); }
            75% { transform: translateY(-10px) translateX(15px) scale(1.1); }
        }
        
        .animate-float-particle {
            animation: float-particle 6s ease-in-out infinite;
        }
        
        /* Interactive Hover Effects */
        .hero-bg-element {
            transition: all 0.3s ease;
        }
        
        .hero-bg-element:hover {
            transform: scale(1.1) rotate(5deg);
            filter: brightness(1.2);
        }
        
        /* Subtle Parallax Effect */
        @keyframes parallax-slow {
            0%, 100% { transform: translateY(0px) translateX(0px); }
            50% { transform: translateY(-10px) translateX(5px); }
        }
        
        .animate-parallax-slow {
            animation: parallax-slow 12s ease-in-out infinite;
        }
        
        /* Glowing Border Effect */
        @keyframes glow-border {
            0%, 100% { box-shadow: 0 0 5px rgba(22, 131, 171, 0.3); }
            50% { box-shadow: 0 0 20px rgba(30, 153, 117, 0.5); }
        }
        
        .animate-glow-border {
            animation: glow-border 4s ease-in-out infinite;
        }
        
        /* Table Styling */
        .comparison-table {
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.02) 0%, rgba(255, 255, 255, 0.01) 100%);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .table-header {
            background: linear-gradient(135deg, rgba(22, 131, 171, 0.1) 0%, rgba(30, 153, 117, 0.1) 100%);
        }
        
        .feature-row:hover {
            background: rgba(255, 255, 255, 0.02);
        }
        
        .plan-card {
            transition: all 0.3s ease;
        }
        
        .plan-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
        }
        
        .popular-badge {
            background: linear-gradient(135deg, #1e9975 0%, #1683ab 100%);
        }

        /* Pricing Toggle Styles */
        .pricing-toggle {
            color: #9ca3af;
            background: transparent;
        }

        .pricing-toggle.active {
            color: #ffffff;
            background: linear-gradient(135deg, #1683ab 0%, #1e9975 100%);
        }

        .pricing-toggle:hover:not(.active) {
            color: #ffffff;
            background: rgba(255, 255, 255, 0.05);
        }

        .pricing-toggle.active span {
            background: rgba(255, 255, 255, 0.2) !important;
            color: #ffffff !important;
        }

        /* Service Details Styling */
        .service-card {
            transition: all 0.3s ease;
        }

        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(22, 131, 171, 0.1);
        }

        .service-icon {
            background: linear-gradient(135deg, #1683ab 0%, #1e9975 100%);
            transition: all 0.3s ease;
        }

        .service-card:hover .service-icon {
            transform: scale(1.1) rotate(5deg);
            box-shadow: 0 10px 20px rgba(22, 131, 171, 0.3);
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="min-h-screen bg-gradient-to-br from-[#0a0a0a] via-[#121212] to-[#0f0f0f]">
    <?php include 'header.php'; ?>

    <!-- Hero Section -->
    <section class="relative py-16 lg:py-20 overflow-hidden mt-24">
        <!-- Background Elements -->
        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute top-20 right-20 w-32 h-32 bg-[#1683ab]/10 rounded-full blur-3xl animate-float-slow"></div>
            <div class="absolute bottom-20 left-20 w-24 h-24 bg-[#1e9975]/10 rounded-full blur-3xl animate-float-medium"></div>
        </div>
        
        <!-- Content Container --> 
        <div class="relative z-10 max-w-6xl mx-auto px-4 text-center">
            <div class="mb-8 scroll-fade-in">
                <h1 class="text-4xl lg:text-5xl font-bold text-white mb-4 scroll-scale-in">
                    <span class="bg-gradient-to-r from-[#1683ab] to-[#1e9975] bg-clip-text text-transparent">WordPress Support</span>
                </h1>
                <p class="text-lg lg:text-xl text-gray-300 max-w-3xl mx-auto scroll-slide-left">
                    Професионална поддръжка за WordPress уебсайт или WooCommerce магазин. Изберете най-подходящия план за вашите нужди.
                </p>
            </div>
        </div>
    </section>

    <!-- Pricing Plans Overview -->
    <section class="relative py-12">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-12 scroll-fade-in">
                <h2 class="text-2xl lg:text-3xl font-bold text-white mb-4 scroll-scale-in">Изберете вашия план</h2>
                <p class="text-gray-400 scroll-slide-left">Сравнете функциите и изберете най-подходящия план за вашия WordPress сайт</p>
            </div>

            <!-- Pricing Toggle -->
            <div class="flex justify-center mb-20 scroll-fade-in">
                <div class="bg-white/[0.05] rounded-2xl p-2 backdrop-blur-sm">
                    <div class="flex">
                        <button id="monthly-toggle" class="pricing-toggle active px-6 py-3 rounded-xl text-sm font-medium transition-all duration-300">
                            Месечно
                        </button>
                        <button id="yearly-toggle" class="pricing-toggle px-6 py-3 rounded-xl text-sm font-medium transition-all duration-300">
                            Годишно
                            <span class="ml-2 bg-[#1e9975] text-white text-xs px-2 py-1 rounded-full">-17%</span>
                        </button>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-16">
                <?php 
                $plans = get_config('wordpress_support', []);
                foreach ($plans as $key => $plan) {
                    $colorClasses = [
                        'blue' => 'from-[#1683ab] to-[#1e9975]',
                        'purple' => 'from-[#8b5cf6] to-[#a855f7]',
                        'green' => 'from-[#1e9975] to-[#1683ab]'
                    ];
                    $colorClass = $colorClasses[$plan['color']] ?? 'from-[#1683ab] to-[#1e9975]';
                ?>
                <div class="plan-card bg-gradient-to-br from-white/[0.02] to-transparent border border-white/10 rounded-2xl p-8 relative <?php echo isset($plan['popular']) && $plan['popular'] ? 'ring-2 ring-[#1e9975]/50' : ''; ?>">
                    <?php if (isset($plan['popular']) && $plan['popular']) { ?>
                    <div class="absolute -top-4 left-1/2 transform -translate-x-1/2">
                        <span class="popular-badge text-white text-sm font-medium px-4 py-2 rounded-full">Най-популярен</span>
                    </div>
                    <?php } ?>
                    
                    <div class="text-center mb-8">
                        <div class="w-16 h-16 rounded-xl bg-gradient-to-r <?php echo $colorClass; ?> flex items-center justify-center mx-auto mb-4">
                            <i class="fa-brands fa-wordpress text-2xl text-white"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-2"><?php echo htmlspecialchars($plan['name']); ?></h3>
                        <p class="text-gray-400 mb-6"><?php echo htmlspecialchars($plan['description']); ?></p>
                        
                        <div class="mb-6">
                            <!-- Monthly Price -->
                            <div class="monthly-price">
                                <div class="flex items-baseline justify-center gap-2">
                                    <span class="text-4xl font-bold text-white"><?php echo htmlspecialchars($plan['monthly_price']); ?></span>
                                    <span class="text-gray-400"><?php echo htmlspecialchars($plan['currency'] . $plan['monthly_period']); ?></span>
                                </div>
                            </div>
                            
                            <!-- Yearly Price -->
                            <div class="yearly-price hidden">
                                <div class="flex items-baseline justify-center gap-2">
                                    <span class="text-4xl font-bold text-white"><?php echo htmlspecialchars($plan['yearly_monthly_price']); ?></span>
                                    <span class="text-gray-400"><?php echo htmlspecialchars($plan['currency'] . $plan['yearly_period']); ?></span>
                                </div>
                                <div class="text-sm text-gray-500 mt-2">
                                    <span class="line-through"><?php echo htmlspecialchars($plan['monthly_price'] . $plan['currency']); ?></span>
                                    <span class="text-[#1e9975] ml-2"><?php echo htmlspecialchars($plan['yearly_discount']); ?> отстъпка</span>
                                </div>
                            </div>
                        </div>
                        
                        <button class="w-full px-6 py-3 bg-gradient-to-r <?php echo $colorClass; ?> text-white font-medium rounded-xl hover:opacity-90 transition-opacity">
                            Избери план
                        </button>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <!-- Detailed Comparison Table -->
    <section class="relative py-12">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-12 scroll-fade-in">
                <h2 class="text-2xl lg:text-3xl font-bold text-white mb-4 scroll-scale-in">Детайлно сравнение</h2>
                <p class="text-gray-400 scroll-slide-left">Вижте всички функции и услуги включени в всеки план</p>
            </div>

            <div class="comparison-table rounded-2xl overflow-hidden scroll-fade-in">
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead class="table-header">
                            <tr>
                                <th class="px-6 py-4 text-left text-sm font-semibold text-white">Услуги</th>
                                <?php foreach ($plans as $key => $plan) { ?>
                                <th class="px-6 py-4 text-center text-sm font-semibold text-white">
                                    <?php echo htmlspecialchars($plan['name']); ?>
                                    <?php if (isset($plan['popular']) && $plan['popular']) { ?>
                                    <div class="text-xs text-[#1e9975] mt-1">Най-популярен</div>
                                    <?php } ?>
                                </th>
                                <?php } ?>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Support Hours -->
                            <tr class="feature-row border-b border-white/10">
                                <td class="px-6 py-4 text-sm text-gray-300 font-medium">Работно време</td>
                                <?php foreach ($plans as $key => $plan) { ?>
                                <td class="px-6 py-4 text-center text-sm text-gray-300"><?php echo htmlspecialchars($plan['support_hours']); ?></td>
                                <?php } ?>
                            </tr>
                            
                            <!-- Response Time -->
                            <tr class="feature-row border-b border-white/10">
                                <td class="px-6 py-4 text-sm text-gray-300 font-medium">Време за отговор</td>
                                <?php foreach ($plans as $key => $plan) { ?>
                                <td class="px-6 py-4 text-center text-sm text-gray-300"><?php echo htmlspecialchars($plan['response_time']); ?></td>
                                <?php } ?>
                            </tr>
                            
                            <!-- Sites Included -->
                            <tr class="feature-row border-b border-white/10">
                                <td class="px-6 py-4 text-sm text-gray-300 font-medium">Включени сайтове</td>
                                <?php foreach ($plans as $key => $plan) { ?>
                                <td class="px-6 py-4 text-center text-sm text-gray-300"><?php echo htmlspecialchars($plan['sites_included']); ?></td>
                                <?php } ?>
                            </tr>
                            
                            <!-- Backup Frequency -->
                            <tr class="feature-row border-b border-white/10">
                                <td class="px-6 py-4 text-sm text-gray-300 font-medium">Честота на резервни копия</td>
                                <?php foreach ($plans as $key => $plan) { ?>
                                <td class="px-6 py-4 text-center text-sm text-gray-300"><?php echo htmlspecialchars($plan['backup_frequency']); ?></td>
                                <?php } ?>
                            </tr>
                            
                            <!-- Security Monitoring -->
                            <tr class="feature-row border-b border-white/10">
                                <td class="px-6 py-4 text-sm text-gray-300 font-medium">Мониторинг на сигурността</td>
                                <?php foreach ($plans as $key => $plan) { ?>
                                <td class="px-6 py-4 text-center text-sm text-gray-300"><?php echo htmlspecialchars($plan['security_monitoring']); ?></td>
                                <?php } ?>
                            </tr>
                            
                            <!-- Performance Optimization -->
                            <tr class="feature-row border-b border-white/10">
                                <td class="px-6 py-4 text-sm text-gray-300 font-medium">Оптимизация на производителността</td>
                                <?php foreach ($plans as $key => $plan) { ?>
                                <td class="px-6 py-4 text-center text-sm text-gray-300"><?php echo htmlspecialchars($plan['performance_optimization']); ?></td>
                                <?php } ?>
                            </tr>
                            
                            <!-- Priority -->
                            <tr class="feature-row border-b border-white/10">
                                <td class="px-6 py-4 text-sm text-gray-300 font-medium">Приоритет</td>
                                <?php foreach ($plans as $key => $plan) { ?>
                                <td class="px-6 py-4 text-center text-sm text-gray-300"><?php echo htmlspecialchars($plan['priority']); ?></td>
                                <?php } ?>
                            </tr>
                            
                            <!-- Features -->
                            <?php 
                            $allFeatures = [];
                            foreach ($plans as $plan) {
                                foreach ($plan['features'] as $feature) {
                                    if (!in_array($feature, $allFeatures)) {
                                        $allFeatures[] = $feature;
                                    }
                                }
                            }
                            
                            foreach ($allFeatures as $feature) { ?>
                            <tr class="feature-row border-b border-white/10">
                                <td class="px-6 py-4 text-sm text-gray-300 font-medium"><?php echo htmlspecialchars($feature); ?></td>
                                <?php foreach ($plans as $key => $plan) { ?>
                                <td class="px-6 py-4 text-center">
                                    <?php if (in_array($feature, $plan['features'])) { ?>
                                    <i class="fa-solid fa-check text-[#1e9975] text-lg"></i>
                                    <?php } else { ?>
                                    <i class="fa-solid fa-times text-gray-600 text-lg"></i>
                                    <?php } ?>
                                </td>
                                <?php } ?>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Details Section -->
    <section class="relative py-16">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-12 scroll-fade-in">
                <h2 class="text-2xl lg:text-3xl font-bold text-white mb-4 scroll-scale-in">Описание на услугите</h2>
                <p class="text-gray-400 scroll-slide-left">Детайлно описание на всички WordPress поддържащи услуги, които предлагаме</p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 scroll-fade-in">
                <?php 
                $serviceDetails = get_config('wordpress_service_details', []);
                $serviceCount = 0;
                
                foreach ($serviceDetails as $key => $service) { 
                    $serviceCount++;
                    $animationClass = $serviceCount % 2 == 1 ? 'scroll-slide-left' : 'scroll-slide-right';
                    $iconClass = $service['icon'] ?? 'fa-cog';
                ?>
                <div class="service-card bg-gradient-to-br from-white/[0.02] to-transparent border border-white/10 rounded-2xl p-8 hover:border-[#1683ab]/30 transition-all duration-300 <?php echo $animationClass; ?>">
                    <div class="flex items-start gap-4">
                        <div class="service-icon w-12 h-12 rounded-xl flex items-center justify-center flex-shrink-0">
                            <i class="fa-solid <?php echo $iconClass; ?> text-white text-lg"></i>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-xl font-bold text-white mb-3"><?php echo htmlspecialchars($service['title']); ?></h3>
                            <p class="text-gray-300 leading-relaxed"><?php echo htmlspecialchars($service['description']); ?></p>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="relative py-16">
        <div class="max-w-6xl mx-auto px-4 text-center">
            <div class="bg-gradient-to-r from-[#1683ab]/15 via-transparent to-[#1e9975]/15 border border-white/10 rounded-2xl p-8 md:p-12 scroll-glow-in">
                <h2 class="text-2xl md:text-3xl font-bold text-white mb-4 scroll-scale-in">Готови да започнете?</h2>
                <p class="text-gray-300 mb-8 max-w-2xl mx-auto scroll-slide-left">
                    Изберете вашия WordPress Support план и получите професионална поддръжка за вашия сайт днес.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center scroll-bounce-in">
                    <a href="#pricing" class="px-8 py-3 bg-gradient-to-r from-[#1683ab] to-[#1e9975] text-white font-medium rounded-xl hover:opacity-90 transition-opacity">
                        Избери план
                    </a>
                    <a href="contact-us.php" class="px-8 py-3 border border-white/20 text-white font-medium rounded-xl hover:border-[#1683ab]/50 transition-colors">
                        Свържи се с нас
                    </a>
                </div>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>

    <script>
        // Pricing Toggle Functionality
        document.addEventListener('DOMContentLoaded', function() {
            const monthlyToggle = document.getElementById('monthly-toggle');
            const yearlyToggle = document.getElementById('yearly-toggle');
            const monthlyPrices = document.querySelectorAll('.monthly-price');
            const yearlyPrices = document.querySelectorAll('.yearly-price');

            function showMonthly() {
                monthlyToggle.classList.add('active');
                yearlyToggle.classList.remove('active');
                monthlyPrices.forEach(price => price.classList.remove('hidden'));
                yearlyPrices.forEach(price => price.classList.add('hidden'));
            }

            function showYearly() {
                yearlyToggle.classList.add('active');
                monthlyToggle.classList.remove('active');
                monthlyPrices.forEach(price => price.classList.add('hidden'));
                yearlyPrices.forEach(price => price.classList.remove('hidden'));
            }

            monthlyToggle.addEventListener('click', showMonthly);
            yearlyToggle.addEventListener('click', showYearly);

            // Initialize with monthly pricing
            showMonthly();
        });
    </script>

</body>
</html>
