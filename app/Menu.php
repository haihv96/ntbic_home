<?php

namespace App;
use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use Translatable;
    protected $table = "menu";

    protected $fillable = ['slug'];

    public $translatedAttributes = ['Ten'];

    public function loaitin(){
    	return $this->hasMany('App\LoaiTin','menu_id','id');
    }
    public function loaidoitac(){
    	return $this->hasMany('App\LoaiDoiTac','menu_id','id');
    }
}
