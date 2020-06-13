<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;

    protected $fillable = ["title", "description", "locked"];

    public function parent() {
        return $this->hasOne('App\Category');
    }

    public function children() {
        return $this->hasMany('App\Category');
    }

    public function threads() {
        return $this->hasMany('App\Thread');
    }

    public function roles() {
        return $this->hasMany('App\RoleAccess');
    }

    public function author() {
        return $this->hasOne('App\User');
    }
}
