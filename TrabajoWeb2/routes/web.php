<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AlumnosController;
use App\Http\Controllers\ProfesoresController;
use App\Http\Controllers\ProyectosController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[HomeController::class,'home'])->name('Main.home');
Route::get('/login',[HomeController::class,'login'])->name('Main.login');

Route::get('/alumnos',[AlumnosController::class,'index'])->name('Alumnos.alumnos');
Route::get('/alumnos/agregar',[AlumnosController::class,'add'])->name('Alumnos.agregarAlumno');

Route::get('/profesores',[ProfesoresController::class,'index'])->name('Profesores.profesores');
Route::get('/profesores/agregar',[ProfesoresController::class,'add'])->name('Profesores.agregarProfesor');

Route::get('/proyectos',[ProyectosController::class,'index'])->name('Proyectos.proyectos');
Route::get('/proyectos/modificar',[ProyectosController::class,'add'])->name('Proyectos.subirProyecto');
Route::get('/proyectos/subir',[ProyectosController::class,'edit'])->name('Proyectos.modProyecto');
