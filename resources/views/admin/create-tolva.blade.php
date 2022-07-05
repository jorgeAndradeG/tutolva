@extends('adminlte::page')

@section ('title','Dashboard')

@section('content')

<div class="container">

    <div class="row align-item-start">   
        <div class="col-12">
            <h2 style="text-align:center">Agregar Tolva</h2>
            <form method="POST" action="{{action('App\Http\Controllers\crudAdminController@store')}}" enctype="multipart/form-data">
                 @csrf  
                 @if(isset($msg))
                    {{$msg}}
                 @endif
                    <div class="form-floating mb-3">
                        <label for="direccion">Direccion</label>
                        <input type="text" class="form-control" name="direccion" id="direccion" required >
                    </div>

                    <div class="form-floating mb-3">
                        <label for="hora_inicio">Hora de inicio</label>
                        <input type="time" class="form-control" name="hora_inicio" id="hora_inicio" required >
                    </div>

                    <div class="form-floating mb-3">
                        <label for="hora_fin">Hora de fin</label>
                        <input type="time" class="form-control" name="hora_fin" id="hora_fin" required >
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="estado" id="estado">
                        <label class="form-check-label" for="estado">¿Activar?</label>
                    </div>

                    <div class="form-floating mb-3">
                        <label for="fecha_inicio">Fecha de inicio</label>
                        <input type="date" class="form-control" name="fecha_inicio" id="fecha_inicio" required >
                    </div>
                    
                    <div class="form-floating mb-3">
                        <label for="fecha_fin">fecha de fin</label>
                        <input type="date" class="form-control" name="fecha_fin" id="fecha_fin" required >
                    </div>
                    <br>
                    <button type="submit" class="btn btn-success" id="botonAgregar">Agregar Tolva</button>

            </form>
        </div>
    </div>
</div>

@stop