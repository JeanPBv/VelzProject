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
            'message' => 'Cita agregada exitosamente'
        ], 201);
    }


    public function list_appoint()
    {
        $appointments = Appointment::with(['user', 'treatment'])->get();

        return response()->json([
            'appointments' => $appointments
        ], 200);
    }
}
