@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
<div class="max-w-xl mx-auto bg-white p-8 rounded-xl shadow-sm border border-gray-200">
    <h1 class="text-2xl font-bold text-gray-900 mb-2">Contact Us</h1>
    <p class="text-gray-600 mb-6">Have a question or project idea? Fill out the form below.</p>

    @if ($errors->any())
    <div class="mb-6 p-4 bg-red-50 border border-red-300 text-red-700 rounded-lg text-sm">
        <ul class="list-disc list-inside space-y-1">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('contact.store') }}" method="POST" enctype="multipart/form-data" class="space-y-5">
        @csrf

        <!-- Name -->
        <div>
            <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Your Name *</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}" placeholder="Jane Doe" required
                class="w-full rounded-lg border border-gray-300 px-3.5 py-2.5 text-gray-900 shadow-sm focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 outline-none">
            @error('name')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <!-- Email -->
        <div>
            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address *</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}" placeholder="jane@example.com" required
                class="w-full rounded-lg border border-gray-300 px-3.5 py-2.5 text-gray-900 shadow-sm focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 outline-none">
            @error('email')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <!-- Service Needed -->
        <div>
            <label for="service" class="block text-sm font-medium text-gray-700 mb-1">Service Needed *</label>
            <select name="service" id="service" required
                class="w-full rounded-lg border border-gray-300 bg-white px-3.5 py-2.5 text-gray-900 shadow-sm focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 outline-none">
                <option value="">Choose a topic</option>
                <option value="Web Development" {{ old('service') == 'Web Development' ? 'selected' : '' }}>Web Development</option>
                <option value="UI/UX Design" {{ old('service') == 'UI/UX Design' ? 'selected' : '' }}>UI/UX Design</option>
                <option value="SEO & Marketing" {{ old('service') == 'SEO & Marketing' ? 'selected' : '' }}>SEO & Marketing</option>
                <option value="Other" {{ old('service') == 'Other' ? 'selected' : '' }}>Other</option>
            </select>
            @error('service')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <!-- Message -->
        <div>
            <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Message *</label>
            <textarea name="message" id="message" rows="4" placeholder="Tell us about your project..." required
                class="w-full rounded-lg border border-gray-300 px-3.5 py-2.5 text-gray-900 shadow-sm focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 outline-none">{{ old('message') }}</textarea>
            @error('message')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <!-- Optional File Attachment -->
        <div>
            <label for="attachment" class="block text-sm font-medium text-gray-700 mb-1">Optional Screenshot or Brief (JPG, PNG, PDF - Max 2MB)</label>
            <input type="file" name="attachment" id="attachment"
                class="w-full text-sm text-gray-600 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100">
            @error('attachment')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <!-- Submit Button -->
        <button type="submit"
            class="w-full bg-indigo-600 text-white font-semibold py-2.5 px-4 rounded-lg shadow-sm hover:bg-indigo-700 transition">
            Send Message
        </button>
    </form>
</div>
@endsection
