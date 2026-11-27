@extends('layouts.app')

@section('title', 'Submitted Inquiries')

@section('content')
<div class="max-w-4xl mx-auto">
    <!-- Header & Search Bar -->
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-6">
        <h1 class="text-2xl font-bold text-gray-900">
            Message Inbox <span class="text-sm font-medium text-indigo-600 bg-indigo-50 px-2.5 py-0.5 rounded-full ml-1">{{ $inquiries->total() }}</span>
        </h1>

        <form action="{{ route('admin.inquiries') }}" method="GET" class="flex gap-2">
            <input type="text" name="search" value="{{ $search ?? '' }}" placeholder="Search name or email..."
                class="w-64 rounded-lg border border-gray-300 px-3.5 py-2 text-sm text-gray-900 shadow-sm focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 outline-none">
            <button type="submit"
                class="bg-indigo-600 text-white text-sm font-semibold px-4 py-2 rounded-lg hover:bg-indigo-700 transition">
                Search
            </button>
            @if(!empty($search))
                <a href="{{ route('admin.inquiries') }}" class="text-sm text-gray-500 hover:text-gray-700 self-center px-2">Clear</a>
            @endif
        </form>
    </div>

    <!-- Inquiry Cards -->
    <div class="space-y-4">
        @forelse($inquiries as $inquiry)
            <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-200">
                <div class="flex justify-between items-start gap-4">
                    <div>
                        <div class="flex items-center gap-2 mb-1">
                            <span class="text-xs font-semibold uppercase tracking-wide bg-indigo-50 text-indigo-700 px-2.5 py-0.5 rounded">
                                {{ $inquiry->service }}
                            </span>
                            <h3 class="text-lg font-semibold text-gray-900">{{ $inquiry->name }}</h3>
                        </div>
                        <p class="text-sm text-gray-500">
                            {{ $inquiry->email }} &bull; Received {{ $inquiry->created_at->diffForHumans() }}
                        </p>
                    </div>

                    <!-- Delete Button -->
                    <form action="{{ route('admin.inquiries.destroy', $inquiry) }}" method="POST" onsubmit="return confirm('Delete this message?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            class="text-sm font-medium text-red-600 bg-red-50 hover:bg-red-100 px-3 py-1.5 rounded-lg transition">
                            Delete
                        </button>
                    </form>
                </div>

                <p class="mt-4 text-gray-700 whitespace-pre-line">{{ $inquiry->message }}</p>

                @if($inquiry->attachment_path)
                    <div class="mt-4 pt-3 border-t border-gray-100">
                        <a href="{{ asset('storage/' . $inquiry->attachment_path) }}" target="_blank"
                            class="inline-flex items-center text-sm font-semibold text-indigo-600 hover:text-indigo-800">
                            📎 View Uploaded Attachment
                        </a>
                    </div>
                @endif
            </div>
        @empty
            <div class="bg-white p-8 rounded-xl border border-gray-200 text-center text-gray-500">
                No inquiries found.
            </div>
        @endforelse
    </div>

    <!-- Pagination Links -->
    <div class="mt-6">
        {{ $inquiries->withQueryString()->links() }}
    </div>
</div>
@endsection
