<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    protected $table = 'comment';

    public function user() {
    	return $this->belongsTo('App\User','users_id','id');
    }
}
