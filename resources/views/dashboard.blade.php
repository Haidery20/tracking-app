@extends('layouts.dashboard')

@section('title', 'Dashboard - KONEKTA')

@section('content')
<div class="relative">
    <!-- Hero Section -->
    <nav class="fixed top-0 left-0 right-0 z-50 bg-white shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <div class="flex">
                    <div class="flex-shrink-0 flex items-center">
                        <a href="{{ route('dashboard') }}" class="flex items-center">
                            <img src="{{ asset('images/Asset7.svg') }}" alt="KONEKTA Logo" class="h-8 w-auto">
                        </a>
                    </div>
                </div>

                <div class="hidden sm:ml-6 sm:flex sm:space-x-8">
                    <a href="{{ route('dashboard') }}" class="inline-flex items-center px-1 pt-1 border-b-2 border-primary text-sm font-medium text-gray-900">
                        Dashboard
                    </a>
                    <a href="{{ route('devices.index') }}" class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700">
                        Devices
                    </a>
                    <a href="{{ route('profile.edit') }}" class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700">
                        Profile
                    </a>
                </div>

                <div class="flex items-center">
                    <div class="ml-3 relative">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-4">
                                <div class="flex items-center space-x-2">
                                    <img class="h-8 w-8 rounded-full" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}">
                                    <span class="text-sm font-medium text-gray-700">{{ Auth::user()->name }}</span>
                                </div>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="text-sm text-gray-700 hover:text-gray-900">
                                        <i class="fas fa-sign-out-alt"></i>
                                        Sign out
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="relative pt-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center gap-4">
                <div class="relative">
                    <div class="flex items-center">
                        <span class="inline-flex items-center justify-center px-3 py-1 text-xs font-medium text-white bg-primary rounded-full">
                            {{ Auth::user()->devices()->count() }}
                        </span>
                        <span class="ml-2 text-sm text-gray-600">Active Devices</span>
                    </div>
                </div>
            </div>
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

<script>
    // Profile dropdown menu
    let userMenuButton = document.getElementById('user-menu-button');
    let userMenu = userMenuButton.nextElementSibling;

    userMenuButton.addEventListener('click', function(e) {
        e.preventDefault();
        userMenu.classList.toggle('hidden');
        userMenuButton.setAttribute('aria-expanded', !userMenu.classList.contains('hidden'));
    });

    // Close dropdown when clicking outside
    document.addEventListener('click', function(e) {
        if (!userMenuButton.contains(e.target) && !userMenu.contains(e.target)) {
            userMenu.classList.add('hidden');
            userMenuButton.setAttribute('aria-expanded', false);
        }
    });

    // Close dropdown when pressing Escape
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            userMenu.classList.add('hidden');
            userMenuButton.setAttribute('aria-expanded', false);
        }
    });
</script>
@endsection
