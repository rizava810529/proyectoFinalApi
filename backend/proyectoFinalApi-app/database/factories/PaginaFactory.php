<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Pagina;
use App\Models\Usuario; // Asegúrate de importar el modelo Usuario

class PaginaFactory extends Factory
{
    protected $model = Pagina::class;

    public function definition()
    {
        return [
            'usuariocreacion' => Usuario::factory(), // Utiliza Usuario::factory() en lugar de factory(App\Usuario::class)
            'usuariomodificacion' => Usuario::factory(), // Utiliza Usuario::factory() en lugar de factory(App\Usuario::class)
            'url' => $this->faker->url, // Usa $this->faker en lugar de $faker
            'estado' => $this->faker->word, // Usa $this->faker en lugar de $faker
            'nombre' => $this->faker->word, // Usa $this->faker en lugar de $faker
            'descripcion' => $this->faker->sentence, // Usa $this->faker en lugar de $faker
            'icono' => $this->faker->word, // Usa $this->faker en lugar de $faker
            'tipo' => $this->faker->word, // Usa $this->faker en lugar de $faker
        ];
    }
}
