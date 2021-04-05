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
        $this->call(Rol_seeder::class);
        $this->call(Usuario_seeder::class); 
       $this->call(PermissionTableSeeder::class);
    }
}
