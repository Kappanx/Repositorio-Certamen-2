@extends('Templates.navbar')

@section('title')
<title>Proyectos</title>
@endsection


@section('content')

    <div class="container-fluid mt-4">
        <div class="row">
            <div class=" col-12">
                <a href="{{route('Profesores.index')}}" ><button class="btn btn-danger d-grid text-white shadow-sm">Volver</button></a>
            </div> 
            <div class="col-12 mt-3">
                <h3 class="text-white">Propuestas de proyectos</h3>
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
                                <a href="#" class="btn btn-primary text-black"><span class="material-icons-outlined">file_download</span></a>
                                <a href="#" class="btn btn-success text-black" data-bs-toggle="modal" data-bs-target="#exampleModal"><span class="material-icons-outlined">remove_red_eye</span></a>
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
                    <textarea class="form-control bg-darkBG text-white" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary text-white">Guardar</button>
                </div>
            </div>
        </div>
    </div>

@endsection