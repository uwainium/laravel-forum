<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function head() {
        return $this->hasOne('App\Head');
    }

    public function torso() {
        return $this->hasOne('App\Torso');
    }

    public function legs() {
        return $this->hasOne('App\Legs');
    }

    public function gender() {
        return $this->hasOne('App\Gender');
    }

    public function rooms() {
        return $this->hasMany('App\RoomMember');
    }

    public function messages() {
        return $this->hasMany('App\Message');
    }

    public function posts() {
        return $this->hasMany('App\Post');
    }

    public function threads() {
        return $this->hasMany('App\Thread');
    }

    public function category() {
        return $this->hasMany('App\Category');
    }

    public function reactions() {
        return $this->hasMany('App\ReactionPost');
    }

    public function followers() {
        return $this->hasMany('App\Follows', 'follows_id');
    }

    public function follows() {
        return $this->hasMany('App\Follows', 'follower_id');
    }

    public function roles() {
        return $this->hasMany('App\RoleUser');
    }
}
