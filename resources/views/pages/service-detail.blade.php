@extends('layouts.app')

@section('content')

<div class="container py-5" style="max-width:800px;">

    <h1 class="fw-bold text-primary mb-4">
        {{ $service->title }}
    </h1>

    <p class="lead">
        {{ $service->description }}
    </p>

    <p class="mt-4">
        {{ $service->detail }}
    </p>

    <div class="mt-4">
    <h5 class="fw-bold">What We Offer</h5>

    <ul class="mt-3">
        @if($service->id == 1)
            <li>Interactive dashboards</li>
            <li>Real-time data visualization</li>
            <li>Data storytelling</li>
        @elseif($service->id == 2)
            <li>Machine learning models</li>
            <li>Trend forecasting</li>
            <li>Risk analysis</li>
        @elseif($service->id == 3)
            <li>KPI dashboards</li>
            <li>Business reporting systems</li>
            <li>Data integration</li>
        @endif
    </ul>
</div>

<div class="mt-4">
    <h5 class="fw-bold">Why Choose This Service</h5>

    <p>
        @if($service->id == 1)
            Helps businesses understand complex data quickly through clear visuals.
        @elseif($service->id == 2)
            Enables companies to predict future trends and make proactive decisions.
        @elseif($service->id == 3)
            Provides a complete overview of business performance for better strategy.
        @endif
    </p>
</div>

    <a href="{{ route('services') }}" class="btn btn-secondary mt-4">
        Back to Services
    </a>

</div>

@endsection