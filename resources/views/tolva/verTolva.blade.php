@extends('layouts.main')



@section('content')
    <section>
            <div id="img-tolva">
                <img src="https://www.diarioregionalaysen.cl/files/620417e6af371_890x533.jpg" alt="">
                <div id="contenido">
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
                <p>Municipalidad Coyhaique</p>
                <p>Dirección: {{ $tolva->direccion }}</p>
                <p>Teléfono: 067-675100</p>
                <p>Abre:{{ $hora_inicio }}</p>
                <p>Cierra: {{ $hora_fin }}</p>
                <p>Fecha de Inicio: {{ $fecha_inicio }}</p>
                <p>Fecha  de Termino: {{ $fecha_fin }}</p>
                <a href="/">Volver</a>
            </div>
            </div>
    </section>
@endsection