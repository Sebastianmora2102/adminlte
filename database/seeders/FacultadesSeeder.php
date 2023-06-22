<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class FacultadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datos =[
            [
                'codFacultad' => '01',
                'nomFacultad' => 'Artes'
            ],
            [
                'codFacultad' => '02',
                'nomFacultad' => 'Ingeniería'
            ],
            [
                'codFacultad' => '03',
                'nomFacultad' => 'Salud'
            ],
            [
                'codFacultad' => '04',
                'nomFacultad' => 'Derecho'
            ],
            [
                'codFacultad' => '05',
                'nomFacultad' => 'Veterinaria'
            ]
        ];
        DB::table('facultades')->insert($datos);
    }
}