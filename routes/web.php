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
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

//pages

Route::get('/', 'PageController@principal')->name('index');;

Route::get('/categoria', 'PageController@categoria')->name('categoria');

Route::get('/carrinho', 'PageController@carrinho')->name('carrinho');
Route::get('/produto', 'PageController@produto')->name('produto');

Route::get('/minha-conta', 'UserController@index')->name('minha-conta');

// Route::get('/', 'PageController@principal');
// Route::get('/categoria', 'PageController@categoria');
// Route::get('/carrinho', 'PageController@carrinho');
// Route::get('/logar', 'PageController@login');

//------------CRUD PRODUTOS
Route::get('produtos', 'produtoController@index');

Route::get('produto/cadastro', "produtoController@create");
Route::post('produto/cadastro', "produtoController@create");

route::get("produto/editar/{id}", "produtoController@edit");
route::post("produto/editar/{id}", "produtoController@edit");