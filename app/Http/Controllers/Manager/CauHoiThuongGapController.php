<?php

namespace App\Http\Controllers\Manager;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\cau_hoi_thuong_gap;
use App\Http\Requests\CauHoiThuongGapRequest;
use Illuminate\Support\Facades\Redirect;
use File;

class CauHoiThuongGapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cau_hoi_thuong_gap =DB::table('cau_hoi_thuong_gap')->paginate(10);
        return view('admin.manager_data.cau_hoi_thuong_gap.index',['cauhoithuonggap' => $cau_hoi_thuong_gap]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.manager_data.cau_hoi_thuong_gap.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CauHoiThuongGapRequest $request)
    {
        $cauhoithuonggap = new cau_hoi_thuong_gap;
        $cau_hoi_thuong_gap->cau_hoi = $request->cau_hoi;
        $cau_hoi_thuong_gap->cau_hoi_khong_dau = changeTitle($request->cau_hoi);
        $cau_hoi_thuong_gap->cau_tra_loi = $request->cau_tra_loi;
        $cau_hoi_thuong_gap->save();
       return redirect()->route('cau-hoi-thuong-gap.index')->with('message','Bạn đã thêm câu hỏi thành công');
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
        $cau_hoi_thuong_gap = cau_hoi_thuong_gap::find($id);
        return view('admin.manager_data.cau_hoi_thuong_gap.edit', ['cauhoithuonggap' => $cau_hoi_thuong_gap]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CauHoiThuongGapRequest $request, $id)
    {
        $cau_hoi_thuong_gap = cau_hoi_thuong_gap::find($id);
        $cau_hoi_thuong_gap->cau_hoi = $request->cau_hoi;
        $cau_hoi_thuong_gap->cau_hoi_khong_dau = changeTitle($request->cau_hoi);
        $cau_hoi_thuong_gap->cau_tra_loi = $request->cau_tra_loi;
        $cau_hoi_thuong_gap->save();
       return redirect::back()->with('message','Bạn đã sửa câu hỏi thành công');
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
        $cau_hoi_thuong_gap = cau_hoi_thuong_gap::find($id);
        $cau_hoi_thuong_gap->delete();
        return $cau_hoi_thuong_gap->toJson();
    }
}
