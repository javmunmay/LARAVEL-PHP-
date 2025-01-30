<?php

use App\Http\Controllers\HolaController;  
use Illuminate\Support\Facades\Route;

Route::get('/hola/{nombre}', [HolaController::class, 'index']);

Route::get('/hola', function () {
    return "Hola, mundo";
});