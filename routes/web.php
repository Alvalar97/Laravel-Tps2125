<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AdminController;

// Rutas principales
Route::get('/', [PageController::class, 'inicio'])->name('inicio');
Route::get('/inicio', [PageController::class, 'inicio'])->name('pagina.inicio');
Route::get('/nosotros', [PageController::class, 'nosotros'])->name('nosotros');

// Ruta para el panel de administrador (muestra admin o editor según el rol)
Route::get('/admin', [AdminController::class, 'dashboard'])->name('admin.panel');

// Ruta para cerrar sesión
Route::get('/logout', function () {
    session()->forget('admin');
    return redirect()->route('inicio');
})->name('admin.logout');

// Rutas CRUD de productos (esto ya incluye productos.index)
Route::resource('productos', ProductoController::class);

// Rutas para simular el inicio de sesión
Route::get('/login-admin', function () {
    session(['admin' => (object) [
        'rol' => 'admin',
        'usuario' => 'Administrador'
    ]]);
    return redirect()->route('admin.panel');
})->name('admin.login');

Route::get('/login-editor', function () {
    session(['admin' => (object) [
        'rol' => 'editor',
        'usuario' => 'Editor'
    ]]);
    return redirect()->route('admin.panel');
})->name('editor.login');
