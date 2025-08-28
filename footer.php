<!-- Footer -->
<footer class="bg-gradient-to-br from-gray-900 via-blue-900 to-purple-900 text-white w-full">

    <div class="container mx-auto px-6 py-16">
        <div class="grid md:grid-cols-4 gap-12">
            <!-- Company Info -->
            <div class="col-span-2">
                <div class="flex items-center mb-6">
                    <div class="w-14 h-14 bg-primary-green rounded-xl flex items-center justify-center mr-4">
                        <i class="fas fa-cloud text-white text-2xl"></i>
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold text-white"><?php echo_config('company.name'); ?></h3>
                        <p class="text-gray-300 font-medium"><?php echo_config('company.tagline'); ?></p>
                    </div>
                </div>
                <p class="text-gray-300 mb-6 text-lg leading-relaxed"><?php echo_config('seo.description'); ?></p>
                <div class="flex space-x-6">
                    <a href="#" class="w-12 h-12 bg-white/10 rounded-full flex items-center justify-center text-gray-300 hover:text-primary-green hover:bg-white/20 transition duration-300">
                        <i class="fab fa-facebook-f text-xl"></i>
                    </a>
                    <a href="#" class="w-12 h-12 bg-white/10 rounded-full flex items-center justify-center text-gray-300 hover:text-primary-green hover:bg-white/20 transition duration-300">
                        <i class="fab fa-twitter text-xl"></i>
                    </a>
                    <a href="#" class="w-12 h-12 bg-white/10 rounded-full flex items-center justify-center text-gray-300 hover:text-primary-green hover:bg-white/20 transition duration-300">
                        <i class="fab fa-linkedin-in text-xl"></i>
                    </a>
                    <a href="#" class="w-12 h-12 bg-white/10 rounded-full flex items-center justify-center text-gray-300 hover:text-primary-green hover:bg-white/20 transition duration-300">
                        <i class="fab fa-instagram text-xl"></i>
                    </a>
                </div>
            </div>

            <!-- Quick Links -->
            <div>
                <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
                <ul class="space-y-2">
                    <li><a href="#home" class="text-gray-400 hover:text-white transition duration-300">Home</a></li>
                    <li><a href="#features" class="text-gray-400 hover:text-white transition duration-300">Features</a></li>
                    <li><a href="#plans" class="text-gray-400 hover:text-white transition duration-300">Pricing</a></li>
                    <li><a href="#about" class="text-gray-400 hover:text-white transition duration-300">About Us</a></li>
                    <li><a href="#contact" class="text-gray-400 hover:text-white transition duration-300">Contact</a></li>
                </ul>
            </div>

            <!-- Support -->
            <div>
                <h4 class="text-lg font-semibold mb-4">Support</h4>
                <ul class="space-y-2">
                    <li><a href="#help" class="text-gray-400 hover:text-white transition duration-300">Help Center</a></li>
                    <li><a href="#docs" class="text-gray-400 hover:text-white transition duration-300">Documentation</a></li>
                    <li><a href="#status" class="text-gray-400 hover:text-white transition duration-300">Server Status</a></li>
                    <li><a href="#tickets" class="text-gray-400 hover:text-white transition duration-300">Support Tickets</a></li>
                    <li><a href="#community" class="text-gray-400 hover:text-white transition duration-300">Community</a></li>
                </ul>
            </div>
        </div>

        <!-- Bottom Footer -->
        <div class="border-t border-gray-800 mt-8 pt-8">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="text-gray-400 text-sm mb-4 md:mb-0">
                    © 2024 CloudHost Pro. All rights reserved.
                </div>
                <div class="flex space-x-6 text-sm">
                    <a href="#privacy" class="text-gray-400 hover:text-white transition duration-300">Privacy Policy</a>
                    <a href="#terms" class="text-gray-400 hover:text-white transition duration-300">Terms of Service</a>
                    <a href="#cookies" class="text-gray-400 hover:text-white transition duration-300">Cookie Policy</a>
                </div>
            </div>
        </div>
    </div>
</footer>
