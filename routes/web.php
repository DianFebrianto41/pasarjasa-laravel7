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

Route::get('/', 'FrontController@index');
Route::get('/kategori-jasa/{id}', 'FrontController@show_kategori')->name('kategori.nama');
Route::get('/pesan-jasa/{jasa}', 'FrontController@isi_data')->name('pesan');
Route::post('/pesan-jasa/{jasa}', 'FrontController@simpan_data')->name('pesan.simpan');

Route::get('login', 'AuthController@showFormLogin')->name('login');
Route::post('login', 'AuthController@login');
Route::get('register', 'AuthController@showFormRegister')->name('register');
Route::post('register', 'AuthController@register');
Route::get('change-password', 'ChangePasswordController@index');
Route::post('change-password', 'ChangePasswordController@store')->name('change.password');



Route::group(['middleware' => 'auth'], function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    });

    // CRUD INFORMASI
    Route::get('/informasi', 'InformasiController@index')->name('informasi.index');
    Route::get('informasi/tambah', 'InformasiController@create')->name('informasi.tambah');
    Route::post('/informasi/store', 'InformasiController@store')->name('informasi.store');
    Route::get('/informasi/edit/{id}','InformasiController@edit')->name('informasi.edit');
    Route::put('/informasi/update/{id}', 'InformasiController@update')->name('informasi.update');
    Route::put('/informasi/destroy/{id}', 'InformasiController@destroy')->name('informasi.destroy');
    Route::get('logout', 'AuthController@logout')->name('logout');


    // CRUD PRODUK
    Route::get('/profesi', 'ProfesiController@index')->name('profesi.index');
    Route::get('/profesi/tambah', 'ProfesiController@create')->name('profesi.tambah');
    Route::post('/profesi/store', 'ProfesiController@store')->name('profesi.store');
    Route::get('/profesi/edit/{id}','ProfesiController@edit')->name('profesi.edit');
    Route::put('/profesi/update/{id}', 'ProfesiController@update')->name('profesi.update');
    Route::put('/profesi/destroy/{id}', 'ProfesiController@destroy')->name('profesi.destroy');

    //CRUD PENYEDIA JASA

    Route::get('/penyediajasa', 'PenyediajasaController@index')->name('penyediajasa.index');
    Route::get('/penyediajasa/tambah', 'PenyediaJasaController@create')->name('penyediajasa.tambah');
    Route::post('/penyediajasa/store', 'PenyediaJasaController@store')->name('penyediajasa.store');
    Route::get('/penyediajasa/edit/{id}','PenyediaJasaController@edit')->name('penyediajasa.edit');
    Route::put('/penyediajasa/update/{id}', 'PenyediaJasaController@update')->name('penyediajasa.update');
    Route::put('/penyediajasa/destroy/{id}', 'PenyediaJasaController@destroy')->name('penyediajasa.destroy');

    // CRUD JASA
    // Route::get('/jasa', 'JasaController@index')->name('jasa.index');
    // Route::get('/jasa/tambah', 'JasaController@create')->name('jasa.tambah');
    // Route::post('/jasa/store', 'JasaController@store')->name('jasa.store');
    // Route::get('/jasa/edit/{id}','JasaController@edit')->name('jasa.edit');
    // Route::put('/jasa/update/{id}', 'JasaController@update')->name('jasa.update');
    // Route::put('/jasa/destroy/{id}', 'JasaController@destroy')->name('jasa.destroy');


     // CRUD JASA
     Route::get('/layanan', 'LayananController@index')->name('layanan.index');
     Route::get('/layanan/tambah', 'LayananController@create')->name('layanan.tambah');
     Route::post('/layanan/store', 'LayananController@store')->name('layanan.store');
     Route::get('/layanan/edit/{id}','LayananController@edit')->name('layanan.edit');
     Route::put('/layanan/update/{id}', 'LayananController@update')->name('layanan.update');
     Route::put('/layanan/destroy/{id}', 'LayananController@destroy')->name('layanan.destroy');

    //CRUD PELANGGAN

    Route::get('/pelanggan', 'PelangganController@index')->name('pelanggan.index');

});
