<?php

Route::get('/', function () {
    return view('homepage');
});

Route::get('/homepage','HomeController@index');
Route::get('/homepage/{id}','HomeController@show');
Route::get('/produk','produkController@index');
Route::get('/tambah','produkController@tambah');