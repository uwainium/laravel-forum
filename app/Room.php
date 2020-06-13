<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Room extends Model
{
    use SoftDeletes;

    public function messages() {
        return $this->hasMany('App\Message');
    }

    public function members() {
        return $this->hasMany('App\RoomMember');
    }
}
