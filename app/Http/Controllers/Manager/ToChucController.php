<?php

namespace App\Http\Controllers\Manager;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\to_chuc;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ToChucRequest;
use File;

class ToChucController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $to_chuc =DB::table('to_chuc')->paginate(10);
        return view('admin.manager_data.to_chuc.index',['tochuc' => $to_chuc]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {  
       // $to_chuc_edit =to_chuc::find($id);
        $to_chuc_edit=DB::table('to_chuc')->where('id','1')->get();
        return view('admin.manager_data.to_chuc.index', ['tochucedit' => $to_chuc_edit]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ToChucRequest $request, $id)
    {
        
        $to_chuc = to_chuc::find($id);
        $to_chuc->gioithieuchung=$request->gioithieuchung;
        $to_chuc->vitrichucnang=$request->vitrichucnang;
        $to_chuc->sumenhtamnhin=$request->sumenhtamnhin;
        $to_chuc->cocau=$request->cocau;
        $to_chuc->doingutrungtam=$request->doingutrungtam;
        $to_chuc->save();
        return Redirect::back()->with('message', 'Bạn đã sửa thông tin tổ chức thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
