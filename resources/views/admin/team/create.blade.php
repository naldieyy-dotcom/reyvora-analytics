@extends('admin.layouts.app')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">

  
<h2>Tambah Team</h2>

<a href="{{ route('team.index') }}"
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

<form action="{{ route('team.store') }}"
      method="POST"
      enctype="multipart/form-data">

  
@csrf

<div class="mb-3">

    <label class="form-label">
        Name
    </label>

    <input type="text"
           name="name"
           class="form-control"
           value="{{ old('name') }}">

</div>

<div class="mb-3">

    <label class="form-label">
        Role
    </label>

    <input type="text"
           name="role"
           class="form-control"
           value="{{ old('role') }}">

</div>

<div class="mb-3">

    <label class="form-label">
        Bio
    </label>

    <textarea name="bio"
              class="form-control"
              rows="5">{{ old('bio') }}</textarea>

</div>

<div class="mb-4">

    <label class="form-label">
        Photo
    </label>

    <input type="file"
           name="photo"
           class="form-control">

</div>

<button type="submit"
        class="btn btn-primary">
    Simpan Team
</button>
  

</form>

@endsection
