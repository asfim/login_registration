<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h2>Dashboard</h2>
        
        <p>Welcome, <strong>{{ Auth::user()->name }}</strong>!</p>
        
        <div class="user-details" style="margin-top: 1rem; border-top: 1px solid #eee; padding-top: 1rem;">
            <p><strong>Email:</strong> {{ Auth::user()->email }}</p>
            <p><strong>Phone:</strong> {{ Auth::user()->phone }}</p>
            <p><strong>Date of Birth:</strong> {{ Auth::user()->date_of_birth }}</p>
        </div>

        <form action="{{ route('logout') }}" method="POST" style="margin-top: 2rem;">
            @csrf
            <button type="submit" style="background: #e53e3e;">Logout</button>
        </form>
    </div>
</body>
</html>
