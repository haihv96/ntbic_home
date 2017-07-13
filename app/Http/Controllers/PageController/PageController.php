<?php
namespace App\Http\Controllers\PageController;

use App\TinTuc;
use App\LoaiTin;
use App\CauHoi;
use App\ToChuc;
use App\ToChucTranslation;
use App\TuyenDung;
use App\CongNghe;
use App\ChuyenGia;
use App\DoiTac;
use App\LoaiDoiTac;
use App\HinhSidebar;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;


class PageController extends Controller
{
	public function __construct()
	{
		$hinh_anh_sidebar = HinhSidebar::all();
		view()->share('hinhanhsidebar',$hinh_anh_sidebar);

	}
	public function TrangChu(){
		if (!session()->has('language')) {
             session(['language'=>'vi']);
        }
    	$locale = session()->get('language');
 		app()->setlocale($locale);

		$loai_tin = LoaiTin::all();
		$loai_doi_tac = LoaiDoiTac::all();
		$doi_tac = DoiTac::take(4);
		$tin_tuc = TinTuc::all()->sortByDesc('created_at')->take(5);
		$tin_noi_bat = TinTuc::all()->where('status',1)->take(4);
 		return view('pages.trangchu', [ 'loaitin' => $loai_tin, 
										'locale'=>$locale, 
										'loaidoitac'=>$loai_doi_tac,
										'doitac'=>$doi_tac,
										'tinnoibat'=>$tin_noi_bat,
										'tintuc'=>$tin_tuc]);
	}

	// public function TinTuc(){

	// 	return view('pages.tintuc');
	// }

	public function LienHe(){
		if (!session()->has('language')) {
            session(['language'=>'vi']);
        }
        $locale = session()->get('language');
        app()->setlocale($locale);

		$loai_tin = LoaiTin::all();
		$loai_doi_tac = LoaiDoiTac::all();
		return view('pages.lienhe', [ 'loaitin' => $loai_tin, 
										'locale'=>$locale, 
										'loaidoitac'=>$loai_doi_tac]);
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
        $cau_hoi = CauHoi::paginate(10)->where('CauHoi','<>','');
		$loai_tin = LoaiTin::all();
		$loai_doi_tac = LoaiDoiTac::all();
		return view('pages.to_chuc.cauhoithuonggap',['cauhoi'=>$cau_hoi,
													'loaitin' => $loai_tin, 
													'locale'=>$locale, 
													'loaidoitac'=>$loai_doi_tac]);
	}
	public function GioiThieuChung(){
		if (!session()->has('language')) {
            session(['language'=>'vi']);
        }
        $locale = session()->get('language');
        app()->setlocale($locale);
        $to_chuc= ToChuc::first();
		$loai_tin = LoaiTin::all();
		$loai_doi_tac = LoaiDoiTac::all();
		$tin_noi_bat = TinTuc::all()->where('status',1)->take(5);
		return view('pages.to_chuc.gioithieuchung',['tochuc'=>$to_chuc,
													'locale'=>$locale,
													'loaitin' => $loai_tin, 
													'loaidoitac'=>$loai_doi_tac,
													'tinnoibat'=>$tin_noi_bat]);
	}
	public function ViTriChucNang(){
		if (!session()->has('language')) {
            session(['language'=>'vi']);
        }
        $locale = session()->get('language');
        app()->setlocale($locale);
        $to_chuc= ToChuc::first();
		$loai_tin = LoaiTin::all();
		$loai_doi_tac = LoaiDoiTac::all();
		$tin_noi_bat = TinTuc::all()->where('status',1)->take(4);
		return view('pages.to_chuc.vitrichucnang',['tochuc'=>$to_chuc,
													'locale'=>$locale,
													'loaitin' => $loai_tin, 
													'loaidoitac'=>$loai_doi_tac,
													'tinnoibat'=>$tin_noi_bat]);
	}
	public function SuMenhTamNhin(){
		if (!session()->has('language')) {
            session(['language'=>'vi']);
        }
        $locale = session()->get('language');
        app()->setlocale($locale);
        $to_chuc= ToChuc::first();
		$loai_tin = LoaiTin::all();
		$loai_doi_tac = LoaiDoiTac::all();
		$tin_noi_bat = TinTuc::all()->where('status',1)->take(4);
		return view('pages.to_chuc.sumenhtamnhin',['tochuc'=>$to_chuc,
													'locale'=>$locale,
													'loaitin' => $loai_tin, 
													'loaidoitac'=>$loai_doi_tac,
													'tinnoibat'=>$tin_noi_bat]);
	}
	public function CoCau(){
		if (!session()->has('language')) {
            session(['language'=>'vi']);
        }
        $locale = session()->get('language');
        app()->setlocale($locale);
        $to_chuc= ToChuc::first();
		$loai_tin = LoaiTin::all();
		$loai_doi_tac = LoaiDoiTac::all();
		$tin_noi_bat = TinTuc::all()->where('status',1)->take(4);
		return view('pages.to_chuc.cocau',['tochuc'=>$to_chuc,
													'locale'=>$locale,
													'loaitin' => $loai_tin, 
													'loaidoitac'=>$loai_doi_tac,
													'tinnoibat'=>$tin_noi_bat]);
	}
	public function DoiNguTrungTam(){
		if (!session()->has('language')) {
            session(['language'=>'vi']);
        }
        $locale = session()->get('language');
        app()->setlocale($locale);
        $to_chuc= ToChuc::first();
		$loai_tin = LoaiTin::all();
		$loai_doi_tac = LoaiDoiTac::all();
		$tin_noi_bat = TinTuc::all()->where('status',1)->take(4);
		return view('pages.to_chuc.doingutrungtam',['tochuc'=>$to_chuc,
													'locale'=>$locale,
													'loaitin' => $loai_tin, 
													'loaidoitac'=>$loai_doi_tac,
													'tinnoibat'=>$tin_noi_bat]);
	}
	public function TuyenDung(){
		if (!session()->has('language')) {
            session(['language'=>'vi']);
        }
        $locale = session()->get('language');
        app()->setlocale($locale);
        $tuyen_dung= TuyenDung::orderBy('created_at','desc')->paginate(10)->where('NoiDungTuyenDung','<>','');
		$loai_tin = LoaiTin::all();
		$loai_doi_tac = LoaiDoiTac::all();
		$tin_noi_bat = TinTuc::all()->where('status',1)->take(4);
		return view('pages.tuyen_dung.index',['tuyendung'=>$tuyen_dung,
											'locale'=>$locale,
											'loaitin' => $loai_tin, 
											'loaidoitac'=>$loai_doi_tac,
											'tinnoibat'=>$tin_noi_bat]);
	}
	public function DetailsTuyenDung($slug){
		if (!session()->has('language')) {
            session(['language'=>'vi']);
        }
        $locale = session()->get('language');
        app()->setlocale($locale);
        $tuyen_dung= TuyenDung::where('slug', $slug)->first();
		$loai_tin = LoaiTin::all();
		$loai_doi_tac = LoaiDoiTac::all();
		$tin_noi_bat = TinTuc::all()->where('status',1)->take(4);
		return view('pages.tuyen_dung.show',['tuyendung'=>$tuyen_dung,
											'locale'=>$locale,
											'loaitin' => $loai_tin, 
											'loaidoitac'=>$loai_doi_tac,
											'tinnoibat'=>$tin_noi_bat]);
	}

	public function CongNghe(){
		if (!session()->has('language')) {
            session(['language'=>'vi']);
        }
        $locale = session()->get('language');
        app()->setlocale($locale);
        $cong_nghe= CongNghe::orderBy('created_at','desc')->paginate(10)->where('NoiDung','<>','');
		$loai_tin = LoaiTin::all();
		$loai_doi_tac = LoaiDoiTac::all();
		$tin_noi_bat = TinTuc::all()->where('status',1)->take(4);
		return view('pages.cong_nghe.index',['congnghe'=>$cong_nghe,
											'locale'=>$locale,
											'loaitin' => $loai_tin, 
											'loaidoitac'=>$loai_doi_tac,
											'tinnoibat'=>$tin_noi_bat]);
	}
	public function DetailsCongNghe($slug){
		if (!session()->has('language')) {
            session(['language'=>'vi']);
        }
        $locale = session()->get('language');
        app()->setlocale($locale);
        $cong_nghe= CongNghe::where('slug', $slug)->first();
		$loai_tin = LoaiTin::all();
		$loai_doi_tac = LoaiDoiTac::all();
		$tin_noi_bat = TinTuc::all()->where('status',1)->take(4);
		return view('pages.cong_nghe.show',['congnghe'=>$cong_nghe,
											'locale'=>$locale,
											'loaitin' => $loai_tin, 
											'loaidoitac'=>$loai_doi_tac,
											'tinnoibat'=>$tin_noi_bat]);
	}

	public function ChuyenGia() {
		if (!session()->has('language')) {
            session(['language'=>'vi']);
        }
        $locale = session()->get('language');
        app()->setlocale($locale);

		$chuyen_gia = ChuyenGia::paginate(10)->where('Ten','<>','');
		$loai_tin = LoaiTin::all();
		$loai_doi_tac = LoaiDoiTac::all();
		$tin_noi_bat = TinTuc::all()->where('status',1)->take(4);
		return view('pages.chuyengia',['chuyengia'=>$chuyen_gia,
											'locale'=>$locale,
											'loaitin' => $loai_tin, 
											'loaidoitac'=>$loai_doi_tac,
											'tinnoibat'=>$tin_noi_bat]);
	}

}