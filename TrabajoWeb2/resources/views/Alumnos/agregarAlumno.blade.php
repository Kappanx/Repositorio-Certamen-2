{{-- ESTO NO VA --}}
@extends('Templates.navbar')

@section('title')
<title>Agregar Alumno</title>
@endsection

@section('content')

    <div class="container-fluid mt-5">

        <div class="row justify-content-evenly">
            <div class="col-7">
                <div class="card bg-darkBG text-white">
                    <div class="card-header bg-dark">
                        <h4>Agregar Nuevo Alumno</h4>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="mb-3">
                                <label for="exampleInputText1" class="form-label">Rut</label>
                                <input type="text" class="form-control" id="exampleInput">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputText1" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="exampleInput">
                            </div>
                             <div class="mb-3">
                                <label for="exampleInputText1" class="form-label">Apellido</label>
                                <input type="text" class="form-control" id="exampleInput">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputText1" class="form-label">Correo Institucional</label>
                                <input type="email" class="form-control" id="exampleInput">
                            </div>
                            <div class="mt-5">
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