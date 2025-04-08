@extends('layouts.app')

@section('title', 'Features - Tracking App')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="max-w-4xl mx-auto text-center mb-16">
        <h1 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">Powerful Features</h1>
        <p class="text-xl text-gray-600">Discover what makes our tracking solution stand out</p>
    </div>

    <!-- Feature Grid -->
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Real-time Tracking -->
        <div class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-xl transition-all duration-300">
            <div class="flex items-center justify-center mb-6">
                <div class="bg-blue-100 rounded-full p-4">
                    <i class="fas fa-satellite-dish text-3xl text-blue-500"></i>
                </div>
            </div>
            <h3 class="text-2xl font-bold text-gray-800 mb-4">Real-time Tracking</h3>
            <p class="text-gray-600">Get instant updates on your tracking data with our real-time monitoring system.</p>
            <div class="mt-6">
                <button class="btn btn-primary">Learn More</button>
            </div>
        </div>

        <!-- AI Insights -->
        <div class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-xl transition-all duration-300">
            <div class="flex items-center justify-center mb-6">
                <div class="bg-purple-100 rounded-full p-4">
                    <i class="fas fa-brain text-3xl text-purple-500"></i>
                </div>
            </div>
            <h3 class="text-2xl font-bold text-gray-800 mb-4">AI Insights</h3>
            <p class="text-gray-600">Our AI system provides intelligent insights and predictions based on your tracking data.</p>
            <div class="mt-6">
                <button class="btn btn-primary">Learn More</button>
            </div>
        </div>

        <!-- Geofencing -->
        <div class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-xl transition-all duration-300">
            <div class="flex items-center justify-center mb-6">
                <div class="bg-green-100 rounded-full p-4">
                    <i class="fas fa-map-marker-alt text-3xl text-green-500"></i>
                </div>
            </div>
            <h3 class="text-2xl font-bold text-gray-800 mb-4">Geofencing</h3>
            <p class="text-gray-600">Set up virtual boundaries and get notified when devices enter or exit specific areas.</p>
            <div class="mt-6">
                <button class="btn btn-primary">Learn More</button>
            </div>
        </div>

        <!-- Alert System -->
        <div class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-xl transition-all duration-300">
            <div class="flex items-center justify-center mb-6">
                <div class="bg-red-100 rounded-full p-4">
                    <i class="fas fa-bell text-3xl text-red-500"></i>
                </div>
            </div>
            <h3 class="text-2xl font-bold text-gray-800 mb-4">Alert System</h3>
            <p class="text-gray-600">Customizable alerts for various events and conditions, ensuring you're always informed.</p>
            <div class="mt-6">
                <button class="btn btn-primary">Learn More</button>
            </div>
        </div>

        <!-- Device Management -->
        <div class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-xl transition-all duration-300">
            <div class="flex items-center justify-center mb-6">
                <div class="bg-yellow-100 rounded-full p-4">
                    <i class="fas fa-mobile-alt text-3xl text-yellow-500"></i>
                </div>
            </div>
            <h3 class="text-2xl font-bold text-gray-800 mb-4">Device Management</h3>
            <p class="text-gray-600">Easily manage all your tracking devices from one intuitive interface.</p>
            <div class="mt-6">
                <button class="btn btn-primary">Learn More</button>
            </div>
        </div>

        <!-- Data Analytics -->
        <div class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-xl transition-all duration-300">
            <div class="flex items-center justify-center mb-6">
                <div class="bg-indigo-100 rounded-full p-4">
                    <i class="fas fa-chart-line text-3xl text-indigo-500"></i>
                </div>
            </div>
            <h3 class="text-2xl font-bold text-gray-800 mb-4">Data Analytics</h3>
            <p class="text-gray-600">Advanced analytics tools to help you make data-driven decisions.</p>
            <div class="mt-6">
                <button class="btn btn-primary">Learn More</button>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="bg-primary text-white py-16 mt-16">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Ready to get started?</h2>
            <p class="text-xl text-white/80 mb-8">Sign up now and start tracking your assets in minutes.</p>
            <button class="btn btn-white px-8 py-3 text-lg">Start Free Trial</button>
        </div>
    </div>
</div>
@endsection
