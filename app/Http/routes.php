<?php

// comentário omitido

Route::get('/produtos', 'ProdutoController@lista');
Route::get('/produtos/mostra/{id}', 'ProdutoController@mostra');
Route::get('/produtos/novo', 'ProdutoController@novo');
Route::get('/produtos/json', 'ProdutoController@listajson');
Route::post('/produtos/adiciona', 'ProdutoController@adiciona');
Route::get('/produtos/remove/{id}', 'ProdutoController@remove');
Route::get('/login', 'LoginController@form');
Route::post('/login', 'LoginController@login');
Route::get('home', 'HomeController@index');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);