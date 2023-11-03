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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idpersona');
            $table->string('usuario', 100);
            $table->string('clave', 255);
            $table->boolean('habilitado');
            $table->date('fecha');
            $table->unsignedBigInteger('idrol');
            $table->timestamp('fechacreacion');
            $table->timestamp('fechamodificacion')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->unsignedBigInteger('usuariocreacion');
            $table->unsignedBigInteger('usuariomodificacion');
            $table->timestamps();
           // Definición de la clave foránea corregida
           $table->foreign('idrol')->references('id')->on('rols');
           $table->foreign('idpersona')->references('id')->on('personas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
