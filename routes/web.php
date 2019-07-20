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
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

//pages
Route::get('/', 'PageController@principal');
Route::get('/categoria', 'PageController@categoria');
Route::get('/carrinho', 'PageController@carrinho');
Route::get('/logar', 'PageController@login');