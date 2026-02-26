@extends('layouts.app')
@section('content')
<h1>Products</h1>
<a href="{{ route('admin.products.create') }}">Create Product</a>
<table>
<thead><tr><th>Name</th><th>Category</th><th>Price</th><th>Stock</th><th>Actions</th></tr></thead>
<tbody>
@foreach($products as $product)
<tr>
    <td>{{ $product->name }}</td>
    <td>{{ $product->category->name }}</td>
    <td>{{ $product->price }}</td>
    <td>{{ $product->stock }}</td>
    <td>
        <a href="{{ route('admin.products.edit', $product) }}">Edit</a>
        <form method="post" action="{{ route('admin.products.destroy', $product) }}" style="display:inline">@csrf @method('DELETE')<button>Delete</button></form>
    </td>
</tr>
@endforeach
</tbody>
</table>
@endsection
