<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ReactionPost extends Model
{
    use SoftDeletes;

    public function user() {
        return $this->hasOne('App\User');
    }

    public function reaction() {
        return $this->hasOne('App\Reaction');
    }

    public function post() {
        return $this->hasOne('App\Post');
    }
}
