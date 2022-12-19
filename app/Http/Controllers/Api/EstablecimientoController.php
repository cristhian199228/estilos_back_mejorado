<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use App\Models\Establecimiento;

class EstablecimientoController extends Controller
{
    public function subirLogo(Request $request)
    {
        $request->validate([
            'file' => 'required',
        ]);
        $image = $request->file;
        $imageName = Str::random(10) . '.' . 'jpg';
        $unique_name = md5($imageName . time()) . '.jpg';
        $height = Image::make($request->file('file'))->height();
        $width = Image::make($request->file('file'))->width();
        if ($width > $height) {
            $photo = Image::make($image)
                ->resize(null, 1080, function ($constraint) {
                    $constraint->aspectRatio();
                })
                ->encode('jpg', 80);
        } else {
            $photo = Image::make($image)
                ->resize(1080, null, function ($constraint) {
                    $constraint->aspectRatio();
                })
                ->encode('jpg', 80);
        }
        Storage::disk('fotos')->put('/APPE_L/' . $unique_name, $photo);
        $establecimiento = Establecimiento::find($request->establecimiento_id);
        $establecimiento->ruta_logo = $unique_name;
        $establecimiento->save();

        $respuesta = [
            'code' => 200,
            'status' => 'success',
            'data' => $establecimiento
        ];
        return response($respuesta, $respuesta['code']);
    }
    public function mostrarLogo($ruta)
    {
        $file = '/APPE_L/' . $ruta;
        $file = Storage::disk('fotos')->get($file);
        return Image::make($file)->response();
    }
}
