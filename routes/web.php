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

Auth::routes(['reset' => false]);


Route::middleware('auth')->group(function(){
    Route::get('/home', 'HomeController@index')->name('home');

    Route::resource('beli', 'PembelianController');

    Route::prefix('penjual')->group(function (){
        Route::get('/create', 'PenjualController@create')->name('penjual.create');
        Route::get('/', 'PenjualController@index')->name('penjual.index');
        Route::get('/{penjual}', 'PenjualController@show')->name('penjual.show');
        Route::post('/', 'PenjualController@store')->name('penjual.store');
        Route::delete('/{penjual}', 'PenjualController@delete')->name('penjual.destroy');
        
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
        Route::get('/create', 'TokoController@create')->name('toko.create');
        Route::get('/{toko}', 'TokoController@show')->name('toko.show');
        Route::post('/', 'TokoController@store')->name('toko.store');
        Route::delete('/{toko}', 'TokoController@destroy')->name('toko.destroy');
    });

    Route::prefix('operasional')->group(function() {
        Route::get('/', 'OperasionalController@index')->name('operasional.index');
        Route::get('/transport', 'OperasionalController@transport')->name('transport.create');
        Route::get('/transport/{transport}', 'OperasionalController@editTransport')->name('transport.edit');
        Route::post('/transport', 'OperasionalController@storeTransport')->name('transport.store');
        Route::put('/transport/{transport}', 'OperasionalController@updateTransport')->name('transport.update');
        Route::delete('/transport/{transport}', 'OperasionalController@destroyTransport')->name('transport.destroy');

        Route::get('/giling', 'OperasionalController@giling')->name('giling.create');
        Route::get('/giling/{giling}/edit', 'OperasionalController@editGiling')->name('giling.edit');
        Route::post('/giling', 'OperasionalController@storeGiling')->name('giling.store');
        Route::put('/giling/{giling}', 'OperasionalController@updateGiling')->name('giling.update');
        Route::delete('/giling/{giling}', 'OperasionalController@destroyGiling')->name('giling.destroy');

        Route::get('/bongkar-muat', 'OperasionalController@bongkarMuat')->name('bongkarmuat.create');
        Route::get('/bongkar-muat/{bongkarMuat}', 'OperasionalController@editBongkarMuat')->name('bongkarmuat.edit');
        Route::post('/bongkar-muat', 'OperasionalController@storeBongkarMuat')->name('bongkarmuat.store');
        Route::put('/bongkar-muat/{bongkarMuat}', 'OperasionalController@updateBongkarMuat')->name('bongkarmuat.update');
        Route::delete('/bongkar-muat/{bongkarMuat}', 'OperasionalController@destroyBongkarMuat')->name('bongkarmuat.destroy');

        Route::get('/plastik', 'OperasionalController@plastik')->name('plastik.create');
        Route::get('/plastik/{plastik}/edit', 'OperasionalController@editPlastik')->name('plastik.edit');
        Route::post('/plastik', 'OperasionalController@storePlastik')->name('plastik.store');
        Route::put('/plastik/{plastik}', 'OperasionalController@updatePlastik')->name('plastik.update');
        Route::delete('/plastik/{plastik}', 'OperasionalController@destroyPlastik')->name('plastik.destroy');

        Route::get('/sortir', 'OperasionalController@sortir')->name('sortir.create');
        Route::get('/sortir/{sortir}', 'OperasionalController@editSortir')->name('sortir.edit');
        Route::post('/sortir', 'OperasionalController@storeSortir')->name('sortir.store');
        Route::put('/sortir/{sortir}', 'OperasionalController@updateSortir')->name('sortir.update');
        Route::delete('/sortir/{sortir}', 'OperasionalController@destroySortir')->name('sortir.destroy');
    });
});


