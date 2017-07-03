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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', 'Auth\LoginController@getLogin')->name('login');
Route::post('/login', 'Auth\LoginController@postLogin')->name('login');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');


Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');


Route::get('abc',function(){
	 return bcrypt('123456');
});

Route::get('trangchu','PageController\PageController@TrangChu');
Route::get('tintuc','PageController\PageController@TinTuc');
Route::get('lienhe','PageController\PageController@LienHe');
Route::get('detail','PageController\PageController@Detail');
Route::get('cauhoithuonggap','PageController\PageController@Cauhoithuonggap');