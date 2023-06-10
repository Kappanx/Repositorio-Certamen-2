@extends('Templates.navbar')

@section('title')
<title>Proyectos</title>
@endsection


@section('content')

    <div class="container-fluid mt-4">
        <div class="row">
            <div class=" col-12">
                <a href="{{route('Admin.index')}}" ><button class="btn btn-danger d-grid text-white shadow-sm">Volver</button></a>
            </div> 
            <div class="col-12 mt-3">
                <h3 class="text-white">Propuestas de proyectos</h3>
            </div> 
        </div>
        

        <!-- tablas -->
        <div class="row mt-3">

            <!-- tabla1 -->
            <div class="col-12">
                <table class="table table-striped table-hover table-bordered rounded rounded-3 overflow-hidden shadow">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">Nº</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Estado Archivo</th>
                            <th scope="col">Modificar estado</th>
                        </tr>
                    </thead>
                    <tbody class="table-dark">
                        <tr>
                            <th scope="row">1</th>
                            <td>Pablo Fuentes</td>
                            <td>En revision...</td>
                            <td><a href="" class="btn btn-warning text-black mx-4" data-bs-toggle="modal" data-bs-target="#exampleModal"><span class="material-icons-outlined">border_color</span></a></td>
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
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Estado</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                        <label class="form-check-label" for="flexRadioDefault1">
                            En revision...
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                        <label class="form-check-label" for="flexRadioDefault2">
                            Aceptado
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                        <label class="form-check-label" for="flexRadioDefault3">
                            Modificar
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4">
                        <label class="form-check-label" for="flexRadioDefault4">
                            Rechazado
                        </label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary text-white">Guardar</button>
                </div>
            </div>
        </div>
    </div>

@endsection