<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- AI Assistant Styles -->
    <style>
        .ai-assistant {
            position: fixed;
            bottom: 2rem;
            right: 2rem;
            z-index: 50;
        }
        
        .ai-button {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: linear-gradient(135deg, #1a365d, #4a5d23);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }
        
        .ai-button:hover {
            transform: scale(1.1);
            box-shadow: 0 6px 8px rgba(0, 0, 0, 0.15);
        }
        
        .ai-chat {
            position: fixed;
            bottom: 5rem;
            right: 2rem;
            width: 350px;
            height: 500px;
            background: white;
            border-radius: 1rem;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            display: none;
            flex-direction: column;
            overflow: hidden;
        }
        
        .ai-chat.active {
            display: flex;
        }
        
        .ai-chat-header {
            padding: 1rem;
            background: linear-gradient(135deg, #1a365d, #4a5d23);
            color: white;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        
        .ai-chat-body {
            flex: 1;
            padding: 1rem;
            overflow-y: auto;
        }
        
        .ai-chat-input {
            padding: 1rem;
            border-top: 1px solid #e5e7eb;
            display: flex;
            gap: 0.5rem;
        }
        
        .ai-chat-input input {
            flex: 1;
            padding: 0.5rem;
            border: 1px solid #e5e7eb;
            border-radius: 0.5rem;
            outline: none;
        }
        
        .ai-chat-input button {
            padding: 0.5rem 1rem;
            background: #4a5d23;
            color: white;
            border: none;
            border-radius: 0.5rem;
            cursor: pointer;
        }
        
        .ai-message {
            margin-bottom: 1rem;
            padding: 0.5rem 1rem;
            border-radius: 0.5rem;
            max-width: 80%;
        }
        
        .ai-message.user {
            background: #f3f4f6;
            margin-left: auto;
        }
        
        .ai-message.assistant {
            background: #e5e7eb;
            margin-right: auto;
        }

        /* Navigation Styles */
        .nav-gradient {
            background: linear-gradient(135deg, #1a365d, #4a5d23);
        }
        
        .nav-link {
            color: white;
            transition: all 0.3s ease;
        }
        
        .nav-link:hover {
            color: #a5b4fc;
        }
        
        .nav-button {
            background: white;
            color: #1a365d;
            transition: all 0.3s ease;
        }
        
        .nav-button:hover {
            background: #f3f4f6;
        }
    </style>
</head>
<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        <!-- Navigation -->
        <nav class="fixed top-4 left-1/2 transform -translate-x-1/2 w-[95%] max-w-7xl mx-auto z-50">
            <div class="nav-gradient rounded-full shadow-lg">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex justify-between h-16">
                        <div class="flex">
                            <div class="flex-shrink-0 flex items-center">
                                <a href="/" class="text-2xl font-bold text-white">KONEKTA</a>
                            </div>
                            <div class="hidden sm:ml-6 sm:flex sm:space-x-8">
                                <a href="{{ route('features') }}" class="text-gray-200 hover:text-white inline-flex items-center px-1 pt-1 border-b-2 border-transparent hover:border-white transition-colors duration-300">Features</a>
                                <a href="{{ route('pricing') }}" class="text-gray-200 hover:text-white inline-flex items-center px-1 pt-1 border-b-2 border-transparent hover:border-white transition-colors duration-300">Pricing</a>
                                <a href="{{ route('about') }}" class="text-gray-200 hover:text-white inline-flex items-center px-1 pt-1 border-b-2 border-transparent hover:border-white transition-colors duration-300">About</a>
                                <a href="{{ route('contact') }}" class="text-gray-200 hover:text-white inline-flex items-center px-1 pt-1 border-b-2 border-transparent hover:border-white transition-colors duration-300">Contact</a>
                            </div>
                        </div>
                        <div class="hidden sm:ml-6 sm:flex sm:items-center space-x-4">
                            <a href="{{ route('login') }}" class="text-gray-200 hover:text-white transition-colors duration-300">
                                Sign in
                            </a>
                            <a href="{{ route('register') }}" class="bg-white hover:bg-gray-100 text-primary px-4 py-2 rounded-full transition-colors duration-300">
                                Get started
                            </a>
                        </div>
                        <!-- Mobile menu button -->
                        <div class="sm:hidden flex items-center">
                            <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-200 hover:text-white hover:bg-white/10 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                                <span class="sr-only">Open main menu</span>
                                <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Add padding to the top of the main content to account for the fixed header -->
        <div class="pt-24">
            @yield('content')
        </div>

        <!-- Footer -->
        <footer class="relative">
            <!-- Curved Shape -->
            <div class="absolute top-0 left-0 w-full overflow-hidden">
                <svg class="relative block w-full h-12" viewBox="0 0 1440 100" preserveAspectRatio="none">
                    <path class="fill-current text-primary" d="M0,0 C150,100 350,0 500,50 C650,100 800,0 1000,50 C1200,100 1300,0 1440,50 L1440,100 L0,100 Z"></path>
                </svg>
            </div>

            <div class="nav-gradient pt-16">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-8 py-12">
                        <!-- Company Info -->
                        <div class="col-span-1">
                            <h3 class="text-white text-lg font-semibold mb-4">KONEKTA</h3>
                            <p class="text-gray-200 mb-4">Advanced vehicle tracking solutions for modern fleet management.</p>
                            <div class="flex space-x-4">
                                <a href="#" class="text-gray-200 hover:text-secondary transition-colors">
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                    </svg>
                                </a>
                                <a href="#" class="text-gray-200 hover:text-secondary transition-colors">
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                                    </svg>
                                </a>
                                <a href="#" class="text-gray-200 hover:text-secondary transition-colors">
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                                    </svg>
                                </a>
                            </div>
                        </div>

                        <!-- Quick Links -->
                        <div class="col-span-1">
                            <h3 class="text-white text-lg font-semibold mb-4">Quick Links</h3>
                            <ul class="space-y-2">
                                <li><a href="{{ route('features') }}" class="text-gray-200 hover:text-secondary transition-colors">Features</a></li>
                                <li><a href="{{ route('pricing') }}" class="text-gray-200 hover:text-secondary transition-colors">Pricing</a></li>
                                <li><a href="{{ route('about') }}" class="text-gray-200 hover:text-secondary transition-colors">About Us</a></li>
                                <li><a href="{{ route('contact') }}" class="text-gray-200 hover:text-secondary transition-colors">Contact</a></li>
                            </ul>
                        </div>

                        <!-- Contact Info -->
                        <div class="col-span-1">
                            <h3 class="text-white text-lg font-semibold mb-4">Contact Info</h3>
                            <ul class="space-y-2">
                                <li class="flex items-center text-gray-200">
                                    <svg class="w-5 h-5 mr-2 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                    </svg>
                                    hello@konekta.com
                                </li>
                                <li class="flex items-center text-gray-200">
                                    <svg class="w-5 h-5 mr-2 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                    </svg>
                                    +1 (555) 123-4567
                                </li>
                                <li class="flex items-center text-gray-200">
                                    <svg class="w-5 h-5 mr-2 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    </svg>
                                    123 Business Ave, Suite 100
                                </li>
                            </ul>
                        </div>

                        <!-- Newsletter -->
                        <div class="col-span-1">
                            <h3 class="text-white text-lg font-semibold mb-4">Newsletter</h3>
                            <p class="text-gray-200 mb-4">Subscribe to our newsletter for updates and offers.</p>
                            <form class="flex">
                                <input type="email" placeholder="Your email" class="px-4 py-2 rounded-l-lg focus:outline-none focus:ring-2 focus:ring-secondary w-full">
                                <button type="submit" class="bg-secondary hover:bg-secondary/90 text-white px-4 py-2 rounded-r-lg transition-colors">
                                    Subscribe
                                </button>
                            </form>
                        </div>
                    </div>

                    <!-- Bottom Bar -->
                    <div class="border-t border-gray-700 py-6">
                        <div class="flex flex-col md:flex-row justify-between items-center">
                            <p class="text-gray-200 text-sm">&copy; {{ date('Y') }} KONEKTA. All rights reserved.</p>
                            <div class="flex space-x-6 mt-4 md:mt-0">
                                <a href="#" class="text-gray-200 hover:text-secondary text-sm transition-colors">Privacy Policy</a>
                                <a href="#" class="text-gray-200 hover:text-secondary text-sm transition-colors">Terms of Service</a>
                                <a href="#" class="text-gray-200 hover:text-secondary text-sm transition-colors">Cookie Policy</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <!-- AI Assistant Widget -->
    <div class="ai-assistant">
        <div class="ai-chat" id="aiChat">
            <div class="ai-chat-header">
                <div class="flex items-center gap-2">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                    <span>AI Assistant</span>
                </div>
                <button onclick="toggleChat()" class="text-white">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="ai-chat-body" id="chatBody">
                <div class="ai-message assistant">
                    Hello! I'm your AI assistant. How can I help you today?
                </div>
            </div>
            <div class="ai-chat-input">
                <input type="text" id="userInput" placeholder="Type your message..." onkeypress="handleKeyPress(event)">
                <button onclick="sendMessage()">Send</button>
            </div>
        </div>
        <div class="ai-button" onclick="toggleChat()">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
            </svg>
        </div>
    </div>

    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true,
            mirror: false
        });

        // AI Assistant Functions
        function toggleChat() {
            const chat = document.getElementById('aiChat');
            chat.classList.toggle('active');
        }

        function handleKeyPress(event) {
            if (event.key === 'Enter') {
                sendMessage();
            }
        }

        function sendMessage() {
            const input = document.getElementById('userInput');
            const message = input.value.trim();
            
            if (message) {
                // Add user message to chat
                addMessage(message, 'user');
                input.value = '';
                
                // Simulate AI response (replace with actual AI integration)
                setTimeout(() => {
                    const responses = [
                        "I can help you with information about our vehicle tracking solutions.",
                        "Would you like to know more about our pricing plans?",
                        "I can assist you with setting up your account or troubleshooting.",
                        "Let me help you find the right tracking solution for your needs."
                    ];
                    const randomResponse = responses[Math.floor(Math.random() * responses.length)];
                    addMessage(randomResponse, 'assistant');
                }, 1000);
            }
        }

        function addMessage(text, sender) {
            const chatBody = document.getElementById('chatBody');
            const messageDiv = document.createElement('div');
            messageDiv.className = `ai-message ${sender}`