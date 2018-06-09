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
Route::resource('subarea','SubareaController');
//Route::get('area/','AreaController@getAreas');
//Route::get('areas/','AreaController@getAreas');
Route::get('subareas/{area}','AreaController@getSubAreas');
Route::get('profesionals/project/{area}','AsignacionController@getProfesionalsAreaByProject');
Route::get('tribunales/asignados/{project}','AsignacionController@getTribunalsAssigned');
Route::get('tribunales/delete/{id}','AsignacionController@deleteTribunal');
Route::get('filter/by/criterias','ProyectoController@searchProjetCriteria');
Route::post('proyecto/filter','ProyectoController@filterProjects')->name('proyecto.filter');
Route::get('reporte/profesional/{profesional}', 'ReporteController@getReportProfesional');
Route::get('preview/reporte/profesional', 'ReporteController@profesionalReport');
//reporte proyecto
Route::get('reporte/proyecto/{proyecto}', 'Reporte2Controller@getReportProyecto');
Route::get('preview/reporte/proyecto', 'Reporte2Controller@proyectoReport');
//AREA-SUBAREA
Route::get('preview/area/areas', 'AreaController@getSubAreas');
//RUTA PARA ROLES

Route::resource('rol','RolController');

//Rutas PARA EL LOGIN

Route::resource('log','LogController');

Route::get('logout', 'LogController@logout');


Route::resource('profesional','ProfesionalController');
//Rutas Para Auxiliar
Route::resource('auxiliar', 'AuxiliarController');

Route::resource('asignacion', 'AsignacionController');
Route::post('asignacionpost', 'AsignacionController@storePost');
Route::resource('asignacion/create/{project}', 'AsignacionController@createSpecific');

Route::post('select-ajax', ['as'=>'select-ajax','uses'=>'AsignacionController@selectAjax']);

Route::resource('reporte', 'ReporteController');
//reporte proyectos
Route::resource('reporte2', 'Reporte2Controller');