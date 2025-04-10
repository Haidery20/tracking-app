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

    .typing-animation {
        display: inline-block;
        overflow: hidden;
        white-space: nowrap;
        animation: typing 3.5s steps(35, end) forwards infinite;
    }

    @keyframes typing {
        from { width: 0 }
        to { width: 100% }
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
                            <span>KONEKTA:</span>
                            <span class="typing-animation"> Connect, Create & <span class="text-primary">Conquer</span></span>
                        </h1>
                        <p class="hero-subtitle mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                            Transform your fleet management with cutting-edge tracking solutions. Connect your vehicles, optimize operations, and conquer your industry with real-time insights.
                        </p>
                        <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                            <div class="rounded-md shadow">
                                <a href="{{ route('register') }}" class="cta-button w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-secondary hover:bg-secondary-dark md:py-4 md:text-lg md:px-10">
                                    Get started
                                </a>
                            </div>
                            <div class="mt-3 sm:mt-0 sm:ml-3">
                                <a href="{{ route('contact') }}" class="cta-button w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-primary bg-white hover:bg-gray-50 md:py-4 md:text-lg md:px-10">
                                    Contact sales
                                </a>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>

     <!-- Features Section -->
    <div class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h2 class="text-base text-secondary font-semibold tracking-wide uppercase">Features</h2>
                <p class="feature-title mt-2 text-3xl leading-8 tracking-tight text-primary sm:text-4xl">
                    Everything you need to manage your fleet
                </p>
                <p class="feature-description mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
                    Powerful features to help you track, monitor, and optimize your vehicle fleet.
                </p>
            </div>

            <div class="mt-10">
                <div class="space-y-10 md:space-y-0 md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-10">
                    <div class="relative">
                        <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-secondary text-white">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                            </svg>
                        </div>
                        <div class="ml-16">
                            <h3 class="feature-title text-lg leading-6 text-primary">Real-time Tracking</h3>
                            <p class="feature-description mt-2 text-base text-gray-500">
                                Monitor your vehicles in real-time with precise location data and detailed analytics.
                            </p>
                        </div>
                    </div>

                    <div class="relative">
                        <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-secondary text-white">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        <div class="ml-16">
                            <h3 class="feature-title text-lg leading-6 text-primary">Route Optimization</h3>
                            <p class="feature-description mt-2 text-base text-gray-500">
                                Optimize routes to reduce fuel costs and improve delivery times.
                            </p>
                        </div>
                    </div>

                    <div class="relative">
                        <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-secondary text-white">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>
                        <div class="ml-16">
                            <h3 class="feature-title text-lg leading-6 text-primary">Geofencing</h3>
                            <p class="feature-description mt-2 text-base text-gray-500">
                                Create virtual boundaries and receive alerts when vehicles enter or exit designated areas.
                            </p>
                        </div>
                    </div>

                    <div class="relative">
                        <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-secondary text-white">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                            </svg>
                        </div>
                        <div class="ml-16">
                            <h3 class="feature-title text-lg leading-6 text-primary">Driver Behavior</h3>
                            <p class="feature-description mt-2 text-base text-gray-500">
                                Monitor driver behavior and receive alerts for harsh braking, acceleration, and speeding.
                            </p>
                        </div>
                    </div>
                </div>
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

            <div class="grid grid-cols-2 gap-8 md:grid-cols-4 lg:grid-cols-6">
                <!-- Partner 1 -->
                <div class="flex justify-center">
                    <img class="h-16 w-auto" src="{{ asset('images/partners/evmak-logo.png') }}" alt="EVMak">
                </div>
                <!-- Partner 2 -->
                <div class="flex justify-center">
                    <img class="h-16 w-auto" src="{{ asset('images/partners/tcra-logo.png') }}" alt="TCRA">
                </div>
                <!-- Partner 3 -->
                <div class="flex justify-center">
                    <img class="h-16 w-auto" src="{{ asset('images/partners/digifarm-logo.png') }}" alt="Digi Farm">
                </div>
                <!-- Partner 4 -->
                <div class="flex justify-center">
                    <img class="h-16 w-auto" src="{{ asset('images/partners/crdb-logo.png') }}" alt="CRDB Bank">
                </div>
                <!-- Partner 5 -->
                <div class="flex justify-center">
                    <img class="h-16 w-auto" src="{{ asset('images/partners/nbc-logo.png') }}" alt="NBC Bank">
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
</script>
@endpush
@endsection
