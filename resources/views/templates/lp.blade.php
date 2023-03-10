@php $id_template = 'lp'; @endphp
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
    <link rel="stylesheet" href="{{ asset('css/splash.css') }}">
</head>
<body>
    <div class="splash" style="background-color: #5BC0F8;">
        <img src="{{ asset('img/logo.png') }}" class="fade-in">
    </div>

    @include('components.navbar')
    @yield('lp-content')
    @include('components.footer')
    <script src="{{ asset('js/bs5.js') }}"></script>
    <script src="https://kit.fontawesome.com/a0f5cf7da9.js" crossorigin="anonymous"></script>
    <script src="{{ asset('js/splash.js') }}"></script>
</body>
</html>