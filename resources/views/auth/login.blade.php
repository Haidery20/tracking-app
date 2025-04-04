@extends('layouts.app')

@section('title', 'Login - Tracking App')

@section('content')
<div class="max-w-md mx-auto px-4 py-12">
    <div class="bg-white p-8 rounded-lg shadow-md">
        <h1 class="text-2xl font-bold text-center text-gray-800 mb-8">Login to Your Account</h1>
        
        <!-- Social Login -->
        <div class="space-y-4 mb-8">
            <a href="#" class="flex items-center justify-center w-full px-4 py-2 border border-gray-300 rounded-md hover:bg-gray-50 transition duration-300">
                <img src="https://www.google.com/favicon.ico" alt="Google" class="w-5 h-5 mr-3">
                <span class="text-gray-700">Continue with Google</span>
            </a>
            <a href="#" class="flex items-center justify-center w-full px-4 py-2 border border-gray-300 rounded-md hover:bg-gray-50 transition duration-300">
                <img src="https://www.apple.com/favicon.ico" alt="iCloud" class="w-5 h-5 mr-3">
                <span class="text-gray-700">Continue with iCloud</span>
            </a>
        </div>

        <!-- Divider -->
        <div class="relative my-6">
            <div class="absolute inset-0 flex items-center">
                <div class="w-full border-t border-gray-300"></div>
            </div>
            <div class="relative flex justify-center text-sm">
                <span class="px-2 bg-white text-gray-500">Or continue with</span>
            </div>
        </div>
        
        <form action="{{ route('login') }}" method="POST">
            @csrf
            
            <div class="mb-6">
                <label for="email" class="block text-gray-700 text-sm font-medium mb-2">Email Address</label>
                <input type="email" id="email" name="email" required 
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#4A5D4B] @error('email') border-red-500 @enderror"
                    value="{{ old('email') }}">
                @error('email')
                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="password" class="block text-gray-700 text-sm font-medium mb-2">Password</label>
                <input type="password" id="password" name="password" required 
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#4A5D4B] @error('password') border-red-500 @enderror">
                @error('password')
                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex items-center justify-between mb-6">
                <div class="flex items-center">
                    <input type="checkbox" id="remember" name="remember" class="h-4 w-4 text-[#4A5D4B]">
                    <label for="remember" class="ml-2 text-sm text-gray-600">Remember me</label>
                </div>
                <a href="#" class="text-sm text-[#4A5D4B] hover:underline">Forgot password?</a>
            </div>

            <button type="submit" 
                class="w-full bg-[#4A5D4B] text-white py-2 px-4 rounded-md hover:bg-[#3A4D3B] transition duration-300">
                Log In
            </button>
        </form>

        <div class="mt-6 text-center">
            <p class="text-sm text-gray-600">
                Don't have an account? 
                <a href="{{ route('register') }}" class="text-[#4A5D4B] hover:underline">Sign up</a>
            </p>
        </div>
    </div>
</div>
@endsection
