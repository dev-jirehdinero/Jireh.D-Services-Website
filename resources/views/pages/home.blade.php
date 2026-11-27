@extends('layouts.app')

@section('title', 'Home - JDS')

@section('content')
<div class="space-y-12">
    <!-- Hero Section -->
    <div class="bg-white rounded-2xl shadow-sm border border-gray-200 p-8 sm:p-12 text-center">
        <span class="inline-block text-xs font-semibold uppercase tracking-wider text-indigo-600 bg-indigo-50 px-3 py-1 rounded-full mb-4">
            Modern Web Solutions
        </span>
        <h1 class="text-3xl sm:text-5xl font-extrabold text-gray-900 tracking-tight mb-4">
            We Build Fast, Reliable Websites
        </h1>
        <p class="max-w-2xl mx-auto text-lg text-gray-600 mb-8">
            Welcome to {{ config('app.name') }}. We help businesses and creators launch clean, scalable web applications powered by Laravel.
        </p>
        <div class="flex flex-col sm:flex-row justify-center gap-4">
            <a href="{{ route('contact') }}"
                class="bg-indigo-600 text-white font-semibold px-6 py-3 rounded-lg shadow-sm hover:bg-indigo-700 transition">
                Get a Free Quote
            </a>
            <a href="{{ route('services') }}"
                class="bg-white text-gray-700 font-semibold px-6 py-3 rounded-lg border border-gray-300 hover:bg-gray-50 transition">
                Explore Services
            </a>
        </div>
    </div>

    <!-- Feature Highlights -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-200">
            <div class="w-10 h-10 bg-indigo-50 text-indigo-600 rounded-lg flex items-center justify-center font-bold text-lg mb-4">
                ⚡
            </div>
            <h2 class="text-lg font-bold text-gray-900 mb-2">High Performance</h2>
            <p class="text-gray-600 text-sm leading-relaxed">
                Optimized backend architecture and clean frontend assets so your pages load instantaneously on every device.
            </p>
        </div>

        <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-200">
            <div class="w-10 h-10 bg-indigo-50 text-indigo-600 rounded-lg flex items-center justify-center font-bold text-lg mb-4">
                🔒
            </div>
            <h2 class="text-lg font-bold text-gray-900 mb-2">Secure by Default</h2>
            <p class="text-gray-600 text-sm leading-relaxed">
                Built with CSRF protection, strict input validation, and authenticated admin controls out of the box.
            </p>
        </div>

        <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-200">
            <div class="w-10 h-10 bg-indigo-50 text-indigo-600 rounded-lg flex items-center justify-center font-bold text-lg mb-4">
                📱
            </div>
            <h2 class="text-lg font-bold text-gray-900 mb-2">Mobile Responsive</h2>
            <p class="text-gray-600 text-sm leading-relaxed">
                Thoughtfully styled layouts that adapt seamlessly from desktop monitors down to smartphones.
            </p>
        </div>
    </div>
</div>
@endsection
