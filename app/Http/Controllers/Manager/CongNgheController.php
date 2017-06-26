<?php

namespace App\Http\Controllers\Manager;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\cong_nghe;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Validator;

class CongNgheController extends Controller
{
    public function index() {
    	$cong_nghe = DB::table('cong_nghe')->paginate(10);
    	return view('admin.manager_data.cong_nghe.index')->with(['congnghe'=>$cong_nghe]);
    }

    public function create() {
    	return view('admin.manager_data.cong_nghe.create');
    }

    public function store(Request $request) {
    	$rules = array('ten'=>'required',
                        'noi_dung' => 'required',);
    	$messages = [
    		'ten.required' => 'Chưa nhập tên cho đề tài, dự án!',
            'noi_dung.required' => 'Chưa nhập nội dung',
    	];

    	$validator = Validator::make($request->all(), $rules, $messages);

    	if($validator->fails()){
    		return Redirect::to('admin/cong_nghe/create')->withInput()->withErrors($validator);
    	} else {
    		$cong_nghe = new cong_nghe();
    		$cong_nghe->ten = $request->ten;
    		$cong_nghe->noi_dung = $request->noi_dung;

    		$cong_nghe->save();
    		return Redirect::to('admin/cong_nghe')->withInput()->with('status','Đã thêm thành công!');
    	}
    }

    public function edit($id) {
    	$cong_nghe = cong_nghe::find($id);
    	return view('admin.manager_data.cong_nghe.edit')->with(['congnghe'=>$cong_nghe]);
    }

    public function update(Request $request, $id) {
    	$rules = array('ten'=>'required',);
    	$messages = [
    		'ten.required' => 'Chưa nhập tên cho đề tài, dự án!',
    	];

    	$validator = Validator::make($request->all(), $rules, $messages);

    	if($validator->fails()){
    		return Redirect::back()->withInput()->withErrors($validator);
    	} else {
    		$cong_nghe = cong_nghe::find($id);
    		$cong_nghe->ten = $request->ten;
    		$cong_nghe->noi_dung = $request->noi_dung;

    		$cong_nghe->save();
    		return Redirect::back()->withInput()->with('status','Đã sửa thành công!');
    	}
    }

    public function destroy($id) {
    	$cong_nghe = cong_nghe::find($id);
    	$cong_nghe->delete();

    	return $cong_nghe->toJson();
    }
}
