<?php
namespace App\Http\Controllers\PageController;

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
		return view('pages.cauhoithuonggap');
	}
}