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
Route::get('/products/{id}', 'ProductController@show');

Route::post('/cart','CartDetailController@store');
Route::delete('/cart','CartDetailController@destroy');

Route::post('/order','CartController@update');

Route::middleware(['auth','admin'])->prefix('admin')->namespace('Admin')->group(function (){
    // Con prefix('admin') ya se puede eliminar la palabra 'admin' de las rutas, ya que es una palabra en comun de todas las rutas.
    Route::get('/products','ProductController@index'); //Listado
    Route::get('/products/create','ProductController@create'); // Ver formulario
    Route::post('/products','ProductController@store'); // Registrar datos
    Route::get('/products/{id}/edit','ProductController@edit'); // Formulario edicion
    Route::post('/products/{id}/edit','ProductController@update'); // Actualizar datos
    //Route::get('/admin/products/{id}/delete','ProductController@destroy'); // Eliminacion con get
    //Route::post('/admin/products/{id}/delete','ProductController@destroy'); // Eliminacion con post
    Route::delete('/products/{id}','ProductController@destroy'); // Eliminacion con delete

    Route::get('/products/{id}/images','ImageController@index'); // Listado de imagenes
    Route::post('/products/{id}/images','ImageController@store'); // Registrar imagenes
    Route::delete('/products/{id}/images','ImageController@destroy'); // Eliminacion de imagenes
    Route::get('/products/{id}/images/select/{image}','ImageController@select'); // Destacar
});

