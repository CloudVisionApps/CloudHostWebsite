<!-- Modern Professional Header - Absolute Positioned -->
<header class="absolute top-0 left-0 right-0 z-50 py-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <!-- Logo Section -->
            <div class="flex items-center space-x-4">
            <img src="assets/img/logo-on-dark.svg" alt="Logo" class="h-10">
            </div>

            <!-- Center Navigation Menu -->
            <div class="hidden md:flex items-center space-x-4">
                <a href="#home" class="text-gray-200 hover:text-white font-medium transition-colors duration-200 px-3 py-2 bg-white/5 backdrop-blur-2xl backdrop-saturate-150 backdrop-contrast-125 border border-white/5 rounded-2xl shadow-2xl">Начало</a>
                
                <!-- Hosting Mega Menu -->
                <div class="relative group">
                    <button class="text-gray-200 hover:text-white font-medium transition-colors duration-200 px-3 py-2 bg-white/5 backdrop-blur-2xl backdrop-saturate-150 backdrop-contrast-125 border border-white/5 rounded-2xl shadow-2xl flex items-center gap-2">
                        Хостинг
                        <i class="fas fa-chevron-down text-xs group-hover:rotate-180 transition-transform duration-200"></i>
                    </button>
                    
                    <?php include 'mega-menu-wrapper.php'; ?>
                    <?php render_hosting_mega_menu(); ?>
                </div>
                
                <!-- Domains Mega Menu -->
                <div class="relative group">
                    <button class="text-gray-200 hover:text-white font-medium transition-colors duration-200 px-3 py-2 bg-white/5 backdrop-blur-2xl backdrop-saturate-150 backdrop-contrast-125 border border-white/5 rounded-2xl shadow-2xl flex items-center gap-2">
                        Домейни
                        <i class="fas fa-chevron-down text-xs group-hover:rotate-180 transition-transform duration-200"></i>
                    </button>
                    
                    <?php render_domains_mega_menu(); ?>
                </div>
                
                <!-- Solutions Mega Menu -->
                <div class="relative group">
                    <button class="text-gray-200 hover:text-white font-medium transition-colors duration-200 px-3 py-2 bg-white/5 backdrop-blur-2xl backdrop-saturate-150 backdrop-contrast-125 border border-white/5 rounded-2xl shadow-2xl flex items-center gap-2">
                        Решения
                        <i class="fas fa-chevron-down text-xs group-hover:rotate-180 transition-transform duration-200"></i>
                    </button>
                    
                    <?php render_solutions_mega_menu(); ?>
                </div>
            </div>

            <!-- Right Side Actions -->
            <div class="flex items-center space-x-4">
                <!-- Sign In Button -->
                <a href="#login" class="hidden md:block group relative px-8 py-3 bg-gradient-to-r from-[#1683ab] to-[#1e9975] hover:from-[#147a9a] hover:to-[#1a8a6a] text-white font-semibold transition-all duration-300 rounded-2xl shadow-lg hover:shadow-2xl hover:shadow-[#1e9975]/30 transform hover:-translate-y-1 hover:scale-105 overflow-hidden">
                    <!-- Animated Background Overlay -->
                    <div class="absolute inset-0 bg-gradient-to-r from-[#1e9975] to-[#1683ab] opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    
                    <!-- Button Content -->
                    <span class="relative z-10 flex items-center justify-center gap-2">
                        <i class="fas fa-sign-in-alt text-lg group-hover:rotate-12 transition-transform duration-300"></i>
                        <span>Вход</span>
                        <i class="fas fa-arrow-right text-sm group-hover:translate-x-1 transition-transform duration-300"></i>
                    </span>
                    
                    <!-- Shimmer Effect -->
                    <div class="absolute inset-0 -top-full bg-gradient-to-b from-transparent via-white/20 to-transparent group-hover:top-full transition-all duration-700"></div>
                </a>
                
                <!-- Mobile Menu Button -->
                <button class="md:hidden w-10 h-10 flex items-center justify-center rounded-lg hover:bg-white/10 transition-colors" id="mobile-menu-btn" aria-label="Toggle mobile menu">
                    <div class="w-5 h-5 flex flex-col justify-center items-center space-y-1">
                        <span class="w-4 h-0.5 bg-gray-200 rounded-full transition-all duration-300"></span>
                        <span class="w-4 h-0.5 bg-gray-200 rounded-full transition-all duration-300"></span>
                        <span class="w-4 h-0.5 bg-gray-200 rounded-full transition-all duration-300"></span>
                    </div>
                </button>
            </div>
        </div>
    </div>
</header>
