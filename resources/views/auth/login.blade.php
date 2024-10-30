<!-- resources/views/auth/login.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <h2>Login</h2>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('login') }}" method="POST">
        @csrf
        <label for="email">Email</label>
        <input type="email" name="email" id="email" required><br>

        <label for="password">Password</label>
        <input type="password" name="password" id="password" required><br>

        <button type="submit">Login</button>
    </form>

    <a href="{{ route('register') }}">Don't have an account? Register here</a>
</body>

</html>
