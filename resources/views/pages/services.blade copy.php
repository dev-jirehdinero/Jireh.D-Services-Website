@extends('layouts.app')

@section('title', 'Our Services')

@section('content')
    <h1 style="margin-bottom: 1rem;">Our Services</h1>

    @foreach($services as $service)
        <div class="card">
            <h2>{{ $service['name'] }} — <span style="color: #2563eb;">{{ $service['price'] }}</span></h2>
            <p style="margin-top: 0.5rem;">{{ $service['desc'] }}</p>
        </div>
    @endforeach
@endsection