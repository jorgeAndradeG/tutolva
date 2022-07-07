<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

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
                <td><a type="button" class="btn btn-success btn-sm" href="{{action('App\Http\Controllers\crudAdminController@edit', $tolva->id)}}"><i class="far fa-edit"></i></a></td> 
                <td><a type="button" class="btn btn-danger btn-sm ventana"  data-bs-toggle="modal" data-bs-target="#exampleModal" data-id='{{$tolva->id}}'><i class="far fa-trash-alt"></i></a></td> 

                </tr>
             @endforeach
         @endif
        </tbody>
    </table>
</div>

@stop
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Eliminar Producto</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                
                <form  method="POST" action="{{action('App\Http\Controllers\crudAdminController@eliminar')}}" enctype="multipart/form-data">
                @csrf
                    <div class="modal-body">
                            <p>¿Esta seguro que desea eliminar esta tolva? </p>
                            <input type="hidden" name="modalid" id="modalid">
                    </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-success">Eliminar</button>
                        </div>
                </form>
               
                    
                </div>
            </div>
</div>
<script>
$(document).on("click",".ventana",function(){
    var Id = $(this).data('id');
    $(".modal-body #modalid").val(Id);
    $('#exampleModal').modal('show');
});
</script>