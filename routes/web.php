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



//Settings Group
Route::group(['prefix' => 'settings'], function(){

    Route::get('/', 'Settings\MainSettingController@index')->name('settings.index');


    //Change Password
    Route::get('change_password', 'Settings\MainSettingController@showChangePasswordForm')->name('settings.change_password_form');
    Route::post('change_password', 'Settings\MainSettingController@changePassword')->name('settings.change_password');

    //Email Settings !! Edit confirmation
    Route::group(['prefix' => 'email'], function() {

        Route::get('/', 'Settings\MainSettingController@showEmailSettingsPage')->name('settings.email_form');
        Route::post('/', 'Settings\MainSettingController@showEmailSettingsPage')->name('settings.email');

        Route::get('change', 'Settings\MainSettingController@showChangeEmailForm')->name('settings.email.change_form');
        Route::post('change', 'Settings\MainSettingController@changeEmail')->name('settings.email.change');
    });



    //ChangeLogin
   Route::get('change_login/{login?}', 'Settings\MainSettingController@changeLoginForm')->name('settings.change_login_form');
   Route::post('change_login', 'Settings\MainSettingController@changeLogin')->name('settings.change_login');


});


//Userprofile page
Route::get('/id{id}', ['uses' => 'UserController@profile'])->name('user.profile');
//Userprofile worksheet
Route::get('/id{id}/worksheet', ['uses' => 'UserController@worksheet'])->name('user.worksheet');

//Worksheet group
Route::group(['prefix' => 'worksheet'], function() {

    //Index Page
    Route::get('/', 'Worksheet\MainWorksheetController@index')->name('worksheet.index');

    //About info page
    Route::get('/about', 'Worksheet\MainWorksheetController@aboutEditForm')->name('worksheet.about_form');
    Route::post('/about', 'Worksheet\MainWorksheetController@aboutEdit')->name('worksheet.about_save');

    //About page
    Route::get('/maininfo', 'Worksheet\MainWorksheetController@mainInfoEditForm')->name('worksheet.main_info_form');
    Route::post('/maininfo', 'Worksheet\MainWorksheetController@mainInfoEdit')->name('worksheet.main_info_save');



});

//Activation Routes
Route::group(['middleware' => ['web']], function () {
    // Email confirmation
    Route::get('confirmation/resend', 'Auth\ActivateController@resend');
    Route::get('confirmation/check/{token}', 'Auth\ActivateController@confirm')->name('user.email_confirmation_check');

});

//Test Routes
Route::get('/email', function () {
    return new App\Mail\EmailVerification();
});





