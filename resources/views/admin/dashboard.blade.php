@extends('layouts.app')
@section('content')
<h1>Admin Dashboard</h1>
<ul>
    <li>Customers: {{ $customersCount }}</li>
    <li>Categories: {{ $categoriesCount }}</li>
    <li>Products: {{ $productsCount }}</li>
</ul>
<p>
    <a href="{{ route('admin.categories.index') }}">Manage Categories</a> |
    <a href="{{ route('admin.products.index') }}">Manage Products</a>
</p>
<form method="post" action="{{ route('admin.logout') }}">@csrf<button type="submit">Logout</button></form>
@endsection
