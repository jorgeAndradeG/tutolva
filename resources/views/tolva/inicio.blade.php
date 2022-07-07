@extends('layouts.main')

@section('content')
    <section>
          <div id="icono-posicion">
              <i class="fa-solid fa-recycle fa-10x"></i>   
              <div id="titulo-icono">
                <label for="" class="" id="logo-nombre">Tú Tolva</label>
              </div>
          </div>
          <div id="texto-principal">
              <p>Bienvenido a Tú Tolva. En esta página podrás encontrar la toda la información que necesitas para encontrar los puntos más cercanos de reciclaje en la comuna de Coyhaique. 
                <br>
                <br>
                 Si deseas indagar y buscar que puntos están disponibles, presiona el botón ¨Ingresar¨ y podrás visualizar todas las tolvas disponibles.
                 <br>
                 <br>
                 Muchas gracias por visitarnos 😊♻️.
              </p>
              <div id="btn-inicio">
                 <a href="/listaTolva"><button id="btn-tamano">Ingresar</button></a> 
              </div>
          </div>   
@endsection