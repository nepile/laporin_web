<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }} | Laporin</title>
    <link rel="stylesheet" href="{{ asset('css/bs5.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font.css') }}">
</head>
<body>

    @yield('app-content')
    <script src="{{ asset('js/bs5.js') }}"></script>
</body>
</html>