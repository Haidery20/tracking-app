@extends('layouts.landing')

@section('content')
<div class="relative">
    <!-- Hero Section -->
    <div class="relative overflow-hidden">
        <div class="max-w-7xl mx-auto">
            <div class="relative z-10 pb-8 sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
                <main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                    <div class="sm:text-center lg:text-left">
                        <h1 class="hero-title text-4xl tracking-tight sm:text-5xl md:text-6xl">
                            <span class="block text-primary">Advanced</span>
                            <span class="block text-secondary">Features</span>
                        </h1>
                        <p class="hero-subtitle mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                            Discover the powerful features that make our vehicle tracking solution stand out from the rest.
                        </p>
                    </div>
                </main>
            </div>
        </div>
    </div>

    <!-- Features Grid -->
    <div class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="space-y-12">
                <!-- Real-time Tracking -->
                <div class="relative">
                    <div class="lg:grid lg:grid-flow-row-dense lg:grid-cols-2 lg:gap-8 lg:items-center">
                        <div class="lg:col-start-2">
                            <h3 class="feature-title text-2xl font-extrabold text-primary tracking-tight sm:text-3xl">
                                Real-time Tracking
                            </h3>
                            <p class="feature-description mt-3 text-lg text-gray-500">
                                Monitor your vehicles in real-time with precise location data and detailed analytics. Get instant updates on vehicle status, speed, and route information.
                            </p>
                            <dl class="mt-10 space-y-10">
                                <div class="relative">
                                    <dt>
                                        <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-secondary text-white">
                                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                            </svg>
                                        </div>
                                        <p class="feature-title ml-16 text-lg leading-6 font-medium text-primary">Live Location Updates</p>
                                    </dt>
                                    <dd class="feature-description mt-2 ml-16 text-base text-gray-500">
                                        Get instant updates on vehicle location with our advanced GPS tracking technology.
                                    </dd>
                                </div>
                                <div class="relative">
                                    <dt>
                                        <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-secondary text-white">
                                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                            </svg>
                                        </div>
                                        <p class="feature-title ml-16 text-lg leading-6 font-medium text-primary">Historical Data</p>
                                    </dt>
                                    <dd class="feature-description mt-2 ml-16 text-base text-gray-500">
                                        Access detailed historical data and generate comprehensive reports for analysis.
                                    </dd>
                                </div>
                            </dl>
                        </div>
                    </div>
                </div>

                <!-- Route Optimization -->
                <div class="relative mt-12 sm:mt-16 lg:mt-24">
                    <div class="lg:grid lg:grid-flow-row-dense lg:grid-cols-2 lg:gap-8 lg:items-center">
                        <div class="lg:col-start-1">
                            <h3 class="feature-title text-2xl font-extrabold text-primary tracking-tight sm:text-3xl">
                                Route Optimization
                            </h3>
                            <p class="feature-description mt-3 text-lg text-gray-500">
                                Optimize your delivery routes to save time and reduce fuel costs with our intelligent routing algorithms.
                            </p>
                            <dl class="mt-10 space-y-10">
                                <div class="relative">
                                    <dt>
                                        <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-secondary text-white">
                                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                            </svg>
                                        </div>
                                        <p class="feature-title ml-16 text-lg leading-6 font-medium text-primary">Smart Routing</p>
                                    </dt>
                                    <dd class="feature-description mt-2 ml-16 text-base text-gray-500">
                                        Automatically calculate the most efficient routes based on traffic, weather, and delivery windows.
                                    </dd>
                                </div>
                                <div class="relative">
                                    <dt>
                                        <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-secondary text-white">
                                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                            </svg>
                                        </div>
                                        <p class="feature-title ml-16 text-lg leading-6 font-medium text-primary">Fuel Savings</p>
                                    </dt>
                                    <dd class="feature-description mt-2 ml-16 text-base text-gray-500">
                                        Reduce fuel costs by up to 30% with optimized routes and efficient driving patterns.
                                    </dd>
                                </div>
                            </dl>
                        </div>
                    </div>
                </div>

                <!-- Geofencing -->
                <div class="relative mt-12 sm:mt-16 lg:mt-24">
                    <div class="lg:grid lg:grid-flow-row-dense lg:grid-cols-2 lg:gap-8 lg:items-center">
                        <div class="lg:col-start-2">
                            <h3 class="feature-title text-2xl font-extrabold text-primary tracking-tight sm:text-3xl">
                                Geofencing
                            </h3>
                            <p class="feature-description mt-3 text-lg text-gray-500">
                                Create virtual boundaries and receive instant alerts when vehicles enter or exit designated areas.
                            </p>
                            <dl class="mt-10 space-y-10">
                                <div class="relative">
                                    <dt>
                                        <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-secondary text-white">
                                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                            </svg>
                                        </div>
                                        <p class="feature-title ml-16 text-lg leading-6 font-medium text-primary">Custom Zones</p>
                                    </dt>
                                    <dd class="feature-description mt-2 ml-16 text-base text-gray-500">
                                        Create and manage custom geofencing zones with our intuitive interface.
                                    </dd>
                                </div>
                                <div class="relative">
                                    <dt>
                                        <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-secondary text-white">
                                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                            </svg>
                                        </div>
                                        <p class="feature-title ml-16 text-lg leading-6 font-medium text-primary">Instant Alerts</p>
                                    </dt>
                                    <dd class="feature-description mt-2 ml-16 text-base text-gray-500">
                                        Receive instant notifications when vehicles enter or exit designated areas.
                                    </dd>
                                </div>
                            </dl>
                        </div>
                    </div>
                </div>

                <!-- Driver Behavior -->
                <div class="relative mt-12 sm:mt-16 lg:mt-24">
                    <div class="lg:grid lg:grid-flow-row-dense lg:grid-cols-2 lg:gap-8 lg:items-center">
                        <div class="lg:col-start-1">
                            <h3 class="feature-title text-2xl font-extrabold text-primary tracking-tight sm:text-3xl">
                                Driver Behavior
                            </h3>
                            <p class="feature-description mt-3 text-lg text-gray-500">
                                Monitor and improve driver behavior with our advanced analytics and reporting tools.
                            </p>
                            <dl class="mt-10 space-y-10">
                                <div class="relative">
                                    <dt>
                                        <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-secondary text-white">
                                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                            </svg>
                                        </div>
                                        <p class="feature-title ml-16 text-lg leading-6 font-medium text-primary">Safety Monitoring</p>
                                    </dt>
                                    <dd class="feature-description mt-2 ml-16 text-base text-gray-500">
                                        Track harsh braking, acceleration, and speeding to improve driver safety.
                                    </dd>
                                </div>
                                <div class="relative">
                                    <dt>
                                        <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-secondary text-white">
                                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                            </svg>
                                        </div>
                                        <p class="feature-title ml-16 text-lg leading-6 font-medium text-primary">Performance Reports</p>
                                    </dt>
                                    <dd class="feature-description mt-2 ml-16 text-base text-gray-500">
                                        Generate detailed reports on driver performance and behavior patterns.
                                    </dd>
                                </div>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="bg-secondary">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center lg:justify-between">
            <h2 class="cta-title text-3xl tracking-tight text-white sm:text-4xl">
                <span class="block">Ready to get started?</span>
                <span class="block text-primary">Start your free trial today.</span>
            </h2>
            <div class="mt-8 flex lg:mt-0 lg:flex-shrink-0">
                <div class="inline-flex rounded-md shadow">
                    <a href="{{ route('register') }}" class="cta-button inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-secondary bg-white hover:bg-gray-50">
                        Get started
                    </a>
                </div>
                <div class="ml-3 inline-flex rounded-md shadow">
                    <a href="{{ route('contact') }}" class="cta-button inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-primary hover:bg-primary-dark">
                        Contact sales
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
