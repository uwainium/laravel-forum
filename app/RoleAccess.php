<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RoleAccess extends Model
{
    use SoftDeletes;

    public function role() {
        return $this->hasOne('App\Role');
    }

    public function category() {
        return $this->hasOne('App\Category');
    }
}
