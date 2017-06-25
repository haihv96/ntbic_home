<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nguoi_dang_ki_su_kien extends Model
{
    protected $table = "nguoi_dang_ki_su_kien";

    public sukien() {
    	return $this->belongsToMany('App\su_kien', 'dangki_sukien', 'id_nguoi_dang_ki_su_kien', 'id_su_kien');
    }
}
