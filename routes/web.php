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


Route::get('/startpage', 'UserController@startpage');
//User Routes
Route::group(['prefix' => 'settings'], function(){
    Route::get('/', 'UserController@index');
    Route::match(['get', 'post'], 'change_nick', 'UserController@changeNick')->name('change_nick');

});


Route::get('/', 'HomeController@index');




Route::get('/home', 'HomeController@index')->name('home');

//temp logout without controller and
Route::get('/logout', function(){
    Auth::logout();
    return redirect('/');
});

