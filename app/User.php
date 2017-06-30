<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'password', 'level',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public tintuc() {
        return $this->hasMany('App\TinTuc','users_id','id');
    }

    public sukien() {
        return $this->hasMany('App\SuKien','users_id','id');
    }

    public comment() {
        return $this->hasMany('App\comment','users_id','id');
    }
}
