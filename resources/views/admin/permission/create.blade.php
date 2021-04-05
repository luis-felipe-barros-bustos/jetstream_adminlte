@extends('adminlte::page')

@section('title', 'Puro PC')

@section('content_header')
    <h1>Panel Administrador</h1>
@stop

@section('content')
    <p>Bienvenido Admin.</p>

    <form method="POST" action="storepermission" >
      @method('PUT')
      @csrf
    <input type="text"
    name="nombre"
    placeholder="Nombre del permiso"
    class="form-control mb-2"
    value="">
    @foreach($role as $roles)

    
<input type="checkbox" id="roles {{$roles->id}}"
 name="roles[]"
  value="{{$roles->id}}"
  @if(is_array(old('roles')) 
  && in_array('roles->id',old('roles')))
  checked
  @endif> 
  <label>{{$roles->name}}</label>
</br>
@endforeach
    

    
    <button class="btn btn-warning btn-block" type="submit">Guardar</button>
    </form>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
   
    
@stop

@section('js')
    <script> console.log('Hi!'); </script>
   
@stop

