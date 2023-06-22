<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ProgramasSeeder extends Seeder
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
                'codPrograma' => '01',
                'nomPrograma' => 'Diseño Grafico',
                'facultad' => '01'
            ],
            [
                'codPrograma' => '02',
                'nomPrograma' => 'Ing de Sistemas',
                'facultad' => '02'
            ],
            [
                'codPrograma' => '03',
                'nomPrograma' => 'Medicina',
                'facultad' => '03'
            ],
            [
                'codPrograma' => '04',
                'nomPrograma' => 'Derecho',
                'facultad' => '04'
            ],
            [
                'codPrograma' => '05',
                'nomPrograma' => 'Veterinaria',
                'facultad' => '05'
            ]
            ];
            DB::table('programas')->insert($datos);
    }
}
