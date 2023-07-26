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
            'nombre'=>'Lenguaje',
            'puntaje'=>'10'
        ]);
        Area::create([
            'nombre'=>'Historia',
            'puntaje'=>'10'
        ]);
        Area::create([
            'nombre'=>'Psicologia',
            'puntaje'=>'30'
        ]);
    }
}
