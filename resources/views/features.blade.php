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
                        <!-- Real-time Tracking section -->

                        <div class="lg:col-start-1 mb-8 lg:mb-0">
                            <img src="https://images.unsplash.com/photo-1623282033815-40b05d96c903?w=800&h=600&fit=crop" alt="Real-time Vehicle Tracking" class="rounded-lg shadow-xl w-full h-auto">
                        </div>
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
                        <div class="lg:col-start-2 mb-8 lg:mb-0">
                            <img src="https://images.unsplash.com/photo-1592861956120-e524fc739696?w=800&h=600&fit=crop" alt="Route Optimization" class="rounded-lg shadow-xl w-full h-auto">
                        </div>
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
                        <!-- Geofencing section -->
                        <div class="lg:col-start-1 mb-8 lg:mb-0">
                            <img src="https://images.unsplash.com/photo-1519638399535-1b036603ac77?w=800&h=600&fit=crop" alt="Geofencing" class="rounded-lg shadow-xl w-full h-auto">
                        </div>
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
                        <div class="lg:col-start-2 mb-8 lg:mb-0">
                            <img src="https://images.unsplash.com/photo-1580273916550-e323be2ae537?w=800&h=600&fit=crop" alt="Driver Behavior Analysis" class="rounded-lg shadow-xl w-full h-auto">
                        </div>
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

    .feature-section {
        opacity: 0;
        transform: translateY(20px);
        transition: opacity 0.6s ease-out, transform 0.6s ease-out;
    }

    .feature-section.visible {
        opacity: 1;
        transform: translateY(0);
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const sections = document.querySelectorAll('.relative');
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, {
            threshold: 0.2
        });

        sections.forEach(section => {
            section.classList.add('feature-section');
            observer.observe(section);
        });
    });
</script>

@endsection

<!-- Real-time Tracking section -->
<div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-gradient-to-r from-blue-400 to-blue-600 text-white feature-icon">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="currentColor">
        <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
    </svg>
</div>

<!-- Historical Data section -->
<div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-gradient-to-r from-green-400 to-green-600 text-white feature-icon">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="currentColor">
        <path d="M13 3c-4.97 0-9 4.03-9 9H1l3.89 3.89.07.14L9 12H6c0-3.87 3.13-7 7-7s7 3.13 7 7-3.13 7-7 7c-1.93 0-3.68-.79-4.94-2.06l-1.42 1.42C8.27 19.99 10.51 21 13 21c4.97 0 9-4.03 9-9s-4.03-9-9-9zm-1 5v5l4.28 2.54.72-1.21-3.5-2.08V8H12z"/>
    </svg>
</div>

<!-- Safety Monitoring icon -->
<div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-gradient-to-r from-purple-400 to-purple-600 text-white feature-icon">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="currentColor">
        <path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm0 10.99h7c-.53 4.12-3.28 7.79-7 8.94V12H5V6.3l7-3.11v8.8z"/>
    </svg>
</div>

<!-- Performance Reports icon -->
<div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-gradient-to-r from-orange-400 to-orange-600 text-white feature-icon">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="currentColor">
        <path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zM9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4z"/>
    </svg>
</div>

<!-- Custom Zones icon -->
<div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-gradient-to-r from-blue-400 to-blue-600 text-white feature-icon">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="currentColor">
        <path d="M12 2C8.14 2 5 5.14 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.86-3.14-7-7-7zm0 4c1.1 0 2 .9 2 2s-.9 2-2 2-2-.9-2-2 .9-2 2-2zm3 8h-6v-1h1v-2h1v2h2v-4h1v4h1v1z"/>
    </svg>
</div>

<!-- Instant Alerts icon -->
<div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-gradient-to-r from-green-400 to-green-600 text-white feature-icon">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="currentColor">
        <path d="M12 22c1.1 0 2-.9 2-2h-4c0 1.1.89 2 2 2zm6-6v-5c0-3.07-1.64-5.64-4.5-6.32V4c0-.83-.67-1.5-1.5-1.5s-1.5.67-1.5 1.5v.68C7.63 5.36 6 7.92 6 11v5l-2 2v1h16v-1l-2-2z"/>
    </svg>
</div>
