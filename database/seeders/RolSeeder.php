<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Rol;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Rol::create(
            [
                'descripcion' => 'Usuario',
                'estado' => '1',
            ],
        );
        Rol::create(
            [
                'descripcion' => 'Administrador',
                'estado' => '1',
            ],
        );
    }
}
