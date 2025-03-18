<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio');
});

Route::get('/productos', function () {
    return view('productos');
})->name('productos');

Route::get('/nosotros', function () {
    return view('nosotros');
})->name('nosotros');
