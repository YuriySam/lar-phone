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

//Route::get('/', function () {return view('welcome');});

Route::get('/', 'PhoneController@index')->name('phone.index');

Route::get('/ophone', 'OphoneController@index')->name('ophone.index');
Route::get('/ophone/create', 'OphoneController@create')->name('ophone.create');
Route::post('/ophone', 'OphoneController@store')->name('ophone.store');

Route::get('/about', 'AboutController@index')->name('about.index');

Route::get('/post', 'PostController@index')->name('post.index');
Route::get('/post/create', 'PostController@create')->name('post.create');
Route::post('/post', 'PostController@store')->name('post.store');
Route::get('/post/{post}', 'PostController@show')->name('post.show');
Route::get('/post/{post}/edit', 'PostController@edit')->name('post.edit');
Route::patch('/post/{post}', 'PostController@update')->name('post.update');
Route::delete('/post/{post}', 'PostController@destroy')->name('post.destroy');
