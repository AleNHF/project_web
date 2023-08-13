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
            $table->id(); 
            $table->string('code')->nullable();
            $table->time('duracion')->default('24:00:00');
            $table->string('estado')->default('off');
            $table->unsignedBigInteger('user_retador')->nullable();;
            $table->unsignedBigInteger('user_creador');
            $table->unsignedBigInteger('modo_id');
            $table->timestamps();

            $table->foreign('user_retador')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('user_creador')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('modo_id')->references('id')->on('modos')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('salas');
    }
};
