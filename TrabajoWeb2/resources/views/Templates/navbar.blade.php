<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Links -->
    <link rel="stylesheet" href="{{ asset('css/custom-colors.min.css') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined"
      rel="stylesheet">

    <!-- si -->
    @yield('title')


</head>
<body class="bg-darkBG" >
    
    <div class="container-fluid">

        <!-- NavBar -->
        <nav class="navbar navbar-expand-lg bg-darkBG navbar-dark shadow">
        <div class="container-xl">
            <a class="navbar-brand" href="#"><img src="{{ asset('imgs/LogoUSM white.png') }}" alt="" width="100"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link" href="{{route('Main.home')}}">Inicio</a>
                </li>

                <li class="nav-item">
                <a class="nav-link" href="{{route('Proyectos.proyectos')}}">Proyectos</a>
                </li>

                <li class="nav-item">
                <a class="nav-link" href="{{route('Alumnos.alumnos')}}">Alumnos</a>
                </li>

                <li class="nav-item">
                <a class="nav-link" href="{{route('Profesores.profesores')}}">Profesores</a>
                </li>

            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                <button class="btn btn-outline-light" type="submit">Buscar</button>
            </form>
            </div>
        </div>
        </nav>


        <!-- contenido principal -->
        <div class="container-xl">
            @yield('content')
        </div>

    </div>

    <!-- scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>
</html>