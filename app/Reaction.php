<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reaction extends Model
{
    use SoftDeletes;

    public function reactions() {
        return $this->hasMany('App\ReactionPost');
    }
}
