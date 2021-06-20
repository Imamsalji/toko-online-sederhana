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

Route::get('/', 'HomeController@index2');

Auth::routes(['verify' => true]);
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/Dashboard', 'HomeController@index2')->name('Dashboard1');

Route::resource('products','ProductController');
Route::resource('deliverys','DeliveryController');
Route::resource('transactions','TransactionController');

Route::resource('front','FrontController');
Route::post('/front/store','FrontController@input')->name('input');
Route::get('/front','FrontController@pesan')->name('pesan');
Route::get('/terima','FrontController@terima')->name('terima');


Route::post('/transactions/store','TransactionController@input')->name('transaksi');
Route::get('/product','FrontController@index')->name('produk');