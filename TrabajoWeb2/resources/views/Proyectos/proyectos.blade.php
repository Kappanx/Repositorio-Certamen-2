@extends('Templates.navbar')

@section('title')
<title>Proyectos</title>
@endsection


@section('content')

    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-lg-10 col-12">
                <h3 class="text-white">Proyectos</h3>
            </div>
            <div class="col-lg-2 col-12">
                <a href="{{route('Proyectos.subirProyecto')}}" ><button class="btn btn-primary d-grid text-white shadow-sm">Ingresar propuesta</button></a>
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
                            <td>En revision...<a href="#" class="btn btn-warning text-black mx-4"><span class="material-icons-outlined">border_color</span></a></td>
                            <td class="d-flex justify-content-evenly">
                                <a href="" class="btn btn-primary text-black"><span class="material-icons-outlined">file_download</span></a>
                                <a href="{{route('Proyectos.modProyecto')}}" class="btn btn-warning text-black"><span class="material-icons-outlined">border_color</span></a>
                                <a href="#" class="btn btn-success text-black"><span class="material-icons-outlined">remove_red_eye</span></a>
                                <a href="" class="btn btn-danger text-black"><span class="material-icons-outlined">delete</span></a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Etiam Fuentes</td>
                            <td>En revision...<a href="#" class="btn btn-warning text-black mx-4"><span class="material-icons-outlined">border_color</span></a></td>
                            <td class="d-flex justify-content-evenly">
                                <a href="" class="btn btn-primary text-black"><span class="material-icons-outlined">file_download</span></a>
                                <a href="{{route('Proyectos.modProyecto')}}" class="btn btn-warning text-black"><span class="material-icons-outlined">border_color</span></a>
                                <a href="#" class="btn btn-success text-black"><span class="material-icons-outlined">remove_red_eye</span></a>
                                <a href="" class="btn btn-danger text-black"><span class="material-icons-outlined">delete</span></a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Maximiliano Alvarez</td>
                            <td>En revision...<a href="#" class="btn btn-warning text-black mx-4"><span class="material-icons-outlined">border_color</span></a></td>
                            <td class="d-flex justify-content-evenly">
                                <a href="" class="btn btn-primary text-black"><span class="material-icons-outlined">file_download</span></a>
                                <a href="{{route('Proyectos.modProyecto')}}" class="btn btn-warning text-black"><span class="material-icons-outlined">border_color</span></a>
                                <a href="#" class="btn btn-success text-black"><span class="material-icons-outlined">remove_red_eye</span></a>
                                <a href="" class="btn btn-danger text-black"><span class="material-icons-outlined">delete</span></a>
                            </td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>


        </div>

    </div>

@endsection