<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Docente;
use App\Models\Administrativo;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Tadeus Ruppert',
            'email' => 'tadeus@gmail.com',
            'password' => bcrypt('123456789'),
            'telefono' => '75369855',
            'tipo' => 'D'
        ]);

        User::create([
            'name' => 'Margaret Tyrus',
            'email' => 'margaret@gmail.com',
            'password' => bcrypt('123456789'),
            'telefono' => '75364555',
            'tipo' => 'A'
        ]);

        Docente::create([
            'especialidad' => 'Literatura',
            'usuario_id' => 1
        ]);

        Administrativo::create([
            'cargo' => 'Auxiliar',
            'usuario_id' => 2
        ]);
    }
}
