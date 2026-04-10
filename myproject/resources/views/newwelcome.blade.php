@extends('layouts.masterfile')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Document</title> -->
     @section('title')
         New Welcome Page
     @endsection
</head>
<body>
    <div>
        @section('content')
        <p>This is my welcome page</p>
        <a href="{{ route('lpu2027') }}">click here for lpu 2027 addmission</a>
        
        @endsection
    </div>
</body>
</html>