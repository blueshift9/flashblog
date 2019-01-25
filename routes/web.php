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

Route::get('/', 'PostsController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/laravel-filemanager', '\UniSharp\LaravelFilemanager\Controllers\LfmController@show');
Route::post('/laravel-filemanager/upload', '\UniSharp\LaravelFilemanager\Controllers\UploadController@upload');

Route::group(['namespace' => 'Admin', 'middleware' => 'auth', 'prefix' => 'admin'], function () {

    Route::get('users/datatable', 'UsersController@datatable');
    Route::get('posts/datatable', 'PostsController@datatable');

    Route::get('/','DashboardController@index');

    //Route::group(['middleware' => 'auth'], function () {
        // list all lfm routes here...
    //});


    Route::resource('users', 'UsersController');
    Route::resource('posts', 'PostsController');

    //Route::resource('posts', 'PostsController');
});

