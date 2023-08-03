<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Docente;
use App\Models\Administrativo;
use App\Models\Estudiante;


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
        ])->assignRole('docente');

        User::create([
            'name' => 'Margaret Tyrus',
            'email' => 'margaret@gmail.com',
            'password' => bcrypt('123456789'),
            'telefono' => '75364555',
            'tipo' => 'A'
        ])->assignRole('administrativo');

        User::create([
            'name' => 'Gideon Vladimora',
            'email' => 'gideon@gmail.com',
            'password' => bcrypt('123456789'),
            'telefono' => '68572133',
            'tipo' => 'E'
        ])->assignRole('estudiante');

        Docente::create([
            //'especialidad' => 'Literatura',
            'usuario_id' => 1
        ]);

        Administrativo::create([
            'cargo' => 'Auxiliar',
            'usuario_id' => 2
        ]);

        Estudiante::create([
            'carreraInteres' => 'Economía',
            'colegio' => 'Nacional Florida',
            'grado' => '6to',
            'usuario_id' => 3
        ]);
    }
}
