<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\Appointment;

class ReviewController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'dentist_id' => 'required|exists:dentists,id',
            'user_id' => 'required|exists:users,id',
            'appointment_id' => 'required|exists:appointments,id',
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'required|string|max:1000',
        ]);

        $existingReview = Review::where('appointment_id', $validatedData['appointment_id'])->first();
        if ($existingReview) {
            return response()->json([
                'message' => 'Ya existe una review para esta cita.'
            ], 400);
        }

        $appointment = Appointment::find($validatedData['appointment_id']);

        if ($appointment && $appointment->status === 'Terminado') {
            $review = Review::create([
                'dentist_id' => $validatedData['dentist_id'],
                'user_id' => $validatedData['user_id'],
                'appointment_id' => $validatedData['appointment_id'],
                'rating' => $validatedData['rating'],
                'comment' => $validatedData['comment'],
            ]);

            $appointment->update(['hasreview' => true]);

            return response()->json([
                'message' => 'Review agregada con éxito.'
            ], 201);
        } else {
            return response()->json([
                'message' => 'La cita debe tener el estado "Terminado" para agregar una reseña.'
            ], 400);
        }
    }

    public function getReviewsByAppointmentId($appointmentId)
    {
        $review = Review::with('dentist')->where('appointment_id', $appointmentId)->first();
    
        if (!$review) {
            return response()->json([
                'message' => 'No se encontró una reseña para esta cita.'
            ], 404);
        }
        
        return response()->json($review);
        
    }


}
