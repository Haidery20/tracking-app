@extends('layouts.dashboard')

@section('title', 'Dashboard - KONEKTA')

@section('content')
<div class="relative">
    <!-- Hero Section -->
    <div class="relative overflow-hidden bg-gradient-to-r from-primary/20 to-white">
        <div class="absolute inset-0 bg-gradient-to-r from-primary/20 via-secondary/20 to-primary/20 transform -skew-y-6"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white rounded-2xl shadow-lg p-8">
                <!-- Header Section -->
                <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4 mb-8">
                    <div class="flex flex-col">
                        <div class="flex items-center gap-4 mb-4">
                            <a href="{{ route('dashboard') }}" class="flex items-center">
                                <img src="{{ asset('images/Asset7.svg') }}" alt="KONEKTA Logo" class="h-8 w-auto">
                            </a>
                        </div>
                        <h1 class="text-3xl font-bold text-gray-900">Welcome, {{ Auth::user()->name }}!</h1>
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
                                    <h3 class="text-sm font-medium text-gray-500">Total Devices</h3>
                                    <p class="text-3xl font-bold text-gray-900">{{ Auth::user()->devices()->count() }}</p>
                                </div>
                                <div class="bg-primary-light p-3 rounded-full">
                                    <i class="fas fa-laptop text-primary text-xl"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Active Devices -->
                    <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300">
                        <div class="p-6">
                            <div class="flex items-center justify-between mb-4">
                                <div>
                                    <h3 class="text-sm font-medium text-gray-500">Active Devices</h3>
                                    <p class="text-3xl font-bold text-gray-900">{{ Auth::user()->devices()->where('status', 'active')->count() }}</p>
                                </div>
                                <div class="bg-primary-light p-3 rounded-full">
                                    <i class="fas fa-check-circle text-primary text-xl"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Recent Activity -->
                    <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300">
                        <div class="p-6">
                            <div class="flex items-center justify-between mb-4">
                                <div>
                                    <h3 class="text-sm font-medium text-gray-500">Last Login</h3>
                                    <p class="text-3xl font-bold text-gray-900">{{ Auth::user()->last_login_at ? Auth::user()->last_login_at->diffForHumans() : 'Never' }}</p>
                                </div>
                                <div class="bg-primary-light p-3 rounded-full">
                                    <i class="fas fa-clock text-primary text-xl"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Quick Actions -->
                <div class="mt-8">
                    <h3 class="text-xl font-semibold text-gray-900 mb-6">Quick Actions</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                        <!-- Add Device -->
                        <a href="{{ route('devices.create') }}" class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300">
                            <div class="p-6">
                                <div class="bg-primary-light p-4 rounded-full mb-4">
                                    <i class="fas fa-plus text-primary text-xl"></i>
                                </div>
                                <h4 class="text-sm font-medium text-gray-900">Add Device</h4>
                            </div>
                        </a>

                        <!-- View Devices -->
                        <a href="{{ route('devices.index') }}" class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300">
                            <div class="p-6">
                                <div class="bg-primary-light p-4 rounded-full mb-4">
                                    <i class="fas fa-list text-primary text-xl"></i>
                                </div>
                                <h4 class="text-sm font-medium text-gray-900">View Devices</h4>
                            </div>
                        </a>

                        <!-- Profile Settings -->
                        <a href="{{ route('profile.edit') }}" class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300">
                            <div class="p-6">
                                <div class="bg-primary-light p-4 rounded-full mb-4">
                                    <i class="fas fa-user-cog text-primary text-xl"></i>
                                </div>
                                <h4 class="text-sm font-medium text-gray-900">Profile Settings</h4>
                            </div>
                        </a>

                        <!-- Support -->
                        <a href="{{ route('support') }}" class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300">
                            <div class="p-6">
                                <div class="bg-primary-light p-4 rounded-full mb-4">
                                    <i class="fas fa-life-ring text-primary text-xl"></i>
                                </div>
                                <h4 class="text-sm font-medium text-gray-900">Support</h4>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
