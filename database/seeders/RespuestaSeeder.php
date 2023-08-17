<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Respuesta;

class RespuestaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        //end historia

        //begin psicologia

        Respuesta::create([
            'texto'=>'Filósofos',
            'esCorrecta'=>true,
            'pregunta_id'=>'21'
        ]);
        Respuesta::create([
            'texto'=>'Maestros',
            'esCorrecta'=>false,
            'pregunta_id'=>'21'
        ]);
        Respuesta::create([
            'texto'=>'Científicos',
            'esCorrecta'=>false,
            'pregunta_id'=>'21'
        ]);
        Respuesta::create([
            'texto'=>'Astrólogos',
            'esCorrecta'=>false,
            'pregunta_id'=>'21'
        ]);
        Respuesta::create([
            'texto'=>'Empíricos',
            'esCorrecta'=>false,
            'pregunta_id'=>'21'
        ]);

        Respuesta::create([
            'texto'=>'Filósofos',
            'esCorrecta'=>true,
            'pregunta_id'=>'22'
        ]);
        Respuesta::create([
            'texto'=>'Psicólogos',
            'esCorrecta'=>false,
            'pregunta_id'=>'22'
        ]);
        Respuesta::create([
            'texto'=>'Antropólogos',
            'esCorrecta'=>false,
            'pregunta_id'=>'22'
        ]);
        Respuesta::create([
            'texto'=>'Curanderos',
            'esCorrecta'=>false,
            'pregunta_id'=>'22'
        ]);
        Respuesta::create([
            'texto'=>'Astrólogos',
            'esCorrecta'=>false,
            'pregunta_id'=>'22'
        ]);

        Respuesta::create([
            'texto'=>'Estudio del alma',
            'esCorrecta'=>true,
            'pregunta_id'=>'23'
        ]);
        Respuesta::create([
            'texto'=>'Estudio de la cultura humana',
            'esCorrecta'=>false,
            'pregunta_id'=>'23'
        ]);
        Respuesta::create([
            'texto'=>'Cuerpo y alma',
            'esCorrecta'=>false,
            'pregunta_id'=>'23'
        ]);
        Respuesta::create([
            'texto'=>'Estudio del karma',
            'esCorrecta'=>false,
            'pregunta_id'=>'23'
        ]);
        Respuesta::create([
            'texto'=>'Tratado de conocimiento',
            'esCorrecta'=>false,
            'pregunta_id'=>'23'
        ]);

        Respuesta::create([
            'texto'=>'La filosofía y la fisiología',
            'esCorrecta'=>true,
            'pregunta_id'=>'24'
        ]);
        Respuesta::create([
            'texto'=>'La biología y la geografía',
            'esCorrecta'=>false,
            'pregunta_id'=>'24'
        ]);
        Respuesta::create([
            'texto'=>'La anatomía y la historia del hombre',
            'esCorrecta'=>false,
            'pregunta_id'=>'24'
        ]);
        Respuesta::create([
            'texto'=>'La filosofía y la química',
            'esCorrecta'=>false,
            'pregunta_id'=>'24'
        ]);
        Respuesta::create([
            'texto'=>'La fisiología y la matemática',
            'esCorrecta'=>false,
            'pregunta_id'=>'24'
        ]);

        Respuesta::create([
            'texto'=>'Estructuralismo',
            'esCorrecta'=>true,
            'pregunta_id'=>'25'
        ]);
        Respuesta::create([
            'texto'=>'La Gestalt',
            'esCorrecta'=>false,
            'pregunta_id'=>'25'
        ]);
        Respuesta::create([
            'texto'=>'Funcionalismo',
            'esCorrecta'=>false,
            'pregunta_id'=>'25'
        ]);
        Respuesta::create([
            'texto'=>'Humanismo',
            'esCorrecta'=>false,
            'pregunta_id'=>'25'
        ]);
        Respuesta::create([
            'texto'=>'Cognitivismo',
            'esCorrecta'=>false,
            'pregunta_id'=>'25'
        ]);

        Respuesta::create([
            'texto'=>'Conductismo',
            'esCorrecta'=>true,
            'pregunta_id'=>'26'
        ]);
        Respuesta::create([
            'texto'=>'Psicoanálisis',
            'esCorrecta'=>false,
            'pregunta_id'=>'26'
        ]);
        Respuesta::create([
            'texto'=>'Funcionalismo',
            'esCorrecta'=>false,
            'pregunta_id'=>'26'
        ]);
        Respuesta::create([
            'texto'=>'Cognitiva',
            'esCorrecta'=>false,
            'pregunta_id'=>'26'
        ]);
        Respuesta::create([
            'texto'=>'Estructuralismo',
            'esCorrecta'=>false,
            'pregunta_id'=>'26'
        ]);

        Respuesta::create([
            'texto'=>'Cognitiva',
            'esCorrecta'=>true,
            'pregunta_id'=>'27'
        ]);
        Respuesta::create([
            'texto'=>'Funcionalismo',
            'esCorrecta'=>false,
            'pregunta_id'=>'27'
        ]);
        Respuesta::create([
            'texto'=>'Estructuralismo',
            'esCorrecta'=>false,
            'pregunta_id'=>'27'
        ]);
        Respuesta::create([
            'texto'=>'Psicoanálisis',
            'esCorrecta'=>false,
            'pregunta_id'=>'27'
        ]);
        Respuesta::create([
            'texto'=>'Conductismo',
            'esCorrecta'=>false,
            'pregunta_id'=>'27'
        ]);

        Respuesta::create([
            'texto'=>'Estudia todo aquello que permita mejorar la producción del
            trabajo',
            'esCorrecta'=>true,
            'pregunta_id'=>'28'
        ]);
        Respuesta::create([
            'texto'=>'Estudia la conducta y los trastornos mentales',
            'esCorrecta'=>false,
            'pregunta_id'=>'28'
        ]);
        Respuesta::create([
            'texto'=>'Estudia los problemas de aprendizaje',
            'esCorrecta'=>false,
            'pregunta_id'=>'28'
        ]);
        Respuesta::create([
            'texto'=>'Estudia la personalidad',
            'esCorrecta'=>false,
            'pregunta_id'=>'28'
        ]);
        Respuesta::create([
            'texto'=>'Estudia las maquinas',
            'esCorrecta'=>false,
            'pregunta_id'=>'28'
        ]);

        Respuesta::create([
            'texto'=>'Clínica',
            'esCorrecta'=>true,
            'pregunta_id'=>'29'
        ]);
        Respuesta::create([
            'texto'=>'Educativa',
            'esCorrecta'=>false,
            'pregunta_id'=>'29'
        ]);
        Respuesta::create([
            'texto'=>'Experimental',
            'esCorrecta'=>false,
            'pregunta_id'=>'29'
        ]);
        Respuesta::create([
            'texto'=>'Forense',
            'esCorrecta'=>false,
            'pregunta_id'=>'29'
        ]);
        Respuesta::create([
            'texto'=>'Educativa',
            'esCorrecta'=>false,
            'pregunta_id'=>'29'
        ]);

        Respuesta::create([
            'texto'=>'Mantener las neuronas sujetas en lugares específicos',
            'esCorrecta'=>true,
            'pregunta_id'=>'30'
        ]);
        Respuesta::create([
            'texto'=>'Garantizar el alimento de la neurona',
            'esCorrecta'=>false,
            'pregunta_id'=>'30'
        ]);
        Respuesta::create([
            'texto'=>'Formar el núcleo',
            'esCorrecta'=>false,
            'pregunta_id'=>'30'
        ]);
        Respuesta::create([
            'texto'=>'Modificar el axón',
            'esCorrecta'=>false,
            'pregunta_id'=>'30'
        ]);
        Respuesta::create([
            'texto'=>'Ajustar los niveles de potasio',
            'esCorrecta'=>false,
            'pregunta_id'=>'30'
        ]);
        //end psicologia
    }
}
