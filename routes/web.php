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
Route::get('/', 'OphoneController@index')->name('start');

Route::get('/ophone', 'OphoneController@index')->name('ophone.index');
Route::get('/ophone/create', 'OphoneController@create')->name('ophone.create');
Route::post('/ophone/store', 'OphoneController@store')->name('ophone.store');
Route::get('/ophone/{ophone}', 'OphoneController@show')->name('ophone.show');
Route::get('/ophone/{ophone}', 'OphoneController@showBranch')->name('ophone.showBranch');
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


Route::group(['namespace' => 'Admin'], function () {
    Route::group(['namespace' => 'Post', 'prefix' => 'admin', 'middleware' => 'admin'], function () {
        Route::get('/post',            'IndexController')->name('admin.post.index');
        Route::get('/post/create', 'CreateController')->name('admin.post.create');
        Route::post('/post', 'StoreController')->name('admin.post.store');
        Route::get('/post/{post}', 'ShowController')->name('admin.post.show');
        Route::get('/post/{post}/edit', 'EditController')->name('admin.post.edit');
        Route::patch('/post/{post}', 'UpdateController')->name('admin.post.update');
        Route::delete('/post/{post}', 'DestroyController')->name('admin.post.destroy');
    });
    Route::group(['namespace' => 'Category', 'prefix' => 'admin', 'middleware' => 'admin'], function () {
        Route::get('/category',            'IndexController')->name('admin.category.index');
        Route::get('/category/create',     'CreateController')->name('admin.category.create');
        Route::post('/category',      'StoreController')->name('admin.category.store');
        Route::get('/category/{category}',     'ShowController')->name('admin.category.show');
        Route::get('/category/{category}/edit', 'EditController')->name('admin.category.edit');
        Route::patch('/category/{category}',     'UpdateController')->name('admin.category.update');
        Route::delete('/category/{category}',     'DestroyController')->name('admin.category.destroy');
    });

    Route::group(['namespace' => 'Ophone', 'prefix' => 'admin', 'middleware' => 'admin'], function () {
        Route::get('/ophone',            'IndexController')->name('admin.ophone.index');
        Route::get('/ophone/birthday',            'BirthdayController')->name('admin.ophone.birthday');
        Route::get('/ophone/create', 'CreateController')->name('admin.ophone.create');
        Route::post('/ophone', 'StoreController')->name('admin.ophone.store');
        Route::get('/ophone/{ophone}', 'ShowController')->name('admin.ophone.show');
        Route::get('/ophone/{ophone}/edit', 'EditController')->name('admin.ophone.edit');
        Route::patch('/ophone/{ophone}', 'UpdateController')->name('admin.ophone.update');
        Route::delete('/ophone/{ophone}', 'DestroyController')->name('admin.ophone.destroy');
    });

    Route::group(['namespace' => 'Branch', 'prefix' => 'admin', 'middleware' => 'admin'], function () {
        Route::get('/branch',              'IndexController')->name('admin.branch.index');
        Route::get('/branch/create',       'CreateController')->name('admin.branch.create');
        Route::post('/branch',              'StoreController')->name('admin.branch.store');
        Route::get('/branch/{branch}',     'ShowController')->name('admin.branch.show');
        Route::get('/branch/{branch}/edit', 'EditController')->name('admin.branch.edit');
        Route::patch('/branch/{branch}',     'UpdateController')->name('admin.branch.update');
        Route::delete('/branch/{branch}',     'DestroyController')->name('admin.branch.destroy');
    });

    Route::group(['namespace' => 'Func', 'prefix' => 'admin', 'middleware' => 'admin'], function () {
        Route::get('/func',             'IndexController')->name('admin.func.index');
        Route::get('/func/create',      'CreateController')->name('admin.func.create');
        Route::post('/func',            'StoreController')->name('admin.func.store');
        Route::get('/func/{func}',      'ShowController')->name('admin.func.show');
        Route::get('/func/{func}/edit', 'EditController')->name('admin.func.edit');
        Route::patch('/func/{func}',    'UpdateController')->name('admin.func.update');
        Route::delete('/func/{func}',   'DestroyController')->name('admin.func.destroy');
    });

    Route::group(['namespace' => 'Message', 'prefix' => 'admin', 'middleware' => 'admin'], function () {
        Route::get('/message',                  'IndexController')->name('admin.message.index');
        Route::get('/message/create',           'CreateController')->name('admin.message.create');
        Route::post('/message',                 'StoreController')->name('admin.message.store');
        Route::get('/message/{message}',        'ShowController')->name('admin.message.show');
        Route::get('/message/{message}/edit',   'EditController')->name('admin.message.edit');
        Route::patch('/message/{message}',      'UpdateController')->name('admin.message.update');
        Route::delete('/message/{message}',     'DestroyController')->name('admin.message.destroy');
    });
    Route::group(['namespace' => 'Street', 'prefix' => 'admin', 'middleware' => 'admin'], function () {
        Route::get('/street',    'IndexController')->name('admin.street.index');
        Route::get('/street/create', 'CreateController')->name('admin.street.create');
        Route::get('/street/createappeal',           'CreateAppealController')->name('admin.street.createAppeal');
        Route::post('/street/store',                 'StoreController')->name('admin.street.store');
        Route::post('/street/storeAppeal',                 'StoreAppealController')->name('admin.street.storeAppeal');
        Route::get('/street/{street}',        'ShowController')->name('admin.street.show');
        Route::get(     '/street/{street}/edit',   'EditController')->name(     'admin.street.edit');
        Route::get(     '/street/{street}/createEdit',   'CreateEditController')->name('admin.street.createEdit');
        Route::patch(   '/street/{street}',      'UpdateController')->name(     'admin.street.update');
        Route::delete(  '/street/{street}',     'DestroyController')->name(     'admin.street.destroy');
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

    Route::group(['namespace' => 'Type_docum', 'prefix' => 'admin', 'middleware' => 'admin'], function () {
        Route::get('/type_docum',                    'IndexController')->name('admin.type_docum.index');
        Route::get('/type_docum/create',            'CreateController')->name('admin.type_docum.create');
        Route::post('/type_docum',                    'StoreController')->name('admin.type_docum.store');
        Route::get('/type_docum/{type_docum}',        'ShowController')->name('admin.type_docum.show');
        Route::get('/type_docum/{type_docum}/edit',   'EditController')->name('admin.type_docum.edit');
        Route::patch('/type_docum/{type_docum}',      'UpdateController')->name('admin.type_docum.update');
        Route::delete('/type_docum/{type_docum}',     'DestroyController')->name('admin.type_docum.destroy');
    });
    Route::group(['namespace' => 'Question_docum', 'prefix' => 'admin', 'middleware' => 'admin'], function () {
        Route::get('/question_docum',                    'IndexController')->name('admin.question_docum.index');
        Route::get('/question_docum/create',            'CreateController')->name('admin.question_docum.create');
        Route::post('/question_docum',                    'StoreController')->name('admin.question_docum.store');
        Route::get('/question_docum/{question_docum}',        'ShowController')->name('admin.question_docum.show');
        Route::get('/question_docum/{question_docum}/edit',   'EditController')->name('admin.question_docum.edit');
        Route::patch('/question_docum/{question_docum}',      'UpdateController')->name('admin.question_docum.update');
        Route::delete('/question_docum/{question_docum}',     'DestroyController')->name('admin.question_docum.destroy');
    });
    Route::group(['namespace' => 'Amount_docum', 'prefix' => 'admin', 'middleware' => 'admin'], function () {
        Route::get('/amount_docum',                    'IndexController')->name('admin.amount_docum.index');
        Route::get('/amount_docum/create',            'CreateController')->name('admin.amount_docum.create');
        Route::post('/amount_docum',                    'StoreController')->name('admin.amount_docum.store');
        Route::get('/amount_docum/{amount_docum}',        'ShowController')->name('admin.amount_docum.show');
        Route::get('/amount_docum/{amount_docum}/edit',   'EditController')->name('admin.amount_docum.edit');
        Route::patch('/amount_docum/{amount_docum}',      'UpdateController')->name('admin.amount_docum.update');
        Route::delete('/amount_docum/{amount_docum}',     'DestroyController')->name('admin.amount_docum.destroy');
    });
    Route::group(['namespace' => 'Content_resolution', 'prefix' => 'admin', 'middleware' => 'admin'], function () {
        Route::get('/content_resolution',                    'IndexController')->name('admin.content_resolution.index');
        Route::get('/content_resolution/create',            'CreateController')->name('admin.content_resolution.create');
        Route::post('/content_resolution',                    'StoreController')->name('admin.content_resolution.store');
        Route::get('/content_resolution/{content_resolution}',        'ShowController')->name('admin.content_resolution.show');
        Route::get('/content_resolution/{content_resolution}/edit',   'EditController')->name('admin.content_resolution.edit');
        Route::patch('/content_resolution/{content_resolution}',      'UpdateController')->name('admin.content_resolution.update');
        Route::delete('/content_resolution/{content_resolution}',     'DestroyController')->name('admin.content_resolution.destroy');
    });
    Route::group(['namespace' => 'Title_implementation', 'prefix' => 'admin', 'middleware' => 'admin'], function () {
        Route::get('/title_implementation',                    'IndexController')->name('admin.title_implementation.index');
        Route::get('/title_implementation/create',            'CreateController')->name('admin.title_implementation.create');
        Route::post('/title_implementation',                    'StoreController')->name('admin.title_implementation.store');
        Route::get('/title_implementation/{title_implementation}',        'ShowController')->name('admin.title_implementation.show');
        Route::get('/title_implementation/{title_implementation}/edit',   'EditController')->name('admin.title_implementation.edit');
        Route::patch('/title_implementation/{title_implementation}',      'UpdateController')->name('admin.title_implementation.update');
        Route::delete('/title_implementation/{title_implementation}',     'DestroyController')->name('admin.title_implementation.destroy');
    });

    Route::group(['namespace' => 'Validity', 'prefix' => 'admin', 'middleware' => 'admin'], function () {
        Route::get('/validity',                    'IndexController')->name('admin.validity.index');
        Route::get('/validity/create',            'CreateController')->name('admin.validity.create');
        Route::post('/validity',                    'StoreController')->name('admin.validity.store');
        Route::get('/validity/{validity}',        'ShowController')->name('admin.validity.show');
        Route::get('/validity/{validity}/edit',   'EditController')->name('admin.validity.edit');
        Route::patch('/validity/{validity}',      'UpdateController')->name('admin.validity.update');
        Route::delete('/validity/{validity}',     'DestroyController')->name('admin.validity.destroy');
    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('/home', 'HomeController@index')->name('home');
//Route::group(['namespace' => 'Controllers'], function () {
//    Route::get('/home',          'HomeController@index')->name('home');
//});


Route::group(
    ['namespace' => 'Kmr'],
    function () {
        Route::group(['namespace' => 'Appeal', 'prefix' => 'kmr', 'middleware' => 'kmr'], function () {
        Route::get('/appeal',          'IndexController')->name('kmr.appeal.index');
        Route::get('/appeal/create',  'CreateController')->name('kmr.appeal.create');
        Route::post('/appeal', 'StoreController')->name('kmr.appeal.store');
        Route::get('/appeal/{appeal}', 'ShowController')->name('kmr.appeal.show');
        Route::get('/appeal/{appeal}/edit', 'EditController')->name('kmr.appeal.edit');
        Route::patch('/appeal/{appeal}', 'UpdateController')->name('kmr.appeal.update');
        Route::delete('/appeal/{appeal}', 'DestroyController')->name('kmr.appeal.destroy');
    });
        Route::group(['namespace' => 'Street', 'prefix' => 'kmr', 'middleware' => 'kmr'], function () {
            Route::get('/street',    'IndexController')->name('kmr.street.index');
            Route::get('/street/create', 'CreateController')->name('kmr.street.create');
            Route::get('/street/createappeal',           'CreateAppealController')->name('kmr.street.createAppeal');
            Route::post('/street/store',                 'StoreController')->name('kmr.street.store');
            Route::post('/street/storeAppeal',                 'StoreAppealController')->name('kmr.street.storeAppeal');
            Route::get('/street/{street}',        'ShowController')->name('kmr.street.show');
            Route::get('/street/{street}/edit',   'EditController')->name('kmr.street.edit');
            Route::get('/street/{street}/createEdit',   'CreateEditController')->name('kmr.street.createEdit');
            Route::patch('/street/{street}',      'UpdateController')->name('kmr.street.update');
            Route::delete('/street/{street}',     'DestroyController')->name('kmr.street.destroy');
        });
        //Довідник "Вид документа" скарга/подяка/запит/пропозиція (type_docum_id)
        Route::group(['namespace' => 'Type_docum', 'prefix' => 'kmr', 'middleware' => 'kmr'], function () {
            Route::get('/type_docum',                    'IndexController')->name('kmr.type_docum.index');
            Route::get('/type_docum/create',            'CreateController')->name('kmr.type_docum.create');
            Route::post('/type_docum',                    'StoreController')->name('kmr.type_docum.store');
            Route::get('/type_docum/{type_docum}',        'ShowController')->name('kmr.type_docum.show');
            Route::get('/type_docum/{type_docum}/edit',   'EditController')->name('kmr.type_docum.edit');
            Route::patch('/type_docum/{type_docum}',      'UpdateController')->name('kmr.type_docum.update');
            Route::delete('/type_docum/{type_docum}',     'DestroyController')->name('kmr.type_docum.destroy');
        });
        //Довідник "Порушені питання" (question_docum_id)
        Route::group(['namespace' => 'Question_docum', 'prefix' => 'kmr', 'middleware' => 'kmr'], function () {
            Route::get('/question_docum',                    'IndexController')->name('kmr.question_docum.index');
            Route::get('/question_docum/create',            'CreateController')->name('kmr.question_docum.create');
            Route::post('/question_docum',                    'StoreController')->name('kmr.question_docum.store');
            Route::get('/question_docum/{question_docum}',        'ShowController')->name('kmr.question_docum.show');
            Route::get('/question_docum/{question_docum}/edit',   'EditController')->name('kmr.question_docum.edit');
            Route::patch('/question_docum/{question_docum}',      'UpdateController')->name('kmr.question_docum.update');
            Route::delete('/question_docum/{question_docum}',     'DestroyController')->name('kmr.question_docum.destroy');
        });
        //Довідник Куди надійшло звернення... (destination_office_id)
        //він же Довідник Звідки одержано (1) (source1_office_id)
        //він же Довідник Звідки одержано (2) (source2_office_id)
        Route::group(['namespace' => 'Office', 'prefix' => 'kmr', 'middleware' => 'kmr'], function () {
            Route::get('/office',                  'IndexController')->name('kmr.office.index');
            Route::get('/office/create',           'CreateController')->name('kmr.office.create');
            Route::post('/office',                 'StoreController')->name('kmr.office.store');
            Route::get('/office/{office}',        'ShowController')->name('kmr.office.show');
            Route::get('/office/{office}/edit',   'EditController')->name('kmr.office.edit');
            Route::patch('/office/{office}',      'UpdateController')->name('kmr.office.update');
            Route::delete('/office/{office}',     'DestroyController')->name('kmr.office.destroy');
        });

        //довідник Первинне/повторне/дубль (amount_docum_id)
        Route::group(['namespace' => 'Amount_docum', 'prefix' => 'kmr', 'middleware' => 'kmr'], function () {
            Route::get('/amount_docum',                    'IndexController')->name('kmr.amount_docum.index');
            Route::get('/amount_docum/create',            'CreateController')->name('kmr.amount_docum.create');
            Route::post('/amount_docum',                    'StoreController')->name('kmr.amount_docum.store');
            Route::get('/amount_docum/{amount_docum}',        'ShowController')->name('kmr.amount_docum.show');
            Route::get('/amount_docum/{amount_docum}/edit',   'EditController')->name('kmr.amount_docum.edit');
            Route::patch('/amount_docum/{amount_docum}',      'UpdateController')->name('kmr.amount_docum.update');
            Route::delete('/amount_docum/{amount_docum}',     'DestroyController')->name('kmr.amount_docum.destroy');
        });

        //Довідник Виконавець (executor_ophone_id)
        // Route::group(['namespace' => 'Ophone', 'prefix' => 'kmr', 'middleware' => 'kmr'], function () {
        //     Route::get('/ophone',              'IndexController')->name('kmr.ophone.index');
        //     Route::get('/ophone/birthday',  'BirthdayController')->name('kmr.ophone.birthday');
        //     Route::get('/ophone/create',      'CreateController')->name('kmr.ophone.create');
        //     Route::post('/ophone',             'StoreController')->name('kmr.ophone.store');
        //     Route::get('/ophone/{ophone}',      'ShowController')->name('kmr.ophone.show');
        //     Route::get('/ophone/{ophone}/edit', 'EditController')->name('kmr.ophone.edit');
        //     Route::patch('/ophone/{ophone}',  'UpdateController')->name('kmr.ophone.update');
        //     Route::delete('/ophone/{ophone}','DestroyController')->name('kmr.ophone.destroy');
        // });

        //Довідник Зміст резолюції розгляд відповідь/розгляд/ не за адресою/ (content_resolution_id)
        Route::group(['namespace' => 'Content_resolution', 'prefix' => 'kmr', 'middleware' => 'kmr'], function () {
            Route::get('/content_resolution',
                'IndexController'
            )->name('kmr.content_resolution.index');
            Route::get('/content_resolution/create',            'CreateController')->name('kmr.content_resolution.create');
            Route::post('/content_resolution',                    'StoreController')->name('kmr.content_resolution.store');
            Route::get('/content_resolution/{content_resolution}',        'ShowController')->name('kmr.content_resolution.show');
            Route::get('/content_resolution/{content_resolution}/edit',   'EditController')->name('kmr.content_resolution.edit');
            Route::patch('/content_resolution/{content_resolution}',      'UpdateController')->name('kmr.content_resolution.update');
            Route::delete('/content_resolution/{content_resolution}',
                'DestroyController'
            )->name('kmr.content_resolution.destroy');
        });

        //Довідник Результат розгляду (title_implementation_id)
        Route::group(['namespace' => 'Title_implementation', 'prefix' => 'kmr', 'middleware' => 'kmr'
        ], function () {
            Route::get('/title_implementation',                'IndexController'     )->name('kmr.title_implementation.index');
            Route::get('/title_implementation/create',            'CreateController')->name('kmr.title_implementation.create');
            Route::post('/title_implementation',                    'StoreController')->name('kmr.title_implementation.store');
            Route::get('/title_implementation/{title_implementation}',        'ShowController')->name('kmr.title_implementation.show');
            Route::get('/title_implementation/{title_implementation}/edit',   'EditController')->name('kmr.title_implementation.edit');
            Route::patch('/title_implementation/{title_implementation}',      'UpdateController')->name('kmr.title_implementation.update');
            Route::delete('/title_implementation/{title_implementation}',     'DestroyController')->name('kmr.title_implementation.destroy');
        });


 });