<!-- Modern Professional Header - Dark Theme -->
<header class="sticky top-0 z-50 bg-gray-900/95 backdrop-blur-xl border-b border-gray-700/50 shadow-lg">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">
            <!-- Logo Section -->
            <div class="flex items-center space-x-4">
                <div class="w-10 h-10 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-xl flex items-center justify-center shadow-lg">
                    <svg class="w-6 h-6 text-white" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 2L2 7L12 12L22 7L12 2Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M2 17L12 22L22 17" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M2 12L12 17L22 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <div>
                    <h1 class="text-2xl font-bold bg-gradient-to-r from-blue-400 to-indigo-400 bg-clip-text text-transparent"><?php echo_config('company.name'); ?></h1>
                    <p class="text-sm text-gray-400 font-medium"><?php echo_config('company.tagline'); ?></p>
                </div>
            </div>

            <!-- Contact Info -->
            <div class="hidden lg:flex items-center space-x-8">
                <div class="flex items-center space-x-2 text-gray-400 hover:text-blue-400 transition-colors">
                    <div class="w-8 h-8 bg-gray-800 rounded-lg flex items-center justify-center">
                        <svg class="w-4 h-4 text-blue-400" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M22 16.92V19.92C22.0011 20.1985 21.9441 20.4742 21.8325 20.7294C21.7209 20.9846 21.5573 21.2136 21.3521 21.4019C21.1469 21.5902 20.9048 21.7335 20.6407 21.8227C20.3766 21.9119 20.0966 21.9452 19.82 21.92C16.7428 21.5856 13.787 20.5341 11.19 18.85C8.77382 17.3146 6.72533 15.2661 5.18999 12.85C3.49997 10.2412 2.44824 7.27099 2.11999 4.18C2.09494 3.90347 2.12826 3.62351 2.21749 3.35945C2.30672 3.09538 2.44999 2.85334 2.63826 2.64816C2.82653 2.44298 3.05547 2.27943 3.31059 2.16787C3.56572 2.05631 3.84139 1.99936 4.11999 2H7.11999C7.59522 1.99522 8.06552 2.16708 8.43373 2.48353C8.80194 2.79999 9.04201 3.23945 9.11999 3.72C9.23662 4.68007 9.47145 5.62273 9.81999 6.53C9.94454 6.88792 9.97351 7.27675 9.90382 7.65318C9.83413 8.02961 9.66879 8.37785 9.42399 8.66L8.11999 9.96C9.01999 11.96 10.04 12.98 12.04 13.88L13.34 12.58C13.6222 12.3352 13.9704 12.1699 14.3468 12.1002C14.7233 12.0305 15.1121 12.0595 15.47 12.184C16.3773 12.5326 17.3199 12.7674 18.28 12.884C18.7658 12.9614 19.2094 13.2032 19.5265 13.5745C19.8437 13.9458 20.0128 14.4201 19.9999 14.9L19.9999 14.92H22Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <span class="text-sm font-medium"><?php echo_config('company.phone'); ?></span>
                </div>
                <div class="flex items-center space-x-2 text-gray-400 hover:text-blue-400 transition-colors">
                    <div class="w-8 h-8 bg-gray-800 rounded-lg flex items-center justify-center">
                        <svg class="w-4 h-4 text-blue-400" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 4H20C21.1 4 22 4.9 22 6V18C22 19.1 21.1 20 20 20H4C2.9 20 2 19.1 2 18V6C2 4.9 2.9 4 4 4Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <polyline points="22,6 12,13 2,6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <span class="text-sm font-medium"><?php echo_config('company.email'); ?></span>
                </div>
            </div>

            <!-- Mobile Menu Button -->
            <button class="lg:hidden w-10 h-10 flex items-center justify-center rounded-lg hover:bg-gray-800 transition-colors" id="mobile-menu-btn" aria-label="Toggle mobile menu">
                <div class="w-6 h-6 flex flex-col justify-center items-center space-y-1">
                    <span class="w-5 h-0.5 bg-gray-400 rounded-full transition-all duration-300"></span>
                    <span class="w-5 h-0.5 bg-gray-400 rounded-full transition-all duration-300"></span>
                    <span class="w-5 h-0.5 bg-gray-400 rounded-full transition-all duration-300"></span>
                </div>
            </button>
        </div>
    </div>
</header>
