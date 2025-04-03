@extends('layouts.app')

@section('title', 'Pricing - Tracking App')

@section('content')
<div class="max-w-6xl mx-auto px-4">
    <div class="py-12">
        <h1 class="text-4xl font-bold text-center text-gray-800 mb-4">Simple, Transparent Pricing</h1>
        <p class="text-xl text-center text-gray-600 mb-12">Choose the plan that works best for you</p>

        <div class="grid md:grid-cols-3 gap-8">
            <!-- Basic Plan -->
            <div class="bg-white p-8 rounded-lg shadow-md border border-gray-200">
                <h2 class="text-2xl font-semibold mb-4">Basic</h2>
                <div class="text-4xl font-bold mb-4">$29<span class="text-lg font-normal text-gray-600">/month</span></div>
                <p class="text-gray-600 mb-6">Perfect for small businesses just getting started</p>
                <ul class="space-y-3 mb-8">
                    <li class="flex items-center text-gray-600">
                        <svg class="w-5 h-5 text-[#4A5D4B] mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Up to 10 devices
                    </li>
                    <li class="flex items-center text-gray-600">
                        <svg class="w-5 h-5 text-[#4A5D4B] mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Real-time tracking
                    </li>
                    <li class="flex items-center text-gray-600">
                        <svg class="w-5 h-5 text-[#4A5D4B] mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Basic reporting
                    </li>
                </ul>
                <a href="{{ route('register') }}" class="block text-center bg-[#4A5D4B] text-white py-2 px-4 rounded hover:bg-[#3A4D3B] transition duration-300">Get Started</a>
            </div>

            <!-- Pro Plan -->
            <div class="bg-white p-8 rounded-lg shadow-md border-2 border-[#4A5D4B] transform scale-105">
                <div class="inline-block bg-[#4A5D4B] text-white px-3 py-1 rounded-full text-sm font-semibold mb-4">Most Popular</div>
                <h2 class="text-2xl font-semibold mb-4">Pro</h2>
                <div class="text-4xl font-bold mb-4">$79<span class="text-lg font-normal text-gray-600">/month</span></div>
                <p class="text-gray-600 mb-6">Ideal for growing businesses</p>
                <ul class="space-y-3 mb-8">
                    <li class="flex items-center text-gray-600">
                        <svg class="w-5 h-5 text-[#4A5D4B] mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Up to 50 devices
                    </li>
                    <li class="flex items-center text-gray-600">
                        <svg class="w-5 h-5 text-[#4A5D4B] mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Advanced analytics
                    </li>
                    <li class="flex items-center text-gray-600">
                        <svg class="w-5 h-5 text-[#4A5D4B] mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Priority support
                    </li>
                    <li class="flex items-center text-gray-600">
                        <svg class="w-5 h-5 text-[#4A5D4B] mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Custom alerts
                    </li>
                </ul>
                <a href="{{ route('register') }}" class="block text-center bg-[#4A5D4B] text-white py-2 px-4 rounded hover:bg-[#3A4D3B] transition duration-300">Get Started</a>
            </div>

            <!-- Enterprise Plan -->
            <div class="bg-white p-8 rounded-lg shadow-md border border-gray-200">
                <h2 class="text-2xl font-semibold mb-4">Enterprise</h2>
                <div class="text-4xl font-bold mb-4">Custom</div>
                <p class="text-gray-600 mb-6">For large organizations with specific needs</p>
                <ul class="space-y-3 mb-8">
                    <li class="flex items-center text-gray-600">
                        <svg class="w-5 h-5 text-[#4A5D4B] mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Unlimited devices
                    </li>
                    <li class="flex items-center text-gray-600">
                        <svg class="w-5 h-5 text-[#4A5D4B] mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Custom integration
                    </li>
                    <li class="flex items-center text-gray-600">
                        <svg class="w-5 h-5 text-[#4A5D4B] mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        24/7 support
                    </li>
                    <li class="flex items-center text-gray-600">
                        <svg class="w-5 h-5 text-[#4A5D4B] mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Dedicated account manager
                    </li>
                </ul>
                <a href="{{ route('register') }}" class="block text-center bg-[#4A5D4B] text-white py-2 px-4 rounded hover:bg-[#3A4D3B] transition duration-300">Contact Sales</a>
            </div>
        </div>
    </div>
</div>
@endsection
