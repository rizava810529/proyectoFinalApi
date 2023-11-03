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
        Schema::create('bitacoras', function (Blueprint $table) {
            $table->id(); // Esto crea la columna 'id' como primary key autoincremental
            $table->string('idbitacora', 255);
            $table->string('bitacora', 255);
            $table->unsignedBigInteger('idusuario');
            $table->date('fecha');
            $table->string('hora', 255);
            $table->string('ip', 255);
            $table->string('so', 255);
            $table->string('navegador', 255);
            $table->string('usuario', 255);
            $table->timestamps(); // Esto crea las columnas 'created_at' y 'updated_at'
            
            $table->foreign('idusuario')->references('id')->on('usuarios');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bitacoras');
    }
};
