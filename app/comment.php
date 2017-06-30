<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    protected $table = 'comment';

    public user() {
    	return $this->belongsTo('App\User','users_id','id');
    }
}
