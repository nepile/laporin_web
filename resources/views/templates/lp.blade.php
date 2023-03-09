<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }} | Laporin</title>
    <link rel="stylesheet" href="{{ asset('css/bs5.css') }}">
    <link rel="stylesheet" href="{{ asset('css/public.css') }}">
    <link rel="icon" href="{{ asset('img/icon.ico') }}">
</head>
<body>
    @include('components.navbar_lp')
    @yield('app-content')
    @include('components.footer_lp')
    <script src="{{ asset('js/bs5.js') }}"></script>
    <script src="https://kit.fontawesome.com/a0f5cf7da9.js" crossorigin="anonymous"></script>
</body>
</html>