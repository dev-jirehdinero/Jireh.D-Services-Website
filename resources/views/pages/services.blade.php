@extends('layouts.app')

@section('title', 'Our Services - JDS')

@section('content')
<div class="space-y-8">
    <div class="text-center max-w-2xl mx-auto">
        <h1 class="text-3xl font-bold text-gray-900 mb-3">Our Services</h1>
        <p class="text-gray-600">
            Tailored web solutions designed to help your business attract customers and streamline operations.
        </p>
    </div>

    <!-- Services Grid -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Service 1 -->
        <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-200 flex flex-col justify-between">
            <div>
                <span class="inline-block text-xs font-semibold text-indigo-600 bg-indigo-50 px-2.5 py-1 rounded mb-3">
                    Development
                </span>
                <h2 class="text-xl font-bold text-gray-900 mb-2">Web Development</h2>
                <p class="text-gray-600 text-sm mb-4">
                    Custom websites, admin dashboards, and database-driven web apps built with modern Laravel.
                </p>
                <ul class="space-y-2 text-sm text-gray-600 mb-6">
                    <li>✓ Custom Laravel &amp; PHP Applications</li>
                    <li>✓ Database Architecture &amp; APIs</li>
                    <li>✓ Secure Admin Panels</li>
                </ul>
            </div>
            <a href="{{ route('contact') }}"
                class="block text-center bg-indigo-50 text-indigo-700 font-semibold py-2.5 rounded-lg hover:bg-indigo-100 transition">
                Request Quote
            </a>
        </div>

        <!-- Service 2 -->
        <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-200 flex flex-col justify-between">
            <div>
                <span class="inline-block text-xs font-semibold text-indigo-600 bg-indigo-50 px-2.5 py-1 rounded mb-3">
                    Design
                </span>
                <h2 class="text-xl font-bold text-gray-900 mb-2">UI/UX Design</h2>
                <p class="text-gray-600 text-sm mb-4">
                    Clean, accessible user interfaces that build trust and make navigating your site effortless.
                </p>
                <ul class="space-y-2 text-sm text-gray-600 mb-6">
                    <li>✓ Responsive Mobile-First Layouts</li>
                    <li>✓ Wireframing &amp; Prototyping</li>
                    <li>✓ Tailwind CSS Component Systems</li>
                </ul>
            </div>
            <a href="{{ route('contact') }}"
                class="block text-center bg-indigo-50 text-indigo-700 font-semibold py-2.5 rounded-lg hover:bg-indigo-100 transition">
                Request Quote
            </a>
        </div>

        <!-- Service 3 -->
        <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-200 flex flex-col justify-between">
            <div>
                <span class="inline-block text-xs font-semibold text-indigo-600 bg-indigo-50 px-2.5 py-1 rounded mb-3">
                    Growth
                </span>
                <h2 class="text-xl font-bold text-gray-900 mb-2">SEO &amp; Optimization</h2>
                <p class="text-gray-600 text-sm mb-4">
                    Technical performance tuning and search visibility improvements to grow organic traffic.
                </p>
                <ul class="space-y-2 text-sm text-gray-600 mb-6">
                    <li>✓ Core Web Vitals Speed Tuning</li>
                    <li>✓ On-Page Semantic SEO</li>
                    <li>✓ Ongoing Maintenance &amp; Backups</li>
                </ul>
            </div>
            <a href="{{ route('contact') }}"
                class="block text-center bg-indigo-50 text-indigo-700 font-semibold py-2.5 rounded-lg hover:bg-indigo-100 transition">
                Request Quote
            </a>
        </div>
    </div>
</div>
@endsection
