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
Route::middleware(['check_url'])->group(function () {
	Route::get('/', 'HomeController@index')->name('home');
	Route::get('/historia', 'HomeController@index')->name('home');
	Route::get('/{name}', 'HomeController@index')->name('home');
});

/*
|--------------------------------------------------------------------------
| Auth Routes Namespace
|--------------------------------------------------------------------------
*/
Route::namespace('Auth')->group(function () {
    Route::get('/login', 'LoginController@index')->name('login/form');
    Route::post('/login', 'LoginController@login')->name('login');
    Route::post('/logout', 'LoginController@logout')->name('logout');
    Route::post('/senha/email', 'ForgotPasswordController@index')->name('password/email');
    Route::get('/senha/reset', 'ForgotPasswordController@index')->name('password/reset/form');
    Route::post('/senha/reset', 'ResetPasswordController@reset')->name('password/reset');
    Route::get('/senha/reset/{token}', 'ResetPasswordController@index')->name('password/reset/token/form');
});

/*
|--------------------------------------------------------------------------
| Admin Routes Namespace
|--------------------------------------------------------------------------
*/
Route::prefix('admin')->name('admin.')->namespace('Admin')->group(function () {
    Route::get('/', 'AdminController@index')->name('dashboard');
    Route::get('/pagina', 'AdminPageController@index')->name('pages');
});