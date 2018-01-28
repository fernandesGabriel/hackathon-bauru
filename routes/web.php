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

/*
|--------------------------------------------------------------------------
| Auth Routes Namespace
|--------------------------------------------------------------------------
*/
Route::namespace('Auth')->group(function () {
    Route::get('/login', 'LoginController@index')->name('login/form');
    Route::post('/login', 'LoginController@login')->name('login');
    Route::post('/logout', 'LoginController@logout')->name('logout');

    Route::get('/senha/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password/reset/form');
    Route::post('/senha/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password/email');
    Route::get('/senha/email', 'ForgotPasswordController@index')->name('password/email');
    Route::get('/senha/reset/{token}', 'ResetPasswordController@showResetForm')->name('password/reset/token/form');
    Route::post('/senha/reset', 'ResetPasswordController@reset')->name('password/reset');
    
    Route::get('password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::get('password/reset/{token?}', 'ResetPasswordController@showResetForm')->name('password.reset');
    Route::post('password/reset', 'ResetPasswordController@reset');
});

/*
|--------------------------------------------------------------------------
| Admin Routes Namespace
|--------------------------------------------------------------------------
*/
Route::prefix('admin')->name('admin/')->namespace('Admin')->group(function () {
    Route::get('/', 'AdminController@index')->name('dashboard');
    Route::get('/configuracoes/pagina/{page}', 'AdminPageController@index')->name('page/form');
    Route::post('/configuracoes/pagina/update', 'AdminPageController@update')->name('page/update');
    Route::get('/configuracoes/contato', 'AdminSettingController@indexContact')->name('contact/form');
    Route::post('/configuracoes/contato', 'AdminSettingController@saveContact')->name('contact/update');
    Route::get('/configuracoes/usuarios', 'AdminSettingController@indexUser')->name('user');
    Route::get('/configuracoes/usuario/{user?}', 'AdminSettingController@showUser')->name('user/form');
    Route::post('/configuracoes/usuarios/update', 'AdminSettingController@saveUser')->name('user/update');
    Route::post('/configuracoes/usuarios/delete', 'AdminSettingController@deleteUser')->name('user/delete');
    Route::get('/configuracoes/pagamento', 'AdminSettingController@indexPayment')->name('payment/form');
    Route::post('/configuracoes/pagamento', 'AdminSettingController@savePayment')->name('payment/update');
    Route::get('/configuracoes/patrocinadores', 'AdminSponsorController@index')->name('sponsor/form');
    Route::post('/configuracoes/patrocinadores', 'AdminSponsorController@upload')->name('sponsor/upload');
    Route::get('/patrocinadores/delete/{id}', 'AdminSponsorController@delete')->name('sponsor/upload');
});

/*
|--------------------------------------------------------------------------
| Web Routes Namespace
|--------------------------------------------------------------------------
*/
Route::middleware(['check.friendlyurl'])->group(function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/{name}', 'HomeController@index')->name('home');
});