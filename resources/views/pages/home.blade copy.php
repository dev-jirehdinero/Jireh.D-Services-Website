@extends('layouts.app')

@section('title', 'Welcome')

@section('content')
    <div class="card">
        <h1 style="font-size: 2rem; margin-bottom: 0.75rem;">We Build Fast, Modern Websites</h1>
        <p style="margin-bottom: 1.5rem; color: #475569;">
            Welcome to {{ config('app.name') }}. We help small businesses launch reliable web applications powered by Laravel.
        </p>
        <a href="{{ route('contact') }}" class="btn">Get a Free Quote</a>
    </div>
@endsection