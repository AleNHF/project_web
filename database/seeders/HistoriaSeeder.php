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
        Respuesta::create([
            'texto'=>'Guerra del pacifico',
            'esCorrecta'=>false,
            'pregunta_id'=>'151'
        ]);
        Respuesta::create([
            'texto'=>'Guerra del acre',
            'esCorrecta'=>false,
            'pregunta_id'=>'151'
        ]);
        Respuesta::create([
            'texto'=>'Guerra del chaco',
            'esCorrecta'=>true,
            'pregunta_id'=>'151'
        ]);
        Respuesta::create([
            'texto'=>'Ninguna de las anteriores',
            'esCorrecta'=>false,
            'pregunta_id'=>'151'
        ]);

        Pregunta::create([
            'texto' => 'Bolivia cedió a perpetuidad el Litoral a Chile, al firmar el Tratado de Paz de:',
            'area_id' => '2'
        ]);
        Respuesta::create([
            'texto'=>'1842',
            'esCorrecta'=>false,
            'pregunta_id'=>'152'
        ]);
        Respuesta::create([
            'texto'=>'1879',
            'esCorrecta'=>false,
            'pregunta_id'=>'152'
        ]);
        Respuesta::create([
            'texto'=>'1902',
            'esCorrecta'=>false,
            'pregunta_id'=>'152'
        ]);
        Respuesta::create([
            'texto'=>'1904',
            'esCorrecta'=>true,
            'pregunta_id'=>'152'
        ]);
        Respuesta::create([
            'texto'=>'1825',
            'esCorrecta'=>false,
            'pregunta_id'=>'152'
        ]);

        Pregunta::create([
            'texto' => 'Cuál es el calendario que establece el año de nacimiento de Cristo',
            'area_id' => '2'
        ]);
        Respuesta::create([
            'texto'=>'El chino',
            'esCorrecta'=>false,
            'pregunta_id'=>'153'
        ]);
        Respuesta::create([
            'texto'=>'El musulmán',
            'esCorrecta'=>false,
            'pregunta_id'=>'153'
        ]);
        Respuesta::create([
            'texto'=>'El hebreo',
            'esCorrecta'=>false,
            'pregunta_id'=>'153'
        ]);
        Respuesta::create([
            'texto'=>'El Cristiano',
            'esCorrecta'=>false,
            'pregunta_id'=>'153'
        ]);
        Respuesta::create([
            'texto'=>'El gregoriano',
            'esCorrecta'=>true,
            'pregunta_id'=>'153'
        ]);

        Pregunta::create([
            'texto' => 'Cuales son las subdivisiones mas conocidas de la geografía humana.',
            'area_id' => '2'
        ]);
        Respuesta::create([
            'texto'=>'Geografía política, Geográfica económica, Geografía cultural',
            'esCorrecta'=>true,
            'pregunta_id'=>'14'
        ]);
        Respuesta::create([
            'texto'=>'Geografía social, Geográfica económica, Geografía social',
            'esCorrecta'=>false,
            'pregunta_id'=>'154'
        ]);
        Respuesta::create([
            'texto'=>'Geografía política, Geográfica económica, Geografía histórica',
            'esCorrecta'=>false,
            'pregunta_id'=>'154'
        ]);
        Respuesta::create([
            'texto'=>'Geografía política, Geográfica económica, Geografía cultural',
            'esCorrecta'=>true,
            'pregunta_id'=>'154'
        ]);
        Respuesta::create([
            'texto'=>'Geografía política, Geográfica económica, Geografía',
            'esCorrecta'=>false,
            'pregunta_id'=>'154'
        ]);
        Respuesta::create([
            'texto'=>'Geografía física, Geográfica económica, Geografía social',
            'esCorrecta'=>false,
            'pregunta_id'=>'154'
        ]);

        Pregunta::create([
            'texto' => 'Durante la edad media, ¿qué países se unificaron?',
            'area_id' => 2
        ]);
        Respuesta::create([
            'texto'=>'Francia, Inglaterra y Portugal',
            'esCorrecta'=>false,
            'pregunta_id'=>'155'
        ]);
        Respuesta::create([
            'texto'=>'Francia, Inglaterra y Alemania',
            'esCorrecta'=>false,
            'pregunta_id'=>'155'
        ]);
        Respuesta::create([
            'texto'=>'Francia, Inglaterra y España',
            'esCorrecta'=>true,
            'pregunta_id'=>'155'
        ]);
        Respuesta::create([
            'texto'=>'Francia, Alemania y Portugal',
            'esCorrecta'=>false,
            'pregunta_id'=>'155'
        ]);
        Respuesta::create([
            'texto'=>'España, Inglaterra y Portugal',
            'esCorrecta'=>false,
            'pregunta_id'=>'155'
        ]);

        Pregunta::create([
            'texto' => 'El Decreto Supremo 21060, que redujo el déficit fiscal, fue promulgado en el gobierno de:',
            'area_id' => 2
        ]);
        Respuesta::create([
            'texto'=>'Jaime Paz Zamora.',
            'esCorrecta'=>false,
            'pregunta_id'=>'156'
        ]);
        Respuesta::create([
            'texto'=>'Víctor Paz Estensoro',
            'esCorrecta'=>true,
            'pregunta_id'=>'156'
        ]);
        Respuesta::create([
            'texto'=>'Rene Barrientos',
            'esCorrecta'=>false,
            'pregunta_id'=>'156'
        ]);
        Respuesta::create([
            'texto'=>'Lidia Gueiler',
            'esCorrecta'=>false,
            'pregunta_id'=>'156'
        ]);
        Respuesta::create([
            'texto'=>'Evo Morales Ayma',
            'esCorrecta'=>false,
            'pregunta_id'=>'156'
        ]);

        Pregunta::create([
            'texto' => 'El Imperio Austrohúngaro estaba dentro del bando de:',
            'area_id' => 2
        ]);
        Respuesta::create([
            'texto'=>'Potencias aliadas',
            'esCorrecta'=>false,
            'pregunta_id'=>'157'
        ]);
        Respuesta::create([
            'texto'=>'Triple alianza',
            'esCorrecta'=>true,
            'pregunta_id'=>'157'
        ]);
        Respuesta::create([
            'texto'=>'El eje',
            'esCorrecta'=>false,
            'pregunta_id'=>'157'
        ]);
        Respuesta::create([
            'texto'=>'Todas',
            'esCorrecta'=>false,
            'pregunta_id'=>'157'
        ]);
        Respuesta::create([
            'texto'=>'Ninguna de las anteriores',
            'esCorrecta'=>false,
            'pregunta_id'=>'157'
        ]);

        Pregunta::create([
            'texto' => 'El imperio inca se desarrolló en lo que ahora es:',
            'area_id' => 2
        ]);
        Respuesta::create([
            'texto'=>'Guatemala',
            'esCorrecta'=>false,
            'pregunta_id'=>'158'
        ]);
        Respuesta::create([
            'texto'=>'Honduras',
            'esCorrecta'=>false,
            'pregunta_id'=>'158'
        ]);
        Respuesta::create([
            'texto'=>'México',
            'esCorrecta'=>false,
            'pregunta_id'=>'158'
        ]);
        Respuesta::create([
            'texto'=>'Todas las anteriores',
            'esCorrecta'=>false,
            'pregunta_id'=>'158'
        ]);
        Respuesta::create([
            'texto'=>'Ninguna de las anteriores',
            'esCorrecta'=>true,
            'pregunta_id'=>'158'
        ]);

        Pregunta::create([
            'texto' => 'El nuevo mundo, América, fue dividida en Virreinatos:',
            'area_id' => 2
        ]);
        Respuesta::create([
            'texto'=>'Nueva España',
            'esCorrecta'=>false,
            'pregunta_id'=>'159'
        ]);
        Respuesta::create([
            'texto'=>'Virreinato del Perú',
            'esCorrecta'=>false,
            'pregunta_id'=>'159'
        ]);
        Respuesta::create([
            'texto'=>'Virreinato del Río de la Plata',
            'esCorrecta'=>false,
            'pregunta_id'=>'159'
        ]);
        Respuesta::create([
            'texto'=>'Virreinato de Nueva Granada',
            'esCorrecta'=>false,
            'pregunta_id'=>'159'
        ]);
        Respuesta::create([
            'texto'=>'Todas las anteriores',
            'esCorrecta'=>true,
            'pregunta_id'=>'159'
        ]);

        Pregunta::create([
            'texto' => 'El Tahuantinsuyo, estaba conformado por cuatro suyos y corresponde a la zona andina de la actual Bolivia el',
            'area_id' => 2
        ]);
        Respuesta::create([
            'texto'=>'Chinchaysuyo',
            'esCorrecta'=>false,
            'pregunta_id'=>'160'
        ]);
        Respuesta::create([
            'texto'=>'Antisuyo',
            'esCorrecta'=>false,
            'pregunta_id'=>'160'
        ]);
        Respuesta::create([
            'texto'=>'Contisuyo',
            'esCorrecta'=>false,
            'pregunta_id'=>'160'
        ]);
        Respuesta::create([
            'texto'=>'Collasuyo',
            'esCorrecta'=>true,
            'pregunta_id'=>'160'
        ]);
        Respuesta::create([
            'texto'=>'Todas las anteriores',
            'esCorrecta'=>false,
            'pregunta_id'=>'160'
        ]);

        Pregunta::create([
            'texto' => 'En América pre-hispánica se desarrollaron tres grandes Imperios:',
            'area_id' => 2
        ]);
        Respuesta::create([
            'texto'=>'Maya, Azteca e Inca',
            'esCorrecta'=>true,
            'pregunta_id'=>'161'
        ]);
        Respuesta::create([
            'texto'=>'Tiahuanacota, Inca y Pacajes',
            'esCorrecta'=>false,
            'pregunta_id'=>'161'
        ]);
        Respuesta::create([
            'texto'=>'Azteca, Mexicas y Olmecas',
            'esCorrecta'=>false,
            'pregunta_id'=>'161'
        ]);
        Respuesta::create([
            'texto'=>'Maya e Inca, Señorios Collas',
            'esCorrecta'=>false,
            'pregunta_id'=>'161'
        ]);
        Respuesta::create([
            'texto'=>'Ninguna de las anteriores',
            'esCorrecta'=>false,
            'pregunta_id'=>'161'
        ]);

        Pregunta::create([
            'texto' => 'En Atenas se desarrolló la filosofía destacándose:',
            'area_id' => 2
        ]);
        Respuesta::create([
            'texto'=>'Esquilo, Sofoles y Sócrates',
            'esCorrecta'=>false,
            'pregunta_id'=>'162'
        ]);
        Respuesta::create([
            'texto'=>'Heródoto de Cirene, Hipócrates y Platón',
            'esCorrecta'=>false,
            'pregunta_id'=>'162'
        ]);
        Respuesta::create([
            'texto'=>'Confucio, Platón y Aristóteles',
            'esCorrecta'=>false,
            'pregunta_id'=>'162'
        ]);
        Respuesta::create([
            'texto'=>'Platón, Aristóteles y Confucio',
            'esCorrecta'=>false,
            'pregunta_id'=>'162'
        ]);
        Respuesta::create([
            'texto'=>'Sócrates, Platón y Aristóteles',
            'esCorrecta'=>true,
            'pregunta_id'=>'162'
        ]);

        Pregunta::create([
            'texto' => 'En Bolivia surgieron los llamados Señoríos Collas, los cuales eran',
            'area_id' => 2
        ]);
        Respuesta::create([
            'texto'=>'Collas',
            'esCorrecta'=>false,
            'pregunta_id'=>'163'
        ]);
        Respuesta::create([
            'texto'=>'Lupazas, omasuyos',
            'esCorrecta'=>false,
            'pregunta_id'=>'163'
        ]);
        Respuesta::create([
            'texto'=>'Pacajes, carangas',
            'esCorrecta'=>false,
            'pregunta_id'=>'163'
        ]);
        Respuesta::create([
            'texto'=>'Charcas y chichas',
            'esCorrecta'=>false,
            'pregunta_id'=>'163'
        ]);
        Respuesta::create([
            'texto'=>'Todas las anteriores',
            'esCorrecta'=>true,
            'pregunta_id'=>'163'
        ]);

        Pregunta::create([
            'texto' => 'En la administración de las Indias, el que se encargaba del comercio era:',
            'area_id' => 2
        ]);
        Respuesta::create([
            'texto'=>'El consejo de indias',
            'esCorrecta'=>false,
            'pregunta_id'=>'164'
        ]);
        Respuesta::create([
            'texto'=>'Las audiencias',
            'esCorrecta'=>false,
            'pregunta_id'=>'164'
        ]);
        Respuesta::create([
            'texto'=>'Las capitanías generales',
            'esCorrecta'=>false,
            'pregunta_id'=>'164'
        ]);
        Respuesta::create([
            'texto'=>'Los cabildos',
            'esCorrecta'=>false,
            'pregunta_id'=>'164'
        ]);
        Respuesta::create([
            'texto'=>'Ninguna de las anteriores',
            'esCorrecta'=>true,
            'pregunta_id'=>'164'
        ]);

        Pregunta::create([
            'texto' => 'Era una institución en la que, todos los varones entre 18 y 50 años debían trabajar un año de manera obligatoria para la producción minera:',
            'area_id' => 2
        ]);
        Respuesta::create([
            'texto'=>'La encomienda',
            'esCorrecta'=>false,
            'pregunta_id'=>'165'
        ]);
        Respuesta::create([
            'texto'=>'La mita',
            'esCorrecta'=>true,
            'pregunta_id'=>'165'
        ]);
        Respuesta::create([
            'texto'=>'Trabajos forzados',
            'esCorrecta'=>false,
            'pregunta_id'=>'165'
        ]);
        Respuesta::create([
            'texto'=>'Los Obrajes',
            'esCorrecta'=>false,
            'pregunta_id'=>'165'
        ]);
        Respuesta::create([
            'texto'=>'Los sacrificios',
            'esCorrecta'=>false,
            'pregunta_id'=>'165'
        ]);

        Pregunta::create([
            'texto' => 'Es el proceso de ocupación y poblamiento con europeos de las zonas conquistadas',
            'area_id' => 2
        ]);
        Respuesta::create([
            'texto'=>'La reconquista',
            'esCorrecta'=>false,
            'pregunta_id'=>'166'
        ]);
        Respuesta::create([
            'texto'=>'La colonización',
            'esCorrecta'=>true,
            'pregunta_id'=>'166'
        ]);
        Respuesta::create([
            'texto'=>'Las cruzadas',
            'esCorrecta'=>false,
            'pregunta_id'=>'166'
        ]);
        Respuesta::create([
            'texto'=>'Las tomas armadas',
            'esCorrecta'=>false,
            'pregunta_id'=>'166'
        ]);
        Respuesta::create([
            'texto'=>'Todas las anteriores',
            'esCorrecta'=>false,
            'pregunta_id'=>'166'
        ]);

        Pregunta::create([
            'texto' => 'Junto a la revolución industrial que otras revoluciones también se dan:',
            'area_id' => 2
        ]);
        Respuesta::create([
            'texto'=>'Revolución demográfica, revolución agrícola, revolución de los transportes y revolución en las industrias.',
            'esCorrecta'=>true,
            'pregunta_id'=>'167'
        ]);
        Respuesta::create([
            'texto'=>'Revolución social, revolución agrícola, revolución de los transportes, revolución en las industrias.',
            'esCorrecta'=>false,
            'pregunta_id'=>'167'
        ]);
        Respuesta::create([
            'texto'=>'Revolución política, revolución agrícola, revolución industrial, revolución espacial',
            'esCorrecta'=>false,
            'pregunta_id'=>'167'
        ]);
        Respuesta::create([
            'texto'=>' Revolución demográfica, revolución agrícola, revolución de los social, revolución política.',
            'esCorrecta'=>false,
            'pregunta_id'=>'167'
        ]);
        Respuesta::create([
            'texto'=>'Revolución agrícola, revolución social, revolución de los transportes, demográfica.',
            'esCorrecta'=>false,
            'pregunta_id'=>'167'
        ]);

        Pregunta::create([
            'texto' => 'La doctrina fascista era:',
            'area_id' => 2
        ]);
        Respuesta::create([
            'texto'=>'Antidemocrática',
            'esCorrecta'=>false,
            'pregunta_id'=>'168'
        ]);
        Respuesta::create([
            'texto'=>'Antiliberal',
            'esCorrecta'=>false,
            'pregunta_id'=>'168'
        ]);
        Respuesta::create([
            'texto'=>'Antimarxista',
            'esCorrecta'=>false,
            'pregunta_id'=>'168'
        ]);
        Respuesta::create([
            'texto'=>'Todas las anteriores',
            'esCorrecta'=>false,
            'pregunta_id'=>'168'
        ]);
        Respuesta::create([
            'texto'=>'Ninguna de las anteriores',
            'esCorrecta'=>false,
            'pregunta_id'=>'168'
        ]);

        Pregunta::create([
            'texto' => 'La geografía moderna estudia la tierra como:',
            'area_id' => 2
        ]);
        Respuesta::create([
            'texto'=>'La deforestación, el cambio climático, la naturaleza',
            'esCorrecta'=>false,
            'pregunta_id'=>'169'
        ]);
        Respuesta::create([
            'texto'=>'Un espacio donde vive el hombre, su hábitat, su medio ambiente o entorno',
            'esCorrecta'=>true,
            'pregunta_id'=>'169'
        ]);
        Respuesta::create([
            'texto'=>'El espacio donde vive el nombre, la sociedad, su cultura, su sobre existencia',
            'esCorrecta'=>false,
            'pregunta_id'=>'169'
        ]);
        Respuesta::create([
            'texto'=>'La tecnología, la innovación, la competitividad, las telecomunicaciones',
            'esCorrecta'=>false,
            'pregunta_id'=>'169'
        ]);
        Respuesta::create([
            'texto'=>'Las redes sociales, la tecnología, la innovación, las comunicaciones',
            'esCorrecta'=>false,
            'pregunta_id'=>'169'
        ]);

        Pregunta::create([
            'texto' => 'La guerra de las trincheras se da en:',
            'area_id' => 2
        ]);
        Respuesta::create([
            'texto'=>'Revolución francesa',
            'esCorrecta'=>false,
            'pregunta_id'=>'170'
        ]);
        Respuesta::create([
            'texto'=>'Primera guerra mundial',
            'esCorrecta'=>true,
            'pregunta_id'=>'170'
        ]);
        Respuesta::create([
            'texto'=>'Segunda guerra mundial',
            'esCorrecta'=>false,
            'pregunta_id'=>'170'
        ]);
        Respuesta::create([
            'texto'=>'Guerra fría',
            'esCorrecta'=>false,
            'pregunta_id'=>'170'
        ]);
        Respuesta::create([
            'texto'=>'Ninguna de las anteriores',
            'esCorrecta'=>false,
            'pregunta_id'=>'170'
        ]);
    }
}