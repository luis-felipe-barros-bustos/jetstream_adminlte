<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Models\User;
class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $role;
    const PERMISSIONS =[
    'indexpermiso'=>'admin-permission.index',
    'crearpermiso'=>'admin-Permission.create',
    'storepermiso'=> 'admin-Permission.store',
    'listarpermiso'=>'admin-permission.listar',
    'editarpermiso'=>'admin-permission.editar',
    'updatepermiso'=>'admin-permission.update',
    ///'edit-image'=>'admin-permission.image',
    'eliminarpermiso'=>'admin-permission.eliminar',
    'indexrole'=>'admin-role.index',
         'crearrole'=>'admin-role.create',
         'storerole'=> 'admin-role.store',
         'listarrole'=>'admin-role.listar',
         'editarrole'=>'admin-role.editar',
         'updaterole'=>'admin-role.update',
         //'edit-image'=>'admin-role.image',
         'eliminarrole'=>'admin-role.eliminar',
 
         'indexuser'=>'admin-user.index',
     'crearuser'=>'admin-user.create',
     'storeuser'=> 'admin-user.store',
     'listaruser'=>'admin-user.listar',
     'editaruser'=>'admin-user.editar',
     'updateuser'=>'admin-user.update',
     //'edit-image'=>'admin-permission.image',
     'eliminaruser'=>'admin-user.eliminar',
     'asignar-roles'=>'admin-user.role',
     'asignar-permissions'=>'admin-user.permission',
           ];
    // sef puntero para metodos estatoicos
    public function __construct(){
       //$this->middleware('Permission:'.self::PERMISSIONS['indexpermiso'])-> only('index');
       //$this->middleware('Permission:'.self::PERMISSIONS['crearpermiso'])-> only('crear');
       //$this->middleware('Permission:'.self::PERMISSIONS['storepermiso'])-> only('store');
       //$this->middleware('Permission:'.self::PERMISSIONS['listarpermiso'])-> only('listar');
       //$this->middleware('Permission:'.self::PERMISSIONS['editarpermiso'])-> only('editar');
       //$this->middleware('Permission:'.self::PERMISSIONS['updatepermiso'])-> only('update');
       //$this->middleware('Permission:'.self::PERMISSIONS['edit-image'])-> only('imagen');
     //$this->middleware('Permission:'.self::PERMISSIONS['eliminarpermiso'])-> only('eliminar');
       
       
       
      // //  $this->middleware('permission:'.self::PERMISSIONS['create'])-> only(['create','store']);
      // //  $this->middleware('permission:'.self::PERMISSIONS['editar'])-> only(['editar','update']);
      // //  $this->middleware('permission:'.self::PERMISSIONS['listar'])-> only(['show','detalle']);
      // //  $this->middleware('permission:'.self::PERMISSIONS['eliminar'])-> only(['eliminar']);
      // // // $this->middleware('permission:'.self::PERMISSIONS['edit-image'])-> only('image');
       }
 
       public function index(){
 return  view('Home');                                   }
       public function show(Permission $permission){
         $row=$permission->all();
 return view('admin.permission.listar',compact('row'));    }
       public function crearPermiso(Request $request){
         $role= Role::all();
         $permission=Permission::all();
      
         return view('admin.permission.create',compact('role','permission'));   }
         public function storepermiso(Request $request,Permission $permision) {
       $role= Role::all();
         //despues del request es el nombre del caampo
       $permision->name = $request->nombre;
       //request es el name del checkbok
       $permision->syncRoles($request->roles);
       $permision->save();
       return redirect()->route("listarpermission",compact('permision'));   }
     public function detalle(Permission $permision, $id){
       $row=$permision->find($id);
       return view('admin.permission.detalle',compact('row'));      }
   public function editar( Permission $permission){
      $roles= Role::all();
          //permissions()  método retorna todos los permisos asociados a ese rol
          //role es el parametro del route
         $haverole=$permission->roles()->get();
 
         foreach ($roles as $role) {
  if($haverole->contains($role)){
             $this->role[$role->name]['check']=true ;
         }else{
             $this->role[$role->name]['check']=false ;
         }
         $this->role[$role->name]['id']=$role->id;
     }
     $role_check=$this->role;
     return view ('admin.permission.editar',
     compact('permission','roles','role_check'));    }
 
     public function update(Request $request, Permission $permission){
       $permission->name=$request->input('nombre');      
  // request checbox
      $permission->syncRoles($request->role);
      $permission->update();
         return redirect()->route('listarpermission',compact('permission')); }
 
 public function eliminar(Permission $permission){
  
   $permission->delete();
    
   return redirect()->route("listarpermission");}
 }