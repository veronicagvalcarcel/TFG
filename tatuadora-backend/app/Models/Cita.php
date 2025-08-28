<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    use HasFactory;

    protected $fillable = [
        'cliente_id',
        'fecha',
        'hora',
        'estado',
        'notas',
    ];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'cliente_id');
    }

    // Crear una cita
    public static function crearCita($data)
    {
        return self::create($data);
    }

    // Cambiar el estado de la cita
    public function actualizarEstado($estado)
    {
        $this->estado = $estado;
        $this->save();
        return $this;
    }

    // Cancelar una cita
    public function cancelar()
    {
        $this->estado = 'cancelada';
        $this->save();
    }
}
