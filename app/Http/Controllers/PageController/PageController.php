<?php
namespace App\Http\Controllers\PageController;

use App\TinTuc;
use App\LoaiTin;
use App\CauHoi;
use App\ToChuc;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
	public function TrangChu(){
		return view('pages.trangchu');
	}

	public function TinTuc(){

		return view('pages.tintuc');
	}

	public function LienHe(){
		return view('pages.lienhe');
	}

	public function Detail(){
		return view('pages.details_tintuc');
	}
	public function Cauhoithuonggap(){
		if (!session()->has('language')) {
            session(['language'=>'vi']);
        }
        $locale = session()->get('language');
        app()->setlocale($locale);
        $cau_hoi = CauHoi::paginate(10);
		return view('pages.cauhoithuonggap',['cauhoi'=>$cau_hoi,'locale'=>$locale]);
	}
	public function GioiThieuChung(){
		if (!session()->has('language')) {
            session(['language'=>'vi']);
        }
        $locale = session()->get('language');
        app()->setlocale($locale);
        $to_chuc = ToChuc::paginate(1);
		return view('pages.gioithieuchung',['tochuc'=>$to_chuc,'locale'=>$locale]);
	}

}