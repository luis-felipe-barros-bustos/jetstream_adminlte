@extends('layouts.app')

@section('content')
<h1>detalle del usuario</h1>
<table>
    <thead>
        
        
    </thead>
    <tbody>
        <h1>nombre</h1>
      {{$row->name}}


      <h1>email</h1>
      {{$row->email}}

      <h1>Fecha de creeacion</h1>
      {{$row->created_at}}

      <h1>fecha de actualizacion</h1>
      {{$row->updated_at}}
        <tr>
           
        
        </tr>

    </tbody>
</table>
@endsection