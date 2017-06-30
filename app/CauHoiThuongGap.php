<?php

namespace App;
use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class CauHoiThuongGap extends Model
{
	use Translatable;
    protected $table = "cau_hoi_thuong_gap";
    protected $fillable = ['slug'];

    public $translatedAttributes = ['CauHoi','CauTraLoi'];
}
