<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ModerationStatus extends Model
{
    use SoftDeletes;

    public function posts() {
        return $this->hasMany('App\Post');
    }
}
