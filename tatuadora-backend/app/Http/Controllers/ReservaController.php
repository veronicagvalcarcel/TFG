<?php

namespace App\Http\Controllers;

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
     * Muestra el formulario para crear una nueva reserva.
     */
    public function create()
    {
        //
    }

    /**
     * Almacena una nueva reserva en la base de datos.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'cliente' => 'required|string|max:255',
            'fecha' => 'required|date',
            'servicio' => 'required|string|max:255',
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
     * Muestra el formulario para editar una reserva específica.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Actualiza una reserva específica en la base de datos.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'cliente' => 'required|string|max:255',
            'fecha' => 'required|date',
            'servicio' => 'required|string|max:255',
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
