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


/*-------------------------Iluminacion_Interior-------------------------------------*/
Route::get('/iluminacionInterior/focos','FocosController@getProducts')->name('focos');
Route::get('/iluminacionInterior/foco/{id}', 'FocosController@viewProduct');
/*-----lampara_techo----*/
Route::get('/iluminacionInterior/lamparas','LamparasController@getLampTech')->name('lamparas');
/*----------------------*/
Route::get('/iluminacionInterior/lamparasescritorio','LamparaEscritoriosController@getProducts')->name('lamparasescritorio');
Route::get('/iluminacionInterior/lamparaescritorio/{id}','viewProduct@getProducts');
Route::get('/iluminacionInterior/manguerasled','MangueraLedsController@getProducts')->name('mangueraled');
Route::get('/iluminacionInterior/mangueraled/{id}','viewProduct@viewProduct');
Route::get('/iluminacionInterior/regletas','RegletasController@getProducts')->name('regletas');
Route::get('/iluminacionInterior/regleta/{id}','RegletasController@viewProduct');
Route::get('/iluminacionInterior/series','SeriesController@getProducts')->name('series');
Route::get('/iluminacionInterior/serie/{id}','SeriesController@viewProduct');
Route::get('/iluminacionInterior/tirasLed','TiraLedController@getProducts')->name('tirasLed');
Route::get('/iluminacionInterior/tiraLed/{id}','TiraLedController@viewProduct');
/*-----Selfie_ligth-----*/
Route::get('/iluminacionInterior/aros','AroController@getProducts')->name('aros');
Route::get('/iluminacionInterior/aro/{id}','viewProduct@getProducts');
/*----Componentes_Electricos-------*/
Route::get('/componentesElectricos/extenciones','ExtencionesController@getProducts')->name("extenciones");
Route::get('/componentesElectricos/extencion/{id}','ExtencionesController@viewProduct');
Route::get('/componentesElectricos/contactos','ContactosController@getProducts')->name("contactos");
Route::get('/componentesElectricos/contacto/{id}','ContactosController@viewProduct');
Route::get('/componentesElectricos/soquets','SoquetsController@getProducts')->name("soquets");
Route::get('/componentesElectricos/soquet/{id}','SoquetsController@viewProduct');
Route::get('/componentesElectricos/cables','CableController@getProducts');
Route::get('/componentesElectricos/cable/{id}','CableController@viewProduct');
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

/*---------------Lamapras_pared-------------------*/
//Route::get('/iluminacionInterior/lamparaspared','LamparasController@getProductsIntpared')->name('lamparaspared');
