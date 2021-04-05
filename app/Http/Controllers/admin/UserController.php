<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Str;

class UserController extends Controller
{
    public $permission; 
    public $role; 
  //  use ChangeImageTrait;
  const PERMISSIONS =[
  
    //'storeuser'=> 'admin-user.store',
    

     
           ];
    // sef puntero para metodos estatoicos
    public function __construct(){
       //$this->middleware('Permission:'.self::PERMISSIONS['indexpermiso'])-> only('index');
       //$this->middleware('Permission:'.self::PERMISSIONS['crearpermiso'])-> only('crear');
      // $this->middleware('Permission:'.self::PERMISSIONS['storeuser'])-> only('store');
       //$this->middleware('Permission:'.self::PERMISSIONS['listarpermiso'])-> only('listar');
       //$this->middleware('Permission:'.self::PERMISSIONS['editarpermiso'])-> only('editar');
       //$this->middleware('Permission:'.self::PERMISSIONS['updatepermiso'])-> only('update');
       //$this->middleware('Permission:'.self::PERMISSIONS['edit-image'])-> only('imagen');
       //$this->middleware('Permission:'.self::PERMISSIONS['eliminar'])-> only('eliminar');
       
       
       
      // //  $this->middleware('permission:'.self::PERMISSIONS['create'])-> only(['create','store']);
      // //  $this->middleware('permission:'.self::PERMISSIONS['editar'])-> only(['editar','update']);
      // //  $this->middleware('permission:'.self::PERMISSIONS['listar'])-> only(['show','detalle']);
      // //  $this->middleware('permission:'.self::PERMISSIONS['eliminar'])-> only(['eliminar']);
      // // // $this->middleware('permission:'.self::PERMISSIONS['edit-image'])-> only('image');
       }
        //public function __construct()
        //{
         //   $this->middleware('role_or_permissio;n:rol|permission') only('listar');
       // }

       Public function API(){
        $ts=now();
        $apikey='f7433f5514ddd20e453660da7fa4ce6f' ;
        $apikeyprivada='1d64b7ec5ded2f436c1583577a8a5c3978257700';
        
       $hash=md5($ts.$apikeyprivada.$apikey);
       
       $response =Http::get("https://gateway.marvel.com:443/v1/public/comics?ts=1&apikey=f7433f5514ddd20e453660da7fa4ce6f&hash=68057c50627b49cad87384e807f32a69", [
       'timeout'=>2.0,
       'publicKey'=>'f7433f5514ddd20e453660da7fa4ce6f',
       'privateKey'=>'1d64b7ec5ded2f436c1583577a8a5c3978257700',
       'ts'=>'now()',
       'hash'=>'md5(ts.privateKey.publicKey)',
       
       ]);
       //'hash'=>md5("{$ts}.{$privateKey}.{$publicKey}"),
       //$respuesta=Http::get('https://gateway.marvel.com:443/v1/public/comics?ts=1&apikey=f7433f5514ddd20e453660da7fa4ce6f&hash=68057c50627b49cad87384e807f32a69');
       
       $array[]=json_decode($response->getBody());
       dd($array);
       DD($array);
       //return View('api',compact('array'));
       
       }
          
       public function index(){
        return ('home');           }
            public function listar(User $user){
                $row=$user->all();
                return view('admin.user.listar',compact('row'));           }
            public function create(){
                $permissions= Permission::all();
                $role=Role::all();
        return view('admin.user.create',compact('permissions','role'));  }
            public function store(Request $request,User $user){
                $permissions= Permission::all();
                $role=Role::all();
        
                $user->name = $request->nombre;
                $user->email=$request->email;
                $user->password=Hash::make($request->password);
                $user->remember_token = Str::random(60);
     //assignpermission asigna permiso a un usuario
             $user->givePermissionTo($request->permission);
            $user->assignRole($request->role);
                $user->save();
                return redirect()->route('listaruser',compact('user','permissions','role'));
        }
        public function detalle(User $user, $id){
            $row=$user->find($id);
            return view('admin.user.detalle',compact('row'));
            }
            public function editar(User $user){
                $permissions= Permission::all();
                $roles= Role::all();
             

                $haverole=$user->roles()->get();
       
                foreach ($roles as $role) {
         if($haverole->contains($role)){
                    $this->role[$role->name]['check']=true ;
                }else{
                    $this->role[$role->name]['check']=false ;
                }
                $this->role[$role->name]['id']=$role->id;
          
            }
            
            $role_check=$this->role;
            



                //permissions()  método retorna todos los permisos asociados a ese rol
                //role es el parametro del route
               $havepermission=$user->permissions()->get();
       
               foreach ($permissions as $permission) {
        if($havepermission->contains($permission)){
                   $this->permission[$permission->name]['check']=true ;
               }else{
                   $this->permission[$permission->name]['check']=false ;
               }
               $this->permission[$permission->name]['id']=$permission->id;
           }
           $permission_check=$this->permission;
           
           return view ('admin.user.editar',
           compact('user','permissions','permission_check','roles','role_check'));  }
        
                public function update(Request $request ,User $user){
                    $user->name=$request->input('nombre');
                    $user->email=$request->email;
             //syncpermissions actualiza roles has permission
        // request checbox
            $user->givePermissionTo($request->permission);
            $user->syncRoles($request->role);
            $user->update();
            return redirect()->route('listaruser',compact('user')); }
        public function eliminar(User $user){
            $user->delete();
            return redirect()->route('listaruser',compact('user')); }
}
