<?php

namespace App\Http\Controllers\Manager;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{
	public function getLogin() {
		if (!Auth::check()) {
			return view('login');
		} else {
			if (Auth::user()->level == 1) {
				return redirect('admin');
			} elseif (Auth::user()->level == 2) {
				return redirect('moderator');
			} else return redirect('/');
		}
	}

	public function postLogin(Request $request) {
		$this->validate($request,
			[
				'username'=>'required',
				'password'=>'required'
			],
			[
				'username.required'=>'Bạn chưa nhập username',
				'password.required'=>'Bạn chưa nhập password',
			]);

		if (Auth::attempt(['username' => $request->username, 'password' => $request->password,'level'=>1])) {
            return redirect('admin');
        } elseif (Auth::attempt(['username' => $request->username, 'password' => $request->password,'level'=>2])) {
        	return redirect('moderator');
        } elseif (Auth::attempt(['username' => $request->username, 'password' => $request->password,'level'=>3])) {
        	return redirect('/');
        } else {
        	return redirect()->back();
        }
	}

	public function logout() {
		Auth::logout();
		return redirect('login');
	}

    public function getList() {
    	$user = User::all()->paginate(10);
    	return view('admin.user.danhsach',['users'=> $user]);
    }

    public function getAdd() {
    	return view('admin.user.them');
    }

    public function postAdd(Request $request) {

    }

    public function getEdit($id) {
    	$user = User::find($id);
    	return view('admin.user.sua', ['user' => $user]);
    }

    public function postEdit(Request $request) {

    }

    public function getDelete($id) {
    	$user = User::find($id);
    	$user->delete();
    	return redirect('admin/user/danh-sach');
    }
}
