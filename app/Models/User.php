<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $user = 'users';
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
        'address',
        'birthday',
        'is_active'
    ];
    protected $hidden = [
        'password'
    ];
    public function comment()
    {
        return $this->hasMany('App\Models\Comment', 'user_id', 'id');
    }
}
