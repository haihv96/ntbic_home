<?php
Route::get('/', function() {
	return view('admin.index');
})->name('admin_dashboard');
		
Route::resource('tin-tuc', 'Manager\TinTucController',['names' => [
	'index' => 'admin.tin-tuc.index'
]]);
Route::resource('loai-tin','Manager\LoaiTinController',['names' => [
	'index' => 'admin.loai-tin.index'
]]);
Route::resource('su-kien','Manager\SuKienController',['names' => [
	'index' => 'admin.su-kien.index'
]]);
Route::resource('cong-nghe','Manager\CongNgheController',['names' => [
	'index' => 'admin.cong-nghe.index'
]]);
Route::resource('loai-doi-tac','Manager\LoaiDoiTacController',['names' => [
	'index' => 'admin.loai-doi-tac.index'
]]);
Route::resource('doi-tac','Manager\DoiTacController',['names' => [
	'index' => 'admin.doi-tac.index'
]]);
Route::resource('to-chuc','Manager\ToChucController',['names' => [
	'index' => 'admin.to-chuc.index'
]]);
Route::resource('cau-hoi-thuong-gap','Manager\CauhoithuonggapController',['names' => [
	'index' => 'admin.cau-hoi-thuong-gap.index'
]]);
Route::resource('tuyen-dung','Manager\TuyenDungController',['names' => [
	'index' => 'admin.tuyen-dung.index'
]]);
Route::resource('chuyen-gia','Manager\ChuyenGiaController',['names' => [
	'index' => 'admin.chuyen-gia.index'
]]);
Route::resource('logo-doi-tac','Manager\LogoDoiTacController',['names' => [
	'index' => 'admin.logo-doi-tac.index'
]]);
Route::resource('anh-sidebar','Manager\AnhSideBarController',['names' => [
	'index' => 'admin.anh-sidebar.index'
]]);
Route::resource('lien-he','Manager\LienHeController',['names' => [
	'index' => 'admin.lien-he.index'
]]);
Route::resource('su-kien-slideshow','Manager\SuKienSlideshowController',['names' => [
	'index' => 'admin.su-kien-slideshow.index'
]]);
Route::resource('anh-trang-chu','Manager\AnhTrangChuController',['names' => [
	'index' => 'admin.anh-trang-chu.index'
]]);

Route::resource('menu','Manager\MenuController',['names' => [
	'index' => 'admin.menu.index'
]]);

// users, roles, permissions
Route::group(['middleware' => ['permission:View users|Create users|Edit users|Delete users']], function () {
	Route::resource('users','Manager\UserController');
});

Route::group(['middleware' => ['permission:View permissions|Create permissions|Edit permissions|Delete permissions'], 'prefix' => 'permissions'], function() {
	Route::get('/','Manager\RolesAndPermissionsController@getPermissions')->name('permissions.index');

	Route::group(['middleware' => ['permission:Create permissions']], function() {
		Route::get('create','Manager\RolesAndPermissionsController@createPermission');
		Route::post('create','Manager\RolesAndPermissionsController@storePermission');
	});

	Route::group(['middleware' => ['permission:Edit permissions']], function() {
		Route::get('edit/{id}','Manager\RolesAndPermissionsController@editPermission');
		Route::put('{id}','Manager\RolesAndPermissionsController@updatePermission');
	});

	Route::group(['middleware' => ['permission:Delete permissions']], function() {
		Route::delete('{id}','Manager\RolesAndPermissionsController@destroyPermission');
	});
});

Route::group(['middleware' => ['permission:View roles|Create roles|Edit roles|Delete roles'], 'prefix' => 'roles'], function() {
	Route::group(['middleware' => ['permission:View roles']], function() {
		Route::get('/','Manager\RolesAndPermissionsController@getRoles')->name('roles.index');
	});
	Route::group(['middleware' => ['permission:Create roles']], function() {
		Route::get('create','Manager\RolesAndPermissionsController@createRole');
		Route::post('create','Manager\RolesAndPermissionsController@storeRole');
	});
	Route::group(['middleware' => ['permission:Edit roles']], function() {
		Route::get('edit/{id}','Manager\RolesAndPermissionsController@editRole');
		Route::put('{id}','Manager\RolesAndPermissionsController@updateRole');
	});
	Route::group(['middleware' => ['permission:Delete roles']], function() {
		Route::delete('{id}','Manager\RolesAndPermissionsController@destroyRole');
	});
});

Route::get('profile','Manager\UserController@getProfile')->name('admin.profile');
Route::post('profile-account','Manager\UserController@updateProfile');
Route::post('profile-avatar','Manager\UserController@updateAvatar');
Route::post('profile-password','Manager\UserController@updatePassword');

//notificaiton
Route::get('send-notification','Manager\UserController@getSendNotification')->name('send.notification');
Route::post('send-notif','Manager\UserController@postSendNotification');
Route::get('notification/{id}', 'Manager\UserController@getDetailNotification');
Route::post('notification-delete/{id}','Manager\UserController@DeleteNotification');