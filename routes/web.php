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



Route::get('/login', 'Auth\LoginController@getLogin')->name('login');
Route::post('/login', 'Auth\LoginController@postLogin')->name('login');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');


Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');
Route::get('register','Auth\RegisterController@showRegistrationForm');
Route::post('register','Auth\RegisterController@register');
Route::get('register/verify/{token}', 'Auth\RegisterController@verify');
Route::get('user/verify/{token}', 'Manager\UserController@verify_user_mo');

Route::get('abc',function(){
	 return bcrypt('123456');
});
Route::get('/','PageController\PageController@TrangChu')->name('home');
//Route::get('tintuc','PageController\PageController@TinTuc');
Route::get('lien-he','PageController\PageController@LienHe');
Route::get('detail','PageController\PageController@Detail');
Route::get('cauhoithuonggap','PageController\PageController@Cauhoithuonggap');

Route::post('/change-language','SessionController@changeLanguage');

Route::get('gioithieuchung','PageController\PageController@GioiThieuChung');
Route::get('vitrichucnang','PageController\PageController@ViTriChucNang');
Route::get('sumenhtamnhin','PageController\PageController@SuMenhTamNhin');
Route::get('doingutrungtam','PageController\PageController@DoiNguTrungTam');
Route::get('cocau','PageController\PageController@CoCau');
Route::get('chuyengia','PageController\PageController@ChuyenGia');

Route::get('tuyendung','PageController\PageController@TuyenDung');
Route::get('tuyendung/{slug}','PageController\PageController@DetailsTuyenDung');
// show all news of all of kind
Route::get('tintuc','PageController\TinTucController@allNews');
// show all news of  a kind
Route::get('tintuc/{slug}','PageController\TinTucController@newsOfKind');
//show detail one new
Route::get('tintuc/{slug_loai_tin}/{slug_tin_tuc}','PageController\TinTucController@detailsNew');
//show all su kien

Route::get('sukien','PageController\SuKienController@danhSachSuKien');
Route::get('sukien/{slug}','PageController\SuKienController@detailsSuKien');