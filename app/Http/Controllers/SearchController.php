<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\TinTuc;
use App\SuKien;
use App\CongNghe;
use App\HinhSidebar;
use App\LogoDoitac;
use App\LoaiDoiTac;
use App\LoaiTin;

class SearchController extends Controller
{
    public function __construct()
	{
		$hinh_anh_sidebar = HinhSidebar::all();
		$logo_doi_tac = LogoDoitac::all();
		$loai_tin_list = LoaiTin::all();
	    $loai_doi_tac = LoaiDoiTac::all();
		$tin_noi_bat = TinTuc::all()->where('status',1)->take(4);
		
		view()->share('hinhanhsidebar',$hinh_anh_sidebar);
		view()->share('logodoitac',$logo_doi_tac);
		view()->share('loaitin', $loai_tin_list);
		view()->share('loaidoitac', $loai_doi_tac);
		view()->share('tinnoibat',$tin_noi_bat);
	}

    public function searchAll(Request $request) {
        $text_search = $request->text_search;
        $per_page = 3;

        if (!session()->has('language')) {
        session(['language'=>'vi']);
   		}
	    $locale = session()->get('language');
	    app()->setlocale($locale);

        $tin_tuc = DB::table('tin_tuc')->join('tin_tuc_translations','tin_tuc_translations.tin_tuc_id','=','tin_tuc.id')
                    ->where('locale',$locale)
                    ->where('Ten','LIKE','%'.$text_search.'%')
                    ->orWhere('TomTat','LIKE','%'.$text_search.'%')
                    ->orWhere('NoiDung','LIKE','%'.$text_search.'%')->paginate($per_page);
        
        $su_kien = DB::table('su_kien')->join('su_kien_translations','su_kien_translations.su_kien_id','=','su_kien.id')
                    ->where('locale',$locale)
                    ->where('Ten','LIKE','%'.$text_search.'%')
                    ->orWhere('TomTat','LIKE','%'.$text_search.'%')
                    ->orWhere('NoiDung','LIKE','%'.$text_search.'%')->paginate($per_page);

        $cong_nghe = DB::table('cong_nghe')->join('cong_nghe_translations','cong_nghe_translations.cong_nghe_id','=','cong_nghe.id')
                    ->where('locale',$locale)
                    ->where('Ten','LIKE','%'.$text_search.'%')
                    ->orWhere('NoiDung','LIKE','%'.$text_search.'%')->paginate($per_page);

        return view('pages.search_result.all')->with(['locale'=>$locale, 'tintuc'=>$tin_tuc, 'sukien'=>$su_kien, 'congnghe'=>$cong_nghe, 'text_search'=>$text_search]);
    }
}
