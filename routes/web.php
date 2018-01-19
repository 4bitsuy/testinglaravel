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

Route::get('/holamundo', function(){
    echo "Esto es una simple prueba!!";
});

Route::post("/post", function(){
echo 'La ruta /post asociada a el post verbo';
});

Route::get('categoria/{id}','CategoriasController@ver');

Route::post('recibir/{id}','FirstController@editar');

Route::get('articulos','ArticulosController@todos');

Route::match(['get', 'post'], 'input', 'TestRequestController@recibir');

Route::get('form/crear','FirstController@testFormulario');
Route::post('form', 'FirstController@store');
