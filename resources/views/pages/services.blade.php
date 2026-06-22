@extends('layouts.app')

@section('content')

<div class="text-center py-5 fade-up">
    <h1 class="fw-bold text-primary">Our Services</h1>

    <p class="lead mt-3">
        Helping businesses unlock valuable insights
        through strategic data solutions.
    </p>
</div>

<hr class="my-5">

<div class="row">
    @foreach($services as $service)
        <div class="col-md-4 mb-4">
            <div class="card card-hover shadow-sm h-100 border-0 fade-up overflow-hidden">

                <div style="overflow:hidden;">
                    <img src="{{ asset('images/project' . $loop->iteration . '.jpg') }}"
                         class="card-img-top service-img"
                         alt="Service Image"
                         style="height: 220px; object-fit: cover; transition:0.4s;">
                </div>

                <div class="card-body text-center">
                    <h4 class="fw-bold text-primary">
                        {{ $service->title }}
                    </h4>

                    <p class="mt-3 text-muted">
                        {{ $service->description }}
                    </p>

                    <a href="{{ route('services.show', $service->id) }}"
                       class="btn btn-primary mt-3 px-4">
                        Learn More →
                    </a>
                </div>

            </div>
        </div>
    @endforeach
</div>

<style>
.card-hover:hover .service-img {
    transform: scale(1.08);
}

.btn-primary {
    border-radius: 30px;
    transition: 0.3s;
}

.btn-primary:hover {
    transform: translateY(-2px);
}
</style>

@endsection