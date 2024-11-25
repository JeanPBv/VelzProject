<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;

class AppointmentController extends Controller
{
    public function add_appoint(Request $request)
    {
        $request->validate([
            'date_appointment' => 'required|string',
            'time_appointment' => 'required|string',
            'reminder' => 'required|integer',
            'user_id' => 'required|exists:users,id',         
            'treatment_id' => 'required|exists:treatments,id',
            'dentist_id' => 'required|exists:dentists,id'
        ]);

        $datetime = Carbon::createFromFormat('d/m/Y g:i A', $request->date_appointment . ' ' . $request->time_appointment);
        $reminderTime = $datetime->copy()->subMinutes($request->reminder);


        $appointment = Appointment::create([
            'dentist_id' => $request->dentist_id,
            'date_appointment' => $request->date_appointment,
            'time_appointment' => $request->time_appointment,
            'user_id' => $request->user_id,           
            'treatment_id' => $request->treatment_id,
            'status' => 'Pendiente',                    
            'reminder' => $request->reminder,
            'reminder_datetime' => $reminderTime,
        ]);

        return response()->json([
            'message' => 'Cita agregada exitosamente',
            'appointment_id' => $appointment->id
        ], 201);
    }


    public function list_appoint()
    {
        $appointments = Appointment::with('treatment')
            ->where('status', 'pendiente')
            ->get();

        return response()->json([
            'appointments' => $appointments
        ], 200);
    }


    public function list_appoint_user($userId)
    {
        $appointments = Appointment::with(['treatment', 'dentist'])
            ->where('user_id', $userId)
            ->orderByRaw("STR_TO_DATE(date_appointment, '%d/%m/%Y') DESC")
            ->get();

        return response()->json([
            'appointments' => $appointments
        ], 200);
    }

    public function edit_appoint(Request $request, $id)
    {
        $appointment = Appointment::find($id);
        if (!$appointment) {
            return response()->json(['message' => 'Cita no encontrada'], 404);
        }

        $request->validate([
            'date_appointment' => 'required|string',
            'time_appointment' => 'required|string',
            'reminder' => 'required|integer',
            'user_id' => 'required|exists:users,id',
            'treatment_id' => 'required|exists:treatments,id',
            'dentist_id' => 'required|exists:dentists,id'
        ]);

        $conflictingAppointments = Appointment::where('id', '!=', $id)
            ->where('date_appointment', $request->date_appointment)
            ->where('time_appointment', $request->time_appointment)
            ->exists();

        if ($conflictingAppointments) {
            return response()->json(['message' => 'Ya existe una cita para esta fecha y hora'], 409);
        }

        $datetime = Carbon::createFromFormat('d/m/Y g:i A', $request->date_appointment . ' ' . $request->time_appointment);
        $reminderTime = $datetime->copy()->subMinutes($request->reminder);

        $appointment->update([
            'dentist_id' => $request->dentist_id,
            'date_appointment' => $request->date_appointment,
            'time_appointment' => $request->time_appointment,
            'user_id' => $request->user_id,
            'treatment_id' => $request->treatment_id,
            'status' => 'Pendiente',
            'reminder' => $request->reminder,
            'reminder_datetime' => $reminderTime
        ]);

        return response()->json(['message' => 'Cita actualizada exitosamente'], 200);
    }

    public function getAppointmentsWithin30Minutes()
    {
    
        $now = Carbon::now(); 
        $startTime = $now->copy()->subMinutes(5)->toDateTimeString(); 
        $endTime = $now->toDateTimeString();

        Log::info("Ahora: $now");
        Log::info("Rango: Desde $startTime hasta $endTime");

        $appointments = Appointment::whereBetween('reminder_datetime', [$startTime, $endTime])->get();

        Log::info('Citas encontradas en el rango:', ['appointments' => $appointments]);

        return response()->json([
            'appointments' => $appointments
        ]);
        
    }

}
