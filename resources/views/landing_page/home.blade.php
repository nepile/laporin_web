@extends('templates.lp')

@section('lp-content')
<div class="container-fluid" style="background-image: radial-gradient(circle at 12% 55%,rgba(33,150,243,.15),hsla(0,0%,100%,0) 25%),radial-gradient(circle at 85% 33%,rgba(108,99,255,.175),hsla(0,0%,100%,0)   25%)">
    <div class="container">
        <div class="row justify-content-between align-items-center position-relative" style="height: 100vh; top: 2em">
            <div class="col-xl-5 mt-5 mt-xl-0">
                <h5 style="font-weight: 600">Hi Lapers! apa keluhan anda?</h5>
                <h1 class="text-center text-xl-start" style="font-weight: 800;">Aplikasi <span style="color: #5BC0F8">Manajemen Laporan</span> Masyarakat.</h1>
                <p class="text-center text-xl-start">
                    Platform digital yang menampung laporan aspirasi dan pengaduan dari masyarakat sekitar.
                </p>
                <div class="text-center text-xl-start">
                    <button class="btn btn-dark px-3" style="height: 7vh;">Selengkapnya</button>
                    <button class="btn text-dark" style="height: 7vh;">Hubungi kami</button>    
                </div>
            </div>

            <div class="col-xl-7">
                <img src="{{ asset('img/ils1.png') }}" style="object-fit: cover; width: 100%" alt="">
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row align-items-center py-4 px-4 px-xl-0 justify-content-evenly">
        <div class="col-xl-4 d-flex justify-content-center flex-column text-center text-xl-start">
            <h2 class="mb-0" style="vertical-align: middle;">
                <strong>
                    Partnership
                </strong>
            </h2>
            <p style="font-size: 20px;">
                Instansi dan Organisasi terkait.
            </p>
        </div>

        <div class="col-xl-6">
            <div class="row align-items-center justify-content-center">
                <div class="col-6 col-xl-5 d-flex align-items-center" style="border-right: 1px solid #000;">
                    <img src="{{ asset('img/telkomdn.png') }}" style="width: 100%;" alt="smk telkom medan">
                </div>
                <div class="col-6 col-xl-3 d-flex align-items-center">
                    <img src="{{ asset('img/webdev.png') }}" style="width: 100%;" alt="webdev.skatel">
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="container rounded p-3 my-2">
                <div class="text-center mb-4">
                    <h3 class="mb-0" style="font-weight: bold">Tentang Kami</h3>
                    <p>Deskripsi singkat mengenai Laporin</p>
                </div>
                <div class="d-flex">
                    <div class="col-xl-4 bg-danger">
                        ini gambar
                    </div>
                    <div class="col-xl-8 bg-warning ms-3">
                        ini content
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="container bg-warning rounded p-3 my-3">
                mm
            </div>
        </div>
    </div>
</div>

@endsection