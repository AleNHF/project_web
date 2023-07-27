<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Juego
 *
 * @property $id
 * @property $nombre
 * @property $estado
 * @property $fecha
 * @property $ganador
 * @property $resultado_final
 * @property $estudiante_creador_id
 * @property $estudiante_jugador_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Partida[] $partidas
 * @property User $user
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Juego extends Model
{
    
    static $rules = [
		'estado' => 'required',
		'resultado_final' => 'required',
		'estudiante_creador_id' => 'required',
		'estudiante_jugador_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','estado','fecha','ganador','resultado_final','estudiante_creador_id','estudiante_jugador_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function partidas()
    {
        return $this->hasMany('App\Models\Partida', 'juego_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'estudiante_creador_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */

}
