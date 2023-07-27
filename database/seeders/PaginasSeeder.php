<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PageVisit;

class PaginasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Vistas Users
        PageVisit::create([
            'page_slug' => 'users'
        ]);
        PageVisit::create([
            'page_slug' => 'users.create'
        ]);
        PageVisit::create([
            'page_slug' => 'users.edit'
        ]);

        //Vistas estudiantes
        PageVisit::create([
            'page_slug' => 'estudiantes'
        ]);
        PageVisit::create([
            'page_slug' => 'estudiantes.create'
        ]);

        //Vistas docentes
        PageVisit::create([
            'page_slug' => 'docentes'
        ]);

        PageVisit::create([
            'page_slug' => 'docentes.create'
        ]);

        PageVisit::create([
            'page_slug' => 'docentes.edit'
        ]);

        //Vistas administrativos
        PageVisit::create([
            'page_slug' => 'administrativos'
        ]);

        //Vistas preguntas
        PageVisit::create([
            'page_slug' => 'preguntas'
        ]);

        PageVisit::create([
            'page_slug' => 'preguntas.create'
        ]);

        PageVisit::create([
            'page_slug' => 'preguntas.edit'
        ]);

        // Vistas ranking
        PageVisit::create([
            'page_slug' => 'ranking.general'
        ]);

        PageVisit::create([
            'page_slug' => 'ranking.colegio'
        ]);

        //Vistas reportes
        PageVisit::create([
            'page_slug' => 'reportes'
        ]);

        //Vista home
        PageVisit::create([
            'page_slug' => 'home'
        ]);

        //Vista game
        PageVisit::create([
            'page_slug' => 'game'
        ]);

        //Vista welcome
        PageVisit::create([
            'page_slug' => 'welcome'
        ]);
    }
}
