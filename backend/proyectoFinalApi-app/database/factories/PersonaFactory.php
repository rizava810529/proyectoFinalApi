<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;
use App\Models\Persona;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Persona>
 */
class PersonaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'primer_nombre' => $this->faker->firstName,
            'segundo_nombre' => $this->faker->optional()->firstName,
            'primer_apellido' => $this->faker->lastName,
            'segundo_apellido' => $this->faker->optional()->lastName,
            'fecha_creacion' => now(),
            'fecha_modificacion' => now(),
           
        ];
    }
}
