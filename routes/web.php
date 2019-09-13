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

Route::middleware(['locale'])->group(function () {
    Route::resource('posts', 'PostController');
    Route::resource('postTranslations', 'PostTranslationController');

    Route::get('locale/{locale}', 'PostController@changeLocale')->name('change.locale');
});
