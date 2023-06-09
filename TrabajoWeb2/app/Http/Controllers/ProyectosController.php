<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProyectosController extends Controller
{
    public function index(){
        return view('Proyectos.proyectos');
    }

    public function add(){
        return view('Proyectos.subirProyecto');
    }

    public function edit(){
        return view('Proyectos.modProyecto');
    }
}
