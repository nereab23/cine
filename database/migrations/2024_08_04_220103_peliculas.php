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
        Schema::create('peliculas', function (Blueprint $table) {
            $table->id();
            $table->string('titulo', 255)->nullable();
            $table->text('descripcion');
            $table->unsignedBigInteger('director_id')->nullable();
            $table->foreign('director_id')->references('id')->on('directores')->onDelete('cascade');
            $table->year('anio')->nullable();
            $table->unsignedBigInteger('genero_id')->nullable();
            $table->foreign('genero_id')->references('id')->on('generos')->onDelete('cascade'); 
            $table->integer('duracion')->nullable();
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peliculas');
   }
};