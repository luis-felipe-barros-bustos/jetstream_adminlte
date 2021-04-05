@extends('adminlte::page')

@section('title', 'Puro PC')

@section('content_header')
    <h1>Panel Administrador</h1>
@stop

@section('content')
    <p>Bienvenido Admin.</p>
<h1>detalle del rol</h1>
<table>
    <thead>
        
        
    </thead>
    <tbody>
        <h1>nombre</h1>
      {{$row->name}}
        <tr>
           
        
        </tr>

    </tbody>
</table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/plugins/iCheck/square/blue.css') }}">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script src="{{ asset('vendor/adminlte/plugins/iCheck/icheck.min.js') }}"></script>
        <script>
            $('.input[type="checkbox"]').iCheck()
        </script>
@stop

