<?php
/**
 * Reusable Mega Menu Wrapper
 * Usage: include this file and call render_mega_menu() function
 */

function render_mega_menu($menu_data) {
    $defaults = [
        'width' => 'w-[800px]',
        'sections' => [],
        'custom_classes' => '',
        'show_bottom_cta' => false,
        'bottom_cta_text' => '',
        'bottom_cta_url' => '#',
        'custom_design' => false,
        'custom_template' => ''
    ];
    
    $menu_data = array_merge($defaults, $menu_data);
    
    // If custom design is specified, use custom template
    if ($menu_data['custom_design'] && $menu_data['custom_template']) {
        call_user_func($menu_data['custom_template'], $menu_data);
        return;
    }
    
    // Standard mega menu rendering
    ?>
    
    <div class="absolute top-full mt-4 left-1/2 transform -translate-x-1/2 <?php echo $menu_data['width']; ?> max-w-[90vw] bg-white/10 backdrop-blur-2xl backdrop-saturate-150 backdrop-contrast-125 border border-white/5 rounded-2xl shadow-2xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform translate-y-4 group-hover:translate-y-0 z-50 <?php echo $menu_data['custom_classes']; ?>">
        <div class="p-8">
            <div class="grid grid-cols-<?php echo count($menu_data['sections']); ?> gap-8">
                <?php foreach ($menu_data['sections'] as $section): ?>
                <div class="space-y-5">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-11 h-11 bg-gradient-to-r from-<?php echo $section['icon_gradient_start']; ?> to-<?php echo $section['icon_gradient_end']; ?> rounded-xl flex items-center justify-center">
                            <i class="fas fa-<?php echo $section['icon']; ?> text-white"></i>
                        </div>
                        <h3 class="text-white font-semibold text-lg"><?php echo $section['title']; ?></h3>
                    </div>
                    <ul class="space-y-3">
                        <?php foreach ($section['links'] as $link): ?>
                        <li>
                            <a href="<?php echo $link['url']; ?>" 
                               class="text-white/90 hover:text-white transition-colors duration-200 py-1.5 px-2 rounded-lg hover:bg-white/10">
                                <?php echo $link['text']; ?>
                            </a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <?php endforeach; ?>
            </div>
            
            <?php if ($menu_data['show_bottom_cta']): ?>
            <!-- Bottom CTA -->
            <div class="mt-8 pt-6 border-t border-white/20 text-center">
                <a href="<?php echo $menu_data['bottom_cta_url']; ?>" class="inline-flex items-center gap-2 text-white hover:text-[#1e9975] transition-colors duration-200 font-semibold">
                    <span><?php echo $menu_data['bottom_cta_text']; ?></span>
                    <i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform duration-200"></i>
                </a>
            </div>
            <?php endif; ?>
        </div>
    </div>
    
    <?php
}

// Example usage function for hosting mega menu
function render_hosting_mega_menu() {
    $hosting_menu = [
        'width' => 'w-[800px]',
        'sections' => [
            [
                'icon' => 'server',
                'icon_gradient_start' => '[#1683ab]',
                'icon_gradient_end' => '[#1e9975]',
                'title' => 'Хостинг',
                'links' => [
                    ['url' => 'hosting-single-page.php?plan=starter', 'text' => 'Starter план'],
                    ['url' => 'hosting-single-page.php?plan=professional', 'text' => 'Professional план'],
                    ['url' => 'hosting-single-page.php?plan=enterprise', 'text' => 'Enterprise план'],
                    ['url' => 'hosting-single-page.php?plan=comparison', 'text' => 'Сравнение']
                ]
            ],
            [
                'icon' => 'cloud',
                'icon_gradient_start' => '[#1e9975]',
                'icon_gradient_end' => '[#1683ab]',
                'title' => 'Cloud Решения',
                'links' => [
                    ['url' => 'hosting-single-page.php?plan=vps', 'text' => 'VPS Хостинг'],
                    ['url' => 'hosting-single-page.php?plan=dedicated', 'text' => 'Dedicated сървъри'],
                    ['url' => 'hosting-single-page.php?plan=cloud', 'text' => 'Cloud Хостинг'],
                    ['url' => 'hosting-single-page.php?plan=backup', 'text' => 'Backup Решения']
                ]
            ],
            [
                'icon' => 'cloud',
                'icon_gradient_start' => '[#1683ab]',
                'icon_gradient_end' => '[#1e9975]',
                'title' => 'Функции',
                'links' => [
                    ['url' => 'hosting-single-page.php?plan=migration', 'text' => 'Безплатна Миграция'],
                    ['url' => 'hosting-single-page.php?plan=ssl', 'text' => 'SSL Сертификати'],
                    ['url' => 'hosting-single-page.php?plan=cdn', 'text' => 'CDN Мрежа'],
                    ['url' => 'hosting-single-page.php?plan=support', 'text' => '24/7 Поддръжка']
                ]
            ]
        ],
        'show_bottom_cta' => true,
        'bottom_cta_text' => 'Виж всички хостинг решения',
        'bottom_cta_url' => 'hosting-single-page.php'
    ];
    
    render_mega_menu($hosting_menu);
}

// Example usage function for domains mega menu
function render_domains_mega_menu() {
    $domains_menu = [
        'width' => 'w-[800px]',
        'custom_design' => true,
        'custom_template' => 'custom_domains_template',
        'show_bottom_cta' => true,
        'bottom_cta_text' => 'Виж всички домейн услуги',
        'bottom_cta_url' => '#domains'
    ];
    
    render_mega_menu($domains_menu);
}

// Example usage function for solutions mega menu
function render_solutions_mega_menu() {
    $solutions_menu = [
        'width' => 'w-[750px]',
        'sections' => [
            [
                'icon' => 'cogs',
                'icon_gradient_start' => '[#1683ab]',
                'icon_gradient_end' => '[#1e9975]',
                'title' => 'Разработка',
                'links' => [
                    ['url' => '#web', 'text' => 'Уеб разработка'],
                    ['url' => '#api', 'text' => 'API интеграция'],
                    ['url' => '#maintenance', 'text' => 'Поддръжка']
                ]
            ],
            [
                'icon' => 'database',
                'icon_gradient_start' => '[#1e9975]',
                'icon_gradient_end' => '[#1683ab]',
                'title' => 'Бази данни',
                'links' => [
                    ['url' => '#mysql', 'text' => 'MySQL'],
                    ['url' => '#postgresql', 'text' => 'PostgreSQL'],
                    ['url' => '#mongodb', 'text' => 'MongoDB'],
                    ['url' => '#redis', 'text' => 'Redis']
                ]
            ],
            [
                'icon' => 'rocket',
                'icon_gradient_start' => '[#1683ab]',
                'icon_gradient_end' => '[#1e9975]',
                'title' => 'Оптимизация',
                'links' => [
                    ['url' => '#performance', 'text' => 'Производителност'],
                    ['url' => '#seo', 'text' => 'SEO оптимизация'],
                    ['url' => '#security', 'text' => 'Сигурност'],
                    ['url' => '#monitoring', 'text' => 'Мониторинг']
                ]
            ]
        ],
        'show_bottom_cta' => true,
        'bottom_cta_text' => 'Виж всички решения',
        'bottom_cta_url' => 'solutions-single-page.php'
    ];
    
    render_mega_menu($solutions_menu);
}

// ========================================
// BASIC MEGA MENU EXAMPLES (USING BASIC TEMPLATE)
// ========================================

/**
 * Example: Basic Services Mega Menu
 * Uses the basic template for consistent styling
 */
function render_services_mega_menu() {
    $services_menu = [
        'width' => 'w-[800px]',
        'sections' => [
            [
                'icon' => 'tools',
                'icon_gradient_start' => '[#1683ab]',
                'icon_gradient_end' => '[#1e9975]',
                'title' => 'Основни Услуги',
                'links' => [
                    ['url' => '#web-design', 'text' => 'Уеб Дизайн'],
                    ['url' => '#development', 'text' => 'Разработка'],
                    ['url' => '#maintenance', 'text' => 'Поддръжка'],
                    ['url' => '#consulting', 'text' => 'Консултации']
                ]
            ],
            [
                'icon' => 'rocket',
                'icon_gradient_start' => '[#1e9975]',
                'icon_gradient_end' => '[#1683ab]',
                'title' => 'Премиум Услуги',
                'links' => [
                    ['url' => '#seo', 'text' => 'SEO Оптимизация'],
                    ['url' => '#marketing', 'text' => 'Дигитал Маркетинг'],
                    ['url' => '#analytics', 'text' => 'Анализ на данни'],
                    ['url' => '#automation', 'text' => 'Автоматизация']
                ]
            ],
            [
                'icon' => 'shield-alt',
                'icon_gradient_start' => '[#1683ab]',
                'icon_gradient_end' => '[#1e9975]',
                'title' => 'Сигурност',
                'links' => [
                    ['url' => '#ssl', 'text' => 'SSL Сертификати'],
                    ['url' => '#backup', 'text' => 'Backup Решения'],
                    ['url' => '#monitoring', 'text' => 'Мониторинг'],
                    ['url' => '#compliance', 'text' => 'Съответствие']
                ]
            ]
        ],
        'show_bottom_cta' => true,
        'bottom_cta_text' => 'Виж всички услуги',
        'bottom_cta_url' => '#services'
    ];
    
    render_mega_menu($services_menu);
}

/**
 * Example: Basic Support Mega Menu
 * Uses the basic template for consistent styling
 */
function render_support_mega_menu() {
    $support_menu = [
        'width' => 'w-[600px]',
        'sections' => [
            [
                'icon' => 'headset',
                'icon_gradient_start' => '[#1683ab]',
                'icon_gradient_end' => '[#1e9975]',
                'title' => 'Поддръжка',
                'links' => [
                    ['url' => '#tickets', 'text' => 'Тикети'],
                    ['url' => '#chat', 'text' => 'Live Chat'],
                    ['url' => '#phone', 'text' => 'Телефон'],
                    ['url' => '#email', 'text' => 'Имейл']
                ]
            ],
            [
                'icon' => 'book',
                'icon_gradient_start' => '[#1e9975]',
                'icon_gradient_end' => '[#1683ab]',
                'title' => 'Документация',
                'links' => [
                    ['url' => '#guides', 'text' => 'Ръководства'],
                    ['url' => '#faq', 'text' => 'Често Задавани Въпроси'],
                    ['url' => '#tutorials', 'text' => 'Уроци'],
                    ['url' => '#api-docs', 'text' => 'API Документация']
                ]
            ]
        ],
        'show_bottom_cta' => true,
        'bottom_cta_text' => 'Свържете се с нас',
        'bottom_cta_url' => '#contact'
    ];
    
    render_mega_menu($support_menu);
}

/**
 * Example: Basic Company Mega Menu
 * Uses the basic template for consistent styling
 */
function render_company_mega_menu() {
    $company_menu = [
        'width' => 'w-[700px]',
        'sections' => [
            [
                'icon' => 'info-circle',
                'icon_gradient_start' => '[#1683ab]',
                'icon_gradient_end' => '[#1e9975]',
                'title' => 'За Компанията',
                'links' => [
                    ['url' => '#about', 'text' => 'За нас'],
                    ['url' => '#team', 'text' => 'Екип'],
                    ['url' => '#careers', 'text' => 'Кариери'],
                    ['url' => '#news', 'text' => 'Новини']
                ]
            ],
            [
                'icon' => 'handshake',
                'icon_gradient_start' => '[#1e9975]',
                'icon_gradient_end' => '[#1683ab]',
                'title' => 'Партньорство',
                'links' => [
                    ['url' => '#partners', 'text' => 'Партньори'],
                    ['url' => '#resellers', 'text' => 'Препродавачи'],
                    ['url' => '#affiliates', 'text' => 'Партньорска програма'],
                    ['url' => '#whitelabel', 'text' => 'White Label']
                ]
            ],
            [
                'icon' => 'globe',
                'icon_gradient_start' => '[#1683ab]',
                'icon_gradient_end' => '[#1e9975]',
                'title' => 'Глобално Присъствие',
                'links' => [
                    ['url' => '#locations', 'text' => 'Локации'],
                    ['url' => '#datacenters', 'text' => 'Data центрове'],
                    ['url' => '#compliance', 'text' => 'Съответствие'],
                    ['url' => '#languages', 'text' => 'Езици']
                ]
            ]
        ],
        'show_bottom_cta' => true,
        'bottom_cta_text' => 'Научете повече за нас',
        'bottom_cta_url' => '#about'
    ];
    
    render_mega_menu($company_menu);
}

// ========================================
// BASIC MEGA MENU TEMPLATE (REUSABLE)
// ========================================

/**
 * Basic Mega Menu Template - Reusable for any menu with sections and links
 * This function provides consistent styling for all basic mega menus
 */
function basic_mega_menu_template($menu_data) {
    ?>
    <div class="absolute top-full mt-4 left-1/2 transform -translate-x-1/2 <?php echo $menu_data['width']; ?> max-w-[90vw] bg-white/10 backdrop-blur-2xl backdrop-saturate-150 backdrop-contrast-125 border border-white/5 rounded-2xl shadow-2xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform translate-y-4 group-hover:translate-y-0 z-50 <?php echo $menu_data['custom_classes']; ?>">
        <div class="p-8">
            <div class="grid grid-cols-<?php echo count($menu_data['sections']); ?> gap-8">
                <?php foreach ($menu_data['sections'] as $section): ?>
                <div class="space-y-5">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-11 h-11 bg-gradient-to-r from-<?php echo $section['icon_gradient_start']; ?> to-<?php echo $section['icon_gradient_end']; ?> rounded-xl flex items-center justify-center">
                            <i class="fas fa-<?php echo $section['icon']; ?> text-white"></i>
                        </div>
                        <h3 class="text-white font-semibold text-lg"><?php echo $section['title']; ?></h3>
                    </div>
                    <ul class="space-y-3">
                        <?php foreach ($section['links'] as $link): ?>
                        <li>
                            <a href="<?php echo $link['url']; ?>" 
                               class="text-white/90 hover:text-white transition-colors duration-200 py-1.5 px-2 rounded-lg hover:bg-white/10">
                                <?php echo $link['text']; ?>
                            </a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <?php endforeach; ?>
            </div>
            
            <?php if ($menu_data['show_bottom_cta']): ?>
            <!-- Bottom CTA -->
            <div class="mt-8 pt-6 border-t border-white/20 text-center">
                <a href="<?php echo $menu_data['bottom_cta_url']; ?>" class="inline-flex items-center gap-2 text-white hover:text-[#1e9975] transition-colors duration-200 font-semibold">
                    <span><?php echo $menu_data['bottom_cta_text']; ?></span>
                    <i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform duration-200"></i>
                </a>
            </div>
            <?php endif; ?>
        </div>
    </div>
    <?php
}

// ========================================
// CUSTOM TEMPLATE FUNCTIONS
// ========================================

/**
 * Custom Domains Mega Menu Template
 * Features: Domain search input + Popular TLDs grid
 */
function custom_domains_template($menu_data) {
    ?>
    <div class="absolute top-full mt-4 left-1/2 transform -translate-x-1/2 <?php echo $menu_data['width']; ?> max-w-[90vw] bg-white/10 backdrop-blur-2xl backdrop-saturate-150 backdrop-contrast-125 border border-white/5 rounded-2xl shadow-2xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform translate-y-4 group-hover:translate-y-0 z-50 <?php echo $menu_data['custom_classes']; ?>">
        <div class="p-8">
            <div class="grid grid-cols-2 gap-8">
                <!-- Domain Search Section -->
                <div class="space-y-4">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-10 h-10 bg-gradient-to-r from-[#1e9975] to-[#1683ab] rounded-xl flex items-center justify-center">
                            <i class="fas fa-search text-white"></i>
                        </div>
                        <h3 class="text-white font-semibold text-lg">Търсене на Домейни</h3>
                    </div>
                    <div class="space-y-3">
                        <div class="relative">
                            <input type="text" 
                                   placeholder="Въведете име на домейн" 
                                   class="w-full px-4 py-3 bg-white/20 border border-white/30 rounded-xl text-white placeholder-white/60 focus:outline-none focus:border-[#1e9975] focus:ring-2 focus:ring-[#1e9975]/20">
                            <button class="absolute right-2 top-1/2 transform -translate-y-1/2 w-8 h-8 bg-[#1e9975] rounded-lg flex items-center justify-center hover:bg-[#1683ab] transition-colors duration-200">
                                <i class="fas fa-search text-white text-sm"></i>
                            </button>
                        </div>
                        <p class="text-sm text-white/80">Проверете наличността на вашия идеален домейн</p>
                    </div>
                </div>
                
                <!-- Popular TLDs Section -->
                <div class="space-y-4">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-10 h-10 bg-gradient-to-r from-[#1683ab] to-[#1e9975] rounded-xl flex items-center justify-center">
                            <i class="fas fa-tags text-white"></i>
                        </div>
                        <h3 class="text-white font-semibold text-lg">Популярни Домейни</h3>
                    </div>
                    <div class="grid grid-cols-2 gap-2">
                        <a href="#com" class="flex items-center justify-between p-2 bg-white/20 rounded-lg hover:bg-white/30 transition-colors duration-200">
                            <span class="text-white font-medium">.com</span>
                            <span class="text-[#1e9975] text-sm">15лв</span>
                        </a>
                        <a href="#bg" class="flex items-center justify-between p-2 bg-white/20 rounded-lg hover:bg-white/30 transition-colors duration-200">
                            <span class="text-white font-medium">.bg</span>
                            <span class="text-[#1e9975] text-sm">12лв</span>
                        </a>
                        <a href="#net" class="flex items-center justify-between p-2 bg-white/20 rounded-lg hover:bg-white/30 transition-colors duration-200">
                            <span class="text-white font-medium">.net</span>
                            <span class="text-[#1e9975] text-sm">18лв</span>
                        </a>
                        <a href="#eu" class="flex items-center justify-between p-2 bg-white/20 rounded-lg hover:bg-white/30 transition-colors duration-200">
                            <span class="text-white font-medium">.eu</span>
                            <span class="text-[#1e9975] text-sm">16лв</span>
                        </a>
                    </div>
                </div>
            </div>
            
            <?php if ($menu_data['show_bottom_cta']): ?>
            <!-- Bottom CTA -->
            <div class="mt-8 pt-6 border-t border-white/20 text-center">
                <a href="<?php echo $menu_data['bottom_cta_url']; ?>" class="inline-flex items-center gap-2 text-white hover:text-[#1e9975] transition-colors duration-200 font-semibold">
                    <span><?php echo $menu_data['bottom_cta_text']; ?></span>
                    <i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform duration-200"></i>
                </a>
            </div>
            <?php endif; ?>
        </div>
    </div>
    <?php
}

/**
 * Custom Solutions Mega Menu Template
 * Features: Business + Technical solutions with icons
 */
function custom_solutions_template($menu_data) {
    ?>
    <div class="absolute top-full mt-4 left-1/2 transform -translate-x-1/2 <?php echo $menu_data['width']; ?> max-w-[90vw] bg-white/10 backdrop-blur-2xl backdrop-saturate-150 backdrop-contrast-125 border border-white/5 rounded-2xl shadow-2xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform translate-y-4 group-hover:translate-y-0 z-50 <?php echo $menu_data['custom_classes']; ?>">
        <div class="p-8">
            <div class="grid grid-cols-2 gap-8">
                <!-- Business Solutions -->
                <div class="space-y-4">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-10 h-10 bg-gradient-to-r from-[#1683ab] to-[#1e9975] rounded-xl flex items-center justify-center">
                            <i class="fas fa-briefcase text-white"></i>
                        </div>
                        <h3 class="text-white font-semibold text-lg">Бизнес Решения</h3>
                    </div>
                    <ul class="space-y-2">
                        <li><a href="#ecommerce" class="text-white/90 hover:text-white transition-colors duration-200 flex items-center gap-2 py-1.5 px-2 rounded-lg hover:bg-white/10">
                            <i class="fas fa-shopping-cart text-[#1e9975] text-xs"></i>E-commerce Хостинг
                        </a></li>
                        <li><a href="#wordpress" class="text-white/90 hover:text-white transition-colors duration-200 flex items-center gap-2 py-1.5 px-2 rounded-lg hover:bg-white/10">
                            <i class="fas fa-wordpress text-[#1e9975] text-xs"></i>WordPress Хостинг
                        </a></li>
                        <li><a href="#reseller" class="text-white/90 hover:text-white transition-colors duration-200 flex items-center gap-2 py-1.5 px-2 rounded-lg hover:bg-white/10">
                            <i class="fas fa-store text-[#1e9975] text-xs"></i>Reseller Хостинг
                        </a></li>
                        <li><a href="#whmcs" class="text-white/90 hover:text-white transition-colors duration-200 flex items-center gap-2 py-1.5 px-2 rounded-lg hover:bg-white/10">
                            <i class="fas fa-cogs text-[#1e9975] text-xs"></i>WHMCS Интеграция
                        </a></li>
                    </ul>
                </div>
                
                <!-- Technical Solutions -->
                <div class="space-y-4">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-10 h-10 bg-gradient-to-r from-[#1e9975] to-[#1683ab] rounded-xl flex items-center justify-center">
                            <i class="fas fa-code text-white"></i>
                        </div>
                        <h3 class="text-white font-semibold text-lg">Технически Решения</h3>
                    </div>
                    <ul class="space-y-2">
                        <li><a href="#api" class="text-white/90 hover:text-white transition-colors duration-200 flex items-center gap-2 py-1.5 px-2 rounded-lg hover:bg-white/10">
                            <i class="fas fa-plug text-[#1e9975] text-xs"></i>API Доступ
                        </a></li>
                        <li><a href="#git" class="text-white/90 hover:text-white transition-colors duration-200 flex items-center gap-2 py-1.5 px-2 rounded-lg hover:bg-white/10">
                            <i class="fas fa-git-alt text-[#1e9975] text-xs"></i>Git Интеграция
                        </a></li>
                        <li><a href="#docker" class="text-white/90 hover:text-white transition-colors duration-200 flex items-center gap-2 py-1.5 px-2 rounded-lg hover:bg-white/10">
                            <i class="fas fa-cube text-[#1e9975] text-xs"></i>Docker Поддръжка
                        </a></li>
                        <li><a href="#monitoring" class="text-white/90 hover:text-white transition-colors duration-200 flex items-center gap-2 py-1.5 px-2 rounded-lg hover:bg-white/10">
                            <i class="fas fa-chart-line text-[#1e9975] text-xs"></i>Мониторинг
                        </a></li>
                    </ul>
                </div>
            </div>
            
            <?php if ($menu_data['show_bottom_cta']): ?>
            <!-- Bottom CTA -->
            <div class="mt-8 pt-6 border-t border-white/20 text-center">
                <a href="<?php echo $menu_data['bottom_cta_url']; ?>" class="inline-flex items-center gap-2 text-white hover:text-[#1e9975] transition-colors duration-200 font-semibold">
                    <span><?php echo $menu_data['bottom_cta_text']; ?></span>
                    <i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform duration-200"></i>
                </a>
            </div>
            <?php endif; ?>
        </div>
    </div>
    <?php
}

/**
 * Custom Hosting Mega Menu Template
 * Features: Enhanced hosting plans with feature highlights
 */
function custom_hosting_template($menu_data) {
    ?>
    <div class="absolute top-full mt-4 left-1/2 transform -translate-x-1/2 <?php echo $menu_data['width']; ?> max-w-[90vw] bg-white/10 backdrop-blur-2xl backdrop-saturate-150 backdrop-contrast-125 border border-white/5 rounded-2xl shadow-2xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform translate-y-4 group-hover:translate-y-0 z-50 <?php echo $menu_data['custom_classes']; ?>">
        <div class="p-8">
            <div class="grid grid-cols-3 gap-8">
                <!-- Shared Hosting -->
                <div class="space-y-5">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-11 h-11 bg-gradient-to-r from-[#1683ab] to-[#1e9975] rounded-xl flex items-center justify-center">
                            <i class="fas fa-server text-white"></i>
                        </div>
                        <h3 class="text-white font-semibold text-lg">Хостинг</h3>
                    </div>
                    <ul class="space-y-3">
                        <li><a href="#starter" class="text-white/90 hover:text-white transition-colors duration-200 py-1.5 px-2 rounded-lg hover:bg-white/10">Starter план</a></li>
                        <li><a href="#professional" class="text-white/90 hover:text-white transition-colors duration-200 py-1.5 px-2 rounded-lg hover:bg-white/10">Professional план</a></li>
                        <li><a href="#enterprise" class="text-white/90 hover:text-white transition-colors duration-200 py-1.5 px-2 rounded-lg hover:bg-white/10">Enterprise план</a></li>
                        <li><a href="#comparison" class="text-white/90 hover:text-white transition-colors duration-200 py-1.5 px-2 rounded-lg hover:bg-white/10">Сравнение</a></li>
                    </ul>
                </div>
                
                <!-- Cloud Solutions -->
                <div class="space-y-5">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-11 h-11 bg-gradient-to-r from-[#1e9975] to-[#1683ab] rounded-xl flex items-center justify-center">
                            <i class="fas fa-cloud text-white"></i>
                        </div>
                        <h3 class="text-white font-semibold text-lg">Cloud Решения</h3>
                    </div>
                    <ul class="space-y-3">
                        <li><a href="#vps" class="text-white/90 hover:text-white transition-colors duration-200 py-1.5 px-2 rounded-lg hover:bg-white/10">VPS Хостинг</a></li>
                        <li><a href="#dedicated" class="text-white/90 hover:text-white transition-colors duration-200 py-1.5 px-2 rounded-lg hover:bg-white/10">Dedicated Сървъри</a></li>
                        <li><a href="#cloud" class="text-white/90 hover:text-white transition-colors duration-200 py-1.5 px-2 rounded-lg hover:bg-white/10">Cloud Хостинг</a></li>
                        <li><a href="#backup" class="text-white/90 hover:text-white transition-colors duration-200 py-1.5 px-2 rounded-lg hover:bg-white/10">Backup Решения</a></li>
                    </ul>
                </div>
                
                <!-- Special Features -->
                <div class="space-y-5">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-11 h-11 bg-gradient-to-r from-[#1683ab] to-[#1e9975] rounded-xl flex items-center justify-center">
                            <i class="fas fa-cloud text-white"></i> 
                        </div>
                        <h3 class="text-white font-semibold text-lg">Функции</h3>
                    </div>
                    <ul class="space-y-3">
                        <li><a href="#migration" class="text-white/90 hover:text-white transition-colors duration-200 py-1.5 px-2 rounded-lg hover:bg-white/10">Безплатна Миграция</a></li>
                        <li><a href="#ssl" class="text-white/90 hover:text-white transition-colors duration-200 py-1.5 px-2 rounded-lg hover:bg-white/10">SSL Сертификати</a></li>
                        <li><a href="#cdn" class="text-white/90 hover:text-white transition-colors duration-200 py-1.5 px-2 rounded-lg hover:bg-white/10">CDN Мрежа</a></li>
                        <li><a href="#support" class="text-white/90 hover:text-white transition-colors duration-200 py-1.5 px-2 rounded-lg hover:bg-white/10">24/7 Поддръжка</a></li>
                    </ul>
                </div>
            </div>
            
            <?php if ($menu_data['show_bottom_cta']): ?>
            <!-- Bottom CTA -->
            <div class="mt-8 pt-6 border-t border-white/20 text-center">
                <a href="<?php echo $menu_data['bottom_cta_url']; ?>" class="inline-flex items-center gap-2 text-white hover:text-[#1e9975] transition-colors duration-200 font-semibold">
                    <span><?php echo $menu_data['bottom_cta_text']; ?></span>
                    <i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform duration-200"></i>
                </a>
            </div>
            <?php endif; ?>
        </div>
    </div>
    <?php
}
?>
