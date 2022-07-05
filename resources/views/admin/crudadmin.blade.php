<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>


@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content')


<div class="container-fluid"> 
<div class="row">
<h2 style="text-align:center;">Ubicaciones de tolvas</h2>
</div>
<div class="form-floating mb-3" style="text-align:right;">
    <a href="{{action('App\Http\Controllers\crudAdminController@create')}}" type="button" class="btn btn-success ">Agregar Tolva</a>
</div>
<br>
    <table class="table">
        <thead>
             <tr>
                <th scope="col">Direccion</th>
                <th scope="col">Hora Inicio</th>
                <th scope="col">Hora Fin</th>
                <th scope="col">Fecha Inicio</th>
                <th scope="col">Fecha Fin</th>
                <th scope="col">Estado</th>
                <th scope="col">Editar</th>
                <th scope="col">Eliminar</th>
            </tr>
        </thead>
        <tbody>
        @if($tolvas)
             @foreach($tolvas as $tolva)
                <tr>
                <th>{{$tolva->direccion}}</th>
               
                @php 
                    $hora_inicio = new DateTime($tolva->hora_inicio);
                    $hora_inicio = date_format($hora_inicio,"g:i");
                    $hora_fin = new DateTime($tolva->hora_fin);
                    $hora_fin = date_format($hora_fin,"g:i");
                    $fecha_inicio = new DateTime($tolva->fecha_inicio);
                    $fecha_inicio = date_format($fecha_inicio,"d-m-Y");
                    $fecha_fin = new DateTime($tolva->fecha_fin);
                    $fecha_fin = date_format($fecha_fin,"d-m-Y")
                
                @endphp
                <th>{{$hora_inicio}}</th>
                <th>{{$hora_fin}}</th>
                <th>{{$fecha_inicio}}</th>
                <th>{{$fecha_fin}}</th>
                @if($tolva->estado == 1)
                <td><p style="color:green">Activo</p></td>
                @else
                <td><p style="color:red">Inactivo</p></td>
                @endif
                <td><a type="button" class="btn btn-success btn-sm" href=""><i class="far fa-edit"></i></a></td> 
                <td><a type="button" class="btn btn-danger btn-sm ventana"  data-bs-toggle="modal" data-bs-target="#exampleModal" data-id='{{$tolva->id}}'><i class="far fa-trash-alt"></i></a></td> <!-- bOTÓN PARA ELIMINAR UN PRODUCTO -->

                </tr>
             @endforeach
         @endif
        </tbody>
    </table>
</div>

@stop
