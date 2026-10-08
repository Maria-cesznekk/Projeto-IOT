<?php

use App\Http\Controllers\RegistroController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/registro', [RegistroController::class, 'store']);
Route::get('registro/valor', [RegistroController::class, 'getValor']);
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');