<?php
namespace App\Http\Controllers\PageController;

use App\TinTuc;
use App\LoaiTin;
use App\CauHoi;
use App\ToChuc;
use App\ToChucTranslation;
use App\TuyenDung;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class PageController extends Controller
{
	public function TrangChu(){
		if (!session()->has('language')) {
            session(['language'=>'vi']);
        }
        $locale = session()->get('language');
        app()->setlocale($locale);

		$loai_tin=LoaiTin::all();
		return view('pages.trangchu',['loaitin'=>$loai_tin,'locale'=>$locale]);
	}

	// public function TinTuc(){

	// 	return view('pages.tintuc');
	// }

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
		return view('pages.to_chuc.cauhoithuonggap',['cauhoi'=>$cau_hoi,'locale'=>$locale]);
	}
	public function GioiThieuChung(){
		if (!session()->has('language')) {
            session(['language'=>'vi']);
        }
        $locale = session()->get('language');
        app()->setlocale($locale);
        $to_chuc= ToChuc::first();
		return view('pages.to_chuc.gioithieuchung',['tochuc'=>$to_chuc,'locale'=>$locale]);
	}
	public function ViTriChucNang(){
		if (!session()->has('language')) {
            session(['language'=>'vi']);
        }
        $locale = session()->get('language');
        app()->setlocale($locale);
        $to_chuc= ToChuc::first();
		return view('pages.to_chuc.vitrichucnang',['tochuc'=>$to_chuc,'locale'=>$locale]);
	}
	public function SuMenhTamNhin(){
		if (!session()->has('language')) {
            session(['language'=>'vi']);
        }
        $locale = session()->get('language');
        app()->setlocale($locale);
        $to_chuc= ToChuc::first();
		return view('pages.to_chuc.sumenhtamnhin',['tochuc'=>$to_chuc,'locale'=>$locale]);
	}
	public function CoCau(){
		if (!session()->has('language')) {
            session(['language'=>'vi']);
        }
        $locale = session()->get('language');
        app()->setlocale($locale);
        $to_chuc= ToChuc::first();
		return view('pages.to_chuc.cocau',['tochuc'=>$to_chuc,'locale'=>$locale]);
	}
	public function DoiNguTrungTam(){
		if (!session()->has('language')) {
            session(['language'=>'vi']);
        }
        $locale = session()->get('language');
        app()->setlocale($locale);
        $to_chuc= ToChuc::first();
		return view('pages.to_chuc.doingutrungtam',['tochuc'=>$to_chuc,'locale'=>$locale]);
	}
	public function TuyenDung(){
		if (!session()->has('language')) {
            session(['language'=>'vi']);
        }
        $locale = session()->get('language');
        app()->setlocale($locale);
        $tuyen_dung= TuyenDung::paginate(10);
		return view('pages.tuyen_dung.index',['tuyendung'=>$tuyen_dung,'locale'=>$locale]);
	}
	public function DetailsTuyenDung($slug){
		if (!session()->has('language')) {
            session(['language'=>'vi']);
        }
        $locale = session()->get('language');
        app()->setlocale($locale);
        $tuyen_dung= TuyenDung::where('slug', $slug)->first();
		return view('pages.tuyen_dung.show',['tuyendung'=>$tuyen_dung,'locale'=>$locale]);
	}


}