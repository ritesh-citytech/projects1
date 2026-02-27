<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Laravel 12 App' }}</title>
    <style>
        body{font-family:Arial,sans-serif;margin:2rem;} nav a{margin-right:1rem;} table{width:100%;border-collapse:collapse;margin-top:1rem;} td,th{border:1px solid #ddd;padding:.5rem;} .container{max-width:1000px;margin:auto;}
    </style>
</head>
<body>
<div class="container">
    <nav>
        <a href="{{ route('home') }}">Frontend</a>
        <a href="{{ route('admin.dashboard') }}">Admin</a>
        <a href="{{ route('customer.login') }}">Customer Login</a>
    </nav>
    @if(session('status')) <p>{{ session('status') }}</p> @endif
    @yield('content')
</div>
</body>
</html>
