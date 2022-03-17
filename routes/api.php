<?php

use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::resource('/produtos', 'ControladorProduto');

Route::resource('/categorias', 'ControladorCategoria');

Route::resource('/hospedes','ControleHospede');

Route::resource('/quartos','ControleQuarto');

Route::resource('/comandas','ControleComanda');

Route::patch('/atualizaQuartos/{id}', 'ControleQuarto@atualizaQuarto');



