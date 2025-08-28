<!-- Footer -->
<footer class="bg-white/5 backdrop-blur-sm border-t border-white/10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="grid md:grid-cols-4 gap-12">
            <!-- Company Info -->
            <div class="col-span-2">
                <div class="flex items-center mb-6">
                    <div class="mr-4">
                        <img src="assets/img/logo-on-dark.svg" alt="Logo" class="h-12">
                    </div>
                </div>
                <p class="text-gray-300 mb-6 text-lg leading-relaxed"><?php echo_config('seo.description'); ?></p>
                <div class="flex space-x-6">
                    <a href="#" class="w-12 h-12 bg-white/10 rounded-full flex items-center justify-center text-gray-300 hover:text-[#1e9975] hover:bg-white/20 transition-all duration-300 transform hover:scale-110">
                        <i class="fab fa-facebook-f text-xl"></i>
                    </a>
                    <a href="#" class="w-12 h-12 bg-white/10 rounded-full flex items-center justify-center text-gray-300 hover:text-[#1e9975] hover:bg-white/20 transition-all duration-300 transform hover:scale-110">
                        <i class="fab fa-twitter text-xl"></i>
                    </a>
                    <a href="#" class="w-12 h-12 bg-white/10 rounded-full flex items-center justify-center text-gray-300 hover:text-[#1e9975] hover:bg-white/20 transition-all duration-300 transform hover:scale-110">
                        <i class="fab fa-linkedin-in text-xl"></i>
                    </a>
                    <a href="#" class="w-12 h-12 bg-white/10 rounded-full flex items-center justify-center text-gray-300 hover:text-[#1e9975] hover:bg-white/20 transition-all duration-300 transform hover:scale-110">
                        <i class="fab fa-instagram text-xl"></i>
                    </a>
                </div>
            </div>

            <!-- Quick Links -->
            <div>
                <h4 class="text-lg font-semibold mb-6 text-white">Бързи връзки</h4>
                <ul class="space-y-3">
                    <li><a href="#home" class="text-gray-400 hover:text-[#1e9975] transition-all duration-300 flex items-center group">
                        <i class="fas fa-chevron-right text-xs mr-2 group-hover:translate-x-1 transition-transform duration-200"></i>
                        Начало
                    </a></li>
                    <li><a href="#features" class="text-gray-400 hover:text-[#1e9975] transition-all duration-300 flex items-center group">
                        <i class="fas fa-chevron-right text-xs mr-2 group-hover:translate-x-1 transition-transform duration-200"></i>
                        Предимства
                    </a></li>
                    <li><a href="#plans" class="text-gray-400 hover:text-[#1e9975] transition-all duration-300 flex items-center group">
                        <i class="fas fa-chevron-right text-xs mr-2 group-hover:translate-x-1 transition-transform duration-200"></i>
                        Цени
                    </a></li>
                    <li><a href="#about" class="text-gray-400 hover:text-[#1e9975] transition-all duration-300 flex items-center group">
                        <i class="fas fa-chevron-right text-xs mr-2 group-hover:translate-x-1 transition-transform duration-200"></i>
                        За нас
                    </a></li>
                    <li><a href="#contact" class="text-gray-400 hover:text-[#1e9975] transition-all duration-300 flex items-center group">
                        <i class="fas fa-chevron-right text-xs mr-2 group-hover:translate-x-1 transition-transform duration-200"></i>
                        Контакти
                    </a></li>
                </ul>
            </div>

            <!-- Support -->
            <div>
                <h4 class="text-lg font-semibold mb-6 text-white">Поддръжка</h4>
                <ul class="space-y-3">
                    <li><a href="#help" class="text-gray-400 hover:text-[#1e9975] transition-all duration-300 flex items-center group">
                        <i class="fas fa-chevron-right text-xs mr-2 group-hover:translate-x-1 transition-transform duration-200"></i>
                        Помощен център
                    </a></li>
                    <li><a href="#docs" class="text-gray-400 hover:text-[#1e9975] transition-all duration-300 flex items-center group">
                        <i class="fas fa-chevron-right text-xs mr-2 group-hover:translate-x-1 transition-transform duration-200"></i>
                        Документация
                    </a></li>
                    <li><a href="#status" class="text-gray-400 hover:text-[#1e9975] transition-all duration-300 flex items-center group">
                        <i class="fas fa-chevron-right text-xs mr-2 group-hover:translate-x-1 transition-transform duration-200"></i>
                        Статус на сървъра
                    </a></li>
                    <li><a href="#tickets" class="text-gray-400 hover:text-[#1e9975] transition-all duration-300 flex items-center group">
                        <i class="fas fa-chevron-right text-xs mr-2 group-hover:translate-x-1 transition-transform duration-200"></i>
                        Поддръжка
                    </a></li>
                    <li><a href="#community" class="text-gray-400 hover:text-[#1e9975] transition-all duration-300 flex items-center group">
                        <i class="fas fa-chevron-right text-xs mr-2 group-hover:translate-x-1 transition-transform duration-200"></i>
                        Общност
                    </a></li>
                </ul>
            </div>
        </div>

        <!-- Bottom Footer -->
        <div class="border-t border-white/10 mt-12 pt-8">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="text-gray-400 text-sm mb-4 md:mb-0">
                    © 2024 <?php echo_config('company.name'); ?>. Всички права запазени.
                </div>
                <div class="flex space-x-6 text-sm">
                    <a href="#privacy" class="text-gray-400 hover:text-[#1e9975] transition-all duration-300">Политика за поверителност</a>
                    <a href="#terms" class="text-gray-400 hover:text-[#1e9975] transition-all duration-300">Условия за ползване</a>
                    <a href="#cookies" class="text-gray-400 hover:text-[#1e9975] transition-all duration-300">Политика за бисквитки</a>
                </div>
            </div>
        </div>
    </div>
</footer>
