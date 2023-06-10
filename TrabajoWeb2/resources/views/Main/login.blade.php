@extends('Templates.navbar')

@section('title')
<title>Inicio de sesión</title>
@endsection

@section('content')

    <div class="container-fluid mt-5">
        <div class="row justify-content-evenly">
            <div class="col-6">
                <div class="card bg-darkBG text-white shadow">
                    <div class="card-header bg-dark">
                        <h4>Inicio de sesión</h4>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="mb-3">
                                <label for="exampleInputText1" class="form-label">Correo Institucional</label>
                                <input type="email" class="form-control bg-darkBG text-white" id="exampleInput">
                            </div>
                             <div class="mb-3">
                                <label for="exampleInputPassword" class="form-label">Contraseña</label>
                                <input type="password" class="form-control bg-darkBG text-white" id="exampleInput">
                            </div>
                            <div class="mt-5">
                                <a href="{{route('Main.home')}}" class="btn btn-primary text-white me-3">Acceder</a>
                                <a href="{{route('Main.home')}}" class="btn btn-danger text-white ">Cancelar</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection