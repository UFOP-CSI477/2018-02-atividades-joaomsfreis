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

Route::get('/', 'PaginasController@index');
Route::get('/info', 'PaginasController@about');

Route::get('/lista', 'PaginasController@listar');
Route::get('/contato', 'PaginasController@contato');

Route::resource('/estados', 'EstadoController');

Route::resource('/cidades', 'CidadeController');

Route::resource('/alunos', 'AlunoController');