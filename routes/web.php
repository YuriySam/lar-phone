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

Route::get('/message',            'MessageController@index')->name('message.index');
Route::get('/message/create',     'MessageController@create')->name('message.create');
Route::post('/message',      'MessageController@store')->name('message.store');
Route::get('/message/{message}',     'MessageController@show')->name('message.show');
Route::get('/message/{message}/edit', 'MessageController@edit')->name('message.edit');
Route::patch('/message/{message}',     'MessageController@update')->name('message.update');
Route::delete('/message/{message}',     'MessageController@destroy')->name('message.destroy');


Route::get('/about', 'AboutController@index')->name('about.index');


Route::group(['namespace' => 'Post'], function () {
    Route::get('/post', 'IndexController')->name('post.index');
    Route::get('/post/create', 'CreateController')->name('post.create');
    Route::post('/post', 'StoreController')->name('post.store');
    Route::get('/post/{post}', 'ShowController')->name('post.show');
    Route::get('/post/{post}/edit', 'EditController')->name('post.edit');
    Route::patch('/post/{post}', 'UpdateController')->name('post.update');
    Route::delete('/post/{post}', 'DestroyController')->name('post.destroy');
});


Route::group(['namespace' => 'Category'], function () {
    Route::get('/category',            'IndexController')->name('category.index');
    Route::get('/category/create',     'CreateController')->name('category.create');
    Route::post('/category',      'StoreController')->name('category.store');
    Route::get('/category/{category}',     'ShowController')->name('category.show');
    Route::get('/category/{category}/edit', 'EditController')->name('category.edit');
    Route::patch('/category/{category}',     'UpdateController')->name('category.update');
    Route::delete('/category/{category}',     'DestroyController')->name('category.destroy');

});
Route::group(['namespace' => 'Tag'], function () {
    Route::get('/tag',            'IndexController')->name('tag.index');
    Route::get('/tag/create',     'CreateController')->name('tag.create');
    Route::post('/tag',      'StoreController')->name('tag.store');
    Route::get('/tag/{tag}',     'ShowController')->name('tag.show');
    Route::get('/tag/{tag}/edit', 'EditController')->name('tag.edit');
    Route::patch('/tag/{tag}',     'UpdateController')->name('tag.update');
    Route::delete('/tag/{tag}',     'DestroyController')->name('tag.destroy');
});


Route::group(['namespace' =>'Admin'], function () {
    Route::group(['namespace' =>'Post', 'prefix' => 'admin'], function () {
        Route::get('/post',            'IndexController')->name('admin.post.index');
    }); 
});
