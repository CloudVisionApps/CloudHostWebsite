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
                    Изживейте перфектното съчетание от производителност, сигурност и надеждност, което ни отличава от конкуренцията.
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
    <section id="plans" class="section-dark bg-dark">
        <div class="">
            <div class="text-center mb-20">
                <h2 class="text-4xl md:text-5xl font-bold text-primary-green mb-6">
                    Изберете вашия <span class="text-gradient-dark">План</span>
                </h2>
                <p class="text-xl text-secondary max-w-3xl mx-auto">
                    Изберете перфектното хостинг решение, което отговаря на нуждите и бюджета на вашия бизнес.
                </p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">
                <!-- Starter Plan -->
                <div class="pricing-card-clean text-center p-8 hover-lift">
                    <div class="mb-6">
                        <h3 class="text-2xl font-bold text-primary mb-2"><?php echo_config('plans.starter.name'); ?></h3>
                        <div class="text-4xl font-bold text-primary mb-2"><?php echo_config('plans.starter.price'); ?> <?php echo_config('plans.starter.currency'); ?></div>
                        <div class="text-lg text-secondary"><?php echo_config('plans.starter.period'); ?></div>
                    </div>
                    <ul class="space-y-3 mb-8 text-left">
                        <?php foreach (get_config('plans.starter.features') as $feature): ?>
                            <li class="flex items-center"><i class="fas fa-check text-accent-green mr-3"></i><?php echo $feature; ?></li>
                        <?php endforeach; ?>
                    </ul>
                    <button class="w-full btn-clean py-3">
                        Започнете
                    </button>
                </div>

                <!-- Professional Plan -->
                <div class="pricing-card-clean popular text-center p-8 hover-lift">
                    <div class="bg-primary text-white text-sm font-semibold px-4 py-2 rounded-full inline-block mb-4">
                        Най-популярен
                    </div>
                    <div class="mb-6">
                        <h3 class="text-2xl font-bold text-primary mb-2"><?php echo_config('plans.professional.name'); ?></h3>
                        <div class="text-4xl font-bold text-primary mb-2"><?php echo_config('plans.professional.price'); ?> <?php echo_config('plans.professional.currency'); ?></div>
                        <div class="text-lg text-secondary"><?php echo_config('plans.professional.period'); ?></div>
                    </div>
                    <ul class="space-y-3 mb-8 text-left">
                        <?php foreach (get_config('plans.professional.features') as $feature): ?>
                            <li class="flex items-center"><i class="fas fa-check text-accent-green mr-3"></i><?php echo $feature; ?></li>
                        <?php endforeach; ?>
                    </ul>
                    <button class="w-full btn-clean py-3">
                        Започнете
                    </button>
                </div>

                <!-- Enterprise Plan -->
                <div class="pricing-card-clean text-center p-8 hover-lift">
                    <div class="mb-6">
                        <h3 class="text-2xl font-bold text-primary mb-2"><?php echo_config('plans.enterprise.name'); ?></h3>
                        <div class="text-4xl font-bold text-primary mb-2"><?php echo_config('plans.enterprise.price'); ?> <?php echo_config('plans.enterprise.currency'); ?></div>
                        <div class="text-lg text-secondary"><?php echo_config('plans.enterprise.period'); ?></div>
                    </div>
                    <ul class="space-y-3 mb-8 text-left">
                        <?php foreach (get_config('plans.enterprise.features') as $feature): ?>
                            <li class="flex items-center"><i class="fas fa-check text-accent-green mr-3"></i><?php echo $feature; ?></li>
                        <?php endforeach; ?>
                    </ul>
                    <button class="w-full btn-clean py-3">
                        Започнете
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
