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
            $table->unsignedBigInteger('idpagina'); // Campo 'idpagina' de tipo cadena
            
            $table->string('descripcion'); // Campo 'descripcion' de tipo cadena
            $table->string('fechacreacion'); // Campo 'fechacreacion' de tipo cadena
            $table->string('fechamodificacion'); // Campo 'fechamodificacion' de tipo cadena
            $table->string('usuariocreacion'); // Campo 'usuariocreacion' de tipo cadena
            $table->string('usuariomodificacion'); // Campo 'usuariomodificacion' de tipo cadena
            $table->timestamps();
            // Definición de la clave foránea 'idrol' que hace referencia a la tabla 'rols'
            $table->unsignedBigInteger('idrol');
            $table->foreign('idrol')->references('id')->on('rols');    
            // Definición de la clave foránea 'idpagina' que hace referencia a la tabla 'paginas'
            $table->foreign('idpagina')->references('id')->on('paginas');



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
