<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\PeliculasController;
use App\Http\Controllers\ActoresController;
use App\Http\Controllers\GenerosController;
use App\Http\Controllers\SalasController;
use App\Http\Controllers\FuncionesController;
use App\Http\Controllers\ReservasController;
use App\Http\Controllers\DirectoresController;
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

Route::get('/', function () {
    return view('welcome');
});

route::resource('categorias',CategoriaController::Class);
route::resource('peliculas',PeliculasController::Class);
route::resource('directores',DirectoresController::Class);
route::resource('actores',ActoresController::Class);
route::resource('generos',GenerosController::Class);
route::resource('salas',SalasController::Class);
route::resource('funciones',FuncionesController::Class);
route::resource('reservas',ReservasController::Class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
