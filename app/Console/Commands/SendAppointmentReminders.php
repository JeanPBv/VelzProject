<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Appointment;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;
use App\Notifications\AppointmentReminder;
use Illuminate\Support\Facades\Mail;
use App\Mail\AppointmentReminderMail;

class SendAppointmentReminders extends Command
{
    protected $signature = 'appointments:send-reminders';
    protected $description = 'Envía recordatorios de citas a los usuarios';

    public function handle()
    {
        // Obtén las citas cuyo recordatorio es en el rango de los próximos minutos
        $now = Carbon::now(); 
        $startTime = $now->copy()->subMinutes(5)->toDateTimeString(); 
        $endTime = $now->toDateTimeString();

        Log::info("Ahora: $now");
        Log::info("Rango: Desde $startTime hasta $endTime");

        $appointments = Appointment::whereBetween('reminder_datetime', [$startTime, $endTime])->get();
        
        Log::info('Citas obtenidas para el recordatorio:', ['appointments' => $appointments]);

        foreach ($appointments as $appointment) {
            Log::info("Enviando recordatorio para cita ID: {$appointment->id}");
            //$appointment->user->notify(new \App\Notifications\AppointmentReminder($appointment));
            Mail::to($appointment->user->email)->send(new AppointmentReminderMail($appointment));

        }
        
        Log::info('Comando appointments:send-reminders completado.');
        $this->info('Recordatorios enviados con éxito.');
    }
}