<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RegnotasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datos =
        [
            [
                'estudiante' => 'ES01',
                'materia' => '01',
                'profesor' => '01',
                'parcial1' => 3.0,
                'parcial2' => 3.0,
                'efinal' => 3.0,
                'nfinal' => 3.0,
                'estado' => 'A'
            ],
            [
                'estudiante' => 'ES02',
                'materia' => '02',
                'profesor' => '02',
                'parcial1' => 4.0,
                'parcial2' => 4.0,
                'efinal' => 4.0,
                'nfinal' => 4.0,
                'estado' => 'A'
            ],
            [
                'estudiante' => 'ES03',
                'materia' => '03',
                'profesor' => '03',
                'parcial1' => 2.9,
                'parcial2' => 2.9,
                'efinal' => 2.9,
                'nfinal' => 2.9,
                'estado' => 'R'
            ],
            [
                'estudiante' => 'ES04',
                'materia' => '04',
                'profesor' => '04',
                'parcial1' => 5.0,
                'parcial2' => 5.0,
                'efinal' => 5.0,
                'nfinal' => 5.0,
                'estado' => 'A'
            ],
            [
                'estudiante' => 'ES05',
                'materia' => '05',
                'profesor' => '05',
                'parcial1' => 2.0,
                'parcial2' => 2.0,
                'efinal' => 2.0,
                'nfinal' => 2.0,
                'estado' => 'R'
            ]
        ];
        DB::table('regnotas')->insert($datos);
    }
}
