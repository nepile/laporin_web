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
                @include('components.alert')
                <div class="card">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <strong class="text-success">Tambah Berita</strong>
                              </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                <form action="/tambah_berita" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="">
                                        <label for="topik_berita">Topik Berita:</label>
                                        <input type="text" name="topik_berita" class="form-control @error('topik_berita') is-invalid @enderror" value="{{ old('topik_berita') }}" id="topik_berita"  placeholder="Masukkan topik berita">    
                                        @error('topik_berita')
                                            <p class="text-danger" style="font-size: 12px">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="mt-3">
                                        <label for="asset_berita">Foto Berita Terkait:</label>
                                        <input type="file" accept=".png, .jpg, .jpeg" class="form-control @error('asset_berita') is-invalid @enderror" name="asset_berita" id="asset_berita">    
                                        @error('asset_berita')
                                            <p class="text-danger" style="font-size: 12px">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    
                                    <div class="mt-3">
                                        <label for="deskripsi_berita">Deskripsi Berita:</label>
                                        <textarea name="deskripsi_berita" class="form-control @error('deskripsi_berita') is-invalid @enderror" rows="10" id="deskripsi_berita" placeholder="Masukkan deskripsi berita terkait..">{{ old('deskripsi_berita') }}</textarea>
                                        @error('deskripsi_berita')
                                            <p class="text-danger mb-0" style="font-size: 12px">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <button class="btn btn-dark mt-3" type="submit">Publikasi Berita</button>
                                </form> 
                              </div>
                            </div>
                        </div>
                          
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                              <strong class="text-primary">Daftar Berita</strong>
                            </button>
                          </h2>
                          <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="table-responsive">
                                    <table id="berita" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th class="text-center">No.</th>
                                                <th>Gambar</th>
                                                <th>Topik Berita</th>
                                                <th class="text-center">Tanggal Publikasi</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $no = 1;
                                            @endphp

                                            @foreach ($berita as $item)
                                            <tr style="white-space: nowrap; vertical-align: middle">
                                                <td class="text-center">{{ $no++ . '.' }}</td>
                                                <td>
                                                    <img src="{{ asset('asset_berita/'.$item->asset_berita) }}" width="80" height="80" class="rounded" alt="">
                                                </td>
                                                <td>{{ $item->topik_berita }}</td>
                                                <td class="text-center">{{ date('d M Y', strtotime($item->tgl_publish)) }}</td>
                                                <td>
                                                    <button class="btn btn-info text-light">
                                                        <i class="fa fa-cog"></i>
                                                    </button>
                                                    <button class="btn btn-danger mt-xl-0 mt-2">
                                                        <i class="fa fa-trash"></i>
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

                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection