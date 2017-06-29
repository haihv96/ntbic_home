<?php

namespace App\Http\Controllers\Manager;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\chuyen_gia;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Validator;


class ChuyenGiaController extends Controller
{
	/**
     * get and display file index 
     * list ds chuyen_gia
     */
   	public function index() {
   		$chuyen_gia = DB::table('chuyen_gia')->paginate(10);
   		return view('admin.manager_data.chuyen_gia.index')->with(['chuyengia'=>$chuyen_gia]);
   	}

   	/**
     * Get page form display to create new chuyen_gia
     *
     */
   	public function create() {
   		return view('admin.manager_data.chuyen_gia.create');
   	}

   	/**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
   	public function store(Request $request) {
   		//for validate
   		$rules = array('ten' => 'required',
   						'chuc_vu' => 'required');
   		$messages = array('ten.required' => 'Chưa nhập tên cho chuyên gia',
   							'chuc_vu.required' => 'Chưa nhập chức vụ cho chuyên gia');

   		//make validator
   		$validator = Validator::make($request->all(),$rules,$messages);
   		if($validator->fails()) {
   			return Redirect::to('admin/chuyen-gia/create')->withInput()->withErrors($validator);
   		} else {
   			$chuyen_gia = new chuyen_gia();
   			$chuyen_gia->ten = $request->ten;
   			$chuyen_gia->chuc_vu = $request->chuc_vu;
   			$chuyen_gia->ten_khong_dau = changeTitle($request->ten);

   			//store images
   			if($request->hasFile('hinh_anh')) {
   				$file = $request->file('hinh_anh');
            	$duoi = $file->getClientOriginalExtension();
   				
            	$name = $file->getClientOriginalName();
            	$hinh_anh = str_random(4)."_".$name;
            	while(file_exists("assets/upload/chuyen_gia/".$hinh_anh)){
                	$hinh_anh = str_random(4)."_".$name;
            	}
            	$file->move("assets/upload/chuyen_gia/",$hinh_anh);
            	$chuyen_gia->hinh_anh = $hinh_anh;
   			} else {
   				$chuyen_gia->hinh_anh = "";
   			}

   			$chuyen_gia->save();
   			return Redirect::to('admin/chuyen-gia')->withInput()->with('status','Đã thêm thành công!');
   		}
   	}

    /**
     * Show a form for edit a specific record
     *
     * @param  int $id 
     */
   	public function edit($id) {
   		$chuyen_gia = chuyen_gia::find($id);
      return view('admin.manager_data.chuyen_gia.edit')->with(['chuyengia'=>$chuyen_gia]);
   	}


    /**
     * Store after edit a specific record
     *
     * @param  int $id
     * @param  $request
     */
   	public function update(Request $request, $id) {
      //for validate
      $rules = array('ten' => 'required',
              'chuc_vu' => 'required');
      $messages = array('ten.required' => 'Chưa nhập tên cho chuyên gia',
                'chuc_vu.required' => 'Chưa nhập chức vụ cho chuyên gia');

      //make validator
      $validator = Validator::make($request->all(),$rules,$messages);
      if($validator->fails()) {
        return Redirect::back()->withInput()->withErrors($validator);
      } else {
        $chuyen_gia = chuyen_gia::find($id);
        $chuyen_gia->ten = $request->ten;
        $chuyen_gia->chuc_vu = $request->chuc_vu;
        $chuyen_gia->ten_khong_dau = changeTitle($request->ten);

        //store images
        if($request->hasFile('hinh_anh')) {
          $file = $request->file('hinh_anh');
              $duoi = $file->getClientOriginalExtension();
          
              $name = $file->getClientOriginalName();
              $hinh_anh = str_random(4)."_".$name;
              while(file_exists("assets/upload/chuyen_gia/".$hinh_anh)){
                  $hinh_anh = str_random(4)."_".$name;
              }
              $file->move("assets/upload/chuyen_gia/",$hinh_anh);
              $chuyen_gia->hinh_anh = $hinh_anh;
        }
        
        $chuyen_gia->save();
        return Redirect::back()->with('status','Sửa thành công!');
      }
   	}

    /**
     * Delete a record
     *
     */
   	public function destroy($id) {
      $chuyen_gia = chuyen_gia::find($id);
        $chuyen_gia->delete();
        return $chuyen_gia->toJson();
   	}
}
