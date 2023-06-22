<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class DepartamentosSeeder extends Seeder
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
                'codDepto' => '01',
                'nomDepto' => 'Nariño'
            ],
            [
                'codDepto' => '02',
                'nomDepto' => 'Valle del Cauca'
            ],
            [
                'codDepto' => '03',
                'nomDepto' => 'Cundinamarca'
            ],
            [
                'codDepto' => '04',
                'nomDepto' => 'Amazonas'
            ],
            [
                'codDepto' => '05',
                'nomDepto' => 'Guajira'
            ]
        ];
        DB::table('departamentos')->insert($datos);
    }
}
