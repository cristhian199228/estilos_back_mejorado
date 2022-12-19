<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Rubro;

class RubroController extends Controller
{
    //
    public function listado()
    {
        $rubro = Rubro::All();
        $respuesta = [
            'code' => 200,
            'status' => 'success',
            'data' => $rubro
        ];

        return response($respuesta, $respuesta['code']);
    }
}
