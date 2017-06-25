<?php
Route::get('/', function() {
	return view('admin.index');
});
		
Route::resource('tin-tuc', 'Manager\TinTucController');
Route::resource('loai-tin','Manager\LoaiTinController');
Route::resource('su-kien','Manager\SuKienController');
Route::resource('cong-nghe','Manager\CongNgheController');