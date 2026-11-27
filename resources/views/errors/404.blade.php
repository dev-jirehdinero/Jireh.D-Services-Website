@extends('layouts.app')

@section('title', '404 - Page Not Found')

@section('content')
<div class="max-w-lg mx-auto my-12 bg-white p-10 rounded-2xl shadow-sm border border-gray-200 text-center">
    <p class="text-6xl font-extrabold text-indigo-600 mb-3">404</p>
    <h1 class="text-2xl font-bold text-gray-900 mb-2">Page Not Found</h1>
    <p class="text-gray-600 mb-8">
        Sorry, the page you are looking for doesn't exist or is no longer available.
    </p>
    <div class="flex justify-center gap-3">
        <a href="{{ route('home') }}"
            class="bg-indigo-600 text-white font-semibold px-5 py-2.5 rounded-lg shadow-sm hover:bg-indigo-700 transition">
            Back to Home
        </a>
        <a href="{{ route('contact') }}"
            class="bg-white text-gray-700 font-semibold px-5 py-2.5 rounded-lg border border-gray-300 hover:bg-gray-50 transition">
            Contact Us
        </a>
    </div>
</div>
@endsection
