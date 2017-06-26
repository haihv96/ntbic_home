<?php

namespace App\Http\Controllers\Manager;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\tuyen_dung;
use App\Http\Requests\TuyenDungRequest;
use Illuminate\Support\Facades\Redirect;
use File;

class TuyenDungController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tuyen_dung =DB::table('tuyen_dung')->paginate(10);
        return view('admin.manager_data.tuyen_dung.index',['tuyendung' => $tuyen_dung]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.manager_data.tuyen_dung.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TuyenDungRequest $request)
    {
        $tuyendung = new tuyen_dung;
        $tuyendung->mo_ta = $request->mo_ta;
        $tuyendung->mo_ta_khong_dau = changeTitle($request->mo_ta);
        $tuyendung->noi_dung_tuyen_dung = $request->noi_dung_tuyen_dung;
        $tuyendung->ngay_bat_dau=date('Y-m-d',strtotime($request->ngay_bat_dau));
        $tuyendung->ngay_ket_thuc=date('Y-m-d',strtotime($request->ngay_ket_thuc));
        $tuyendung->save();
        return redirect()->route('tuyen-dung.index')->with('message','Bạn đã thêm tin tuyển dụng');
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
        $tuyen_dung = tuyen_dung::find($id);
        return view('admin.manager_data.tuyen_dung.edit', ['tuyendung' => $tuyen_dung]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TuyenDungRequest $request, $id)
    {
        $tuyendung = tuyen_dung::find($id);
        $tuyendung->mo_ta = $request->mo_ta;
        $tuyendung->mo_ta_khong_dau = changeTitle($request->mo_ta);
        $tuyendung->noi_dung_tuyen_dung = $request->noi_dung_tuyen_dung;
        $tuyendung->ngay_bat_dau=$request->ngay_bat_dau;
        $tuyendung->ngay_ket_thuc=$request->ngay_ket_thuc;
        $tuyendung->save();
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
        $tuyen_dung = tuyen_dung::find($id);
        $tuyen_dung->delete();
        return $tuyen_dung->toJson();
    }
}
