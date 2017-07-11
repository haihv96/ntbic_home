<?php
namespace App\Http\Controllers\PageController;

use App\TinTuc;
use App\LoaiTin;
use App\CauHoi;
use App\ToChuc;
use App\ToChucTranslation;
use App\TuyenDung;
use App\LoaiDoiTac;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use  Illuminate\Database\Eloquent\Builder;


class TinTucController extends Controller
{
	
	public function allNews(){
		if (!session()->has('language')) {
        session(['language'=>'vi']);
   		 }
	    $locale = session()->get('language');
	    app()->setlocale($locale);
		$tin_tuc=TinTuc::paginate(10);
		return view('pages.tin_tuc.allNews',['tintuc'=>$tin_tuc, 'locale'=>$locale]);
	}
	public function newsOfKind($slug){
		if (!session()->has('language')) {
        	session(['language'=>'vi']);
   		}
	    $locale = session()->get('language');
	    app()->setlocale($locale);
		
	    $loai_tin=LoaiTin::where('slug',$slug)->first();
	    $id=$loai_tin->id;
	    $tin_tuc= TinTuc::paginate(10)->where('loai_tin_id',$id);
		$loai_tin_list = LoaiTin::all();
	    $loai_doi_tac = LoaiDoiTac::all();
		$tin_noi_bat = TinTuc::all()->where('status',1)->take(5);
 		return view('pages.tin_tuc.newsOfKind', [ 'tintuc' => $tin_tuc,
		 											'lt' => $loai_tin,
													'loaitin' => $loai_tin_list, 
													'locale'=>$locale, 
													'loaidoitac'=>$loai_doi_tac,
													'tinnoibat'=>$tin_noi_bat]);
	}
	public function detailsNew($slug_loai_tin,$slug_tin_tuc){
		if (!session()->has('language')) {
        session(['language'=>'vi']);
   		 }
	    $locale = session()->get('language');
	    app()->setlocale($locale);
	    //take id loại tin, tên loại tin
	     $loai_tin=LoaiTin::where('slug',$slug_loai_tin)->first();
	     $id=$loai_tin->id;
	  
	    $count= DB::table('to_chuc')->count();
	   // echo $tin_lien_quan;
	   //lấy tin để show ra chi tiếts
        $tin_tuc=TinTuc::where('slug',$slug_tin_tuc)->first();
         //lấy các tin cùng lĩnh vực
        $tin_lien_quan=TinTuc::where([['loai_tin_id',$id],['id','<>',$tin_tuc->id]])->get();
		$loai_tin_list = LoaiTin::all();
	    $loai_doi_tac = LoaiDoiTac::all();
		$tin_noi_bat = TinTuc::all()->where('status',1)->take(5);
  	   return view('pages.tin_tuc.show',['tintuc'=>$tin_tuc,
										'tinlienquan'=>$tin_lien_quan,
										'loaitin' => $loai_tin_list, 
										'locale'=>$locale, 
										'loaidoitac'=>$loai_doi_tac,
										'tinnoibat'=>$tin_noi_bat]);  	    
	}
	
}