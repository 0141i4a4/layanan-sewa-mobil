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

Route::get('halo',function(){
    return "Halo selamat datang";
});

Route::get('Index',function(){
    return view('index');
});

Route::get('banyakmobil',function(){
    return view('banyakmobil');
});

Route::get('crudmobil','sewamobilController@crudmobil');

Route::get('crudmobil/tambah','sewamobilController@tambahmobil');

Route::post('crudmobil/store','sewamobilController@store');

Route::get('crudmobil/editmobil/{id}','sewamobilController@editmobil');

Route::post('/crudmobil/update','sewamobilController@update');

Route::get('crudpenyewa','sewamobilController@crudpenyewa');

Route::get('crudpenyewa/tambah','sewamobilController@tambahpenyewa');

Route::post('crudpenyewa/market','sewamobilController@market');

Route::get('crudpenyewa/editpenyewa/{id}','sewamobilController@editpenyewa');

Route::post('crudpenyewa/updatepenyewa','sewamobilController@updatepenyewa');

Route::get('crudpenyewa/hapuspenyewa/{id}','sewamobilController@hapuspenyewa');

Route::get('crudmobil/hapusmobil/{id}','sewamobilController@hapusmobil');

Route::get('daftarpenyewa','sewamobilController@daftarpenyewa');

Route::get('daftarmobil','sewamobilController@daftarmobil');

Route::get('crudmobil/cari','sewamobilController@cari');

Route::get('/pilihapv','sewamobilController@pilihapv');

Route::get('banyakmobil/cari','sewamobilController@carimobil');