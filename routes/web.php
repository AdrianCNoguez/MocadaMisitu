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

Route::get('/','LomasVendidoController@getProducts');
/*--Checar---*/
Route::get('ventiladores','VentiladoresController@getProducts')->name('ventiladores');
Route::get('/electronica/timbres','TimbresController@getProducts')->name('timbres');
Route::get('/electronica/timbres/{id}', 'TimbresController@viewProduct');
Route::get('/exterior/reflectores','ReflectoresController@getProducts')->name('reflectores');
Route::get('/exterior/lamparas','LamparasController@getProducts');
Route::get('/exterior/faroles','FarolesController@getProducts');
Route::get('/exterior/tirasLed','TiraLedController@getProducts');
/*-----Iluminacion_Interior-----*/
Route::get('focos','FocosController@getProducts');
/*---------------Lamapras_techo-------------------*/
Route::get('lamparas','LamparasController@getProducts');
/*------------------------------------------*/
Route::get('lamparasescritorio','LamparaEscritoriosController@getProducts');
Route::get('mangueraled','MangueraLedsController@getProducts');
Route::get('regletas','RegletasController@getProducts');
Route::get('series','SeriesController@getProducts');
Route::get('tiraled','TiraLedsController@getProducts');
/*-----Selfie_ligth-----*/
Route::get('aro','AroController@getProducts');
/*----Componentes_Electricos-------*/
Route::get('extenciones','ExtencionesController@getProducts');
Route::get('contactos','ContactosController@getProducts');
Route::get('soquets','SoquetsController@getProducts');
Route::get('cable','CableController@getProducts');
/*-----Entretenimiento-----------*/
Route::get('consolas','ConsolasController@getProducts');
//Route::get('juguetes','ConsolasController@getProducts');
/*--------Decoracion_hogar-----------------*/
Route::get('herrajes','HerrajesController@getProducts');
Route::get('proyector','ProyectorController@getProducts');
Route::get('espejo','EspejoController@getProducts');
Route::get('maceta','MacetaController@getProducts');
/*--------Difusores-----------------*/
Route::get('humificadores','HumificadoresController@getProducts');
/*--------Cocina-----------------*/
Route::get('disoensadores','DisoensadoresController@getProducts');
