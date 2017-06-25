<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tin_tuc extends Model
{
    protected $table = "tin_tuc";

    public function loaitin(){
    	return $this->belongsTo('App\loai_tin','id_loai_tin','id');
    }

    public function getOrderById() {
    	return $this->orderBy('id')->get();
    }
}
