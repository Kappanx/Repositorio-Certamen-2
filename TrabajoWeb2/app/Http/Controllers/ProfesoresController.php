<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfesoresController extends Controller
{
    public function index(){
        return view('Profesores.index');
    }

    public function proyectos(){
        return view('Profesores.proyectos');
    }
}
