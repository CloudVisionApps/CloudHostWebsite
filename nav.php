<!-- Navigation Menu -->
<nav class="bg-gray-800 text-white">
    <div class="container mx-auto px-6">
        <div class="flex items-center justify-between">
            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="#home" class="py-4 px-2 text-white hover:text-blue-300 transition duration-300">Home</a>
                <a href="#features" class="py-4 px-2 text-white hover:text-blue-300 transition duration-300">Features</a>
                <a href="#plans" class="py-4 px-2 text-white hover:text-blue-300 transition duration-300">Pricing</a>
                <a href="#about" class="py-4 px-2 text-white hover:text-blue-300 transition duration-300">About</a>
                <a href="#contact" class="py-4 px-2 text-white hover:text-blue-300 transition duration-300">Contact</a>
            </div>

            <!-- Right Side Menu -->
            <div class="hidden md:flex items-center space-x-4">
                <a href="#login" class="py-2 px-4 text-white hover:text-blue-300 transition duration-300">Login</a>
                <a href="#signup" class="py-2 px-4 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition duration-300">Sign Up</a>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="md:hidden hidden">
            <div class="px-2 pt-2 pb-3 space-y-1">
                <a href="#home" class="block px-3 py-2 text-white hover:text-blue-300 transition duration-300">Home</a>
                <a href="#features" class="block px-3 py-2 text-white hover:text-blue-300 transition duration-300">Features</a>
                <a href="#plans" class="block px-3 py-2 text-white hover:text-blue-300 transition duration-300">Pricing</a>
                <a href="#about" class="block px-3 py-2 text-white hover:text-blue-300 transition duration-300">About</a>
                <a href="#contact" class="block px-3 py-2 text-white hover:text-blue-300 transition duration-300">Contact</a>
                <div class="border-t border-gray-700 pt-4 mt-4">
                    <a href="#login" class="block px-3 py-2 text-white hover:text-blue-300 transition duration-300">Login</a>
                    <a href="#signup" class="block px-3 py-2 text-white hover:text-blue-300 transition duration-300">Sign Up</a>
                </div>
            </div>
        </div>
    </div>
</nav>

<script>
// Mobile menu toggle
document.getElementById('mobile-menu-btn').addEventListener('click', function() {
    const mobileMenu = document.getElementById('mobile-menu');
    mobileMenu.classList.toggle('hidden');
});

// Close mobile menu when clicking on a link
document.querySelectorAll('#mobile-menu a').forEach(link => {
    link.addEventListener('click', function() {
        document.getElementById('mobile-menu').classList.add('hidden');
    });
});
</script>
