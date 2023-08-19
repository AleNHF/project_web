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

        Pregunta::create([
            'texto' => 'La guerra que se da entre los años 1939-1945 es la:',
            'area_id' => 2
        ]);
        Respuesta::create([
            'texto'=>'Revolución Rusa',
            'esCorrecta'=>false,
            'pregunta_id'=>'171'
        ]);
        Respuesta::create([
            'texto'=>'Primera guerra mundial',
            'esCorrecta'=>true,
            'pregunta_id'=>'171'
        ]);
        Respuesta::create([
            'texto'=>'La guerra fría',
            'esCorrecta'=>false,
            'pregunta_id'=>'171'
        ]);
        Respuesta::create([
            'texto'=>'Segunda guerra mundial',
            'esCorrecta'=>true,
            'pregunta_id'=>'171'
        ]);
        Respuesta::create([
            'texto'=>'Ninguna de las anteriores',
            'esCorrecta'=>false,
            'pregunta_id'=>'171'
        ]);

        Pregunta::create([
            'texto' => 'La unión europea es la:',
            'area_id' => 2
        ]);
        Respuesta::create([
            'texto'=>'Unificación comercial de 27 países, que eliminan sus fronteras y unifican sus fronteras',
            'esCorrecta'=>false,
            'pregunta_id'=>'172'
        ]);
        Respuesta::create([
            'texto'=>'Unificación política, cultural de 26 países, que eliminan sus fronteras y unifican sus economías',
            'esCorrecta'=>false,
            'pregunta_id'=>'172'
        ]);
        Respuesta::create([
            'texto'=>'Unificación económica de 25 países, que eliminan sus fronteras y unifican sus economías',
            'esCorrecta'=>true,
            'pregunta_id'=>'172'
        ]);
        Respuesta::create([
            'texto'=>'Unificación social, monetaria de 24 países, que eliminan sus fronteras y unifican sus culturas',
            'esCorrecta'=>false,
            'pregunta_id'=>'172'
        ]);
        Respuesta::create([
            'texto'=>'Unificación cultural y social de 23 países, que eliminan sus fronteras y unifican sus economías',
            'esCorrecta'=>false,
            'pregunta_id'=>'172'
        ]);

        Pregunta::create([
            'texto' => 'Las 13 colonias fueron fundadas por:',
            'area_id' => 2
        ]);
        Respuesta::create([
            'texto'=>'Estados Unidos',
            'esCorrecta'=>false,
            'pregunta_id'=>'173'
        ]);
        Respuesta::create([
            'texto'=>'Imperio británico',
            'esCorrecta'=>true,
            'pregunta_id'=>'173'
        ]);
        Respuesta::create([
            'texto'=>'Alemania',
            'esCorrecta'=>false,
            'pregunta_id'=>'173'
        ]);
        Respuesta::create([
            'texto'=>'URSS',
            'esCorrecta'=>false,
            'pregunta_id'=>'173'
        ]);
        Respuesta::create([
            'texto'=>'Ninguna de las anteriores',
            'esCorrecta'=>false,
            'pregunta_id'=>'173'
        ]);

        Pregunta::create([
            'texto' => 'Las transformaciones más importantes de la revolución de 1952 fueron:',
            'area_id' => 2
        ]);
        Respuesta::create([
            'texto'=>'El voto universal',
            'esCorrecta'=>false,
            'pregunta_id'=>'174'
        ]);
        Respuesta::create([
            'texto'=>'La nacionalización de las minas',
            'esCorrecta'=>false,
            'pregunta_id'=>'174'
        ]);
        Respuesta::create([
            'texto'=>'La reforma agraria',
            'esCorrecta'=>false,
            'pregunta_id'=>'174'
        ]);
        Respuesta::create([
            'texto'=>'La reforma educativa',
            'esCorrecta'=>false,
            'pregunta_id'=>'174'
        ]);
        Respuesta::create([
            'texto'=>'Todas las anteriores',
            'esCorrecta'=>true,
            'pregunta_id'=>'174'
        ]);

        Pregunta::create([
            'texto' => ' Los chinos se caracterizan por ser los grandes inventores de:',
            'area_id' => 2
        ]);
        Respuesta::create([
            'texto'=>'La escritura, el papel, el alfabeto y la seda',
            'esCorrecta'=>false,
            'pregunta_id'=>'175'
        ]);
        Respuesta::create([
            'texto'=>'La brújula, el papel, la pólvora, la porcelana y la seda',
            'esCorrecta'=>true,
            'pregunta_id'=>'175'
        ]);
        Respuesta::create([
            'texto'=>'La brújula, la clave morse, la pólvora, la porcelana y la seda',
            'esCorrecta'=>false,
            'pregunta_id'=>'175'
        ]);
        Respuesta::create([
            'texto'=>'La pólvora, la tela, la pintura y la porcelana',
            'esCorrecta'=>false,
            'pregunta_id'=>'175'
        ]);
        Respuesta::create([
            'texto'=>'El alfabeto, el papel, la seda y la pintura',
            'esCorrecta'=>false,
            'pregunta_id'=>'175'
        ]);

        Pregunta::create([
            'texto' => 'Los fenicios alcanzaron su poder económico gracias a:',
            'area_id' => 2
        ]);
        Respuesta::create([
            'texto'=>'A sus económicas',
            'esCorrecta'=>false,
            'pregunta_id'=>'176'
        ]);
        Respuesta::create([
            'texto'=>'A su poderío bélico',
            'esCorrecta'=>false,
            'pregunta_id'=>'176'
        ]);
        Respuesta::create([
            'texto'=>'A sus actividades',
            'esCorrecta'=>false,
            'pregunta_id'=>'176'
        ]);
        Respuesta::create([
            'texto'=>'A su actividad comercial',
            'esCorrecta'=>true,
            'pregunta_id'=>'176'
        ]);
        Respuesta::create([
            'texto'=>'A sus rutas comerciales y marítimas',
            'esCorrecta'=>false,
            'pregunta_id'=>'176'
        ]);

        Pregunta::create([
            'texto' => 'Los paralelos y meridianos son líneas imaginarias que permiten que nos ubiquemos en la superficie de la tierra',
            'area_id' => 2
        ]);
        Respuesta::create([
            'texto'=>'Paralelos, Meridianos, Coordenadas geográficas, latitud',
            'esCorrecta'=>false,
            'pregunta_id'=>'177'
        ]);
        Respuesta::create([
            'texto'=>'Paralelos, Grados, Coordenadas geográficas, longitud',
            'esCorrecta'=>false,
            'pregunta_id'=>'177'
        ]);
        Respuesta::create([
            'texto'=>'Paralelos, Meridianos, Coordenadas geográficas, latitud, longitud',
            'esCorrecta'=>false,
            'pregunta_id'=>'177'
        ]);
        Respuesta::create([
            'texto'=>'Paralelos, Meridianos, Coordenadas geográficas, Grados',
            'esCorrecta'=>false,
            'pregunta_id'=>'177'
        ]);
        Respuesta::create([
            'texto'=>'Paralelos, Meridianos, Coordenadas geográficas',
            'esCorrecta'=>true,
            'pregunta_id'=>'177'
        ]);

        Pregunta::create([
            'texto' => 'Los restos más antiguos que se han encontrado son los de la cultura:',
            'area_id' => 2
        ]);
        Respuesta::create([
            'texto'=>'Wankarani',
            'esCorrecta'=>false,
            'pregunta_id'=>'178'
        ]);
        Respuesta::create([
            'texto'=>'Viscachani',
            'esCorrecta'=>true,
            'pregunta_id'=>'178'
        ]);
        Respuesta::create([
            'texto'=>'Lupazas',
            'esCorrecta'=>false,
            'pregunta_id'=>'178'
        ]);
        Respuesta::create([
            'texto'=>'Pacajes',
            'esCorrecta'=>false,
            'pregunta_id'=>'178'
        ]);
        Respuesta::create([
            'texto'=>'Todas las anteriores',
            'esCorrecta'=>false,
            'pregunta_id'=>'178'
        ]);

        Pregunta::create([
            'texto' => 'Mejoran las condiciones higiénicas sanitarias, alimentación abundante, incremento de la renta per cápita, son características de la:',
            'area_id' => 2
        ]);
        Respuesta::create([
            'texto'=>'Revolución agrícola',
            'esCorrecta'=>false,
            'pregunta_id'=>'179'
        ]);
        Respuesta::create([
            'texto'=>'Revolución de transporte',
            'esCorrecta'=>false,
            'pregunta_id'=>'179'
        ]);
        Respuesta::create([
            'texto'=>'Revolución demográfica',
            'esCorrecta'=>true,
            'pregunta_id'=>'179'
        ]);
        Respuesta::create([
            'texto'=>'Revolución económica',
            'esCorrecta'=>false,
            'pregunta_id'=>'179'
        ]);
        Respuesta::create([
            'texto'=>'Ninguna de las anteriores',
            'esCorrecta'=>false,
            'pregunta_id'=>'179'
        ]);

        Pregunta::create([
            'texto' => 'Quien fundo la ciudad de La paz fue:',
            'area_id' => 2
        ]);
        Respuesta::create([
            'texto'=>'Luis de Fuentes',
            'esCorrecta'=>false,
            'pregunta_id'=>'180'
        ]);
        Respuesta::create([
            'texto'=>'Manuel castro de Padilla',
            'esCorrecta'=>false,
            'pregunta_id'=>'180'
        ]);
        Respuesta::create([
            'texto'=>'Alonso de Mendoza',
            'esCorrecta'=>false,
            'pregunta_id'=>'180'
        ]);
        Respuesta::create([
            'texto'=>'Cipriano Barace',
            'esCorrecta'=>false,
            'pregunta_id'=>'180'
        ]);
        Respuesta::create([
            'texto'=>'Ninguna de las anteriores',
            'esCorrecta'=>false,
            'pregunta_id'=>'180'
        ]);

        Pregunta::create([
            'texto' => ' ¿Quipen estaba de presidente de Bolivia en la Guerra del Chaco?',
            'area_id' => 2
        ]);
        Respuesta::create([
            'texto'=>'Elizardo Pérez',
            'esCorrecta'=>false,
            'pregunta_id'=>'181'
        ]);
        Respuesta::create([
            'texto'=>'Daniel Salamanca',
            'esCorrecta'=>true,
            'pregunta_id'=>'181'
        ]);
        Respuesta::create([
            'texto'=>'Manuel Marzana',
            'esCorrecta'=>false,
            'pregunta_id'=>'181'
        ]);
        Respuesta::create([
            'texto'=>'Hernando Siles',
            'esCorrecta'=>false,
            'pregunta_id'=>'181'
        ]);
        Respuesta::create([
            'texto'=>'Melchor Pinto',
            'esCorrecta'=>false,
            'pregunta_id'=>'181'
        ]);

        Pregunta::create([
            'texto' => 'El 26 de febrero de 1561, Ñuflo de Chávez fundó Santa Cruz de la Sierra a orillas:',
            'area_id' => 2
        ]);
        Respuesta::create([
            'texto'=>'Del Río Piray',
            'esCorrecta'=>false,
            'pregunta_id'=>'182'
        ]);
        Respuesta::create([
            'texto'=>'Del Río Grande',
            'esCorrecta'=>false,
            'pregunta_id'=>'182'
        ]);
        Respuesta::create([
            'texto'=>'Del Río Sutó',
            'esCorrecta'=>true,
            'pregunta_id'=>'182'
        ]);
        Respuesta::create([
            'texto'=>'Del Río Mamoré',
            'esCorrecta'=>false,
            'pregunta_id'=>'182'
        ]);
        Respuesta::create([
            'texto'=>'Del Río Paraguay',
            'esCorrecta'=>false,
            'pregunta_id'=>'182'
        ]);

        Pregunta::create([
            'texto' => 'El 4 de mayo de 2008, los cruceños aprobaron mediante referéndum:',
            'area_id' => 2
        ]);
        Respuesta::create([
            'texto'=>'La venta de gas a Chile',
            'esCorrecta'=>false,
            'pregunta_id'=>'183'
        ]);
        Respuesta::create([
            'texto'=>'Los estatutos autonómicos del departamento',
            'esCorrecta'=>true,
            'pregunta_id'=>'183'
        ]);
        Respuesta::create([
            'texto'=>'La reelección de Evo Morales',
            'esCorrecta'=>false,
            'pregunta_id'=>'183'
        ]);
        Respuesta::create([
            'texto'=>'La nueva constitución',
            'esCorrecta'=>false,
            'pregunta_id'=>'183'
        ]);
        Respuesta::create([
            'texto'=>'La construcción del tren bioceánico',
            'esCorrecta'=>false,
            'pregunta_id'=>'183'
        ]);

        Pregunta::create([
            'texto' => 'El empresario gomero que defendió los territorios bolivianos en el Acre fue:',
            'area_id' => 2
        ]);
        Respuesta::create([
            'texto'=>'Max Fernández',
            'esCorrecta'=>false,
            'pregunta_id'=>'184'
        ]);
        Respuesta::create([
            'texto'=>'Samuel Doria Medina',
            'esCorrecta'=>false,
            'pregunta_id'=>'184'
        ]);
        Respuesta::create([
            'texto'=>'Nicolás Suarez',
            'esCorrecta'=>true,
            'pregunta_id'=>'184'
        ]);
        Respuesta::create([
            'texto'=>'Antonio Vaca Diez',
            'esCorrecta'=>false,
            'pregunta_id'=>'184'
        ]);
        Respuesta::create([
            'texto'=>'Antenor Vázquez',
            'esCorrecta'=>false,
            'pregunta_id'=>'184'
        ]);

        Pregunta::create([
            'texto' => 'El Plan Bohan de 1942, planteó la necesidad de:',
            'area_id' => 2
        ]);
        Respuesta::create([
            'texto'=>'Construir la carretera entre Santa Cruz y Cochabamba',
            'esCorrecta'=>false,
            'pregunta_id'=>'185'
        ]);
        Respuesta::create([
            'texto'=>'Desarrollar el oriente boliviano',
            'esCorrecta'=>false,
            'pregunta_id'=>'185'
        ]);
        Respuesta::create([
            'texto'=>'Crear la Corporación Boliviana de Fomento',
            'esCorrecta'=>false,
            'pregunta_id'=>'185'
        ]);
        Respuesta::create([
            'texto'=>'Diversificar la economía centrada en la minería',
            'esCorrecta'=>false,
            'pregunta_id'=>'185'
        ]);
        Respuesta::create([
            'texto'=>'Todas las anteriores',
            'esCorrecta'=>true,
            'pregunta_id'=>'185'
        ]);

        Pregunta::create([
            'texto' => 'El plan norteamericano de ayuda económica a los países destruidos por la guerra fue el:',
            'area_id' => 2
        ]);
        Respuesta::create([
            'texto'=>'Plan Brady',
            'esCorrecta'=>false,
            'pregunta_id'=>'186'
        ]);
        Respuesta::create([
            'texto'=>'Plan Marshall',
            'esCorrecta'=>true,
            'pregunta_id'=>'186'
        ]);
        Respuesta::create([
            'texto'=>'Plan Bohan',
            'esCorrecta'=>false,
            'pregunta_id'=>'186'
        ]);
        Respuesta::create([
            'texto'=>'Plan Clinton',
            'esCorrecta'=>false,
            'pregunta_id'=>'186'
        ]);
        Respuesta::create([
            'texto'=>'Plan Trump',
            'esCorrecta'=>false,
            'pregunta_id'=>'186'
        ]);

        Pregunta::create([
            'texto' => 'En 1872 se inició en Bolivia un nuevo auge económico, fue:',
            'area_id' => 2
        ]);
        Respuesta::create([
            'texto'=>'Petróleo',
            'esCorrecta'=>false,
            'pregunta_id'=>'187'
        ]);
        Respuesta::create([
            'texto'=>'Gas',
            'esCorrecta'=>false,
            'pregunta_id'=>'187'
        ]);
        Respuesta::create([
            'texto'=>'Plata',
            'esCorrecta'=>true,
            'pregunta_id'=>'187'
        ]);
        Respuesta::create([
            'texto'=>'Estaño',
            'esCorrecta'=>false,
            'pregunta_id'=>'187'
        ]);
        Respuesta::create([
            'texto'=>'Goma elástica',
            'esCorrecta'=>false,
            'pregunta_id'=>'187'
        ]);

        Pregunta::create([
            'texto' => 'En 1904 fue la institución que publicó Memorándum por el ferrocarril oriental:',
            'area_id' => 2
        ]);
        Respuesta::create([
            'texto'=>'El Comité Pro Santa Cruz',
            'esCorrecta'=>false,
            'pregunta_id'=>'188'
        ]);
        Respuesta::create([
            'texto'=>'La Alcandía',
            'esCorrecta'=>false,
            'pregunta_id'=>'188'
        ]);
        Respuesta::create([
            'texto'=>'La Universidad de Santa Cruz',
            'esCorrecta'=>false,
            'pregunta_id'=>'188'
        ]);
        Respuesta::create([
            'texto'=>'La Sociedad de Estudios Geográficos e Históricos de Santa Cruz',
            'esCorrecta'=>false,
            'pregunta_id'=>'188'
        ]);
        Respuesta::create([
            'texto'=>'El Club Social 24 de Septiembre',
            'esCorrecta'=>false,
            'pregunta_id'=>'188'
        ]);

        Pregunta::create([
            'texto' => 'En 1924 una revuelta en Santa Cruz exigió:',
            'area_id' => 2
        ]);
        Respuesta::create([
            'texto'=>'La construcción de la carretera',
            'esCorrecta'=>false,
            'pregunta_id'=>'189'
        ]);
        Respuesta::create([
            'texto'=>'La construcción del ferrocarril a Cochabamba',
            'esCorrecta'=>true,
            'pregunta_id'=>'189'
        ]);
        Respuesta::create([
            'texto'=>'La construcción del aeropuerto Viru Viru',
            'esCorrecta'=>false,
            'pregunta_id'=>'189'
        ]);
        Respuesta::create([
            'texto'=>'El desarrollo del Mutún',
            'esCorrecta'=>false,
            'pregunta_id'=>'189'
        ]);
        Respuesta::create([
            'texto'=>'La construcción de la represa Rositas',
            'esCorrecta'=>false,
            'pregunta_id'=>'189'
        ]);

        Pregunta::create([
            'texto' => 'En 1946, una insurrección popular asesinó y colgó al presidente:',
            'area_id' => 2
        ]);
        Respuesta::create([
            'texto'=>'Mamerto Urriolagoitia',
            'esCorrecta'=>false,
            'pregunta_id'=>'190'
        ]);
        Respuesta::create([
            'texto'=>'Gualberto Villarroel',
            'esCorrecta'=>true,
            'pregunta_id'=>'190'
        ]);
        Respuesta::create([
            'texto'=>'Germán Busch',
            'esCorrecta'=>false,
            'pregunta_id'=>'190'
        ]);
        Respuesta::create([
            'texto'=>'Enrique Hertzog',
            'esCorrecta'=>false,
            'pregunta_id'=>'190'
        ]);
        Respuesta::create([
            'texto'=>'Victor Paz Estenssoro',
            'esCorrecta'=>false,
            'pregunta_id'=>'190'
        ]);

        Pregunta::create([
            'texto' => 'En 1967, estalló en Ñancahuazú la guerrilla dirigida por:',
            'area_id' => 2
        ]);
        Respuesta::create([
            'texto'=>'Fidel Castro',
            'esCorrecta'=>false,
            'pregunta_id'=>'191'
        ]);
        Respuesta::create([
            'texto'=>'Hugo Chávez',
            'esCorrecta'=>false,
            'pregunta_id'=>'191'
        ]);
        Respuesta::create([
            'texto'=>'Ché Guevara',
            'esCorrecta'=>true,
            'pregunta_id'=>'191'
        ]);
        Respuesta::create([
            'texto'=>'Daniel Ortega',
            'esCorrecta'=>false,
            'pregunta_id'=>'191'
        ]);
        Respuesta::create([
            'texto'=>'Chato Peredo',
            'esCorrecta'=>false,
            'pregunta_id'=>'191'
        ]);

        Pregunta::create([
            'texto' => 'Fue derrotado por los realistas en la batalla del Pari, el patriota:',
            'area_id' => 2
        ]);
        Respuesta::create([
            'texto'=>'Ignacio Warnes',
            'esCorrecta'=>true,
            'pregunta_id'=>'192'
        ]);
        Respuesta::create([
            'texto'=>'Cañoto',
            'esCorrecta'=>false,
            'pregunta_id'=>'192'
        ]);
        Respuesta::create([
            'texto'=>'Colorao Mercado',
            'esCorrecta'=>false,
            'pregunta_id'=>'192'
        ]);
        Respuesta::create([
            'texto'=>'Álvarez de Arenales',
            'esCorrecta'=>false,
            'pregunta_id'=>'192'
        ]);
        Respuesta::create([
            'texto'=>'Antonio Vicente Seoane',
            'esCorrecta'=>false,
            'pregunta_id'=>'192'
        ]);

        Pregunta::create([
            'texto' => 'Fue una figura reconocida durante la Guerra del Chaco:',
            'area_id' => 2
        ]);
        Respuesta::create([
            'texto'=>'Daniel Salamanca',
            'esCorrecta'=>false,
            'pregunta_id'=>'193'
        ]);
        Respuesta::create([
            'texto'=>'Hernando Siles',
            'esCorrecta'=>false,
            'pregunta_id'=>'193'
        ]);
        Respuesta::create([
            'texto'=>'Germán Busch',
            'esCorrecta'=>true,
            'pregunta_id'=>'193'
        ]);
        Respuesta::create([
            'texto'=>'Eduardo Abaroa',
            'esCorrecta'=>false,
            'pregunta_id'=>'193'
        ]);
        Respuesta::create([
            'texto'=>'Juancito Pinto',
            'esCorrecta'=>false,
            'pregunta_id'=>'193'
        ]);

        Pregunta::create([
            'texto' => 'La base de la economía cruceña durante la época colonial fue:',
            'area_id' => 2
        ]);
        Respuesta::create([
            'texto'=>'La minería',
            'esCorrecta'=>false,
            'pregunta_id'=>'194'
        ]);
        Respuesta::create([
            'texto'=>'La producción de azúcar',
            'esCorrecta'=>true,
            'pregunta_id'=>'194'
        ]);
        Respuesta::create([
            'texto'=>'El petróleo',
            'esCorrecta'=>false,
            'pregunta_id'=>'194'
        ]);
        Respuesta::create([
            'texto'=>'El gas',
            'esCorrecta'=>false,
            'pregunta_id'=>'194'
        ]);
        Respuesta::create([
            'texto'=>'La soya',
            'esCorrecta'=>false,
            'pregunta_id'=>'194'
        ]);

        Pregunta::create([
            'texto' => 'La Confederación Perú - Boliviana fue conformada por el presidente:',
            'area_id' => 2
        ]);
        Respuesta::create([
            'texto'=>'Belzu',
            'esCorrecta'=>false,
            'pregunta_id'=>'195'
        ]);
        Respuesta::create([
            'texto'=>'Ballivián',
            'esCorrecta'=>false,
            'pregunta_id'=>'195'
        ]);
        Respuesta::create([
            'texto'=>'Santa Cruz',
            'esCorrecta'=>true,
            'pregunta_id'=>'195'
        ]);
        Respuesta::create([
            'texto'=>'Bolívar',
            'esCorrecta'=>false,
            'pregunta_id'=>'195'
        ]);
        Respuesta::create([
            'texto'=>'Sucre',
            'esCorrecta'=>false,
            'pregunta_id'=>'195'
        ]);

        Pregunta::create([
            'texto' => 'La Confederación Perú - Boliviana fue derrotada por los chilenos en la:',
            'area_id' => 2
        ]);
        Respuesta::create([
            'texto'=>'Batalla de Ingav',
            'esCorrecta'=>false,
            'pregunta_id'=>'196'
        ]);
        Respuesta::create([
            'texto'=>'Batalla de Yungay',
            'esCorrecta'=>true,
            'pregunta_id'=>'196'
        ]);
        Respuesta::create([
            'texto'=>'Batalla del Pari',
            'esCorrecta'=>false,
            'pregunta_id'=>'196'
        ]);
        Respuesta::create([
            'texto'=>'Batalla de Ayacucho',
            'esCorrecta'=>false,
            'pregunta_id'=>'196'
        ]);
        Respuesta::create([
            'texto'=>'Batalla de Junín',
            'esCorrecta'=>false,
            'pregunta_id'=>'196'
        ]);

        Pregunta::create([
            'texto' => 'La expedición que fundó la ciudad de Santa Cruz de la Sierra, salió de:',
            'area_id' => 2
        ]);
        Respuesta::create([
            'texto'=>'Asunción',
            'esCorrecta'=>true,
            'pregunta_id'=>'197'
        ]);
        Respuesta::create([
            'texto'=>'Lima',
            'esCorrecta'=>false,
            'pregunta_id'=>'197'
        ]);
        Respuesta::create([
            'texto'=>'Buenos Aires',
            'esCorrecta'=>false,
            'pregunta_id'=>'197'
        ]);
        Respuesta::create([
            'texto'=>'Montevideo',
            'esCorrecta'=>false,
            'pregunta_id'=>'197'
        ]);
        Respuesta::create([
            'texto'=>'Río de Janeiro',
            'esCorrecta'=>false,
            'pregunta_id'=>'186'
        ]);

        Pregunta::create([
            'texto' => 'La guerra de independencia se inició en Santa Cruz de la Sierra:',
            'area_id' => 2
        ]);
        Respuesta::create([
            'texto'=>'El 25 de mayo de 1809',
            'esCorrecta'=>false,
            'pregunta_id'=>'198'
        ]);
        Respuesta::create([
            'texto'=>'El 26 de febrero de 1561',
            'esCorrecta'=>false,
            'pregunta_id'=>'198'
        ]);
        Respuesta::create([
            'texto'=>'El 24 de septiembre de 1810',
            'esCorrecta'=>true,
            'pregunta_id'=>'198'
        ]);
        Respuesta::create([
            'texto'=>'El 14 de septiembre de 1810',
            'esCorrecta'=>false,
            'pregunta_id'=>'198'
        ]);
        Respuesta::create([
            'texto'=>'El 16 de julio de 1809',
            'esCorrecta'=>false,
            'pregunta_id'=>'198'
        ]);

        Pregunta::create([
            'texto' => 'La Guerra del Chaco fue un conflicto bélico entre los países de:',
            'area_id' => 2
        ]);
        Respuesta::create([
            'texto'=>'Chile y Argentina',
            'esCorrecta'=>false,
            'pregunta_id'=>'199'
        ]);
        Respuesta::create([
            'texto'=>'Colombia y Bolivia',
            'esCorrecta'=>false,
            'pregunta_id'=>'199'
        ]);
        Respuesta::create([
            'texto'=>'Bolivia y Paraguay',
            'esCorrecta'=>true,
            'pregunta_id'=>'199'
        ]);
        Respuesta::create([
            'texto'=>'Paraguay y Argentina',
            'esCorrecta'=>false,
            'pregunta_id'=>'199'
        ]);
        Respuesta::create([
            'texto'=>'Todas las anteriores',
            'esCorrecta'=>false,
            'pregunta_id'=>'199'
        ]);

        Pregunta::create([
            'texto' => 'La nacionalización de las minas de 1952, se dictó durante el gobierno de:',
            'area_id' => 2
        ]);
        Respuesta::create([
            'texto'=>'Mamerto Urriolagoitia',
            'esCorrecta'=>false,
            'pregunta_id'=>'200'
        ]);
        Respuesta::create([
            'texto'=>'Gualberto Villarroel',
            'esCorrecta'=>false,
            'pregunta_id'=>'200'
        ]);
        Respuesta::create([
            'texto'=>'Germán Busch',
            'esCorrecta'=>false,
            'pregunta_id'=>'200'
        ]);
        Respuesta::create([
            'texto'=>'Enrique Hertzog',
            'esCorrecta'=>false,
            'pregunta_id'=>'200'
        ]);
        Respuesta::create([
            'texto'=>'Victor Paz Estenssoro',
            'esCorrecta'=>true,
            'pregunta_id'=>'200'
        ]);

        Pregunta::create([
            'texto' => 'La orden religiosa que fundó las misiones de Chiquitos fue:',
            'area_id' => 2
        ]);
        Respuesta::create([
            'texto'=>'Franciscanos',
            'esCorrecta'=>false,
            'pregunta_id'=>'201'
        ]);
        Respuesta::create([
            'texto'=>'Agustinos',
            'esCorrecta'=>false,
            'pregunta_id'=>'201'
        ]);
        Respuesta::create([
            'texto'=>'Mercedarios',
            'esCorrecta'=>false,
            'pregunta_id'=>'201'
        ]);
        Respuesta::create([
            'texto'=>'Jesuitas',
            'esCorrecta'=>true,
            'pregunta_id'=>'201'
        ]);
        Respuesta::create([
            'texto'=>'Carmelitas',
            'esCorrecta'=>false,
            'pregunta_id'=>'201'
        ]);

        Pregunta::create([
            'texto' => 'La reforma agraria del 2 de agosto de 1953, fue promulgada por el presidente:',
            'area_id' => 2
        ]);
        Respuesta::create([
            'texto'=>'Mamerto Urriolagoitia',
            'esCorrecta'=>false,
            'pregunta_id'=>'202'
        ]);
        Respuesta::create([
            'texto'=>'Gualberto Villarroel',
            'esCorrecta'=>false,
            'pregunta_id'=>'202'
        ]);
        Respuesta::create([
            'texto'=>'Victor Paz Estenssoro',
            'esCorrecta'=>true,
            'pregunta_id'=>'202'
        ]);
        Respuesta::create([
            'texto'=>'Germán Busch',
            'esCorrecta'=>false,
            'pregunta_id'=>'202'
        ]);
        Respuesta::create([
            'texto'=>'Hernán Siles',
            'esCorrecta'=>false,
            'pregunta_id'=>'202'
        ]);

        Pregunta::create([
            'texto' => 'La revolución nacional de 1952 permite la creación de:',
            'area_id' => 2
        ]);
        Respuesta::create([
            'texto'=>'La Federación Sindical de Trabajadores Mineros de Bolivia',
            'esCorrecta'=>false,
            'pregunta_id'=>'203'
        ]);
        Respuesta::create([
            'texto'=>'La Central Obrera Boliviana',
            'esCorrecta'=>true,
            'pregunta_id'=>'203'
        ]);
        Respuesta::create([
            'texto'=>'La Confederación de Pueblos Indígenas',
            'esCorrecta'=>false,
            'pregunta_id'=>'203'
        ]);
        Respuesta::create([
            'texto'=>'La Asamblea del Pueblo Guaraní',
            'esCorrecta'=>false,
            'pregunta_id'=>'203'
        ]);
        Respuesta::create([
            'texto'=>'La Federación Sindical Única de Trabajadores Campesinos',
            'esCorrecta'=>false,
            'pregunta_id'=>'203'
        ]);

        Pregunta::create([
            'texto' => 'Las consecuencias de la Guerra del Pacífico para Bolivia fueron:',
            'area_id' => 2
        ]);
        Respuesta::create([
            'texto'=>'La pérdida de un acceso al mar',
            'esCorrecta'=>false,
            'pregunta_id'=>'204'
        ]);
        Respuesta::create([
            'texto'=>'El fin de los gobiernos militares',
            'esCorrecta'=>false,
            'pregunta_id'=>'204'
        ]);
        Respuesta::create([
            'texto'=>'Surgimiento de los partidos políticos',
            'esCorrecta'=>false,
            'pregunta_id'=>'204'
        ]);
        Respuesta::create([
            'texto'=>'Los ferrocarriles para Bolivia',
            'esCorrecta'=>false,
            'pregunta_id'=>'204'
        ]);
        Respuesta::create([
            'texto'=>'Todos los incisos',
            'esCorrecta'=>true,
            'pregunta_id'=>'204'
        ]);

        Pregunta::create([
            'texto' => 'Las luchas cívicas que lograron el pago de las regalías petroleras las lideró:',
            'area_id' => 2
        ]);
        Respuesta::create([
            'texto'=>'Germán Busch',
            'esCorrecta'=>false,
            'pregunta_id'=>'205'
        ]);
        Respuesta::create([
            'texto'=>'Cástulo Chávez',
            'esCorrecta'=>false,
            'pregunta_id'=>'205'
        ]);
        Respuesta::create([
            'texto'=>'Melchor Pinto Parada',
            'esCorrecta'=>true,
            'pregunta_id'=>'205'
        ]);
        Respuesta::create([
            'texto'=>'Rafael Peña',
            'esCorrecta'=>false,
            'pregunta_id'=>'205'
        ]);
        Respuesta::create([
            'texto'=>'Andrés Ibáñez',
            'esCorrecta'=>false,
            'pregunta_id'=>'205'
        ]);

        Pregunta::create([
            'texto' => 'Las misiones Jesuitas que se establecieron en el territorio cruceño colonial
            fueron:',
            'area_id' => 2
        ]);
        Respuesta::create([
            'texto'=>'Meta y Darién',
            'esCorrecta'=>false,
            'pregunta_id'=>'206'
        ]);
        Respuesta::create([
            'texto'=>'Chiloé y Darién',
            'esCorrecta'=>false,
            'pregunta_id'=>'206'
        ]);
        Respuesta::create([
            'texto'=>'Moxos y Chiquitos',
            'esCorrecta'=>true,
            'pregunta_id'=>'206'
        ]);
        Respuesta::create([
            'texto'=>'Paracuaria y Juli',
            'esCorrecta'=>false,
            'pregunta_id'=>'206'
        ]);
        Respuesta::create([
            'texto'=>'Chaco y Paracuaria',
            'esCorrecta'=>false,
            'pregunta_id'=>'206'
        ]);

        Pregunta::create([
            'texto' => 'Los cabildos del siglo XXI en Santa Cruz pedían:',
            'area_id' => 2
        ]);
        Respuesta::create([
            'texto'=>'Federalismo',
            'esCorrecta'=>false,
            'pregunta_id'=>'207'
        ]);
        Respuesta::create([
            'texto'=>'Ferrocarriles',
            'esCorrecta'=>false,
            'pregunta_id'=>'207'
        ]);
        Respuesta::create([
            'texto'=>'Regalías petroleras',
            'esCorrecta'=>false,
            'pregunta_id'=>'207'
        ]);
        Respuesta::create([
            'texto'=>'Autonomías departamentales',
            'esCorrecta'=>true,
            'pregunta_id'=>'207'
        ]);
        Respuesta::create([
            'texto'=>'Centralismo estatal',
            'esCorrecta'=>false,
            'pregunta_id'=>'207'
        ]);

        Pregunta::create([
            'texto' => 'Los nuevos partidos políticos que surgieron después de la Guerra del Chaco fueron:',
            'area_id' => 2
        ]);
        Respuesta::create([
            'texto'=>'Partido Obrero Revolucionario',
            'esCorrecta'=>false,
            'pregunta_id'=>'208'
        ]);
        Respuesta::create([
            'texto'=>'Partido de Izquierda Revolucionaria',
            'esCorrecta'=>false,
            'pregunta_id'=>'208'
        ]);
        Respuesta::create([
            'texto'=>'Movimiento Nacionalista Revolucionario',
            'esCorrecta'=>false,
            'pregunta_id'=>'208'
        ]);
        Respuesta::create([
            'texto'=>'Falange Socialista Boliviana',
            'esCorrecta'=>false,
            'pregunta_id'=>'208'
        ]);
        Respuesta::create([
            'texto'=>'Todos los incisos',
            'esCorrecta'=>true,
            'pregunta_id'=>'208'
        ]);

        Pregunta::create([
            'texto' => 'Los representantes de Santa Cruz ante la Asamblea que dio origen a Bolivia fueron:',
            'area_id' => 2
        ]);
        Respuesta::create([
            'texto'=>'Warnes y Mercado',
            'esCorrecta'=>false,
            'pregunta_id'=>'209'
        ]);
        Respuesta::create([
            'texto'=>'Cañoto y Mercado',
            'esCorrecta'=>false,
            'pregunta_id'=>'209'
        ]);
        Respuesta::create([
            'texto'=>'Seoane y Caballero',
            'esCorrecta'=>true,
            'pregunta_id'=>'209'
        ]);
        Respuesta::create([
            'texto'=>'Suárez y Seoane',
            'esCorrecta'=>false,
            'pregunta_id'=>'209'
        ]);
        Respuesta::create([
            'texto'=>'Aguilera y Mercado',
            'esCorrecta'=>false,
            'pregunta_id'=>'209'
        ]);

        Pregunta::create([
            'texto' => ' The Bolivian Syndicate, una empresa anglo-estadounidense que explotaba caucho en la región de:',
            'area_id' => 2
        ]);
        Respuesta::create([
            'texto'=>'El Chaco',
            'esCorrecta'=>false,
            'pregunta_id'=>'210'
        ]);
        Respuesta::create([
            'texto'=>'El Acre',
            'esCorrecta'=>true,
            'pregunta_id'=>'210'
        ]);
        Respuesta::create([
            'texto'=>'El Litoral',
            'esCorrecta'=>false,
            'pregunta_id'=>'210'
        ]);
        Respuesta::create([
            'texto'=>'Las Colonias',
            'esCorrecta'=>false,
            'pregunta_id'=>'210'
        ]);
        Respuesta::create([
            'texto'=>'El Mato Grosso',
            'esCorrecta'=>false,
            'pregunta_id'=>'210'
        ]);
    }
}