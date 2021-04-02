<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;



Route::get('/', [LoginController::class, 'inicio']);
Route::get('/perfil', [LoginController::class, 'perfil']);
Route::get('/login', [LoginController::class, 'login' ]);
Route::get('/cad', [LoginController::class, 'cad' ]);
Route::post('/cadusuario', [LoginController::class, 'cadusuario' ]);
