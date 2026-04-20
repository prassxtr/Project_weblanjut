<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\ProfileController;

Route::get('/', [homeController::class, 'index']);

Route::get('/kontak', [KontakController::class, 'kontak']);

Route::get('/Profile', [ProfileController::class, 'Profile']);
