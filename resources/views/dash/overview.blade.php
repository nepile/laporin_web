@extends('templates.dash')

@section('dash-content')
    <div class="container-fluid mb-5">
        <div class="row bg-dark justify-content-center align-items-center" style="height: 50vh">
            <div class="col-12 mt-4 text-light p-4">
                <h4 class="mb-0" style="font-weight: 700">
                    Halo, {{ auth()->user()->username }}!
                </h4>
                <p>
                    Silakan lihat data laporan <a href="{{ route('data_laporan') }}" class="text-light">disini.</a>
                </p>
            </div>
        </div>

        <div class="row text-dark position-relative px-3" style="top: -3.5em">
            <div class="col-xl-3 p-2">
                <div class="card" style="box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 2px 0px; border: 0">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div class="">
                            <span style="font-weight: 400" class="text-danger">Jumlah Laporan</span>
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
                <div class="card" style="box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 2px 0px; border: 0">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div class="">
                            <span style="font-weight: 400" class="text-primary">Jumlah Masyarakat</span>
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
                <div class="card" style="box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 2px 0px; border: 0">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div class="">
                            <span style="font-weight: 400" class="text-warning">Jumlah Petugas</span>
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
                <div class="card" style="box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 2px 0px; border: 0">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div class="">
                            <span style="font-weight: 400" class="text-info">Jumlah Berita</span>
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
            
            <div class="col-xl-7 mb-4 mb-xl-0">
                <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <strong>Data Laporan</strong>
                        <a href="{{ route('data_laporan') }}" class="btn btn-success">Manage</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table" id="data_laporan">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($laporan as $item)
                                    <tr style="vertical-align: middle">
                                        <td class="d-flex align-items-center">
                                            <div class="rounded" style="width: 50px; height: 50px; padding: 2px; background: #5BC0F8">
                                                <img class="rounded" src="{{ asset('foto_laporan/jalanrusak.png') }}" style="object-fit: cover; width: 100%; height: 100%;" alt="">
                                            </div>
                                            <div class="ms-2">
                                                <p class="mb-0 text-muted" style="font-size: 14px; font-weight: 600">{{ $item->judul_laporan }}</p>
                                                <span class="mb-0 px-3 @if($item->jenis_laporan == 'pengaduan') bg-primary @elseif($item->jenis_laporan == 'aspirasi') bg-warning @endif text-light" style="font-size: 12px; border-radius: 25px">{{ ucfirst($item->jenis_laporan) }}</span>
                                                <span class="mb-0 px-3 @if($item->status == 'menunggu') bg-secondary @elseif($item->status == 'diproses') bg-warning @elseif($item->status == 'berhasil') bg-success @elseif($item->status == 'ditolak') bg-danger @endif text-light" style="font-size: 12px; border-radius: 25px">{{ ucfirst($item->status) }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <button class="btn btn-primary">
                                                <i class="fa fa-eye" style="font-size: 13px"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-xl-5">
                <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <strong>Pengguna</strong>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped" id="pengguna">
                                <thead>
                                    <tr>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $item)
                                    <tr>
                                        <td class="d-flex align-items-center">
                                            <div style="width: 50px; height: 50px; border-radius: 100%; padding: 2px; background: #5BC0F8">
                                                <img src="{{ asset('img/profil.png') }}" style="object-fit: cover; width: 100%; height: 100%; border-radius: 100%" alt="">
                                            </div>
                                            <div class="ms-2">
                                                <p class="mb-0 text-muted   " style="font-size: 14px; font-weight: 600">{{ $item->nama }}</p>
                                                <p class="mb-0 px-3 @if($item->role == 'masyarakat') bg-primary @elseif($item->role == 'petugas') bg-warning @endif text-light" style="font-size: 12px; border-radius: 25px">{{ ucfirst($item->role) }}</p>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row mt-5 px-3" style="row-gap: 20px;">
            <div class="col-12">
                <h4 class="mb-0" style="font-weight: 700">Berita Terbaru</h4>
                <p>Informasi mengenai tindakan lanjutan laporan</p>
                <hr>
            </div>
            
            @if($count_berita > 0) 
            @foreach ($berita as $item)
                <div class="col-xl-4 mt-3 mt-xl-0">
                    <div class="card" style="border-radius: 0">
                        <div class="card-body p-0">
                            <a href="#">
                                <div class="col-xl-12" style="height: 50vh">
                                    <img src="{{ asset('asset_berita/'.$item->asset_berita) }}" style="object-fit: cover; width: 100%; height: 100%;" alt="">
                                </div>
                            </a>
                        </div>

                        <div class="card-footer p-2" style="background: #fff; height: 120px; overflow-x: auto">
                            <div class="mb-2">
                             <a href="" style="color: #000; text-decoration: none;">
                                <p class="mb-0" style="font-weight: 600; font-size: 19px">
                                    {{ $item->topik_berita }}
                                </p>
                             </a>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <p class="text-secondary mb-0" style="font-size: 13px">
                                    {{ date('d M Y', strtotime($item->tgl_publish)) }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

            @else

            <div class="row justify-content-center align-items-center">
                <div class="col-xl-4 text-center">
                    <img src="{{ asset('img/empty.svg') }}" style="object-fit: cover; width: 100%; height: 100%" alt="">
                    <h6 class="text-secondary">Belum ada berita</h6>
                </div>
            </div>

            @endif
            {!! $berita->links() !!}
            
        </div>
    </div>
@endsection