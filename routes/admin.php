<?php
Route::get('/', function() {
	return view('admin.index');
});
		
Route::resource('tin_tuc', 'Manager\TinTucController');
Route::resource('loai-tin','Manager\LoaiTinController');
Route::resource('su_kien','Manager\SuKienController');
Route::resource('cong-nghe','Manager\CongNgheController');
Route::resource('doi_tac','Manager\DoiTacController');