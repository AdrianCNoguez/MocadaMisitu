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
<<<<<<< HEAD
Route::get('/electronica/ventiladores','VentiladoresController@getProducts')->name('ventiladores');
Route::get('/electronica/timbres','TimbresController@getProducts')->name('timbres');
Route::get('/electronica/timbres/{id}', 'TimbresController@viewProduct');
Route::get('/electronica/bocinas','bocinasController@getProducts')->name('bocinas');
Route::get('/electronica/bocinas/{id}','bocinasController@viewProduct');
=======
Route::get('ventiladores','VentiladoresController@getProducts')->name('ventiladores');

Route::get('/electronica/timbres','TimbresController@getProducts')->name('timbres');
Route::get('/electronica/timbres/{id}', 'TimbresController@viewProduct');
>>>>>>> 2f01888811b72a282f1f95b8bedd765cb94ee204

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
Route::get('/componentesElectricos/cables','CableController@getProducts')->name("cables");
Route::get('/componentesElectricos/cable/{id}','CableController@viewProduct');
/*-----Entretenimiento-----------*/
Route::get('/entretenimiento/consolas','ConsolasController@getProducts')->name("consolas");
Route::get('consola','ConsolasController@viewProduct');
//Route::get('juguetes','ConsolasController@getProducts');
/*--------Decoracion_hogar-----------------*/
Route::get('/decoracion_Hogar/herrajes','HerrajesController@getProducts')->name("herrajes");
Route::get('/decoracion_Hogar/herraje/{id}','HerrajesController@viewProduct');
Route::get('/decoracion_Hogar/proyectores','ProyectorController@getProducts')->name("proyectores");
Route::get('/decoracion_Hogar/proyector/{id}','ProyectorController@viewProduct');
Route::get('/decoracion_Hogar/espejos','EspejoController@getProducts')->name("espejos");
Route::get('/decoracion_Hogar/espejo/{id}','EspejoController@viewProduct');
Route::get('/decoracion_Hogar/macetas','MacetaController@getProducts')->name("macetas");
Route::get('/decoracion_Hogar/maceta/{id}','MacetaController@viewProduct');
/*--------Difusores-----------------*/
Route::get('/difusores/humificadores','HumificadoresController@getProducts')->name("humificadores");
Route::get('/difusores/humificador/{id}','HumificadoresController@viewProduct');
/*--------Cocina-----------------*/
<<<<<<< HEAD
Route::get('disoensadores','DisoensadoresController@getProducts');
=======
Route::get('/cocina/disoensadores','DisoensadoresController@getProducts')->name("disoensadores");

/*---------------Lamapras_pared-------------------*/
//Route::get('/iluminacionInterior/lamparaspared','LamparasController@getProductsIntpared')->name('lamparaspared');
>>>>>>> 2f01888811b72a282f1f95b8bedd765cb94ee204
