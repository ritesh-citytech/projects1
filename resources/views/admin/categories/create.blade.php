@extends('layouts.app')
@section('content')
<h1>Create Category</h1>
<form method="post" action="{{ route('admin.categories.store') }}">@csrf
    <input type="text" name="name" placeholder="Name" required>
    <textarea name="description" placeholder="Description"></textarea>
    <button type="submit">Save</button>
</form>
@endsection
