<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Enlace>
 */
class EnlaceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'idenlace' => 'valor_idenlace', // Cambia 'valor_idenlace' por el valor deseado
            'idpagina' => 'valor_idpagina', // Cambia 'valor_idpagina' por el valor deseado
            'idrol' => 'valor_idrol', // Cambia 'valor_idrol' por el valor deseado
            'descripcion' => 'valor_descripcion', // Cambia 'valor_descripcion' por el valor deseado
            'fechacreacion' => '2023-11-02', // Cambia '2023-11-02' por el valor deseado (formato: Año-Mes-Día)
            'fechamodificacion' => '2023-11-02', // Cambia '2023-11-02' por el valor deseado (formato: Año-Mes-Día)
            'usuariocreacion' => 'valor_usuariocreacion', // Cambia 'valor_usuariocreacion' por el valor deseado
            'usuariomodificacion' => 'valor_usuariomodificacion', // Cambia 'valor_usuariomodificacion' por el valor deseado
        ];
    }
}
