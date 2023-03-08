<?php

use App\HomeController as Home;
use Illuminate\Support\Facades\Route;

Route::get('/', [Home::class, 'home'])->name('home');
