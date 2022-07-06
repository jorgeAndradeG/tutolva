@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content')
<div class="container">

    <div class="row align-item-start">   
        <div class="col-12">
            <h2 style="text-align:center">Editar Tolva</h2>
            <form method="POST" action="{{action('App\Http\Controllers\crudAdminController@update', $tolva->id)}}" enctype="multipart/form-data">
                 @csrf  
                 @method('PATCH')
                    <div class="form-floating mb-3">
                        <label for="direccion">Direccion</label>
                        <input type="text" class="form-control" name="direccion" id="direccion" value="{{$tolva->direccion}}" required >
                    </div>

                    <div class="form-floating mb-3">
                        <label for="hora_inicio">Hora de inicio</label>
                        <input type="time" class="form-control" name="hora_inicio" id="hora_inicio" value="{{$tolva->hora_inicio}}" required >
                    </div>

                    <div class="form-floating mb-3">
                        <label for="hora_fin">Hora de fin</label>
                        <input type="time" class="form-control" name="hora_fin" id="hora_fin" value="{{$tolva->hora_fin}}" required >
                    </div>

                    <div class="form-check">
                        @if($tolva->estado == 1)
                            <input class="form-check-input" type="checkbox" name="estado" id="estado" checked>
                        @else
                            <input class="form-check-input" type="checkbox" name="estado" id="estado">
                        @endif
                        <label class="form-check-label" for="estado">¿Activar?</label>
                    </div>
                    <br>
                    <div class="form-floating mb-3">
                        <label for="fecha_inicio">Fecha de inicio</label>
                        <input type="date" class="form-control" name="fecha_inicio" id="fecha_inicio" value="{{$tolva->fecha_inicio}}"required >
                    </div>
                    
                    <div class="form-floating mb-3">
                        <label for="fecha_fin">fecha de fin</label>
                        <input type="date" class="form-control" name="fecha_fin" id="fecha_fin" value="{{$tolva->fecha_fin}}" required >
                    </div>
                    <br>
                    <button type="submit" class="btn btn-success" id="botonAgregar">Editar Tolva</button>

            </form>
        </div>
    </div>
</div>

@stop