<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\TemasController;
use App\Http\Controllers\PostsController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/categorias', [CategoriasController::class, 'index']);
Route::get('/categorias/{slug}/temas', [TemasController::class, 'index']);
Route::get('/temas/{slug}/posts', [PostsController::class, 'index']);
