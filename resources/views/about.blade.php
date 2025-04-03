@extends('layouts.app')

@section('title', 'About Us - Tracking App')

@section('content')
<div class="max-w-6xl mx-auto px-4">
    <div class="py-12">
        <h1 class="text-4xl font-bold text-center text-gray-800 mb-4">About Us</h1>
        <p class="text-xl text-center text-gray-600 mb-12">Your trusted partner in tracking solutions</p>

        <!-- Mission Section -->
        <div class="bg-white p-8 rounded-lg shadow-md mb-12">
            <h2 class="text-2xl font-semibold mb-4">Our Mission</h2>
            <p class="text-gray-600 mb-6">
                At Tracking App, our mission is to provide reliable, efficient, and user-friendly tracking solutions that help businesses and individuals keep track of their valuable assets. We believe in leveraging technology to make tracking simple and accessible to everyone.
            </p>
        </div>

        <!-- Values Section -->
        <div class="grid md:grid-cols-3 gap-8 mb-12">
            <div class="bg-white p-6 rounded-lg shadow-md">
                <div class="text-[#4A5D4B] text-4xl mb-4">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h3 class="text-xl font-semibold mb-2">Reliability</h3>
                <p class="text-gray-600">We understand the importance of consistent and accurate tracking data for your business operations.</p>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-md">
                <div class="text-[#4A5D4B] text-4xl mb-4">
                    <i class="fas fa-lock"></i>
                </div>
                <h3 class="text-xl font-semibold mb-2">Security</h3>
                <p class="text-gray-600">Your data security is our top priority. We implement industry-standard security measures to protect your information.</p>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-md">
                <div class="text-[#4A5D4B] text-4xl mb-4">
                    <i class="fas fa-users"></i>
                </div>
                <h3 class="text-xl font-semibold mb-2">Customer Focus</h3>
                <p class="text-gray-600">We are committed to providing exceptional customer service and support to ensure your success.</p>
            </div>
        </div>

        <!-- Team Section -->
        <div class="bg-white p-8 rounded-lg shadow-md">
            <h2 class="text-2xl font-semibold mb-8 text-center">Our Team</h2>
            <div class="grid md:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="w-32 h-32 rounded-full bg-gray-200 mx-auto mb-4"></div>
                    <h3 class="font-semibold">John Doe</h3>
                    <p class="text-gray-600">CEO</p>
                </div>
                <div class="text-center">
                    <div class="w-32 h-32 rounded-full bg-gray-200 mx-auto mb-4"></div>
                    <h3 class="font-semibold">Jane Smith</h3>
                    <p class="text-gray-600">CTO</p>
                </div>
                <div class="text-center">
                    <div class="w-32 h-32 rounded-full bg-gray-200 mx-auto mb-4"></div>
                    <h3 class="font-semibold">Mike Johnson</h3>
                    <p class="text-gray-600">Head of Operations</p>
                </div>
                <div class="text-center">
                    <div class="w-32 h-32 rounded-full bg-gray-200 mx-auto mb-4"></div>
                    <h3 class="font-semibold">Sarah Williams</h3>
                    <p class="text-gray-600">Customer Success</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
