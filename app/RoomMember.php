<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RoomMember extends Model
{
    use SoftDeletes;

    public function room() {
        return $this->hasOne('App\Room');
    }

    public function user() {
        return $this->hasOne('App\User');
    }
}
