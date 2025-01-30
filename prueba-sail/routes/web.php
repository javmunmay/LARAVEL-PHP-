<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\HolaController;  
use Illuminate\Support\Facades\Route;

Route::get('/hola/{nombre}', [HolaController::class, 'index']);

Route::get('/hola', function () {
    return "Hola, mundo";
});

Route::get('/hola/{nombre}', [HolaController::class, 'show']);


//BlogController

Route::get('/index', [BlogController::class, 'index'])->name('blog.index');
Route::get('/show/{nombreBlog}', [BlogController::class, 'show'])->name('blog.show');
Route::get('/create/{nombreBlog}', [BlogController::class, 'create'])->name('blog.create');

?>
