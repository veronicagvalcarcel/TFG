<?php

namespace App\Http\Controllers;

use App\Models\Cita;
use App\Models\Cliente;
use App\Mail\MailAvisoCita;
use App\Mail\MailConfirmaCita;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;


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
            'ubicacion' => 'required|in:Sa Coma,El Hoyo,Izz Tattoo'
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
            'ubicacion' => $request->ubicacion,
            'estado' => 'pendiente',
        ]);

        // Enviar correo de aviso al tatuador
        try {
            Mail::to('veronicagelabert8@gmail.com')->send(new MailAvisoCita($cita));
        } catch (\Exception $e) {
            // Solo loguear el error, no interrumpir
            Log::error('Error al enviar correo: ' . $e->getMessage());
        }


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
            'ubicacion' => 'required|string|max:255',
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

    // Confirmar una cita
    public function confirm($id)
    {
        $cita = Cita::with('cliente')->findOrFail($id);

        if ($cita->estado === 'confirmado') {
            return response()->json(['message' => 'La cita ya estaba confirmada.']);
        }

        $cita->estado = 'confirmada';
        $cita->save();

        // Mandar correo al cliente
        try {
            Mail::to($cita->cliente->correo)->send(new MailConfirmaCita($cita));
        } catch (\Exception $e) {
            Log::error('Error al enviar correo de confirmación: ' . $e->getMessage());
        }


        return response()->json([
            'message' => 'Cita confirmada y correo enviado al cliente.',
            'cita' => $cita,
        ]);
    }
}
