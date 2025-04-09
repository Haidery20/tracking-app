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
    <div class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h2 class="text-base text-primary font-semibold tracking-wide uppercase">Our Mission</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                    Empowering Businesses Through Smart Digital Solutions
                </p>
                <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
                To empower businesses with reliable digital tools web hosting, design, and communication solutions using modern technology and smart methods. We aim to make digital access simple, affordable, and effective for everyone.
                </p>
            </div>
        </div>
    </div>

    <!-- Stats Section -->
    <div class="py-12 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-4">
                <div class="bg-white p-8 rounded-xl shadow-lg transform hover:scale-105 transition duration-300">
                    <div class="text-4xl font-bold text-primary counter" data-target="1000">500+</div>
                    <div class="mt-2 text-lg text-gray-600">Active Vehicles</div>
                </div>
                <div class="bg-white p-8 rounded-xl shadow-lg transform hover:scale-105 transition duration-300">
                    <div class="text-4xl font-bold text-primary counter" data-target="50">50+</div>
                    <div class="mt-2 text-lg text-gray-600">Enterprise Clients</div>
                </div>
                <div class="bg-white p-8 rounded-xl shadow-lg transform hover:scale-105 transition duration-300">
                    <div class="text-4xl font-bold text-primary counter" data-target="99.9">99.9%</div>
                    <div class="mt-2 text-lg text-gray-600">Uptime</div>
                </div>
                <div class="bg-white p-8 rounded-xl shadow-lg transform hover:scale-105 transition duration-300">
                    <div class="text-4xl font-bold text-primary counter" data-target="24">24/7</div>
                    <div class="mt-2 text-lg text-gray-600">Support</div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
    <script>
        function animateCounter(element) {
            const target = parseFloat(element.getAttribute('data-target'));
            const duration = 2000; // 2 seconds
            const start = 0;
            const increment = target / (duration / 16); // 60fps
            let current = start;

            const updateCounter = () => {
                current += increment;
                if (current < target) {
                    element.textContent = Math.ceil(current);
                    requestAnimationFrame(updateCounter);
                } else {
                    element.textContent = target;
                }
            };

            updateCounter();
        }

        function handleIntersection(entries, observer) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateCounter(entry.target);
                    observer.unobserve(entry.target);
                }
            });
        }

        const observer = new IntersectionObserver(handleIntersection, {
            threshold: 0.5
        });

        document.querySelectorAll('.counter').forEach(counter => {
            observer.observe(counter);
        });
    </script>
    @endpush

    <!-- Values Section -->
    <div class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center mb-12">
                <h2 class="text-base text-primary font-semibold tracking-wide uppercase">Our Values</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                    What We Stand For
                </p>
            </div>
            <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
                <div class="bg-gray-50 p-6 rounded-lg">
                    <div class="text-primary mb-4">
                        <svg class="h-8 w-8" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-medium text-gray-900">Innovation</h3>
                    <p class="mt-2 text-gray-500">We constantly push boundaries to deliver cutting-edge tracking solutions that set new industry standards.</p>
                </div>
                <div class="bg-gray-50 p-6 rounded-lg">
                    <div class="text-primary mb-4">
                        <svg class="h-8 w-8" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-medium text-gray-900">Reliability</h3>
                    <p class="mt-2 text-gray-500">Our systems are built for maximum uptime and performance, ensuring your operations run smoothly.</p>
                </div>
                <div class="bg-gray-50 p-6 rounded-lg">
                    <div class="text-primary mb-4">
                        <svg class="h-8 w-8" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-medium text-gray-900">Support</h3>
                    <p class="mt-2 text-gray-500">Our dedicated support team is available 24/7 to ensure your success with our platform.</p>
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
</div>
@endsection
