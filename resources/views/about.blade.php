@extends('layouts.landing')

@section('content')
    <!-- Hero Section -->
    <section class="relative bg-gray-100 py-32">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center">
                <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                    About <span class="text-primary">KONEKTA</span>
                </h1>
                <p class="text-xl md:text-2xl leading-relaxed text-gray-600" data-aos="fade-up" data-aos-delay="200">
                    Empowering businesses with innovative tracking solutions
                </p>
            </div>
        </div>
    </section>

    <!-- Mission Section -->
    <section class="py-20">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-3xl md:text-4xl font-bold text-[#0fa6d5] mb-8" data-aos="fade-up">
                    Our Mission
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="bg-white rounded-2xl shadow-lg p-8 transition-all duration-300 hover:scale-105 hover:shadow-xl hover:ring-2 hover:ring-[#0fa6d5] hover:ring-opacity-20" data-aos="fade-up" data-aos-delay="200">
                        <div class="w-16 h-16 bg-gradient-to-r from-[#0fa6d5] to-white rounded-full flex items-center justify-center text-white mb-6">
                            <i class="fas fa-rocket text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-[#0fa6d5] mb-4">Innovation</h3>
                        <p class="text-gray-600">
                            We constantly push boundaries to create cutting-edge tracking solutions that transform how businesses operate.
                        </p>
                    </div>
                    <div class="bg-white rounded-2xl shadow-lg p-8 transition-all duration-300 hover:scale-105 hover:shadow-xl hover:ring-2 hover:ring-[#0fa6d5] hover:ring-opacity-20" data-aos="fade-up" data-aos-delay="400">
                        <div class="w-16 h-16 bg-gradient-to-r from-[#0fa6d5] to-white rounded-full flex items-center justify-center text-white mb-6">
                            <i class="fas fa-shield-alt text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-[#0fa6d5] mb-4">Reliability</h3>
                        <p class="text-gray-600">
                            Our systems are built to be robust, secure, and always available, ensuring your business can rely on us.
                        </p>
                    </div>
                    <div class="bg-white rounded-2xl shadow-lg p-8 transition-all duration-300 hover:scale-105 hover:shadow-xl hover:ring-2 hover:ring-[#0fa6d5] hover:ring-opacity-20" data-aos="fade-up" data-aos-delay="600">
                        <div class="w-16 h-16 bg-gradient-to-r from-[#0fa6d5] to-white rounded-full flex items-center justify-center text-white mb-6">
                            <i class="fas fa-users text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-[#0fa6d5] mb-4">Customer Focus</h3>
                        <p class="text-gray-600">
                            We prioritize understanding your needs and providing solutions that truly make a difference to your business.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section id="team" class="py-20">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-3xl md:text-4xl font-bold text-[#0fa6d5] mb-12" data-aos="fade-up">
                    Meet Our Team
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="bg-white rounded-2xl shadow-lg p-6 transition-all duration-300 hover:scale-105 hover:shadow-xl hover:ring-2 hover:ring-[#0fa6d5] hover:ring-opacity-20" data-aos="fade-up" data-aos-delay="200">
                        <div class="w-40 h-40 bg-gradient-to-r from-[#0fa6d5] to-white rounded-full flex items-center justify-center text-white mb-6">
                            <img src="{{ asset('public/images/Marlyn.jpg') }}" alt="Marlyn" class="w-36 h-36 rounded-full object-cover">
                        </div>
                        <h3 class="text-xl font-semibold text-[#0fa6d5] mb-2">Marlyn</h3>
                        <p class="text-gray-600 mb-4">Founder & CEO</p>
                        <div class="flex justify-center gap-4">
                            <a href="#" class="text-gray-400 hover:text-[#0fa6d5] transition-all duration-300 hover:scale-110">
                                <i class="fab fa-github text-2xl"></i>
                            </a>
                            <a href="#" class="text-gray-400 hover:text-[#0fa6d5] transition-all duration-300 hover:scale-110">
                                <i class="fab fa-twitter text-2xl"></i>
                            </a>
                        </div>
                    </div>
                    <div class="bg-white rounded-2xl shadow-lg p-6 transition-all duration-300 hover:scale-105 hover:shadow-xl hover:ring-2 hover:ring-[#0fa6d5] hover:ring-opacity-20" data-aos="fade-up" data-aos-delay="400">
                        <div class="w-40 h-40 bg-gradient-to-r from-[#0fa6d5] to-white rounded-full flex items-center justify-center text-white mb-6">
                            <img src="{{ asset('images/team/Haidery.jpg') }}" alt="Haidery" class="w-36 h-36 rounded-full object-cover">
                        </div>
                        <h3 class="text-xl font-semibold text-[#0fa6d5] mb-2">Haidery</h3>
                        <p class="text-gray-600 mb-4">CTO</p>
                        <div class="flex justify-center gap-4">
                            <a href="#" class="text-gray-400 hover:text-[#0fa6d5] transition-all duration-300 hover:scale-110">
                                <i class="fab fa-github text-2xl"></i>
                            </a>
                            <a href="#" class="text-gray-400 hover:text-[#0fa6d5] transition-all duration-300 hover:scale-110">
                                <i class="fab fa-twitter text-2xl"></i>
                            </a>
                        </div>
                    </div>
                    <div class="bg-white rounded-2xl shadow-lg p-6 transition-all duration-300 hover:scale-105 hover:shadow-xl hover:ring-2 hover:ring-[#0fa6d5] hover:ring-opacity-20" data-aos="fade-up" data-aos-delay="600">
                        <div class="w-40 h-40 bg-gradient-to-r from-[#0fa6d5] to-white rounded-full flex items-center justify-center text-white mb-6">
                            <img src="{{ asset('images/team/omar.jpg') }}" alt="Omar" class="w-36 h-36 rounded-full object-cover">
                        </div>
                        <h3 class="text-xl font-semibold text-[#0fa6d5] mb-2">Omar</h3>
                        <p class="text-gray-600 mb-4">CFO</p>
                        <div class="flex justify-center gap-4">
                            <a href="#" class="text-gray-400 hover:text-[#0fa6d5] transition-all duration-300 hover:scale-110">
                                <i class="fab fa-github text-2xl"></i>
                            </a>
                            <a href="#" class="text-gray-400 hover:text-[#0fa6d5] transition-all duration-300 hover:scale-110">
                                <i class="fab fa-twitter text-2xl"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="py-20">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-3xl md:text-4xl font-bold text-[#0fa6d5] mb-12" data-aos="fade-up">
                    Our Core Values
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <div class="bg-white rounded-2xl shadow-lg p-8 transition-all duration-300 hover:scale-105 hover:shadow-xl hover:ring-2 hover:ring-[#0fa6d5] hover:ring-opacity-20" data-aos="fade-up" data-aos-delay="200">
                        <div class="w-12 h-12 bg-gradient-to-r from-[#0fa6d5] to-white rounded-full flex items-center justify-center text-white mb-6">
                            <i class="fas fa-lightbulb text-xl"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-[#0fa6d5] mb-4">Innovation</h3>
                        <p class="text-gray-600">
                            We constantly push boundaries to create cutting-edge solutions.
                        </p>
                    </div>
                    <div class="bg-white rounded-2xl shadow-lg p-8 transition-all duration-300 hover:scale-105 hover:shadow-xl hover:ring-2 hover:ring-[#0fa6d5] hover:ring-opacity-20" data-aos="fade-up" data-aos-delay="400">
                        <div class="w-12 h-12 bg-gradient-to-r from-[#0fa6d5] to-white rounded-full flex items-center justify-center text-white mb-6">
                            <i class="fas fa-shield-alt text-xl"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-[#0fa6d5] mb-4">Security</h3>
                        <p class="text-gray-600">
                            Your data is protected with the highest security standards.
                        </p>
                    </div>
                    <div class="bg-white rounded-2xl shadow-lg p-8 transition-all duration-300 hover:scale-105 hover:shadow-xl hover:ring-2 hover:ring-[#0fa6d5] hover:ring-opacity-20" data-aos="fade-up" data-aos-delay="600">
                        <div class="w-12 h-12 bg-gradient-to-r from-[#0fa6d5] to-white rounded-full flex items-center justify-center text-white mb-6">
                            <i class="fas fa-user-friends text-xl"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-[#0fa6d5] mb-4">Collaboration</h3>
                        <p class="text-gray-600">
                            We work together with our clients to achieve their goals.
                        </p>
                    </div>
                    <div class="bg-white rounded-2xl shadow-lg p-8 transition-all duration-300 hover:scale-105 hover:shadow-xl hover:ring-2 hover:ring-[#0fa6d5] hover:ring-opacity-20" data-aos="fade-up" data-aos-delay="800">
                        <div class="w-12 h-12 bg-gradient-to-r from-[#0fa6d5] to-white rounded-full flex items-center justify-center text-white mb-6">
                            <i class="fas fa-award text-xl"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-[#0fa6d5] mb-4">Excellence</h3>
                        <p class="text-gray-600">
                            We strive for excellence in everything we do.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- AOS Initialization -->
    @push('scripts')
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true
        });
    </script>
    @endpush
@endsection