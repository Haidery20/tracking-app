@extends('layouts.app')

@section('title', 'KONEKTA - Connecting Technology Solutions')

@push('styles')
<style>
    :root {
        --primary-color: #2563eb;
        --secondary-color: #1e40af;
        --background-dark: #1f2937;
        --text-light: #f3f4f6;
    }

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
        opacity: 0.1;
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
        background: linear-gradient(to right, rgba(31, 41, 55, 0.9), rgba(37, 99, 235, 0.9));
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
        transition: all 0.2s ease-in-out;
    }

    .btn-primary {
        background-color: var(--primary-color);
        color: white;
        border: none;
    }

    .btn-primary:hover {
        background-color: var(--secondary-color);
        transform: translateY(-2px);
    }

    .btn-outline {
        background-color: transparent;
        color: var(--primary-color);
        border: 2px solid var(--primary-color);
    }

    .btn-outline:hover {
        background-color: var(--primary-color);
        color: white;
    }

    .feature-card {
        background: white;
        border-radius: 16px;
        padding: 2rem;
        box-shadow: 0 4px 24px rgba(0, 0, 0, 0.08);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .feature-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 32px rgba(0, 0, 0, 0.12);
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

    .cta-section {
        background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
        padding: 4rem 0;
    }

    .gradient-text {
        background: linear-gradient(45deg, #2563eb, #1e40af);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }
</style>
@endpush

@section('content')
<div class="relative overflow-hidden">
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24">
            <div class="text-center">
                <h1 class="text-5xl md:text-6xl font-bold mb-6">
                    <span class="gradient-text">KONEKTA</span>
                </h1>
                <p class="text-xl md:text-2xl text-gray-600 mb-12 max-w-3xl mx-auto">
                    Connecting people, businesses, and technologies. 
                    Experience seamless integration with KONEKTA's innovative solutions.
                </p>
                <div class="flex justify-center space-x-4">
                    <a href="{{ route('register') }}" class="btn btn-primary px-8 py-4 text-lg">Get Started</a>
                    <a href="{{ route('features') }}" class="btn btn-outline px-8 py-4 text-lg">Explore Features</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Our Solutions</h2>
                <p class="text-xl text-gray-600">Empowering connections through advanced technology solutions</p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="feature-card">
                    <div class="text-blue-600 mb-6">
                        <i class="fas fa-network-wired text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Network Solutions</h3>
                    <p class="text-gray-600">Seamless network integration for your business needs.</p>
                </div>
                <!-- Feature 2 -->
                <div class="feature-card">
                    <div class="text-green-600 mb-6">
                        <i class="fas fa-shield-alt text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Security</h3>
                    <p class="text-gray-600">State-of-the-art security measures to protect your connections.</p>
                </div>
                <!-- Feature 3 -->
                <div class="feature-card">
                    <div class="text-purple-600 mb-6">
                        <i class="fas fa-globe text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Global Reach</h3>
                    <p class="text-gray-600">Connect with anyone, anywhere in the world.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-20 bg-gray-900 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-4 gap-8">
                <div class="stat-item">
                    <div class="text-4xl font-bold mb-2"><span class="counter" data-target="5000">0</span></div>
                    <p class="text-gray-400">Connections Made</p>
                </div>
                <div class="stat-item">
                    <div class="text-4xl font-bold mb-2"><span class="counter" data-target="100">0</span></div>
                    <p class="text-gray-400">Projects Completed</p>
                </div>
                <div class="stat-item">
                    <div class="text-4xl font-bold mb-2"><span class="counter" data-target="99.99">0</span></div>
                    <p class="text-gray-400">Uptime</p>
                </div>
                <div class="stat-item">
                    <div class="text-4xl font-bold mb-2"><span class="counter" data-target="24">0</span></div>
                    <p class="text-gray-400">Support Hours</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-8">Ready to Connect?</h2>
            <p class="text-xl text-white/90 mb-12 max-w-3xl mx-auto">
                Join our community of connected businesses and experience the power of seamless integration.
            </p>
            <div class="flex justify-center space-x-4">
                <a href="{{ route('register') }}" class="btn btn-white px-8 py-4 text-lg">Start Free Trial</a>
                <a href="{{ route('contact') }}" class="btn btn-outline-white px-8 py-4 text-lg">Contact Us</a>
            </div>
        </div>
    </section>
</div>
@endsection

@push('scripts')
<script src="{{ asset('js/counter.js') }}"></script>
@endpush
