@extends('layouts.app')

@section('content')

<div class="container py-5">

    <h1 class="fw-bold text-primary mb-4">
        {{ $article->title }}
    </h1>

    <small class="text-muted d-block mb-3">
        By {{ $article->author }} | {{ $article->created_at->format('d M Y') }}
    </small>

    <img src="{{ asset('images/' . $article->image) }}"
         class="img-fluid mb-4"
         style="max-height:400px; object-fit:cover;">

    <p>
        {{ $article->content }}
    </p>

    <a href="{{ route('articles') }}" class="btn btn-secondary mt-3">
        Back to Articles
    </a>

</div>

@endsection