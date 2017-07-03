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
                'name.required' => 'Bạn cần nhập tên',
                'email.required' => 'Bạn cần nhập email',
                'email.unique' => 'email đã được sử dụng',
                'email.email' => 'Định dạng email không hợp lệ',
                'hinh_anh.image' => 'Bạn cần chọn 1 ảnh',
                'hinh_anh.mimes' => "Bạn chỉ có thể chọn ảnh có định dạng: jpeg,bmp,png,jpg",
                'level.required' => 'Cần chọn quyền của người dùng'
            ]);

        $user = new User;
        $user->username = $request->username;
        $user->name = $request->name;
        $user->level = $request->level;
        $user->email = $request->email;

        $pass = '123456';
        $user->password = bcrypt($pass);

        if($request->hasFile('hinh_anh')){
            $file = $request->file('hinh_anh');
            $duoi = $file->getClientOriginalExtension();

            $name = $file->getClientOriginalName();
            $hinh_anh = str_random(4)."_".$name;
            while(file_exists("assets/upload/users".$hinh_anh)){
                $hinh_anh = str_random(4)."_".$name;
            }
            $file->move("assets/upload/users",$hinh_anh);
            $user->hinh_anh = $hinh_anh;
        }
        else{
            $user->hinh_anh = "";
        }

        $user->save();
        return redirect()->route('users.index')->with('message',"Bạn đã thêm user thành công");
    }

    public function edit($id) {
    	$user = User::find($id);
    	return view('admin.manager_data.user.edit', ['user' => $user]);
    }

    public function update(Request $request, $id) {
        $this->validate($request,
            [
                'username' => 'required',
                'email' => 'required|email',
                'hinh_anh' => 'image|mimes:jpeg,bmp,png,jpg',
                'name' => 'required',
                'level' => 'required'
            ],
            [
                'username.required' => 'Bạn cần nhập username',
                'username.unique' => 'username đã tồn tại',
                'name.required' => 'Bạn cần nhập tên',
                'email.required' => 'Bạn cần nhập email',
                'email.unique' => 'email đã được sử dụng',
                'email.email' => 'Định dạng email không hợp lệ',
                'hinh_anh.image' => 'Bạn cần chọn 1 ảnh',
                'hinh_anh.mimes' => "Bạn chỉ có thể chọn ảnh có định dạng: jpeg,bmp,png,jpg",
                'level.required' => 'Cần chọn quyền của người dùng'
            ]);

        $user = User::find($id);
        $user->username = $request->username;
        $user->name = $request->name;
        $user->level = $request->level;
        $user->email = $request->email;

        $pass = '123456';
        $user->password = bcrypt($pass);

        if($request->hasFile('hinh_anh')){
            $file = $request->file('hinh_anh');
            $duoi = $file->getClientOriginalExtension();

            $name = $file->getClientOriginalName();
            $hinh_anh = str_random(4)."_".$name;
            while(file_exists("assets/upload/users".$hinh_anh)){
                $hinh_anh = str_random(4)."_".$name;
            }
            $file->move("assets/upload/users",$hinh_anh);
            $user->hinh_anh = $hinh_anh;
        } else {
            $user->hinh_anh = "";
        }

        $user->save();
        return redirect()->back()->with('message',"Bạn đã sửa user thành công");
    }

    public function destroy($id) {
    	$user = User::find($id);
    	$user->delete();
    	return $user->toJson();
    }
}
