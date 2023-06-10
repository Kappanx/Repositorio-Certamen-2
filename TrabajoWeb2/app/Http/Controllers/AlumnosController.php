<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Propuestas;
use App\Http\Requests\PropuestasRequest;

class AlumnosController extends Controller
{
    public function index(){
        return view('Alumnos.index');
    }

    public function proyectos(){
        $propuestas = Propuestas::all();
        return view("Alumnos.proyectos",compact('propuestas'));
    }

    public function store(PropuestasRequest $request){
        $propuesta = new Propuestas();
        $propuesta->id = $request->id;
        $propuesta->fecha = $request->fecha;
        $propuesta->documento = $request->documento;
        $propuesta->estado = $request->estado;
        $propuesta->estudiante_rut = $request->estudiante_rut;
        $propuesta->save();
        return redirect()->route('Alumnos.proyectos');
    }

    public function add(){
        $propuestas = Propuestas::all();
        return view("Alumnos.subirProyecto",compact('propuestas'));
    }
}
