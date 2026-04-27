<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DonasiController;

Route::get('/', [homeController::class, 'index']);

Route::get('/kontak', [KontakController::class, 'kontak']);

Route::get('/Profile', [ProfileController::class, 'Profile']);

Route::get('/Donasi', [DonasiController::class, 'Donasi']);
