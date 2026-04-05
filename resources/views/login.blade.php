<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        body {
            font-family: Arial;
            background: #f2f2f2;
        }
        .container {
            width: 300px;
            margin: 100px auto;
            padding: 25px;
            background: white;
            border-radius: 10px;
            text-align: center;
        }
        input {
            width: 90%;
            padding: 8px;
            margin: 8px 0;
        }
        button {
            padding: 8px 20px;
        }
        a {
            display: block;
            margin-top: 10px;
        }
        .error {
            color: red;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Login</h2>

    <form action="/auth" method="POST">
        @csrf
        <input type="email" name="email" placeholder="Email"><br>
        <input type="password" name="password" placeholder="Password"><br>
        <button type="submit">Login</button>
    </form>

    <a href="/registration">Belum punya akun? Register</a>

    @if(session('error'))
        <p class="error">{{ session('error') }}</p>
    @endif
</div>

</body>
</html>