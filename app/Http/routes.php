<?php


Route::get('/', function () {
    return view('home');
    

});

//CONTROLADORES
Route::post('/form','ambientesController@show');


Route::get('/controller', 'ambientesController@index' );
