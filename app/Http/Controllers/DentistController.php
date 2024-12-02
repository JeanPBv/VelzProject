<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dentist;
use App\Models\Review;
use App\Models\Appointment;
use App\Http\Controllers\Controller;

class DentistController extends Controller
{
    public function get_all_dentist()
    {
        $dentist = Dentist::all();
        return response()->json($dentist, 200);
    }

    public function get_dentist($id)
    {
        $dentist = Dentist::find($id);

        if (!$dentist) {
            return response()->json(['error' => 'Dentist not found'], 404);
        }

        return response()->json($dentist);
    }

    public function doctorStats($doctorId)
    {

        $averageRating = Review::where('dentist_id', $doctorId)
            ->avg('rating');

        $averageRating = $averageRating ?: 0;

        $completedAppointments = Appointment::where('dentist_id', $doctorId)
            ->where('status', 'Terminado')
            ->count();

        $pendingAppointments = Appointment::where('dentist_id', $doctorId)
            ->where('status', 'Pendiente')
            ->count();

        $patients = Appointment::where('dentist_id', $doctorId)
            ->whereIn('status', ['Terminado'])
            ->distinct('user_id') 
            ->count('user_id'); 

        return response()->json([
            'average_rating' => $averageRating, 
            'completed_appointments' => $completedAppointments,
            'pending_appointments' => $pendingAppointments, 
            'patients_attended' => $patients,
        ]);
    }
}
