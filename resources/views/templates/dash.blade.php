@php $id_template = 'dash'; @endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }} | Dashboard | Laporin</title>
    <link rel="stylesheet" href="{{ asset('css/bs5.css') }}">
    <link rel="icon" href="{{ asset('img/icon.ico') }}">
    <link rel="stylesheet" href="{{ asset('css/public.css') }}">
    <link rel="stylesheet" href="{{ asset('css/splash.css') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.3/css/dataTables.bootstrap5.min.css">
</head>
<body>
    <div class="splash" style="background-color: #000;">
        <img src="{{ asset('img/logo3.png') }}" class="fade-in">
    </div>
    @include('components.navbar')
    @yield('dash-content')
    @include('components.footer')
    <script src="{{ asset('js/bs5.js') }}"></script>
    <script src="https://kit.fontawesome.com/a0f5cf7da9.js" crossorigin="anonymous"></script>
    <script src="{{ asset('js/splash.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.3/js/dataTables.bootstrap5.min.js"></script>
    <script>
    $(document).ready(function () {
        $('#data_laporan').DataTable();
        $('#pengguna').DataTable();
    });
    </script>
</body>
</html>