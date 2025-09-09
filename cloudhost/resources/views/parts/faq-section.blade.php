  <!-- FAQ Section -->
  <section class="py-32 relative overflow-hidden bg-gradient-to-br from-[#121819] via-[#11272a] to-[#112627]">
        <!-- Enhanced Background with Modern Pattern -->
        <div class="absolute inset-0">

            <!-- Modern Geometric Pattern -->
            <div class="absolute inset-0 opacity-30">
                <div class="absolute top-0 left-0 w-full h-full" style="background-image: radial-gradient(circle at 25% 25%, rgba(34, 197, 94, 0.15) 0%, transparent 50%), radial-gradient(circle at 75% 75%, rgba(59, 130, 246, 0.15) 0%, transparent 50%);"></div>
            </div>

            <!-- Floating Elements with Modern Animation -->
            <div class="absolute top-20 left-20 w-2 h-2 bg-emerald-400 rounded-full animate-ping"></div>
            <div class="absolute top-40 right-32 w-3 h-3 bg-blue-400 rounded-full animate-ping" style="animation-delay: 1s;"></div>
            <div class="absolute bottom-32 left-1/4 w-2 h-2 bg-emerald-400 rounded-full animate-ping" style="animation-delay: 2s;"></div>
            <div class="absolute top-1/2 right-1/4 w-4 h-4 bg-blue-400 rounded-full animate-ping" style="animation-delay: 0.5s;"></div>

            <!-- Modern Grid Lines -->
            <div class="absolute inset-0 opacity-20">
                <div class="absolute top-0 left-1/2 w-px h-full bg-gradient-to-b from-transparent via-emerald-400 to-transparent"></div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <!-- Header Section -->
            <div class="text-center mb-24 scroll-fade-in">
                <!-- Modern Badge -->
                <div class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-emerald-500/20 to-blue-500/20 border border-emerald-400/40 text-white text-sm font-medium rounded-full mb-8 backdrop-blur-sm shadow-lg">
                    <div class="w-2 h-2 bg-emerald-400 rounded-full mr-3 animate-pulse"></div>
                    Често задавани въпроси
                </div>

                <!-- Modern Typography -->
                <h2 class="text-5xl lg:text-6xl xl:text-7xl font-bold text-white mb-8 leading-tight">
                    Отговори на
                    <span class="block bg-gradient-to-r from-emerald-400 to-blue-400 bg-clip-text text-transparent">
                        вашите въпроси
                    </span>
                </h2>

                <p class="text-xl lg:text-2xl text-gray-200 mb-12 leading-relaxed max-w-3xl mx-auto">
                    Намерете отговори на най-често задаваните въпроси за нашите хостинг услуги
                </p>

                <!-- Decorative Elements -->
                <div class="flex justify-center items-center space-x-4 mt-12">
                    <div class="w-16 h-px bg-gradient-to-r from-transparent to-emerald-400"></div>
                    <div class="w-3 h-3 bg-emerald-400 rounded-full animate-pulse"></div>
                    <div class="w-16 h-px bg-gradient-to-l from-transparent to-blue-400"></div>
                </div>
            </div>

            <!-- FAQ Grid -->
            <div class="grid lg:grid-cols-2 gap-8 mb-20" id="faq-container">
                @foreach(\App\Models\FAQ::all() as $index => $faq)
                    @php
                        $isEven = $index % 2 == 0;
                        $slideClass = $isEven ? 'scroll-slide-left' : 'scroll-slide-right';
                        $hoverColor = $isEven ? 'emerald' : 'blue';
                        $iconColor = $isEven ? 'emerald-300' : 'blue-300';
                        $bgGradient = $isEven ? 'from-emerald-500/30 to-blue-500/30' : 'from-blue-500/30 to-emerald-500/30';
                        $hoverBorder = $isEven ? 'hover:border-emerald-400/50' : 'hover:border-blue-400/50';
                        $hoverShadow = $isEven ? 'hover:shadow-emerald-500/20' : 'hover:shadow-blue-500/20';
                        $hoverText = $isEven ? 'group-hover:text-emerald-300' : 'group-hover:text-blue-300';
                        $accentColor = $isEven ? 'emerald' : 'blue';

                        // Complete array of all possible Tailwind classes for accentColor
                        // This helps Tailwind scanner detect all dynamic classes
                        $accentColorClasses = [



                        ];
                    @endphp
                    <div class="group {{ $slideClass }} transform transition-all duration-500 hover:scale-[1.02]" data-faq-index="{{ $index }}">
                        <div class="relative bg-gradient-to-br from-white/8 to-white/12 backdrop-blur-xl rounded-3xl p-8 border border-white/20 {{ $hoverBorder }} transition-all duration-500 hover:bg-white/20 hover:shadow-2xl {{ $hoverShadow }} cursor-pointer overflow-hidden" onclick="toggleFAQ({{ $index }})">

                            <!-- Background Glow Effect -->
                            <div class="absolute inset-0 bg-gradient-to-br from-{{ $accentColor }}-500/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>

                            <!-- Top Accent Line -->
                            <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-{{ $accentColor }}-400 to-{{ $accentColor }}-600 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-left"></div>

                            <!-- Question Header -->
                            <div class="relative z-10 flex items-start justify-between mb-6">
                                <div class="flex-1 pr-4">
                                    <h3 class="text-xl font-bold text-white {{ $hoverText }} transition-colors duration-300 leading-tight group-hover:leading-snug">
                                        {{ $faq->question }}
                                    </h3>
                                </div>

                                <!-- Enhanced Icon Container -->
                                <div class="relative">
                                    <div class="w-12 h-12 bg-gradient-to-r {{ $bgGradient }} rounded-2xl flex items-center justify-center group-hover:scale-110 transition-all duration-300 shadow-lg group-hover:shadow-xl">
                                        <i class="fas fa-plus text-{{ $iconColor }} text-lg faq-icon transition-all duration-300" id="faq-icon-{{ $index }}"></i>
                                    </div>

                                    <!-- Icon Glow Effect -->
                                    <div class="absolute inset-0 bg-{{ $accentColor }}-400 rounded-2xl blur-xl opacity-0 group-hover:opacity-30 transition-opacity duration-300"></div>
                                </div>
                            </div>

                            <!-- Answer Section -->
                            <div class="faq-answer hidden" id="faq-answer-{{ $index }}">
                                <div class="relative z-10">
                                    <!-- Answer Divider -->
                                    <div class="w-full h-px bg-gradient-to-r from-{{ $accentColor }}-400/30 via-{{ $accentColor }}-400/20 to-transparent mb-6"></div>

                                    <p class="text-gray-200 leading-relaxed text-lg">
                                        {{ $faq->answer }}
                                    </p>

                                    <!-- Bottom Accent -->
                                    <div class="flex items-center mt-6 pt-4 border-t border-white/10">
                                        <div class="w-2 h-2 bg-{{ $accentColor }}-400 rounded-full mr-3 animate-pulse"></div>
                                        <span class="text-sm text-{{ $accentColor }}-300 font-medium">Полезна информация</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Hover Border Effect -->
                            <div class="absolute inset-0 rounded-3xl border-2 border-transparent group-hover:border-{{ $accentColor }}-400/20 transition-all duration-500"></div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Enhanced CTA Section -->
            <div class="text-center scroll-fade-in">
                <div class="relative bg-gradient-to-br from-white/10 to-white/15 backdrop-blur-xl rounded-3xl p-16 border border-white/20 overflow-hidden">

                    <!-- Background Pattern -->
                    <div class="absolute inset-0 opacity-10">
                        <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-r from-emerald-500/30 to-blue-500/30 rounded-full blur-3xl"></div>
                        <div class="absolute bottom-0 left-0 w-24 h-24 bg-gradient-to-r from-blue-500/30 to-emerald-500/30 rounded-full blur-3xl"></div>
                    </div>

                    <!-- Content -->
                    <div class="relative z-10">
                        <div class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-emerald-500/20 to-blue-500/20 border border-emerald-400/30 text-emerald-300 text-sm font-medium rounded-full mb-6 backdrop-blur-sm">
                            <i class="fas fa-question-circle mr-2"></i>
                            Още въпроси?
                        </div>

                        <h3 class="text-4xl font-bold text-white mb-6">
                            Не намерихте отговора, който търсите?
                        </h3>
                        <p class="text-xl text-gray-200 mb-10 max-w-2xl mx-auto leading-relaxed">
                            Нашият екип е тук, за да помогне! Свържете се с нас и ще получите персонализиран отговор.
                        </p>

                        <div class="flex flex-col sm:flex-row gap-6 justify-center">
                            <a href="#contact" class="group relative overflow-hidden bg-gradient-to-r from-emerald-500 to-blue-500 text-white text-xl px-12 py-5 rounded-2xl font-bold shadow-2xl hover:shadow-emerald-500/25 transition-all duration-500 transform hover:-translate-y-2 flex items-center justify-center">
                                <div class="absolute inset-0 bg-gradient-to-r from-blue-500 to-emerald-500 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                                <span class="relative z-10 flex items-center">
                                    <i class="fas fa-headset mr-4 text-2xl group-hover:scale-110 transition-transform duration-300"></i>
                                    Свържете се с нас
                                </span>
                            </a>
                            <a href="#plans" class="group relative overflow-hidden border-2 border-white/30 text-white text-xl px-12 py-5 rounded-2xl font-bold transition-all duration-500 flex items-center justify-center backdrop-blur-sm hover:border-emerald-400/50 hover:bg-white/10">
                                <div class="absolute inset-0 bg-gradient-to-r from-emerald-500/10 to-blue-500/10 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                                <span class="relative z-10 flex items-center">
                                    <i class="fas fa-rocket mr-4 text-2xl group-hover:animate-bounce"></i>
                                    Вижте плановете
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

  @push('scripts')
    <script>
    // FAQ Toggle Functionality
    function toggleFAQ(index) {
        const answer = document.getElementById(`faq-answer-${index}`);
        const icon = document.getElementById(`faq-icon-${index}`);
        const faqItem = document.querySelector(`[data-faq-index="${index}"]`);

        // Close all other FAQ items
        const allAnswers = document.querySelectorAll('.faq-answer');
        const allIcons = document.querySelectorAll('.faq-icon');
        const allFaqItems = document.querySelectorAll('[data-faq-index]');

        allAnswers.forEach((ans, i) => {
            if (i !== index) {
                ans.classList.add('hidden');
                allIcons[i].classList.remove('fa-minus');
                allIcons[i].classList.add('fa-plus');
                allFaqItems[i].classList.remove('faq-active');
            }
        });

        // Toggle current FAQ item
        if (answer.classList.contains('hidden')) {
            // Open FAQ
            answer.classList.remove('hidden');
            answer.style.maxHeight = answer.scrollHeight + 'px';
            icon.classList.remove('fa-plus');
            icon.classList.add('fa-minus');
            faqItem.classList.add('faq-active');

            // Add smooth animation
            answer.style.transition = 'max-height 0.4s cubic-bezier(0.4, 0, 0.2, 1)';
            setTimeout(() => {
                answer.style.maxHeight = 'none';
            }, 400);
        } else {
            // Close FAQ
            answer.style.maxHeight = answer.scrollHeight + 'px';
            setTimeout(() => {
                answer.style.maxHeight = '0px';
                setTimeout(() => {
                    answer.classList.add('hidden');
                    answer.style.maxHeight = '';
                }, 400);
            }, 10);
            icon.classList.remove('fa-minus');
            icon.classList.add('fa-plus');
            faqItem.classList.remove('faq-active');
        }
    }

    // Initialize FAQ functionality when DOM is loaded
    document.addEventListener('DOMContentLoaded', function() {
        // Add smooth transitions to FAQ answers
        const faqAnswers = document.querySelectorAll('.faq-answer');
        faqAnswers.forEach(answer => {
            answer.style.transition = 'max-height 0.4s cubic-bezier(0.4, 0, 0.2, 1)';
            answer.style.overflow = 'hidden';
        });

        // Add click event listeners for better accessibility
        const faqItems = document.querySelectorAll('[data-faq-index]');
        faqItems.forEach((item, index) => {
            item.addEventListener('keydown', function(e) {
                if (e.key === 'Enter' || e.key === ' ') {
                    e.preventDefault();
                    toggleFAQ(index);
                }
            });

            // Make items focusable
            item.setAttribute('tabindex', '0');
            item.setAttribute('role', 'button');
            item.setAttribute('aria-expanded', 'false');
            item.setAttribute('aria-controls', `faq-answer-${index}`);
        });

        // Add stagger animation for FAQ items
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry, index) => {
                if (entry.isIntersecting) {
                    entry.target.style.animationDelay = `${index * 0.1}s`;
                    entry.target.classList.add('animate-fade-in-up');
                }
            });
        }, observerOptions);

        faqItems.forEach(item => {
            observer.observe(item);
        });
    });
    </script>
  @endpush
