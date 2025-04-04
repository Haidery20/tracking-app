@extends('layouts.app')

@section('title', 'Dashboard - Tracking App')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="bg-white rounded-lg shadow-lg p-6">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-gray-800">Welcome, {{ Auth::user()->name }}!</h1>
            <form method="POST" action="{{ route('logout') }}" class="inline">
                @csrf
                <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded">
                    Logout
                </button>
            </form>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Quick Stats -->
            <div class="bg-blue-50 rounded-lg p-6">
                <h3 class="text-lg font-semibold text-blue-800 mb-2">Your Devices</h3>
                <p class="text-3xl font-bold text-blue-600">{{ Auth::user()->devices()->count() }}</p>
                <p class="text-sm text-blue-500 mt-1">Active Devices</p>
            </div>

            <div class="bg-green-50 rounded-lg p-6">
                <h3 class="text-lg font-semibold text-green-800 mb-2">Geofences</h3>
                <p class="text-3xl font-bold text-green-600">{{ Auth::user()->geofences()->count() }}</p>
                <p class="text-sm text-green-500 mt-1">Active Geofences</p>
            </div>

            <div class="bg-purple-50 rounded-lg p-6">
                <h3 class="text-lg font-semibold text-purple-800 mb-2">Alert Settings</h3>
                <p class="text-3xl font-bold text-purple-600">{{ Auth::user()->alertSettings()->count() }}</p>
                <p class="text-sm text-purple-500 mt-1">Configured Alerts</p>
            </div>
        </div>

        <!-- Recent Activity -->
        <div class="mt-8">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Recent Activity</h2>
            <div class="bg-gray-50 rounded-lg p-6">
                <p class="text-gray-600">Your recent activity will appear here.</p>
            </div>
        </div>
    </div>
</div>
@endsection
