<?php
Route::get('/', function() {
	return view('admin.index');
})->name('admin_dashboard');
		
Route::resource('tin-tuc', 'Manager\TinTucController');
Route::resource('loai-tin','Manager\LoaiTinController');
Route::resource('su-kien','Manager\SuKienController');
Route::resource('cong-nghe','Manager\CongNgheController');
Route::resource('loai-doi-tac','Manager\LoaiDoiTacController');
Route::resource('doi-tac','Manager\DoiTacController');
Route::resource('to-chuc','Manager\TochucController');
Route::resource('cau-hoi-thuong-gap','Manager\CauhoithuonggapController');
Route::resource('tuyen-dung','Manager\TuyenDungController');
Route::resource('chuyen-gia','Manager\ChuyenGiaController');
Route::resource('users','Manager\UserController');

Route::post('/change-language','SessionController@changeLanguage');