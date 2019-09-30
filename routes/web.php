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





Auth::routes();


Route::group(['prefix' => App\Http\Middleware\LocaleMiddleware::getLocale()], function(){
    Route::get('/', 'IndexController@index');
    Route::get('/home', 'HomeController@index')->name('home');


    // templates routes

    Route::group(['middleware' => ['auth']], function() {
        Route::post('/template/set', 'TemplateController@set');
    });



});
