<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\RubroController;
use App\Http\Controllers\Api\FotoController;
use App\Http\Controllers\Api\PlantillaController;
use App\Http\Controllers\Api\PromocionController;
use App\Http\Controllers\Api\EstablecimientoController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/login',[UserController::class, 'login']);
Route::get('/getRubros',[RubroController::class, 'listado']);
Route::get('/getFotoRubro/{id}',[FotoController::class, 'getFotoRubro']);
Route::get('/mostrarFoto/{ruta}',[FotoController::class, 'mostrarFoto']);
Route::post('/subirFotoParaModelar',[FotoController::class, 'subirFotoParaModelar']);
Route::post('/subirNuevaFoto',[FotoController::class, 'subirNuevaFoto']);
Route::get('/getPlantillas',[PlantillaController::class, 'listado']);
Route::get('/mostrarFotoPlantilla/{ruta}',[PlantillaController::class, 'mostrarFotoPlantilla']);
Route::post('/subirLogo',[EstablecimientoController::class, 'subirLogo']);
Route::get('/mostrarLogo/{ruta}',[EstablecimientoController::class, 'mostrarLogo']);
Route::post('/guardarPromocion',[PromocionController::class, 'guardarPromocion']);