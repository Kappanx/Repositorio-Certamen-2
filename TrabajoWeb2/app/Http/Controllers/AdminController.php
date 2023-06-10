<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('Admin.index');
    }

    public function alumnos(){
        return view("Admin.alumnos");
    }

    public function profesores(){
        return view("Admin.profesores");
    }

    public function proyectos(){
        return view("Admin.proyectos");
    }

    public function addProfe(){
        return view('Admin.agregarProfesor');
    }
}