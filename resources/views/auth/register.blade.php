@extends('layouts.app')

@section('title', 'Sign Up - Tracking App')

@section('content')
<div class="max-w-md mx-auto px-4 py-12">
    <div class="bg-white p-8 rounded-lg shadow-md">
        <h1 class="text-2xl font-bold text-center text-gray-800 mb-8">Create Your Account</h1>
        
        <form action="{{ route('register') }}" method="POST">
            @csrf
            
            <div class="mb-6">
                <label for="name" class="block text-gray-700 text-sm font-medium mb-2">Full Name</label>
                <input type="text" id="name" name="name" required 
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div class="mb-6">
                <label for="email" class="block text-gray-700 text-sm font-medium mb-2">Email Address</label>
                <input type="email" id="email" name="email" required 
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div class="mb-6">
                <label for="password" class="block text-gray-700 text-sm font-medium mb-2">Password</label>
                <input type="password" id="password" name="password" required 
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div class="mb-6">
                <label for="password_confirmation" class="block text-gray-700 text-sm font-medium mb-2">Confirm Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" required 
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            @if ($errors->any())
                <div class="mb-4">
                    <div class="p-4 bg-red-100 text-red-700 rounded-md">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif

            <div class="mb-6">
                <div class="flex items-center">
                    <input type="checkbox" id="terms" name="terms" required class="h-4 w-4 text-blue-500">
                    <label for="terms" class="ml-2 text-sm text-gray-600">
                        I agree to the 
                        <a href="#" class="text-blue-500 hover:underline">Terms of Service</a> 
                        and 
                        <a href="#" class="text-blue-500 hover:underline">Privacy Policy</a>
                    </label>
                </div>
            </div>

            <div class="mb-6">
                <div class="g-recaptcha" data-sitekey="{{ config('no-captcha.sitekey') }}"></div>
            </div>

            <button type="submit" 
                class="w-full bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 transition duration-300">
                Create Account
            </button>
        </form>

        <div class="mt-6 text-center">
            <p class="text-sm text-gray-600">
                Already have an account? 
                <a href="{{ route('login') }}" class="text-blue-500 hover:underline">Log in</a>
            </p>
        </div>
    </div>
</div>

<script src="https://www.google.com/recaptcha/api.js" async defer></script>
@endsection
