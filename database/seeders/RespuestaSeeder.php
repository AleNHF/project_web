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


        //end lenguaje



        //begin historia

        Respuesta::create([
            'texto'=>'Guerra del chaco',
            'esCorrecta'=>true,
            'pregunta_id'=>'11'
        ]);
        Respuesta::create([
            'texto'=>'Guerra del pacifico',
            'esCorrecta'=>false,
            'pregunta_id'=>'11'
        ]);
        Respuesta::create([
            'texto'=>'Guerra del acre',
            'esCorrecta'=>false,
            'pregunta_id'=>'11'
        ]);
        Respuesta::create([
            'texto'=>'Ninguna de las anteriores',
            'esCorrecta'=>false,
            'pregunta_id'=>'11'
        ]);


        Respuesta::create([
            'texto'=>'1904',
            'esCorrecta'=>true,
            'pregunta_id'=>'12'
        ]);
        Respuesta::create([
            'texto'=>'1842',
            'esCorrecta'=>false,
            'pregunta_id'=>'12'
        ]);
        Respuesta::create([
            'texto'=>'1879',
            'esCorrecta'=>false,
            'pregunta_id'=>'12'
        ]);
        Respuesta::create([
            'texto'=>'1902',
            'esCorrecta'=>false,
            'pregunta_id'=>'12'
        ]);
        Respuesta::create([
            'texto'=>'1825',
            'esCorrecta'=>false,
            'pregunta_id'=>'12'
        ]);

        Respuesta::create([
            'texto'=>'El gregoriano',
            'esCorrecta'=>true,
            'pregunta_id'=>'13'
        ]);
        Respuesta::create([
            'texto'=>'El chino',
            'esCorrecta'=>false,
            'pregunta_id'=>'13'
        ]);
        Respuesta::create([
            'texto'=>'El musulmán',
            'esCorrecta'=>false,
            'pregunta_id'=>'13'
        ]);
        Respuesta::create([
            'texto'=>'El hebreo',
            'esCorrecta'=>false,
            'pregunta_id'=>'13'
        ]);
        Respuesta::create([
            'texto'=>'El Cristiano',
            'esCorrecta'=>false,
            'pregunta_id'=>'13'
        ]);

        Respuesta::create([
            'texto'=>'Geografía política, Geográfica económica, Geografía cultural',
            'esCorrecta'=>true,
            'pregunta_id'=>'14'
        ]);
        Respuesta::create([
            'texto'=>'Geografía social, Geográfica económica, Geografía social',
            'esCorrecta'=>false,
            'pregunta_id'=>'14'
        ]);
        Respuesta::create([
            'texto'=>'Geografía política, Geográfica económica, Geografía histórica',
            'esCorrecta'=>false,
            'pregunta_id'=>'14'
        ]);
        Respuesta::create([
            'texto'=>'Geografía política, Geográfica económica, Geografía',
            'esCorrecta'=>false,
            'pregunta_id'=>'14'
        ]);
        Respuesta::create([
            'texto'=>'Geografía física, Geográfica económica, Geografía social',
            'esCorrecta'=>false,
            'pregunta_id'=>'14'
        ]);

        Respuesta::create([
            'texto'=>'Francia, Inglaterra y España',
            'esCorrecta'=>true,
            'pregunta_id'=>'15'
        ]);
        Respuesta::create([
            'texto'=>'Francia, Inglaterra y Portugal',
            'esCorrecta'=>false,
            'pregunta_id'=>'15'
        ]);
        Respuesta::create([
            'texto'=>'Francia, Inglaterra y Alemania',
            'esCorrecta'=>false,
            'pregunta_id'=>'15'
        ]);

        Respuesta::create([
            'texto'=>'Francia, Alemania y Portugal',
            'esCorrecta'=>false,
            'pregunta_id'=>'15'
        ]);

        Respuesta::create([
            'texto'=>'España, Inglaterra y Portugal',
            'esCorrecta'=>false,
            'pregunta_id'=>'15'
        ]);


        Respuesta::create([
            'texto'=>'Víctor Paz Estensoro',
            'esCorrecta'=>true,
            'pregunta_id'=>'16'
        ]);
        Respuesta::create([
            'texto'=>'Jaime Paz Zamora.',
            'esCorrecta'=>false,
            'pregunta_id'=>'16'
        ]);
        Respuesta::create([
            'texto'=>'Rene Barrientos',
            'esCorrecta'=>false,
            'pregunta_id'=>'16'
        ]);
        Respuesta::create([
            'texto'=>'Lidia Gueiler',
            'esCorrecta'=>false,
            'pregunta_id'=>'16'
        ]);
        Respuesta::create([
            'texto'=>'Evo Morales Ayma',
            'esCorrecta'=>false,
            'pregunta_id'=>'16'
        ]);

        Respuesta::create([
            'texto'=>'Triple alianza',
            'esCorrecta'=>true,
            'pregunta_id'=>'17'
        ]);
        Respuesta::create([
            'texto'=>'Potencias aliadas',
            'esCorrecta'=>false,
            'pregunta_id'=>'17'
        ]);
        Respuesta::create([
            'texto'=>'El eje',
            'esCorrecta'=>false,
            'pregunta_id'=>'17'
        ]);
        Respuesta::create([
            'texto'=>'todas',
            'esCorrecta'=>false,
            'pregunta_id'=>'17'
        ]);
        Respuesta::create([
            'texto'=>'Ninguna de las anteriores',
            'esCorrecta'=>false,
            'pregunta_id'=>'17'
        ]);

        Respuesta::create([
            'texto'=>'Ninguna de las anteriores',
            'esCorrecta'=>true,
            'pregunta_id'=>'18'
        ]);
        Respuesta::create([
            'texto'=>'Guatemala',
            'esCorrecta'=>false,
            'pregunta_id'=>'18'
        ]);
        Respuesta::create([
            'texto'=>'Honduras',
            'esCorrecta'=>false,
            'pregunta_id'=>'18'
        ]);
        Respuesta::create([
            'texto'=>'México',
            'esCorrecta'=>false,
            'pregunta_id'=>'18'
        ]);
        Respuesta::create([
            'texto'=>'Todas las anteriores',
            'esCorrecta'=>false,
            'pregunta_id'=>'18'
        ]);

        Respuesta::create([
            'texto'=>'Todas las anteriores',
            'esCorrecta'=>true,
            'pregunta_id'=>'19'
        ]);
        Respuesta::create([
            'texto'=>'Nueva España',
            'esCorrecta'=>false,
            'pregunta_id'=>'19'
        ]);
        Respuesta::create([
            'texto'=>'Virreinato del Perú',
            'esCorrecta'=>false,
            'pregunta_id'=>'19'
        ]);
        Respuesta::create([
            'texto'=>'Virreinato del Río de la Plata',
            'esCorrecta'=>false,
            'pregunta_id'=>'19'
        ]);
        Respuesta::create([
            'texto'=>'Virreinato de Nueva Granada',
            'esCorrecta'=>false,
            'pregunta_id'=>'19'
        ]);

        Respuesta::create([
            'texto'=>'Collasuyo',
            'esCorrecta'=>true,
            'pregunta_id'=>'20'
        ]);
        Respuesta::create([
            'texto'=>'Chinchaysuyo',
            'esCorrecta'=>false,
            'pregunta_id'=>'20'
        ]);
        Respuesta::create([
            'texto'=>'Antisuyo',
            'esCorrecta'=>false,
            'pregunta_id'=>'20'
        ]);
        Respuesta::create([
            'texto'=>'Contisuyo',
            'esCorrecta'=>false,
            'pregunta_id'=>'20'
        ]);
        Respuesta::create([
            'texto'=>'Todas las anteriores',
            'esCorrecta'=>false,
            'pregunta_id'=>'20'
        ]);

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
