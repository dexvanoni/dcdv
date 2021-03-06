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

Route::get('/home', 'HomeController@index');

//Route::get('pedidos/{pedido}', 'PedidoController@procura');

Route::get('pedidos/{pedido}', array(
  'as' => 'pedidos.procura',
  'uses' => 'PedidoController@procura'
));

Route::get('/inicio', 'InicioController@inicio');

Route::resource('clientes', 'ClienteController');

Route::resource('produtos', 'ProdutoController');

Route::resource('pedidos', 'PedidoController');

Route::resource('relatorios', 'RelatorioController');

Route::resource('agenda', 'AgendaController');
