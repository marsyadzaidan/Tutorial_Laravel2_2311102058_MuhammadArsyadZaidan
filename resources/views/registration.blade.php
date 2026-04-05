<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <style>
        body {
            font-family: Arial;
            background: #f2f2f2;
        }
        .container {
            width: 320px;
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
        .success {
            color: green;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Register</h2>

    <form action="/register" method="POST">
        @csrf
        <input type="email" name="email" placeholder="Email"><br>
        <input type="text" name="nama" placeholder="Nama"><br>
        <input type="password" name="password" placeholder="Password"><br>
        <button type="submit">Register</button>
    </form>

    <a href="/login">Sudah punya akun? Login</a>

    @if(session('success'))
        <p class="success">{{ session('success') }}</p>
    @endif
</div>

</body>
</html>