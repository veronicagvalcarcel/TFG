<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Reserva;
use Illuminate\Http\Request;

class ReservaController extends Controller
{
    /**
     * Muestra una lista de todas las reservas.
     */
    public function index()
    {
        return Reserva::all();
    }

    /**
     * Almacena una nueva reserva en la base de datos.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'fecha' => 'required|date',
            'mensaje' => 'nullable|string',
        ]);

        $reserva = Reserva::create($validated);
        return response()->json($reserva, 201);
    }

    /**
     * Muestra una reserva específica.
     */
    public function show($id)
    {
        return Reserva::findOrFail($id);
    }

    /**
     * Actualiza una reserva específica en la base de datos.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'fecha' => 'required|date',
            'mensaje' => 'nullable|string',
        ]);

        $reserva = Reserva::findOrFail($id);
        $reserva->update($validated);
        return response()->json($reserva, 200);
    }

    /**
     * Elimina una reserva específica de la base de datos.
     */
    public function destroy($id)
    {
        Reserva::destroy($id);
        return response()->json(null, 204);
    }
}
