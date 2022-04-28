<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CategoriaController;
use App\Http\Controllers\Api\RestauranteController;
use App\Http\Controllers\Api\ClienteController;
use App\Http\Controllers\Api\HorarioController;
use Illuminate\Support\Facades\Route;

use App\Models\User;


Route::get('/', function(){
    return "4.444";
});

/*

Route::prefix('/clientes')->group(function(){
    Route::get('/', [ClienteController::class, 'index'])->middleware('auth:sanctum', 'cliente');
    Route::post('/', [ClienteController::class, 'store']);
    Route::get('/{id}', [ClienteController::class, 'show']);
    Route::put('/{id}', [ClienteController::class, 'update']);
});*/



Route::apiResource('/clientes', ClienteController::class);
Route::apiResource('/categorias', CategoriaController::class);
Route::apiResource('/restaurantes', RestauranteController::class);
Route::apiResource('/horarios', HorarioController::class);





Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);

Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');;




Route::get('/user', function(){
    return response()->json(["usuarios" => User::all()]);
})->middleware('auth:sanctum');





