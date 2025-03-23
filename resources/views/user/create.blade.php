<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<body>

    <h1>Sign Up</h1>
    
    <form action="/store" method="post">
        @csrf
        <label for="">Name:</label>
        <input type="text" name="name" id="name">
        <br>
        <label for="">Email:</label>
        <input type="email" name="email" id="email">
        <br>
        <label for="">Password:</label>
        <input type="password" name="password" id="password">

        <button type="submit">send</button>
    </form>
</body>
</html>