<!-- Header -->
<header class="bg-white shadow-sm border-b">
    <div class="container mx-auto px-6 py-4">
        <div class="flex items-center justify-between">
            <!-- Logo -->
            <div class="flex items-center">
                <div class="w-10 h-10 bg-gradient-to-r from-blue-600 to-purple-600 rounded-lg flex items-center justify-center mr-3">
                    <i class="fas fa-cloud text-white text-xl"></i>
                </div>
                <div>
                    <h1 class="text-2xl font-bold text-gray-800"><?php echo_config('company.name'); ?></h1>
                    <p class="text-sm text-gray-600"><?php echo_config('company.tagline'); ?></p>
                </div>
            </div>

            <!-- Contact Info -->
            <div class="hidden md:flex items-center space-x-6 text-sm text-gray-600">
                <div class="flex items-center">
                    <i class="fas fa-phone mr-2 text-blue-600"></i>
                    <span><?php echo_config('company.phone'); ?></span>
                </div>
                <div class="flex items-center">
                    <i class="fas fa-envelope mr-2 text-blue-600"></i>
                    <span><?php echo_config('company.email'); ?></span>
                </div>
                <div class="flex items-center">
                    <i class="fas fa-clock mr-2 text-blue-600"></i>
                    <span><?php echo_config('contact.support_hours'); ?></span>
                </div>
            </div>

            <!-- Mobile Menu Button -->
            <div class="md:hidden">
                <button id="mobile-menu-btn" class="text-gray-600 hover:text-gray-800">
                    <i class="fas fa-bars text-xl"></i>
                </button>
            </div>
        </div>
    </div>
</header>
