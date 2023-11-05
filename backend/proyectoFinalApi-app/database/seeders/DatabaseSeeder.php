<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       /*  $bitacoraSeeder = new BitacoraSeeder();
	    $bitacoraSeeder->run();

        $rolSeeder = new RolSeeder();
	    $rolSeeder->run();

        $enlaceSeeder = new EnlaceSeeder();
	    $enlaceSeeder->run();

        $paginaSeeder = new PaginaSeeder();
        $paginaSeeder->run();

        $usuarioSeeder = new UsuarioSeeder();
        $usuarioSeeder->run();

        $personaSeeder = new PersonaSeeder();
        $personaSeeder->run();
 */
     $this->call([
            // Otros seeders
            BitacoraSeeder::class,
            RolSeeder::class,
            EnlaceSeeder::class,
            PaginaSeeder::class,
            UsuarioSeeder::class,
            PersonaSeeder::class

        ]); 
 

    }
}
