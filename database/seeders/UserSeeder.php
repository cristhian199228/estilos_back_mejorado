<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(
            [
                'rol_id' => '1',
                'establecimiento_id' => '2',
                'nombre' => 'prueba',
                'usuario' => '1',
                'email' => 'prueba@gmail.com',
                'password' => Hash::make('1'),
            ],
        );
        User::create(
            [
                'rol_id' => '2',
                'establecimiento_id' => '1',
                'nombre' => 'Administrador',
                'usuario' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('admin'),
            ],
        );
        User::create(
            [
                'rol_id' => '1',
                'establecimiento_id' => '3',
                'nombre' => 'prueba2',
                'usuario' => '2',
                'email' => 'prueba2@gmail.com',
                'password' => Hash::make('2'),
            ],
        );
        User::create(
            [
                'rol_id' => '1',
                'establecimiento_id' => '4',
                'nombre' => 'prueba3',
                'usuario' => '3',
                'email' => 'prueba3@gmail.com',
                'password' => Hash::make('3'),
            ],
        );
    }
}