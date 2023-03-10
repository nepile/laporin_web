<?php

use App\Http\Controllers\LandingPage\LandingPageController as LandingPage;
use Illuminate\Support\Facades\Route;

Route::get('/', [LandingPage::class, 'home'])->name('home');
Route::get('/laporin_publik', [LandingPage::class, 'laporin_publik'])->name('laporin_publik');
