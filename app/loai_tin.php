<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class loai_tin extends Model
{
    protected $table = "loai_tin";

    public function tintuc(){
    	return $this->hasMany('App\tin_tuc','id_loai_tin','id');
    }
}
