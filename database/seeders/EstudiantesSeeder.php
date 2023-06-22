<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class EstudiantesSeeder extends Seeder
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
                'codEstudiante' => 'ES01',
                'nomEstudiante' => 'Kevin Mora',
                'edaEstudiante' => 22,
                'fechEstudiante' => '2001-02-21',
                'sexEstudiante' => 'M',
                'ciudad' => 'COD01',
                'barrio' => '001',
                'programa' => '01' 
            ],
            [
                'codEstudiante' => 'ES02',
                'nomEstudiante' => 'Pedro Benito',
                'edaEstudiante' => 22,
                'fechEstudiante' => '2001-09-30',
                'sexEstudiante' => 'M',
                'ciudad' => 'COD02',
                'barrio' => '002',
                'programa' => '02'
            ],
            [
                'codEstudiante' => 'ES03',
                'nomEstudiante' => 'Lionel Messi',
                'edaEstudiante' => 35,
                'fechEstudiante' => '1987-06-24',
                'sexEstudiante' => 'M',
                'ciudad' => 'COD03',
                'barrio' => '003',
                'programa' => '03'
            ],
            [
                'codEstudiante' => 'ES04',
                'nomEstudiante' => 'Carlos Blanco',
                'edaEstudiante' => 24,
                'fechEstudiante' => '1999-01-08',
                'sexEstudiante' => 'M',
                'ciudad' => 'COD04',
                'barrio' => '004',
                'programa' => '04'
            ],
            [
                'codEstudiante' => 'ES05',
                'nomEstudiante' => 'Iga Swiatek',
                'edaEstudiante' => 22,
                'fechEstudiante' => '2001-05-31',
                'sexEstudiante' => 'F',
                'ciudad' => 'COD05',
                'barrio' => '005',
                'programa' => '05'
            ]


            ];
            DB::table('estudiantes')->insert($datos);
    }
}
