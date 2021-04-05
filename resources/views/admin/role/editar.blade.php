
@extends('layouts.app')

@section('content')

<form method="POST" action="{{route('updaterol',$role->id)}}" >
    @method('PUT')
    @csrf

    <input
    type="text"
    name="nombre"
    placeholder="Nombre del rol"
    class="form-control mb-2"
    value="{{$role->name}}">


    @foreach($permission_check as $key => $permission)
    <input type="checkbox"@if($permission["check"]) checked @endif
        name="permission[]"
     value="{{$permission['id']}}"> 
     <label>{{$key}}</label>
   
   </br>
    @endforeach
    
    <button class="btn btn-warning btn-block" type="submit">actualizar</button>
  </form>
@endsection