<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Rol>
 */
class RolFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'rol' => $this->faker->word,
            'fechacreacion' => $this->faker->date,
            'fechamodificacion' => $this->faker->date,
            'usuariocreacion' => $this->faker->name,
            'usuariomodificacion' => $this->faker->name,
        ];
    }
}
