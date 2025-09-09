<!-- Footer -->
<footer class="overflow-hidden">


    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20  z-10">
        <!-- Main Footer Content -->
        <div class="grid md:grid-cols-4 gap-16 mb-20">
            <!-- Company Info -->
            <div class="col-span-2 scroll-fade-in">
                <div class="flex items-center mb-8 group scroll-scale-in">
                    <div class="mr-6">

                        <img src="{{asset('img/logo-on-dark.svg')}}" alt="Logo" class="h-10">
                    </div>
                </div>
                <p class="text-gray-300 mb-8 text-lg leading-relaxed max-w-md scroll-slide-left">
                    {{settings('seo_description')}}
                </p>

                <!-- Enhanced Social Media -->
                <div class="space-y-4 scroll-stagger">
                    <h5 class="text-sm font-semibold text-white/80 uppercase tracking-wider mb-4 flex items-center scroll-bounce-in">
                        <i class="fas fa-share-alt mr-2 text-[#1683ab]"></i>
                        Последвайте ни
                    </h5>
                    <div class="flex space-x-4 scroll-stagger">
                        @if(settings('facebook'))
                        <a href="{{settings('facebook')}}" target="_blank" class="group relative w-12 h-12 bg-gradient-to-r from-[#1683ab]/20 to-[#1e9975]/20 border border-white/5 rounded-xl flex items-center justify-center text-gray-300 hover:text-[#1e9975] hover:border-[#1e9975]/50 hover:bg-[#1e9975]/10 transition-all duration-500 transform hover:scale-110 hover:shadow-lg hover:shadow-[#1e9975]/20 scroll-bounce-in">
                            <div class="absolute inset-0 bg-gradient-to-r from-[#1683ab] to-[#1e9975] rounded-xl opacity-0 group-hover:opacity-20 transition-opacity duration-500"></div>
                            <i class="fab fa-facebook-f text-lg relative z-10"></i>
                        </a>
                        @endif
                        @if(settings('twitter'))
                        <a href="{{settings('twitter')}}" target="_blank" class="group relative w-12 h-12 bg-gradient-to-r from-[#1683ab]/20 to-[#1e9975]/20 border border-white/5 rounded-xl flex items-center justify-center text-gray-300 hover:text-[#1e9975] hover:border-[#1e9975]/50 hover:bg-[#1e9975]/10 transition-all duration-500 transform hover:scale-110 hover:shadow-lg hover:shadow-[#1e9975]/20 scroll-bounce-in">
                            <div class="absolute inset-0 bg-gradient-to-r from-[#1683ab] to-[#1e9975] rounded-xl opacity-0 group-hover:opacity-20 transition-opacity duration-500"></div>
                            <i class="fab fa-twitter text-lg relative z-10"></i>
                        </a>
                        @endif
                        @if(settings('linkedin'))
                        <a href="{{settings('linkedin')}}" target="_blank" class="group relative w-12 h-12 bg-gradient-to-r from-[#1683ab]/20 to-[#1e9975]/20 border border-white/5 rounded-xl flex items-center justify-center text-gray-300 hover:text-[#1e9975] hover:border-[#1e9975]/50 hover:bg-[#1e9975]/10 transition-all duration-500 transform hover:scale-110 hover:shadow-lg hover:shadow-[#1e9975]/20 scroll-bounce-in">
                            <div class="absolute inset-0 bg-gradient-to-r from-[#1683ab] to-[#1e9975] rounded-xl opacity-0 group-hover:opacity-20 transition-opacity duration-500"></div>
                            <i class="fab fa-linkedin-in text-lg relative z-10"></i>
                        </a>
                        @endif
                        @if(settings('instagram'))
                        <a href="{{settings('instagram')}}" target="_blank" class="group relative w-12 h-12 bg-gradient-to-r from-[#1683ab]/20 to-[#1e9975]/20 border border-white/5 rounded-xl flex items-center justify-center text-gray-300 hover:text-[#1e9975] hover:border-[#1e9975]/50 hover:bg-[#1e9975]/10 transition-all duration-500 transform hover:scale-110 hover:shadow-lg hover:shadow-[#1e9975]/20 scroll-bounce-in">
                            <div class="absolute inset-0 bg-gradient-to-r from-[#1683ab] to-[#1e9975] rounded-xl opacity-0 group-hover:opacity-20 transition-opacity duration-500"></div>
                            <i class="fab fa-instagram text-lg relative z-10"></i>
                        </a>
                        @endif
                        @if(settings('youtube'))
                        <a href="{{settings('youtube')}}" target="_blank" class="group relative w-12 h-12 bg-gradient-to-r from-[#1683ab]/20 to-[#1e9975]/20 border border-white/5 rounded-xl flex items-center justify-center text-gray-300 hover:text-[#1e9975] hover:border-[#1e9975]/50 hover:bg-[#1e9975]/10 transition-all duration-500 transform hover:scale-110 hover:shadow-lg hover:shadow-[#1e9975]/20 scroll-bounce-in">
                            <div class="absolute inset-0 bg-gradient-to-r from-[#1683ab] to-[#1e9975] rounded-xl opacity-0 group-hover:opacity-20 transition-opacity duration-500"></div>
                            <i class="fab fa-youtube text-lg relative z-10"></i>
                        </a>
                        @endif
                    </div>
                </div>

                <!-- Contact Info -->
                <div class="mt-8 space-y-3 scroll-stagger">
                    <div class="flex items-center text-gray-300 group scroll-slide-right">
                        <div class="w-8 h-8 bg-gradient-to-r from-[#1683ab]/20 to-[#1e9975]/20 rounded-lg flex items-center justify-center mr-3 group-hover:bg-gradient-to-r group-hover:from-[#1683ab]/40 group-hover:to-[#1e9975]/40 transition-all duration-300">
                            <i class="fas fa-envelope text-[#1e9975] text-sm"></i>
                        </div>
                        <span class="group-hover:text-white transition-colors duration-300">{{settings('email', 'support@cloudhost.bg')}}</span>
                    </div>
                    <div class="flex items-center text-gray-300 group scroll-slide-right">
                        <div class="w-8 h-8 bg-gradient-to-r from-[#1683ab]/20 to-[#1e9975]/20 rounded-lg flex items-center justify-center mr-3 group-hover:bg-gradient-to-r group-hover:from-[#1683ab]/40 group-hover:to-[#1e9975]/40 transition-all duration-300">
                            <i class="fas fa-phone text-[#1e9975] text-sm"></i>
                        </div>
                        <span class="group-hover:text-white transition-colors duration-300">{{settings('phone', '+359 888 123 456')}}</span>
                    </div>
                    @if(settings('address'))
                    <div class="flex items-center text-gray-300 group scroll-slide-right">
                        <div class="w-8 h-8 bg-gradient-to-r from-[#1683ab]/20 to-[#1e9975]/20 rounded-lg flex items-center justify-center mr-3 group-hover:bg-gradient-to-r group-hover:from-[#1683ab]/40 group-hover:to-[#1e9975]/40 transition-all duration-300">
                            <i class="fas fa-map-marker-alt text-[#1e9975] text-sm"></i>
                        </div>
                        <span class="group-hover:text-white transition-colors duration-300">{{settings('address')}}</span>
                    </div>
                    @endif
                    @if(settings('website'))
                    <div class="flex items-center text-gray-300 group scroll-slide-right">
                        <div class="w-8 h-8 bg-gradient-to-r from-[#1683ab]/20 to-[#1e9975]/20 rounded-lg flex items-center justify-center mr-3 group-hover:bg-gradient-to-r group-hover:from-[#1683ab]/40 group-hover:to-[#1e9975]/40 transition-all duration-300">
                            <i class="fas fa-globe text-[#1e9975] text-sm"></i>
                        </div>
                        <a href="{{settings('website')}}" target="_blank" class="group-hover:text-white transition-colors duration-300 hover:underline">{{settings('website')}}</a>
                    </div>
                    @endif
                </div>
            </div>

            <!-- Quick Links -->
            <div class="scroll-fade-in">
                <h4 class="text-lg font-semibold mb-8 text-white flex items-center group scroll-scale-in">
                    <div class="w-8 h-0.5 bg-gradient-to-r from-[#1683ab] to-[#1e9975] mr-3 group-hover:w-12 transition-all duration-300"></div>
                    <span class="group-hover:text-[#1683ab] transition-colors duration-300">Бързи връзки</span>
                </h4>
                <ul class="space-y-4 scroll-stagger">
                    <li class="scroll-slide-left"><a href="#home" class="text-gray-400 hover:text-[#1e9975] transition-all duration-300 flex items-center group">
                            <div class="w-2 h-2 bg-[#1683ab] rounded-full mr-3 group-hover:scale-150 transition-transform duration-300"></div>
                            <span class="group-hover:translate-x-1 transition-transform duration-300">Начало</span>
                        </a></li>
                    <li class="scroll-slide-left"><a href="#features" class="text-gray-400 hover:text-[#1e9975] transition-all duration-300 flex items-center group">
                            <div class="w-2 h-2 bg-[#1683ab] rounded-full mr-3 group-hover:scale-150 transition-transform duration-300"></div>
                            <span class="group-hover:translate-x-1 transition-transform duration-300">Предимства</span>
                        </a></li>
                    <li class="scroll-slide-left"><a href="#plans" class="text-gray-400 hover:text-[#1e9975] transition-all duration-300 flex items-center group">
                            <div class="w-2 h-2 bg-[#1683ab] rounded-full mr-3 group-hover:scale-150 transition-transform duration-300"></div>
                            <span class="group-hover:translate-x-1 transition-transform duration-300">Цени</span>
                        </a></li>
                    <li class="scroll-slide-left"><a href="#about" class="text-gray-400 hover:text-[#1e9975] transition-all duration-300 flex items-center group">
                            <div class="w-2 h-2 bg-[#1683ab] rounded-full mr-3 group-hover:scale-150 transition-transform duration-300"></div>
                            <span class="group-hover:translate-x-1 transition-transform duration-300">За нас</span>
                        </a></li>
                    <li class="scroll-slide-left"><a href="#contact" class="text-gray-400 hover:text-[#1e9975] transition-all duration-300 flex items-center group">
                            <div class="w-2 h-2 bg-[#1683ab] rounded-full mr-3 group-hover:scale-150 transition-transform duration-300"></div>
                            <span class="group-hover:translate-x-1 transition-transform duration-300">Контакти</span>
                        </a></li>
                </ul>
            </div>

            <!-- Support -->
            <div class="scroll-fade-in">
                <h4 class="text-lg font-semibold mb-8 text-white flex items-center group scroll-scale-in">
                    <div class="w-8 h-0.5 bg-gradient-to-r from-[#1e9975] to-[#1683ab] mr-3 group-hover:w-12 transition-all duration-300"></div>
                    <span class="group-hover:text-[#1e9975] transition-colors duration-300">Поддръжка</span>
                </h4>
                <ul class="space-y-4 scroll-stagger">
                    <li class="scroll-slide-right"><a href="#help" class="text-gray-400 hover:text-[#1e9975] transition-all duration-300 flex items-center group">
                            <div class="w-2 h-2 bg-[#1e9975] rounded-full mr-3 group-hover:scale-150 transition-transform duration-300"></div>
                            <span class="group-hover:translate-x-1 transition-transform duration-300">Помощен център</span>
                        </a></li>
                    <li class="scroll-slide-right"><a href="#docs" class="text-gray-400 hover:text-[#1e9975] transition-all duration-300 flex items-center group">
                            <div class="w-2 h-2 bg-[#1e9975] rounded-full mr-3 group-hover:scale-150 transition-transform duration-300"></div>
                            <span class="group-hover:translate-x-1 transition-transform duration-300">Документация</span>
                        </a></li>
                    <li class="scroll-slide-right"><a href="#status" class="text-gray-400 hover:text-[#1e9975] transition-all duration-300 flex items-center group">
                            <div class="w-2 h-2 bg-[#1e9975] rounded-full mr-3 group-hover:scale-150 transition-transform duration-300"></div>
                            <span class="group-hover:translate-x-1 transition-transform duration-300">Статус на сървъра</span>
                        </a></li>
                    <li class="scroll-slide-right"><a href="#tickets" class="text-gray-400 hover:text-[#1e9975] transition-all duration-300 flex items-center group">
                            <div class="w-2 h-2 bg-[#1e9975] rounded-full mr-3 group-hover:translate-x-1 transition-transform duration-300"></div>
                            <span class="group-hover:translate-x-1 transition-transform duration-300">Поддръжка</span>
                        </a></li>
                    <li class="scroll-slide-right"><a href="#community" class="text-gray-400 hover:text-[#1e9975] transition-all duration-300 flex items-center group">
                            <div class="w-2 h-2 bg-[#1e9975] rounded-full mr-3 group-hover:scale-150 transition-transform duration-300"></div>
                            <span class="group-hover:translate-x-1 transition-transform duration-300">Общност</span>
                        </a></li>
                </ul>
            </div>
        </div>

        <!-- Enhanced Bottom Footer -->
        <div class="border-t border-white/10 pt-8 scroll-glow-in">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="text-gray-400 text-sm mb-4 md:mb-0 flex items-center scroll-slide-left">
                    © 2024-{{date('Y')}} {{settings('site_name')}}. Всички права запазени.
                </div>
                <div class="flex space-x-8 text-sm scroll-slide-right">
                    <a href="#privacy" class="text-gray-400 hover:text-[#1e9975] transition-all duration-300 hover:underline flex items-center group">
                        <i class="fas fa-user-shield mr-2 text-xs group-hover:scale-110 transition-transform duration-300"></i>
                        Политика за поверителност
                    </a>
                    <a href="#terms" class="text-gray-400 hover:text-[#1e9975] transition-all duration-300 hover:underline flex items-center group">
                        <i class="fas fa-file-contract mr-2 text-xs group-hover:scale-110 transition-transform duration-300"></i>
                        Условия за ползване
                    </a>
                    <a href="#cookies" class="text-gray-400 hover:text-[#1e9975] transition-all duration-300 hover:underline flex items-center group">
                        <i class="fas fa-cookie-bite mr-2 text-xs group-hover:scale-110 transition-transform duration-300"></i>
                        Политика за бисквитки
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>

@push('scripts')
<style>

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
@endpush
