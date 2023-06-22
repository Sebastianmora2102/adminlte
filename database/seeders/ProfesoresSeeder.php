<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ProfesoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datos = [
            [
                'codProfesor' => '01',
                'nomProfesor' => 'Carlos Mora',
                'catProfesor' => 'B'
            ],
            [
                'codProfesor' => '02',
                'nomProfesor' => 'Cristian Cortez',
                'catProfesor' => 'A'
            ],
            [
                'codProfesor' => '03',
                'nomProfesor' => 'Fernando Alonso',
                'catProfesor' => 'A'
            ],
            [
                'codProfesor' => '04',
                'nomProfesor' => 'Rafa Nadal',
                'catProfesor' => 'C'
            ],
            [
                'codProfesor' => '05',
                'nomProfesor' => 'Lucia Jurado',
                'catProfesor' => 'A'
            ]
            ];
            DB::table('profesores')->insert($datos);
    }
}
