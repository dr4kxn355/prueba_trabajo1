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
    return redirect()->route('index');
});

Route::get("lista","clienteController@index")->name("index");
Route::get("editar/{id}","clienteController@edit")->where("id","[0-9]+")->name("editar");
Route::get("crear","clienteController@create")->name("crear");
Route::get("eliminar/{id}","clienteController@destroy")->name("eliminar");
Route::match(['put'], 'editar/{id}','clienteController@update')->name("update");
Route::match(['put'], 'crear','clienteController@store')->name("store");


//Route::resource("lista","clienteController");