<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', 'ejemploController@index');
/*
Route::post('/registra', 'ejemploController@registra');

Route::get('/home', 'ejemploController@home');

Route::get('/registro', 'ejemploController@registro');

Route::get('/contacto', 'ejemploController@mostrarContacto');

Route::get('/consulta', 'ejemploController@consultar');

Route::get('/persona/{nombre}', 'ejemploController@imprimePersona');

Route::get('/lista', 'ejemploController@listaAlumnos');

Route::get('/eliminar/{id}', 'ejemploController@eliminar');

Route::get('/modificar/{id}', 'ejemploController@modificar');

Route::post('/actualizar/{id}', 'ejemploController@actualizar');

Route::get('/generaPDF', 'ejemploController@generaPDF');

Route::get('/alumnos/{id}', 'ejemploController@listaAlumnos');
*/
Route::get('/','proyectoController@listadoClientes');




/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
