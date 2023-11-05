<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Pagina;
use App\Models\Enlace; // Asegúrate de importar el modelo Enlace
use App\Models\Usuario; // Asegúrate de importar el modelo Usuario

class EnlaceFactory extends Factory
{
    protected $model = Enlace::class;

    public function definition()
    {
        return [
            'idenlace' => $this->faker->uuid, // Usa $this->faker en lugar de $faker
            'idpagina' => Pagina::factory(), // Utiliza la fábrica de Pagina
            'descripcion' => $this->faker->sentence, // Usa $this->faker en lugar de $faker
            'fechacreacion' => $this->faker->date, // Usa $this->faker en lugar de $faker
            'fechamodificacion' => $this->faker->date, // Usa $this->faker en lugar de $faker
            'usuariocreacion' => Usuario::factory(), // Utiliza la fábrica de Usuario
            'usuariomodificacion' => Usuario::factory(), // Utiliza la fábrica de Usuario
        ];
    }
}
