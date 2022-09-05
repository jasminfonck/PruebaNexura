<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Area;

class AreasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Area::create([
            'id' => 1,
            'nombre' => 'Administrativa y Financiera'
        ]);
        Area::create([
            'id' => 2,
            'nombre' => 'Ingeniería'
        ]);
        Area::create([
            'id' => 5,
            'nombre' => 'Desarrollo de Negocio'
        ]);
        Area::create([
            'id' => 6,
            'nombre' => 'Proyectos'
        ]);
        Area::create([
            'id' => 7,
            'nombre' => 'Servicios'
        ]);
        Area::create([
            'id' => 8,
            'nombre' => 'Calidad'
        ]);
    }
}
