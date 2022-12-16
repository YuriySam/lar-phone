<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

//Route::get('/', 'HomeController@index')->name('home.index');
Route::get('/', 'OphoneController@index')->name('ophone.index');

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


Route::group(['namespace' =>'Admin' ], function () {
    Route::group(['namespace' =>'Post', 'prefix' => 'admin', 'middleware' => 'admin'], function () {
        Route::get('/post',            'IndexController')->name('admin.post.index');
        Route::get('/post/create', 'CreateController')->name('admin.post.create');
        Route::post('/post', 'StoreController')->name('admin.post.store');
        Route::get('/post/{post}', 'ShowController')->name('admin.post.show');
        Route::get('/post/{post}/edit', 'EditController')->name('admin.post.edit');
        Route::patch('/post/{post}', 'UpdateController')->name('admin.post.update');
        Route::delete('/post/{post}', 'DestroyController')->name('admin.post.destroy');
    });
    Route::group(['namespace' => 'Category', 'prefix' => 'admin', 'middleware' => 'admin'], function () {
        Route::get(     '/category',            'IndexController')->        name('admin.category.index');
        Route::get(     '/category/create',     'CreateController')->       name('admin.category.create');
        Route::post(    '/category',      'StoreController')->              name('admin.category.store');
        Route::get(     '/category/{category}',     'ShowController')->     name('admin.category.show');
        Route::get(     '/category/{category}/edit', 'EditController')->    name('admin.category.edit');
        Route::patch(   '/category/{category}',     'UpdateController')->   name('admin.category.update');
        Route::delete(  '/category/{category}',     'DestroyController')->  name('admin.category.destroy');
    });

    Route::group(['namespace' => 'Ophone', 'prefix' => 'admin', 'middleware' => 'admin'], function () {
        Route::get('/ophone',            'IndexController')->name('admin.ophone.index');
        Route::get('/ophone/birthday',            'BirthdayController')->name('admin.ophone.birthday');
        Route::get(     '/ophone/create', 'CreateController')->     name('admin.ophone.create');
        Route::post(    '/ophone', 'StoreController')->             name('admin.ophone.store');
        Route::get(     '/ophone/{ophone}', 'ShowController')->     name('admin.ophone.show');
        Route::get(     '/ophone/{ophone}/edit', 'EditController')->name('admin.ophone.edit');
        Route::patch(   '/ophone/{ophone}', 'UpdateController')->   name('admin.ophone.update');
        Route::delete(  '/ophone/{ophone}', 'DestroyController')->  name('admin.ophone.destroy');
    });

    Route::group(['namespace' => 'Branch', 'prefix' => 'admin', 'middleware' => 'admin'], function () {
        Route::get(     '/branch',              'IndexController')->name('admin.branch.index');
        Route::get(     '/branch/create',       'CreateController')->name('admin.branch.create');
        Route::post(    '/branch',              'StoreController')->name('admin.branch.store');
        Route::get(     '/branch/{branch}',     'ShowController')->name('admin.branch.show');
        Route::get(     '/branch/{branch}/edit', 'EditController')->name('admin.branch.edit');
        Route::patch(   '/branch/{branch}',     'UpdateController')->name('admin.branch.update');
        Route::delete(  '/branch/{branch}',     'DestroyController')->name('admin.branch.destroy');
    });

    Route::group(['namespace' => 'Func', 'prefix' => 'admin', 'middleware' => 'admin'], function () {
        Route::get('/func',             'IndexController')->    name('admin.func.index');
        Route::get('/func/create',      'CreateController')->   name('admin.func.create');
        Route::post('/func',            'StoreController')->    name('admin.func.store');
        Route::get('/func/{func}',      'ShowController')->     name('admin.func.show');
        Route::get('/func/{func}/edit', 'EditController')->     name('admin.func.edit');
        Route::patch('/func/{func}',    'UpdateController')->   name('admin.func.update');
        Route::delete('/func/{func}',   'DestroyController')->  name('admin.func.destroy');
    });
    
    Route::group(['namespace' => 'Message', 'prefix' => 'admin', 'middleware' => 'admin'], function () {
        Route::get('/message',                  'IndexController')->    name('admin.message.index');
        Route::get('/message/create',           'CreateController')->   name('admin.message.create');
        Route::post('/message',                 'StoreController')->    name('admin.message.store');
        Route::get('/message/{message}',        'ShowController')->     name('admin.message.show');
        Route::get('/message/{message}/edit',   'EditController')->     name('admin.message.edit');
        Route::patch('/message/{message}',      'UpdateController')->   name('admin.message.update');
        Route::delete('/message/{message}',     'DestroyController')->  name('admin.message.destroy');
    });
    Route::group(['namespace' => 'Numerology', 'prefix' => 'admin', 'middleware' => 'admin'], function () {
        Route::get('/numerology',                  'IndexController')->name('admin.numerology.index');
        Route::get('/numerology/create',           'CreateController')->name('admin.numerology.create');
        Route::get('/numerology/calculate',           'CalculateController')->name('admin.numerology.calculate');
        Route::post('/numerology',                 'StoreController')->name('admin.numerology.store');
        Route::post('/numerology',                 'CalculateSetController')->name('admin.numerology.calculateset');
        Route::get('/numerology/{numerology}',        'ShowController')->name('admin.numerology.show');
        Route::get('/numerology/{numerology}/edit',   'EditController')->name('admin.numerology.edit');
        Route::patch('/numerology/{numerology}',      'UpdateController')->name('admin.numerology.update');
        Route::delete('/numerology/{numerology}',     'DestroyController')->name('admin.numerology.destroy');
        
    });
    Route::group(['namespace' => 'Office', 'prefix' => 'admin', 'middleware' => 'admin'], function () {
        Route::get('/office',                  'IndexController')->name('admin.office.index');
        Route::get('/office/create',           'CreateController')->name('admin.office.create');
        Route::post('/office',                 'StoreController')->name('admin.office.store');
        Route::get('/office/{office}',        'ShowController')->name('admin.office.show');
        Route::get('/office/{office}/edit',   'EditController')->name('admin.office.edit');
        Route::patch('/office/{office}',      'UpdateController')->name('admin.office.update');
        Route::delete('/office/{office}',     'DestroyController')->name('admin.office.destroy');
    });
        

    
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['namespace' => 'Appeal'], function () {
    Route::get(      '/appeal',          'IndexController'   )->name('appeal.index');
    Route::get(      '/appeal/create',  'CreateController'   )->name('appeal.create');
    Route::post(     '/appeal', 'StoreController'            )->name('appeal.store');
    Route::get(      '/appeal/{appeal}', 'ShowController'    )->name('appeal.show');
//     // Route::get(      '/appeal/{appeal}/edit','EditController')->name('appeal.edit');
//     // Route::patch(    '/appeal/{appeal}', 'UpdateController'  )->name('appeal.update');
//     // Route::delete(   '/appeal/{appeal}', 'DestroyController' )->name('appeal.destroy');
 });