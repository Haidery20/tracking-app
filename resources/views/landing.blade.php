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
        animation: typing 3.5s steps(40, end) forwards infinite;
`    }

    @keyframes typing {
        from { width: 0 }
        to { width: 100% }
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
    <div class="bg-gray-50 pt-12 sm:pt-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="feature-title text-3xl sm:text-4xl">
                    Trusted by businesses worldwide
                </h2>
                <p class="feature-description mt-3 text-xl text-gray-500 sm:mt-4">
                    Join thousands of companies who trust our platform to manage their fleets.
                </p>
            </div>
        </div>
        <div class="mt-10 pb-12 bg-white sm:pb-16">
            <div class="relative">
                <div class="absolute inset-0 h-1/2 bg-gray-50"></div>
                <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="max-w-4xl mx-auto">
                        <dl class="rounded-lg bg-white shadow-lg sm:grid sm:grid-cols-3">
                            <div class="flex flex-col border-b border-gray-100 p-6 text-center sm:border-0 sm:border-r">
                                <dt class="stat-label order-2 mt-2 text-lg leading-6 text-gray-500">
                                    Vehicles Tracked
                                </dt>
                                <dd class="stat-number order-1 text-5xl text-secondary">
                                    500+
                                </dd>
                            </div>
                            <div class="flex flex-col border-t border-b border-gray-100 p-6 text-center sm:border-0 sm:border-l sm:border-r">
                                <dt class="stat-label order-2 mt-2 text-lg leading-6 text-gray-500">
                                    Fuel Cost Reduction
                                </dt>
                                <dd class="stat-number order-1 text-5xl text-secondary">
                                    30%
                                </dd>
                            </div>
                            <div class="flex flex-col border-t border-gray-100 p-6 text-center sm:border-0 sm:border-l">
                                <dt class="stat-label order-2 mt-2 text-lg leading-6 text-gray-500">
                                    Page Views
                                </dt>
                                <dd class="stat-number order-1 text-5xl text-secondary" id="pageViews">
                                    Loading...
                                </dd>
                            </div>
                        </dl>
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
</script>
@endpush
@endsection
