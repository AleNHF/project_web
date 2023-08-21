<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Area;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Area::create([
            'nombre'=> 'Lenguaje',
            'puntaje'=> 30
        ]);
        Area::create([
            'nombre'=> 'Historia',
            'puntaje'=> 20
        ]);
        Area::create([
            'nombre'=> 'Psicología',
            'puntaje'=> 20
        ]);
        Area::create([
            'nombre' => 'Matemáticas',
            'puntaje' => 30
        ]);
    }
}
