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
<body class="min-h-screen">
    <?php include 'header.php'; ?>

    <!-- Hero Section -->
    <section class="text-center py-[200px] flex items-center justify-center relative overflow-hidden">
        <!-- Animated Gradient Background -->
        <div class="header-animation">
            <div class="animation animation-orange"></div>
            <div class="animation animation-black"></div>
            <div class="animation animation-gray"></div>
            <div class="animation animation-blue"></div>
        </div>
        
        <!-- Gradient Overlay -->
        <div class="overlay"></div>
        
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-10 z-10">
            <div class="absolute top-20 left-20 w-32 h-32 border border-white/20 rounded-full"></div>
            <div class="absolute top-40 right-32 w-24 h-24 border border-white/20 rounded-full"></div>
            <div class="absolute bottom-32 left-1/4 w-16 h-16 border border-white/20 rounded-full"></div>
        </div>
        
        <div class=" relative z-20">
            <div class="animate-fade-in-up max-w-5xl mx-auto">
            
                
                <!-- Main Heading -->
                <h1 class="text-4xl md:text-5xl lg:text-7xl font-bold mb-6 text-white leading-tight tracking-tight">
                    Клауд
                    <span class="bg-gradient-to-r from-[#1683ab] to-[#1e9975] bg-clip-text text-transparent">Хост</span>
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
                
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-24 ">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-20">
                <div class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-[#1683ab] to-[#1e9975] text-white text-sm font-medium rounded-full mb-6">
                    <i class="fas fa-star mr-2"></i>
                    Нашите предимства
                </div>
                <h2 class="text-4xl md:text-5xl font-bold text-white mb-6 leading-tight">
                    Защо да изберете <span class="bg-gradient-to-r from-[#1683ab] to-[#1e9975] bg-clip-text text-transparent">КлаудХост</span>?
                </h2>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto leading-relaxed">
                    Изживейте перфектното съчетание от производителност, сигурност и надеждност, което ни отличава от конкуренцията
                </p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8 lg:gap-12">
                <!-- Feature Card 1 -->
                <div class="group relative bg-white/5 backdrop-blur-sm rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 border border-white/10 hover:border-white/20">
                    <div class="absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                        <div class="w-16 h-16 bg-gradient-to-r from-[#1683ab] to-[#1e9975] rounded-full flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-rocket text-2xl text-white"></i>
                        </div>
                    </div>
                    
                    <div class="mt-8 text-center">
                        <h3 class="text-2xl font-bold mb-4 text-white group-hover:text-[#1683ab] transition-colors duration-300">
                            Светкавично бързо
                        </h3>
                        <p class="text-gray-300 leading-relaxed mb-6">
                            SSD инфраструктура с глобална CDN мрежа за оптимална производителност по света.
                        </p>
                        
                        <!-- Feature Stats -->
                        <div class="bg-gradient-to-r from-[#1683ab]/20 to-[#1e9975]/20 rounded-lg p-4 border border-[#1683ab]/30">
                            <div class="text-2xl font-bold text-[#1683ab] mb-1">99.9%</div>
                            <div class="text-sm text-gray-300">Гарантирана работа</div>
                        </div>
                    </div>
                </div>
                
                <!-- Feature Card 2 -->
                <div class="group relative bg-white/5 backdrop-blur-sm rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 border border-white/10 hover:border-white/20">
                    <div class="absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                        <div class="w-16 h-16 bg-gradient-to-r from-[#1e9975] to-[#1683ab] rounded-full flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-shield-alt text-2xl text-white"></i>
                        </div>
                    </div>
                    
                    <div class="mt-8 text-center">
                        <h3 class="text-2xl font-bold mb-4 text-white group-hover:text-[#1e9975] transition-colors duration-300">
                            Корпоративна сигурност
                        </h3>
                        <p class="text-gray-300 leading-relaxed mb-6">
                            DDoS защита, SSL сертификати и ежедневни резервни копия включени във всеки план.
                        </p>
                        
                        <!-- Feature Stats -->
                        <div class="bg-gradient-to-r from-[#1e9975]/20 to-[#1683ab]/20 rounded-lg p-4 border border-[#1e9975]/30">
                            <div class="text-2xl font-bold text-[#1e9975] mb-1">256-bit</div>
                            <div class="text-sm text-gray-300">SSL Криптиране</div>
                        </div>
                    </div>
                </div>
                
                <!-- Feature Card 3 -->
                <div class="group relative bg-white/5 backdrop-blur-sm rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 border border-white/10 hover:border-white/20">
                    <div class="absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                        <div class="w-16 h-16 bg-gradient-to-r from-[#1683ab] to-[#1e9975] rounded-full flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-headset text-2xl text-white"></i>
                        </div>
                    </div>
                    
                    <div class="mt-8 text-center">
                        <h3 class="text-2xl font-bold mb-4 text-white group-hover:text-[#1683ab] transition-colors duration-300">
                            24/7 Поддръжка
                        </h3>
                        <p class="text-gray-300 leading-relaxed mb-6">
                            Експертен екип за поддръжка на разположение 24/7, за да ви помогне да успеете.
                        </p>
                        
                        <!-- Feature Stats -->
                        <div class="bg-gradient-to-r from-[#1683ab]/20 to-[#1e9975]/20 rounded-lg p-4 border border-[#1683ab]/30">
                            <div class="text-2xl font-bold text-[#1683ab] mb-1">&lt;2мин</div>
                            <div class="text-sm text-gray-300">Време за отговор</div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Additional Features Row -->
            <div class="mt-20 grid md:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="w-12 h-12 bg-gradient-to-r from-[#1683ab] to-[#1e9975] rounded-lg flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-globe text-white"></i>
                    </div>
                    <h4 class="font-semibold text-white mb-2">Глобална CDN</h4>
                    <p class="text-sm text-gray-300">Световна мрежа за бърз достъп</p>
                </div>
                
                <div class="text-center">
                    <div class="w-12 h-12 bg-gradient-to-r from-[#1e9975] to-[#1683ab] rounded-lg flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-database text-white"></i>
                    </div>
                    <h4 class="font-semibold text-white mb-2">SSD Хранилище</h4>
                    <p class="text-sm text-gray-300">Светкавично бързи дискове</p>
                </div>
                
                <div class="text-center">
                    <div class="w-12 h-12 bg-gradient-to-r from-[#1683ab] to-[#1e9975] rounded-lg flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-sync text-white"></i>
                    </div>
                    <h4 class="font-semibold text-white mb-2">Автоматични Backups</h4>
                    <p class="text-sm text-gray-300">Ежедневни резервни копия</p>
                </div>
                
                <div class="text-center">
                    <div class="w-12 h-12 bg-gradient-to-r from-[#1e9975] to-[#1683ab] rounded-lg flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-chart-line text-white"></i>
                    </div>
                    <h4 class="font-semibold text-white mb-2">Мониторинг 24/7</h4>
                    <p class="text-sm text-gray-300">Постоянен надзор на системите</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Plans -->
    <section id="plans" class="py-24 bg-white/5 backdrop-blur-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-20">
                <div class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-[#1683ab] to-[#1e9975] text-white text-sm font-medium rounded-full mb-6">
                    <i class="fas fa-tags mr-2"></i>
                    Цени и планове
                </div>
                <h2 class="text-4xl md:text-5xl font-bold text-white mb-6 leading-tight">
                    Изберете вашия <span class="bg-gradient-to-r from-[#1683ab] to-[#1e9975] bg-clip-text text-transparent">План</span>
                </h2>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto leading-relaxed">
                    Изберете перфектното хостинг решение, което отговаря на нуждите и бюджета на вашия бизнес.
                </p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">
                <!-- Starter Plan -->
                <div class="group relative bg-white/5 backdrop-blur-sm rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 border border-white/10 hover:border-white/20">
                    <div class="text-center">
                        <h3 class="text-2xl font-bold mb-4 text-white group-hover:text-[#1683ab] transition-colors duration-300">
                            <?php echo_config('plans.starter.name'); ?>
                        </h3>
                        <div class="text-4xl font-bold mb-2 text-[#1683ab]"><?php echo_config('plans.starter.price'); ?> <?php echo_config('plans.starter.currency'); ?></div>
                        <div class="text-lg text-gray-300 mb-6"><?php echo_config('plans.starter.period'); ?></div>
                        
                        <ul class="space-y-3 mb-8 text-left">
                            <?php foreach (get_config('plans.starter.features') as $feature): ?>
                                <li class="flex items-center text-gray-300">
                                    <i class="fas fa-check text-[#1e9975] mr-3"></i>
                                    <?php echo $feature; ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                        
                        <button class="w-full bg-gradient-to-r from-[#1683ab] to-[#1e9975] hover:from-[#147a9a] hover:to-[#1a8a6a] text-white text-lg px-6 py-3 rounded-lg font-semibold shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                            Започнете
                        </button>
                    </div>
                </div>

                <!-- Professional Plan -->
                <div class="group relative bg-gradient-to-br from-[#1683ab]/20 to-[#1e9975]/20 backdrop-blur-sm rounded-2xl p-8 shadow-2xl hover:shadow-3xl transition-all duration-500 transform hover:-translate-y-2 border-2 border-[#1683ab]/50 hover:border-[#1683ab] scale-105">
                    <div class="absolute -top-4 left-1/2 transform -translate-x-1/2">
                        <div class="bg-gradient-to-r from-[#1683ab] to-[#1e9975] text-white text-sm font-semibold px-6 py-2 rounded-full shadow-lg">
                            <i class="fas fa-star mr-2"></i>
                            Препоръчан
                        </div>
                    </div>
                    
                    <div class="text-center mt-4">
                        <h3 class="text-2xl font-bold mb-4 text-white group-hover:text-[#1683ab] transition-colors duration-300">
                            <?php echo_config('plans.professional.name'); ?>
                        </h3>
                        <div class="text-4xl font-bold mb-2 text-[#1e9975]"><?php echo_config('plans.professional.price'); ?> <?php echo_config('plans.professional.currency'); ?></div>
                        <div class="text-lg text-gray-300 mb-6"><?php echo_config('plans.professional.period'); ?></div>
                        
                        <ul class="space-y-3 mb-8 text-left">
                            <?php foreach (get_config('plans.professional.features') as $feature): ?>
                                <li class="flex items-center text-gray-300">
                                    <i class="fas fa-check text-[#1e9975] mr-3"></i>
                                    <?php echo $feature; ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                        
                        <button class="w-full bg-gradient-to-r from-[#1e9975] to-[#1683ab] hover:from-[#1a8a6a] hover:to-[#147a9a] text-white text-lg px-6 py-3 rounded-lg font-semibold shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                            Започнете
                        </button>
                    </div>
                </div>

                <!-- Enterprise Plan -->
                <div class="group relative bg-white/5 backdrop-blur-sm rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 border border-white/10 hover:border-white/20">
                    <div class="text-center">
                        <h3 class="text-2xl font-bold mb-4 text-white group-hover:text-[#1e9975] transition-colors duration-300">
                            <?php echo_config('plans.enterprise.name'); ?>
                        </h3>
                        <div class="text-4xl font-bold mb-2 text-[#1e9975]"><?php echo_config('plans.enterprise.price'); ?> <?php echo_config('plans.enterprise.currency'); ?></div>
                        <div class="text-lg text-gray-300 mb-6"><?php echo_config('plans.enterprise.period'); ?></div>
                        
                        <ul class="space-y-3 mb-8 text-left">
                            <?php foreach (get_config('plans.enterprise.features') as $feature): ?>
                                <li class="flex items-center text-gray-300">
                                    <i class="fas fa-check text-[#1e9975] mr-3"></i>
                                    <?php echo $feature; ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                        
                        <button class="w-full bg-gradient-to-r from-[#1683ab] to-[#1e9975] hover:from-[#147a9a] hover:to-[#1a8a6a] text-white text-lg px-6 py-3 rounded-lg font-semibold shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                            Започнете
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-24 bg-gradient-to-br from-[#0a1a22] via-[#0f2a35] to-[#0a1a22] relative overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-20 left-20 w-32 h-32 border border-white/20 rounded-full animate-pulse"></div>
            <div class="absolute top-40 right-32 w-24 h-24 border border-white/20 rounded-full animate-pulse" style="animation-delay: 1s;"></div>
            <div class="absolute bottom-32 left-1/4 w-16 h-16 border border-white/20 rounded-full animate-pulse" style="animation-delay: 2s;"></div>
        </div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-20">
                <div class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-[#1683ab] to-[#1e9975] text-white text-sm font-medium rounded-full mb-6">
                    <i class="fas fa-star mr-2"></i>
                    Нашите постижения
                </div>
                <h2 class="text-4xl md:text-5xl font-bold text-white mb-6 leading-tight">
                    Защо да изберете <span class="bg-gradient-to-r from-[#1683ab] to-[#1e9975] bg-clip-text text-transparent">КлаудХост</span>?
                </h2>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto leading-relaxed">
                    Изживейте перфектното съчетание от производителност, сигурност и надеждност, което ни отличава от конкуренцията
                </p>
            </div>
            
            <div class="grid md:grid-cols-4 gap-8 lg:gap-12">
                <!-- Uptime Stat -->
                <div class="group text-center animate-fade-in-up" style="animation-delay: 0.1s;">
                    <div class="relative mb-6">
                        <div class="w-20 h-20 bg-gradient-to-r from-[#1683ab]/20 to-[#1e9975]/20 border border-white/20 rounded-2xl flex items-center justify-center mx-auto group-hover:bg-gradient-to-r group-hover:from-[#1683ab]/40 group-hover:to-[#1e9975]/40 transition-all duration-500 transform group-hover:scale-110">
                            <i class="fas fa-chart-line text-[#1683ab] text-2xl group-hover:text-white transition-colors duration-300"></i>
                        </div>
                        <div class="absolute -top-2 -right-2 w-6 h-6 bg-gradient-to-r from-[#1683ab] to-[#1e9975] rounded-full flex items-center justify-center">
                            <i class="fas fa-check text-white text-xs"></i>
                        </div>
                    </div>
                    <div class="text-4xl font-bold mb-3 text-white group-hover:text-[#1683ab] transition-colors duration-300">99.9%</div>
                    <div class="text-lg text-gray-300 font-medium mb-2">Гарантирана работа</div>
                    <div class="text-sm text-gray-400">Най-високата надеждност за вашия сайт</div>
                </div>
                
                <!-- Customers Stat -->
                <div class="group text-center animate-fade-in-up" style="animation-delay: 0.2s;">
                    <div class="relative mb-6">
                        <div class="w-20 h-20 bg-gradient-to-r from-[#1e9975]/20 to-[#1683ab]/20 border border-white/20 rounded-2xl flex items-center justify-center mx-auto group-hover:bg-gradient-to-r group-hover:from-[#1e9975]/40 group-hover:to-[#1683ab]/40 transition-all duration-500 transform group-hover:scale-110">
                            <i class="fas fa-users text-[#1e9975] text-2xl group-hover:text-white transition-colors duration-300"></i>
                        </div>
                        <div class="absolute -top-2 -right-2 w-6 h-6 bg-gradient-to-r from-[#1e9975] to-[#1683ab] rounded-full flex items-center justify-center">
                            <i class="fas fa-heart text-white text-xs"></i>
                        </div>
                    </div>
                    <div class="text-4xl font-bold mb-3 text-white group-hover:text-[#1e9975] transition-colors duration-300">24/7</div>
                    <div class="text-lg text-gray-300 font-medium mb-2">Експертна поддръжка</div>
                    <div class="text-sm text-gray-400">Нашият екип е тук за вас</div>
                </div>
                
                <!-- Support Stat -->
                <div class="group text-center animate-fade-in-up" style="animation-delay: 0.3s;">
                    <div class="relative mb-6">
                        <div class="w-20 h-20 bg-gradient-to-r from-[#1683ab]/20 to-[#1e9975]/20 border border-white/20 rounded-2xl flex items-center justify-center mx-auto group-hover:bg-gradient-to-r group-hover:from-[#1683ab]/40 group-hover:to-[#1e9975]/40 transition-all duration-500 transform group-hover:scale-110">
                            <i class="fas fa-clock text-[#1683ab] text-2xl group-hover:text-white transition-colors duration-300"></i>
                        </div>
                        <div class="absolute -top-2 -right-2 w-6 h-6 bg-gradient-to-r from-[#1683ab] to-[#1e9975] rounded-full flex items-center justify-center">
                            <i class="fas fa-bolt text-white text-xs"></i>
                        </div>
                    </div>
                    <div class="text-4xl font-bold mb-3 text-white group-hover:text-[#1683ab] transition-colors duration-300">&lt;2мин</div>
                    <div class="text-lg text-gray-300 font-medium mb-2">Време за отговор</div>
                    <div class="text-sm text-gray-400">Бърза и ефективна поддръжка</div>
                </div>
                
                <!-- Experience Stat -->
                <div class="group text-center animate-fade-in-up" style="animation-delay: 0.4s;">
                    <div class="relative mb-6">
                        <div class="w-20 h-20 bg-gradient-to-r from-[#1e9975]/20 to-[#1683ab]/20 border border-white/20 rounded-2xl flex items-center justify-center mx-auto group-hover:bg-gradient-to-r group-hover:from-[#1e9975]/40 group-hover:to-[#1683ab]/40 transition-all duration-500 transform group-hover:scale-110">
                            <i class="fas fa-trophy text-[#1e9975] text-2xl group-hover:text-white transition-colors duration-300"></i>
                        </div>
                        <div class="absolute -top-2 -right-2 w-6 h-6 bg-gradient-to-r from-[#1e9975] to-[#1683ab] rounded-full flex items-center justify-center">
                            <i class="fas fa-crown text-white text-xs"></i>
                        </div>
                    </div>
                    <div class="text-4xl font-bold mb-3 text-white group-hover:text-[#1e9975] transition-colors duration-300">100%</div>
                    <div class="text-lg text-gray-300 font-medium mb-2">Гаранция за качество</div>
                    <div class="text-sm text-gray-400">Доверете се на нашата експертиза</div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-24 bg-gradient-to-br from-[#1683ab]/5 to-[#1e9975]/5 relative overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-20 left-20 w-32 h-32 border border-[#1683ab]/30 rounded-full animate-pulse"></div>
            <div class="absolute top-40 right-32 w-24 h-24 border border-[#1e9975]/30 rounded-full animate-pulse" style="animation-delay: 1s;"></div>
            <div class="absolute bottom-32 left-1/4 w-16 h-16 border border-[#1683ab]/30 rounded-full animate-pulse" style="animation-delay: 2s;"></div>
        </div>
        
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
            <div class="animate-fade-in-up">
                <div class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-[#1683ab] to-[#1e9975] text-white text-sm font-medium rounded-full mb-8 shadow-lg">
                    <i class="fas fa-rocket mr-3 text-lg"></i>
                    Готови сте за промяна?
                </div>
                <h2 class="text-4xl md:text-5xl font-bold text-white mb-8 leading-tight">
                    Готови ли сте да <span class="bg-gradient-to-r from-[#1683ab] to-[#1e9975] bg-clip-text text-transparent">трансформирате</span> вашия бизнес?
                </h2>
                <p class="text-xl text-gray-300 mb-12 max-w-4xl mx-auto leading-relaxed">
                    Присъединете се към доволните клиенти, които се доверяват на КлаудХост за своите хостинг нужди. 
                    Изживейте разликата, която премиум хостингът прави.
                </p>
                
                <!-- Trust Indicators -->
                <div class="flex items-center justify-center space-x-8 text-gray-400 mb-12">
                    <div class="flex items-center">
                        <i class="fas fa-check-circle text-[#1e9975] mr-2"></i>
                        <span>Без скрити такси</span>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-check-circle text-[#1e9975] mr-2"></i>
                        <span>30-дневна гаранция</span>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-check-circle text-[#1e9975] mr-2"></i>
                        <span>Безплатна миграция</span>
                    </div>
                </div>
                
                <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
                    <a href="#plans" class="group bg-gradient-to-r from-[#1683ab] to-[#1e9975] hover:from-[#147a9a] hover:to-[#1a8a6a] text-white text-xl px-12 py-5 rounded-xl font-semibold shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 flex items-center">
                        <span>Започнете днес</span>
                        <i class="fas fa-arrow-right ml-3 group-hover:translate-x-1 transition-transform duration-300"></i>
                    </a>
                    <a href="#contact" class="group border-2 border-white/30 text-white hover:bg-white/10 hover:border-white/50 text-xl px-12 py-5 rounded-xl font-semibold transition-all duration-300 flex items-center backdrop-blur-sm">
                        <i class="fas fa-headset mr-3 group-hover:scale-110 transition-transform duration-300"></i>
                        Говорете с експерт
                    </a>
                </div>
                
                <!-- Additional CTA Info -->
                <div class="mt-12 pt-8 border-t border-white/10">
                    <p class="text-sm text-gray-400 mb-4">Няма дългосрочни договори • Отменете по всяко време • 24/7 поддръжка</p>
                    <div class="flex justify-center items-center space-x-6 text-gray-500">
                        <div class="flex items-center">
                            <i class="fas fa-shield-alt text-[#1683ab] mr-2"></i>
                            <span>SSL включен</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-database text-[#1e9975] mr-2"></i>
                            <span>SSD хранилище</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-globe text-[#1683ab] mr-2"></i>
                            <span>CDN включен</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter Subscription Section -->
    <section class="py-24 relative overflow-hidden">
        <!-- Animated Background -->
        <div class="absolute inset-0 bg-gradient-to-br from-[#0a1a22] via-[#0f2a35] to-[#0a1a22]"></div>
        
        <!-- Floating Elements -->
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute top-20 left-10 w-2 h-2 bg-[#1e9975] rounded-full animate-ping" style="animation-delay: 0s;"></div>
            <div class="absolute top-32 right-20 w-3 h-3 bg-[#1683ab] rounded-full animate-ping" style="animation-delay: 1s;"></div>
            <div class="absolute bottom-32 left-1/3 w-2 h-2 bg-[#1e9975] rounded-full animate-ping" style="animation-delay: 2s;"></div>
            <div class="absolute top-1/2 right-1/4 w-4 h-4 bg-[#1683ab] rounded-full animate-ping" style="animation-delay: 0.5s;"></div>
        </div>
        
        <!-- Main Content -->
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16">
                <div class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-[#1683ab] to-[#1e9975] text-white text-sm font-medium rounded-full mb-8 shadow-lg">
                    <i class="fas fa-rocket mr-3 text-lg"></i>
                    Ексклузивен достъп
                </div>
                <h2 class="text-4xl md:text-5xl font-bold text-white mb-6 leading-tight">
                    Бъдете първите, които научават
                </h2>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto leading-relaxed mb-8">
                    Получете ексклузивни оферти, новини за продуктите и експертни съвети
                </p>
                <div class="flex items-center justify-center space-x-6 text-gray-400">
                    <div class="flex items-center">
                        <i class="fas fa-check-circle text-[#1e9975] mr-2"></i>
                        <span>Без спам</span>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-check-circle text-[#1e9975] mr-2"></i>
                        <span>Отписване по всяко време</span>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-check-circle text-[#1e9975] mr-2"></i>
                        <span>Ексклузивно съдържание</span>
                    </div>
                </div>
            </div>
            
            <!-- Subscription Form -->
            <div class="max-w-4xl mx-auto">
                <div class="bg-white/5 backdrop-blur-sm border border-white/10 rounded-3xl p-12 shadow-2xl relative overflow-hidden">
                    <!-- Form Background Pattern -->
                    <div class="absolute inset-0 opacity-5">
                        <div class="absolute top-0 right-0 w-64 h-64 border border-white/20 rounded-full"></div>
                        <div class="absolute bottom-0 left-0 w-48 h-48 border border-white/20 rounded-full"></div>
                    </div>
                    
                    <div class="relative z-10">
                        <div class="grid md:grid-cols-2 gap-8 items-center">
                            <!-- Left Side - Visual -->
                            <div class="text-center md:text-left">
                                <div class="w-20 h-20 bg-gradient-to-r from-[#1683ab] to-[#1e9975] rounded-2xl flex items-center justify-center mx-auto md:mx-0 mb-6 shadow-lg">
                                    <i class="fas fa-envelope-open text-white text-3xl"></i>
                                </div>
                                <h3 class="text-xl font-bold text-white mb-4">Присъединете се към общността</h3>
                                <p class="text-gray-300 leading-relaxed">
                                    Получете най-новите новини, оферти и ексклузивни съвети за вашия хостинг
                                </p>
                            </div>
                            
                            <!-- Right Side - Form -->
                            <div class="space-y-6">
                                <div class="space-y-4">
                                    <div class="relative">
                                        <input type="email" placeholder="Вашият имейл адрес" class="w-full px-6 py-4 bg-white/10 border-2 border-white/20 rounded-xl text-white placeholder-gray-400 focus:outline-none focus:border-[#1e9975] focus:ring-4 focus:ring-[#1e9975]/20 transition-all duration-300 pl-12 text-base backdrop-blur-sm">
                                        <i class="fas fa-envelope absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-400 text-lg"></i>
                                    </div>
                                    
                                    <div class="relative">
                                        <input type="text" placeholder="Вашето име (по желание)" class="w-full px-4 py-4 bg-white/10 border-2 border-white/20 rounded-xl text-white placeholder-gray-400 focus:outline-none focus:border-[#1e9975] focus:ring-4 focus:ring-[#1e9975]/20 transition-all duration-300 pl-12 text-base backdrop-blur-sm">
                                        <i class="fas fa-user absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-400 text-lg"></i>
                                    </div>
                                </div>
                                
                                <button class="group w-full px-8 py-4 bg-gradient-to-r from-[#1683ab] to-[#1e9975] hover:from-[#147a9a] hover:to-[#1a8a6a] text-white font-bold rounded-xl transition-all duration-300 transform hover:-translate-y-1 hover:shadow-2xl hover:shadow-[#1e9975]/30 flex items-center justify-center text-base relative overflow-hidden">
                                    <div class="absolute inset-0 bg-gradient-to-r from-[#1e9975] to-[#1683ab] opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                    <span class="relative z-10 flex items-center">
                                        <i class="fas fa-paper-plane mr-3 group-hover:animate-bounce"></i>
                                        Абониране за бюлетина
                                    </span>
                                </button>
                                
                                <p class="text-sm text-gray-400 text-center">
                                    <i class="fas fa-shield-alt text-[#1683ab] mr-2"></i>
                                    Вашите данни са защитени и никога няма да бъдат споделени
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Success Stats -->
                <div class="mt-12 grid grid-cols-3 gap-8 text-center">
                    <div class="group">
                        <div class="text-3xl font-bold text-[#1683ab] mb-2 group-hover:scale-110 transition-transform duration-300">10K+</div>
                        <div class="text-gray-400">Абонирани читатели</div>
                    </div>
                    <div class="group">
                        <div class="text-3xl font-bold text-[#1e9975] mb-2 group-hover:scale-110 transition-transform duration-300">99%</div>
                        <div class="text-gray-400">Доволни клиенти</div>
                    </div>
                    <div class="group">
                        <div class="text-3xl font-bold text-[#1683ab] mb-2 group-hover:scale-110 transition-transform duration-300">24/7</div>
                        <div class="text-gray-400">Поддръжка</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>

    <!-- Custom CSS for Animated Gradients -->
    <style>
        .overlay {
            position: absolute;
            top: 0;
            left: 0px;
            right: 0px;
            height: 100%;
            background: linear-gradient(180deg, transparent 44.24%, #121212);
            z-index: 15;
        }
        
        .header-animation {
            width: 100%;
            height: 1160px;
            position: absolute;
            top: -180px;
            left: 0;
            z-index: 1;
        }
        
        .header-animation .animation {
            position: absolute;
            right: 0;
            top: 0;
            width: 100%;
            height: 100%;
        }
        
        .header-animation .animation-orange {
            opacity: 1;
            background: radial-gradient(112.01% 306.85% at 116.95% -15.43%,rgb(5, 30, 39) 0, transparent 100%);
            animation: orangeAnimation 16s linear infinite;
        }
        
        .header-animation .animation-black {
            background: linear-gradient(0deg, #06171e, transparent);
        }
        
        .header-animation .animation-gray {
            opacity: 0;
            animation: grayAnimation 16s linear infinite;
            background: radial-gradient(169.22% 169.22% at 50% -45.86%,rgb(15, 81, 61) 0, transparent 100%);
        }
        
        .header-animation .animation-blue {
            opacity: 0;
            animation: blueAnimation 16s linear infinite;
            background: radial-gradient(111.77% 306.21% at -17.34% -6.72%, #0a1a22 0, transparent 100%);
        }
        
        @keyframes orangeAnimation {
            25% {
                opacity: 0;
            }
            50% {
                opacity: 0;
            }
            75% {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
        
        @keyframes blueAnimation {
            25% {
                opacity: 0.5;
            }
            50% {
                opacity: 1;
            }
            75% {
                opacity: 0.5;
            }
            to {
                opacity: 0;
            }
        }
        
        @keyframes grayAnimation {
            25% {
                opacity: 1;
            }
            50% {
                opacity: 0;
            }
            75% {
                opacity: 1;
            }
            to {
                opacity: 0;
            }
        }
    </style>
</body>
</html>
