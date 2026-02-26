@extends('layouts.app')
@section('content')
<h1>Edit Product</h1>
<form method="post" action="{{ route('admin.products.update', $product) }}">@csrf @method('PUT')
    <select name="category_id" required>@foreach($categories as $category)<option value="{{ $category->id }}" @selected($product->category_id===$category->id)>{{ $category->name }}</option>@endforeach</select>
    <input type="text" name="name" value="{{ $product->name }}" required>
    <textarea name="description">{{ $product->description }}</textarea>
    <input type="number" step="0.01" name="price" value="{{ $product->price }}" required>
    <input type="number" name="stock" value="{{ $product->stock }}" required>
    <select name="is_active"><option value="1" @selected($product->is_active)>Active</option><option value="0" @selected(!$product->is_active)>Inactive</option></select>
    <button type="submit">Update</button>
</form>
@endsection
