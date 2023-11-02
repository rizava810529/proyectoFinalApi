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
        Schema::create('enlaces', function (Blueprint $table) {
            $table->id();
    $table->string('idenlace'); // Campo 'idenlace' de tipo cadena
    $table->string('idpagina'); // Campo 'idpagina' de tipo cadena
    $table->string('idrol'); // Campo 'idrol' de tipo cadena
    $table->string('descripcion'); // Campo 'descripcion' de tipo cadena
    $table->string('fechacreacion'); // Campo 'fechacreacion' de tipo cadena
    $table->string('fechamodificacion'); // Campo 'fechamodificacion' de tipo cadena
    $table->string('usuariocreacion'); // Campo 'usuariocreacion' de tipo cadena
    $table->string('usuariomodificacion'); // Campo 'usuariomodificacion' de tipo cadena
    $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enlaces');
    }
};
