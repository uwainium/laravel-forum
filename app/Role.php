<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    use SoftDeletes;

    public function members() {
        return $this->hasMany('App\RoleUser');
    }

    public function accesses() {
        return $this->hasMany('App\RoleAccess');
    }
}
