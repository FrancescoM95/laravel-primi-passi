<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    <h1>HELLO WORLD!</h1>
    <p>Io sono {{ $name }} {{ $surname }}, ho {{ $age }} anni e sono un {{ $job }}.</p>
    <a href="{{route('job')}}">Vai a Job</a>
    <a href="{{route('info')}}">Vai a Info</a>
</body>
</html>