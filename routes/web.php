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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/card', function () {
    return view('card');
});

Route::get('/route', function () {
    return view('route');
});

Route::get('/search', function () {
    return view('search');
});

Route::get('/city', 'CityController@getCityData');

Route::get('/keyword', 'KeyWordController@getKeyWordView')->name('getKeyWordView');

Route::get('/getKeyWordData','KeyWordController@index')->name('getKeyWordData');

Route::get('/updateKeyWord', 'KeyWordController@updateKeyWordData');

Route::post('/addKeyWord', 'KeyWordController@addKeyWordData')->name('addKeyWord');

Route::post('/updateKeyWord', 'KeyWordController@updateKeyWordData')->name('updateKeyWord');

Route::post('/deleteKeyWord', 'KeyWordController@deleteKeyWordData')->name('deleteKeyWord');
