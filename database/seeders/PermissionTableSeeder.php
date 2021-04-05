<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\admin\PermissionController;
use App\Http\Controllers\admin\RoleController;
class PermissionTableSeeder extends Seeder
{ 
    const PERMISSIONS =[
        
      




    
    
    
    
    
    
    
    
    
    //   //'create'=>'admin-Permission.create', // crear en form y para store(almacenar el create)
        ////'listar'=>'admin-permission.listar', // listado como para detalle
        ////'editar'=>'admin-permission.editar', //edicion como para update
        ////'eliminar'=>'admin-permission.eliminar',
          // ////'edit-image'=>'admin-permission.image',
           
               ];
        // sef puntero para metodos estatoicos
        //public function __construct(){
        // $this->middleware('permission:'.self::PERMISSIONS['index'])-> only('index');
         // $this->middleware('permission:'.self::PERMISSIONS['create'])-> only('create');
           //$this->middleware('permission:'.self::PERMISSIONS['store'])-> only('store');
           //$this->middleware('permission:'.self::PERMISSIONS['listar'])-> only('listar');
          //$this->middleware('permission:'.self::PERMISSIONS['editar'])-> only('editar');
          //$this->middleware('permission:'.self::PERMISSIONS['update'])-> only('update');
           //$this->middleware('permission:'.self::PERMISSIONS['edit-image'])-> only('imagen');
           //$this->middleware('permission:'.self::PERMISSIONS['eliminar'])-> only('eliminar');
          // $this->middleware('permission:'.self::PERMISSIONS['asignar-roles'])->only(['role']);
           //$this->middleware('permission:'.self::PERMISSIONS['asignar-permissions'])->only(['permission']);
           
        //}
           
          // //  $this->middleware('permission:'.self::PERMISSIONS['create'])-> only(['create','store']);
          // //  $this->middleware('permission:'.self::PERMISSIONS['editar'])-> only(['editar','update']);
          // //  $this->middleware('permission:'.self::PERMISSIONS['listar'])-> only(['show','detalle']);
          // //  $this->middleware('permission:'.self::PERMISSIONS['eliminar'])-> only(['eliminar']);
          // // // $this->middleware('permission:'.self::PERMISSIONS['edit-image'])-> only('image');
           //}
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::updateOrCreate(['name'=>PermissionController::PERMISSIONS['indexuser']]);//,[
            //   'description'=>'Creacion de usuarios'
           //]);
        Permission::updateOrCreate(['name'=>PermissionController::PERMISSIONS['crearuser']]);//,[
         //   'description'=>'Creacion de usuarios'
        //]);
        Permission::updateOrCreate(['name'=>PermissionController::PERMISSIONS['storeuser']]);//,[
            //   'description'=>'Creacion de usuarios'
           //]);
        Permission::updateOrCreate(['name'=>PermissionController::PERMISSIONS['listaruser']]);//,[
    //            'description'=>'Listado y detalle de usuarios'
    //      ]);
        Permission::updateOrCreate(['name'=>PermissionController::PERMISSIONS['editaruser']]);//,[
        //    'description'=>'Edicion de usuarios'
        //]);
        Permission::updateOrCreate(['name'=>PermissionController::PERMISSIONS['updateuser']]);//,[
            //   'description'=>'Creacion de usuarios'
           //]);
        Permission::updateOrCreate(['name'=>PermissionController::PERMISSIONS['eliminaruser']]);//,[
            //    'description'=>'Edicion de usuarios'
            //]);
        
          Permission::updateOrCreate(['name'=>PermissionController::PERMISSIONS['asignar-roles']]);//,[
            //   'description'=>'Creacion de usuarios'
           //]);
           Permission::updateOrCreate(['name'=>PermissionController::PERMISSIONS['asignar-permissions']]);//,[
            //   'description'=>'Creacion de usuarios'
           //]);
    
    
    
    
    
    
    
         
        Permission::updateOrCreate(['name'=>PermissionController::PERMISSIONS['indexpermiso']]);//,[
            //   'description'=>'Creacion de usuarios'
           //]);
        Permission::updateOrCreate(['name'=>PermissionController::PERMISSIONS['crearpermiso']]);//,[
         //   'description'=>'Creacion de usuarios'
        //]);
        Permission::updateOrCreate(['name'=>PermissionController::PERMISSIONS['storepermiso']]);//,[
            //   'description'=>'Creacion de usuarios'
           //]);
        Permission::updateOrCreate(['name'=>PermissionController::PERMISSIONS['listarpermiso']]);//,[
    //            'description'=>'Listado y detalle de usuarios'
    //      ]);
        Permission::updateOrCreate(['name'=>PermissionController::PERMISSIONS['editarpermiso']]);//,[
        //    'description'=>'Edicion de usuarios'
        //]);
        Permission::updateOrCreate(['name'=>PermissionController::PERMISSIONS['updatepermiso']]);//,[
            //   'description'=>'Creacion de usuarios'
           //]);
        Permission::updateOrCreate(['name'=>PermissionController::PERMISSIONS['eliminarpermiso']]);//,[
            //    'description'=>'Edicion de usuarios'
            //]);
    
    
    
    
    
    
            Permission::updateOrCreate(['name'=>PermissionController::PERMISSIONS['indexrole']]);//,[
              //   'description'=>'Creacion de usuarios'
             //]);
             Permission::updateOrCreate(['name'=>PermissionController::PERMISSIONS['crearrole']]);//,[
           //   'description'=>'Creacion de usuarios'
          //]);
          Permission::updateOrCreate(['name'=>PermissionController::PERMISSIONS['storerole']]);//,[
              //   'description'=>'Creacion de usuarios'
             //]);
          Permission::updateOrCreate(['name'=>PermissionController::PERMISSIONS['listarrole']]);//,[
      //            'description'=>'Listado y detalle de usuarios'
      //      ]);
          Permission::updateOrCreate(['name'=>PermissionController::PERMISSIONS['editarrole']]);//,[
          //    'description'=>'Edicion de usuarios'
          //]);
          Permission::updateOrCreate(['name'=>PermissionController::PERMISSIONS['updaterole']]);//,[
              //   'description'=>'Creacion de usuarios'
             //]);
          Permission::updateOrCreate(['name'=>PermissionController::PERMISSIONS['eliminarrole']]);//,[
              //    'description'=>'Edicion de usuarios'
              //]);
    }
}
