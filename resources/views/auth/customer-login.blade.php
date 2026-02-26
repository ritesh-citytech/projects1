@extends('layouts.app')
@section('content')
<h1>Customer Login</h1>
<form method="post" action="{{ route('customer.login.submit') }}">@csrf
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit">Login</button>
</form>
<p><a href="{{ route('customer.register') }}">Create account</a></p>
@endsection
