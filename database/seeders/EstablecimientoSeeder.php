<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Establecimiento;

class EstablecimientoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Establecimiento::create(
            [
                'rubro_id' => '1',
                'ruc' => '204548254545',
                'razon_social' => 'FAMILIA COMERCIAL',
                'nombre_comercial' => 'RICO POLLO',
                'horario_atencion' => 'de lunes a viernes',
                'direccion' => 'calle S/N',
                'telefono' => '054383730',
                'ruta_logo' => '',
                'estado' => '1',
            ],
        );
    }
}
