<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <style>
        body {
            font-family: Arial;
            text-align: center;
            margin-top: 100px;
        }
        a {
            display: block;
            margin-top: 20px;
        }
    </style>
</head>
<body>

    <h1>Selamat datang, {{ $user->name }}</h1>

    <a href="/logout">Logout</a>

</body>
</html>