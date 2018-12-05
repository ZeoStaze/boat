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

Route::get('/', 'WelcomeController@index');
Route::get('article/{n}', 'ArticleController@show')-> where('n', '[1-9]');

Route::get('facture/{n}', function ($n){
    return view ('facture')->withNumero($n);
})-> where ('n', '[0 -9]');