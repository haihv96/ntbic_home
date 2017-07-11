<?php

namespace App\Http\Controllers\PageController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\SuKien;
use App\LoaiDoiTac;
use App\TinTuc;
use App\LoaiTin;

class SuKienController extends Controller
{
    public function danhSachSuKien(){
		if (!session()->has('language')) {
            session(['language'=>'vi']);
        }
        $locale = session()->get('language');
        app()->setlocale($locale);
        $su_kien=SuKien::paginate(10)->where('NoiDung','<>','');
		$loai_tin = LoaiTin::all();
		$loai_doi_tac = LoaiDoiTac::all();
		$tin_noi_bat = TinTuc::all()->where('status',1)->take(5);
		return view('pages.su_kien.danhsachsukien',['sukien'=>$su_kien,
											'locale'=>$locale,
											'loaitin' => $loai_tin, 
											'loaidoitac'=>$loai_doi_tac,
											'tinnoibat'=>$tin_noi_bat]);
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
		$tin_noi_bat = TinTuc::all()->where('status',1)->take(5);
		return view('pages.su_kien.detailssukien',['sukien'=>$su_kien,
											'locale'=>$locale,
											'loaitin' => $loai_tin, 
											'loaidoitac'=>$loai_doi_tac,
											'tinnoibat'=>$tin_noi_bat]);
	}


}
