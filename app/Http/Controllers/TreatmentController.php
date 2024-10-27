<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Treatment;
use App\Http\Controllers\Controller;

class TreatmentController extends Controller {
   
    public function get_all_treatment()
    {
        $treatments = Treatment::all();
        return response()->json($treatments, 200);
    }

    public function get_treatment($id)
    {
        $treatment = Treatment::find($id);

        if (!$treatment) {
            return response()->json(['error' => 'Treatment not found'], 404);
        }

        return response()->json($treatment);
    }

}
