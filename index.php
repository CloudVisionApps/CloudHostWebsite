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

    <!-- Hero Section -->
    <section class="relative min-h-screen overflow-hidden">
        <!-- Animated Gradient Background -->
        <div class="header-animation">
            <div class="animation animation-orange"></div>
            <div class="animation animation-black"></div>
            <div class="animation animation-gray"></div>
            <div class="animation animation-blue"></div>
        </div>
        
        <!-- Enhanced Background Icons and Animations -->
        <div class="absolute inset-0 pointer-events-none z-10">
         
        
            
         
    
            
            <!-- Floating Geometric Shapes -->
            <div class="absolute top-32 left-1/4 w-20 h-20 border border-[#1683ab]/20 rounded-full animate-pulse rotate-12 parallax-element" data-speed="0.3"></div>
            <div class="absolute top-40 right-1/3 w-16 h-16 border border-[#1e9975]/20 rounded-full animate-pulse -rotate-12 parallax-element" data-speed="0.2" style="animation-delay: 1s;"></div>
            <div class="absolute bottom-40 left-1/3 w-24 h-24 border border-[#1683ab]/15 rounded-full animate-pulse rotate-45 parallax-element" data-speed="0.4" style="animation-delay: 2s;"></div>
            <div class="absolute top-1/3 right-1/4 w-28 h-28 border border-[#1e9975]/15 rounded-full animate-pulse -rotate-45 parallax-element" data-speed="0.25" style="animation-delay: 0.5s;"></div>
            <div class="absolute bottom-1/3 right-1/3 w-20 h-20 border border-[#1683ab]/15 rounded-full animate-pulse rotate-90 parallax-element" data-speed="0.35" style="animation-delay: 1.5s;"></div>
            
            <!-- Animated Squares -->
            <div class="absolute top-24 left-1/2 w-12 h-12 border border-[#1e9975]/25 rotate-45 animate-pulse parallax-element" data-speed="0.15" style="animation-delay: 0.8s;"></div>
            <div class="absolute bottom-32 right-1/4 w-16 h-16 border border-[#1683ab]/25 -rotate-45 animate-pulse parallax-element" data-speed="0.45" style="animation-delay: 2.2s;"></div>
            <div class="absolute top-1/2 left-1/4 w-10 h-10 border border-[#1e9975]/20 rotate-12 animate-pulse parallax-element" data-speed="0.28" style="animation-delay: 1.8s;"></div>
            
            <!-- Particle Effects -->
            <div class="absolute top-16 right-16 w-2 h-2 bg-[#1683ab]/40 rounded-full animate-ping"></div>
            <div class="absolute top-28 left-1/3 w-1.5 h-1.5 bg-[#1e9975]/40 rounded-full animate-ping" style="animation-delay: 1s;"></div>
            <div class="absolute bottom-24 right-1/3 w-3 h-3 bg-[#1683ab]/30 rounded-full animate-ping" style="animation-delay: 2s;"></div>
            <div class="absolute top-1/2 right-1/2 w-1 h-1 bg-[#1e9975]/50 rounded-full animate-ping" style="animation-delay: 0.5s;"></div>
            <div class="absolute bottom-1/3 left-1/4 w-2.5 h-2.5 bg-[#1683ab]/35 rounded-full animate-ping" style="animation-delay: 1.5s;"></div>
            
            <!-- Animated Lines -->
            <div class="absolute top-20 left-20 w-32 h-px bg-gradient-to-r from-transparent via-[#1683ab]/30 to-transparent animate-pulse"></div>
            <div class="absolute bottom-32 right-32 w-24 h-px bg-gradient-to-r from-transparent via-[#1e9975]/30 to-transparent animate-pulse" style="animation-delay: 1s;"></div>
            <div class="absolute top-1/2 left-1/3 w-28 h-px bg-gradient-to-r from-transparent via-[#1683ab]/25 to-transparent animate-pulse" style="animation-delay: 2s;"></div>
            
            <!-- Glowing Orbs -->
            <div class="absolute top-1/4 right-1/4 w-4 h-4 bg-[#1683ab]/20 rounded-full blur-sm animate-pulse"></div>
            <div class="absolute bottom-1/4 left-1/4 w-6 h-6 bg-[#1e9975]/20 rounded-full blur-sm animate-pulse" style="animation-delay: 1s;"></div>
            <div class="absolute top-1/3 left-1/2 w-3 h-3 bg-[#1683ab]/15 rounded-full blur-sm animate-pulse" style="animation-delay: 2s;"></div>
            
          
            
            <!-- Enhanced Particle System -->
            <div class="absolute top-12 right-1/3 w-1.5 h-1.5 bg-[#1683ab]/50 rounded-full animate-float-particle"></div>
            <div class="absolute top-36 left-1/4 w-2 h-2 bg-[#1e9975]/40 rounded-full animate-float-particle" style="animation-delay: 1.2s;"></div>
            <div class="absolute bottom-16 right-1/3 w-1 h-1 bg-[#1683ab]/60 rounded-full animate-float-particle" style="animation-delay: 2.8s;"></div>
            <div class="absolute top-1/2 left-1/2 w-2.5 h-2.5 bg-[#1e9975]/35 rounded-full animate-float-particle" style="animation-delay: 0.4s;"></div>
            <div class="absolute bottom-1/3 left-1/3 w-1.5 h-1.5 bg-[#1683ab]/45 rounded-full animate-float-particle" style="animation-delay: 1.6s;"></div>
            
            <!-- Animated Dots Grid -->
            <div class="absolute top-24 right-16 w-1 h-1 bg-[#1e9975]/30 rounded-full animate-ping"></div>
            <div class="absolute top-28 right-20 w-1 h-1 bg-[#1683ab]/25 rounded-full animate-ping" style="animation-delay: 0.5s;"></div>
            <div class="absolute top-32 right-24 w-1 h-1 bg-[#1e9975]/20 rounded-full animate-ping" style="animation-delay: 1s;"></div>
            
            <!-- Floating Data Stream Effect -->
            <div class="absolute top-1/3 right-16 w-20 h-px bg-gradient-to-r from-transparent via-[#1683ab]/20 to-transparent animate-pulse"></div>
            <div class="absolute top-1/3 right-20 w-16 h-px bg-gradient-to-r from-transparent via-[#1e9975]/15 to-transparent animate-pulse" style="animation-delay: 0.8s;"></div>
            <div class="absolute top-1/3 right-24 w-12 h-px bg-gradient-to-r from-transparent via-[#1683ab]/10 to-transparent animate-pulse" style="animation-delay: 1.6s;"></div>
        </div>
        
        <!-- Overlay -->
        <div class="overlay"></div>
      
        <!-- Content Container --> 
        <div class="relative z-20 max-w-7xl mx-auto py-20 lg:py-32">
            <!-- Main Hero Content -->
            <div class="grid lg:grid-cols-2 gap-16 lg:gap-24 items-center min-h-[80vh]">
                <!-- Left Side - Enhanced Content -->
                <div class="space-y-8 lg:space-y-12 text-center lg:text-left scroll-fade-in">
                    <!-- Enhanced Headline -->
                    <div class="space-y-6 lg:space-y-8">
                        <h1 class="text-4xl lg:text-6xl xl:text-6xl font-bold leading-tight tracking-tight">
                            <span class="text-white drop-shadow-lg">Най-доброто</span>
                            <br>
                            <span class="bg-gradient-to-r from-[#1683ab] to-[#1e9975] bg-clip-text text-transparent drop-shadow-lg">хостинг решение</span>
                            <br>
                            <span class="text-white drop-shadow-lg">за вашия бизнес</span>
                        </h1>
                        <p class="text-lg lg:text-xl xl:text-2xl text-gray-200 leading-relaxed max-w-2xl mx-auto lg:mx-0 font-medium">
                            Професионален хостинг с 99.9% uptime, 24/7 поддръжка и най-новите технологии за вашия уебсайт.
                        </p>
                    </div>
                    
                    <!-- Enhanced CTA Buttons -->
                    <div class="flex flex-col sm:flex-row gap-4 lg:gap-6 justify-center lg:justify-start scroll-stagger">
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
                    <div class="flex flex-wrap items-center justify-center lg:justify-start gap-6 lg:gap-8 pt-6 lg:pt-8 scroll-stagger">
                        <div class="flex items-center space-x-3 group">
                            <div class="w-10 h-10 bg-gradient-to-r from-[#1e9975]/20 to-[#1683ab]/20 rounded-full flex items-center justify-center group-hover:scale-110 transition-all duration-300">
                                <i class="fas fa-shield-alt text-[#1e9975] text-lg"></i>
                            </div>
                            <span class="text-sm text-gray-300 font-medium group-hover:text-white transition-colors duration-300">SSL защита</span>
                        </div>
                        <div class="flex items-center space-x-3 group">
                            <div class="w-10 h-10 bg-gradient-to-r from-[#1683ab]/20 to-[#1e9975]/20 rounded-full flex items-center justify-center group-hover:scale-110 transition-all duration-300">
                                <i class="fas fa-database text-[#1683ab] text-lg"></i>
                            </div>
                            <span class="text-sm text-gray-300 font-medium group-hover:text-white transition-colors duration-300">SSD дискове</span>
                        </div>
                        <div class="flex items-center space-x-3 group">
                            <div class="w-10 h-10 bg-gradient-to-r from-[#1e9975]/20 to-[#1683ab]/20 rounded-full flex items-center justify-center group-hover:scale-110 transition-all duration-300">
                                <i class="fas fa-globe text-[#1e9975] text-lg"></i>
                            </div>
                            <span class="text-sm text-gray-300 font-medium group-hover:text-white transition-colors duration-300">CDN включен</span>
                        </div>
                    </div>
                    
                 


                </div>
                
                <!-- Right Side - Enhanced Domain Search Form -->
                <div class="relative order-first lg:order-last scroll-slide-right">
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
                            <div class="relative bg-gradient-to-br from-[#0a0a0a]/30 to-[#1a1a1a]/40 backdrop-blur-xl rounded-[2.4rem] p-8 lg:p-10 overflow-hidden">
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
                                <div class="text-center mb-6 lg:mb-8 relative">
                                    <h3 class="text-2xl lg:text-3xl font-bold text-white mb-3">Намерете своя домейн</h3>
                                    <p class="text-white/80 text-sm lg:text-base leading-relaxed max-w-sm mx-auto">Проверете наличността на вашия идеален домейн и започнете онлайн пътуването</p>
                                </div>
                                
                                <!-- Enhanced Domain Search Form -->
                                <form class="space-y-4 lg:space-y-6 relative">
                                    <div class="relative group">
                                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                            <i class="fas fa-globe text-white/70 group-hover:text-[#1683ab] transition-colors duration-300 text-lg"></i>
                                        </div>
                                        <input 
                                            type="text" 
                                            placeholder="Въведете име на домейн" 
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
                                
                                <!-- Enhanced Trust Indicators -->
                                <div class="mt-6 lg:mt-8 pt-4 lg:pt-6 border-t border-white/20">
                                    <div class="flex flex-col sm:flex-row items-center justify-center gap-4 lg:gap-8 text-white/80 text-sm">
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

                       <!-- TLD Badges - Small informational badges -->
                       <div class="pt-6 lg:pt-8">
                        <div class="text-center lg:text-left mb-4">
                            <p class="text-sm text-gray-400 font-medium">Популярни домейн разширения</p>
                        </div>
                        <div class="flex flex-wrap justify-center lg:justify-start gap-2 lg:gap-3">
                            <div class="group cursor-pointer">
                                <div class="bg-white/10 hover:bg-white/20 rounded-full px-3 py-1.5 border border-white/20 transition-all duration-300 hover:border-[#1683ab]/50 hover:scale-105">
                                    <span class="text-xs font-bold text-white group-hover:text-[#1683ab] transition-colors duration-300">.com</span>
                                    <span class="text-xs text-gray-400 ml-1">15лв</span>
                                </div>
                            </div>
                            <div class="group cursor-pointer">
                                <div class="bg-white/10 hover:bg-white/20 rounded-full px-3 py-1.5 border border-white/20 transition-all duration-300 hover:border-[#1e9975]/50 hover:scale-105">
                                    <span class="text-xs font-bold text-white group-hover:text-[#1e9975] transition-colors duration-300">.bg</span>
                                    <span class="text-xs text-gray-400 ml-1">12лв</span>
                                </div>
                            </div>
                            <div class="group cursor-pointer">
                                <div class="bg-white/10 hover:bg-white/20 rounded-full px-3 py-1.5 border border-white/20 transition-all duration-300 hover:border-[#1683ab]/50 hover:scale-105">
                                    <span class="text-xs font-bold text-white group-hover:text-[#1683ab] transition-colors duration-300">.net</span>
                                    <span class="text-xs text-gray-400 ml-1">18лв</span>
                                </div>
                            </div>
                            <div class="group cursor-pointer">
                                <div class="bg-white/10 hover:bg-white/20 rounded-full px-3 py-1.5 border border-white/20 transition-all duration-300 hover:border-[#1e9975]/50 hover:scale-105">
                                    <span class="text-xs font-bold text-white group-hover:text-[#1e9975] transition-colors duration-300">.org</span>
                                    <span class="text-xs text-gray-400 ml-1">20лв</span>
                                </div>
                            </div>
                            <div class="group cursor-pointer">
                                <div class="bg-white/10 hover:bg-white/20 rounded-full px-3 py-1.5 border border-white/20 transition-all duration-300 hover:border-[#1683ab]/50 hover:scale-105">
                                    <span class="text-xs font-bold text-white group-hover:text-[#1683ab] transition-colors duration-300">.eu</span>
                                    <span class="text-xs text-gray-400 ml-1">16лв</span>
                                </div>
                            </div>
                            <div class="group cursor-pointer">
                                <div class="bg-white/10 hover:bg-white/20 rounded-full px-3 py-1.5 border border-white/20 transition-all duration-300 hover:border-[#1e9975]/50 hover:scale-105">
                                    <span class="text-xs font-bold text-white group-hover:text-[#1e9975] transition-colors duration-300">.info</span>
                                    <span class="text-xs text-gray-400 ml-1">14лв</span>
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
            <div class="text-center mb-20 scroll-fade-in">
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
                <div class="text-center lg:text-left scroll-slide-left">
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
                    <div class="flex flex-col sm:flex-row gap-6 scroll-stagger">
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
                        <div class="flex items-center justify-center space-x-8 text-gray-400 scroll-stagger">
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
                <div class="relative scroll-scale-in">
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
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-20">
            <div class="text-center mb-20 scroll-fade-in">
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
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 scroll-stagger">
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
                                    <div class="text-center space-y-3">
                                  
                                    <div class="text-white">
                                        <span class="text-4xl font-bold"><?php echo $plan['yearly_monthly_price']; ?></span>
                                        <span class="text-gray-400 ml-2"><?php echo $plan['monthly_period']; ?></span>
                                    </div>
                                    
                                    <div class="text-3xl text-gray-300"><?php echo $plan['yearly_price']; ?> лв/година</div>

                                    <div class="inline-flex items-center px-3 py-1 bg-[#1e9975] text-white text-sm font-semibold rounded-full">
                                        <?php echo $plan['yearly_discount']; ?> отстъпка
                                    </div>
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
    <section id="features" class="relative overflow-hidden py-32">
        <!-- Enhanced Animated Background -->
        <div class="absolute inset-0">
            <!-- Gradient Background -->
            <div class="absolute inset-0 bg-gradient-to-br from-[#121819] via-[#11272a] to-[#112627]"></div>
            
            <!-- Animated Grid Pattern -->
            <div class="absolute inset-0 opacity-20">
                <div class="absolute inset-0" style="background-image: radial-gradient(circle at 1px 1px, rgba(30, 153, 117, 0.3) 1px, transparent 0); background-size: 50px 50px;"></div>
            </div>
            
            <!-- Floating Geometric Shapes -->
            <div class="absolute top-20 left-20 w-32 h-32 border border-[#1683ab]/20 rounded-full animate-pulse rotate-12 parallax-element" data-speed="0.2"></div>
            <div class="absolute top-40 right-32 w-24 h-24 border border-[#1e9975]/20 rounded-full animate-pulse -rotate-12 parallax-element" data-speed="0.3" style="animation-delay: 1s;"></div>
            <div class="absolute bottom-32 left-1/4 w-28 h-28 border border-[#1683ab]/15 rounded-full animate-pulse rotate-45 parallax-element" data-speed="0.25" style="animation-delay: 2s;"></div>
            <div class="absolute top-1/2 left-1/3 w-36 h-36 border border-[#1e9975]/15 rounded-full animate-pulse -rotate-45 parallax-element" data-speed="0.15" style="animation-delay: 0.5s;"></div>
            
            <!-- Animated Lines -->
            <div class="absolute top-16 left-1/2 w-px h-32 bg-gradient-to-b from-transparent via-[#1683ab]/30 to-transparent animate-pulse"></div>
            <div class="absolute bottom-16 right-1/2 w-px h-32 bg-gradient-to-t from-transparent via-[#1e9975]/30 to-transparent animate-pulse" style="animation-delay: 1s;"></div>
            <div class="absolute top-1/2 left-16 w-32 h-px bg-gradient-to-r from-transparent via-[#1683ab]/25 to-transparent animate-pulse" style="animation-delay: 2s;"></div>
            <div class="absolute top-1/2 right-16 w-32 h-px bg-gradient-to-l from-transparent via-[#1e9975]/25 to-transparent animate-pulse" style="animation-delay: 0.5s;"></div>
            
            <!-- Glowing Orbs -->
            <div class="absolute top-1/4 right-1/4 w-6 h-6 bg-[#1683ab]/20 rounded-full blur-lg animate-pulse"></div>
            <div class="absolute bottom-1/4 left-1/4 w-8 h-8 bg-[#1e9975]/20 rounded-full blur-lg animate-pulse" style="animation-delay: 1s;"></div>
            <div class="absolute top-1/3 left-1/2 w-4 h-4 bg-[#1683ab]/15 rounded-full blur-lg animate-pulse" style="animation-delay: 2s;"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Enhanced Header Section -->
            <div class="text-center mb-24 scroll-fade-in">
                <div class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-[#1683ab] to-[#1e9975] text-white text-sm font-medium rounded-full mb-8 shadow-2xl">
                    <i class="fas fa-star mr-3 text-lg"></i>
                    Нашите предимства
                </div>
                <h2 class="text-5xl md:text-6xl font-bold text-white mb-8 leading-tight">
                    Защо да изберете <span class="bg-gradient-to-r from-[#1683ab] to-[#1e9975] bg-clip-text text-transparent">КлаудХост</span>?
                </h2>
                <p class="text-2xl text-gray-300 max-w-4xl mx-auto leading-relaxed">
                    Открийте иновативните технологии и експертната поддръжка, които правят разликата
                </p>
            </div>
            
            <!-- Main Features Grid - Enhanced Design -->
            <div class="grid lg:grid-cols-3 gap-12 mb-24 scroll-stagger">
                <!-- Performance Feature -->
                <div class="group relative">
                    <!-- Background Glow Effect -->
                    <div class="absolute inset-0 bg-gradient-to-br from-[#1683ab]/20 to-[#1e9975]/20 rounded-3xl blur-xl opacity-0 group-hover:opacity-100 transition-all duration-700"></div>
                    
                    <!-- Main Card -->
                    <div class="relative bg-gradient-to-br from-[#0a0a0a]/80 to-[#1a1a1a]/30 backdrop-blur-xl rounded-3xl p-10 border border-white/10 hover:border-[#1683ab]/50 transition-all duration-500 transform group-hover:scale-105 group-hover:-translate-y-2">
                        <!-- Icon Container -->
                        <div class="relative mb-8">
                            <div class="w-20 h-20 bg-gradient-to-r from-[#1683ab] to-[#1e9975] rounded-2xl flex items-center justify-center mx-auto group-hover:scale-110 transition-all duration-500 shadow-2xl">
                                <i class="fas fa-rocket text-white text-3xl group-hover:animate-bounce"></i>
                            </div>
                            <!-- Floating Particles -->
                            <div class="absolute -top-2 -right-2 w-4 h-4 bg-[#1e9975] rounded-full animate-ping"></div>
                            <div class="absolute -bottom-2 -left-2 w-3 h-3 bg-[#1683ab] rounded-full animate-ping" style="animation-delay: 1s;"></div>
                        </div>
                        
                        <!-- Content -->
                        <h3 class="text-2xl font-bold text-white mb-6 text-center group-hover:text-[#1683ab] transition-colors duration-500">Максимална производителност</h3>
                        <p class="text-gray-300 leading-relaxed mb-8 text-center text-lg">
                            Нашата инфраструктура използва най-новите NVMe технологии и глобална CDN мрежа за невероятна скорост.
                        </p>
                        
                        <!-- Stats Display -->
                        <div class="text-center mb-6">
                            <div class="text-4xl font-bold text-[#1683ab] mb-2">99.9%</div>
                            <div class="text-sm text-gray-400 uppercase tracking-wider">Гарантирана работа</div>
                        </div>
                        
                        <!-- Feature List -->
                        <ul class="space-y-3 text-gray-300">
                            <li class="flex items-center">
                                <i class="fas fa-check text-[#1e9975] mr-3"></i>
                                <span>NVMe SSD дискове</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-[#1e9975] mr-3"></i>
                                <span>Глобална CDN мрежа</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-[#1e9975] mr-3"></i>
                                <span>Оптимизирани за WordPress</span>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <!-- Security Feature -->
                <div class="group relative">
                    <!-- Background Glow Effect -->
                    <div class="absolute inset-0 bg-gradient-to-br from-[#1e9975]/20 to-[#1683ab]/20 rounded-3xl blur-xl opacity-0 group-hover:opacity-100 transition-all duration-700"></div>
                    
                    <!-- Main Card -->
                    <div class="relative bg-gradient-to-br from-[#0a0a0a]/80 to-[#1a1a1a]/80 backdrop-blur-xl rounded-3xl p-10 border border-white/10 hover:border-[#1e9975]/50 transition-all duration-500 transform group-hover:scale-105 group-hover:-translate-y-2">
                        <!-- Icon Container -->
                        <div class="relative mb-8">
                            <div class="w-20 h-20 bg-gradient-to-r from-[#1e9975] to-[#1683ab] rounded-2xl flex items-center justify-center mx-auto group-hover:scale-110 transition-all duration-500 shadow-2xl">
                                <i class="fas fa-shield-alt text-white text-3xl group-hover:animate-pulse"></i>
                            </div>
                            <!-- Floating Particles -->
                            <div class="absolute -top-2 -right-2 w-4 h-4 bg-[#1683ab] rounded-full animate-ping"></div>
                            <div class="absolute -bottom-2 -left-2 w-3 h-3 bg-[#1e9975] rounded-full animate-ping" style="animation-delay: 1s;"></div>
                        </div>
                        
                        <!-- Content -->
                        <h3 class="text-2xl font-bold text-white mb-6 text-center group-hover:text-[#1e9975] transition-colors duration-500">Непрекъсната защита</h3>
                        <p class="text-gray-300 leading-relaxed mb-8 text-center text-lg">
                            Вашите данни са защитени с най-новите технологии за сигурност и автоматични резервни копия.
                        </p>
                        
                        <!-- Stats Display -->
                        <div class="text-center mb-6">
                            <div class="text-4xl font-bold text-[#1e9975] mb-2">256-bit</div>
                            <div class="text-sm text-gray-400 uppercase tracking-wider">SSL Криптиране</div>
                        </div>
                        
                        <!-- Feature List -->
                        <ul class="space-y-3 text-gray-300">
                            <li class="flex items-center">
                                <i class="fas fa-check text-[#1683ab] mr-3"></i>
                                <span>Автоматична DDoS защита</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-[#1683ab] mr-3"></i>
                                <span>Резервни копия на 6 часа</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-[#1683ab] mr-3"></i>
                                <span>Многослойна защита</span>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <!-- Support Feature -->
                <div class="group relative">
                    <!-- Background Glow Effect -->
                    <div class="absolute inset-0 bg-gradient-to-br from-[#1683ab]/20 to-[#1e9975]/20 rounded-3xl blur-xl opacity-0 group-hover:opacity-100 transition-all duration-700"></div>
                    
                    <!-- Main Card -->
                    <div class="relative bg-gradient-to-br from-[#0a0a0a]/80 to-[#1a1a1a]/80 backdrop-blur-xl rounded-3xl p-10 border border-white/10 hover:border-[#1683ab]/50 transition-all duration-500 transform group-hover:scale-105 group-hover:-translate-y-2">
                        <!-- Icon Container -->
                        <div class="relative mb-8">
                            <div class="w-20 h-20 bg-gradient-to-r from-[#1683ab] to-[#1e9975] rounded-2xl flex items-center justify-center mx-auto group-hover:scale-110 transition-all duration-500 shadow-2xl">
                                <i class="fas fa-headset text-white text-3xl group-hover:animate-pulse"></i>
                            </div>
                            <!-- Floating Particles -->
                            <div class="absolute -top-2 -right-2 w-4 h-4 bg-[#1e9975] rounded-full animate-ping"></div>
                            <div class="absolute -bottom-2 -left-2 w-3 h-3 bg-[#1683ab] rounded-full animate-ping" style="animation-delay: 1s;"></div>
                        </div>
                        
                        <!-- Content -->
                        <h3 class="text-2xl font-bold text-white mb-6 text-center group-hover:text-[#1683ab] transition-colors duration-500">Експертна поддръжка</h3>
                        <p class="text-gray-300 leading-relaxed mb-8 text-center text-lg">
                            Нашият екип от специалисти е на разположение 24/7 за решаване на всеки проблем.
                        </p>
                        
                        <!-- Stats Display -->
                        <div class="text-center mb-6">
                            <div class="text-4xl font-bold text-[#1683ab] mb-2">&lt;2мин</div>
                            <div class="text-sm text-gray-400 uppercase tracking-wider">Време за отговор</div>
                        </div>
                        
                        <!-- Feature List -->
                        <ul class="space-y-3 text-gray-300">
                            <li class="flex items-center">
                                <i class="fas fa-check text-[#1e9975] mr-3"></i>
                                <span>Инсталтация на приложения</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-[#1e9975] mr-3"></i>
                                <span>Конфигурация на домейни</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-[#1e9975] mr-3"></i>
                                <span>Технически консултации</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!-- Enhanced Additional Features Grid -->
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 scroll-stagger">
                <!-- Migration Feature -->
                <div class="group text-center p-6 rounded-2xl hover:bg-white/5 transition-all duration-500 transform hover:scale-105">
                    <div class="relative mb-4">
                        <div class="w-16 h-16 bg-gradient-to-r from-[#1683ab] to-[#1e9975] rounded-2xl flex items-center justify-center mx-auto group-hover:scale-110 transition-all duration-500 shadow-lg">
                            <i class="fas fa-exchange-alt text-white text-xl"></i>
                        </div>
                        <!-- Hover Glow -->
                        <div class="absolute inset-0 bg-gradient-to-r from-[#1683ab] to-[#1e9975] rounded-2xl opacity-0 group-hover:opacity-20 transition-opacity duration-500 blur-xl"></div>
                    </div>
                    <h4 class="font-bold text-white mb-2 text-lg group-hover:text-[#1683ab] transition-colors duration-300">Безплатна миграция</h4>
                    <p class="text-sm text-gray-300 group-hover:text-gray-200 transition-colors duration-300">Преместване на сайта без прекъсване</p>
                </div>
                
                <!-- AdminBolt Feature -->
                <div class="group text-center p-6 rounded-2xl hover:bg-white/5 transition-all duration-500 transform hover:scale-105">
                    <div class="relative mb-4">
                        <div class="w-16 h-16 bg-gradient-to-r from-[#1e9975] to-[#1683ab] rounded-2xl flex items-center justify-center mx-auto group-hover:scale-110 transition-all duration-500 shadow-lg">
                            <i class="fas fa-bolt text-white text-xl"></i>
                        </div>
                        <!-- Hover Glow -->
                        <div class="absolute inset-0 bg-gradient-to-r from-[#1e9975] to-[#1683ab] rounded-2xl opacity-0 group-hover:opacity-20 transition-opacity duration-500 blur-xl"></div>
                    </div>
                    <h4 class="font-bold text-white mb-2 text-lg group-hover:text-[#1e9975] transition-colors duration-300">AdminBolt</h4>
                    <p class="text-sm text-gray-300 group-hover:text-gray-200 transition-colors duration-300">Модерен контролен панел</p>
                </div>
                
                <!-- Email Feature -->
                <div class="group text-center p-6 rounded-2xl hover:bg-white/5 transition-all duration-500 transform hover:scale-105">
                    <div class="relative mb-4">
                        <div class="w-16 h-16 bg-gradient-to-r from-[#1683ab] to-[#1e9975] rounded-2xl flex items-center justify-center mx-auto group-hover:scale-110 transition-all duration-500 shadow-lg">
                            <i class="fas fa-envelope text-white text-xl"></i>
                        </div>
                        <!-- Hover Glow -->
                        <div class="absolute inset-0 bg-gradient-to-r from-[#1683ab] to-[#1e9975] rounded-2xl opacity-0 group-hover:opacity-20 transition-opacity duration-500 blur-xl"></div>
                    </div>
                    <h4 class="font-bold text-white mb-2 text-lg group-hover:text-[#1683ab] transition-colors duration-300">Имейл акаунти</h4>
                    <p class="text-sm text-gray-300 group-hover:text-gray-200 transition-colors duration-300">Неограничен брой</p>
                </div>
                
                <!-- SSD Feature -->
                <div class="group text-center p-6 rounded-2xl hover:bg-white/5 transition-all duration-500 transform hover:scale-105">
                    <div class="relative mb-4">
                        <div class="w-16 h-16 bg-gradient-to-r from-[#1e9975] to-[#1683ab] rounded-2xl flex items-center justify-center mx-auto group-hover:scale-110 transition-all duration-500 shadow-lg">
                            <i class="fas fa-database text-white text-xl"></i>
                        </div>
                        <!-- Hover Glow -->
                        <div class="absolute inset-0 bg-gradient-to-r from-[#1e9975] to-[#1683ab] rounded-2xl opacity-0 group-hover:opacity-20 transition-opacity duration-500 blur-xl"></div>
                    </div>
                    <h4 class="font-bold text-white mb-2 text-lg group-hover:text-[#1e9975] transition-colors duration-300">SSD хранилище</h4>
                    <p class="text-sm text-gray-300 group-hover:text-gray-200 transition-colors duration-300">Бързо достъпване</p>
                </div>
            </div>
            
            <!-- Enhanced Stats Section -->
            <div class="mt-24 text-center scroll-fade-in">
                <div class="grid md:grid-cols-4 gap-8">
                    <div class="group">
                        <div class="text-5xl font-bold text-[#1683ab] mb-3 group-hover:scale-110 transition-transform duration-500">99.9%</div>
                        <div class="text-gray-400 uppercase tracking-wider font-medium">Достъпност</div>
                    </div>
                    <div class="group">
                        <div class="text-5xl font-bold text-[#1e9975] mb-3 group-hover:scale-110 transition-transform duration-500">24/7</div>
                        <div class="text-gray-400 uppercase tracking-wider font-medium">Поддръжка</div>
                    </div>
                    <div class="group">
                        <div class="text-5xl font-bold text-[#1683ab] mb-3 group-hover:scale-110 transition-transform duration-500">&lt;2мин</div>
                        <div class="text-gray-400 uppercase tracking-wider font-medium">Реакция</div>
                    </div>
                    <div class="group">
                        <div class="text-5xl font-bold text-[#1e9975] mb-3 group-hover:scale-110 transition-transform duration-500">100%</div>
                        <div class="text-sm text-gray-400 uppercase tracking-wider font-medium">Защита</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-32 relative overflow-hidden">
        <!-- Enhanced Background with Modern Pattern -->
        <div class="absolute inset-0">
            <!-- Gradient Background -->
            <div class="absolute inset-0 bg-gradient-to-br from-[#0a0a0a] via-[#121212] to-[#0f0f0f]"></div>
            
            <!-- Modern Geometric Pattern -->
            <div class="absolute inset-0 opacity-20">
                <div class="absolute top-0 left-0 w-full h-full" style="background-image: radial-gradient(circle at 25% 25%, rgba(22, 131, 171, 0.1) 0%, transparent 50%), radial-gradient(circle at 75% 75%, rgba(30, 153, 117, 0.1) 0%, transparent 50%);"></div>
            </div>
            
            <!-- Floating Elements with Modern Animation -->
            <div class="absolute top-20 left-20 w-2 h-2 bg-[#1683ab] rounded-full animate-ping"></div>
            <div class="absolute top-40 right-32 w-3 h-3 bg-[#1e9975] rounded-full animate-ping" style="animation-delay: 1s;"></div>
            <div class="absolute bottom-32 left-1/4 w-2 h-2 bg-[#1683ab] rounded-full animate-ping" style="animation-delay: 2s;"></div>
            <div class="absolute top-1/2 right-1/4 w-4 h-4 bg-[#1e9975] rounded-full animate-ping" style="animation-delay: 0.5s;"></div>
            
            <!-- Modern Grid Lines -->
            <div class="absolute inset-0 opacity-10">
                <div class="absolute top-0 left-1/2 w-px h-full bg-gradient-to-b from-transparent via-[#1683ab] to-transparent"></div>
                <div class="absolute top-1/2 left-0 w-full h-px bg-gradient-to-r from-transparent via-[#1e9975] to-transparent"></div>
            </div>
        </div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <!-- Modern Split Layout -->
            <div class="grid lg:grid-cols-2 gap-16 lg:gap-24 items-center">
                <!-- Left Side - Content -->
                <div class="text-center lg:text-left scroll-slide-left">
                    <!-- Modern Badge -->
                    <div class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-[#1683ab]/20 to-[#1e9975]/20 border border-[#1683ab]/30 text-white text-sm font-medium rounded-full mb-8 backdrop-blur-sm">
                        <div class="w-2 h-2 bg-[#1e9975] rounded-full mr-3 animate-pulse"></div>
                        Готови сте за промяна?
                    </div>
                    
                    <!-- Modern Typography -->
                    <h2 class="text-5xl lg:text-5xl xl:text-5xl font-bold text-white mb-8 leading-tight">
                        Готови ли сте да
                        <span class="block bg-gradient-to-r from-[#1683ab] to-[#1e9975] bg-clip-text text-transparent">
                            трансформирате
                        </span>
                        вашия бизнес? 
                    </h2>
                    
                    <p class="text-xl lg:text-2xl text-gray-300 mb-12 leading-relaxed max-w-2xl mx-auto lg:mx-0">
                        Присъединете се към доволните клиенти, които се доверяват на КлаудХост за своите хостинг нужди.
                    </p>
                    
                    <!-- Modern Trust Indicators -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mb-12">
                        <div class="group p-4 rounded-2xl bg-white/5 border border-white/10 hover:border-[#1683ab]/50 transition-all duration-300 hover:bg-white/10">
                            <div class="flex items-center justify-center lg:justify-start">
                                <div class="w-10 h-10 bg-gradient-to-r from-[#1683ab]/20 to-[#1e9975]/20 rounded-xl flex items-center justify-center mr-3 group-hover:scale-110 transition-all duration-300">
                                    <i class="fas fa-check text-[#1e9975] text-lg"></i>
                                </div>
                                <span class="text-white font-medium">Без скрити такси</span>
                            </div>
                        </div>
                        <div class="group p-4 rounded-2xl bg-white/5 border border-white/10 hover:border-[#1e9975]/50 transition-all duration-300 hover:bg-white/10">
                            <div class="flex items-center justify-center lg:justify-start">
                                <div class="w-10 h-10 bg-gradient-to-r from-[#1e9975]/20 to-[#1683ab]/20 rounded-xl flex items-center justify-center mr-3 group-hover:scale-110 transition-all duration-300">
                                    <i class="fas fa-shield-alt text-[#1683ab] text-lg"></i>
                                </div>
                                <span class="text-white font-medium">30-дневна гаранция</span>
                            </div>
                        </div>
                        <div class="group p-4 rounded-2xl bg-white/5 border border-white/10 hover:border-[#1683ab]/50 transition-all duration-300 hover:bg-white/10">
                            <div class="flex items-center justify-center lg:justify-start">
                                <div class="w-10 h-10 bg-gradient-to-r from-[#1683ab]/20 to-[#1e9975]/20 rounded-xl flex items-center justify-center mr-3 group-hover:scale-110 transition-all duration-300">
                                    <i class="fas fa-exchange-alt text-[#1e9975] text-lg"></i>
                                </div>
                                <span class="text-white font-medium">Безплатна миграция</span>
                            </div>
                        </div>
                        <div class="group p-4 rounded-2xl bg-white/5 border border-white/10 hover:border-[#1683ab]/50 transition-all duration-300 hover:bg-white/10">
                            <div class="flex items-center justify-center lg:justify-start">
                                <div class="w-10 h-10 bg-gradient-to-r from-[#1683ab]/20 to-[#1e9975]/20 rounded-xl flex items-center justify-center mr-3 group-hover:scale-110 transition-all duration-300">
                                    <i class="fas fa-exchange-alt text-[#1e9975] text-lg"></i>
                                </div>
                                <span class="text-white font-medium">
                                    Оптимизация <br /> на скоростта
                                </span>
                            </div>
                        </div>
                        
                    </div>
                    
                    <!-- Modern CTA Buttons -->
                    <div class="flex flex-col sm:flex-row gap-6 scroll-stagger">
                        <a href="#plans" class="group relative overflow-hidden bg-gradient-to-r from-[#1683ab] to-[#1e9975] text-white text-xl px-12 py-5 rounded-2xl font-bold shadow-2xl hover:shadow-[#1e9975]/25 transition-all duration-500 transform hover:-translate-y-2 flex items-center justify-center">
                            <div class="absolute inset-0 bg-gradient-to-r from-[#1e9975] to-[#1683ab] opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                            <span class="relative z-10 flex items-center">
                                <i class="fas fa-rocket mr-4 text-2xl group-hover:animate-bounce"></i>
                                Започнете днес
                            </span>
                        </a>
                        <a href="#contact" class="group relative overflow-hidden border-2 border-white/20 text-white text-xl px-12 py-5 rounded-2xl font-bold transition-all duration-500 flex items-center justify-center backdrop-blur-sm hover:border-[#1683ab]/50 hover:bg-white/5">
                            <div class="absolute inset-0 bg-gradient-to-r from-[#1683ab]/10 to-[#1e9975]/10 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                            <span class="relative z-10 flex items-center">
                                <i class="fas fa-headset mr-4 text-2xl group-hover:scale-110 transition-transform duration-300"></i>
                                Говорете с експерт
                            </span>
                        </a>
                    </div>
                </div>
                
                <!-- Right Side - Modern Visual Element -->
                <div class="relative scroll-scale-in">
                    <!-- Modern Card Container -->
                    <div class="relative">
                        <!-- Background Glow -->
                        <div class="absolute inset-0 bg-gradient-to-r from-[#1683ab]/20 to-[#1e9975]/20 rounded-3xl blur-3xl opacity-50"></div>
                        
                        <!-- Main Card -->
                        <div class="relative bg-gradient-to-br from-[#0a0a0a]/80 to-[#1a1a1a]/40 backdrop-blur-xl rounded-3xl p-12 border border-white/10 overflow-hidden">
                            <!-- Card Background Pattern -->
                            <div class="absolute inset-0 opacity-10">
                                <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-r from-[#1683ab]/30 to-[#1e9975]/30 rounded-full blur-2xl"></div>
                                <div class="absolute bottom-0 left-0 w-24 h-24 bg-gradient-to-r from-[#1e9975]/30 to-[#1683ab]/30 rounded-full blur-2xl"></div>
                            </div>
                            
                            <!-- Modern Stats Display -->
                            <div class="relative z-10 text-center">
                                <div class="mb-8">
                                    <div class="w-24 h-24 bg-gradient-to-r from-[#1683ab] to-[#1e9975] rounded-3xl flex items-center justify-center mx-auto mb-6 shadow-2xl">
                                        <i class="fas fa-chart-line text-white text-3xl"></i>
                                    </div>
                                    <h3 class="text-2xl font-bold text-white mb-4">Резултати, които говорят</h3>
                                </div>
                                
                                <!-- Modern Stats Grid -->
                                <div class="grid grid-cols-2 gap-8 mb-8">
                                    <div class="group">
                                        <div class="text-4xl font-bold text-[#1683ab] mb-2 group-hover:scale-110 transition-transform duration-300">99.9%</div>
                                        <div class="text-sm text-gray-400 uppercase tracking-wider">Достъпност</div>
                                    </div>
                                    <div class="group">
                                        <div class="text-4xl font-bold text-[#1e9975] mb-2 group-hover:scale-110 transition-transform duration-300">&lt;2мин</div>
                                        <div class="text-sm text-gray-400 uppercase tracking-wider">Поддръжка</div>
                                    </div>
                                </div>
                                
                                <!-- Modern Feature List -->
                                <div class="space-y-4">
                                    <div class="flex items-center justify-center p-3 rounded-xl bg-white/5 border border-white/10 hover:border-[#1683ab]/30 transition-all duration-300">
                                        <i class="fas fa-shield-alt text-[#1683ab] mr-3 text-lg"></i>
                                        <span class="text-white font-medium">SSL включен</span>
                                    </div>
                                    <div class="flex items-center justify-center p-3 rounded-xl bg-white/5 border border-white/10 hover:border-[#1e9975]/30 transition-all duration-300">
                                        <i class="fas fa-database text-[#1e9975] mr-3 text-lg"></i>
                                        <span class="text-white font-medium">SSD хранилище</span>
                                    </div>
                                    <div class="flex items-center justify-center p-3 rounded-xl bg-white/5 border border-white/10 hover:border-[#1683ab]/30 transition-all duration-300">
                                        <i class="fas fa-globe text-[#1683ab] mr-3 text-lg"></i>
                                        <span class="text-white font-medium">CDN включен</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Floating Elements Around Card -->
                    <div class="absolute -top-4 -right-4 w-8 h-8 bg-[#1683ab] rounded-full animate-pulse"></div>
                    <div class="absolute -bottom-4 -left-4 w-6 h-6 bg-[#1e9975] rounded-full animate-pulse" style="animation-delay: 1s;"></div>
                    <div class="absolute top-1/2 -right-8 w-4 h-4 bg-[#1683ab] rounded-full animate-ping" style="animation-delay: 2s;"></div>
                </div>
            </div>
            
            <!-- Modern Bottom Info -->
            <div class="mt-20 text-center scroll-fade-in">
                <div class="inline-flex items-center px-6 py-3 bg-white/5 border border-white/10 rounded-2xl backdrop-blur-sm">
                    <i class="fas fa-info-circle text-[#1683ab] mr-3"></i>
                    <span class="text-gray-300 text-sm">Няма дългосрочни договори • Отменете по всяко време • 24/7 поддръжка</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter Subscription Section -->
    <section class="py-24 relative overflow-hidden">
        <!-- Animated Background -->
        <div class="absolute inset-0 bg-gradient-to-br from-[#121819] via-[#11272a] to-[#112627]"></div>
        
        <!-- Floating Elements -->
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute top-20 left-10 w-2 h-2 bg-[#1e9975] rounded-full animate-ping" style="animation-delay: 0s;"></div>
            <div class="absolute top-32 right-20 w-3 h-3 bg-[#1683ab] rounded-full animate-ping" style="animation-delay: 1s;"></div>
            <div class="absolute bottom-32 left-1/3 w-2 h-2 bg-[#1e9975] rounded-full animate-ping" style="animation-delay: 2s;"></div>
            <div class="absolute top-1/2 right-1/4 w-4 h-4 bg-[#1683ab] rounded-full animate-ping" style="animation-delay: 0.5s;"></div>
        </div>
        
        <!-- Main Content -->
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16 scroll-bounce-in">
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
                <div class="flex items-center justify-center space-x-6 text-gray-400 scroll-stagger">
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
                <div class="bg-white/5 backdrop-blur-sm border border-white/10 rounded-3xl p-12 shadow-2xl relative overflow-hidden scroll-blur-in">
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
                <div class="mt-12 grid grid-cols-3 gap-8 text-center scroll-stagger">
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
            background: radial-gradient(112.01% 306.85% at 116.95% -15.43%,rgb(20, 101, 132) 0, transparent 100%);
            animation: orangeAnimation 16s linear infinite;
        }
        
        .header-animation .animation-black {
            background: linear-gradient(0deg,rgb(11, 64, 66), transparent);
        }
        
        .header-animation .animation-gray {
            opacity: 0;
            animation: grayAnimation 16s linear infinite;
            background: radial-gradient(169.22% 169.22% at 50% -45.86%,rgb(9, 67, 48) 0, transparent 100%);
        }
        
        .header-animation .animation-blue {
            opacity: 0;
            animation: blueAnimation 16s linear infinite;
            background: radial-gradient(111.77% 306.21% at -17.34% -6.72%,rgb(17, 62, 85) 0, transparent 100%);
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

        /* Scroll Effects CSS */
        .scroll-fade-in {
            opacity: 0;
            transform: translateY(50px);
            transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .scroll-fade-in.scroll-visible {
            opacity: 1;
            transform: translateY(0);
        }
        
        .scroll-slide-left {
            opacity: 0;
            transform: translateX(-100px);
            transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .scroll-slide-left.scroll-visible {
            opacity: 1;
            transform: translateX(0);
        }
        
        .scroll-slide-right {
            opacity: 0;
            transform: translateX(100px);
            transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .scroll-slide-right.scroll-visible {
            opacity: 1;
            transform: translateX(0);
        }
        
        .scroll-scale-in {
            opacity: 0;
            transform: scale(0.8);
            transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .scroll-scale-in.scroll-visible {
            opacity: 1;
            transform: scale(1);
        }
        
        .scroll-rotate-in {
            opacity: 0;
            transform: rotate(-10deg) scale(0.9);
            transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .scroll-rotate-in.scroll-visible {
            opacity: 1;
            transform: rotate(0deg) scale(1);
        }
        
        .scroll-blur-in {
            opacity: 0;
            filter: blur(10px);
            transform: scale(0.95);
            transition: all 1s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .scroll-blur-in.scroll-visible {
            opacity: 1;
            filter: blur(0px);
            transform: scale(1);
        }
        
        .parallax-element {
            transition: transform 0.1s ease-out;
        }
        
        .scroll-stagger > * {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .scroll-stagger.scroll-visible > * {
            opacity: 1;
            transform: translateY(0);
        }
        
        .scroll-stagger.scroll-visible > *:nth-child(1) { transition-delay: 0.1s; }
        .scroll-stagger.scroll-visible > *:nth-child(2) { transition-delay: 0.2s; }
        .scroll-stagger.scroll-visible > *:nth-child(3) { transition-delay: 0.3s; }
        .scroll-stagger.scroll-visible > *:nth-child(4) { transition-delay: 0.4s; }
        .scroll-stagger.scroll-visible > *:nth-child(5) { transition-delay: 0.5s; }
        .scroll-stagger.scroll-visible > *:nth-child(6) { transition-delay: 0.6s; }
        
        /* Enhanced scroll-triggered animations */
        .scroll-glow-in {
            opacity: 0;
            transform: scale(0.9);
            transition: all 1s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .scroll-glow-in.scroll-visible {
            opacity: 1;
            transform: scale(1);
        }
        
        .scroll-bounce-in {
            opacity: 0;
            transform: translateY(100px) scale(0.8);
            transition: all 1s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        }
        
        .scroll-bounce-in.scroll-visible {
            opacity: 1;
            transform: translateY(0) scale(1);
        }
    </style>
    
    <!-- Pricing Tabs JavaScript -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const monthlyTab = document.getElementById('monthly-tab');
            const yearlyTab = document.getElementById('yearly-tab');
        
            
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
        });
    </script>

    <!-- Scroll Effects JavaScript -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Scroll effect observer
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('scroll-visible');
                    }
                });
            }, observerOptions);

            // Observe all scroll effect elements
            const scrollElements = document.querySelectorAll(`
                .scroll-fade-in,
                .scroll-slide-left,
                .scroll-slide-right,
                .scroll-scale-in,
                .scroll-rotate-in,
                .scroll-blur-in,
                .scroll-glow-in,
                .scroll-bounce-in,
                .scroll-stagger
            `);

            scrollElements.forEach(element => {
                observer.observe(element);
            });

            // Parallax effect for background elements
            let ticking = false;
            
            function updateParallax() {
                const scrolled = window.pageYOffset;
                const parallaxElements = document.querySelectorAll('.parallax-element');
                
                parallaxElements.forEach(element => {
                    const speed = element.dataset.speed || 0.5;
                    const yPos = -(scrolled * speed);
                    element.style.transform = `translateY(${yPos}px)`;
                });
                
                ticking = false;
            }

            function requestTick() {
                if (!ticking) {
                    requestAnimationFrame(updateParallax);
                    ticking = true;
                }
            }

            window.addEventListener('scroll', requestTick);

            // Enhanced scroll-triggered animations
            function handleScrollAnimations() {
                const scrolled = window.pageYOffset;
                const windowHeight = window.innerHeight;
                
                // Add parallax effect to floating elements
                const floatingElements = document.querySelectorAll('.absolute.top-32, .absolute.top-40, .absolute.bottom-40, .absolute.top-1\\/3, .absolute.bottom-1\\/3');
                
                floatingElements.forEach((element, index) => {
                    const speed = 0.1 + (index * 0.05);
                    const yPos = -(scrolled * speed);
                    element.style.transform = `translateY(${yPos}px)`;
                });
            }

            window.addEventListener('scroll', handleScrollAnimations);
            
            // Smooth reveal for staggered elements
            function revealStaggeredElements() {
                const staggeredContainers = document.querySelectorAll('.scroll-stagger');
                
                staggeredContainers.forEach(container => {
                    const items = container.children;
                    const containerTop = container.offsetTop;
                    const containerHeight = container.offsetHeight;
                    const scrollTop = window.pageYOffset;
                    const windowHeight = window.innerHeight;
                    
                    if (scrollTop + windowHeight > containerTop && scrollTop < containerTop + containerHeight) {
                        container.classList.add('scroll-visible');
                    }
                });
            }

            window.addEventListener('scroll', revealStaggeredElements);
            
            // Initialize on page load
            revealStaggeredElements();
        });
    </script>
</body>
</html>
