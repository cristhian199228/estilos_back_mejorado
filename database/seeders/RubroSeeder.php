<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Rubro;

class RubroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Rubro::create(
            [
                'descripcion' => 'RESTAURANTES',
                'estado' => '1',
            ],
        );
        Rubro::create(
            [
                'descripcion' => 'OPTICAS',
                'estado' => '1',
            ],
        );
        Rubro::create(
            [
                'descripcion' => 'SUPERMERCADOS - MINIMARKET',
                'estado' => '1',
            ],
        );
        Rubro::create(
            [
                'descripcion' => 'MUEBLERIA',
                'estado' => '1',
            ],
        );
        Rubro::create(
            [
                'descripcion' => 'MODAS Y ACCESORIOS',
                'estado' => '1',
            ],
        );
        Rubro::create(
            [
                'descripcion' => 'POLLERIA',
                'estado' => '1',
            ],
        );
        Rubro::create(
            [
                'descripcion' => 'FARMACIA',
                'estado' => '1',
            ],
        );
        Rubro::create(
            [
                'descripcion' => 'ZAPATERIA',
                'estado' => '1',
            ],
        );
        Rubro::create(
            [
                'descripcion' => 'CLINICA DENTAL',
                'estado' => '1',
            ],
        );
        Rubro::create(
            [
                'descripcion' => 'COMPUTO ACCESORIOS',
                'estado' => '1',
            ],
        );
        Rubro::create(
            [
                'descripcion' => 'PELUQUERIA , SALONES DE BELLEZA , SPA',
                'estado' => '1',
            ],
        );
        Rubro::create(
            [
                'descripcion' => 'PIZZERIA',
                'estado' => '1',
            ],
        );
        Rubro::create(
            [
                'descripcion' => 'VENTA DE LLANTAS Y ACCESORIOS',
                'estado' => '1',
            ],
        );
        Rubro::create(
            [
                'descripcion' => 'VENTA , MANTENIMIENTO Y REPARACIÓN DE VEHICULOS',
                'estado' => '1',
            ],
        );
        Rubro::create(
            [
                'descripcion' => 'SERVICIOS ELECTRONICOS Y ACCESOSRIOS AUTOMOTRICES',
                'estado' => '1',
            ],
        );
        Rubro::create(
            [
                'descripcion' => 'GRIFOS',
                'estado' => '1',
            ],
        );
        Rubro::create(
            [
                'descripcion' => 'CLINICAS , CENTROS DE SALUD',
                'estado' => '1',
            ],
        );
        Rubro::create(
            [
                'descripcion' => 'ACABADOS Y CONSTRUCCIÓN',
                'estado' => '1',
            ],
        );
        Rubro::create(
            [
                'descripcion' => 'COMUNICACIONES E INTERNET',
                'estado' => '1',
            ],
        );
        Rubro::create(
            [
                'descripcion' => 'PRODUCTOS ELECTRONICOS',
                'estado' => '1',
            ],
        );
        Rubro::create(
            [
                'descripcion' => 'JOYERIA',
                'estado' => '1',
            ],
        );
        Rubro::create(
            [
                'descripcion' => 'PANADERIA Y PASTELERIA',
                'estado' => '1',
            ],
        );
        Rubro::create(
            [
                'descripcion' => 'VETERINARIA',
                'estado' => '1',
            ],
        );
        Rubro::create(
            [
                'descripcion' => 'LICORERIA',
                'estado' => '1',
            ],
        );
        Rubro::create(
            [
                'descripcion' => 'ARTICULOS PARA BEBES Y NIÑOS',
                'estado' => '1',
            ],
        );
    }
}
