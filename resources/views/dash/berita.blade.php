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
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                              <strong class="text-success">Tambah Berita</strong>
                            </button>
                          </h2>
                          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection