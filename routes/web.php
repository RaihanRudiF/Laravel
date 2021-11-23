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
Route::get('/tampilstring', function(){
    return ('Hello Bujank');
});
Route::get('/tampilview', function(){
    return view ("simpleview");
});
Route::get('/tableview', function(){
    return view ("table");
});

Route::get('kalkulator','kalkulatorcontroller@index');
Route::get('kaltambah','kalkulatorcontroller@tambah')->name('tmbh');
Route::get('kalkurang','kalkulatorcontroller@kurang')->name('krg');
Route::get('kalkali','kalkulatorcontroller@kali')->name('kli');
Route::get('kalbagi','kalkulatorcontroller@bagi')->name('bgi');


Route::get('dosen','DosenController@index')->name('dosenlist');
Route::get('/tambahdosen','DosenController@create')->name('dosenadd');
Route::post('/simpandosen','DosenController@inputdata')->name('dosensave');
Route::get('/dosenedit/{id}','DosenController@edit')->name('dosenedit');
Route::post('/dosenupdate/{id}','DosenController@update')->name('dosenupdate');
Route::get('/dosendelete/{id}','DosenController@destroy')->name('dosendelete');