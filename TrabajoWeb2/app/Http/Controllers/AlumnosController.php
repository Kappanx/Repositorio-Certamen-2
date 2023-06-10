<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlumnosController extends Controller
{
    public function index(){
        return view('Alumnos.index');
    }

    public function proyectos(){
        return view('Alumnos.proyectos');
    }

    public function add(){
        return view('Alumnos.subirProyecto');
    }

    public function mod(){
        return view('Alumnos.modProyecto');
    }
}
