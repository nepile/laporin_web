<nav class="navbar navbar-expand-xl position-fixed" style="box-shadow: rgba(0, 0, 0, 0.05) 0px 1px 2px 0px; width: 100%; background: #fff; z-index: 10; @if($id_template == 'lp') border-top: 4px solid #5BC0F8; @elseif($id_template == 'dash') border-top: 4px solid #000 @endif">
    <div class="container-fluid">
        <a href="@if($id_template == 'lp') {{ route('home') }} @elseif($id_template == 'dash') {{ route('overview') }} @endif" class="navbar-brand my-0">
            <img src="@if($id_template == 'lp') {{ asset('img/logo.png') }} @elseif($id_template == 'dash') {{ asset('img/logo2.png') }} @endif" height="45" alt="laporin_logo" class="me-1 ms-3 my-0 logo">
            <strong>Laporin.</strong>
        </a>

        <button type="button" class="navbar-toggler" style="border: 0;" data-bs-toggle="collapse"
            data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse ms-auto" id="navbarCollapse">
            
            @if($id_template == 'lp')
            <div class="navbar-nav ms-auto text-center">
                <div class="navbar-nav ms-auto">
                    <a href="{{ route('home') }}" class="nav-item nav-link text-center mx-4" @if($id_page == 'lp-1') style="color: #5BC0F8; border-bottom: 2px solid #5BC0F8;" @endif>Beranda</a>
                    <a href="{{ route('laporin_publik') }}" class="nav-item nav-link text-center me-4" @if($id_page == 'lp-2') style="color: #5BC0F8; border-bottom: 2px solid #5BC0F8;" @endif>Laporan Publik</a>
                </div>
                <a href="{{ route('login') }}" class="nav-item nav-link btn text-light px-3 me-xl-4" style="border: 0; background: #5BC0F8">
                    Masuk
                </a>
            </div>

            @elseif($id_template == 'dash')
            <div class="navbar-nav ms-auto">
                <a href="{{ route('overview') }}" class="nav-item nav-link text-center mx-4" @if($id_page == 'dash-1') style="color: #000; border-bottom: 2px solid #000;" @endif>Overview</a>
                <a href="#" class="nav-item nav-link text-center mx-4">Data Laporan</a>
                <li class="nav-item dropdown text-center">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Management Users
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark">
                      <li><a class="dropdown-item" href="#">Management Masyarakat</a></li>
                      <li><a class="dropdown-item" href="#">Management Petugas</a></li>
                    </ul>
                  </li>
                <a href="#" class="nav-item nav-link text-center mx-4">Berita</a>
            </div>

            <div class="navbar-nav ms-auto text-center">
                <a href="" class="bg-dark nav-item nav-link btn text-light px-4 mx-4" style="border-radius: 20px; font-weight: bold; border: 0">
                    <i class="fa fa-cog"></i> <span class="ms-1">Pengaturan</span>
                </a>
            </div>
            @endif
        </div>

    </div>
</nav>
