<?php

namespace App\Http\Controllers\Manager;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CongNghe;
use App\CongNgheTranslation;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Validator;

class CongNgheController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        if(!session()->has('language')) {
            session(['language'=>'vi']);
        }

        $locale = session()->get('language');
        app()->setLocale($locale);
        $cong_nghe = CongNghe::paginate(10);
        return view('admin.manager_data.cong_nghe.index')->with(['congnghe'=>$cong_nghe, 'locale'=>$locale]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        if (!session()->has('language')) {
            session(['language'=>'vi']);
        }
        $locale = session()->get('language');
        return view('admin.manager_data.cong_nghe.create')->with(['locale'=>$locale]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(Request $request) {
        $rules = array('Ten'=>'required',
                        'NoiDung' => 'required',);
        $messages = [
            'Ten.required' => 'Chưa nhập tên cho đề tài, dự án!',
            'NoiDung.required' => 'Chưa nhập nội dung',
        ];
        app()->setlocale($request->locale);
        $validator = Validator::make($request->all(), $rules, $messages);

        if($validator->fails()){
            return Redirect::to('admin/cong-nghe/create')->withInput()->withErrors($validator);
        } else {
            $cong_nghe = new CongNghe();
            $cong_nghe->Ten = $request->Ten;
            $cong_nghe->NoiDung = $request->NoiDung;
            $cong_nghe->slug = changeTitle($request->Ten);

            $cong_nghe->save();
            return Redirect::to('admin/cong-nghe')->withInput()->with('status','Đã thêm thành công!');
        }
    }

    /**
     * Show a form for edit a specific record
     *
     * @param  int $id 
     */
    public function edit($id) {
        if (!session()->has('language')) {
            session(['language'=>'vi']);
        }

        $locale = session()->get('language');
        app()->setlocale($locale);

        $cong_nghe = CongNghe::find($id);
        return view('admin.manager_data.cong_nghe.edit')->with(['congnghe'=>$cong_nghe,'locale'=>$locale]);
    }

    /**
     * Store after edit a specific record
     *
     * @param  int $id
     * @param  $request
     */
    public function update(Request $request, $id) {
        $rules = array('Ten'=>'required',
                        'NoiDung' => 'required',);
        $messages = [
            'Ten.required' => 'Chưa nhập tên cho đề tài, dự án!',
            'NoiDung.required' => 'Chưa nhập nội dung',
        ];
        app()->setlocale($request->locale);

        $validator = Validator::make($request->all(), $rules, $messages);

        if($validator->fails()){
            return Redirect::back()->withInput()->withErrors($validator);
        } else {
            $cong_nghe = CongNghe::find($id);
            $cong_nghe->Ten = $request->Ten;
            $cong_nghe->NoiDung = $request->NoiDung;
            $cong_nghe->slug = changeTitle($request->Ten);

            $cong_nghe->save();
            return Redirect::to('admin/cong-nghe')->withInput()->with('status','Đã sửa thành công!');
        }
    }

     /**
     * Delete a record
     *
     */
    public function destroy($id) {
        $cong_nghe = CongNghe::find($id);
        $cong_nghe->delete();

        return $cong_nghe->toJson();
    }
}
