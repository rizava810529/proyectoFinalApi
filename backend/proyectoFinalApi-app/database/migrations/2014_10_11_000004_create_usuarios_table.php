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
            $table->id(); // Esto crea la columna 'id' como primary key autoincremental
            $table->unsignedBigInteger('idpersona');
            $table->string('usuario', 100)->nullable();
            $table->string('clave', 255);
            $table->tinyInteger('habilitado');
            $table->date('fecha');
            $table->unsignedBigInteger('idrol');
            $table->timestamps(); // Esto crea las columnas 'created_at' y 'updated_at'
            $table->date('fechacreacion');
            $table->timestamp('fechamodificacion')->default(\DB::raw('CURRENT_TIMESTAMP'));           
            $table->timestamp('usuariocreacion')->useCurrent();




            $table->unsignedBigInteger('usuariomodificacion');
            
            $table->foreign('idpersona')->references('id')->on('personas')->onDelete('NO ACTION');
            $table->foreign('idrol')->references('id')->on('rols');
           
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
