@extends('layouts.landing')

@section('content')
<style>
    .animate-fade-in-up {
        animation: fadeInUp 1s ease-out;
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-delay-200 {
        animation-delay: 200ms;
    }

    .animate-delay-400 {
        animation-delay: 400ms;
    }

    .hero-gradient {
        background: linear-gradient(135deg, rgba(var(--primary-rgb), 0.1) 0%, rgba(var(--secondary-rgb), 0.1) 100%);
    }

    .hero-pattern {
        background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%239C92AC' fill-opacity='0.05'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
    }
</style>

<div class="relative">
    <!-- Hero Section -->
    <div class="relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-r from-primary/20 via-secondary/20 to-primary/20 transform -skew-y-6"></div>
        <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80')] bg-cover bg-center opacity-20"></div>
        <div class="relative max-w-7xl mx-auto">
            <div class="relative z-10 pb-8 sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
                <main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                    <div class="sm:text-center lg:text-left">
                        <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                            KONEKTA: Connect, Create & <span class="text-primary">Conquer</span>
                        </h1>
                        <p class="hero-subtitle mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                            Transform your fleet management with cutting-edge tracking solutions. Connect your vehicles, optimize operations, and conquer your industry with real-time insights.
                        </p>
                        <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                            <div class="rounded-md shadow">
                                <a href="{{ route('register') }}" class="cta-button w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-blue-400 hover:bg-blue-500 md:py-4 md:text-lg md:px-10">
                                    Get started
                                </a>
                            </div>
                            <div class="mt-3 sm:mt-0 sm:ml-3">
                                <a href="{{ route('contact') }}" class="cta-button w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-blue-400 bg-white hover:bg-blue-100 md:py-4 md:text-lg md:px-10">
                                    Contact sales
                                </a>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>

    <!-- Services Section -->
    <div class="py-12 bg-gradient-to-br from-gray-50 to-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h2 class="text-3xl font-bold text-gray-900 sm:text-4xl">
                    Our Services
                </h2>
                <p class="mt-4 text-lg text-gray-500">
                    Discover our comprehensive digital solutions designed to help your business grow and succeed online.
                </p>
            </div>

            <div class="mt-12 grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
                <!-- Web Hosting -->
                <div class="relative bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                    <div class="p-6">
                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-blue-500 text-white mb-4">
                            <i class="fas fa-cloud text-xl"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">
                            Web Hosting
                        </h3>
                        <p class="text-gray-500">
                            Reliable and secure hosting solutions with enterprise-grade infrastructure.
                        </p>
                    </div>
                </div>

                <!-- Web Design -->
                <div class="relative bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                    <div class="p-6">
                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-green-500 text-white mb-4">
                            <i class="fas fa-desktop text-xl"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">
                            Web Design
                        </h3>
                        <p class="text-gray-500">
                            Custom, responsive websites that engage your audience and drive conversions.
                        </p>
                    </div>
                </div>

                <!-- SMS Bulk -->
                <div class="relative bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                    <div class="p-6">
                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-purple-500 text-white mb-4">
                            <i class="fas fa-comment-alt text-xl"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">
                            SMS Bulk
                        </h3>
                        <p class="text-gray-500">
                            Powerful SMS marketing platform for effective business communication.
                        </p>
                    </div>
                </div>
            </div>

            <div class="mt-8 text-center">
                <a href="{{ route('services') }}" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-secondary hover:bg-secondary-dark">
                    View All Services
                </a>
            </div>
        </div>
    </div>

    <!-- Stats Section -->
    <div class="py-12 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-4">
                <div class="bg-white p-8 rounded-xl shadow-lg transform hover:scale-105 transition duration-300">
                    <div class="text-4xl font-bold text-primary counter" data-target="1000">500+</div>
                    <div class="mt-2 text-lg text-gray-600">Active Vehicles</div>
                </div>
                <div class="bg-white p-8 rounded-xl shadow-lg transform hover:scale-105 transition duration-300">
                    <div class="text-4xl font-bold text-primary counter" data-target="50">50+</div>
                    <div class="mt-2 text-lg text-gray-600">Enterprise Clients</div>
                </div>
                <div class="bg-white p-8 rounded-xl shadow-lg transform hover:scale-105 transition duration-300">
                    <div class="text-4xl font-bold text-primary counter" data-target="99.9">99.9%</div>
                    <div class="mt-2 text-lg text-gray-600">Uptime</div>
                </div>
                <div class="bg-white p-8 rounded-xl shadow-lg transform hover:scale-105 transition duration-300">
                    <div class="text-4xl font-bold text-primary counter" data-target="24">24/7</div>
                    <div class="mt-2 text-lg text-gray-600">Support</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Partners Section -->
    <div class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center mb-12">
                <h2 class="text-2xl font-semibold text-primary tracking-wide uppercase mb-4">
                    Trusted Partners
                </h2>
                <p class="text-4xl leading-10 font-extrabold tracking-tight text-gray-900 sm:text-5xl md:text-6xl">
                    Our Partners
                </p>
            </div>

            <div class="overflow-x-hidden pb-4">
                <div class="partners-container relative">
                    <div class="partners-wrapper flex space-x-8 min-w-full">
                        <!-- Partner 1 -->
                        <div class="flex-shrink-0">
                            <img class="h-16 w-auto" src="https://via.placeholder.com/200x80/2c3e50/ffffff?text=EVMak" alt="EVMak">
                        </div>
                        <!-- Partner 2 -->
                        <div class="flex-shrink-0">
                            <img class="h-16 w-auto" src="https://via.placeholder.com/200x80/3498db/ffffff?text=TCRA" alt="TCRA">
                        </div>
                        <!-- Partner 3 -->
                        <div class="flex-shrink-0">
                            <img class="h-16 w-auto" src="https://via.placeholder.com/200x80/2ecc71/ffffff?text=Digi+Farm" alt="Digi Farm">
                        </div>
                        <!-- Partner 4 -->
                        <div class="flex-shrink-0">
                            <img class="h-16 w-auto" src="https://via.placeholder.com/200x80/e74c3c/ffffff?text=CRDB+Bank" alt="CRDB Bank">
                        </div>
                        <!-- Partner 5 -->
                        <div class="flex-shrink-0">
                            <img class="h-16 w-auto" src="https://via.placeholder.com/200x80/9b59b6/ffffff?text=NBC+Bank" alt="NBC Bank">
                        </div>
                        <!-- Duplicate partners for continuous scrolling -->
                        <div class="flex-shrink-0">
                            <img class="h-16 w-auto" src="https://via.placeholder.com/200x80/2c3e50/ffffff?text=EVMak" alt="EVMak">
                        </div>
                        <div class="flex-shrink-0">
                            <img class="h-16 w-auto" src="https://via.placeholder.com/200x80/3498db/ffffff?text=TCRA" alt="TCRA">
                        </div>
                        <div class="flex-shrink-0">
                            <img class="h-16 w-auto" src="https://via.placeholder.com/200x80/2ecc71/ffffff?text=Digi+Farm" alt="Digi Farm">
                        </div>
                        <div class="flex-shrink-0">
                            <img class="h-16 w-auto" src="https://via.placeholder.com/200x80/e74c3c/ffffff?text=CRDB+Bank" alt="CRDB Bank">
                        </div>
                        <div class="flex-shrink-0">
                            <img class="h-16 w-auto" src="https://via.placeholder.com/200x80/9b59b6/ffffff?text=NBC+Bank" alt="NBC Bank">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    // Function to update the counter
    function updateCounter() {
        fetch('/get-views')
            .then(response => response.json())
            .then(data => {
                document.getElementById('pageViews').textContent = data.views;
            })
            .catch(error => console.error('Error:', error));
    }

    // Increment counter when page loads
    fetch('/increment-views')
        .then(response => response.json())
        .then(data => {
            document.getElementById('pageViews').textContent = data.views;
        })
        .catch(error => console.error('Error:', error));

    // Update counter every 30 seconds
    setInterval(updateCounter, 30000);

    // Partners scrolling animation
    document.addEventListener('DOMContentLoaded', function() {
        const partnersWrapper = document.querySelector('.partners-wrapper');
        const partnersContainer = document.querySelector('.partners-container');
        
        function scrollPartners() {
            if (partnersWrapper.scrollWidth > partnersContainer.clientWidth) {
                partnersWrapper.style.transform = `translateX(-${partnersContainer.clientWidth}px)`;
                setTimeout(() => {
                    partnersWrapper.style.transition = 'none';
                    partnersWrapper.style.transform = 'translateX(0)';
                    requestAnimationFrame(() => {
                        partnersWrapper.style.transition = 'transform 30s linear';
                        scrollPartners();
                    });
                }, 30000);
            }
        }

        // Start the scrolling
        partnersWrapper.style.transition = 'transform 30s linear';
        scrollPartners();

        // Reset on window resize
        window.addEventListener('resize', () => {
            partnersWrapper.style.transition = 'none';
            partnersWrapper.style.transform = 'translateX(0)';
            setTimeout(scrollPartners, 100);
        });
    });
</script>
@endpush
@endsection
