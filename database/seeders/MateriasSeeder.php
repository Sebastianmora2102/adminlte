<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class MateriasSeeder extends Seeder
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
                'codMateria' => '01',
                'nomMateria' => 'Calculo Integral',
                'creMateria' => '4'
            ],
            [
                'codMateria' => '02',
                'nomMateria' => 'Ingles',
                'creMateria' => '3'
            ],
            [
                'codMateria' => '03',
                'nomMateria' => 'Programacion',
                'creMateria' => '4'
            ],
            [
                'codMateria' => '04',
                'nomMateria' => 'Auditoria',
                'creMateria' => '2'
            ],
            [
                'codMateria' => '05',
                'nomMateria' => 'Topicos',
                'creMateria' => '3'
            ]
        ];
        DB::table('materias')->insert($datos);
    }
}
