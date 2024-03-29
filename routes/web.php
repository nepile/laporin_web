<?php

use App\Http\Controllers\Auth\LoginController as Login;
use App\Http\Controllers\Dash\BeritaController as Berita;
use App\Http\Controllers\Dash\DataLaporanController as DataLaporan;
use App\Http\Controllers\Dash\ManagementUserController as ManagementUser;
use App\Http\Controllers\LandingPage\LandingPageController as LandingPage;
use App\Http\Controllers\Dash\OverviewController as Overview;
use App\Http\Controllers\PengaturanController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// landing page
Route::get('/', [LandingPage::class, 'home'])->name('home');
Route::get('/laporin_publik', [LandingPage::class, 'laporin_publik'])->name('laporin_publik');

Auth::routes();

// autentikasi
Route::get('/login', [Login::class, 'v_login'])->name('login');
Route::post('/handle_login', [Login::class, 'handle_login']);
Route::post('/handle_logout', [Login::class, 'handle_logout']);

// dashboard
Route::middleware('auth')->group(function () {
    Route::get('/overview', [Overview::class, 'index'])->name('overview');
    Route::get('/data_laporan', [DataLaporan::class, 'v_dataLaporan'])->name('data_laporan');
    Route::middleware(['role:admin'])->group(function () {
        Route::prefix('/management_user')->group(function () {
            Route::get('/management_masyarakat', [ManagementUser::class, 'v_masyarakat'])->name('management_masyarakat');
            Route::get('/management_petugas', [ManagementUser::class, 'v_petugas'])->name('management_petugas');
            Route::post('/hapus_user/{id}', [ManagementUser::class, 'hapus_user']);
        });
        Route::post('/hapus_permanen/{id_laporan}', [DataLaporan::class, 'hapus_permanen']);
    });
    Route::get('/berita', [Berita::class, 'v_berita'])->name('berita');
    Route::post('/export_data', [DataLaporan::class, 'export_data']);
    Route::post('/tambah_berita', [Berita::class, 'tambah_berita']);
});
