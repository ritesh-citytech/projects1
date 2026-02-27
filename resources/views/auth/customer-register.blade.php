@extends('layouts.app')
@section('content')
<h1>Customer Register</h1>
<form method="post" action="{{ route('customer.register.submit') }}">@csrf
    <input type="text" name="name" placeholder="Name" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>
    <input type="password" name="password_confirmation" placeholder="Confirm Password" required>
    <button type="submit">Register</button>
</form>
@endsection
