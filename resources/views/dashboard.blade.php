@extends('layouts.app')

@section('title', 'Dashboard - Tracking App')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="bg-white rounded-2xl shadow-lg p-8">
        <div class="flex justify-between items-center mb-8">
            <h1 class="text-3xl font-bold text-gray-800">Welcome, {{ Auth::user()->name }}!</h1>
            <form method="POST" action="{{ route('logout') }}" class="inline">
                @csrf
                <button type="submit" class="btn btn-danger">Logout</button>
            </form>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Quick Stats -->
            <div class="bg-blue-50 rounded-2xl p-8 hover:shadow-lg transition-all duration-300">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-lg font-semibold text-blue-800">Your Devices</h3>
                    <i class="fas fa-mobile-alt text-2xl text-blue-500"></i>
                </div>
                <p class="text-4xl font-bold text-blue-600">{{ Auth::user()->devices()->count() }}</p>
                <p class="text-sm text-blue-500 mt-2">Active Devices</p>
            </div>

            <div class="bg-green-50 rounded-2xl p-8 hover:shadow-lg transition-all duration-300">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-lg font-semibold text-green-800">Geofences</h3>
                    <i class="fas fa-map-marker-alt text-2xl text-green-500"></i>
                </div>
                <p class="text-4xl font-bold text-green-600">{{ Auth::user()->geofences()->count() }}</p>
                <p class="text-sm text-green-500 mt-2">Active Geofences</p>
            </div>

            <div class="bg-purple-50 rounded-2xl p-8 hover:shadow-lg transition-all duration-300">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-lg font-semibold text-purple-800">Alert Settings</h3>
                    <i class="fas fa-bell text-2xl text-purple-500"></i>
                </div>
                <p class="text-4xl font-bold text-purple-600">{{ Auth::user()->alertSettings()->count() }}</p>
                <p class="text-sm text-purple-500 mt-2">Configured Alerts</p>
            </div>
        </div>

        <!-- Recent Activity -->
        <div class="mt-12">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">Recent Activity</h2>
            <div class="bg-gray-50 rounded-2xl p-8">
                <div class="space-y-6">
                    <div class="flex items-center">
                        <div class="bg-blue-100 rounded-full w-12 h-12 flex items-center justify-center">
                            <i class="fas fa-mobile-alt text-blue-500"></i>
                        </div>
                        <div class="ml-4">
                            <p class="text-gray-600">Device 123456 connected</p>
                            <p class="text-sm text-gray-400">2 minutes ago</p>
                        </div>
                    </div>
                    
                    <div class="flex items-center">
                        <div class="bg-green-100 rounded-full w-12 h-12 flex items-center justify-center">
                            <i class="fas fa-map-marker-alt text-green-500"></i>
                        </div>
                        <div class="ml-4">
                            <p class="text-gray-600">Entered geofence 'Home'</p>
                            <p class="text-sm text-gray-400">15 minutes ago</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
