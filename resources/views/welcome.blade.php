@extends('layouts.app')

@section('title', 'Welcome to Tracking App')

@push('styles')
<style>
    .bg-pattern {
        background-image: url('https://images.unsplash.com/photo-1518623001395-125242310d0c?ixlib=rb-4.0.3&auto=format&fit=crop&w=2000&q=80');
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: -1;
    }

    .content-wrapper {
        position: relative;
        z-index: 1;
        background: rgba(255, 255, 255, 0.9);
        backdrop-filter: blur(10px);
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .hero-section {
        position: relative;
        overflow: hidden;
    }

    .hero-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(to right, rgba(31, 41, 55, 0.9), rgba(74, 93, 75, 0.9));
        z-index: 1;
    }

    .hero-content {
        position: relative;
        z-index: 2;
    }

    .btn {
        padding: 12px 24px;
        border-radius: 8px;
        font-size: 16px;
        font-weight: 600;
        cursor: pointer;
        transition: background-color 0.2s ease-in-out;
    }

    .btn-primary {
        background-color: #4A5D4B;
        color: #fff;
        border: none;
    }

    .btn-primary:hover {
        background-color: #3A4D3B;
    }

    .btn-outline {
        background-color: transparent;
        color: #4A5D4B;
        border: 2px solid #4A5D4B;
    }

    .btn-outline:hover {
        background-color: #4A5D4B;
        color: #fff;
    }

    .btn-lg {
        padding: 16px 32px;
        font-size: 18px;
    }

    .stat-item {
        padding: 24px;
        border-radius: 8px;
        background-color: rgba(255, 255, 255, 0.1);
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.2);
        transition: all 0.3s ease;
    }

    .stat-item:hover {
        background-color: rgba(255, 255, 255, 0.15);
        transform: translateY(-2px);
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
    }

    .stat-item .text-4xl {
        color: rgba(255, 255, 255, 0.95);
        font-weight: 700;
        line-height: 1.2;
    }

    .stat-item p {
        color: rgba(255, 255, 255, 0.7);
        font-size: 16px;
        margin-top: 8px;
    }
</style>
@endpush

@section('content')
<div class="relative overflow-hidden">
    <!-- Hero Section -->
    <section class="relative pt-16 pb-32 bg-gradient-to-br from-gray-900 to-[#4A5D4B] text-white">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 relative">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-8">Real-Time Asset Tracking Made Simple</h1>
                <p class="text-xl text-gray-200 mb-12 max-w-3xl mx-auto">Track your assets in real-time with our advanced GPS tracking solution. Perfect for fleet management, logistics, and personal tracking needs.</p>
                <div class="flex justify-center space-x-4">
                    <a href="{{ route('register') }}" class="btn btn-white">Start Tracking Now</a>
                    <a href="{{ route('features') }}" class="btn btn-outline border-white text-white hover:bg-white hover:text-[#4A5D4B]">Learn More</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-20 bg-white">
        <div class="max-w-6xl mx-auto px-4 sm:px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Why Choose Our Tracking Solution?</h2>
                <p class="text-xl text-gray-600">Powerful features to help you monitor and manage your assets</p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 group">
                    <div class="text-[#4A5D4B] mb-6 group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-map-marked-alt text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Real-Time Tracking</h3>
                    <p class="text-gray-600">Monitor your assets in real-time with precise GPS location tracking and instant updates.</p>
                </div>
                <!-- Feature 2 -->
                <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 group">
                    <div class="text-[#4A5D4B] mb-6 group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-bell text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Instant Alerts</h3>
                    <p class="text-gray-600">Get notified instantly when your assets enter or leave designated areas.</p>
                </div>
                <!-- Feature 3 -->
                <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 group">
                    <div class="text-[#4A5D4B] mb-6 group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-chart-line text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Analytics</h3>
                    <p class="text-gray-600">Comprehensive analytics and reports to optimize your operations.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-20 bg-[#4A5D4B] text-white">
        <div class="max-w-6xl mx-auto px-4 sm:px-6">
            <div class="grid md:grid-cols-4 gap-8">
                <div class="stat-item">
                    <div class="text-4xl font-bold mb-2"><span class="counter" data-target="{{ $stats['active_users'] }}" data-suffix="+">0</span></div>
                    <p class="text-gray-300">Active Users</p>
                </div>
                <div class="stat-item">
                    <div class="text-4xl font-bold mb-2"><span class="counter" data-target="{{ $stats['tracked_assets'] }}" data-suffix="+">{{ number_format($stats['tracked_assets']) }}</span></div>
                    <p class="text-gray-300">Assets Tracked</p>
                </div>
                <div class="stat-item">
                    <div class="text-4xl font-bold mb-2"><span class="counter" data-target="{{ $stats['uptime'] }}" data-suffix="%">0</span></div>
                    <p class="text-gray-300">Uptime</p>
                </div>
                <div class="stat-item">
                    <div class="text-4xl font-bold mb-2"><span class="counter" data-target="{{ $stats['support_hours'] }}" data-suffix="/7">0</span></div>
                    <p class="text-gray-300">Support</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gray-900">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 text-center">
            <h2 class="text-3xl font-bold text-white mb-8">Ready to Start Tracking?</h2>
            <p class="text-xl text-gray-300 mb-12 max-w-3xl mx-auto">Join thousands of satisfied customers who trust our tracking solution.</p>
            <div class="flex justify-center space-x-4">
                <a href="{{ route('register') }}" class="btn btn-primary btn-lg">Get Started</a>
                <a href="{{ route('pricing') }}" class="btn btn-outline btn-lg border-white text-white hover:bg-white hover:text-gray-900">View Pricing</a>
            </div>
        </div>
    </section>
</div>
@endsection

@push('scripts')
<script src="{{ asset('js/counter.js') }}"></script>
@endpush
