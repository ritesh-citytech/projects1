@extends('layouts.app')
@section('content')
<h1>Admin Login</h1>
<form method="post" action="{{ route('admin.login.submit') }}">@csrf
    <input type="email" name="email" placeholder="Admin Email" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit">Login</button>
</form>
@endsection
