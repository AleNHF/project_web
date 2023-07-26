<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Modo;

class ModoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Modo::create([
            'nombre'=>'General'
        ]);
        Modo::create([
            'nombre'=>'Interno'
        ]);
        Modo::create([
            'nombre'=>'Duelo'
        ]);
    }
}
