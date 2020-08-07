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

Route::get('/', 'HomeController@index');
Route::get('/product','ProductController@index');
Route::get('/product/create','ProductController@create')->name('create_product');
Route::post('/product/create','ProductController@store')->name('create_product');
Route::get('/product/{id?}','ProductController@show');
Route::get('/product/{id?}/edit','ProductController@edit')->name('edit_product');
Route::get('/product/{id?}/edit','ProductController@update')->name('edit_product');
Route::get('/product/{id?}/delete','ProductController@destroy')->name('delete_product');
