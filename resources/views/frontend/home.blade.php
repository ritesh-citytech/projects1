@extends('layouts.app')
@section('content')
<h1>Frontend Store</h1>
<p>Customer-facing product catalog.</p>
<table>
    <thead><tr><th>Name</th><th>Category</th><th>Price</th><th>Stock</th></tr></thead>
    <tbody>
    @foreach($products as $product)
        <tr>
            <td>{{ $product->name }}</td>
            <td>{{ $product->category->name }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->stock }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
{{ $products->links() }}
@endsection
