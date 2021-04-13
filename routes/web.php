<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\IndexController;

Route::get('/', [IndexController::class, 'inicio']);

Route::get('/perfil', [UsuarioController::class, 'perfil']);

Route::get('/login', [UsuarioController::class, 'login']);
Route::post('/logar', [UsuarioController::class, 'logar']);

Route::get('/cad', [UsuarioController::class, 'cad']);
Route::post('/cadusuario', [UsuarioController::class, 'cadusuario']);
