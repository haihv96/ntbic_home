<?php

namespace App\Http\Controllers\Manager;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\loai_tin;
use Illuminate\Support\Facades\Redirect;

class LoaiTinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
    	$loai_tin = DB::table('loai_tin')->paginate(10);
    	return view('admin.manager_data.loai_tin.index',['loaitin' => $loai_tin]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
    	return view('admin.manager_data.loai_tin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request) {
    	$this->validate($request,
    	[
    		'ten' => 'required'
    	],
    	[
    		'ten.required' => 'Bạn chưa nhập tên loại tin'
    	]);

    	$loai_tin = new loai_tin;
    	$loai_tin->ten = $request->ten;
    	$loai_tin->ten_khong_dau = changeTitle($request->ten);

    	$loai_tin->save();
    	return redirect()->route('loai_tin.index')->with('message','Bạn đã thêm loại tin thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
       $loai_tin = loai_tin::find($id);
    	return view('admin.manager_data.loai_tin.edit', ['loaitin' => $loai_tin]);
    } 

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request,$id) {
    	$this->validate($request,
    	[
    		'ten' => 'required'
    	],
    	[
    		'ten.required' => 'Bạn chưa nhập tên loại tin'
    	]);
    	$loai_tin = loai_tin::find($id);
    	$loai_tin->ten = $request->ten;
    	$loai_tin->ten_khong_dau = changeTitle($request->ten);

    	$loai_tin->save();

    	return Redirect::back()->with('message', 'Bạn đã sửa loại tin thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
    	$loai_tin = loai_tin::find($id);
    	$loai_tin->delete();
    	return $loai_tin->toJson();
    }
}
