@extends('Templates.navbar')

@section('title')
<title>Profesores</title>
@endsection


@section('content')

    <div class="container-fluid mt-4">
        <div class="row">
            <div class=" col-12">
                <a href="{{route('Admin.index')}}" ><button class="btn btn-danger d-grid text-white shadow-sm">Volver</button></a>
            </div> 
            <div class="d-flex col-12 mt-3 justify-content-between">
                <h3 class="text-white">Equipo de profesores</h3>
                <a href="{{route('Admin.agregarProfesor')}}" ><button class="btn btn-primary d-grid text-white shadow-sm">Agregar profesor</button></a>
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
                            <th scope="col">ID</th>
                            <th scope="col">Nombre Completo</th>
                            <th scope="col">Correo Institucional</th>
                        </tr>
                    </thead>
                    <tbody class="table-dark">
                        @foreach ($profesores as $num=>$profesor)

                        <tr>
                            <th scope="row">{{$num+1}}</th>
                            <td class="align-text-middle">{{$profesor->id}}</td>
                            <td class="align-text-middle">{{$profesor->nombre}} {{$profesor->apellido}}</td>
                            <td class="align-text-middle">{{$profesor->email}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection