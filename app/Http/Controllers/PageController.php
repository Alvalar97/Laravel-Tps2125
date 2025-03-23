<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function inicio()
    {
        return view('inicio');
    }

    public function productos()
    {
        return view('productos');
    }

    public function nosotros()
    {
        return view('nosotros');
    }

    public function admin()
    {
        return view('admin'); // Asegúrate de tener la vista admin.blade.php
    }

    public function editor()
    {
        return view('editor'); // Asegúrate de tener la vista editor.blade.php
    }
}
