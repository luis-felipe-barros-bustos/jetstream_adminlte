@extends('layouts.app')

@section('content')
<h1>Listado de roles</h1>
<table>
    <thead>
        <tr>
            <td>roles</td>
        </tr>
    </thead>
    <tbody>
        @foreach($row as $e)
        <tr>
            <td> <a  href="{{ route('detallerol', $e->id)}}">{{$e->name}}</a></td>
            <td> <a  href="{{ route('editarrol', $e->id)}}">Editar</a></td>
            <td> <a  href="{{ route('eliminarrol', $e->id)}}">Eliminar</a></td>
            
        </tr>
    @endforeach
    </tbody>
</table>
@endsection