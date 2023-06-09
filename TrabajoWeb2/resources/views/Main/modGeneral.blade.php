{{-- ESTO NO VA --}}
@extends('Templates.navbar')

@section('title')
<title>Modificar Persona</title>
@endsection

@section('content')

    <div class="container-fluid mt-5">

        <div class="card bg-darkBG text-white">
            <div class="card-header bg-dark">
                <h4>Editar Información Persona</h4>
            </div>
            <div class="card-body">
                <form>
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
                        <a href="{{route('Main.home')}}" class="btn btn-primary text-white me-3">Enviar</a>
                        <a href="{{route('Main.home')}}" class="btn btn-danger text-white ">Cancelar</a>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
@endsection