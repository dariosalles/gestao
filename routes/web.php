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


// CONTROLLER
Route::get('/', 'HomeController@index');

Route::get('/pedidos')->name('pedidos');
Route::get('/clientes')->name('clientes');
Route::get('/produtos')->name('produtos');
Route::get('/relatorios')->name('relatorios');


// AUTENTICAÇÃO
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
