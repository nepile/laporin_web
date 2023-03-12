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
                            Data Masyarakat
                        </strong>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped" id="pengguna">
                                <thead>
                                    <tr>
                                        <th class="text-center">No.</th>
                                        <th>Nama</th>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>No. Telepon</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @php
                                        $no = 1;
                                    @endphp

                                    @foreach ($masyarakat as $item)
                                        <tr>
                                            <td class="text-center">{{ $no++ . '.' }}</td>
                                            <td>{{ $item->nama }}</td>
                                            <td>{{ $item->username }}</td>
                                            <td>{{ $item->email }}</td>
                                            <td>{{ $item->telp }}</td>
                                            <td>
                                                <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="{{ '#hapus'.$item->id }}" type="button">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </td>
                                        </tr>

                                        <div class="modal fade" id="{{ 'hapus'.$item->id }}" tabindex="-1" aria-labelledby="{{ 'hapus'.$item->id.'label' }}" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header border-0 bg-danger text-light">
                                                    <h1 class="modal-title fs-5" style="font-weight: bold" id="{{ 'hapus'.$item->id.'label' }}">
                                                        <i class="fa fa-exclamation-triangle"></i> Perhatian
                                                    </h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
    
                                                <div class="modal-body">
                                                    
                                                    <p class="mb-0" style="font-size: 13px">
                                                        Yakin untuk menghapus data di bawah ini?
                                                    </p>
                                                    <div class="card">
                                                        <div class="card-body">
                                                             <div>
                                                                <p class="mb-0" style="font-size: 14px">Nama: <strong class="text-secondary">{{ $item->nama }}</strong></p>
                                                                <p class="mb-0" style="font-size: 14px">Username: <strong class="text-secondary">{{ $item->username }}</strong></p>
                                                                <p class="mb-0" style="font-size: 14px">Email: <strong class="text-secondary">{{ $item->email }}</strong></p>
                                                                <p class="mb-0" style="font-size: 14px">No. Telepon: <strong class="text-secondary">{{ $item->telp }}</strong></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer border-0">
                                                    <form action="{{ '/management_user/hapus_user/'.$item->id }}" method="POST">
                                                        @csrf
                                                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</button>
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