<?php

use Illuminate\Support\Facades\Route;  // Agrega esta línea
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'inicio'])->name('inicio');
Route::get('/inicio', [PageController::class, 'inicio'])->name('inicio');
Route::get('/nosotros', [PageController::class, 'nosotros'])->name('nosotros');

// Ruta para listar productos usando el método index
Route::get('/productos', [ProductoController::class, 'index'])->name('productos.index');
