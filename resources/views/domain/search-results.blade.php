@extends('layouts.landing')

@section('content')
<div class="max-w-4xl mx-auto px-4 py-12">
    <div class="bg-white rounded-xl shadow-lg p-8">
        <div class="flex items-center justify-between mb-8">
            <h2 class="text-2xl font-semibold text-gray-900">Domain Search Results</h2>
            <a href="{{ route('landing') }}" class="text-blue-600 hover:text-blue-800">Search Again</a>
        </div>

        <div class="space-y-6">
            <div class="border-b pb-4">
                <h3 class="text-xl font-semibold text-gray-900">{{ $domain }}{{ request()->query('extension', '.com') }}</h3>
                <p class="mt-2 text-gray-600">Domain availability check is coming soon!</p>
            </div>

            <div class="flex justify-between items-center">
                <div>
                    <p class="text-lg font-semibold text-gray-900">Starting at</p>
                    <p class="text-2xl font-bold text-primary">$9.99/year</p>
                </div>
                <a href="{{ route('register') }}" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-primary hover:bg-primary-dark">
                    Register Domain
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
