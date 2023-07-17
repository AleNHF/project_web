<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('juegos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->nullable();
            $table->boolean('estado')->default(true);
            $table->dateTime('fecha')->nullable()->default(new DateTime());
            $table->string('ganador')->nullable();
            $table->unsignedInteger('resultado_final')->default(0);
            $table->unsignedBigInteger('estudiante_creador_id');
            $table->unsignedBigInteger('estudiante_jugador_id');
            $table->timestamps();

            $table->foreign('estudiante_creador_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('estudiante_jugador_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('juegos');
    }
};
