<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Rol;
use Faker\Generator as Faker;
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
            'usuariocreacion' => $this->faker->userName,
            'usuariomodificacion' => $this->faker->userName,
        ];
    }
}
