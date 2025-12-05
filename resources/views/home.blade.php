<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div style="border:2px solid #000">
        <h2>Login</h2>
        <form action="/login" method="POST">
            @csrf
            <input type="text" name="nameSent" id="name" placeholder="name"><br>
            <input type="password" name="passwordSent" id="password" placeholder="password"><br>
            <button>Login</button>
        </form>
        <br>
        <p>Not a member yet? <a href="/register">Please sign up here</a></p>
    </div>
</body>
</html>