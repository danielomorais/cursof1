<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'produtos']);
Route::get('/categorias', [HomeController::class, 'categorias']);
