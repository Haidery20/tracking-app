<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'KONEKTA') }}</title>

    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">
    <link rel="alternate icon" type="image/png" href="{{ asset('favicon.png') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- AI Assistant Styles -->
    <style>
        .ai-assistant {
            position: fixed;
            bottom: 2rem;
            right: 2rem;
            z-index: 50;
        }
        
        .ai-button {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: linear-gradient(135deg, #1a365d, #4a5d23);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }
        
        .ai-button:hover {
            transform: scale(1.1);
            box-shadow: 0 6px 8px rgba(0, 0, 0, 0.15);
        }
        
        .ai-chat {
            position: fixed;
            bottom: 5rem;
            right: 2rem;
            width: 350px;
            height: 500px;
            background: white;
            border-radius: 1rem;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            display: none;
            flex-direction: column;
            overflow: hidden;
        }
        
        .ai-chat.active {
            display: flex;
        }
        
        .ai-chat-header {
            padding: 1rem;
            background: linear-gradient(135deg, #1a365d, #4a5d23);
            color: white;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        
        .ai-chat-body {
            flex: 1;
            padding: 1rem;
            overflow-y: auto;
        }
        
        .ai-chat-input {
            padding: 1rem;
            border-top: 1px solid #e5e7eb;
            display: flex;
            gap: 0.5rem;
        }
        
        .ai-chat-input input {
            flex: 1;
            padding: 0.5rem;
            border: 1px solid #e5e7eb;
            border-radius: 0.5rem;
            outline: none;
        }
        
        .ai-chat-input button {
            padding: 0.5rem 1rem;
            background: #4a5d23;
            color: white;
            border: none;
            border-radius: 0.5rem;
            cursor: pointer;
        }
        
        .ai-message {
            margin-bottom: 1rem;
            padding: 0.5rem 1rem;
            border-radius: 0.5rem;
            max-width: 80%;
        }
        
        .ai-message.user {
            background: #f3f4f6;
            margin-left: auto;
        }
        
        .ai-message.assistant {
            background: #e5e7eb;
            margin-right: auto;
        }

        /* Navigation Styles */
        .nav-gradient {
            background: linear-gradient(135deg, #1a365d, #4a5d23);
        }
        
        .nav-link {
            color: white;
            transition: all 0.3s ease;
        }
        
        .nav-link:hover {
            color: #a5b4fc;
        }
        
        .nav-button {
            background: white;
            color: #1a365d;
            transition: all 0.3s ease;
        }
        
        .nav-button:hover {
            background: #f3f4f6;
        }
    </style>

    <!-- Theme Styles -->
    <style>
        :root {
            --primary-color: #1a365d;
            --secondary-color: #4a5d23;
            --text-color: #1f2937;
            --bg-color: #ffffff;
            --surface-color: #f3f4f6;
            --border-color: #e5e7eb;
            --card-bg: #ffffff;
            --card-border: #e5e7eb;
            --input-bg: #ffffff;
            --input-border: #e5e7eb;
            --footer-bg: #1a365d;
            --footer-text: #f3f4f6;
        }

        .dark {
            --primary-color: #3b82f6;
            --secondary-color: #10b981;
            --text-color: #f3f4f6;
            --bg-color: #111827;
            --surface-color: #1f2937;
            --border-color: #374151;
            --card-bg: #1f2937;
            --card-border: #374151;
            --input-bg: #1f2937;
            --input-border: #374151;
            --footer-bg: #0f172a;
            --footer-text: #f3f4f6;
        }

        body {
            color: var(--text-color);
            background-color: var(--bg-color);
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .nav-gradient {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
        }

        .ai-button {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
        }

        .ai-chat {
            background: var(--surface-color);
            border: 1px solid var(--border-color);
        }

        .ai-message.user {
            background: var(--primary-color);
            color: white;
        }

        .ai-message.assistant {
            background: var(--surface-color);
            color: var(--text-color);
        }

        .ai-chat-input input {
            background: var(--input-bg);
            color: var(--text-color);
            border: 1px solid var(--input-border);
        }

        .ai-chat-input button {
            background: var(--primary-color);
            color: white;
        }

        /* Card Styles */
        .card {
            background-color: var(--card-bg);
            border: 1px solid var(--card-border);
            color: var(--text-color);
        }

        /* Footer Styles */
        footer {
            background: var(--footer-bg);
            color: var(--footer-text);
        }

        /* Input Styles */
        input, textarea, select {
            background-color: var(--input-bg);
            color: var(--text-color);
            border-color: var(--input-border);
        }

        /* Theme Toggle Styles */
        .theme-toggle {
            position: relative;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .theme-toggle:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }

        .theme-toggle svg {
            width: 20px;
            height: 20px;
            transition: all 0.3s ease;
        }

        .theme-toggle .sun {
            display: none;
        }

        .theme-toggle .moon {
            display: block;
        }

        .dark .theme-toggle .sun {
            display: block;
        }

        .dark .theme-toggle .moon {
            display: none;
        }

        /* Dark Mode Specific Styles */
        .dark .bg-white {
            background-color: var(--surface-color);
        }

        .dark .text-gray-800 {
            color: var(--text-color);
        }

        .dark .border-gray-200 {
            border-color: var(--border-color);
        }

        .dark .hover\:bg-gray-50:hover {
            background-color: var(--surface-color);
        }

        .dark .hover\:text-gray-900:hover {
            color: var(--text-color);
        }
    </style>
</head>
<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        <!-- Navigation -->
        <nav class="fixed top-4 left-1/2 transform -translate-x-1/2 z-50 bg-gradient-to-r from-[#1a365d] to-[#4a5d23] shadow-2xl rounded-full w-[95%] max-w-7xl">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16">
                    <div class="flex items-center">
                        <a href="/" class="text-2xl font-bold text-white">KONEKTA</a>
                    </div>
                    
                    <!-- Desktop Menu -->
                    <div class="hidden sm:flex sm:items-center sm:space-x-8">
                        <a href="{{ route('features') }}" class="text-gray-200 hover:text-white px-3 py-2 rounded-md text-sm font-medium transition-colors duration-300">Features</a>
                        <a href="{{ route('pricing') }}" class="text-gray-200 hover:text-white px-3 py-2 rounded-md text-sm font-medium transition-colors duration-300">Pricing</a>
                        <a href="{{ route('about') }}" class="text-gray-200 hover:text-white px-3 py-2 rounded-md text-sm font-medium transition-colors duration-300">About</a>
                        <a href="{{ route('contact') }}" class="text-gray-200 hover:text-white px-3 py-2 rounded-md text-sm font-medium transition-colors duration-300">Contact</a>
                        <a href="{{ route('community') }}" class="text-gray-200 hover:text-white px-3 py-2 rounded-md text-sm font-medium transition-colors duration-300">Community</a>
                    </div>

                    <!-- Desktop Auth Buttons -->
                    <div class="hidden sm:flex sm:items-center sm:space-x-4">
                        <!-- Theme Toggle -->
                        <button id="themeToggle" class="theme-toggle text-gray-200">
                            <svg class="sun" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                            </svg>
                            <svg class="moon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                            </svg>
                        </button>
                        <a href="{{ route('login') }}" class="text-gray-200 hover:text-white px-3 py-2 rounded-md text-sm font-medium transition-colors duration-300">
                            Sign in
                        </a>
                        <a href="{{ route('register') }}" class="bg-white hover:bg-gray-100 text-primary px-4 py-2 rounded-full text-sm font-medium transition-colors duration-300">
                            Get started
                        </a>
                    </div>

                    <!-- Mobile menu button -->
                    <div class="sm:hidden flex items-center">
                        <button type="button" class="mobile-menu-button inline-flex items-center justify-center p-2 rounded-md text-gray-200 hover:text-white hover:bg-white/10 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                            <span class="sr-only">Open main menu</span>
                            <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Mobile menu -->
            <div class="mobile-menu sm:hidden" id="mobile-menu">
                <div class="mobile-menu-content">
                    <div class="mobile-menu-header">
                        <a href="/" class="text-2xl font-bold text-white">KONEKTA</a>
                        <button class="mobile-menu-close text-white">
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                    <div class="mobile-menu-links">
                        <a href="{{ route('features') }}" class="text-white hover:text-gray-200">Features</a>
                        <a href="{{ route('pricing') }}" class="text-white hover:text-gray-200">Pricing</a>
                        <a href="{{ route('about') }}" class="text-white hover:text-gray-200">About</a>
                        <a href="{{ route('contact') }}" class="text-white hover:text-gray-200">Contact</a>
                        <a href="{{ route('community') }}" class="text-white hover:text-gray-200">Community</a>
                    </div>
                    <div class="mobile-menu-footer">
                        <div class="flex flex-col space-y-4">
                            <a href="{{ route('login') }}" class="text-white hover:text-gray-200 text-center py-2">Sign in</a>
                            <a href="{{ route('register') }}" class="bg-white text-primary hover:bg-gray-100 text-center py-2 rounded-full">Get started</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Hero Section -->
        <!--<div class="relative overflow-hidden">
            <div class="absolute inset-0 bg-gradient-to-r from-primary/80 to-secondary/80"></div>
            <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 sm:py-32">
                <div class="flex flex-col lg:flex-row items-center justify-between gap-12">
                    <div class="lg:w-1/2 space-y-8">
                        <h1 class="text-4xl sm:text-5xl md:text-6xl font-bold text-white leading-tight whitespace-nowrap">
                            Track Your Fleet with Precision
                        </h1>
                        <p class="text-xl text-gray-100 max-w-2xl">
                            Real-time vehicle tracking and fleet management solutions for modern businesses.
                        </p>
                        <div class="flex flex-col sm:flex-row gap-4">
                            <a href="{{ route('register') }}" class="inline-flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-full text-primary bg-white hover:bg-gray-100 transition-colors duration-300">
                                Get Started
                            </a>
                            <a href="{{ route('features') }}" class="inline-flex items-center justify-center px-8 py-3 border border-white text-base font-medium rounded-full text-white hover:bg-white/10 transition-colors duration-300">
                                Learn More
                            </a>
                        </div>
                    </div>
                    <div class="lg:w-1/2">
                        <img src="{{ asset('images/dashboard-preview.png') }}" alt="Dashboard Preview" class="w-full h-auto rounded-lg shadow-2xl">
                    </div>
                </div>
            </div>
        </div> -->

        <!-- Add padding to the top of the main content to account for the fixed header -->
        <div class="pt-24">
            @yield('content')
        </div>

        <!-- Footer -->
        <footer class="relative bg-gradient-to-b from-[#1a365d] to-[#4a5d23]">
            <div class="pt-12">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <!-- Main Footer Content -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 py-12">
                        <!-- Company Info -->
                        <div class="col-span-1">
                            <div class="flex items-center mb-6">
                                <a href="/" class="text-2xl font-bold text-white">KONEKTA</a>
                            </div>
                            <p class="text-gray-200 mb-6 leading-relaxed">Advanced vehicle tracking solutions for modern fleet management. Empowering businesses with real-time insights and control.</p>
                            <div class="flex space-x-4">
                                <a href="#" class="text-gray-200 hover:text-white transform transition-all duration-300 hover:scale-110">
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                    </svg>
                                </a>
                                <a href="#" class="text-gray-200 hover:text-white transform transition-all duration-300 hover:scale-110">
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                                    </svg>
                                </a>
                                <a href="#" class="text-gray-200 hover:text-white transform transition-all duration-300 hover:scale-110">
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M20.354 15.354L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    </svg>
                                </a>
                            </div>
                        </div>

                        <!-- Quick Links -->
                        <div class="col-span-1">
                            <h3 class="text-white text-lg font-semibold mb-6">Quick Links</h3>
                            <ul class="space-y-3">
                                <li>
                                    <a href="{{ route('features') }}" class="text-gray-200 hover:text-white transition-colors duration-300 flex items-center">
                                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                        </svg>
                                        Features
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('pricing') }}" class="text-gray-200 hover:text-white transition-colors duration-300 flex items-center">
                                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                        </svg>
                                        Pricing
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('about') }}" class="text-gray-200 hover:text-white transition-colors duration-300 flex items-center">
                                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                        </svg>
                                        About Us
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('contact') }}" class="text-gray-200 hover:text-white transition-colors duration-300 flex items-center">
                                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                        </svg>
                                        Contact
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <!-- Contact Info -->
                        <div class="col-span-1">
                            <h3 class="text-white text-lg font-semibold mb-6">Contact Info</h3>
                            <ul class="space-y-4">
                                <li class="flex items-start">
                                    <svg class="w-5 h-5 mt-1 mr-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                    </svg>
                                    <span class="text-gray-200">info@konekta.com</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-5 h-5 mt-1 mr-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                    </svg>
                                    <span class="text-gray-200">+255 123 456 789</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-5 h-5 mt-1 mr-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    </svg>
                                    <span class="text-gray-200">Dar es Salaam, Tanzania</span>
                                </li>
                            </ul>
                        </div>

                        <!-- Newsletter -->
                        <div class="col-span-1">
                            <h3 class="text-white text-lg font-semibold mb-6">Newsletter</h3>
                            <p class="text-gray-200 mb-4">Subscribe to our newsletter for the latest updates and offers.</p>
                            <form class="space-y-4">
                                <div>
                                    <input type="email" placeholder="Your email address" class="w-full px-4 py-2 rounded-lg bg-white/10 border border-white/20 text-white placeholder-gray-300 focus:outline-none focus:border-white transition-colors duration-300">
                                </div>
                                <button type="submit" class="w-full bg-white hover:bg-white/90 text-[#1a365d] font-medium py-2 px-4 rounded-lg transition-colors duration-300 transform hover:scale-105">
                                    Subscribe
                                </button>
                            </form>
                        </div>
                    </div>

                    <!-- Copyright -->
                    <div class="border-t border-white/10 py-8">
                        <div class="flex flex-col md:flex-row justify-between items-center">
                            <p class="text-gray-300 text-sm mb-4 md:mb-0">
                                &copy; {{ date('Y') }} KONEKTA. All rights reserved.
                            </p>
                            <div class="flex space-x-6">
                                <a href="#" class="text-gray-300 hover:text-white text-sm transition-colors duration-300">Privacy Policy</a>
                                <a href="#" class="text-gray-300 hover:text-white text-sm transition-colors duration-300">Terms of Service</a>
                                <a href="#" class="text-gray-300 hover:text-white text-sm transition-colors duration-300">Cookie Policy</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <!-- AI Assistant Widget -->
    <div class="ai-assistant">
        <div class="ai-chat" id="aiChat">
            <div class="ai-chat-header">
                <div class="flex items-center gap-2">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                    <span>AI Assistant</span>
                </div>
                <button onclick="toggleChat()" class="text-white">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="ai-chat-body" id="chatBody">
                <div class="ai-message assistant">
                    Hello! I'm your AI assistant. How can I help you today?
                </div>
            </div>
            <div class="ai-chat-input">
                <input type="text" id="userInput" placeholder="Type your message..." onkeypress="handleKeyPress(event)">
                <button onclick="sendMessage()">Send</button>
            </div>
        </div>
        <div class="ai-button" onclick="toggleChat()">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
            </svg>
        </div>
    </div>

    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true,
            mirror: false
        });

        // AI Assistant Functions
        function toggleChat() {
            const chat = document.getElementById('aiChat');
            chat.classList.toggle('active');
        }

        function handleKeyPress(event) {
            if (event.key === 'Enter') {
                sendMessage();
            }
        }

        function sendMessage() {
            const input = document.getElementById('userInput');
            const message = input.value.trim();
            
            if (message) {
                // Add user message to chat
                addMessage(message, 'user');
                input.value = '';
                
                // Show typing indicator
                const typingIndicator = document.createElement('div');
                typingIndicator.className = 'ai-message assistant typing-indicator';
                typingIndicator.innerHTML = '<span></span><span></span><span></span>';
                document.getElementById('chatBody').appendChild(typingIndicator);
                
                // Scroll to bottom
                const chatBody = document.getElementById('chatBody');
                chatBody.scrollTop = chatBody.scrollHeight;
                
                // Process the message and generate response
                setTimeout(() => {
                    // Remove typing indicator
                    typingIndicator.remove();
                    
                    // Generate appropriate response based on message content
                    let response = generateResponse(message);
                    addMessage(response, 'assistant');
                    
                    // Scroll to bottom again
                    chatBody.scrollTop = chatBody.scrollHeight;
                }, 1500);
            }
        }

        function generateResponse(message) {
            const lowerMessage = message.toLowerCase();
            
            // Check for common keywords and provide relevant responses
            if (lowerMessage.includes('hello') || lowerMessage.includes('hi') || lowerMessage.includes('hey')) {
                return "Hello! I'm your AI assistant. How can I help you with our vehicle tracking solutions today?";
            } else if (lowerMessage.includes('price') || lowerMessage.includes('cost') || lowerMessage.includes('plan')) {
                return "We offer flexible pricing plans to suit your needs. You can check our pricing page for detailed information. Would you like me to direct you there?";
            } else if (lowerMessage.includes('feature') || lowerMessage.includes('track') || lowerMessage.includes('monitor')) {
                return "Our platform offers real-time tracking, route optimization, geofencing, and driver behavior monitoring. Would you like to know more about any specific feature?";
            } else if (lowerMessage.includes('help') || lowerMessage.includes('support')) {
                return "I'm here to help! You can contact our support team through the contact page, or I can assist you with general questions about our services.";
            } else if (lowerMessage.includes('account') || lowerMessage.includes('register') || lowerMessage.includes('sign up')) {
                return "You can create an account by clicking the 'Get Started' button in the navigation menu. Would you like me to guide you through the registration process?";
            } else {
                return "I understand you're interested in " + message + ". Our vehicle tracking solutions can help optimize your fleet management. Would you like to know more about our specific features or pricing?";
            }
        }

        function addMessage(text, sender) {
            const chatBody = document.getElementById('chatBody');
            const messageDiv = document.createElement('div');
            messageDiv.className = `ai-message ${sender}`;
            messageDiv.textContent = text;
            chatBody.appendChild(messageDiv);
        }

        // Add typing indicator styles
        const style = document.createElement('style');
        style.textContent = `
            .typing-indicator {
                display: flex;
                gap: 4px;
                padding: 8px 12px;
            }
            .typing-indicator span {
                width: 8px;
                height: 8px;
                background: #4a5d23;
                border-radius: 50%;
                animation: typing 1s infinite;
            }
            .typing-indicator span:nth-child(2) {
                animation-delay: 0.2s;
            }
            .typing-indicator span:nth-child(3) {
                animation-delay: 0.4s;
            }
            @keyframes typing {
                0%, 100% { transform: translateY(0); }
                50% { transform: translateY(-5px); }
            }
        `;
        document.head.appendChild(style);
    </script>

    <!-- Theme Toggle Script -->
    <script>
        // Function to set theme
        function setTheme(theme) {
            if (theme === 'dark') {
                document.documentElement.classList.add('dark');
                localStorage.setItem('theme', 'dark');
            } else {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('theme', 'light');
            }
        }

        // Function to toggle theme
        function toggleTheme() {
            if (document.documentElement.classList.contains('dark')) {
                setTheme('light');
            } else {
                setTheme('dark');
            }
        }

        // Initialize theme
        function initTheme() {
            const savedTheme = localStorage.getItem('theme');
            const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
            
            if (savedTheme) {
                setTheme(savedTheme);
            } else if (prefersDark) {
                setTheme('dark');
            } else {
                setTheme('light');
            }
        }

        // Add event listener to theme toggle button
        document.getElementById('themeToggle').addEventListener('click', toggleTheme);

        // Initialize theme on page load
        document.addEventListener('DOMContentLoaded', initTheme);

        // Listen for system theme changes
        window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', (e) => {
            if (!localStorage.getItem('theme')) {
                setTheme(e.matches ? 'dark' : 'light');
            }
        });
    </script>
</body>
</html>