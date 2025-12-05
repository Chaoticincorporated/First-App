<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div style="border:2px solid #000">
        <h2>Register</h2>
        <form action="/register" method="POST">
            @csrf
            <input type="text" name="name" id="name" placeholder="name"><br>
            <input type="email" name="email" id="email" placeholder="email"><br>
            <input type="password" name="password" id="password" placeholder="password"><br>
            <button>Sign Up</button>
        </form>
    </div>
</body>
</html>