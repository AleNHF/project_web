<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('salas', function (Blueprint $table) {
            $table->id(); // Agregar el campo 'id' para el ID de la sala
            $table->unsignedBigInteger('user_retador')->nullable();;
            $table->unsignedBigInteger('user_creador')->after('user_id');
            // Clave foránea que hace referencia al ID del usuario
            // Agrega aquí los otros campos de la tabla 'salas'
            $table->timestamps();

            // Definir la relación con la tabla de usuarios
            $table->foreign('user_retador')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('user_creador')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('salas');
    }
};
