@extends('layouts.app')
@section('content')
<h1>Categories</h1>
<a href="{{ route('admin.categories.create') }}">Create Category</a>
<table>
<thead><tr><th>Name</th><th>Slug</th><th>Actions</th></tr></thead>
<tbody>
@foreach($categories as $category)
<tr>
    <td>{{ $category->name }}</td>
    <td>{{ $category->slug }}</td>
    <td>
        <a href="{{ route('admin.categories.edit', $category) }}">Edit</a>
        <form method="post" action="{{ route('admin.categories.destroy', $category) }}" style="display:inline">@csrf @method('DELETE')<button>Delete</button></form>
    </td>
</tr>
@endforeach
</tbody>
</table>
@endsection
