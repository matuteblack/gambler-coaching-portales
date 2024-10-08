<?php

use Illuminate\Support\Facades\Route;


Route::get('/', [\App\Http\Controllers\HomeController::class, 'index']);

Route::get('/paquetes', [\App\Http\Controllers\PackagesController::class, 'index']);

Route::get('/paquetes/{id}', [\App\Http\Controllers\PackagesController::class, 'show']);