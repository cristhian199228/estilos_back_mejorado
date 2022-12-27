<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Foto;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;


class FotoController extends Controller
{
    public function getFotoRubro(int $id)
    {
        if ($id == 0) {
            $foto = Foto::All();
        } else {
            $foto = Foto::where('rubro_id', $id)
                ->get();
        }
        $respuesta = [
            'code' => 200,
            'status' => 'success',
            'data' => $foto
        ];
        return response($respuesta, $respuesta['code']);
    }
    public function getFotoRubroAdmin(int $id)
    {
        if ($id == 0) {
            $foto = Foto::with('Promocion')
                ->with('Rubro')
                ->get();
        } else {
            $foto = Foto::where('rubro_id', $id)
                ->with('Promocion')
                ->with('Rubro')
                ->get();
        }
        $respuesta = [
            'code' => 200,
            'status' => 'success',
            'data' => $foto
        ];
        return response($respuesta, $respuesta['code']);
    }
    public function MostrarFoto(string $ruta)
    {
        $file = '/APPE_I/' . $ruta;
        $file = Storage::disk('fotos')->get($file);
        return Image::make($file)->response();
    }
    public function subirNuevaFoto(Request $request)
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
        Storage::disk('fotos')->put('/APPE_I/' . $unique_name, $photo);
        $foto = new Foto();
        $foto->rubro_id = $request->idrubro;
        $foto->ruta = $unique_name;
        $foto->save();

        $respuesta = [
            'code' => 200,
            'status' => 'success',
            'data' => $foto
        ];
        return response($respuesta, $respuesta['code']);
    }
    public function subirFotoParaModelar(Request $request)
    {
        $img = $request->file;
        $img = str_replace('data:image/jpeg;base64,', '', $img);
        $img = str_replace(' ', '+', $img);
        $image = base64_decode($img);
        $foto = Foto::find($request->foto_id);
        Storage::disk('fotos')->put('/APPE_I/' . $foto->ruta, $image);
        $respuesta = [
            'code' => 200,
            'status' => 'success',
            'path' => $foto->ruta,

        ];
        return response($respuesta, $respuesta['code']);
    }
    public function cambiarRubroFoto(Request $request)
    {
        $foto = Foto::find($request->foto_id);
        $foto->rubro_id = $request->rubro_id;
        $foto->save();
        $respuesta = [
            'code' => 200,
            'status' => 'success',
            'path' => $foto,

        ];
        return response($respuesta, $respuesta['code']);
    }
    public function eliminarFoto(Request $request)
    {
        $foto = Foto::find($request['id']);
        $foto->delete();
        $respuesta = [
            'code' => 200,
            'status' => 'success',
        ];
        return response($respuesta, $respuesta['code']);
    }
}
