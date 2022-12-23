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
                'ruc' => '20100199158',
                'razon_social' => 'ESTILOS SRL',
                'nombre_comercial' => 'ESTILOS',
                'horario_atencion' => 'de lunes a viernes',
                'direccion' => 'calle S/N',
                'telefono' => '054383730',
                'ruta_logo' => '',
                'estado' => '1',
            ],
        );
        Establecimiento::create(
            [
                'rubro_id' => '1',
                'ruc' => '20100205573',
                'razon_social' => 'EL POLLO REAL S.A.C',
                'nombre_comercial' => 'EL POLLO REAL',
                'horario_atencion' => 'de lunes a viernes',
                'direccion' => 'calle S/N',
                'telefono' => '054383730',
                'ruta_logo' => '',
                'estado' => '1',
            ],
        );
    }
}
