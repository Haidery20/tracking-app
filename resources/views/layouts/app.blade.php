<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Tracking Web App')</title>
    
    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">
    <meta name="theme-color" content="#4A5D4B">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    @stack('styles')
</head>
<body class="bg-gray-100">
    <div class="header-container fixed w-full top-0 z-50 px-4">
        <nav class="bg-gray-800 bg-opacity-95 text-white shadow-lg rounded-b-[2.5rem] backdrop-blur-sm">
            <div class="max-w-6xl mx-auto px-6 relative">
                <div class="flex justify-between">
                    <div class="flex space-x-7">
                        <div>
                            <a href="/" class="flex items-center py-5">
                                <span class="font-semibold text-white text-lg">Tracking App</span>
                            </a>
                        </div>
                        <div class="hidden md:flex items-center space-x-1">
                            @auth
                                <a href="{{ route('dashboard') }}" class="py-5 px-3 text-gray-300 hover:text-white transition duration-300">Dashboard</a>
                                <a href="#" class="py-5 px-3 text-gray-300 hover:text-white transition duration-300">My Devices</a>
                                <a href="#" class="py-5 px-3 text-gray-300 hover:text-white transition duration-300">Geofences</a>
                                <a href="#" class="py-5 px-3 text-gray-300 hover:text-white transition duration-300">Alerts</a>
                            @else
                                <a href="{{ route('features') }}" class="py-5 px-3 text-gray-300 hover:text-white transition duration-300">Features</a>
                                <a href="{{ route('pricing') }}" class="py-5 px-3 text-gray-300 hover:text-white transition duration-300">Pricing</a>
                                <a href="{{ route('about') }}" class="py-5 px-3 text-gray-300 hover:text-white transition duration-300">About</a>
                            @endauth
                        </div>
                    </div>
                    <div class="hidden md:flex items-center space-x-3">
                        @auth
                            <span class="text-gray-300">{{ Auth::user()->name }}</span>
                            <form method="POST" action="{{ route('logout') }}" class="inline">
                                @csrf
                                <button type="submit" class="btn btn-danger btn-sm">Logout</button>
                            </form>
                        @else
                            <a href="{{ route('login') }}" class="btn btn-sm text-gray-300 hover:text-white">Login</a>
                            <a href="{{ route('register') }}" class="btn btn-primary btn-sm">Sign Up</a>
                        @endauth
                    </div>
                </div>
            </div>
        </nav>
    </div>

    <!-- Spacer to prevent content from going under fixed header -->
    <div class="h-20"></div>

    <main class="pt-4">
        @yield('content')
    </main>

    <footer class="bg-gray-800 bg-opacity-95 text-gray-300 relative z-10">
        <div class="max-w-6xl mx-auto px-4 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Company Info -->
                <div>
                    <h3 class="text-lg font-semibold mb-4">Tracking App</h3>
                    <p class="text-gray-400 mb-4">Your trusted partner in real-time asset tracking and fleet management solutions.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white transition duration-300 rounded-full hover:bg-gray-700 p-2">
                            <i class="fab fa-facebook"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition duration-300 rounded-full hover:bg-gray-700 p-2">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition duration-300 rounded-full hover:bg-gray-700 p-2">
                            <i class="fab fa-linkedin"></i>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h3 class="text-lg font-semibold mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="{{ route('features') }}" class="text-gray-400 hover:text-white transition duration-300">Features</a></li>
                        <li><a href="{{ route('pricing') }}" class="text-gray-400 hover:text-white transition duration-300">Pricing</a></li>
                        <li><a href="{{ route('about') }}" class="text-gray-400 hover:text-white transition duration-300">About Us</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Contact</a></li>
                    </ul>
                </div>

                <!-- Resources -->
                <div>
                    <h3 class="text-lg font-semibold mb-4">Resources</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Documentation</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">API Reference</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Blog</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Support Center</a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div>
                    <h3 class="text-lg font-semibold mb-4">Contact Us</h3>
                    <ul class="space-y-2">
                        <li class="flex items-center text-gray-400">
                            <i class="fas fa-envelope mr-2"></i>
                            support@trackingapp.com
                        </li>
                        <li class="flex items-center text-gray-400">
                            <i class="fas fa-phone mr-2"></i>
                            <a href="tel:+255735431733" class="hover:text-white transition duration-300">+255 735 431 733</a>
                        </li>
                        <li class="flex items-center text-gray-400">
                            <i class="fas fa-map-marker-alt mr-2"></i>
                            123 Dar es salaam, Tanzania
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Bottom Footer -->
            <div class="border-t border-gray-700 mt-8 pt-8">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <div class="text-gray-400 mb-4 md:mb-0">
                        &copy; {{ date('Y') }} Tracking App. All rights reserved.
                    </div>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white transition duration-300">Privacy Policy</a>
                        <a href="#" class="text-gray-400 hover:text-white transition duration-300">Terms of Service</a>
                        <a href="#" class="text-gray-400 hover:text-white transition duration-300">Cookie Policy</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    @stack('scripts')
</body>
</html>
