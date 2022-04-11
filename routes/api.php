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


Route::prefix('auth')->group(function() {
    Route::post('registro', 'AutenticadorControlador@registro');
    Route::post('login', 'AutenticadorControlador@login');
    Route::get('registro/ativar/{id}/{token}', 
               'AutenticadorControlador@ativarregistro');
    //Aqui está protegido pelo middleware, só entra de tiver autenticado.
    Route::middleware('auth:api')->group(function() {
        Route::post('logout', 'AutenticadorControlador@logout');
    });
});
//Se ficasse protegido pelo midd como no logout, ficaria estranho /api/outh/produto
//Então protegi por fora. so acessa produto se tiver logado na rota /api/produto
Route::get('produtos', 'ProdutosControlador@index')
    ->middleware('auth:api');
