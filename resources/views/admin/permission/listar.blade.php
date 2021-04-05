@extends('adminlte::page')

@section('title', 'Puro PC')

@section('content_header')
    <h1>Panel Administrador</h1>
@stop

@section('content')

    <p>Bienvenido Admin.</p>
<h1>Listado de permisos</h1>

<table id="articulos"class="table table-black table-bordered" style="width:100%">
    <thead>
       
        <tr>
            <td>permisos</td>
            <td>editar</td>
            <td>eliminar</td>
        </tr>
    </thead>
    <tbody>
        @foreach($row as $e)
        <tr>
            <td> <a  href="{{ route('detallpermiso', $e->id)}}">{{$e->name}}</a></td>
            <td> <a  href="{{ route('editarpermiso', $e->id)}}">Editar</a></td>
            <td> <a  href="{{ route('eliminarpermiso', $e->id)}}">Eliminar</a></td>
            
        </tr>
    @endforeach
    </tbody>
</table>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script>
        $(function () {
          $('#articulos').DataTable({
            'paging'      : true,
            'lengthChange': true,
            'searching'   : true,
            'ordering'    : true,
            'info'        : true,
            'autoWidth'   : true,
            


            "language": {
                "lengthMenu": "Mostrar "+`
                <select name="example_length">
                    <option value="5">5</option>
                    <option value="10">10</option>
                    <option value="-1">Todo</option>
                </select>
                `+ "",
                "zeroRecords": "No se encontraron registros",
                "info": "Mostrando _PAGE_ of _PAGES_",
                "infoEmpty": "No hay registros disponibles",
                "infoFiltered": "(Filtrado de  _MAX_ total registros)",
                "search": " Buscar:",
                "paginate":{
                    "next": "siguiente",
                    "previous": "anterior",
                }

            }
          })
        })
      </script>

    
    

    
@stop


