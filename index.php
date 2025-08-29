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
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="min-h-screen">
    <?php include 'header.php'; ?>

    <!-- Hero Section -->
    <section class="relative min-h-screen py-24 overflow-hidden">
        <!-- Animated Gradient Background -->
        <div class="header-animation">
            <div class="animation animation-orange"></div>
            <div class="animation animation-black"></div>
            <div class="animation animation-gray"></div>
            <div class="animation animation-blue"></div>
        </div>
        
        <!-- Overlay -->
        <div class="overlay"></div>
      
        <!-- Content Container --> 
        <div class="relative z-20 max-w-7xl mx-auto px-6 sm:px-8 lg:px-12 py-32">
            <div class="grid lg:grid-cols-2 gap-32 items-center">
                <!-- Left Side - Enhanced Content -->
                <div class="space-y-10">
               
                    <!-- Enhanced Headline -->
                    <div class="space-y-8">
                        <h1 class="text-4xl lg:text-6xl xl:text-6xl font-bold leading-tight tracking-tight">
                            <span class="text-white drop-shadow-lg">Най-доброто</span>
                            <br>
                            <span class="bg-gradient-to-r from-[#1683ab] to-[#1e9975] bg-clip-text text-transparent drop-shadow-lg">хостинг решение</span>
                            <br>
                            <span class="text-white drop-shadow-lg">за вашия бизнес</span>
                        </h1>
                        <p class="text-xl lg:text-2xl text-gray-200 leading-relaxed max-w-2xl font-medium">
                            Професионален хостинг с 99.9% uptime, 24/7 поддръжка и най-новите технологии за вашия уебсайт.
                        </p>
                    </div>
                    
            
                    
                    <!-- Enhanced CTA Buttons -->
                    <div class="flex flex-col sm:flex-row gap-6">
                        <button class="px-8 py-4 bg-gradient-to-r from-[#1683ab] to-[#1e9975] hover:from-[#147a9a] hover:to-[#1a8a6a] text-white font-bold text-lg rounded-2xl transition-all duration-300 transform hover:-translate-y-1 hover:shadow-xl hover:shadow-[#1e9975]/30 flex items-center justify-center gap-3 group shadow-lg">
                            <span>Започнете сега</span>
                            <i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform duration-300 text-xl"></i>
                        </button>
                        <button class="px-8 py-4 bg-white/15 hover:bg-white/25 text-white font-bold text-lg rounded-2xl border-2 border-[#1683ab]/40 transition-all duration-300 transform hover:-translate-y-1 backdrop-blur-sm flex items-center justify-center gap-3 group shadow-lg">
                            <i class="fas fa-play text-[#1e9975] text-xl"></i>
                            <span>Вижте демо</span>
                        </button>
                    </div>
                    
                    <!-- Enhanced Trust Indicators -->
                    <div class="flex items-center space-x-8 pt-8">
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-shield-alt text-[#1e9975] text-lg"></i>
                            <span class="text-sm text-gray-300 font-medium">SSL защита</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-database text-[#1683ab] text-lg"></i>
                            <span class="text-sm text-gray-300 font-medium">SSD дискове</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-globe text-[#1e9975] text-lg"></i>
                            <span class="text-sm text-gray-300 font-medium">CDN включен</span>
                        </div>
                    </div>
                </div>
                
                <!-- Right Side - Enhanced Domain Search Form -->
                <div class="relative">
                    <!-- Enhanced Form Container -->
                    <div class="relative">
                        <!-- Complex Background System -->
                        <div class="absolute inset-0">
                            <!-- Primary Background Shape -->
                            <div class="absolute inset-0 bg-[#1683ab]/8 rounded-[2rem] blur-lg"></div>
                            
                            <!-- Secondary Background Elements -->
                            <div class="absolute -top-3 -right-3 w-20 h-20 bg-[#1683ab]/8 rounded-full blur-xl"></div>
                            <div class="absolute -bottom-3 -left-3 w-16 h-16 bg-[#1e9975]/8 rounded-full blur-xl"></div>
                            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-24 h-24 bg-[#1683ab]/5 rounded-full blur-2xl"></div>
                        </div>
                        
                        <!-- Main Form Container -->
                        <div class="relative rounded-[2.5rem] p-[2px] animate-border-gradient overflow-hidden shadow-2xl">
                            <!-- Inner Content Box -->
                            <div class="relative bg-gradient-to-br from-[#0a0a0a]/5 to-[#1a1a1a]/10 backdrop-blur-xl rounded-[2.4rem] p-10 overflow-hidden">
                            <!-- Enhanced Background Pattern -->
                            <div class="absolute inset-0 opacity-20">
                                <div class="absolute top-4 right-4 w-24 h-24 bg-gradient-to-r from-[#1683ab]/30 to-[#1e9975]/30 rounded-full blur-xl"></div>
                                <div class="absolute bottom-4 left-4 w-20 h-20 bg-gradient-to-r from-[#1e9975]/30 to-[#1683ab]/30 rounded-full blur-xl"></div>
                                <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-32 h-32 bg-gradient-to-r from-[#1683ab]/20 to-[#1e9975]/20 rounded-full blur-2xl"></div>
                            </div>
                            
                            <!-- Enhanced Floating Elements -->
                            <div class="absolute inset-0 pointer-events-none">
                                <div class="absolute top-6 right-6 w-2 h-2 bg-[#1683ab] rounded-full animate-pulse"></div>
                                <div class="absolute bottom-6 left-6 w-1.5 h-1.5 bg-[#1e9975] rounded-full animate-pulse" style="animation-delay: 1s;"></div>
                                <div class="absolute top-1/3 left-6 w-1 h-1 bg-[#1683ab]/60 rounded-full animate-pulse" style="animation-delay: 2s;"></div>
                                <div class="absolute top-2/3 right-8 w-1.5 h-1.5 bg-[#1e9975]/60 rounded-full animate-pulse" style="animation-delay: 3s;"></div>
                            </div>
                            
                            <!-- Enhanced Form Header -->
                            <div class="text-center mb-8 relative">
                               
                                <h3 class="text-3xl font-bold text-white mb-3">Намерете своя домейн</h3>
                                <p class="text-white/80 text-base leading-relaxed max-w-sm mx-auto">Проверете наличността на вашия идеален домейн и започнете онлайн пътуването</p>
                            </div>
                            
                            <!-- Enhanced Domain Search Form -->
                            <form class="space-y-6 relative">
                                <div class="relative group">
                                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                        <i class="fas fa-globe text-white/70 group-hover:text-[#1683ab] transition-colors duration-300 text-lg"></i>
                                    </div>
                                    <input 
                                        type="text" 
                                        placeholder="Въведете име на домейн (например: mywebsite)" 
                                        class="w-full pl-12 pr-4 py-4 bg-white/10 border-2 border-white/20 rounded-2xl text-white placeholder-white/50 focus:outline-none focus:ring-4 focus:ring-[#1683ab]/20 focus:border-[#1683ab] transition-all duration-300 text-base group-hover:border-[#1683ab]/40 group-hover:bg-white/15"
                                    >
                                    <div class="absolute inset-y-0 right-3 flex items-center">
                                        <div class="w-2 h-2 bg-[#1e9975] rounded-full animate-pulse"></div>
                                    </div>
                                </div>
                                
                                <button 
                                    type="submit" 
                                    class="w-full bg-gradient-to-r from-[#1683ab] to-[#1e9975] hover:from-[#147a9a] hover:to-[#1a8a6a] text-white font-bold py-4 rounded-2xl transition-all duration-300 transform hover:-translate-y-1 hover:scale-[1.02] flex items-center justify-center gap-3 text-lg relative overflow-hidden group shadow-xl"
                                >
                                    <div class="absolute inset-0 bg-gradient-to-r from-[#1a8a6a] to-[#147a9a] opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                    <span class="relative z-10 flex items-center gap-3">
                                        <i class="fas fa-search text-xl"></i>
                                        Провери наличност
                                    </span>
                                </button>
                            </form>
                            
                            <!-- Enhanced TLD Selection -->
                            <div class="mt-8 pt-6 border-t border-white/20 relative">
                                <p class="text-sm text-white/80 mb-6 text-center font-semibold uppercase tracking-wide">Популярни домейни:</p>
                                <div class="grid grid-cols-3 gap-4">
                                    <div class="group cursor-pointer">
                                        <div class="bg-gradient-to-br from-white/10 to-white/5 hover:from-white/20 hover:to-white/10 rounded-2xl p-3 text-center transition-all duration-500 hover:scale-110 hover:-translate-y-1 border border-white/20 relative overflow-hidden group-hover:border-[#1683ab]/50 group-hover:shadow-xl group-hover:shadow-[#1683ab]/20">
                                            <div class="absolute inset-0 bg-gradient-to-r from-[#1683ab]/20 to-[#1e9975]/20 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                                            <div class="absolute -top-2 -right-2 w-4 h-4 bg-[#1683ab]/30 rounded-full group-hover:scale-150 transition-all duration-500"></div>
                                            <div class="relative z-10">
                                                <div class="text-xl font-bold text-white group-hover:text-[#1683ab] transition-colors duration-300 mb-2">.com</div>
                                                <div class="text-sm text-white/80 font-medium">15лв/година</div>
                                                <div class="text-xs text-[#1683ab]/70 mt-1 font-medium">Най-популярен</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="group cursor-pointer">
                                        <div class="bg-gradient-to-br from-white/10 to-white/5 hover:from-white/20 hover:to-white/10 rounded-2xl p-3 text-center transition-all duration-500 hover:scale-110 hover:-translate-y-1 border border-white/20 relative overflow-hidden group-hover:border-[#1e9975]/50 group-hover:shadow-xl group-hover:shadow-[#1e9975]/20">
                                            <div class="absolute inset-0 bg-gradient-to-r from-[#1e9975]/20 to-[#1683ab]/20 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                                            <div class="absolute -top-2 -right-2 w-4 h-4 bg-[#1e9975]/30 rounded-full group-hover:scale-150 transition-all duration-500"></div>
                                            <div class="relative z-10">
                                                <div class="text-xl font-bold text-white group-hover:text-[#1e9975] transition-colors duration-300 mb-2">.bg</div>
                                                <div class="text-sm text-white/80 font-medium">12лв/година</div>
                                                <div class="text-xs text-[#1e9975]/70 mt-1 font-medium">Български</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="group cursor-pointer">
                                        <div class="bg-gradient-to-br from-white/10 to-white/5 hover:from-white/20 hover:to-white/10 rounded-2xl p-3 text-center transition-all duration-500 hover:scale-110 hover:-translate-y-1 border border-white/20 relative overflow-hidden group-hover:border-[#1683ab]/50 group-hover:shadow-xl group-hover:shadow-[#1e9975]/20">
                                            <div class="absolute inset-0 bg-gradient-to-r from-[#1683ab]/20 to-[#1e9975]/20 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                                            <div class="absolute -top-2 -right-2 w-4 h-4 bg-[#1683ab]/30 rounded-full group-hover:scale-150 transition-all duration-500"></div>
                                            <div class="relative z-10">
                                                <div class="text-xl font-bold text-white group-hover:text-[#1683ab] transition-colors duration-300 mb-2">.net</div>
                                                <div class="text-sm text-white/80 font-medium">18лв/година</div>
                                                <div class="text-xs text-[#1683ab]/70 mt-1 font-medium">Професионален</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="group cursor-pointer">
                                        <div class="bg-gradient-to-br from-white/10 to-white/5 hover:from-white/20 hover:to-white/10 rounded-2xl p-3 text-center transition-all duration-500 hover:scale-110 hover:-translate-y-1 border border-white/20 relative overflow-hidden group-hover:border-[#1e9975]/50 group-hover:shadow-xl group-hover:shadow-[#1e9975]/20">
                                            <div class="absolute inset-0 bg-gradient-to-r from-[#1e9975]/20 to-[#1683ab]/20 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                                            <div class="absolute -top-2 -right-2 w-4 h-4 bg-[#1e9975]/30 rounded-full group-hover:scale-150 transition-all duration-500"></div>
                                            <div class="relative z-10">
                                                <div class="text-xl font-bold text-white group-hover:text-[#1e9975] transition-colors duration-300 mb-2">.org</div>
                                                <div class="text-sm text-white/80 font-medium">20лв/година</div>
                                                <div class="text-xs text-[#1e9975]/70 mt-1 font-medium">Организации</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="group cursor-pointer">
                                        <div class="bg-gradient-to-br from-white/10 to-white/5 hover:from-white/20 hover:to-white/10 rounded-2xl p-3 text-center transition-all duration-500 hover:scale-110 hover:-translate-y-1 border border-white/20 relative overflow-hidden group-hover:border-[#1683ab]/50 group-hover:shadow-xl group-hover:shadow-[#1e9975]/20">
                                            <div class="absolute inset-0 bg-gradient-to-r from-[#1683ab]/20 to-[#1e9975]/20 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                                            <div class="absolute -top-2 -right-2 w-4 h-4 bg-[#1683ab]/30 rounded-full group-hover:scale-150 transition-all duration-500"></div>
                                            <div class="relative z-10">
                                                <div class="text-xl font-bold text-white group-hover:text-[#1683ab] transition-colors duration-300 mb-2">.eu</div>
                                                <div class="text-sm text-white/80 font-medium">16лв/година</div>
                                                <div class="text-xs text-[#1683ab]/70 mt-1 font-medium">Европейски</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="group cursor-pointer">
                                        <div class="bg-gradient-to-br from-white/10 to-white/5 hover:from-white/20 hover:to-white/10 rounded-2xl p-3 text-center transition-all duration-500 hover:scale-110 hover:-translate-y-1 border border-white/20 relative overflow-hidden group-hover:border-[#1683ab]/50 group-hover:shadow-xl group-hover:shadow-[#1e9975]/20">
                                            <div class="absolute inset-0 bg-gradient-to-r from-[#1e9975]/20 to-[#1683ab]/20 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                                            <div class="absolute -top-2 -right-2 w-4 h-4 bg-[#1e9975]/30 rounded-full group-hover:scale-150 transition-all duration-500"></div>
                                            <div class="relative z-10">
                                                <div class="text-xl font-bold text-white group-hover:text-[#1e9975] transition-colors duration-300 mb-2">.info</div>
                                                <div class="text-sm text-white/80 font-medium">14лв/година</div>
                                                <div class="text-xs text-[#1e9975]/70 mt-1 font-medium">Информационен</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Enhanced Trust Indicators -->
                            <div class="mt-8 pt-6 border-t border-white/20">
                                <div class="flex items-center justify-center space-x-8 text-white/80 text-sm">
                                    <div class="flex items-center group">
                                        <div class="w-6 h-6 bg-gradient-to-r from-[#1e9975]/30 to-[#1683ab]/30 rounded-full flex items-center justify-center mr-3 group-hover:scale-110 transition-all duration-300">
                                            <i class="fas fa-shield-alt text-[#1e9975] text-sm"></i>
                                        </div>
                                        <span class="group-hover:text-white transition-colors duration-300 font-medium">SSL включен</span>
                                    </div>
                                    <div class="flex items-center justify-center group">
                                        <div class="w-6 h-6 bg-gradient-to-r from-[#1683ab]/30 to-[#1e9975]/30 rounded-full flex items-center justify-center mr-3 group-hover:scale-110 transition-all duration-300">
                                            <i class="fas fa-clock text-[#1683ab] text-sm"></i>
                                        </div>
                                        <span class="group-hover:text-white transition-colors duration-300 font-medium">Моментална регистрация</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Migration Section -->
    <section class="py-32 relative overflow-hidden ">
        <!-- Enhanced Background Pattern -->
        <div class="absolute inset-0">
            <!-- Animated Circles -->
            <div class="absolute top-20 left-20 w-40 h-40 border border-[#1683ab]/20 rounded-full animate-pulse"></div>
            <div class="absolute top-40 right-32 w-32 h-32 border border-[#1e9975]/20 rounded-full animate-pulse" style="animation-delay: 1s;"></div>
            <div class="absolute bottom-32 left-1/4 w-24 h-24 border border-[#1683ab]/15 rounded-full animate-pulse" style="animation-delay: 2s;"></div>
            <div class="absolute top-1/2 left-1/3 w-36 h-36 border border-[#1e9975]/15 rounded-full animate-pulse" style="animation-delay: 0.5s;"></div>
            <div class="absolute bottom-20 right-1/4 w-28 h-28 border border-[#1683ab]/15 rounded-full animate-pulse" style="animation-delay: 1.5s;"></div>
            
            <!-- Floating Geometric Shapes -->
            <div class="absolute top-16 right-1/4 w-16 h-16 border border-[#1e9975]/20 rotate-45 animate-pulse" style="animation-delay: 0.8s;"></div>
            <div class="absolute bottom-16 left-16 w-12 h-12 border border-[#1683ab]/20 rotate-45 animate-pulse" style="animation-delay: 2.5s;"></div>
        </div>
        
        <!-- Enhanced Floating Tech Icons -->
        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute top-32 right-20 text-white/15 animate-bounce group" style="animation-delay: 0s;">
                <div class="relative">
                    <i class="fas fa-database text-5xl group-hover:scale-110 transition-transform duration-300"></i>
                    <div class="absolute -top-2 -right-2 w-3 h-3 bg-[#1683ab] rounded-full animate-ping"></div>
                </div>
            </div>
            <div class="absolute top-1/3 left-16 text-white/15 animate-bounce group" style="animation-delay: 1s;">
                <div class="relative">
                    <i class="fas fa-code text-4xl group-hover:scale-110 transition-transform duration-300"></i>
                    <div class="absolute -top-2 -right-2 w-3 h-3 bg-[#1e9975] rounded-full animate-ping"></div>
                </div>
            </div>
            <div class="absolute bottom-1/3 right-1/4 text-white/15 animate-bounce group" style="animation-delay: 2s;">
                <div class="relative">
                    <i class="fas fa-server text-5xl group-hover:scale-110 transition-transform duration-300"></i>
                    <div class="absolute -top-2 -right-2 w-3 h-3 bg-[#1683ab] rounded-full animate-ping"></div>
                </div>
            </div>
            <div class="absolute top-1/4 left-1/3 text-white/10 animate-bounce group" style="animation-delay: 1.5s;">
                <div class="relative">
                    <i class="fas fa-cloud text-3xl group-hover:scale-110 transition-transform duration-300"></i>
                    <div class="absolute -top-2 -right-2 w-2 h-2 bg-[#1e9975] rounded-full animate-ping"></div>
                </div>
            </div>
        </div>
        
        <!-- Enhanced Gradient Overlay -->
        <div class="absolute inset-0 bg-gradient-to-b from-transparent via-[#1683ab]/8 to-[#1e9975]/8"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <!-- Header Section -->
            <div class="text-center mb-20">
                <div class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-[#1683ab] to-[#1e9975] text-white text-sm font-medium rounded-full mb-8 shadow-2xl">
                    <i class="fas fa-exchange-alt mr-3 text-lg"></i>
                    Безплатна миграция
                </div>
                <h2 class="text-5xl md:text-6xl font-bold text-white mb-8 leading-tight">
                    Преместете сайта си <br />
                    <span class="bg-gradient-to-r from-[#1683ab] to-[#1e9975] bg-clip-text text-transparent">безплатно</span> при нас
                </h2>
                <p class="text-2xl text-gray-300 max-w-4xl mx-auto leading-relaxed">
                    Нашият експертен екип ще премести вашия сайт от текущия хостинг безплатно. 
                    <span class="text-white font-semibold">Без прекъсване, без проблеми, без скрити такси.</span>
                </p>
            </div>
            
            <div class="grid lg:grid-cols-2 gap-20 items-center">
                <!-- Left Side - Enhanced Content -->
                <div class="text-center lg:text-left">
                    <!-- Migration Benefits with Enhanced Icons -->
                    <div class="space-y-6 mb-12">
                        <div class="group flex items-center text-gray-300 hover:text-white transition-all duration-300">
                            <div class="w-12 h-12 bg-gradient-to-r from-[#1683ab]/20 to-[#1e9975]/20 rounded-2xl flex items-center justify-center mr-6 group-hover:bg-gradient-to-r group-hover:from-[#1683ab]/40 group-hover:to-[#1e9975]/40 transition-all duration-500 transform group-hover:scale-110">
                                <i class="fas fa-database text-[#1e9975] text-xl group-hover:text-white transition-colors duration-300"></i>
                            </div>
                            <div class="text-left">
                                <div class="font-semibold text-lg mb-1">Безплатна миграция</div>
                                <div class="text-gray-400">На всички файлове и бази данни</div>
                            </div>
                        </div>
                        
                        <div class="group flex items-center text-gray-300 hover:text-white transition-all duration-300">
                            <div class="w-12 h-12 bg-gradient-to-r from-[#1e9975]/20 to-[#1683ab]/20 rounded-2xl flex items-center justify-center mr-6 group-hover:bg-gradient-to-r group-hover:from-[#1e9975]/40 group-hover:to-[#1683ab]/40 transition-all duration-500 transform group-hover:scale-110">
                                <i class="fas fa-clock text-[#1683ab] text-xl group-hover:text-white transition-colors duration-300"></i>
                            </div>
                            <div class="text-left">
                                <div class="font-semibold text-lg mb-1">Нулево време на прекъсване</div>
                                <div class="text-gray-400">Вашият сайт работи непрекъснато</div>
                            </div>
                        </div>
                        
                        <div class="group flex items-center text-gray-300 hover:text-white transition-all duration-300">
                            <div class="w-12 h-12 bg-gradient-to-r from-[#1683ab]/20 to-[#1e9975]/20 rounded-2xl flex items-center justify-center mr-6 group-hover:bg-gradient-to-r group-hover:from-[#1683ab]/40 group-hover:to-[#1e9975]/40 transition-all duration-500 transform group-hover:scale-110">
                                <i class="fas fa-cogs text-[#1e9975] text-xl group-hover:text-white transition-colors duration-300"></i>
                            </div>
                            <div class="text-left">
                                <div class="font-semibold text-lg mb-1">Тестване и оптимизация</div>
                                <div class="text-gray-400">След миграцията за максимална производителност</div>
                            </div>
                        </div>
                        
                        <div class="group flex items-center text-gray-300 hover:text-white transition-all duration-300">
                            <div class="w-12 h-12 bg-gradient-to-r from-[#1e9975]/20 to-[#1683ab]/20 rounded-2xl flex items-center justify-center mr-6 group-hover:bg-gradient-to-r group-hover:from-[#1e9975]/40 group-hover:to-[#1683ab]/40 transition-all duration-500 transform group-hover:scale-110">
                                <i class="fas fa-headset text-[#1683ab] text-xl group-hover:text-white transition-colors duration-300"></i>
                            </div>
                            <div class="text-left">
                                <div class="font-semibold text-lg mb-1">24/7 поддръжка</div>
                                <div class="text-gray-400">По време на целия процес</div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Enhanced CTA Buttons -->
                    <div class="flex flex-col sm:flex-row gap-6">
                        <a href="#contact" class="group bg-gradient-to-r from-[#1683ab] to-[#1e9975] hover:from-[#147a9a] hover:to-[#1a8a6a] text-white text-xl px-10 py-5 rounded-2xl font-bold shadow-2xl hover:shadow-[#1e9975]/25 transition-all duration-500 transform hover:-translate-y-2 flex items-center justify-center relative overflow-hidden">
                            <div class="absolute inset-0 bg-gradient-to-r from-[#1e9975] to-[#1683ab] opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                            <span class="relative z-10 flex items-center">
                                <i class="fas fa-rocket mr-4 text-2xl group-hover:animate-bounce"></i>
                                Започнете миграцията
                            </span>
                        </a>
                        <a href="#migration-info" class="group border-2 border-white/30 text-white hover:bg-white/10 hover:border-white/50 text-xl px-10 py-5 rounded-2xl font-bold transition-all duration-500 flex items-center justify-center backdrop-blur-sm hover:shadow-2xl">
                            <i class="fas fa-info-circle mr-4 text-2xl group-hover:scale-110 transition-transform duration-300"></i>
                            Научете повече
                        </a>
                    </div>
                    
                    <!-- Trust Indicators -->
                    <div class="mt-12 pt-8 border-t border-white/10">
                        <div class="flex items-center justify-center lg:justify-start space-x-8 text-gray-400">
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
                
                <!-- Right Side - Enhanced Visual -->
                <div class="relative">
                    <!-- Main Migration Icon with Enhanced Effects -->
                    <div class="relative mx-auto lg:mx-0">
                        <!-- Main Container with Better Design -->
                        <div class="relative w-96 h-96 mx-auto lg:mx-0">
                            <!-- Central Migration Icon -->
                            <div class="absolute inset-0 flex items-center justify-center  group">
                                <div class="absolute inset-0  animate-pulse"></div>
                                
                            
                            </div>
                            
                            <!-- New Migration Concept: Data Flow Visualization -->
                            <div class="relative w-full h-full ">
                                <!-- Central Migration Hub -->
                                <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-32 h-32 bg-gradient-to-br from-[#1683ab] to-[#1e9975] rounded-full flex items-center justify-center shadow-[0_0_80px_rgba(22,131,171,0.6),0_0_120px_rgba(30,153,117,0.4)] group-hover:scale-110 transition-all duration-500">
                                    <i class="fas fa-exchange-alt text-white text-4xl group-hover:rotate-180 transition-all duration-700"></i>
                                </div>
                                
                                <!-- Circular Data Flow Lines -->
                                <svg class="absolute inset-0 w-full h-full" viewBox="0 0 288 288">
                                    <!-- Circular flow paths around the center -->
                                    <path d="M144 48 A 96 96 0 0 1 240 144" stroke="url(#gradient1)" stroke-width="3" fill="none" stroke-dasharray="8,4" class="animate-dash"/>
                                    <path d="M240 144 A 96 96 0 0 1 144 240" stroke="url(#gradient2)" stroke-width="3" fill="none" stroke-dasharray="8,4" class="animate-dash" style="animation-delay: 0.5s"/>
                                    <path d="M144 240 A 96 96 0 0 1 48 144" stroke="url(#gradient3)" stroke-width="3" fill="none" stroke-dasharray="8,4" class="animate-dash" style="animation-delay: 1s"/>
                                    <path d="M48 144 A 96 96 0 0 1 144 48" stroke="url(#gradient4)" stroke-width="3" fill="none" stroke-dasharray="8,4" class="animate-dash" style="animation-delay: 1.5s"/>
                                    
                                    <!-- Gradient definitions -->
                                    <defs>
                                        <linearGradient id="gradient1" x1="0%" y1="0%" x2="100%" y2="100%">
                                            <stop offset="0%" style="stop-color:#1e9975;stop-opacity:0.8"/>
                                            <stop offset="100%" style="stop-color:#1683ab;stop-opacity:0.8"/>
                                        </linearGradient>
                                        <linearGradient id="gradient2" x1="0%" y1="0%" x2="100%" y2="100%">
                                            <stop offset="0%" style="stop-color:#1683ab;stop-opacity:0.8"/>
                                            <stop offset="100%" style="stop-color:#1e9975;stop-opacity:0.8"/>
                                        </linearGradient>
                                        <linearGradient id="gradient3" x1="0%" y1="0%" x2="100%" y2="100%">
                                            <stop offset="0%" style="stop-color:#1e9975;stop-opacity:0.6"/>
                                            <stop offset="100%" style="stop-color:#1683ab;stop-opacity:0.6"/>
                                        </linearGradient>
                                        <linearGradient id="gradient4" x1="0%" y1="0%" x2="100%" y2="100%">
                                            <stop offset="0%" style="stop-color:#1683ab;stop-opacity:0.7"/>
                                            <stop offset="100%" style="stop-color:#1e9975;stop-opacity:0.7"/>
                                        </linearGradient>
                                    </defs>
                                </svg>
                                
                                <!-- Flow Nodes -->
                                <div class="absolute top-[36px] left-1/2 transform -translate-x-1/2 w-12 h-12 bg-[#1e9975] rounded-full flex items-center justify-center shadow-lg">
                                    <i class="fas fa-database text-white text-sm"></i>
                                </div>
                                
                                <div class="absolute bottom-[36px] left-1/2 transform -translate-x-1/2 w-12 h-12 bg-[#1683ab] rounded-full flex items-center justify-center shadow-lg">
                                    <i class="fas fa-server text-white text-sm"></i>
                                </div>
                                
                                <div class="absolute top-1/2 right-[36px] transform -translate-y-1/2 w-12 h-12 bg-[#1e9975] rounded-full flex items-center justify-center shadow-lg">
                                    <i class="fas fa-cloud text-white text-sm"></i>
                                </div>
                                
                                <div class="absolute top-1/2 left-[36px] transform -translate-y-1/2 w-12 h-12 bg-[#1683ab] rounded-full flex items-center justify-center shadow-lg">
                                    <i class="fas fa-code text-white text-sm"></i>
                                </div>
                            </div>
                            
                         
                        </div>
                    </div>
                    
                    <!-- Enhanced Migration Process Steps -->
                    <div class="mt-16 space-y-8">
                        <div class="flex items-center text-gray-300 group hover:text-white transition-all duration-300 p-4 rounded-2xl hover:bg-white/5">
                            <div class="relative">
                                <div class="w-20 h-20 bg-gradient-to-r from-[#1683ab]/20 to-[#1e9975]/20 rounded-2xl flex items-center justify-center mr-6 group-hover:bg-gradient-to-r group-hover:from-[#1683ab]/40 group-hover:to-[#1e9975]/40 transition-all duration-500 transform group-hover:scale-110 shadow-lg">
                                    <span class="text-[#1683ab] font-bold text-3xl group-hover:text-white transition-colors duration-300">1</span>
                                </div>
                            </div>
                            <div class="flex-1">
                                <div class="font-bold text-white text-xl mb-2 group-hover:text-[#1683ab] transition-colors duration-300">Свържете се с нас</div>
                                <div class="text-gray-400 group-hover:text-gray-300 transition-colors duration-300">Обяснете текущия хостинг и нуждите</div>
                            </div>
                            <div class="opacity-0 group-hover:opacity-100 transition-all duration-300 transform translate-x-4 group-hover:translate-x-0">
                                <i class="fas fa-arrow-right text-[#1683ab] text-xl"></i>
                            </div>
                        </div>
                        
                        <div class="flex items-center text-gray-300 group hover:text-white transition-all duration-300 p-4 rounded-2xl hover:bg-white/5">
                            <div class="relative">
                                <div class="w-20 h-20 bg-gradient-to-r from-[#1e9975]/20 to-[#1683ab]/20 rounded-2xl flex items-center justify-center mr-6 group-hover:bg-gradient-to-r group-hover:from-[#1e9975]/40 group-hover:to-[#1683ab]/40 transition-all duration-500 transform group-hover:scale-110 shadow-lg">
                                    <span class="text-[#1e9975] font-bold text-3xl group-hover:text-white transition-colors duration-300">2</span>
                                </div>
                            </div>
                            <div class="flex-1">
                                <div class="font-bold text-white text-xl mb-2 group-hover:text-[#1e9975] transition-colors duration-300">Нашият екип действа</div>
                                <div class="text-gray-400 group-hover:text-gray-300 transition-colors duration-300">Безопасно преместване с експертна грижа</div>
                            </div>
                            <div class="opacity-0 group-hover:opacity-100 transition-all duration-300 transform translate-x-4 group-hover:translate-x-0">
                                <i class="fas fa-cogs text-[#1e9975] text-xl group-hover:animate-spin"></i>
                            </div>
                        </div>
                        
                        <div class="flex items-center text-gray-300 group hover:text-white transition-all duration-300 p-4 rounded-2xl hover:bg-white/5">
                            <div class="relative">
                                <div class="w-20 h-20 bg-gradient-to-r from-[#1683ab]/20 to-[#1e9975]/20 rounded-2xl flex items-center justify-center mr-6 group-hover:bg-gradient-to-r group-hover:from-[#1683ab]/40 group-hover:to-[#1e9975]/40 transition-all duration-500 transform group-hover:scale-110 shadow-lg">
                                    <span class="text-[#1683ab] font-bold text-3xl group-hover:text-white transition-colors duration-300">3</span>
                                </div>
                            </div>
                            <div class="flex-1">
                                <div class="font-bold text-white text-xl mb-2 group-hover:text-[#1683ab] transition-colors duration-300">Готово!</div>
                                <div class="text-gray-400 group-hover:text-gray-300 transition-colors duration-300">Сайтът работи перфектно на новия хостинг</div>
                            </div>
                            <div class="opacity-0 group-hover:opacity-100 transition-all duration-300 transform translate-x-4 group-hover:translate-x-0">
                                <i class="fas fa-check-circle text-[#1683ab] text-xl group-hover:scale-110"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Pricing Plans -->
    <section id="plans" class="py-24">
        
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
            
                              <!-- Simple Pricing Tabs -->
                <div class="flex justify-center mb-12">
                    <div class="bg-[#1a1a1a] rounded-2xl p-2 border border-[#2a2a2a]">
                        <button id="monthly-tab" class="px-8 py-3 rounded-xl text-white font-semibold transition-all duration-300 bg-gradient-to-r from-[#1683ab] to-[#1e9975] shadow-lg">
                            Месечно
                        </button>
                        <button id="yearly-tab" class="px-8 py-3 rounded-xl text-gray-400 font-semibold transition-all duration-300 hover:text-white ml-2">
                            Годишно
                            <span class="ml-2 px-2 py-1 text-xs bg-[#1e9975] text-white rounded-full">-20%</span>
                        </button>
                    </div>
                </div>
            
            <!-- Pricing Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php foreach (get_config('plans') as $planKey => $plan): ?>
                <div class="<?php echo $planKey === 'professional' ? 'bg-gradient-to-br from-[#1683ab]/10 to-[#1e9975]/10 rounded-3xl p-8 border-2 border-[#1683ab] relative group hover:scale-105 transition-all duration-500' : 'bg-gradient-to-br from-[#1a1a1a] to-[#0f0f0f] rounded-3xl p-8 border border-[#2a2a2a] hover:border-[#1683ab]/50 transition-all duration-500 group hover:scale-105'; ?>">
                    
                    <?php if (isset($plan['popular']) && $plan['popular']): ?>
                    <div class="absolute -top-4 left-1/2 transform -translate-x-1/2">
                        <span class="bg-gradient-to-r from-[#1683ab] to-[#1e9975] text-white px-6 py-2 rounded-full text-sm font-semibold">
                            Най-популярен
                        </span>
                    </div>
                    <?php endif; ?>
                    
                    <div class="text-center mb-8">
                        <h3 class="text-2xl font-bold text-white mb-4"><?php echo $plan['name']; ?></h3>
                        <div class="mb-6">
                            <div class="monthly-price">
                                <span class="text-4xl font-bold text-white" id="<?php echo $planKey; ?>-price"><?php echo $plan['monthly_price']; ?></span>
                                <span class="text-gray-400 ml-2" id="<?php echo $planKey; ?>-period"><?php echo $plan['monthly_period']; ?></span>
                            </div>
                            <div class="yearly-price hidden">
                                <div class="text-center space-y-2">
                                    <div class="text-2xl text-[#1e9975] font-semibold"><?php echo $plan['yearly_discount']; ?> отстъпка</div>
                                    <div class="text-4xl font-bold text-white"><?php echo $plan['yearly_monthly_price']; ?></div>
                                    <div class="text-gray-400"><?php echo $plan['monthly_period']; ?></div>
                                    <div class="text-sm text-gray-300">Общо: <?php echo $plan['yearly_price']; ?> лв/година</div>
                                </div>
                            </div>
                        </div>
                        <p class="text-gray-400"><?php echo $plan['description']; ?></p>
                    </div>
                    
                    <ul class="space-y-4 mb-8">
                        <?php foreach ($plan['features'] as $feature): ?>
                        <li class="flex items-center text-gray-300">
                            <i class="fas fa-check text-[#1e9975] mr-3"></i>
                            <?php echo $feature; ?>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                    
                    <button class="w-full py-4 bg-gradient-to-r from-[#1683ab] to-[#1e9975] text-white font-semibold rounded-2xl hover:from-[#1e9975] hover:to-[#1683ab] transition-all duration-300 transform hover:scale-105 shadow-lg">
                        Избери план
                    </button>
                </div>
                <?php endforeach; ?>
            </div>
            
            <!-- Additional Info -->
            <div class="text-center mt-12">
                <p class="text-gray-400 mb-4">Всички планове включват безплатна миграция и 30-дневна гаранция</p>
                <div class="flex justify-center space-x-6 text-sm text-gray-500">
                    <span><i class="fas fa-shield-alt mr-2"></i>99.9% uptime гаранция</span>
                    <span><i class="fas fa-clock mr-2"></i>24/7 поддръжка</span>
                    <span><i class="fas fa-sync mr-2"></i>Безплатна миграция</span>
                </div>
            </div>



        </div>
    </section>


    <!-- Features Section -->
    <section id="features" class="py-24 bg-gradient-to-br from-[#0a1a22] via-[#0f2a35] to-[#0a1a22]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <div class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-[#1683ab] to-[#1e9975] text-white text-sm font-medium rounded-full mb-6">
                    <i class="fas fa-star mr-2"></i>
                    Нашите предимства
                </div>
                <h2 class="text-4xl md:text-5xl font-bold text-white mb-6 leading-tight">
                    Защо да изберете <span class="bg-gradient-to-r from-[#1683ab] to-[#1e9975] bg-clip-text text-transparent">КлаудХост</span>?
                </h2>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto leading-relaxed">
                    Изживейте перфектното съчетание от производителност, сигурност и надеждност
                </p>
            </div>
            
            <!-- Main Features Grid -->
            <div class="grid md:grid-cols-3 gap-8 mb-16">
                <!-- Performance -->
                <div class="bg-white/5 backdrop-blur-sm rounded-2xl p-8 text-center border border-white/10">
                    <div class="w-16 h-16 bg-gradient-to-r from-[#1683ab] to-[#1e9975] rounded-2xl flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-rocket text-white text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-4">Светкавично бързо</h3>
                    <p class="text-gray-300 leading-relaxed mb-4">
                        SSD инфраструктура с глобална CDN мрежа за оптимална производителност.
                    </p>
                    <div class="text-2xl font-bold text-[#1683ab]">99.9%</div>
                    <div class="text-sm text-gray-400">Гарантирана работа</div>
                </div>
                
                <!-- Security -->
                <div class="bg-white/5 backdrop-blur-sm rounded-2xl p-8 text-center border border-white/10">
                    <div class="w-16 h-16 bg-gradient-to-r from-[#1e9975] to-[#1683ab] rounded-2xl flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-shield-alt text-white text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-4">Корпоративна сигурност</h3>
                    <p class="text-gray-300 leading-relaxed mb-4">
                        DDoS защита, SSL сертификати и ежедневни резервни копия включени.
                    </p>
                    <div class="text-2xl font-bold text-[#1e9975]">256-bit</div>
                    <div class="text-sm text-gray-400">SSL Криптиране</div>
                </div>
                
                <!-- Support -->
                <div class="bg-white/5 backdrop-blur-sm rounded-2xl p-8 text-center border border-white/10">
                    <div class="w-16 h-16 bg-gradient-to-r from-[#1683ab] to-[#1e9975] rounded-2xl flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-headset text-white text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-4">24/7 Поддръжка</h3>
                    <p class="text-gray-300 leading-relaxed mb-4">
                        Експертен екип за поддръжка на разположение 24/7.
                    </p>
                    <div class="text-2xl font-bold text-[#1683ab]">&lt;2мин</div>
                    <div class="text-sm text-gray-400">Време за отговор</div>
                </div>
            </div>
            
            <!-- Additional Features -->
            <div class="grid md:grid-cols-4 gap-6">
                <div class="text-center">
                    <div class="w-12 h-12 bg-gradient-to-r from-[#1683ab] to-[#1e9975] rounded-lg flex items-center justify-center mx-auto mb-3">
                        <i class="fas fa-exchange-alt text-white"></i>
                    </div>
                    <h4 class="font-semibold text-white mb-2">Безплатна миграция</h4>
                    <p class="text-sm text-gray-300">Преместване без прекъсване</p>
                </div>
                
                <div class="text-center">
                    <div class="w-12 h-12 bg-gradient-to-r from-[#1e9975] to-[#1683ab] rounded-lg flex items-center justify-center mx-auto mb-3">
                        <i class="fas fa-cogs text-white"></i>
                    </div>
                    <h4 class="font-semibold text-white mb-2">cPanel</h4>
                    <p class="text-sm text-gray-300">Лесно управление</p>
                </div>
                
                <div class="text-center">
                    <div class="w-12 h-12 bg-gradient-to-r from-[#1683ab] to-[#1e9975] rounded-lg flex items-center justify-center mx-auto mb-3">
                        <i class="fas fa-envelope text-white"></i>
                    </div>
                    <h4 class="font-semibold text-white mb-2">Имейл акаунти</h4>
                    <p class="text-sm text-gray-300">Безлимитни</p>
                </div>
                
                <div class="text-center">
                    <div class="w-12 h-12 bg-gradient-to-r from-[#1e9975] to-[#1683ab] rounded-lg flex items-center justify-center mx-auto mb-3">
                        <i class="fas fa-database text-white"></i>
                    </div>
                    <h4 class="font-semibold text-white mb-2">SSD хранилище</h4>
                    <p class="text-sm text-gray-300">Максимална скорост</p>
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
            z-index: 5;
            pointer-events: none;
        }
        
        .header-animation {
            width: 100%;
            height: 1560px;
            position: absolute;
            top: -180px;
            left: 0;
            z-index: 1;
            pointer-events: none;
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
            background: radial-gradient(112.01% 306.85% at 116.95% -15.43%,rgb(6, 32, 42) 0, transparent 100%);
            animation: orangeAnimation 16s linear infinite;
        }
        
        .header-animation .animation-black {
            background: linear-gradient(0deg,rgb(11, 64, 66), transparent);
        }
        
        .header-animation .animation-gray {
            opacity: 0;
            animation: grayAnimation 16s linear infinite;
            background: radial-gradient(169.22% 169.22% at 50% -45.86%,rgb(1, 7, 5) 0, transparent 100%);
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
        
        /* Moving Border Gradient Animation */
        @keyframes border-gradient {
            0% {
                background-position: 0% 0%;
            }
            25% {
                background-position: 100% 0%;
            }
            50% {
                background-position: 100% 100%;
            }
            75% {
                background-position: 0% 100%;
            }
            100% {
                background-position: 0% 0%;
            }
        }
        
        .animate-border-gradient {
            background: conic-gradient(from 0deg, rgba(9, 36, 46, 0.46), rgba(6, 28, 21, 0.55),rgb(5, 29, 37),rgb(4, 28, 21), rgb(7, 35, 45));
            background-size: 200% 200%;
            animation: border-gradient 18s linear infinite;
        }
        
        @keyframes dash {
            to {
                stroke-dashoffset: -24;
            }
        }
        
        .animate-dash {
            animation: dash 3s linear infinite;
        }
    </style>
    
    <!-- Pricing Tabs JavaScript -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const monthlyTab = document.getElementById('monthly-tab');
            const yearlyTab = document.getElementById('yearly-tab');
            
            // Get pricing data from PHP config
            const monthlyPrices = {
                starter: '<?php echo get_config('plans.starter.monthly_price'); ?>',
                professional: '<?php echo get_config('plans.professional.monthly_price'); ?>',
                enterprise: '<?php echo get_config('plans.enterprise.monthly_price'); ?>'
            };
            
            // Yearly prices from config
            const yearlyPrices = {
                starter: '<?php echo get_config('plans.starter.yearly_price'); ?>',
                professional: '<?php echo get_config('plans.professional.yearly_price'); ?>',
                enterprise: '<?php echo get_config('plans.enterprise.yearly_price'); ?>'
            };
            
            // Yearly monthly prices (discounted monthly rate when paying yearly)
            const yearlyMonthlyPrices = {
                starter: '<?php echo get_config('plans.starter.yearly_monthly_price'); ?>',
                professional: '<?php echo get_config('plans.professional.yearly_monthly_price'); ?>',
                enterprise: '<?php echo get_config('plans.enterprise.yearly_monthly_price'); ?>'
            };
            
            // Monthly periods from config
            const monthlyPeriods = {
                starter: '<?php echo get_config('plans.starter.monthly_period'); ?>',
                professional: '<?php echo get_config('plans.professional.monthly_period'); ?>',
                enterprise: '<?php echo get_config('plans.enterprise.monthly_period'); ?>'
            };
            
            // Yearly periods from config
            const yearlyPeriods = {
                starter: '<?php echo get_config('plans.starter.yearly_period'); ?>',
                professional: '<?php echo get_config('plans.professional.yearly_period'); ?>',
                enterprise: '<?php echo get_config('plans.enterprise.yearly_period'); ?>'
            };
            
            function updatePrices(isYearly) {
                // Show/hide monthly vs yearly price sections
                const monthlyPriceElements = document.querySelectorAll('.monthly-price');
                const yearlyPriceElements = document.querySelectorAll('.yearly-price');
                
                if (isYearly) {
                    // Show yearly prices, hide monthly
                    monthlyPriceElements.forEach(element => element.classList.add('hidden'));
                    yearlyPriceElements.forEach(element => element.classList.remove('hidden'));
                } else {
                    // Show monthly prices, hide yearly
                    monthlyPriceElements.forEach(element => element.classList.remove('hidden'));
                    yearlyPriceElements.forEach(element => element.classList.add('hidden'));
                }
            }
            
            function switchToMonthly() {
                monthlyTab.className = 'px-8 py-3 rounded-xl text-white font-semibold transition-all duration-300 bg-gradient-to-r from-[#1683ab] to-[#1e9975] shadow-lg';
                yearlyTab.className = 'px-8 py-3 rounded-xl text-gray-400 font-semibold transition-all duration-300 hover:text-white ml-2';
                
                // Update yearly badge to gray when inactive
                const yearlyBadge = yearlyTab.querySelector('span');
                yearlyBadge.className = 'ml-2 px-2 py-1 text-xs bg-gray-500 text-white rounded-full';
                
                updatePrices(false);
            }
            
            function switchToYearly() {
                yearlyTab.className = 'px-8 py-3 rounded-xl text-white font-semibold transition-all duration-300 bg-gradient-to-r from-[#1683ab] to-[#1e9975] shadow-lg';
                monthlyTab.className = 'px-8 py-3 rounded-xl text-gray-400 font-semibold transition-all duration-300 hover:text-white ml-2';
                
                // Update yearly badge to white when active
                const yearlyBadge = yearlyTab.querySelector('span');
                yearlyBadge.className = 'ml-2 px-2 py-1 text-xs bg-white text-[#1e9975] rounded-full';
                
                updatePrices(true);
            }
            
            monthlyTab.addEventListener('click', switchToMonthly);
            yearlyTab.addEventListener('click', switchToYearly);
            
            // Initialize with monthly pricing
            updatePrices(false);
            
            // Simple fixed width approach - more reliable
            // The sliding indicator now uses w-32 (128px) which should cover both buttons
        });
    </script>
</body>
</html>
