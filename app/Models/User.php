<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function phone()
    {
        return $this->hasOne('App\Models\Phone','user_id');
    }

    public function articles()
    {
        return $this->hasMany('App\Models\Article','user_id');
    }

    public function roles()
    {
        return $this->belongsToMany('App\Models\Role','role_user');
    }


}
