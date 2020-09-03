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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'HomeController@index')->name('dashboard.index');

Route::resource('ternak', 'TernakController');
Route::resource('peternak', 'PeternakController');
Route::resource('jenis', 'JenisController');
Route::get('rekomendasi', 'RekomendasiController@index')->name('rekomendasi.index');
Route::get('kriteria', 'RekomendasiController@kriteria')->name('kriteria.index');
Route::get('kriteria/create', 'RekomendasiController@create')->name('kriteria.create');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
