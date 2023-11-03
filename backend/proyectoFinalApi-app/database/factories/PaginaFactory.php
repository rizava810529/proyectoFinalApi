<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;
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
            'usuariocreacion' => factory(App\Usuario::class),
            'usuariomodificacion' => factory(App\Usuario::class),
            'url' => $faker->url,
            'estado' => $faker->word,
            'nombre' => $faker->word,
            'descripcion' => $faker->sentence,
            'icono' => $faker->word,
            'tipo' => $faker->word,
        ];
        
    }
}
