@extends('templates.dash')

@section('dash-content')
    <div class="container-fluid mb-5">
        <div class="row bg-dark justify-content-center align-items-center" style="height: 50vh">
            <div class="col-12 mt-4 text-light p-4">
                <h4 class="mb-0" style="font-weight: 700">
                    Selamat Pagi, Admin!
                </h4>
                <p>
                    Silakan lihat data laporan <a href="{{ route('data_laporan') }}" class="text-light">disini.</a>
                </p>
            </div>
        </div>

        <div class="row text-dark position-relative px-3" style="top: -3.5em">
            <div class="col-xl-3 p-2">
                <div class="card">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div class="">
                            <span style="font-weight: 600" class="text-danger">Jumlah Laporan</span>
                            <p class="mt-3 mb-0">
                                <i class="fa text-danger fa-file-text" aria-hidden="true" style="font-size: 30px"></i>
                            </p>
                        </div>
                        <p class="mb-0 text-danger" style="font-weight: 800; font-size: 21px"> 
                            {{ $count_laporan }}
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="col-xl-3 p-2">
                <div class="card">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div class="">
                            <span style="font-weight: 600" class="text-primary">Jumlah Masyarakat</span>
                            <p class="mt-3 mb-0">
                                <i class="fa text-primary fa-users" aria-hidden="true" style="font-size: 30px"></i>
                            </p>
                        </div>
                        <p class="mb-0 text-primary" style="font-weight: 800; font-size: 21px"> 
                            {{ $count_masyarakat }}
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="col-xl-3 p-2">
                <div class="card">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div class="">
                            <span style="font-weight: 600" class="text-warning">Jumlah Petugas</span>
                            <p class="mt-3 mb-0">
                                <i class="fa text-warning fa-user-secret" aria-hidden="true" style="font-size: 30px"></i>
                            </p>
                        </div>
                        <p class="mb-0 text-warning" style="font-weight: 800; font-size: 21px"> 
                            {{ $count_petugas }}
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 p-2">
                <div class="card">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div class="">
                            <span style="font-weight: 600" class="text-info">Jumlah Berita</span>
                            <p class="mt-3 mb-0">
                                <i class="fa text-info fa-newspaper" aria-hidden="true" style="font-size: 30px"></i>
                            </p>
                        </div>
                        <p class="mb-0 text-info" style="font-weight: 800; font-size: 21px"> 
                            {{ $count_berita }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row px-3">
            <div class="col-12 mb-1">
                <h4 class="mb-0" style="font-weight: 700">Rekapan Data Kredensial</h4>
                <p>Ringkasan laporan dan pengguna.</p>
            </div>
            

            <div class="col-xl-8 mb-4 mb-xl-0">
                <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <strong>Data Laporan</strong>
                        <button class="btn btn-success">Manage</button>
                    </div>
                    <div class="card-body">
                        mm
                    </div>
                </div>
            </div>
            
            <div class="col-xl-4">
                <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <strong>Pengguna</strong>
                        <button class="btn btn-success">Manage</button>
                    </div>
                    <div class="card-body">
                        mm
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row mt-5 px-3">
            <div class="col-12">
                <h4 class="mb-0" style="font-weight: 700">Berita Terbaru</h4>
                <p>Informasi mengenai penanggulangan laporan</p>
                <hr>
            </div>
            <div class="">
                disini card berita
            </div>
        </div>
    </div>
@endsection