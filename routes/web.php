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

Route::resource('farmacias', 'FarmaciasController');
Route::resource('productos', 'ProductosController');
Route::resource('inventarios', 'InventariosController');
Route::get('verinventario/{id}', 'InventariosController@ver')->name('inventarios.ver');

Route::get('nuevoInventario/{producto}', 'InventariosController@create')->name('inventarios.create');
// Route::get('inventarios', 'InventariosController@index')->name('inventarios.index');
// Route::post('inventarios', 'InventariosController@store')->name('inventarios.store');

Route::get('productos/{id}/destroy', 'ProductosController@destroy')->name('producto.destroy'); //ruta para eliminar producto

Route::get('/logout', 'Auth\LoginController@logout');

