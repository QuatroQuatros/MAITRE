<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\AdminController;
use App\Http\Controllers\Web\ClienteController;
use App\Http\Controllers\Web\RestauranteController;
use App\Http\Controllers\Web\CategoriaController;



Route::get('/', [ClienteController::class, 'index'])->middleware('userAgent');

Route::get('/app', function(){
    return view('app');
});
  




Route::prefix('/admin')->group(function(){
    Route::get('/', [AdminController::class, 'index'])->middleware('auth', 'admin');
    Route::get('/categorias/create', [CategoriaController::class, 'create'])->middleware('auth', 'admin');
    Route::post('/categorias/create', [CategoriaController::class, 'store'])->middleware('auth', 'admin');
    Route::delete('/categorias/{id}', [CategoriaController::class, 'destroy'])->middleware('auth', 'admin');

});



Route::prefix('/restaurantes')->group(function(){
    Route::get('/admin', [RestauranteController::class, 'dash'])->middleware('auth', 'restaurante');
    Route::get('/create', [RestauranteController::class, 'create'])->middleware('auth', 'restaurante');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
