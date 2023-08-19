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
        Respuesta::create([
            'texto'=>'Maestros',
            'esCorrecta'=>false,
            'pregunta_id'=>'211'
        ]);
        Respuesta::create([
            'texto'=>'Científicos',
            'esCorrecta'=>false,
            'pregunta_id'=>'211'
        ]);
        Respuesta::create([
            'texto'=>'Astrólogos',
            'esCorrecta'=>false,
            'pregunta_id'=>'211'
        ]);
        Respuesta::create([
            'texto'=>'Filósofos',
            'esCorrecta'=>true,
            'pregunta_id'=>'211'
        ]);
        Respuesta::create([
            'texto'=>'Empíricos',
            'esCorrecta'=>false,
            'pregunta_id'=>'211'
        ]);

        Pregunta::create([
            'texto' => 'Sócrates y Platón analizaron la mente del hombre, ellos eran:',
            'area_id' => '3'
        ]);
        Respuesta::create([
            'texto'=>'Psicólogos',
            'esCorrecta'=>false,
            'pregunta_id'=>'212'
        ]);
        Respuesta::create([
            'texto'=>'Filósofos',
            'esCorrecta'=>true,
            'pregunta_id'=>'212'
        ]);
        Respuesta::create([
            'texto'=>'Antropólogos',
            'esCorrecta'=>false,
            'pregunta_id'=>'212'
        ]);
        Respuesta::create([
            'texto'=>'Curanderos',
            'esCorrecta'=>false,
            'pregunta_id'=>'212'
        ]);
        Respuesta::create([
            'texto'=>'Astrólogos',
            'esCorrecta'=>false,
            'pregunta_id'=>'212'
        ]);

        Pregunta::create([
            'texto' => 'La palabra psicología quiere decir:',
            'area_id' => '3'
        ]);
        Respuesta::create([
            'texto'=>'Estudio de la cultura humana',
            'esCorrecta'=>false,
            'pregunta_id'=>'213'
        ]);
        Respuesta::create([
            'texto'=>'Cuerpo y alma',
            'esCorrecta'=>false,
            'pregunta_id'=>'213'
        ]);
        Respuesta::create([
            'texto'=>'Estudio del alma',
            'esCorrecta'=>true,
            'pregunta_id'=>'213'
        ]);
        Respuesta::create([
            'texto'=>'Estudio del karma',
            'esCorrecta'=>false,
            'pregunta_id'=>'213'
        ]);
        Respuesta::create([
            'texto'=>'Tratado de conocimiento',
            'esCorrecta'=>false,
            'pregunta_id'=>'213'
        ]);

        Pregunta::create([
            'texto' => 'Las bases que sustentan la psicología son:',
            'area_id' => '3'
        ]);
        Respuesta::create([
            'texto'=>'La filosofía y la fisiología',
            'esCorrecta'=>true,
            'pregunta_id'=>'214'
        ]);
        Respuesta::create([
            'texto'=>'La biología y la geografía',
            'esCorrecta'=>false,
            'pregunta_id'=>'214'
        ]);
        Respuesta::create([
            'texto'=>'La anatomía y la historia del hombre',
            'esCorrecta'=>false,
            'pregunta_id'=>'214'
        ]);
        Respuesta::create([
            'texto'=>'La filosofía y la química',
            'esCorrecta'=>false,
            'pregunta_id'=>'214'
        ]);
        Respuesta::create([
            'texto'=>'La fisiología y la matemática',
            'esCorrecta'=>false,
            'pregunta_id'=>'214'
        ]);

        Pregunta::create([
            'texto' => 'Es el estudio de la estructura de la mente, es la corriente del:',
            'area_id' => '3'
        ]);
        Respuesta::create([
            'texto'=>'La Gestalt',
            'esCorrecta'=>false,
            'pregunta_id'=>'215'
        ]);
        Respuesta::create([
            'texto'=>'Funcionalismo',
            'esCorrecta'=>false,
            'pregunta_id'=>'215'
        ]);
        Respuesta::create([
            'texto'=>'Estructuralismo',
            'esCorrecta'=>true,
            'pregunta_id'=>'215'
        ]);
        Respuesta::create([
            'texto'=>'Humanismo',
            'esCorrecta'=>false,
            'pregunta_id'=>'215'
        ]);
        Respuesta::create([
            'texto'=>'Cognitivismo',
            'esCorrecta'=>false,
            'pregunta_id'=>'215'
        ]);

        Pregunta::create([
            'texto' => 'Skinner es uno de los autores que proponen la teoría del:',
            'area_id' => '3'
        ]);
        Respuesta::create([
            'texto'=>'Conductismo',
            'esCorrecta'=>true,
            'pregunta_id'=>'216'
        ]);
        Respuesta::create([
            'texto'=>'Psicoanálisis',
            'esCorrecta'=>false,
            'pregunta_id'=>'216'
        ]);
        Respuesta::create([
            'texto'=>'Funcionalismo',
            'esCorrecta'=>false,
            'pregunta_id'=>'216'
        ]);
        Respuesta::create([
            'texto'=>'Cognitiva',
            'esCorrecta'=>false,
            'pregunta_id'=>'216'
        ]);
        Respuesta::create([
            'texto'=>'Estructuralismo',
            'esCorrecta'=>false,
            'pregunta_id'=>'216'
        ]);

        Pregunta::create([
            'texto' => '¿Cuál es la teoría que plantea el estudio de los procesos mentales y la forma en la que procesa la información?',
            'area_id' => '3'
        ]);
        Respuesta::create([
            'texto'=>'Funcionalismo',
            'esCorrecta'=>false,
            'pregunta_id'=>'217'
        ]);
        Respuesta::create([
            'texto'=>'Estructuralismo',
            'esCorrecta'=>false,
            'pregunta_id'=>'217'
        ]);
        Respuesta::create([
            'texto'=>'Psicoanálisis',
            'esCorrecta'=>false,
            'pregunta_id'=>'217'
        ]);
        Respuesta::create([
            'texto'=>'Conductismo',
            'esCorrecta'=>false,
            'pregunta_id'=>'217'
        ]);
        Respuesta::create([
            'texto'=>'Cognitiva',
            'esCorrecta'=>true,
            'pregunta_id'=>'217'
        ]);

        Pregunta::create([
            'texto' => '¿Que estudia la psicología del trabajo o industrial?',
            'area_id' => '3'
        ]);
        Respuesta::create([
            'texto'=>'Estudia la conducta y los trastornos mentales',
            'esCorrecta'=>false,
            'pregunta_id'=>'218'
        ]);
        Respuesta::create([
            'texto'=>'Estudia los problemas de aprendizaje',
            'esCorrecta'=>false,
            'pregunta_id'=>'218'
        ]);
        Respuesta::create([
            'texto'=>'Estudia todo aquello que permita mejorar la producción del
            trabajo',
            'esCorrecta'=>true,
            'pregunta_id'=>'218'
        ]);
        Respuesta::create([
            'texto'=>'Estudia la personalidad',
            'esCorrecta'=>false,
            'pregunta_id'=>'218'
        ]);
        Respuesta::create([
            'texto'=>'Estudia las maquinas',
            'esCorrecta'=>false,
            'pregunta_id'=>'218'
        ]);

        Pregunta::create([
            'texto' => 'Se encarga de los problemas mentales y su diagnóstico, es la psicología:',
            'area_id' => '3'
        ]);
        Respuesta::create([
            'texto'=>'Clínica',
            'esCorrecta'=>true,
            'pregunta_id'=>'219'
        ]);
        Respuesta::create([
            'texto'=>'Educativa',
            'esCorrecta'=>false,
            'pregunta_id'=>'219'
        ]);
        Respuesta::create([
            'texto'=>'Experimental',
            'esCorrecta'=>false,
            'pregunta_id'=>'219'
        ]);
        Respuesta::create([
            'texto'=>'Forense',
            'esCorrecta'=>false,
            'pregunta_id'=>'219'
        ]);
        Respuesta::create([
            'texto'=>'Educativa',
            'esCorrecta'=>false,
            'pregunta_id'=>'219'
        ]);

        Pregunta::create([
            'texto' => '¿Cuál es la función de las células sostén?',
            'area_id' => '3'
        ]);
        Respuesta::create([
            'texto'=>'Mantener las neuronas sujetas en lugares específicos',
            'esCorrecta'=>true,
            'pregunta_id'=>'220'
        ]);
        Respuesta::create([
            'texto'=>'Garantizar el alimento de la neurona',
            'esCorrecta'=>false,
            'pregunta_id'=>'220'
        ]);
        Respuesta::create([
            'texto'=>'Formar el núcleo',
            'esCorrecta'=>false,
            'pregunta_id'=>'220'
        ]);
        Respuesta::create([
            'texto'=>'Modificar el axón',
            'esCorrecta'=>false,
            'pregunta_id'=>'220'
        ]);
        Respuesta::create([
            'texto'=>'Ajustar los niveles de potasio',
            'esCorrecta'=>false,
            'pregunta_id'=>'220'
        ]);

        Pregunta::create([
            'texto' => '¿Qué sistema está compuesto por el encéfalo y medula espinal?',
            'area_id' => '3'
        ]);
        Respuesta::create([
            'texto'=>'El sistema nervioso central',
            'esCorrecta'=>true,
            'pregunta_id'=>'221'
        ]);
        Respuesta::create([
            'texto'=>'El sistema nervioso autónomo',
            'esCorrecta'=>false,
            'pregunta_id'=>'221'
        ]);
        Respuesta::create([
            'texto'=>'El sistema endocrino',
            'esCorrecta'=>false,
            'pregunta_id'=>'221'
        ]);
        Respuesta::create([
            'texto'=>'El sistema periférico',
            'esCorrecta'=>false,
            'pregunta_id'=>'221'
        ]);
        Respuesta::create([
            'texto'=>'El sistema parasimpático',
            'esCorrecta'=>false,
            'pregunta_id'=>'221'
        ]);

        Pregunta::create([
            'texto' => 'El cerebro esta compuesto básicamente por:',
            'area_id' => '3'
        ]);
        Respuesta::create([
            'texto'=>'El hipotálamo y el tálamo',
            'esCorrecta'=>false,
            'pregunta_id'=>'222'
        ]);
        Respuesta::create([
            'texto'=>'Dos lóbulos o hemisferios',
            'esCorrecta'=>true,
            'pregunta_id'=>'222'
        ]);
        Respuesta::create([
            'texto'=>'El sistema nervioso central',
            'esCorrecta'=>false,
            'pregunta_id'=>'222'
        ]);
        Respuesta::create([
            'texto'=>'El diencéfalo y el telencéfalo',
            'esCorrecta'=>false,
            'pregunta_id'=>'222'
        ]);
        Respuesta::create([
            'texto'=>'El sistema parasimpático',
            'esCorrecta'=>false,
            'pregunta_id'=>'222'
        ]);

        Pregunta::create([
            'texto' => 'Las partes que componen el diencéfalo son:',
            'area_id' => '3'
        ]);
        Respuesta::create([
            'texto'=>'Hipotálamo y tálamo',
            'esCorrecta'=>true,
            'pregunta_id'=>'223'
        ]);
        Respuesta::create([
            'texto'=>'Mesencéfalo y cerebro',
            'esCorrecta'=>false,
            'pregunta_id'=>'223'
        ]);
        Respuesta::create([
            'texto'=>'Neurona y dendritas',
            'esCorrecta'=>false,
            'pregunta_id'=>'223'
        ]);
        Respuesta::create([
            'texto'=>'Dendritas y axón',
            'esCorrecta'=>false,
            'pregunta_id'=>'223'
        ]);
        Respuesta::create([
            'texto'=>'Ninguna de las anteriores ',
            'esCorrecta'=>false,
            'pregunta_id'=>'223'
        ]);

        Pregunta::create([
            'texto' => 'Tiene la capacidad de controlar la mano derecha y la habilidad para los números',
            'area_id' => '3'
        ]);
        Respuesta::create([
            'texto'=>'Hemisferio izquierdo',
            'esCorrecta'=>true,
            'pregunta_id'=>'224'
        ]);
        Respuesta::create([
            'texto'=>'Hemisferio derecho',
            'esCorrecta'=>false,
            'pregunta_id'=>'224'
        ]);
        Respuesta::create([
            'texto'=>'Ambos hemisferios',
            'esCorrecta'=>false,
            'pregunta_id'=>'224'
        ]);
        Respuesta::create([
            'texto'=>'Hemisferio superior',
            'esCorrecta'=>false,
            'pregunta_id'=>'224'
        ]);
        Respuesta::create([
            'texto'=>'Todas las anteriores',
            'esCorrecta'=>false,
            'pregunta_id'=>'224'
        ]);

        Pregunta::create([
            'texto' => 'El encéfalo está compuesto por:',
            'area_id' => '3'
        ]);
        Respuesta::create([
            'texto'=>'Medula espinal, axón, núcleo',
            'esCorrecta'=>false,
            'pregunta_id'=>'225'
        ]);
        Respuesta::create([
            'texto'=>'Nervios craneales, sinapsis',
            'esCorrecta'=>false,
            'pregunta_id'=>'225'
        ]);
        Respuesta::create([
            'texto'=>'Cerebro, cerebelo, diencéfalo, mesencéfalo, protuberancia y bulbo raquídeo',
            'esCorrecta'=>true,
            'pregunta_id'=>'225'
        ]);
        Respuesta::create([
            'texto'=>'Neuronas y células',
            'esCorrecta'=>false,
            'pregunta_id'=>'225'
        ]);
        Respuesta::create([
            'texto'=>'Todas las anteriores',
            'esCorrecta'=>false,
            'pregunta_id'=>'225'
        ]);

        Pregunta::create([
            'texto' => '.¿Cuáles son las funciones del sistema central?',
            'area_id' => '3'
        ]);
        Respuesta::create([
            'texto'=>'Sensitivo',
            'esCorrecta'=>false,
            'pregunta_id'=>'226'
        ]);
        Respuesta::create([
            'texto'=>'Integrador',
            'esCorrecta'=>false,
            'pregunta_id'=>'226'
        ]);
        Respuesta::create([
            'texto'=>'Motor',
            'esCorrecta'=>false,
            'pregunta_id'=>'226'
        ]);
        Respuesta::create([
            'texto'=>'Inciso a,b y c',
            'esCorrecta'=>true,
            'pregunta_id'=>'226'
        ]);
        Respuesta::create([
            'texto'=>'Sensitivo, integrador y voluntario',
            'esCorrecta'=>false,
            'pregunta_id'=>'226'
        ]);

        Pregunta::create([
            'texto' => '¿Cuál es la función del sistema nervioso simpático?',
            'area_id' => '3'
        ]);
        Respuesta::create([
            'texto'=>'Se encarga de preparar al cuerpo para utilizar la energía',
            'esCorrecta'=>true,
            'pregunta_id'=>'227'
        ]);
        Respuesta::create([
            'texto'=>'Comunica la ordenes que emite el pensamiento',
            'esCorrecta'=>false,
            'pregunta_id'=>'227'
        ]);
        Respuesta::create([
            'texto'=>'Comunica los diferentes órganos entre si',
            'esCorrecta'=>false,
            'pregunta_id'=>'227'
        ]);
        Respuesta::create([
            'texto'=>'Comunica al cerebro con el exterior',
            'esCorrecta'=>false,
            'pregunta_id'=>'227'
        ]);
        Respuesta::create([
            'texto'=>'Organiza la información',
            'esCorrecta'=>false,
            'pregunta_id'=>'227'
        ]);

        Pregunta::create([
            'texto' => '¿Cuál es la función del sistema nervioso parasimpático?',
            'area_id' => '3'
        ]);
        Respuesta::create([
            'texto'=>'Se encarga de preparar al cuerpo para utilizar energía',
            'esCorrecta'=>false,
            'pregunta_id'=>'228'
        ]);
        Respuesta::create([
            'texto'=>'Comunica las ordenes que emite el pensamiento ',
            'esCorrecta'=>false,
            'pregunta_id'=>'228'
        ]);
        Respuesta::create([
            'texto'=>'Estimula los procesos que permitan la conservación de energía',
            'esCorrecta'=>true,
            'pregunta_id'=>'228'
        ]);
        Respuesta::create([
            'texto'=>'Comunica al cerebro con el exterior',
            'esCorrecta'=>false,
            'pregunta_id'=>'228'
        ]);
        Respuesta::create([
            'texto'=>'Organizar la información que genera las hormonas',
            'esCorrecta'=>false,
            'pregunta_id'=>'228'
        ]);

        Pregunta::create([
            'texto' => '¿A qué glándula pertenece la hormona tiroides?',
            'area_id' => '3'
        ]);
        Respuesta::create([
            'texto'=>'La hipófisis',
            'esCorrecta'=>false,
            'pregunta_id'=>'229'
        ]);
        Respuesta::create([
            'texto'=>'El páncreas',
            'esCorrecta'=>false,
            'pregunta_id'=>'229'
        ]);
        Respuesta::create([
            'texto'=>'Pituitaria',
            'esCorrecta'=>true,
            'pregunta_id'=>'229'
        ]);
        Respuesta::create([
            'texto'=>'Testosterona',
            'esCorrecta'=>false,
            'pregunta_id'=>'229'
        ]);
        Respuesta::create([
            'texto'=>'Piropentina',
            'esCorrecta'=>false,
            'pregunta_id'=>'229'
        ]);

        Pregunta::create([
            'texto' => 'La concentración en un foco determinado se denomina:',
            'area_id' => '3'
        ]);
        Respuesta::create([
            'texto'=>'Memoria',
            'esCorrecta'=>false,
            'pregunta_id'=>'230'
        ]);
        Respuesta::create([
            'texto'=>'Atención',
            'esCorrecta'=>true,
            'pregunta_id'=>'230'
        ]);
        Respuesta::create([
            'texto'=>'Sensación',
            'esCorrecta'=>false,
            'pregunta_id'=>'230'
        ]);
        Respuesta::create([
            'texto'=>'Percepción',
            'esCorrecta'=>false,
            'pregunta_id'=>'230'
        ]);
        Respuesta::create([
            'texto'=>'Inteligencia',
            'esCorrecta'=>false,
            'pregunta_id'=>'230'
        ]);

        Pregunta::create([
            'texto' => '¿Qué estímulos pueden activar nuestros receptores sensoriales?',
            'area_id' => '3'
        ]);
        Respuesta::create([
            'texto'=>'Los estímulos táctiles',
            'esCorrecta'=>false,
            'pregunta_id'=>'231'
        ]);
        Respuesta::create([
            'texto'=>'Los estímulos visuales',
            'esCorrecta'=>false,
            'pregunta_id'=>'231'
        ]);
        Respuesta::create([
            'texto'=>'Todos los estímulos que nos rodean',
            'esCorrecta'=>true,
            'pregunta_id'=>'231'
        ]);
        Respuesta::create([
            'texto'=>'Los estímulos auditivos',
            'esCorrecta'=>false,
            'pregunta_id'=>'231'
        ]);
        Respuesta::create([
            'texto'=>'Los estímulos gustativos',
            'esCorrecta'=>false,
            'pregunta_id'=>'231'
        ]);

        Pregunta::create([
            'texto' => 'El sistema nervioso periférico es:',
            'area_id' => '3'
        ]);
        Respuesta::create([
            'texto'=>'Es una red ramificada de neuronas que recorre todo nuestro cuerpo',
            'esCorrecta'=>true,
            'pregunta_id'=>'232'
        ]);
        Respuesta::create([
            'texto'=>' Es una red ramificada de información que recorre todo nuestro cuerpo',
            'esCorrecta'=>false,
            'pregunta_id'=>'232'
        ]);
        Respuesta::create([
            'texto'=>'Es una red ramificada de células que recorre todo nuestro cuerpo',
            'esCorrecta'=>false,
            'pregunta_id'=>'232'
        ]);
        Respuesta::create([
            'texto'=>'Es una red ramificada de membranas que recorre todo nuestro cuerpo',
            'esCorrecta'=>false,
            'pregunta_id'=>'232'
        ]);
        Respuesta::create([
            'texto'=>'Es una red ramificada de nervios que recorre todo nuestro cuerpo',
            'esCorrecta'=>false,
            'pregunta_id'=>'232'
        ]);

        Pregunta::create([
            'texto' => 'En la teoría del psicoanálisis de Sigmund Freud intentó explicar:',
            'area_id' => '3'
        ]);
        Respuesta::create([
            'texto'=>'El funcionamiento psíquico humano',
            'esCorrecta'=>true,
            'pregunta_id'=>'233'
        ]);
        Respuesta::create([
            'texto'=>'Los eventos observables del comportamiento',
            'esCorrecta'=>false,
            'pregunta_id'=>'233'
        ]);
        Respuesta::create([
            'texto'=>'El conocimiento de la mente ',
            'esCorrecta'=>false,
            'pregunta_id'=>'233'
        ]);
        Respuesta::create([
            'texto'=>'La estructura básica de la mente',
            'esCorrecta'=>false,
            'pregunta_id'=>'233'
        ]);
        Respuesta::create([
            'texto'=>'La neurona',
            'esCorrecta'=>false,
            'pregunta_id'=>'233'
        ]);

        Pregunta::create([
            'texto' => 'El sistema nervioso parasimpático se encarga de:',
            'area_id' => '3'
        ]);
        Respuesta::create([
            'texto'=>'Preparar al cuerpo para utilizar energía',
            'esCorrecta'=>false,
            'pregunta_id'=>'234'
        ]);
        Respuesta::create([
            'texto'=>'Bombear sangre para que el cuerpo pueda acelerar su movimiento',
            'esCorrecta'=>false,
            'pregunta_id'=>'234'
        ]);
        Respuesta::create([
            'texto'=>'Conservar la energía del cuerpo',
            'esCorrecta'=>true,
            'pregunta_id'=>'234'
        ]);
        Respuesta::create([
            'texto'=>'Llevar información desde afuera hacia la médula y el encéfalo',
            'esCorrecta'=>false,
            'pregunta_id'=>'234'
        ]);
        Respuesta::create([
            'texto'=>'Liberar adrenalina',
            'esCorrecta'=>false,
            'pregunta_id'=>'234'
        ]);

        Pregunta::create([
            'texto' => '¿Cuál es la teoría psicológica que se centra en la conducta que puede ser observada?',
            'area_id' => '3'
        ]);
        Respuesta::create([
            'texto'=>'El Estructuralismo',
            'esCorrecta'=>false,
            'pregunta_id'=>'235'
        ]);
        Respuesta::create([
            'texto'=>'El Conductismo',
            'esCorrecta'=>true,
            'pregunta_id'=>'235'
        ]);
        Respuesta::create([
            'texto'=>'El Psicoanálisis',
            'esCorrecta'=>false,
            'pregunta_id'=>'235'
        ]);
        Respuesta::create([
            'texto'=>'La Observación',
            'esCorrecta'=>false,
            'pregunta_id'=>'235'
        ]);
        Respuesta::create([
            'texto'=>'El Humanismo',
            'esCorrecta'=>false,
            'pregunta_id'=>'235'
        ]);

        Pregunta::create([
            'texto' => 'Los psicólogos clínicos se concentran en:',
            'area_id' => '3'
        ]);
        Respuesta::create([
            'texto'=>'Evaluación, diagnóstico y tratamiento de problemas de aprendizaje',
            'esCorrecta'=>false,
            'pregunta_id'=>'236'
        ]);
        Respuesta::create([
            'texto'=>'Evaluación, diagnóstico y tratamiento de problemas laborales',
            'esCorrecta'=>false,
            'pregunta_id'=>'236'
        ]);
        Respuesta::create([
            'texto'=>'Evaluación, diagnóstico y tratamiento de la genética',
            'esCorrecta'=>false,
            'pregunta_id'=>'236'
        ]);
        Respuesta::create([
            'texto'=>'Evaluación, diagnóstico y tratamiento de trastornos mentales',
            'esCorrecta'=>false,
            'pregunta_id'=>'236'
        ]);
        Respuesta::create([
            'texto'=>'Evaluación, diagnóstico y tratamiento de ETS',
            'esCorrecta'=>false,
            'pregunta_id'=>'236'
        ]);

        Pregunta::create([
            'texto' => 'La unidad más básica del sistema nervioso es:',
            'area_id' => '3'
        ]);
        Respuesta::create([
            'texto'=>'La neurona',
            'esCorrecta'=>true,
            'pregunta_id'=>'237'
        ]);
        Respuesta::create([
            'texto'=>'El axón',
            'esCorrecta'=>false,
            'pregunta_id'=>'237'
        ]);
        Respuesta::create([
            'texto'=>'El núcleo',
            'esCorrecta'=>false,
            'pregunta_id'=>'237'
        ]);
        Respuesta::create([
            'texto'=>'La dendrita',
            'esCorrecta'=>false,
            'pregunta_id'=>'237'
        ]);
        Respuesta::create([
            'texto'=>'los nervios',
            'esCorrecta'=>false,
            'pregunta_id'=>'237'
        ]);

        Pregunta::create([
            'texto' => 'Es una red ramificada de nervios que recorre todo el cuerpo:',
            'area_id' => '3'
        ]);
        Respuesta::create([
            'texto'=>'el sistema nervioso autónomo',
            'esCorrecta'=>false,
            'pregunta_id'=>'238'
        ]);
        Respuesta::create([
            'texto'=>'el sistema nervioso automático',
            'esCorrecta'=>false,
            'pregunta_id'=>'238'
        ]);
        Respuesta::create([
            'texto'=>'el sistema nervioso periférico',
            'esCorrecta'=>true,
            'pregunta_id'=>'238'
        ]);
        Respuesta::create([
            'texto'=>'el sistema nervioso peritoneal',
            'esCorrecta'=>false,
            'pregunta_id'=>'238'
        ]);
        Respuesta::create([
            'texto'=>'el sistema nervioso ramificado',
            'esCorrecta'=>false,
            'pregunta_id'=>'238'
        ]);

        Pregunta::create([
            'texto' => 'El sistema nervioso cumple 3 funciones:',
            'area_id' => '3'
        ]);
        Respuesta::create([
            'texto'=>'función sensitiva, integradora y motora',
            'esCorrecta'=>true,
            'pregunta_id'=>'239'
        ]);
        Respuesta::create([
            'texto'=>'función nerviosa, automática y cerebral',
            'esCorrecta'=>false,
            'pregunta_id'=>'239'
        ]);
        Respuesta::create([
            'texto'=>'función cerebral motora e integradora',
            'esCorrecta'=>false,
            'pregunta_id'=>'239'
        ]);
        Respuesta::create([
            'texto'=>'función autónoma, periférica y nerviosa',
            'esCorrecta'=>false,
            'pregunta_id'=>'239'
        ]);
        Respuesta::create([
            'texto'=>'función sensitiva motora y nerviosa',
            'esCorrecta'=>false,
            'pregunta_id'=>'239'
        ]);

        Pregunta::create([
            'texto' => '¿Que es el sistema endocrino?',
            'area_id' => '3'
        ]);
        Respuesta::create([
            'texto'=>'es un sistema de regulación física de nuestro cuerpo',
            'esCorrecta'=>false,
            'pregunta_id'=>'240'
        ]);
        Respuesta::create([
            'texto'=>'es un sistema de regulación biología de nuestro cuerpo',
            'esCorrecta'=>false,
            'pregunta_id'=>'240'
        ]);
        Respuesta::create([
            'texto'=>'es un sistema de regulación química de nuestro cuerpo',
            'esCorrecta'=>true,
            'pregunta_id'=>'240'
        ]);
        Respuesta::create([
            'texto'=>'es un sistema de regulación de nuestro cuerpo',
            'esCorrecta'=>false,
            'pregunta_id'=>'240'
        ]);
        Respuesta::create([
            'texto'=>'es un sistema de regulación nerviosa de nuestro cuerpo',
            'esCorrecta'=>false,
            'pregunta_id'=>'240'
        ]);

        Pregunta::create([
            'texto' => 'Los objetivos de las bases biológicas de la conducta:',
            'area_id' => '3'
        ]);
        Respuesta::create([
            'texto'=>'establecer las bases biológicas que intervienen en el desarrollo de las conductas de ser humano',
            'esCorrecta'=>true,
            'pregunta_id'=>'241'
        ]);
        Respuesta::create([
            'texto'=>'establecer las bases químicas que intervienen en el desarrollo de las conductas de ser humano',
            'esCorrecta'=>false,
            'pregunta_id'=>'241'
        ]);
        Respuesta::create([
            'texto'=>'establecer las bases fisiológicas que intervienen en el desarrollo de las conductas de ser humano',
            'esCorrecta'=>false,
            'pregunta_id'=>'241'
        ]);
        Respuesta::create([
            'texto'=>'establecer las bases biológicas que intervienen en el desarrollo de las emociones de ser humano',
            'esCorrecta'=>false,
            'pregunta_id'=>'241'
        ]);
        Respuesta::create([
            'texto'=>'establecer las bases químicas que intervienen en el desarrollo de las emociones de ser humano',
            'esCorrecta'=>false,
            'pregunta_id'=>'241'
        ]);

        Pregunta::create([
            'texto' => 'El pensamiento es un proceso que consiste en:',
            'area_id' => '3'
        ]);
        Respuesta::create([
            'texto'=>'La generación de serotonina',
            'esCorrecta'=>false,
            'pregunta_id'=>'242'
        ]);
        Respuesta::create([
            'texto'=>'La obtención de información a partir de los receptores',
            'esCorrecta'=>true,
            'pregunta_id'=>'242'
        ]);
        Respuesta::create([
            'texto'=>'La reducción del estrés',
            'esCorrecta'=>false,
            'pregunta_id'=>'242'
        ]);
        Respuesta::create([
            'texto'=>'La generación de endorfinas',
            'esCorrecta'=>false,
            'pregunta_id'=>'242'
        ]);
        Respuesta::create([
            'texto'=>'Manipular la información que disponemos del mundo externo',
            'esCorrecta'=>false,
            'pregunta_id'=>'242'
        ]);

        Pregunta::create([
            'texto' => '¿Cómo se llama la unión de dos o más conceptos en el pensamiento?',
            'area_id' => '3'
        ]);
        Respuesta::create([
            'texto'=>'Conceptos',
            'esCorrecta'=>false,
            'pregunta_id'=>'243'
        ]);
        Respuesta::create([
            'texto'=>'Imágenes',
            'esCorrecta'=>false,
            'pregunta_id'=>'243'
        ]);
        Respuesta::create([
            'texto'=>'Preposiciones',
            'esCorrecta'=>true,
            'pregunta_id'=>'243'
        ]);
        Respuesta::create([
            'texto'=>'Juicios',
            'esCorrecta'=>false,
            'pregunta_id'=>'243'
        ]);
        Respuesta::create([
            'texto'=>'Valores',
            'esCorrecta'=>false,
            'pregunta_id'=>'243'
        ]);

        Pregunta::create([
            'texto' => 'El proceso mediante el cual se transforma la información para extraer conclusiones, se denomina:',
            'area_id' => '3'
        ]);
        Respuesta::create([
            'texto'=>'Razonamiento',
            'esCorrecta'=>true,
            'pregunta_id'=>'244'
        ]);
        Respuesta::create([
            'texto'=>'Pensamiento',
            'esCorrecta'=>false,
            'pregunta_id'=>'244'
        ]);
        Respuesta::create([
            'texto'=>'Inteligencia',
            'esCorrecta'=>false,
            'pregunta_id'=>'244'
        ]);
        Respuesta::create([
            'texto'=>'Memoria',
            'esCorrecta'=>false,
            'pregunta_id'=>'244'
        ]);
        Respuesta::create([
            'texto'=>'Atención',
            'esCorrecta'=>false,
            'pregunta_id'=>'244'
        ]);

        Pregunta::create([
            'texto' => 'Es la capacidad sensitiva que proviene de los umbrales de percepción, estamos hablando de:',
            'area_id' => '3'
        ]);
        Respuesta::create([
            'texto'=>'Sensación',
            'esCorrecta'=>true,
            'pregunta_id'=>'245'
        ]);
        Respuesta::create([
            'texto'=>'Pensamiento',
            'esCorrecta'=>false,
            'pregunta_id'=>'245'
        ]);
        Respuesta::create([
            'texto'=>'Razonamiento',
            'esCorrecta'=>false,
            'pregunta_id'=>'245'
        ]);
        Respuesta::create([
            'texto'=>'Memoria',
            'esCorrecta'=>false,
            'pregunta_id'=>'245'
        ]);
        Respuesta::create([
            'texto'=>'Percepción',
            'esCorrecta'=>false,
            'pregunta_id'=>'245'
        ]);

        Pregunta::create([
            'texto' => 'Es todo el rango en el que se puede identificar la variable de la intensidad del estímulo, es el:',
            'area_id' => '3'
        ]);
        Respuesta::create([
            'texto'=>'Umbral mínimo',
            'esCorrecta'=>false,
            'pregunta_id'=>'246'
        ]);
        Respuesta::create([
            'texto'=>'Umbral diferencial',
            'esCorrecta'=>true,
            'pregunta_id'=>'246'
        ]);
        Respuesta::create([
            'texto'=>'Umbral máximo',
            'esCorrecta'=>false,
            'pregunta_id'=>'246'
        ]);
        Respuesta::create([
            'texto'=>'Umbral básico',
            'esCorrecta'=>false,
            'pregunta_id'=>'246'
        ]);
        Respuesta::create([
            'texto'=>'Umbral intenso',
            'esCorrecta'=>false,
            'pregunta_id'=>'246'
        ]);

        Pregunta::create([
            'texto' => '¿Qué tipo de memoria se encarga de recibir la información que llega de la memoria sensorial y luego la analiza?',
            'area_id' => '3'
        ]);
        Respuesta::create([
            'texto'=>'Memoria sensorial',
            'esCorrecta'=>false,
            'pregunta_id'=>'247'
        ]);
        Respuesta::create([
            'texto'=>'Memoria a corto plazo',
            'esCorrecta'=>true,
            'pregunta_id'=>'247'
        ]);
        Respuesta::create([
            'texto'=>'Memoria a largo plazo',
            'esCorrecta'=>false,
            'pregunta_id'=>'247'
        ]);
        Respuesta::create([
            'texto'=>'Memoria semántica',
            'esCorrecta'=>false,
            'pregunta_id'=>'247'
        ]);
        Respuesta::create([
            'texto'=>'Memoria abstracta',
            'esCorrecta'=>false,
            'pregunta_id'=>'247'
        ]);

        Pregunta::create([
            'texto' => '¿Dentro de las emociones, a que se le denomina estados cognitivos subjetivos?',
            'area_id' => '3'
        ]);
        Respuesta::create([
            'texto'=>'Al tiempo que se invierte en la emoción',
            'esCorrecta'=>false,
            'pregunta_id'=>'248'
        ]);
        Respuesta::create([
            'texto'=>'Al valor que le damos a los cambios fisiológicos y la respuesta de la conducta',
            'esCorrecta'=>false,
            'pregunta_id'=>'244'
        ]);
        Respuesta::create([
            'texto'=>'Inteligencia',
            'esCorrecta'=>false,
            'pregunta_id'=>'244'
        ]);
        Respuesta::create([
            'texto'=>'Memoria',
            'esCorrecta'=>false,
            'pregunta_id'=>'244'
        ]);
        Respuesta::create([
            'texto'=>'Atención',
            'esCorrecta'=>false,
            'pregunta_id'=>'244'
        ]);

        Pregunta::create([
            'texto' => 'El proceso mediante el cual se transforma la información para extraer conclusiones, se denomina:',
            'area_id' => '3'
        ]);
        Respuesta::create([
            'texto'=>'Razonamiento',
            'esCorrecta'=>true,
            'pregunta_id'=>'244'
        ]);
        Respuesta::create([
            'texto'=>'Pensamiento',
            'esCorrecta'=>false,
            'pregunta_id'=>'244'
        ]);
        Respuesta::create([
            'texto'=>'Inteligencia',
            'esCorrecta'=>false,
            'pregunta_id'=>'244'
        ]);
        Respuesta::create([
            'texto'=>'Memoria',
            'esCorrecta'=>false,
            'pregunta_id'=>'244'
        ]);
        Respuesta::create([
            'texto'=>'Atención',
            'esCorrecta'=>false,
            'pregunta_id'=>'244'
        ]);

        Pregunta::create([
            'texto' => 'El proceso mediante el cual se transforma la información para extraer conclusiones, se denomina:',
            'area_id' => '3'
        ]);
        Respuesta::create([
            'texto'=>'Razonamiento',
            'esCorrecta'=>true,
            'pregunta_id'=>'244'
        ]);
        Respuesta::create([
            'texto'=>'Pensamiento',
            'esCorrecta'=>false,
            'pregunta_id'=>'244'
        ]);
        Respuesta::create([
            'texto'=>'Inteligencia',
            'esCorrecta'=>false,
            'pregunta_id'=>'244'
        ]);
        Respuesta::create([
            'texto'=>'Memoria',
            'esCorrecta'=>false,
            'pregunta_id'=>'244'
        ]);
        Respuesta::create([
            'texto'=>'Atención',
            'esCorrecta'=>false,
            'pregunta_id'=>'244'
        ]);

        Pregunta::create([
            'texto' => 'El proceso mediante el cual se transforma la información para extraer conclusiones, se denomina:',
            'area_id' => '3'
        ]);
        Respuesta::create([
            'texto'=>'Razonamiento',
            'esCorrecta'=>true,
            'pregunta_id'=>'244'
        ]);
        Respuesta::create([
            'texto'=>'Pensamiento',
            'esCorrecta'=>false,
            'pregunta_id'=>'244'
        ]);
        Respuesta::create([
            'texto'=>'Inteligencia',
            'esCorrecta'=>false,
            'pregunta_id'=>'244'
        ]);
        Respuesta::create([
            'texto'=>'Memoria',
            'esCorrecta'=>false,
            'pregunta_id'=>'244'
        ]);
        Respuesta::create([
            'texto'=>'Atención',
            'esCorrecta'=>false,
            'pregunta_id'=>'244'
        ]);

        Pregunta::create([
            'texto' => 'El proceso mediante el cual se transforma la información para extraer conclusiones, se denomina:',
            'area_id' => '3'
        ]);
        Respuesta::create([
            'texto'=>'Razonamiento',
            'esCorrecta'=>true,
            'pregunta_id'=>'244'
        ]);
        Respuesta::create([
            'texto'=>'Pensamiento',
            'esCorrecta'=>false,
            'pregunta_id'=>'244'
        ]);
        Respuesta::create([
            'texto'=>'Inteligencia',
            'esCorrecta'=>false,
            'pregunta_id'=>'244'
        ]);
        Respuesta::create([
            'texto'=>'Memoria',
            'esCorrecta'=>false,
            'pregunta_id'=>'244'
        ]);
        Respuesta::create([
            'texto'=>'Atención',
            'esCorrecta'=>false,
            'pregunta_id'=>'244'
        ]);

        Pregunta::create([
            'texto' => 'El proceso mediante el cual se transforma la información para extraer conclusiones, se denomina:',
            'area_id' => '3'
        ]);
        Respuesta::create([
            'texto'=>'Razonamiento',
            'esCorrecta'=>true,
            'pregunta_id'=>'244'
        ]);
        Respuesta::create([
            'texto'=>'Pensamiento',
            'esCorrecta'=>false,
            'pregunta_id'=>'244'
        ]);
        Respuesta::create([
            'texto'=>'Inteligencia',
            'esCorrecta'=>false,
            'pregunta_id'=>'244'
        ]);
        Respuesta::create([
            'texto'=>'Memoria',
            'esCorrecta'=>false,
            'pregunta_id'=>'244'
        ]);
        Respuesta::create([
            'texto'=>'Atención',
            'esCorrecta'=>false,
            'pregunta_id'=>'244'
        ]);

        Pregunta::create([
            'texto' => 'El proceso mediante el cual se transforma la información para extraer conclusiones, se denomina:',
            'area_id' => '3'
        ]);
        Respuesta::create([
            'texto'=>'Razonamiento',
            'esCorrecta'=>true,
            'pregunta_id'=>'244'
        ]);
        Respuesta::create([
            'texto'=>'Pensamiento',
            'esCorrecta'=>false,
            'pregunta_id'=>'244'
        ]);
        Respuesta::create([
            'texto'=>'Inteligencia',
            'esCorrecta'=>false,
            'pregunta_id'=>'244'
        ]);
        Respuesta::create([
            'texto'=>'Memoria',
            'esCorrecta'=>false,
            'pregunta_id'=>'244'
        ]);
        Respuesta::create([
            'texto'=>'Atención',
            'esCorrecta'=>false,
            'pregunta_id'=>'244'
        ]);

        Pregunta::create([
            'texto' => 'El proceso mediante el cual se transforma la información para extraer conclusiones, se denomina:',
            'area_id' => '3'
        ]);
        Respuesta::create([
            'texto'=>'Razonamiento',
            'esCorrecta'=>true,
            'pregunta_id'=>'244'
        ]);
        Respuesta::create([
            'texto'=>'Pensamiento',
            'esCorrecta'=>false,
            'pregunta_id'=>'244'
        ]);
        Respuesta::create([
            'texto'=>'Inteligencia',
            'esCorrecta'=>false,
            'pregunta_id'=>'244'
        ]);
        Respuesta::create([
            'texto'=>'Memoria',
            'esCorrecta'=>false,
            'pregunta_id'=>'244'
        ]);
        Respuesta::create([
            'texto'=>'Atención',
            'esCorrecta'=>false,
            'pregunta_id'=>'244'
        ]);

        Pregunta::create([
            'texto' => 'El proceso mediante el cual se transforma la información para extraer conclusiones, se denomina:',
            'area_id' => '3'
        ]);
        Respuesta::create([
            'texto'=>'Razonamiento',
            'esCorrecta'=>true,
            'pregunta_id'=>'244'
        ]);
        Respuesta::create([
            'texto'=>'Pensamiento',
            'esCorrecta'=>false,
            'pregunta_id'=>'244'
        ]);
        Respuesta::create([
            'texto'=>'Inteligencia',
            'esCorrecta'=>false,
            'pregunta_id'=>'244'
        ]);
        Respuesta::create([
            'texto'=>'Memoria',
            'esCorrecta'=>false,
            'pregunta_id'=>'244'
        ]);
        Respuesta::create([
            'texto'=>'Atención',
            'esCorrecta'=>false,
            'pregunta_id'=>'244'
        ]);

        Pregunta::create([
            'texto' => 'El proceso mediante el cual se transforma la información para extraer conclusiones, se denomina:',
            'area_id' => '3'
        ]);
        Respuesta::create([
            'texto'=>'Razonamiento',
            'esCorrecta'=>true,
            'pregunta_id'=>'244'
        ]);
        Respuesta::create([
            'texto'=>'Pensamiento',
            'esCorrecta'=>false,
            'pregunta_id'=>'244'
        ]);
        Respuesta::create([
            'texto'=>'Inteligencia',
            'esCorrecta'=>false,
            'pregunta_id'=>'244'
        ]);
        Respuesta::create([
            'texto'=>'Memoria',
            'esCorrecta'=>false,
            'pregunta_id'=>'244'
        ]);
        Respuesta::create([
            'texto'=>'Atención',
            'esCorrecta'=>false,
            'pregunta_id'=>'244'
        ]);
        Pregunta::create([
            'texto' => 'El proceso mediante el cual se transforma la información para extraer conclusiones, se denomina:',
            'area_id' => '3'
        ]);
        Respuesta::create([
            'texto'=>'Razonamiento',
            'esCorrecta'=>true,
            'pregunta_id'=>'244'
        ]);
        Respuesta::create([
            'texto'=>'Pensamiento',
            'esCorrecta'=>false,
            'pregunta_id'=>'244'
        ]);
        Respuesta::create([
            'texto'=>'Inteligencia',
            'esCorrecta'=>false,
            'pregunta_id'=>'244'
        ]);
        Respuesta::create([
            'texto'=>'Memoria',
            'esCorrecta'=>false,
            'pregunta_id'=>'244'
        ]);
        Respuesta::create([
            'texto'=>'Atención',
            'esCorrecta'=>false,
            'pregunta_id'=>'244'
        ]);

        Pregunta::create([
            'texto' => 'El proceso mediante el cual se transforma la información para extraer conclusiones, se denomina:',
            'area_id' => '3'
        ]);
        Respuesta::create([
            'texto'=>'Razonamiento',
            'esCorrecta'=>true,
            'pregunta_id'=>'244'
        ]);
        Respuesta::create([
            'texto'=>'Pensamiento',
            'esCorrecta'=>false,
            'pregunta_id'=>'244'
        ]);
        Respuesta::create([
            'texto'=>'Inteligencia',
            'esCorrecta'=>false,
            'pregunta_id'=>'244'
        ]);
        Respuesta::create([
            'texto'=>'Memoria',
            'esCorrecta'=>false,
            'pregunta_id'=>'244'
        ]);
        Respuesta::create([
            'texto'=>'Atención',
            'esCorrecta'=>false,
            'pregunta_id'=>'244'
        ]);

        Pregunta::create([
            'texto' => 'El proceso mediante el cual se transforma la información para extraer conclusiones, se denomina:',
            'area_id' => '3'
        ]);
        Respuesta::create([
            'texto'=>'Razonamiento',
            'esCorrecta'=>true,
            'pregunta_id'=>'244'
        ]);
        Respuesta::create([
            'texto'=>'Pensamiento',
            'esCorrecta'=>false,
            'pregunta_id'=>'244'
        ]);
        Respuesta::create([
            'texto'=>'Inteligencia',
            'esCorrecta'=>false,
            'pregunta_id'=>'244'
        ]);
        Respuesta::create([
            'texto'=>'Memoria',
            'esCorrecta'=>false,
            'pregunta_id'=>'244'
        ]);
        Respuesta::create([
            'texto'=>'Atención',
            'esCorrecta'=>false,
            'pregunta_id'=>'244'
        ]);

        Pregunta::create([
            'texto' => 'El proceso mediante el cual se transforma la información para extraer conclusiones, se denomina:',
            'area_id' => '3'
        ]);
        Respuesta::create([
            'texto'=>'Razonamiento',
            'esCorrecta'=>true,
            'pregunta_id'=>'244'
        ]);
        Respuesta::create([
            'texto'=>'Pensamiento',
            'esCorrecta'=>false,
            'pregunta_id'=>'244'
        ]);
        Respuesta::create([
            'texto'=>'Inteligencia',
            'esCorrecta'=>false,
            'pregunta_id'=>'244'
        ]);
        Respuesta::create([
            'texto'=>'Memoria',
            'esCorrecta'=>false,
            'pregunta_id'=>'244'
        ]);
        Respuesta::create([
            'texto'=>'Atención',
            'esCorrecta'=>false,
            'pregunta_id'=>'244'
        ]);
    }
}