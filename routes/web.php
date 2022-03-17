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
    return view('auth.login');
});

Auth::routes();

Route::get('/categorias','ControladorCategoria@indexJSON');

Route::get('/produtos', 'ControladorProduto@indexJSON');

Route::get('/home', 'HomeController@index');

Route::get('/hospedes','ControleHospede@indexView');

Route::get('/quartos','ControleQuarto@indexView');

Route::get('/reservas','ControleComanda@indexView');

Route::get('/indicadores','ControleIndicadores@index');

Route::get('/transaction','ControleTransaction@index');
