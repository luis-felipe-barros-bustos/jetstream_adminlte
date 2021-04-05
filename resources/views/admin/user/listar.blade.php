@extends('layouts.app')

@section('content')
<h1>Listado de ususuarios</h1>
<table>
    <thead>
        <tr>
            <td>Usuarios</td>
        </tr>
    </thead>
    <tbody>
        @foreach($row as $e)
        <tr>
            <td><a  href="{{ route('detalleuser', $e->id)}}">{{$e->name}}</a></td>
        <td> <a  href="{{ route('editaruser', $e->id)}}">Editar</a></td>
        <td> <a  href="{{ route('eliminaruserl', $e->id)}}">Eliminar</a></td>
        </tr>
    @endforeach

    
    </tbody>
</table>
@endsection