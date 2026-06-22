@extends('admin.layouts.app')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">

  
<h2>Articles Management</h2>

<a href="{{ route('articles.create') }}"
   class="btn btn-primary">
    Tambah Artikel
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
    <th>Image</th>
    <th>Title</th>
    <th>Author</th>
    <th width="180">Action</th>
</tr>

</thead>

<tbody>

@foreach($articles as $article)

<tr>

    <td>{{ $article->id }}</td>

    <td>

        @if($article->image)

        <img src="{{ asset('uploads/articles/' . $article->image) }}"
             width="80"
             class="rounded">

        @endif

    </td>

    <td>{{ $article->title }}</td>

    <td>{{ $article->author }}</td>

    <td>

        <a href="{{ route('articles.edit', $article->id) }}"
           class="btn btn-warning btn-sm">
            Edit
        </a>

        <form action="{{ route('articles.destroy', $article->id) }}"
              method="POST"
              style="display:inline">

            @csrf
            @method('DELETE')

            <button type="submit"
                    class="btn btn-danger btn-sm"
                    onclick="return confirm('Hapus artikel ini?')">

                Delete

            </button>

        </form>

    </td>

</tr>

@endforeach

</tbody>
  

</table>

@endsection
