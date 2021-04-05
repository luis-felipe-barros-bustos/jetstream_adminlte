<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class Rol_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuario_crud_completo =  Role::create(['name'=>'Usuario_1']);
        $usuario_ver_modificar = Role::create(['name'=>'Usuario_2']);
        $usuario_ver_eliminaar = Role::create(['name'=>'Usuario_3']);
     
     Permission::create(['name'=>'ver'])->syncRoles([ $usuario_crud_completo,$usuario_ver_modificar, $usuario_ver_eliminaar]);
     Permission::create(['name'=>'crear'])->assignRole ( $usuario_crud_completo);
     Permission::create(['name'=>'editar'])->syncRoles( [$usuario_crud_completo,$usuario_ver_modificar]);
     Permission::create(['name'=>'eliminar'])->syncRoles([ $usuario_crud_completo,$usuario_ver_eliminaar]);
 
 
      Permission::create(['name'=>'admin-permission.listar'])->syncRoles([ $usuario_crud_completo]);
      Permission::create(['name'=>'admin-user.store'])->syncRoles([ $usuario_crud_completo]);
      Permission::create(['name'=>'admin-role.store'])->syncRoles([ $usuario_crud_completo]);
    }
}
