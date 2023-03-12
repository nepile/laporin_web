@extends('templates.dash')

@section('dash-content')
    <div class="container-fluid mb-5">
        <div class="row bg-dark justify-content-center align-items-center" style="height: 45vh">
            <div class="col-12 mt-5 text-light p-4">
                <h4 class="mb-0" style="font-weight: 700">
                    {{ $title }}
                </h4>
                <p>
                    <a href="{{ route('overview') }}" class="text-light">
                        <i class="fa fa-home"></i> Dashboard
                    </a> /
                    <span>{{ $title }}</span>
                </p>
            </div>
        </div>
        <div class="row" style="position: relative; bottom: 50px;">
            <div class="col-xl-12">
                
                @if(session()->has('warning'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <span>{{ session('warning') }}</span>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif

                <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <strong>
                            Semua Laporan
                        </strong>

                        <div class="dropdown">
                            <button class="btn btn-danger dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Export PDF
                            </button>
                            <ul class="dropdown-menu">
                              <form action="/export_data" method="POST">
                                @csrf
                                <li><input class="dropdown-item" type="submit" name="semua" value="Semua" /></li>
                                <li><input class="dropdown-item" type="submit" name="pengaduan" value="Pengaduan" /></li>
                                <li><input class="dropdown-item" type="submit" name="aspirasi" value="Aspirasi" /></li>
                                <li><input class="dropdown-item" type="submit" name="berhasil" value="Berhasil" /></li>
                                <li><input class="dropdown-item" type="submit" name="diproses" value="Diproses" /></li>
                                <li><input class="dropdown-item" type="submit" name="menunggu" value="Menunggu" /></li>
                                <li><input class="dropdown-item" type="submit" name="ditolak" value="Ditolak" /></li>
                              </form>
                            </ul>
                          </div>
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
                                            <div class="rounded" style="width: 100px; height: 100px; padding: 2px; background: #5BC0F8">
                                                <img class="rounded" src="{{ asset('foto_laporan/jalanrusak.png') }}" style="object-fit: cover; width: 100%; height: 100%;" alt="">
                                            </div>
                                            <div class="ms-2">
                                                <p class="mb-0 text-muted" style="font-size: 15px; font-weight: 600">{{ $item->judul_laporan }}</p>
                                                <span class="mb-0 px-3 @if($item->jenis_laporan == 'pengaduan') bg-primary @elseif($item->jenis_laporan == 'aspirasi') bg-warning @endif text-light" style="font-size: 12px; border-radius: 25px">{{ ucfirst($item->jenis_laporan) }}</span>
                                                <span class="mb-0 px-3 @if($item->status == 'menunggu') bg-secondary @elseif($item->status == 'diproses') bg-warning @elseif($item->status == 'berhasil') bg-success @elseif($item->status == 'ditolak') bg-danger @endif text-light" style="font-size: 12px; border-radius: 25px">{{ ucfirst($item->status) }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <button class="btn btn-primary">
                                                <i class="fa fa-eye"></i>
                                            </button>
                                            <button class="btn mt-2 mt-xl-0 btn-danger" title="Hapus Permanen" data-bs-toggle="modal" data-bs-target="{{ '#hapus'.$item->id_laporan }}">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </td>
                                    </tr>

                                    <div class="modal fade" id="{{ 'hapus'.$item->id_laporan }}" tabindex="-1" aria-labelledby="{{ 'hapus'.$item->id_laporan.'label' }}" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header border-0 bg-danger text-light">
                                                <h1 class="modal-title fs-5" style="font-weight: bold" id="{{ 'hapus'.$item->id_laporan.'label' }}">
                                                    <i class="fa fa-exclamation-triangle"></i> Perhatian
                                                </h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>

                                            <div class="modal-body">
                                                <div class="card">
                                                    <div class="card-body">
                                                         <div>
                                                            <p class="mb-0 text-muted" style="font-size: 15px; font-weight: 600">{{ $item->judul_laporan }}</p>
                                                            <span class="mb-0 px-3 @if($item->jenis_laporan == 'pengaduan') bg-primary @elseif($item->jenis_laporan == 'aspirasi') bg-warning @endif text-light" style="font-size: 12px; border-radius: 25px">{{ ucfirst($item->jenis_laporan) }}</span>
                                                            <span class="mb-0 px-3 @if($item->status == 'menunggu') bg-secondary @elseif($item->status == 'diproses') bg-warning @elseif($item->status == 'berhasil') bg-success @elseif($item->status == 'ditolak') bg-danger @endif text-light" style="font-size: 12px; border-radius: 25px">{{ ucfirst($item->status) }}</span>
                                                            <p class="mb-0 text-muted" style="font-size: 12px; font-weight: 300">{{ $item->isi_laporan }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer border-0">
                                                <form action="{{ '/hapus_permanen/'.$item->id_laporan }}" method="POST">
                                                    @csrf
                                                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus Permanen</button>
                                                </form>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection