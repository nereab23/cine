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
        Schema::create('funciones', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pelicula_id')->nullable();
            $table->foreign('pelicula_id')->references('id')->on('peliculas')->onDelete('cascade');
            $table->unsignedBigInteger('sala_id')->nullable();
            $table->foreign('sala_id')->references('id')->on('salas')->onDelete('cascade');
            $table->date('fecha')->nullable();
            $table->time('hora')->nullable();
            $table->timestamp('create_at');
            $table->timestamp('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('funciones');
    }
};
