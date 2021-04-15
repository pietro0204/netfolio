<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\IndexController;

Route::get('/cad', [UsuarioController::class, 'cad']);
Route::post('/cadastrar', [UsuarioController::class, 'cadastrar']);

Route::get('/login', [LoginController::class, 'login']);
Route::post('/logar', [LoginController::class, 'logar']);

Route::get('/', [IndexController::class, 'inicio']);

Route::get('/perfil', [IndexController::class, 'perfil']);

Route::get('/publi', [IndexController::class, 'publi']);
