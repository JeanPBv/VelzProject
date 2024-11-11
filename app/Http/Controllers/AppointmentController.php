<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;

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
        ]);

        $appointment = Appointment::create([
            'date_appointment' => $request->date_appointment,
            'time_appointment' => $request->time_appointment,
            'user_id' => $request->user_id,           
            'treatment_id' => $request->treatment_id,
            'status' => 'Pendiente',                    
            'reminder' => $request->reminder,
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
        $appointments = Appointment::with('treatment')
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
        ]);

        $conflictingAppointments = Appointment::where('id', '!=', $id)
            ->where('date_appointment', $request->date_appointment)
            ->where('time_appointment', $request->time_appointment)
            ->exists();

        if ($conflictingAppointments) {
            return response()->json(['message' => 'Ya existe una cita para esta fecha y hora'], 409);
        }

        $appointment->update([
            'date_appointment' => $request->date_appointment,
            'time_appointment' => $request->time_appointment,
            'user_id' => $request->user_id,
            'treatment_id' => $request->treatment_id,
            'status' => 'Pendiente',
            'reminder' => $request->reminder,
        ]);

        return response()->json(['message' => 'Cita actualizada exitosamente'], 200);
    }


}
