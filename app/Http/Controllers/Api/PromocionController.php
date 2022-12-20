<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use App\Models\Establecimiento;
use App\Models\Promocion;

class PromocionController extends Controller
{
    public function guardarPromocion(Request $request)
    {
        $promocion = new Promocion();
        $promocion->user_id = '1';
        $promocion->foto_id = $request['foto_id'];
        $promocion->plantilla_id  = $request['plantilla_id'];
        $promocion->estado_solicitud  = '1';
        $promocion->direccion  = $request['direccion'];
        $promocion->telefono  = $request['celular'];
        $promocion->horario  = $request['horario'];
        $promocion->vigencia  = $request['vigencia'];
        $promocion->restricciones  = $request['restricciones'];
        $promocion->acepta  = $request['acepta'];
        $promocion->estado  = '1';
        $promocion->json  = $request['json'];
        $promocion->descargas  = '0';
        $promocion->save();

        return response([
            'message' => 'Promocion Grabada Correctamente',
            'promocion' => $promocion
        ]);
    }
}
