<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KONEKTA - Your Gateway to Technology</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-white shadow-lg">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center py-4">
                <div class="text-xl font-bold text-gray-800">KONEKTA</div>
                <div class="space-x-7">
                    <a href="#" class="text-gray-600 hover:text-blue-500 transition">Home</a>
                    <a href="#" class="text-gray-600 hover:text-blue-500 transition">Articles</a>
                    <a href="#" class="text-gray-600 hover:text-blue-500 transition">Reviews</a>
                    <a href="#" class="text-gray-600 hover:text-blue-500 transition">Tutorials</a>
                    <button class="btn-primary px-6 py-2">Subscribe</button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section py-24 bg-hero-gradient">
        <div class="container mx-auto px-4">
            <div class="md:flex items-center justify-between">
                <div class="md:w-1/2">
                    <h1 class="text-4xl md:text-6xl font-bold text-white mb-8 animate-fade-in-up">
                        Connect with Technology
                    </h1>
                    <p class="text-xl text-white/80 mb-12 animate-fade-in-up delay-200">
                        Discover the latest tech trends, in-depth reviews, and expert tutorials to enhance your digital life.
                    </p>
                    <div class="space-y-4 animate-fade-in-up delay-400">
                        <button class="btn-primary px-8 py-3 text-lg">Explore Now</button>
                        <button class="btn-outline px-8 py-3 text-lg">Learn More</button>
                    </div>
                </div>
                <div class="md:w-1/2 mt-8 md:mt-0">
                    <div class="ai-widget p-8 bg-white/95 backdrop-filter-blur-md rounded-2xl shadow-md animate-slide-in delay-600">
                        <div class="text-center mb-6">
                            <i class="fas fa-laptop-code icon text-4xl text-gray-800"></i>
                        </div>
                        <h3 class="title text-center text-2xl font-bold mb-4">Tech Insights</h3>
                        <p class="description text-center text-gray-600">
                            Get real-time tech news and insights from our expert team.
                        </p>
                        <div class="text-center">
                            <button class="cta-button bg-gray-800 text-white px-8 py-3 text-lg rounded-full">Latest News</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Articles Section -->
    <section class="py-20">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-16 animate-fade-in-up">Featured Articles</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="feature-card bg-white rounded-2xl shadow-md p-8 animate-fade-in-up delay-200">
                    <div class="h-48 bg-gray-200 rounded-lg mb-6"></div>
                    <h3 class="text-xl font-bold mb-4">The Future of AI: What Lies Ahead</h3>
                    <p class="text-gray-600 mb-4">Explore the latest advancements in artificial intelligence and their impact on our future.</p>
                    <a href="#" class="text-blue-600 hover:text-blue-700">Read More →</a>
                </div>
                <div class="feature-card bg-white rounded-2xl shadow-md p-8 animate-fade-in-up delay-400">
                    <div class="h-48 bg-gray-200 rounded-lg mb-6"></div>
                    <h3 class="text-xl font-bold mb-4">Quantum Computing: A New Era</h3>
                    <p class="text-gray-600 mb-4">Dive into the world of quantum computing and its revolutionary potential.</p>
                    <a href="#" class="text-blue-600 hover:text-blue-700">Read More →</a>
                </div>
                <div class="feature-card bg-white rounded-2xl shadow-md p-8 animate-fade-in-up delay-600">
                    <div class="h-48 bg-gray-200 rounded-lg mb-6"></div>
                    <h3 class="text-xl font-bold mb-4">Cybersecurity Best Practices</h3>
                    <p class="text-gray-600 mb-4">Learn essential cybersecurity tips to protect your digital assets.</p>
                    <a href="#" class="text-blue-600 hover:text-blue-700">Read More →</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Tech Stats Section -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-16 animate-fade-in-up">Why Choose KONEKTA</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="stats-card bg-white/10 backdrop-filter-blur-md rounded-2xl shadow-md p-8 animate-fade-in-up delay-200">
                    <div class="number text-4xl font-bold text-white mb-4">1000+</div>
                    <div class="label text-gray-400">Articles Published</div>
                </div>
                <div class="stats-card bg-white/10 backdrop-filter-blur-md rounded-2xl shadow-md p-8 animate-fade-in-up delay-400">
                    <div class="number text-4xl font-bold text-white mb-4">50+</div>
                    <div class="label text-gray-400">Expert Writers</div>
                </div>
                <div class="stats-card bg-white/10 backdrop-filter-blur-md rounded-2xl shadow-md p-8 animate-fade-in-up delay-600">
                    <div class="number text-4xl font-bold text-white mb-4">1M+</div>
                    <div class="label text-gray-400">Monthly Readers</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-2xl font-bold mb-4">KONEKTA</h3>
                    <p class="text-gray-400">Your trusted source for technology news, reviews, and insights.</p>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-white">About Us</a></li>
                        <li><a href="#" class="hover:text-white">Contact</a></li>
                        <li><a href="#" class="hover:text-white">Privacy Policy</a></li>
                        <li><a href="#" class="hover:text-white">Terms of Service</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Categories</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-white">AI & Machine Learning</a></li>
                        <li><a href="#" class="hover:text-white">Cybersecurity</a></li>
                        <li><a href="#" class="hover:text-white">Hardware</a></li>
                        <li><a href="#" class="hover:text-white">Software</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Newsletter</h4>
                    <p class="text-gray-400 mb-4">Stay connected with our latest articles and insights.</p>
                    <form class="flex">
                        <input type="email" placeholder="Enter your email" class="flex-1 px-4 py-2 rounded-l text-gray-800">
                        <button type="submit" class="px-6 py-2 bg-blue-600 text-white rounded-r hover:bg-blue-700">Subscribe</button>
                    </form>
                </div>
            </div>
            <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; 2025 KONEKTA. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="https://kit.fontawesome.com/your-code.js"></script>
</body>
</html>
