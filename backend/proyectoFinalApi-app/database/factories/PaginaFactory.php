<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pagina>
 */
class PaginaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'usuariocreacion' => $this->faker->name,
            'usuariomodificacion' => $this->faker->name,
            'url' => $this->faker->url,
            'estado' => $this->faker->randomElement(['Activo', 'Inactivo']),
            'nombre' => $this->faker->name,
            'descripcion' => $this->faker->sentence,
            'icono' => $this->faker->word,
            'tipo' => $this->faker->word,
            'created_at' => now(),
            'updated_at' => now(),
        ];
        
    }
}
