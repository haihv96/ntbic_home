<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CauHoiThuongGapTranslation extends Model
{
	protected $timestamp = false;
    protected $fillable = ['CauHoi', 'CauTraLoi'];
}
