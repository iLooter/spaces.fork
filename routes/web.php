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
Route::get('/', 'HomeController@index')->name('home');

Auth::routes();


/*
|-------------------------------------------------------------------------
| Public Routes
| ------------------------------------------------------------------------
 */

//temp logout without controller and
Route::get('/logout', function(){
    Auth::logout();
    return redirect('/');
});



/*
|-------------------------------------------------------------------------
| Registered User Routes
| ------------------------------------------------------------------------
 */
Route::get('/startpage', 'UserController@startpage')->name('user.start_page');

Route::group(['prefix' => 'settings'], function(){

    Route::get('/', 'SettingController@index')->name('settings.index');


    //Change Password
    Route::get('change_password', 'SettingController@showChangePasswordForm')->name('settings.change_password_form');
    Route::post('change_password', 'SettingController@changePassword')->name('settings.change_password');

    //Email Settings
    Route::group(['prefix' => 'email'], function() {

        Route::get('/', 'SettingController@showEmailSettingsPage')->name('settings.email_form');
        Route::post('/', 'SettingController@showEmailSettingsPage')->name('settings.email');

        Route::get('change', 'SettingController@showChangeEmailForm')->name('settings.email.change_form');
        Route::post('change', 'SettingController@changeEmail')->name('settings.email.change');
    });



    //ChangeLogin
    Route::get('change_login', 'SettingController@changeLogin')->name('settings.change_login');
    Route::post('change_login', 'SettingController@changeLogin')->name('settings.change_login');


});

//Activation Routes
Route::group(['middleware' => ['web']], function () {
    // Email confirmation
    Route::get('confirmation/resend', 'Auth\ActivateController@resend');
    Route::get('confirmation/check/{token}', 'Auth\ActivateController@confirm')->name('user.email_confirmation_check');

});





