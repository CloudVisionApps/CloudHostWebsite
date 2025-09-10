@extends('layout')

@section('body')


    <body class="min-h-screen bg-gradient-to-br from-[#0a0a0a] via-[#121212] to-[#0f0f0f]">

    @include('parts.header')


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
                    Цени на <span class="bg-gradient-to-r from-[#1683ab] to-[#1e9975] bg-clip-text text-transparent">Домейни (TLDs)</span>
                </h1>
                <p class="text-lg lg:text-xl text-gray-300 max-w-3xl mx-auto scroll-slide-left">
                    Прозрачни годишни цени за популярни домейн разширения. Търсете по TLD и започнете онлайн присъствието си.
                </p>
            </div>

            <!-- Unified Search Controls -->
            <div class="relative z-10 max-w-5xl mx-auto mt-8">
                <div class="bg-white/[0.03] rounded-2xl p-6 border border-white/10">
                    <h3 class="text-lg font-semibold text-white mb-4 flex items-center gap-2">
                        <i class="fa-solid fa-search text-[#1683ab]"></i>
                        Търсене и проверка на домейни
                    </h3>

                    <!-- Search Input with Toggle -->
                    <div class="flex flex-col gap-4">
                        <div class="flex-1">
                            <label for="unified-search" class="sr-only">Търсене на домейн или TLD</label>
                            <div class="relative">
                                <span class="absolute left-3 top-1/2 -translate-y-1/2 text-gray-400">
                                    <i id="search-icon" class="fa-solid fa-globe"></i>
                                </span>
                                <input id="unified-search" type="text" placeholder="Въведете домейн (bobi.com) или TLD (.com, .bg)" class="w-full bg-[#0f0f0f] border border-white/10 rounded-xl pl-10 pr-20 py-3 text-gray-200 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-[#1683ab]/50 focus:border-[#1683ab]/50">
                                <button id="clear-btn" class="absolute right-12 top-1/2 -translate-y-1/2 px-2 py-1 text-gray-400 hover:text-white transition-colors" title="Изчисти търсенето">
                                    <i class="fa-solid fa-times"></i>
                                </button>
                                <button id="search-btn" class="absolute right-2 top-1/2 -translate-y-1/2 px-4 py-1.5 bg-[#1683ab] text-white text-sm rounded-lg hover:bg-[#1683ab]/90 transition-colors">
                                    <i class="fa-solid fa-search"></i>
                                </button>
                            </div>
                        </div>

                        <!-- Search Type Toggle -->
                        <div class="flex items-center gap-4">
                            <span class="text-sm text-gray-400">Режим на търсене:</span>
                            <div class="flex bg-white/[0.05] rounded-lg p-1">
                                <button id="domain-mode" class="px-3 py-1.5 text-xs font-medium rounded-md bg-[#1683ab] text-white transition-all">
                                    <i class="fa-solid fa-globe mr-1"></i> Домейн
                                </button>
                                <button id="tld-mode" class="px-3 py-1.5 text-xs font-medium rounded-md text-gray-400 hover:text-white transition-all">
                                    <i class="fa-solid fa-list mr-1"></i> TLD
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Search Results -->
                    <div id="search-results" class="mt-4 hidden">
                        <div class="p-4 rounded-xl border border-white/10 bg-white/[0.02]">
                            <div id="search-content" class="text-sm"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- TLD Pricing Grid -->
    <section class="relative py-8 lg:py-10">
        <div class="max-w-6xl mx-auto px-4">
            <div id="tld-grid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 gap-5">
                <?php
                $domains = \App\Models\Domain::all();
                foreach ($domains as $key => $tld) {

                    $label = isset($tld['tld']) ? $tld['tld'] : 'N/A';
                    $currency = isset($tld['currency']) ? $tld['currency'] : 'лв.';
                    $yearly = isset($tld['registration_yearly_price']) ? $tld['registration_yearly_price'] : null;
                    $renew = isset($tld['renewal_yearly_price']) ? $tld['renewal_yearly_price'] : null;
                    $transfer = isset($tld['transfer_yearly_price']) ? $tld['transfer_yearly_price'] : null;
                    $promo = isset($tld['category']) ? $tld['category'] : null;
                    $privacy = true;
                    ?>
                <div class="group rounded-2xl border border-white/10 bg-gradient-to-b from-white/[0.02] to-transparent p-5 hover:border-[#1683ab]/40 transition-colors tld-card" data-tld="<?php echo htmlspecialchars($label); ?>">
                    <div class="flex items-start justify-between mb-3">
                        <div class="flex items-center gap-2">
                            <div class="w-9 h-9 rounded-lg bg-[#1683ab]/15 text-[#1fb6ff] flex items-center justify-center ring-1 ring-[#1683ab]/30">
                                <i class="fa-solid fa-globe"></i>
                            </div>
                            <div>
                                <div class="text-lg font-semibold text-white leading-none"><?php echo htmlspecialchars($label); ?></div>
                                <div class="text-xs text-gray-400 mt-1 flex items-center gap-2">
                                        <?php if ($privacy) { ?>
                                    <span class="inline-flex items-center gap-1"><i class="fa-solid fa-user-shield text-emerald-400"></i> Поверителност</span>
                                    <?php } else { ?>
                                    <span class="inline-flex items-center gap-1 text-gray-500"><i class="fa-regular fa-user"></i> Без поверителност</span>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                            <?php if (!empty($promo)) {
                            $promoBg = 'bg-[#1e9975]/15 text-[#1e9975] border-[#1e9975]/30';
                            $promoText = $promo;
                            if ($promo === 'Popular') { $promoText = 'Популярно'; }
                            elseif ($promo === 'Startup') { $promoText = 'За стартиращи'; }
                            elseif ($promo === 'E‑commerce' || $promo === 'E-commerce') { $promoText = 'Електронна търговия'; }
                            elseif ($promo === 'Promo') { $promoText = 'Промо'; }
                            ?>
                        <span class="text-xs px-2 py-1 rounded-md bg-[#1e9975]/15 text-[#1e9975] border border-[#1e9975]/30"><?php echo htmlspecialchars($promoText); ?></span>
                        <?php } ?>
                    </div>
                    <div class="mt-4">
                        <div class="flex items-baseline gap-2">
                                <?php if ($yearly !== null) { ?>
                            <div class="price-yearly">
                                <span class="text-3xl font-bold text-white"><?php echo htmlspecialchars($yearly); ?></span>
                                <span class="text-gray-400 text-sm"><?php echo htmlspecialchars($currency); ?>/година</span>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="mt-3 text-xs text-gray-400">
                                <?php if ($renew !== null) { ?>
                            <div class="flex items-center gap-2"><i class="fa-solid fa-rotate"></i> Подновяване: <span class="ml-1 text-gray-300"><?php echo htmlspecialchars($renew . ' ' . $currency); ?>/година</span></div>
                            <?php } ?>
                                <?php if ($transfer !== null) { ?>
                            <div class="flex items-center gap-2"><i class="fa-solid fa-right-left"></i> Трансфер: <span class="ml-1 text-gray-300"><?php echo htmlspecialchars($transfer . ' ' . $currency); ?>/година</span></div>
                            <?php } ?>
                        </div>
                        <div class="mt-5 flex items-center justify-between">
                            <a href="https://cloudhost.bg/members/cart.php?a=add&domain=register&query=DOMAIN_HERE" class="px-4 py-2 rounded-lg bg-[#1e9975] text-white text-sm font-medium hover:bg-[#1e9975]/90 transition-colors">Регистрация</a>
                            <a href="https://cloudhost.bg/members/cart.php?a=add&domain=transfer&query=DOMAIN_HERE" class="px-4 py-2 rounded-lg border border-white/10 text-gray-200 text-sm hover:border-[#1683ab]/40 hover:text-white transition-colors">Трансфер</a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>

            <!-- Show All Toggle - Bottom -->
            <div class="flex flex-col items-center gap-4 mt-8">
                <div class="text-sm text-gray-400">
                    Показване на <span id="visible-count">10</span> от <span id="total-count"><?php echo $domains->count(); ?></span> домейна
                </div>
                <label for="show-all-toggle" class="inline-flex items-center gap-4 cursor-pointer group bg-white/[0.03] rounded-2xl px-5 py-3 backdrop-blur-sm hover:bg-[#1e9975]/10 hover:-translate-y-0.5 transition-all duration-300">
                    <div class="relative bg-white/[0.05] rounded-full p-1.5 transition-all duration-300 group-hover:bg-[#1e9975]/10">
                        <input id="show-all-toggle" type="checkbox" class="sr-only">
                        <div class="toggle-track w-16 h-8 bg-gray-600 rounded-full relative transition-all duration-400 overflow-hidden">
                            <div class="toggle-thumb w-6 h-6 bg-white rounded-full absolute top-1 left-1 transition-all duration-400 shadow-lg z-10"></div>
                        </div>
                    </div>
                    <span class="text-sm font-medium text-gray-300 group-hover:text-white transition-colors select-none">
                        <i class="fa-solid fa-globe mr-2 text-[#1683ab] group-hover:text-[#1e9975] group-hover:scale-110 transition-all duration-300"></i>
                        Покажи всички домейни
                    </span>
                </label>
            </div>
        </div>
    </section>

    <!-- Free Domain Banner -->
    <section class="relative py-4 mb-12">
        <div class="max-w-6xl mx-auto px-4">
            <div class="rounded-2xl border border-white/10 bg-gradient-to-r from-[#1683ab]/15 via-transparent to-[#1e9975]/15 p-6 md:p-8 flex flex-col md:flex-row items-start md:items-center gap-4 md:gap-6">
                <div class="w-12 h-12 rounded-xl bg-[#1683ab]/25 text-[#1fb6ff] flex items-center justify-center ring-1 ring-[#1683ab]/40">
                    <i class="fa-solid fa-gift text-xl"></i>
                </div>
                <div class="flex-1">
                    <h2 class="text-xl md:text-2xl font-semibold text-white">Вземи безплатен домейн</h2>
                    <p class="text-gray-300 mt-1">При поръчка на избрани хостинг планове за 1 год. получавате възможност да регистрирате безплатен домейн от областите <span class="text-white font-medium">.com</span>, <span class="text-white font-medium">.net</span>, <span class="text-white font-medium">.eu</span> или <span class="text-white font-medium">.org</span> <span class="text-gray-400">*</span></p>
                </div>
                <div class="flex gap-3">
                    <a href="#tld-grid" class="px-4 py-2 rounded-lg bg-[#1e9975] text-white text-sm font-medium hover:bg-[#1e9975]/90 transition-colors">Виж домейните</a>
                </div>
            </div>
            <p class="text-[11px] text-gray-500 mt-2">* Промоцията важи за първата година. Включва стандартни зони, според условията на плана.</p>
        </div>
    </section>

    @include('parts.faq-section')

    @include('parts.footer')

    </body>


@endsection


@push('scripts')

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

        /* Toggle Switch Animation - Tailwind compatible */
        .toggle-track::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, #1e9975 0%, #1683ab 100%);
            opacity: 0;
            transition: opacity 0.4s ease;
            border-radius: 24px;
        }

        #show-all-toggle:checked + .toggle-track::before {
            opacity: 1;
        }

        #show-all-toggle:checked + .toggle-track .toggle-thumb {
            transform: translateX(28px);
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const unifiedSearch = document.getElementById('unified-search');
            const searchBtn = document.getElementById('search-btn');
            const clearBtn = document.getElementById('clear-btn');
            const searchResults = document.getElementById('search-results');
            const searchContent = document.getElementById('search-content');
            const searchIcon = document.getElementById('search-icon');
            const domainModeBtn = document.getElementById('domain-mode');
            const tldModeBtn = document.getElementById('tld-mode');
            const toggle = document.getElementById('show-all-toggle');
            const cards = Array.from(document.querySelectorAll('.tld-card'));

            let currentMode = 'domain'; // 'domain' or 'tld'

            console.log('Toggle element:', toggle);
            console.log('Cards found:', cards.length);
            console.log('Current URL:', window.location.href);
            console.log('URL parameters:', {
                search: getUrlParameter('search'),
                mode: getUrlParameter('mode')
            });

            // URL parameter handling
            function getUrlParameter(name) {
                const urlParams = new URLSearchParams(window.location.search);
                return urlParams.get(name);
            }

            function setUrlParameter(name, value) {
                const url = new URL(window.location);
                if (value) {
                    url.searchParams.set(name, value);
                } else {
                    url.searchParams.delete(name);
                }
                window.history.replaceState({}, '', url);
            }

            function initializeFromUrl() {
                const searchQuery = getUrlParameter('search');
                const searchMode = getUrlParameter('mode');

                console.log('Initializing from URL:', { searchQuery, searchMode });

                // Set the correct mode first
                if (searchMode === 'tld') {
                    switchMode('tld');
                } else {
                    switchMode('domain');
                }

                if (searchQuery) {
                    // Set the search input value
                    if (unifiedSearch) {
                        unifiedSearch.value = searchQuery;
                    }

                    // Perform the search automatically after a short delay
                    setTimeout(() => {
                        console.log('Performing auto-search for:', searchQuery);
                        performSearch();
                    }, 300);
                } else {
                    // If no search query, just apply the default filter
                    applyFilter();
                }
            }

            function clearSearch() {
                unifiedSearch.value = '';
                searchResults.classList.add('hidden');
                setUrlParameter('search', '');
                setUrlParameter('mode', '');
                // Reset to show all domains
                applyFilter();
            }

            // Mode switching
            function switchMode(mode) {
                currentMode = mode;

                if (mode === 'domain') {
                    domainModeBtn.classList.add('bg-[#1683ab]', 'text-white');
                    domainModeBtn.classList.remove('text-gray-400');
                    tldModeBtn.classList.remove('bg-[#1683ab]', 'text-white');
                    tldModeBtn.classList.add('text-gray-400');
                    searchIcon.className = 'fa-solid fa-globe';
                    unifiedSearch.placeholder = 'Въведете домейн (напр. bobi.com)';
                } else {
                    tldModeBtn.classList.add('bg-[#1683ab]', 'text-white');
                    tldModeBtn.classList.remove('text-gray-400');
                    domainModeBtn.classList.remove('bg-[#1683ab]', 'text-white');
                    domainModeBtn.classList.add('text-gray-400');
                    searchIcon.className = 'fa-solid fa-list';
                    unifiedSearch.placeholder = 'Търсене на TLD (напр. .com, .bg)';
                }

                // Clear search results when switching modes
                searchResults.classList.add('hidden');
                unifiedSearch.value = '';

                // Update URL parameter for mode
                setUrlParameter('mode', mode);
                setUrlParameter('search', '');
            }

            // Unified search function
            function performSearch() {
                const query = unifiedSearch?.value?.trim();

                console.log('performSearch called:', { query, currentMode, unifiedSearch: !!unifiedSearch });

                if (!query) {
                    showSearchError('Моля, въведете домейн или TLD за търсене');
                    // Clear URL parameters when search is empty
                    setUrlParameter('search', '');
                    setUrlParameter('mode', '');
                    return;
                }

                // Save search query and mode to URL parameters
                setUrlParameter('search', query);
                setUrlParameter('mode', currentMode);

                if (currentMode === 'domain') {
                    console.log('Checking domain availability for:', query);
                    checkDomainAvailability(query);
                } else {
                    console.log('Filtering TLD cards for:', query);
                    filterTldCards(query);
                }
            }

            // Domain availability checking
            function checkDomainAvailability(domain) {
                // Show loading state
                showSearchLoading('Проверявам наличността на домейна...');

                // Make AJAX request
                fetch('/domains/check-availability', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || ''
                    },
                    body: JSON.stringify({ domain: domain })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        showDomainResult(data);
                    } else {
                        showSearchError(data.message || 'Възникна грешка при проверката');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    showSearchError('Възникна грешка при проверката на домейна');
                });
            }

            // TLD filtering
            function filterTldCards(query) {
                const q = query.toLowerCase();
                let visibleCount = 0;
                const maxVisible = 10;

                cards.forEach((card) => {
                    const tld = card.getAttribute('data-tld')?.toLowerCase() || '';
                    const match = tld.includes(q);

                    if (match && visibleCount < maxVisible) {
                        card.style.display = '';
                        visibleCount++;
                    } else {
                        card.style.display = 'none';
                    }
                });

                // Update visible count
                const visibleCountElement = document.getElementById('visible-count');
                if (visibleCountElement) {
                    visibleCountElement.textContent = visibleCount;
                }

                // Show search results
                showTldResult(query, visibleCount);
            }

            function showSearchLoading(message) {
                console.log('Showing search loading:', message);
                searchResults.classList.remove('hidden');
                searchContent.innerHTML = `
                    <div class="flex items-center gap-3 text-gray-300">
                        <div class="animate-spin rounded-full h-4 w-4 border-2 border-[#1683ab] border-t-transparent"></div>
                        <span>${message}</span>
                    </div>
                `;
            }

            function showDomainResult(data) {
                const isAvailable = data.available;
                const domain = data.domain;
                const expiryDate = data.expiry_date;
                const registrar = data.registrar;

                console.log('Showing domain result:', data);

                let resultHtml = `
                    <div class="flex items-start gap-3">
                        <div class="flex-shrink-0">
                            ${isAvailable ?
                                '<i class="fa-solid fa-check-circle text-green-400 text-lg"></i>' :
                                '<i class="fa-solid fa-times-circle text-red-400 text-lg"></i>'
                            }
                        </div>
                        <div class="flex-1">
                            <div class="flex items-center gap-2 mb-2">
                                <span class="font-semibold text-white">${domain}</span>
                                <span class="px-2 py-1 rounded-full text-xs font-medium ${isAvailable ? 'bg-green-400/20 text-green-400' : 'bg-red-400/20 text-red-400'}">
                                    ${isAvailable ? 'Наличен' : 'Зает'}
                                </span>
                            </div>
                            <p class="text-gray-300 text-sm mb-2">${data.message}</p>
                `;

                if (!isAvailable && (expiryDate || registrar)) {
                    resultHtml += '<div class="text-xs text-gray-400 space-y-1">';
                    if (expiryDate) {
                        resultHtml += `<div><i class="fa-solid fa-calendar mr-1"></i> Изтича: ${expiryDate}</div>`;
                    }
                    if (registrar) {
                        resultHtml += `<div><i class="fa-solid fa-building mr-1"></i> Регистратор: ${registrar}</div>`;
                    }
                    resultHtml += '</div>';
                }

                if (isAvailable) {
                    resultHtml += `
                        <div class="mt-3 flex gap-2">
                            <button class="px-3 py-1.5 bg-[#1e9975] text-white text-xs rounded-lg hover:bg-[#1e9975]/90 transition-colors">
                                <i class="fa-solid fa-shopping-cart mr-1"></i> Регистрация
                            </button>
                            <button class="px-3 py-1.5 border border-white/20 text-gray-300 text-xs rounded-lg hover:border-[#1683ab]/40 hover:text-white transition-colors">
                                <i class="fa-solid fa-heart mr-1"></i> Добави в любими
                            </button>
                        </div>
                    `;
                }

                resultHtml += '</div></div>';
                searchContent.innerHTML = resultHtml;
            }

            function showTldResult(query, count) {
                searchResults.classList.remove('hidden');
                searchContent.innerHTML = `
                    <div class="flex items-center gap-3 text-gray-300">
                        <i class="fa-solid fa-list text-[#1683ab]"></i>
                        <span>Намерени ${count} TLD съвпадения за "${query}"</span>
                    </div>
                `;
            }

            function showSearchError(message) {
                searchResults.classList.remove('hidden');
                searchContent.innerHTML = `
                    <div class="flex items-center gap-3 text-red-400">
                        <i class="fa-solid fa-exclamation-triangle"></i>
                        <span>${message}</span>
                    </div>
                `;
            }

            // TLD filtering functionality (for show all toggle)
            function applyFilter() {
                const showAll = !!(toggle && toggle.checked);
                const visibleCountElement = document.getElementById('visible-count');

                if (showAll) {
                    // Show all domains when toggle is enabled
                    cards.forEach(card => { card.style.display = ''; });
                    if (visibleCountElement) {
                        visibleCountElement.textContent = cards.length;
                    }
                    return;
                }

                // When toggle is disabled, limit to 10 domains
                let visibleCount = 0;
                const maxVisible = 10;

                cards.forEach((card) => {
                    if (visibleCount < maxVisible) {
                        card.style.display = '';
                        visibleCount++;
                    } else {
                        card.style.display = 'none';
                    }
                });

                if (visibleCountElement) {
                    visibleCountElement.textContent = visibleCount;
                }
            }

            // Event listeners
            if (searchBtn) {
                searchBtn.addEventListener('click', performSearch);
            }

            if (clearBtn) {
                clearBtn.addEventListener('click', clearSearch);
            }

            if (unifiedSearch) {
                unifiedSearch.addEventListener('keypress', (e) => {
                    if (e.key === 'Enter') {
                        performSearch();
                    }
                });
            }

            if (domainModeBtn) {
                domainModeBtn.addEventListener('click', () => switchMode('domain'));
            }

            if (tldModeBtn) {
                tldModeBtn.addEventListener('click', () => switchMode('tld'));
            }

            if (toggle) {
                toggle.addEventListener('change', (e) => {
                    console.log('Toggle changed:', e.target.checked);
                    applyFilter();
                });
            }

            // Initialize from URL parameters first
            initializeFromUrl();

            // Set default state only if no URL parameters
            const hasUrlParams = getUrlParameter('search') || getUrlParameter('mode');
            if (!hasUrlParams) {
                switchMode('domain');
                applyFilter();
            }
        });
    </script>
@endpush
