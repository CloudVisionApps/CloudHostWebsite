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
<body class="min-h-screen bg-gradient-to-br from-[#0a0a0a] via-[#121212] to-[#0f0f0f]">
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
            <div class="mb-8 scroll-fade-in">
                <h1 class="text-4xl lg:text-5xl font-bold text-white mb-4 scroll-scale-in">
                    Професионален <span class="bg-gradient-to-r from-[#1683ab] to-[#1e9975] bg-clip-text text-transparent">Уеб Хостинг</span>
                </h1>
                <p class="text-lg lg:text-xl text-gray-300 max-w-3xl mx-auto scroll-slide-left">
                    Изберете от нашите внимателно изработени хостинг планове, предназначени за бизнеси от всякакъв размер. 
                    Изживейте светкавична производителност с 99.9% гарантирана работа.
                </p>
            </div>
            
    
            
            <!-- Compact Trust Indicators -->
            <div class="flex flex-wrap items-center justify-center gap-6 text-sm text-gray-400 scroll-stagger">
                <div class="flex items-center scroll-bounce-in">
                    <i class="fas fa-shield-alt text-[#1e9975] mr-2"></i>
                    <span>SSL Защита</span>
                </div>
                <div class="flex items-center scroll-bounce-in">
                    <i class="fas fa-database text-[#1683ab] mr-2"></i>
                    <span>SSD Хранилище</span>
                </div>
                <div class="flex items-center scroll-bounce-in">
                    <i class="fas fa-globe text-[#1e9975] mr-2"></i>
                    <span>CDN Включен</span>
                </div>
            </div>
        </div>
    </section>

    <?php include 'parts/detailed-pricing.php'; ?>


    <?php include 'parts/features-section.php'; ?>

    <?php include 'parts/cta-section.php'; ?>

    <?php include 'footer.php'; ?>
</body>
</html>
