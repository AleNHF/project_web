<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pregunta;
use App\Models\Respuesta;

class PsicologiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pregunta::create([
            'texto' => 'Desde sus inicios la psicología fue desarrollada por:',
            'area_id' => '3'
        ]);
        Pregunta::create([
            'texto' => 'Sócrates y Platón analizaron la mente del hombre, ellos eran:',
            'area_id' => '3'
        ]);
        Pregunta::create([
            'texto' => 'La palabra psicología quiere decir:',
            'area_id' => '3'
        ]);
        Pregunta::create([
            'texto' => 'Las bases que sustentan la psicología son:',
            'area_id' => '3'
        ]);
        Pregunta::create([
            'texto' => 'Es el estudio de la estructura de la mente, es la corriente del:',
            'area_id' => '3'
        ]);
        Pregunta::create([
            'texto' => 'Skinner es uno de los autores que proponen la teoría del:',
            'area_id' => '3'
        ]);
        Pregunta::create([
            'texto' => '¿Cuál es la teoría que plantea el estudio de los procesos mentales y la
            forma en la que procesa la información?',
            'area_id' => '3'
        ]);
        Pregunta::create([
            'texto' => '¿Que estudia la psicología del trabajo o industrial?',
            'area_id' => '3'
        ]);
        Pregunta::create([
            'texto' => 'Se encarga de los problemas mentales y su diagnóstico, es la psicología:',
            'area_id' => '3'
        ]);
        Pregunta::create([
            'texto' => '¿Cuál es la función de las células sostén?',
            'area_id' => '3'
        ]);
    }
}