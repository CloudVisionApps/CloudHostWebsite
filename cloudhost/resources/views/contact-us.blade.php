@extends('layout')

@section('body')


    <body class="min-h-screen bg-gradient-to-br from-[#0a0a0a] via-[#121212] to-[#0f0f0f]">

    @include('parts.header')

    <!-- Hero Section -->
    <section class="relative py-16 lg:py-20 overflow-hidden mt-24">
        <!-- Background Elements -->
        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute top-20 right-20 w-32 h-32 bg-[#1683ab]/10 rounded-full blur-3xl"></div>
            <div class="absolute bottom-20 left-20 w-24 h-24 bg-[#1e9975]/10 rounded-full blur-3xl"></div>
        </div>

        <!-- Content Container -->
        <div class="relative z-10 max-w-6xl mx-auto px-4 text-center">
            <div class="mb-8">
                <h1 class="text-4xl lg:text-5xl font-bold text-white mb-4">
                    Свържете се с <span class="bg-gradient-to-r from-[#1683ab] to-[#1e9975] bg-clip-text text-transparent">нас</span>
                </h1>
                <p class="text-lg lg:text-xl text-gray-300 max-w-3xl mx-auto">
                    Имате въпроси? Нуждаете се от помощ? Нашият екип е тук да ви помогне с всичко, от техническа поддръжка до продажби.
                </p>
            </div>
        </div>
    </section>

    <!-- Department Selection -->
    <section class="relative py-12">
        <div class="max-w-6xl mx-auto px-4">
            <div class="text-center mb-12 scroll-fade-in">
                <h2 class="text-2xl lg:text-3xl font-bold text-white mb-4 scroll-scale-in">Изберете отдел</h2>
                <p class="text-gray-400 scroll-slide-left">Изберете най-подходящия отдел за вашия въпрос</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-4xl mx-auto">
                <!-- Support Department -->
                <div class="department-card group cursor-pointer scroll-stagger" data-department="support">
                    <div class="bg-gradient-to-br from-white/[0.02] to-transparent border border-white/10 rounded-2xl p-8 hover:border-[#1683ab]/40 transition-all duration-300 hover:-translate-y-1 scroll-slide-left">
                        <div class="flex items-center gap-4 mb-6">
                            <div class="w-16 h-16 rounded-xl bg-[#1683ab]/15 text-[#1fb6ff] flex items-center justify-center ring-1 ring-[#1683ab]/30 group-hover:scale-110 transition-transform duration-300">
                                <i class="fa-solid fa-headset text-2xl"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold text-white mb-1">Техническа поддръжка</h3>
                                <p class="text-sm text-gray-400">24/7 помощ и поддръжка</p>
                            </div>
                        </div>
                        <p class="text-gray-300 mb-6">Получете помощ с технически въпроси, проблеми с хостинга, домейни и други услуги.</p>
                        <div class="space-y-2 text-sm text-gray-400">
                            <div class="flex items-center gap-2">
                                <i class="fa-solid fa-check text-[#1e9975]"></i>
                                <span>Проблеми с хостинг</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <i class="fa-solid fa-check text-[#1e9975]"></i>
                                <span>Домейн управление</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <i class="fa-solid fa-check text-[#1e9975]"></i>
                                <span>Техническа поддръжка</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sales Department -->
                <div class="department-card group cursor-pointer scroll-stagger" data-department="sales">
                    <div class="bg-gradient-to-br from-white/[0.02] to-transparent border border-white/10 rounded-2xl p-8 hover:border-[#1e9975]/40 transition-all duration-300 hover:-translate-y-1 scroll-slide-right">
                        <div class="flex items-center gap-4 mb-6">
                            <div class="w-16 h-16 rounded-xl bg-[#1e9975]/15 text-[#1e9975] flex items-center justify-center ring-1 ring-[#1e9975]/30 group-hover:scale-110 transition-transform duration-300">
                                <i class="fa-solid fa-handshake text-2xl"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold text-white mb-1">Продажби</h3>
                                <p class="text-sm text-gray-400">Персонализирани решения</p>
                            </div>
                        </div>
                        <p class="text-gray-300 mb-6">Получете персонализирани оферти за хостинг планове, домейни и бизнес решения.</p>
                        <div class="space-y-2 text-sm text-gray-400">
                            <div class="flex items-center gap-2">
                                <i class="fa-solid fa-check text-[#1e9975]"></i>
                                <span>Хостинг планове</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <i class="fa-solid fa-check text-[#1e9975]"></i>
                                <span>Домейн регистрация</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <i class="fa-solid fa-check text-[#1e9975]"></i>
                                <span>Бизнес решения</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form -->
    <section id="contact-form-section" class="relative py-12 hidden">
        <div class="max-w-4xl mx-auto px-4">
            <div class="text-center mb-8">
                <button id="back-to-departments" class="inline-flex items-center gap-2 text-[#1683ab] hover:text-[#1e9975] transition-colors mb-4">
                    <i class="fa-solid fa-arrow-left"></i>
                    <span>Назад към отделите</span>
                </button>
                <h2 id="form-title" class="text-2xl lg:text-3xl font-bold text-white mb-2">Свържете се с нас</h2>
                <p id="form-description" class="text-gray-400">Попълнете формата и ще се свържем с вас възможно най-скоро</p>
            </div>

            <div class="bg-gradient-to-br from-white/[0.02] to-transparent border border-white/10 rounded-2xl p-8">
                <form id="contact-form" class="space-y-6">
                    <input type="hidden" id="selected-department" name="department" value="">

                    <!-- Name and Email Row -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-300 mb-2">Име *</label>
                            <input type="text" id="name" name="name" required class="w-full bg-[#0f0f0f] border border-white/10 rounded-xl px-4 py-3 text-gray-200 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-[#1683ab]/50 focus:border-[#1683ab]/50">
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-300 mb-2">Имейл *</label>
                            <input type="email" id="email" name="email" required class="w-full bg-[#0f0f0f] border border-white/10 rounded-xl px-4 py-3 text-gray-200 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-[#1683ab]/50 focus:border-[#1683ab]/50">
                        </div>
                    </div>

                    <!-- Phone and Company Row -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="phone" class="block text-sm font-medium text-gray-300 mb-2">Телефон</label>
                            <input type="tel" id="phone" name="phone" class="w-full bg-[#0f0f0f] border border-white/10 rounded-xl px-4 py-3 text-gray-200 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-[#1683ab]/50 focus:border-[#1683ab]/50">
                        </div>
                        <div>
                            <label for="company" class="block text-sm font-medium text-gray-300 mb-2">Компания</label>
                            <input type="text" id="company" name="company" class="w-full bg-[#0f0f0f] border border-white/10 rounded-xl px-4 py-3 text-gray-200 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-[#1683ab]/50 focus:border-[#1683ab]/50">
                        </div>
                    </div>

                    <!-- Subject -->
                    <div>
                        <label for="subject" class="block text-sm font-medium text-gray-300 mb-2">Тема *</label>
                        <input type="text" id="subject" name="subject" required class="w-full bg-[#0f0f0f] border border-white/10 rounded-xl px-4 py-3 text-gray-200 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-[#1683ab]/50 focus:border-[#1683ab]/50">
                    </div>

                    <!-- Priority (Support only) -->
                    <div id="priority-field" class="hidden">
                        <label for="priority" class="block text-sm font-medium text-gray-300 mb-2">Приоритет</label>
                        <select id="priority" name="priority" class="w-full bg-[#0f0f0f] border border-white/10 rounded-xl px-4 py-3 text-gray-200 focus:outline-none focus:ring-2 focus:ring-[#1683ab]/50 focus:border-[[#1683ab]/50">
                            <option value="low">Нисък</option>
                            <option value="medium" selected>Среден</option>
                            <option value="high">Висок</option>
                            <option value="urgent">Спешен</option>
                        </select>
                    </div>

                    <!-- Service Type (Sales only) -->
                    <div id="service-field" class="hidden">
                        <label for="service" class="block text-sm font-medium text-gray-300 mb-2">Тип услуга</label>
                        <select id="service" name="service" class="w-full bg-[#0f0f0f] border border-white/10 rounded-xl px-4 py-3 text-gray-200 focus:outline-none focus:ring-2 focus:ring-[#1683ab]/50 focus:border-[#1683ab]/50">
                            <option value="hosting">Хостинг</option>
                            <option value="domain">Домейн</option>
                            <option value="vps">VPS</option>
                            <option value="dedicated">Специализиран сървър</option>
                            <option value="ssl">SSL сертификат</option>
                            <option value="other">Друго</option>
                        </select>
                    </div>

                    <!-- Message -->
                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-300 mb-2">Съобщение *</label>
                        <textarea id="message" name="message" rows="5" required class="w-full bg-[#0f0f0f] border border-white/10 rounded-xl px-4 py-3 text-gray-200 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-[#1683ab]/50 focus:border-[#1683ab]/50 resize-none"></textarea>
                    </div>

                    <!-- Submit Button -->
                    <div class="flex justify-center">
                        <button type="submit" class="px-8 py-3 bg-gradient-to-r from-[#1683ab] to-[#1e9975] text-white font-medium rounded-xl hover:from-[#1e9975] hover:to-[#1683ab] transition-all duration-300 transform hover:scale-105">
                            <i class="fa-solid fa-paper-plane mr-2"></i>
                            Изпрати съобщение
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Contact Information -->
    <section class="relative py-12">
        <div class="max-w-6xl mx-auto px-4">
            <div class="text-center mb-12 scroll-fade-in">
                <h2 class="text-2xl lg:text-3xl font-bold text-white mb-4 scroll-scale-in">Други начини за връзка</h2>
                <p class="text-gray-400 scroll-slide-left">Свържете се с нас по удобен за вас начин</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 scroll-stagger">
                <!-- Email -->
                <div class="bg-gradient-to-br from-white/[0.02] to-transparent border border-white/10 rounded-2xl p-6 text-center hover:border-[#1683ab]/40 transition-all duration-300 hover:-translate-y-1 scroll-fade-in">
                    <div class="w-12 h-12 rounded-xl bg-[#1683ab]/15 text-[#1fb6ff] flex items-center justify-center mx-auto mb-4 ring-1 ring-[#1683ab]/30">
                        <i class="fa-solid fa-envelope text-xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-white mb-2">Имейл</h3>
                    <p class="text-sm text-gray-400 mb-3">Отговоряме в рамките на 24 часа</p>
                    <a href="mailto:support@example.com" class="text-[#1683ab] hover:text-[#1e9975] transition-colors text-sm font-medium">support@example.com</a>
                </div>

                <!-- Phone -->
                <div class="bg-gradient-to-br from-white/[0.02] to-transparent border border-white/10 rounded-2xl p-6 text-center hover:border-[#1e9975]/40 transition-all duration-300 hover:-translate-y-1 scroll-fade-in">
                    <div class="w-12 h-12 rounded-xl bg-[#1e9975]/15 text-[#1e9975] flex items-center justify-center mx-auto mb-4 ring-1 ring-[#1e9975]/30">
                        <i class="fa-solid fa-phone text-xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-white mb-2">Телефон</h3>
                    <p class="text-sm text-gray-400 mb-3">Понеделник - Петък 9:00 - 18:00</p>
                    <a href="tel:+359888123456" class="text-[#1e9975] hover:text-[#1683ab] transition-colors text-sm font-medium">+359 888 123 456</a>
                </div>

                <!-- Live Chat -->
                <div class="bg-gradient-to-br from-white/[0.02] to-transparent border border-white/10 rounded-2xl p-6 text-center hover:border-[#1683ab]/40 transition-all duration-300 hover:-translate-y-1 scroll-fade-in">
                    <div class="w-12 h-12 rounded-xl bg-[#1683ab]/15 text-[#1fb6ff] flex items-center justify-center mx-auto mb-4 ring-1 ring-[#1683ab]/30">
                        <i class="fa-solid fa-comments text-xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-white mb-2">Чат</h3>
                    <p class="text-sm text-gray-400 mb-3">24/7 онлайн поддръжка</p>
                    <button class="text-[#1683ab] hover:text-[#1e9975] transition-colors text-sm font-medium">Започни чат</button>
                </div>

                <!-- Ticket System -->
                <div class="bg-gradient-to-br from-white/[0.02] to-transparent border border-white/10 rounded-2xl p-6 text-center hover:border-[#1e9975]/40 transition-all duration-300 hover:-translate-y-1 scroll-fade-in">
                    <div class="w-12 h-12 rounded-xl bg-[#1e9975]/15 text-[#1e9975] flex items-center justify-center mx-auto mb-4 ring-1 ring-[#1e9975]/30">
                        <i class="fa-solid fa-ticket text-xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-white mb-2">Тикет система</h3>
                    <p class="text-sm text-gray-400 mb-3">Следи статуса на заявката</p>
                    <button class="text-[#1e9975] hover:text-[#1683ab] transition-colors text-sm font-medium">Създай тикет</button>
                </div>
            </div>

            <!-- Business Hours -->
            <div class="mt-12 bg-gradient-to-r from-[#1683ab]/10 via-transparent to-[#1e9975]/10 border border-white/10 rounded-2xl p-8 scroll-glow-in">
                <div class="text-center">
                    <h3 class="text-xl font-semibold text-white mb-4 scroll-scale-in">Работно време</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-2xl mx-auto scroll-stagger">
                        <div class="scroll-slide-left">
                            <h4 class="text-lg font-medium text-[#1683ab] mb-2">Техническа поддръжка</h4>
                            <p class="text-gray-300">24/7 - 365 дни в годината</p>
                        </div>
                        <div class="scroll-slide-right">
                            <h4 class="text-lg font-medium text-[#1e9975] mb-2">Продажби</h4>
                            <p class="text-gray-300">Понеделник - Петък: 9:00 - 18:00</p>
                            <p class="text-gray-300">Събота: 10:00 - 14:00</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        (function() {
            const departmentCards = document.querySelectorAll('.department-card');
            const contactFormSection = document.getElementById('contact-form-section');
            const backButton = document.getElementById('back-to-departments');
            const formTitle = document.getElementById('form-title');
            const formDescription = document.getElementById('form-description');
            const selectedDepartment = document.getElementById('selected-department');
            const priorityField = document.getElementById('priority-field');
            const serviceField = document.getElementById('service-field');
            const contactForm = document.getElementById('contact-form');

            // Department selection
            departmentCards.forEach(card => {
                card.addEventListener('click', () => {
                    const department = card.getAttribute('data-department');
                    showContactForm(department);
                    // Save department in URL hash
                    window.location.hash = `department=${department}`;
                });
            });

            // Back to departments
            backButton.addEventListener('click', () => {
                hideContactForm();
                // Remove hash from URL
                window.history.replaceState(null, null, window.location.pathname);
            });

            function showContactForm(department) {
                // Hide department cards
                document.querySelector('.department-card').closest('section').style.display = 'none';

                // Show contact form
                contactFormSection.classList.remove('hidden');

                // Update form based on department
                if (department === 'support') {
                    formTitle.textContent = 'Техническа поддръжка';
                    formDescription.textContent = 'Опишете вашия проблем и ще получите помощ възможно най-скоро';
                    selectedDepartment.value = 'support';
                    priorityField.classList.remove('hidden');
                    serviceField.classList.add('hidden');
                } else if (department === 'sales') {
                    formTitle.textContent = 'Отдел продажби';
                    formDescription.textContent = 'Свържете се с нашия екип за персонализирани оферти и решения';
                    selectedDepartment.value = 'sales';
                    priorityField.classList.add('hidden');
                    serviceField.classList.remove('hidden');
                }

                // Scroll to form
                contactFormSection.scrollIntoView({ behavior: 'smooth' });
            }

            function hideContactForm() {
                // Show department cards
                document.querySelector('.department-card').closest('section').style.display = 'block';

                // Hide contact form
                contactFormSection.classList.add('hidden');

                // Reset form
                contactForm.reset();
                priorityField.classList.add('hidden');
                serviceField.classList.add('hidden');
            }

            // Form submission
            contactForm.addEventListener('submit', (e) => {
                e.preventDefault();

                // Get form data
                const formData = new FormData(contactForm);
                const data = Object.fromEntries(formData);

                // Simulate form submission
                const submitButton = contactForm.querySelector('button[type="submit"]');
                const originalText = submitButton.innerHTML;

                submitButton.innerHTML = '<i class="fa-solid fa-spinner fa-spin mr-2"></i>Изпраща се...';
                submitButton.disabled = true;

                // Simulate API call
                setTimeout(() => {
                    alert('Съобщението е изпратено успешно! Ще се свържем с вас възможно най-скоро.');
                    contactForm.reset();
                    hideContactForm();

                    submitButton.innerHTML = originalText;
                    submitButton.disabled = false;
                }, 2000);
            });

            // Check for hash on page load
            function checkHashOnLoad() {
                const hash = window.location.hash;
                if (hash && hash.includes('department=')) {
                    const department = hash.split('department=')[1];
                    if (department === 'support' || department === 'sales') {
                        // Small delay to ensure page is fully loaded
                        setTimeout(() => {
                            showContactForm(department);
                        }, 100);
                    }
                }
            }

            // Listen for hash changes
            window.addEventListener('hashchange', () => {
                const hash = window.location.hash;
                if (hash && hash.includes('department=')) {
                    const department = hash.split('department=')[1];
                    if (department === 'support' || department === 'sales') {
                        showContactForm(department);
                    }
                } else if (!hash) {
                    hideContactForm();
                }
            });

            // Initialize on page load
            checkHashOnLoad();
        })();
    </script>


    @include('parts.footer')

    </body>


@endsection
