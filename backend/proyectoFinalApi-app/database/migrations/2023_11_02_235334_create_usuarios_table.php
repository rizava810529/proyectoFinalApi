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
            $table->bigInteger('idpersona')->unsigned();
            $table->string('usuario', 100);
            $table->string('clave', 255);
            $table->boolean('habilitado');
            $table->date('fecha');
            $table->bigInteger('idrol')->unsigned();
            $table->timestamp('fechacreacion')->useCurrent();
            $table->timestamp('fechamodificacion')->useCurrent();
            $table->bigInteger('usuariocreacion')->unsigned();
            $table->bigInteger('usuariomodificacion')->unsigned();
            $table->timestamps();
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
