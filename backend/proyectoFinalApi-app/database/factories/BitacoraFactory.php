<?php

namespace Database\Factories;

use App\Models\Bitacora;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Usuario;




class BitacoraFactory extends Factory
{
    protected $model = Bitacora::class;

    public function definition()
    {
        return [
            'idbitacora' => $this->faker->unique()->randomNumber,
            'bitacora' => $this->faker->sentence,
            'idusuario' => function () {
                $user = Usuario::inRandomOrder()->first();
                return $user ? $user->id : Usuario::factory();
            },
            'fecha' => $this->faker->date,
            'hora' => $this->faker->time,
            'ip' => $this->faker->ipv4,
            'so' => $this->faker->userAgent,
            'navegador' => $this->faker->userAgent,
            'usuario' => $this->faker->userName,
        ];
    }
}
