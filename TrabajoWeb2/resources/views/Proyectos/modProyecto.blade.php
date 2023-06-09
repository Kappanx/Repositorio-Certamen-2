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
                        <label for="exampleInputText1" class="form-label">Nombre Alumno</label>
                        <input type="text" class="form-control bg-darkBG text-white" id="exampleInput">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputText1" class="form-label">URL de Archivo</label>
                        <input type="text" class="form-control bg-darkBG text-white" id="exampleInput">
                    </div>


                    <div class="mb-3">
                    
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
                    


                    <div class="mb-3">
                        <label for="exampleInputText1" class="form-label">Observaciones y Comentarios</label>
                        <textarea class="form-control bg-darkBG text-white" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>

                    <div class="mt-5">
                        <a href="{{route('Proyectos.proyectos')}}" class="btn btn-primary text-white me-3">Enviar</a>
                        <a href="{{route('Proyectos.proyectos')}}" class="btn btn-danger text-white ">Cancelar</a>
                    </div>
                    
                </form>
            </div>
        </div>



    </div>



@endsection