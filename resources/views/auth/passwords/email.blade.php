@extends('layouts.landing')

@section('content')
<div class="min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full space-y-8">
        <div class="text-center">
            <h2 class="mt-6 text-3xl font-extrabold text-gray-900">
                Reset Password
            </h2>
            <p class="mt-2 text-sm text-gray-600">
                Enter your email address and we'll send you a link to reset your password
            </p>
        </div>

        <div class="mt-8 bg-white py-8 px-4 shadow-xl rounded-lg sm:px-10">
            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif

            <form class="space-y-6" action="{{ route('password.email') }}" method="POST">
                @csrf

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email address</label>
                    <div class="mt-1">
                        <input id="email" name="email" type="email" autocomplete="email" required 
                            class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-primary focus:border-primary sm:text-sm"
                            placeholder="Enter your email">
                    </div>
                </div>

                <div>
                    <button type="submit" 
                        class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-primary hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary transition duration-150 ease-in-out">
                        Send Password Reset Link
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
