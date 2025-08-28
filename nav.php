<!-- Modern Professional Navigation - Dark Theme -->
<nav class="bg-gray-800/95 backdrop-blur-xl border-b border-gray-700/50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between">
            <!-- Desktop Navigation -->
            <div class="hidden lg:flex items-center space-x-1">
                <a href="#home" class="group relative px-4 py-6 text-gray-300 hover:text-white transition-colors duration-200">
                    <span class="relative z-10">Home</span>
                    <div class="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-blue-400 to-indigo-400 transition-all duration-300 group-hover:w-full"></div>
                </a>
                <a href="#features" class="group relative px-4 py-6 text-gray-300 hover:text-white transition-colors duration-200">
                    <span class="relative z-10">Features</span>
                    <div class="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-blue-400 to-indigo-400 transition-all duration-300 group-hover:w-full"></div>
                </a>
                <a href="#plans" class="group relative px-4 py-6 text-gray-300 hover:text-white transition-colors duration-200">
                    <span class="relative z-10">Pricing</span>
                    <div class="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-blue-400 to-indigo-400 transition-all duration-300 group-hover:w-full"></div>
                </a>
                <a href="#about" class="group relative px-4 py-6 text-gray-300 hover:text-white transition-colors duration-200">
                    <span class="relative z-10">About</span>
                    <div class="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-blue-400 to-indigo-400 transition-all duration-300 group-hover:w-full"></div>
                </a>
                <a href="#contact" class="group relative px-4 py-6 text-gray-300 hover:text-white transition-colors duration-200">
                    <span class="relative z-10">Contact</span>
                    <div class="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-blue-400 to-indigo-400 transition-all duration-300 group-hover:w-full"></div>
                </a>
            </div>

            <!-- Action Buttons -->
            <div class="hidden lg:flex items-center space-x-4">
                <a href="#login" class="px-6 py-2.5 text-gray-300 hover:text-white font-medium transition-colors duration-200">Sign In</a>
                <a href="#signup" class="px-6 py-2.5 bg-gradient-to-r from-blue-500 to-indigo-600 hover:from-blue-600 hover:to-indigo-700 text-white font-medium rounded-lg shadow-lg hover:shadow-xl transition-all duration-200 transform hover:-translate-y-0.5">Get Started</a>
            </div>
        </div>

        <!-- Mobile Navigation -->
        <div class="lg:hidden fixed inset-0 z-50 bg-gray-900/95 backdrop-blur-xl transform transition-transform duration-300 ease-in-out" id="mobile-menu">
            <div class="flex flex-col h-full">
                <!-- Mobile Header -->
                <div class="flex items-center justify-between p-6 border-b border-gray-700">
                    <div class="flex items-center space-x-3">
                        <div class="w-8 h-8 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-lg flex items-center justify-center">
                            <svg class="w-5 h-5 text-white" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 2L2 7L12 12L22 7L12 2Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M2 17L12 22L22 17" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M2 12L12 17L22 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <span class="text-lg font-semibold text-white"><?php echo_config('company.name'); ?></span>
                    </div>
                    <button class="w-10 h-10 flex items-center justify-center rounded-lg hover:bg-gray-800 transition-colors" id="mobile-close-btn" aria-label="Close mobile menu">
                        <svg class="w-6 h-6 text-gray-400" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M18 6L6 18M6 6L18 18" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                </div>
                
                <!-- Mobile Navigation Links -->
                <div class="flex-1 px-6 py-8 space-y-2">
                    <a href="#home" class="flex items-center space-x-3 p-4 rounded-xl hover:bg-gray-800 transition-colors duration-200 group">
                        <div class="w-10 h-10 bg-gray-800 rounded-lg flex items-center justify-center group-hover:bg-blue-500/20 transition-colors">
                            <svg class="w-5 h-5 text-gray-400 group-hover:text-blue-400" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3 9L12 2L21 9V20C21 20.5304 20.7893 21.0391 20.4142 21.4142C20.0391 21.7893 19.5304 22 19 22H5C4.46957 22 3.96086 21.7893 3.58579 21.4142C3.21071 21.0391 3 20.5304 3 20V9Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <polyline points="9,22 9,12 15,12 15,22" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <span class="text-gray-300 group-hover:text-white font-medium">Home</span>
                    </a>
                    <a href="#features" class="flex items-center space-x-3 p-4 rounded-xl hover:bg-gray-800 transition-colors duration-200 group">
                        <div class="w-10 h-10 bg-gray-800 rounded-lg flex items-center justify-center group-hover:bg-blue-500/20 transition-colors">
                            <svg class="w-5 h-5 text-gray-400 group-hover:text-blue-400" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 2L2 7L12 12L22 7L12 2Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M2 17L12 22L22 17" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M2 12L12 17L22 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <span class="text-gray-300 group-hover:text-white font-medium">Features</span>
                    </a>
                    <a href="#plans" class="flex items-center space-x-3 p-4 rounded-xl hover:bg-gray-800 transition-colors duration-200 group">
                        <div class="w-10 h-10 bg-gray-800 rounded-lg flex items-center justify-center group-hover:bg-blue-500/20 transition-colors">
                            <svg class="w-5 h-5 text-gray-400 group-hover:text-blue-400" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 2V22M17 5H9.5A3.5 3.5 0 0 0 6 8.5V8.5A3.5 3.5 0 0 0 9.5 12H14.5A3.5 3.5 0 0 1 18 15.5V16A3.5 3.5 0 0 1 14.5 19.5H6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <span class="text-gray-300 group-hover:text-white font-medium">Pricing</span>
                    </a>
                    <a href="#about" class="flex items-center space-x-3 p-4 rounded-xl hover:bg-gray-800 transition-colors duration-200 group">
                        <div class="w-10 h-10 bg-gray-800 rounded-lg flex items-center justify-center group-hover:bg-blue-500/20 transition-colors">
                            <svg class="w-5 h-5 text-gray-400 group-hover:text-blue-400" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20 21V19C20 17.9391 19.5786 16.9217 18.8284 16.1716C18.0783 15.4214 17.0609 15 16 15H8C6.93913 15 5.92172 15.4214 5.17157 16.1716C4.42143 16.9217 4 17.9391 4 19V21" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <circle cx="12" cy="7" r="4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <span class="text-gray-300 group-hover:text-white font-medium">About</span>
                    </a>
                    <a href="#contact" class="flex items-center space-x-3 p-4 rounded-xl hover:bg-gray-800 transition-colors duration-200 group">
                        <div class="w-10 h-10 bg-gray-800 rounded-lg flex items-center justify-center group-hover:bg-blue-500/20 transition-colors">
                            <svg class="w-5 h-5 text-gray-400 group-hover:text-blue-400" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M22 16.92V19.92C22.0011 20.1985 21.9441 20.4742 21.8325 20.7294C21.7209 20.9846 21.5573 21.2136 21.3521 21.4019C21.1469 21.5902 20.9048 21.7335 20.6407 21.8227C20.3766 21.9119 20.0966 21.9452 19.82 21.92C16.7428 21.5856 13.787 20.5341 11.19 18.85C8.77382 17.3146 6.72533 15.2661 5.18999 12.85C3.49997 10.2412 2.44824 7.27099 2.11999 4.18C2.09494 3.90347 2.12826 3.62351 2.21749 3.35945C2.30672 3.09538 2.44999 2.85334 2.63826 2.64816C2.82653 2.44298 3.05547 2.27943 3.31059 2.16787C3.56572 2.05631 3.84139 1.99936 4.11999 2H7.11999C7.59522 1.99522 8.06552 2.16708 8.43373 2.48353C8.80194 2.79999 9.04201 3.23945 9.11999 3.72C9.23662 4.68007 9.47145 5.62273 9.81999 6.53C9.94454 6.88792 9.97351 7.27675 9.90382 7.65318C9.83413 8.02961 9.66879 8.37785 9.42399 8.66L8.11999 9.96C9.01999 11.96 10.04 12.98 12.04 13.88L13.34 12.58C13.6222 12.3352 13.9704 12.1699 14.3468 12.1002C14.7233 12.0305 15.1121 12.0595 15.47 12.184C16.3773 12.5326 17.3199 12.7674 18.28 12.884C18.7658 12.9614 19.2094 13.2032 19.5265 13.5745C19.8437 13.9458 20.0128 14.4201 19.9999 14.9L19.9999 14.92H22Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <span class="text-gray-300 group-hover:text-white font-medium">Contact</span>
                    </a>
                </div>
                
                <!-- Mobile Action Buttons -->
                <div class="p-6 space-y-3 border-t border-gray-700">
                    <a href="#login" class="block w-full px-6 py-3 text-center text-gray-300 hover:text-white font-medium rounded-lg hover:bg-gray-800 transition-colors duration-200">Sign In</a>
                    <a href="#signup" class="block w-full px-6 py-3 text-center bg-gradient-to-r from-blue-500 to-indigo-600 hover:from-blue-600 hover:to-indigo-700 text-white font-medium rounded-lg shadow-lg transition-all duration-200">Get Started</a>
                </div>
            </div>
        </div>
    </div>
</nav>

<script>
// Mobile menu functionality
const mobileMenuBtn = document.getElementById('mobile-menu-btn');
const mobileMenu = document.getElementById('mobile-menu');
const mobileCloseBtn = document.getElementById('mobile-close-btn');

// Initially hide mobile menu
mobileMenu.classList.add('translate-x-full');

// Open mobile menu
mobileMenuBtn.addEventListener('click', function() {
    mobileMenu.classList.remove('translate-x-full');
    document.body.style.overflow = 'hidden';
});

// Close mobile menu
mobileCloseBtn.addEventListener('click', function() {
    mobileMenu.classList.add('translate-x-full');
    document.body.style.overflow = '';
});

// Close mobile menu when clicking on a link
document.querySelectorAll('.mobile-nav-link, .mobile-nav a').forEach(link => {
    link.addEventListener('click', function() {
        mobileMenu.classList.add('translate-x-full');
        document.body.style.overflow = '';
    });
});

// Close mobile menu when clicking outside
document.addEventListener('click', function(event) {
    if (!mobileMenu.contains(event.target) && !mobileMenuBtn.contains(event.target)) {
        mobileMenu.classList.add('translate-x-full');
        document.body.style.overflow = '';
    }
});

// Close mobile menu on escape key
document.addEventListener('keydown', function(event) {
    if (event.key === 'Escape') {
        mobileMenu.classList.add('translate-x-full');
        document.body.style.overflow = '';
    }
});
</script>

