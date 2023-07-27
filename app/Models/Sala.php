<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sala extends Model
{
    use HasFactory;
    
    protected $primaryKey = 'id'; // Asegurar que el modelo use 'id' como clave primaria

    // Definir la relación con el modelo de Usuario (user_retador)
    public function usuarioRetador()
    {
        return $this->belongsTo(User::class, 'user_retador');
    }

    // Definir la relación con el modelo de Usuario (user_creador)
    public function usuarioCreador()
    {
        return $this->belongsTo(User::class, 'user_creador');
    }
}
