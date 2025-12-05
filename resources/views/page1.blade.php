<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @auth
    <h1>Page 1</h1>
    <form action="/logout" method="POST">
        @csrf
        <button>Logout</button>    
    </form>

    @else
    <h1>Not Authenticated</h1>
    <p>Please return to <a href="/">Home Page</a> to login</p>

    @endauth
</body>
</html>