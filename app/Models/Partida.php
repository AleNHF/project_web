<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Partida
 *
 * @property $id
 * @property $tiempo
 * @property $resultado
 * @property $juego_id
 * @property $pregunta_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Juego $juego
 * @property Pregunta $pregunta
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Partida extends Model
{
    
    static $rules = [
		'resultado' => 'required',
		'juego_id' => 'required',
		'pregunta_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['tiempo','resultado','juego_id','pregunta_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function juego()
    {
        return $this->hasOne('App\Models\Juego', 'id', 'juego_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function pregunta()
    {
        return $this->hasOne('App\Models\Pregunta', 'id', 'pregunta_id');
    }
    

}
