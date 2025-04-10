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
                                        <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-blue-500 text-white feature-icon">
                                            <i class="fas fa-map-marker-alt"></i>
                                        </div>
                                        <p class="feature-title ml-16 text-lg leading-6 font-medium text-primary">Live Location Updates</p>
                                    </dt>
                                    <dd class="feature-description mt-2 ml-16 text-base text-gray-500">
                                        Get instant updates on vehicle location with our advanced GPS tracking technology.
                                    </dd>
                                </div>
                                <div class="relative">
                                    <dt>
                                        <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-green-500 text-white feature-icon">
                                            <i class="fas fa-history"></i>
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
                                        <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-purple-500 text-white feature-icon">
                                            <i class="fas fa-shield-alt"></i>
                                        </div>
                                        <p class="feature-title ml-16 text-lg leading-6 font-medium text-primary">Safety Monitoring</p>
                                    </dt>
                                    <dd class="feature-description mt-2 ml-16 text-base text-gray-500">
                                        Track harsh braking, acceleration, and speeding to improve driver safety.
                                    </dd>
                                </div>
                                <div class="relative">
                                    <dt>
                                        <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-orange-500 text-white feature-icon">
                                            <i class="fas fa-chart-bar"></i>
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
                                        <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-blue-500 text-white feature-icon">
                                            <i class="fas fa-map-marker-alt"></i>
                                        </div>
                                        <p class="feature-title ml-16 text-lg leading-6 font-medium text-primary">Custom Zones</p>
                                    </dt>
                                    <dd class="feature-description mt-2 ml-16 text-base text-gray-500">
                                        Create and manage custom geofencing zones with our intuitive interface.
                                    </dd>
                                </div>
                                <div class="relative">
                                    <dt>
                                        <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-green-500 text-white feature-icon">
                                            <i class="fas fa-history"></i>
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
                                        <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-purple-500 text-white feature-icon">
                                            <i class="fas fa-shield-alt"></i>
                                        </div>
                                        <p class="feature-title ml-16 text-lg leading-6 font-medium text-primary">Safety Monitoring</p>
                                    </dt>
                                    <dd class="feature-description mt-2 ml-16 text-base text-gray-500">
                                        Track harsh braking, acceleration, and speeding to improve driver safety.
                                    </dd>
                                </div>
                                <div class="relative">
                                    <dt>
                                        <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-orange-500 text-white feature-icon">
                                            <i class="fas fa-chart-bar"></i>
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
</div>

<style>
    .feature-icon {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .feature-icon i {
        font-size: 1.5rem;
        line-height: 1;
    }

    .feature-icon:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    .feature-title {
        transition: color 0.3s ease;
    }

    .feature-title:hover {
        color: #4F46E5;
    }

    .feature-description {
        transition: opacity 0.3s ease;
    }

    .feature-description:hover {
        opacity: 0.8;
    }
</style>

@endsection
