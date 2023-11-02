<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bitacora>
 */
class BitacoraFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
       
        $faker = \Faker\Factory::create();

        return [
            'idbitacora' => $faker->uuid, // Genera un UUID para idbitacora
            'bitacora' => $faker->sentence, // Puedes personalizar este campo
            'idusuario' => $faker->numberBetween(1, 100), // Número aleatorio para idusuario
            'fecha' => $faker->date, // Fecha aleatoria
            'hora' => $faker->time, // Hora aleatoria
            'ip' => $faker->ipv4, // Dirección IP aleatoria
            'so' => $faker->word, // Sistema operativo aleatorio
            'navegador' => $faker->userAgent, // Agente de usuario (navegador) aleatorio
            'usuario' => $faker->userName, // Nombre de usuario aleatorio
        ];
    }
}
