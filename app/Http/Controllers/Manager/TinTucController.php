<?php

namespace App\Http\Controllers\Manager;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\tin_tuc;
use App\loai_tin;
use Illuminate\Support\Facades\Redirect;

class TinTucController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        $tintuc = DB::table('tin_tuc')->paginate(10);
        return view('admin.manager_data.tin_tuc.index',['tintuc'=>$tintuc]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        $loai_tin = loai_tin::all();
        return view('admin.manager_data.tin_tuc.create', ['loaitin' => $loai_tin]);
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request) {
        $this->validate($request,
        [
            'ten' => 'required|unique:tin_tuc,ten',
            'noi_dung' => 'required',
            'tom_tat' => 'required',
            'hinh_anh' => 'image|mimes:jpeg,bmp,png,jpg'
        ],
        [
            'ten.required' => 'Bạn cần nhập tên tin tức',
            'ten.unique' => 'Tên tin tức đã được dùng',
            'noi_dung.required' => 'Bạn cần nhập nội dung tin tức',
            'tom_tat.required' => 'Bạn cần nhập nội dung tóm tắt của tin tức',
            'hinh_anh.mimes' => 'Bạn chỉ được chọn file (jpeg,bmp,png,jpg)',
            'hinh_anh.image' => 'Bạn chỉ được chọn 1 file ảnh'
        ]);

        $tin_tuc = new tin_tuc;
        $tin_tuc->ten = $request->ten;
        $tin_tuc->noi_dung = $request->noi_dung;
        $tin_tuc->tom_tat = $request->tom_tat;
        $tin_tuc->id_loai_tin = $request->loai_tin;
        $tin_tuc->ten_khong_dau = changeTitle($request->ten);
        $tin_tuc->status = $request->status;

        if($request->hasFile('hinh_anh')){
            $file = $request->file('hinh_anh');
            $duoi = $file->getClientOriginalExtension();

            $name = $file->getClientOriginalName();
            $hinh_anh = str_random(4)."_".$name;
            while(file_exists("assets/upload/tin_tuc/".$hinh_anh)){
                $hinh_anh = str_random(4)."_".$name;
            }
            $file->move("assets/upload/tin_tuc",$hinh_anh);
            $tin_tuc->hinh_anh = $hinh_anh;
        }
        else{
            $tin_tuc->hinh_anh = "";
        }

        $tin_tuc->save();
        return redirect()->route('tin_tuc.index')->with('message', 'Bạn đã thêm tin tức thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        $loai_tin = loai_tin::all();
        $tin_tuc = tin_tuc::find($id);
        return view('admin.manager_data.tin_tuc.edit', ['loaitin' => $loai_tin, 'tintuc' => $tin_tuc]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id) {
        $this->validate($request,
        [
            'ten' => 'required',
            'noi_dung' => 'required',
            'tom_tat' => 'required',
            'hinh_anh' => 'image|mimes:jpeg,bmp,png,jpg'
        ],
        [
            'ten.required' => 'Bạn cần nhập tên tin tức',
            'noi_dung.required' => 'Bạn cần nhập nội dung tin tức',
            'tom_tat.required' => 'Bạn cần nhập nội dung tóm tắt của tin tức',
            'hinh_anh.mimes' => 'Bạn chỉ được chọn file (jpeg,bmp,png)',
            'hinh_anh.image' => 'Bạn chỉ được chọn 1 file ảnh'
        ]);

        $loai_tin = loai_tin::all();
        $tin_tuc = tin_tuc::find($id);

        $tin_tuc->ten = $request->ten;
        $tin_tuc->noi_dung = $request->noi_dung;
        $tin_tuc->tom_tat = $request->tom_tat;
        $tin_tuc->id_loai_tin = $request->loai_tin;
        $tin_tuc->ten_khong_dau = changeTitle($request->ten);
        $tin_tuc->status = $request->status;

        if($request->hasFile('hinh_anh')){
            $file = $request->file('hinh_anh');
            $duoi = $file->getClientOriginalExtension();

            $name = $file->getClientOriginalName();
            $hinh_anh = str_random(4)."_".$name;
            while(file_exists("assets/upload/tin_tuc/".$hinh_anh)){
                $hinh_anh = str_random(4)."_".$name;
            }
            $file->move("assets/upload/tin_tuc",$hinh_anh);
            $tin_tuc->hinh_anh = $hinh_anh;
        }
        else{
            $tin_tuc->hinh_anh = "";
        }

        $tin_tuc->save();
        return Redirect::back()->with('message', 'Bạn đã sửa tin tức thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        $tin_tuc = tin_tuc::find($id);
        $tin_tuc->delete();
        return $tin_tuc->toJson();
    }
}
