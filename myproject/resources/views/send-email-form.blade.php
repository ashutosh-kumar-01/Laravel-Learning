<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Email</title>
</head>
<body>
    <h1>Send a Welcome Email</h1>
    <p>Click the button below to send a test welcome email.</p>
    <a href="{{ url('/send-email') }}">
        <button>Send Email</button>
    </a>
</body>
</html>
