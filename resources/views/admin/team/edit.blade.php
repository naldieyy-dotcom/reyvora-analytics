@extends('admin.layouts.app')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">

  
<h2>Edit Team</h2>

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

<form action="{{ route('team.update', $team->id) }}"
      method="POST"
      enctype="multipart/form-data">

  
@csrf
@method('PUT')

<div class="mb-3">

    <label class="form-label">
        Name
    </label>

    <input type="text"
           name="name"
           class="form-control"
           value="{{ old('name', $team->name) }}">

</div>

<div class="mb-3">

    <label class="form-label">
        Role
    </label>

    <input type="text"
           name="role"
           class="form-control"
           value="{{ old('role', $team->role) }}">

</div>

<div class="mb-3">

    <label class="form-label">
        Bio
    </label>

    <textarea name="bio"
              class="form-control"
              rows="5">{{ old('bio', $team->bio) }}</textarea>

</div>

@if($team->photo)

<div class="mb-3">

    <label class="form-label">
        Foto Saat Ini
    </label>

    <br>

    <img src="{{ asset('uploads/team/' . $team->photo) }}"
         width="150"
         class="rounded">

</div>

@endif

<div class="mb-4">

    <label class="form-label">
        Ganti Foto
    </label>

    <input type="file"
           name="photo"
           class="form-control">

</div>

<button type="submit"
        class="btn btn-warning">
    Update Team
</button>
  

</form>

@endsection
