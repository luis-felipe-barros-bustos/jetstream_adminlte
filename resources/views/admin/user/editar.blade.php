
@extends('layouts.app')

@section('content')

<form method="POST" action="{{route('updateuser',$user->id)}}" >
    @method('PUT')
    @csrf

    <input
    type="text"
    name="nombre"
    placeholder="Nombre"
    class="form-control mb-2"
    value="{{$user->name}}">

    <input
    type="email"
    name="email"
    placeholder="Email"
    class="form-control mb-2"
    value="{{$user->email}}">

    @foreach($permission_check as $key => $permission)
    <input type="checkbox"@if($permission["check"]) checked @endif
        name="permission[]"
     value="{{$permission['id']}}"> 
     <label>{{$key}}</label>
   
   </br>
    @endforeach
    
    @foreach($role_check as $key => $role)
    <input type="checkbox"@if($role["check"]) checked @endif
        name="role[]"
     value="{{$role['id']}}"> 
     <label>{{$key}}</label>
   
   </br>
    @endforeach
    

    <button class="btn btn-warning btn-block" type="submit">actualizar</button>
  </form>
@endsection