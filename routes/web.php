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

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/barang/save','BarangController@store')->name('barang.save');
Route::get('/barang/add','BarangController@add')->name('barang.add');
Route::get('/barang','BarangController@index')->name('barang.index');
//Route::post('/barang/edit/{id}','BarangController@edit')->name('barang.update');
Route::get('/barang/{id}','BarangController@baruin')->name('barang.baruin');
Route::get('/penjualan','PenjualanController@index')->name('penjualan.index');
//Route::post('/barang/hapus/{id}','BarangController@destroy')->name('barang.destroy');