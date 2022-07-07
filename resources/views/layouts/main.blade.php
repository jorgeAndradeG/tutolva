<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/inicio.css') }}">
    <link rel="stylesheet" href="{{ asset('css/tolva.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body>
    <nav>
      
        <i id="icono" class="fa-solid fa-recycle fa-3x"></i>
      
        <a id="logo" href="/">Tú Tolva</a>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
        <i class="fa-solid fa-bars"></i>
        </label>
        <ul>
        <li class="active"><a href="/">Inicio</a></li>
        <!-- <li><a href="#">Nosotros</a></li>
        <li><a href="#">Contacto</a></li>
        <li><a href="#">Redes Sociales</a></li> -->
        </ul>
    </nav>
    @yield('content')
</body>
</html>