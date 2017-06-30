<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChuyenGiaTranslation extends Model
{
    protected $timestamp = false;

    protected $fillable = ['Ten', 'ChucVu'];
}
