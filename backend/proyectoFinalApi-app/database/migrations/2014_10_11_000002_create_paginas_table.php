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
        Schema::create('paginas', function (Blueprint $table) {
            $table->id(); // Esto crea la columna 'id' como primary key autoincremental
            $table->string('usuariocreacion', 255);
            $table->string('usuariomodificacion', 255);
            $table->string('url', 255);
            $table->string('estado', 255);
            $table->string('nombre', 255);
            $table->string('descripcion', 255);
            $table->string('icono', 255);
            $table->string('tipo', 255);
            $table->timestamps(); // Esto crea las columnas 'created_at' y 'updated_at'
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paginas');
    }
};
