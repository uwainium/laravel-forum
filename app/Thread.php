<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Thread extends Model
{
    use SoftDeletes;

    public function author() {
        return $this->hasOne('App\User');
    }

    public function posts() {
        return $this->hasMany('App\Post');
    }

    public function category() {
        return $this->hasOne('App\Category');
    }
}
