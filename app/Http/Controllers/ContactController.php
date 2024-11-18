<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string',
        ]);

        $contact = Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'asunto' => $request->subject,
            'mensaje' => $request->message,
        ]);

        return response()->json([
            'message' => 'Contacto agregado exitosamente',
            'contacto_id' => $contact->id
        ], 201);
    }
}
