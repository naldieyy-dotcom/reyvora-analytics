@extends('layouts.app')

@section('content')

<div class="text-center py-5">
    <h1 class="fw-bold text-primary">
        About Reyvora Analytics
    </h1>

    <p class="lead mt-3">
        Empowering businesses through data-driven innovation,
        strategic analytics, and digital transformation.
    </p>
</div>

<hr class="my-3">

<div class="row align-items-center py-4">
    <div class="col-md-4 text-center">
        <img src="{{ asset('images/profile.jpg') }}"
             alt="Founder Profile"
             class="rounded-circle shadow"
             width="220"
             height="220"
             style="object-fit: cover;">
    </div>

    <div class="col-md-8">
        <h2 class="fw-bold text-primary">
            Reynaldi Adi Rukmana
        </h2>

        <h5 class="text-muted">
            Founder & Data Strategy Specialist
        </h5>

        <p class="mt-3">
            Reynaldi Adi Rukmana is passionate about leveraging
            data analytics, business intelligence, and technology
            solutions to help organizations improve operational
            efficiency and strategic growth.
        </p>

        <p>
            Through Reyvora Analytics, he focuses on delivering
            impactful digital solutions for modern business challenges.
        </p>
    </div>
</div>

<hr class="my-3">

<div class="text-center py-5">
    <h2 class="fw-bold text-primary">
        Our Mission
    </h2>

    <p class="lead mt-4 container">
        To transform business potential into measurable success
        through advanced analytics, innovation, and strategic
        technology solutions.
    </p>
</div>

<hr class="my-3">

<div class="py-5"
     style="background-color: #f8f9fa; border-radius: 12px;">

    <h2 class="text-center fw-bold text-primary mb-5">
        Our Core Values
    </h2>

    <div class="row text-center">

        <div class="col-md-4 mb-4">
            <div class="px-4">
                <h4 class="fw-bold text-primary">
                    Innovation
                </h4>

                <p class="mt-3">
                    We continuously embrace innovation
                    to deliver cutting-edge business solutions.
                </p>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="px-4">
                <h4 class="fw-bold text-primary">
                    Reliability
                </h4>

                <p class="mt-3">
                    We provide trusted, data-driven strategies
                    with professionalism and integrity.
                </p>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="px-4">
                <h4 class="fw-bold text-primary">
                    Strategic Growth
                </h4>

                <p class="mt-3">
                    We focus on sustainable business growth
                    through smart analytics and technology.
                </p>
            </div>
        </div>

    </div>
</div>

<hr class="my-3">

<div class="py-5">
    <h2 class="text-center fw-bold text-primary mb-5">
        Meet Our Experts
    </h2>

    <div class="row justify-content-center">
        @foreach($team as $member)
            <div class="col-md-5 col-lg-4 mb-4">
                <div class="card shadow-sm border-0 h-100 text-center">
                    <div class="card-body py-4 px-4">

                        <h4 class="fw-bold text-primary mb-2">
                            {{ $member->name }}
                        </h4>

                        <h6 class="text-muted mb-3">
                            {{ $member->position }}
                        </h6>

                        <hr>

                        <p class="mb-0">
                            {{ $member->bio }}
                        </p>

                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection