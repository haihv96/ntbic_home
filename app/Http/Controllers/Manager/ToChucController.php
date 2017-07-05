<?php

namespace App\Http\Controllers\Manager;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\ToChuc;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ToChucRequest;
use File;

class ToChucController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        if (!session()->has('language')) {
            session(['language'=>'vi']);
        }

        $locale = session()->get('language');
        app()->setlocale($locale);
        $to_chuc = ToChuc::paginate(10);
        return view('admin.manager_data.to_chuc.index',['tochuc' => $to_chuc, 'locale'=>$locale]);
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
        return view('admin.manager_data.cau_hoi_thuong_gap.create',['locale'=>$locale]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(CauHoiThuongGapRequest $request) {
        app()->setlocale($request->locale);
        $cau_hoi = new CauHoi;
        $cau_hoi->CauHoi = $request->CauHoi;
        $cau_hoi->Slug = changeTitle($request->CauHoi);
        $cau_hoi->CauTraLoi = $request->CauTraLoi;
        $cau_hoi->save();
        return redirect()->route('cau-hoi-thuong-gap.index')->with('message','Bạn đã thêm câu hỏi thường gặp thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        if (!session()->has('language')) {
            session(['language'=>'vi']);
        }

        $locale = session()->get('language');
        app()->setlocale($locale);
        $cau_hoi = CauHoi::find($id);
        return view('admin.manager_data.cau_hoi_thuong_gap.edit', ['cauhoi' => $cau_hoi, 'locale'=>$locale]);
    } 

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(CauHoiThuongGapRequest $request,$id) {
        app()->setlocale($request->locale);
        $cau_hoi = CauHoi::find($id);
        $cau_hoi->CauHoi = $request->CauHoi;
        $cau_hoi->Slug = changeTitle($request->CauHoi);
        $cau_hoi->CauTraLoi = $request->CauTraLoi;
        $cau_hoi->save();

        return Redirect::back()->with('message', 'Bạn đã sửa câu hỏi thường gặp thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
       
    }
}
