<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
</head>
<body>
    <form method="post" action="/loginSubmit">
        @csrf
        <label for="username">Enter Username:</label>
        <input type="text" id="username" name="username" required>
        <br><br>
        <label for="password">Enter Password:</label>
        <input type="password" id="password" name="password" required>
        <br><br>
        <button type="submit">Login</button>
    </form>
</body>
</html>