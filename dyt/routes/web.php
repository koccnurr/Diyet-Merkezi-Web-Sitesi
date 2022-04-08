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
**/
Route::get('/', 'Front\SiteController@getIndex')->name('getIndex');
Route::get('/blog', 'Front\SiteController@getBlog')->name('getBlog');
Route::get('/about', 'Front\SiteController@getAbout')->name('getAbout');
Route::get('/online-diet', 'Front\SiteController@getOnlineDiet')->name('getOnlineDiet');
Route::post('/online-diet', 'Front\SiteController@postOnlineDiet')->name('postOnlineDiet');
Route::get('/sss', 'Front\SiteController@getFaq')->name('getFaq');
Route::get('/b/{blog_slug?}', 'Front\SiteController@getBlogDetail')->name('getBlogDetail');

Route::get('/contact', 'Front\SiteController@getContact')->name('getContact');
Route::post('/contact', 'Front\SiteController@postCreateMessage')->name('postCreateMessage');