@extends('Templates.navbar')

@section('title')
<title>Alumnos</title>
@endsection


@section('content')

    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-lg-12 col-12">
                <h3 class="text-white">Alumnos</h3>
            </div> 
        </div>
        

        <!-- tablas -->
        <div class="row mt-3">

            <!-- tabla1 -->
            <div class="col-8">
                <table class="table table-striped table-hover table-bordered rounded rounded-3 overflow-hidden shadow ">
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

            <div class="col-4">
                <div class="card bg-darkBG text-white shadow border-dark">
                    <div class="card-header bg-dark">
                        <h4>Agregar Nuevo Alumno</h4>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="mb-3">
                                <label for="exampleInputText1" class="form-label">Rut</label>
                                <input type="text" class="form-control bg-darkBG text-light" id="exampleInput">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputText1" class="form-label">Nombre</label>
                                <input type="text" class="form-control bg-darkBG text-light" id="exampleInput">
                            </div>
                             <div class="mb-3">
                                <label for="exampleInputText1" class="form-label">Apellido</label>
                                <input type="text" class="form-control bg-darkBG text-light" id="exampleInput">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputText1" class="form-label">Correo Institucional</label>
                                <input type="email" class="form-control bg-darkBG text-light" id="exampleInput">
                            </div>
                            <div class="mt-4">
                                <a href="{{route('Alumnos.alumnos')}}" class="btn btn-primary text-white me-3">Agregar</a>
                                <a href="{{route('Alumnos.alumnos')}}" class="btn btn-danger text-white ">Cancelar</a>
                            </div>
                
                        </form>
                    </div>
                </div>
            </div>


        </div>

    </div>

@endsection