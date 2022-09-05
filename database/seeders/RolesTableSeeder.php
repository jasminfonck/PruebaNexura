<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'id' => 1,
            'nombre' => 'Desarrollador'
        ]);
        Role::create([
            'id' => 2,
            'nombre' => 'Analista'
        ]);
        Role::create([
            'id' => 3,
            'nombre' => 'Tester'
        ]);
        Role::create([
            'id' => 4,
            'nombre' => 'Diseñador'
        ]);
        Role::create([
            'id' => 5,
            'nombre' => 'Profesional PMO'
        ]);
        Role::create([
            'id' => 6,
            'nombre' => 'Profesional de servicios'
        ]);
        Role::create([
            'id' => 7,
            'nombre' => 'Auxiliar administrativo'
        ]);
        Role::create([
            'id' => 8,
            'nombre' => 'Codirector'
        ]);
    }
}
