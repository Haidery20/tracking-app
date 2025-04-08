<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - KONEKTA</title>
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

    <!-- About Hero -->
    <div class="relative bg-white overflow-hidden">
        <div class="max-w-7xl mx-auto">
            <div class="relative z-10 pb-8 bg-white sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
                <main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                    <div class="sm:text-center lg:text-left">
                        <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                            <span class="block">About Us</span>
                            <span class="block text-royal-blue">Connecting the World</span>
                        </h1>
                        <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                            Discover our mission and vision in creating seamless connectivity solutions for businesses worldwide.
                        </p>
                    </div>
                </main>
            </div>
        </div>
    </div>

    <!-- Company Story -->
    <div class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <div class="space-y-6">
                    <h2 class="text-3xl font-bold text-gray-900">Our Story</h2>
                    <p class="text-lg text-gray-600">
                        Founded in 2025, KONEKTA was born out of a passion for solving complex connectivity challenges. Our team of experts has decades of experience in networking, IoT, and cloud technologies.
                    </p>
                    <p class="text-lg text-gray-600">
                        We believe that connectivity should be simple, reliable, and accessible to everyone. That's why we've built a platform that makes it easy for businesses to connect, monitor, and manage their devices and networks.
                    </p>
                </div>
                <div class="bg-military-green p-8 rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div class="text-center">
                            <div class="text-4xl font-bold text-white">2025</div>
                            <div class="text-gray-300">Founded</div>
                        </div>
                        <div class="text-center">
                            <div class="text-4xl font-bold text-white">50+</div>
                            <div class="text-gray-300">Team Members</div>
                        </div>
                        <div class="text-center">
                            <div class="text-4xl font-bold text-white">100+</div>
                            <div class="text-gray-300">Clients Served</div>
                        </div>
                        <div class="text-center">
                            <div class="text-4xl font-bold text-white">99.99%</div>
                            <div class="text-gray-300">Uptime Guarantee</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Our Team -->
    <div class="py-12 bg-military-green">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-white">Our Team</h2>
                <p class="mt-4 text-lg text-gray-300">Meet the passionate people behind KONEKTA</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Team Member 1 -->
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-all duration-300">
                    <div class="h-48 w-full bg-gray-200 rounded-lg mb-6"></div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">John Doe</h3>
                    <p class="text-gray-600">CEO & Founder</p>
                    <div class="mt-4 space-x-4">
                        <a href="#" class="text-royal-blue hover:text-royal-blue-dark">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="text-royal-blue hover:text-royal-blue-dark">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="text-royal-blue hover:text-royal-blue-dark">
                            <i class="fab fa-github"></i>
                        </a>
                    </div>
                </div>

                <!-- Team Member 2 -->
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-all duration-300">
                    <div class="h-48 w-full bg-gray-200 rounded-lg mb-6"></div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Jane Smith</h3>
                    <p class="text-gray-600">CTO</p>
                    <div class="mt-4 space-x-4">
                        <a href="#" class="text-royal-blue hover:text-royal-blue-dark">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="text-royal-blue hover:text-royal-blue-dark">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="text-royal-blue hover:text-royal-blue-dark">
                            <i class="fab fa-github"></i>
                        </a>
                    </div>
                </div>

                <!-- Team Member 3 -->
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-all duration-300">
                    <div class="h-48 w-full bg-gray-200 rounded-lg mb-6"></div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Mike Johnson</h3>
                    <p class="text-gray-600">Head of Engineering</p>
                    <div class="mt-4 space-x-4">
                        <a href="#" class="text-royal-blue hover:text-royal-blue-dark">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="text-royal-blue hover:text-royal-blue-dark">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="text-royal-blue hover:text-royal-blue-dark">
                            <i class="fab fa-github"></i>
                        </a>
                    </div>
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
