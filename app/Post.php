<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;

    protected $fillable = ["content"];

    public function author() {
        return $this->hasOne('App\User');
    }

    public function reactions() {
        return $this->hasMany('App\ReactionPost');
    }

    public function parent() {
        return $this->hasOne('App\Post');
    }

    public function replies() {
        return $this->hasMany('App\Post');
    }

    public function thread() {
        return $this->hasOne('App\Thread');
    }

    public function status() {
        return $this->hasOne('App\ModerationStatus');
    }
}
