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
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'correo' => 'required|email',
            'telefono' => 'required|string|max:20',
            'fecha' => 'required|date',
            'hora' => 'required|date_format:H:i',
        ]);

        $cliente = Cliente::firstOrCreate(
            ['correo' => $request->correo], // busca por correo único
            [
                'nombre' => $request->nombre,
                'apellido' => $request->apellido,
                'telefono' => $request->telefono
            ]
        );

        $cita = Cita::create([
            'cliente_id' => $cliente->id,
            'fecha' => $request->fecha,
            'hora' => $request->hora,
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
        $cita = Cita::with('client')->findOrFail($id);
        return response()->json($cita);
    }

    // Actualizar una cita
    public function update(Request $request, $id)
    {
        // Validar los datos recibidos
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
