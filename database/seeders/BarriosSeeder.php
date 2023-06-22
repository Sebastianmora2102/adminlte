<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class BarriosSeeder extends Seeder
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
                'codBarrio'=> '001', 
                'nomBarrio'=> 'Fatima',
                'estBarrio'=> 3,
                'comuna' => 1
            ],
            [
                'codBarrio'=> '002', 
                'nomBarrio'=> 'Santa Barbara',
                'estBarrio'=> 2,
                'comuna' => 4
            ],
            [
                'codBarrio'=> '003', 
                'nomBarrio'=> 'Santa Monica',
                'estBarrio'=> 3,
                'comuna' => 4
            ],
            [
                'codBarrio'=> '004', 
                'nomBarrio'=> 'Pandiaco',
                'estBarrio'=> 3,
                'comuna' => 8
            ],
            [
                'codBarrio'=> '005', 
                'nomBarrio'=> 'San Ignacio',
                'estBarrio'=> 4,
                'comuna' => 6
            ]
            ];
            DB::table('barrios')->insert($datos);
    }
}
