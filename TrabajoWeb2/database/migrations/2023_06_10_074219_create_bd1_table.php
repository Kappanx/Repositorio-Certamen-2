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
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->string('rut', 10)->primary();
            $table->string('nombre', 20);
            $table->string('apellido', 20);
            $table->string('email', 50);
        });
    

    
        Schema::create('propuestas', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha');
            $table->string('documento', 100);
            $table->tinyInteger('estado');
            $table->string('estudiante_rut', 10);
            $table->foreign('estudiante_rut')->references('rut')->on('estudiantes');
        });
    

    
        Schema::create('profesores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email', 50);
            $table->string('nombre', 20);
            $table->string('apellido', 20);
        });
    

    
        Schema::create('profesores_propuesta', function (Blueprint $table) {
            $table->unsignedInteger('propuesta_id');
            $table->unsignedInteger('profesor_id');
            $table->date('fecha');
            $table->time('hora');
            $table->text('comentario');
            $table->primary(['propuesta_id', 'profesor_id']);
            $table->foreign('propuesta_id')->references('id')->on('propuestas');
            $table->foreign('profesor_id')->references('id')->on('profesores');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bd1');
    }
};
