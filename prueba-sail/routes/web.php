<?php

//use App\Http\Controllers\BlogController;
//use App\Http\Controllers\HolaController;
use Illuminate\Support\Facades\Route;

Route::get('/hola/{nombre}', [HolaController::class, 'index']);

Route::get('/', function () {
    return view("Welcome");
});

Route::get('/hola/{nombre}', [HolaController::class, 'show']);


//BlogController

Route::get('/index', [BlogController::class, 'index'])->name('blog.index');
Route::get('/show/{nombreBlog}', [BlogController::class, 'show'])->name('blog.show');
Route::get('/create/{nombreBlog}', [BlogController::class, 'create'])->name('blog.create');

Route::get('contactos', function () {
    return "Sección de contactos";
});

/*
Route::get('/', function () {
    echo "<p><a href='/contactos'>Contactos 1 </a></p>";
    echo "<p><a href='/contactos'>Contactos 2 </a></p>";
    echo "<p><a href='/contactos'>Contactos 3 </a></p>";
    echo "<p><a href='/contactos'>Contactos 4 </a></p>";
    echo "<p><a href='/contactos'>Contactos 5 </a></p>";
});*/



Route::prefix('admin')->middleware('auth', 'isAdmin')->group(function () {
    Route::get('dashboard', function () {
        return "Dashboard admin";
    });
});


Route::get('/login', function () {
    return 'Página de login';
})->name('login');


//Route::view('/welcome', 'hola');
Route::view('/welcome', 'hola', ['nombre' => 'Taylor']);
    
