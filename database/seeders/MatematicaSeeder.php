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
    }
}
