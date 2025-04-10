@extends('layouts.landing')

@section('content')
<div class="min-h-screen bg-gradient-to-b from-gray-50 to-white">
    <!-- Hero Section -->
    <div class="relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-r from-primary/10 to-secondary/10 transform -skew-y-6"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24">
            <div class="text-center">
                <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                    <span class="block">Simple, Transparent</span>
                    <span class="block text-primary">Pricing</span>
                </h1>
                <p class="mt-3 max-w-md mx-auto text-base text-gray-500 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
                    Choose the perfect solution for your digital needs. All plans include our core features with additional benefits as you scale.
                </p>
            </div>
        </div>
    </div>

    <!-- Product Tabs -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="flex flex-wrap justify-center gap-4 mb-12">
            <button class="product-tab active px-6 py-3 rounded-full bg-primary text-white font-medium transform transition-all duration-300 hover:scale-105" data-product="hosting">
                <i class="fas fa-server mr-2"></i>Web Hosting
            </button>
            <button class="product-tab px-6 py-3 rounded-full bg-gray-200 text-gray-700 font-medium transform transition-all duration-300 hover:scale-105" data-product="design">
                <i class="fas fa-paint-brush mr-2"></i>Web Design
            </button>
            <button class="product-tab px-6 py-3 rounded-full bg-gray-200 text-gray-700 font-medium transform transition-all duration-300 hover:scale-105" data-product="sms">
                <i class="fas fa-comment-alt mr-2"></i>SMS Bulk
            </button>
        </div>

        <!-- Web Hosting Section -->
        <div class="product-content active" id="hosting-content">
            <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
                <!-- Basic Plan -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden transform transition-all duration-300 hover:scale-105">
                    <div class="px-8 py-10">
                        <div class="text-center">
                            <h3 class="text-2xl font-bold text-gray-900">Basic</h3>
                            <p class="mt-4 text-gray-500">Perfect for small websites</p>
                            <div class="mt-8">
                                <span class="text-4xl font-bold text-gray-900">TZS 12,500</span>
                                <span class="text-gray-500">/month</span>
                            </div>
                        </div>
                        <ul class="mt-8 space-y-4">
                            <li class="flex items-center">
                                <svg class="h-5 w-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="ml-3 text-gray-700">10GB SSD Storage</span>
                            </li>
                            <li class="flex items-center">
                                <svg class="h-5 w-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="ml-3 text-gray-700">Unlimited Bandwidth</span>
                            </li>
                            <li class="flex items-center">
                                <svg class="h-5 w-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="ml-3 text-gray-700">Free SSL Certificate</span>
                            </li>
                            <li class="flex items-center">
                                <svg class="h-5 w-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="ml-3 text-gray-700">24/7 Support</span>
                            </li>
                        </ul>
                        <div class="mt-8">
                            <a href="{{ route('register') }}" class="block w-full text-center px-4 py-3 border border-transparent text-base font-medium rounded-lg text-white bg-primary hover:bg-primary/90 transform transition-all duration-300 hover:scale-105">
                                Get Started
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Pro Plan -->
                <div class="bg-white rounded-xl shadow-xl overflow-hidden border-2 border-primary transform transition-all duration-300 hover:scale-105 relative">
                    <div class="absolute top-0 right-0 -mt-4 -mr-4">
                        <span class="inline-flex items-center justify-center px-4 py-2 text-sm font-medium text-white bg-primary rounded-full shadow-lg">
                            Most Popular
                        </span>
                    </div>
                    <div class="px-8 py-10">
                        <div class="text-center">
                            <h3 class="text-2xl font-bold text-gray-900">Pro</h3>
                            <p class="mt-4 text-gray-500">Ideal for growing businesses</p>
                            <div class="mt-8">
                                <span class="text-4xl font-bold text-gray-900">TZS 25,000</span>
                                <span class="text-gray-500">/month</span>
                            </div>
                        </div>
                        <ul class="mt-8 space-y-4">
                            <li class="flex items-center">
                                <svg class="h-5 w-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="ml-3 text-gray-700">50GB SSD Storage</span>
                            </li>
                            <li class="flex items-center">
                                <svg class="h-5 w-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="ml-3 text-gray-700">Unlimited Bandwidth</span>
                            </li>
                            <li class="flex items-center">
                                <svg class="h-5 w-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="ml-3 text-gray-700">Free SSL Certificate</span>
                            </li>
                            <li class="flex items-center">
                                <svg class="h-5 w-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="ml-3 text-gray-700">Priority Support</span>
                            </li>
                        </ul>
                        <div class="mt-8">
                            <a href="{{ route('register') }}" class="block w-full text-center px-4 py-3 border border-transparent text-base font-medium rounded-lg text-white bg-primary hover:bg-primary/90 transform transition-all duration-300 hover:scale-105">
                                Get Started
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Enterprise Plan -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden transform transition-all duration-300 hover:scale-105">
                    <div class="px-8 py-10">
                        <div class="text-center">
                            <h3 class="text-2xl font-bold text-gray-900">Enterprise</h3>
                            <p class="mt-4 text-gray-500">For high-traffic websites</p>
                            <div class="mt-8">
                                <span class="text-4xl font-bold text-gray-900">TZS 50,000</span>
                                <span class="text-gray-500">/month</span>
                            </div>
                        </div>
                        <ul class="mt-8 space-y-4">
                            <li class="flex items-center">
                                <svg class="h-5 w-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="ml-3 text-gray-700">Unlimited SSD Storage</span>
                            </li>
                            <li class="flex items-center">
                                <svg class="h-5 w-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="ml-3 text-gray-700">Unlimited Bandwidth</span>
                            </li>
                            <li class="flex items-center">
                                <svg class="h-5 w-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="ml-3 text-gray-700">Free SSL Certificate</span>
                            </li>
                            <li class="flex items-center">
                                <svg class="h-5 w-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="ml-3 text-gray-700">Dedicated Support</span>
                            </li>
                        </ul>
                        <div class="mt-8">
                            <a href="{{ route('contact') }}" class="block w-full text-center px-4 py-3 border border-transparent text-base font-medium rounded-lg text-white bg-primary hover:bg-primary/90 transform transition-all duration-300 hover:scale-105">
                                Contact Sales
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Web Design Section -->
        <div class="product-content hidden" id="design-content">
            <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
                <!-- Basic Plan -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="px-6 py-8">
                        <h3 class="text-2xl font-bold text-gray-900">Basic</h3>
                        <p class="mt-4 text-gray-500">Perfect for small businesses</p>
                        <div class="mt-8">
                            <span class="text-4xl font-bold text-gray-900">TZS 750,000</span>
                            <span class="text-gray-500">/one-time</span>
                        </div>
                        <ul class="mt-8 space-y-4">
                            <li class="flex items-center">
                                <svg class="h-5 w-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="ml-3 text-gray-700">5 Pages Website</span>
                            </li>
                            <li class="flex items-center">
                                <svg class="h-5 w-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="ml-3 text-gray-700">Responsive Design</span>
                            </li>
                            <li class="flex items-center">
                                <svg class="h-5 w-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="ml-3 text-gray-700">Basic SEO Setup</span>
                            </li>
                            <li class="flex items-center">
                                <svg class="h-5 w-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="ml-3 text-gray-700">Contact Form</span>
                            </li>
                        </ul>
                        <div class="mt-8">
                            <a href="{{ route('register') }}" class="block w-full text-center px-4 py-2 border border-transparent text-base font-medium rounded-md text-white bg-primary hover:bg-primary/90">
                                Get Started
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Pro Plan -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden border-2 border-primary">
                    <div class="px-6 py-8">
                        <div class="absolute top-0 right-0 -mt-4 -mr-4">
                            <span class="inline-flex items-center justify-center px-4 py-2 text-sm font-medium text-white bg-primary rounded-full shadow-lg">
                                Most Popular
                            </span>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900">Pro</h3>
                        <p class="mt-4 text-gray-500">Ideal for growing businesses</p>
                        <div class="mt-8">
                            <span class="text-4xl font-bold text-gray-900">TZS 1,500,000</span>
                            <span class="text-gray-500">/one-time</span>
                        </div>
                        <ul class="mt-8 space-y-4">
                            <li class="flex items-center">
                                <svg class="h-5 w-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="ml-3 text-gray-700">10 Pages Website</span>
                            </li>
                            <li class="flex items-center">
                                <svg class="h-5 w-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="ml-3 text-gray-700">Custom Design</span>
                            </li>
                            <li class="flex items-center">
                                <svg class="h-5 w-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="ml-3 text-gray-700">Advanced SEO</span>
                            </li>
                            <li class="flex items-center">
                                <svg class="h-5 w-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="ml-3 text-gray-700">E-commerce Setup</span>
                            </li>
                        </ul>
                        <div class="mt-8">
                            <a href="{{ route('register') }}" class="block w-full text-center px-4 py-2 border border-transparent text-base font-medium rounded-md text-white bg-primary hover:bg-primary/90">
                                Get Started
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Enterprise Plan -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="px-6 py-8">
                        <h3 class="text-2xl font-bold text-gray-900">Enterprise</h3>
                        <p class="mt-4 text-gray-500">For large businesses</p>
                        <div class="mt-8">
                            <span class="text-4xl font-bold text-gray-900">TZS 2,500,000</span>
                            <span class="text-gray-500">/one-time</span>
                        </div>
                        <ul class="mt-8 space-y-4">
                            <li class="flex items-center">
                                <svg class="h-5 w-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="ml-3 text-gray-700">Unlimited Pages</span>
                            </li>
                            <li class="flex items-center">
                                <svg class="h-5 w-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="ml-3 text-gray-700">Custom Development</span>
                            </li>
                            <li class="flex items-center">
                                <svg class="h-5 w-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="ml-3 text-gray-700">Premium SEO</span>
                            </li>
                            <li class="flex items-center">
                                <svg class="h-5 w-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="ml-3 text-gray-700">Advanced E-commerce</span>
                            </li>
                        </ul>
                        <div class="mt-8">
                            <a href="{{ route('contact') }}" class="block w-full text-center px-4 py-2 border border-transparent text-base font-medium rounded-md text-white bg-primary hover:bg-primary/90">
                                Contact Sales
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- SMS Bulk Section -->
        <div class="product-content hidden" id="sms-content">
            <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
                <!-- Basic Plan -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="px-6 py-8">
                        <h3 class="text-2xl font-bold text-gray-900">Basic</h3>
                        <p class="mt-4 text-gray-500">Perfect for small campaigns</p>
                        <div class="mt-8">
                            <span class="text-4xl font-bold text-gray-900">TZS 125</span>
                            <span class="text-gray-500">/message</span>
                        </div>
                        <ul class="mt-8 space-y-4">
                            <li class="flex items-center">
                                <svg class="h-5 w-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="ml-3 text-gray-700">1000 Messages</span>
                            </li>
                            <li class="flex items-center">
                                <svg class="h-5 w-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="ml-3 text-gray-700">Basic API Access</span>
                            </li>
                            <li class="flex items-center">
                                <svg class="h-5 w-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="ml-3 text-gray-700">Scheduled Messages</span>
                            </li>
                            <li class="flex items-center">
                                <svg class="h-5 w-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="ml-3 text-gray-700">Basic Support</span>
                            </li>
                        </ul>
                        <div class="mt-8">
                            <a href="{{ route('register') }}" class="block w-full text-center px-4 py-2 border border-transparent text-base font-medium rounded-md text-white bg-primary hover:bg-primary/90">
                                Get Started
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Pro Plan -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden border-2 border-primary">
                    <div class="px-6 py-8">
                        <div class="absolute top-0 right-0 -mt-4 -mr-4">
                            <span class="inline-flex items-center justify-center px-4 py-2 text-sm font-medium text-white bg-primary rounded-full shadow-lg">
                                Most Popular
                            </span>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900">Pro</h3>
                        <p class="mt-4 text-gray-500">Ideal for growing businesses</p>
                        <div class="mt-8">
                            <span class="text-4xl font-bold text-gray-900">TZS 100</span>
                            <span class="text-gray-500">/message</span>
                        </div>
                        <ul class="mt-8 space-y-4">
                            <li class="flex items-center">
                                <svg class="h-5 w-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="ml-3 text-gray-700">10,000 Messages</span>
                            </li>
                            <li class="flex items-center">
                                <svg class="h-5 w-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="ml-3 text-gray-700">Advanced API Access</span>
                            </li>
                            <li class="flex items-center">
                                <svg class="h-5 w-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="ml-3 text-gray-700">Custom Sender ID</span>
                            </li>
                            <li class="flex items-center">
                                <svg class="h-5 w-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="ml-3 text-gray-700">Priority Support</span>
                            </li>
                        </ul>
                        <div class="mt-8">
                            <a href="{{ route('register') }}" class="block w-full text-center px-4 py-2 border border-transparent text-base font-medium rounded-md text-white bg-primary hover:bg-primary/90">
                                Get Started
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Enterprise Plan -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="px-6 py-8">
                        <h3 class="text-2xl font-bold text-gray-900">Enterprise</h3>
                        <p class="mt-4 text-gray-500">For large-scale campaigns</p>
                        <div class="mt-8">
                            <span class="text-4xl font-bold text-gray-900">TZS 75</span>
                            <span class="text-gray-500">/message</span>
                        </div>
                        <ul class="mt-8 space-y-4">
                            <li class="flex items-center">
                                <svg class="h-5 w-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="ml-3 text-gray-700">Unlimited Messages</span>
                            </li>
                            <li class="flex items-center">
                                <svg class="h-5 w-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="ml-3 text-gray-700">Full API Access</span>
                            </li>
                            <li class="flex items-center">
                                <svg class="h-5 w-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="ml-3 text-gray-700">Dedicated Support</span>
                            </li>
                            <li class="flex items-center">
                                <svg class="h-5 w-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="ml-3 text-gray-700">Custom Solutions</span>
                            </li>
                        </ul>
                        <div class="mt-8">
                            <a href="{{ route('contact') }}" class="block w-full text-center px-4 py-2 border border-transparent text-base font-medium rounded-md text-white bg-primary hover:bg-primary/90">
                                Contact Sales
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- FAQ Section -->
    <div class="mt-24 bg-gradient-to-b from-gray-50 to-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">
                    Frequently Asked Questions
                </h2>
                <p class="mt-4 text-lg text-gray-500">
                    Everything you need to know about our services.
                </p>
            </div>

            <div class="mt-12 grid grid-cols-1 gap-8 md:grid-cols-2">
                @foreach([
                    [
                        'question' => 'Can I upgrade my plan later?',
                        'answer' => 'Yes, you can upgrade or downgrade your plan at any time. Changes will be reflected in your next billing cycle.',
                        'icon' => 'fas fa-arrow-up'
                    ],
                    [
                        'question' => 'Do you offer refunds?',
                        'answer' => 'Yes, we offer a 30-day money-back guarantee for our hosting and web design services. SMS credits are non-refundable.',
                        'icon' => 'fas fa-money-bill-wave'
                    ],
                    [
                        'question' => 'Do you offer discounts?',
                        'answer' => 'Yes, we offer discounts for annual subscriptions and non-profit organizations. Contact our sales team for more information.',
                        'icon' => 'fas fa-percentage'
                    ],
                    [
                        'question' => 'What payment methods do you accept?',
                        'answer' => 'We accept all major credit cards, PayPal, and bank transfers for enterprise customers.',
                        'icon' => 'fas fa-credit-card'
                    ]
                ] as $faq)
                @php
                    $bgColors = [
                        'from-blue-50 to-blue-100',
                        'from-green-50 to-green-100',
                        'from-purple-50 to-purple-100',
                        'from-yellow-50 to-yellow-100'
                    ];
                    $iconColors = [
                        'text-blue-500',
                        'text-green-500',
                        'text-purple-500',
                        'text-yellow-500'
                    ];
                @endphp

                <div class="relative bg-white rounded-xl shadow-lg p-6 transform transition-all duration-300 hover:scale-105 hover:shadow-xl">
                    <div class="absolute -top-4 -left-4 bg-white rounded-full p-2 shadow-lg">
                        <i class="{{ $faq['icon'] }} {{ $iconColors[array_rand($iconColors)] }} text-xl"></i>
                    </div>
                    
                    <div class="space-y-4">
                        <h3 class="text-xl font-semibold text-gray-900">
                            {{ $faq['question'] }}
                        </h3>
                        <p class="text-gray-600 leading-relaxed">
                            {{ $faq['answer'] }}
                        </p>
                    </div>

                    <div class="mt-6 border-t border-gray-200 pt-4">
                        <button class="inline-flex items-center text-sm font-medium text-primary hover:text-primary-dark transition-colors duration-300">
                            <i class="fas fa-info-circle mr-1"></i>
                            Learn More
                        </button>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const tabs = document.querySelectorAll('.product-tab');
    const contents = document.querySelectorAll('.product-content');

    tabs.forEach(tab => {
        tab.addEventListener('click', () => {
            // Remove active class from all tabs and contents
            tabs.forEach(t => t.classList.remove('active', 'bg-primary', 'text-white'));
            tabs.forEach(t => t.classList.add('bg-gray-200', 'text-gray-700'));
            contents.forEach(c => c.classList.add('hidden'));

            // Add active class to clicked tab and corresponding content
            tab.classList.remove('bg-gray-200', 'text-gray-700');
            tab.classList.add('active', 'bg-primary', 'text-white');
            document.getElementById(`${tab.dataset.product}-content`).classList.remove('hidden');
        });
    });
});
</script>
@endsection
