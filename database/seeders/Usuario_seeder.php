<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\Models\User;
use Str;
use Spatie\Permission\Models\Permission;
class Usuario_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([

            'name'=>'fELIPE BARROS',
            'email'=>'felipe.barros@casa.cl',
            'password'=>bcrypt('123456'),
            'remember_token' => Str::random(60),
        ])->assignRole('Usuario_1')->givePermissionTo([
            'ver','crear','editar','eliminar','admin-permission.listar','admin-user.store','admin-role.store'
        ]);




        User::create([

            'name'=>'carlod palacios',
            'email'=>'carlos.palacios@casa.cl',
            'password'=>bcrypt('123456'),
            'remember_token' => Str::random(60),
        ])->assignRole('Usuario_2')->givePermissionTo([
            'ver','editar'
        ]);

      


        User::create([

            'name'=>'javier clares',
            'email'=>'javier.clares@casa.cl',
            'password'=>bcrypt('123456'),
            'remember_token' => Str::random(60),
        ])->assignRole('Usuario_3')->givePermissionTo([
           'ver','eliminar'
        ]);
    }
}
