<?php

namespace Database\Factories;

use App\Models\Usuario; // Asegúrate de importar el modelo Usuario
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use App\Models\Persona; 
use App\Models\Rol;

class UsuarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'idpersona' => Persona::factory(), // Asegúrate de importar el modelo Persona
            'usuario' => $this->faker->userName,
            'clave' => bcrypt('password'), // Aquí puedes generar una contraseña segura
            'habilitado' => $this->faker->boolean,
            'fecha' => $this->faker->date,
            'idrol' => Rol::factory(), // Asegúrate de importar el modelo Rol
            'fechacreacion' => now(),
            'fechamodificacion' => now(),
            'usuariocreacion' => 1,
            'usuariomodificacion' => 1,
        ];
    }
}
