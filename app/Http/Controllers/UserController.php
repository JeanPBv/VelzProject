<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator; 

class UserController extends Controller {
   
    public function register_user(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'phone' => 'required|string|max:15',
            'dni' => 'required|string|max:15',
            'password' => 'required|string|min:6',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $user = new User();
        $user->name = $request->input('name');
        $user->lastname = $request->input('lastname');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');
        $user->dni = $request->input('dni');
        $user->password = Hash::make($request->input('password')); 

        if ($user->save()) {
            return response()->json(['message' => 'Usuario registrado con éxito.'], 201);
        } else {
            return response()->json(['message' => 'Error al registrar el usuario.'], 500);
        }
    }

    public function view_user_email($email)
    {
        $user = User::where('email', $email)->first();

        if ($user) {
            return response()->json([
                'message' => 'Usuario encontrado.',
                'user' => $user->makeHidden(['password'])
            ], 200);
        } else {
            return response()->json([
                'message' => 'Usuario no encontrado.'
            ], 404);
        }
    }

    public function view_user_id($id)
    {
        $user = User::find($id);

        if ($user) {
            return response()->json([
                'message' => 'Usuario encontrado.',
                'user' => $user->makeHidden(['password'])
            ], 200);
        } else {
            return response()->json([
                'message' => 'Usuario no encontrado.'
            ], 404);
        }
    }

    public function login_user(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);


        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();
            // $token = $user->createToken('Token Name')->accessToken;

            return response()->json([
                'message' => 'Login successful',
                'user' => $user,
                // 'token' => $token, // Descomentar si se está usando un token
            ], 200);
        }

        return response()->json(['message' => 'Invalid credentials'], 401);
    }

}
