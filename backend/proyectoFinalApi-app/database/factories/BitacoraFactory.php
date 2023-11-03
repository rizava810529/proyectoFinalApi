<?php

namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Bitacora;
use App\Models\Usuario;
use Faker\Generator as Faker;

class BitacoraFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'idbitacora' => $this->faker->uuid,
            'bitacora' => $this->faker->sentence,
            'idusuario' => Usuario::factory(), // Utiliza Usuario::factory() para crear una instancia de Usuario
            'fecha' => $this->faker->date,
            'hora' => $this->faker->time,
            'ip' => $this->faker->ipv4,
            'so' => $this->faker->word,
            'navegador' => $this->faker->word,
            'usuario' => $this->faker->userName,
            'created_at' => now(),
            'updated_at' => now(),
            
        ];
    }
}

