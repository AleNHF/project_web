<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Pregunta;

class PreguntaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        //begin lenguaje

        Pregunta::create([
            'texto'=>'¿que es lenguaje?',
            'area_id'=>'1'
        ]);
        Pregunta::create([
            'texto'=>'¿que es una vocal?',
            'area_id'=>'1'
        ]);
        Pregunta::create([
            'texto'=>'¿cuantas letras tiene el abecedario?',
            'area_id'=>'1'
        ]);
        Pregunta::create([
            'texto'=>'¿que es un sustantivo?',
            'area_id'=>'1'
        ]);
        Pregunta::create([
            'texto'=>'¿que es un verbo?',
            'area_id'=>'1'
        ]);
        Pregunta::create([
            'texto'=>'¿cual es la primera palabra del abecedario?',
            'area_id'=>'1'
        ]);
        Pregunta::create([
            'texto'=>'¿que es un sinonimo?',
            'area_id'=>'1'
        ]);
        Pregunta::create([
            'texto'=>'¿que es un antonimo?',
            'area_id'=>'1'
        ]);
        Pregunta::create([
            'texto'=>'¿que es un adjetivo?',
            'area_id'=>'1'
        ]);
        Pregunta::create([
            'texto'=>'¿que es una oracion?',
            'area_id'=>'1'
        ]);

        // end lenguaje

        // begin historia

        Pregunta::create([
            'texto'=>'¿que es la historia?',
            'area_id'=>'2'
        ]);
        Pregunta::create([
            'texto'=>'¿que son los dinosaurio?',
            'area_id'=>'2'
        ]);
        Pregunta::create([
            'texto'=>'¿quien fue cristobal colon?',
            'area_id'=>'2'
        ]);
        Pregunta::create([
            'texto'=>'¿que fue la edad de piedra?',
            'area_id'=>'2'
        ]);
        Pregunta::create([
            'texto'=>'¿quienes fueron los egipcios?',
            'area_id'=>'2'
        ]);
        Pregunta::create([
            'texto'=>'¿que es la revolucion industrial?',
            'area_id'=>'2'
        ]);
        Pregunta::create([
            'texto'=>'¿quien fue simon bolivar?',
            'area_id'=>'2'
        ]);
        Pregunta::create([
            'texto'=>'¿que ocurrio en la batalla de waterloo?',
            'area_id'=>'2'
        ]);
        Pregunta::create([
            'texto'=>'¿Qué fue la Declaración de Independencia de Estados Unidos?',
            'area_id'=>'2'
        ]);
        Pregunta::create([
            'texto'=>'¿que fue la civilizacion griega?',
            'area_id'=>'2'
        ]);

        // end historia

        //begin psicologia

        Pregunta::create([
            'texto'=>'¿que es la psicologia?',
            'area_id'=>'3'
        ]);
        Pregunta::create([
            'texto'=>'¿que son las emociones?',
            'area_id'=>'3'
        ]);
        Pregunta::create([
            'texto'=>'¿que es la empatia?',
            'area_id'=>'3'
        ]);
        Pregunta::create([
            'texto'=>'¿que es el miedo?',
            'area_id'=>'3'
        ]);
        Pregunta::create([
            'texto'=>'¿que es la autoestima?',
            'area_id'=>'3'
        ]);
        Pregunta::create([
            'texto'=>'¿que es el estres?',
            'area_id'=>'3'
        ]);
        Pregunta::create([
            'texto'=>'¿que es el bullying?',
            'area_id'=>'3'
        ]);
        Pregunta::create([
            'texto'=>'¿que sonlas habilidades sociales?',
            'area_id'=>'3'
        ]);
        Pregunta::create([
            'texto'=>'¿que es la memoria?',
            'area_id'=>'3'
        ]);
        Pregunta::create([
            'texto'=>'¿que es el respeto?',
            'area_id'=>'3'
        ]);

        //end psicologia
    }
}
