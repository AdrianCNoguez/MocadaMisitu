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
/*Lo más vendido*/
Route::get('/','LomasVendidoController@getProducts');
Route::get('/lomasvendido', 'LomasVendidoController@getSale')->name('lomasvendido');
Route::get('/lomasvendido/{id}', 'LomasVendidoController@viewProduct');
Route::get('/productos', 'ProductosController@getViewProducts')->name('productos');
Route::get('/producto/{id}', 'ProductosController@viewProduct');
/*Search*/
Route::get('search/productos','SearchController@productos')->name('search.productos');
Route::get('search','SearchController@searchProduct')->name('search.success');
/*--Electronica---*/
Route::get('/electronica/ventiladores','VentiladoresController@getProducts')->name('ventiladores');
Route::get('/electronica/ventiladores/{id}','VentiladoresController@viewProduct');
Route::get('/electronica/timbres','TimbresController@getProducts')->name('timbres');
Route::get('/electronica/timbres/{id}', 'TimbresController@viewProduct');
Route::get('/electronica/bocinas','BocinasController@getProducts')->name('bocinas');
Route::get('/electronica/bocinas/{id}','BocinasController@viewProduct');
/*---Componentes-----------*/
Route::get('/componentes/extenciones','ExtencionesController@getProducts')->name('extenciones');
Route::get('/componentes/extenciones/{id}','ExtencionesController@viewProduct');
Route::get('/componentes/contactos','ContactosController@getProducts')->name('contactos');
Route::get('/componentes/contactos/{id}','ContactosController@viewProduct');
Route::get('/componentes/soquets','SoquetsController@getProducts')->name('soquets');
Route::get('/componentes/soquets/{id}','SoquetsController@viewProduct');
Route::get('/componentes/cables','CableController@getProducts')->name('cables');
Route::get('/componentes/cables/{id}','CableController@viewProduct');
/*----Entretenimiento-------*/
Route::get('/entretenimiento/consolas','ConsolasController@getProducts')->name('consolas');
Route::get('/entretenimiento/consolas/{id}','ConsolasController@viewProduct');
/*----DecoracionHogar------*/
Route::get('/decoracion/herrajes','HerrajesController@getProducts')->name('herrajes');
Route::get('/decoracion/herrajes/{id}','HerrajesController@viewProduct');
Route::get('/decoracion/proyectores','ProyectorController@getProducts')->name('proyectores');
Route::get('/decoracion/proyectores/{id}','ProyectorController@viewProduct');
Route::get('/decoracion/espejos','EspejoController@getProducts')->name('espejos');
Route::get('/decoracion/espejos/{id}','EspejoController@viewProduct');
Route::get('/decoracion/macetas','MacetasController@getProducts')->name('macetas');
Route::get('/decoracion/macetas/{id}','MacetasController@viewProduct');
Route::get('/iluminacionInterior/paneles','PanelesController@getProducts')->name('paneles');
Route::get('/iluminacionInterior/paneles/{id}','PanelesController@viewProduct');
/*----Exteriores-----------*/
Route::get('/exterior/reflectores','ReflectoresController@getProducts')->name('reflectores');
Route::get('/exterior/reflectores/{id}', 'ReflectoresController@viewProduct');

Route::get('/exterior/lamparas','LamparasController@getProducts');
Route::get('/exterior/lamparas/{id}', 'LamparasController@viewProducts');

Route::get('/exterior/faroles','FarolesController@getProducts');
Route::get('/exterior/faroles/{id}', 'FarolesController@viewProducts');

Route::get('/exterior/estacas','EstacasController@getProducts');
Route::get('/exterior/estacas/{id}', 'EstacasController@viewProducts');

/*--Difusores--*/
Route::get('/difusores/humificadores','HumificadoresController@getProducts')->name('humificadores');
Route::get('/difusores/humificadores/{id}','HumificadoresController@viewProduct');
/*--Cocina----*/
Route::get('/cocina/dispensadores','DispensadoresController@getProducts')->name('dispensadores');
Route::get('/cocina/dispensadores/{id}','DispensadoresController@viewProduct');
/*-------------------------Iluminacion_Interior-------------------------------------*/
Route::get('/iluminacionInterior/focos','FocosController@getProducts')->name('focos');
Route::get('/iluminacionInterior/focos/{id}', 'FocosController@viewProduct');
/*-----lampara_techo----*/
Route::get('/iluminacionInterior/lamparas','LamparasController@getLampTech')->name('lamparas');
Route::get('/iluminacionInterior/lamparas/{id}','LamparasController@viewProduct');
/*----------------------*/
Route::get('/iluminacionInterior/lamparasescritorios','LamparaEscritoriosController@getProducts')->name('lamparasescritorio');
Route::get('/iluminacionInterior/lamparaescritorio/{id}','LamparaEscritoriosController@viewProduct');

Route::get('/iluminacionInterior/manguerasled','MangueraLedsController@getProducts')->name('mangueraleds');
Route::get('/iluminacionInterior/mangueraled/{id}','MangueraLedsController@viewProduct');

Route::get('/iluminacionInterior/regletas','RegletasController@getProducts')->name('regletas');
Route::get('/iluminacionInterior/regleta/{id}','RegletasController@viewProduct');

Route::get('/iluminacionInterior/series','SeriesController@getProducts')->name('series');
Route::get('/iluminacionInterior/serie/{id}','SeriesController@viewProduct');

Route::get('/iluminacionInterior/tirasLed','TiraLedController@getProducts')->name('tirasLed');
Route::get('/iluminacionInterior/tiraLed/{id}','TiraLedController@viewProduct');
/*-----Selfie_ligth-----*/
Route::get('/iluminacionInterior/aros','AroController@getProducts')->name('aros');
Route::get('/iluminacionInterior/aros/{id}','AroController@viewProduct');

Route::get('/otros/joyeria','JoyeriaController@getProducts')->name('joyas');
Route::get('/otros/joyeria/{id}','JoyeriaController@viewProduct');

Route::get('/otros/despachadores','DespachadoresController@getProducts')->name('despachadores');
Route::get('/otros/despachadores/{id}','DespachadoresController@viewProduct');

Route::get('/otros/accesorios','AccesoriosController@getProducts')->name('accesorios');
Route::get('/otros/accesorios/{id}','AccesoriosController@viewProduct');