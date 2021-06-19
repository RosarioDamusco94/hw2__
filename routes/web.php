<?php

use Illuminate\Support\Facades\Route;

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

Route::get('login', 'LoginController@Login');
Route::post('login', 'LoginController@CheckLogin');

Route::get('logout', 'LoginController@Logout');

Route::get('signup', "SignupController@index")->name('signup'); 
Route::post('signup', "SignupController@create");

Route::get('home', 'HomeController@Home');

Route::get('admin', 'AdminController@index');
Route::post('admin/add', 'AdminController@AddProdotti')->name('add.prodotti');


Route::get('shop/elenco', 'ShopController@ListaProdotti');
Route::get('shop', 'ShopController@index')->name("lista_negozio");

Route::get('ricettario', 'RicettarioController@index');

Route::get('carrello/acquista/{id}', 'CarrelloController@AcquistaProdotti');
Route::get('carrello/aggiorna', 'CarrelloController@carrello');
Route::get('carrello/elimina/prodotto/{id_vendita}', 'CarrelloController@eliminaProdotto');
Route::get('prezzo_totale', 'CarrelloController@prezzoTotale');
Route::get('carrello', 'CarrelloController@index');
