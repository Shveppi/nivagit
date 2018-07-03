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

Route::get('/admin', function () {
    return view('welcome');
});

Route::get('/', 'MainController@index');

Route::get('contact', 'MainController@contact');
Route::get('gallery', 'MainController@gallery');

Route::get('gallery/detail', 'MainController@detail');

/*
Route::get('/slide/add', 'SlideController@showForm');
Route::get('/slide/list', 'SlideController@list');

Route::post('/slide/add', 'SlideController@create');
Route::get('/slide/{slug}', 'SlideController@editForm');
*/

Route::resource('admin/slide', 'SlideController');

Route::resource('admin/galery', 'GalleryController');

//Route::resource('test', 'TestController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
