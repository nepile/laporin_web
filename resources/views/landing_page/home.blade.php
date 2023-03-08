@extends('templates.lp')

@section('app-content')
<div class="container-fluid" style="background-image: radial-gradient(circle at 12% 55%,rgba(33,150,243,.15),hsla(0,0%,100%,0) 25%),radial-gradient(circle at 85% 33%,rgba(108,99,255,.175),hsla(0,0%,100%,0)   25%)">
    <div class="container">
        <div class="row justify-content-between align-items-center position-relative" style="height: 100vh; top: 2em">
            <div class="col-xl-5 mt-5 mt-xl-0">
                <h1 class="text-center text-xl-start" style="font-weight: 800;">Aplikasi <span style="color: #5BC0F8">Manajemen Laporan</span> Masyarakat.</h1>
                <p class="text-center text-xl-start">
                    Platform digital yang menampung laporan aspirasi dan pengaduan dari masyarakat sekitar.
                </p>
                <div class="text-center text-xl-start">
                    <button class="btn btn-dark px-3" style="height: 7vh;">Selengkapnya</button>
                    <button class="btn text-dark" style="height: 7vh;">Hubungi kami</button>    
                </div>
            </div>

            <div class="col-xl-6">
                <img src="{{ asset('img/ils1.png') }}" style="object-fit: cover; width: 100%" alt="">
            </div>
        </div>
    </div>
</div>
    
@endsection