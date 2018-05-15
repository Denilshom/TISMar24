<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
| POST, GET, PUT, DELETE
*/

// Route::get('/','FrontController@index');
Route::resource('/','FrontController');
Route::get('contacto','FrontController@contacto');
Route::get('reviews','FrontController@reviews');
Route::get('index', 'FrontController@index');
Route::get('admin','FrontController@admin');
Route::resource('usuario','UsuarioController');
Route::resource('carrera','CarreraController');
Route::resource('modalidad','ModalidadController');
Route::resource('area','AreaController');
Route::resource('proyecto','ProyectoController');


Route::get('carreras/{id}/destroy',[
    'carreras'=>'CarreraController@destroy',
    'as'=>'admin.carreras.destroy'
]);

//RUTA PARA ROLES

Route::resource('rol','RolController');

//Rutas PARA EL LOGIN

Route::resource('log','LogController');

Route::get('logout', 'LogController@logout');


Route::resource('profesional','ProfesionalController');
//Rutas Para Auxiliar
Route::resource('auxiliar', 'AuxiliarController');

Route::resource('asignacion', 'AsignacionController');

Route::post('select-ajax', ['as'=>'select-ajax','uses'=>'AsignacionController@selectAjax']);