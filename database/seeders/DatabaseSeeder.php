<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            AreaSeeder::class,
            ModoSeeder::class,
            PaginasSeeder::class,
            LenguajeSeeder::class,
            MatematicaSeeder::class,
            HistoriaSeeder::class,
            PsicologiaSeeder::class
        ]);
    }
}
