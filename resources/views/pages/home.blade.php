@extends('layouts.app')

@section('content')

<div class="container py-5">
    <div class="row align-items-center">

        <div class="col-md-6 text-start">
            <h1 class="display-4 fw-bold text-primary">
                Welcome to Reyvora Analytics
            </h1>

            <p class="lead mt-3 fw-semibold">
                Empowering Business Through Data
            </p>

            <p class="mt-3">
                Delivering innovative data analytics,
                business intelligence, and strategic digital
                solutions for modern enterprises.
            </p>

            <a href="{{ route('contact') }}" class="btn btn-lg mt-3 text-white fw-semibold"
                style="background: linear-gradient(90deg, #4facfe, #00f2fe); border: none;">
                 Get Started
            </a>

            <a href="/services"
               class="btn btn-lg mt-3 text-white fw-semibold"
               style="background: linear-gradient(90deg, #4facfe, #00f2fe); border: none;">
                Explore Our Services
            </a>
        </div>

        <div class="col-md-6 text-center">
            <img src="{{ asset('images/logo.png') }}"
                 alt="Reyvora Analytics Logo"
                 class="img-fluid"
                 style="max-height: 450px; width: auto;">
        </div>

    </div>
</div>

<hr class="my-5">

<div class="text-center py-2">
    <h2 class="fw-bold text-primary">Company Overview</h2>

    <p class="lead mt-3 container">
        Reyvora Analytics empowers organizations through advanced data strategies,
        technology integration, and actionable business intelligence solutions
        designed to drive sustainable growth.
    </p>
</div>

<hr class="my-5">
<div class="py-3">
    <h2 class="text-center mb-5 fw-bold text-primary">
        Why Choose Us
    </h2>

    <div class="row text-center">
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm h-100 border-0">
                <div class="card-body">
                    <h4 class="fw-bold text-primary">
                        Strategic Analytics
                    </h4>
                    <p class="mt-3">
                        Transforming complex data into clear,
                        strategic business insights.
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card shadow-sm h-100 border-0">
                <div class="card-body">
                    <h4 class="fw-bold text-primary">
                        Digital Innovation
                    </h4>
                    <p class="mt-3">
                        Leveraging modern technologies to
                        optimize digital transformation.
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card shadow-sm h-100 border-0">
                <div class="card-body">
                    <h4 class="fw-bold text-primary">
                        Business Growth
                    </h4>
                    <p class="mt-3">
                        Driving sustainable growth through
                        data-powered operational efficiency.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection