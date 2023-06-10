@extends('Templates.navbar')

@section('title')
<title>Subir Proyecto</title>
@endsection


@section('content')

    <div class="container-fluid mt-5">

        <div class="row justify-content-evenly">
            <div class="col-9">
                <div class="card bg-darkBG text-white shadow">
                    <div class="card-header bg-dark">
                        <h4>Subir Archivo Proyecto</h4>
                    </div>
                    <div class="card-body">
                        <form method='POST' action="{{route('Alumnos.store')}}">
                            @csrf
                            <div class="row">
                                <div class="col-6 mb-3">
                                    <label for="exampleInputText1" class="form-label">Nombre Alumno</label>
                                    <input type="text" class="form-control bg-darkBG text-white" id="exampleInput">
                                </div>
                                <div class="col-6 mb-3">
                                    <label for="exampleInputText1" class="form-label">Apellido Alumno</label>
                                    <input type="text" class="form-control bg-darkBG text-white" id="exampleInput">
                                </div>
                                <div class="col-9 mb-3">
                                    <label for="estudiante_rut" class="form-label">RUT Alumno</label>
                                    <input type="text" class="form-control bg-darkBG text-white" id="estudiante_rut" name="estudiante_rut">
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="email" class="form-label">Correo Institucional</label>
                                    <input type="email" class="form-control bg-darkBG text-white" id="email" aria-describedby="emailHelp">
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="documento" class="form-label">URL Archivo</label>
                                    <input type="text" class="form-control bg-darkBG text-white" id="documento" name="documento">
                                    <input type="text" class="form-control d-none" id="fecha" name="fecha" value="2023-06-10">
                                    <input type="text" class="form-control d-none" id="estado" name="estado" value="0">
                                    <input type="text" class="form-control d-none" id="id" name="id" value="0">
                                </div>
                                <div class="col-12 mt-4">
                                    <button type="submit" class="btn btn-primary text-white me-3">Subir</button>
                                    <a href="{{route('Alumnos.proyectos')}}" class="btn btn-danger text-white ">Cancelar</a>
                                </div>
                            </div>
                
                        </form>
                    </div>
                </div>
            </div>
        </div>



    </div>



@endsection