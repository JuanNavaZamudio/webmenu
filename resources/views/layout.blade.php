<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="{{ asset(mix('css/app.css')) }}" rel="stylesheet">
</head>
<body>

    <ul>
        <li><a href="{{ route('menu')}}">menú público</a></li>
        <li><a href="{{ route('products')}}">productos</a></li>
        <li><a href="{{ route('promos')}}">promociones</a></li>
        <li><a href="{{ route('logout')}}">salir</a></li>
    </ul>

    
    @yield('content')

    <script src="{{ asset(mix('js/app.js')) }}"></script>
</body>
</html>