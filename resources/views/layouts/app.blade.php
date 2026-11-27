<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Laravel Website')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 text-gray-800 flex flex-col min-h-screen">

    <!-- Public & Admin Navigation Bar -->
    <nav class="bg-white shadow-sm border-b border-gray-200">
        <div class="max-w-6xl mx-auto px-4 py-4 flex justify-between items-center">
            <a href="{{ route('home') }}" class="text-xl font-bold text-indigo-600">Jireh.D Services</a>

            <div class="flex items-center space-x-6">
                <a href="{{ route('home') }}" class="hover:text-indigo-600 {{ request()->routeIs('home') ? 'text-indigo-600 font-semibold' : '' }}">Home</a>
                <a href="{{ route('about') }}" class="hover:text-indigo-600 {{ request()->routeIs('about') ? 'text-indigo-600 font-semibold' : '' }}">About</a>
                <a href="{{ route('services') }}" class="hover:text-indigo-600 {{ request()->routeIs('services') ? 'text-indigo-600 font-semibold' : '' }}">Services</a>
                <a href="{{ route('contact') }}" class="hover:text-indigo-600 {{ request()->routeIs('contact') ? 'text-indigo-600 font-semibold' : '' }}">Contact</a>

                @auth
                    <a href="{{ route('admin.inquiries') }}" class="text-sm bg-indigo-600 text-white px-3 py-1.5 rounded hover:bg-indigo-700">
                        Admin Inbox
                    </a>
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button type="submit" class="text-sm text-gray-500 hover:text-red-600">Logout</button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-500 hover:text-indigo-600">Admin Login</a>
                @endauth
            </div>
        </div>
    </nav>

    <!-- Main Page Content -->
    <main class="flex-grow max-w-6xl w-full mx-auto px-4 py-8">
        @if(session('success'))
            <div class="mb-6 p-4 bg-green-100 border border-green-300 text-green-800 rounded-lg">
                {{ session('success') }}
            </div>
        @endif

        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-white border-t border-gray-200 py-6 text-center text-sm text-gray-500">
        &copy; {{ date('Y') }} Jireh.D Services . Built with Laravel.
    </footer>

</body>
</html>
