<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use App\Models\Establecimiento;
use App\Models\Promocion;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\PromocionExport;
use App\Exports\PromocionExportLegales;


class PromocionController extends Controller
{

    public function listado(Request $request)
    {
        $promocion = Promocion::with('User.Establecimiento')
            ->whereBetween(DB::raw('DATE(created_at)'), [$request->finicio, $request->ffinal])
            ->where('user_id', $request->user()->id)
            ->get();

        foreach ($promocion as $ficha) {
            $ficha->fecha = Carbon::parse($ficha->created_at)->format('d-m-Y');
        }
        $respuesta = [
            'code' => 200,
            'status' => 'success',
            'data' => $promocion
        ];
        return response($respuesta, $respuesta['code']);
    }
    
    public function listadoAdministrador(Request $request)
    {
        $promocion = Promocion::with('User.Establecimiento')
            ->whereBetween(DB::raw('DATE(created_at)'), [$request->finicio, $request->ffinal])
            ->get();

        foreach ($promocion as $ficha) {
            $ficha->fecha = Carbon::parse($ficha->created_at)->format('d-m-Y');
        }
        $respuesta = [
            'code' => 200,
            'status' => 'success',
            'data' => $promocion
        ];
        return response($respuesta, $respuesta['code']);
    }

    public function promocionSeleccionada(Int $id)
    {
        $promocion = Promocion::with('User.Establecimiento')
            ->with('Foto')
            ->where('id', $id)
            ->first();

        $promocion->fecha = Carbon::parse($promocion->created_at)->format('d-m-Y');

        $respuesta = [
            'code' => 200,
            'status' => 'success',
            'data' => $promocion
        ];
        return response($respuesta, $respuesta['code']);
    }

    public function guardarPromocion(Request $request)
    {
        $promocion = new Promocion();
        $promocion->user_id = $request->user()->id;
        $promocion->foto_id = $request['foto_id'];
        $promocion->plantilla_id  = $request['plantilla_id'];
        $promocion->estado_solicitud  = '1';
        $promocion->usar_texto_establecimiento  = $request['usar_texto_establecimiento'];
        $promocion->direccion  = $request['direccion'];
        $promocion->telefono  = $request['celular'];
        $promocion->horario  = $request['horario'];
        $promocion->vigencia  = $request['vigencia'];
        $promocion->restricciones  = $request['restricciones'];
        $promocion->acepta  = $request['acepta'];
        $promocion->estado  = '1';
        $promocion->json  = $request['json'];
        $promocion->ruta_logo  = $request['ruta_logo'];
        $promocion->descargas  = '0';
        $promocion->save();

        return response([
            'message' => 'Promocion Grabada Correctamente',
            'promocion' => $promocion
        ]);
    }
    public function editarPromocion(Request $request)
    {
        $promocion = Promocion::find($request->id);
        $promocion->json  = $request['json'];
        $promocion->usar_texto_establecimiento  = $request['usar_texto_establecimiento'];
        $promocion->save();

        return response([
            'message' => 'Promocion Editada Correctamente',
            'promocion' => $promocion
        ]);
    }

    public function exportarPromocion(Request $request)
    {
        $promocion = Promocion::with('User.Establecimiento')
            ->whereBetween(DB::raw('DATE(created_at)'), [$request->finicio, $request->ffinal])
            ->get();
        return Excel::download(new PromocionExport($promocion), 'promocion.xlsx');
    }

    public function exportarLegal(Request $request)
    {
        $fichas =  Promocion::with('User.Establecimiento')
            ->whereBetween(DB::raw('DATE(created_at)'), [$request->finicio, $request->ffinal])
            ->get();
        return Excel::download(new PromocionExportLegales($fichas), 'promocion_legales.xlsx');
    }

    public function cambiarEstado(Request $request)
    {
        $promocion = Promocion::find($request['id']);
        $promocion->estado_solicitud  = $request['estado'];
        $promocion->save();

        return response([
            'message' => 'Estado Cambiado Correctamente',
            'promocion' => $promocion
        ]);
    }
}
