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

Route::resource('beli', 'PembelianController');

Route::prefix('penjual')->group(function (){
    Route::get('/', 'PenjualController@index')->name('penjual.index');
    Route::post('/', 'PenjualController@store')->name('penjual.store');
    Route::delete('/{penjual}', 'PenjualController@delete')->name('penjual.destroy');
    Route::get('/create', 'PenjualController@create')->name('penjual.create');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');