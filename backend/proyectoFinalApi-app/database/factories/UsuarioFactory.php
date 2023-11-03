<?php
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;
use App\Models\Usuario; // Asegúrate de importar el modelo Usuario

class UsuarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id' => random_int(1, 100),
            'idpersona' => random_int(1, 100),
            'usuario' => $this->faker->userName, // Utiliza $this->faker en lugar de $faker
            'clave' => bcrypt('password123'),
            'habilitado' => $this->faker->boolean,
            'fecha' => $this->faker->date,
            'idrol' => random_int(1, 10),
            'fechacreacion' => now(),
            'fechamodificacion' => now(),
            'usuariocreacion' => random_int(1, 100),
            'usuariomodificacion' => random_int(1, 100),
        ];
    }
}
