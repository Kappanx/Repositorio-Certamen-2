@extends('Templates.navbar')

@section('title')
<title>Modificar Proyectos</title>
@endsection

@section('content')

    <div class="container-fluid mt-5">

        <div class="card bg-darkBG text-white shadow">
            <div class="card-header bg-dark">
                <h4>Editar Información Proyecto</h4>
            </div>
            <div class="card-body">
                <form>
                    <div class="mb-3">
                        <label for="exampleInputText1" class="form-label">URL de Archivo</label>
                        <input type="text" class="form-control bg-darkBG text-white" id="exampleInput">
                    </div>

                    <div class="mt-5">
                        <a href="{{route('Alumnos.proyectos')}}" class="btn btn-primary text-white me-3">Enviar</a>
                        <a href="{{route('Alumnos.proyectos')}}" class="btn btn-danger text-white ">Cancelar</a>
                    </div>
                    
                </form>
            </div>
        </div>



    </div>



@endsection