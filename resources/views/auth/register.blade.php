@extends('layouts.landing')

@section('title', 'Sign Up - KONEKTA')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-primary/5 to-secondary/5 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-2xl mx-auto">
        <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
            <div class="grid grid-cols-1 lg:grid-cols-2">
                <!-- Left side - Form -->
                <div class="p-8 lg:p-12">
                    <div class="text-center lg:text-left mb-8">
                        <h2 class="text-3xl font-bold text-gray-900">Create Your Account</h2>
                        <p class="mt-2 text-sm text-gray-600">Join KONEKTA and start tracking your projects today</p>
                    </div>

                    <form action="{{ route('register') }}" method="POST" class="space-y-6">
                        @csrf
                        
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
                            <div class="mt-1">
                                <input type="text" id="name" name="name" required 
                                    class="block w-full px-4 py-3 rounded-lg border border-gray-300 shadow-sm focus:ring-2 focus:ring-primary focus:border-primary transition duration-150">
                            </div>
                        </div>

                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                            <div class="mt-1">
                                <input type="email" id="email" name="email" required 
                                    class="block w-full px-4 py-3 rounded-lg border border-gray-300 shadow-sm focus:ring-2 focus:ring-primary focus:border-primary transition duration-150">
                            </div>
                        </div>

                        <div>
                            <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                            <div class="mt-1">
                                <input type="password" id="password" name="password" required 
                                    class="block w-full px-4 py-3 rounded-lg border border-gray-300 shadow-sm focus:ring-2 focus:ring-primary focus:border-primary transition duration-150">
                            </div>
                        </div>

                        <div>
                            <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm Password</label>
                            <div class="mt-1">
                                <input type="password" id="password_confirmation" name="password_confirmation" required 
                                    class="block w-full px-4 py-3 rounded-lg border border-gray-300 shadow-sm focus:ring-2 focus:ring-primary focus:border-primary transition duration-150">
                            </div>
                        </div>

                        @if ($errors->any())
                            <div class="rounded-lg bg-red-50 p-4">
                                <div class="flex">
                                    <div class="flex-shrink-0">
                                        <svg class="h-5 w-5 text-red-400" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <div class="ml-3">
                                        <h3 class="text-sm font-medium text-red-800">There were errors with your submission</h3>
                                        <div class="mt-2 text-sm text-red-700">
                                            <ul class="list-disc pl-5 space-y-1">
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif

                        <div class="flex items-center">
                            <input type="checkbox" id="terms" name="terms" required 
                                class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded">
                            <label for="terms" class="ml-2 block text-sm text-gray-700">
                                I agree to the 
                                <a href="#" class="font-medium text-primary hover:text-primary/80">Terms of Service</a> 
                                and 
                                <a href="#" class="font-medium text-primary hover:text-primary/80">Privacy Policy</a>
                            </label>
                        </div>

                        <div>
                            <div class="g-recaptcha" data-sitekey="{{ env('RECAPTCHA_SITEKEY') }}"></div>
                        </div>

                        <div>
                            <button type="submit" 
                                class="w-full flex justify-center py-3 px-4 border border-transparent rounded-lg shadow-sm text-sm font-medium text-white bg-primary hover:bg-primary/90 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary transition duration-150">
                                Create Account
                            </button>
                        </div>
                    </form>

                    <div class="mt-6 text-center">
                        <p class="text-sm text-gray-600">
                            Already have an account? 
                            <a href="{{ route('login') }}" class="font-medium text-primary hover:text-primary/80">Sign in</a>
                        </p>
                    </div>
                </div>

                <!-- Right side - Image/Info -->
                <div class="hidden lg:block bg-gradient-to-br from-primary to-secondary p-12">
                    <div class="h-full flex flex-col justify-center">
                        <div class="text-white">
                            <h3 class="text-2xl font-bold mb-4">Welcome to KONEKTA</h3>
                            <p class="text-white/90 mb-8">Join thousands of professionals who are already using KONEKTA to manage their projects efficiently.</p>
                            <ul class="space-y-4">
                                <li class="flex items-center">
                                    <svg class="h-5 w-5 text-white/90 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    Real-time project tracking
                                </li>
                                <li class="flex items-center">
                                    <svg class="h-5 w-5 text-white/90 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    Team collaboration tools
                                </li>
                                <li class="flex items-center">
                                    <svg class="h-5 w-5 text-white/90 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    Advanced analytics
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://www.google.com/recaptcha/api.js" async defer></script>
@endsection
