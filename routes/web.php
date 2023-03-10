<?php

use App\Http\Controllers\Auth\AuthController as Auth;
use App\Http\Controllers\LandingPage\LandingPageController as LandingPage;
use App\Http\Controllers\OverviewController as Overview;
use Illuminate\Support\Facades\Route;

// landing page
Route::get('/', [LandingPage::class, 'home'])->name('home');
Route::get('/laporin_publik', [LandingPage::class, 'laporin_publik'])->name('laporin_publik');

// autentikasi
Route::get('/login', [Auth::class, 'v_login'])->name('login');

// dashboard
Route::get('/overview', [Overview::class, 'index']);
