<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pregunta;
use App\Models\Respuesta;

class LenguajeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //********* PARTE 1 **********//
        Pregunta::create([
            'texto' => 'Una de las siguientes palabras es polisílaba',
            'area_id' => '1'
        ]);
        Respuesta::create([
            'texto'=>'hoy',
            'esCorrecta'=>false,
            'pregunta_id'=>'1'
        ]);
        Respuesta::create([
            'texto'=>'dio',
            'esCorrecta'=>false,
            'pregunta_id'=>'1'
        ]);
        Respuesta::create([
            'texto'=>'que',
            'esCorrecta'=>false,
            'pregunta_id'=>'1'
        ]);
        Respuesta::create([
            'texto'=>'fue',
            'esCorrecta'=>false,
            'pregunta_id'=>'1'
        ]);
        Respuesta::create([
            'texto'=>'leo',
            'esCorrecta'=>true,
            'pregunta_id'=>'1'
        ]);

        Pregunta::create([
            'texto' => 'Diga cuál de estas palabras contiene seis sílabas',
            'area_id' => '1'
        ]);
        Respuesta::create([
            'texto'=>'pública',
            'esCorrecta'=>false,
            'pregunta_id'=>'2'
        ]);
        Respuesta::create([
            'texto'=>'monosílaba',
            'esCorrecta'=>false,
            'pregunta_id'=>'2'
        ]);
        Respuesta::create([
            'texto'=>'aeronáutica',
            'esCorrecta'=>true,
            'pregunta_id'=>'2'
        ]);
        Respuesta::create([
            'texto'=>'arraigado',
            'esCorrecta'=>false,
            'pregunta_id'=>'2'
        ]);
        Respuesta::create([
            'texto'=>'filosofía',
            'esCorrecta'=>false,
            'pregunta_id'=>'2'
        ]);

        Pregunta::create([
            'texto' => 'Una de las siguientes palabras está dividida en sílabas de forma correcta',
            'area_id' => '1'
        ]);
        Respuesta::create([
            'texto'=>'co-he-ti-llo',
            'esCorrecta'=>true,
            'pregunta_id'=>'3'
        ]);
        Respuesta::create([
            'texto'=>'e-u fó-rico',
            'esCorrecta'=>false,
            'pregunta_id'=>'3'
        ]);
        Respuesta::create([
            'texto'=>'ad-mi-si-ón',
            'esCorrecta'=>false,
            'pregunta_id'=>'3'
        ]);
        Respuesta::create([
            'texto'=>'len-gü-e-ta',
            'esCorrecta'=>false,
            'pregunta_id'=>'3'
        ]);
        Respuesta::create([
            'texto'=>'ah-u-yen-tar',
            'esCorrecta'=>false,
            'pregunta_id'=>'3'
        ]);

        Pregunta::create([
            'texto' => 'Diga cuántas palabras monosílabas hay en esta frase célebre de Mahatma Gandhi: “El amor es la fuerza más humilde, pero la más poderosa de la cual dispone el mundo.”',
            'area_id' => '1'
        ]);
        Respuesta::create([
            'texto'=>'siete',
            'esCorrecta'=>false,
            'pregunta_id'=>'4'
        ]);
        Respuesta::create([
            'texto'=>'ocho',
            'esCorrecta'=>false,
            'pregunta_id'=>'4'
        ]);
        Respuesta::create([
            'texto'=>'nueve',
            'esCorrecta'=>false,
            'pregunta_id'=>'4'
        ]);
        Respuesta::create([
            'texto'=>'diez',
            'esCorrecta'=>true,
            'pregunta_id'=>'4'
        ]);
        Respuesta::create([
            'texto'=>'once',
            'esCorrecta'=>false,
            'pregunta_id'=>'4'
        ]);

        Pregunta::create([
            'texto' => 'Diga cuántas palabras bisílabas contiene la frase: “Uno no puede pensar bien, amar bien, dormir bien, si uno no ha comido bien.”',
            'area_id' => '1'
        ]);
        Respuesta::create([
            'texto'=>'dos',
            'esCorrecta'=>false,
            'pregunta_id'=>'5'
        ]);
        Respuesta::create([
            'texto'=>'tres',
            'esCorrecta'=>false,
            'pregunta_id'=>'5'
        ]);
        Respuesta::create([
            'texto'=>'cuatro',
            'esCorrecta'=>false,
            'pregunta_id'=>'5'
        ]);
        Respuesta::create([
            'texto'=>'cinco',
            'esCorrecta'=>true,
            'pregunta_id'=>'5'
        ]);
        Respuesta::create([
            'texto'=>'seis',
            'esCorrecta'=>false,
            'pregunta_id'=>'5'
        ]);

        Pregunta::create([
            'texto' => 'Diga cuántas palabras agudas hay en esta frase célebre Mahatma Gandhi: “Allí donde hay amor hay también vida.”',
            'area_id' => '1'
        ]);
        Respuesta::create([
            'texto'=>'una',
            'esCorrecta'=>false,
            'pregunta_id'=>'6'
        ]);
        Respuesta::create([
            'texto'=>'dos',
            'esCorrecta'=>false,
            'pregunta_id'=>'6'
        ]);
        Respuesta::create([
            'texto'=>'tres',
            'esCorrecta'=>true,
            'pregunta_id'=>'6'
        ]);
        Respuesta::create([
            'texto'=>'cuatro',
            'esCorrecta'=>false,
            'pregunta_id'=>'6'
        ]);
        Respuesta::create([
            'texto'=>'cinco',
            'esCorrecta'=>false,
            'pregunta_id'=>'6'
        ]);

        Pregunta::create([
            'texto' => 'Diga cuál palabra es aguda.',
            'area_id' => '1'
        ]);
        Respuesta::create([
            'texto'=>'capaz',
            'esCorrecta'=>true,
            'pregunta_id'=>'7'
        ]);
        Respuesta::create([
            'texto'=>'creo',
            'esCorrecta'=>false,
            'pregunta_id'=>'7'
        ]);
        Respuesta::create([
            'texto'=>'tiene',
            'esCorrecta'=>false,
            'pregunta_id'=>'7'
        ]);
        Respuesta::create([
            'texto'=>'día',
            'esCorrecta'=>false,
            'pregunta_id'=>'7'
        ]);
        Respuesta::create([
            'texto'=>'fue',
            'esCorrecta'=>false,
            'pregunta_id'=>'7'
        ]);

        Pregunta::create([
            'texto' => 'Una de las siguientes oraciones no contiene palabras esdrújulas.',
            'area_id' => '1'
        ]);
        Respuesta::create([
            'texto'=>'Ajustó la cámara para capturar el paisaje.',
            'esCorrecta'=>false,
            'pregunta_id'=>'8'
        ]);
        Respuesta::create([
            'texto'=>'La película que vimos ayer era muy aburrida.',
            'esCorrecta'=>false,
            'pregunta_id'=>'8'
        ]);
        Respuesta::create([
            'texto'=>'El héroe se preparó para la batalla.',
            'esCorrecta'=>false,
            'pregunta_id'=>'8'
        ]);
        Respuesta::create([
            'texto'=>'No se le daban muy bien los papeles de comedia',
            'esCorrecta'=>true,
            'pregunta_id'=>'8'
        ]);
        Respuesta::create([
            'texto'=>'Tuvimos muchas pérdidas el pasado semestre.',
            'esCorrecta'=>false,
            'pregunta_id'=>'8'
        ]);

        Pregunta::create([
            'texto' => 'En el siguiente párrafo indique cuántas palabras esdrújulas hay: “El caminante, aun sin reponerse de la impresión recibida pensó en lo maravillosa que es la vida y la naturaleza.”',
            'area_id' => '1'
        ]);
        Respuesta::create([
            'texto'=>'tres',
            'esCorrecta'=>true,
            'pregunta_id'=>'9'
        ]);
        Respuesta::create([
            'texto'=>'cuatro',
            'esCorrecta'=>false,
            'pregunta_id'=>'9'
        ]);
        Respuesta::create([
            'texto'=>'cinco',
            'esCorrecta'=>false,
            'pregunta_id'=>'9'
        ]);
        Respuesta::create([
            'texto'=>'seis',
            'esCorrecta'=>false,
            'pregunta_id'=>'9'
        ]);
        Respuesta::create([
            'texto'=>'siete',
            'esCorrecta'=>false,
            'pregunta_id'=>'9'
        ]);

        Pregunta::create([
            'texto' => 'Diga cuántas palabras con hiato hay en este enunciado: “Podemos tropezar y caer, pero debemos levantarnos de nuevo; debería ser suficiente si no huimos de la batalla.”',
            'area_id' => '1'
        ]);
        Respuesta::create([
            'texto'=>'uno',
            'esCorrecta'=>false,
            'pregunta_id'=>'10'
        ]);
        Respuesta::create([
            'texto'=>'dos',
            'esCorrecta'=>true,
            'pregunta_id'=>'10'
        ]);
        Respuesta::create([
            'texto'=>'tres',
            'esCorrecta'=>false,
            'pregunta_id'=>'10'
        ]);
        Respuesta::create([
            'texto'=>'cuatro',
            'esCorrecta'=>false,
            'pregunta_id'=>'10'
        ]);
        Respuesta::create([
            'texto'=>'cinco',
            'esCorrecta'=>false,
            'pregunta_id'=>'10'
        ]);


        Pregunta::create([
            'texto' => 'Indique cuál de estas palabras no es hiato.',
            'area_id' => '1'
        ]);
        Respuesta::create([
            'texto'=>'cigueña',
            'esCorrecta'=>true,
            'pregunta_id'=>'11'
        ]);
        Respuesta::create([
            'texto'=>'flúor',
            'esCorrecta'=>false,
            'pregunta_id'=>'11'
        ]);
        Respuesta::create([
            'texto'=>'reo',
            'esCorrecta'=>false,
            'pregunta_id'=>'11'
        ]);
        Respuesta::create([
            'texto'=>'mía',
            'esCorrecta'=>false,
            'pregunta_id'=>'11'
        ]);
        Respuesta::create([
            'texto'=>'caos',
            'esCorrecta'=>false,
            'pregunta_id'=>'11'
        ]);

        Pregunta::create([
            'texto' => 'Una de las siguientes palabras posee tilde porque tiene un hiato de vocal cerrada:',
            'area_id' => '1'
        ]);
        Respuesta::create([
            'texto'=>'cacería',
            'esCorrecta'=>true,
            'pregunta_id'=>'12'
        ]);
        Respuesta::create([
            'texto'=>'néctar',
            'esCorrecta'=>false,
            'pregunta_id'=>'12'
        ]);
        Respuesta::create([
            'texto'=>'averigüéis',
            'esCorrecta'=>false,
            'pregunta_id'=>'12'
        ]);
        Respuesta::create([
            'texto'=>'héroe',
            'esCorrecta'=>false,
            'pregunta_id'=>'12'
        ]);
        Respuesta::create([
            'texto'=>'carácter',
            'esCorrecta'=>false,
            'pregunta_id'=>'12'
        ]);


        Pregunta::create([
            'texto' => 'El encuentro de dos vocales cerradas al interior de una palabra y que forman una sola sílaba, se llama:',
            'area_id' => '1'
        ]);
        Respuesta::create([
            'texto'=>'diptongo',
            'esCorrecta'=>true,
            'pregunta_id'=>'13'
        ]);
        Respuesta::create([
            'texto'=>'hiato',
            'esCorrecta'=>false,
            'pregunta_id'=>'13'
        ]);
        Respuesta::create([
            'texto'=>'triptongo',
            'esCorrecta'=>false,
            'pregunta_id'=>'13'
        ]);
        Respuesta::create([
            'texto'=>'sema',
            'esCorrecta'=>false,
            'pregunta_id'=>'13'
        ]);
        Respuesta::create([
            'texto'=>'sílaba tónica',
            'esCorrecta'=>false,
            'pregunta_id'=>'13'
        ]);

        Pregunta::create([
            'texto' => 'Una de las siguientes oraciones contiene dos hiatos de vocales abiertas.',
            'area_id' => '1'
        ]);
        Respuesta::create([
            'texto'=>'María y yo fuimos ayer a la casa de los abuelos.',
            'esCorrecta'=>false,
            'pregunta_id'=>'14'
        ]);
        Respuesta::create([
            'texto'=>'No han oído de nuevo del extraño caballero.',
            'esCorrecta'=>false,
            'pregunta_id'=>'14'
        ]);
        Respuesta::create([
            'texto'=>'Qué feo se ha puesto Diego.',
            'esCorrecta'=>false,
            'pregunta_id'=>'14'
        ]);
        Respuesta::create([
            'texto'=>'Si antes era malo, ahora es peor',
            'esCorrecta'=>true,
            'pregunta_id'=>'14'
        ]);
        Respuesta::create([
            'texto'=>'El poeta escribe versos a la luna.',
            'esCorrecta'=>false,
            'pregunta_id'=>'14'
        ]);

        Pregunta::create([
            'texto' => 'Diptongo creciente es la combinación de:',
            'area_id' => '1'
        ]);
        Respuesta::create([
            'texto'=>'dos vocales abiertas al interior de la silaba.',
            'esCorrecta'=>false,
            'pregunta_id'=>'15'
        ]);
        Respuesta::create([
            'texto'=>'dos vocales cerradas al interior de la silaba.',
            'esCorrecta'=>false,
            'pregunta_id'=>'15'
        ]);
        Respuesta::create([
            'texto'=>'una vocal cerrada átona más una abierta tónica.',
            'esCorrecta'=>true,
            'pregunta_id'=>'15'
        ]);
        Respuesta::create([
            'texto'=>'una vocal abierta tónica más una cerrada átona.',
            'esCorrecta'=>false,
            'pregunta_id'=>'15'
        ]);
        Respuesta::create([
            'texto'=>'una vocal abierta átona más una cerrada átona.',
            'esCorrecta'=>false,
            'pregunta_id'=>'15'
        ]);

        Pregunta::create([
            'texto' => 'Una de las siguientes oraciones no contiene una palabra con diptongo',
            'area_id' => '1'
        ]);
        Respuesta::create([
            'texto'=>'Cada tarde el cielo se pinta de rojo.',
            'esCorrecta'=>false,
            'pregunta_id'=>'16'
        ]);
        Respuesta::create([
            'texto'=>'¿Podrían guardar silencio?',
            'esCorrecta'=>false,
            'pregunta_id'=>'16'
        ]);
        Respuesta::create([
            'texto'=>'Compramos tres boletos para el teatro.',
            'esCorrecta'=>true,
            'pregunta_id'=>'16'
        ]);
        Respuesta::create([
            'texto'=>'Cuando era pequeño era muy enfermizo.',
            'esCorrecta'=>false,
            'pregunta_id'=>'16'
        ]);
        Respuesta::create([
            'texto'=>'Mi gran sueño es viajar por el mundo',
            'esCorrecta'=>false,
            'pregunta_id'=>'16'
        ]);

        Pregunta::create([
            'texto' => 'Señale cuántos diptongos contiene la oración: Lo que más la agobiaba del pueblo era el silencio a la hora de la siesta.',
            'area_id' => '1'
        ]);
        Respuesta::create([
            'texto'=>'uno',
            'esCorrecta'=>false,
            'pregunta_id'=>'17'
        ]);
        Respuesta::create([
            'texto'=>'dos',
            'esCorrecta'=>false,
            'pregunta_id'=>'17'
        ]);
        Respuesta::create([
            'texto'=>'tres',
            'esCorrecta'=>false,
            'pregunta_id'=>'17'
        ]);
        Respuesta::create([
            'texto'=>'cuatro',
            'esCorrecta'=>true,
            'pregunta_id'=>'17'
        ]);
        Respuesta::create([
            'texto'=>'cinco',
            'esCorrecta'=>false,
            'pregunta_id'=>'17'
        ]);

        Pregunta::create([
            'texto' => 'Distinga cuál de estas palabras contiene diptongo decreciente.',
            'area_id' => '1'
        ]);
        Respuesta::create([
            'texto'=>'lagua',
            'esCorrecta'=>false,
            'pregunta_id'=>'18'
        ]);
        Respuesta::create([
            'texto'=>'arduo',
            'esCorrecta'=>false,
            'pregunta_id'=>'18'
        ]);
        Respuesta::create([
            'texto'=>'variables',
            'esCorrecta'=>false,
            'pregunta_id'=>'18'
        ]);
        Respuesta::create([
            'texto'=>'aires',
            'esCorrecta'=>true,
            'pregunta_id'=>'18'
        ]);
        Respuesta::create([
            'texto'=>'deseos',
            'esCorrecta'=>false,
            'pregunta_id'=>'18'
        ]);

        Pregunta::create([
            'texto' => 'Indique cuál de estas palabras no es diptongo.',
            'area_id' => '1'
        ]);
        Respuesta::create([
            'texto'=>'aire',
            'esCorrecta'=>false,
            'pregunta_id'=>'19'
        ]);
        Respuesta::create([
            'texto'=>'ruido',
            'esCorrecta'=>false,
            'pregunta_id'=>'19'
        ]);
        Respuesta::create([
            'texto'=>'feudo',
            'esCorrecta'=>false,
            'pregunta_id'=>'19'
        ]);
        Respuesta::create([
            'texto'=>'boliviana',
            'esCorrecta'=>false,
            'pregunta_id'=>'19'
        ]);
        Respuesta::create([
            'texto'=>'quirófano',
            'esCorrecta'=>true,
            'pregunta_id'=>'19'
        ]);

        Pregunta::create([
            'texto' => 'Las palabras que llevan la sílaba tónica en la cuarta sílaba se llaman.',
            'area_id' => '1'
        ]);
        Respuesta::create([
            'texto'=>'variables',
            'esCorrecta'=>false,
            'pregunta_id'=>'20'
        ]);
        Respuesta::create([
            'texto'=>'invariables',
            'esCorrecta'=>false,
            'pregunta_id'=>'20'
        ]);
        Respuesta::create([
            'texto'=>'llanas',
            'esCorrecta'=>false,
            'pregunta_id'=>'20'
        ]);
        Respuesta::create([
            'texto'=>'esdrújulas',
            'esCorrecta'=>false,
            'pregunta_id'=>'20'
        ]);
        Respuesta::create([
            'texto'=>'sobresdrújula',
            'esCorrecta'=>true,
            'pregunta_id'=>'20'
        ]);

        Pregunta::create([
            'texto' => 'En una de estas oraciones hay una palabra que debe llevar acento diacrítico.',
            'area_id' => '1'
        ]);
        Respuesta::create([
            'texto'=>'No quiero que andes mucho',
            'esCorrecta'=>false,
            'pregunta_id'=>'21'
        ]);
        Respuesta::create([
            'texto'=>'Yo soy mejor que tú',
            'esCorrecta'=>false,
            'pregunta_id'=>'21'
        ]);
        Respuesta::create([
            'texto'=>'Quiero saber que sucede',
            'esCorrecta'=>true,
            'pregunta_id'=>'21'
        ]);
        Respuesta::create([
            'texto'=>'Supongo que tienes mucho dinero',
            'esCorrecta'=>false,
            'pregunta_id'=>'21'
        ]);
        Respuesta::create([
            'texto'=>'El niño que llora es mi hijo',
            'esCorrecta'=>false,
            'pregunta_id'=>'21'
        ]);

        Pregunta::create([
            'texto' => 'El acento diacrítico se lo utiliza para diferenciar las palabras:',
            'area_id' => '1'
        ]);
        Respuesta::create([
            'texto'=>'agudas',
            'esCorrecta'=>false,
            'pregunta_id'=>'22'
        ]);
        Respuesta::create([
            'texto'=>'homófonas',
            'esCorrecta'=>true,
            'pregunta_id'=>'22'
        ]);
        Respuesta::create([
            'texto'=>'átonas',
            'esCorrecta'=>false,
            'pregunta_id'=>'22'
        ]);
        Respuesta::create([
            'texto'=>'tónicas',
            'esCorrecta'=>false,
            'pregunta_id'=>'22'
        ]);
        Respuesta::create([
            'texto'=>'compuestas',
            'esCorrecta'=>false,
            'pregunta_id'=>'22'
        ]);

        Pregunta::create([
            'texto' => 'En una de las siguientes oraciones hay una palabra que le falta tilde',
            'area_id' => '1'
        ]);
        Respuesta::create([
            'texto'=>'Dime con quién andas y te diré quién eres.',
            'esCorrecta'=>false,
            'pregunta_id'=>'23'
        ]);
        Respuesta::create([
            'texto'=>'¿Cuál de todos vas a llevar?',
            'esCorrecta'=>false,
            'pregunta_id'=>'23'
        ]);
        Respuesta::create([
            'texto'=>'No sé por que de no lo compró.',
            'esCorrecta'=>true,
            'pregunta_id'=>'23'
        ]);
        Respuesta::create([
            'texto'=>'¿Estás poniendo atención a lo que te digo?',
            'esCorrecta'=>false,
            'pregunta_id'=>'23'
        ]);
        Respuesta::create([
            'texto'=>'¿Cuándo podremos vernos nuevamente?',
            'esCorrecta'=>false,
            'pregunta_id'=>'23'
        ]);

        Pregunta::create([
            'texto' => 'Una de las siguientes palabras está no debe llevar tilde:',
            'area_id' => '1'
        ]);
        Respuesta::create([
            'texto'=>'Espléndidamente',
            'esCorrecta'=>false,
            'pregunta_id'=>'24'
        ]);
        Respuesta::create([
            'texto'=>'Puntapié',
            'esCorrecta'=>false,
            'pregunta_id'=>'24'
        ]);
        Respuesta::create([
            'texto'=>'Chófer',
            'esCorrecta'=>false,
            'pregunta_id'=>'24'
        ]);
        Respuesta::create([
            'texto'=>'Cabalmente',
            'esCorrecta'=>false,
            'pregunta_id'=>'24'
        ]);
        Respuesta::create([
            'texto'=>'Asímismo',
            'esCorrecta'=>true,
            'pregunta_id'=>'24'
        ]);

        Pregunta::create([
            'texto' => 'Una de las siguientes palabras está usada incorrectamente, según el contexto:',
            'area_id' => '1'
        ]);
        Respuesta::create([
            'texto'=>'Le invitó a su hermano, pero guardó los mejores para si mismo.',
            'esCorrecta'=>true,
            'pregunta_id'=>'25'
        ]);
        Respuesta::create([
            'texto'=>'Encendió el incienso para la ofrenda',
            'esCorrecta'=>false,
            'pregunta_id'=>'25'
        ]);
        Respuesta::create([
            'texto'=>'Tú me prometiste que si terminaba la tarea me comprarías un helado',
            'esCorrecta'=>false,
            'pregunta_id'=>'25'
        ]);
        Respuesta::create([
            'texto'=>'Él llegó tarde a clases otra vez.',
            'esCorrecta'=>false,
            'pregunta_id'=>'25'
        ]);
        Respuesta::create([
            'texto'=>'No sé cuándo terminaré con todo este papeleo.',
            'esCorrecta'=>false,
            'pregunta_id'=>'25'
        ]);

        Pregunta::create([
            'texto' => 'Una de las siguientes palabras contiene un prefijo que significa negación:',
            'area_id' => '1'
        ]);
        Respuesta::create([
            'texto'=>'irreprochable',
            'esCorrecta'=>true,
            'pregunta_id'=>'26'
        ]);
        Respuesta::create([
            'texto'=>'autoflagelación',
            'esCorrecta'=>false,
            'pregunta_id'=>'26'
        ]);
        Respuesta::create([
            'texto'=>'macroeconomía',
            'esCorrecta'=>false,
            'pregunta_id'=>'26'
        ]);
        Respuesta::create([
            'texto'=>'geometría',
            'esCorrecta'=>false,
            'pregunta_id'=>'26'
        ]);
        Respuesta::create([
            'texto'=>'polideportivo',
            'esCorrecta'=>false,
            'pregunta_id'=>'26'
        ]);

        Pregunta::create([
            'texto' => 'Indique el prefijo que significa: “doble”.',
            'area_id' => '1'
        ]);
        Respuesta::create([
            'texto'=>'Prejuicio',
            'esCorrecta'=>false,
            'pregunta_id'=>'27'
        ]);
        Respuesta::create([
            'texto'=>'posponer',
            'esCorrecta'=>false,
            'pregunta_id'=>'27'
        ]);
        Respuesta::create([
            'texto'=>'bisabuelo',
            'esCorrecta'=>true,
            'pregunta_id'=>'27'
        ]);
        Respuesta::create([
            'texto'=>'predeterminado',
            'esCorrecta'=>false,
            'pregunta_id'=>'27'
        ]);
        Respuesta::create([
            'texto'=>'factura',
            'esCorrecta'=>false,
            'pregunta_id'=>'27'
        ]);

        Pregunta::create([
            'texto' => 'Indique el prefijo que significa: “bajo, debajo”.',
            'area_id' => '1'
        ]);
        Respuesta::create([
            'texto'=>'subterráneo',
            'esCorrecta'=>false,
            'pregunta_id'=>'28'
        ]);
        Respuesta::create([
            'texto'=>'determinación',
            'esCorrecta'=>false,
            'pregunta_id'=>'28'
        ]);
        Respuesta::create([
            'texto'=>'sustentar',
            'esCorrecta'=>true,
            'pregunta_id'=>'28'
        ]);
        Respuesta::create([
            'texto'=>'bajada',
            'esCorrecta'=>false,
            'pregunta_id'=>'28'
        ]);
        Respuesta::create([
            'texto'=>'desarrollo',
            'esCorrecta'=>false,
            'pregunta_id'=>'28'
        ]);

        Pregunta::create([
            'texto' => 'Una de las siguientes palabras posee un sufijo que significa: natural de:',
            'area_id' => '1'
        ]);
        Respuesta::create([
            'texto'=>'calabacita',
            'esCorrecta'=>false,
            'pregunta_id'=>'29'
        ]);
        Respuesta::create([
            'texto'=>'ortografía',
            'esCorrecta'=>false,
            'pregunta_id'=>'29'
        ]);
        Respuesta::create([
            'texto'=>'trigonometría',
            'esCorrecta'=>false,
            'pregunta_id'=>'29'
        ]);
        Respuesta::create([
            'texto'=>'departamento',
            'esCorrecta'=>false,
            'pregunta_id'=>'29'
        ]);
        Respuesta::create([
            'texto'=>'francés',
            'esCorrecta'=>true,
            'pregunta_id'=>'29'
        ]);

        Pregunta::create([
            'texto' => 'Una de las palabras contiene un sufijo que significa: “natural de”',
            'area_id' => '1'
        ]);
        Respuesta::create([
            'texto'=>'polonesa',
            'esCorrecta'=>true,
            'pregunta_id'=>'30'
        ]);
        Respuesta::create([
            'texto'=>'vejez',
            'esCorrecta'=>false,
            'pregunta_id'=>'30'
        ]);
        Respuesta::create([
            'texto'=>'después',
            'esCorrecta'=>false,
            'pregunta_id'=>'30'
        ]);
        Respuesta::create([
            'texto'=>'cargamento',
            'esCorrecta'=>false,
            'pregunta_id'=>'30'
        ]);
        Respuesta::create([
            'texto'=>'belleza',
            'esCorrecta'=>false,
            'pregunta_id'=>'30'
        ]);

        Pregunta::create([
            'texto' => 'Diga cuál palabra contiene un sufijo que significa género masculino.',
            'area_id' => '1'
        ]);
        Respuesta::create([
            'texto'=>'miércoles',
            'esCorrecta'=>false,
            'pregunta_id'=>'31'
        ]);
        Respuesta::create([
            'texto'=>'pizarra',
            'esCorrecta'=>false,
            'pregunta_id'=>'31'
        ]);
        Respuesta::create([
            'texto'=>'mano',
            'esCorrecta'=>false,
            'pregunta_id'=>'31'
        ]);
        Respuesta::create([
            'texto'=>'después',
            'esCorrecta'=>false,
            'pregunta_id'=>'31'
        ]);
        Respuesta::create([
            'texto'=>'gato',
            'esCorrecta'=>true,
            'pregunta_id'=>'31'
        ]);

        Pregunta::create([
            'texto' => 'En esta oración: “No entraron todos, a pesar de que la sala era grandísima.” La palabra que está en negrilla contiene un sufijo:',
            'area_id' => '1'
        ]);
        Respuesta::create([
            'texto'=>'diminutivo',
            'esCorrecta'=>false,
            'pregunta_id'=>'32'
        ]);
        Respuesta::create([
            'texto'=>'aumentativo',
            'esCorrecta'=>false,
            'pregunta_id'=>'32'
        ]);
        Respuesta::create([
            'texto'=>'superlativo',
            'esCorrecta'=>true,
            'pregunta_id'=>'32'
        ]);
        Respuesta::create([
            'texto'=>'despectivo',
            'esCorrecta'=>false,
            'pregunta_id'=>'32'
        ]);
        Respuesta::create([
            'texto'=>'significativo',
            'esCorrecta'=>false,
            'pregunta_id'=>'32'
        ]);

        Pregunta::create([
            'texto' => 'Diga cuál palabra contiene sufijo que significa:“doctrina o movimiento”:',
            'area_id' => '1'
        ]);
        Respuesta::create([
            'texto'=>'desperdicio',
            'esCorrecta'=>false,
            'pregunta_id'=>'33'
        ]);
        Respuesta::create([
            'texto'=>'triángulo',
            'esCorrecta'=>false,
            'pregunta_id'=>'33'
        ]);
        Respuesta::create([
            'texto'=>'centralismo',
            'esCorrecta'=>false,
            'pregunta_id'=>'33'
        ]);
        Respuesta::create([
            'texto'=>'faraónico',
            'esCorrecta'=>false,
            'pregunta_id'=>'33'
        ]);
        Respuesta::create([
            'texto'=>'gravamen',
            'esCorrecta'=>true,
            'pregunta_id'=>'33'
        ]);

        Pregunta::create([
            'texto' => 'Diga cuál palabra contiene sufijo que significa: “abundancia”:',
            'area_id' => '1'
        ]);
        Respuesta::create([
            'texto'=>'desdichado',
            'esCorrecta'=>false,
            'pregunta_id'=>'34'
        ]);
        Respuesta::create([
            'texto'=>'aumenta',
            'esCorrecta'=>false,
            'pregunta_id'=>'34'
        ]);
        Respuesta::create([
            'texto'=>'disposición',
            'esCorrecta'=>false,
            'pregunta_id'=>'34'
        ]);
        Respuesta::create([
            'texto'=>'baboso',
            'esCorrecta'=>true,
            'pregunta_id'=>'34'
        ]);
        Respuesta::create([
            'texto'=>'guardar',
            'esCorrecta'=>false,
            'pregunta_id'=>'34'
        ]);

        Pregunta::create([
            'texto' => 'Diga cuántas palabras compuestas hay en esta frase célebre de Pascal: “Aquel que duda y no investiga, se torna no sólo infeliz, sino también injusto.”',
            'area_id' => '1'
        ]);
        Respuesta::create([
            'texto'=>'una',
            'esCorrecta'=>true,
            'pregunta_id'=>'35'
        ]);
        Respuesta::create([
            'texto'=>'dos',
            'esCorrecta'=>false,
            'pregunta_id'=>'35'
        ]);
        Respuesta::create([
            'texto'=>'tres',
            'esCorrecta'=>false,
            'pregunta_id'=>'35'
        ]);
        Respuesta::create([
            'texto'=>'cuatro',
            'esCorrecta'=>false,
            'pregunta_id'=>'35'
        ]);
        Respuesta::create([
            'texto'=>'ninguna',
            'esCorrecta'=>false,
            'pregunta_id'=>'35'
        ]);

        Pregunta::create([
            'texto' => 'Diga cuántas palabras invariables hay en esta frase célebre de Aristóteles: “Es un principio indiscutible que, para saber mandar bien, es preciso saber obedecer.”',
            'area_id' => '1'
        ]);
        Respuesta::create([
            'texto'=>'una',
            'esCorrecta'=>false,
            'pregunta_id'=>'36'
        ]);
        Respuesta::create([
            'texto'=>'dos',
            'esCorrecta'=>false,
            'pregunta_id'=>'36'
        ]);
        Respuesta::create([
            'texto'=>'tres',
            'esCorrecta'=>true,
            'pregunta_id'=>'36'
        ]);
        Respuesta::create([
            'texto'=>'cuatro',
            'esCorrecta'=>false,
            'pregunta_id'=>'36'
        ]);
        Respuesta::create([
            'texto'=>'ninguna',
            'esCorrecta'=>false,
            'pregunta_id'=>'36'
        ]);

        Pregunta::create([
            'texto' => 'Diga qué relación semántica establece esta pareja de palabras: dar- recibir:',
            'area_id' => '1'
        ]);
        Respuesta::create([
            'texto'=>'homónimos',
            'esCorrecta'=>false,
            'pregunta_id'=>'37'
        ]);
        Respuesta::create([
            'texto'=>'polisemia',
            'esCorrecta'=>false,
            'pregunta_id'=>'37'
        ]);
        Respuesta::create([
            'texto'=>'antónimos',
            'esCorrecta'=>true,
            'pregunta_id'=>'37'
        ]);
        Respuesta::create([
            'texto'=>'parónimos',
            'esCorrecta'=>false,
            'pregunta_id'=>'37'
        ]);
        Respuesta::create([
            'texto'=>'sinónimos',
            'esCorrecta'=>false,
            'pregunta_id'=>'37'
        ]);

        Pregunta::create([
            'texto' => 'Qué relación semántica establece esta pareja de palabras: fragante-flagrante:',
            'area_id' => '1'
        ]);
        Respuesta::create([
            'texto'=>'homónimos',
            'esCorrecta'=>false,
            'pregunta_id'=>'38'
        ]);
        Respuesta::create([
            'texto'=>'polisemia',
            'esCorrecta'=>false,
            'pregunta_id'=>'38'
        ]);
        Respuesta::create([
            'texto'=>'antónimos',
            'esCorrecta'=>false,
            'pregunta_id'=>'38'
        ]);
        Respuesta::create([
            'texto'=>'parónimos',
            'esCorrecta'=>true,
            'pregunta_id'=>'38'
        ]);
        Respuesta::create([
            'texto'=>'sinónimos',
            'esCorrecta'=>false,
            'pregunta_id'=>'38'
        ]);

        Pregunta::create([
            'texto' => 'Una de las siguientes palabras es monomorfemática:',
            'area_id' => '1'
        ]);
        Respuesta::create([
            'texto'=>'feísimo',
            'esCorrecta'=>false,
            'pregunta_id'=>'39'
        ]);
        Respuesta::create([
            'texto'=>'ebriedad',
            'esCorrecta'=>false,
            'pregunta_id'=>'39'
        ]);
        Respuesta::create([
            'texto'=>'azul',
            'esCorrecta'=>true,
            'pregunta_id'=>'39'
        ]);
        Respuesta::create([
            'texto'=>'lindo',
            'esCorrecta'=>false,
            'pregunta_id'=>'39'
        ]);
        Respuesta::create([
            'texto'=>'antinatural',
            'esCorrecta'=>false,
            'pregunta_id'=>'39'
        ]);

        Pregunta::create([
            'texto' => 'Señale qué función cumple el sustantivo “mañana” en la oración: Mañana podremos apreciar el verdor del campo',
            'area_id' => '1'
        ]);
        Respuesta::create([
            'texto'=>'Núcleo del Sintagma Nominal',
            'esCorrecta'=>false,
            'pregunta_id'=>'40'
        ]);
        Respuesta::create([
            'texto'=>'Atributo',
            'esCorrecta'=>false,
            'pregunta_id'=>'40'
        ]);
        Respuesta::create([
            'texto'=>'Complemento directo',
            'esCorrecta'=>false,
            'pregunta_id'=>'40'
        ]);
        Respuesta::create([
            'texto'=>'Complemento indirecto',
            'esCorrecta'=>false,
            'pregunta_id'=>'40'
        ]);
        Respuesta::create([
            'texto'=>'Complemento circunstancial',
            'esCorrecta'=>true,
            'pregunta_id'=>'40'
        ]);

        Pregunta::create([
            'texto' => 'Señale qué función cumple el sustantivo “Marcela” en la oración: Nuestra hermana mayor, Marcela, acaba de llegar de su viaje.',
            'area_id' => '1'
        ]);
        Respuesta::create([
            'texto'=>'Núcleo del sintagma nominal',
            'esCorrecta'=>false,
            'pregunta_id'=>'41'
        ]);
        Respuesta::create([
            'texto'=>'Sintagma preposicional',
            'esCorrecta'=>false,
            'pregunta_id'=>'41'
        ]);
        Respuesta::create([
            'texto'=>'Vocativo',
            'esCorrecta'=>false,
            'pregunta_id'=>'41'
        ]);
        Respuesta::create([
            'texto'=>'Aposición',
            'esCorrecta'=>true,
            'pregunta_id'=>'41'
        ]);
        Respuesta::create([
            'texto'=>'Complemento indirecto',
            'esCorrecta'=>false,
            'pregunta_id'=>'41'
        ]);

        Pregunta::create([
            'texto' => 'Una de las siguientes oraciones contiene un sustantivo de género común:',
            'area_id' => '1'
        ]);
        Respuesta::create([
            'texto'=>'La colega que acaba de salir es bien puntual.',
            'esCorrecta'=>true,
            'pregunta_id'=>'42'
        ]);
        Respuesta::create([
            'texto'=>' Expulsaron la señorita por pelearse con una compañera',
            'esCorrecta'=>false,
            'pregunta_id'=>'42'
        ]);
        Respuesta::create([
            'texto'=>'La hiena es un animal carnívoro',
            'esCorrecta'=>false,
            'pregunta_id'=>'42'
        ]);
        Respuesta::create([
            'texto'=>'El juzgado abrió sus puertas hoy.',
            'esCorrecta'=>false,
            'pregunta_id'=>'42'
        ]);
        Respuesta::create([
            'texto'=>'Expuso sus pinturas en las galerías más famosas.',
            'esCorrecta'=>false,
            'pregunta_id'=>'42'
        ]);

        Pregunta::create([
            'texto' => ' Una de las siguientes oraciones contiene un sustantivo topónimo.',
            'area_id' => '1'
        ]);
        Respuesta::create([
            'texto'=>'Fuimos al pueblo de mis abuelos a conocer a mi familia.',
            'esCorrecta'=>false,
            'pregunta_id'=>'43'
        ]);
        Respuesta::create([
            'texto'=>'No había visto antes la ciudad tan vacía.',
            'esCorrecta'=>false,
            'pregunta_id'=>'43'
        ]);
        Respuesta::create([
            'texto'=>'Al llegar al lago comimos trucha recién pescada.',
            'esCorrecta'=>false,
            'pregunta_id'=>'43'
        ]);
        Respuesta::create([
            'texto'=>'¿Has visitado alguna vez las ruinas del templo prehispánico?',
            'esCorrecta'=>false,
            'pregunta_id'=>'43'
        ]);
        Respuesta::create([
            'texto'=>'Tuvimos que quedarnos en Montero porque había oscurecido.',
            'esCorrecta'=>true,
            'pregunta_id'=>'43'
        ]);

        Pregunta::create([
            'texto' => ' Una de las siguientes palabras no es un sustantivo colectivo.',
            'area_id' => '1'
        ]);
        Respuesta::create([
            'texto'=>'gente',
            'esCorrecta'=>false,
            'pregunta_id'=>'44'
        ]);
        Respuesta::create([
            'texto'=>'leño',
            'esCorrecta'=>true,
            'pregunta_id'=>'44'
        ]);
        Respuesta::create([
            'texto'=>'vocabulario',
            'esCorrecta'=>false,
            'pregunta_id'=>'44'
        ]);
        Respuesta::create([
            'texto'=>'enjambre',
            'esCorrecta'=>false,
            'pregunta_id'=>'44'
        ]);
        Respuesta::create([
            'texto'=>'dentadura',
            'esCorrecta'=>false,
            'pregunta_id'=>'44'
        ]);

        Pregunta::create([
            'texto' => 'Diga cuál de estos sustantivos es colectivo.',
            'area_id' => '1'
        ]);
        Respuesta::create([
            'texto'=>'alegría',
            'esCorrecta'=>false,
            'pregunta_id'=>'45'
        ]);
        Respuesta::create([
            'texto'=>'jauría',
            'esCorrecta'=>true,
            'pregunta_id'=>'45'
        ]);
        Respuesta::create([
            'texto'=>'caridad',
            'esCorrecta'=>false,
            'pregunta_id'=>'45'
        ]);
        Respuesta::create([
            'texto'=>'mesa',
            'esCorrecta'=>false,
            'pregunta_id'=>'45'
        ]);
        Respuesta::create([
            'texto'=>'ciudad',
            'esCorrecta'=>false,
            'pregunta_id'=>'45'
        ]);

        Pregunta::create([
            'texto' => 'Diga cuántos sustantivos en plural hay en esta frase célebre de Platón: “Así como los ojos están formados para la astronomía, los oídos lo están para percibir los movimientos de la armonía.”',
            'area_id' => '1'
        ]);
        Respuesta::create([
            'texto'=>'una',
            'esCorrecta'=>false,
            'pregunta_id'=>'46'
        ]);
        Respuesta::create([
            'texto'=>'dos',
            'esCorrecta'=>false,
            'pregunta_id'=>'46'
        ]);
        Respuesta::create([
            'texto'=>'tres',
            'esCorrecta'=>true,
            'pregunta_id'=>'46'
        ]);
        Respuesta::create([
            'texto'=>'cuatro',
            'esCorrecta'=>false,
            'pregunta_id'=>'46'
        ]);
        Respuesta::create([
            'texto'=>'cinco',
            'esCorrecta'=>false,
            'pregunta_id'=>'46'
        ]);

        Pregunta::create([
            'texto' => 'Diga cuántos sustantivos de género femenino hay en esta frase célebre de Platón: “La pobreza no viene por la disminución de las riquezas, sino por la multiplicación de los deseos.”',
            'area_id' => '1'
        ]);
        Respuesta::create([
            'texto'=>'una',
            'esCorrecta'=>false,
            'pregunta_id'=>'47'
        ]);
        Respuesta::create([
            'texto'=>'dos',
            'esCorrecta'=>false,
            'pregunta_id'=>'47'
        ]);
        Respuesta::create([
            'texto'=>'tres',
            'esCorrecta'=>false,
            'pregunta_id'=>'47'
        ]);
        Respuesta::create([
            'texto'=>'cuatro',
            'esCorrecta'=>true,
            'pregunta_id'=>'47'
        ]);
        Respuesta::create([
            'texto'=>'cinco',
            'esCorrecta'=>false,
            'pregunta_id'=>'47'
        ]);

        Pregunta::create([
            'texto' => 'Diga cuántos sustantivos hay en esta frase célebre de Henry Louis Mencken: “El amor es como una guerra, fácil de iniciar, difícil de terminar, imposible de olvidar.”',
            'area_id' => '1'
        ]);
        Respuesta::create([
            'texto'=>'una',
            'esCorrecta'=>false,
            'pregunta_id'=>'48'
        ]);
        Respuesta::create([
            'texto'=>'dos',
            'esCorrecta'=>true,
            'pregunta_id'=>'48'
        ]);
        Respuesta::create([
            'texto'=>'tres',
            'esCorrecta'=>false,
            'pregunta_id'=>'48'
        ]);
        Respuesta::create([
            'texto'=>'cuatro',
            'esCorrecta'=>false,
            'pregunta_id'=>'48'
        ]);
        Respuesta::create([
            'texto'=>'ninguna',
            'esCorrecta'=>false,
            'pregunta_id'=>'48'
        ]);

        Pregunta::create([
            'texto' => 'Diga cuántos sustantivos hay en esta frase célebre de Benjamín Franklin: “Las tres cosas más difíciles de esta vida son: guardar un secreto, perdonar un agravio y aprovechar el tiempo.”',
            'area_id' => '1'
        ]);
        Respuesta::create([
            'texto'=>'una',
            'esCorrecta'=>false,
            'pregunta_id'=>'49'
        ]);
        Respuesta::create([
            'texto'=>'dos',
            'esCorrecta'=>false,
            'pregunta_id'=>'49'
        ]);
        Respuesta::create([
            'texto'=>'tres',
            'esCorrecta'=>false,
            'pregunta_id'=>'49'
        ]);
        Respuesta::create([
            'texto'=>'cuatro',
            'esCorrecta'=>false,
            'pregunta_id'=>'49'
        ]);
        Respuesta::create([
            'texto'=>'cinco',
            'esCorrecta'=>true,
            'pregunta_id'=>'49'
        ]);

        Pregunta::create([
            'texto' => 'Cuando una palabra no pertenece a la categoría del nombre o sustantivo, pero funciona como tal, se llama: ',
            'area_id' => '1'
        ]);
        Respuesta::create([
            'texto'=>'semántica',
            'esCorrecta'=>false,
            'pregunta_id'=>'50'
        ]);
        Respuesta::create([
            'texto'=>'sustantivación',
            'esCorrecta'=>true,
            'pregunta_id'=>'50'
        ]);
        Respuesta::create([
            'texto'=>'morfología del sustantivo',
            'esCorrecta'=>false,
            'pregunta_id'=>'50'
        ]);
        Respuesta::create([
            'texto'=>'pluralización de sustantivos',
            'esCorrecta'=>false,
            'pregunta_id'=>'50'
        ]);
        Respuesta::create([
            'texto'=>'adverbialización',
            'esCorrecta'=>false,
            'pregunta_id'=>'50'
        ]);

        //********* PARTE 2 **********//
        Pregunta::create([
            'texto' => 'Desde el punto de vista morfológico los adjetivos son palabras.',
            'area_id' => '1'
        ]);
        Respuesta::create([
            'texto'=>'invariables',
            'esCorrecta'=>false,
            'pregunta_id'=>'51'
        ]);
        Respuesta::create([
            'texto'=>'variables',
            'esCorrecta'=>true,
            'pregunta_id'=>'51'
        ]);
        Respuesta::create([
            'texto'=>'comunes',
            'esCorrecta'=>false,
            'pregunta_id'=>'51'
        ]);
        Respuesta::create([
            'texto'=>'homogéneas',
            'esCorrecta'=>false,
            'pregunta_id'=>'51'
        ]);
        Respuesta::create([
            'texto'=>'átonas',
            'esCorrecta'=>false,
            'pregunta_id'=>'51'
        ]);

        Pregunta::create([
            'texto' => 'Identifique el adjetivo calificativo',
            'area_id' => '1'
        ]);
        Respuesta::create([
            'texto'=>'brillante',
            'esCorrecta'=>true,
            'pregunta_id'=>'52'
        ]);
        Respuesta::create([
            'texto'=>'felicidad',
            'esCorrecta'=>false,
            'pregunta_id'=>'52'
        ]);
        Respuesta::create([
            'texto'=>'nuestro',
            'esCorrecta'=>false,
            'pregunta_id'=>'52'
        ]);
        Respuesta::create([
            'texto'=>'cuanto',
            'esCorrecta'=>false,
            'pregunta_id'=>'52'
        ]);
        Respuesta::create([
            'texto'=>'catorce',
            'esCorrecta'=>false,
            'pregunta_id'=>'52'
        ]);

        Pregunta::create([
            'texto' => 'Diga cuál de los adjetivos está apocopado',
            'area_id' => '1'
        ]);
        Respuesta::create([
            'texto'=>'suyos',
            'esCorrecta'=>false,
            'pregunta_id'=>'53'
        ]);
        Respuesta::create([
            'texto'=>'tus',
            'esCorrecta'=>true,
            'pregunta_id'=>'53'
        ]);
        Respuesta::create([
            'texto'=>'mías',
            'esCorrecta'=>false,
            'pregunta_id'=>'53'
        ]);
        Respuesta::create([
            'texto'=>'nuestros',
            'esCorrecta'=>false,
            'pregunta_id'=>'53'
        ]);
        Respuesta::create([
            'texto'=>'tuyos',
            'esCorrecta'=>false,
            'pregunta_id'=>'53'
        ]);

        Pregunta::create([
            'texto' => 'Desde el punto de vista semántico, diga cómo lo clasifica al adjetivo: “su”',
            'area_id' => '1'
        ]);
        Respuesta::create([
            'texto'=>'cualitativo',
            'esCorrecta'=>false,
            'pregunta_id'=>'54'
        ]);
        Respuesta::create([
            'texto'=>'superlativo',
            'esCorrecta'=>false,
            'pregunta_id'=>'54'
        ]);
        Respuesta::create([
            'texto'=>'partitivo',
            'esCorrecta'=>false,
            'pregunta_id'=>'54'
        ]);
        Respuesta::create([
            'texto'=>'indefinido',
            'esCorrecta'=>false,
            'pregunta_id'=>'54'
        ]);
        Respuesta::create([
            'texto'=>'posesivo',
            'esCorrecta'=>true,
            'pregunta_id'=>'54'
        ]);

        Pregunta::create([
            'texto' => 'Según la clasificación semántica y funcional, los adjetivos calificativos son:',
            'area_id' => '1'
        ]);
        Respuesta::create([
            'texto'=>'Calificativos y gentilicios y numerales.',
            'esCorrecta'=>false,
            'pregunta_id'=>'55'
        ]);
        Respuesta::create([
            'texto'=>'Cualitativos, gentilicios, comparativos y superlativos.',
            'esCorrecta'=>true,
            'pregunta_id'=>'55'
        ]);
        Respuesta::create([
            'texto'=>'Demostrativos, posesivos, indefinidos y numerales.',
            'esCorrecta'=>false,
            'pregunta_id'=>'55'
        ]);
        Respuesta::create([
            'texto'=>'comparativos, gentilicios y determinativos.',
            'esCorrecta'=>false,
            'pregunta_id'=>'55'
        ]);
        Respuesta::create([
            'texto'=>'Superlativos e indefinidos.',
            'esCorrecta'=>false,
            'pregunta_id'=>'55'
        ]);

        Pregunta::create([
            'texto' => 'Una de las oraciones contiene un adjetivo gentilicio.',
            'area_id' => '1'
        ]);
        Respuesta::create([
            'texto'=>'La preciosa princesa esperaba al gallardo príncipe',
            'esCorrecta'=>false,
            'pregunta_id'=>'56'
        ]);
        Respuesta::create([
            'texto'=>'Los cuatro bandidos nos detuvieron en el camino',
            'esCorrecta'=>false,
            'pregunta_id'=>'56'
        ]);
        Respuesta::create([
            'texto'=>'El mejor amigo de mi hermano se llama Gerardo.',
            'esCorrecta'=>false,
            'pregunta_id'=>'56'
        ]);
        Respuesta::create([
            'texto'=>'El huésped finlandés se quejó del ruido de la fiesta.',
            'esCorrecta'=>true,
            'pregunta_id'=>'56'
        ]);
        Respuesta::create([
            'texto'=>'Nos quedamos en el famosísimo Hotel de la ciudad.',
            'esCorrecta'=>false,
            'pregunta_id'=>'56'
        ]);

        Pregunta::create([
            'texto' => 'Diga qué función cumple el adjetivo: “negro”, en: Mi gato es negro.',
            'area_id' => '1'
        ]);
        Respuesta::create([
            'texto'=>'complemento predicativo',
            'esCorrecta'=>false,
            'pregunta_id'=>'57'
        ]);
        Respuesta::create([
            'texto'=>'atributo',
            'esCorrecta'=>true,
            'pregunta_id'=>'57'
        ]);
        Respuesta::create([
            'texto'=>'complemento directo',
            'esCorrecta'=>false,
            'pregunta_id'=>'57'
        ]);
        Respuesta::create([
            'texto'=>'núcleo del SN',
            'esCorrecta'=>false,
            'pregunta_id'=>'57'
        ]);
        Respuesta::create([
            'texto'=>'adyacente',
            'esCorrecta'=>false,
            'pregunta_id'=>'57'
        ]);

        Pregunta::create([
            'texto' => 'En el proverbio V de Antonio Machado; Diga cuál de estas palabras está sustantivada: "Ni vale nada el fruto cogido sin sazón... Ni aunque te elogie un bruto ha de tener razón"',
            'area_id' => '1'
        ]);
        Respuesta::create([
            'texto'=>'nada',
            'esCorrecta'=>false,
            'pregunta_id'=>'58'
        ]);
        Respuesta::create([
            'texto'=>'fruto',
            'esCorrecta'=>false,
            'pregunta_id'=>'58'
        ]);
        Respuesta::create([
            'texto'=>'aunque',
            'esCorrecta'=>false,
            'pregunta_id'=>'58'
        ]);
        Respuesta::create([
            'texto'=>'bruto',
            'esCorrecta'=>true,
            'pregunta_id'=>'58'
        ]);
        Respuesta::create([
            'texto'=>'razón',
            'esCorrecta'=>false,
            'pregunta_id'=>'58'
        ]);

        Pregunta::create([
            'texto' => 'Diga cuántos adjetivos hay en este proverbio LVIII de Antonio Machado: "Mirando mi calavera un nuevo Hamlet dirá: He aquí un lindo fósil de una careta de carnaval."',
            'area_id' => '1'
        ]);
        Respuesta::create([
            'texto'=>'una',
            'esCorrecta'=>false,
            'pregunta_id'=>'59'
        ]);
        Respuesta::create([
            'texto'=>'dos',
            'esCorrecta'=>false,
            'pregunta_id'=>'59'
        ]);
        Respuesta::create([
            'texto'=>'tres',
            'esCorrecta'=>true,
            'pregunta_id'=>'59'
        ]);
        Respuesta::create([
            'texto'=>'cuatro',
            'esCorrecta'=>false,
            'pregunta_id'=>'59'
        ]);
        Respuesta::create([
            'texto'=>'ninguna',
            'esCorrecta'=>false,
            'pregunta_id'=>'59'
        ]);

        Pregunta::create([
            'texto' => 'Diga cuántos pronombres hay en esta frase anónima: “Ámame sin preguntas, que yo te amaré sin respuestas.”',
            'area_id' => '1'
        ]);
        Respuesta::create([
            'texto'=>'uno',
            'esCorrecta'=>false,
            'pregunta_id'=>'60'
        ]);
        Respuesta::create([
            'texto'=>'dos',
            'esCorrecta'=>false,
            'pregunta_id'=>'60'
        ]);
        Respuesta::create([
            'texto'=>'tres',
            'esCorrecta'=>true,
            'pregunta_id'=>'60'
        ]);
        Respuesta::create([
            'texto'=>'cuatro',
            'esCorrecta'=>false,
            'pregunta_id'=>'60'
        ]);
        Respuesta::create([
            'texto'=>'cinco',
            'esCorrecta'=>false,
            'pregunta_id'=>'60'
        ]);


        Pregunta::create([
            'texto' => 'En una de las siguientes oraciones hay un pronombre reflexivo',
            'area_id' => '1'
        ]);
        Respuesta::create([
            'texto'=>'Mis amigos no tienen dinero.',
            'esCorrecta'=>false,
            'pregunta_id'=>'61'
        ]);
        Respuesta::create([
            'texto'=>'Él se peinó frente a mí.',
            'esCorrecta'=>true,
            'pregunta_id'=>'61'
        ]);
        Respuesta::create([
            'texto'=>'Las flores adornan el jardín.',
            'esCorrecta'=>false,
            'pregunta_id'=>'61'
        ]);
        Respuesta::create([
            'texto'=>'Yo seré grande.',
            'esCorrecta'=>false,
            'pregunta_id'=>'61'
        ]);
        Respuesta::create([
            'texto'=>'Ustedes no tienen una familia.',
            'esCorrecta'=>false,
            'pregunta_id'=>'61'
        ]);

        Pregunta::create([
            'texto' => 'Desde el punto de vista fónico, los pronombres pueden ser:',
            'area_id' => '1'
        ]);
        Respuesta::create([
            'texto'=>'tónico/ átonos',
            'esCorrecta'=>true,
            'pregunta_id'=>'62'
        ]);
        Respuesta::create([
            'texto'=>'simples/ compuestos',
            'esCorrecta'=>false,
            'pregunta_id'=>'62'
        ]);
        Respuesta::create([
            'texto'=>'femeninos/ masculinos',
            'esCorrecta'=>false,
            'pregunta_id'=>'62'
        ]);
        Respuesta::create([
            'texto'=>'género común/ impersonales',
            'esCorrecta'=>false,
            'pregunta_id'=>'62'
        ]);
        Respuesta::create([
            'texto'=>'variables/ invariables',
            'esCorrecta'=>false,
            'pregunta_id'=>'62'
        ]);

        Pregunta::create([
            'texto' => 'A los pronombres indefinidos se los usa para:',
            'area_id' => '1'
        ]);
        Respuesta::create([
            'texto'=>'Indicar orden dentro de la sucesión de números enteros.',
            'esCorrecta'=>false,
            'pregunta_id'=>'63'
        ]);
        Respuesta::create([
            'texto'=>'Acompañar a los nombres propios',
            'esCorrecta'=>false,
            'pregunta_id'=>'63'
        ]);
        Respuesta::create([
            'texto'=>'Indicar una referencia a alguien que posee algo.',
            'esCorrecta'=>false,
            'pregunta_id'=>'63'
        ]);
        Respuesta::create([
            'texto'=>'Nombrar a las personas o cosas.',
            'esCorrecta'=>false,
            'pregunta_id'=>'63'
        ]);
        Respuesta::create([
            'texto'=>'Sustituir al nombre de manera imprecisa.',
            'esCorrecta'=>true,
            'pregunta_id'=>'63'
        ]);

        Pregunta::create([
            'texto' => 'En uno de los incisos hay una pareja de pronombres posesivos:',
            'area_id' => '1'
        ]);
        Respuesta::create([
            'texto'=>'que - cuyo.',
            'esCorrecta'=>false,
            'pregunta_id'=>'64'
        ]);
        Respuesta::create([
            'texto'=>'me – te.',
            'esCorrecta'=>false,
            'pregunta_id'=>'64'
        ]);
        Respuesta::create([
            'texto'=>'mío, nuestro',
            'esCorrecta'=>true,
            'pregunta_id'=>'64'
        ]);
        Respuesta::create([
            'texto'=>'mí - tú.',
            'esCorrecta'=>false,
            'pregunta_id'=>'64'
        ]);
        Respuesta::create([
            'texto'=>'sus - cual.',
            'esCorrecta'=>false,
            'pregunta_id'=>'64'
        ]);

        Pregunta::create([
            'texto' => ' Una de las siguientes oraciones encuentras un pronombre personal átono.',
            'area_id' => '1'
        ]);
        Respuesta::create([
            'texto'=>'Mi hermano menor habla con errores.',
            'esCorrecta'=>false,
            'pregunta_id'=>'65'
        ]);
        Respuesta::create([
            'texto'=>'Nos hiciste falta cuando viajaste.',
            'esCorrecta'=>true,
            'pregunta_id'=>'65'
        ]);
        Respuesta::create([
            'texto'=>'Él ha estado ayudando desde hace tiempo.',
            'esCorrecta'=>false,
            'pregunta_id'=>'65'
        ]);
        Respuesta::create([
            'texto'=>'Si no riegas constantemente las plantas no crecerán',
            'esCorrecta'=>false,
            'pregunta_id'=>'65'
        ]);
        Respuesta::create([
            'texto'=>'He arreglado el vestido viejo de mi tía.',
            'esCorrecta'=>false,
            'pregunta_id'=>'65'
        ]);

        Pregunta::create([
            'texto' => 'Identifique el pronombre personal de género común',
            'area_id' => '1'
        ]);
        Respuesta::create([
            'texto'=>'Él',
            'esCorrecta'=>false,
            'pregunta_id'=>'66'
        ]);
        Respuesta::create([
            'texto'=>'Tú',
            'esCorrecta'=>true,
            'pregunta_id'=>'66'
        ]);
        Respuesta::create([
            'texto'=>'Nosotros',
            'esCorrecta'=>false,
            'pregunta_id'=>'66'
        ]);
        Respuesta::create([
            'texto'=>'Vosotras',
            'esCorrecta'=>false,
            'pregunta_id'=>'66'
        ]);
        Respuesta::create([
            'texto'=>'Ellas',
            'esCorrecta'=>false,
            'pregunta_id'=>'66'
        ]);

        Pregunta::create([
            'texto' => 'Una de las oraciones no contiene pronombre.',
            'area_id' => '1'
        ]);
        Respuesta::create([
            'texto'=>'Él quería estar sólo con ella',
            'esCorrecta'=>false,
            'pregunta_id'=>'67'
        ]);
        Respuesta::create([
            'texto'=>'Cómpralo a mi nombre',
            'esCorrecta'=>false,
            'pregunta_id'=>'67'
        ]);
        Respuesta::create([
            'texto'=>'Vamos a pasear al parque.',
            'esCorrecta'=>true,
            'pregunta_id'=>'67'
        ]);
        Respuesta::create([
            'texto'=>'Nos han derrotado en el primer partido',
            'esCorrecta'=>false,
            'pregunta_id'=>'67'
        ]);
        Respuesta::create([
            'texto'=>'Ustedes no están en la lista.',
            'esCorrecta'=>false,
            'pregunta_id'=>'67'
        ]);

        Pregunta::create([
            'texto' => 'Diga cuántos pronombres hay en esta frase célebre de Gandhi: “Cada noche, cuando me voy a dormir, me muero. Y a la mañana siguiente, cuando me despierto, vuelvo a renacer”',
            'area_id' => '1'
        ]);
        Respuesta::create([
            'texto'=>'dos',
            'esCorrecta'=>false,
            'pregunta_id'=>'68'
        ]);
        Respuesta::create([
            'texto'=>'tres',
            'esCorrecta'=>true,
            'pregunta_id'=>'68'
        ]);
        Respuesta::create([
            'texto'=>'cuatro',
            'esCorrecta'=>false,
            'pregunta_id'=>'68'
        ]);
        Respuesta::create([
            'texto'=>'cinco',
            'esCorrecta'=>false,
            'pregunta_id'=>'68'
        ]);
        Respuesta::create([
            'texto'=>'seis',
            'esCorrecta'=>false,
            'pregunta_id'=>'68'
        ]);

        Pregunta::create([
            'texto' => 'Indique qué función cumple el pronombre “me” en la oración: Me quiere mucho.',
            'area_id' => '1'
        ]);
        Respuesta::create([
            'texto'=>'Complemento directo',
            'esCorrecta'=>true,
            'pregunta_id'=>'69'
        ]);
        Respuesta::create([
            'texto'=>'Complemento indirecto',
            'esCorrecta'=>false,
            'pregunta_id'=>'69'
        ]);
        Respuesta::create([
            'texto'=>'Núcleo del sintagma verbal',
            'esCorrecta'=>false,
            'pregunta_id'=>'69'
        ]);
        Respuesta::create([
            'texto'=>'Sintagma preposicional',
            'esCorrecta'=>false,
            'pregunta_id'=>'69'
        ]);
        Respuesta::create([
            'texto'=>'Vocativo',
            'esCorrecta'=>false,
            'pregunta_id'=>'69'
        ]);

        Pregunta::create([
            'texto' => 'Uno de los siguientes verbos está en su forma compuesta',
            'area_id' => '1'
        ]);
        Respuesta::create([
            'texto'=>'Nosotros iremos',
            'esCorrecta'=>false,
            'pregunta_id'=>'70'
        ]);
        Respuesta::create([
            'texto'=>'Yo canté',
            'esCorrecta'=>false,
            'pregunta_id'=>'70'
        ]);
        Respuesta::create([
            'texto'=>'Él salió',
            'esCorrecta'=>false,
            'pregunta_id'=>'70'
        ]);
        Respuesta::create([
            'texto'=>'Tú has salido',
            'esCorrecta'=>true,
            'pregunta_id'=>'70'
        ]);
        Respuesta::create([
            'texto'=>'Ellos cantaron',
            'esCorrecta'=>false,
            'pregunta_id'=>'70'
        ]);

        Pregunta::create([
            'texto' => 'en uno de los incisos hay un verbo que está en imperativo.',
            'area_id' => '1'
        ]);
        Respuesta::create([
            'texto'=>'salir',
            'esCorrecta'=>false,
            'pregunta_id'=>'71'
        ]);
        Respuesta::create([
            'texto'=>'salgo',
            'esCorrecta'=>false,
            'pregunta_id'=>'71'
        ]);
        Respuesta::create([
            'texto'=>'saliendo',
            'esCorrecta'=>false,
            'pregunta_id'=>'71'
        ]);
        Respuesta::create([
            'texto'=>'sal',
            'esCorrecta'=>true,
            'pregunta_id'=>'71'
        ]);
        Respuesta::create([
            'texto'=>'salido',
            'esCorrecta'=>false,
            'pregunta_id'=>'71'
        ]);

        Pregunta::create([
            'texto' => ' Las terminaciones verbales ar – er – ir,corresponden al',
            'area_id' => '1'
        ]);
        Respuesta::create([
            'texto'=>'Infinitivo',
            'esCorrecta'=>true,
            'pregunta_id'=>'72'
        ]);
        Respuesta::create([
            'texto'=>'Imperativo',
            'esCorrecta'=>false,
            'pregunta_id'=>'72'
        ]);
        Respuesta::create([
            'texto'=>'Condicional',
            'esCorrecta'=>false,
            'pregunta_id'=>'72'
        ]);
        Respuesta::create([
            'texto'=>'Gerundio',
            'esCorrecta'=>false,
            'pregunta_id'=>'72'
        ]);
        Respuesta::create([
            'texto'=>'Participio',
            'esCorrecta'=>false,
            'pregunta_id'=>'72'
        ]);

        Pregunta::create([
            'texto' => 'En la oración: “Iremos andando por las calles de Santa Cruz.” El verbo que está en negrilla cursiva está en:',
            'area_id' => '1'
        ]);
        Respuesta::create([
            'texto'=>'participio',
            'esCorrecta'=>false,
            'pregunta_id'=>'73'
        ]);
        Respuesta::create([
            'texto'=>'infinitivo',
            'esCorrecta'=>false,
            'pregunta_id'=>'73'
        ]);
        Respuesta::create([
            'texto'=>'subjuntivo',
            'esCorrecta'=>false,
            'pregunta_id'=>'73'
        ]);
        Respuesta::create([
            'texto'=>'gerundio',
            'esCorrecta'=>true,
            'pregunta_id'=>'73'
        ]);
        Respuesta::create([
            'texto'=>'indicativo',
            'esCorrecta'=>false,
            'pregunta_id'=>'73'
        ]);

        Pregunta::create([
            'texto' => 'Diga en cuál de los incisos el verbo está en tiempo presente.',
            'area_id' => '1'
        ]);
        Respuesta::create([
            'texto'=>'será',
            'esCorrecta'=>false,
            'pregunta_id'=>'74'
        ]);
        Respuesta::create([
            'texto'=>'voy',
            'esCorrecta'=>true,
            'pregunta_id'=>'74'
        ]);
        Respuesta::create([
            'texto'=>'fue',
            'esCorrecta'=>false,
            'pregunta_id'=>'74'
        ]);
        Respuesta::create([
            'texto'=>'vio',
            'esCorrecta'=>false,
            'pregunta_id'=>'74'
        ]);
        Respuesta::create([
            'texto'=>'era',
            'esCorrecta'=>false,
            'pregunta_id'=>'74'
        ]);

        Pregunta::create([
            'texto' => 'En uno de los incisos todos los verbos están en participio.',
            'area_id' => '1'
        ]);
        Respuesta::create([
            'texto'=>'Corriendo, alcanzado, bebido',
            'esCorrecta'=>false,
            'pregunta_id'=>'75'
        ]);
        Respuesta::create([
            'texto'=>'Caminar, correr, dormir',
            'esCorrecta'=>false,
            'pregunta_id'=>'75'
        ]);
        Respuesta::create([
            'texto'=>'Cantado, durmiendo, sufrir',
            'esCorrecta'=>false,
            'pregunta_id'=>'75'
        ]);
        Respuesta::create([
            'texto'=>'Dormido, comprado, terminado',
            'esCorrecta'=>true,
            'pregunta_id'=>'75'
        ]);
        Respuesta::create([
            'texto'=>'Viajando, tejiendo, hirviendo',
            'esCorrecta'=>false,
            'pregunta_id'=>'75'
        ]);

        Pregunta::create([
            'texto' => 'Los verbos no flexivos, es decir, los no conjugados son:',
            'area_id' => '1'
        ]);
        Respuesta::create([
            'texto'=>'indicativo, subjuntivo, imperativo',
            'esCorrecta'=>false,
            'pregunta_id'=>'76'
        ]);
        Respuesta::create([
            'texto'=>'imperativo, participio, condicional',
            'esCorrecta'=>false,
            'pregunta_id'=>'76'
        ]);
        Respuesta::create([
            'texto'=>'regulares, irregulares.',
            'esCorrecta'=>false,
            'pregunta_id'=>'76'
        ]);
        Respuesta::create([
            'texto'=>'copulativos, infinitivos, gerundio',
            'esCorrecta'=>false,
            'pregunta_id'=>'76'
        ]);
        Respuesta::create([
            'texto'=>'infinitivo, gerundio, participio.',
            'esCorrecta'=>true,
            'pregunta_id'=>'76'
        ]);

        Pregunta::create([
            'texto' => 'Diga cuántos verbos hay en esta frase célebre de Rocío Guerra: “Quédate sin pensarlo con esa persona que se muere si no te tiene, que con aquella persona que presume porque sabe que te tiene.”',
            'area_id' => '1'
        ]);
        Respuesta::create([
            'texto'=>'tres',
            'esCorrecta'=>false,
            'pregunta_id'=>'77'
        ]);
        Respuesta::create([
            'texto'=>'cuatro',
            'esCorrecta'=>false,
            'pregunta_id'=>'77'
        ]);
        Respuesta::create([
            'texto'=>'cinco',
            'esCorrecta'=>false,
            'pregunta_id'=>'77'
        ]);
        Respuesta::create([
            'texto'=>'seis',
            'esCorrecta'=>false,
            'pregunta_id'=>'77'
        ]);
        Respuesta::create([
            'texto'=>'siete',
            'esCorrecta'=>true,
            'pregunta_id'=>'77'
        ]);

        Pregunta::create([
            'texto' => 'Desde el punto de vista sintáctico, el adverbio es una palabra, que en la oración:',
            'area_id' => '1'
        ]);
        Respuesta::create([
            'texto'=>'Modifica el sentido de la preposición',
            'esCorrecta'=>false,
            'pregunta_id'=>'78'
        ]);
        Respuesta::create([
            'texto'=>'Complementa al pronombre',
            'esCorrecta'=>false,
            'pregunta_id'=>'78'
        ]);
        Respuesta::create([
            'texto'=>'Sustituye al nombre o sustantivo.',
            'esCorrecta'=>false,
            'pregunta_id'=>'78'
        ]);
        Respuesta::create([
            'texto'=>'Funciona como complemento circunstancial.',
            'esCorrecta'=>true,
            'pregunta_id'=>'78'
        ]);
        Respuesta::create([
            'texto'=>'Determina al nombre o sustantivo.',
            'esCorrecta'=>false,
            'pregunta_id'=>'78'
        ]);

        Pregunta::create([
            'texto' => 'Diga cuántos adverbios hay en la siguiente oración. “Él nunca llegó muy temprano a clases.”',
            'area_id' => '1'
        ]);
        Respuesta::create([
            'texto'=>'tres',
            'esCorrecta'=>true,
            'pregunta_id'=>'79'
        ]);
        Respuesta::create([
            'texto'=>'dos',
            'esCorrecta'=>false,
            'pregunta_id'=>'79'
        ]);
        Respuesta::create([
            'texto'=>'uno',
            'esCorrecta'=>false,
            'pregunta_id'=>'79'
        ]);
        Respuesta::create([
            'texto'=>'cuatro',
            'esCorrecta'=>false,
            'pregunta_id'=>'79'
        ]);
        Respuesta::create([
            'texto'=>'uno',
            'esCorrecta'=>false,
            'pregunta_id'=>'79'
        ]);

        Pregunta::create([
            'texto' => 'Diga, en cuál de los incisos hay una pareja de adverbios de modo.',
            'area_id' => '1'
        ]);
        Respuesta::create([
            'texto'=>'bien - así.',
            'esCorrecta'=>true,
            'pregunta_id'=>'80'
        ]);
        Respuesta::create([
            'texto'=>'así - ahora.',
            'esCorrecta'=>false,
            'pregunta_id'=>'80'
        ]);
        Respuesta::create([
            'texto'=>'quizás - debajo.',
            'esCorrecta'=>false,
            'pregunta_id'=>'80'
        ]);
        Respuesta::create([
            'texto'=>'algo - bien.',
            'esCorrecta'=>false,
            'pregunta_id'=>'80'
        ]);
        Respuesta::create([
            'texto'=>'también - sí.',
            'esCorrecta'=>false,
            'pregunta_id'=>'80'
        ]);

        Pregunta::create([
            'texto' => 'Unas de estas oraciones contienen un adverbio de duda',
            'area_id' => '1'
        ]);
        Respuesta::create([
            'texto'=>'No tenía dinero para pagarte.',
            'esCorrecta'=>false,
            'pregunta_id'=>'81'
        ]);
        Respuesta::create([
            'texto'=>'Siempre te amaré',
            'esCorrecta'=>false,
            'pregunta_id'=>'81'
        ]);
        Respuesta::create([
            'texto'=>'Nunca se ocultará el sol',
            'esCorrecta'=>false,
            'pregunta_id'=>'81'
        ]);
        Respuesta::create([
            'texto'=>'Quizás viajemos juntos',
            'esCorrecta'=>true,
            'pregunta_id'=>'81'
        ]);
        Respuesta::create([
            'texto'=>'Después de conocerte, nada me falta',
            'esCorrecta'=>false,
            'pregunta_id'=>'81'
        ]);

        Pregunta::create([
            'texto' => 'Diga cuántos adverbios hay en esta frase célebre de Abraham Lincoln: “La más estricta justicia no creo que sea siempre la mejor política.”',
            'area_id' => '1'
        ]);
        Respuesta::create([
            'texto'=>'uno',
            'esCorrecta'=>false,
            'pregunta_id'=>'82'
        ]);
        Respuesta::create([
            'texto'=>'dos',
            'esCorrecta'=>false,
            'pregunta_id'=>'82'
        ]);
        Respuesta::create([
            'texto'=>'tres',
            'esCorrecta'=>true,
            'pregunta_id'=>'82'
        ]);
        Respuesta::create([
            'texto'=>'cuatro',
            'esCorrecta'=>false,
            'pregunta_id'=>'82'
        ]);
        Respuesta::create([
            'texto'=>'cinco',
            'esCorrecta'=>false,
            'pregunta_id'=>'82'
        ]);

        Pregunta::create([
            'texto' => 'Diga cuántos adverbios hay en la oración: “Ayer vi a María husmeando sospechosamente por el camino cerca de la biblioteca.”',
            'area_id' => '1'
        ]);
        Respuesta::create([
            'texto'=>'uno',
            'esCorrecta'=>false,
            'pregunta_id'=>'83'
        ]);
        Respuesta::create([
            'texto'=>'dos',
            'esCorrecta'=>false,
            'pregunta_id'=>'83'
        ]);
        Respuesta::create([
            'texto'=>'tres',
            'esCorrecta'=>true,
            'pregunta_id'=>'83'
        ]);
        Respuesta::create([
            'texto'=>'cuatro',
            'esCorrecta'=>false,
            'pregunta_id'=>'83'
        ]);
        Respuesta::create([
            'texto'=>'cinco',
            'esCorrecta'=>false,
            'pregunta_id'=>'83'
        ]);

        Pregunta::create([
            'texto' => 'Una de las siguientes oraciones contiene un adverbio de afirmación',
            'area_id' => '1'
        ]);
        Respuesta::create([
            'texto'=>'Escucha atentamente lo que te voy a decir',
            'esCorrecta'=>false,
            'pregunta_id'=>'84'
        ]);
        Respuesta::create([
            'texto'=>'Ven aquí inmediatamente.',
            'esCorrecta'=>false,
            'pregunta_id'=>'84'
        ]);
        Respuesta::create([
            'texto'=>'Todos dicen que esa señora está medio loca pero solo es excéntrica',
            'esCorrecta'=>false,
            'pregunta_id'=>'84'
        ]);
        Respuesta::create([
            'texto'=>'Ya la había visto anteriormente',
            'esCorrecta'=>false,
            'pregunta_id'=>'84'
        ]);
        Respuesta::create([
            'texto'=>'Ella también vino con nosotros',
            'esCorrecta'=>true,
            'pregunta_id'=>'84'
        ]);

        Pregunta::create([
            'texto' => 'Diga cuál es el adverbio, en esta frase célebre de Mahatma Gandhi: “El nacimiento y la muerte no son dos estados distintos, sino dos aspectos del mismo estado.”',
            'area_id' => '1'
        ]);
        Respuesta::create([
            'texto'=>'nacimiento',
            'esCorrecta'=>false,
            'pregunta_id'=>'85'
        ]);
        Respuesta::create([
            'texto'=>'no',
            'esCorrecta'=>true,
            'pregunta_id'=>'85'
        ]);
        Respuesta::create([
            'texto'=>'estados',
            'esCorrecta'=>false,
            'pregunta_id'=>'85'
        ]);
        Respuesta::create([
            'texto'=>'distintos',
            'esCorrecta'=>false,
            'pregunta_id'=>'85'
        ]);
        Respuesta::create([
            'texto'=>'sino',
            'esCorrecta'=>false,
            'pregunta_id'=>'85'
        ]);

        Pregunta::create([
            'texto' => 'Diga cuántas preposiciones hay en esta frase célebre de John Steinbeck: “De todos los animales de la creación el hombre es el único que bebe sin tener sed, come sin tener hambre y habla sin tener nada que decir.” ',
            'area_id' => '1'
        ]);
        Respuesta::create([
            'texto'=>'dos',
            'esCorrecta'=>false,
            'pregunta_id'=>'86'
        ]);
        Respuesta::create([
            'texto'=>'tres',
            'esCorrecta'=>false,
            'pregunta_id'=>'86'
        ]);
        Respuesta::create([
            'texto'=>'cuatro',
            'esCorrecta'=>false,
            'pregunta_id'=>'86'
        ]);
        Respuesta::create([
            'texto'=>'cinco',
            'esCorrecta'=>true,
            'pregunta_id'=>'86'
        ]);
        Respuesta::create([
            'texto'=>'seis',
            'esCorrecta'=>false,
            'pregunta_id'=>'86'
        ]);

        Pregunta::create([
            'texto' => 'Diga en cuál de los incisos hay una preposición.',
            'area_id' => '1'
        ]);
        Respuesta::create([
            'texto'=>'hacía',
            'esCorrecta'=>false,
            'pregunta_id'=>'87'
        ]);
        Respuesta::create([
            'texto'=>'hacia',
            'esCorrecta'=>true,
            'pregunta_id'=>'87'
        ]);
        Respuesta::create([
            'texto'=>'par',
            'esCorrecta'=>false,
            'pregunta_id'=>'87'
        ]);
        Respuesta::create([
            'texto'=>'antes',
            'esCorrecta'=>false,
            'pregunta_id'=>'87'
        ]);
        Respuesta::create([
            'texto'=>'hoy',
            'esCorrecta'=>false,
            'pregunta_id'=>'87'
        ]);

        Pregunta::create([
            'texto' => 'Hay una oración que no contiene preposición',
            'area_id' => '1'
        ]);
        Respuesta::create([
            'texto'=>'Lo conozco desde que éramos pequeños',
            'esCorrecta'=>false,
            'pregunta_id'=>'88'
        ]);
        Respuesta::create([
            'texto'=>'He pasado por tu casa muchas veces',
            'esCorrecta'=>false,
            'pregunta_id'=>'88'
        ]);
        Respuesta::create([
            'texto'=>'La piscina de mi casa estaba sin agua',
            'esCorrecta'=>false,
            'pregunta_id'=>'88'
        ]);
        Respuesta::create([
            'texto'=>'Irás contra tus principios',
            'esCorrecta'=>false,
            'pregunta_id'=>'88'
        ]);
        Respuesta::create([
            'texto'=>'Es probable que llegue temprano',
            'esCorrecta'=>true,
            'pregunta_id'=>'88'
        ]);

        Pregunta::create([
            'texto' => 'Diga cuántas preposiciones hay en esta frase célebre de Malcolm X: “La Educación es el pasaporte hacia el futuro, el mañana pertenece a aquellos que se preparan para él en el día de hoy.”',
            'area_id' => '1'
        ]);
        Respuesta::create([
            'texto'=>'dos',
            'esCorrecta'=>false,
            'pregunta_id'=>'89'
        ]);
        Respuesta::create([
            'texto'=>'tres',
            'esCorrecta'=>false,
            'pregunta_id'=>'89'
        ]);
        Respuesta::create([
            'texto'=>'cuatro',
            'esCorrecta'=>false,
            'pregunta_id'=>'89'
        ]);
        Respuesta::create([
            'texto'=>'cinco',
            'esCorrecta'=>true,
            'pregunta_id'=>'89'
        ]);
        Respuesta::create([
            'texto'=>'seis',
            'esCorrecta'=>false,
            'pregunta_id'=>'89'
        ]);

        Pregunta::create([
            'texto' => 'Diga cuántas preposiciones contiene la oración: “Para el cumpleaños de la hija de mi amigo en noviembre compraremos una torta con diseño de unicornio.”',
            'area_id' => '1'
        ]);
        Respuesta::create([
            'texto'=>'dos',
            'esCorrecta'=>false,
            'pregunta_id'=>'90'
        ]);
        Respuesta::create([
            'texto'=>'tres',
            'esCorrecta'=>false,
            'pregunta_id'=>'90'
        ]);
        Respuesta::create([
            'texto'=>'cuatro',
            'esCorrecta'=>false,
            'pregunta_id'=>'90'
        ]);
        Respuesta::create([
            'texto'=>'cinco',
            'esCorrecta'=>false,
            'pregunta_id'=>'90'
        ]);
        Respuesta::create([
            'texto'=>'seis',
            'esCorrecta'=>true,
            'pregunta_id'=>'90'
        ]);

        Pregunta::create([
            'texto' => 'En uno de los incisos hay una pareja de preposiciones.',
            'area_id' => '1'
        ]);
        Respuesta::create([
            'texto'=>'sin - con',
            'esCorrecta'=>true,
            'pregunta_id'=>'91'
        ]);
        Respuesta::create([
            'texto'=>'de - antes',
            'esCorrecta'=>false,
            'pregunta_id'=>'91'
        ]);
        Respuesta::create([
            'texto'=>'hacía - hasta',
            'esCorrecta'=>false,
            'pregunta_id'=>'91'
        ]);
        Respuesta::create([
            'texto'=>'que -hacia',
            'esCorrecta'=>false,
            'pregunta_id'=>'91'
        ]);
        Respuesta::create([
            'texto'=>'si - así',
            'esCorrecta'=>false,
            'pregunta_id'=>'91'
        ]);

        Pregunta::create([
            'texto' => 'Desde el punto de visto morfológico, las preposiciones son palabras:',
            'area_id' => '1'
        ]);
        Respuesta::create([
            'texto'=>'Que enlazan oraciones',
            'esCorrecta'=>false,
            'pregunta_id'=>'92'
        ]);
        Respuesta::create([
            'texto'=>'Acompañan al verbo.',
            'esCorrecta'=>false,
            'pregunta_id'=>'92'
        ]);
        Respuesta::create([
            'texto'=>'Invariables',
            'esCorrecta'=>true,
            'pregunta_id'=>'92'
        ]);
        Respuesta::create([
            'texto'=>'Varían en su estructura y función',
            'esCorrecta'=>false,
            'pregunta_id'=>'92'
        ]);
        Respuesta::create([
            'texto'=>'Determinan a los verbos',
            'esCorrecta'=>false,
            'pregunta_id'=>'92'
        ]);

        Pregunta::create([
            'texto' => 'Las locuciones conjuntivas van generalmente acompañadas de la palabra:',
            'area_id' => '1'
        ]);
        Respuesta::create([
            'texto'=>'por',
            'esCorrecta'=>false,
            'pregunta_id'=>'93'
        ]);
        Respuesta::create([
            'texto'=>'siempre',
            'esCorrecta'=>false,
            'pregunta_id'=>'93'
        ]);
        Respuesta::create([
            'texto'=>'como',
            'esCorrecta'=>false,
            'pregunta_id'=>'93'
        ]);
        Respuesta::create([
            'texto'=>'que',
            'esCorrecta'=>true,
            'pregunta_id'=>'93'
        ]);
        Respuesta::create([
            'texto'=>'donde',
            'esCorrecta'=>false,
            'pregunta_id'=>'93'
        ]);

        Pregunta::create([
            'texto' => 'Una de las siguientes oraciones no tiene ninguna conjunción',
            'area_id' => '1'
        ]);
        Respuesta::create([
            'texto'=>'Estuve en tu casa, pero tú no estabas',
            'esCorrecta'=>false,
            'pregunta_id'=>'94'
        ]);
        Respuesta::create([
            'texto'=>'Salió a tiempo, así que llegó temprano',
            'esCorrecta'=>false,
            'pregunta_id'=>'94'
        ]);
        Respuesta::create([
            'texto'=>'No vendrá hoy, sino mañana',
            'esCorrecta'=>false,
            'pregunta_id'=>'94'
        ]);
        Respuesta::create([
            'texto'=>'Aunque soy mayor, tengo miedo.',
            'esCorrecta'=>false,
            'pregunta_id'=>'94'
        ]);
        Respuesta::create([
            'texto'=>'Camina hasta llegar a tu meta.',
            'esCorrecta'=>true,
            'pregunta_id'=>'94'
        ]);

        Pregunta::create([
            'texto' => 'Una de las siguientes oraciones está formada por una conjunción subordinante concesiva',
            'area_id' => '1'
        ]);
        Respuesta::create([
            'texto'=>'Llegas tarde porque eres irresponsable',
            'esCorrecta'=>false,
            'pregunta_id'=>'95'
        ]);
        Respuesta::create([
            'texto'=>'Se escondió, pero lo vimos',
            'esCorrecta'=>false,
            'pregunta_id'=>'95'
        ]);
        Respuesta::create([
            'texto'=>'Tenemos que salir, aunque esté lloviendo',
            'esCorrecta'=>true,
            'pregunta_id'=>'95'
        ]);
        Respuesta::create([
            'texto'=>'Estaba enfermo, sin embargo, nada lo detuvo',
            'esCorrecta'=>false,
            'pregunta_id'=>'95'
        ]);
        Respuesta::create([
            'texto'=>'No come carne, ni pescado',
            'esCorrecta'=>false,
            'pregunta_id'=>'95'
        ]);

        Pregunta::create([
            'texto' => 'En uno de los incisos hay una pareja de conjunciones',
            'area_id' => '1'
        ]);
        Respuesta::create([
            'texto'=>'que - y',
            'esCorrecta'=>true,
            'pregunta_id'=>'96'
        ]);
        Respuesta::create([
            'texto'=>'porque - ahí',
            'esCorrecta'=>false,
            'pregunta_id'=>'96'
        ]);
        Respuesta::create([
            'texto'=>'aunque - desde',
            'esCorrecta'=>false,
            'pregunta_id'=>'96'
        ]);
        Respuesta::create([
            'texto'=>'donde - hasta',
            'esCorrecta'=>false,
            'pregunta_id'=>'96'
        ]);
        Respuesta::create([
            'texto'=>'hacía – para',
            'esCorrecta'=>false,
            'pregunta_id'=>'96'
        ]);

        Pregunta::create([
            'texto' => 'Diga cuántas conjunciones hay en esta frase célebre de William George Ward: “El pesimista se queja del viento; el optimista espera que cambie; el realista ajusta las velas.”',
            'area_id' => '1'
        ]);
        Respuesta::create([
            'texto'=>'una',
            'esCorrecta'=>true,
            'pregunta_id'=>'97'
        ]);
        Respuesta::create([
            'texto'=>'dos',
            'esCorrecta'=>false,
            'pregunta_id'=>'97'
        ]);
        Respuesta::create([
            'texto'=>'tres',
            'esCorrecta'=>false,
            'pregunta_id'=>'97'
        ]);
        Respuesta::create([
            'texto'=>'cuatro',
            'esCorrecta'=>false,
            'pregunta_id'=>'97'
        ]);
        Respuesta::create([
            'texto'=>'cinco',
            'esCorrecta'=>false,
            'pregunta_id'=>'97'
        ]);

        Pregunta::create([
            'texto' => 'Los artículos neutros acompañan:',
            'area_id' => '1'
        ]);
        Respuesta::create([
            'texto'=>'al sustantivo',
            'esCorrecta'=>false,
            'pregunta_id'=>'98'
        ]);
        Respuesta::create([
            'texto'=>'a la conjunción',
            'esCorrecta'=>false,
            'pregunta_id'=>'98'
        ]);
        Respuesta::create([
            'texto'=>'al verbo',
            'esCorrecta'=>false,
            'pregunta_id'=>'98'
        ]);
        Respuesta::create([
            'texto'=>'al adjetivo',
            'esCorrecta'=>true,
            'pregunta_id'=>'98'
        ]);
        Respuesta::create([
            'texto'=>'a la preposición',
            'esCorrecta'=>false,
            'pregunta_id'=>'98'
        ]);

        Pregunta::create([
            'texto' => 'Diga cuantos artículos hay en esta frase célebre de Ralph Waldo Emerson: “Aunque viajemos por todo el mundo para encontrar la belleza, debemos llevarla con nosotros para poder encontrarla.”',
            'area_id' => '1'
        ]);
        Respuesta::create([
            'texto'=>'uno',
            'esCorrecta'=>false,
            'pregunta_id'=>'99'
        ]);
        Respuesta::create([
            'texto'=>'dos',
            'esCorrecta'=>true,
            'pregunta_id'=>'99'
        ]);
        Respuesta::create([
            'texto'=>'tres',
            'esCorrecta'=>false,
            'pregunta_id'=>'99'
        ]);
        Respuesta::create([
            'texto'=>'cuatro',
            'esCorrecta'=>false,
            'pregunta_id'=>'99'
        ]);
        Respuesta::create([
            'texto'=>'cinco',
            'esCorrecta'=>false,
            'pregunta_id'=>'99'
        ]);

        Pregunta::create([
            'texto' => 'Una de las siguientes oraciones contiene un artículo contracto',
            'area_id' => '1'
        ]);
        Respuesta::create([
            'texto'=>'Nos movemos al compás de la música',
            'esCorrecta'=>true,
            'pregunta_id'=>'100'
        ]);
        Respuesta::create([
            'texto'=>'Lo importante aquí es destacar el valor de los voluntarios',
            'esCorrecta'=>false,
            'pregunta_id'=>'100'
        ]);
        Respuesta::create([
            'texto'=>'A la señorita se le lleva el desayuno a la cama a las seis en punto',
            'esCorrecta'=>false,
            'pregunta_id'=>'100'
        ]);
        Respuesta::create([
            'texto'=>'No he visto aún el auto nuevo de la vecina',
            'esCorrecta'=>false,
            'pregunta_id'=>'100'
        ]);
        Respuesta::create([
            'texto'=>'Las tres andan como distraídas últimamente',
            'esCorrecta'=>false,
            'pregunta_id'=>'100'
        ]);
    }
}