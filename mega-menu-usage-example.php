<?php
/**
 * Example Usage of Reusable Mega Menu Wrapper
 * 
 * This file demonstrates how to use the mega-menu-wrapper.php system
 * to create custom mega menus for your website.
 */

// Include the mega menu wrapper
include 'mega-menu-wrapper.php';

// Example 1: Custom Hosting Menu
function render_custom_hosting_menu() {
    $custom_hosting = [
        'width' => 'w-[900px]', // Custom width
        'sections' => [
            [
                'icon' => 'server',
                'icon_gradient_start' => '[#1683ab]',
                'icon_gradient_end' => '[#1e9975]',
                'title' => 'Споделен Хостинг',
                'links' => [
                    ['url' => '#basic', 'text' => 'Basic план'],
                    ['url' => '#premium', 'text' => 'Premium план'],
                    ['url' => '#business', 'text' => 'Business план']
                ]
            ],
            [
                'icon' => 'cloud',
                'icon_gradient_start' => '[#1e9975]',
                'icon_gradient_end' => '[#1683ab]',
                'title' => 'Cloud Хостинг',
                'links' => [
                    ['url' => '#vps', 'text' => 'VPS сървъри'],
                    ['url' => '#dedicated', 'text' => 'Dedicated сървъри'],
                    ['url' => '#kubernetes', 'text' => 'Kubernetes']
                ]
            ],
            [
                'icon' => 'shield-alt',
                'icon_gradient_start' => '[#1683ab]',
                'icon_gradient_end' => '[#1e9975]',
                'title' => 'Сигурност',
                'links' => [
                    ['url' => '#ssl', 'text' => 'SSL сертификати'],
                    ['url' => '#firewall', 'text' => 'Firewall защита'],
                    ['url' => '#backup', 'text' => 'Автоматични backup-и']
                ]
            ]
        ],
        'show_bottom_cta' => true,
        'bottom_cta_text' => 'Виж всички хостинг планове',
        'bottom_cta_url' => '#hosting-plans'
    ];
    
    render_mega_menu($custom_hosting);
}

// Example 2: Simple 2-column Menu
function render_simple_menu() {
    $simple_menu = [
        'width' => 'w-[500px]',
        'sections' => [
            [
                'icon' => 'info-circle',
                'icon_gradient_start' => '[#1683ab]',
                'icon_gradient_end' => '[#1e9975]',
                'title' => 'Информация',
                'links' => [
                    ['url' => '#about', 'text' => 'За нас'],
                    ['url' => '#contact', 'text' => 'Контакти'],
                    ['url' => '#support', 'text' => 'Поддръжка']
                ]
            ],
            [
                'icon' => 'tools',
                'icon_gradient_start' => '[#1e9975]',
                'icon_gradient_end' => '[#1683ab]',
                'title' => 'Инструменти',
                'links' => [
                    ['url' => '#calculator', 'text' => 'Калкулатор'],
                    ['url' => '#status', 'text' => 'Статус на услугите'],
                    ['url' => '#knowledge', 'text' => 'База знания']
                ]
            ]
        ]
        // No bottom CTA for this simple menu
    ];
    
    render_mega_menu($simple_menu);
}

// Example 3: Menu with Custom Classes
function render_custom_styled_menu() {
    $custom_styled = [
        'width' => 'w-[800px]',
        'custom_classes' => 'border-2 border-[#1e9975]/30', // Custom border
        'sections' => [
            [
                'icon' => 'star',
                'icon_gradient_start' => '[#ffd700]',
                'icon_gradient_end' => '[#ff8c00]',
                'title' => 'Премиум Услуги',
                'links' => [
                    ['url' => '#vip', 'text' => 'VIP поддръжка'],
                    ['url' => '#priority', 'text' => 'Приоритетна поддръжка'],
                    ['url' => '#consulting', 'text' => 'Консултации']
                ]
            ],
            [
                'icon' => 'gem',
                'icon_gradient_start' => '[#ff69b4]',
                'icon_gradient_end' => '[#9370db]',
                'title' => 'Ексклузивни Решения',
                'links' => [
                    ['url' => '#enterprise', 'text' => 'Enterprise решения'],
                    ['url' => '#custom', 'text' => 'Персонализирани решения'],
                    ['url' => '#migration', 'text' => 'Миграция на данни']
                ]
            ]
        ],
        'show_bottom_cta' => true,
        'bottom_cta_text' => 'Свържете се за персонална консултация',
        'bottom_cta_url' => '#contact'
    ];
    
    render_mega_menu($custom_styled);
}

// Usage in HTML:
/*
<div class="relative group">
    <button class="text-white hover:text-[#1e9975] transition-colors duration-200">
        Custom Menu
        <i class="fas fa-chevron-down"></i>
    </button>
    
    <?php render_custom_hosting_menu(); ?>
</div>

<div class="relative group">
    <button class="text-white hover:text-[#1e9975] transition-colors duration-200">
        Simple Menu
        <i class="fas fa-chevron-down"></i>
    </button>
    
    <?php render_simple_menu(); ?>
</div>

<div class="relative group">
    <button class="text-white hover:text-[#1e9975] transition-colors duration-200">
        Styled Menu
        <i class="fas fa-chevron-down"></i>
    </button>
    
    <?php render_custom_styled_menu(); ?>
</div>

// ========================================
// CUSTOM DESIGN EXAMPLES
// ========================================

// Example 4: Custom Design with Custom Template
function render_custom_domains_menu() {
    $custom_domains = [
        'width' => 'w-[700px]',
        'custom_design' => true,
        'custom_template' => 'custom_domains_template',
        'show_bottom_cta' => true,
        'bottom_cta_text' => 'Регистрирай домейн сега',
        'bottom_cta_url' => '#register-domain'
    ];
    
    render_mega_menu($custom_domains);
}

// Example 5: Custom Design with Custom Template
function render_custom_solutions_menu() {
    $custom_solutions = [
        'width' => 'w-[900px]',
        'custom_design' => true,
        'custom_template' => 'custom_solutions_template',
        'custom_classes' => 'border-2 border-[#1e9975]/30',
        'show_bottom_cta' => true,
        'bottom_cta_text' => 'Персонална консултация',
        'bottom_cta_url' => '#consultation'
    ];
    
    render_mega_menu($custom_solutions);
}

// Example 6: Custom Design with Custom Template
function render_custom_hosting_menu() {
    $custom_hosting = [
        'width' => 'w-[1000px]',
        'custom_design' => true,
        'custom_template' => 'custom_hosting_template',
        'custom_classes' => 'shadow-2xl shadow-[#1e9975]/20',
        'show_bottom_cta' => true,
        'bottom_cta_text' => 'Свържете се за персонална оферта',
        'bottom_cta_url' => '#contact'
    ];
    
    render_mega_menu($custom_hosting);
}

// Usage of Custom Design Menus:
/*
<div class="relative group">
    <button class="text-white hover:text-[#1e9975] transition-colors duration-200">
        Custom Domains
        <i class="fas fa-chevron-down"></i>
    </button>
    
    <?php render_custom_domains_menu(); ?>
</div>

<div class="relative group">
    <button class="text-white hover:text-[#1e9975] transition-colors duration-200">
        Custom Solutions
        <i class="fas fa-chevron-down"></i>
    </button>
    
    <?php render_custom_solutions_menu(); ?>
</div>

<div class="relative group">
    <button class="text-white hover:text-[#1e9975] transition-colors duration-200">
        Custom Hosting
        <i class="fas fa-chevron-down"></i>
    </button>
    
    <?php render_custom_hosting_menu(); ?>
</div>
*/

// ========================================
// BASIC MEGA MENU EXAMPLES (USING BASIC TEMPLATE)
// ========================================

// Example 7: Basic Services Mega Menu
function render_basic_services_menu() {
    $basic_services = [
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
    
    render_mega_menu($basic_services);
}

// Example 8: Basic Support Mega Menu
function render_basic_support_menu() {
    $basic_support = [
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
    
    render_mega_menu($basic_support);
}

// Example 9: Basic Company Mega Menu
function render_basic_company_menu() {
    $basic_company = [
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
    
    render_mega_menu($basic_company);
}

// Usage of Basic Mega Menus (Consistent Design):
/*
<div class="relative group">
    <button class="text-white hover:text-[#1e9975] transition-colors duration-200">
        Services
        <i class="fas fa-chevron-down"></i>
    </button>
    
    <?php render_basic_services_menu(); ?>
</div>

<div class="relative group">
    <button class="text-white hover:text-[#1e9975] transition-colors duration-200">
        Support
        <i class="fas fa-chevron-down"></i>
    </button>
    
    <?php render_basic_support_menu(); ?>
</div>

<div class="relative group">
    <button class="text-white hover:text-[#1e9975] transition-colors duration-200">
        Company
        <i class="fas fa-chevron-down"></i>
    </button>
    
    <?php render_basic_company_menu(); ?>
</div>
*/
?>
