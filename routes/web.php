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
Route::get('/gallery/categories', 'PageController@galleryCategories')->name('page.gallery.categories');
Route::get('/gallery/{id}/{name}', 'PageController@gallery')->name('page.gallery');
Route::get('/about', 'PageController@about')->name('page.about');
Route::get('/contact', 'PageController@contact')->name('page.contact');
Route::get('/offer', 'PageController@offer')->name('page.offer');
Route::post('/contact/mail', 'MailsController@contact')->name('mail.contact');

Route::post('load.gallery.ajax', ['as'=>'load.gallery.ajax','uses'=>'Ajax\AjaxController@loadMoreGallery']);

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
