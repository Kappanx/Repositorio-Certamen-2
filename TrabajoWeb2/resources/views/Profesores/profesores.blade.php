@extends('Templates.navbar')

@section('title')
<title>Profesores</title>
@endsection


@section('content')

    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-lg-10 col-12">
                <h3 class="text-white">Profesores</h3>
            </div>
            <div class="col-lg-2 col-12">
                <a href="{{route('Profesores.agregarProfesor')}}" ><button class="btn btn-primary d-grid text-white shadow-sm">Añadir Nuevo Profesor</button></a>
            </div>   
             
        </div>
        

        <!-- tablas -->
        <div class="row mt-3">

            <!-- tabla1 -->
            <div class="col">
                <table class="table table-striped table-hover table-bordered rounded rounded-3 overflow-hidden shadow">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">Nº</th>
                            <th scope="col">Rut</th>
                            <th scope="col">Nombre Completo</th>
                            <th scope="col">Correo Institucional</th>
                        </tr>
                    </thead>
                    <tbody class="table-dark">
                        <tr>
                            <th scope="row">1</th>
                            <td>01.234.567-8</td>
                            <td>Pablo Enrique Fuentes</td>
                            <td>pablo.fuentes@usm.cl</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>20.525.179-0</td>
                            <td>Etiam Nicolas Fuentes</td>
                            <td>etiam.fuentes@usm.cl</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>20.475.544-2</td>
                            <td>Maximiliano Andres Cris. Alvarez</td>
                            <td>maximiliano.alvarez@sansano.usm.cl</td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>


        </div>

    </div>

@endsection