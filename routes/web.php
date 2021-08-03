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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/usuarios/obter', 'UsuariosController@obterUsuarios')->name('usuarios.obter');
Route::resource('/usuarios', 'UsuariosController');

Route::get('/aulas/obter', 'AulasController@obterAulas')->name('aulas.obter');
Route::resource('/aulas', 'AulasController');
