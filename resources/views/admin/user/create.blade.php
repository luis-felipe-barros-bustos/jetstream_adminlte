
<form method="POST" action="{{route('storeususer')}}" >
  @method('PUT')
  @csrf
<input type="text"
name="nombre"
placeholder="Nombre del rol"
class="form-control mb-2"
value="">
<input type="email"
name="email"
placeholder="Ingrese su email"
class="form-control mb-2"
value="">
<input type="password"
name="password"
placeholder="Ingrese contraseña"
class="form-control mb-2"
value="">
@foreach($permissions as $permission)

    
<input type="checkbox" id="permission {{$permission->id}}"
 name="permission[]"
  value="{{$permission->id}}"> <label>{{$permission->name}}</label>
</br>
@endforeach

@foreach($role as $permission)

    
<input type="checkbox" id="permission {{$permission->id}}"
 name="permission[]"
  value="{{$permission->id}}"> 
  <label>{{$permission->name}}</label>
</br>
@endforeach
<a href="{{route('home')}}">cancelar</a>
<button class="btn btn-warning btn-block" type="submit">Guardar</button>
</form>