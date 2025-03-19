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
}

