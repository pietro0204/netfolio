<?php

use App\Http\Controllers\LoginController;



Route::get('/', function () {
    return view('index');
});

Route::get('/acc', function () {
    return view('acc');
});

Route::get('/login', [LoginController::class, 'login' ]);
