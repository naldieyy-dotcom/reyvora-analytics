@extends('admin.layouts.app')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">

  
<h2>Edit Artikel</h2>

<a href="{{ route('articles.index') }}"
   class="btn btn-secondary">
    Kembali
</a>
  

</div>

@if ($errors->any())

<div class="alert alert-danger">

  
<ul class="mb-0">

    @foreach ($errors->all() as $error)

    <li>{{ $error }}</li>

    @endforeach

</ul>
  

</div>

@endif

<form action="{{ route('articles.update', $article->id) }}"
      method="POST"
      enctype="multipart/form-data">

  
@csrf
@method('PUT')

<div class="mb-3">

    <label class="form-label">
        Title
    </label>

    <input type="text"
           name="title"
           class="form-control"
           value="{{ old('title', $article->title) }}">

</div>

<div class="mb-3">

    <label class="form-label">
        Slug
    </label>

    <input type="text"
           name="slug"
           class="form-control"
           value="{{ old('slug', $article->slug) }}">

</div>

<div class="mb-3">

    <label class="form-label">
        Author
    </label>

    <input type="text"
           name="author"
           class="form-control"
           value="{{ old('author', $article->author) }}">

</div>

<div class="mb-3">

    <label class="form-label">
        Content
    </label>

    <textarea name="content"
              class="form-control"
              rows="6">{{ old('content', $article->content) }}</textarea>

</div>

@if($article->image)

<div class="mb-3">

    <label class="form-label">
        Gambar Saat Ini
    </label>

    <br>

    <img src="{{ asset('uploads/articles/' . $article->image) }}"
         width="150"
         class="rounded">

</div>

@endif

<div class="mb-4">

    <label class="form-label">
        Ganti Gambar
    </label>

    <input type="file"
           name="image"
           class="form-control">

</div>

<button type="submit"
        class="btn btn-warning">
    Update Artikel
</button>
  

</form>

@endsection
