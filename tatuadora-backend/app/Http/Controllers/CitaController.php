<?php

namespace App\Http\Controllers;

use App\Models\Cita;
use App\Models\Cliente;
use Illuminate\Http\Request;

class CitaController extends Controller
{
    // Obtener todas las citas
    public function index()
    {
        return Cita::all();
    }

    // Crear una nueva cita
    public function store(Request $request)
    {
        // Validar campos
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'correo' => 'required|email',
            'telefono' => 'required|string|max:20',
            'fecha' => 'required|date',
            'hora' => 'required|date_format:H:i',
        ]);

        // Redondear la hora al múltiplo de 15 minutos más cercano
        $horaFormateada = date('H:i:00', strtotime($request->hora));

        // Verificar si ya existe una cita en esa fecha y hora
        $existeCita = Cita::where('fecha', $request->fecha)
            ->where('hora', $horaFormateada)
            ->first();

        if ($existeCita) {
            return response()->json([
                'error' => 'Ya existe una cita para esta fecha y hora.'
            ], 422);
        }

        // Crear cliente si no existe por correo único
        $cliente = Cliente::firstOrCreate(
            ['correo' => $request->correo],
            [
                'nombre' => $request->nombre,
                'apellido' => $request->apellido,
                'telefono' => $request->telefono
            ]
        );

        // Crear la cita
        $cita = Cita::create([
            'cliente_id' => $cliente->id,
            'fecha' => $request->fecha,
            'hora' => $horaFormateada,
            'estado' => 'pendiente',
        ]);

        return response()->json([
            'cliente' => $cliente,
            'cita' => $cita,
        ]);
    }

    // Mostrar una cita por ID
    public function show($id)
    {
        $cita = Cita::with('cliente')->findOrFail($id);
        return response()->json($cita);
    }

    // Actualizar una cita
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'correo' => 'required|email',
            'telefono' => 'required|string|max:20',
            'fecha' => 'required|date',
            'hora' => 'required|date_format:H:i',
        ]);

        $cita = Cita::findOrFail($id);
        $cita->update($request->all());

        return response()->json($cita);
    }

    // Eliminar una cita
    public function destroy($id)
    {
        Cita::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}
