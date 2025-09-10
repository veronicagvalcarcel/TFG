<?php

namespace App\Mail;

use App\Models\Cita;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailConfirmaCita extends Mailable
{
    use Queueable, SerializesModels;

    public $cita;

    public function __construct(Cita $cita)
    {
        $this->cita = $cita;
    }

    public function build()
    {
        return $this->subject('¡Tu cita con Witch Tattoo ha sido confirmada!') // asunto del correo
                    ->view('emails.cita_confirmada') // puedes usar HTML aquí
                    >with([
                        'nombre' => $this->cita->cliente->nombre,
                        'apellido' => $this->cita->cliente->apellido,
                        'fecha' => $this->cita->fecha,
                        'hora' => $this->cita->hora,
                    ]);
    }
}
