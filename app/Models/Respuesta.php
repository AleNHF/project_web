<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Respuesta
 *
 * @property $id
 * @property $texto
 * @property $esCorrecta
 * @property $pregunta_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Pregunta $pregunta
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Respuesta extends Model
{
    
    static $rules = [
		'texto' => 'required',
		'esCorrecta' => 'required',
		'pregunta_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['texto','esCorrecta','pregunta_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function pregunta()
    {
        return $this->hasOne('App\Models\Pregunta', 'id', 'pregunta_id');
    }
    

}
