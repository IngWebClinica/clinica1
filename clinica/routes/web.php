<?php

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

//cuando enviamos los datos de login
Route::post('/login','Auth\LoginController@login');
Route::get('/login', function () {
    return view('login');
});

Route::get('/inicio', function () {
    return view('inicio');
});

Route::get('/usuario', 'UsuarioController@read');
Route::post('/usuario','UsuarioController@create');
Route::post('/usuario/{id}','UsuarioController@delete');

Route::post('/pacientes', 'PacienteController@create');
Route::get('/pacientes', 'PacienteController@read');

Route::get('/medicos', function () {
    return view('medico');
});
Route::get('/atenciones', function () {
    return view('atenciones');
});
Route::get('/reportes', function () {
    return view('reportes');
});
//esta funcion es para mostara la prncipal
Route::get('/', function () {
    return view('inicio.inicio');
});


