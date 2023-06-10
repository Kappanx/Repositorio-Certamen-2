@extends('Templates.navbar')

@section('title')
<title>Proyectos</title>
@endsection


@section('content')

    <div class="container-fluid mt-4">
        <div class="row">
            <div class="col-lg-10 col-12">
                <a href="{{route('Alumnos.index')}}" ><button class="btn btn-danger d-grid text-white shadow-sm">Volver</button></a>
            </div>
        </div>
        <div class="row">
            <div class="d-flex col-12 justify-content-between mt-3">
                <h3 class="text-white">Proyectos</h3>
                <a href="{{route('Alumnos.subirProyecto')}}" ><button class="btn btn-primary d-grid text-white shadow-sm">Ingresar propuesta</button></a>
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
                            <th scope="col">Nombre</th>
                            <th scope="col">Estado Archivo</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="table-dark">
                        <tr>
                            <th scope="row">1</th>
                            <td>Pablo Fuentes</td>
                            <td>En revision...</td>
                            <td class="d-flex justify-content-evenly">
                                <a href="" class="btn btn-primary text-black"><span class="material-icons-outlined">file_download</span></a>
                                <a href="{{route('Alumnos.modProyecto')}}" class="btn btn-warning text-black"><span class="material-icons-outlined">border_color</span></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Modal-->
    <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content bg-darkBG text-white">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Observaciones</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                en Observacion.....
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

@endsection