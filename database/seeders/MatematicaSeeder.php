<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pregunta;
use App\Models\Respuesta;

class MatematicaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //******* PARTE 1 */
        Pregunta::create([
            'texto' => 'Dado el conjunto B = {1, 4, 9, 16, 25}; determinar por comprensión dicho conjunto:',
            'area_id' => '4'
        ]);
        Respuesta::create([
            'texto'=>'B = {(n + 3)² / n ∈ ℕ.....y.....n < 4}',
            'esCorrecta'=>true,
            'pregunta_id'=>'101'
        ]);
        Respuesta::create([
            'texto'=>'B = {(n + 3)² / n ∈ ℤ.....y.....-2 ≤ n ≤ 2}',
            'esCorrecta'=>false,
            'pregunta_id'=>'101'
        ]);
        Respuesta::create([
            'texto'=>'B = {n² / n ∈ R.....0 < n < 6}',
            'esCorrecta'=>false,
            'pregunta_id'=>'101'
        ]);
        Respuesta::create([
            'texto'=>'B = {(n+3)² / n ∈ ℤ.....y.....-3 < n < 3}',
            'esCorrecta'=>false,
            'pregunta_id'=>'101'
        ]);
        Respuesta::create([
            'texto'=>'NA',
            'esCorrecta'=>false,
            'pregunta_id'=>'101'
        ]);

        Pregunta::create([
            'texto' => 'Dados los conjuntos: A = {x ∈ ℝ / -7 ≤ x ≤ 3} y B = {x ∈ ℝ / 3 < x ≤ 10}. La A ∩ B',
            'area_id' => '4'
        ]);
        Respuesta::create([
            'texto'=>'[-7,10]',
            'esCorrecta'=>false,
            'pregunta_id'=>'102'
        ]);
        Respuesta::create([
            'texto'=>'{3}',
            'esCorrecta'=>false,
            'pregunta_id'=>'102'
        ]);
        Respuesta::create([
            'texto'=>'ϕ',
            'esCorrecta'=>true,
            'pregunta_id'=>'102'
        ]);
        Respuesta::create([
            'texto'=>']3,10[',
            'esCorrecta'=>false,
            'pregunta_id'=>'102'
        ]);
        Respuesta::create([
            'texto'=>'NA',
            'esCorrecta'=>false,
            'pregunta_id'=>'102'
        ]);

        Pregunta::create([
            'texto' => 'Hallar (A ∩ B) ∪ (A - C) ; si A = {a, b, c, d}; B = {b, d, e, f}; C = {c, d, e, g}',
            'area_id' => '4'
        ]);
        Respuesta::create([
            'texto'=>'{a, b, c, d}',
            'esCorrecta'=>false,
            'pregunta_id'=>'103'
        ]);
        Respuesta::create([
            'texto'=>'{a, b, e}',
            'esCorrecta'=>false,
            'pregunta_id'=>'103'
        ]);
        Respuesta::create([
            'texto'=>'{a, b, d, e, h}',
            'esCorrecta'=>false,
            'pregunta_id'=>'103'
        ]);
        Respuesta::create([
            'texto'=>'{a, b, d}',
            'esCorrecta'=>true,
            'pregunta_id'=>'103'
        ]);
        Respuesta::create([
            'texto'=>'NA',
            'esCorrecta'=>false,
            'pregunta_id'=>'103'
        ]);

        Pregunta::create([
            'texto' => 'La expresión [((0.5 - 0.6) / 0.1)/(0.5 - 1)^2]',
            'area_id' => '4'
        ]);
        Respuesta::create([
            'texto'=>'-4',
            'esCorrecta'=>true,
            'pregunta_id'=>'104'
        ]);
        Respuesta::create([
            'texto'=>'4',
            'esCorrecta'=>false,
            'pregunta_id'=>'104'
        ]);
        Respuesta::create([
            'texto'=>'-3',
            'esCorrecta'=>false,
            'pregunta_id'=>'104'
        ]);
        Respuesta::create([
            'texto'=>'3',
            'esCorrecta'=>false,
            'pregunta_id'=>'104'
        ]);
        Respuesta::create([
            'texto'=>'NA',
            'esCorrecta'=>false,
            'pregunta_id'=>'104'
        ]);

        Pregunta::create([
            'texto' => 'Simplificando la siguiente expresión, se obtiene como resultado: C = 2 + (1 / (3 + (1 / 1 + (1 / (1 + (1 / 2)))))',
            'area_id' => '4'
        ]);
        Respuesta::create([
            'texto'=>'41/18',
            'esCorrecta'=>true,
            'pregunta_id'=>'105'
        ]);
        Respuesta::create([
            'texto'=>'41',
            'esCorrecta'=>false,
            'pregunta_id'=>'105'
        ]);
        Respuesta::create([
            'texto'=>'18',
            'esCorrecta'=>false,
            'pregunta_id'=>'105'
        ]);
        Respuesta::create([
            'texto'=>'18/41',
            'esCorrecta'=>false,
            'pregunta_id'=>'105'
        ]);
        Respuesta::create([
            'texto'=>'NA',
            'esCorrecta'=>false,
            'pregunta_id'=>'105'
        ]);

        Pregunta::create([
            'texto' => 'Señale la propiedad correcta',
            'area_id' => '4'
        ]);
        Respuesta::create([
            'texto'=>'(a + b)² = a² + b²',
            'esCorrecta'=>false,
            'pregunta_id'=>'106'
        ]);
        Respuesta::create([
            'texto'=>'(1/a) + (1/b) = 1/(a+b)',
            'esCorrecta'=>false,
            'pregunta_id'=>'106'
        ]);
        Respuesta::create([
            'texto'=>'√(a + b) = √a + √b',
            'esCorrecta'=>false,
            'pregunta_id'=>'106'
        ]);
        Respuesta::create([
            'texto'=>'√ab = √a√b',
            'esCorrecta'=>true,
            'pregunta_id'=>'106'
        ]);
        Respuesta::create([
            'texto'=>'Todas son correctas',
            'esCorrecta'=>false,
            'pregunta_id'=>'106'
        ]);

        Pregunta::create([
            'texto' => 'Sea el conjunto A = {a, b, c, d} indica la afirmación correcta:',
            'area_id' => '4'
        ]);
        Respuesta::create([
            'texto'=>'a c B',
            'esCorrecta'=>false,
            'pregunta_id'=>'107'
        ]);
        Respuesta::create([
            'texto'=>'e ∉ B',
            'esCorrecta'=>true,
            'pregunta_id'=>'107'
        ]);
        Respuesta::create([
            'texto'=>'{b,c} ∈ B',
            'esCorrecta'=>false,
            'pregunta_id'=>'107'
        ]);
        Respuesta::create([
            'texto'=>'ϕ ∈ B',
            'esCorrecta'=>false,
            'pregunta_id'=>'107'
        ]);
        Respuesta::create([
            'texto'=>'NA',
            'esCorrecta'=>false,
            'pregunta_id'=>'107'
        ]);

        Pregunta::create([
            'texto' => 'Indique cuál es la afirmación incorrecta',
            'area_id' => '4'
        ]);
        Respuesta::create([
            'texto'=>'2 ∈ ℤ',
            'esCorrecta'=>false,
            'pregunta_id'=>'108'
        ]);
        Respuesta::create([
            'texto'=>'2/3 ∈ ℤ',
            'esCorrecta'=>true,
            'pregunta_id'=>'108'
        ]);
        Respuesta::create([
            'texto'=>'√5 es irracional',
            'esCorrecta'=>false,
            'pregunta_id'=>'108'
        ]);
        Respuesta::create([
            'texto'=>'-(1/4) ∈ Q',
            'esCorrecta'=>false,
            'pregunta_id'=>'108'
        ]);
        Respuesta::create([
            'texto'=>'NA',
            'esCorrecta'=>false,
            'pregunta_id'=>'108'
        ]);

        Pregunta::create([
            'texto' => 'Determinar por extensión el conjunto: A = {x ∈ N / x² - 36 = 0} ',
            'area_id' => '4'
        ]);
        Respuesta::create([
            'texto'=>'A = {-6, 6}',
            'esCorrecta'=>false,
            'pregunta_id'=>'109'
        ]);
        Respuesta::create([
            'texto'=>'A = {-6}',
            'esCorrecta'=>false,
            'pregunta_id'=>'109'
        ]);
        Respuesta::create([
            'texto'=>'A = {6}',
            'esCorrecta'=>true,
            'pregunta_id'=>'109'
        ]);
        Respuesta::create([
            'texto'=>'A = {36}',
            'esCorrecta'=>false,
            'pregunta_id'=>'109'
        ]);
        Respuesta::create([
            'texto'=>'NA',
            'esCorrecta'=>false,
            'pregunta_id'=>'109'
        ]);

        Pregunta::create([
            'texto' => 'Teniendo los siguientes conjuntos U = {x ∈ ℤ / 0 ≤ x < 8}; D = {x ∈ ℤ / -1 < x ≤ 4}; E = {x ∈ ℕ / (x - 1)(x - 2)(x - 4)(x - 5) = 0} y F = {x ∈ ℕ / 3 ≤ x ≤ 6}. Determinar (D ∪ F)^c ∩ E',
            'area_id' => '4'
        ]);
        Respuesta::create([
            'texto'=>'{0,2}',
            'esCorrecta'=>false,
            'pregunta_id'=>'110'
        ]);
        Respuesta::create([
            'texto'=>'2',
            'esCorrecta'=>false,
            'pregunta_id'=>'110'
        ]);
        Respuesta::create([
            'texto'=>'{2}}',
            'esCorrecta'=>false,
            'pregunta_id'=>'110'
        ]);
        Respuesta::create([
            'texto'=>'{0,1,2}',
            'esCorrecta'=>false,
            'pregunta_id'=>'110'
        ]);
        Respuesta::create([
            'texto'=>'NA',
            'esCorrecta'=>true,
            'pregunta_id'=>'110'
        ]);

        Pregunta::create([
            'texto' => 'En la prueba del PSA a la carrera Ingeniería Comercial de la UAGRM se presentaron 1000 estudiantes, de los cuáles 550 aprobaron el examen de Matemática, 150 el de Matemática y Lenguaje; 250 aprobaron sólo Lenguaje. El número de estudiantes que no aprobó ninguno de los dos exámenes es:',
            'area_id' => '4'
        ]);
        Respuesta::create([
            'texto'=>'350',
            'esCorrecta'=>false,
            'pregunta_id'=>'111'
        ]);
        Respuesta::create([
            'texto'=>'100',
            'esCorrecta'=>false,
            'pregunta_id'=>'111'
        ]);
        Respuesta::create([
            'texto'=>'300',
            'esCorrecta'=>false,
            'pregunta_id'=>'111'
        ]);
        Respuesta::create([
            'texto'=>'200',
            'esCorrecta'=>true,
            'pregunta_id'=>'111'
        ]);
        Respuesta::create([
            'texto'=>'NA',
            'esCorrecta'=>false,
            'pregunta_id'=>'111'
        ]);

        Pregunta::create([
            'texto' => 'Simplificar la siguiente expresión: E = -2 + [(2 - (-1/2)^(-2))/(-3 + (-1)^25)]^(-2)',
            'area_id' => '4'
        ]);
        Respuesta::create([
            'texto'=>'-1',
            'esCorrecta'=>false,
            'pregunta_id'=>'112'
        ]);
        Respuesta::create([
            'texto'=>'-2',
            'esCorrecta'=>false,
            'pregunta_id'=>'112'
        ]);
        Respuesta::create([
            'texto'=>'1',
            'esCorrecta'=>false,
            'pregunta_id'=>'112'
        ]);
        Respuesta::create([
            'texto'=>'2',
            'esCorrecta'=>true,
            'pregunta_id'=>'112'
        ]);
        Respuesta::create([
            'texto'=>'NA',
            'esCorrecta'=>false,
            'pregunta_id'=>'112'
        ]);

        Pregunta::create([
            'texto' => 'Calcular F = ((0.5-0.6) ÷ 0.1)/(0.5 - 1)²',
            'area_id' => '4'
        ]);
        Respuesta::create([
            'texto'=>'4',
            'esCorrecta'=>false,
            'pregunta_id'=>'113'
        ]);
        Respuesta::create([
            'texto'=>'-4',
            'esCorrecta'=>true,
            'pregunta_id'=>'113'
        ]);
        Respuesta::create([
            'texto'=>'8',
            'esCorrecta'=>false,
            'pregunta_id'=>'113'
        ]);
        Respuesta::create([
            'texto'=>'-8',
            'esCorrecta'=>false,
            'pregunta_id'=>'113'
        ]);
        Respuesta::create([
            'texto'=>'NA',
            'esCorrecta'=>false,
            'pregunta_id'=>'113'
        ]);

        Pregunta::create([
            'texto' => 'El valor numérico de C = (y^{x^{1-y}})^z; para x^y = 8; y^x = 9; z = 4',
            'area_id' => '4'
        ]);
        Respuesta::create([
            'texto'=>'1',
            'esCorrecta'=>false,
            'pregunta_id'=>'114'
        ]);
        Respuesta::create([
            'texto'=>'9',
            'esCorrecta'=>false,
            'pregunta_id'=>'114'
        ]);
        Respuesta::create([
            'texto'=>'3',
            'esCorrecta'=>false,
            'pregunta_id'=>'114'
        ]);
        Respuesta::create([
            'texto'=>'2',
            'esCorrecta'=>false,
            'pregunta_id'=>'114'
        ]);
        Respuesta::create([
            'texto'=>'NA',
            'esCorrecta'=>false,
            'pregunta_id'=>'114'
        ]);

        Pregunta::create([
            'texto' => 'Un agricultor trae al mercado en su camioneta 900 kg de carga, el 35% es soya y el resto es maíz. ¿Cuántos kg de maíz deberá sacar para que la soya sea el 60% del total de la carga?',
            'area_id' => '4'
        ]);
        Respuesta::create([
            'texto'=>'200',
            'esCorrecta'=>false,
            'pregunta_id'=>'115'
        ]);
        Respuesta::create([
            'texto'=>'294',
            'esCorrecta'=>false,
            'pregunta_id'=>'115'
        ]);
        Respuesta::create([
            'texto'=>'300',
            'esCorrecta'=>false,
            'pregunta_id'=>'115'
        ]);
        Respuesta::create([
            'texto'=>'375',
            'esCorrecta'=>true,
            'pregunta_id'=>'115'
        ]);
        Respuesta::create([
            'texto'=>'NA',
            'esCorrecta'=>false,
            'pregunta_id'=>'115'
        ]);

        Pregunta::create([
            'texto' => 'Simplificar: √80 + 5√(1/5) − 3√5 + (1/5)√125',
            'area_id' => '4'
        ]);
        Respuesta::create([
            'texto'=>'4√5',
            'esCorrecta'=>false,
            'pregunta_id'=>'116'
        ]);
        Respuesta::create([
            'texto'=>'3√2',
            'esCorrecta'=>false,
            'pregunta_id'=>'116'
        ]);
        Respuesta::create([
            'texto'=>'2√4',
            'esCorrecta'=>false,
            'pregunta_id'=>'116'
        ]);
        Respuesta::create([
            'texto'=>'3√5',
            'esCorrecta'=>true,
            'pregunta_id'=>'116'
        ]);
        Respuesta::create([
            'texto'=>'NA',
            'esCorrecta'=>false,
            'pregunta_id'=>'116'
        ]);

        Pregunta::create([
            'texto' => 'Teniendo: A = {x/x es divisor de 15} y B = {x/x es divisor de 20}. Hallar: (A ∪ B)^C - (A ∩ B^C)^C Nota: U = (A ∪ B)',
            'area_id' => '4'
        ]);
        Respuesta::create([
            'texto'=>'{1,2,3}',
            'esCorrecta'=>false,
            'pregunta_id'=>'117'
        ]);
        Respuesta::create([
            'texto'=>'{2}',
            'esCorrecta'=>false,
            'pregunta_id'=>'117'
        ]);
        Respuesta::create([
            'texto'=>'\theta',
            'esCorrecta'=>true,
            'pregunta_id'=>'117'
        ]);
        Respuesta::create([
            'texto'=>'NA',
            'esCorrecta'=>false,
            'pregunta_id'=>'117'
        ]);

        Pregunta::create([
            'texto' => 'En un salón de 34 estudiantes, de los cuales 21 son aficionados al futbol, 18 aficionados al baloncesto y 10 aficionados a ambos deportes ¿Cuántos no son aficionados a ningún deporte?',
            'area_id' => '4'
        ]);
        Respuesta::create([
            'texto'=>'6 estudiantes',
            'esCorrecta'=>false,
            'pregunta_id'=>'118'
        ]);
        Respuesta::create([
            'texto'=>'7 estudiantes',
            'esCorrecta'=>false,
            'pregunta_id'=>'118'
        ]);
        Respuesta::create([
            'texto'=>'5 estudiantes',
            'esCorrecta'=>true,
            'pregunta_id'=>'118'
        ]);
        Respuesta::create([
            'texto'=>'15 estudiantes',
            'esCorrecta'=>false,
            'pregunta_id'=>'118'
        ]);

        Pregunta::create([
            'texto' => 'Teniendo los siguientes conjuntos, U = {x ∈ ℤ/-2 ≤ x ≤ 5}, A = {x ∈ ℕ/0 < x  ≤ 5}, B = {x ∈ ℤ/-2 < x ≤ 3}, C = {x ∈ ℤ/-2 < x ≤ 1}. Hallar: [(A ∩ B)^C - A^C]',
            'area_id' => '4'
        ]);
        Respuesta::create([
            'texto'=>'{3;4}',
            'esCorrecta'=>false,
            'pregunta_id'=>'119'
        ]);
        Respuesta::create([
            'texto'=>'{4;5}',
            'esCorrecta'=>true,
            'pregunta_id'=>'119'
        ]);
        Respuesta::create([
            'texto'=>'{1;2;3]',
            'esCorrecta'=>false,
            'pregunta_id'=>'119'
        ]);
        Respuesta::create([
            'texto'=>'{3;5}',
            'esCorrecta'=>false,
            'pregunta_id'=>'119'
        ]);
        Respuesta::create([
            'texto'=>'NA',
            'esCorrecta'=>false,
            'pregunta_id'=>'119'
        ]);

        Pregunta::create([
            'texto' => 'Entre 42 personas que miran los canales A y B, 30 prefieren ver A; 20 prefieren ver B. calcular cuantas personas prefieren ver los canales A y B',
            'area_id' => '4'
        ]);
        Respuesta::create([
            'texto'=>'10 personas',
            'esCorrecta'=>false,
            'pregunta_id'=>'120'
        ]);
        Respuesta::create([
            'texto'=>'12 personas',
            'esCorrecta'=>false,
            'pregunta_id'=>'120'
        ]);
        Respuesta::create([
            'texto'=>'8 personas',
            'esCorrecta'=>true,
            'pregunta_id'=>'120'
        ]);
        Respuesta::create([
            'texto'=>'22 personas',
            'esCorrecta'=>false,
            'pregunta_id'=>'120'
        ]);
        Respuesta::create([
            'texto'=>'NA',
            'esCorrecta'=>false,
            'pregunta_id'=>'120'
        ]);

        Pregunta::create([
            'texto' => 'Simplificando la siguiente expresión: (((a + 2b)/(a - b)) + (b/a)) / (((a + b)/a) + (3b)/(a - b)), el resultado es:',
            'area_id' => '4'
        ]);
        Respuesta::create([
            'texto'=>'0',
            'esCorrecta'=>false,
            'pregunta_id'=>'121'
        ]);
        Respuesta::create([
            'texto'=>'b + 1',
            'esCorrecta'=>false,
            'pregunta_id'=>'121'
        ]);
        Respuesta::create([
            'texto'=>'1',
            'esCorrecta'=>true,
            'pregunta_id'=>'121'
        ]);
        Respuesta::create([
            'texto'=>'a + 1',
            'esCorrecta'=>false,
            'pregunta_id'=>'121'
        ]);
        Respuesta::create([
            'texto'=>'NA',
            'esCorrecta'=>false,
            'pregunta_id'=>'121'
        ]);

        Pregunta::create([
            'texto' => 'Resolver el siguiente conjunto: A = {x ∈ ℤ/x² - 1 = 3}',
            'area_id' => '4'
        ]);
        Respuesta::create([
            'texto'=>'{-2,+2}',
            'esCorrecta'=>true,
            'pregunta_id'=>'122'
        ]);
        Respuesta::create([
            'texto'=>'{-1,+3}',
            'esCorrecta'=>false,
            'pregunta_id'=>'122'
        ]);
        Respuesta::create([
            'texto'=>'{-4,+2}',
            'esCorrecta'=>false,
            'pregunta_id'=>'122'
        ]);
        Respuesta::create([
            'texto'=>'{+2,+3}',
            'esCorrecta'=>false,
            'pregunta_id'=>'122'
        ]);
        Respuesta::create([
            'texto'=>'NA',
            'esCorrecta'=>false,
            'pregunta_id'=>'122'
        ]);

        Pregunta::create([
            'texto' => 'Resolver el siguiente conjunto: A = {x ∈ R/x² + x - 2 = 0}',
            'area_id' => '4'
        ]);
        Respuesta::create([
            'texto'=>'{-1,+4}',
            'esCorrecta'=>false,
            'pregunta_id'=>'123'
        ]);
        Respuesta::create([
            'texto'=>'{+1,-2}',
            'esCorrecta'=>false,
            'pregunta_id'=>'123'
        ]);
        Respuesta::create([
            'texto'=>'{-1,+2}',
            'esCorrecta'=>true,
            'pregunta_id'=>'123'
        ]);
        Respuesta::create([
            'texto'=>'{-1,+1}',
            'esCorrecta'=>false,
            'pregunta_id'=>'123'
        ]);
        Respuesta::create([
            'texto'=>'NA',
            'esCorrecta'=>false,
            'pregunta_id'=>'123'
        ]);

        Pregunta::create([
            'texto' => 'Resolver el siguiente conjunto: C = {x ∈ N / x^3 + 2x^2 - x - 2 = 0}',
            'area_id' => '4'
        ]);
        Respuesta::create([
            'texto'=>'{+1}',
            'esCorrecta'=>true,
            'pregunta_id'=>'124'
        ]);
        Respuesta::create([
            'texto'=>'{-1}',
            'esCorrecta'=>false,
            'pregunta_id'=>'124'
        ]);
        Respuesta::create([
            'texto'=>'{+2}',
            'esCorrecta'=>false,
            'pregunta_id'=>'124'
        ]);
        Respuesta::create([
            'texto'=>'{-2}',
            'esCorrecta'=>false,
            'pregunta_id'=>'124'
        ]);
        Respuesta::create([
            'texto'=>'NA',
            'esCorrecta'=>false,
            'pregunta_id'=>'124'
        ]);

        Pregunta::create([
            'texto' => 'Resolver la siguiente fracción: x = x/(1-(1/(1+(x/y))))',
            'area_id' => '4'
        ]);
        Respuesta::create([
            'texto'=>'{+3}',
            'esCorrecta'=>false,
            'pregunta_id'=>'125'
        ]);
        Respuesta::create([
            'texto'=>'{+1}',
            'esCorrecta'=>false,
            'pregunta_id'=>'125'
        ]);
        Respuesta::create([
            'texto'=>'{-3}',
            'esCorrecta'=>false,
            'pregunta_id'=>'125'
        ]);
        Respuesta::create([
            'texto'=>'{-1}',
            'esCorrecta'=>true,
            'pregunta_id'=>'125'
        ]);
        Respuesta::create([
            'texto'=>'NA',
            'esCorrecta'=>false,
            'pregunta_id'=>'125'
        ]);

        Pregunta::create([
            'texto' => 'Resolver la siguiente fracción: x = x/(1 - (1/(1 + (x/y))))',
            'area_id' => '4'
        ]);
        Respuesta::create([
            'texto'=>'{x + y}',
            'esCorrecta'=>true,
            'pregunta_id'=>'126'
        ]);
        Respuesta::create([
            'texto'=>'{x - y}',
            'esCorrecta'=>false,
            'pregunta_id'=>'126'
        ]);
        Respuesta::create([
            'texto'=>'{x + 2}',
            'esCorrecta'=>false,
            'pregunta_id'=>'126'
        ]);
        Respuesta::create([
            'texto'=>'{x - 2}',
            'esCorrecta'=>false,
            'pregunta_id'=>'126'
        ]);
        Respuesta::create([
            'texto'=>'NA',
            'esCorrecta'=>false,
            'pregunta_id'=>'126'
        ]);

        Pregunta::create([
            'texto' => 'Resolver el siguiente conjunto: E = {x ∈ R / 6x² + x - 10 = 5}',
            'area_id' => '4'
        ]);
        Respuesta::create([
            'texto'=>'{+5/3,+3/2}',
            'esCorrecta'=>false,
            'pregunta_id'=>'127'
        ]);
        Respuesta::create([
            'texto'=>'{-5/2,+2/3}',
            'esCorrecta'=>false,
            'pregunta_id'=>'127'
        ]);
        Respuesta::create([
            'texto'=>'{-5/3,+3/2}',
            'esCorrecta'=>true,
            'pregunta_id'=>'127'
        ]);
        Respuesta::create([
            'texto'=>'{-3/5,+3/2}',
            'esCorrecta'=>false,
            'pregunta_id'=>'127'
        ]);
        Respuesta::create([
            'texto'=>'NA',
            'esCorrecta'=>false,
            'pregunta_id'=>'127'
        ]);

        Pregunta::create([
            'texto' => 'Resolver el siguiente conjunto: F = {x ∈ R/ 11 - 2x < 1}',
            'area_id' => '4'
        ]);
        Respuesta::create([
            'texto'=>']+15,+∞[', //infinito
            'esCorrecta'=>false,
            'pregunta_id'=>'128'
        ]);
        Respuesta::create([
            'texto'=>']+5,+∞;[',
            'esCorrecta'=>true,
            'pregunta_id'=>'128'
        ]);
        Respuesta::create([
            'texto'=>']+25,+∞[',
            'esCorrecta'=>false,
            'pregunta_id'=>'128'
        ]);
        Respuesta::create([
            'texto'=>']-5,+∞[',
            'esCorrecta'=>false,
            'pregunta_id'=>'128'
        ]);
        Respuesta::create([
            'texto'=>'NA',
            'esCorrecta'=>false,
            'pregunta_id'=>'128'
        ]);

        Pregunta::create([
            'texto' => 'Resolver el siguiente conjunto: G = {x ∈ R / x^3 - 7x^2 + 14x - 8 < 0}',
            'area_id' => '4'
        ]);
        Respuesta::create([
            'texto'=>']−∞,+1[∪]+2,+4[',
            'esCorrecta'=>true,
            'pregunta_id'=>'129'
        ]);
        Respuesta::create([
            'texto'=>']−∞,+3[∪]+1,+4[ ',
            'esCorrecta'=>false,
            'pregunta_id'=>'129'
        ]);
        Respuesta::create([
            'texto'=>']−∞,+4[∪]+1,+3[ ',
            'esCorrecta'=>false,
            'pregunta_id'=>'129'
        ]);
        Respuesta::create([
            'texto'=>']−∞,+5[∪]+1,+2[ ',
            'esCorrecta'=>false,
            'pregunta_id'=>'129'
        ]);
        Respuesta::create([
            'texto'=>'NA',
            'esCorrecta'=>false,
            'pregunta_id'=>'129'
        ]);

        Pregunta::create([
            'texto' => 'Reducir la siguiente expresión: (16/3) - (1/(4-(1/(3-(1/(2-(3/2)))))))',
            'area_id' => '4'
        ]);
        Respuesta::create([
            'texto'=>'13',
            'esCorrecta'=>false,
            'pregunta_id'=>'130'
        ]);
        Respuesta::create([
            'texto'=>'8',
            'esCorrecta'=>false,
            'pregunta_id'=>'130'
        ]);
        Respuesta::create([
            'texto'=>'5',
            'esCorrecta'=>true,
            'pregunta_id'=>'130'
        ]);
        Respuesta::create([
            'texto'=>'12',
            'esCorrecta'=>false,
            'pregunta_id'=>'130'
        ]);
        Respuesta::create([
            'texto'=>'NA',
            'esCorrecta'=>false,
            'pregunta_id'=>'130'
        ]);

        Pregunta::create([
            'texto' => 'Dado los conjuntos A = {0,1,2,3,4,5}, B = {0,2,4,6}, C = {1,3,5}, determinar la siguiente operación: C - (A ∩ B)',
            'area_id' => '4'
        ]);
        Respuesta::create([
            'texto'=>'{1,3,5}',
            'esCorrecta'=>true,
            'pregunta_id'=>'131'
        ]);
        Respuesta::create([
            'texto'=>'{0,2,4}',
            'esCorrecta'=>false,
            'pregunta_id'=>'131'
        ]);
        Respuesta::create([
            'texto'=>'ϕ',
            'esCorrecta'=>false,
            'pregunta_id'=>'131'
        ]);
        Respuesta::create([
            'texto'=>'{1,5}',
            'esCorrecta'=>false,
            'pregunta_id'=>'131'
        ]);
        Respuesta::create([
            'texto'=>'NA',
            'esCorrecta'=>false,
            'pregunta_id'=>'131'
        ]);

        Pregunta::create([
            'texto' => 'Si se simplifica la expresión √160 + 30 √(2/5) - √1000, tenemos como resultado',
            'area_id' => '4'
        ]);
        Respuesta::create([
            'texto'=>'10',
            'esCorrecta'=>false,
            'pregunta_id'=>'132'
        ]);
        Respuesta::create([
            'texto'=>'5√10',
            'esCorrecta'=>false,
            'pregunta_id'=>'132'
        ]);
        Respuesta::create([
            'texto'=>'10√5',
            'esCorrecta'=>false,
            'pregunta_id'=>'132'
        ]);
        Respuesta::create([
            'texto'=>'0',
            'esCorrecta'=>true,
            'pregunta_id'=>'132'
        ]);
        Respuesta::create([
            'texto'=>'NA',
            'esCorrecta'=>false,
            'pregunta_id'=>'132'
        ]);

        Pregunta::create([
            'texto' => 'Si se vende 3/4 de una pieza de tela quedan 27 metros. El número de metros que tenía la pieza es:',
            'area_id' => '4'
        ]);
        Respuesta::create([
            'texto'=>'70',
            'esCorrecta'=>false,
            'pregunta_id'=>'133'
        ]);
        Respuesta::create([
            'texto'=>'45',
            'esCorrecta'=>false,
            'pregunta_id'=>'133'
        ]);
        Respuesta::create([
            'texto'=>'85',
            'esCorrecta'=>false,
            'pregunta_id'=>'133'
        ]);
        Respuesta::create([
            'texto'=>'108',
            'esCorrecta'=>true,
            'pregunta_id'=>'133'
        ]);
        Respuesta::create([
            'texto'=>'NA',
            'esCorrecta'=>false,
            'pregunta_id'=>'133'
        ]);

        Pregunta::create([
            'texto' => 'Realizando operaciones de C = (4^(5/6) . 4^(3/4) . 4^(-4/9) . 4^2)/(4^(-3/4) . 4^(17/9) . 4^1), obtenemos como resultado:',
            'area_id' => '4'
        ]);
        Respuesta::create([
            'texto'=>'64',
            'esCorrecta'=>false,
            'pregunta_id'=>'134'
        ]);
        Respuesta::create([
            'texto'=>'-64',
            'esCorrecta'=>false,
            'pregunta_id'=>'134'
        ]);
        Respuesta::create([
            'texto'=>'4',
            'esCorrecta'=>true,
            'pregunta_id'=>'134'
        ]);
        Respuesta::create([
            'texto'=>'16',
            'esCorrecta'=>false,
            'pregunta_id'=>'134'
        ]);
        Respuesta::create([
            'texto'=>'NA',
            'esCorrecta'=>false,
            'pregunta_id'=>'134'
        ]);

        Pregunta::create([
            'texto' => 'Siendo A = {a,b,c,d}, B = {b,d,e,f}, C = {c,d,e,g}. Hallar: (A ∩ B) ∪ (A - C)',
            'area_id' => '4'
        ]);
        Respuesta::create([
            'texto'=>'{a}',
            'esCorrecta'=>false,
            'pregunta_id'=>'135'
        ]);
        Respuesta::create([
            'texto'=>'{a,d}',
            'esCorrecta'=>false,
            'pregunta_id'=>'135'
        ]);
        Respuesta::create([
            'texto'=>'{a,b,d}',
            'esCorrecta'=>true,
            'pregunta_id'=>'135'
        ]);
        Respuesta::create([
            'texto'=>'ϕ',
            'esCorrecta'=>false,
            'pregunta_id'=>'135'
        ]);
        Respuesta::create([
            'texto'=>'NA',
            'esCorrecta'=>false,
            'pregunta_id'=>'135'
        ]);

        Pregunta::create([
            'texto' => 'Si se simplifica la expresión ((√48 - √147 + √27)/√3))^2^(-0), tenemos como resultado',
            'area_id' => '4'
        ]);
        Respuesta::create([
            'texto'=>'1',
            'esCorrecta'=>false,
            'pregunta_id'=>'136'
        ]);
        Respuesta::create([
            'texto'=>'√2',
            'esCorrecta'=>false,
            'pregunta_id'=>'136'
        ]);
        Respuesta::create([
            'texto'=>'√3',
            'esCorrecta'=>false,
            'pregunta_id'=>'136'
        ]);
        Respuesta::create([
            'texto'=>'0',
            'esCorrecta'=>true,
            'pregunta_id'=>'136'
        ]);
        Respuesta::create([
            'texto'=>'NA',
            'esCorrecta'=>false,
            'pregunta_id'=>'136'
        ]);

        Pregunta::create([
            'texto' => 'Calcular G = √[n]((250^n + 25^n) / (50^n + 5^n))',
            'area_id' => '4'
        ]);
        Respuesta::create([
            'texto'=>'-1',
            'esCorrecta'=>false,
            'pregunta_id'=>'137'
        ]);
        Respuesta::create([
            'texto'=>'1',
            'esCorrecta'=>false,
            'pregunta_id'=>'137'
        ]);
        Respuesta::create([
            'texto'=>'2',
            'esCorrecta'=>false,
            'pregunta_id'=>'137'
        ]);
        Respuesta::create([
            'texto'=>'5',
            'esCorrecta'=>true,
            'pregunta_id'=>'137'
        ]);
        Respuesta::create([
            'texto'=>'NA',
            'esCorrecta'=>false,
            'pregunta_id'=>'137'
        ]);

        Pregunta::create([
            'texto' => 'El precio de un vestido en el “Ventura Mall” es de 160 Bs. Si se hace un primer descuento del 10% y después del 50% sobre el primer descuento, entonces se pagó por el vestido en bolivianos:',
            'area_id' => '4'
        ]);
        Respuesta::create([
            'texto'=>'115 Bs',
            'esCorrecta'=>false,
            'pregunta_id'=>'138'
        ]);
        Respuesta::create([
            'texto'=>'100 Bs',
            'esCorrecta'=>false,
            'pregunta_id'=>'138'
        ]);
        Respuesta::create([
            'texto'=>'120 Bs',
            'esCorrecta'=>false,
            'pregunta_id'=>'138'
        ]);
        Respuesta::create([
            'texto'=>'136 Bs',
            'esCorrecta'=>true,
            'pregunta_id'=>'138'
        ]);
        Respuesta::create([
            'texto'=>'NA',
            'esCorrecta'=>false,
            'pregunta_id'=>'138'
        ]);

        Pregunta::create([
            'texto' => 'Reduciendo la expresión C = 1 - 1 / (1 - (1 / (1 - 1/2)))',
            'area_id' => '4'
        ]);
        Respuesta::create([
            'texto'=>'2',
            'esCorrecta'=>true,
            'pregunta_id'=>'139'
        ]);
        Respuesta::create([
            'texto'=>'1',
            'esCorrecta'=>false,
            'pregunta_id'=>'139'
        ]);
        Respuesta::create([
            'texto'=>'0',
            'esCorrecta'=>false,
            'pregunta_id'=>'139'
        ]);
        Respuesta::create([
            'texto'=>'-1',
            'esCorrecta'=>false,
            'pregunta_id'=>'139'
        ]);
        Respuesta::create([
            'texto'=>'NA',
            'esCorrecta'=>false,
            'pregunta_id'=>'139'
        ]);

        Pregunta::create([
            'texto' => 'Después de simplificar -3 . √(1/3) - √27 + √48 se tiene como resultado:',
            'area_id' => '4'
        ]);
        Respuesta::create([
            'texto'=>'1',
            'esCorrecta'=>false,
            'pregunta_id'=>'140'
        ]);
        Respuesta::create([
            'texto'=>'-1',
            'esCorrecta'=>false,
            'pregunta_id'=>'140'
        ]);
        Respuesta::create([
            'texto'=>'2',
            'esCorrecta'=>false,
            'pregunta_id'=>'140'
        ]);
        Respuesta::create([
            'texto'=>'0',
            'esCorrecta'=>true,
            'pregunta_id'=>'140'
        ]);
        Respuesta::create([
            'texto'=>'NA',
            'esCorrecta'=>false,
            'pregunta_id'=>'140'
        ]);

        Pregunta::create([
            'texto' => 'Dado los conjuntos A = {0,1,2,3,4,5}, B = {1,3,5}, C = {1,5}, determinar la siguiente operación: (A ∩ B) - (A - C)',
            'area_id' => '4'
        ]);
        Respuesta::create([
            'texto'=>'{1,5}',
            'esCorrecta'=>true,
            'pregunta_id'=>'141'
        ]);
        Respuesta::create([
            'texto'=>'{0,2,4}',
            'esCorrecta'=>false,
            'pregunta_id'=>'141'
        ]);
        Respuesta::create([
            'texto'=>'{1,2,4}',
            'esCorrecta'=>false,
            'pregunta_id'=>'141'
        ]);
        Respuesta::create([
            'texto'=>'ϕ',
            'esCorrecta'=>false,
            'pregunta_id'=>'141'
        ]);
        Respuesta::create([
            'texto'=>'NA',
            'esCorrecta'=>false,
            'pregunta_id'=>'141'
        ]);

        Pregunta::create([
            'texto' => 'Si 6 carpinteros hacen un juego de muebles en 20 días. Si se retiran 2 carpinteros ¿En cuántos días acabaran en hacer el mismo juego de muebles?',
            'area_id' => '4'
        ]);
        Respuesta::create([
            'texto'=>'35 días',
            'esCorrecta'=>false,
            'pregunta_id'=>'142'
        ]);
        Respuesta::create([
            'texto'=>'60 días',
            'esCorrecta'=>true,
            'pregunta_id'=>'142'
        ]);
        Respuesta::create([
            'texto'=>'25 días',
            'esCorrecta'=>false,
            'pregunta_id'=>'142'
        ]);
        Respuesta::create([
            'texto'=>'20 días',
            'esCorrecta'=>false,
            'pregunta_id'=>'142'
        ]);
        Respuesta::create([
            'texto'=>'NA',
            'esCorrecta'=>false,
            'pregunta_id'=>'142'
        ]);

        Pregunta::create([
            'texto' => 'El conjunto A = {2; 0.5; -5} pertenece a los siguientes conjunto de números',
            'area_id' => '4'
        ]);
        Respuesta::create([
            'texto'=>'N;Q;R;C',
            'esCorrecta'=>false,
            'pregunta_id'=>'143'
        ]);
        Respuesta::create([
            'texto'=>'Q;R;C',
            'esCorrecta'=>true,
            'pregunta_id'=>'143'
        ]);
        Respuesta::create([
            'texto'=>'R;C',
            'esCorrecta'=>false,
            'pregunta_id'=>'143'
        ]);
        Respuesta::create([
            'texto'=>'R',
            'esCorrecta'=>false,
            'pregunta_id'=>'143'
        ]);
        Respuesta::create([
            'texto'=>'NA',
            'esCorrecta'=>false,
            'pregunta_id'=>'143'
        ]);

        Pregunta::create([
            'texto' => 'Teniendo; A = {1,2,3,5,7}; B = {2,4,6,8,9}; C = {0,1,3,6,9}. Calcular: (A^C - C^C) ∩ (B^C ∩ A^C). Considerar: U = A ∪ B ∪ C',
            'area_id' => '4'
        ]);
        Respuesta::create([
            'texto'=>'{3,9}',
            'esCorrecta'=>false,
            'pregunta_id'=>'144'
        ]);
        Respuesta::create([
            'texto'=>'{2,5}',
            'esCorrecta'=>false,
            'pregunta_id'=>'144'
        ]);
        Respuesta::create([
            'texto'=>'ϕ',
            'esCorrecta'=>false,
            'pregunta_id'=>'144'
        ]);
        Respuesta::create([
            'texto'=>'{0}',
            'esCorrecta'=>true,
            'pregunta_id'=>'144'
        ]);
        Respuesta::create([
            'texto'=>'NA',
            'esCorrecta'=>false,
            'pregunta_id'=>'144'
        ]);

        Pregunta::create([
            'texto' => 'Simplificar C = ((1/3)+((1/3)/(5/6))+((1/35)/(6/7)))/(23/30)',
            'area_id' => '4'
        ]);
        Respuesta::create([
            'texto'=>'30',
            'esCorrecta'=>false,
            'pregunta_id'=>'145'
        ]);
        Respuesta::create([
            'texto'=>'6',
            'esCorrecta'=>false,
            'pregunta_id'=>'145'
        ]);
        Respuesta::create([
            'texto'=>'5',
            'esCorrecta'=>false,
            'pregunta_id'=>'145'
        ]);
        Respuesta::create([
            'texto'=>'1',
            'esCorrecta'=>true,
            'pregunta_id'=>'145'
        ]);
        Respuesta::create([
            'texto'=>'NA',
            'esCorrecta'=>false,
            'pregunta_id'=>'145'
        ]);

        Pregunta::create([
            'texto' => '- Un total de 35 sastres fueron entrevistados para un trabajo; 25 sabían hacer trajes, 28 sabían hacer camisas y dos no sabían hacer ninguna de las dos cosas. ¿Cuántos sabían hacer trajes y camisas?',
            'area_id' => '4'
        ]);
        Respuesta::create([
            'texto'=>'10',
            'esCorrecta'=>false,
            'pregunta_id'=>'146'
        ]);
        Respuesta::create([
            'texto'=>'20',
            'esCorrecta'=>true,
            'pregunta_id'=>'146'
        ]);
        Respuesta::create([
            'texto'=>'30',
            'esCorrecta'=>false,
            'pregunta_id'=>'146'
        ]);
        Respuesta::create([
            'texto'=>'25',
            'esCorrecta'=>false,
            'pregunta_id'=>'146'
        ]);
        Respuesta::create([
            'texto'=>'Ninguna',
            'esCorrecta'=>false,
            'pregunta_id'=>'146'
        ]);

        Pregunta::create([
            'texto' => 'Una cuadrilla de 12 obreros pueden hacer una obra en 10 días. ¿Qué tiempo tardaran 15 obreros en realizar la misma obra?',
            'area_id' => '4'
        ]);
        Respuesta::create([
            'texto'=>'8',
            'esCorrecta'=>true,
            'pregunta_id'=>'147'
        ]);
        Respuesta::create([
            'texto'=>'4',
            'esCorrecta'=>false,
            'pregunta_id'=>'147'
        ]);
        Respuesta::create([
            'texto'=>'6',
            'esCorrecta'=>false,
            'pregunta_id'=>'147'
        ]);
        Respuesta::create([
            'texto'=>'7',
            'esCorrecta'=>false,
            'pregunta_id'=>'147'
        ]);
        Respuesta::create([
            'texto'=>'Ninguna',
            'esCorrecta'=>false,
            'pregunta_id'=>'147'
        ]);

        Pregunta::create([
            'texto' => 'Al efectuar las operaciones indicadas en la expresión aritmética E = (3/2)√48 - (2/3)√27 + (4/5)√75 - 3√(3^-1), queda:',
            'area_id' => '4'
        ]);
        Respuesta::create([
            'texto'=>'-√3',
            'esCorrecta'=>false,
            'pregunta_id'=>'148'
        ]);
        Respuesta::create([
            'texto'=>'√3',
            'esCorrecta'=>false,
            'pregunta_id'=>'148'
        ]);
        Respuesta::create([
            'texto'=>'5√3',
            'esCorrecta'=>false,
            'pregunta_id'=>'148'
        ]);
        Respuesta::create([
            'texto'=>'7√3',
            'esCorrecta'=>true,
            'pregunta_id'=>'148'
        ]);
        Respuesta::create([
            'texto'=>'9√3',
            'esCorrecta'=>false,
            'pregunta_id'=>'148'
        ]);

        Pregunta::create([
            'texto' => 'Al simplificar: E = ((2^(3x+1))+(8^(x+2)))/(2^(3x+1))',
            'area_id' => '4'
        ]);
        Respuesta::create([
            'texto'=>'2',
            'esCorrecta'=>false,
            'pregunta_id'=>'149'
        ]);
        Respuesta::create([
            'texto'=>'16',
            'esCorrecta'=>false,
            'pregunta_id'=>'149'
        ]);
        Respuesta::create([
            'texto'=>'23',
            'esCorrecta'=>false,
            'pregunta_id'=>'149'
        ]);
        Respuesta::create([
            'texto'=>'32',
            'esCorrecta'=>false,
            'pregunta_id'=>'149'
        ]);
        Respuesta::create([
            'texto'=>'33',
            'esCorrecta'=>true,
            'pregunta_id'=>'149'
        ]);

        Pregunta::create([
            'texto' => 'Simplificar la expresión: E = √√[3]((64x^6 y^12) / (z^18))',
            'area_id' => '4'
        ]);
        Respuesta::create([
            'texto'=>'xy^2',
            'esCorrecta'=>false,
            'pregunta_id'=>'150'
        ]);
        Respuesta::create([
            'texto'=>'(2xy^2)/z^3',
            'esCorrecta'=>true,
            'pregunta_id'=>'150'
        ]);
        Respuesta::create([
            'texto'=>'2xz^3',
            'esCorrecta'=>false,
            'pregunta_id'=>'150'
        ]);
        Respuesta::create([
            'texto'=>'2xy/z^2',
            'esCorrecta'=>false,
            'pregunta_id'=>'150'
        ]);
        Respuesta::create([
            'texto'=>'NA',
            'esCorrecta'=>false,
            'pregunta_id'=>'150'
        ]);
    }
}
