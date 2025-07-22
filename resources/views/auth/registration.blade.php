<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ url('/registration') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Enter your Name">
        <br>
        <input type="email" name="email" placeholder="Enter your Email">
        <br>
        <input type="password" name="password" placeholder="Enter your Password">
        <br>
        <input type="password" name="password_confirmation" placeholder="Confirm your Password">
        <br>
        <button type="submit">Registration</button>
    </form>
</body>
</html>