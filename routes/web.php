<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutorController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('autores', AutorController::class);
