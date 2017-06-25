<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class su_kien extends Model
{
    protected $table = "su_kien";

    public function dangkisukien() {
    	return $this->belongsToMany('App\nguoi_dang_ki_su_kien', 'dangki_sukien', 'id_su_kien', 'id_nguoi_dang_ki_su_kien');
    }
}
