<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Follow extends Model
{
    use SoftDeletes;

    public function follower() {
        return $this->hasOne('App\User');
    }

    public function following() {
        return $this->hasOne('App\User');
    }
}
