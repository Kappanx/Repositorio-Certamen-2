<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlumnosController extends Controller
{
    public function index(){
        return view('Alumnos.alumnos');
    }

    public function add(){
        return view('Alumnos.agregarAlumno');
    }
}
