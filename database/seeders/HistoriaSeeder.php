<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pregunta;
use App\Models\Respuesta;

class HistoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pregunta::create([
            'texto' => '¿Cuál fue la guerra más mortífera de la historia boliviana?:',
            'area_id' => '2'
        ]);
        Pregunta::create([
            'texto' => 'Bolivia cedió a perpetuidad el Litoral a Chile, al firmar el Tratado de Paz de:',
            'area_id' => '2'
        ]);
        Pregunta::create([
            'texto' => 'Cuál es el calendario que establece el año de nacimiento de Cristo',
            'area_id' => '2'
        ]);
        Pregunta::create([
            'texto' => 'Cuales son las subdivisiones mas conocidas de la geografía humana.',
            'area_id' => '2'
        ]);
        Pregunta::create([
            'texto' => 'Durante la edad media, ¿qué países se unificaron?',
            'area_id' => 2
        ]);
        Pregunta::create([
            'texto' => 'El Decreto Supremo 21060, que redujo el déficit fiscal, fue promulgado en el
            gobierno de:',
            'area_id' => 2
        ]);
        Pregunta::create([
            'texto' => 'El Imperio Austrohúngaro estaba dentro del bando de:',
            'area_id' => 2
        ]);
        Pregunta::create([
            'texto' => 'El imperio inca se desarrolló en lo que ahora es:',
            'area_id' => 2
        ]);
        Pregunta::create([
            'texto' => 'El nuevo mundo, América, fue dividida en Virreinatos:',
            'area_id' => 2
        ]);
        Pregunta::create([
            'texto' => 'El Tahuantinsuyo, estaba conformado por cuatro suyos y corresponde a la
            zona andina de la actual Bolivia el',
            'area_id' => 2
        ]);
        Pregunta::create([
            'texto' => ' En América pre-hispánica se desarrollaron tres grandes Imperios:',
            'area_id' => 2
        ]);
        Pregunta::create([
            'texto' => 'En Atenas se desarrolló la filosofía destacándose:',
            'area_id' => 2
        ]);
        Pregunta::create([
            'texto' => 'En Bolivia surgieron los llamados Señoríos Collas, los cuales eran',
            'area_id' => 2
        ]);
        Pregunta::create([
            'texto' => 'En la administración de las Indias, el que se encargaba del comercio era:',
            'area_id' => 2
        ]);
        Pregunta::create([
            'texto' => 'Era una institución en la que, todos los varones entre 18 y 50 años debían
            trabajar un año de manera obligatoria para la producción minera:',
            'area_id' => 2
        ]);
        Pregunta::create([
            'texto' => 'Es el proceso de ocupación y poblamiento con europeos de las zonas
            conquistadas',
            'area_id' => 2
        ]);
        Pregunta::create([
            'texto' => 'Junto a la revolución industrial que otras revoluciones también se dan:',
            'area_id' => 2
        ]);
        Pregunta::create([
            'texto' => 'La doctrina fascista era:',
            'area_id' => 2
        ]);
        Pregunta::create([
            'texto' => 'La geografía moderna estudia la tierra como:',
            'area_id' => 2
        ]);
        Pregunta::create([
            'texto' => 'La guerra de las trincheras se da en:',
            'area_id' => 2
        ]);
    }
}