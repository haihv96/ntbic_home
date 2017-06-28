<?php

namespace App\Http\Controllers\Manager;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{

    public function index() {
    	$user = DB::table('users')->paginate(10);
    	return view('admin.manager_data.user.index',['users'=> $user]);
    }

    public function create() {
    	return view('admin.manager_data.user.create');
    }

    public function store(Request $request) {
        $this->validate($request,
            [
                'username' => 'required|unique:users,username',
                'email' => 'required|email|unique:users,email',
                'hinh_anh' => 'image|mimes:jpeg,bmp,png,jpg',
                'name' => 'required',
                'level' => 'required'
            ],
            [
                'username.required' => 'Bạn cần nhập username',
                'username.unique' => 'username đã tồn tại',
                'email.required' => 'Bạn cần nhập email',
                'email.unique' => 'email đã được sử dụng',
                'email.email' => 'Định dạng email không hợp lệ',
                'hinh_anh.image' => 'Bạn cần chọn 1 ảnh',
                'hinh_anh.mimes' => "Bạn chỉ có thể chọn ảnh có định dạng: jpeg,bmp,png,jpg",
                'level.required' => 'Cần chọn quyền của người dùng'
            ]);
    
    }

    public function edit($id) {
    	$user = User::find($id);
    	return view('admin.user.sua', ['user' => $user]);
    }

    public function update(Request $request) {

    }

    public function destroy($id) {
    	$user = User::find($id);
    	$user->delete();
    	return redirect('admin/user/danh-sach');
    }
}
