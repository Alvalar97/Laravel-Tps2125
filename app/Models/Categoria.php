<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    // Especifica el nombre de la tabla si no sigue la convención (en este caso "categorias" es correcto)
    protected $table = 'categorias';

    // Define la clave primaria, ya que no se llama "id" sino "idCategoria"
    protected $primaryKey = 'idCategoria';

    // Configura los nombres de las columnas de timestamp personalizados
    const CREATED_AT = 'creadoEn';
    const UPDATED_AT = 'actualizadoEn';

    // Si no deseas que se administren automáticamente los timestamps, puedes desactivarlos:
    // public $timestamps = false;

    // Define los campos que se pueden asignar masivamente
    protected $fillable = [
        'idAdmin',
        'nombre',
        'descripcion'
    ];

    /**
     * Relación: Una categoría pertenece a un administrador.
     */
    public function admin()
    {
        return $this->belongsTo(Admin::class, 'idAdmin');
    }

    /**
     * Relación: Una categoría puede tener muchos productos.
     */
    public function productos()
    {
        return $this->hasMany(Producto::class, 'idCategoria');
    }
}
