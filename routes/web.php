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

/**Route::get('/',function () {
    return view('home');
});

//Regresar saludos desde otra web.
Route::get('saludos/{nombre?}', function($nombre = "Invitado" ){
    return view('saludo', compact('nombre'));
});

//Regresa saludos.
Route::get('contactos', ['as' => 'contactos',function(){
    return "Sesión  de Contactos.";
}]);

//Inicia codificacion para home,saludos y conctactos, desde cero, con su links

//Ruta para home.
Route::get('/', function(){
    return view('home');
});

//Ruta para saludo.
Route::get('saludos/{nombre?}', function($nombre = 'Invitado'){
    return view('contacto');
});

//Ruta para contcto
Route::get('/', function(){
    return view('contacto');
});*/

/*//ruta de home.
Route::get('/', ['as'=>'home', 'uses'=>'ver@home']);

//Contacto.
Route::get('/contactos', ['as'=>'contactos','uses'=>'ver@contacto']);*/

//creando ruta de menu.
Route::get('menu', function(){
    return view('menu');
});

//creando ruta de home
Route::get('/', ['as'=>'home','uses'=>'menuController@home']);

//creando ruta de nosotros
Route::get('nosotros', ['as'=>'nosotros', 'uses'=>'menuController@nosotros']);

//creando ruta de contacto
Route::get('contacto', ['as'=>'contacto', 'uses'=>'menuController@contacto']);