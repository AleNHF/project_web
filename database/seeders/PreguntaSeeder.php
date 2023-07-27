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
            'texto'=>'Una de las siguientes palabras es polisílaba',
            'area_id'=>'1'
        ]);
        Pregunta::create([
            'texto'=>'Diga cuál de estas palabras contiene seis sílabas',
            'area_id'=>'1'
        ]);
        Pregunta::create([
            'texto'=>'Una de las siguientes palabras está dividida en sílabas de forma correcta',
            'area_id'=>'1'
        ]);
        Pregunta::create([
            'texto'=>'Diga cuántas palabras monosílabas hay en esta frase célebre de Mahatma
            Gandhi: “El amor es la fuerza más humilde, pero la más poderosa de la cual
            dispone el mundo.”',
            'area_id'=>'1'
        ]);
        Pregunta::create([
            'texto'=>'Diga cuántas palabras bisílabas contiene la frase: “Uno no puede pensar
            bien, amar bien, dormir bien, si uno no ha comido bien.”',
            'area_id'=>'1'
        ]);
        Pregunta::create([
            'texto'=>'Diga cuántas palabras agudas hay en esta frase célebre Mahatma Gandhi:”
            “Allí donde hay amor hay también vida.”',
            'area_id'=>'1'
        ]);
        Pregunta::create([
            'texto'=>'Diga cuál palabra es aguda.',
            'area_id'=>'1'
        ]);
        Pregunta::create([
            'texto'=>'Una de las siguientes oraciones no contiene palabras esdrújulas.',
            'area_id'=>'1'
        ]);
        Pregunta::create([
            'texto'=>'En el siguiente párrafo indique cuántas palabras esdrújulas hay:
            “El caminante, aun sin reponerse de la impresión recibida pensó en lo
            maravillosa que es la vida y la naturaleza.”',
            'area_id'=>'1'
        ]);
        Pregunta::create([
            'texto'=>'Diga cuántas palabras con hiato hay en este enunciado: “Podemos tropezar
            y caer, pero debemos levantarnos de nuevo; debería ser suficiente si no
            huimos de la batalla.”',
            'area_id'=>'1'
        ]);
        Pregunta::create([
            'texto'=>'Indique cuál de estas palabras no es hiato.',
            'area_id'=>'1'
        ]);
        Pregunta::create([
            'texto'=>'Una de las siguientes palabras posee tilde porque tiene un hiato de vocal
            cerrada:',
            'area_id'=>'1'
        ]);
        Pregunta::create([
            'texto'=>'Una de las siguientes oraciones contiene dos hiatos de vocales abiertas.',
            'area_id'=>'1'
        ]);
        Pregunta::create([
            'texto'=>'Diptongo creciente es la combinación de:',
            'area_id'=>'1'
        ]);
        Pregunta::create([
            'texto'=>'Una de las siguientes oraciones no contiene una palabra con diptongo',
            'area_id'=>'1'
        ]);
        Pregunta::create([
            'texto'=>'Señale cuántos diptongos contiene la oración: Lo que más la agobiaba
            del pueblo era el silencio a la hora de la siesta.',
            'area_id'=>'1'
        ]);
        Pregunta::create([
            'texto'=>'Distinga cuál de estas palabras contiene diptongo decreciente.',
            'area_id'=>'1'
        ]);
        Pregunta::create([
            'texto'=>'Indique cuál de estas palabras no es diptongo.',
            'area_id'=>'1'
        ]);
        Pregunta::create([
            'texto'=>'Las palabras que llevan la sílaba tónica en la cuarta sílaba se llaman',
            'area_id'=>'1'
        ]);
        // end lenguaje

        // begin historia
        Pregunta::create([
            'texto'=>'¿Cuál fue la guerra más mortífera de la historia boliviana?:',
            'area_id'=>'2'
        ]);
        Pregunta::create([
            'texto'=>'Bolivia cedió a perpetuidad el Litoral a Chile, al firmar el Tratado de Paz de:',
            'area_id'=>'2'
        ]);
        Pregunta::create([
            'texto'=>'Cuál es el calendario que establece el año de nacimiento de Cristo',
            'area_id'=>'2'
        ]);
        Pregunta::create([
            'texto'=>'Cuales son las subdivisiones mas conocidas de la geografía humana.',
            'area_id'=>'2'
        ]);
        Pregunta::create([
            'texto'=>'Durante la edad media, ¿qué países se unificaron?',
            'area_id'=>2
        ]);
        Pregunta::create([
            'texto'=>'El Decreto Supremo 21060, que redujo el déficit fiscal, fue promulgado en el
            gobierno de:',
            'area_id'=>2
        ]);
        Pregunta::create([
            'texto'=>'El Imperio Austrohúngaro estaba dentro del bando de:',
            'area_id'=>2
        ]);
        Pregunta::create([
            'texto'=>'El imperio inca se desarrolló en lo que ahora es:',
            'area_id'=>2
        ]);
        Pregunta::create([
            'texto'=>'El nuevo mundo, América, fue dividida en Virreinatos:',
            'area_id'=>2
        ]);
        Pregunta::create([
            'texto'=>'El Tahuantinsuyo, estaba conformado por cuatro suyos y corresponde a la
            zona andina de la actual Bolivia el',
            'area_id'=>2
        ]);
        Pregunta::create([
            'texto'=>' En América pre-hispánica se desarrollaron tres grandes Imperios:',
            'area_id'=>2
        ]);
        Pregunta::create([
            'texto'=>'En Atenas se desarrolló la filosofía destacándose:',
            'area_id'=>2
        ]);
        Pregunta::create([
            'texto'=>'En Bolivia surgieron los llamados Señoríos Collas, los cuales eran',
            'area_id'=>2
        ]);
        Pregunta::create([
            'texto'=>'En la administración de las Indias, el que se encargaba del comercio era:',
            'area_id'=>2
        ]);
        Pregunta::create([
            'texto'=>'Era una institución en la que, todos los varones entre 18 y 50 años debían
            trabajar un año de manera obligatoria para la producción minera:',
            'area_id'=>2
        ]);
        Pregunta::create([
            'texto'=>'Es el proceso de ocupación y poblamiento con europeos de las zonas
            conquistadas',
            'area_id'=>2
        ]);
        Pregunta::create([
            'texto'=>'Junto a la revolución industrial que otras revoluciones también se dan:',
            'area_id'=>2
        ]);
        Pregunta::create([
            'texto'=>'La doctrina fascista era:',
            'area_id'=>2
        ]);
        Pregunta::create([
            'texto'=>'La geografía moderna estudia la tierra como:',
            'area_id'=>2
        ]);
        Pregunta::create([
            'texto'=>'La guerra de las trincheras se da en:',
            'area_id'=>2
        ]);
        // end historia

        //begin psicologia
        Pregunta::create([
            'texto'=>'Desde sus inicios la psicología fue desarrollada por:',
            'area_id'=>'3'
        ]);
        Pregunta::create([
            'texto'=>'Sócrates y Platón analizaron la mente del hombre, ellos eran:',
            'area_id'=>'3'
        ]);
        Pregunta::create([
            'texto'=>'La palabra psicología quiere decir:',
            'area_id'=>'3'
        ]);
        Pregunta::create([
            'texto'=>'Las bases que sustentan la psicología son:',
            'area_id'=>'3'
        ]);
        Pregunta::create([
            'texto'=>'Es el estudio de la estructura de la mente, es la corriente del:',
            'area_id'=>'3'
        ]);
        Pregunta::create([
            'texto'=>'Skinner es uno de los autores que proponen la teoría del:',
            'area_id'=>'3'
        ]);
        Pregunta::create([
            'texto'=>'¿Cuál es la teoría que plantea el estudio de los procesos mentales y la
            forma en la que procesa la información?',
            'area_id'=>'3'
        ]);
        Pregunta::create([
            'texto'=>'¿Que estudia la psicología del trabajo o industrial?',
            'area_id'=>'3'
        ]);
        Pregunta::create([
            'texto'=>'Se encarga de los problemas mentales y su diagnóstico, es la psicología:',
            'area_id'=>'3'
        ]);
        Pregunta::create([
            'texto'=>'¿Cuál es la función de las células sostén?',
            'area_id'=>'3'
        ]);

        //end psicologia
    }
}
