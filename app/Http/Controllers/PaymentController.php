<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use App\Models\Appointment;


class PaymentController extends Controller
{
    public function getAllPayments()
    {
        $payments = Payment::all();

        return response()->json($payments);
    }

    // public function getPaymentsByUserId($userId)
    // {

    //     $appointments = Appointment::where('user_id', $userId)->get();
    //     $payments = Payment::whereIn('appointment_id', $appointments->pluck('id'))->get();

    //     return response()->json($payments);
    // }

    public function addPayment(Request $request)
    {
        $request->validate([
            'amount' => 'required|numeric|min:0',
            'payment_date' => 'required|string'
        ]);

        $payment = Payment::create([
            'appointment_id' => $request->appointment_id,
            'amount' => $request->amount,
            'status' => 'Pendiente',
            'payment_date' => $request->payment_date
        ]);

        return response()->json([
            'message' => 'Pago registrado exitosamente',
        ], 201);
    }

    public function getPaymentsByUserId($userId)
    {
        $appointments = Appointment::with(['treatment', 'dentist'])
            ->where('user_id', $userId)
            ->get();

        $payments = Payment::whereIn('appointment_id', $appointments->pluck('id'))
            ->with(['appointment.treatment', 'appointment.dentist'])
            ->get();

        return response()->json([
            'payments' => $payments
        ], 200);
    }

    public function success()
    {
        return response()->json(['message' => 'Pago exitoso'], 200);
    }

    public function fail()
    {
        return response()->json(['message' => 'Pago fallido'], 403);
    }

    public function alreadyPaid(){
        return response()->json(['message' => 'Pago rechazado, cita no encontrada'], 403);
    }
}
