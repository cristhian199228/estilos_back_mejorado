<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function login(Request $request)
    {
        $validated = $request->validate([
            'user' => 'required',
            'password' => 'required'
        ]);

        $data = User::where('usuario', $validated['user'])->first();
        if (Hash::check($validated['password'], $data->password)) {

            $user = User::where('id', $data->id)
                ->where('rol_id', 1)
                ->with('Establecimiento')
                ->first();

            $user->token = $user->createToken('estilos')->plainTextToken;

            return response([
                'message' => 'Usuario logueado correctamente',
                'usuario' => $user
            ]);
        } else {
            return response([
                'message' => 'Usuario y/o Password incorrectos'
            ], 401);
        }
    }
    public function loginadmin(Request $request)
    {
        $validated = $request->validate([
            'user' => 'required',
            'password' => 'required'
        ]);

        $data = User::where('usuario', $validated['user'])->first();
        if (Hash::check($validated['password'], $data->password)) {

            $user = User::where('id', $data->id)
                ->where('rol_id', 2)
                ->with('Establecimiento')
                ->first();

            $user->token = $user->createToken('estilos')->plainTextToken;

            return response([
                'message' => 'Usuario logueado correctamente',
                'usuario' => $user
            ]);
        } else {
            return response([
                'message' => 'Usuario y/o Password incorrectos'
            ], 401);
        }
    }
}
