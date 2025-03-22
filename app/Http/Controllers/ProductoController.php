<?php
// En app/Http/Controllers/ProductoController.php
namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {
        // Obtén todos los productos de la tabla "productos"
        $productos = Producto::all();
        // Pasa los datos a la vista "productos.index"
        return view('productos', compact('productos'));
    }

    // Otros métodos (create, store, etc.) para CRUD...
}
