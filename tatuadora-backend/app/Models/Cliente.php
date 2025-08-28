<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'apellido',
        'correo',
        'telefono',
        'notas',
    ];

    public function citas()
    {
        // Un cliente puede tener muchas citas
        return $this->hasMany(Cita::class);
    }

    // Crear un cliente
    public static function crearCliente($data)
    {
        return self::create($data);
    }

    // Actualizar un cliente
    public function actualizarCliente($data)
    {
        $this->update($data);
        return $this;
    }

    // Eliminar cliente y sus citas (gracias a onDelete('cascade'))
    public function eliminarCliente()
    {
        $this->delete();
    }
}
