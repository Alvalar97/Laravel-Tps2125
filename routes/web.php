<?php

use App\Http\Controllers\Page2Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'inicio'])->name('inicio');

Route::get('/inicio', [PageController::class, 'inicio'])->name('inicio');

Route::get('/productos', [Page2Controller::class, 'create'])->name('productos');

Route::get('/nosotros', [PageController::class, 'nosotros'])->name('nosotros');

