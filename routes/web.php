<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController; // Importa el controlador

Route::get('/', [PageController::class, 'inicio'])->name('inicio');

Route::get('/inicio', [PageController::class, 'inicio'])->name('inicio');

Route::get('/productos', [PageController::class, 'productos'])->name('productos');

Route::get('/nosotros', [PageController::class, 'nosotros'])->name('nosotros');

