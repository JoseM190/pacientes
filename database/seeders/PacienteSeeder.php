<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PacienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pacientes')->insert([
            [
                'nombres' => 'Alex Oscar',
                'apellidos' => 'Gamarra Solis',
                'edad' => '28',
                'sexo' => 'masculino',
                'ci' => '70218511',
                'tipo_sangre' => 'A+',
                'celular' => '67410812',
                'correo' => 'alex@gmail.com',
                'direccion' => 'C/ Santa Cruz entre Sucre'
            ],
            [
                'nombres' => 'Juana',
                'apellidos' => 'Gonzales Torrez',
                'edad' => '15',
                'sexo' => 'femenino',
                'ci' => '10289340',
                'tipo_sangre' => 'O+',
                'celular' => '70035678',
                'correo' => 'juanag@gmail.com',
                'direccion' => 'C/ Beni entre 24 de julio'
            ],
            [
                'nombres' => 'Jose Luis',
                'apellidos' => 'Garcia Ruiz',
                'edad' => '20',
                'sexo' => 'masculino',
                'ci' => '120349752',
                'tipo_sangre' => 'O+',
                'celular' => '6812435',
                'correo' => 'jose@gmail.com',
                'direccion' => 'C/ Av Libertadores entre Campero'
            ]
            ]);
    }
}
