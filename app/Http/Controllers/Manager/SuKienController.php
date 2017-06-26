<?php

namespace App\Http\Controllers\Manager;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\su_kien;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\SuKienRequest;
use File;

class SuKienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $su_kien = DB::table('su_kien')->paginate(10);
        return view('admin.manager_data.su_kien.index',['sukien' => $su_kien]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.manager_data.su_kien.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SuKienRequest $request)
    {
        $su_kien = new su_kien;
        $su_kien->ten = $request->ten;
        $su_kien->ten_khong_dau = changeTitle($request->ten);
        $su_kien->noi_dung = $request->noi_dung;
        $su_kien->tom_tat = $request->tom_tat;
        $su_kien->ngay_bat_dau = date('Y-m-d', strtotime($request->ngay_bat_dau));
        $su_kien->ngay_ket_thuc = date('Y-m-d', strtotime($request->ngay_ket_thuc));
        if($request->hasFile('hinh_anh')){
            $file = $request->file('hinh_anh');
            $duoi = $file->getClientOriginalExtension();
            if( $duoi != 'jpg' && $duoi !='png' && $duoi !='jpeg'){
                return redirect::back()->with('message','Bạn chỉ được chọn file (jpg,png,jpeg)');
            }

            $name = $file->getClientOriginalName();
            $hinh_anh = str_random(4)."_".$name;
            while(file_exists("assets/upload/su_kien/".$hinh_anh)){
                $hinh_anh = str_random(4)."_".$name;
            }
            $file->move("assets/upload/su_kien",$hinh_anh);
            $su_kien->hinh_anh = "assets/upload/su_kien/".$hinh_anh;
        }
        else{
            $su_kien->hinh_anh = "";
        }
        $su_kien->save();
       return redirect()->route('su-kien.index')->with('message','Bạn đã thêm sự kiện thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $su_kien = su_kien::find($id);
        return view('admin.manager_data.su_kien.edit', ['sukien' => $su_kien]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SuKienRequest $request, $id)
    {
        $su_kien = su_kien::find($id);
        $su_kien->ten = $request->ten;
        $su_kien->ten_khong_dau = changeTitle($request->ten);
        $su_kien->noi_dung = $request->noi_dung;
        $su_kien->tom_tat = $request->tom_tat;
        $su_kien->ngay_bat_dau = date('Y-m-d', strtotime($request->ngay_bat_dau));
        $su_kien->ngay_ket_thuc = date('Y-m-d', strtotime($request->ngay_ket_thuc));
        if($request->hasFile('hinh_anh')){
            $file = $request->file('hinh_anh');
            $duoi = $file->getClientOriginalExtension();
            if( $duoi != 'jpg' && $duoi !='png' && $duoi !='jpeg'){
                return redirect::back()->with('message','Bạn chỉ được chọn file (jpg,png,jpeg)');
            }
            $name = $file->getClientOriginalName();
            $hinh_anh = str_random(4)."_".$name;
            while(file_exists("assets/upload/su_kien/".$hinh_anh)){
                $hinh_anh = str_random(4)."_".$name;
            }
            $file->move("assets/upload/su_kien/",$hinh_anh);
            $su_kien->hinh_anh = "assets/upload/su_kien/".$hinh_anh;
        }
        if($request->delete_logo == "delete" && $su_kien->hinh_anh != ""){
           $str = substr($su_kien->hinh_anh, 0);
          
             File::delete($str);
           $su_kien->hinh_anh = "";
           
       }
        $su_kien->save();
       return redirect::back()->with('message','Bạn đã sửa sự kiện thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $su_kien = su_kien::find($id);
        $su_kien->delete();
        return $su_kien->toJson();
    }
}
