<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'produtos']);
// Route::get('/categorias', [CategoriaController::class, 'index']);
// Route::get('/categorias/new', [CategoriaController::class, 'create']);

Route::resource('categorias', CategoriaController::class);

