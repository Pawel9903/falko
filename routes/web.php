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


Route::get('locale/{locale?}', array('as'=>'set-locale',
    'uses'=>'LanguageController@setLocale'));

Route::get('/', 'PageController@index')->name('page.index');
Route::get('/gallery', 'PageController@gallery')->name('page.gallery');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
