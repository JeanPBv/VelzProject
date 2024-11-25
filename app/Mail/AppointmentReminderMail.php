<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Appointment;

class AppointmentReminderMail extends Mailable
{
    use Queueable, SerializesModels;

    public $appointment;

    public function __construct(Appointment $appointment)
    {
        $this->appointment = $appointment;
    }

    public function build()
    {
        return $this->view('emails.appointment-reminder')
                    ->subject('Recordatorio de Cita Próxima')
                    ->with([
                        'name' => $this->appointment->user->name,
                        'dentist' => $this->appointment->dentist->lastname,
                        'treatment' => $this->appointment->treatment->name,
                        'date' => $this->appointment->date_appointment,
                        'time' => $this->appointment->time_appointment,
                    ]);
    }
}
