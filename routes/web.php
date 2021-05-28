<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuariosController;

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

Route::get('/agregaUsuario', 'UsuariosController@agregaUsuario');
Route::post('/envio', 'UsuariosController@create');
Route::get('/muestraUsuario', 'UsuariosController@muestraUsuario');
Route::get('/editar2/{id}', 'UsuariosController@edit');
Route::post('/editar2/guardaEdicion2', 'UsuariosController@guardaEdicion2');
Route::get('/borrar2/{id}', 'UsuariosController@destroy');
Route::get('/agregaVacuna', 'VacunaController@agregaVacuna');
Route::post('/envioV', 'VacunaController@create');
Route::get('/muestraVacuna', 'VacunaController@muestraVacuna');
Route::get('/editar/{id}', 'VacunaController@edit');
Route::post('/editar/guardaEdicion', 'VacunaController@guardaEdicion');
Route::get('/borrar/{id}', 'VacunaController@destroy');

//Graficas
//Route::get('/Graficas', function () {return view('usuariosVacunados');});
//Route::get('/Graficas/{project_id?}/graph.php','UsuariosController@graph');
//Route::get('/Graficas/{project_id?}/graph.php', [imprimirController::class, 'graph'])->name('graph');
Route::get('/Graficas/{project_id?}/graph.php', [UsuariosController::class, 'graph'])->name('graph');

//Ruta para la asignación de vacunas
Route::get('/', 'ListaController@vistaRegistro');

//Route::get('/registroVacunados', 'ListaController@vistaRegistro');

Route::post('/conteoVacunado', 'ListaController@create');

Route::get('/muestraVacunados', 'ListaController@muestraVacunados');

Route::get('/borrar3/{id}', 'ListaController@destroy');








