<?php

namespace App\Http\Controllers\Manager;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\doi_tac;

class DoiTacController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doi_tac = DB::table('doi_tac')->paginate(10);
        return view('admin.manager_data.doi_tac.index',['doitac' => $doi_tac]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.manager_data.doi_tac.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,
        [
            'ten' => 'required',
            'noi_dung' => 'required'
        ],
        [
            'ten.required' => 'Bạn chưa nhập tên loại tin',
            'noi_dung' => 'Bạn chưa nhập nội dung'
        ]);

        $doi_tac = new doi_tac;
        $doi_tac->ten = $request->ten;
        $doi_tac->noi_dung = $request->noi_dung;
        $doi_tac->ten_khong_dau = changeTitle($request->ten);

        if($request->hasFile('hinh_anh')){
            $file = $request->file('hinh_anh');
            $duoi = $file->getClientOriginalExtension();

            $name = $file->getClientOriginalName();
            $hinh_anh = str_random(4)."_".$name;
            while(file_exists("assets/upload/doi_tac/".$hinh_anh)){
                $hinh_anh = str_random(4)."_".$name;
            }
            $file->move("assets/upload/doi_tac",$hinh_anh);
            $doi_tac->hinh_anh = $hinh_anh;
        }
        else{
            $doi_tac->hinh_anh = "";
        }

        $doi_tac->save();
        return redirect()->route('doi-tac.index')->with('message', 'Bạn đã thêm đối tác thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    // {
    //     $doi_tac = doi_tac::find($id);
    //     return view('admin.manager_data.doi_tac.edit', ['doitac' => $doi_tac]);
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $doi_tac = doi_tac::find($id);
        return view('admin.manager_data.doi_tac.edit', ['doitac' => $doi_tac]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,
        [
            'ten' => 'required',
            'noi_dung' => 'required'
        ],
        [
            'ten.required' => 'Bạn chưa nhập tên loại tin',
            'noi_dung' => 'Bạn chưa nhập nội dung'
        ]);

        $doi_tac = doi_tac::find($id);
        $doi_tac->ten = $request->ten;
        $doi_tac->noi_dung = $request->noi_dung;
        $doi_tac->ten_khong_dau = changeTitle($request->ten);

        if($request->hasFile('hinh_anh')){
            $file = $request->file('hinh_anh');
            $duoi = $file->getClientOriginalExtension();

            $name = $file->getClientOriginalName();
            $hinh_anh = str_random(4)."_".$name;
            while(file_exists("assets/upload/doi_tac/".$hinh_anh)){
                $hinh_anh = str_random(4)."_".$name;
            }
            $file->move("assets/upload/doi_tac",$hinh_anh);
            $doi_tac->hinh_anh = $hinh_anh;
        }
        else{
            $doi_tac->hinh_anh = "";
        }

        $doi_tac->save();
        return Redirect::back()->with('message', 'Bạn đã sửa loại tin thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $doi_tac = doi_tac::find($id);
        $doi_tac->delete();
        return $doi_tac->toJson();
    }
}
