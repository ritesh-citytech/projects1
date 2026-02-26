@extends('layouts.app')
@section('content')
<h1>Create Product</h1>
<form method="post" action="{{ route('admin.products.store') }}">@csrf
    <select name="category_id" required>@foreach($categories as $category)<option value="{{ $category->id }}">{{ $category->name }}</option>@endforeach</select>
    <input type="text" name="name" placeholder="Name" required>
    <textarea name="description" placeholder="Description"></textarea>
    <input type="number" step="0.01" name="price" required>
    <input type="number" name="stock" required>
    <select name="is_active"><option value="1">Active</option><option value="0">Inactive</option></select>
    <button type="submit">Save</button>
</form>
@endsection
