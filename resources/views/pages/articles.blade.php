@extends('layouts.app')

@section('content')

<div class="text-center py-5">
    <h1 class="fw-bold text-primary">Our Articles</h1>
    <p class="lead mt-3">
        Insights, trends, and strategies in data analytics and business intelligence.
    </p>
</div>

<hr class="my-5">

<div class="row">
    @foreach($articles as $article)
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm h-100 border-0">

                <!-- WRAPPER TAMBAHAN BIAR GAMBAR AJA YANG ZOOM -->
                <div class="img-wrapper">
                    <img src="{{ asset('images/' . $article->image) }}"
                         class="card-img-top article-img"
                         alt="Article Image">
                </div>

                <div class="card-body">
                    <h5 class="fw-bold text-primary">
                        {{ $article->title }}
                    </h5>

                    <p class="mt-3">
                        {{ \Illuminate\Support\Str::limit($article->content, 100) }}
                    </p>

                    <a href="{{ route('articles.show', $article->id) }}"
                       class="btn btn-primary mt-2">
                        Read More →
                    </a>
                </div>

            </div>
        </div>
    @endforeach
</div>

<style>
/* BUNGKUS GAMBAR */
.img-wrapper {
    overflow: hidden;
}

/* STYLE GAMBAR */
.article-img {
    height: 220px;
    object-fit: cover;
    transition: 0.4s;
}

/* HOVER = ZOOM GAMBAR AJA */
.card:hover .article-img {
    transform: scale(1.1);
}

/* BUTTON */
.btn-primary {
    border-radius: 30px;
    transition: 0.3s;
}

.btn-primary:hover {
    transform: translateY(-2px);
}
</style>

@endsection