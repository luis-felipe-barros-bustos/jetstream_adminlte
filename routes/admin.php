<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\HomeController;
Route::get('', [HomeController::class, 'index']);


Route::get('/roles', [App\Http\controllers\admin\RoleController::class, 'index'])->name('index');
Route::get('/listarroles', [App\Http\controllers\admin\RoleController::class, 'listar'])->name('listarrole');
Route::get('/crearrol', [App\Http\controllers\admin\RoleController::class, 'create'])->name('crearrole');
Route::put('/store', [App\Http\controllers\admin\RoleController::class, 'storerole'])->name('storeroler');
Route::get('/editarro/{role}',[App\Http\Controllers\admin\RoleController::class, 'editar'])->name('editarrol');
Route::put('/updaterol/{role}',[App\Http\Controllers\admin\RoleController::class, 'update'])->name('updaterol');
Route::get('/detallerol/{id}', [App\Http\controllers\admin\RoleController::class, 'detalle'])->name('detallerol');
Route::get('/eliminarrol/{role}', [App\Http\controllers\admin\RoleController::class, 'eliminar'])->name('eliminarrol');
//Route::resource('roles', 'admin/RoleController')
//->names('role')
//->parameters(['permisos'=>'role']);
//->only(['index','show']);


Route::get('/permiso', [App\Http\controllers\admin\PermissionController::class, 'index'])->name('index');
Route::get('/listarpermission', [App\Http\controllers\admin\PermissionController::class, 'show'])->name('listarpermission');
//->middleware(['Permission:admin-permission.listar']);
Route::get('/crearpermission', [App\Http\controllers\admin\PermissionController::class, 'crearPermiso'])->name('crearpermission');
Route::put('/storepermission', [App\Http\controllers\admin\PermissionController::class, 'storepermiso'])->name('storepermission');
Route::get('/editarpermiso/{permission}',[App\Http\Controllers\admin\PermissionController::class, 'editar'])->name('editarpermiso');
Route::put('/updatepermiso/{permission}',[App\Http\Controllers\admin\PermissionController::class, 'update'])->name('updatepermiso');
Route::get('/detallepermiso/{id}', [App\Http\controllers\admin\PermissionController::class, 'detalle'])->name('detallpermiso');
Route::get('/eliminarpermiso/{permission}', [App\Http\controllers\admin\PermissionController::class, 'eliminar'])->name('eliminarpermiso');

//imagen y eliminar no estan
////Route::get('/index', [App\Http\controllers\UserController::class, 'index'])->name('home');
//Route::get('/crear', [App\Http\controllers\Auth\RegisterController::class, 'create'])->name('crearusuario');
Route::get('/user', [App\Http\controllers\admin\UserController::class, 'index'])->name('index');
Route::get('/listaruser', [App\Http\controllers\admin\UserController::class, 'listar'])->name('listaruser');
Route::get('/crearuser', [App\Http\controllers\admin\UserController::class, 'create'])->name('crearuser');
Route::put('/storeusu', [App\Http\controllers\admin\UserController::class, 'store'])->name('storeususer');
Route::get('/editar/{user}',[App\Http\Controllers\admin\UserController::class, 'editar'])->name('editaruser');
Route::put('/update/{user}',[App\Http\Controllers\admin\UserController::class, 'update'])->name('updateuser');
Route::get('/detalleuser/{id}', [App\Http\controllers\UserController::class, 'detalle'])->name('detalleuser');
Route::get('/eliminaruser/{user}', [App\Http\controllers\admin\UserController::class, 'eliminar'])->name('eliminaruserl');
//Auth::routes();