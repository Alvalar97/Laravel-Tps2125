<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    // Especifica el nombre real de la tabla, ya que la convención por defecto (administradors) no es la correcta.
    protected $table = 'administradores';

    // Define la clave primaria, ya que no se llama "id" sino "idAdmin".
    protected $primaryKey = 'idAdmin';

    // Si deseas que Eloquent maneje automáticamente los timestamps, define las constantes para los nombres personalizados:
    const CREATED_AT = 'creadoEn';
    const UPDATED_AT = 'actualizadoEn';

    // Si no se usan timestamps automáticos, podrías desactivar la propiedad:
    // public $timestamps = false;

    // Define los campos que pueden asignarse masivamente.
    protected $fillable = [
        'usuario',
        'contraseña',  // Nota: Ten cuidado con la gestión de contraseñas; podrías querer encriptarlas.
        'correo',
        'rol'
    ];
}
