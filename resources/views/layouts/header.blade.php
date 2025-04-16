<nav class="bg-white/80 backdrop-blur-sm fixed w-full z-50 transition-all duration-300" id="floating-header">
    <div class="max-w-7xl mx-auto px-4 backdrop-blur-md backdrop-filter-lg">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <a href="/" class="flex items-center">
                        <img class="h-8 w-auto" src="https://via.placeholder.com/150" alt="KONEKTA Logo">
                        <span class="ml-2 text-xl font-bold text-royal-blue">KONEKTA</span>
                    </a>
                </div>
            </div>
            
            <!-- Desktop Navigation -->
            <div class="hidden sm:ml-6 sm:flex sm:space-x-8">
                <a href="/" class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700">
                    Home
                </a>
                <a href="/pricing" class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700">
                    Pricing
                </a>
                <a href="/about" class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700">
                    About
                </a>
            </div>

            <!-- Desktop Actions -->
            <div class="hidden sm:ml-6 sm:flex sm:items-center">
                <a href="/login" class="ml-3 inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-royal-blue hover:bg-royal-blue-dark">
                    Login
                </a>
                <a href="/register" class="ml-3 inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-royal-blue bg-gray-100 hover:bg-gray-200">
                    Register
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <div class="flex items-center sm:hidden">
                <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100" id="mobile-menu-button">
                    <span class="sr-only">Open main menu</span>
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div class="hidden sm:hidden" id="mobile-menu">
        <div class="px-2 pt-2 pb-3 space-y-1">
            <a href="/" class="block px-3 py-2 rounded-md text-base font-medium text-gray-900 hover:text-gray-700 hover:bg-gray-50">
                Home
            </a>
            <a href="/pricing" class="block px-3 py-2 rounded-md text-base font-medium text-gray-900 hover:text-gray-700 hover:bg-gray-50">
                Pricing
            </a>
            <a href="/about" class="block px-3 py-2 rounded-md text-base font-medium text-gray-900 hover:text-gray-700 hover:bg-gray-50">
                About
            </a>
        </div>
        <div class="px-5 py-3">
            <a href="/login" class="block w-full px-3 py-2 text-center rounded-md text-white bg-royal-blue hover:bg-royal-blue-dark">
                Login
            </a>
            <a href="/register" class="mt-3 block w-full px-3 py-2 text-center rounded-md text-royal-blue bg-gray-100 hover:bg-gray-200">
                Register
            </a>
        </div>
    </div>
</nav>

<!-- Add this script at the end of your body tag -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const header = document.getElementById('floating-header');
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');

    // Mobile menu toggle
    mobileMenuButton.addEventListener('click', function() {
        mobileMenu.classList.toggle('hidden');
    });

    // Header scroll effect
    let lastScroll = 0;
    const headerHeight = header.offsetHeight;

    window.addEventListener('scroll', () => {
        const currentScroll = window.pageYOffset;

        if (currentScroll <= 0) {
            header.classList.remove('bg-white/80');
            header.classList.remove('shadow-lg');
            header.classList.add('bg-transparent');
        } else {
            header.classList.remove('bg-transparent');
            header.classList.add('bg-white/80');
            header.classList.add('shadow-lg');
        }

        if (currentScroll > lastScroll) {
            // Scrolling down
            header.style.transform = 'translateY(-100%)';
        } else {
            // Scrolling up
            header.style.transform = 'translateY(0)';
        }

        lastScroll = currentScroll;
    });
});
</script>
