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
            scroll-behavior: smooth;
        }
        
        /* Enhanced Floating Animations */
        @keyframes float-slow {
            0%, 100% { transform: translateY(0px) translateX(0px) rotate(0deg); }
            25% { transform: translateY(-20px) translateX(10px) rotate(1deg); }
            50% { transform: translateY(-10px) translateX(-15px) rotate(-1deg); }
            75% { transform: translateY(-15px) translateX(20px) rotate(0.5deg); }
        }
        
        @keyframes float-medium {
            0%, 100% { transform: translateY(0px) translateX(0px) rotate(0deg); }
            25% { transform: translateY(-15px) translateX(-20px) rotate(-1deg); }
            50% { transform: translateY(-25px) translateX(10px) rotate(1deg); }
            75% { transform: translateY(-5px) translateX(-25px) rotate(-0.5deg); }
        }
        
        @keyframes float-fast {
            0%, 100% { transform: translateY(0px) translateX(0px) rotate(0deg); }
            25% { transform: translateY(-30px) translateX(25px) rotate(2deg); }
            50% { transform: translateY(-20px) translateX(-30px) rotate(-2deg); }
            75% { transform: translateY(-35px) translateX(15px) rotate(1deg); }
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
        
        /* Enhanced Gradient Animation */
        @keyframes gradient-x {
            0%, 100% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
        }
        
        .animate-gradient-x {
            background-size: 200% 200%;
            animation: gradient-x 3s ease infinite;
        }
        
        /* Pulse Animation */
        @keyframes pulse-glow {
            0%, 100% { 
                transform: scale(1);
                box-shadow: 0 0 20px rgba(22, 131, 171, 0.3);
            }
            50% { 
                transform: scale(1.05);
                box-shadow: 0 0 40px rgba(30, 153, 117, 0.5);
            }
        }
        
        .animate-pulse-glow {
            animation: pulse-glow 3s ease-in-out infinite;
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
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
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
        
        /* Enhanced Glowing Border Effect */
        @keyframes glow-border {
            0%, 100% { 
                box-shadow: 0 0 5px rgba(22, 131, 171, 0.3),
                           0 0 10px rgba(22, 131, 171, 0.1);
            }
            50% { 
                box-shadow: 0 0 20px rgba(30, 153, 117, 0.5),
                           0 0 40px rgba(30, 153, 117, 0.2);
            }
        }
        
        .animate-glow-border {
            animation: glow-border 4s ease-in-out infinite;
        }
        
        /* Enhanced Table Styling */
        .comparison-table {
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.03) 0%, rgba(255, 255, 255, 0.01) 100%);
            backdrop-filter: blur(15px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
        }
        
        .table-header {
            background: linear-gradient(135deg, rgba(22, 131, 171, 0.15) 0%, rgba(30, 153, 117, 0.15) 100%);
            backdrop-filter: blur(10px);
        }
        
        .feature-row {
            transition: all 0.3s ease;
        }
        
        .feature-row:hover {
            background: rgba(255, 255, 255, 0.03);
            transform: translateX(5px);
        }
        
        /* Enhanced Plan Card Styling */
        .plan-card {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }
        
        .plan-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.1), transparent);
            transition: left 0.5s;
        }
        
        .plan-card:hover::before {
            left: 100%;
        }
        
        .plan-card:hover {
            transform: translateY(-8px) scale(1.02);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.4),
                        0 0 30px rgba(22, 131, 171, 0.2);
        }
        
        .popular-badge {
            background: linear-gradient(135deg, #1e9975 0%, #1683ab 100%);
            box-shadow: 0 4px 15px rgba(30, 153, 117, 0.4);
        }

        /* Enhanced Pricing Toggle Styles */
        .pricing-toggle {
            color: #9ca3af;
            background: transparent;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }
        
        .pricing-toggle::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.1), transparent);
            transition: left 0.3s;
        }
        
        .pricing-toggle:hover::before {
            left: 100%;
        }

        .pricing-toggle.active {
            color: #ffffff;
            background: linear-gradient(135deg, #1683ab 0%, #1e9975 100%);
            box-shadow: 0 4px 15px rgba(22, 131, 171, 0.3);
        }

        .pricing-toggle:hover:not(.active) {
            color: #ffffff;
            background: rgba(255, 255, 255, 0.08);
            transform: translateY(-1px);
        }

        .pricing-toggle.active span {
            background: rgba(255, 255, 255, 0.2) !important;
            color: #ffffff !important;
        }

        /* Enhanced Service Details Styling */
        .service-card {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }
        
        .service-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(22, 131, 171, 0.1), transparent);
            transition: left 0.6s;
        }
        
        .service-card:hover::before {
            left: 100%;
        }

        .service-card:hover {
            transform: translateY(-8px) scale(1.02);
            box-shadow: 0 25px 50px rgba(22, 131, 171, 0.15),
                        0 0 30px rgba(30, 153, 117, 0.1);
        }

        .service-icon {
            background: linear-gradient(135deg, #1683ab 0%, #1e9975 100%);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 4px 15px rgba(22, 131, 171, 0.3);
        }

        .service-card:hover .service-icon {
            transform: scale(1.15) rotate(8deg);
            box-shadow: 0 8px 25px rgba(22, 131, 171, 0.4);
        }

        /* Enhanced Plan Badge Styling */
        .plan-badge {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }
        
        .plan-badge::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.3s;
        }
        
        .plan-badge:hover::before {
            left: 100%;
        }

        .plan-badge:hover {
            transform: scale(1.08) translateY(-2px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3);
        }
        
        /* Scroll Animations */
        .scroll-fade-in {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .scroll-fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }
        
        .scroll-slide-left {
            opacity: 0;
            transform: translateX(-50px);
            transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .scroll-slide-left.visible {
            opacity: 1;
            transform: translateX(0);
        }
        
        .scroll-slide-right {
            opacity: 0;
            transform: translateX(50px);
            transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .scroll-slide-right.visible {
            opacity: 1;
            transform: translateX(0);
        }
        
        .scroll-scale-in {
            opacity: 0;
            transform: scale(0.8);
            transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .scroll-scale-in.visible {
            opacity: 1;
            transform: scale(1);
        }
        
        .scroll-bounce-in {
            opacity: 0;
            transform: translateY(50px) scale(0.9);
            transition: all 0.8s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        }
        
        .scroll-bounce-in.visible {
            opacity: 1;
            transform: translateY(0) scale(1);
        }
        
        .scroll-glow-in {
            opacity: 0;
            transform: scale(0.9);
            filter: blur(10px);
            transition: all 1s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .scroll-glow-in.visible {
            opacity: 1;
            transform: scale(1);
            filter: blur(0);
        }
        
        /* Enhanced Button Styles */
        .btn-primary {
            background: linear-gradient(135deg, #1683ab 0%, #1e9975 100%);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }
        
        .btn-primary::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s;
        }
        
        .btn-primary:hover::before {
            left: 100%;
        }
        
        .btn-primary:hover {
            transform: translateY(-2px) scale(1.05);
            box-shadow: 0 10px 25px rgba(22, 131, 171, 0.4);
        }
        
        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }
        
        ::-webkit-scrollbar-track {
            background: rgba(255, 255, 255, 0.1);
        }
        
        ::-webkit-scrollbar-thumb {
            background: linear-gradient(135deg, #1683ab, #1e9975);
            border-radius: 4px;
        }
        
        ::-webkit-scrollbar-thumb:hover {
            background: linear-gradient(135deg, #1e9975, #1683ab);
        }
        
        /* Loading Animation */
        @keyframes shimmer {
            0% { background-position: -200px 0; }
            100% { background-position: calc(200px + 100%) 0; }
        }
        
        .shimmer {
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.1), transparent);
            background-size: 200px 100%;
            animation: shimmer 2s infinite;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="min-h-screen bg-gradient-to-br from-[#0a0a0a] via-[#121212] to-[#0f0f0f]">
    <?php include 'header.php'; ?>

    <!-- Hero Section -->
    <section class="relative py-20 lg:py-28 overflow-hidden mt-24">
        <!-- Enhanced Background Elements -->
        <div class="absolute inset-0 pointer-events-none">
            <!-- Floating Orbs -->
            <div class="absolute top-20 right-20 w-40 h-40 bg-gradient-to-r from-[#1683ab]/20 to-[#1e9975]/20 rounded-full blur-3xl animate-float-slow"></div>
            <div class="absolute bottom-20 left-20 w-32 h-32 bg-gradient-to-r from-[#1e9975]/20 to-[#1683ab]/20 rounded-full blur-3xl animate-float-medium"></div>
            <div class="absolute top-1/2 left-1/4 w-24 h-24 bg-gradient-to-r from-[#1683ab]/15 to-[#1e9975]/15 rounded-full blur-2xl animate-float-fast"></div>
            <div class="absolute top-1/3 right-1/3 w-20 h-20 bg-gradient-to-r from-[#1e9975]/15 to-[#1683ab]/15 rounded-full blur-2xl animate-float-slow"></div>
            
            <!-- Geometric Shapes -->
            <div class="absolute top-32 left-16 w-16 h-16 border border-[#1683ab]/20 rotate-45 animate-rotate-slow"></div>
            <div class="absolute bottom-32 right-16 w-12 h-12 border border-[#1e9975]/20 rotate-12 animate-rotate-reverse"></div>
            
            <!-- Gradient Lines -->
            <div class="absolute top-0 left-1/4 w-px h-full bg-gradient-to-b from-transparent via-[#1683ab]/10 to-transparent"></div>
            <div class="absolute top-0 right-1/4 w-px h-full bg-gradient-to-b from-transparent via-[#1e9975]/10 to-transparent"></div>
        </div>
        
        <!-- Content Container --> 
        <div class="relative z-10 max-w-6xl mx-auto px-4 text-center">
            <div class="mb-12 scroll-fade-in">
                <!-- Badge -->
                <div class="inline-flex items-center gap-2 bg-gradient-to-r from-[#1683ab]/10 to-[#1e9975]/10 rounded-full px-6 py-3 mb-8 border border-white/10">
                    <i class="fa-brands fa-wordpress text-[#1683ab] text-lg"></i>
                    <span class="text-sm font-medium text-[#1683ab]">WordPress Support</span>
                </div>
                
                <h1 class="text-5xl lg:text-6xl font-bold text-white mb-6 scroll-scale-in">
                    <span class="bg-gradient-to-r from-[#1683ab] via-[#1e9975] to-[#1683ab] bg-clip-text text-transparent animate-gradient-x">
                        Професионална поддръжка
                    </span>
                </h1>
                
                <p class="text-xl lg:text-2xl text-gray-300 max-w-4xl mx-auto mb-8 scroll-slide-left leading-relaxed">
                    За вашия WordPress уебсайт или WooCommerce магазин. Изберете най-подходящия план за вашите нужди и получите експертна поддръжка.
                </p>
                
                <!-- Stats -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-3xl mx-auto scroll-fade-in">
                    <div class="text-center">
                        <div class="text-3xl font-bold text-[#1683ab] mb-2">24/7</div>
                        <div class="text-gray-400">Поддръжка</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-[#1e9975] mb-2">15+</div>
                        <div class="text-gray-400">Години опит</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-[#1683ab] mb-2">1000+</div>
                        <div class="text-gray-400">Доволни клиенти</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Plans Overview -->
    <section class="relative ">
        <div class="max-w-7xl mx-auto px-4">
        

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
                        
                        <button class="w-full px-6 py-3 btn-primary text-white font-medium rounded-xl">
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
                            $serviceDetails = get_config('wordpress_service_details', []);
                            $allFeatures = [];
                            foreach ($plans as $plan) {
                                foreach ($plan['features'] as $feature) {
                                    if (!in_array($feature, $allFeatures)) {
                                        $allFeatures[] = $feature;
                                    }
                                }
                            }
                            
                            foreach ($allFeatures as $feature) { 
                                $serviceTitle = isset($serviceDetails[$feature]) ? $serviceDetails[$feature]['title'] : $feature;
                            ?>
                            <tr class="feature-row border-b border-white/10">
                                <td class="px-6 py-4 text-sm text-gray-300 font-medium"><?php echo htmlspecialchars($serviceTitle); ?></td>
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
    <section class="relative py-20 bg-gradient-to-b from-transparent via-white/[0.01] to-transparent">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-16 scroll-fade-in">
                <div class="inline-flex items-center gap-2 bg-[#1683ab]/10 rounded-full px-4 py-2 mb-6">
                    <i class="fa-solid fa-cogs text-[#1683ab]"></i>
                    <span class="text-sm font-medium text-[#1683ab]">Детайлни услуги</span>
                </div>
                <h2 class="text-3xl lg:text-4xl font-bold text-white mb-6 scroll-scale-in">
                    <span class="bg-gradient-to-r from-[#1683ab] to-[#1e9975] bg-clip-text text-transparent">
                        Описание на услугите
                    </span>
                </h2>
                <p class="text-gray-400 text-lg max-w-2xl mx-auto scroll-slide-left">
                    Детайлно описание на всички WordPress поддържащи услуги, които предлагаме
                </p>
            </div>

            <!-- Services Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6 scroll-fade-in">
                <?php
                $serviceDetails = get_config('wordpress_service_details', []);
                $serviceCount = 0;

                foreach ($serviceDetails as $key => $service) {
                    $serviceCount++;
                    $iconClass = $service['icon'] ?? 'fa-cog';
                    
                    // Determine which plans include this service
                    $includedPlans = [];
                    foreach ($plans as $planKey => $plan) {
                        if (in_array($key, $plan['features'])) {
                            $includedPlans[] = $planKey;
                        }
                    }
                ?>
                <div class="group relative bg-gradient-to-br from-white/[0.03] to-white/[0.01] border border-white/10 rounded-3xl p-6 hover:border-[#1683ab]/40 hover:shadow-2xl hover:shadow-[#1683ab]/10 transition-all duration-500 hover:-translate-y-2 scroll-bounce-in">
                    <!-- Icon Container -->
                    <div class="relative mb-6">
                        <div class="w-16 h-16 bg-gradient-to-br from-[#1683ab]/20 to-[#1e9975]/20 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                            <i class="fa-solid <?php echo $iconClass; ?> text-[#1683ab] text-xl group-hover:text-[#1e9975] transition-colors duration-300"></i>
                        </div>
                        <!-- Decorative element -->
                        <div class="absolute -top-2 -right-2 w-6 h-6 bg-gradient-to-br from-[#1e9975] to-[#1683ab] rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </div>

                    <!-- Content -->
                    <div class="space-y-4">
                        <h3 class="text-xl font-bold text-white group-hover:text-[#1683ab] transition-colors duration-300">
                            <?php echo htmlspecialchars($service['title']); ?>
                        </h3>
                        
                        <p class="text-gray-300 leading-relaxed text-sm">
                            <?php echo htmlspecialchars($service['description']); ?>
                        </p>

                        <!-- Plan Badges -->
                        <div class="pt-4 border-t border-white/10">
                            <p class="text-xs text-gray-400 mb-3 font-medium">Включена в:</p>
                            <div class="flex flex-wrap gap-2">
                                <?php 
                                $planColors = [
                                    'basic' => 'bg-white/5 text-gray-300 border-white/10 hover:bg-white/10',
                                    'professional' => 'bg-white/5 text-gray-300 border-white/10 hover:bg-white/10',
                                    'enterprise' => 'bg-white/5 text-gray-300 border-white/10 hover:bg-white/10'
                                ];

                                $planNames = [
                                    'basic' => 'Основен',
                                    'professional' => 'Професионален',
                                    'enterprise' => 'Корпоративен'
                                ];

                                foreach ($includedPlans as $planKey) {
                                    $colorClass = $planColors[$planKey] ?? 'bg-gray-500/20 text-gray-300 border-gray-500/30';
                                    $planName = $planNames[$planKey] ?? ucfirst($planKey);
                                ?>
                                <span class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium rounded-full border transition-all duration-300 hover:scale-105 <?php echo $colorClass; ?>">
                                    <div class="w-1.5 h-1.5 rounded-full bg-current"></div>
                                    <?php echo $planName; ?>
                                </span>
                                <?php } ?>
                            </div>
                        </div>
                    </div>

                    <!-- Hover Effect Overlay -->
                    <div class="absolute inset-0 bg-gradient-to-br from-[#1683ab]/5 to-[#1e9975]/5 rounded-3xl opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>
                </div>
                <?php } ?>
            </div>

            <!-- Bottom CTA -->
            <div class="text-center mt-16 scroll-fade-in">
                <div class="inline-flex items-center gap-4 bg-gradient-to-r from-[#1683ab]/10 to-[#1e9975]/10 rounded-2xl px-8 py-4 border border-white/10">
                    <i class="fa-solid fa-question-circle text-[#1683ab] text-xl"></i>
                    <div class="text-left">
                        <p class="text-white font-medium">Имате въпроси за услугите?</p>
                        <p class="text-gray-400 text-sm">Свържете се с нашия екип за персонализирана консултация</p>
                    </div>
                    <button class="ml-4 px-6 py-2 btn-primary text-white font-medium rounded-xl">
                        Свържи се
                    </button>
                </div>
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
                    <a href="#pricing" class="px-8 py-3 btn-primary text-white font-medium rounded-xl">
                        Избери план
                    </a>
                    <a href="contact-us.php" class="px-8 py-3 border border-white/20 text-white font-medium rounded-xl hover:border-[#1683ab]/50 hover:bg-white/5 transition-all duration-300">
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

            // Scroll Animation Observer
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                    }
                });
            }, observerOptions);

            // Observe all scroll animation elements
            const scrollElements = document.querySelectorAll('.scroll-fade-in, .scroll-slide-left, .scroll-slide-right, .scroll-scale-in, .scroll-bounce-in, .scroll-glow-in');
            scrollElements.forEach(el => observer.observe(el));

            // Add stagger effect to service cards
            const serviceCards = document.querySelectorAll('.service-card');
            serviceCards.forEach((card, index) => {
                card.style.animationDelay = `${index * 0.1}s`;
            });

            // Add stagger effect to plan cards
            const planCards = document.querySelectorAll('.plan-card');
            planCards.forEach((card, index) => {
                card.style.animationDelay = `${index * 0.2}s`;
            });

            // Enhanced hover effects for interactive elements
            const interactiveElements = document.querySelectorAll('.plan-card, .service-card, .btn-primary');
            interactiveElements.forEach(element => {
                element.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-8px) scale(1.02)';
                });
                
                element.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0) scale(1)';
                });
            });

            // Smooth scroll for anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                });
            });
        });
    </script>

</body>
</html>
