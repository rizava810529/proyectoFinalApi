<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;
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
            'idenlace' => $faker->uuid,
            'idpagina' => factory(App\Pagina::class),
            'descripcion' => $faker->sentence,
            'fechacreacion' => $faker->date,
            'fechamodificacion' => $faker->date,
            'usuariocreacion' => factory(App\Usuario::class),
            'usuariomodificacion' => factory(App\Usuario::class),
        ];
    }
}
