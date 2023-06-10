@extends('Templates.navbar')

@section('title')
<title>Alumnos</title>
@endsection


@section('content')

    <div class="container-fluid mt-4">
        <div class="row">
            <div class=" col-12">
                <a href="{{route('Admin.index')}}" ><button class="btn btn-danger d-grid text-white shadow-sm">Volver</button></a>
            </div> 
            <div class="col-12 mt-3">
                <h3 class="text-white">Alumnos Inscritos</h3>
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
                                <a href="#" class="btn btn-primary text-white me-3">Agregar</a>
                            </div>
                
                        </form>
                    </div>
                </div>
            </div>


        </div>

    </div>

@endsection