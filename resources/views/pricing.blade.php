@extends('layouts.app')

@section('title', 'Pricing - Tracking App')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="max-w-4xl mx-auto text-center mb-16">
        <h1 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">Pricing Plans</h1>
        <p class="text-xl text-gray-600">Choose the plan that fits your tracking needs</p>
    </div>

    <!-- Pricing Tiers -->
    <div class="grid md:grid-cols-3 gap-8">
        <!-- Basic Plan -->
        <div class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-xl transition-all duration-300">
            <div class="text-center">
                <h3 class="text-2xl font-bold text-gray-800 mb-4">Basic</h3>
                <p class="text-4xl font-bold text-gray-800 mb-2">$9.99</p>
                <p class="text-gray-600 mb-6">Per month per device</p>
                <ul class="space-y-4 text-left">
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-500 mr-3"></i>
                        <span>Real-time tracking</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-500 mr-3"></i>
                        <span>Basic geofencing</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-500 mr-3"></i>
                        <span>10 devices limit</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-500 mr-3"></i>
                        <span>Basic analytics</span>
                    </li>
                </ul>
                <button class="btn btn-primary w-full">Get Started</button>
            </div>
        </div>

        <!-- Pro Plan -->
        <div class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-xl transition-all duration-300 relative">
            <div class="absolute -top-4 left-1/2 transform -translate-x-1/2 bg-primary text-white px-4 py-1 rounded-full">Most Popular</div>
            <div class="text-center">
                <h3 class="text-2xl font-bold text-gray-800 mb-4">Pro</h3>
                <p class="text-4xl font-bold text-gray-800 mb-2">$19.99</p>
                <p class="text-gray-600 mb-6">Per month per device</p>
                <ul class="space-y-4 text-left">
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-500 mr-3"></i>
                        <span>Advanced tracking features</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-500 mr-3"></i>
                        <span>Unlimited geofencing</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-500 mr-3"></i>
                        <span>50 devices limit</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-500 mr-3"></i>
                        <span>Advanced analytics</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-500 mr-3"></i>
                        <span>Priority support</span>
                    </li>
                </ul>
                <button class="btn btn-primary w-full">Get Started</button>
            </div>
        </div>

        <!-- Enterprise Plan -->
        <div class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-xl transition-all duration-300">
            <div class="text-center">
                <h3 class="text-2xl font-bold text-gray-800 mb-4">Enterprise</h3>
                <p class="text-4xl font-bold text-gray-800 mb-2">Custom</p>
                <p class="text-gray-600 mb-6">Contact us for pricing</p>
                <ul class="space-y-4 text-left">
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-500 mr-3"></i>
                        <span>Everything in Pro</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-500 mr-3"></i>
                        <span>Unlimited devices</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-500 mr-3"></i>
                        <span>Custom features</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-500 mr-3"></i>
                        <span>24/7 support</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-500 mr-3"></i>
                        <span>API access</span>
                    </li>
                </ul>
                <button class="btn btn-primary w-full">Contact Us</button>
            </div>
        </div>
    </div>

    <!-- Features Comparison -->
    <div class="bg-gray-50 rounded-2xl p-8 mt-16">
        <h2 class="text-2xl font-bold text-gray-800 mb-8">What's Included</h2>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <!-- Features List -->
            <div class="space-y-4">
                <h3 class="text-lg font-semibold text-gray-800">Features</h3>
                <p>Real-time tracking</p>
                <p>Geofencing</p>
                <p>Device limit</p>
                <p>Analytics</p>
                <p>Support</p>
                <p>API access</p>
            </div>

            <!-- Basic Plan -->
            <div class="space-y-4">
                <h3 class="text-lg font-semibold text-gray-800">Basic</h3>
                <p><i class="fas fa-check text-green-500"></i></p>
                <p><i class="fas fa-check text-green-500"></i></p>
                <p>10 devices</p>
                <p>Basic</p>
                <p>Email support</p>
                <p>-</p>
            </div>

            <!-- Pro Plan -->
            <div class="space-y-4">
                <h3 class="text-lg font-semibold text-gray-800">Pro</h3>
                <p><i class="fas fa-check text-green-500"></i></p>
                <p><i class="fas fa-check text-green-500"></i></p>
                <p>50 devices</p>
                <p>Advanced</p>
                <p>Priority support</p>
                <p>-</p>
            </div>

            <!-- Enterprise Plan -->
            <div class="space-y-4">
                <h3 class="text-lg font-semibold text-gray-800">Enterprise</h3>
                <p><i class="fas fa-check text-green-500"></i></p>
                <p><i class="fas fa-check text-green-500"></i></p>
                <p>Unlimited</p>
                <p>Custom</p>
                <p>24/7 support</p>
                <p>Full access</p>
            </div>
        </div>
    </div>
</div>
@endsection
