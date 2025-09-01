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
    <section id="pricing" class="pb-20 relative">
        <div class="container mx-auto px-4">
    
    
            <?php include 'parts/pricing-plans-tabs.php'; ?>
            
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
                        <span>Дневни Копия</span>
                    </div>
                    <div class="flex items-center justify-center text-gray-400 text-lg">
                        <i class="fas fa-headset text-orange-500 mr-4 text-2xl"></i>
                        <span>24/7 Поддръжка</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Advanced Detailed Pricing Tables Section -->
    <section id="detailed-pricing" class="py-20 bg-gradient-to-br from-[#0a0a0a] via-[#121212] to-[#0f0f0f] relative">
        <div class="container mx-auto px-4">
            <!-- Section Header -->
            <div class="text-center mb-16 scroll-fade-in">
                <div class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-[#1683ab] to-[#1e9975] text-white text-sm font-medium rounded-full mb-8 shadow-2xl">
                    <i class="fas fa-server mr-3 text-lg"></i>
                    Детайлни Технически Спецификации
                </div>
                <h2 class="text-4xl md:text-5xl font-bold text-white mb-8 leading-tight">
                    Сравнете <span class="bg-gradient-to-r from-[#1683ab] to-[#1e9975] bg-clip-text text-transparent">Всички Детайли</span>
                </h2>
                <p class="text-xl text-gray-400 max-w-3xl mx-auto">
                    Прегледайте всички технически спецификации за да изберете перфектния план за вашите нужди
                </p>
            </div>

            <!-- Visual Comparison Cards -->
            <div class="grid lg:grid-cols-3 gap-8 mb-16 scroll-fade-in">
                <?php foreach (get_config('plans') as $planKey => $plan): ?>
                <div class="<?php echo $planKey === 'professional' ? 'bg-gradient-to-br from-[#1683ab]/20 to-[#1e9975]/20 border-2 border-[#1683ab] transform scale-105' : 'bg-gradient-to-br from-[#1a1a1a] to-[#0f0f0f] border border-[#2a2a2a]'; ?> rounded-3xl p-8 hover:border-[#1683ab]/50 transition-all duration-500">
                    
                    <!-- Plan Header -->
                    <div class="text-center mb-8">
                        <h3 class="text-2xl font-bold text-white mb-3"><?php echo $plan['name']; ?></h3>
                        <p class="text-gray-400 mb-4"><?php echo $plan['description']; ?></p>
                        <?php if (isset($plan['popular']) && $plan['popular']): ?>
                        <div class="inline-block bg-gradient-to-r from-[#1683ab] to-[#1e9975] text-white px-4 py-2 rounded-full text-sm font-semibold mb-4">
                            Най-Популярен
                        </div>
                        <?php endif; ?>
                        
                        <!-- Pricing -->
                        <div class="monthly-price">
                            <div class="text-4xl font-bold text-white mb-2">
                                <?php echo $plan['monthly_price']; ?> <?php echo $plan['currency']; ?>
                                <span class="text-lg text-gray-400 font-normal"><?php echo $plan['monthly_period']; ?></span>
                            </div>
                        </div>
                        <div class="yearly-price hidden">
                            <div class="text-4xl font-bold text-white mb-2">
                                <?php echo $plan['yearly_monthly_price']; ?> <?php echo $plan['currency']; ?>
                                <span class="text-lg text-gray-400 font-normal"><?php echo $plan['monthly_period']; ?></span>
                            </div>
                            <div class="text-sm text-green-400 font-semibold">Платено годишно</div>
                        </div>
                    </div>

                    <!-- Technical Specs Grid -->
                    <div class="space-y-6">
                        
                        <!-- Server Specs -->
                        <div class="bg-[#0f0f0f]/50 rounded-2xl p-4">
                            <div class="flex items-center mb-3">
                                <i class="fas fa-microchip text-[#1683ab] mr-3 text-lg"></i>
                                <h4 class="text-white font-semibold">Сървър</h4>
                            </div>
                            <div class="grid grid-cols-2 gap-3 text-sm">
                                <div class="flex items-center">
                                    <i class="fas fa-microchip text-[#1683ab] mr-2 text-xs"></i>
                                    <span class="text-gray-400">CPU:</span>
                                    <span class="text-white font-medium ml-auto"><?php echo $plan['detailed_specs']['server']['cpu_cores']; ?></span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-memory text-[#1e9975] mr-2 text-xs"></i>
                                    <span class="text-gray-400">RAM:</span>
                                    <span class="text-white font-medium ml-auto"><?php echo $plan['detailed_specs']['server']['ram']; ?></span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-hdd text-[#e74c3c] mr-2 text-xs"></i>
                                    <span class="text-gray-400">Хранилище:</span>
                                    <span class="text-white font-medium ml-auto text-xs"><?php echo $plan['detailed_specs']['server']['storage_type']; ?></span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-tachometer-alt text-[#f39c12] mr-2 text-xs"></i>
                                    <span class="text-gray-400">Скорост:</span>
                                    <span class="text-white font-medium ml-auto text-xs"><?php echo $plan['detailed_specs']['server']['storage_speed']; ?></span>
                                </div>
                            </div>
                        </div>

                        <!-- Performance -->
                        <div class="bg-[#0f0f0f]/50 rounded-2xl p-4">
                            <div class="flex items-center mb-3">
                                <i class="fas fa-tachometer-alt text-[#1e9975] mr-3 text-lg"></i>
                                <h4 class="text-white font-semibold">Производителност</h4>
                            </div>
                            <div class="space-y-2 text-sm">
                                <div class="flex items-center justify-between">
                                    <span class="text-gray-400">Работа:</span>
                                    <span class="text-white font-medium"><?php echo $plan['detailed_specs']['performance']['uptime_guarantee']; ?></span>
                                </div>
                                <div class="flex items-center justify-between">
                                    <span class="text-gray-400">Зареждане:</span>
                                    <span class="text-white font-medium"><?php echo $plan['detailed_specs']['performance']['load_time']; ?></span>
                                </div>
                                <div class="flex items-center justify-between">
                                    <span class="text-gray-400">CDN:</span>
                                    <span class="<?php echo $plan['detailed_specs']['performance']['cdn_included'] ? 'text-green-400' : 'text-red-400'; ?> font-medium">
                                        <?php echo $plan['detailed_specs']['performance']['cdn_included'] ? '✓ Включен' : '✗ Не е включен'; ?>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <!-- Security -->
                        <div class="bg-[#0f0f0f]/50 rounded-2xl p-4">
                            <div class="flex items-center mb-3">
                                <i class="fas fa-shield-alt text-[#e74c3c] mr-3 text-lg"></i>
                                <h4 class="text-white font-semibold">Сигурност</h4>
                            </div>
                            <div class="space-y-2 text-sm">
                                <div class="flex items-center justify-between">
                                    <span class="text-gray-400">DDoS:</span>
                                    <span class="text-white font-medium text-xs"><?php echo $plan['detailed_specs']['security']['ddos_protection']; ?></span>
                                </div>
                                <div class="flex items-center justify-between">
                                    <span class="text-gray-400">Сканиране:</span>
                                    <span class="text-white font-medium"><?php echo $plan['detailed_specs']['security']['malware_scanning']; ?></span>
                                </div>
                                <div class="flex items-center justify-between">
                                    <span class="text-gray-400">Резервни копия:</span>
                                    <span class="text-white font-medium"><?php echo $plan['detailed_specs']['security']['backup_frequency']; ?></span>
                                </div>
                            </div>
                        </div>

                        <!-- Development -->
                        <div class="bg-[#0f0f0f]/50 rounded-2xl p-4">
                            <div class="flex items-center mb-3">
                                <i class="fas fa-code text-[#9b59b6] mr-3 text-lg"></i>
                                <h4 class="text-white font-semibold">Разработка</h4>
                            </div>
                            <div class="space-y-2 text-sm">
                                <div class="flex items-center justify-between">
                                    <span class="text-gray-400">PHP:</span>
                                    <span class="text-white font-medium text-xs"><?php echo $plan['detailed_specs']['development']['php_versions']; ?></span>
                                </div>
                                <div class="flex items-center justify-between">
                                    <span class="text-gray-400">SSH:</span>
                                    <span class="<?php echo $plan['detailed_specs']['development']['ssh_access'] ? 'text-green-400' : 'text-red-400'; ?> font-medium">
                                        <?php echo $plan['detailed_specs']['development']['ssh_access'] ? '✓ Доступен' : '✗ Не е достъпен'; ?>
                                    </span>
                                </div>
                                <div class="flex items-center justify-between">
                                    <span class="text-gray-400">Git:</span>
                                    <span class="<?php echo $plan['detailed_specs']['development']['git_deployment'] ? 'text-green-400' : 'text-red-400'; ?> font-medium">
                                        <?php echo $plan['detailed_specs']['development']['git_deployment'] ? '✓ Поддържан' : '✗ Не се поддържа'; ?>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <!-- Quick Stats -->
                        <div class="grid grid-cols-2 gap-4">
                            <div class="bg-[#0f0f0f]/50 rounded-2xl p-4 text-center">
                                <div class="text-2xl font-bold text-[#1683ab] mb-1">
                                    <?php echo $plan['detailed_specs']['performance']['concurrent_users']; ?>
                                </div>
                                <div class="text-xs text-gray-400">Едновременни потребители</div>
                            </div>
                            <div class="bg-[#0f0f0f]/50 rounded-2xl p-4 text-center">
                                <div class="text-2xl font-bold text-[#1e9975] mb-1">
                                    <?php echo $plan['detailed_specs']['performance']['daily_visitors']; ?>
                                </div>
                                <div class="text-xs text-gray-400">Дневни посетители</div>
                            </div>
                        </div>
                    </div>

                    <!-- Action Button -->
                    <div class="mt-8">
                        <button class="w-full py-4 bg-gradient-to-r from-[#1683ab] to-[#1e9975] hover:from-[#1e9975] hover:to-[#1683ab] text-white font-semibold rounded-2xl transition-all duration-300 transform hover:scale-105 shadow-lg">
                            Започнете с <?php echo $plan['name']; ?>
                        </button>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

            <!-- Feature Comparison Matrix -->
            <div class="scroll-fade-in">
                <h3 class="text-3xl font-bold text-white text-center mb-12">Бързо Сравнение на Ключови Функции</h3>
                
                <div class="bg-[#1a1a1a] rounded-3xl border border-[#2a2a2a] overflow-hidden">
                    <div class="grid grid-cols-4 divide-x divide-[#2a2a2a]">
                        <!-- Feature Names -->
                        <div class="p-6 bg-[#0f0f0f]">
                            <h4 class="text-lg font-semibold text-white">Функция</h4>
                        </div>
                        <?php foreach (get_config('plans') as $planKey => $plan): ?>
                        <div class="p-6 text-center <?php echo $planKey === 'professional' ? 'bg-gradient-to-br from-[#1683ab]/10 to-[#1e9975]/10]' : ''; ?>">
                            <h4 class="text-lg font-bold text-white"><?php echo $plan['name']; ?></h4>
                        </div>
                        <?php endforeach; ?>
                    </div>

                    <!-- Feature Rows -->
                    <?php
                    $features = [
                        'ssl' => ['SSL Сертификат', 'ssl_certificate', 'security'],
                        'ddos' => ['DDoS Защита', 'ddos_protection', 'security'],
                        'backup' => ['Резервни Копия', 'backup_frequency', 'security'],
                        'cdn' => ['CDN Включен', 'cdn_included', 'performance'],
                        'ssh' => ['SSH Достъп', 'ssh_access', 'development'],
                        'git' => ['Git Deployment', 'git_deployment', 'development'],
                        'email' => ['Имейл Акаунти', 'email_accounts', 'email'],
                        'db_size' => ['Размер на БД', 'max_size', 'databases']
                    ];
                    
                    foreach ($features as $key => $feature):
                    ?>
                    <div class="grid grid-cols-4 divide-x divide-[#2a2a2a] border-t border-[#2a2a2a]">
                        <div class="p-4 bg-[#0f0f0f] flex items-center">
                            <span class="text-gray-300"><?php echo $feature[0]; ?></span>
                        </div>
                        <?php foreach (get_config('plans') as $planKey => $plan): ?>
                        <div class="p-4 text-center <?php echo $planKey === 'professional' ? 'bg-gradient-to-br from-[#1683ab]/5 to-[#1e9975]/5]' : 'bg-[#1a1a1a]'; ?>">
                            <?php
                            $value = $plan['detailed_specs'][$feature[2]][$feature[1]];
                            if (is_bool($value)) {
                                echo '<span class="' . ($value ? 'text-green-400' : 'text-red-400') . ' font-bold text-xl">' . ($value ? '✓' : '✗') . '</span>';
                            } else {
                                echo '<span class="text-white font-medium">' . $value . '</span>';
                            }
                            ?>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <?php include 'parts/cta-section.php'; ?>

    <?php include 'footer.php'; ?>
</body>
</html>
