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
           // Define las columnas de la tabla
        $table->id();
        $table->string('usuariocreacion', 255);
        $table->string('usuariomodificacion', 255);
        $table->string('url', 255);
        $table->string('estado', 255);
        $table->string('nombre', 255);
        $table->string('descripcion', 255);
        $table->string('icono', 255);
        $table->string('tipo', 255);
        $table->timestamp('fechacreacion')->default(\DB::raw('CURRENT_TIMESTAMP'));
        $table->timestamp('fechamodificacion')->default(\DB::raw('CURRENT_TIMESTAMP'));
        $table->timestamp('created_at')->nullable();
        $table->timestamp('updated_at')->nullable();
        

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
