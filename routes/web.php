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



Auth::routes([
    'register' => false,
    'reset' => false,
    'verify' => false
]);


Route::group(['prefix' => App\Http\Middleware\LocaleMiddleware::getLocale()], function(){
    Route::get('/', 'IndexController@index');

    Route::get('/home', 'HomeController@index')->name('home');


    // templates routes

    Route::group(['middleware' => ['auth']], function() {
        Route::post('/template/set', 'TemplateController@set');
        Route::get('/pages/{domain}', 'PagesController@index')->name('pages');
        Route::get('/edit-fields/{location}', 'FieldsController@edit')->name('edit-fields');
        Route::post('/field-store', 'FieldsController@store')->name('field-store');


        // languages

        Route::get('/languages', 'LanguagesController@index')->name('languages');
        Route::post('/languages/add', 'LanguagesController@create')->name('language_add');
        Route::get('/languages/destroy/{slug}', 'LanguagesController@delete')->name('languages_destroy');

        Route::get('/users', 'UsersController@index')->name('users');

        Route::post('/create-user', 'UsersController@create')->name('create-user');
        Route::get('/user-destroy/{id}', 'UsersController@destroy')->name('user-destroy');
    });


    Route::get('/{slug}', 'IndexController@index');




});
Route::post('/json/{lang}/{landing}/getFields', 'FieldsController@getFields')->name('fields');
Route::post('/json/getLanguages', function() {
    $languages = \App\Http\Middleware\LocaleMiddleware::loadLanguages();

    return response()->json(['languages' => $languages]);
});


Route::get('setlocale/{lang}', 'LanguagesController@set')->name('setlocale');
