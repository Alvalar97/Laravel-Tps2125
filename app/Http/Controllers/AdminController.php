<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class AdminController extends Controller
{
    // Muestra el panel según el rol
    public function dashboard()
    {
        $admin = session('admin');

        // Verificar si hay un administrador autenticado
        if (!$admin) {
            return redirect()->route('inicio')->with('error', 'Acceso no autorizado');
        }

        $productos = Producto::all();

        // Si el rol es 'editor', mostrar editor.blade.php
        if ($admin->rol === 'editor') {
            return view('editor', compact('productos'));
        }

        // Por defecto, mostrar admin.blade.php
        return view('admin', compact('productos'));
    }
}
