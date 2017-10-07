<?php

namespace App\Http\Controllers\Manager;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\AnhTrangChu;
use App\Http\Requests\AnhTrangChuRequest;
use Illuminate\Support\Facades\Redirect;
use File;

class AnhTrangChuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hinh_anh = AnhTrangChu::paginate(10);
        return view('admin.manager_data.anh_trang_chu.index',['hinhanh' => $hinh_anh]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.manager_data.anh_trang_chu.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AnhTrangChuRequest $request, $id = 1)
    {
        $hinh_anh = AnhTrangChu::find($id);
        if ($hinh_anh == NULL) {
            $hinh_anh = new AnhTrangChu;
        }
        $hinh_anh->Link = $request->link;
        if ($request->hasFile('hinh_anh')) {
            $file = $request->file('hinh_anh');
            $duoi = $file->getClientOriginalExtension();
            if( $duoi != 'jpg' && $duoi !='png' && $duoi !='jpeg'){
                return redirect::back()->with('message','Bạn chỉ được chọn file (jpg,png,jpeg)');
            }
            $name = $file->getClientOriginalName();
            $hinh_anh_name = str_random(4)."_".$name;
            while(file_exists("assets/upload/anh_trang_chu/".$hinh_anh_name)){
                $hinh_anh_name = str_random(4)."_".$name;
            }
            $file->move("assets/upload/anh_trang_chu",$hinh_anh_name);
            $hinh_anh->HinhAnh = "assets/upload/anh_trang_chu/".$hinh_anh_name;
        } else {
            $hinh_anh->HinhAnh = "";
        }
        $hinh_anh->save();
        return redirect()->route('admin.anh-trang-chu.index')->with('message','Bạn đã thêm hình ảnh thành công');
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
        $hinh_anh = AnhTrangChu::find($id);
        return view('admin.manager_data.anh_trang_chu.edit',['hinhanh' => $hinh_anh]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AnhTrangChuRequest $request, $id)
    {
        $hinh_anh = AnhTrangChu::find($id);
        $hinh_anh->Link = $request->link;
        if ($request->hasFile('hinh_anh')) {
            $file = $request->file('hinh_anh');
            $duoi = $file->getClientOriginalExtension();
            if( $duoi != 'jpg' && $duoi !='png' && $duoi !='jpeg'){
                return redirect::back()->with('message','Bạn chỉ được chọn file (jpg,png,jpeg)');
            }
            $name = $file->getClientOriginalName();
            $hinh_anh_name = str_random(4)."_".$name;
            while(file_exists("assets/upload/anh_trang_chu/".$hinh_anh_name)){
                $hinh_anh_name = str_random(4)."_".$name;
            }
            $file->move("assets/upload/anh_trang_chu",$hinh_anh_name);
            $hinh_anh->HinhAnh = "assets/upload/anh_trang_chu/".$hinh_anh_name;
        }
        if($request->delete_logo == "delete" && $hinh_anh->HinhAnh != ""){
           $str = substr($hinh_anh->HinhAnh, 0);
          
             File::delete($str);
           $hinh_anh->HinhAnh = "";
           
       }
        $hinh_anh->save();
       return redirect::back()->with('message','Bạn đã sửa hình ảnh Sidebar thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
