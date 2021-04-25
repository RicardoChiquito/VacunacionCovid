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

Route::get('/agregaUsuario', 'UsuariosController@agregaUsuario');
Route::post('/envio', 'UsuariosController@create');
Route::get('/muestraUsuario', 'UsuarioController@muestraUsuario');
Route::get('/editar/{id}', 'UsuarioController@edit');
Route::post('/editar/guardaEdicion', 'UsuarioController@guardaEdicion');
Route::get('/borrar/{id}', 'UsuarioController@destroy');
Route::get('/agregaVacuna', 'VacunaController@agregaVacuna');
Route::post('/envioV', 'VacunaController@create');
Route::get('/muestraVacuna', 'VacunaController@muestraVacuna');
Route::get('/editar/{id}', 'VacunaController@edit');
Route::post('/editar/guardaEdicion', 'VacunaController@guardaEdicion');
Route::get('/borrar/{id}', 'VacunaController@destroy');



