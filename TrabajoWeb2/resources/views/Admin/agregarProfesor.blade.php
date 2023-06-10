@extends('Templates.navbar')

@section('title')
<title>Agregar Profesor</title>
@endsection

@section('content')

    <div class="container-fluid mt-5">

        <div class="row justify-content-evenly">
            <div class="col-7">
                <div class="card bg-darkBG text-white shadow">
                    <div class="card-header bg-dark">
                        <h4>Agregar Nuevo Profesor</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{route('Admin.storeP')}}">
                            @csrf
                            <div class="mb-3">
                                <label for="rut" class="form-label">ID</label>
                                <input type="text" class="form-control bg-darkBG text-light" id="id" name="id" value="{{old('id')}}">
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
                                <button type="submit" class="btn btn-primary text-white me-3">Agregar</a>
                            </div>
                
                        </form>
                    </div>
                </div>
            </div>
        </div>



    </div>



@endsection