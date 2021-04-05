@extends('layouts.app')

@section('content')

<form method="POST" action="{{route('storeroler')}}" >
  @method('PUT')
  @csrf
<input type="text"
name="nombre"
placeholder="Nombre del rol"
class="form-control mb-2"
value="{{old('nombre')}}">
@foreach($permissions as $permission)

    
<input type="checkbox" id="permission {{$permission->id}}"
 name="permission[]"
  value="{{$permission->id}}"
  @if(is_array(old('permission')) 
  && in_array('permission->id',old('permission')))
  checked
  @endif> <label>{{$permission->name}}</label>
</br>
@endforeach

<a href="{{route('home')}}">cancelar</a>
<button class="btn btn-warning btn-block" type="submit">Guardar</button>
</form>

@endsection