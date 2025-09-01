<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'config.php'; ?>
    <title><?php echo_config('seo.title'); ?> - Hosting</title>
    <meta name="description" content="<?php echo_config('seo.description'); ?>">
    <meta name="keywords" content="<?php echo_config('seo.keywords'); ?>">
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
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="min-h-screen">
    <?php include 'header.php'; ?>

    <!-- Hero Section with Title and Description -->
    <section class="relative py-16 lg:py-20 overflow-hidden mt-24">
        <!-- Simple Background -->
        <div class="absolute inset-0 "></div>
        
        <!-- Minimal Background Elements -->
        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute top-20 right-20 w-32 h-32 bg-[#1683ab]/10 rounded-full blur-3xl"></div>
            <div class="absolute bottom-20 left-20 w-24 h-24 bg-[#1e9975]/10 rounded-full blur-3xl"></div>
        </div>
        
        <!-- Content Container --> 
        <div class="relative z-10 max-w-6xl mx-auto px-4 text-center">
            <!-- Compact Headline -->
            <div class="mb-8">
                <h1 class="text-4xl lg:text-5xl font-bold text-white mb-4">
                    Професионален <span class="bg-gradient-to-r from-[#1683ab] to-[#1e9975] bg-clip-text text-transparent">Уеб Хостинг</span>
                </h1>
                <p class="text-lg lg:text-xl text-gray-300 max-w-3xl mx-auto">
                    Изберете от нашите внимателно изработени хостинг планове, предназначени за бизнеси от всякакъв размер. 
                    Изживейте светкавична производителност с 99.9% гарантирана работа.
                </p>
            </div>
            
            <!-- Single CTA Button -->
            <div class="mb-8">
                <a href="#pricing" class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-[#1683ab] to-[#1e9975] hover:from-[#147a9a] hover:to-[#1a8a6a] text-white font-semibold text-lg rounded-xl transition-all duration-300 transform hover:-translate-y-1 shadow-lg">
                    <span>Вижте Хостинг Планове</span>
                    <i class="fas fa-arrow-down ml-3 text-xl"></i>
                </a>
            </div>
            
            <!-- Compact Trust Indicators -->
            <div class="flex flex-wrap items-center justify-center gap-6 text-sm text-gray-400">
                <div class="flex items-center">
                    <i class="fas fa-shield-alt text-[#1e9975] mr-2"></i>
                    <span>SSL Защита</span>
                </div>
                <div class="flex items-center">
                    <i class="fas fa-database text-[#1683ab] mr-2"></i>
                    <span>SSD Хранилище</span>
                </div>
                <div class="flex items-center">
                    <i class="fas fa-globe text-[#1e9975] mr-2"></i>
                    <span>CDN Включен</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section - MAIN FOCUS -->
    <section id="pricing" class="py-24 bg-gray-900 relative">
        <div class="container mx-auto px-4">
            <div class="text-center mb-20 scroll-fade-in">
                <div class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-[#1683ab] to-[#1e9975] text-white text-sm font-medium rounded-full mb-8 shadow-2xl">
                    <i class="fas fa-tags mr-3 text-lg"></i>
                    Цени и Планове
                </div>
                <h2 class="text-5xl md:text-6xl font-bold text-white mb-8 leading-tight">
                    Изберете Вашия Перфектен <span class="bg-gradient-to-r from-[#1683ab] to-[#1e9975] bg-clip-text text-transparent">Хостинг План</span>
                </h2>
                <p class="text-xl md:text-2xl text-gray-400 max-w-3xl mx-auto mb-12">
                    Започнете с нашия достъпен стартер план и мащабирайте нагоре, докато вашият бизнес расте. 
                    Всички планове включват корпоративна сигурност и 24/7 поддръжка.
                </p>
                
                <!-- Pricing Toggle -->
                <div class="flex justify-center items-center bg-[#1a1a1a] rounded-2xl p-2 border border-[#2a2a2a] max-w-md mx-auto">
                    <button id="monthly-tab" class="px-8 py-3 rounded-xl text-white font-semibold transition-all duration-300 bg-gradient-to-r from-[#1683ab] to-[#1e9975] shadow-lg">
                        Месечно
                    </button>
                    <button id="yearly-tab" class="px-8 py-3 rounded-xl text-gray-400 font-semibold transition-all duration-300 hover:text-white ml-2">
                        Годишно
                        <span class="ml-2 px-2 py-1 text-xs bg-[#1e9975] text-white rounded-full">Спестете 20%</span>
                    </button>
                </div>
            </div>
            
            <div class="grid lg:grid-cols-3 gap-10 max-w-7xl mx-auto scroll-stagger">
                <?php foreach (get_config('plans') as $planKey => $plan): ?>
                <div class="<?php echo $planKey === 'professional' ? 'bg-gradient-to-br from-[#1683ab]/10 to-[#1e9975]/10 rounded-3xl p-10 border-2 border-[#1683ab] relative transform scale-110 group hover:scale-105 transition-all duration-500' : 'bg-gradient-to-br from-[#1a1a1a] to-[#0f0f0f] rounded-3xl p-10 border border-[#2a2a2a] hover:border-[#1683ab]/50 transition-all duration-500 group hover:scale-105'; ?>">
                    
                    <?php if (isset($plan['popular']) && $plan['popular']): ?>
                    <div class="absolute -top-6 left-1/2 transform -translate-x-1/2">
                        <span class="bg-gradient-to-r from-[#1683ab] to-[#1e9975] text-white px-8 py-3 rounded-full text-base font-semibold">
                            Най-Популярен
                        </span>
                    </div>
                    <?php endif; ?>
                    
                    <div class="text-center mb-10">
                        <h3 class="text-3xl font-bold text-white mb-4"><?php echo $plan['name']; ?></h3>
                        <p class="text-gray-400 mb-8 text-lg"><?php echo $plan['description']; ?></p>
                        
                        <!-- Monthly Price -->
                        <div class="monthly-price">
                                                            <div class="text-5xl font-bold text-white mb-3">
                                    <?php echo $plan['monthly_price']; ?> <?php echo $plan['currency']; ?>
                                    <span class="text-xl text-gray-400 font-normal"><?php echo $plan['monthly_period']; ?></span>
                                </div>
                        </div>
                        
                        <!-- Yearly Price -->
                        <div class="yearly-price hidden">
                            <div class="text-5xl font-bold text-white mb-3">
                                <?php echo $plan['yearly_monthly_price']; ?> <?php echo $plan['currency']; ?>
                                <span class="text-xl text-gray-400 font-normal"><?php echo $plan['monthly_period']; ?></span>
                            </div>
                            <div class="text-lg text-green-400 font-semibold">Платено годишно (<?php echo $plan['yearly_price']; ?> <?php echo $plan['currency']; ?>)</div>
                        </div>
                    </div>
                    
                    <ul class="space-y-5 mb-10 text-lg">
                        <?php foreach ($plan['features'] as $feature): ?>
                        <li class="flex items-center text-gray-300">
                            <i class="fas fa-check text-[#1e9975] mr-4 text-xl"></i>
                            <?php echo $feature; ?>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                    
                    <button class="w-full py-5 bg-gradient-to-r from-[#1683ab] to-[#1e9975] text-white font-semibold rounded-2xl hover:from-[#1e9975] hover:to-[#1683ab] transition-all duration-300 transform hover:scale-105 shadow-lg text-lg">
                        Започнете
                    </button>
                </div>
                <?php endforeach; ?>
            </div>
            
            <!-- Additional Features -->
            <div class="mt-20 text-center scroll-fade-in">
                <h3 class="text-3xl font-bold text-white mb-10">Всички Планове Включват</h3>
                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 max-w-5xl mx-auto">
                    <div class="flex items-center justify-center text-gray-400 text-lg">
                        <i class="fas fa-server text-blue-500 mr-4 text-2xl"></i>
                        <span>99.9% Работа</span>
                    </div>
                    <div class="flex items-center justify-center text-gray-400 text-lg">
                        <i class="fas fa-shield-alt text-green-500 mr-4 text-2xl"></i>
                        <span>Безплатен SSL</span>
                    </div>
                    <div class="flex items-center justify-center text-gray-400 text-lg">
                        <i class="fas fa-database text-purple-500 mr-4 text-2xl"></i>
                        <span>Дневни Резервни Копия</span>
                    </div>
                    <div class="flex items-center justify-center text-gray-400 text-lg">
                        <i class="fas fa-headset text-orange-500 mr-4 text-2xl"></i>
                        <span>24/7 Поддръжка</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-20 bg-gray-900/50 relative">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16 scroll-fade-in">
                <div class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-[#1683ab] to-[#1e9975] text-white text-sm font-medium rounded-full mb-8 shadow-2xl">
                    <i class="fas fa-star mr-3 text-lg"></i>
                    Нашите Предимства
                </div>
                <h2 class="text-4xl md:text-5xl font-bold text-white mb-8 leading-tight">
                    Защо Да Изберете <span class="bg-gradient-to-r from-[#1683ab] to-[#1e9975] bg-clip-text text-transparent">Нашия Хостинг</span>?
                </h2>
                <p class="text-xl text-gray-400 max-w-3xl mx-auto">
                    Ние предоставяме основата, която вашият уебсайт се нуждае, за да успее в днешния дигитален пейзаж
                </p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 scroll-stagger">
                <div class="bg-gray-800/50 backdrop-blur-sm rounded-2xl p-8 border border-gray-700/50 hover:border-blue-500/50 transition-all duration-300 hover:transform hover:scale-105">
                    <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-cyan-500 rounded-2xl flex items-center justify-center mb-6">
                        <i class="fas fa-rocket text-2xl text-white"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-4">Lightning Fast</h3>
                    <p class="text-gray-400 leading-relaxed">
                        SSD-powered servers with global CDN ensure your website loads in milliseconds, 
                        providing an exceptional user experience.
                    </p>
                </div>
                
                <div class="bg-gray-800/50 backdrop-blur-sm rounded-2xl p-8 border border-gray-700/50 hover:border-green-500/50 transition-all duration-300 hover:transform hover:scale-105">
                    <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-emerald-500 rounded-2xl flex items-center justify-center mb-6">
                        <i class="fas fa-shield-alt text-2xl text-white"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-4">Enterprise Security</h3>
                    <p class="text-gray-400 leading-relaxed">
                        DDoS protection, SSL certificates, and daily backups keep your website 
                        secure and protected from threats.
                    </p>
                </div>
                
                <div class="bg-gray-800/50 backdrop-blur-sm rounded-2xl p-8 border border-gray-700/50 hover:border-purple-500/50 transition-all duration-300 hover:transform hover:scale-105">
                    <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-pink-500 rounded-2xl flex items-center justify-center mb-6">
                        <i class="fas fa-headset text-2xl text-white"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-4">24/7 Support</h3>
                    <p class="text-gray-400 leading-relaxed">
                        Our expert support team is available around the clock to help you 
                        with any hosting-related questions or issues.
                    </p>
                </div>
                
                <div class="bg-gray-800/50 backdrop-blur-sm rounded-2xl p-8 border border-gray-700/50 hover:border-orange-500/50 transition-all duration-300 hover:transform hover:scale-105">
                    <div class="w-16 h-16 bg-gradient-to-br from-orange-500 to-red-500 rounded-2xl flex items-center justify-center mb-6">
                        <i class="fas fa-server text-2xl text-white"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-4">99.9% Uptime</h3>
                    <p class="text-gray-400 leading-relaxed">
                        Guaranteed uptime ensures your website is always accessible to your 
                        customers, maximizing your business potential.
                    </p>
                </div>
                
                <div class="bg-gray-800/50 backdrop-blur-sm rounded-2xl p-8 border border-gray-700/50 hover:border-teal-500/50 transition-all duration-300 hover:transform hover:scale-105">
                    <div class="w-16 h-16 bg-gradient-to-br from-teal-500 to-cyan-500 rounded-2xl flex items-center justify-center mb-6">
                        <i class="fas fa-mobile-alt text-2xl text-white"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-4">Mobile Optimized</h3>
                    <p class="text-gray-400 leading-relaxed">
                        All our hosting plans are optimized for mobile devices, ensuring 
                        your website looks great on any screen size.
                    </p>
                </div>
                
                <div class="bg-gray-800/50 backdrop-blur-sm rounded-2xl p-8 border border-gray-700/50 hover:border-indigo-500/50 transition-all duration-300 hover:transform hover:scale-105">
                    <div class="w-16 h-16 bg-gradient-to-br from-indigo-500 to-blue-500 rounded-2xl flex items-center justify-center mb-6">
                        <i class="fas fa-chart-line text-2xl text-white"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-4">Analytics & Insights</h3>
                    <p class="text-gray-400 leading-relaxed">
                        Built-in analytics and performance monitoring help you understand 
                        your website's performance and optimize accordingly.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gradient-to-r from-gray-900 to-gray-800 relative">
        <div class="container mx-auto px-4 text-center scroll-fade-in">
            <div class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-[#1683ab]/20 to-[#1e9975]/20 border border-[#1683ab]/30 text-white text-sm font-medium rounded-full mb-8 backdrop-blur-sm">
                <div class="w-2 h-2 bg-[#1e9975] rounded-full mr-3 animate-pulse"></div>
                Готови сте да започнете?
            </div>
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-8 leading-tight">
                Готови ли сте да <span class="bg-gradient-to-r from-[#1683ab] to-[#1e9975] bg-clip-text text-transparent">Трансформирате</span> Вашия Бизнес?
            </h2>
            <p class="text-xl text-gray-400 mb-8 max-w-2xl mx-auto">
                Присъединете се към доволните клиенти, които се доверяват на нас за своите хостинг нужди. 
                Започнете днес и изживейте разликата.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#pricing" class="px-8 py-4 bg-gradient-to-r from-[#1683ab] to-[#1e9975] hover:from-[#147a9a] hover:to-[#1a8a6a] text-white font-semibold rounded-2xl transition-all duration-300 transform hover:-translate-y-1 hover:shadow-2xl hover:shadow-[#1e9975]/25">
                    Изберете Вашия План
                </a>
                <a href="#" class="px-8 py-4 border-2 border-white/20 text-white font-semibold rounded-2xl transition-all duration-300 hover:border-[#1683ab]/50 hover:bg-white/5 backdrop-blur-sm">
                    Свържете се с Продажбите
                </a>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>
</body>
</html>
