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
    Route::get('/{pengiriman}/edit', 'JualController@edit')->name('jual.edit');
    Route::delete('/{pengiriman}', 'JualController@destroy')->name('jual.destroy');
    Route::put('/{pengiriman}', 'JualController@update')->name('jual.update');
});

Route::prefix('toko')->group(function() {
    Route::get('/', 'TokoController@index')->name('toko.index');
    Route::get('/{toko}', 'TokoController@show')->name('toko.show');
    Route::get('/create', 'TokoController@create')->name('toko.create');
    Route::post('/', 'TokoController@store')->name('toko.store');
    Route::delete('/{toko}', 'TokoController@destroy')->name('toko.destroy');
});

Route::prefix('operasional')->group(function() {
    Route::get('/', 'OperasionalController@index')->name('operasional.index');
    Route::get('/transport', 'OperasionalController@transport')->name('transport.create');
    Route::post('/transport', 'OperasionalController@storeTransport')->name('transport.store');
    Route::get('/giling', 'OperasionalController@giling')->name('giling.create');
    Route::post('/giling', 'OperasionalController@storeGiling')->name('giling.store');
    Route::get('/bongkar-muat', 'OperasionalController@bongkarMuat')->name('bongkarmuat.create');
    Route::post('/bongkar-muat', 'OperasionalController@storeBongkarMuat')->name('bongkarmuat.store');
    Route::get('/plastik', 'OperasionalController@plastik')->name('plastik.create');
    Route::post('/plastik', 'OperasionalController@storePlastik')->name('plastik.store');
    Route::get('/sortir', 'OperasionalController@sortir')->name('sortir.create');
    Route::post('/sortir', 'OperasionalController@storeSortir')->name('sortir.store');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');