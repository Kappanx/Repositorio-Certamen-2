<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiantes;
use App\Http\Requests\EstudiantesRequest;
use App\Models\Profesores;
use App\Http\Requests\ProfesoresRequest;

class AdminController extends Controller
{
    public function index(){
        return view('Admin.index');
    }

    public function store(EstudiantesRequest $request){
        $estudiante = new Estudiantes();
        $estudiante->rut = $request->rut;
        $estudiante->nombre = $request->nombre;
        $estudiante->apellido = $request->apellido;
        $estudiante->email = $request->email;
        $estudiante->save();
        return redirect()->route('Admin.alumnos');
    }

    public function alumnos(){
        $estudiantes = Estudiantes::all();
        return view("Admin.alumnos",compact('estudiantes'));
    }

    public function profesores(){
        $profesores = Profesores::all();
        return view("Admin.profesores",compact('profesores'));
    }

    public function storeP(ProfesoresRequest $request){
        $profesor = new Profesores();
        $profesor->id = $request->id;
        $profesor->nombre = $request->nombre;
        $profesor->apellido = $request->apellido;
        $profesor->email = $request->email;
        $profesor->save();
        return redirect()->route('Admin.profesores');
    }

    public function proyectos(){
        return view("Admin.proyectos");
    }

    public function addProfe(){
        return view('Admin.agregarProfesor');
    }
}