<?php


Route::get('/', function () {
    //return view('home');
    return ("GIT");
    

});

//CONTROLADORES
Route::post('/form','ambientesController@show');


Route::get('/controller', 'ambientesController@index' );
