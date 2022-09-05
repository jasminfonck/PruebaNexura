<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Empleado;

class EmpleadosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Empleado::create([
            'id' => 3,
            'nombre' => 'Pedro Pérez',
            'email' => 'pperez@example.co',
            'sexo' => 'M',
            'area_id' => '5',
            'boletin' => '1',
            'descripcion' => 'Hola mundo'
        ]);

        Empleado::create([
            'id' => 4,
            'nombre' => 'Amalia Bayona',
            'email' => 'abayona@example.co',
            'sexo' => 'F',
            'area_id' => '8',
            'boletin' => '0',
            'descripcion' => 'Para contactar a Amalia Bayona, puede escribir al correo electrónico abayona@example.co'
        ]);
    }
}
