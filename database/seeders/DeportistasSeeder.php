<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DeportistasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('deportistas')->insert([
            [
                'Nombre' => 'Roger',
                'Apellido' => 'Federer',
                'Deporte' => 'Tenis',
                'Edad' => '41',
                'Nacionalidad' => 'Suiza',
            ],
            [
                'Nombre' => 'Kobe',
                'Apellido' => 'Bryant',
                'Deporte' => 'Basquetbol',
                'Edad' => '41',
                'Nacionalidad' => 'Estados Unidos',
            ],
            [
                'Nombre' => 'Michael',
                'Apellido' => 'Jordan',
                'Deporte' => 'Basquetbol',
                'Edad' => '59',
                'Nacionalidad' => 'Estados Unidos',
            ]
        ]);
    }
}
