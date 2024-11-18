<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dentist;
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
}
