@extends('layouts.app')

@section('title', 'Dashboard - KONEKTA')

@section('content')
<div class="relative">
    
    <!-- Hero Section -->
   <div class="relative overflow-hidden bg-gradient-to-r from-[#0fa6d5] to-white">
        <div class="absolute inset-0 bg-gradient-to-r from-primary/20 via-secondary/20 to-primary/20 transform -skew-y-6"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white rounded-2xl shadow-lg p-8">
        <!-- Header Section -->
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4 mb-8 pt-8">
            <div class="flex flex-col">
                <div class="flex items-center gap-4 mb-4">
                    <a href="{{ route('dashboard') }}" class="flex items-center">
                        <span class="text-2xl font-bold text-primary">KONEKTA</span>
                    </a>
                </div>
                <h1 class="text-3xl font-bold text-gray-800">Welcome, {{ Auth::user()->name }}!</h1>
                <div class="flex items-center gap-4 mt-2">
                    @if(Auth::user()->roles()->exists())
                        <span class="inline-flex items-center px-3 py-1 text-xs font-medium text-white bg-primary rounded-full">
                            {{ Auth::user()->roles()->first()->name }}
                        </span>
                    @endif
                    <span class="text-sm text-gray-600">{{ now()->format('l, F j, Y') }}</span>
                </div>
            </div>
            <div class="flex items-center gap-4">
                <div class="relative">
                    <div class="flex items-center">
                        <span class="inline-flex items-center justify-center px-3 py-1 text-xs font-medium text-white bg-primary rounded-full">
                            {{ Auth::user()->devices()->count() }}
                        </span>
                        <span class="ml-2 text-sm text-gray-600">Active Devices</span>
                    </div>
                </div>
                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf
                    <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                        <i class="fas fa-sign-out-alt mr-2"></i>
                        Logout
                    </button>
                </form>
            </div>
        </div>

        <!-- Stats Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-8">
            <!-- Devices Card -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300">
                <div class="p-6">
                    <div class="flex items-center justify-between mb-4">
                        <div>
                            <h3 class="text-lg font-semibold text-gray-800">Your Devices</h3>
                            <p class="text-sm text-gray-500">Total active devices</p>
                        </div>
                        <div class="p-3 primary-bg-transparent rounded-full">
                            <i class="fas fa-mobile-alt text-2xl primary-text"></i>
                        </div>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="text-3xl font-bold primary-text">{{ Auth::user()->devices()->count() }}</div>
                        <div class="text-sm text-gray-500">
                            <i class="fas fa-arrow-up text-green-500"></i>
                            12% increase
                        </div>
                    </div>
                </div>
            </div>

            <!-- Geofences Card -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300">
                <div class="p-6">
                    <div class="flex items-center justify-between mb-4">
                        <div>
                            <h3 class="text-lg font-semibold text-gray-800">Geofences</h3>
                            <p class="text-sm text-gray-500">Active geofence zones</p>
                        </div>
                        <div class="p-3 bg-green-100 rounded-full">
                            <i class="fas fa-map-marker-alt text-2xl text-green-500"></i>
                        </div>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="text-3xl font-bold text-green-600">{{ Auth::user()->geofences()->count() }}</div>
                        <div class="text-sm text-gray-500">
                            <i class="fas fa-arrow-down text-red-500"></i>
                            5% decrease
                        </div>
                    </div>
                </div>
            </div>

            <!-- Alerts Card -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300">
                <div class="p-6">
                    <div class="flex items-center justify-between mb-4">
                        <div>
                            <h3 class="text-lg font-semibold text-gray-800">Alert Settings</h3>
                            <p class="text-sm text-gray-500">Configured alerts</p>
                        </div>
                        <div class="p-3 bg-purple-100 rounded-full">
                            <i class="fas fa-bell text-2xl text-purple-500"></i>
                        </div>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="text-3xl font-bold text-purple-600">{{ Auth::user()->alertSettings()->count() }}</div>
                        <div class="text-sm text-gray-500">
                            <i class="fas fa-arrow-up text-green-500"></i>
                            8% increase
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="mt-8">
            <h3 class="text-xl font-semibold text-gray-800 mb-6">Quick Actions</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                <!-- Add Device -->
                <a href="{{ route('devices.create') }}" class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300">
                    <div class="p-6 flex flex-col items-center justify-center">
                        <div class="p-4 primary-bg-transparent rounded-full mb-4">
                            <i class="fas fa-plus-circle text-3xl primary-text"></i>
                        </div>
                        <h4 class="text-lg font-medium text-gray-800">Add Device</h4>
                        <p class="text-sm text-gray-500 mt-1">Add a new tracking device</p>
                    </div>
                </a>

                <!-- View Devices -->
                <a href="{{ route('devices.index') }}" class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300">
                    <div class="p-6 flex flex-col items-center justify-center">
                        <div class="p-4 bg-green-100 rounded-full mb-4">
                            <i class="fas fa-eye text-3xl text-green-500"></i>
                        </div>
                        <h4 class="text-lg font-medium text-gray-800">View Devices</h4>
                        <p class="text-sm text-gray-500 mt-1">Manage your devices</p>
                    </div>
                </a>

                <!-- Settings -->
                <a href="#" class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300">
                    <div class="p-6 flex flex-col items-center justify-center">
                        <div class="p-4 bg-yellow-100 rounded-full mb-4">
                            <i class="fas fa-cog text-3xl text-yellow-500"></i>
                        </div>
                        <h4 class="text-lg font-medium text-gray-800">Settings</h4>
                        <p class="text-sm text-gray-500 mt-1">Configure preferences</p>
                    </div>
                </a>

                <!-- Help -->
                <a href="#" class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300">
                    <div class="p-6 flex flex-col items-center justify-center">
                        <div class="p-4 primary-bg-transparent rounded-full mb-4">
                            <i class="fas fa-question-circle text-3xl primary-text"></i>
                        </div>
                        <h4 class="text-lg font-medium text-gray-800">Help</h4>
                        <p class="text-sm text-gray-500 mt-1">Get support</p>
                    </div>
                </a>
            </div>
        </div>
            </div>
        </div>
            <!-- Footer -->
        <footer class="bg-gradient-to-r from-[#0fa6d5] to-white text-black py-12">
            <div class="container mx-auto px-4">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                    <div>
                        <h3 class="text-2xl font-bold mb-4">KONEKTA</h3>
                        <p class="text-gray-600 mb-4">
                            Your trusted tracking solution partner
                        </p>
                        <p class="text-gray-600">
                            <i class="fas fa-map-marker-alt mr-2"></i>
                            123 Tracking Street, Location City
                        </p>
                        <p class="text-gray-600">
                            <i class="fas fa-phone mr-2"></i>
                            +1 234 567 8900
                        </p>
                        <p class="text-gray-600">
                            <i class="fas fa-envelope mr-2"></i>
                            info@konekta.com
                        </p>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold mb-4">Quick Links</h3>
                        <ul class="space-y-2">
                            <li><a href="{{ route('dashboard') }}" class="text-gray-600 hover:text-[#0fa6d5]">Dashboard</a></li>
                            <li><a href="{{ route('devices.index') }}" class="text-gray-600 hover:text-[#0fa6d5]">Devices</a></li>
                            <li><a href="{{ route('profile.show') }}" class="text-gray-600 hover:text-[#0fa6d5]">Profile</a></li>
                            <li><a href="{{ route('about') }}" class="text-gray-600 hover:text-[#0fa6d5]">About Us</a></li>
                            <li><a href="{{ route('contact') }}" class="text-gray-600 hover:text-[#0fa6d5]">Contact</a></li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold mb-4">Support</h3>
                        <ul class="space-y-2">
                            <li><a href="{{ route('contact') }}" class="text-gray-600 hover:text-[#0fa6d5]">Contact Support</a></li>
                            <li><a href="{{ route('about') }}" class="text-gray-600 hover:text-[#0fa6d5]">About Us</a></li>
                            <li><a href="{{ route('contact') }}" class="text-gray-600 hover:text-[#0fa6d5]">FAQ</a></li>
                            <li><a href="{{ route('contact') }}" class="text-gray-600 hover:text-[#0fa6d5]">Privacy Policy</a></li>
                            <li><a href="{{ route('contact') }}" class="text-gray-600 hover:text-[#0fa6d5]">Terms of Service</a></li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold mb-4">Follow Us</h3>
                        <div class="flex space-x-6 mb-4">
                            <a href="#" class="text-gray-600 hover:text-[#0fa6d5]">
                                <i class="fab fa-facebook-f text-2xl"></i>
                            </a>
                            <a href="#" class="text-gray-600 hover:text-[#0fa6d5]">
                                <i class="fab fa-twitter text-2xl"></i>
                            </a>
                            <a href="#" class="text-gray-600 hover:text-[#0fa6d5]">
                                <i class="fab fa-linkedin-in text-2xl"></i>
                            </a>
                            <a href="#" class="text-gray-600 hover:text-[#0fa6d5]">
                                <i class="fab fa-instagram text-2xl"></i>
                            </a>
                        </div>
                        <div class="flex space-x-4">
                            <a href="#" class="text-gray-600 hover:text-[#0fa6d5]">
                                <i class="fab fa-apple text-2xl"></i>
                            </a>
                            <a href="#" class="text-gray-600 hover:text-[#0fa6d5]">
                                <i class="fab fa-google-play text-2xl"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="mt-12 border-t border-gray-200 pt-8 text-center">
                    <p class="text-gray-600">
                        &copy; {{ date('Y') }} KONEKTA. All rights reserved.
                    </p>
                </div>
            </div>
        </footer>
    </div>
</div>
@endsection
