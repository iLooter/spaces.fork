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


Route::get('/startpage', 'UserController@startpage')->name('user.start_page');
//User Routes
Route::group(['prefix' => 'settings'], function(){
    Route::get('/', 'SettingController@index')->name('settings.index');

    //Change Password
    Route::get('change_password', 'SettingController@showChangePasswordForm')->name('settings.change_password_form');
    Route::post('change_password', 'SettingController@changePassword')->name('settings.change_password');

    Route::get('change_login', 'SettingController@changeLogin')->name('settings.change_login');
    Route::post('change_login', 'SettingController@changeLogin')->name('settings.change_login');


});


Route::get('/', 'HomeController@index')->name('home');;


//temp logout without controller and
Route::get('/logout', function(){
    Auth::logout();
    return redirect('/');
});

