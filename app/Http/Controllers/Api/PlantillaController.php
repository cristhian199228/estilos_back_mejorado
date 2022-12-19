<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Plantilla;
use Illuminate\Support\Facades\Storage;
use Image;

class PlantillaController extends Controller
{
    public function listado(){
        $plantilla = Plantilla::All();
        $respuesta = [
            'code' => 200,
            'status' => 'success',
            'data' => $plantilla
        ];
        return response($respuesta, $respuesta['code']);
    }
    public function mostrarFotoPlantilla(string $ruta)
    {
        $file = '/APPE_I/' . $ruta;
        $file = Storage::disk('fotos')->get($file);
        return Image::make($file)->response();
    }
}
