@extends('layouts.dashboard')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <!-- Page Views Card -->
        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600">Page Views</p>
                    <p class="text-2xl font-bold text-primary">{{ number_format($stats['page_views']) }}</p>
                </div>
                <div class="bg-primary-light rounded-full p-3">
                    <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                    </svg>
                </div>
            </div>
            <div class="mt-4">
                <div class="w-full bg-gray-200 rounded-full h-2.5">
                    <div class="bg-primary h-2.5 rounded-full" style="width: {{ $stats['usage_percentage']['page_views'] }}%"></div>
                </div>
                <div class="flex justify-between text-xs text-gray-500 mt-2">
                    <span>{{ number_format($stats['page_views']) }}</span>
                    <span>/ {{ number_format($stats['monthly_limit']['page_views']) }}</span>
                </div>
            </div>
        </div>

        <!-- API Calls Card -->
        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600">API Calls</p>
                    <p class="text-2xl font-bold text-primary">{{ number_format($stats['api_calls']) }}</p>
                </div>
                <div class="bg-primary-light rounded-full p-3">
                    <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                </div>
            </div>
            <div class="mt-4">
                <div class="w-full bg-gray-200 rounded-full h-2.5">
                    <div class="bg-primary h-2.5 rounded-full" style="width: {{ $stats['usage_percentage']['api_calls'] }}%"></div>
                </div>
                <div class="flex justify-between text-xs text-gray-500 mt-2">
                    <span>{{ number_format($stats['api_calls']) }}</span>
                    <span>/ {{ number_format($stats['monthly_limit']['api_calls']) }}</span>
                </div>
            </div>
        </div>

        <!-- Storage Usage Card -->
        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600">Storage Usage</p>
                    <p class="text-2xl font-bold text-primary">{{ number_format($stats['storage_usage'] / 1024 / 1024, 2) }} MB</p>
                </div>
                <div class="bg-primary-light rounded-full p-3">
                    <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                    </svg>
                </div>
            </div>
            <div class="mt-4">
                <div class="w-full bg-gray-200 rounded-full h-2.5">
                    <div class="bg-primary h-2.5 rounded-full" style="width: {{ $stats['usage_percentage']['storage'] }}%"></div>
                </div>
                <div class="flex justify-between text-xs text-gray-500 mt-2">
                    <span>{{ number_format($stats['storage_usage'] / 1024 / 1024, 2) }} MB</span>
                    <span>/ {{ number_format($stats['monthly_limit']['storage'] / 1024 / 1024, 2) }} MB</span>
                </div>
            </div>
        </div>

        <!-- Bandwidth Usage Card -->
        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600">Bandwidth</p>
                    <p class="text-2xl font-bold text-primary">{{ number_format($stats['bandwidth_usage'] / 1024 / 1024, 2) }} MB</p>
                </div>
                <div class="bg-primary-light rounded-full p-3">
                    <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707m12.728 0l-.707-.707"/>
                    </svg>
                </div>
            </div>
            <div class="mt-4">
                <div class="w-full bg-gray-200 rounded-full h-2.5">
                    <div class="bg-primary h-2.5 rounded-full" style="width: {{ $stats['usage_percentage']['bandwidth'] }}%"></div>
                </div>
                <div class="flex justify-between text-xs text-gray-500 mt-2">
                    <span>{{ number_format($stats['bandwidth_usage'] / 1024 / 1024, 2) }} MB</span>
                    <span>/ {{ number_format($stats['monthly_limit']['bandwidth'] / 1024 / 1024, 2) }} MB</span>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white rounded-lg shadow p-6">
        <h2 class="text-xl font-bold mb-4">Usage Details</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <h3 class="text-lg font-semibold mb-2">Last Updated</h3>
                <p class="text-gray-600">{{ $stats['last_updated']->format('F j, Y, g:i a') }}</p>
            </div>
            <div>
                <h3 class="text-lg font-semibold mb-2">Monthly Limits</h3>
                <ul class="space-y-2">
                    <li class="flex justify-between">
                        <span>Page Views</span>
                        <span>{{ number_format($stats['monthly_limit']['page_views']) }}</span>
                    </li>
                    <li class="flex justify-between">
                        <span>API Calls</span>
                        <span>{{ number_format($stats['monthly_limit']['api_calls']) }}</span>
                    </li>
                    <li class="flex justify-between">
                        <span>Storage</span>
                        <span>{{ number_format($stats['monthly_limit']['storage'] / 1024 / 1024, 2) }} MB</span>
                    </li>
                    <li class="flex justify-between">
                        <span>Bandwidth</span>
                        <span>{{ number_format($stats['monthly_limit']['bandwidth'] / 1024 / 1024, 2) }} MB</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
