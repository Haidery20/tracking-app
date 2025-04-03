@extends('layouts.app')

@section('title', 'Features - Tracking Web App')

@section('content')
<div class="bg-gray-50">
    <!-- Hero Section -->
    <section class="py-20">
        <div class="max-w-6xl mx-auto px-4 sm:px-6">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">Powerful Tracking Features</h1>
                <p class="text-xl text-gray-600 mb-8 max-w-3xl mx-auto">Discover all the advanced features that make our tracking solution the best choice for your business.</p>
                <div class="flex justify-center space-x-4">
                    <a href="{{ route('register') }}" class="btn btn-primary">Start Free Trial</a>
                    <a href="{{ route('pricing') }}" class="btn btn-outline">View Pricing</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Features -->
    <section class="py-16">
        <div class="max-w-6xl mx-auto px-4 sm:px-6">
            <div class="grid md:grid-cols-2 gap-12">
                <!-- Real-Time Tracking -->
                <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300">
                    <div class="text-[#4A5D4B] mb-6">
                        <i class="fas fa-map-marked-alt text-4xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">Real-Time GPS Tracking</h3>
                    <p class="text-gray-600 mb-6">Monitor your assets with precision using our advanced GPS tracking system. Get updates every 30 seconds with accurate location data.</p>
                    <ul class="space-y-3 text-gray-600">
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-3"></i>
                            Live location updates
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-3"></i>
                            Historical route playback
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-3"></i>
                            Speed and direction monitoring
                        </li>
                    </ul>
                </div>

                <!-- Geofencing -->
                <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300">
                    <div class="text-[#4A5D4B] mb-6">
                        <i class="fas fa-draw-polygon text-4xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">Smart Geofencing</h3>
                    <p class="text-gray-600 mb-6">Create virtual boundaries and get instant alerts when assets enter or exit designated areas.</p>
                    <ul class="space-y-3 text-gray-600">
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-3"></i>
                            Custom zone creation
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-3"></i>
                            Entry/exit notifications
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-3"></i>
                            Multiple zone management
                        </li>
                    </ul>
                </div>

                <!-- Analytics -->
                <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300">
                    <div class="text-[#4A5D4B] mb-6">
                        <i class="fas fa-chart-bar text-4xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">Advanced Analytics</h3>
                    <p class="text-gray-600 mb-6">Make data-driven decisions with comprehensive analytics and reporting tools.</p>
                    <ul class="space-y-3 text-gray-600">
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-3"></i>
                            Custom reports generation
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-3"></i>
                            Performance metrics
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-3"></i>
                            Data visualization
                        </li>
                    </ul>
                </div>

                <!-- Alerts -->
                <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300">
                    <div class="text-[#4A5D4B] mb-6">
                        <i class="fas fa-bell text-4xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">Smart Notifications</h3>
                    <p class="text-gray-600 mb-6">Stay informed with customizable alerts and notifications for all your tracking needs.</p>
                    <ul class="space-y-3 text-gray-600">
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-3"></i>
                            Custom alert rules
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-3"></i>
                            Multiple notification channels
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-3"></i>
                            Real-time alerts
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-[#4A5D4B] text-white">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-6">Ready to Experience These Features?</h2>
            <p class="text-xl mb-8 text-gray-200">Start your free trial today and discover why thousands of businesses trust our tracking solution.</p>
            <div class="flex justify-center space-x-4">
                <a href="{{ route('register') }}" class="btn btn-white">Start Free Trial</a>
                <a href="#" class="btn btn-outline border-white text-white hover:bg-white hover:text-[#4A5D4B]">Contact Sales</a>
            </div>
        </div>
    </section>
</div>
@endsection
