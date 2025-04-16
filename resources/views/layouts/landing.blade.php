<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'KONEKTA') }}</title>

    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">
    <link rel="alternate icon" type="image/png" href="{{ asset('favicon.png') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

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
            background: linear-gradient(135deg, #0fa6d5, #ffffff);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            font-size: 1.5rem;
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
            background: linear-gradient(135deg, #0fa6d5, #ffffff);
            color: white;
            display: flex;
            align-items: center;
            justify-content: space-between;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .ai-chat-header h3 {
            font-size: 1.1rem;
            font-weight: 600;
        }
        
        .ai-chat-body {
            flex: 1;
            padding: 1rem;
            overflow-y: auto;
            background: #f9fafb;
        }
        
        .ai-chat-input {
            padding: 1rem;
            border-top: 1px solid #e5e7eb;
            display: flex;
            gap: 0.5rem;
            background: white;
        }
        
        .ai-chat-input input {
            flex: 1;
            padding: 0.75rem;
            border: 1px solid #e5e7eb;
            border-radius: 0.5rem;
            outline: none;
            font-size: 0.95rem;
        }
        
        .ai-chat-input button {
            padding: 0.75rem 1.25rem;
            background: linear-gradient(135deg, #0fa6d5, #ffffff);
            color: white;
            border: none;
            border-radius: 0.5rem;
            cursor: pointer;
            font-weight: 500;
            transition: all 0.2s ease;
        }
        
        .ai-chat-input button:hover {
            opacity: 0.9;
        }
        
        .ai-message {
            margin-bottom: 1rem;
            padding: 0.75rem 1rem;
            border-radius: 0.75rem;
            max-width: 80%;
            font-size: 0.95rem;
            line-height: 1.4;
        }
        
        .ai-message.user {
            background: #f3f4f6;
            margin-left: auto;
            border-bottom-right-radius: 0.25rem;
        }
        
        .ai-message.assistant {
            background: #e5e7eb;
            margin-right: auto;
            border-bottom-left-radius: 0.25rem;
        }

        /* Typing Indicator */
        .typing-indicator {
            display: flex;
            gap: 4px;
            padding: 8px 12px;
            background: #e5e7eb;
            border-radius: 0.75rem;
            max-width: 80%;
            margin-right: auto;
        }
        
        .typing-indicator span {
            width: 8px;
            height: 8px;
            background: #0fa6d5;
            border-radius: 50%;
            animation: typing 1s infinite;
        }
        
        .typing-indicator span:nth-child(2) {
            animation-delay: 0.2s;
        }
        
        .typing-indicator span:nth-child(3) {
            animation-delay: 0.4s;
        }
        
        @keyframes typing {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-5px); }
        }
    </style>

    <!-- Theme Styles -->
    <style>
        :root {
            --primary-color: #0fa6d5;
            --secondary-color: #ffffff;
            --text-color: #000000;
            --bg-color: #ffffff;
            --surface-color: #f3f4f6;
            --border-color: #e5e7eb;
            --card-bg: #ffffff;
            --card-border: #e5e7eb;
            --input-bg: #ffffff;
            --input-border: #e5e7eb;
            --footer-bg: #0fa6d5;
            --footer-text: #f3f4f6;
        }

        .dark {
            --primary-color: #3b82f6;
            --secondary-color: #10b981;
            --text-color: #f3f4f6;
            --bg-color: #111827;
            --surface-color: #1f2937;
            --border-color: #374151;
            --card-bg: #1f2937;
            --card-border: #374151;
            --input-bg: #1f2937;
            --input-border: #374151;
            --footer-bg: #0f172a;
            --footer-text: #f3f4f6;
        }

        body {
            color: var(--text-color);
            background-color: var(--bg-color);
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .nav-gradient {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
        }

        .ai-button {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
        }

        .ai-chat {
            background: var(--surface-color);
            border: 1px solid var(--border-color);
        }

        .ai-message.user {
            background: var(--primary-color);
            color: white;
        }

        .ai-message.assistant {
            background: var(--surface-color);
            color: var(--text-color);
        }

        .ai-chat-input input {
            background: var(--input-bg);
            color: var(--text-color);
            border: 1px solid var(--input-border);
        }

        .ai-chat-input button {
            background: var(--primary-color);
            color: white;
        }

        /* Card Styles */
        .card {
            background-color: var(--card-bg);
            border: 1px solid var(--card-border);
            color: var(--text-color);
        }

        /* Footer Styles */
        footer {
            background: var(--footer-bg);
            color: var(--footer-text);
        }

        /* Input Styles */
        input, textarea, select {
            background-color: var(--input-bg);
            color: var(--text-color);
            border-color: var(--input-border);
        }

        /* Theme Toggle Styles */
        .theme-toggle {
            position: relative;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .theme-toggle:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }

        .theme-toggle svg {
            width: 20px;
            height: 20px;
            transition: all 0.3s ease;
        }

        .theme-toggle .sun {
            display: none;
        }

        .theme-toggle .moon {
            display: block;
        }

        .dark .theme-toggle .sun {
            display: block;
        }

        .dark .theme-toggle .moon {
            display: none;
        }

        /* Dark Mode Specific Styles */
        .dark .bg-white {
            background-color: var(--surface-color);
        }

        .dark .text-gray-800 {
            color: var(--text-color);
        }

        .dark .border-gray-200 {
            border-color: var(--border-color);
        }

        .dark .hover\:bg-gray-50:hover {
            background-color: var(--surface-color);
        }

        .dark .hover\:text-gray-900:hover {
            color: var(--text-color);
        }
    </style>
</head>
<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        <!-- Navigation -->
        <nav class="fixed top-4 left-1/2 transform -translate-x-1/2 z-50 bg-gradient-to-r from-[#0fa6d5] to-white shadow-2xl rounded-full w-[95%] max-w-7xl">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 backdrop-filter-md backdrop-blur-lg rounded-2xl">
                <div class="flex justify-between h-16">
                    <div class="flex items-center">
                        <a href="{{ route('landing') }}" class="text-2xl font-bold text-black">KONEKTA</a>
                    </div>

                    <!-- Desktop Menu -->
                    <div class="hidden sm:flex sm:items-center sm:space-x-4">
                        <a href="/" class="text-black hover:text-[#0fa6d5] px-3 py-2 rounded-md text-sm font-medium transition-colors duration-300">Services</a>
                        <a href="{{ route('pricing') }}" class="text-black hover:text-[#0fa6d5] px-3 py-2 rounded-md text-sm font-medium transition-colors duration-300">Pricing</a>
                        <a href="{{ route('about') }}" class="text-black hover:text-[#0fa6d5] px-3 py-2 rounded-md text-sm font-medium transition-colors duration-300">About</a>
                        <a href="{{ route('contact') }}" class="text-black hover:text-[#0fa6d5] px-3 py-2 rounded-md text-sm font-medium transition-colors duration-300">Contact</a>
                        <a href="{{ route('community') }}" class="text-black hover:text-[#0fa6d5] px-3 py-2 rounded-md text-sm font-medium transition-colors duration-300">Community</a>
                    </div>

                    <!-- Desktop Auth Buttons -->
                    <div class="hidden sm:flex sm:items-center sm:space-x-4">
                        <button class="theme-toggle p-2 rounded-full hover:bg-gray-100/50 transition-colors duration-300">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                            </svg>
                        </button>
                        <a href="{{ route('login') }}" class="text-black hover:text-[#0fa6d5] px-3 py-2 rounded-md text-sm font-medium transition-colors duration-300">
                            Sign in
                        </a>
                        <a href="{{ route('register') }}" class="bg-[#0fa6d5] hover:bg-[#0c8dbd] text-black px-4 py-2 rounded-full text-sm font-medium transition-colors duration-300">
                            Get started
                        </a>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Hero Section -->
        <!--<div class="relative overflow-hidden">
            <div class="absolute inset-0 bg-gradient-to-r from-primary/80 to-secondary/80"></div>
            <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 sm:py-32">
                <div class="flex flex-col lg:flex-row items-center justify-between gap-12">
                    <div class="lg:w-1/2 space-y-8">
                        <h1 class="text-4xl sm:text-5xl md:text-6xl font-bold text-white leading-tight whitespace-nowrap">
                            Track Your Fleet with Precision
                        </h1>
                        <p class="text-xl text-gray-100 max-w-2xl">
                            Real-time vehicle tracking and fleet management solutions for modern businesses.
                        </p>
                        <div class="flex flex-col sm:flex-row gap-4">
                            <a href="{{ route('register') }}" class="inline-flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-full text-[#0fa6d5] bg-white hover:bg-gray-100 transition-colors duration-300">
                                Get Started
                            </a>
                            <a href="/" class="inline-flex items-center justify-center px-8 py-3 border border-white text-base font-medium rounded-full text-white hover:bg-white/10 transition-colors duration-300">
                                Learn More
                            </a>
                        </div>
                    </div>
                    <div class="lg:w-1/2">
                        <img src="{{ asset('images/dashboard-preview.png') }}" alt="Dashboard Preview" class="w-full h-auto rounded-lg shadow-2xl">
                    </div>
                </div>
            </div>
        </div> -->

        <!-- Add padding to the top of the main content to account for the fixed header -->
        <div class="pt-0">
            @yield('content')
        </div>

        <!-- Footer -->
        <footer class="bg-gradient-to-r from-[#0fa6d5] to-white text-black py-12">
            <div class="container mx-auto px-4">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                    <div>
                        <h3 class="text-xl font-semibold mb-4">KONEKTA</h3>
                        <p class="text-gray-600">
                            Tracking solutions for modern businesses
                        </p>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold mb-4">Quick Links</h3>
                        <ul class="space-y-2">
                            <li><a href="{{ route('landing') }}" class="text-gray-600 hover:text-[#0fa6d5]">Home</a></li>
                            <li><a href="{{ route('about') }}" class="text-gray-600 hover:text-[#0fa6d5]">About</a></li>
                            <li><a href="{{ route('features') }}" class="text-gray-600 hover:text-[#0fa6d5]">Features</a></li>
                            <li><a href="{{ route('pricing') }}" class="text-gray-600 hover:text-[#0fa6d5]">Pricing</a></li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold mb-4">Support</h3>
                        <ul class="space-y-2">
                            <li><a href="{{ route('contact') }}" class="text-gray-600 hover:text-[#0fa6d5]">Contact Us</a></li>
                            <li><a href="#" class="text-gray-600 hover:text-[#0fa6d5]">FAQ</a></li>
                            <li><a href="#" class="text-gray-600 hover:text-[#0fa6d5]">Documentation</a></li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold mb-4">Follow Us</h3>
                        <div class="flex space-x-4">
                            <a href="#" class="text-gray-600 hover:text-[#0fa6d5]">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="text-gray-600 hover:text-[#0fa6d5]">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="text-gray-600 hover:text-[#0fa6d5]">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="mt-8 border-t border-gray-200 pt-8 text-center">
                    <p class="text-gray-600">
                        &copy; {{ date('Y') }} KONEKTA. All rights reserved.
                    </p>
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
                    <span>Konekta</span>
                </div>
                <button onclick="toggleChat()" class="text-white">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="ai-chat-body" id="chatBody">
                <div class="ai-message assistant">
                    Hello! I'm Konekta, your digital assistant. I can help you in English or Swahili. How can I assist you today?
                </div>
            </div>
            <div class="ai-chat-input">
                <input type="text" id="userInput" placeholder="Ask Konekta anything... (English or Swahili)" onkeypress="handleKeyPress(event)">
                <button onclick="sendMessage()">
                    <i class="fas fa-paper-plane"></i>
                </button>
            </div>
        </div>
        <div class="ai-button" onclick="toggleChat()">
            <i class="fas fa-comment-dots"></i>
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
                
                // Show typing indicator
                const typingIndicator = document.createElement('div');
                typingIndicator.className = 'ai-message assistant typing-indicator';
                typingIndicator.innerHTML = '<span></span><span></span><span></span>';
                document.getElementById('chatBody').appendChild(typingIndicator);
                
                // Scroll to bottom
                const chatBody = document.getElementById('chatBody');
                chatBody.scrollTop = chatBody.scrollHeight;
                
                // Process the message and generate response
                setTimeout(() => {
                    // Remove typing indicator
                    typingIndicator.remove();
                    
                    // Generate appropriate response based on message content
                    let response = generateResponse(message);
                    addMessage(response, 'assistant');
                    
                    // Scroll to bottom again
                    chatBody.scrollTop = chatBody.scrollHeight;
                }, 1500);
            }
        }

        function generateResponse(message) {
            const lowerMessage = message.toLowerCase();
            
            // Check for Swahili greetings
            if (lowerMessage.includes('habari') || lowerMessage.includes('salaam') || lowerMessage.includes('jambo')) {
                return "Salaam! Nimekuwa hapa kusaidia. Unahitaji kujua nini kuhusu huduma zetu za kuzungumza?";
            }
            
            // Check for common keywords and provide relevant responses
            if (lowerMessage.includes('hello') || lowerMessage.includes('hi') || lowerMessage.includes('hey')) {
                return "Hello! I'm Konekta, your digital assistant. How can I help you with our vehicle tracking solutions today?";
            } else if (lowerMessage.includes('price') || lowerMessage.includes('cost') || lowerMessage.includes('plan') || 
                      lowerMessage.includes('bei') || lowerMessage.includes('bei ya') || lowerMessage.includes('takwimu')) {
                return "Tunapewa takwimu tofauti tofauti kulingana na haja yako. Unaweza kujua zaidi kuhusu takwimu zetu kwenye ukurasa wa bei. Je, nina kusaidia kuhusu takwimu zetu?";
            } else if (lowerMessage.includes('feature') || lowerMessage.includes('track') || lowerMessage.includes('monitor') || 
                      lowerMessage.includes('sifa') || lowerMessage.includes('kuzungumza') || lowerMessage.includes('kuzungumza')) {
                return "Platform yetu ina huduma za kuzungumza mara kwa mara, optimizimau ya mchango, geofencing, na kuzungumza wa mchakato. Je, unahitaji kujua zaidi kuhusu sifa yoyote halisi?";
            } else if (lowerMessage.includes('help') || lowerMessage.includes('support') || 
                      lowerMessage.includes('msaada') || lowerMessage.includes('msaidizi')) {
                return "Nimekuwa hapa kusaidia! Unaweza kumpokea msaada yetu kwenye ukurasa wa wasiliana, au nina kusaidia kuhusu maswali ya asili kuhusu huduma zetu.";
            } else if (lowerMessage.includes('account') || lowerMessage.includes('register') || lowerMessage.includes('sign up') || 
                      lowerMessage.includes('hesabu') || lowerMessage.includes('sajili') || lowerMessage.includes('jina')) {
                return "Unaweza kusajili hesabu kwa kutembelea 'Get Started' kwenye menu ya uendeshaji. Je, nina kusaidia kwenye prosesi ya sajili?";
            } else {
                return "Nimekuelewa unahitaji kujua kuhusu " + message + ". Huduma zetu za kuzungumza zinaweza kusaidia kuzungumza mazungumzo yako. Je, unahitaji kujua zaidi kuhusu sifa zetu au bei?";
            }
        }

        function addMessage(text, sender) {
            const chatBody = document.getElementById('chatBody');
            const messageDiv = document.createElement('div');
            messageDiv.className = `ai-message ${sender}`;
            messageDiv.textContent = text;
            chatBody.appendChild(messageDiv);
        }

        // Add typing indicator styles
        const style = document.createElement('style');
        style.textContent = `
            .typing-indicator {
                display: flex;
                gap: 4px;
                padding: 8px 12px;
            }
            .typing-indicator span {
                width: 8px;
                height: 8px;
                background: #0fa6d5;
                border-radius: 50%;
                animation: typing 1s infinite;
            }
            .typing-indicator span:nth-child(2) {
                animation-delay: 0.2s;
            }
            .typing-indicator span:nth-child(3) {
                animation-delay: 0.4s;
            }
            @keyframes typing {
                0%, 100% { transform: translateY(0); }
                50% { transform: translateY(-5px); }
            }
        `;
        document.head.appendChild(style);

        // Initialize chat with welcome message
        document.addEventListener('DOMContentLoaded', () => {
            const chatBody = document.getElementById('chatBody');
            const welcomeMessage = document.createElement('div');
            welcomeMessage.className = 'ai-message assistant';
            welcomeMessage.textContent = 'Hello! I can assist you in English or Swahili. How can I help you today?';
            chatBody.appendChild(welcomeMessage);
        });
    </script>

    <!-- Theme Toggle Script -->
    <script>
        // Function to set theme
        function setTheme(theme) {
            if (theme === 'dark') {
                document.documentElement.classList.add('dark');
                localStorage.setItem('theme', 'dark');
            } else {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('theme', 'light');
            }
        }

        // Function to toggle theme
        function toggleTheme() {
            if (document.documentElement.classList.contains('dark')) {
                setTheme('light');
            } else {
                setTheme('dark');
            }
        }

        // Initialize theme
        function initTheme() {
            const savedTheme = localStorage.getItem('theme');
            const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
            
            if (savedTheme) {
                setTheme(savedTheme);
            } else if (prefersDark) {
                setTheme('dark');
            } else {
                setTheme('light');
            }
        }

        // Add event listener to theme toggle button
        document.getElementById('themeToggle').addEventListener('click', toggleTheme);

        // Initialize theme on page load
        document.addEventListener('DOMContentLoaded', initTheme);

        // Listen for system theme changes
        window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', (e) => {
            if (!localStorage.getItem('theme')) {
                setTheme(e.matches ? 'dark' : 'light');
            }
        });
    </script>
</body>
</html>