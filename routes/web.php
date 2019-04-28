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
    Route::get('/{penjual}', 'PenjualController@show')->name('penjual.show');
    Route::post('/', 'PenjualController@store')->name('penjual.store');
    Route::delete('/{penjual}', 'PenjualController@delete')->name('penjual.destroy');
    Route::get('/create', 'PenjualController@create')->name('penjual.create');
});

Route::prefix('kirim')->group(function (){
    Route::get('/', 'JualController@index')->name('jual.index');
    Route::post('/', 'JualController@store')->name('jual.store');
    Route::get('/create', 'JualController@create')->name('jual.create');
    Route::delete('/{pengiriman}', 'JualController@destroy')->name('jual.destroy');
});

Route::prefix('toko')->group(function() {
    Route::get('/', 'TokoController@index')->name('toko.index');
    Route::get('/create', 'TokoController@create')->name('toko.create');
    Route::post('/', 'TokoController@store')->name('toko.store');
    Route::delete('/{toko}', 'TokoController@destroy')->name('toko.destroy');
});

Route::prefix('operasional')->group(function() {
    Route::get('/', 'OperasionalController@index')->name('operasional.index');
    Route::get('/transport', 'OperasionalController@transport')->name('operasional.transport');
    Route::get('/giling', 'OperasionalController@giling')->name('operasional.giling');
    Route::get('/kemas', 'OperasionalController@kemas')->name('operasional.kemas');
    Route::get('/bm', 'OperasionalController@bm')->name('operasional.bm');
    Route::get('/plastik', 'OperasionalController@plastik')->name('operasional.plastik');
    Route::post('/', 'OperasionalController@store')->name('operasional.store');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');