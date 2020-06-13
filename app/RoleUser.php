<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RoleUser extends Model
{
    use SoftDeletes;

    public function user() {
        $this->hasOne('App\User');
    }

    public function role() {
        $this->hasOne('App\User');
    }
}
