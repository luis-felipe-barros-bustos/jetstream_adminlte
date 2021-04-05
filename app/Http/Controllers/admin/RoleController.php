<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class RoleController extends Controller
{
    public $permission;
    const PERMISSIONS =[
    
        //'storerole'=> 'admin-role.store',
        
         
               ];
   
        // self puntero para metodos estatoicos
        public function __construct(){
          //$this->middleware('permission:'.self::PERMISSIONS['index'])-> only('index');
          //$this->middleware('permission:'.self::PERMISSIONS['crear'])-> only('crear');
          // $this->middleware('permission:'.self::PERMISSIONS['storerole'])-> only('store');
           //$this->middleware('permission:'.self::PERMISSIONS['listar'])-> only('listar');
           //$this->middleware('permission:'.self::PERMISSIONS['editar'])-> only('editar');
           //$this->middleware('permission:'.self::PERMISSIONS['update'])-> only('update');
           //$this->middleware('permission:'.self::PERMISSIONS['edit-image'])-> only('imagen');
           //$this->middleware('permission:'.self::PERMISSIONS['eliminar'])-> only('eliminar');
           
           
           
          // //  $this->middleware('permission:'.self::PERMISSIONS['create'])-> only(['create','store']);
          // //  $this->middleware('permission:'.self::PERMISSIONS['editar'])-> only(['editar','update']);
          // //  $this->middleware('permission:'.self::PERMISSIONS['listar'])-> only(['show','detalle']);
          // //  $this->middleware('permission:'.self::PERMISSIONS['eliminar'])-> only(['eliminar']);
          // // // $this->middleware('permission:'.self::PERMISSIONS['edit-image'])-> only('image');
          }
    public function index(){
       // $row = Role::paginate();
return view('home');                  }
    public function listar(Role $role){
      $row = $role->all();//$row=Role::paginate();
return view('admin.role.listar',compact('row'));        }
    public function create(){
        $permissions= Permission::all();
return view('admin.role.create',compact('permissions'));  }
    public function storerole(Request $request, Role $role){
        $permissions= Permission::all();
        //$row= new Role($Request->all());
            //despues del request es el nombre del caampo
        $role->name = $request->nombre;
       //syncpermission actualiza roles has permission
        // request checbox
       $role->syncPermissions($request->permission);
        $role->save();
    return redirect()->route('listarrole',compact('role'));   }
public function detalle(Role $role, $id){
    $roles=$role->find($id);
    return view('admin.role.detalle',compact('roles','id'));
    // $row=Role::paginate();
}
    public function editar(Role $role){
         $permissions= Permission::all();
         //permissions()  método retorna todos los permisos asociados a ese rol
         //role es el parametro del route
        $havepermission=$role->permissions()->get();

        foreach ($permissions as $permission) {
 if($havepermission->contains($permission)){
            $this->permission[$permission->name]['check']=true ;
        }else{
            $this->permission[$permission->name]['check']=false ;
        }
        $this->permission[$permission->name]['id']=$permission->id;
    }
    $permission_check=$this->permission;

    return view ('admin.role.editar',
    compact('role','permissions','permission_check'));  }

        public function update(Request $request, Role $role){        
            $role->name=$request->input('nombre');
             //syncpermissions actualiza roles has permission
        // request checbox
            $role->syncPermissions($request->permission);
            $role->update();
            return redirect()->route('listarrole',compact('role')); }

public function eliminar(Role $role){
    $role->delete();
    return redirect()->route('listarrole'); }
}
