<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DecanosSeeder extends Seeder
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
                'codDecano' => '01',
                'nomDecano' => 'Jose Segovia',
                'facultad' => '01'
            ],
            [
                'codDecano' => '02',
                'nomDecano' => 'Pol Lechuga',
                'facultad' => '02'
            ],
            [
                'codDecano' => '03',
                'nomDecano' => 'Roger Federer',
                'facultad' => '03'
            ],
            [
                'codDecano' => '04',
                'nomDecano' => 'Marc Briones',
                'facultad' => '04'
            ],
            [
                'codDecano' => '05',
                'nomDecano' => 'Fran Hernandez',
                'facultad' => '05'
            ]
            ];
            DB::table('decanos')->insert($datos);
    }
}
