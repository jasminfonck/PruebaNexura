<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\EmpleadoRol;

class EmpleadoRolTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EmpleadoRol::create([
            'empleado_id' => 3,
            'rol_id' => 4
        ]);

        EmpleadoRol::create([
            'empleado_id' => 3,
            'rol_id' => 7
        ]);

        EmpleadoRol::create([
            'empleado_id' => 3,
            'rol_id' => 2
        ]);

        EmpleadoRol::create([
            'empleado_id' => 4,
            'rol_id' => 1
        ]);

        EmpleadoRol::create([
            'empleado_id' => 4,
            'rol_id' => 2
        ]);
    }
}
