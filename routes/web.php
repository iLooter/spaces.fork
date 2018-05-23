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
    Route::match(['GET', 'POST'],'change_password', 'Settings\MainSettingController@changePassword')->name('settings.change_password');

    //Email Settings !! Edit confirmation
    Route::group(['prefix' => 'email'], function() {

        Route::match(['GET', 'POST'], '/', 'Settings\MainSettingController@changeEmailSettings')->name('settings.email');

        Route::get('change', 'Settings\MainSettingController@showChangeEmailForm')->name('settings.email.change_form');
        Route::post('change', 'Settings\MainSettingController@changeEmail')->name('settings.email.change');
    });



    //ChangeLogin
   Route::match(['GET', 'POST'], 'change_login/{login?}', 'Settings\MainSettingController@changeLogin')->name('settings.change_login');

});

//Messages worksheet
Route::group(['prefix' => 'mail'], function() {

    Route::get('/', 'MailController@index')->name('mail.index');

    Route::get('list', 'MailController@list')->name('mail.list');
    Route::get('write', 'MailController@write')->name('mail.write');
    Route::get('new_message', 'MailController@newMessage')->name('mail.new_message');
    //Route::post('change', 'Settings\MainSettingController@changeEmail')->name('settings.email.change');
});



//Userprofile page
Route::get('/id{id}', ['uses' => 'UserController@profile'])->name('user.profile');
//Userprofile worksheet
Route::get('/id{id}/worksheet', ['uses' => 'UserController@worksheet'])->name('user.worksheet');
//

//Worksheet group
Route::group(['prefix' => 'worksheet'], function() {

    //Index Page
    Route::get('/', 'WorksheetController@index')->name('worksheet.index');

    //About info page
    Route::get('/about', 'WorksheetController@aboutEditForm')->name('worksheet.about_form');
    Route::post('/about', 'Worksheet\MainWorksheetController@aboutEdit')->name('worksheet.about_save');

    //About page
    Route::match(['get', 'post'],'/maininfo', 'WorksheetController@updateMainInfo')->name('worksheet.main_info');


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





