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
            $table->id(); // Esto crea la columna 'id' como primary key autoincremental
            $table->string('idenlace', 255);
            $table->unsignedBigInteger('idpagina');
            $table->string('descripcion', 255);
            $table->string('fechacreacion', 255);
            $table->string('fechamodificacion', 255);
            $table->string('usuariocreacion', 255);
            $table->string('usuariomodificacion', 255);
            $table->timestamps(); // Esto crea las columnas 'created_at' y 'updated_at'
            $table->unsignedBigInteger('idrol')->default(1);

            $table->foreign('idpagina')->references('id')->on('paginas');
            $table->foreign('idrol')->references('id')->on('rols');



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
