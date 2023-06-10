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
                        <form>
                            <div class="row">
                                <div class="col-6 mb-3">
                                    <label for="exampleInputText1" class="form-label">Nombre Alumno</label>
                                    <input type="text" class="form-control bg-darkBG text-white" id="exampleInput">
                                </div>
                                <div class="col-6 mb-3">
                                    <label for="exampleInputText1" class="form-label">Apellido Alumno</label>
                                    <input type="text" class="form-control bg-darkBG text-white" id="exampleInput">
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Correo Institucional</label>
                                    <input type="email" class="form-control bg-darkBG text-white" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="exampleInputText1" class="form-label">URL Archivo</label>
                                    <input type="text" class="form-control bg-darkBG text-white" id="exampleInput">
                                </div>
                                <div class="col-12 mt-4">
                                    <a href="{{route('Alumnos.proyectos')}}" class="btn btn-primary text-white me-3">Enviar</a>
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