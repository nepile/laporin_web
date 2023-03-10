<?php

use App\Http\Controllers\Api\HandleApiController as HandleApi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/berita', [HandleApi::class, 'getBerita']);
Route::get('/laporan_publik', [HandleApi::class, 'getLaporanPublik']);
Route::post('/login', [HandleApi::class, 'login']);
