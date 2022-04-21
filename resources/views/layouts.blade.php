<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel</title>
</head>
<body>
    <nav>
        <ul style="display: flex;list-style: none;gap: 40px">
            <li><a href="/home">Home</a></li>
            <li><a href="/about/mansha/5">About</a></li>
            <li><a href="/demo">Demo Details</a></li>
            <li><a href="/course/laravel">Course </a></li>
        </ul>
    </nav>
    <div style="margin: 40px">
        @yield('content')
    </div>
    <footer style="padding: 5px 40px; background-color: black;">
        <h3>
           Footer , Copywrite @2022
        </h3>
    </footer>
</body>
</html>
