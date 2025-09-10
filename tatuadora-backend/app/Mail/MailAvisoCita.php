<?php

namespace App\Mail;

use App\Models\Cita;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailAvisoCita extends Mailable
{
    use Queueable, SerializesModels;

    public $cita;

    public function __construct(Cita $cita)
    {
        $this->cita = $cita;
    }

    public function build()
    {
        $urlConfirm = url("/api/citas/{$this->cita->id}/confirm");

        return $this->subject('Witch Tattoo ha recibido una nueva cita') // asunto del correo
                    ->text('emails.nueva_cita')
                    ->with([
                        'nombre' => $this->cita->cliente->nombre,
                        'apellido' => $this->cita->cliente->apellido,
                        'fecha' => $this->cita->fecha,
                        'hora' => $this->cita->hora,
                        'urlConfirm' => $urlConfirm,
                    ]);
    }
}
