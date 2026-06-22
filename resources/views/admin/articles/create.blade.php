@extends('admin.layouts.app')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">

 
<h2>Tambah Artikel</h2>

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

<form action="{{ route('articles.store') }}"
      method="POST"
      enctype="multipart/form-data">

 
@csrf

<div class="mb-3">

    <label class="form-label">
        Title
    </label>

    <input type="text"
           name="title"
           class="form-control"
           value="{{ old('title') }}">

</div>

<div class="mb-3">

    <label class="form-label">
        Slug
    </label>

    <input type="text"
           name="slug"
           class="form-control"
           value="{{ old('slug') }}">

</div>

<div class="mb-3">

    <label class="form-label">
        Author
    </label>

    <input type="text"
           name="author"
           class="form-control"
           value="{{ old('author') }}">

</div>

<div class="mb-3">

    <label class="form-label">
        Content
    </label>

    <textarea name="content"
              class="form-control"
              rows="6">{{ old('content') }}</textarea>

</div>

<div class="mb-4">

    <label class="form-label">
        Image
    </label>

    <input type="file"
           name="image"
           class="form-control">

</div>

<button type="submit"
        class="btn btn-primary">
    Simpan Artikel
</button>
 

</form>

@endsection
