<?php

namespace App\Http\Controllers\PageController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\SuKien;
use App\LoaiDoiTac;
use App\TinTuc;
use App\LoaiTin;
use App\HinhSidebar;
use App\LogoDoitac;

class SuKienController extends Controller
{
	public function __construct()
	{
		$hinh_anh_sidebar = HinhSidebar::all();
		$logo_doi_tac = LogoDoitac::all();
		view()->share('hinhanhsidebar',$hinh_anh_sidebar);
		view()->share('logodoitac',$logo_doi_tac);
	}
    public function danhSachSuKien(Request $request){
		$text_search = $request->text_search;
		$per_page = 10;

		if (!session()->has('language')) {
            session(['language'=>'vi']);
        }
        $locale = session()->get('language');
        app()->setlocale($locale);
         $su_kien = DB::table('su_kien')->join('su_kien_translations','su_kien_translations.su_kien_id','=','su_kien.id')
                    ->where('locale',$locale)
					->where('NoiDung','<>','')
                    ->where('Ten','LIKE','%'.$text_search.'%')
                    ->orWhere('TomTat','LIKE','%'.$text_search.'%')
                    ->orWhere('NoiDung','LIKE','%'.$text_search.'%')->orderBy('created_at','desc')->paginate($per_page);
		$loai_tin = LoaiTin::all();
		$loai_doi_tac = LoaiDoiTac::all();
		$tin_noi_bat = TinTuc::all()->where('status',1)->take(4);
		return view('pages.su_kien.danhsachsukien',['sukien'=>$su_kien,
											'locale'=>$locale,
											'loaitin' => $loai_tin, 
											'loaidoitac'=>$loai_doi_tac,
											'tinnoibat'=>$tin_noi_bat,
											'text_search'=>$text_search]);
	}
	public function detailsSuKien($slug){
		if (!session()->has('language')) {
            session(['language'=>'vi']);
        }
        $locale = session()->get('language');
        app()->setlocale($locale);
        $su_kien=SuKien::where('slug',$slug)->first();
		$loai_tin = LoaiTin::all();
		$loai_doi_tac = LoaiDoiTac::all();
		$tin_noi_bat = TinTuc::all()->where('status',1)->take(4);
		return view('pages.su_kien.detailssukien',['sukien'=>$su_kien,
											'locale'=>$locale,
											'loaitin' => $loai_tin, 
											'loaidoitac'=>$loai_doi_tac,
											'tinnoibat'=>$tin_noi_bat]);
	}

    public function NguoiDangKiSuKien($slug,NguoiDangKiSuKienRequest $request){
        $nguoi=new NguoiDangKiSuKien;
        $nguoi->Ten=$request->ten;
        $nguoi->email=$request->email;
        $nguoi->phone=$request->phone;
        $nguoi->save();
        $chuyen_gia->save();        
    }
}
