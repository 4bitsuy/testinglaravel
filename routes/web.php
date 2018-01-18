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

Route::any("/cualquiercosa", function(){
echo 'La ruta /cualquiercosa asociada a cualquier verbo';
});

Route::get('categoria/{id}','CategoriasController@ver');

Route::post('recibir','CategoriasController@recibirPost');
