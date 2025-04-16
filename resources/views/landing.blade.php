@extends('layouts.landing')

@section('content')
<style>
    .animate-fade-in-up {
        animation: fadeInUp 1s ease-out;
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-delay-200 {
        animation-delay: 200ms;
    }

    .animate-delay-400 {
        animation-delay: 400ms;
    }

    .hero-gradient {
        background: linear-gradient(135deg, rgba(var(--primary-rgb), 0.1) 0%, rgba(var(--secondary-rgb), 0.1) 100%);
    }

    .hero-pattern {
        background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%239C92AC' fill-opacity='0.05'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
    }

    .tagline {
        font-size: 0.875rem;
        line-height: 1.25rem;
        color: rgba(55, 65, 81, 0.7);
        margin-bottom: 1rem;
    }

    /* Domain Search Styles */
    .domain-search {
        max-width: 600px;
        margin: 2rem auto 0;
        padding: 1.5rem;
        background: rgba(255, 255, 255, 0.95);
        border-radius: 1rem;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
        backdrop-filter: blur(10px);
    }

    .domain-search input {
        width: 100%;
        padding: 1rem;
        border: 2px solid #e5e7eb;
        border-radius: 0.5rem;
        font-size: 1rem;
        transition: all 0.3s ease;
    }

    .domain-search input:focus {
        outline: none;
        border-color: #0fa6d5;
        box-shadow: 0 0 0 2px rgba(15, 166, 213, 0.1);
    }

    .domain-search button {
        width: 100%;
        margin-top: 1rem;
        padding: 1rem;
        background: #0fa6d5;
        color: white;
        border: none;
        border-radius: 0.5rem;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .domain-search button:hover {
        background: #0c8fad;
    }

    /* Partners Section Styles */
    .partners-container {
        overflow: hidden;
    }

    .partners-wrapper {
        animation: slide 20s linear infinite;
        padding-left: 4rem;
    }

    .partners-wrapper:hover {
        animation-play-state: paused;
    }

    .partner-logo {
        opacity: 0.8;
        transition: opacity 0.3s ease;
    }

    .partner-logo:hover {
        opacity: 1;
    }

    @keyframes slide {
        0% {
            transform: translateX(0);
        }
        100% {
            transform: translateX(-50%);
        }
    }
</style>

<div class="relative">
    <!-- Hero Section -->
    <div class="relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-r from-primary/20 via-secondary/20 to-primary/20 transform -skew-y-6"></div>
        <div class="relative max-w-7xl mx-auto">
            <div class="relative z-10 pb-8 sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
                <main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                    <div class="sm:text-center lg:text-left">
                        <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                            KONEKTA: Connect, Create & <span class="text-primary">Conquer</span>
                        </h1>
                        <h2 class="tagline">
                            Bulk SMS, Web Design & Hosting Services Made Simple
                        </h2>
                        <p class="hero-subtitle mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                        Smart Websites. Powerful Bulk SMS.
                        </p>
                        <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                            <div class="rounded-md shadow">
                                <a href="{{ route('register') }}" class="cta-button w-full flex items-center justify-center px-8 py-3 border border-blur text-base font-medium rounded-md text-black bg-blue-400 hover:bg-blue-500 md:py-4 md:text-lg md:px-10">
                                    Get started
                                </a>
                            </div>
                            <div class="mt-3 sm:mt-0 sm:ml-3">
                                <a href="{{ route('contact') }}" class="cta-button w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-blue-400 bg-white hover:bg-blue-100 md:py-4 md:text-lg md:px-10">
                                    Contact sales
                                </a>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>

    <!-- Domain Search Section -->
    <div class="py-12 bg-gradient-to-br from-gray-50 to-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h2 class="text-3xl font-bold text-gray-900 sm:text-4xl">
                    Find Your Perfect Domain
                </h2>
                <p class="mt-4 text-lg text-gray-500">
                Search and register your desired domain name with us. Get started with your online presence today!
                </p>
            </div>

            <div class="mt-8">
                <div class="domain-search">
                    <form action="{{ route('domain.search') }}" method="GET" class="space-y-4">
                        <div class="relative">
                            <div class="flex items-center">
                                <input type="text" name="domain" placeholder="Enter your desired domain (e.g. example)" class="flex-1 pr-12" required>
                                <select name="extension" class="w-32 ml-2 border border-gray-300 rounded-md bg-white py-2 pl-3 pr-10 text-base focus:outline-none focus:ring-1 focus:ring-primary focus:border-primary">
                                    <option value=".com">.com</option>
                                    <option value=".net">.net</option>
                                    <option value=".org">.org</option>
                                    <option value=".biz">.biz</option>
                                    <option value=".info">.info</option>
                                    <option value=".me">.me</option>
                                    <option value=".co.tz">.co.tz</option>
                                    <option value=".org.tz">.org.tz</option>
                                    <option value=".sc.tz">.sc.tz</option>
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="w-full">
                            Search Domain
                        </button>
                    </form>
                </div>
            </div>

            <!-- Quick Access Buttons -->
            <div class="mt-12 text-center">
                <h3 class="text-xl font-semibold text-gray-900 mb-6">Or get started with our other services:</h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <a href="/pricing#web-design" class="px-6 py-4 bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow">
                        <div class="flex items-center justify-center">
                            <div class="flex-shrink-0">
                                <i class="fas fa-paint-brush text-2xl text-primary mr-3"></i>
                            </div>
                            <div>
                                <h4 class="text-lg font-medium text-gray-900">Web Design</h4>
                                <p class="text-gray-600">Custom websites that convert visitors into customers</p>
                            </div>
                        </div>
                    </a>

                    <a href="/pricing#bulk-sms" class="px-6 py-4 bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow">
                        <div class="flex items-center justify-center">
                            <div class="flex-shrink-0">
                                <i class="fas fa-sms text-2xl text-primary mr-3"></i>
                            </div>
                            <div>
                                <h4 class="text-lg font-medium text-gray-900">Bulk SMS</h4>
                                <p class="text-gray-600">Reach your audience instantly with our reliable SMS service</p>
                            </div>
                        </div>
                    </a>

                    <a href="/pricing#domain-hosting" class="px-6 py-4 bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow">
                        <div class="flex items-center justify-center">
                            <div class="flex-shrink-0">
                                <i class="fas fa-server text-2xl text-primary mr-3"></i>
                            </div>
                            <div>
                                <h4 class="text-lg font-medium text-gray-900">Web Hosting</h4>
                                <p class="text-gray-600">Reliable hosting solutions for your website</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Stats Section -->
   <!-- <div class="py-12 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-4">
                <div class="bg-white p-8 rounded-xl shadow-lg transform hover:scale-105 transition duration-300">
                    <div class="text-4xl font-bold text-primary counter" data-target="1000">500+</div>
                    <div class="mt-2 text-lg text-gray-600">Active Clients</div>
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
    </div> -->

    <!-- Partners Section -->
    <div class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center mb-12">
                <h2 class="text-2xl font-semibold text-primary tracking-wide uppercase mb-4">
                    Trusted Partners
                </h2>
                <p class="text-4xl leading-10 font-extrabold tracking-tight text-gray-900 sm:text-5xl md:text-6xl">
                    Our Partners
                </p>
            </div>

            <div class="overflow-x-hidden pb-4">
                <div class="partners-container relative">
                    <div class="partners-wrapper flex space-x-8 min-w-full">
                        <!-- Partner 1 -->
                        <div class="flex-shrink-0">
                            <img class="partner-logo h-32 w-auto" src="{{ asset('images/partners/evmak.png') }}" alt="EVMak">
                        </div>
                        <!-- Partner 2 -->
                        <div class="flex-shrink-0">
                            <img class="partner-logo h-32 w-auto" src="{{ asset('images/partners/tcra.jpeg') }}" alt="TCRA">
                        </div>
                        <!-- Partner 3 -->
                        <div class="flex-shrink-0">
                            <img class="partner-logo h-32 w-auto" src="{{ asset('images/partners/digifarm.png') }}" alt="Digi Farm">
                        </div>
                        <!-- Partner 4 -->
                        <div class="flex-shrink-0">
                            <img class="partner-logo h-32 w-auto" src="{{ asset('images/partners/crdb.jpeg') }}" alt="CRDB Bank">
                        </div>
                        <!-- Partner 5 -->
                        <div class="flex-shrink-0">
                            <img class="partner-logo h-32 w-auto" src="{{ asset('images/partners/nbc.png') }}" alt="NBC Bank">
                        </div>
                        <!-- Duplicate partners for continuous scrolling -->
                        <div class="flex-shrink-0">
                            <img class="partner-logo h-32 w-auto" src="{{ asset('images/partners/evmak.png') }}" alt="EVMak">
                        </div>
                        <div class="flex-shrink-0">
                            <img class="partner-logo h-32 w-auto" src="{{ asset('images/partners/tcra.jpeg') }}" alt="TCRA">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    // Function to update the counter
    function updateCounter() {
        fetch('/get-views')
            .then(response => response.json())
            .then(data => {
                document.getElementById('pageViews').textContent = data.views;
            })
            .catch(error => console.error('Error:', error));
    }

    // Increment counter when page loads
    fetch('/increment-views')
        .then(response => response.json())
        .then(data => {
            document.getElementById('pageViews').textContent = data.views;
        })
        .catch(error => console.error('Error:', error));

    // Update counter every 30 seconds
    setInterval(updateCounter, 30000);

    // Partners scrolling animation
    document.addEventListener('DOMContentLoaded', function() {
        const partnersWrapper = document.querySelector('.partners-wrapper');
        const partnersContainer = document.querySelector('.partners-container');
        
        function scrollPartners() {
            if (partnersWrapper.scrollWidth > partnersContainer.clientWidth) {
                partnersWrapper.style.transform = `translateX(-${partnersContainer.clientWidth}px)`;
                setTimeout(() => {
                    partnersWrapper.style.transition = 'none';
                    partnersWrapper.style.transform = 'translateX(0)';
                    requestAnimationFrame(() => {
                        partnersWrapper.style.transition = 'transform 30s linear';
                        scrollPartners();
                    });
                }, 30000);
            }
        }

        // Start the scrolling
        partnersWrapper.style.transition = 'transform 30s linear';
        scrollPartners();

        // Reset on window resize
        window.addEventListener('resize', () => {
            partnersWrapper.style.transition = 'none';
            partnersWrapper.style.transform = 'translateX(0)';
            setTimeout(scrollPartners, 100);
        });
    });
</script>
@endpush
@endsection
