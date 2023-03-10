<nav class="navbar navbar-expand-xl position-fixed" style="box-shadow: rgba(0, 0, 0, 0.05) 0px 1px 2px 0px; width: 100%; background: #fff; z-index: 10; @if($id_template == 'lp') border-top: 4px solid #5BC0F8; @elseif($id_template == 'dash') border-top: 4px solid #000 @endif">
    <div class="container-fluid">
        <a href="/" class="navbar-brand my-0">
            <img src="@if($id_template == 'lp') {{ asset('img/logo.png') }} @elseif($id_template == 'dash') {{ asset('img/logo2.png') }} @endif" height="45" alt="laporin_logo" class="me-1 ms-3 my-0 logo">
            <strong>Laporin.</strong>
        </a>

        <button type="button" class="navbar-toggler" style="border: 0;" data-bs-toggle="collapse"
            data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse ms-auto" id="navbarCollapse">

            <div class="navbar-nav ms-auto text-center">
                <div class="navbar-nav ms-auto">
                    <a href="{{ route('home') }}" class="nav-item nav-link text-center mx-4" @if($id_page == 'lp-1') style="color: #5BC0F8; border-bottom: 2px solid #5BC0F8;" @endif>Beranda</a>
                    <a href="{{ route('laporin_publik') }}" class="nav-item nav-link text-center me-4" @if($id_page == 'lp-2') style="color: #5BC0F8; border-bottom: 2px solid #5BC0F8;" @endif>Laporan Publik</a>
                </div>
                <a href="{{ route('login') }}" class="nav-item nav-link btn text-light px-3 me-xl-4" style="border: 0; background: #5BC0F8">
                    Masuk
                </a>
            </div>
        </div>
    </div>
</nav>