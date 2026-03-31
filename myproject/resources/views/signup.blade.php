<!DOCTYPE html>
<html>
<head>
    <title>Signup Form</title>
</head>
<body>

@if ($errors->any())
    <div style="color:red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="/submitform">
    @csrf

    <label>Enter Username:</label>
    <input type="text" name="username" placeholder="Enter username"><br><br>

    <label>Enter Name:</label>
    <input type="text" name="name" placeholder="Enter name"><br><br>

    <label>Enter Email:</label>
    <input type="email" name="email" placeholder="Enter email"><br><br>

    <label>Enter Password:</label>
    <input type="password" name="password" placeholder="Enter password"><br><br>

    <input type="submit" value="SUBMIT">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

</form>

</body>
</html>