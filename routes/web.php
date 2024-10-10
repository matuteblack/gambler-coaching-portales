<?php

use Illuminate\Support\Facades\Route;

// Home
Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])
    ->name('home');

// Paquetes
    Route::get('/paquetes', [\App\Http\Controllers\PackagesController::class, 'index'])
        ->name('packages');
        
    Route::get('/paquetes/{id}', [\App\Http\Controllers\PackagesController::class, 'show'])->whereNumber('id')
        ->name('packages.show');

// Blog
    // Index
    Route::get('blog/', [\App\Http\Controllers\BlogsController::class, 'index'])
        ->name('blog');

    Route::get('blog/{id}/ver', [\App\Http\Controllers\BlogsController::class, 'show'])->whereNumber('id')
        ->name('blog.show');

    Route::get('blog/admin', [\App\Http\Controllers\BlogsController::class, 'indexAdmin'])
        ->name('blog.admin');

    // Create
    Route::get('blog/publicar', [\App\Http\Controllers\BlogsController::class, 'create'])
        ->name('blog.create');

    Route::post('blog/publicar', [\App\Http\Controllers\BlogsController::class, 'store'])
        ->name('blog.store');

    // Edit
    Route::get('blog/{id}/editar', [\App\Http\Controllers\BlogsController::class, 'edit'])
        ->name('blog.edit');

    Route::post('blog/{id}/editar', [\App\Http\Controllers\BlogsController::class, 'update'])
        ->name('blog.update');

    // Delete
    Route::get('blog/{id}/eliminar', [\App\Http\Controllers\BlogsController::class, 'delete'])
        ->name('blog.delete');

    Route::post('blog/{id}/eliminar', [\App\Http\Controllers\BlogsController::class, 'destroy'])
        ->name('blog.destroy');
