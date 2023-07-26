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
        Respuesta::create([
            'texto'=>'El lenguaje es un sistema de comunicación que utiliza símbolos, signos y palabras para expresar y transmitir ideas, pensamientos, emociones e información entre individuos.',
            'esCorrecta'=>1,
            'pregunta_id'=>'1'
        ]);
        Respuesta::create([
            'texto'=>'Un pronombre es una palabra que reemplaza o sustituye a un sustantivo para evitar su repetición',
            'esCorrecta'=>0,
            'pregunta_id'=>'1'
        ]);
        Respuesta::create([
            'texto'=>'Una vocal es un sonido del lenguaje que se produce sin obstrucción significativa del flujo de aire en la boca',
            'esCorrecta'=>1,
            'pregunta_id'=>'2'
        ]);
        Respuesta::create([
            'texto'=>'Una oración es un conjunto de palabras que tiene sentido completo y contiene un sujeto y un verbo',
            'esCorrecta'=>0,
            'pregunta_id'=>'2'
        ]);
        Respuesta::create([
            'texto'=>'El abecedario tiene 27 letras',
            'esCorrecta'=>1,
            'pregunta_id'=>'3'
        ]);
        Respuesta::create([
            'texto'=>'Un adjetivo es una palabra que describe o califica a un sustantivo',
            'esCorrecta'=>0,
            'pregunta_id'=>'3'
        ]);
        Respuesta::create([
            'texto'=>'Un sustantivo es una palabra que nombra personas, lugares, cosas o ideas',
            'esCorrecta'=>1,
            'pregunta_id'=>'4'
        ]);
        Respuesta::create([
            'texto'=>'Una oración es un conjunto de palabras que tiene sentido completo y contiene un sujeto y un verbo',
            'esCorrecta'=>0,
            'pregunta_id'=>'4'
        ]);
        Respuesta::create([
            'texto'=>'Un verbo es una palabra que expresa una acción o un estado',
            'esCorrecta'=>1,
            'pregunta_id'=>'5'
        ]);
        Respuesta::create([
            'texto'=>'Un adjetivo es una palabra que describe o califica a un sustantivo',
            'esCorrecta'=>0,
            'pregunta_id'=>'5'
        ]);
        Respuesta::create([
            'texto'=>'La primera letra del abecedario es "A"',
            'esCorrecta'=>1,
            'pregunta_id'=>'6'
        ]);
        Respuesta::create([
            'texto'=>'Un antónimo es una palabra que tiene un significado opuesto a otra palabra',
            'esCorrecta'=>0,
            'pregunta_id'=>'6'
        ]);
        Respuesta::create([
            'texto'=>'Un sinónimo es una palabra que tiene un significado similar o idéntico a otra palabra',
            'esCorrecta'=>1,
            'pregunta_id'=>'7'
        ]);
        Respuesta::create([
            'texto'=>'Un antonimo es una palabra que tiene un significado diferente o idéntico a otra palabra',
            'esCorrecta'=>0,
            'pregunta_id'=>'7'
        ]);
        Respuesta::create([
            'texto'=>'Un antónimo es una palabra que tiene un significado opuesto a otra palabra',
            'esCorrecta'=>1,
            'pregunta_id'=>'8'
        ]);
        Respuesta::create([
            'texto'=>'La última letra del abecedario es "Z"',
            'esCorrecta'=>0,
            'pregunta_id'=>'8'
        ]);
        Respuesta::create([
            'texto'=>'Un adjetivo es una palabra que describe o califica a un sustantivo',
            'esCorrecta'=>1,
            'pregunta_id'=>'9'
        ]);
        Respuesta::create([
            'texto'=>'Un verbo es una palabra que expresa una acción o un estado',
            'esCorrecta'=>0,
            'pregunta_id'=>'9'
        ]);
        Respuesta::create([
            'texto'=>'Una oración es un conjunto de palabras que tiene sentido completo y contiene un sujeto y un verbo',
            'esCorrecta'=>1,
            'pregunta_id'=>'10'
        ]);
        Respuesta::create([
            'texto'=>'Un sustantivo es una palabra que nombra personas, lugares, cosas o ideas',
            'esCorrecta'=>0,
            'pregunta_id'=>'10'
        ]);

        //end lenguaje

        //begin historia

        Respuesta::create([
            'texto'=>'La historia es el estudio y la narración de eventos pasados que han ocurrido en el mundo',
            'esCorrecta'=>1,
            'pregunta_id'=>'11'
        ]);
        Respuesta::create([
            'texto'=>'La civilización griega fue una antigua cultura que floreció en la región del Mediterráneo desde alrededor del siglo VIII a.C., conocida por sus avances en la filosofía, el arte, la democracia y otras áreas',
            'esCorrecta'=>0,
            'pregunta_id'=>'11'
        ]);

        Respuesta::create([
            'texto'=>'Los dinosaurios fueron animales prehistóricos que vivieron hace millones de años y se extinguieron mucho tiempo antes de que apareciera el ser humano',
            'esCorrecta'=>1,
            'pregunta_id'=>'12'
        ]);
        Respuesta::create([
            'texto'=>'La Declaración de Independencia de Estados Unidos, firmada en 1776, proclamó la separación de las colonias americanas del dominio británico y sentó las bases para la formación del país',
            'esCorrecta'=>0,
            'pregunta_id'=>'12'
        ]);

        Respuesta::create([
            'texto'=>'Cristóbal Colón fue un explorador italiano que, en 1492, llegó a América creyendo que había alcanzado las Indias',
            'esCorrecta'=>1,
            'pregunta_id'=>'13'
        ]);
        Respuesta::create([
            'texto'=>'La Batalla de Waterloo, en 1815, fue una confrontación decisiva en la que Napoleón Bonaparte fue derrotado, poniendo fin a su gobierno y exilio final',
            'esCorrecta'=>0,
            'pregunta_id'=>'13'
        ]);

        Respuesta::create([
            'texto'=>'La Edad de Piedra fue un período de la prehistoria en el que los seres humanos usaban herramientas y armas hechas de piedra',
            'esCorrecta'=>1,
            'pregunta_id'=>'14'
        ]);
        Respuesta::create([
            'texto'=>'Simón Bolívar fue un líder sudamericano conocido como "El Libertador", que jugó un papel importante en la independencia de varios países de América del Sur del dominio español',
            'esCorrecta'=>0,
            'pregunta_id'=>'14'
        ]);

        Respuesta::create([
            'texto'=>'Los egipcios fueron una antigua civilización que vivió en el noreste de África, conocidos por construir grandes pirámides y templos.',
            'esCorrecta'=>1,
            'pregunta_id'=>'15'
        ]);
        Respuesta::create([
            'texto'=>'La Revolución Industrial fue un período de profundos cambios económicos y tecnológicos que comenzó en Inglaterra en el siglo XVIII y luego se extendió por todo el mundo',
            'esCorrecta'=>0,
            'pregunta_id'=>'15'
        ]);

        Respuesta::create([
            'texto'=>'La Revolución Industrial fue un período de profundos cambios económicos y tecnológicos que comenzó en Inglaterra en el siglo XVIII y luego se extendió por todo el mundo',
            'esCorrecta'=>1,
            'pregunta_id'=>'16'
        ]);
        Respuesta::create([
            'texto'=>'Los egipcios fueron una antigua civilización que vivió en el noreste de África, conocidos por construir grandes pirámides y templos',
            'esCorrecta'=>0,
            'pregunta_id'=>'16'
        ]);

        Respuesta::create([
            'texto'=>'Simón Bolívar fue un líder sudamericano conocido como "El Libertador", que jugó un papel importante en la independencia de varios países de América del Sur del dominio español',
            'esCorrecta'=>1,
            'pregunta_id'=>'17'
        ]);
        Respuesta::create([
            'texto'=>'La Edad de Piedra fue un período de la prehistoria en el que los seres humanos usaban herramientas y armas hechas de piedra',
            'esCorrecta'=>0,
            'pregunta_id'=>'17'
        ]);

        Respuesta::create([
            'texto'=>' La Batalla de Waterloo, en 1815, fue una confrontación decisiva en la que Napoleón Bonaparte fue derrotado, poniendo fin a su gobierno y exilio final',
            'esCorrecta'=>1,
            'pregunta_id'=>'18'
        ]);
        Respuesta::create([
            'texto'=>'Cristóbal Colón fue un explorador italiano que, en 1492, llegó a América creyendo que había alcanzado las Indias',
            'esCorrecta'=>0,
            'pregunta_id'=>'18'
        ]);

        Respuesta::create([
            'texto'=>'La Declaración de Independencia de Estados Unidos, firmada en 1776, proclamó la separación de las colonias americanas del dominio británico y sentó las bases para la formación del país',
            'esCorrecta'=>1,
            'pregunta_id'=>'19'
        ]);
        Respuesta::create([
            'texto'=>'Los dinosaurios fueron animales prehistóricos que vivieron hace millones de años y se extinguieron mucho tiempo antes de que apareciera el ser humano',
            'esCorrecta'=>0,
            'pregunta_id'=>'19'
        ]);

        Respuesta::create([
            'texto'=>'La civilización griega fue una antigua cultura que floreció en la región del Mediterráneo desde alrededor del siglo VIII a.C., conocida por sus avances en la filosofía, el arte, la democracia y otras áreas',
            'esCorrecta'=>1,
            'pregunta_id'=>'20'
        ]);
        Respuesta::create([
            'texto'=>'La historia es el estudio y la narración de eventos pasados que han ocurrido en el mundo',
            'esCorrecta'=>0,
            'pregunta_id'=>'20'
        ]);

        //end historia

        //begin psicologia

        Respuesta::create([
            'texto'=>'La psicología es el estudio de la mente y el comportamiento de las personas.',
            'esCorrecta'=>1,
            'pregunta_id'=>'21'
        ]);
        Respuesta::create([
            'texto'=>'El respeto es la consideración y valoración positiva que tenemos hacia otras personas, sus derechos y opiniones',
            'esCorrecta'=>0,
            'pregunta_id'=>'21'
        ]);

        Respuesta::create([
            'texto'=>'Las emociones son sentimientos que experimentamos, como la alegría, el miedo, la tristeza o el enojo',
            'esCorrecta'=>1,
            'pregunta_id'=>'22'
        ]);
        Respuesta::create([
            'texto'=>'La memoria es la capacidad del cerebro para almacenar y recordar información y experiencias pasadas',
            'esCorrecta'=>0,
            'pregunta_id'=>'22'
        ]);

        Respuesta::create([
            'texto'=>'La empatía es la capacidad de ponerse en el lugar de otra persona y entender cómo se siente',
            'esCorrecta'=>1,
            'pregunta_id'=>'23'
        ]);
        Respuesta::create([
            'texto'=>'Las habilidades sociales son las capacidades que tenemos para relacionarnos y comunicarnos de manera efectiva con otras personas',
            'esCorrecta'=>0,
            'pregunta_id'=>'23'
        ]);

        Respuesta::create([
            'texto'=>'El miedo es una emoción que sentimos cuando estamos asustados o preocupados por algo',
            'esCorrecta'=>1,
            'pregunta_id'=>'24'
        ]);
        Respuesta::create([
            'texto'=>'El bullying es el acoso o maltrato repetido hacia una persona por parte de otras, ya sea verbal, física o emocionalmente',
            'esCorrecta'=>0,
            'pregunta_id'=>'24'
        ]);

        Respuesta::create([
            'texto'=>'La autoestima es la valoración y percepción que tenemos sobre nosotros mismos, es decir, cómo nos sentimos acerca de quiénes somos',
            'esCorrecta'=>1,
            'pregunta_id'=>'25'
        ]);
        Respuesta::create([
            'texto'=>'El estrés es la respuesta del cuerpo a situaciones que percibimos como desafiantes o amenazantes',
            'esCorrecta'=>0,
            'pregunta_id'=>'25'
        ]);

        Respuesta::create([
            'texto'=>'El estrés es la respuesta del cuerpo a situaciones que percibimos como desafiantes o amenazantes',
            'esCorrecta'=>1,
            'pregunta_id'=>'26'
        ]);
        Respuesta::create([
            'texto'=>'La autoestima es la valoración y percepción que tenemos sobre nosotros mismos, es decir, cómo nos sentimos acerca de quiénes somos',
            'esCorrecta'=>0,
            'pregunta_id'=>'26'
        ]);

        Respuesta::create([
            'texto'=>'El bullying es el acoso o maltrato repetido hacia una persona por parte de otras, ya sea verbal, física o emocionalmente',
            'esCorrecta'=>1,
            'pregunta_id'=>'27'
        ]);
        Respuesta::create([
            'texto'=>'El miedo es una emoción que sentimos cuando estamos asustados o preocupados por algo',
            'esCorrecta'=>0,
            'pregunta_id'=>'27'
        ]);

        Respuesta::create([
            'texto'=>'Las habilidades sociales son las capacidades que tenemos para relacionarnos y comunicarnos de manera efectiva con otras personas',
            'esCorrecta'=>1,
            'pregunta_id'=>'28'
        ]);
        Respuesta::create([
            'texto'=>'La empatía es la capacidad de ponerse en el lugar de otra persona y entender cómo se siente',
            'esCorrecta'=>0,
            'pregunta_id'=>'28'
        ]);

        Respuesta::create([
            'texto'=>'La memoria es la capacidad del cerebro para almacenar y recordar información y experiencias pasadas',
            'esCorrecta'=>1,
            'pregunta_id'=>'29'
        ]);
        Respuesta::create([
            'texto'=>'Las emociones son sentimientos que experimentamos, como la alegría, el miedo, la tristeza o el enojo',
            'esCorrecta'=>0,
            'pregunta_id'=>'29'
        ]);

        Respuesta::create([
            'texto'=>'El respeto es la consideración y valoración positiva que tenemos hacia otras personas, sus derechos y opiniones',
            'esCorrecta'=>1,
            'pregunta_id'=>'30'
        ]);
        Respuesta::create([
            'texto'=>'La psicología es el estudio de la mente y el comportamiento de las personas',
            'esCorrecta'=>0,
            'pregunta_id'=>'30'
        ]);

        //end psicologia
    }
}
