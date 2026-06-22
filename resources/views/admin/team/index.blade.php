@extends('admin.layouts.app')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">

  
<h2>Team Management</h2>

<a href="{{ route('team.create') }}"
   class="btn btn-primary">
    Tambah Team
</a>
  

</div>

@if(session('success'))

<div class="alert alert-success">
    {{ session('success') }}
</div>

@endif

<table class="table table-striped table-hover align-middle">

  
<thead>

<tr>
    <th>ID</th>
    <th>Photo</th>
    <th>Name</th>
    <th>Role</th>
    <th width="180">Action</th>
</tr>

</thead>

<tbody>

@foreach($teams as $team)

<tr>

    <td>{{ $team->id }}</td>

    <td>

        @if($team->photo)

        <img src="{{ asset('uploads/team/' . $team->photo) }}"
             width="80"
             class="rounded">

        @else

        <span class="text-muted">
            No Photo
        </span>

        @endif

    </td>

    <td>{{ $team->name }}</td>

    <td>{{ $team->role }}</td>

    <td>

        <a href="{{ route('team.edit', $team->id) }}"
           class="btn btn-warning btn-sm">
            Edit
        </a>

        <form action="{{ route('team.destroy', $team->id) }}"
              method="POST"
              style="display:inline">

            @csrf
            @method('DELETE')

            <button type="submit"
                    class="btn btn-danger btn-sm"
                    onclick="return confirm('Hapus anggota tim ini?')">

                Delete

            </button>

        </form>

    </td>

</tr>

@endforeach

</tbody>
  

</table>

@endsection
