<?php

use App\Http\Controllers\ArteController;
use App\Http\Controllers\ImgController;
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
Route::post('/perfil/editar', [IndexController::class, 'editar']);

Route::get('/publi', [IndexController::class, 'publi']);

Route:: post('/arte/cadastrar', [ArteController::class, 'cadastrar']);
Route:: post('/arte/editar', [ArteController::class, 'editar']);
Route:: get('/arte/excluir', [ArteController::class, 'excluir']);

Route::get('/artes', [ArteController::class, 'listagem']);
