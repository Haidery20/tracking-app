<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Features - KONEKTA</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        .royal-blue {
            color: #4169E1;
        }
        .royal-blue-dark {
            color: #3050E0;
        }
        .military-green {
            background-color: #3E8E41;
        }
    </style>
</head>
<body class="bg-gray-50">
    @include('layouts.header')

    <!-- Features Hero -->
    <div class="relative bg-white overflow-hidden">
        <div class="max-w-7xl mx-auto">
            <div class="relative z-10 pb-8 bg-white sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
                <main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                    <div class="sm:text-center lg:text-left">
                        <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                            <span class="block">Powerful Features</span>
                            <span class="block text-royal-blue">Built for Success</span>
                        </h1>
                        <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                            Discover the advanced features that make KONEKTA the perfect choice for your connectivity needs.
                        </p>
                    </div>
                </main>
            </div>
        </div>
    </div>

    <!-- Feature Cards -->
    <div class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-all duration-300">
                    <div class="text-royal-blue mb-6">
                        <i class="fas fa-network-wired text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Real-time Monitoring</h3>
                    <p class="text-gray-600">Get instant updates on your connectivity status with our real-time monitoring system.</p>
                </div>

                <!-- Feature 2 -->
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-all duration-300">
                    <div class="text-royal-blue mb-6">
                        <i class="fas fa-brain text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">AI Insights</h3>
                    <p class="text-gray-600">Our AI system provides intelligent insights and predictions based on your connectivity data.</p>
                </div>

                <!-- Feature 3 -->
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-all duration-300">
                    <div class="text-royal-blue mb-6">
                        <i class="fas fa-cog text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Device Management</h3>
                    <p class="text-gray-600">Easily manage all your connectivity devices from one intuitive interface.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Stats Section -->
    <div class="py-12 bg-military-green">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="text-4xl font-bold text-white">5,000+</div>
                    <div class="text-gray-300">Connections Made</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl font-bold text-white">100+</div>
                    <div class="text-gray-300">Projects Completed</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl font-bold text-white">99.99%</div>
                    <div class="text-gray-300">Uptime Guarantee</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl font-bold text-white">24/7</div>
                    <div class="text-gray-300">Support Available</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-military-green">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Company Info -->
                <div>
                    <h3 class="text-sm font-semibold text-gray-300 tracking-wider uppercase">Company</h3>
                    <div class="mt-4 space-y-4">
                        <p class="text-gray-300">
                            KONEKTA Technologies Ltd.<br>
                            123 Innovation Street<br>
                            Tech City, TC 12345
                        </p>
                        <div class="space-y-2">
                            <p class="text-gray-300"><i class="fas fa-phone mr-2"></i>+1 (555) 123-4567</p>
                            <p class="text-gray-300"><i class="fas fa-envelope mr-2"></i>info@konekta.com</p>
                            <p class="text-gray-300"><i class="fas fa-clock mr-2"></i>Mon-Fri: 9:00 AM - 6:00 PM</p>
                        </div>
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h3 class="text-sm font-semibold text-gray-300 tracking-wider uppercase">Quick Links</h3>
                    <ul class="mt-4 space-y-4">
                        <li><a href="/about" class="text-base text-gray-300 hover:text-white">About us</a></li>
                        <li><a href="/features" class="text-base text-gray-300 hover:text-white">Features</a></li>
                        <li><a href="/pricing" class="text-base text-gray-300 hover:text-white">Pricing</a></li>
                        <li><a href="/contact" class="text-base text-gray-300 hover:text-white">Contact</a></li>
                    </ul>
                </div>

                <!-- Support -->
                <div>
                    <h3 class="text-sm font-semibold text-gray-300 tracking-wider uppercase">Support</h3>
                    <ul class="mt-4 space-y-4">
                        <li><a href="#" class="text-base text-gray-300 hover:text-white">Help Center</a></li>
                        <li><a href="#" class="text-base text-gray-300 hover:text-white">Contact Support</a></li>
                        <li><a href="#" class="text-base text-gray-300 hover:text-white">Documentation</a></li>
                        <li><a href="#" class="text-base text-gray-300 hover:text-white">API Reference</a></li>
                    </ul>
                </div>

                <!-- Social Links -->
                <div>
                    <h3 class="text-sm font-semibold text-gray-300 tracking-wider uppercase">Follow Us</h3>
                    <div class="mt-4 space-y-4">
                        <div class="flex space-x-4">
                            <a href="#" class="text-gray-300 hover:text-white">
                                <i class="fab fa-twitter text-xl"></i>
                            </a>
                            <a href="#" class="text-gray-300 hover:text-white">
                                <i class="fab fa-facebook-f text-xl"></i>
                            </a>
                            <a href="#" class="text-gray-300 hover:text-white">
                                <i class="fab fa-linkedin-in text-xl"></i>
                            </a>
                            <a href="#" class="text-gray-300 hover:text-white">
                                <i class="fab fa-github text-xl"></i>
                            </a>
                        </div>
                        <div class="mt-4">
                            <p class="text-sm text-gray-300">Subscribe to our newsletter</p>
                            <form class="mt-2">
                                <div class="flex">
                                    <input type="email" placeholder="Enter your email" class="flex-1 px-4 py-2 rounded-l-md text-gray-900 focus:outline-none focus:ring-2 focus:ring-royal-blue">
                                    <button type="submit" class="px-4 py-2 bg-royal-blue text-white rounded-r-md hover:bg-royal-blue-dark focus:outline-none focus:ring-2 focus:ring-royal-blue">
                                        Subscribe
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-12 border-t border-gray-700 pt-8">
                <div class="flex justify-between items-center">
                    <p class="text-base text-gray-300">&copy; 2025 KONEKTA. All rights reserved.</p>
                    <div class="flex space-x-6">
                        <a href="#" class="text-gray-300 hover:text-white">Privacy Policy</a>
                        <a href="#" class="text-gray-300 hover:text-white">Terms of Service</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
