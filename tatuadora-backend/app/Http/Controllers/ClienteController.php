<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Cita;

class ClienteController extends Controller
{
    public function crearEjemplo()
    {
        // Crear cliente
        $cliente = Cliente::createClient([
            'nombre' => 'Ana',
            'correo' => 'ana@mail.com',
            'telefono' => '123456789',
        ]);

        // Crear cita para ese cliente
        $cita = Cita::createAppointment([
            'client_id' => $cliente->id,
            'date' => '2025-08-19',
            'time' => '15:00',
            'status' => 'pendiente',
        ]);

        return response()->json([
            'cliente' => $cliente,
            'cita' => $cita,
        ]);
    }
}
