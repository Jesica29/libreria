<?php


Route::get('/', function () {
    return view('website.index');

 });

route::get('/tienda',function(){
	return view('website.tienda');
});


//CONTROLADORES
Route::post('/form','ambientesController@store');


Route::get('/controller', 'ambientesController@index' );

