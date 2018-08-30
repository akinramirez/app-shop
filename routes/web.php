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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'TestController@welcome');

Route::get('/prueba',function(){
    return 'Hola soy la ruta prueba';
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin/products','ProductController@index'); //Listado
Route::get('/admin/products/create','ProductController@create'); // Ver formulario
Route::post('/admin/products','ProductController@store'); // Registrar datos

Route::get('/admin/products/{id}/edit','ProductController@edit'); // Formulario edicion
Route::post('/admin/products/{id}/edit','ProductController@update'); // Actualizar datos

//Route::get('/admin/products/{id}/delete','ProductController@destroy'); // Eliminacion con get
//Route::post('/admin/products/{id}/delete','ProductController@destroy'); // Eliminacion con post
Route::delete('/admin/products/{id}','ProductController@destroy'); // Eliminacion con delete