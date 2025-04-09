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
    <div id="documentation" class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">
                    Documentation & Resources
                </h2>
                <p class="mt-4 text-lg text-gray-500">
                    Comprehensive guides and resources to help you get started and build amazing tracking solutions.
                </p>
            </div>

            <div class="mt-10">
                <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
                    <!-- API Documentation -->
                    <div class="bg-gray-50 rounded-lg p-6">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 bg-primary/10 rounded-md p-3">
                                <svg class="h-6 w-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                </svg>
                            </div>
                            <h3 class="ml-4 text-lg font-medium text-gray-900">API Documentation</h3>
                        </div>
                        <p class="mt-4 text-gray-500">
                            Detailed API reference and integration guides for developers.
                        </p>
                        <div class="mt-6">
                            <a href="#" class="text-primary hover:text-primary/80 font-medium">
                                View API Docs →
                            </a>
                        </div>
                    </div>

                    <!-- SDKs -->
                    <div class="bg-gray-50 rounded-lg p-6">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 bg-primary/10 rounded-md p-3">
                                <svg class="h-6 w-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4l-1.5 6h3L12 4z" />
                                </svg>
                            </div>
                            <h3 class="ml-4 text-lg font-medium text-gray-900">SDKs & Libraries</h3>
                        </div>
                        <p class="mt-4 text-gray-500">
                            Official SDKs and libraries for popular programming languages.
                        </p>
                        <div class="mt-6">
                            <a href="#" class="text-primary hover:text-primary/80 font-medium">
                                Download SDKs →
                            </a>
                        </div>
                    </div>

                    <!-- Tutorials -->
                    <div class="bg-gray-50 rounded-lg p-6">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 bg-primary/10 rounded-md p-3">
                                <svg class="h-6 w-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                </svg>
                            </div>
                            <h3 class="ml-4 text-lg font-medium text-gray-900">Tutorials & Guides</h3>
                        </div>
                        <p class="mt-4 text-gray-500">
                            Step-by-step tutorials and best practices for implementation.
                        </p>
                        <div class="mt-6">
                            <a href="#" class="text-primary hover:text-primary/80 font-medium">
                                View Tutorials →
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Forums Section -->
    <div id="forums" class="py-12 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">
                    Community Forums
                </h2>
                <p class="mt-4 text-lg text-gray-500">
                    Join discussions, ask questions, and share your experiences with other developers.
                </p>
            </div>

            <div class="mt-10">
                <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
                    <!-- General Discussion -->
                    <div class="bg-white rounded-lg p-6 shadow">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 bg-primary/10 rounded-md p-3">
                                <svg class="h-6 w-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                                </svg>
                            </div>
                            <h3 class="ml-4 text-lg font-medium text-gray-900">General Discussion</h3>
                        </div>
                        <p class="mt-4 text-gray-500">
                            Discuss general topics, share ideas, and connect with the community.
                        </p>
                        <div class="mt-6">
                            <a href="#" class="text-primary hover:text-primary/80 font-medium">
                                Join Discussion →
                            </a>
                        </div>
                    </div>

                    <!-- Technical Support -->
                    <div class="bg-white rounded-lg p-6 shadow">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 bg-primary/10 rounded-md p-3">
                                <svg class="h-6 w-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
                                </svg>
                            </div>
                            <h3 class="ml-4 text-lg font-medium text-gray-900">Technical Support</h3>
                        </div>
                        <p class="mt-4 text-gray-500">
                            Get help with technical issues and implementation challenges.
                        </p>
                        <div class="mt-6">
                            <a href="#" class="text-primary hover:text-primary/80 font-medium">
                                Get Support →
                            </a>
                        </div>
                    </div>

                    <!-- Feature Requests -->
                    <div class="bg-white rounded-lg p-6 shadow">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 bg-primary/10 rounded-md p-3">
                                <svg class="h-6 w-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                </svg>
                            </div>
                            <h3 class="ml-4 text-lg font-medium text-gray-900">Feature Requests</h3>
                        </div>
                        <p class="mt-4 text-gray-500">
                            Suggest new features and vote on upcoming improvements.
                        </p>
                        <div class="mt-6">
                            <a href="#" class="text-primary hover:text-primary/80 font-medium">
                                Submit Ideas →
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 