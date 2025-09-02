   <!-- Features Section -->
   <section id="features" class="relative overflow-hidden py-32">
        <!-- Optimized Background -->
        <div class="absolute inset-0">
            <!-- Gradient Background -->
            <div class="absolute inset-0 bg-gradient-to-br from-[#121819] via-[#11272a] to-[#112627]"></div>
            
            <!-- Simplified Grid Pattern -->
            <div class="absolute inset-0 opacity-20" style="background-image: radial-gradient(circle at 1px 1px, rgba(30, 153, 117, 0.3) 1px, transparent 0); background-size: 50px 50px;"></div>
            
            <!-- Consolidated Floating Elements -->
            <div class="absolute top-20 left-20 w-32 h-32 border border-[#1683ab]/20 rounded-full animate-pulse rotate-12 parallax-element" data-speed="0.2"></div>
            <div class="absolute top-40 right-32 w-24 h-24 border border-[#1e9975]/20 rounded-full animate-pulse -rotate-12 parallax-element" data-speed="0.3" style="animation-delay: 1s;"></div>
            <div class="absolute bottom-32 left-1/4 w-28 h-28 border border-[#1683ab]/15 rounded-full animate-pulse rotate-45 parallax-element" data-speed="0.25" style="animation-delay: 2s;"></div>
            <div class="absolute top-1/2 left-1/3 w-36 h-36 border border-[#1e9975]/15 rounded-full animate-pulse -rotate-45 parallax-element" data-speed="0.15" style="animation-delay: 0.5s;"></div>
            
            <!-- Simplified Animated Lines -->
            <div class="absolute top-16 left-1/2 w-px h-32 bg-gradient-to-b from-transparent via-[#1683ab]/30 to-transparent animate-pulse"></div>
            <div class="absolute bottom-16 right-1/2 w-px h-32 bg-gradient-to-t from-transparent via-[#1e9975]/30 to-transparent animate-pulse" style="animation-delay: 1s;"></div>
            <div class="absolute top-1/2 left-16 w-32 h-px bg-gradient-to-r from-transparent via-[#1683ab]/25 to-transparent animate-pulse" style="animation-delay: 2s;"></div>
            <div class="absolute top-1/2 right-16 w-32 h-px bg-gradient-to-l from-transparent via-[#1e9975]/25 to-transparent animate-pulse" style="animation-delay: 0.5s;"></div>
            
            <!-- Consolidated Glowing Orbs -->
            <div class="absolute top-1/4 right-1/4 w-6 h-6 bg-[#1683ab]/20 rounded-full blur-lg animate-pulse"></div>
            <div class="absolute bottom-1/4 left-1/4 w-8 h-8 bg-[#1e9975]/20 rounded-full blur-lg animate-pulse" style="animation-delay: 1s;"></div>
            <div class="absolute top-1/3 left-1/2 w-4 h-4 bg-[#1683ab]/15 rounded-full blur-lg animate-pulse" style="animation-delay: 2s;"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header Section -->
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
            
            <!-- Main Features Grid - New Design -->
            <div class="grid lg:grid-cols-3 gap-12 mb-24 scroll-stagger">
                <?php
                $mainFeatures = [
                    [
                        'icon' => 'fas fa-rocket',
                        'title' => 'Максимална производителност',
                        'description' => 'Нашата инфраструктура използва най-новите NVMe технологии и глобална CDN мрежа за невероятна скорост.',
                        'stat' => '99.9%',
                        'statLabel' => 'Гарантирана работа',
                        'primaryColor' => '#1683ab',
                        'secondaryColor' => '#1e9975',
                        'features' => [
                            'NVMe SSD дискове',
                            'Глобална CDN мрежа',
                            'Оптимизирани за WordPress'
                        ]
                    ],
                    [
                        'icon' => 'fas fa-shield-alt',
                        'title' => 'Непрекъсната защита',
                        'description' => 'Вашите данни са защитени с най-новите технологии за сигурност и автоматични резервни копия.',
                        'stat' => '256-bit',
                        'statLabel' => 'SSL Криптиране',
                        'primaryColor' => '#1e9975',
                        'secondaryColor' => '#1683ab',
                        'features' => [
                            'Автоматична DDoS защита',
                            'Резервни копия на 6 часа',
                            'Многослойна защита'
                        ]
                    ],
                    [
                        'icon' => 'fas fa-headset',
                        'title' => 'Експертна поддръжка',
                        'description' => 'Нашият екип от специалисти е на разположение 24/7 за решаване на всеки проблем.',
                        'stat' => '&lt;2мин',
                        'statLabel' => 'Време за отговор',
                        'primaryColor' => '#1683ab',
                        'secondaryColor' => '#1e9975',
                        'features' => [
                            'Инсталтация на приложения',
                            'Конфигурация на домейни',
                            'Технически консултации'
                        ]
                    ]
                ];

                foreach ($mainFeatures as $feature):
                ?>
                <div class="group relative">
                    <!-- Enhanced Card Design -->
                    <div class="relative bg-gradient-to-br from-[#0f0f0f] via-[#1a1a1a] to-[#0f0f0f] rounded-3xl p-8 border border-[#2a2a2a] hover:border-[<?php echo $feature['primaryColor']; ?>]/60 transition-all duration-700 transform group-hover:scale-105 group-hover:-translate-y-3 overflow-hidden shadow-xl group-hover:shadow-2xl group-hover:shadow-[<?php echo $feature['primaryColor']; ?>]/20">
                        
                        <!-- Enhanced Background Pattern -->
                        <div class="absolute inset-0 opacity-10">
                            <div class="absolute top-0 right-0 w-40 h-40 bg-gradient-to-br from-[<?php echo $feature['primaryColor']; ?>] to-[<?php echo $feature['secondaryColor']; ?>] rounded-full blur-3xl animate-pulse"></div>
                            <div class="absolute bottom-0 left-0 w-32 h-32 bg-gradient-to-tr from-[<?php echo $feature['secondaryColor']; ?>] to-[<?php echo $feature['primaryColor']; ?>] rounded-full blur-3xl animate-pulse" style="animation-delay: 1s;"></div>
                            <div class="absolute top-1/2 left-1/2 w-20 h-20 bg-gradient-to-r from-[<?php echo $feature['primaryColor']; ?>] to-[<?php echo $feature['secondaryColor']; ?>] rounded-full blur-2xl animate-pulse" style="animation-delay: 2s;"></div>
                        </div>
                        
                        <!-- Enhanced Header Section -->
                        <div class="relative z-10 mb-10">
                            <!-- Header Top Row with Icon and Stats -->
                            <div class="flex items-center justify-center mb-8">
                                <!-- Enhanced Icon with Better Design -->
                                <div class="relative">
                                    <div class="w-24 h-24 bg-gradient-to-br from-[<?php echo $feature['primaryColor']; ?>] to-[<?php echo $feature['secondaryColor']; ?>] rounded-3xl flex items-center justify-center shadow-2xl group-hover:shadow-[<?php echo $feature['primaryColor']; ?>]/40 group-hover:scale-110 transition-all duration-500 relative overflow-hidden">
                                        <i class="<?php echo $feature['icon']; ?> text-white text-4xl relative z-10"></i>
                                        <!-- Enhanced Icon Background Glow -->
                                        <div class="absolute inset-0 bg-gradient-to-br from-[<?php echo $feature['primaryColor']; ?>]/40 to-[<?php echo $feature['secondaryColor']; ?>]/40 rounded-3xl blur-sm group-hover:blur-md transition-all duration-500"></div>
                                        <!-- Icon Inner Shadow -->
                                        <div class="absolute inset-0 bg-gradient-to-br from-white/20 to-transparent rounded-3xl"></div>
                                    </div>
                                  
                                </div>
                                
                              
                            </div>
                            
                            <!-- Enhanced Title Section -->
                            <div class="text-center mb-8">
                                <div class="inline-block relative">
                                    <!-- Title Background Glow -->
                                    <div class="absolute inset-0 bg-gradient-to-r from-[<?php echo $feature['primaryColor']; ?>]/20 to-[<?php echo $feature['secondaryColor']; ?>]/20 blur-2xl opacity-0 group-hover:opacity-100 transition-all duration-700 rounded-full"></div>
                                    
                                    <!-- Enhanced Title with Better Typography -->
                                    <h3 class="relative z-10 text-3xl font-black text-white mb-4 group-hover:text-[<?php echo $feature['primaryColor']; ?>] transition-all duration-500 leading-tight tracking-tight">
                                        <?php echo $feature['title']; ?>
                                    </h3>
                                    
                                    <!-- Title Underline -->
                                    <div class="h-1 bg-gradient-to-r from-[<?php echo $feature['primaryColor']; ?>] to-[<?php echo $feature['secondaryColor']; ?>] rounded-full transform scale-x-0 group-hover:scale-x-100 transition-transform duration-700 origin-center"></div>
                                </div>
                                
                                <!-- Enhanced Description with Better Layout -->
                                <div class="mt-6 max-w-md mx-auto">
                                    <p class="text-gray-300 leading-relaxed text-lg font-medium">
                                        <?php echo $feature['description']; ?>
                                    </p>
                                </div>
                            </div>
                            
                            <!-- Header Bottom Accent -->
                            <div class="flex justify-center">
                                <div class="w-20 h-1 bg-gradient-to-r from-[<?php echo $feature['primaryColor']; ?>] to-[<?php echo $feature['secondaryColor']; ?>] rounded-full opacity-50 group-hover:opacity-100 transition-all duration-500"></div>
                            </div>
                        </div>
                        
                        <!-- Enhanced Features List -->
                        <div class="relative z-10 mb-6">
                            <div class="space-y-4">
                                <?php foreach ($feature['features'] as $index => $item): ?>
                                <div class="flex items-center group/item p-3 rounded-2xl hover:bg-gradient-to-r hover:from-[<?php echo $feature['primaryColor']; ?>]/10 hover:to-[<?php echo $feature['secondaryColor']; ?>]/10 transition-all duration-300">
                                    <div class="w-10 h-10 bg-gradient-to-r from-[<?php echo $feature['primaryColor']; ?>]/30 to-[<?php echo $feature['secondaryColor']; ?>]/30 rounded-xl flex items-center justify-center mr-4 group-hover/item:scale-110 group-hover/item:bg-gradient-to-r group-hover/item:from-[<?php echo $feature['primaryColor']; ?>]/50 group-hover/item:to-[<?php echo $feature['secondaryColor']; ?>]/50 transition-all duration-300 shadow-lg">
                                        <i class="fas fa-check text-[<?php echo $feature['primaryColor']; ?>] text-sm font-bold"></i>
                                    </div>
                                    <span class="text-gray-300 group-hover/item:text-white transition-all duration-300 text-base font-medium"><?php echo $item; ?></span>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        
                        <!-- Enhanced Bottom Accent Line -->
                        <div class="absolute bottom-0 left-0 right-0 h-1.5 bg-gradient-to-r from-[<?php echo $feature['primaryColor']; ?>] via-[<?php echo $feature['secondaryColor']; ?>] to-[<?php echo $feature['primaryColor']; ?>] transform scale-x-0 group-hover:scale-x-100 transition-transform duration-700 origin-left rounded-full"></div>
                        
                   
                        <!-- Additional Decorative Elements -->
                        <div class="absolute top-4 left-4 w-2 h-2 bg-[<?php echo $feature['secondaryColor']; ?>] rounded-full opacity-0 group-hover:opacity-100 transition-all duration-500 animate-pulse"></div>
                        <div class="absolute bottom-4 right-4 w-1.5 h-1.5 bg-[<?php echo $feature['primaryColor']; ?>] rounded-full opacity-0 group-hover:opacity-100 transition-all duration-500 animate-pulse" style="animation-delay: 0.5s;"></div>
                        
                        <!-- Hover Overlay Effect -->
                        <div class="absolute inset-0 bg-gradient-to-br from-[<?php echo $feature['primaryColor']; ?>]/5 to-[<?php echo $feature['secondaryColor']; ?>]/5 opacity-0 group-hover:opacity-100 transition-all duration-500 rounded-3xl"></div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            
            <!-- Additional Features Grid - Optimized -->
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 scroll-stagger">
                <?php
                $additionalFeatures = [
                    [
                        'icon' => 'fas fa-exchange-alt',
                        'title' => 'Безплатна миграция',
                        'description' => 'Преместване на сайта без прекъсване',
                        'gradient' => 'from-[#1683ab] to-[#1e9975]'
                    ],
                    [
                        'icon' => 'fas fa-bolt',
                        'title' => 'AdminBolt',
                        'description' => 'Модерен контролен панел',
                        'gradient' => 'from-[#1e9975] to-[#1683ab]'
                    ],
                    [
                        'icon' => 'fas fa-envelope',
                        'title' => 'Имейл акаунти',
                        'description' => 'Неограничен брой',
                        'gradient' => 'from-[#1683ab] to-[#1e9975]'
                    ],
                    [
                        'icon' => 'fas fa-database',
                        'title' => 'SSD хранилище',
                        'description' => 'Бързо достъпване',
                        'gradient' => 'from-[#1e9975] to-[#1683ab]'
                    ]
                ];

                foreach ($additionalFeatures as $feature):
                ?>
                <div class="group text-center p-6 rounded-2xl hover:bg-white/5 transition-all duration-500 transform hover:scale-105">
                    <div class="relative mb-4">
                        <div class="w-16 h-16 bg-gradient-to-r <?php echo $feature['gradient']; ?> rounded-2xl flex items-center justify-center mx-auto group-hover:scale-110 transition-all duration-500 shadow-lg">
                            <i class="<?php echo $feature['icon']; ?> text-white text-xl"></i>
                        </div>
                        <!-- Hover Glow -->
                        <div class="absolute inset-0 bg-gradient-to-r <?php echo $feature['gradient']; ?> rounded-2xl opacity-0 group-hover:opacity-20 transition-opacity duration-500 blur-xl"></div>
                    </div>
                    <h4 class="font-bold text-white mb-2 text-lg group-hover:text-[#1683ab] transition-colors duration-300"><?php echo $feature['title']; ?></h4>
                    <p class="text-sm text-gray-300 group-hover:text-gray-200 transition-colors duration-300"><?php echo $feature['description']; ?></p>
                </div>
                <?php endforeach; ?>
            </div>
            
            <!-- Stats Section - Optimized -->
            <div class="mt-24 text-center scroll-fade-in">
                <div class="grid md:grid-cols-4 gap-8">
                    <?php
                    $stats = [
                        ['value' => '99.9%', 'label' => 'Достъпност', 'color' => 'text-[#1683ab]'],
                        ['value' => '24/7', 'label' => 'Поддръжка', 'color' => 'text-[#1e9975]'],
                        ['value' => '&lt;2мин', 'label' => 'Реакция', 'color' => 'text-[#1683ab]'],
                        ['value' => '100%', 'label' => 'Защита', 'color' => 'text-[#1e9975]']
                    ];

                    foreach ($stats as $stat):
                    ?>
                    <div class="group">
                        <div class="text-5xl font-bold <?php echo $stat['color']; ?> mb-3 group-hover:scale-110 transition-transform duration-500"><?php echo $stat['value']; ?></div>
                        <div class="text-gray-400 uppercase tracking-wider font-medium"><?php echo $stat['label']; ?></div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>