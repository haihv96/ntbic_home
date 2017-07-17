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

    public function tintuc(){
    	return $this->hasMany('App\TinTuc','tin_tuc_id','id');
    }
    public function doitac(){
    	return $this->hasMany('App\DoiTac','doi_tac_id','id');
    }
}
