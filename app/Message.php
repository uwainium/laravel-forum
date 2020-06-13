<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Message extends Model
{
    use SoftDeletes;

    public function author() {
        return $this->hasOne('App\User');
    }

    public function room() {
        return $this->hasOne('App\Room');
    }
}
