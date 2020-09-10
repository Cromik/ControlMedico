<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('contrasena', 'ContrasenaController@index')->name('contrasena.index');
Route::post('contrasena', 'ContrasenaController@store')->name('contrasena.store');



Route::post('paciente', 'PacienteController@store')->name('paciente.store');
Route::post('deletePaciente', 'PacienteController@deletePaciente')->name('paciente.delete');
Route::post('getPaciente', 'PacienteController@getPaciente')->name('paciente.getpaciente');

//Route::get('paciente', 'pacienteController@show')->name('paciente.show');
Route::get('paciente', 'PacienteController@index')->name('paciente.index');
Route::get('pacienteid', 'PacienteController@getPacienteByID')->name('paciente.showid');
Route::get('paciente/filtro','PacienteController@indexjson')->name('paciente.filtro');




Route::post('mihistorial', 'MiHistorialController@store')->name('mihistorial.store');


Route::view('/historialPaciente', 'historialPaciente')->name('viewhistorialPaciente');
Route::view('/administrarCitas', 'administrarCitas')->name('viewadministrarCitas');
Route::view('/agendarCitas', 'agendarCitas')->name('viewagendarCitas');
Route::view('/consultaHistorial', 'consultaHistorial')->name('viewconsultaHistorial');


Route::resource('mihistorial','MiHistorialController');

//Route::get('mihistorial', 'MiHistorialController@index')->name('mihistorial.index');
//Route::get('/mihistorial/create', 'MiHistorialController@create')->name('mihistorial.create');
Route::post('mihistorial', 'MiHistorialController@store')->name('mihistorial.store');

Route::get('historial', 'HistorialController@index')->name('historial.index');
Route::get('historial/paciente', 'HistorialController@paciente')->name('historial.paciente');
Route::get('historial/{historial}', 'HistorialController@show')->name('historial.show');





Auth::routes();

Route::get('/index', 'HomeController@index')->name('home');


Route::get('/agenda','AgendarController@index')->name('agenda.index');


Route::get('/simulador', function () {
    return view('simulador.index');
})->name('simulador');


Route::get('/colores','ColorController@index')->name('mantenimiento.colores');




