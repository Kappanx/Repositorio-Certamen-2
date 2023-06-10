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
                        @foreach ($estudiantes as $num=>$estudiante)

                        <tr>
                            <th scope="row">{{$num+1}}</th>
                            <td class="align-text-middle">{{$estudiante->rut}}</td>
                            <td class="align-text-middle">{{$estudiante->nombre}} {{$estudiante->apellido}}</td>
                            <td class="align-text-middle">{{$estudiante->email}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="col-4">
                <div class="card bg-darkBG text-white shadow border-dark">
                    <div class="card-header bg-dark">
                        <h4>Agregar Nuevo Alumno</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{route('Admin.store')}}">
                            @csrf
                            <div class="mb-3">
                                <label for="rut" class="form-label">Rut</label>
                                <input type="text" class="form-control bg-darkBG text-light" id="rut" name="rut" value="{{old('rut')}}">
                            </div>
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control bg-darkBG text-light" id="nombre" name="nombre" value="{{old('nombre')}}">
                            </div>
                             <div class="mb-3">
                                <label for="apellido" class="form-label">Apellido</label>
                                <input type="text" class="form-control bg-darkBG text-light" id="apellido" name="apellido" value="{{old('apellido')}}">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Correo Institucional</label>
                                <input type="email" class="form-control bg-darkBG text-light" id="email" name="email" value="{{old('email')}}">
                            </div>
                            <div class="mt-4">
                                <button type="submit" class="btn btn-primary text-white me-3">Agregar</button>
                            </div>
                
                        </form>
                    </div>
                </div>
            </div>


        </div>

    </div>

@endsection