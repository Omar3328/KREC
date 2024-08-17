<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Llama al seeder del usuario administrador
        $this->call(AdminUserSeeder::class);
        
        // Puedes añadir otros seeders aquí si es necesario
    }
}
