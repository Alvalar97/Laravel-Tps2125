<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    // Asumimos que la tabla se llama "productos"
    // Si no sigue la convención, descomenta la siguiente línea:
    // protected $table = 'productos';

    // La clave primaria es "idProducto"
    protected $primaryKey = 'idProducto';

    // Configuramos los timestamps personalizados para que Eloquent los reconozca.
    const CREATED_AT = 'creadoEn';
    const UPDATED_AT = 'actualizadoEn';

    // Si la tabla usa timestamps y deseas que Eloquent los gestione, deja esta propiedad.
    // De lo contrario, usa: public $timestamps = false;

    // Los campos que pueden asignarse masivamente.
    protected $fillable = [
        'idCategoria',
        'idAdmin',
        'nombre',
        'descripcion',
        'imagen_url',
        'precio'
    ];

    /**
     * Relación: un Producto pertenece a una Categoría.
     * Se asume que el modelo de categoría se llama "Categoria" y que la clave foránea es "idCategoria".
     */
    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'idCategoria');
    }

    /**
     * Relación: un Producto pertenece a un Admin.
     * Se asume que el modelo de administrador se llama "Admin" y que la clave foránea es "idAdmin".
     */
    public function admin()
    {
        return $this->belongsTo(Admin::class, 'idAdmin');
    }
}
