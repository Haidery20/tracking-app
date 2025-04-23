<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KONEKTA Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        :root {
            --primary: 15, 166, 213;
            --primary-rgb: 15, 166, 213;
            --secondary: 12, 142, 173;
            --secondary-rgb: 12, 142, 173;
            --gray-900: 31, 41, 55;
            --gray-800: 47, 55, 69;
            --gray-600: 75, 85, 99;
            --gray-500: 107, 114, 128;
            --gray-400: 156, 163, 175;
            --gray-300: 209, 213, 219;
            --gray-200: 229, 231, 235;
            --gray-100: 243, 244, 246;
            --gray-50: 249, 250, 251;
        }

        .bg-primary {
            background-color: rgb(var(--primary));
        }

        .text-primary {
            color: rgb(var(--primary));
        }

        .bg-primary-light {
            background-color: rgba(var(--primary), 0.1);
        }

        .border-primary {
            border-color: rgb(var(--primary));
        }

        .bg-gradient-to-r {
            background-image: linear-gradient(to right, rgba(var(--primary), 0.1), rgba(var(--secondary), 0.1));
        }
    </style>
</head>
<body class="bg-gray-50">
    <nav class="fixed top-0 left-0 right-0 z-50 bg-white shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <div class="flex">
                    <div class="flex-shrink-0 flex items-center">
                        <a href="{{ route('dashboard') }}" class="flex items-center">
                            <img src="{{ asset('images/Asset7.svg') }}" alt="KONEKTA Logo" class="h-8 w-auto mr-2">
                            <span class="text-xl font-bold text-gray-900">KONEKTA</span>
                        </a>
                    </div>
                </div>

                <div class="hidden sm:ml-6 sm:flex sm:space-x-8">
                    <a href="{{ route('dashboard') }}" class="inline-flex items-center px-1 pt-1 border-b-2 border-primary text-sm font-medium text-gray-900">
                        Dashboard
                    </a>
                    <a href="{{ route('devices.index') }}" class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700">
                        Devices
                    </a>
                    <a href="{{ route('profile.edit') }}" class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700">
                        Profile
                    </a>
                </div>

                <div class="flex items-center">
                    <div class="ml-3 relative">
                        <div>
                            <button type="button" class="bg-white rounded-full flex text-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                <span class="sr-only">Open user menu</span>
                                <img class="h-8 w-8 rounded-full" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}">
                            </button>
                        </div>

                        <div class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button">
                            <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Your Profile</a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="w-full text-left block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">
                                    Sign out
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="pt-16">
        @yield('content')
    </div>
</body>
</html>
