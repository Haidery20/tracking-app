<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About - KONEKTA</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div id="app"></div>
</body>
</html>

@extends('layouts.landing')

@section('content')
<div class="min-h-screen bg-gray-50">
    <!-- Hero Section -->
    <div class="relative overflow-hidden">
        <div class="absolute inset-0">
            <div class="absolute inset-0 bg-gradient-to-r from-primary/80 to-secondary/80"></div>
        </div>
        <div class="max-w-7xl mx-auto">
            <div class="relative z-10 pb-8 sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
                <main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                    <div class="sm:text-center lg:text-left">
                        <h1 class="text-4xl tracking-tight font-extrabold text-white sm:text-5xl md:text-6xl">
                            <span class="block">About</span>
                            <span class="block text-secondary">KONEKTA</span>
                        </h1>
                        <p class="mt-3 text-base text-gray-200 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                            We're revolutionizing vehicle tracking and fleet management with cutting-edge technology and exceptional service.
                        </p>
                    </div>
                </main>
            </div>
        </div>
    </div>

    <!-- Mission Section -->
    <div id="mission" class="py-20 bg-gradient-to-b from-gray-50 to-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center mb-12">
                <h2 class="text-2xl font-semibold text-primary tracking-wide uppercase mb-4">
                    Our Mission
                </h2>
                <p class="text-4xl leading-10 font-extrabold tracking-tight text-gray-900 sm:text-5xl md:text-6xl">
                    Empowering Businesses Through Smart Digital Solutions
                </p>
                <p class="mt-6 max-w-4xl text-xl text-gray-600 lg:mx-auto">
                    We're dedicated to revolutionizing vehicle tracking and fleet management with cutting-edge technology and exceptional service. Our mission is to provide reliable digital tools that make your operations more efficient, secure, and cost-effective.
                </p>
            </div>

            <div class="mt-12 grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
                <!-- Vision Card -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden transform transition-all duration-300 hover:scale-105">
                    <div class="p-8">
                        <div class="flex items-center mb-6">
                            <div class="flex-shrink-0 bg-primary/10 rounded-full p-3 w-12 h-12 flex items-center justify-center">
                                <svg class="h-6 w-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.19 8.688a4.5 4.5 0 011.242 7.244l-4.5 4.5a4.5 4.5 0 01-6.364-6.364l1.757-1.757m13.35-.622l1.757-1.757a4.5 4.5 0 00-6.364-6.364l-4.5 4.5a4.5 4.5 0 006.364 6.364l2.893 2.893z" />
                                </svg>
                            </div>
                            <h3 class="ml-4 text-xl font-semibold text-gray-900">Vision</h3>
                        </div>
                        <p class="text-gray-600 mb-6">
                            To be the leading provider of innovative tracking solutions that empower businesses to achieve their goals.
                        </p>
                        <div class="flex items-center justify-between">
                            <a href="#" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-primary hover:bg-primary/90 transition-colors duration-200">
                                Learn More
                                <svg class="ml-2 -mr-1 h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </a>
                            <div class="flex items-center space-x-2">
                                <span class="px-3 py-1 text-xs font-medium text-primary bg-primary/10 rounded-full counter" data-target="5">
                                    0
                                </span>
                                <span class="px-3 py-1 text-xs font-medium text-green-600 bg-green-50 rounded-full">
                                    Active
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Impact Card -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden transform transition-all duration-300 hover:scale-105">
                    <div class="p-8">
                        <div class="flex items-center mb-6">
                            <div class="flex-shrink-0 bg-primary/10 rounded-full p-3 w-12 h-12 flex items-center justify-center">
                                <svg class="h-6 w-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                                </svg>
                            </div>
                            <h3 class="ml-4 text-xl font-semibold text-gray-900">Impact</h3>
                        </div>
                        <p class="text-gray-600 mb-6">
                            Making a difference in the industry by providing reliable, efficient, and innovative solutions that drive growth.
                        </p>
                        <div class="flex items-center justify-between">
                            <a href="#" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-primary hover:bg-primary/90 transition-colors duration-200">
                                View Impact
                                <svg class="ml-2 -mr-1 h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </a>
                            <div class="flex items-center space-x-2">
                                <span class="px-3 py-1 text-xs font-medium text-primary bg-primary/10 rounded-full counter" data-target="1000">
                                    0
                                </span>
                                <span class="px-3 py-1 text-xs font-medium text-green-600 bg-green-50 rounded-full">
                                    Growing
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Values Card -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden transform transition-all duration-300 hover:scale-105">
                    <div class="p-8">
                        <div class="flex items-center mb-6">
                            <div class="flex-shrink-0 bg-primary/10 rounded-full p-3 w-12 h-12 flex items-center justify-center">
                                <svg class="h-6 w-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.488 9H15V3.614a9.366 9.366 0 00-7.802 12.794V21H8.5v-8.354c0-13.255 12.952-21 23.488-21m0 0V9H15" />
                                </svg>
                            </div>
                            <h3 class="ml-4 text-xl font-semibold text-gray-900">Values</h3>
                        </div>
                        <p class="text-gray-600 mb-6">
                            Integrity, innovation, and excellence guide everything we do, ensuring we deliver the best possible solutions to our clients.
                        </p>
                        <div class="flex items-center justify-between">
                            <a href="#" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-primary hover:bg-primary/90 transition-colors duration-200">
                                Our Values
                                <svg class="ml-2 -mr-1 h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </a>
                            <div class="flex items-center space-x-2">
                                <span class="px-3 py-1 text-xs font-medium text-primary bg-primary/10 rounded-full counter" data-target="7">
                                    0
                                </span>
                                <span class="px-3 py-1 text-xs font-medium text-green-600 bg-green-50 rounded-full">
                                    Commitment
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Innovation Card -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden transform transition-all duration-300 hover:scale-105">
                    <div class="p-8">
                        <div class="flex items-center mb-6">
                            <div class="flex-shrink-0 bg-primary/10 rounded-full p-3 w-12 h-12 flex items-center justify-center">
                                <svg class="h-6 w-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                </svg>
                            </div>
                            <h3 class="ml-4 text-xl font-semibold text-gray-900">Innovation</h3>
                        </div>
                        <p class="text-gray-600 mb-6">
                            Continuously pushing boundaries to deliver cutting-edge tracking solutions that set new industry standards.
                        </p>
                        <div class="flex items-center justify-between">
                            <a href="#" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-primary hover:bg-primary/90 transition-colors duration-200">
                                Explore Innovations
                                <svg class="ml-2 -mr-1 h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </a>
                            <div class="flex items-center space-x-2">
                                <span class="px-3 py-1 text-xs font-medium text-primary bg-primary/10 rounded-full counter" data-target="50">
                                    0
                                </span>
                                <span class="px-3 py-1 text-xs font-medium text-green-600 bg-green-50 rounded-full">
                                    Leading Edge
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Community Card -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden transform transition-all duration-300 hover:scale-105">
                    <div class="p-8">
                        <div class="flex items-center mb-6">
                            <div class="flex-shrink-0 bg-primary/10 rounded-full p-3 w-12 h-12 flex items-center justify-center">
                                <svg class="h-6 w-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                            </div>
                            <h3 class="ml-4 text-xl font-semibold text-gray-900">Community</h3>
                        </div>
                        <p class="text-gray-600 mb-6">
                            Building a strong community of users, partners, and developers who share our passion for innovation and excellence.
                        </p>
                        <div class="flex items-center justify-between">
                            <a href="#" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-primary hover:bg-primary/90 transition-colors duration-200">
                                Join Community
                                <svg class="ml-2 -mr-1 h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </a>
                            <div class="flex items-center space-x-2">
                                <span class="px-3 py-1 text-xs font-medium text-primary bg-primary/10 rounded-full counter" data-target="10000">
                                    0
                                </span>
                                <span class="px-3 py-1 text-xs font-medium text-green-600 bg-green-50 rounded-full">
                                    Active
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sustainability Card -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden transform transition-all duration-300 hover:scale-105">
                    <div class="p-8">
                        <div class="flex items-center mb-6">
                            <div class="flex-shrink-0 bg-primary/10 rounded-full p-3 w-12 h-12 flex items-center justify-center">
                                <svg class="h-6 w-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a3 3 0 11-6 0 3 3 0 016 0zm6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <h3 class="ml-4 text-xl font-semibold text-gray-900">Sustainability</h3>
                        </div>
                        <p class="text-gray-600 mb-6">
                            Committed to environmentally friendly practices and sustainable growth for the long term.
                        </p>
                        <div class="flex items-center justify-between">
                            <a href="#" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-primary hover:bg-primary/90 transition-colors duration-200">
                                Learn More
                                <svg class="ml-2 -mr-1 h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </a>
                            <div class="flex items-center space-x-2">
                                <span class="px-3 py-1 text-xs font-medium text-primary bg-primary/10 rounded-full counter" data-target="100">
                                    0
                                </span>
                                <span class="px-3 py-1 text-xs font-medium text-green-600 bg-green-50 rounded-full">
                                    Certified
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Team Section -->
    <div class="py-12 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center mb-12">
                <h2 class="text-base text-primary font-semibold tracking-wide uppercase">Our Team</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                    Meet the Experts
                </p>
            </div>

            <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-lg">
                        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Team member" class="h-48 w-48 object-cover rounded-full mx-auto">
                    </div>
                    <h3 class="mt-6 text-lg font-medium text-gray-900 text-center">Maryln Jerry</h3>
                    <p class="text-primary text-center">CEO & Founder</p>
                    <p class="mt-2 text-gray-500 text-center">Visionary leader with 15+ years of experience in fleet management technology.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-lg">
                        <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Team member" class="h-48 w-48 object-cover rounded-full mx-auto">
                    </div>
                    <h3 class="mt-6 text-lg font-medium text-gray-900 text-center">Haidery Shango</h3>
                    <p class="text-primary text-center">CTO & Co-Founder</p>
                    <p class="mt-2 text-gray-500 text-center">Technology expert specializing in GPS tracking and IoT solutions.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-lg">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Team member" class="h-48 w-48 object-cover rounded-full mx-auto">
                    </div>
                    <h3 class="mt-6 text-lg font-medium text-gray-900 text-center">Mike Johnson</h3>
                    <p class="text-primary text-center">Head of Operations</p>
                    <p class="mt-2 text-gray-500 text-center">Operations specialist with extensive experience in fleet management.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Values Section -->
    <div id="values" class="py-20 bg-gradient-to-b from-gray-50 to-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center mb-16">
                <h2 class="text-2xl font-semibold text-primary tracking-wide uppercase mb-4">
                    Core Values
                </h2>
                <p class="text-4xl leading-10 font-extrabold tracking-tight text-gray-900 sm:text-5xl md:text-6xl">
                    Guiding Principles
                </p>
                <p class="mt-6 max-w-3xl text-xl text-gray-600 lg:mx-auto">
                    Our three core values that define who we are and how we operate. They guide our decisions and actions, ensuring we consistently deliver excellence in everything we do.
                </p>
            </div>

            <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
                <!-- Creative Card -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden transform transition-all duration-300 hover:scale-105 hover:shadow-xl">
                    <div class="p-8">
                        <div class="flex items-center mb-6">
                            <div class="flex-shrink-0 bg-gradient-to-br from-primary to-secondary rounded-full p-3 w-12 h-12 flex items-center justify-center">
                                <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                </svg>
                            </div>
                            <h3 class="ml-4 text-xl font-semibold text-gray-900">Creative</h3>
                        </div>
                        <p class="text-gray-600 mb-6">
                            We approach every challenge with innovative thinking and fresh ideas, constantly pushing boundaries to create exceptional solutions.
                        </p>
                        <div class="flex items-center justify-between">
                            <a href="#" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-primary hover:bg-primary/90 transition-colors duration-200">
                                See Our Work
                                <svg class="ml-2 -mr-1 h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </a>
                            <div class="flex items-center space-x-2">
                                <span class="px-3 py-1 text-xs font-medium text-primary bg-primary/10 rounded-full">
                                    Core Value
                                </span>
                                <span class="px-3 py-1 text-xs font-medium text-green-600 bg-green-50 rounded-full">
                                    50+ Innovations
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Robust Card -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden transform transition-all duration-300 hover:scale-105 hover:shadow-xl">
                    <div class="p-8">
                        <div class="flex items-center mb-6">
                            <div class="flex-shrink-0 bg-gradient-to-br from-primary to-secondary rounded-full p-3 w-12 h-12 flex items-center justify-center">
                                <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                </svg>
                            </div>
                            <h3 class="ml-4 text-xl font-semibold text-gray-900">Robust</h3>
                        </div>
                        <p class="text-gray-600 mb-6">
                            Our solutions are built with reliability and stability in mind, ensuring consistent performance and minimal downtime.
                        </p>
                        <div class="flex items-center justify-between">
                            <a href="#" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-primary hover:bg-primary/90 transition-colors duration-200">
                                System Stats
                                <svg class="ml-2 -mr-1 h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </a>
                            <div class="flex items-center space-x-2">
                                <span class="px-3 py-1 text-xs font-medium text-primary bg-primary/10 rounded-full">
                                    Core Value
                                </span>
                                <span class="px-3 py-1 text-xs font-medium text-green-600 bg-green-50 rounded-full">
                                    99.99% Uptime
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Reliable Card -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden transform transition-all duration-300 hover:scale-105 hover:shadow-xl">
                    <div class="p-8">
                        <div class="flex items-center mb-6">
                            <div class="flex-shrink-0 bg-gradient-to-br from-primary to-secondary rounded-full p-3 w-12 h-12 flex items-center justify-center">
                                <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                            </div>
                            <h3 class="ml-4 text-xl font-semibold text-gray-900">Reliable</h3>
                        </div>
                        <p class="text-gray-600 mb-6">
                            We deliver consistent, dependable service and support, ensuring our clients can trust us with their most critical operations.
                        </p>
                        <div class="flex items-center justify-between">
                            <a href="#" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-primary hover:bg-primary/90 transition-colors duration-200">
                                Trust Us
                                <svg class="ml-2 -mr-1 h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </a>
                            <div class="flex items-center space-x-2">
                                <span class="px-3 py-1 text-xs font-medium text-primary bg-primary/10 rounded-full">
                                    Core Value
                                </span>
                                <span class="px-3 py-1 text-xs font-medium text-green-600 bg-green-50 rounded-full">
                                    24/7 Support
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    function animateCounter(element) {
        const target = parseFloat(element.getAttribute('data-target'));
        const duration = 2000; // 2 seconds
        const start = 0;
        const step = (target - start) / (duration / 16); // 16ms per frame
        
        function updateCount(current) {
            if (current <= target) {
                element.textContent = Math.ceil(current);
                requestAnimationFrame(() => updateCount(current + step));
            } else {
                element.textContent = Math.ceil(target);
            }
        }
        
        updateCount(start);
    }

    // Initialize Intersection Observer
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const counter = entry.target;
                animateCounter(counter);
                observer.unobserve(counter); // Stop observing after animation
            }
        });
    }, {
        threshold: 0.5 // Trigger when 50% of the element is visible
    });

    // Observe all counter elements
    document.querySelectorAll('.counter').forEach(counter => {
        observer.observe(counter);
    });
</script>
@endpush
