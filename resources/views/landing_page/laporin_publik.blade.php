@extends('templates.lp')

@section('lp-content')
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center" style="height: 75vh; background: #5BC0F8;">
            <div class="col-xl-6 col-10 position-relative" style="top: 2em;">
                <h4 style="font-weight: 700;" class="mb-3 text-center text-light">Cari laporan yang relevan!</h4>
                <div class="d-flex">
                    <input type="text" class="form-control" name="" id="" style="height: 8.6vh;" autofocus placeholder="Cari laporan...">
                    <button class="btn ms-2 px-3 btn-dark">Cari</button>
                </div>
            </div>
        </div>

        <div class="row p-5">
            <h4 style="font-weight: bold">
                Semua Laporan
            </h3>

            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body d-flex align-items-center">
                        <div class="col-xl-2 bg-info rounded d-flex align-items-center justify-content-center" style="height: 30vh;">
                            ini gambar
                        </div>
                        <div class="ms-3">
                            <h3 style="font-weight: bold;">
                                Judul Laporan <span class="px-4 rounded bg-success text-light" style="font-size: 14px">status</span>
                            </h3>
                            
                            <p class="mb-0">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Impedit, dolores natus. Deleniti nulla dolorem corrupti inventore ipsum. Dolor cum necessitatibus quisquam, similique maiores, vitae eligendi facere accusantium modi enim porro.       
                            </p>
                            
                            <button class="btn btn-dark mt-3 px-4"  style="display: block;">
                                Detail
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection