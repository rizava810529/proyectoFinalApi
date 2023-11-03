<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


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
            'segundo_nombre' => $this->faker->optional()->lastName,
            'primer_apellido' => $this->faker->lastName,
            'segundo_apellido' => $this->faker->optional()->lastName,
            'fecha_creacion' => $this->faker->dateTimeThisDecade, //
            'fecha_modificacion' => $this->faker->dateTimeThisDecade,
           
        ];
    }
}
