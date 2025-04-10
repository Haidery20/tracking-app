@extends('layouts.landing')

@section('content')
<div class="min-h-screen bg-gray-50">
    <!-- Hero Section -->
    <div class="relative bg-white overflow-hidden">
        <div class="max-w-7xl mx-auto">
            <div class="relative z-10 pb-8 bg-white sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
                <main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                    <div class="sm:text-center lg:text-left">
                        <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                            <span class="block">Join Our</span>
                            <span class="block text-primary">Developer Community</span>
                        </h1>
                        <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                            Connect with fellow developers, access documentation, and get support for your tracking solutions.
                        </p>
                        <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                            <div class="rounded-md shadow">
                                <a href="#documentation" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-primary hover:bg-primary/90 md:py-4 md:text-lg md:px-10">
                                    View Documentation
                                </a>
                            </div>
                            <div class="mt-3 sm:mt-0 sm:ml-3">
                                <a href="#forums" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-primary bg-primary/10 hover:bg-primary/20 md:py-4 md:text-lg md:px-10">
                                    Join Forums
                                </a>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>

    <!-- Documentation Section -->
    <div id="documentation" class="py-16 bg-gradient-to-b from-gray-50 to-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-extrabold text-gray-900 sm:text-5xl mb-4">
                    Documentation & Resources
                </h2>
                <p class="mt-4 text-xl text-gray-600 max-w-2xl mx-auto">
                    Comprehensive guides and resources to help you get started and build amazing tracking solutions.
                </p>
            </div>

            <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
                <!-- API Documentation -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden transform transition-all duration-300 hover:scale-105">
                    <div class="p-6">
                        <div class="flex items-center mb-6">
                            <div class="flex-shrink-0 bg-primary/10 rounded-full p-3 w-12 h-12 flex items-center justify-center">
                                <svg class="h-6 w-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                </svg>
                            </div>
                            <h3 class="ml-4 text-xl font-semibold text-gray-900">API Documentation</h3>
                        </div>
                        <p class="text-gray-600 mb-6">
                            Detailed API reference and integration guides for developers. Learn how to implement our tracking solutions effectively.
                        </p>
                        <div class="flex items-center justify-between">
                            <a href="#" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-primary hover:bg-primary/90 transition-colors duration-200">
                                View API Docs
                                <svg class="ml-2 -mr-1 h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </a>
                            <div class="flex items-center space-x-2">
                                <span class="px-3 py-1 text-xs font-medium text-primary bg-primary/10 rounded-full">
                                    12 Topics
                                </span>
                                <span class="px-3 py-1 text-xs font-medium text-green-600 bg-green-50 rounded-full">
                                    Updated
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- SDKs -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden transform transition-all duration-300 hover:scale-105">
                    <div class="p-6">
                        <div class="flex items-center mb-6">
                            <div class="flex-shrink-0 bg-primary/10 rounded-full p-3 w-12 h-12 flex items-center justify-center">
                                <svg class="h-6 w-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                                </svg>
                            </div>
                            <h3 class="ml-4 text-xl font-semibold text-gray-900">SDKs & Libraries</h3>
                        </div>
                        <p class="text-gray-600 mb-6">
                            Download our official SDKs for various platforms and languages to get started quickly.
                        </p>
                        <div class="flex items-center justify-between">
                            <a href="#" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-primary hover:bg-primary/90 transition-colors duration-200">
                                Download SDKs
                                <svg class="ml-2 -mr-1 h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </a>
                            <div class="flex items-center space-x-2">
                                <span class="px-3 py-1 text-xs font-medium text-primary bg-primary/10 rounded-full">
                                    5 Languages
                                </span>
                                <span class="px-3 py-1 text-xs font-medium text-green-600 bg-green-50 rounded-full">
                                    Latest
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tutorials -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden transform transition-all duration-300 hover:scale-105">
                    <div class="p-6">
                        <div class="flex items-center mb-6">
                            <div class="flex-shrink-0 bg-primary/10 rounded-full p-3 w-12 h-12 flex items-center justify-center">
                                <svg class="h-6 w-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                </svg>
                            </div>
                            <h3 class="ml-4 text-xl font-semibold text-gray-900">Step-by-Step Tutorials</h3>
                        </div>
                        <p class="text-gray-600 mb-6">
                            Follow our comprehensive tutorials to learn how to implement tracking solutions effectively.
                        </p>
                        <div class="flex items-center justify-between">
                            <a href="#" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-primary hover:bg-primary/90 transition-colors duration-200">
                                Start Learning
                                <svg class="ml-2 -mr-1 h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </a>
                            <div class="flex items-center space-x-2">
                                <span class="px-3 py-1 text-xs font-medium text-primary bg-primary/10 rounded-full">
                                    20+ Guides
                                </span>
                                <span class="px-3 py-1 text-xs font-medium text-green-600 bg-green-50 rounded-full">
                                    New
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Quick Start -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden transform transition-all duration-300 hover:scale-105">
                    <div class="p-6">
                        <div class="flex items-center mb-6">
                            <div class="flex-shrink-0 bg-primary/10 rounded-full p-3 w-12 h-12 flex items-center justify-center">
                                <svg class="h-6 w-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                </svg>
                            </div>
                            <h3 class="ml-4 text-xl font-semibold text-gray-900">Quick Start Guide</h3>
                        </div>
                        <p class="text-gray-600 mb-6">
                            Get up and running with our tracking solutions in minutes with our quick start guide.
                        </p>
                        <div class="flex items-center justify-between">
                            <a href="#" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-primary hover:bg-primary/90 transition-colors duration-200">
                                Start Now
                                <svg class="ml-2 -mr-1 h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </a>
                            <div class="flex items-center space-x-2">
                                <span class="px-3 py-1 text-xs font-medium text-primary bg-primary/10 rounded-full">
                                    5 Minutes
                                </span>
                                <span class="px-3 py-1 text-xs font-medium text-green-600 bg-green-50 rounded-full">
                                    Beginner
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Best Practices -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden transform transition-all duration-300 hover:scale-105">
                    <div class="p-6">
                        <div class="flex items-center mb-6">
                            <div class="flex-shrink-0 bg-primary/10 rounded-full p-3 w-12 h-12 flex items-center justify-center">
                                <svg class="h-6 w-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                </svg>
                            </div>
                            <h3 class="ml-4 text-xl font-semibold text-gray-900">Best Practices</h3>
                        </div>
                        <p class="text-gray-600 mb-6">
                            Learn industry best practices for implementing tracking solutions effectively.
                        </p>
                        <div class="flex items-center justify-between">
                            <a href="#" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-primary hover:bg-primary/90 transition-colors duration-200">
                                Read More
                                <svg class="ml-2 -mr-1 h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </a>
                            <div class="flex items-center space-x-2">
                                <span class="px-3 py-1 text-xs font-medium text-primary bg-primary/10 rounded-full">
                                    15+ Tips
                                </span>
                                <span class="px-3 py-1 text-xs font-medium text-green-600 bg-green-50 rounded-full">
                                    Expert
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Community Resources -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden transform transition-all duration-300 hover:scale-105">
                    <div class="p-6">
                        <div class="flex items-center mb-6">
                            <div class="flex-shrink-0 bg-primary/10 rounded-full p-3 w-12 h-12 flex items-center justify-center">
                                <svg class="h-6 w-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                </svg>
                            </div>
                            <h3 class="ml-4 text-xl font-semibold text-gray-900">Community Resources</h3>
                        </div>
                        <p class="text-gray-600 mb-6">
                            Access community-created resources, templates, and examples to help you get started.
                        </p>
                        <div class="flex items-center justify-between">
                            <a href="#" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-primary hover:bg-primary/90 transition-colors duration-200">
                                Explore Resources
                                <svg class="ml-2 -mr-1 h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </a>
                            <div class="flex items-center space-x-2">
                                <span class="px-3 py-1 text-xs font-medium text-primary bg-primary/10 rounded-full">
                                    100+ Resources
                                </span>
                                <span class="px-3 py-1 text-xs font-medium text-green-600 bg-green-50 rounded-full">
                                    Community
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Forums Section -->
    <div id="forums" class="py-16 bg-gradient-to-b from-gray-50 to-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-extrabold text-gray-900 sm:text-5xl mb-4">
                    Community Forums
                </h2>
                <p class="mt-4 text-xl text-gray-600 max-w-2xl mx-auto">
                    Join discussions, ask questions, and share your experiences with other developers. Connect with a vibrant community of tracking solution enthusiasts.
                </p>
            </div>

            <div class="mt-10">
                <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
                    <!-- General Discussion -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden transform transition-all duration-300 hover:scale-105">
                        <div class="p-6">
                            <div class="flex items-center mb-6">
                                <div class="flex-shrink-0 bg-primary/10 rounded-full p-3 w-12 h-12 flex items-center justify-center">
                                    <svg class="h-6 w-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                                    </svg>
                                </div>
                                <h3 class="ml-4 text-xl font-semibold text-gray-900">General Discussion</h3>
                            </div>
                            <p class="text-gray-600 mb-6">
                                Discuss general topics, share ideas, and connect with the community. From beginner questions to advanced discussions.
                            </p>
                            <div class="flex items-center justify-between">
                                <a href="#" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-primary hover:bg-primary/90 transition-colors duration-200">
                                    Join Discussion
                                    <svg class="ml-2 -mr-1 h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </a>
                                <div class="flex items-center space-x-2">
                                    <span class="px-3 py-1 text-xs font-medium text-primary bg-primary/10 rounded-full">
                                        1.2k Posts
                                    </span>
                                    <span class="px-3 py-1 text-xs font-medium text-green-600 bg-green-50 rounded-full">
                                        Active
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Technical Support -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden transform transition-all duration-300 hover:scale-105">
                        <div class="p-6">
                            <div class="flex items-center mb-6">
                                <div class="flex-shrink-0 bg-primary/10 rounded-full p-3 w-12 h-12 flex items-center justify-center">
                                    <svg class="h-6 w-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
                                    </svg>
                                </div>
                                <h3 class="ml-4 text-xl font-semibold text-gray-900">Technical Support</h3>
                            </div>
                            <p class="text-gray-600 mb-6">
                                Get help with technical issues, implementation challenges, and troubleshooting. Our community is here to assist you.
                            </p>
                            <div class="flex items-center justify-between">
                                <a href="#" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-primary hover:bg-primary/90 transition-colors duration-200">
                                    Get Support
                                    <svg class="ml-2 -mr-1 h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </a>
                                <div class="flex items-center space-x-2">
                                    <span class="px-3 py-1 text-xs font-medium text-primary bg-primary/10 rounded-full">
                                        850+ Threads
                                    </span>
                                    <span class="px-3 py-1 text-xs font-medium text-green-600 bg-green-50 rounded-full">
                                        24/7
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Feature Requests -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden transform transition-all duration-300 hover:scale-105">
                        <div class="p-6">
                            <div class="flex items-center mb-6">
                                <div class="flex-shrink-0 bg-primary/10 rounded-full p-3 w-12 h-12 flex items-center justify-center">
                                    <svg class="h-6 w-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                    </svg>
                                </div>
                                <h3 class="ml-4 text-xl font-semibold text-gray-900">Feature Requests</h3>
                            </div>
                            <p class="text-gray-600 mb-6">
                                Suggest new features, vote on upcoming improvements, and help shape the future of our tracking solutions.
                            </p>
                            <div class="flex items-center justify-between">
                                <a href="#" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-primary hover:bg-primary/90 transition-colors duration-200">
                                    Submit Ideas
                                    <svg class="ml-2 -mr-1 h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </a>
                                <div class="flex items-center space-x-2">
                                    <span class="px-3 py-1 text-xs font-medium text-primary bg-primary/10 rounded-full">
                                        350+ Suggestions
                                    </span>
                                    <span class="px-3 py-1 text-xs font-medium text-green-600 bg-green-50 rounded-full">
                                        Voting Open
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Developer Showcase -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden transform transition-all duration-300 hover:scale-105">
                        <div class="p-6">
                            <div class="flex items-center mb-6">
                                <div class="flex-shrink-0 bg-primary/10 rounded-full p-3 w-12 h-12 flex items-center justify-center">
                                    <svg class="h-6 w-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                    </svg>
                                </div>
                                <h3 class="ml-4 text-xl font-semibold text-gray-900">Developer Showcase</h3>
                            </div>
                            <p class="text-gray-600 mb-6">
                                Share your projects, get feedback, and showcase your implementations of tracking solutions.
                            </p>
                            <div class="flex items-center justify-between">
                                <a href="#" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-primary hover:bg-primary/90 transition-colors duration-200">
                                    Share Your Work
                                    <svg class="ml-2 -mr-1 h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </a>
                                <div class="flex items-center space-x-2">
                                    <span class="px-3 py-1 text-xs font-medium text-primary bg-primary/10 rounded-full">
                                        50+ Projects
                                    </span>
                                    <span class="px-3 py-1 text-xs font-medium text-green-600 bg-green-50 rounded-full">
                                        Featured
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Code Reviews -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden transform transition-all duration-300 hover:scale-105">
                        <div class="p-6">
                            <div class="flex items-center mb-6">
                                <div class="flex-shrink-0 bg-primary/10 rounded-full p-3 w-12 h-12 flex items-center justify-center">
                                    <svg class="h-6 w-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                                    </svg>
                                </div>
                                <h3 class="ml-4 text-xl font-semibold text-gray-900">Code Reviews</h3>
                            </div>
                            <p class="text-gray-600 mb-6">
                                Get your code reviewed by experienced developers and learn best practices for implementation.
                            </p>
                            <div class="flex items-center justify-between">
                                <a href="#" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-primary hover:bg-primary/90 transition-colors duration-200">
                                    Submit Code
                                    <svg class="ml-2 -mr-1 h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </a>
                                <div class="flex items-center space-x-2">
                                    <span class="px-3 py-1 text-xs font-medium text-primary bg-primary/10 rounded-full">
                                        200+ Reviews
                                    </span>
                                    <span class="px-3 py-1 text-xs font-medium text-green-600 bg-green-50 rounded-full">
                                        Expert
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Jobs Board -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden transform transition-all duration-300 hover:scale-105">
                        <div class="p-6">
                            <div class="flex items-center mb-6">
                                <div class="flex-shrink-0 bg-primary/10 rounded-full p-3 w-12 h-12 flex items-center justify-center">
                                    <svg class="h-6 w-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                    </svg>
                                </div>
                                <h3 class="ml-4 text-xl font-semibold text-gray-900">Jobs Board</h3>
                            </div>
                            <p class="text-gray-600 mb-6">
                                Find job opportunities, connect with employers, and showcase your skills in the tracking solutions industry.
                            </p>
                            <div class="flex items-center justify-between">
                                <a href="#" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-primary hover:bg-primary/90 transition-colors duration-200">
                                    Browse Jobs
                                    <svg class="ml-2 -mr-1 h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </a>
                                <div class="flex items-center space-x-2">
                                    <span class="px-3 py-1 text-xs font-medium text-primary bg-primary/10 rounded-full">
                                        30+ Openings
                                    </span>
                                    <span class="px-3 py-1 text-xs font-medium text-green-600 bg-green-50 rounded-full">
                                        Hiring
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection