<?php

namespace App\Http\Controllers\PageController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\SuKien;

class SuKienController extends Controller
{
    public function danhSachSuKien(){
		if (!session()->has('language')) {
            session(['language'=>'vi']);
        }
        $locale = session()->get('language');
        app()->setlocale($locale);
        $su_kien=SuKien::paginate(10);
		return view('pages.su_kien.danhSachSuKien',['sukien'=>$su_kien, 'locale'=>$locale]);
	}
	public function detailsSuKien($slug){
		if (!session()->has('language')) {
            session(['language'=>'vi']);
        }
        $locale = session()->get('language');
        app()->setlocale($locale);
        $su_kien=SuKien::where('slug',$slug)->first();
		return view('pages.su_kien.detailssukien',['sukien'=>$su_kien, 'locale'=>$locale]);
	}


}
