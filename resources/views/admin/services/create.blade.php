@extends('admin.layouts.app')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">

 
<h2>Tambah Service</h2>

<a href="{{ route('services.index') }}"
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

<form action="{{ route('services.store') }}"
      method="POST">

 
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
        Description
    </label>

    <textarea name="description"
              class="form-control"
              rows="3">{{ old('description') }}</textarea>

</div>

<div class="mb-3">

    <label class="form-label">
        Icon
    </label>

    <input type="text"
           name="icon"
           class="form-control"
           value="{{ old('icon') }}">

</div>

<div class="mb-4">

    <label class="form-label">
        Detail
    </label>

    <textarea name="detail"
              class="form-control"
              rows="6">{{ old('detail') }}</textarea>

</div>

<button type="submit"
        class="btn btn-primary">
    Simpan Service
</button>
 

</form>

@endsection
