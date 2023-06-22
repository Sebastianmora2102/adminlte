<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CiudadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datos=[
            [
                'codCiudad'=> 'COD01', 
                'nomCiudad'=> 'Pasto',
                'departamento'=> '01'
            ],
            [
                'codCiudad'=> 'COD02', 
                'nomCiudad'=> 'Cali',
                'departamento'=> '02'
            ],
            [
                'codCiudad'=> 'COD03', 
                'nomCiudad'=> 'Bogota',
                'departamento'=> '03'
            ],
            [
                'codCiudad'=> 'COD04', 
                'nomCiudad'=> 'Leticia',
                'departamento'=> '04'
            ],
            [
                'codCiudad'=> 'COD05', 
                'nomCiudad'=> 'Riohacha',
                'departamento'=> '05'
            ]
            ];
            DB::table('ciudades')->insert($datos);
    }
}