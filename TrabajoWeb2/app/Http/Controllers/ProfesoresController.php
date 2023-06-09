<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfesoresController extends Controller
{
    public function index(){
        return view('Profesores.profesores');
    }

    public function add(){
        return view('Profesores.agregarProfesor');
    }
}
