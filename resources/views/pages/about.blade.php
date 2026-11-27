@extends('layouts.app')

@section('title', 'About Us - JDS')

@section('content')
<div class="max-w-4xl mx-auto space-y-8">
    <!-- Main Story Card -->
    <div class="bg-white p-8 sm:p-10 rounded-2xl shadow-sm border border-gray-200">
        <h1 class="text-3xl font-bold text-gray-900 mb-4">About Us</h1>
        <p class="text-gray-600 leading-relaxed mb-4">
            We are a passionate team of developers and designers dedicated to turning ideas into dependable digital products. Whether you are launching your first online presence or scaling an existing platform, we focus on clean code, clear communication, and measurable results.
        </p>
        <p class="text-gray-600 leading-relaxed">
            Every project we deliver is crafted with long-term maintainability in mind—giving you full ownership, fast load times, and an intuitive admin experience.
        </p>

        <!-- Key Stats -->
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 mt-8 pt-8 border-t border-gray-100 text-center">
            <div>
                <p class="text-3xl font-extrabold text-indigo-600">50+</p>
                <p class="text-sm text-gray-500 mt-1">Projects Launched</p>
            </div>
            <div>
                <p class="text-3xl font-extrabold text-indigo-600">99.9%</p>
                <p class="text-sm text-gray-500 mt-1">Uptime Reliability</p>
            </div>
            <div>
                <p class="text-3xl font-extrabold text-indigo-600">24/7</p>
                <p class="text-sm text-gray-500 mt-1">Dedicated Support</p>
            </div>
        </div>
    </div>

    <!-- Call to Action -->
    <div class="bg-indigo-600 text-white p-8 rounded-2xl shadow-sm flex flex-col sm:flex-row items-center justify-between gap-4">
        <div>
            <h2 class="text-xl font-bold">Ready to start your project?</h2>
            <p class="text-indigo-100 text-sm mt-1">Send us your project details and we will get back to you within 24 hours.</p>
        </div>
        <a href="{{ route('contact') }}"
            class="bg-white text-indigo-600 font-semibold px-5 py-2.5 rounded-lg hover:bg-indigo-50 transition whitespace-nowrap">
            Contact Us
        </a>
    </div>
</div>
@endsection
