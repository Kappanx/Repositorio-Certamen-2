<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AlumnosController;
use App\Http\Controllers\ProfesoresController;
use App\Http\Controllers\AdminController;

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

Route::get('/alumnos',[AlumnosController::class,'index'])->name('Alumnos.index');
Route::get('/alumnos/proyectos',[AlumnosController::class,'proyectos'])->name('Alumnos.proyectos');
Route::get('/alumnos/proyectos/subir',[AlumnosController::class,'add'])->name('Alumnos.subirProyecto');
Route::post('/alumnos/proyectos/subir',[AlumnosController::class,'store'])->name('Alumnos.store');

Route::get('/profesores',[ProfesoresController::class,'index'])->name('Profesores.index');
Route::get('/profesores/proyectos',[ProfesoresController::class,'proyectos'])->name('Profesores.proyectos');

Route::get('/admin',[AdminController::class,'index'])->name('Admin.index');
Route::get('/admin/alumnos',[AdminController::class,'alumnos'])->name('Admin.alumnos');
Route::post('/admin/alumnos',[AdminController::class,'store'])->name('Admin.store');

Route::get('/admin/profesores',[AdminController::class,'profesores'])->name('Admin.profesores');
Route::get('/admin/profesores/añadir',[AdminController::class,'addProfe'])->name('Admin.agregarProfesor');
Route::post('/admin/profesores/añadir',[AdminController::class,'storeP'])->name('Admin.storeP');
Route::get('/admin/proyectos',[AdminController::class,'proyectos'])->name('Admin.proyectos');
