<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>

    <!-- Links -->
    <link rel="stylesheet" href="{{ asset('css/custom-colors.min.css') }}">

</head>
<body class="bg-darkBG">

    <div class="container-fluid">

        <!-- navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-darkBG mb-5 shadow">
            <div class="container-xl">
                <a class="navbar-brand" href="{{route('Main.home')}}"><img src="{{ asset('imgs/LogoUSM white.png') }}" alt="" width="100"></a>
                <a href="{{route('Main.login')}}"><button class="btn btn-outline-light" type="submit">Iniciar Sesion</button></a>
            </div>
        </nav>
        <div class="container-xl">
            <!-- Info -->
            <div class="row text-white mb-3">
                <div class="col-lg-8">
                    <h3>Taller de Información</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla molestie volutpat porttitor. Praesent eleifend facilisis dignissim. Integer et iaculis sem, sit amet sagittis velit. Sed eu justo est. Phasellus at libero sodales, luctus diam finibus, laoreet augue</p>
                </div>
                <div class="col-lg-4">
                    <img src="" alt="">
                </div>
            </div>

            <!-- Cards -->
            <div class="row">
                <!-- card1 -->
                <div class="col-12 col-lg-4 mb-4">
                    <div class="card bg-dark text-white shadow text-center">
                        <img src="{{ asset('imgs/foto-stock1.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body ">
                            <h5 class="card-title">Propuestas de proyecto</h5>
                            <p class="card-text"></p>
                            <a href="{{route('Alumnos.subirProyecto')}}" class="btn btn-success d-grid text-white mb-3">Ingresar una propuesta</a>
                            <a href="{{route('Alumnos.proyectos')}}" class="btn btn-primary d-grid text-white">Revisar propuestas</a>
                            
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-4 mb-4">
                    <div class="card bg-dark text-white shadow text-center">
                        <img src="{{ asset('imgs/foto-stockBW.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body ">
                            <h5 class="card-title">=PlaceHolder=</h5>
                            <p class="card-text"></p>
                            <a href="#" class="btn btn-gray d-grid text-white">Ir</a>
                        </div>
                    </div>
                </div>

                <!-- card2 -->

            </div>
        </div>
    </div> <!-- fin container -->

    <!-- scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>
</html>