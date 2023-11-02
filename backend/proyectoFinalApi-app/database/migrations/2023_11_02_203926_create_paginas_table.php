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
            $table->id(); // Campo de clave primaria autoincremental
            $table->string('usuariocreacion');
            $table->string('usuariomodificacion');
            $table->string('url');
            $table->string('estado');
            $table->string('nombre');
            $table->string('descripcion');
            $table->string('icono');
            $table->string('tipo');
            $table->timestamps(); // Campos de fecha y hora
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
