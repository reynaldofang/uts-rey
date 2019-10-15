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

Route::get('/daftarkontak', 'DaftarKontakController@index')->name('daftarkontakIndex');
Route::get('/daftarkontak/new','DaftarKontakController@new_form')->name('daftarkontakNewForm');
Route::post('/daftarkontak','DaftarKontakController@save')->name('daftarkontakCreate');

Route::get('/daftarkontak/{id}/delete', 'DaftarKontakController@delete')->name('daftarkontakDelete');
Route::get('/daftarkontak/edit/{id}','DaftarKontakController@edit')->name('daftarkontakEditForm');
Route::post('/daftarkontak/edit/{id}','DaftarKontakController@update')->name('daftarkontakUpdate');

Route::get('/daftarkontak/search', 'DaftarKontakController@search')->name("daftarkontakSearch");
