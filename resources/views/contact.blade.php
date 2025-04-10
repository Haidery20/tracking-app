@extends('layouts.landing')

@section('content')
<div class="min-h-screen bg-gray-50">
    <!-- Hero Section -->
    <div class="relative overflow-hidden">
        <div class="max-w-7xl mx-auto">
            <div class="relative z-10 pb-8 sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
                <main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                    <div class="sm:text-center lg:text-left">
                        <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                            <span class="block">Get in <span class="text-primary">Touch</span></span>
                        </h1>
                        <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                            Have questions about our vehicle tracking solutions? We're here to help. Reach out to our team for expert assistance.
                        </p>
                    </div>
                </main>
            </div>
        </div>
    </div>

    <!-- Contact Form Section -->
    <div class="py-12 bg-gradient-to-b from-gray-50 to-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:grid lg:grid-cols-2 lg:gap-8">
                <!-- Contact Information -->
                <div class="mb-8 lg:mb-0">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6">Contact Information</h2>
                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <div class="p-3 bg-primary/10 rounded-full">
                                    <svg class="h-6 w-6 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-medium text-gray-900">Email</h3>
                                <p class="mt-1 text-gray-500">info@konekta.co.tz</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <div class="p-3 bg-primary/10 rounded-full">
                                    <svg class="h-6 w-6 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-medium text-gray-900">Phone</h3>
                                <p class="mt-1 text-gray-500">+255 735 431 733</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <div class="p-3 bg-primary/10 rounded-full">
                                    <svg class="h-6 w-6 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-medium text-gray-900">Office</h3>
                                <p class="mt-1 text-gray-500">Plot 235 Oyster Bay, Mtwara Crescent, Dar es Salaam</p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-8">
                        <h3 class="text-lg font-medium text-gray-900 mb-4">Business Hours</h3>
                        <div class="space-y-2">
                            <p class="text-gray-500">Monday - Friday: 9:00 AM - 5:00 PM</p>
                            <p class="text-gray-500">Saturday: 9:00 AM - 1:00 PM</p>
                            <p class="text-gray-500">Sunday: Closed</p>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="bg-white p-8 rounded-2xl shadow-xl transform transition-all duration-300 hover:shadow-2xl">
                    <h2 class="text-2xl font-bold text-gray-900 mb-8">Send us a Message</h2>
                    <form action="{{ route('contact.send') }}" method="POST" class="space-y-6">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Name</label>
                                <div class="relative">
                                    <input type="text" name="name" id="name" required 
                                        class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all duration-200"
                                        placeholder="Enter your name" />
                                </div>
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                                <div class="relative">
                                    <input type="email" name="email" id="email" required 
                                        class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all duration-200"
                                        placeholder="Enter your email" />
                                </div>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Phone</label>
                                <div class="relative">
                                    <input type="tel" name="phone" id="phone" 
                                        class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all duration-200"
                                        placeholder="Enter your phone number" />
                                </div>
                            </div>
                            <div>
                                <label for="subject" class="block text-sm font-medium text-gray-700 mb-2">Subject</label>
                                <div class="relative">
                                    <input type="text" name="subject" id="subject" required 
                                        class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all duration-200"
                                        placeholder="Enter your subject" />
                                </div>
                            </div>
                        </div>
                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Message</label>
                            <div class="relative">
                                <textarea name="message" id="message" rows="4" required 
                                    class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all duration-200"
                                    placeholder="Enter your message"></textarea>
                            </div>
                        </div>
                        <div class="flex justify-center">
                            <button type="submit" class="w-full md:w-auto bg-primary text-white px-8 py-3 rounded-xl hover:bg-primary/90 transform transition-all duration-300 hover:scale-105 focus:outline-none focus:ring-2 focus:ring-primary/20">
                                <span class="inline-flex items-center">
                                    <i class="fas fa-paper-plane mr-2"></i>
                                    Send Message
                                </span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Map Section -->
    <div class="bg-gray-50 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">Our Location</h2>
            <div class="aspect-w-16 aspect-h-9 rounded-2xl overflow-hidden shadow-xl">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3969.0000000000005!2d39.00000000000001!3d-6.000000000000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNsKwMDAnMDAuMCJTIDM5wrAwMCcwMC4wIkU!5e0!3m2!1sen!2stz!4v1234567890"
                    width="100%"
                    height="450"
                    style="border:0;"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                    class="rounded-2xl shadow-xl"
                ></iframe>
            </div>
        </div>
    </div>

    <!-- FAQ Section -->
    <div class="bg-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">Frequently Asked Questions</h2>
            <div class="space-y-6">
                @foreach([
                    [
                        'question' => 'How quickly can you respond to support requests?',
                        'answer' => 'Our support team typically responds within 1-2 business hours during working days.',
                        'icon' => 'fas fa-clock'
                    ],
                    [
                        'question' => 'Do you offer on-site installation?',
                        'answer' => 'Yes, we provide professional installation services across Tanzania. Contact us for more details.',
                        'icon' => 'fas fa-tools'
                    ],
                    [
                        'question' => 'What payment methods do you accept?',
                        'answer' => 'We accept mobile payments (M-Pesa, Tigo Pesa, Airtel Money), bank transfers, and cash payments at our offices.',
                        'icon' => 'fas fa-credit-card'
                    ]
                ] as $faq)
                @php
                    $iconColors = [
                        'text-blue-500',
                        'text-green-500',
                        'text-purple-500'
                    ];
                @endphp
                <div class="bg-white rounded-xl shadow-lg p-6 transform transition-all duration-300 hover:scale-105">
                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <div class="p-3 bg-primary/10 rounded-full">
                                <i class="{{ $faq['icon'] }} {{ $iconColors[array_rand($iconColors)] }}"></i>
                            </div>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-medium text-gray-900">{{ $faq['question'] }}</h3>
                            <p class="mt-2 text-gray-500">{{ $faq['answer'] }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
