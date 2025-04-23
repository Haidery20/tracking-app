@extends('layouts.landing')

@section('content')
<div class="relative bg-gradient-to-br from-gray-50 to-white">
    <!-- Hero Section -->
    <div class="relative overflow-hidden">
        <div class="max-w-7xl mx-auto">
            <div class="relative z-10 pb-8 sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
                <main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                    <div class="sm:text-center lg:text-left">
                        <h1 class="hero-title text-4xl tracking-tight sm:text-5xl md:text-6xl">
                            <span class="block text-primary">Advanced Features</span>
                            <span class="block text-secondary">for Your Business</span>
                        </h1>
                        <p class="hero-subtitle mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                            Discover our comprehensive suite of features designed to help your business grow and succeed online.
                        </p>
                    </div>
                </main>
            </div>
        </div>
    </div>

    <!-- Features Grid -->
    <div class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="space-y-12">
                <!-- Feature Categories -->
                <div class="relative bg-white rounded-2xl shadow-xl overflow-hidden">
                    <div class="lg:grid lg:grid-flow-row-dense lg:grid-cols-2 lg:gap-8 lg:items-center">
                        <div class="lg:col-start-1 mb-8 lg:mb-0">
                            <h2 class="text-3xl font-bold text-gray-900 mb-6">Web Hosting Features</h2>
                            <div class="space-y-6">
                                <div class="flex items-start">
                                    <div class="flex-shrink-0">
                                        <i class="fas fa-server text-2xl text-primary"></i>
                                    </div>
                                    <div class="ml-4">
                                        <h3 class="text-lg font-medium text-gray-900">High Performance</h3>
                                        <p class="mt-2 text-base text-gray-500">Enterprise-grade infrastructure with 99.9% uptime guarantee.</p>
                                    </div>
                                </div>
                                <div class="flex items-start">
                                    <div class="flex-shrink-0">
                                        <i class="fas fa-shield-alt text-2xl text-primary"></i>
                                    </div>
                                    <div class="ml-4">
                                        <h3 class="text-lg font-medium text-gray-900">24/7 Security</h3>
                                        <p class="mt-2 text-base text-gray-500">Advanced security measures and daily backups.</p>
                                    </div>
                                </div>
                                <div class="flex items-start">
                                    <div class="flex-shrink-0">
                                        <i class="fas fa-clock text-2xl text-primary"></i>
                                    </div>
                                    <div class="ml-4">
                                        <h3 class="text-lg font-medium text-gray-900">24/7 Support</h3>
                                        <p class="mt-2 text-base text-gray-500">Round-the-clock support for all your hosting needs.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="lg:col-start-2">
                            <img src="https://images.unsplash.com/photo-1518791841217-8f162f1e1131?w=800&h=600&fit=crop" alt="Web Hosting Features" class="rounded-lg shadow-xl w-full h-auto">
                        </div>
                    </div>
                </div>

                <!-- Web Design Features -->
                <div class="relative bg-white rounded-2xl shadow-xl overflow-hidden">
                    <div class="lg:grid lg:grid-flow-row-dense lg:grid-cols-2 lg:gap-8 lg:items-center">
                        <div class="lg:col-start-2 mb-8 lg:mb-0">
                            <img src="https://images.unsplash.com/photo-1555041469-a586c61ea9bc?w=800&h=600&fit=crop" alt="Web Design Features" class="rounded-lg shadow-xl w-full h-auto">
                        </div>
                        <div class="lg:col-start-1">
                            <h2 class="text-3xl font-bold text-gray-900 mb-6">Web Design Features</h2>
                            <div class="space-y-6">
                                <div class="flex items-start">
                                    <div class="flex-shrink-0">
                                        <i class="fas fa-paint-brush text-2xl text-primary"></i>
                                    </div>
                                    <div class="ml-4">
                                        <h3 class="text-lg font-medium text-gray-900">Custom Design</h3>
                                        <p class="mt-2 text-base text-gray-500">Unique, professional designs tailored to your brand.</p>
                                    </div>
                                </div>
                                <div class="flex items-start">
                                    <div class="flex-shrink-0">
                                        <i class="fas fa-mobile-alt text-2xl text-primary"></i>
                                    </div>
                                    <div class="ml-4">
                                        <h3 class="text-lg font-medium text-gray-900">Responsive Design</h3>
                                        <p class="mt-2 text-base text-gray-500">Optimized for all devices and screen sizes.</p>
                                    </div>
                                </div>
                                <div class="flex items-start">
                                    <div class="flex-shrink-0">
                                        <i class="fas fa-search text-2xl text-primary"></i>
                                    </div>
                                    <div class="ml-4">
                                        <h3 class="text-lg font-medium text-gray-900">SEO Optimized</h3>
                                        <p class="mt-2 text-base text-gray-500">Built with search engine optimization in mind.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- SMS Bulk Features -->
                <div class="relative bg-white rounded-2xl shadow-xl overflow-hidden">
                    <div class="lg:grid lg:grid-flow-row-dense lg:grid-cols-2 lg:gap-8 lg:items-center">
                        <div class="lg:col-start-1 mb-8 lg:mb-0">
                            <h2 class="text-3xl font-bold text-gray-900 mb-6">SMS Bulk Features</h2>
                            <div class="space-y-6">
                                <div class="flex items-start">
                                    <div class="flex-shrink-0">
                                        <i class="fas fa-sms text-2xl text-primary"></i>
                                    </div>
                                    <div class="ml-4">
                                        <h3 class="text-lg font-medium text-gray-900">Mass Messaging</h3>
                                        <p class="mt-2 text-base text-gray-500">Send thousands of messages instantly.</p>
                                    </div>
                                </div>
                                <div class="flex items-start">
                                    <div class="flex-shrink-0">
                                        <i class="fas fa-chart-line text-2xl text-primary"></i>
                                    </div>
                                    <div class="ml-4">
                                        <h3 class="text-lg font-medium text-gray-900">Analytics</h3>
                                        <p class="mt-2 text-base text-gray-500">Track delivery rates and engagement metrics.</p>
                                    </div>
                                </div>
                                <div class="flex items-start">
                                    <div class="flex-shrink-0">
                                        <i class="fas fa-robot text-2xl text-primary"></i>
                                    </div>
                                    <div class="ml-4">
                                        <h3 class="text-lg font-medium text-gray-900">Automation</h3>
                                        <p class="mt-2 text-base text-gray-500">Schedule messages and create automated campaigns.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="lg:col-start-2">
                            <img src="https://images.unsplash.com/photo-1555041469-a586c61ea9bc?w=800&h=600&fit=crop" alt="SMS Bulk Features" class="rounded-lg shadow-xl w-full h-auto">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
