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
Route::get('/ophone/{ophone}', 'OphoneController@show')->name('ophone.show');
Route::get('/ophone/{ophone}/edit', 'OphoneController@edit')->name('ophone.edit');
Route::patch('/ophone/{ophone}', 'OphoneController@update')->name('ophone.update');
Route::delete('/ophone/{ophone}', 'OphoneController@destroy')->name('ophone.destroy');

Route::get('/about', 'AboutController@index')->name('about.index');

Route::get('/post', 'PostController@index')->name('post.index');
Route::get('/post/create', 'PostController@create')->name('post.create');
Route::post('/post', 'PostController@store')->name('post.store');
Route::get('/post/{post}', 'PostController@show')->name('post.show');
Route::get('/post/{post}/edit', 'PostController@edit')->name('post.edit');
Route::patch('/post/{post}', 'PostController@update')->name('post.update');
Route::delete('/post/{post}', 'PostController@destroy')->name('post.destroy');

Route::get('/branch',              'BranchController@index')->name('branch.index');
Route::get('/branch/create',       'BranchController@create')->name('branch.create');
Route::post('/branch',              'BranchController@store')->name('branch.store');
Route::get('/branch/{branch}',     'BranchController@show')->name('branch.show');
Route::get('/branch/{branch}/edit', 'BranchController@edit')->name('branch.edit');
Route::patch('/branch/{branch}',     'BranchController@update')->name('branch.update');
Route::delete('/branch/{branch}',     'BranchController@destroy')->name('branch.destroy');

Route::get('/func',            'FuncController@index')->name('func.index');
Route::get('/func/create',     'FuncController@create')->name('func.create');
Route::post('/func',      'FuncController@store')->name('func.store');
Route::get('/func/{func}',     'FuncController@show')->name('func.show');
Route::get('/func/{func}/edit', 'FuncController@edit')->name('func.edit');
Route::patch('/func/{func}',     'FuncController@update')->name('func.update');
Route::delete('/func/{func}',     'FuncController@destroy')->name('func.destroy');

Route::get('/quote',            'QuoteController@index')->name('quote.index');
Route::get('/quote/create',     'QuoteController@create')->name('quote.create');
Route::post('/quote',      'QuoteController@store')->name('quote.store');
Route::get('/quote/{quote}',     'QuoteController@show')->name('quote.show');
Route::get('/quote/{quote}/edit', 'QuoteController@edit')->name('quote.edit');
Route::patch('/quote/{quote}',     'QuoteController@update')->name('quote.update');
Route::delete('/quote/{quote}',     'QuoteController@destroy')->name('quote.destroy');

Route::get('/category',            'CategoryController@index')->name('category.index');
Route::get('/category/create',     'CategoryController@create')->name('category.create');
Route::post('/category',      'CategoryController@store')->name('category.store');
Route::get('/category/{category}',     'CategoryController@show')->name('category.show');
Route::get('/category/{category}/edit', 'CategoryController@edit')->name('category.edit');
Route::patch('/category/{category}',     'CategoryController@update')->name('category.update');
Route::delete('/category/{category}',     'CategoryController@destroy')->name('category.destroy');

Route::get('/tag',            'TagController@index')->name('tag.index');
Route::get('/tag/create',     'TagController@create')->name('tag.create');
Route::post('/tag',      'TagController@store')->name('tag.store');
Route::get('/tag/{tag}',     'TagController@show')->name('tag.show');
Route::get('/tag/{tag}/edit', 'TagController@edit')->name('tag.edit');
Route::patch('/tag/{tag}',     'TagController@update')->name('tag.update');
Route::delete('/tag/{tag}',     'TagController@destroy')->name('tag.destroy');
