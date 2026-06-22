@extends('admin.layouts.app')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">

 
<h2>Services Management</h2>

<div>

    <a href="{{ route('services.pdf') }}"
       class="btn btn-success">
        Download PDF
    </a>

    <a href="{{ route('services.create') }}"
       class="btn btn-primary">
        Tambah Service
    </a>

</div>
 

</div>

@if(session('success'))

<div class="alert alert-success">
    {{ session('success') }}
</div>

@endif

<div class="card shadow-sm">

 
<div class="card-body">

    <table class="table table-striped table-hover">

        <thead>

        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>
            <th width="180">Action</th>
        </tr>

        </thead>

        <tbody>

        @foreach($services as $service)

        <tr>

            <td>{{ $service->id }}</td>

            <td>{{ $service->title }}</td>

            <td>{{ $service->description }}</td>

            <td>

                <a href="{{ route('services.edit', $service->id) }}"
                   class="btn btn-warning btn-sm">
                    Edit
                </a>

                <form action="{{ route('services.destroy', $service->id) }}"
                      method="POST"
                      style="display:inline">

                    @csrf
                    @method('DELETE')

                    <button class="btn btn-danger btn-sm"
                            onclick="return confirm('Hapus service ini?')">
                        Delete
                    </button>

                </form>

            </td>

        </tr>

        @endforeach

        </tbody>

    </table>

</div>
 

</div>

@endsection
