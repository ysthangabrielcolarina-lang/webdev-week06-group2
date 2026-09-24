@extends('layouts.app')

@section('content')

    <h2>Contact / Our Services</h2>
    <p>Here are the services we offer:</p>

    <ul>
        @foreach ($services as $service)
            <li>{{ $service }}</li>
        @endforeach
    </ul>

    @if (count($services) > 3)
        <p><strong>Note:</strong> We offer a wide range of services!</p>
    @else
        <p>Contact us to learn more about what we offer.</p>
    @endif

@endsection