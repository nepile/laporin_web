
<footer class="container-fluid bottom-0">
    <div class="row py-5 text-light d-flex bg-dark justify-content-evenly">
        <div class="col-xl-4 col-md-12 col-sm-12">
            <a href="#" class="d-block text-light text-decoration-none">
                <img src="{{ asset('img/logo.png') }}" height="50" alt="laporin Logo" class="mb-3">
                <span class="ms-2" style="font-size: 25px;">
                    <strong>Laporin.</strong>
                </span>
            </a>

            <div class="d-block mb-1">
                <i class="fa fa-envelope me-1 text-light" aria-hidden="true"></i>
                <span>laporin.aja@gmail.com</span>
            </div>

            <div class="d-block mb-3 mb-xl-0">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>Jl. Pipa, Desa Lama, Pancur Batu, Deli Serdang, Sumatera Utara, 20353.</span>
            </div>
        </div>

        <div class="col-xl-3 col-sm-12 col-md-12 my-2 mb-4">
            <h3>Menu</h3>
            @if($id_template == 'lp')
            <a class="text-decoration-none" href="{{ route('home') }}">
                <p class="mb-0 text-light">Beranda</p>
            </a>
            <a class="text-decoration-none" href="{{ route('laporin_publik') }}">
                <p class="mb-0 text-light">Laporan Publik</p>
            </a>
            @elseif($id_template == 'dash')
            <a class="text-decoration-none" href="{{ route('overview') }}">
                <p class="mb-0 text-light">Overview</p>
            </a>
            <a class="text-decoration-none" href="{{ route('data_laporan') }}">
                <p class="mb-0 text-light">Data Laporan</p>
            </a>
            <a class="text-decoration-none" href="{{ route('management_masyarakat') }}">
                <p class="mb-0 text-light">Management Masyarakat</p>
            </a>
            <a class="text-decoration-none" href="{{ route('management_petugas') }}">
                <p class="mb-0 text-light">Management Petugas</p>
            </a>
            <a class="text-decoration-none" href="{{ route('berita') }}">
                <p class="mb-0 text-light">Berita</p>
            </a>
            @endif
        </div>

        <div class="col-xl-3 col-sm-12 col-md-12 my-2 mb-4">
            <h3>Social Media</h3>
            <a class="d-block text-decoration-none text-light" href="#"
                target="_blank">
                <i class="fa fa-instagram me-1" aria-hidden="true"></i>
                <span>Instagram</span>
            </a>

            <a class="d-block text-decoration-none text-light" href="#" target="_blank">
                <i class="fa me-2 fa-facebook" aria-hidden="true"></i>
                <span>Facebook</span>
            </a>
        </div>
    </div>
    </div>

    <div class="row bg-dark text-light">
        <hr class="mb-0">
        <div class="col-12 d-flex justify-content-center align-items-center" style="height: 10vh">
            <p class="pt-3" style="font-size: 14px;">Copyright &copy; {{ date('Y', strtotime('now')) }} laporin.</p>
        </div>
    </div>
</footer>
