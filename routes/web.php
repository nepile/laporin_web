<?php

use App\Http\Controllers\Auth\AuthController as Auth;
use App\Http\Controllers\Dash\BeritaController as Berita;
use App\Http\Controllers\Dash\DataLaporanController as DataLaporan;
use App\Http\Controllers\Dash\ManagementUserController as ManagementUser;
use App\Http\Controllers\LandingPage\LandingPageController as LandingPage;
use App\Http\Controllers\Dash\OverviewController as Overview;
use App\Http\Controllers\PengaturanController;
use Illuminate\Support\Facades\Route;

// landing page
Route::get('/', [LandingPage::class, 'home'])->name('home');
Route::get('/laporin_publik', [LandingPage::class, 'laporin_publik'])->name('laporin_publik');

// autentikasi
Route::get('/login', [Auth::class, 'v_login'])->name('login');

// dashboard
Route::get('/overview', [Overview::class, 'index'])->name('overview');
Route::get('/data_laporan', [DataLaporan::class, 'v_dataLaporan'])->name('data_laporan');
Route::middleware('role:admin')->prefix('/management_user')->group(function () {
    Route::get('/management_masyarakat', [ManagementUser::class, 'v_masyarakat'])->name('management_masyarakat');
    Route::get('/management_petugas', [ManagementUser::class, 'v_petugas'])->name('management_petugas');
});
Route::get('/berita', [Berita::class, 'v_berita'])->name('berita');
Route::get('/pengaturan', [PengaturanController::class, 'v_pengaturan'])->name('pengaturan');
