@extends('layouts.landing')

@section('content')
<div class="min-h-screen bg-gray-50">
    <!-- Hero Section -->
    <div class="relative overflow-hidden">
        <div class="max-w-7xl mx-auto">
            <div class="relative z-10 pb-8 sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
                <main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                    <div class="sm:text-center lg:text-left">
                        <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                            <span class="block">Simple, Transparent</span>
                            <span class="block text-primary">Pricing</span>
                        </h1>
                        <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                            Choose the perfect plan for your fleet management needs. All plans include our core features with additional benefits as you scale.
                        </p>
                    </div>
                </main>
            </div>
        </div>
    </div>

    <!-- Pricing Section -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid grid-cols-1 gap-8 md:grid-cols-3">
            <!-- Basic Plan -->
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden transform transition-all duration-300 hover:scale-105">
                <div class="px-6 py-8">
                    <h3 class="text-2xl font-bold text-gray-900">Basic</h3>
                    <p class="mt-4 text-gray-500">Perfect for small fleets</p>
                    <div class="mt-8">
                        <span class="text-4xl font-bold text-gray-900">$29</span>
                        <span class="text-gray-500">/month</span>
                    </div>
                    <ul class="mt-8 space-y-4">
                        <li class="flex items-center">
                            <svg class="h-5 w-5 text-primary" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="ml-3 text-gray-700">Up to 5 vehicles</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="h-5 w-5 text-primary" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="ml-3 text-gray-700">Real-time tracking</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="h-5 w-5 text-primary" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="ml-3 text-gray-700">Basic reports</span>
                        </li>
                    </ul>
                    <div class="mt-8">
                        <a href="{{ route('register') }}" class="block w-full bg-primary text-white text-center px-6 py-3 rounded-lg hover:bg-primary/90 transition-colors">
                            Get Started
                        </a>
                    </div>
                </div>
            </div>

            <!-- Pro Plan -->
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden transform transition-all duration-300 hover:scale-105">
                <div class="px-6 py-8">
                    <div class="absolute top-0 right-0 bg-secondary text-white px-4 py-1 rounded-bl-lg">
                        Popular
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900">Pro</h3>
                    <p class="mt-4 text-gray-500">Ideal for growing fleets</p>
                    <div class="mt-8">
                        <span class="text-4xl font-bold text-gray-900">$79</span>
                        <span class="text-gray-500">/month</span>
                    </div>
                    <ul class="mt-8 space-y-4">
                        <li class="flex items-center">
                            <svg class="h-5 w-5 text-primary" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="ml-3 text-gray-700">Up to 20 vehicles</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="h-5 w-5 text-primary" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="ml-3 text-gray-700">Advanced analytics</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="h-5 w-5 text-primary" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="ml-3 text-gray-700">Route optimization</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="h-5 w-5 text-primary" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="ml-3 text-gray-700">Geofencing</span>
                        </li>
                    </ul>
                    <div class="mt-8">
                        <a href="{{ route('register') }}" class="block w-full bg-primary text-white text-center px-6 py-3 rounded-lg hover:bg-primary/90 transition-colors">
                            Get Started
                        </a>
                    </div>
                </div>
            </div>

            <!-- Enterprise Plan -->
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden transform transition-all duration-300 hover:scale-105">
                <div class="px-6 py-8">
                    <h3 class="text-2xl font-bold text-gray-900">Enterprise</h3>
                    <p class="mt-4 text-gray-500">For large-scale operations</p>
                    <div class="mt-8">
                        <span class="text-4xl font-bold text-gray-900">Custom</span>
                    </div>
                    <ul class="mt-8 space-y-4">
                        <li class="flex items-center">
                            <svg class="h-5 w-5 text-primary" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="ml-3 text-gray-700">Unlimited vehicles</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="h-5 w-5 text-primary" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="ml-3 text-gray-700">Custom integrations</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="h-5 w-5 text-primary" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="ml-3 text-gray-700">Dedicated support</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="h-5 w-5 text-primary" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="ml-3 text-gray-700">API access</span>
                        </li>
                    </ul>
                    <div class="mt-8">
                        <a href="{{ route('contact') }}" class="block w-full bg-primary text-white text-center px-6 py-3 rounded-lg hover:bg-primary/90 transition-colors">
                            Contact Sales
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- FAQ Section -->
        <div class="mt-24">
            <h2 class="text-3xl font-bold text-center text-gray-900">Frequently Asked Questions</h2>
            <div class="mt-12 max-w-3xl mx-auto">
                <div class="space-y-8">
                    <div>
                        <h3 class="text-xl font-semibold text-gray-900">Can I change my plan later?</h3>
                        <p class="mt-2 text-gray-600">Yes, you can upgrade or downgrade your plan at any time. Changes will be reflected in your next billing cycle.</p>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold text-gray-900">Is there a free trial available?</h3>
                        <p class="mt-2 text-gray-600">Yes, we offer a 14-day free trial for all plans. No credit card required.</p>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold text-gray-900">Do you offer discounts for non-profits?</h3>
                        <p class="mt-2 text-gray-600">Yes, we offer special pricing for non-profit organizations. Please contact our sales team for more information.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
